<?php

namespace Application\UseCases\HeadOfDepartmentUseCases;

use Infrastructure\Interfaces\HeadsOfDepartmentInterface;
use Infrastructure\Repositories\HeadOfDepartmentRepository;

class DeleteHeadOfDepartmentUseCase
{
    private HeadsOfDepartmentInterface $headOfDepartmentRepository;

    public function __construct(HeadOfDepartmentRepository $headOfDepartmentRepository)
    {
        $this->headOfDepartmentRepository = $headOfDepartmentRepository;
    }

    public function execute(int $id): bool
    {
        return $this->headOfDepartmentRepository->deleteHeadOfDepartment($id);
    }
}
