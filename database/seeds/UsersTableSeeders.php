<?php

use Illuminate\Database\Seeder;

class UsersTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
            $users = [
                ['isAdmin' => '1', 'name' => 'Obed', 'email' => 'obed@testcom', 'password' => bcrypt('pass1234')],
                ['isAdmin' => '0', 'name' => 'Deo', 'email' => 'deo@testcom', 'password' => bcrypt('pass1234')]
            ];
            foreach ($users as $user) {
                \App\User::create($user);
            }
        }
    
}
