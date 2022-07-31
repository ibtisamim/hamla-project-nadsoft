<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('posts')->delete();
        
        \DB::table('posts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'author_id' => 1,
                'title' => 'Announcement – Changes to the Palestine Digital Activism Forum 2020',
                'seo_title' => 'Announcement – Changes to the Palestine Digital Activism Forum 2020',
                'excerpt' => 'Changes to the Palestine Digital Activism Forum 2020',
                'body' => '<div class="post-content">
<p>Dear All,</p>
<p>As a result of changes to the local and global situation, and in the interest of ensuring safety for everyone, after much deliberation and considerations, we have decided to transform the Palestine Digital Activism Forum (March 24 &ndash; 27) into an online event and to use the internet and media for the majority of our activities.</p>
<p>We know how eager everyone was to join the PDAF physically this year and to visit Palestine, so it is with great disappointment that we had to take this decision. However, we still hope that you will be joining us online!</p>
<p>The new Palestine Digital Activism Forum schedule will be published at PDAF.ps on Sunday, March 20th. If you have already registered for the PDAF, you will also receive an email notification with information related to updates.</p>
<p>We thank you again for your understanding and look forward to seeing you soon!</p>
<p>&nbsp;</p>
<p>Should you have further questions or concerns, please contact us at: Forum@7amleh.org or call 0599133878</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<!--div class="inner-article-social">
<span class=\'st_fblike_hcount\' displayText=\'Facebook Like\'></span>
<span class=\'st_facebook_hcount\' displayText=\'Facebook\'></span>
<span class=\'st_twitter_hcount\' displayText=\'Tweet\'></span>
<span class=\'st_googleplus_hcount\' displayText=\'Google +\'></span>
<div class="linkedin-box" id="inner-linkedin-box" style="display: none;">
<script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
<script type="IN/Share" data-url="http://www.7amleh.org/ar/article/124" data-counter="right"></script>
</div>
</div>
</br--> <!-- Go to www.addthis.com/dashboard to customize your tools -->
<div class="last_social">
<div class="addthis_sharing_toolbox" style="clear: both;" data-url="https://7amleh.org/2020/03/05/announcement-changes-to-the-palestine-digital-activism-forum-2020/" data-title="Announcement - Changes to the Palestine Digital Activism Forum 2020" data-description="Changes to the Palestine Digital Activism Forum 2020">
<div id="atstbx2" class="at-resp-share-element at-style-responsive addthis-smartlayers addthis-animated at4-show" role="region" aria-labelledby="at-23e15f1b-1530-4de9-ac36-9ec4411c5817"><span id="at-23e15f1b-1530-4de9-ac36-9ec4411c5817" class="at4-visually-hidden">AddThis Sharing Buttons</span>
<div class="at-share-btn-elements"><a class="at-icon-wrapper at-share-btn at-svc-facebook" style="background-color: #3b5998; border-radius: 0%;" tabindex="0" role="button"><span class="at4-visually-hidden">Share to Facebook</span><span class="at4-share-count-container" style="font-size: 10.5px; line-height: 20px; color: #ffffff;">29</span></a><a class="at-icon-wrapper at-share-btn at-svc-twitter" style="background-color: #1da1f2; border-radius: 0%;" tabindex="0" role="button"><span class="at4-visually-hidden">Share to Twitter</span></a><a class="at-icon-wrapper at-share-btn at-svc-whatsapp" style="background-color: #4dc247; border-radius: 0%;" tabindex="0" role="button"><span class="at4-visually-hidden">Share to WhatsApp</span></a><a class="at-icon-wrapper at-share-btn at-svc-linkedin" style="background-color: #0077b5; border-radius: 0%;" tabindex="0" role="button"><span class="at4-visually-hidden">Share to LinkedIn</span></a></div>
</div>
</div>
</div>
<div class="wp_rp_wrap">
<div class="wp_rp_content">
<h3 class="related_post_title">Related Articles</h3>
<ul class="related_post wp_rp">
<li data-position="0" data-poid="in-4881" data-post-type="none"><a class="wp_rp_thumbnail" href="https://7amleh.org/2020/02/12/registration-for-the-palestine-digital-activism-forum-is-open/"><img src="https://7amleh.org/wp-content/uploads/2020/02/Untitled-4-03-1-500x500.jpg" alt="Registration for the Palestine Digital Activism Forum is Open" width="500" height="500" /></a><a class="wp_rp_title" href="https://7amleh.org/2020/02/12/registration-for-the-palestine-digital-activism-forum-is-open/">Registration for the Palestine Digital Activism Forum is Open</a></li>
<li data-position="1" data-poid="in-4753" data-post-type="none"><a class="wp_rp_thumbnail" href="https://7amleh.org/2019/11/28/call-for-proposals-for-the-palestine-digital-activism-forum-2020/"><img src="https://7amleh.org/wp-content/uploads/2019/11/Open-call_arabic_web_home_page-3-500x500.png" alt="Call for proposals for the Palestine Digital Activism Forum 2020" width="500" height="500" /></a><a class="wp_rp_title" href="https://7amleh.org/2019/11/28/call-for-proposals-for-the-palestine-digital-activism-forum-2020/">Call for proposals for the Palestine Digital Activism Forum 2020</a></li>
<li data-position="2" data-poid="in-3296" data-post-type="none"><a class="wp_rp_thumbnail" href="https://7amleh.org/2018/04/03/press-release-palestine-2017-report-palestinian-online-content-targeted-through-mass-surveillance-digital-occupation-and-biased-content-moderation/"><img src="https://7amleh.org/wp-content/uploads/2018/03/Palestine-2017-cover_Page-500x500.jpg" alt="#Palestine 2017 Report: Palestinian online content targeted through mass surveillance, digital occupation and biased content moderation" width="500" height="500" /></a><a class="wp_rp_title" href="https://7amleh.org/2018/04/03/press-release-palestine-2017-report-palestinian-online-content-targeted-through-mass-surveillance-digital-occupation-and-biased-content-moderation/">#Palestine 2017 Report: Palestinian online content targeted through ...</a></li>
</ul>
</div>
</div>
</div>',
                'image' => 'posts\\March2020\\8OUDG5Ahw16nRHeuDjUW.jpg',
                'slug' => 'announcement-changes-to-the-palestine-digital-activism-forum-2020',
                'meta_description' => 'Announcement – Changes to the Palestine Digital Activism Forum 2020',
                'meta_keywords' => 'Announcement – Changes to the Palestine Digital Activism Forum 2020',
                'status' => 'PUBLISHED',
                'featured' => 0,
                'is_active' => 1,
                'watermark' => NULL,
                'created_at' => '2020-03-07 23:23:07',
                'updated_at' => '2020-03-10 07:25:45',
            ),
            1 => 
            array (
                'id' => 4,
                'author_id' => 1,
                'title' => 'Announcement – Changes to the Palestine Digital Activism Forum 2020',
                'seo_title' => 'Announcement – Changes to the Palestine Digital Activism Forum 20202',
                'excerpt' => 'Changes to the Palestine Digital Activism Forum 2020',
                'body' => '<div class="post-content">
<p>Dear All,</p>
<p>As a result of changes to the local and global situation, and in the interest of ensuring safety for everyone, after much deliberation and considerations, we have decided to transform the Palestine Digital Activism Forum (March 24 &ndash; 27) into an online event and to use the internet and media for the majority of our activities.</p>
<p>We know how eager everyone was to join the PDAF physically this year and to visit Palestine, so it is with great disappointment that we had to take this decision. However, we still hope that you will be joining us online!</p>
<p>The new Palestine Digital Activism Forum schedule will be published at PDAF.ps on Sunday, March 20th. If you have already registered for the PDAF, you will also receive an email notification with information related to updates.</p>
<p>We thank you again for your understanding and look forward to seeing you soon!</p>
<p>&nbsp;</p>
<p>Should you have further questions or concerns, please contact us at: Forum@7amleh.org or call 0599133878</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<!--div class="inner-article-social">
<span class=\'st_fblike_hcount\' displayText=\'Facebook Like\'></span>
<span class=\'st_facebook_hcount\' displayText=\'Facebook\'></span>
<span class=\'st_twitter_hcount\' displayText=\'Tweet\'></span>
<span class=\'st_googleplus_hcount\' displayText=\'Google +\'></span>
<div class="linkedin-box" id="inner-linkedin-box" style="display: none;">
<script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
<script type="IN/Share" data-url="http://www.7amleh.org/ar/article/124" data-counter="right"></script>
</div>
</div>
</br--> <!-- Go to www.addthis.com/dashboard to customize your tools -->
<div class="last_social">
<div class="addthis_sharing_toolbox" style="clear: both;" data-url="https://7amleh.org/2020/03/05/announcement-changes-to-the-palestine-digital-activism-forum-2020/" data-title="Announcement - Changes to the Palestine Digital Activism Forum 2020" data-description="Changes to the Palestine Digital Activism Forum 2020">
<div id="atstbx2" class="at-resp-share-element at-style-responsive addthis-smartlayers addthis-animated at4-show" role="region" aria-labelledby="at-23e15f1b-1530-4de9-ac36-9ec4411c5817"><span id="at-23e15f1b-1530-4de9-ac36-9ec4411c5817" class="at4-visually-hidden">AddThis Sharing Buttons</span>
<div class="at-share-btn-elements"><a class="at-icon-wrapper at-share-btn at-svc-facebook" style="background-color: #3b5998; border-radius: 0%;" tabindex="0" role="button"><span class="at4-visually-hidden">Share to Facebook</span><span class="at4-share-count-container" style="font-size: 10.5px; line-height: 20px; color: #ffffff;">29</span></a><a class="at-icon-wrapper at-share-btn at-svc-twitter" style="background-color: #1da1f2; border-radius: 0%;" tabindex="0" role="button"><span class="at4-visually-hidden">Share to Twitter</span></a><a class="at-icon-wrapper at-share-btn at-svc-whatsapp" style="background-color: #4dc247; border-radius: 0%;" tabindex="0" role="button"><span class="at4-visually-hidden">Share to WhatsApp</span></a><a class="at-icon-wrapper at-share-btn at-svc-linkedin" style="background-color: #0077b5; border-radius: 0%;" tabindex="0" role="button"><span class="at4-visually-hidden">Share to LinkedIn</span></a></div>
</div>
</div>
</div>
<div class="wp_rp_wrap">
<div class="wp_rp_content">
<h3 class="related_post_title">Related Articles</h3>
<ul class="related_post wp_rp">
<li data-position="0" data-poid="in-4881" data-post-type="none"><a class="wp_rp_thumbnail" href="https://7amleh.org/2020/02/12/registration-for-the-palestine-digital-activism-forum-is-open/"><img src="https://7amleh.org/wp-content/uploads/2020/02/Untitled-4-03-1-500x500.jpg" alt="Registration for the Palestine Digital Activism Forum is Open" width="500" height="500" /></a><a class="wp_rp_title" href="https://7amleh.org/2020/02/12/registration-for-the-palestine-digital-activism-forum-is-open/">Registration for the Palestine Digital Activism Forum is Open</a></li>
<li data-position="1" data-poid="in-4753" data-post-type="none"><a class="wp_rp_thumbnail" href="https://7amleh.org/2019/11/28/call-for-proposals-for-the-palestine-digital-activism-forum-2020/"><img src="https://7amleh.org/wp-content/uploads/2019/11/Open-call_arabic_web_home_page-3-500x500.png" alt="Call for proposals for the Palestine Digital Activism Forum 2020" width="500" height="500" /></a><a class="wp_rp_title" href="https://7amleh.org/2019/11/28/call-for-proposals-for-the-palestine-digital-activism-forum-2020/">Call for proposals for the Palestine Digital Activism Forum 2020</a></li>
<li data-position="2" data-poid="in-3296" data-post-type="none"><a class="wp_rp_thumbnail" href="https://7amleh.org/2018/04/03/press-release-palestine-2017-report-palestinian-online-content-targeted-through-mass-surveillance-digital-occupation-and-biased-content-moderation/"><img src="https://7amleh.org/wp-content/uploads/2018/03/Palestine-2017-cover_Page-500x500.jpg" alt="#Palestine 2017 Report: Palestinian online content targeted through mass surveillance, digital occupation and biased content moderation" width="500" height="500" /></a><a class="wp_rp_title" href="https://7amleh.org/2018/04/03/press-release-palestine-2017-report-palestinian-online-content-targeted-through-mass-surveillance-digital-occupation-and-biased-content-moderation/">#Palestine 2017 Report: Palestinian online content targeted through ...</a></li>
</ul>
</div>
</div>
</div>',
                'image' => 'posts\\March2020\\8OUDG5Ahw16nRHeuDjUW.jpg',
                'slug' => 'announcement-changes-to-the-pa2lestine-digital-activism-forum-2020',
                'meta_description' => 'Announcement – Changes to the Palestine Digital Activism Forum 2020',
                'meta_keywords' => 'Announcement – Changes to the Palestine Digital Activism Forum 2020',
                'status' => 'PUBLISHED',
                'featured' => 0,
                'is_active' => 1,
                'watermark' => NULL,
                'created_at' => '2020-03-07 23:23:07',
                'updated_at' => '2020-03-10 05:24:24',
            ),
            2 => 
            array (
                'id' => 5,
                'author_id' => 1,
                'title' => 'Announcement – Changes to the Palestine Digital Activism Forum 2020',
                'seo_title' => 'Announcement – Changes to the Palestine Digital Activism Forum 2020',
                'excerpt' => 'Changes to the Palestine Digital Activism Forum 2020',
                'body' => '<div class="post-content">
<p>Dear All,</p>
<p>As a result of changes to the local and global situation, and in the interest of ensuring safety for everyone, after much deliberation and considerations, we have decided to transform the Palestine Digital Activism Forum (March 24 &ndash; 27) into an online event and to use the internet and media for the majority of our activities.</p>
<p>We know how eager everyone was to join the PDAF physically this year and to visit Palestine, so it is with great disappointment that we had to take this decision. However, we still hope that you will be joining us online!</p>
<p>The new Palestine Digital Activism Forum schedule will be published at PDAF.ps on Sunday, March 20th. If you have already registered for the PDAF, you will also receive an email notification with information related to updates.</p>
<p>We thank you again for your understanding and look forward to seeing you soon!</p>
<p>&nbsp;</p>
<p>Should you have further questions or concerns, please contact us at: Forum@7amleh.org or call 0599133878</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<!--div class="inner-article-social">
<span class=\'st_fblike_hcount\' displayText=\'Facebook Like\'></span>
<span class=\'st_facebook_hcount\' displayText=\'Facebook\'></span>
<span class=\'st_twitter_hcount\' displayText=\'Tweet\'></span>
<span class=\'st_googleplus_hcount\' displayText=\'Google +\'></span>
<div class="linkedin-box" id="inner-linkedin-box" style="display: none;">
<script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
<script type="IN/Share" data-url="http://www.7amleh.org/ar/article/124" data-counter="right"></script>
</div>
</div>
</br--> <!-- Go to www.addthis.com/dashboard to customize your tools -->
<div class="last_social">
<div class="addthis_sharing_toolbox" style="clear: both;" data-url="https://7amleh.org/2020/03/05/announcement-changes-to-the-palestine-digital-activism-forum-2020/" data-title="Announcement - Changes to the Palestine Digital Activism Forum 2020" data-description="Changes to the Palestine Digital Activism Forum 2020">
<div id="atstbx2" class="at-resp-share-element at-style-responsive addthis-smartlayers addthis-animated at4-show" role="region" aria-labelledby="at-23e15f1b-1530-4de9-ac36-9ec4411c5817"><span id="at-23e15f1b-1530-4de9-ac36-9ec4411c5817" class="at4-visually-hidden">AddThis Sharing Buttons</span>
<div class="at-share-btn-elements"><a class="at-icon-wrapper at-share-btn at-svc-facebook" style="background-color: #3b5998; border-radius: 0%;" tabindex="0" role="button"><span class="at4-visually-hidden">Share to Facebook</span><span class="at4-share-count-container" style="font-size: 10.5px; line-height: 20px; color: #ffffff;">29</span></a><a class="at-icon-wrapper at-share-btn at-svc-twitter" style="background-color: #1da1f2; border-radius: 0%;" tabindex="0" role="button"><span class="at4-visually-hidden">Share to Twitter</span></a><a class="at-icon-wrapper at-share-btn at-svc-whatsapp" style="background-color: #4dc247; border-radius: 0%;" tabindex="0" role="button"><span class="at4-visually-hidden">Share to WhatsApp</span></a><a class="at-icon-wrapper at-share-btn at-svc-linkedin" style="background-color: #0077b5; border-radius: 0%;" tabindex="0" role="button"><span class="at4-visually-hidden">Share to LinkedIn</span></a></div>
</div>
</div>
</div>
<div class="wp_rp_wrap">
<div class="wp_rp_content">
<h3 class="related_post_title">Related Articles</h3>
<ul class="related_post wp_rp">
<li data-position="0" data-poid="in-4881" data-post-type="none"><a class="wp_rp_thumbnail" href="https://7amleh.org/2020/02/12/registration-for-the-palestine-digital-activism-forum-is-open/"><img src="https://7amleh.org/wp-content/uploads/2020/02/Untitled-4-03-1-500x500.jpg" alt="Registration for the Palestine Digital Activism Forum is Open" width="500" height="500" /></a><a class="wp_rp_title" href="https://7amleh.org/2020/02/12/registration-for-the-palestine-digital-activism-forum-is-open/">Registration for the Palestine Digital Activism Forum is Open</a></li>
<li data-position="1" data-poid="in-4753" data-post-type="none"><a class="wp_rp_thumbnail" href="https://7amleh.org/2019/11/28/call-for-proposals-for-the-palestine-digital-activism-forum-2020/"><img src="https://7amleh.org/wp-content/uploads/2019/11/Open-call_arabic_web_home_page-3-500x500.png" alt="Call for proposals for the Palestine Digital Activism Forum 2020" width="500" height="500" /></a><a class="wp_rp_title" href="https://7amleh.org/2019/11/28/call-for-proposals-for-the-palestine-digital-activism-forum-2020/">Call for proposals for the Palestine Digital Activism Forum 2020</a></li>
<li data-position="2" data-poid="in-3296" data-post-type="none"><a class="wp_rp_thumbnail" href="https://7amleh.org/2018/04/03/press-release-palestine-2017-report-palestinian-online-content-targeted-through-mass-surveillance-digital-occupation-and-biased-content-moderation/"><img src="https://7amleh.org/wp-content/uploads/2018/03/Palestine-2017-cover_Page-500x500.jpg" alt="#Palestine 2017 Report: Palestinian online content targeted through mass surveillance, digital occupation and biased content moderation" width="500" height="500" /></a><a class="wp_rp_title" href="https://7amleh.org/2018/04/03/press-release-palestine-2017-report-palestinian-online-content-targeted-through-mass-surveillance-digital-occupation-and-biased-content-moderation/">#Palestine 2017 Report: Palestinian online content targeted through ...</a></li>
</ul>
</div>
</div>
</div>',
                'image' => 'posts\\March2020\\8OUDG5Ahw16nRHeuDjUW.jpg',
                'slug' => 'announcement-changes-to-the-palestine-digital-activism-forum-20203',
                'meta_description' => 'Announcement – Changes to the Palestine Digital Activism Forum 2020',
                'meta_keywords' => 'Announcement – Changes to the Palestine Digital Activism Forum 2020',
                'status' => 'PUBLISHED',
                'featured' => 0,
                'is_active' => 1,
                'watermark' => NULL,
                'created_at' => '2020-03-07 23:23:07',
                'updated_at' => '2020-03-10 05:24:24',
            ),
        ));
        
        
    }
}