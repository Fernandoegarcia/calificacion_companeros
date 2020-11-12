<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use  Illuminate\Support\Facades\DB; 
use  Illuminate\Support\Facades\Hash;

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
            'name'=> 'Edah',
            'email'=> 'louisgalmy09@gmail.com',
            'password'=> Hash::make('12345')
        ]);
    }
}
