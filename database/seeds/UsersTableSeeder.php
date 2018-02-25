<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
        DB::table('users')->delete();

        User::insert([
            [
                'id' => '1',
                'name'  => 'admin',
                'email' => 'admin@admin.com',
                'type'=>'admin',
                'contact' => '01712345678',
                'address' => 'East Jatrabari, dhaka 1204',
                'password' => bcrypt('admin') // \Hash::make('shadhin')
            ],[
                'id' => '2',
                'name'  => 'user1',
                'email' => 'user1@user.com',
                'type'=>'user',
                'contact' => '01665432108',
                'address' => 'dhanmondi, dhaka 1204',
                'password' => bcrypt('user1') // \Hash::make('shadhin')
            ],[
                'id' => '3',
                'name'  => 'user2',
                'email' => 'user2@user.com',
                'type'=>'user',
                'contact' => '01712345678',
                'address' => 'Narayangonj, dhaka ',
                'password' => bcrypt('user2')
            ],[
                'id' => '4',
                'name'  => 'user3',
                'email' => 'user3@user.com',
                'type'=>'user',
                'contact' => '01634454508',
                'address' => 'Nimtoli bus stand, dhaka ',
                'password' => bcrypt('user3')
            ],[
                'id' => '5',
                'name'  => 'Monir chowdhuri',
                'email' => 'Monir@laravel.com',
                'type'=>'user',
                'contact' => '0176546678',
                'address' => 'East jurain, dhaka 1204',
                'password' => bcrypt('Kamal')
            ],[
                'id' => '6',
                'name'  => 'Shahin Mia',
                'email' => 'shahin@laravel.com',
                'type'=>'user',
                'contact' => '0176546678',
                'address' => 'Mohammadbag, dhaka 1204',
                'password' => bcrypt('Kamal')
            ]
        ]);
    }
    }
}
