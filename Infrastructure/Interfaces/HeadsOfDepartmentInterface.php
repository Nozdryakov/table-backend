<?php

namespace Infrastructure\Interfaces;

interface HeadsOfDepartmentInterface
{
    public function getHeadsOfDepartment(): array;
    public function deleteHeadOfDepartment($id): bool;
}
