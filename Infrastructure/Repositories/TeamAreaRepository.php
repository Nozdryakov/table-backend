<?php

namespace Infrastructure\Repositories;

use Infrastructure\Interfaces\TeamAreaInterface;
use Illuminate\Support\Facades\DB;

class TeamAreaRepository implements TeamAreaInterface
{
    public function getTeamArea(): array
    {
        return DB::table('teams_areas')->get()->toArray();

    }
}
