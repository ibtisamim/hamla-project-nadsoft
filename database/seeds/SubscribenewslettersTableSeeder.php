<?php

use Illuminate\Database\Seeder;

class SubscribenewslettersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('subscribenewsletters')->delete();
        
        \DB::table('subscribenewsletters')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Ibtihal Shihab',
                'email' => 'admin@admin.com',
                'created_at' => '2020-03-11 11:37:06',
                'updated_at' => '2020-03-11 11:37:06',
            ),
        ));
        
        
    }
}