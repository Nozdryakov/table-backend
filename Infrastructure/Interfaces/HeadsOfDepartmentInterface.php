<?php

namespace Infrastructure\Interfaces;

interface HeadsOfDepartmentInterface
{
    public function getHeadsOfDepartment(): array;
    public function deleteHeadOfDepartment($id): bool;
    public function updateHeadOfDepartment($id, string $surname, string $name, string $f_name, int $gender, string $date_of_birth, string $date_of_start): bool;
}
