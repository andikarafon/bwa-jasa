<?php

namespace Database\Seeders;

//daftarkan modelnya
use App\Models\User;
use Illuminate\Database\Seeder;

//menggunakan password
use Illuminate\Support\Facades\Hash;



class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'              => 'John Doe',
                'email'             => 'john@gmail.com',
                'password'          => Hash::make('Admin@12345'),
                'remember_token'    => NULL,
                'created_at'        => date('Y-m-d h:i:s'),
                'updated_at'        => date('Y-m-d h:i:s'),
            ],
            [
                'name'              => 'Jane Doe',
                'email'             => 'jane@gmail.com',
                'password'          => Hash::make('Admin@12345'),
                'remember_token'    => NULL,
                'created_at'        => date('Y-m-d h:i:s'),
                'updated_at'        => date('Y-m-d h:i:s'),
            ],
        ];

        //panggil modelnya dan diinsert
        User::insert($users);

    }
}
