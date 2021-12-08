<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CostTest extends TestCase
{
    /** @test */
    public function user_want_get_fixed_costs()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
}
