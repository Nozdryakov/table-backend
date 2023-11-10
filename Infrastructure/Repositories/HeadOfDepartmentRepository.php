<?php

namespace Infrastructure\Repositories;

use Illuminate\Http\Request;
use Infrastructure\Interfaces\HeadsOfDepartmentInterface;
use App\Models\HeadsOfDepartment;
use Illuminate\Support\Facades\DB;


class HeadOfDepartmentRepository implements HeadsOfDepartmentInterface
{
    public function getHeadOfDepartment(Request $request): array
    {
        $page = $request->input('page', 1);
        return DB::table('heads_of_departments')->paginate(50, ['*'], 'page', $page)->toArray();
    }

    public function createHeadOfDepartment(string $surname, string $name, string $f_name, int $gender, string $date_of_birth, string $date_of_start): bool
    {
        $headsOfDepartment = new HeadsOfDepartment();
        $headsOfDepartment->surname = $surname;
        $headsOfDepartment->name = $name;
        $headsOfDepartment->f_name = $f_name;
        $headsOfDepartment->gender = $gender;
        $headsOfDepartment->date_of_birth = $date_of_birth;
        $headsOfDepartment->date_of_start = $date_of_start;
        $headsOfDepartment->created_at = now();
        return $headsOfDepartment->save();
    }
    public function deleteHeadOfDepartment($id):bool
    {
        $headsOfDepartment = HeadsOfDepartment::find($id);

        if (empty($headsOfDepartment)) {
            return false;
        }
        return $headsOfDepartment->delete();
    }

    public function updateHeadOfDepartment($id, string $surname, string $name, string $f_name, int $gender, string $date_of_birth, string $date_of_start): bool
    {
        $headsOfDepartment = HeadsOfDepartment::find($id);
        if (empty($headsOfDepartment)) return false;
        $headsOfDepartment->surname = $surname;
        $headsOfDepartment->name = $name;
        $headsOfDepartment->f_name = $f_name;
        $headsOfDepartment->gender = $gender;
        $headsOfDepartment->date_of_birth = $date_of_birth;
        $headsOfDepartment->date_of_start = $date_of_start;
        $headsOfDepartment->updated_at = now();
        return  $headsOfDepartment->save();

    }


}
