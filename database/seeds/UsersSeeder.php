<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user = User::create([
            'name'=>'Super Admin',
            'status'=>1,
            'email'=>'superadmin@test.com',
            'password'=> bcrypt('1234567890')
          ]);

        $user->assignRole('super-admin');
    }
}
