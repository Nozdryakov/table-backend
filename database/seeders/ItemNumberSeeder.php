<?php
namespace Database\Seeders;
use App\Models\ItemsNumber;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemNumberSeeder extends Seeder
{
    public function run(): void
    {
        ItemsNumber::factory()->count(2000)->create();
    }

    public function down(): void
    {
        DB::table('items_numbers')->truncate();
    }
}
