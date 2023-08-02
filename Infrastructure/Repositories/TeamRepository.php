<?php

namespace Infrastructure\Repositories;

use Infrastructure\Interfaces\TeamInterface;
use Illuminate\Support\Facades\DB;

class TeamRepository implements TeamInterface
{
    public function getTeam(): array
    {
        return DB::table('teams')->get()->toArray();

    }
}
