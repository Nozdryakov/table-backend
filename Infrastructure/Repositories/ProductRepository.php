<?php

namespace Infrastructure\Repositories;

use Infrastructure\Interfaces\ProductInterface;
use Illuminate\Support\Facades\DB;

class ProductRepository implements ProductInterface
{
    public function getProduct(): array
    {
        return DB::table('products')->get()->toArray();

    }
}
