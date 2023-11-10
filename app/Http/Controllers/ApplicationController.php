<?php

namespace App\Http\Controllers;

use App\Http\Requests\Table\HeadOfDepartmentRequest;
use Application\UseCases\HeadOfDepartmentUseCases\DeleteHeadOfDepartmentUseCase;
use Application\UseCases\HeadOfDepartmentUseCases\UpdateHeadOfDepartmentUseCase;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

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
    private DeleteHeadOfDepartmentUseCase $deleteHeadOfDepartmentUseCase;
    private UpdateHeadOfDepartmentUseCase $updateHeadOfDepartmentUseCase;


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
        $this->deleteHeadOfDepartmentUseCase = app(DeleteHeadOfDepartmentUseCase::class);
        $this->updateHeadOfDepartmentUseCase = app(UpdateHeadOfDepartmentUseCase::class);

    }


    public function index(): array
    {
        return [
            'heads_of_department' => $this->getHeadOfDepartmentUseCase->execute(),
            'departments' => $this->getDepartmentUseCase->execute(),
            'heads_of_area' => $this->getHeadOfAreaUseCase->execute(),
            'areas' => $this->getAreaUseCase->execute(),
            'teams' => $this->getTeamUseCase->execute(),
            'team_areas' => $this->getTeamAreaUseCase->execute(),
            'types_of_items' => $this->getTypesOfItemUseCase->execute(),
            'items_numbers' => $this->getItemNumberUseCase->execute(),
            'products' => $this->getProductUseCase->execute()
        ];
    }



    public function createHeadOfDep(HeadOfDepartmentRequest $request): array
    {
        try {
            $data = $request->validated();

            $result = $this->createHeadOfDepartmentUseCase->execute(
                $data['surname'],
                $data['name'],
                $data['f_name'],
                $data['gender'],
                $data['date_of_birth'],
                $data['date_of_start']
            );
            return ['create' => $result];
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }
    public function deleteHeadOfDep(Request $request)
    {
        $id = $request->input('id');

        if (empty($id)) {
            return [
                'error' => true,
                'delete' => false,
            ];
        }

        $status = $this->deleteHeadOfDepartmentUseCase->execute($id);

        if ($status) {
            return [
                'error' => false,
                'delete' => true,
            ];
        }

        return [
            'error' => true,
            'delete' => false,
        ];
    }

    public function updateHeadOfDep(HeadOfDepartmentRequest $request)
    {
        try {
            $data = $request->validated();
            $id = $request->input('id');

            $result = $this->updateHeadOfDepartmentUseCase->execute(
                $id,
                $data['surname'],
                $data['name'],
                $data['f_name'],
                $data['gender'],
                $data['date_of_birth'],
                $data['date_of_start']
            );
            return ['update' => $result];
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }



}











