<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::factory()->create([
            'name' => 'Luiz F. Lima',
            'email' => 'lf.system@outlook.com',
            'password' => 'password', // password
        ]);
    }
}
