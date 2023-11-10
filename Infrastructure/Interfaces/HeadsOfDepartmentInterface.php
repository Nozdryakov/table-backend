<?php

namespace Infrastructure\Interfaces;

use Illuminate\Http\Request;

interface HeadsOfDepartmentInterface
{
    public function getHeadOfDepartment(Request $request): array;

    public function createHeadOfDepartment(string $surname, string $name, string $f_name, int $gender, string $date_of_birth, string $date_of_start): bool;
    public function deleteHeadOfDepartment(int $id): bool;
    public function updateHeadOfDepartment(int $id, string $surname, string $name, string $f_name, int $gender, string $date_of_birth, string $date_of_start): bool;
}
