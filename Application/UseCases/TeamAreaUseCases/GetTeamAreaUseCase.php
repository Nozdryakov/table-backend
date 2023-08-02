<?php

namespace Application\UseCases\TeamAreaUseCases;

use Infrastructure\Repositories\TeamAreaRepository;

class GetTeamAreaUseCase
{
    private $teamAreaRepository;

    public function __construct(TeamAreaRepository $teamAreaRepository)
    {
        $this->teamAreaRepository = $teamAreaRepository;
    }

    public function execute(): array
    {
        return $this->teamAreaRepository->getTeamArea();
    }
}
