<?php

namespace Application\UseCases\HeadOfDepartmentUseCases;

use Infrastructure\Repositories\HeadOfDepartmentRepository;

class CreateHeadOfDepartmentUseCase
{
    private $createheadOfDepartmentRepository;

    public function __construct(HeadOfDepartmentRepository $createheadOfDepartmentRepository)
    {
        $this->createheadOfDepartmentRepository = $createheadOfDepartmentRepository;
    }

    public function execute(string $surname, string $name, string $f_name, ?int $gender = null, string $date_of_birth, string $date_of_start): bool
    {
        return $this->createheadOfDepartmentRepository->itemCreate($surname, $name, $f_name, $gender, $date_of_birth, $date_of_start);
    }
}
