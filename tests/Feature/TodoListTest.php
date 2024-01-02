<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TodoListTest extends TestCase
{
    /**
     * A basic feature test example.
     * test run command : php artisan test --filter=TodoListTest
     */
    public function test_example(): void
    {
        // preparation [prepare]  Step - 1

        // action [perform]  Step - 2
        $response = $this->getJson(route('todo.list.index'));
        // dd($response->json());


        // assertion [predict]  Step - 3
        $this->assertEquals(1, count($response->json()));
    }
}
