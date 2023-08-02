<?php

namespace App\Console;

use App\Console\Seeders\CreateSeederCommand;
use App\Console\Seeders\DownSeederCommand;
use App\Console\Seeders\UpSeederCommand;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the Application's command schedule.
     */
    protected $commands = [
        CreateSeederCommand::class,
        UpSeederCommand::class,
        DownSeederCommand::class
    ];
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();
    }

    /**
     * Register the commands for the Application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
