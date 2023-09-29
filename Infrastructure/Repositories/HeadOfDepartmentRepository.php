<?php

namespace Infrastructure\Repositories;

use Infrastructure\Interfaces\HeadsOfDepartmentInterface;
use App\Models\HeadsOfDepartment;
use Illuminate\Support\Facades\DB;

class HeadOfDepartmentRepository implements HeadsOfDepartmentInterface
{
    public function getHeadsOfDepartment(): array
    {
        return DB::table('heads_of_departments')->get()->toArray();

    }
    public function itemCreate(string $surname, string $name, string $f_name, int $gender, string $date_of_birth, string $date_of_start): bool
    {
        $headsOfDepartment = new HeadsOfDepartment();
        $headsOfDepartment->surname = $surname;
        $headsOfDepartment->name = $name;
        $headsOfDepartment->f_name = $f_name;
        $headsOfDepartment->gender = $gender;
        $headsOfDepartment->date_of_birth = $date_of_birth;
        $headsOfDepartment->date_of_start = $date_of_start;
        $headsOfDepartment->created_at = now();
        $result = $headsOfDepartment->save();
        return $result;
    }
}
