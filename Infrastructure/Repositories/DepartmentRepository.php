<?php

namespace Infrastructure\Repositories;

use Infrastructure\Interfaces\DepartmentInterface;
use Illuminate\Support\Facades\DB;

class DepartmentRepository implements DepartmentInterface
{
    public function getDepartment(): array
    {
        return DB::table('departments')->get()->toArray();

    }
}
