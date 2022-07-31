<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'أخبار',
                'slug' => 'news',
                'picture' => NULL,
                'show_main' => NULL,
                'main_design' => NULL,
                'description' => NULL,
                'is_active' => NULL,
                'items' => NULL,
                'items_plugin' => NULL,
                'color' => NULL,
                'created_at' => '2020-03-03 13:49:00',
                'updated_at' => '2020-03-10 07:06:28',
            ),
            1 => 
            array (
                'id' => 2,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'إصدارات',
                'slug' => 'PUBLICATIONS',
                'picture' => NULL,
                'show_main' => NULL,
                'main_design' => NULL,
                'description' => NULL,
                'is_active' => NULL,
                'items' => NULL,
                'items_plugin' => NULL,
                'color' => NULL,
                'created_at' => '2020-03-03 13:49:00',
                'updated_at' => '2020-03-10 07:06:45',
            ),
            2 => 
            array (
                'id' => 3,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'الحملات',
                'slug' => 'campaigns',
                'picture' => NULL,
                'show_main' => NULL,
                'main_design' => NULL,
                'description' => NULL,
                'is_active' => NULL,
                'items' => NULL,
                'items_plugin' => NULL,
                'color' => NULL,
                'created_at' => '2020-03-10 05:17:13',
                'updated_at' => '2020-03-10 07:06:07',
            ),
        ));
        
        
    }
}