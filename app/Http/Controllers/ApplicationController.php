<?php

namespace App\Http\Controllers;

use Application\UseCases\AreaUseCases\GetAreaUseCase;
use Application\UseCases\DepartmentUseCases\GetDepartmentUseCase;
use Application\UseCases\HeadOfAreaUsecases\GetHeadOfAreaUseCase;
use Application\UseCases\HeadOfDepartmentUseCases\CreateHeadOfDepartmentUseCase;
use Application\UseCases\HeadOfDepartmentUseCases\GetHeadOfDepartmentUseCase;
use Application\UseCases\ItemNumbersUseCases\GetItemNumberUseCase;
use Application\UseCases\ProductUseCases\GetProductUseCase;
use Application\UseCases\TeamAreaUseCases\GetTeamAreaUseCase;
use Application\UseCases\TeamUseCases\GetTeamUseCase;
use Application\UseCases\TypeOfItemUseCases\GetTypesOfItemUseCase;


class ApplicationController extends Controller
{
    private GetHeadOfDepartmentUseCase $getHeadOfDepartmentUseCase;
    private GetDepartmentUseCase $getDepartmentUseCase;
    private GetHeadOfAreaUseCase $getHeadOfAreaUseCase;
    private GetAreaUseCase $getAreaUseCase;
    private GetTeamUseCase $getTeamUseCase;
    private GetTeamAreaUseCase $getTeamAreaUseCase;
    private GetTypesOfItemUseCase $getTypesOfItemUseCase;
    private GetItemNumberUseCase $getItemNumberUseCase;
    private GetProductUseCase $getProductUseCase;
    private CreateHeadOfDepartmentUseCase $createHeadOfDepartmentUseCase;


    public function __construct()
    {
        $this->getHeadOfDepartmentUseCase = app(GetHeadOfDepartmentUseCase::class);
        $this->getDepartmentUseCase = app(GetDepartmentUseCase::class);
        $this->getHeadOfAreaUseCase = app(GetHeadOfAreaUseCase::class);
        $this->getAreaUseCase = app(GetAreaUseCase::class);
        $this->getTeamUseCase = app(GetTeamUseCase::class);
        $this->getTeamAreaUseCase = app(GetTeamAreaUseCase::class);
        $this->getTypesOfItemUseCase = app(GetTypesOfItemUseCase::class);
        $this->getItemNumberUseCase = app(GetItemNumberUseCase::class);
        $this->getProductUseCase = app(GetProductUseCase::class);

        $this->createHeadOfDepartmentUseCase = app(CreateHeadOfDepartmentUseCase::class);

    }


    public function index():array
    {
        return [
            'heads_of_department' => $this->getHeadOfDepartmentUseCase->execute(),
            'departments' => $this->getDepartmentUseCase->execute(),
            'heads_of_area' => $this->getHeadOfAreaUseCase->execute(),
            'areas'=> $this->getAreaUseCase->execute(),
            'teams'=> $this->getTeamUseCase->execute(),
            'team_areas'=>$this->getTeamAreaUseCase->execute(),
            'types_of_items'=>$this->getTypesOfItemUseCase->execute(),
            'items_numbers'=>$this->getItemNumberUseCase->execute(),
            'products'=>$this->getProductUseCase->execute()

        ];
    }

}
