<?php

namespace Application\UseCases\AreaUseCases;

use Infrastructure\Repositories\AreaRepository;

class GetAreaUseCase
{
    private $areaRepository;

    public function __construct(AreaRepository $areaRepository)
    {
        $this->areaRepository = $areaRepository;
    }

    public function execute(): array
    {
        return $this->areaRepository->getArea();
    }
}
