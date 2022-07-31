<?php

use Illuminate\Database\Seeder;

class StaffTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('staff')->delete();
        
        \DB::table('staff')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'مروى حنا',
                'image' => 'staff\\March2020\\kgHFwXdIR5Gj2x9M6A5j.png',
                'department' => 'option1',
                'description' => 'محررة وناشطة نسوية وسياسية ، حاصلة على الماجستير في الجنسانية والدراسات النسوية من جامعة حيفا
تعمل في تحالف النساء للسلام.',
                'active' => 1,
                'created_at' => '2020-03-10 15:15:00',
                'updated_at' => '2020-03-10 15:30:00',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'مصطفى عاطف قبلاوي- حيفا',
                'image' => 'staff\\March2020\\I0WbYMIKIcQPh9NImxFO.png',
                'department' => 'option1',
                'description' => 'صحافي ومقدم برامج إذاعية ومتلفزة بالإضافة لعدد من البرامج الإجتماعية التي أطلقت إلكترونيًا.

متخصص وناشط في شبكات التواصل الإجتماعي',
                'active' => 1,
                'created_at' => '2020-03-10 15:19:00',
                'updated_at' => '2020-03-10 15:29:34',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'ريم عامر',
                'image' => 'staff\\March2020\\VnTlnlWamLgDYIWeLYjT.png',
                'department' => 'option1',
                'description' => 'ريم عامر, ناشطة نسوية وسياسية من كفر قاسم, تشغل منصب مديرة عامة شريكة في تحالف النساء للسلام, في السابق شغلت منصب مديرة مالية في نفس المؤسسة. تحمل شهادة ادارة مالية. ولقب اول في موضوع التاريخ العام',
                'active' => 1,
                'created_at' => '2020-03-10 15:29:02',
                'updated_at' => '2020-03-10 15:29:02',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'احمد دراوشة',
                'image' => 'staff\\March2020\\rjz8pBJMu9Gm9ffK5NcI.png',
                'department' => 'option1',
                'description' => 'جامعي في معهد العلوم التطبيقيّة – التخنيون بحيفا، وناشط سياسي واجتماعي؛ عملت محررًا في موقع “عرب 48” حتى العام 2016، شاركت في طواقم بحث لعدد من الأفلام الوثائقيّة',
                'active' => 1,
                'created_at' => '2020-03-10 15:30:40',
                'updated_at' => '2020-03-10 15:30:40',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'مها بدر',
                'image' => 'staff\\March2020\\1hcpSK6MrtcPNTN4iBTH.png',
                'department' => 'option1',
                'description' => 'كاتبة محتوى، محررة ومؤرشفة برامج تلفزيونية. درست علم النفس واللغة العربية، ولي تجربة في التعليم والتربية البديلَين.',
                'active' => 1,
                'created_at' => '2020-03-10 15:32:29',
                'updated_at' => '2020-03-10 15:32:29',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'لورا حوا',
                'image' => 'staff\\March2020\\yXWyzw9muDvhg3jwieAS.png',
                'department' => 'option2',
                'description' => 'منتجة افلام وثائقية وروائية ، خبرة سنين في مجال الاعلام ، مدربة “كوتشينج” للتربية البشرية ، شريكة في تأسيس حملة',
                'active' => 1,
                'created_at' => '2020-03-10 15:42:05',
                'updated_at' => '2020-03-10 15:42:05',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'طارق خطيب',
                'image' => 'staff\\March2020\\UHH0nDAUAZcyNXHoMSf6.png',
                'department' => 'option2',
                'description' => 'محامٍ، حاصل على البكالوريوس فيي الحقوق من جامعة حيفا، وعلى الماجستير في العلوم السياسيّة، في تخصُّص الدراسات الديمقراطية. ناشط سياسيّ، ويعمل الناطق الاعلامي لحزب التجمع الوطني الديمقراطي',
                'active' => 1,
                'created_at' => '2020-03-10 15:42:48',
                'updated_at' => '2020-03-10 15:42:48',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'جولي دكور',
                'image' => 'staff\\March2020\\0Pp8F3QpobVVfOrvklQ6.png',
                'department' => 'option2',
            'description' => 'مصورة ومخرجة سينمائية. تعمل بشكل مهني على برامج أدوبي(بريميير،فوتوشوب،لايتروم). ومصورة فوتوغرافية.',
                'active' => 1,
                'created_at' => '2020-03-10 15:43:25',
                'updated_at' => '2020-03-10 15:43:25',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'نديم ناشف',
                'image' => 'staff\\March2020\\YNvObdfzPFaTsCa75jR2.png',
                'department' => 'option3',
                'description' => 'مبادر اجتماعيّ، ناشط في المجتمع المدنيّ منذ أكثر من عشرين عامًا. خلال نشاطه شارك في تأسيس وإدارة عدّة منظّمات وجمعيّات محلية ودولية، بينما يشغل الان منصب المدير التّنفيذيّ لمركز “حملة” المركز العربيّ لتطوير الإعلام الاجتماعيّ، وعضو فعال في “الشّبكة” شبكة السّياسات الفلسطينيّة.',
                'active' => 1,
                'created_at' => '2020-03-10 15:44:08',
                'updated_at' => '2020-03-10 15:44:08',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'أليسون كرمل',
                'image' => 'staff\\March2020\\TzQA3Oie9aT2V6y78bq4.png',
                'department' => 'option3',
                'description' => 'فنانة وكاتبة للتغيير الاجتماعي, لديها 10 سنوات خبرة بالعمل مع المجتمع المدني الفلسطيني . تعمل منسقة تنمية الموارد في مركز حملة. خلال مهنتها استطاعت جمع أموال لبرامج دعم حقوق الانسان, ألتطوير الاقتصادي, مرافعات,  وللفن.',
                'active' => 1,
                'created_at' => '2020-03-10 15:44:39',
                'updated_at' => '2020-03-10 15:44:39',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'شذى شيخ',
                'image' => 'staff\\March2020\\kULF0QT9EJ4CFB4AWfho.png',
                'department' => 'option3',
                'description' => 'مركزة المشاريع, ناشطة نسوية وسياسية، حاصلة على اللقب الاول في التربية والفنون، عملت وتطوعت في عدة مؤسسات حقوق انسان داخل البلاد وخارجها. مرشدة مجموعات في مواضيع الهوية والجندر.',
                'active' => 1,
                'created_at' => '2020-03-10 15:45:11',
                'updated_at' => '2020-03-10 15:45:11',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'حنين عودة الله',
                'image' => 'staff\\March2020\\rfCFDSYJMPlI1F297wxK.jpg',
                'department' => 'option3',
                'description' => '',
                'active' => 1,
                'created_at' => '2020-03-10 15:46:22',
                'updated_at' => '2020-03-10 15:46:22',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'الحارث ريان',
                'image' => 'staff\\March2020\\1RUr3LCGP1kbDvmM2mWP.jpg',
                'department' => 'option3',
                'description' => 'مدير العمليات. أسعى جاهدا للتحريض على خلق التغيير من خلال تجريب واستخدام موارد ومنصات مختلفة لإحداث تأثير حقيقي. لأكثر من 8 سنوات عملت في مجال الصحافة والإعلام، الحقوق الرقمية، الثقافة والفنون والأدب، والسياسة والتعلم المجتمعي. درست الإعلام في جامعة بيرزيت بتخصص صحافة وعلوم سياسية.',
                'active' => 1,
                'created_at' => '2020-03-10 15:47:07',
                'updated_at' => '2020-03-10 15:47:07',
            ),
        ));
        
        
    }
}