<?php

namespace Application\UseCases\DepartmentUseCases;

use Infrastructure\Repositories\DepartmentRepository;

class GetDepartmentUseCase
{
    private $departmentRepository;

    public function __construct(DepartmentRepository $departmentRepository)
    {
        $this->departmentRepository = $departmentRepository;
    }

    public function execute(): array
    {
        return $this->departmentRepository->getDepartment();
    }
}
