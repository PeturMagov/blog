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
        $user = App\User::create([
        	'name' => 'petur',
        	'email' => 'petur@a.com',
        	'password' => 'kokakola',
            'admin' => 1
        ]);

        App\Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads/avatars/1.jpeg',
            'about' => 'from Manole',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com'
        ]);
    }
}
