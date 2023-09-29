<?php

namespace Tests\Feature;

use App\Console\Seeders\UpSeederCommand;
use Illuminate\Foundation\Testing\TestCase;


class SeederTest extends TestCase
{
    public function testSeeder()
    {
        $this->artisan('db:seed');

        $folderPath = public_path('../database/seeders/');
        $this->assertDirectoryExists($folderPath);
        $files = glob($folderPath . '/*');
        $this->assertNotEmpty($files);
        $expectedFiles = ['AreaSeeder.php', 'DepartmentSeeder.php'];
        foreach ($expectedFiles as $expectedFile) {
            $this->assertContains($folderPath . '/' . $expectedFile, $files);
        }
    }
    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        // Здесь вы можете настроить приложение Laravel для тестирования.
        // Обычно это включает в себя загрузку конфигурации, установку окружения и т. д.
        $app = require __DIR__.'/../../bootstrap/app.php';

        $app->make(\Illuminate\Contracts\Console\Kernel::class)->bootstrap();

        return $app;
    }
}
