<?php
namespace Database\Seeders;
use App\Models\TypesOfItem;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypesOfItemSeeder extends Seeder
{
    public function run(): void
    {
        TypesOfItem::factory()->times(2500)->create();
    }

    public function down(): void
    {
        DB::table('types_of_items')->truncate();
    }
}
