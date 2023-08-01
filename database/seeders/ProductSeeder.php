<?php
namespace Database\Seeders;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::factory()->count(2000)->create();
    }

    public function down(): void
    {
        DB::table('products')->truncate();
    }
}
