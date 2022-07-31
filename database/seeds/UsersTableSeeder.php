<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$iUtVGbyHgOpYb62SIAsrme/PO9wYfbkh9tqxeV2qOdOThTChiXnZa',
                'remember_token' => 'PcHGzgqrZeCDwBt8pTqcGYTWPu0hyNtyw4jw509pXS4gESjg5nvut5upNC9T',
                'settings' => NULL,
                'created_at' => '2020-03-03 13:49:01',
                'updated_at' => '2020-03-03 13:49:01',
            ),
        ));
        
        
    }
}