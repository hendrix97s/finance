<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InputTest extends TestCase
{
    /** @test */
    public function user_want_new_input()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
}
