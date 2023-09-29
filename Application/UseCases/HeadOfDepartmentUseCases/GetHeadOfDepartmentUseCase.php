<?php

namespace Application\UseCases\HeadOfDepartmentUseCases;

use Infrastructure\Repositories\HeadOfDepartmentRepository;

class GetHeadOfDepartmentUseCase
{
    private $headOfDepartmentRepository;

    public function __construct(HeadOfDepartmentRepository $headOfDepartmentRepository)
    {
        $this->headOfDepartmentRepository = $headOfDepartmentRepository;
    }

    public function execute(): array
    {
        return $this->headOfDepartmentRepository->getHeadsOfDepartment();
    }
}
