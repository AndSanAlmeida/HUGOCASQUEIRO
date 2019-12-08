<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "admin";
        $user->email = "admin@admin.com";
        $user->password = bcrypt('password');
        $user->save();
    }
}
