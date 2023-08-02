<?php

namespace Application\UseCases\HeadOfAreaUsecases;

use Infrastructure\Repositories\HeadOfAreaRepository;

class GetHeadOfAreaUseCase
{
    private $headOfAreaRepository;

    public function __construct(HeadOfAreaRepository $headOfAreaRepository)
    {
        $this->headOfAreaRepository = $headOfAreaRepository;
    }

    public function execute(): array
    {
        return $this->headOfAreaRepository->getHeadsOfArea();
    }
}
