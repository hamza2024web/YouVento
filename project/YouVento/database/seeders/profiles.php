<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class profiles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Profile::factory(10)->create();
    }
}
