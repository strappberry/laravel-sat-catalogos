<?php

namespace Strappberry\LaravelSatCatalogos\Commands;

use Dedoc\Scramble\Support\Generator\Schema;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Strappberry\LaravelSatCatalogos\Utils\Schemas;

// TODO: Improve this shit code
class DescargarProcesarCatalogosCommand extends Command
{
    public $signature = 'laravel-sat-catalogos:descargar-catalogos';

    public $description = 'Descargar y procesar los catálogos del SAT';

    public function handle(): int
    {
        $disk = Storage::disk('local');

        $disk->delete('catalogos.zip');
        $disk->deleteDirectory('catalogos');

        $this->info('Descargando catálogos del SAT...');
        $catalogo = Http::timeout(600)
            ->get('https://github.com/phpcfdi/resources-sat-catalogs/archive/refs/heads/master.zip');
        $disk->put('catalogos.zip', $catalogo->body());

        if (!$disk->exists('catalogos.zip')) {
            $this->error('No se pudo descargar el archivo de catálogos');
            return self::FAILURE;
        }

        $this->info('Extrayendo archivo...');
        $zip = new \ZipArchive();
        $zip->open($disk->path('catalogos.zip'));
        $zip->extractTo($disk->path('catalogos'));
        $zip->close();

        $this->info('Borrando tablas existentes...');
        $tableList = $disk->get('catalogos/resources-sat-catalogs-master/database/tables.list');
        $tableList = explode("\n", $tableList);
        foreach ($tableList as $table) {
            $table = trim($table);
            if (empty($table)) {
                continue;
            }

            DB::statement('DROP TABLE IF EXISTS ' . $table);
        }

        $this->info("Creando tablas...");
        $schemaFileList = $disk->files('catalogos/resources-sat-catalogs-master/database/schemas');
        foreach ($schemaFileList  as $filePath) {
            $info = pathinfo($filePath);
            $schema = $disk->get($filePath);

            // Override wrong schemas
            $schema = match ($info['filename']) {
                'cfdi_40_formas_pago' => Schemas::cfdi40FormasPago(),
                'cfdi_40_impuestos' => Schemas::cfdi40Impuestos(),
                'cfdi_40_productos_servicios' => Schemas::cfdi40ProductosServicios(),
                'cfdi_40_regimenes_fiscales' => Schemas::cfdi40RegimenesFiscales(),
                'cfdi_40_reglas_tasa_cuota' => Schemas::cfdi40ReglasTasaCuota(),
                'cfdi_40_usos_cfdi' => Schemas::cfdi40UsosCfdi(),
                'cfdi_formas_pago' => Schemas::cfdiFormasPago(),
                'cfdi_impuestos' => Schemas::cfdiImpuestos(),
                'cfdi_productos_servicios' => Schemas::cfdiProductosServicios(),
                'cfdi_regimenes_fiscales' => Schemas::cfdiRegimenesFiscales(),
                'cfdi_reglas_tasa_cuota' => Schemas::cfdiReglasTasaCuota(),
                'cfdi_usos_cfdi' => Schemas::cfdiUsosCfdi(),
                default => $this->removePrimaryKey($schema),
            };

            $lines = explode("\n", $schema);
            $lines = array_filter($lines);
            if (count($lines) > 1) {
                $lines = array_filter($lines, function ($line) {
                    return strpos($line, 'PRIMARY KEY') === false;
                });
                $lines[count($lines) - 2] = str_replace(',', '', $lines[count($lines) - 2]);
                $schema = implode("\n", $lines);
            }

            DB::statement($schema);
        }

        $this->info("Insertando datos...");
        $dataFileList = $disk->files('catalogos/resources-sat-catalogs-master/database/data');
        foreach ($dataFileList as $filePath) {
            try {
                $data = $disk->get($filePath);
                $this->info("Insertando datos de $filePath");

                $data = str($data)
                    ->replace("PRAGMA foreign_keys=OFF;\n", '')
                    ->replace("BEGIN TRANSACTION;\n", '')
                    ->replace("COMMIT;", '')
                    ->replace('"', '`')
                    ->toString();

                $lines = explode("\n", $data);
                $parts = explode("VALUES", $lines[0]);
                $insert = trim($parts[0]);

                $chunks = array_chunk($lines, 200);
                foreach ($chunks as $chunk) {
                    $chunk = array_filter($chunk);
                    $values = implode(',', $chunk);
                    $values = str($values)
                        ->replace("$insert VALUES", '')
                        ->replace(';', '')
                        ->toString();

                    DB::statement(
                        "{$insert} VALUES {$values};"
                    );
                }
            } catch (Exception $e) {
                $this->error($e->getMessage());
            }
        }

        return self::SUCCESS;
    }

    private function removePrimaryKey(string $schema)
    {
        return str($schema)
            ->replace(', PRIMARY KEY("id")', '')
            ->replace('"', '`')
            ->toString();
    }
}
