<?php

namespace Database\Seeders;

use App\Models\Output;
use Illuminate\Database\Seeder;

class OutputSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Output::factory(100)->create(['user_id' => 1]);
    }
}
