<?php

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;

class TestUsersTableSeeder extends Seeder
{
    public function run() {
        $this->_createSystemAdmin();
    }

    private function _createSystemAdmin()
    {
        User::create([
            'name' => 'Pond',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Password2021!'),
            'created_at' => now(),
        ]);
    }
}