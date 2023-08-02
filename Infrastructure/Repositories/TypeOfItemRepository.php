<?php

namespace Infrastructure\Repositories;

use Infrastructure\Interfaces\TypeOfItemInterface;
use Illuminate\Support\Facades\DB;

class TypeOfItemRepository implements TypeOfItemInterface
{
    public function getTypeOfItem(): array
    {
        return DB::table('types_of_items')->get()->toArray();

    }
}
