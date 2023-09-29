<?php

namespace App\Console\Seeders;

use Illuminate\Console\Command;

class DownSeederCommand extends Command
{
    private array $listClassSeeder = [
        \Database\Seeders\HeadOfDepartmentSeeder::class,
        \Database\Seeders\DepartmentSeeder::class,
        \Database\Seeders\HeadOfAreaSeeder::class,
        \Database\Seeders\AreaSeeder::class,
        \Database\Seeders\TeamSeeder::class,
        \Database\Seeders\TeamsAreaSeeder::class,
        \Database\Seeders\TypesOfItemSeeder::class,
        \Database\Seeders\ItemNumberSeeder::class,
        \Database\Seeders\ProductSeeder::class,

    ];
    protected $signature = 'seeder:down';

    private string $path = 'database/seeders/';

    public function handle()
    {
        $files = scandir($this->path);
        $fileNames = [];
        try {
            foreach ($this->listClassSeeder as $seederClassItem) {
                $activeClass =  $seederClassItem;
                $objActive = new $activeClass();
                $objActive->down();
                print "\e[42mВыполнено: $seederClassItem\e[0m \n";
            }
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
            print "Ошибка выполнения: $e";
        }
    }
}
