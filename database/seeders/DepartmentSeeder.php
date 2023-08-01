<?php
namespace Database\Seeders;
use App\Models\Department;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    public function run(): void
    {
        Department::factory()->times(30)->create();
    }

    public function down(): void
    {
        DB::table('departments')->truncate();
    }
}
