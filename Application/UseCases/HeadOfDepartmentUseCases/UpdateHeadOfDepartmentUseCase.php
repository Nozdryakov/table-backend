<?php

namespace Application\UseCases\HeadOfDepartmentUseCases;

use Infrastructure\Interfaces\HeadsOfDepartmentInterface;
use Infrastructure\Repositories\HeadOfDepartmentRepository;

class UpdateHeadOfDepartmentUseCase
{
    private HeadsOfDepartmentInterface $headOfDepartmentRepository;

    public function __construct(HeadOfDepartmentRepository $headOfDepartmentRepository)
    {
        $this->headOfDepartmentRepository = $headOfDepartmentRepository;
    }

    public function execute(int $id, string $surname, string $name, string $f_name, int $gender, string $date_of_birth, string $date_of_start): bool
    {
        return $this->headOfDepartmentRepository->updateHeadOfDepartment($id, $surname, $name, $f_name, $gender, $date_of_birth, $date_of_start);
    }
}
