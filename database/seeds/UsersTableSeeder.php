<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'juan',
            'email' => 'juan@gmail.com',
            'tipo' => 'Admin',
            'password' => bcrypt('123456'),
            'cc' => '112155555',
            'telefono' => '3213614951',
        ]);

        DB::table('users')->insert([
            'name' => 'camilo',
            'email' => 'camilo@gmail.com',
            'tipo' => 'Empleado',
            'password' => bcrypt('123456'),
            'cc' => '5641561564185',
            'telefono' => '3134640207',
        ]);


    }
}
