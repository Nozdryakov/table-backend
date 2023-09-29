<?php
namespace Database\Seeders;
use App\Models\Team;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    public function run(): void
    {
        Team::factory()->times(4950)->create();
    }

    public function down(): void
    {
        DB::table('teams')->truncate();
    }
}
