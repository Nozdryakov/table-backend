<?php

namespace Application\UseCases\HeadOfDepartmentUseCases;

use Infrastructure\Interfaces\HeadsOfDepartmentInterface;
use Infrastructure\Repositories\HeadOfDepartmentRepository;

class CreateHeadOfDepartmentUseCase
{
    private HeadsOfDepartmentInterface $createheadOfDepartmentRepository;

    public function __construct(HeadOfDepartmentRepository $createheadOfDepartmentRepository)
    {
        $this->createheadOfDepartmentRepository = $createheadOfDepartmentRepository;
    }

    public function execute(string $surname, string $name, string $f_name, ?int $gender = null, string $date_of_birth, string $date_of_start): bool
    {
        return $this->createheadOfDepartmentRepository->createHeadOfDepartment($surname, $name, $f_name, $gender, $date_of_birth, $date_of_start);
    }
}
