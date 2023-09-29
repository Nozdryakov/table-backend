<?php

namespace Infrastructure\Repositories;

use Infrastructure\Interfaces\HeadsOfAreaInterface;
use Illuminate\Support\Facades\DB;

class HeadOfAreaRepository implements HeadsOfAreaInterface
{
    public function getHeadsOfArea(): array
    {
        return DB::table('heads_of_areas')->get()->toArray();

    }
}
