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
        $data = DB::table('heads_of_departments')->paginate(10, ['*'], 'page', $page)->toArray();

        return [
            'current_page' => $data['current_page'],
            'data' => $data['data'],
            'first_page_url' => $data['first_page_url'],
            'from' => $data['from'],
            'last_page' => $data['last_page'],
            'last_page_url' => $data['last_page_url'],
            'links' => $data['links'],
        ];
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
        $result = $headsOfDepartment->save();
        return $result;
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
        $result = $headsOfDepartment->save();
        return $result;
    }


}
