<?php
namespace App\Console\Seeders;

use Illuminate\Console\Command;
use function Webmozart\Assert\Tests\StaticAnalysis\string;

class CreateSeederCommand extends Command
{
    protected $signature = 'seeder:create {name}';
    private string $path = 'database/seeders/';
    private string $defaultSeeder = 'app/console/seeders/defaultSeeder.stub';

    public function handle()
    {
        $name = $this->argument('name');
        $fileNames = [];
        try {
            $view = str_replace('{{CLASS_NAME}}', ucfirst($name).'Seeder', file_get_contents($this->defaultSeeder));
            $newFile = fopen($this->path . ucfirst($name).'Seeder' . '.php', 'w');
            fwrite($newFile, $view);

            $this->info("Сидер создан: .$this->path$name Seeder.php");

            $files = scandir($this->path);
            foreach ($files as $file) {
                if ($file === '.' || $file === '..') {
                    continue;
                }

                $fileNames[] = $file;
            }
                echo "\e[43m Список сидеров:\e[0m". "\n";
            foreach ($fileNames as $value) {
                echo "\e[32;1m" . $value . "\e[0m" . "\n";

            }
        } catch (\ErrorException $e) {
            $this->error("Возникла ошибка: $e");
        }

    }
}
