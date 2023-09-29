<?php

namespace Infrastructure\Repositories;
use Infrastructure\Interfaces\ItemNumberInterface;
use Illuminate\Support\Facades\DB;

class ItemNumberRepository implements ItemNumberInterface
{
    public function getItemNumber(): array
    {
        return DB::table('items_numbers')->get()->toArray();

    }
}
