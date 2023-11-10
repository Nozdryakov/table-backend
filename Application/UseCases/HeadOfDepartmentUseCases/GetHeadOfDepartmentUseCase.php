<?php

namespace Application\UseCases\HeadOfDepartmentUseCases;

use Illuminate\Http\Request;
use Infrastructure\Interfaces\HeadsOfDepartmentInterface;
use Infrastructure\Repositories\HeadOfDepartmentRepository;

class GetHeadOfDepartmentUseCase
{
    private HeadsOfDepartmentInterface $headOfDepartmentRepository;

    public function __construct(HeadOfDepartmentRepository $headOfDepartmentRepository)
    {
        $this->headOfDepartmentRepository = $headOfDepartmentRepository;
    }

    public function execute(Request $request): array
    {
        return $this->headOfDepartmentRepository->getHeadOfDepartment($request);
    }
}
