<?php

namespace Database\Seeders;

use App\Models\Session;
use App\Models\User;
use Illuminate\Database\Seeder;

class SessionsSeeder extends Seeder
{
    public function run()
    {
        // Create 20 sample sessions
        Session::factory()->count(20)->create();
    }
}
