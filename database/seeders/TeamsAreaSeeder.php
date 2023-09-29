<?php
namespace Database\Seeders;
use App\Models\TeamsArea;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamsAreaSeeder extends Seeder
{
    public function run(): void
    {
        TeamsArea::factory()->times(2000)->create();
    }

    public function down(): void
    {
        DB::table('teams_areas')->truncate();
    }
}
