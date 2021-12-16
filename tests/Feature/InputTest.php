<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class InputTest extends TestCase
{
    /** @test */
    public function user_want_new_input()
    {
    
    
        $this->withoutExceptionHandling();

        $user = User::factory()->create();
        Auth::login($user);
        
        $payload = [
            'user_id' =>Auth::user()->id,
            'type' => 'fixed',
            'description' => 'Test input',
            'value' => 5.5,
            'input_at' => now(),
        ];
        
        $response = $this->post(route('internal.input.store'), $payload);
        $response->assertStatus(200);
    }
}
