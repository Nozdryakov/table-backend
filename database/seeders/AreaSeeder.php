<?php
namespace Database\Seeders;
use App\Models\Area;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreaSeeder extends Seeder
{
    public function run(): void
    {
        Area::factory()->times(100)->create();
    }

    public function down(): void
    {
        DB::table('areas')->truncate();
    }
}
