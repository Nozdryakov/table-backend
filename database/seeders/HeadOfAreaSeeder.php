<?php
namespace Database\Seeders;
use App\Models\HeadsOfArea;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeadOfAreaSeeder extends Seeder
{
    public function run(): void
    {
        HeadsOfArea::factory()->times(100)->create();
    }

    public function down(): void
    {
        DB::table('heads_of_areas')->truncate();
    }
}
