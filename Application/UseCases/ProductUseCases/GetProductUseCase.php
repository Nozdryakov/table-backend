<?php

namespace Application\UseCases\ProductUseCases;

use Infrastructure\Repositories\ProductRepository;

class GetProductUseCase
{
    private $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function execute(): array
    {
        return $this->productRepository->getProduct();
    }
}
