<?php

namespace Application\UseCases\TypeOfItemUseCases;


use Infrastructure\Repositories\TypeOfItemRepository;

class GetTypesOfItemUseCase
{
    private $typeOfItemRepository;

    public function __construct(TypeOfItemRepository $typeOfItemRepository)
    {
        $this->typeOfItemRepository = $typeOfItemRepository;
    }

    public function execute(): array
    {
        return $this->typeOfItemRepository->getTypeOfItem();
    }
}
