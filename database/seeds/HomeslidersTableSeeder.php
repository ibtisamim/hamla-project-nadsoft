<?php

use Illuminate\Database\Seeder;

class HomeslidersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('homesliders')->delete();
        
        \DB::table('homesliders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'ﺷﺒﻜﺔ ﻣﺴﻜﺘﺔ',
                'description' => 'ﺛﻠﺜﻲ اﻟﺸﺒﺎﺏ اﻟﻔﻠﺴﻄﻴﻨﻲ ﻻ ﻳﺸﻌﺮﻭﻥ ﺑﺎﻵﻣﺎﻥ ﻟﻠﻤﺸﺎﺭﻛﺔ اﻟﺴﻴﺎﺳﻴﺔ ﻋﺒﺮ اﻻﻧﺘﺮﻧﺖ',
                'active' => 1,
                'created_at' => '2020-03-09 14:31:25',
                'updated_at' => '2020-03-09 14:31:25',
                'image' => 'homesliders\\March2020\\BdSZANlLy5PyMoZw1imH.png',
            ),
        ));
        
        
    }
}