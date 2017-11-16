<?php

use Illuminate\Database\Seeder;
use App\Entities\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        User::create([
            'cpf'           => '11122233344',
            'name'          => 'João',
            'email'         => 'joao@sistema.com',
            'phone'         => '3599999999',
            'birth'         => '1980-10-01',
            'gender'        => 'M',
            'notes'         => 'asdfghjkl',
            'status'        => 'active',
//            'permission'    => '',
            'password'      => bcrypt('123456'),
        ]);
    }
}
