<?php

namespace Application\UseCases\TeamUseCases;

use Infrastructure\Repositories\TeamRepository;

class GetTeamUseCase
{
    private $teamRepository;

    public function __construct(TeamRepository $teamRepository)
    {
        $this->teamRepository = $teamRepository;
    }

    public function execute(): array
    {
        return $this->teamRepository->getTeam();
    }
}
