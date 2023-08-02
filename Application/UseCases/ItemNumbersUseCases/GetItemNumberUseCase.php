<?php

namespace Application\UseCases\ItemNumbersUseCases;

use Infrastructure\Repositories\ItemNumberRepository;

class GetItemNumberUseCase
{
    private $itemNumberRepository;

    public function __construct(ItemNumberRepository $itemNumberRepository)
    {
        $this->itemNumberRepository = $itemNumberRepository;
    }

    public function execute(): array
    {
        return $this->itemNumberRepository->getItemNumber();
    }
}
