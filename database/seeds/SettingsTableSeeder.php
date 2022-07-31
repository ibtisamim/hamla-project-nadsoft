<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'site.title',
                'display_name' => 'Site Title',
                'value' => 'Site Title',
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Site',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'site.description',
                'display_name' => 'Site Description',
                'value' => 'مركز حملة يدرب أكثر من 2000 شاب/ة من خلال مشروع الأمان الرقمي للعام 2019مركز حملة يدرب أكثر من 2000 شاب/ة من خلال مشروع الأمان الرقمي للعام 2019',
                'details' => '',
                'type' => 'text',
                'order' => 2,
                'group' => 'Site',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'site.logo',
                'display_name' => 'Site Logo',
                'value' => 'settings\\March2020\\bZlRXd0cDAehc8o6IMXQ.png',
                'details' => '',
                'type' => 'image',
                'order' => 3,
                'group' => 'Site',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'site.google_analytics_tracking_id',
                'display_name' => 'Google Analytics Tracking ID',
                'value' => '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13412.000750687363!2d34.996297!3d32.81876!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151dba356a34a463%3A0x225e8e23bce86a6e!2sDerech%20Allenby%2012%2C%20Haifa!5e0!3m2!1sen!2sil!4v1583924875788!5m2!1sen!2sil"  frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>',
                'details' => '',
                'type' => 'text',
                'order' => 4,
                'group' => 'Site',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'admin.bg_image',
                'display_name' => 'Admin Background Image',
                'value' => 'settings\\March2020\\7IpkP8VDSTkHRqH8L4Bh.jpg',
                'details' => '',
                'type' => 'image',
                'order' => 5,
                'group' => 'Admin',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'admin.title',
                'display_name' => 'Admin Title',
                'value' => 'حملة- المركز العربي لتطوير الإعلام الاجتماعي',
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Admin',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'admin.description',
                'display_name' => 'Admin Description',
                'value' => 'حملة- المركز العربي لتطوير الإعلام الاجتماعي',
                'details' => '',
                'type' => 'text',
                'order' => 2,
                'group' => 'Admin',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'admin.loader',
                'display_name' => 'Admin Loader',
                'value' => 'settings\\March2020\\jYioTZUj8dk1WZd9ExtI.png',
                'details' => '',
                'type' => 'image',
                'order' => 3,
                'group' => 'Admin',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'admin.icon_image',
                'display_name' => 'Admin Icon Image',
                'value' => 'settings\\March2020\\3SORONWQOPOxpDLEeTuL.png',
                'details' => '',
                'type' => 'image',
                'order' => 4,
                'group' => 'Admin',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'admin.google_analytics_client_id',
            'display_name' => 'Google Analytics Client ID (used for admin dashboard)',
                'value' => NULL,
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Admin',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'site.address',
                'display_name' => 'Address',
                'value' => 'شارع اللنبي 12, حيفا 3309250',
                'details' => NULL,
                'type' => 'text_area',
                'order' => 6,
                'group' => 'Site',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'site.email',
                'display_name' => 'Email',
                'value' => 'info@7amleh.org',
                'details' => NULL,
                'type' => 'text',
                'order' => 7,
                'group' => 'Site',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'site.phone',
                'display_name' => 'Phone',
            'value' => '+972  (0)774020670',
                'details' => NULL,
                'type' => 'text',
                'order' => 9,
                'group' => 'Site',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'site.facebooklink',
                'display_name' => 'Facebook Social Link',
                'value' => 'https://www.facebook.com/7amleh/',
                'details' => NULL,
                'type' => 'text',
                'order' => 10,
                'group' => 'Site',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'site.twitterlink',
                'display_name' => 'Twitter Social Link',
                'value' => 'https://twitter.com/7amleh',
                'details' => NULL,
                'type' => 'text',
                'order' => 11,
                'group' => 'Site',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'site.googlelink',
                'display_name' => 'Google Social Link',
                'value' => NULL,
                'details' => NULL,
                'type' => 'text',
                'order' => 12,
                'group' => 'Site',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'site.instalink',
                'display_name' => 'Instagram Social Link',
                'value' => NULL,
                'details' => NULL,
                'type' => 'text',
                'order' => 13,
                'group' => 'Site',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'site.tubelink',
                'display_name' => 'YouTube Social Link',
                'value' => 'https://www.youtube.com/channel/UCffBcFopuwnfYmf4VoI2cLQ',
                'details' => NULL,
                'type' => 'text',
                'order' => 14,
                'group' => 'Site',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'site.linkedlink',
                'display_name' => 'LinkedIn Social Link',
                'value' => 'https://il.linkedin.com/in/7amleh-center-942790127',
                'details' => NULL,
                'type' => 'text',
                'order' => 15,
                'group' => 'Site',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'site.fax',
                'display_name' => 'Fax',
            'value' => '+972  (0)774020673',
                'details' => NULL,
                'type' => 'text',
                'order' => 8,
                'group' => 'Site',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'site.whatsup',
                'display_name' => 'Whats Up',
                'value' => NULL,
                'details' => NULL,
                'type' => 'text',
                'order' => 16,
                'group' => 'Site',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'site.check',
                'display_name' => 'You can also send us a check at',
                'value' => '7amleh – Arab Center for the Advancement of Social Media
Allenby 12 , Haifa 3309250, Israel',
                'details' => NULL,
                'type' => 'text_area',
                'order' => 17,
                'group' => 'Site',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'site.bank',
                'display_name' => 'Bank transfer',
                'value' => '<p><strong>Bank transfers can be made in any currency to 7amleh&rsquo;s bank account:</strong></p>
<p>Hamleh &ndash; Arab Center for the Advancement of Social Media</p>
<p><strong>Bank name:</strong> Bank Hapoalim</p>
<p><strong>Branch Number:</strong> 700</p>
<p><strong>Account Number:</strong> 34955</p>
<p><strong>Address:</strong> Haniviem St. 18, Haifa , Israel</p>
<p><strong>Swift Code:</strong> POALILIT</p>
<p><strong>IBAN:</strong> IL17-0127-0000-0000-0034-955</p>',
                'details' => NULL,
                'type' => 'rich_text_box',
                'order' => 18,
                'group' => 'Site',
            ),
        ));
        
        
    }
}