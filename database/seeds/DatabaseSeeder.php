<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(VoyagerDatabaseSeeder::class);
         //$this->call(VoyagerDummyDatabaseSeeder::class);
        $this->call(DataRowsTableSeeder::class);
        $this->call(DataTypesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(CategoryPostTableSeeder::class);
        
        $this->call(ContactsTableSeeder::class);
        $this->call(GetinvolvedsTableSeeder::class);
        $this->call(HomeslidersTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(MenuItemsTableSeeder::class);
        
        $this->call(SettingsTableSeeder::class);
        $this->call(StaffTableSeeder::class);
        $this->call(SubscribenewslettersTableSeeder::class);
        $this->call(TranslationsTableSeeder::class);
        
    }
}
