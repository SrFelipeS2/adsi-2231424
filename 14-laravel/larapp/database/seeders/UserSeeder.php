<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'fullname' => 'Arnold zuaneguer',
            'email' => 'arnold@mail.com',
            'phone' => 98653214785,
            'birthdate' => '1968-08-05',
            'gender' => 'Male',
            'address' => 'Av ',
            'role' => 'Admin',
            'password' => Hash::make('admin')
        ]);

        $user = new User;
        $user->fullname = 'Homero simpson';
        $user->email = 'homero@mail.com';
        $user->phone = 31052369854;
        $user->birthdate = '1990-05-15';
        $user->gender = 'Male';
        $user->address = 'Av siempre viva';
        $user->password = bcrypt('customer');
        $user->save();

    }
}
