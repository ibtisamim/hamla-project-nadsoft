<?php

use Illuminate\Database\Seeder;

class TranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('translations')->delete();
        
        \DB::table('translations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 5,
                'locale' => 'pt',
                'value' => 'Post',
                'created_at' => '2020-03-03 13:49:07',
                'updated_at' => '2020-03-03 13:49:07',
            ),
            1 => 
            array (
                'id' => 2,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 6,
                'locale' => 'pt',
                'value' => 'Página',
                'created_at' => '2020-03-03 13:49:08',
                'updated_at' => '2020-03-03 13:49:08',
            ),
            2 => 
            array (
                'id' => 3,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 1,
                'locale' => 'pt',
                'value' => 'Utilizador',
                'created_at' => '2020-03-03 13:49:08',
                'updated_at' => '2020-03-03 13:49:08',
            ),
            3 => 
            array (
                'id' => 4,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 4,
                'locale' => 'pt',
                'value' => 'Categoria',
                'created_at' => '2020-03-03 13:49:10',
                'updated_at' => '2020-03-03 13:49:10',
            ),
            4 => 
            array (
                'id' => 5,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 2,
                'locale' => 'pt',
                'value' => 'Menu',
                'created_at' => '2020-03-03 13:49:10',
                'updated_at' => '2020-03-03 13:49:10',
            ),
            5 => 
            array (
                'id' => 6,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 3,
                'locale' => 'pt',
                'value' => 'Função',
                'created_at' => '2020-03-03 13:49:10',
                'updated_at' => '2020-03-03 13:49:10',
            ),
            6 => 
            array (
                'id' => 7,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 5,
                'locale' => 'pt',
                'value' => 'Posts',
                'created_at' => '2020-03-03 13:49:10',
                'updated_at' => '2020-03-03 13:49:10',
            ),
            7 => 
            array (
                'id' => 8,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 6,
                'locale' => 'pt',
                'value' => 'Páginas',
                'created_at' => '2020-03-03 13:49:10',
                'updated_at' => '2020-03-03 13:49:10',
            ),
            8 => 
            array (
                'id' => 9,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 1,
                'locale' => 'pt',
                'value' => 'Utilizadores',
                'created_at' => '2020-03-03 13:49:10',
                'updated_at' => '2020-03-03 13:49:10',
            ),
            9 => 
            array (
                'id' => 10,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 4,
                'locale' => 'pt',
                'value' => 'Categorias',
                'created_at' => '2020-03-03 13:49:10',
                'updated_at' => '2020-03-03 13:49:10',
            ),
            10 => 
            array (
                'id' => 11,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 2,
                'locale' => 'pt',
                'value' => 'Menus',
                'created_at' => '2020-03-03 13:49:10',
                'updated_at' => '2020-03-03 13:49:10',
            ),
            11 => 
            array (
                'id' => 12,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 3,
                'locale' => 'pt',
                'value' => 'Funções',
                'created_at' => '2020-03-03 13:49:11',
                'updated_at' => '2020-03-03 13:49:11',
            ),
            12 => 
            array (
                'id' => 13,
                'table_name' => 'categories',
                'column_name' => 'slug',
                'foreign_key' => 1,
                'locale' => 'pt',
                'value' => 'categoria-1',
                'created_at' => '2020-03-03 13:49:11',
                'updated_at' => '2020-03-03 13:49:11',
            ),
            13 => 
            array (
                'id' => 14,
                'table_name' => 'categories',
                'column_name' => 'name',
                'foreign_key' => 1,
                'locale' => 'pt',
                'value' => 'Categoria 1',
                'created_at' => '2020-03-03 13:49:11',
                'updated_at' => '2020-03-03 13:49:11',
            ),
            14 => 
            array (
                'id' => 15,
                'table_name' => 'categories',
                'column_name' => 'slug',
                'foreign_key' => 2,
                'locale' => 'pt',
                'value' => 'categoria-2',
                'created_at' => '2020-03-03 13:49:11',
                'updated_at' => '2020-03-03 13:49:11',
            ),
            15 => 
            array (
                'id' => 16,
                'table_name' => 'categories',
                'column_name' => 'name',
                'foreign_key' => 2,
                'locale' => 'pt',
                'value' => 'Categoria 2',
                'created_at' => '2020-03-03 13:49:11',
                'updated_at' => '2020-03-03 13:49:11',
            ),
            16 => 
            array (
                'id' => 17,
                'table_name' => 'pages',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'pt',
                'value' => 'Olá Mundo',
                'created_at' => '2020-03-03 13:49:11',
                'updated_at' => '2020-03-03 13:49:11',
            ),
            17 => 
            array (
                'id' => 18,
                'table_name' => 'pages',
                'column_name' => 'slug',
                'foreign_key' => 1,
                'locale' => 'pt',
                'value' => 'ola-mundo',
                'created_at' => '2020-03-03 13:49:11',
                'updated_at' => '2020-03-03 13:49:11',
            ),
            18 => 
            array (
                'id' => 19,
                'table_name' => 'pages',
                'column_name' => 'body',
                'foreign_key' => 1,
                'locale' => 'pt',
                'value' => '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>
<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>',
                'created_at' => '2020-03-03 13:49:11',
                'updated_at' => '2020-03-03 13:49:11',
            ),
            19 => 
            array (
                'id' => 20,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'pt',
                'value' => 'Painel de Controle',
                'created_at' => '2020-03-03 13:49:11',
                'updated_at' => '2020-03-03 13:49:11',
            ),
            20 => 
            array (
                'id' => 21,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 2,
                'locale' => 'pt',
                'value' => 'Media',
                'created_at' => '2020-03-03 13:49:11',
                'updated_at' => '2020-03-03 13:49:11',
            ),
            21 => 
            array (
                'id' => 22,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 12,
                'locale' => 'pt',
                'value' => 'Publicações',
                'created_at' => '2020-03-03 13:49:11',
                'updated_at' => '2020-03-03 13:49:11',
            ),
            22 => 
            array (
                'id' => 23,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 3,
                'locale' => 'pt',
                'value' => 'Utilizadores',
                'created_at' => '2020-03-03 13:49:11',
                'updated_at' => '2020-03-03 13:49:11',
            ),
            23 => 
            array (
                'id' => 24,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 11,
                'locale' => 'pt',
                'value' => 'Categorias',
                'created_at' => '2020-03-03 13:49:11',
                'updated_at' => '2020-03-03 13:49:11',
            ),
            24 => 
            array (
                'id' => 25,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 13,
                'locale' => 'pt',
                'value' => 'Páginas',
                'created_at' => '2020-03-03 13:49:11',
                'updated_at' => '2020-03-03 13:49:11',
            ),
            25 => 
            array (
                'id' => 26,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 4,
                'locale' => 'pt',
                'value' => 'Funções',
                'created_at' => '2020-03-03 13:49:12',
                'updated_at' => '2020-03-03 13:49:12',
            ),
            26 => 
            array (
                'id' => 27,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 5,
                'locale' => 'pt',
                'value' => 'Ferramentas',
                'created_at' => '2020-03-03 13:49:12',
                'updated_at' => '2020-03-03 13:49:12',
            ),
            27 => 
            array (
                'id' => 28,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 6,
                'locale' => 'pt',
                'value' => 'Menus',
                'created_at' => '2020-03-03 13:49:12',
                'updated_at' => '2020-03-03 13:49:12',
            ),
            28 => 
            array (
                'id' => 29,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 7,
                'locale' => 'pt',
                'value' => 'Base de dados',
                'created_at' => '2020-03-03 13:49:12',
                'updated_at' => '2020-03-03 13:49:12',
            ),
            29 => 
            array (
                'id' => 30,
                'table_name' => 'menu_items',
                'column_name' => 'title',
                'foreign_key' => 10,
                'locale' => 'pt',
                'value' => 'Configurações',
                'created_at' => '2020-03-03 13:49:12',
                'updated_at' => '2020-03-03 13:49:12',
            ),
            30 => 
            array (
                'id' => 31,
                'table_name' => 'categories',
                'column_name' => 'slug',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => 'news',
                'created_at' => '2020-03-10 05:10:55',
                'updated_at' => '2020-03-10 07:06:28',
            ),
            31 => 
            array (
                'id' => 32,
                'table_name' => 'categories',
                'column_name' => 'name',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => 'News',
                'created_at' => '2020-03-10 05:10:56',
                'updated_at' => '2020-03-10 05:10:56',
            ),
            32 => 
            array (
                'id' => 33,
                'table_name' => 'categories',
                'column_name' => 'slug',
                'foreign_key' => 2,
                'locale' => 'en',
                'value' => ' PUBLICATIONS',
                'created_at' => '2020-03-10 05:16:34',
                'updated_at' => '2020-03-10 05:16:34',
            ),
            33 => 
            array (
                'id' => 34,
                'table_name' => 'categories',
                'column_name' => 'name',
                'foreign_key' => 2,
                'locale' => 'en',
                'value' => ' PUBLICATIONS',
                'created_at' => '2020-03-10 05:16:34',
                'updated_at' => '2020-03-10 05:16:34',
            ),
            34 => 
            array (
                'id' => 35,
                'table_name' => 'categories',
                'column_name' => 'slug',
                'foreign_key' => 3,
                'locale' => 'en',
                'value' => 'campaigns',
                'created_at' => '2020-03-10 05:17:14',
                'updated_at' => '2020-03-10 05:17:14',
            ),
            35 => 
            array (
                'id' => 36,
                'table_name' => 'categories',
                'column_name' => 'name',
                'foreign_key' => 3,
                'locale' => 'en',
                'value' => 'CAMPAIGNS',
                'created_at' => '2020-03-10 05:17:14',
                'updated_at' => '2020-03-10 05:17:14',
            ),
            36 => 
            array (
                'id' => 37,
                'table_name' => 'posts',
                'column_name' => 'title',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => 'test',
                'created_at' => '2020-03-10 05:24:24',
                'updated_at' => '2020-03-10 05:24:24',
            ),
            37 => 
            array (
                'id' => 38,
                'table_name' => 'posts',
                'column_name' => 'seo_title',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => 'rr',
                'created_at' => '2020-03-10 05:24:24',
                'updated_at' => '2020-03-10 05:24:24',
            ),
            38 => 
            array (
                'id' => 39,
                'table_name' => 'posts',
                'column_name' => 'excerpt',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => 'tttt',
                'created_at' => '2020-03-10 05:24:24',
                'updated_at' => '2020-03-10 05:24:24',
            ),
            39 => 
            array (
                'id' => 40,
                'table_name' => 'posts',
                'column_name' => 'body',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => '<p>ttttt</p>',
                'created_at' => '2020-03-10 05:24:24',
                'updated_at' => '2020-03-10 05:24:24',
            ),
            40 => 
            array (
                'id' => 41,
                'table_name' => 'posts',
                'column_name' => 'slug',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => 'test',
                'created_at' => '2020-03-10 05:24:24',
                'updated_at' => '2020-03-10 05:24:24',
            ),
            41 => 
            array (
                'id' => 42,
                'table_name' => 'posts',
                'column_name' => 'meta_description',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => 'ffffff',
                'created_at' => '2020-03-10 05:24:24',
                'updated_at' => '2020-03-10 05:24:24',
            ),
            42 => 
            array (
                'id' => 43,
                'table_name' => 'posts',
                'column_name' => 'meta_keywords',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => 'dddd',
                'created_at' => '2020-03-10 05:24:24',
                'updated_at' => '2020-03-10 05:24:24',
            ),
            43 => 
            array (
                'id' => 44,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 29,
                'locale' => 'en',
                'value' => 'ID',
                'created_at' => '2020-03-10 05:27:48',
                'updated_at' => '2020-03-10 05:27:48',
            ),
            44 => 
            array (
                'id' => 45,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 30,
                'locale' => 'en',
                'value' => 'Author',
                'created_at' => '2020-03-10 05:27:48',
                'updated_at' => '2020-03-10 05:27:48',
            ),
            45 => 
            array (
                'id' => 46,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 32,
                'locale' => 'en',
                'value' => 'Title',
                'created_at' => '2020-03-10 05:27:48',
                'updated_at' => '2020-03-10 05:27:48',
            ),
            46 => 
            array (
                'id' => 47,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 42,
                'locale' => 'en',
                'value' => 'SEO Title',
                'created_at' => '2020-03-10 05:27:48',
                'updated_at' => '2020-03-10 05:27:48',
            ),
            47 => 
            array (
                'id' => 48,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 33,
                'locale' => 'en',
                'value' => 'Excerpt',
                'created_at' => '2020-03-10 05:27:48',
                'updated_at' => '2020-03-10 05:27:48',
            ),
            48 => 
            array (
                'id' => 49,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 34,
                'locale' => 'en',
                'value' => 'Body',
                'created_at' => '2020-03-10 05:27:48',
                'updated_at' => '2020-03-10 05:27:48',
            ),
            49 => 
            array (
                'id' => 50,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 35,
                'locale' => 'en',
                'value' => 'Post Image',
                'created_at' => '2020-03-10 05:27:49',
                'updated_at' => '2020-03-10 05:27:49',
            ),
            50 => 
            array (
                'id' => 51,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 36,
                'locale' => 'en',
                'value' => 'Slug',
                'created_at' => '2020-03-10 05:27:49',
                'updated_at' => '2020-03-10 05:27:49',
            ),
            51 => 
            array (
                'id' => 52,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 37,
                'locale' => 'en',
                'value' => 'Meta Description',
                'created_at' => '2020-03-10 05:27:49',
                'updated_at' => '2020-03-10 05:27:49',
            ),
            52 => 
            array (
                'id' => 53,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 38,
                'locale' => 'en',
                'value' => 'Meta Keywords',
                'created_at' => '2020-03-10 05:27:49',
                'updated_at' => '2020-03-10 05:27:49',
            ),
            53 => 
            array (
                'id' => 54,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 39,
                'locale' => 'en',
                'value' => 'Status',
                'created_at' => '2020-03-10 05:27:49',
                'updated_at' => '2020-03-10 05:27:49',
            ),
            54 => 
            array (
                'id' => 55,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 43,
                'locale' => 'en',
                'value' => 'Featured',
                'created_at' => '2020-03-10 05:27:49',
                'updated_at' => '2020-03-10 05:27:49',
            ),
            55 => 
            array (
                'id' => 56,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 57,
                'locale' => 'en',
                'value' => 'Is Active',
                'created_at' => '2020-03-10 05:27:49',
                'updated_at' => '2020-03-10 05:27:49',
            ),
            56 => 
            array (
                'id' => 57,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 58,
                'locale' => 'en',
                'value' => 'Watermark',
                'created_at' => '2020-03-10 05:27:49',
                'updated_at' => '2020-03-10 05:27:49',
            ),
            57 => 
            array (
                'id' => 58,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 40,
                'locale' => 'en',
                'value' => 'Created At',
                'created_at' => '2020-03-10 05:27:49',
                'updated_at' => '2020-03-10 05:27:49',
            ),
            58 => 
            array (
                'id' => 59,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 41,
                'locale' => 'en',
                'value' => 'Updated At',
                'created_at' => '2020-03-10 05:27:49',
                'updated_at' => '2020-03-10 05:27:49',
            ),
            59 => 
            array (
                'id' => 60,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 56,
                'locale' => 'en',
                'value' => 'Post Category',
                'created_at' => '2020-03-10 05:27:49',
                'updated_at' => '2020-03-10 05:27:49',
            ),
            60 => 
            array (
                'id' => 61,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 5,
                'locale' => 'en',
                'value' => 'Post',
                'created_at' => '2020-03-10 05:27:49',
                'updated_at' => '2020-03-10 05:27:49',
            ),
            61 => 
            array (
                'id' => 62,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 5,
                'locale' => 'en',
                'value' => 'Posts',
                'created_at' => '2020-03-10 05:27:49',
                'updated_at' => '2020-03-10 05:27:49',
            ),
            62 => 
            array (
                'id' => 93,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 22,
                'locale' => 'en',
                'value' => 'ID',
                'created_at' => '2020-03-10 07:42:46',
                'updated_at' => '2020-03-10 07:42:46',
            ),
            63 => 
            array (
                'id' => 94,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 23,
                'locale' => 'en',
                'value' => 'Parent',
                'created_at' => '2020-03-10 07:42:46',
                'updated_at' => '2020-03-10 07:42:46',
            ),
            64 => 
            array (
                'id' => 95,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 24,
                'locale' => 'en',
                'value' => 'Order',
                'created_at' => '2020-03-10 07:42:46',
                'updated_at' => '2020-03-10 07:42:46',
            ),
            65 => 
            array (
                'id' => 96,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 25,
                'locale' => 'en',
                'value' => 'Name',
                'created_at' => '2020-03-10 07:42:46',
                'updated_at' => '2020-03-10 07:42:46',
            ),
            66 => 
            array (
                'id' => 97,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 26,
                'locale' => 'en',
                'value' => 'Slug',
                'created_at' => '2020-03-10 07:42:46',
                'updated_at' => '2020-03-10 07:42:46',
            ),
            67 => 
            array (
                'id' => 98,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 27,
                'locale' => 'en',
                'value' => 'Created At',
                'created_at' => '2020-03-10 07:42:46',
                'updated_at' => '2020-03-10 07:42:46',
            ),
            68 => 
            array (
                'id' => 99,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 28,
                'locale' => 'en',
                'value' => 'Updated At',
                'created_at' => '2020-03-10 07:42:46',
                'updated_at' => '2020-03-10 07:42:46',
            ),
            69 => 
            array (
                'id' => 100,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 4,
                'locale' => 'en',
                'value' => 'Category',
                'created_at' => '2020-03-10 07:42:46',
                'updated_at' => '2020-03-10 07:42:46',
            ),
            70 => 
            array (
                'id' => 101,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 4,
                'locale' => 'en',
                'value' => 'Categories',
                'created_at' => '2020-03-10 07:42:47',
                'updated_at' => '2020-03-10 07:42:47',
            ),
            71 => 
            array (
                'id' => 102,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 86,
                'locale' => 'en',
                'value' => 'category_post',
                'created_at' => '2020-03-10 07:57:37',
                'updated_at' => '2020-03-10 07:57:37',
            ),
            72 => 
            array (
                'id' => 103,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 87,
                'locale' => 'en',
                'value' => 'Id',
                'created_at' => '2020-03-10 14:21:07',
                'updated_at' => '2020-03-10 14:21:07',
            ),
            73 => 
            array (
                'id' => 104,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 88,
                'locale' => 'en',
                'value' => 'Description',
                'created_at' => '2020-03-10 14:21:07',
                'updated_at' => '2020-03-10 14:21:07',
            ),
            74 => 
            array (
                'id' => 105,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 89,
                'locale' => 'en',
                'value' => 'Active',
                'created_at' => '2020-03-10 14:21:07',
                'updated_at' => '2020-03-10 14:21:07',
            ),
            75 => 
            array (
                'id' => 106,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 90,
                'locale' => 'en',
                'value' => 'Created At',
                'created_at' => '2020-03-10 14:21:07',
                'updated_at' => '2020-03-10 14:21:07',
            ),
            76 => 
            array (
                'id' => 107,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 91,
                'locale' => 'en',
                'value' => 'Updated At',
                'created_at' => '2020-03-10 14:21:07',
                'updated_at' => '2020-03-10 14:21:07',
            ),
            77 => 
            array (
                'id' => 108,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 15,
                'locale' => 'en',
                'value' => 'About',
                'created_at' => '2020-03-10 14:21:07',
                'updated_at' => '2020-03-10 14:21:07',
            ),
            78 => 
            array (
                'id' => 109,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 15,
                'locale' => 'en',
                'value' => 'Abouts',
                'created_at' => '2020-03-10 14:21:07',
                'updated_at' => '2020-03-10 14:21:07',
            ),
            79 => 
            array (
                'id' => 110,
                'table_name' => 'abouts',
                'column_name' => 'description',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => '<p>مؤسسة أهلية غير ربحية تهدف إلى تمكين المجتمع المدني الفلسطيني والعربي من المناصرة الرقمية، من خلال بناء القدرات المهنية والدفاع عن الحقوق الرقمية وبناء الحملات الإعلامية المؤثرة. لذا، يركّز مركز &ldquo;حملة&rdquo; مشاريعه ومبادراته في ثلاثة مجالات أساسية: 1. التدريب: تدريب مؤسسات أهلية وحراكات شبابية وشعبية وناشطين في جميع أنحاء فلسطين، حول مهارات الإعلام الجديد، بناء الحملات، وتحسين الحضور الرقمي. 2. المرافعة: منتديات وإصدارات وائتلافات من أجل حماية الحقوق الرقمية كحقوق إنسان، وبالأساس الحق في منالية الإنترنت، الأمان الرقمي، وحرية التعبير والتنظيم في الشبكات الرقمية. 3. الحملات: تخطيط وإدارة حملات مناصرة وتوعية لمؤسسات وأطر أهلية، حول قضايا مختلفة.</p>',
                'created_at' => '2020-03-10 14:22:38',
                'updated_at' => '2020-03-10 14:22:38',
            ),
            80 => 
            array (
                'id' => 111,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 92,
                'locale' => 'en',
                'value' => 'Id',
                'created_at' => '2020-03-10 15:03:38',
                'updated_at' => '2020-03-10 15:03:38',
            ),
            81 => 
            array (
                'id' => 112,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 93,
                'locale' => 'en',
                'value' => 'Name',
                'created_at' => '2020-03-10 15:03:38',
                'updated_at' => '2020-03-10 15:03:38',
            ),
            82 => 
            array (
                'id' => 113,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 94,
                'locale' => 'en',
                'value' => 'Image',
                'created_at' => '2020-03-10 15:03:38',
                'updated_at' => '2020-03-10 15:03:38',
            ),
            83 => 
            array (
                'id' => 114,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 95,
                'locale' => 'en',
                'value' => 'Department',
                'created_at' => '2020-03-10 15:03:38',
                'updated_at' => '2020-03-10 15:03:38',
            ),
            84 => 
            array (
                'id' => 115,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 96,
                'locale' => 'en',
                'value' => 'Description',
                'created_at' => '2020-03-10 15:03:38',
                'updated_at' => '2020-03-10 15:03:38',
            ),
            85 => 
            array (
                'id' => 116,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 97,
                'locale' => 'en',
                'value' => 'Active',
                'created_at' => '2020-03-10 15:03:38',
                'updated_at' => '2020-03-10 15:03:38',
            ),
            86 => 
            array (
                'id' => 117,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 98,
                'locale' => 'en',
                'value' => 'Created At',
                'created_at' => '2020-03-10 15:03:38',
                'updated_at' => '2020-03-10 15:03:38',
            ),
            87 => 
            array (
                'id' => 118,
                'table_name' => 'data_rows',
                'column_name' => 'display_name',
                'foreign_key' => 99,
                'locale' => 'en',
                'value' => 'Updated At',
                'created_at' => '2020-03-10 15:03:38',
                'updated_at' => '2020-03-10 15:03:38',
            ),
            88 => 
            array (
                'id' => 119,
                'table_name' => 'data_types',
                'column_name' => 'display_name_singular',
                'foreign_key' => 17,
                'locale' => 'en',
                'value' => 'Staff',
                'created_at' => '2020-03-10 15:03:38',
                'updated_at' => '2020-03-10 15:03:38',
            ),
            89 => 
            array (
                'id' => 120,
                'table_name' => 'data_types',
                'column_name' => 'display_name_plural',
                'foreign_key' => 17,
                'locale' => 'en',
                'value' => 'Staff',
                'created_at' => '2020-03-10 15:03:38',
                'updated_at' => '2020-03-10 15:03:38',
            ),
            90 => 
            array (
                'id' => 121,
                'table_name' => 'staff',
                'column_name' => 'name',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => 'مروى حنا',
                'created_at' => '2020-03-10 15:15:08',
                'updated_at' => '2020-03-10 15:30:00',
            ),
            91 => 
            array (
                'id' => 122,
                'table_name' => 'staff',
                'column_name' => 'department',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => 'option1',
                'created_at' => '2020-03-10 15:15:08',
                'updated_at' => '2020-03-10 15:15:08',
            ),
            92 => 
            array (
                'id' => 123,
                'table_name' => 'staff',
                'column_name' => 'description',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => 'محررة وناشطة نسوية وسياسية ، حاصلة على الماجستير في الجنسانية والدراسات النسوية من جامعة حيفا
تعمل في تحالف النساء للسلام',
                'created_at' => '2020-03-10 15:15:08',
                'updated_at' => '2020-03-10 15:30:00',
            ),
            93 => 
            array (
                'id' => 124,
                'table_name' => 'staff',
                'column_name' => 'name',
                'foreign_key' => 2,
                'locale' => 'en',
                'value' => 'مصطفى عاطف قبلاوي- حيفا',
                'created_at' => '2020-03-10 15:19:23',
                'updated_at' => '2020-03-10 15:29:35',
            ),
            94 => 
            array (
                'id' => 125,
                'table_name' => 'staff',
                'column_name' => 'department',
                'foreign_key' => 2,
                'locale' => 'en',
                'value' => 'option1',
                'created_at' => '2020-03-10 15:19:23',
                'updated_at' => '2020-03-10 15:19:23',
            ),
            95 => 
            array (
                'id' => 126,
                'table_name' => 'staff',
                'column_name' => 'description',
                'foreign_key' => 2,
                'locale' => 'en',
                'value' => 'صحافي ومقدم برامج إذاعية ومتلفزة بالإضافة لعدد من البرامج الإجتماعية التي أطلقت إلكترونيًا.

متخصص وناشط في شبكات التواصل الإجتماعي',
                'created_at' => '2020-03-10 15:19:23',
                'updated_at' => '2020-03-10 15:29:35',
            ),
            96 => 
            array (
                'id' => 127,
                'table_name' => 'staff',
                'column_name' => 'name',
                'foreign_key' => 3,
                'locale' => 'en',
                'value' => 'Reem Amer',
                'created_at' => '2020-03-10 15:29:03',
                'updated_at' => '2020-03-10 15:29:03',
            ),
            97 => 
            array (
                'id' => 128,
                'table_name' => 'staff',
                'column_name' => 'description',
                'foreign_key' => 3,
                'locale' => 'en',
                'value' => 'ريم عامر, ناشطة نسوية وسياسية من كفر قاسم, تشغل منصب مديرة عامة شريكة في تحالف النساء للسلام, في السابق شغلت منصب مديرة مالية في نفس المؤسسة. تحمل شهادة ادارة مالية. ولقب اول في موضوع التاريخ العام',
                'created_at' => '2020-03-10 15:29:04',
                'updated_at' => '2020-03-10 15:29:04',
            ),
            98 => 
            array (
                'id' => 129,
                'table_name' => 'staff',
                'column_name' => 'name',
                'foreign_key' => 4,
                'locale' => 'en',
                'value' => 'احمد دراوشة',
                'created_at' => '2020-03-10 15:30:41',
                'updated_at' => '2020-03-10 15:30:41',
            ),
            99 => 
            array (
                'id' => 130,
                'table_name' => 'staff',
                'column_name' => 'description',
                'foreign_key' => 4,
                'locale' => 'en',
                'value' => 'جامعي في معهد العلوم التطبيقيّة – التخنيون بحيفا، وناشط سياسي واجتماعي؛ عملت محررًا في موقع “عرب 48” حتى العام 2016، شاركت في طواقم بحث لعدد من الأفلام الوثائقيّة',
                'created_at' => '2020-03-10 15:30:41',
                'updated_at' => '2020-03-10 15:30:41',
            ),
            100 => 
            array (
                'id' => 131,
                'table_name' => 'staff',
                'column_name' => 'name',
                'foreign_key' => 5,
                'locale' => 'en',
                'value' => 'مها بدر',
                'created_at' => '2020-03-10 15:32:29',
                'updated_at' => '2020-03-10 15:32:29',
            ),
            101 => 
            array (
                'id' => 132,
                'table_name' => 'staff',
                'column_name' => 'department',
                'foreign_key' => 5,
                'locale' => 'en',
                'value' => 'option1',
                'created_at' => '2020-03-10 15:32:29',
                'updated_at' => '2020-03-10 15:32:29',
            ),
            102 => 
            array (
                'id' => 133,
                'table_name' => 'staff',
                'column_name' => 'description',
                'foreign_key' => 5,
                'locale' => 'en',
                'value' => 'كاتبة محتوى، محررة ومؤرشفة برامج تلفزيونية. درست علم النفس واللغة العربية، ولي تجربة في التعليم والتربية البديلَين.',
                'created_at' => '2020-03-10 15:32:29',
                'updated_at' => '2020-03-10 15:32:29',
            ),
            103 => 
            array (
                'id' => 134,
                'table_name' => 'staff',
                'column_name' => 'name',
                'foreign_key' => 6,
                'locale' => 'en',
                'value' => 'لورا حوا',
                'created_at' => '2020-03-10 15:42:05',
                'updated_at' => '2020-03-10 15:42:05',
            ),
            104 => 
            array (
                'id' => 135,
                'table_name' => 'staff',
                'column_name' => 'description',
                'foreign_key' => 6,
                'locale' => 'en',
                'value' => 'منتجة افلام وثائقية وروائية ، خبرة سنين في مجال الاعلام ، مدربة “كوتشينج” للتربية البشرية ، شريكة في تأسيس حملة',
                'created_at' => '2020-03-10 15:42:06',
                'updated_at' => '2020-03-10 15:42:06',
            ),
            105 => 
            array (
                'id' => 136,
                'table_name' => 'staff',
                'column_name' => 'name',
                'foreign_key' => 7,
                'locale' => 'en',
                'value' => 'طارق خطيب',
                'created_at' => '2020-03-10 15:42:48',
                'updated_at' => '2020-03-10 15:42:48',
            ),
            106 => 
            array (
                'id' => 137,
                'table_name' => 'staff',
                'column_name' => 'department',
                'foreign_key' => 7,
                'locale' => 'en',
                'value' => 'option2',
                'created_at' => '2020-03-10 15:42:48',
                'updated_at' => '2020-03-10 15:42:48',
            ),
            107 => 
            array (
                'id' => 138,
                'table_name' => 'staff',
                'column_name' => 'description',
                'foreign_key' => 7,
                'locale' => 'en',
                'value' => 'محامٍ، حاصل على البكالوريوس فيي الحقوق من جامعة حيفا، وعلى الماجستير في العلوم السياسيّة، في تخصُّص الدراسات الديمقراطية. ناشط سياسيّ، ويعمل الناطق الاعلامي لحزب التجمع الوطني الديمقراطي',
                'created_at' => '2020-03-10 15:42:48',
                'updated_at' => '2020-03-10 15:42:48',
            ),
            108 => 
            array (
                'id' => 139,
                'table_name' => 'staff',
                'column_name' => 'name',
                'foreign_key' => 8,
                'locale' => 'en',
                'value' => 'جولي دكور',
                'created_at' => '2020-03-10 15:43:25',
                'updated_at' => '2020-03-10 15:43:25',
            ),
            109 => 
            array (
                'id' => 140,
                'table_name' => 'staff',
                'column_name' => 'department',
                'foreign_key' => 8,
                'locale' => 'en',
                'value' => 'option2',
                'created_at' => '2020-03-10 15:43:25',
                'updated_at' => '2020-03-10 15:43:25',
            ),
            110 => 
            array (
                'id' => 141,
                'table_name' => 'staff',
                'column_name' => 'description',
                'foreign_key' => 8,
                'locale' => 'en',
            'value' => 'مصورة ومخرجة سينمائية. تعمل بشكل مهني على برامج أدوبي(بريميير،فوتوشوب،لايتروم). ومصورة فوتوغرافية.',
                'created_at' => '2020-03-10 15:43:25',
                'updated_at' => '2020-03-10 15:43:25',
            ),
            111 => 
            array (
                'id' => 142,
                'table_name' => 'staff',
                'column_name' => 'name',
                'foreign_key' => 9,
                'locale' => 'en',
                'value' => 'نديم ناشف',
                'created_at' => '2020-03-10 15:44:08',
                'updated_at' => '2020-03-10 15:44:08',
            ),
            112 => 
            array (
                'id' => 143,
                'table_name' => 'staff',
                'column_name' => 'department',
                'foreign_key' => 9,
                'locale' => 'en',
                'value' => 'option3',
                'created_at' => '2020-03-10 15:44:08',
                'updated_at' => '2020-03-10 15:44:08',
            ),
            113 => 
            array (
                'id' => 144,
                'table_name' => 'staff',
                'column_name' => 'description',
                'foreign_key' => 9,
                'locale' => 'en',
                'value' => 'مبادر اجتماعيّ، ناشط في المجتمع المدنيّ منذ أكثر من عشرين عامًا. خلال نشاطه شارك في تأسيس وإدارة عدّة منظّمات وجمعيّات محلية ودولية، بينما يشغل الان منصب المدير التّنفيذيّ لمركز “حملة” المركز العربيّ لتطوير الإعلام الاجتماعيّ، وعضو فعال في “الشّبكة” شبكة السّياسات الفلسطينيّة.',
                'created_at' => '2020-03-10 15:44:08',
                'updated_at' => '2020-03-10 15:44:08',
            ),
            114 => 
            array (
                'id' => 145,
                'table_name' => 'staff',
                'column_name' => 'name',
                'foreign_key' => 10,
                'locale' => 'en',
                'value' => 'أليسون كرمل',
                'created_at' => '2020-03-10 15:44:39',
                'updated_at' => '2020-03-10 15:44:39',
            ),
            115 => 
            array (
                'id' => 146,
                'table_name' => 'staff',
                'column_name' => 'department',
                'foreign_key' => 10,
                'locale' => 'en',
                'value' => 'option3',
                'created_at' => '2020-03-10 15:44:39',
                'updated_at' => '2020-03-10 15:44:39',
            ),
            116 => 
            array (
                'id' => 147,
                'table_name' => 'staff',
                'column_name' => 'description',
                'foreign_key' => 10,
                'locale' => 'en',
                'value' => 'فنانة وكاتبة للتغيير الاجتماعي, لديها 10 سنوات خبرة بالعمل مع المجتمع المدني الفلسطيني . تعمل منسقة تنمية الموارد في مركز حملة. خلال مهنتها استطاعت جمع أموال لبرامج دعم حقوق الانسان, ألتطوير الاقتصادي, مرافعات,  وللفن.',
                'created_at' => '2020-03-10 15:44:39',
                'updated_at' => '2020-03-10 15:44:39',
            ),
            117 => 
            array (
                'id' => 148,
                'table_name' => 'staff',
                'column_name' => 'name',
                'foreign_key' => 11,
                'locale' => 'en',
                'value' => 'شذى شيخ',
                'created_at' => '2020-03-10 15:45:13',
                'updated_at' => '2020-03-10 15:45:13',
            ),
            118 => 
            array (
                'id' => 149,
                'table_name' => 'staff',
                'column_name' => 'department',
                'foreign_key' => 11,
                'locale' => 'en',
                'value' => 'option3',
                'created_at' => '2020-03-10 15:45:13',
                'updated_at' => '2020-03-10 15:45:13',
            ),
            119 => 
            array (
                'id' => 150,
                'table_name' => 'staff',
                'column_name' => 'description',
                'foreign_key' => 11,
                'locale' => 'en',
                'value' => 'مركزة المشاريع, ناشطة نسوية وسياسية، حاصلة على اللقب الاول في التربية والفنون، عملت وتطوعت في عدة مؤسسات حقوق انسان داخل البلاد وخارجها. مرشدة مجموعات في مواضيع الهوية والجندر.',
                'created_at' => '2020-03-10 15:45:13',
                'updated_at' => '2020-03-10 15:45:13',
            ),
            120 => 
            array (
                'id' => 151,
                'table_name' => 'staff',
                'column_name' => 'name',
                'foreign_key' => 12,
                'locale' => 'en',
                'value' => 'حنين عودة الله',
                'created_at' => '2020-03-10 15:46:22',
                'updated_at' => '2020-03-10 15:46:22',
            ),
            121 => 
            array (
                'id' => 152,
                'table_name' => 'staff',
                'column_name' => 'department',
                'foreign_key' => 12,
                'locale' => 'en',
                'value' => 'option3',
                'created_at' => '2020-03-10 15:46:22',
                'updated_at' => '2020-03-10 15:46:22',
            ),
            122 => 
            array (
                'id' => 153,
                'table_name' => 'staff',
                'column_name' => 'description',
                'foreign_key' => 12,
                'locale' => 'en',
                'value' => 'ساعدة ادارية في مركز حملة، مخرجة سينمائية وكاتبة. من أعمالها الفيلم الروائي القصير عصيان، 2017، وكليبات لأعمال موسيقية.
مهتمة بالثقافة البصرية وكاتبة في مجالات كتابة السيناريو، والصحافة الثقافية، والنقد الفني. شاركت في كتابة سيناريو الدراما التربوية المقدسية سلمى وسري، 2019، وكذلك كمساعد مخرج ومنتج مساعد في المسلسل.

تعمل في الإدارة الثقافية، الإنتاجات السينمائية، التصميم أحيانا، والاستشارة الإبداعية.

خريجة هندسة معمارية، 2016.',
                'created_at' => '2020-03-10 15:46:22',
                'updated_at' => '2020-03-10 15:46:22',
            ),
            123 => 
            array (
                'id' => 154,
                'table_name' => 'staff',
                'column_name' => 'name',
                'foreign_key' => 13,
                'locale' => 'en',
                'value' => 'الحارث ريان',
                'created_at' => '2020-03-10 15:47:07',
                'updated_at' => '2020-03-10 15:47:07',
            ),
            124 => 
            array (
                'id' => 155,
                'table_name' => 'staff',
                'column_name' => 'department',
                'foreign_key' => 13,
                'locale' => 'en',
                'value' => 'option3',
                'created_at' => '2020-03-10 15:47:07',
                'updated_at' => '2020-03-10 15:47:07',
            ),
            125 => 
            array (
                'id' => 156,
                'table_name' => 'staff',
                'column_name' => 'description',
                'foreign_key' => 13,
                'locale' => 'en',
                'value' => 'مدير العمليات. أسعى جاهدا للتحريض على خلق التغيير من خلال تجريب واستخدام موارد ومنصات مختلفة لإحداث تأثير حقيقي. لأكثر من 8 سنوات عملت في مجال الصحافة والإعلام، الحقوق الرقمية، الثقافة والفنون والأدب، والسياسة والتعلم المجتمعي. درست الإعلام في جامعة بيرزيت بتخصص صحافة وعلوم سياسية.',
                'created_at' => '2020-03-10 15:47:08',
                'updated_at' => '2020-03-10 15:47:08',
            ),
            126 => 
            array (
                'id' => 157,
                'table_name' => 'getinvolveds',
                'column_name' => 'description',
                'foreign_key' => 1,
                'locale' => 'en',
                'value' => '<p class="title">فترة تدريب</p>
<p>يمكنك أيضا أن تكون جزءا من فريقنا. تقدم بطلب للحصول على تدريب مع عامله وقم بمساهمتك في مهمتنا. العمل التطوعي بدوام كامل كجزء من المنظمة - ومقرها في فلسطين - ويمكن أن يكون في:</p>
<p>العلاقات الدولية والدعوة:</p>
<p>مساعدة 7 amleh في تطوير العلاقات مع المنظمات والصناديق الاتصالات ؛ الاحتفاظ بسجل منتظم ومفصل لأنشطة 7 amleh من خلال المشاركة المنتظمة في فعالياتها والاتصال المباشر والمقابلات مع المشاركين ؛ نشاط وسائل التواصل الاجتماعي</p>
<p>جمع التبرعات وتطوير المشروع:</p>
<p>كتابة تقارير المشروع ومقترحات المنح ؛ فرص تمويل البحوث</p>
<p class="title">المهارات المطلوب</p>
<p>الطلاقة على المستوى المحلي باللغة الإنجليزية</p>
<p>- مهارات الكتابة والتحرير الإنجليزية ممتازة</p>
<p>- الكفاءة في استخدام الكمبيوتر ومعالجة النصوص</p>
<p>- القدرة على العمل بمرونة ، بشكل مستقل واستخدام تلك iniziative</p>
<p>- مهارات التواصل الجيد</p>
<p>- مهارات تنظيمية غنية</p>
<p>- خبرة سابقة لجمع التبرعات</p>
<p>ميزة المهارات المفضلة:</p>
<p>- معرفة الشرق الأوسط العمل في الخارج و / أو السفر العربية والعبرية</p>
<p>- معرفة جوهرية بالإنترنت بما في ذلك وسائل الإعلام الاجتماعية مع الوعي باتجاهات وسائل التواصل الاجتماعي الحالية ، وأفضل الممارسات</p>
<p class="title">المدة</p>
<p>6 أشهر على الأقل ، ويفضل أن يكون ذلك لمدة عام.</p>
<p class="title">الفوائد</p>
<p>سيكتسب المتدرب فهمًا فريدًا للوضع الفريد الذي يواجه مواطني إسرائيل الفلسطينيين من خلال تجربة مباشرة وتوسيع معرفتهم السياسية على نطاق واسع ، بالإضافة إلى معرفة آليات منظمة غير حكومية.</p>
<p>لدعم إقامة المتطوع ، ستقدم شركة &ldquo;عامله&rdquo; راتبًا قدره 600 دولار شهريًا.</p>
<p>أرسل لنا طلبك (السيرة الذاتية ، رسالة الغلاف وعينة كتابة) <a href="mailto:7amleh@gmail.com">7amleh@gmail.com</a></p>',
                'created_at' => '2020-03-11 12:15:17',
                'updated_at' => '2020-03-11 12:15:17',
            ),
        ));
        
        
    }
}