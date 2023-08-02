<?php

namespace Infrastructure\Repositories;

use Infrastructure\Interfaces\AreaInterface;
use Illuminate\Support\Facades\DB;

class AreaRepository implements AreaInterface
{
    public function getArea(): array
    {
        return DB::table('areas')->get()->toArray();

    }
}
