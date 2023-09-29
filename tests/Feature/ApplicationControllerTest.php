<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;


class ApplicationControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testIndexReturnsExpectedData()
    {
        $controller = new \App\Http\Controllers\ApplicationController();

        $data = $controller->index();

        $this->assertArrayHasKey('heads_of_department', $data);
        $this->assertArrayHasKey('departments', $data);
        $this->assertArrayHasKey('heads_of_area', $data);
        $this->assertArrayHasKey('areas', $data);
        $this->assertArrayHasKey('teams', $data);
        $this->assertArrayHasKey('team_areas', $data);
        $this->assertArrayHasKey('types_of_items', $data);
        $this->assertArrayHasKey('items_numbers', $data);
        $this->assertArrayHasKey('products', $data);

    }
}
