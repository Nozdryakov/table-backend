<?php
namespace Database\Seeders;
use App\Models\HeadsOfDepartment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeadOfDepartmentSeeder extends Seeder
{
    public function run(): void
    {
        HeadsOfDepartment::factory()->times(1000)->create();
    }

    public function down(): void
    {
        DB::table('heads_of_departments')->truncate();
    }
}
