<?php

namespace Tests\Feature;

use App\Models\Cost;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class CostTest extends TestCase
{

    use refreshDatabase;
    
    /** @test */
    public function user_want_get_fixed_costs()
    {
        $this->login();
        $cost = Cost::factory()->create([
            'type' => 'variable',
            'user_id' => Auth::user()->id
        ]);

        $response = $this->get('/');
        $response->assertStatus(200);
    }
}
