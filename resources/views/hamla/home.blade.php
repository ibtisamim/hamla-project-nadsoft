@extends('hamla.layouts.Web_app')



@section('content')
@php $currentlang = session()->get('locale'); @endphp
<!-- home style -->
@if($currentlang=="ar")
<link rel="stylesheet" href="{{ url('/web/hamla/css/home.css') }} ">

@else
<link rel="stylesheet" href="{{ url('/web/hamla/css/home-en.css') }} ">
@endif

   

<!-- home slider -->
<div id="content">
<div class="container-fluid">
  @if($currentlang=="ar")
    <div class="col-sm-1 col-md-3 col-lg-1  float-left social">
    <ul>
      <li><a href="{{setting('site.facebooklink')}}" target="_blank"><img src="web/hamla/images/facebook.png" /></a></li>
      <li><a href="{{setting('site.twitterlink')}}" target="_blank"><img src="web/hamla/images/twitter.png" /></a></li>
      <li><a href="{{setting('site.tubelink')}}" target="_blank"><img src="web/hamla/images/youtupe.png" /></a></li>
      <li><a href="{{setting('site.linkedlink')}}" target="_blank"><img src="web/hamla/images/linkedin.png" /></a></li>
      <li><a href="mailto:{{setting('site.email')}}"><img src="web/hamla/images/email.png" /></a></li>
    </ul>
    
  </div>
 @else
  <div class="col-sm-1 col-md-3 col-lg-1  float-right social">
    <ul>
      <li><a href="{{setting('site.facebooklink')}}" target="_blank"><img src="web/hamla/images/facebook.png" /></a></li>
      <li><a href="{{setting('site.twitterlink')}}" target="_blank"><img src="web/hamla/images/twitter.png" /></a></li>
      <li><a href="{{setting('site.tubelink')}}" target="_blank"><img src="web/hamla/images/youtupe.png" /></a></li>
      <li><a href="{{setting('site.linkedlink')}}" target="_blank"><img src="web/hamla/images/linkedin.png" /></a></li>
      <li><a href="mailto:{{setting('site.email')}}"><img src="web/hamla/images/email.png" /></a></li>
    </ul>
    
  </div>

 
@endif

 <div class="container">
   <div class="row">
  <div class="col slider">
<div id="homeslider" class="carousel slide" data-ride="carousel"> 
    <!-- The slideshow -->
  <div class="carousel-inner">
    @php $active = 'active'; @endphp

    @if(count($slider ) > 0)
    @foreach($slider as $slide)                  
    <div class="carousel-item {{$active}} ">
      @if($slide->link != '')
      <a href="{{$slide->link}}">
        @endif
      <img src="{{url('storage/'.$slide->image)}}"  alt="{{$slide->title}}"  height="533">
    
       @if( $slide->lang == 'ar')
      <div class="carousel-caption  text-right" style="direction: rtl">
        @else
        <div class="carousel-caption  text-left" style="direction: ltr">
        @endif
        <div class="container">
         
       <h5>
          {!! \Illuminate\Support\Str::limit($slide->title, 80, $end='...')   !!}
      
       </h5>
     
<p>
          {!! \Illuminate\Support\Str::limit($slide->description, 80, $end='...')   !!}
     
   </p>         
        
      </div>
    </div>
     @if($slide->link != '')
  </a>
  @endif
      </div>

    @php $active = ''; @endphp
                                  
   @endforeach
   @endif

  
  </div>
  <!-- social media -->
 
  </div>
  
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#homeslider" data-slide="prev">
    <span class="carousel-control-prev-icon"><img src="web/hamla/images/preve.png" /></span>
  </a>
  <a class="carousel-control-next" href="#homeslider" data-slide="next">
    <span class="carousel-control-next-icon"><img src="web/hamla/images/preve.png" /></span>
  </a>

</div>
   

</div>
</div>
</div>
<!-- end slider + social -->


<div class="container" id="maincontent">
  <!-- search -->
  <div class="row" id="searchdiv">
   
    <div class="col-sm-12 col-md-12 col-lg-12" >
     <form action="{{ route('search') }}" id="searchform" method="post" name="searchform" >
                            {{ csrf_field() }}
        <input type="text" name="query" value="" id="inputsearch" required placeholder="{{trans('home.searchplaceholder')}}"/>
        <button type="submit" id="searchbtn"><img src="web/hamla/images/iconsearch.png"/></button>
      </form>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-12">
         @if($currentlang=="ar")
         @php
         $link1 = "أمان رقمي";
         $link2 = "خرائط غوغل";
         $link3 = "خريطة الفصل";
         $link4 = "تقرير سنوي";
         $readmorebtn="مشاهدة المزيد";
         $mediatitle = "ميديا حملة";
         $youtube = "فيديوهات";
         $insta = "منشورات من انستجرام";
         $facebook = "منشورات من فيسبوك";
         $twitter = "منشورات من تويتر";
         @endphp
         @else
          @php
         $link1 = "Digital security";
         $link2 = "Google Maps";
         $link3 = "Chapter map";
         $link4 = "Annual Report";
         $readmorebtn= "Read more";
         $mediatitle = "Media";
         $youtube = "Youtube";
         $insta = "Instegram";
         $facebook = "Facebook";
         $twitter = "Twitter";
         @endphp
         @endif
      <a href="https://7amleh.org/ds/" target="_blank"  class="btn">
        {{$link1}}
      </a>
      <a href="https://7amleh.org/gm/"  target="_blank"  class="btn">
        {{$link2}}
      </a>
 <a href="https://7amleh.org/msa/"  target="_blank"  class="btn">
          {{$link3}}
      </a>

@if($currentlang=="ar")
    <a href="https://7amleh.org/ar2019/" target="_blank" class="btn">
      {{$link4}}
      </a>
	  @else
		  <a href="https://7amleh.org/en2019/" target="_blank" class="btn">
      {{$link4}}
      </a>
		  @endif

    </div>
  </div>
  <!-- ../search -->

  <!-- news & reports -->
   <div class="row" id="news">
    <h2 class="col-sm-12 col-md-12 col-lg-12 title"> 
 {{ trans('home.NEWS')}}
    </h2>
@php $counter = 0; @endphp
@foreach($postsnews as $new)
<a href="{{url(date_format($new->created_at,'Y/m/d').'/'.$new->slug)}}" class="col-sm-4">
   <div>
    <div id="newsbox">
     
     @if($new->image!='')
     @php $new->image = str_replace('\\','/',$new->image) @endphp
      @if (strpos($new->image, 'http') !== false) 
      <div id="homeimgbox" style="background: url({{$new->image}})">
     </div>
      @else
     <div id="homeimgbox" style="background: url({{url('storage/'.$new->image)}})">
     </div>
     @endif
     @else
     <div id="homeimgbox" style="background: #8DC640 0% 0% no-repeat padding-box;">
     </div>
     @endif
     <p class="caption">
      {{ \Illuminate\Support\Str::limit($new->title, 60, $end='...') }}
     </p>
   </div>
   </div>
</a>
@endforeach

 

<div class="col-sm-12 col-md-12 col-lg-12 text-center">
  <a href="{{url('news')}}" class="readmore">
    {{$readmorebtn}}
  </a>
</div>
  </div>
  <!-- ../news & reports  -->
  <!-- Releases -->
   <div class="row" id="releases">
   <h2 class="col-sm-12 col-md-12 col-lg-12 title">
   {{ trans('home.PUBLICATIONS')}}
   </h2>
@foreach($postsreleases as $release) 

 <a href="{{url(date_format($release->created_at,'Y/m/d').'/'.$release->slug)}}" class="col-sm-6">
<div>
  <div id="releasesbox">
     @if($release->image!='')
     <img src="{{url('storage/'.$release->image)}}" class="img-fluid" />
     
     @else
     
     <div  style="background: #8DC640 0% 0% no-repeat padding-box; width: 252px; height: 100%;     float: right;">
     </div>
     
      @endif
     
     <p class="caption">
      {{ \Illuminate\Support\Str::limit($release->title, 60, $end='...') }} 
     </p>
   </div>
   </div>
</a>
@endforeach
   <div class="col-sm-12 col-md-12 col-lg-12 text-center">
    <a href="{{url('releases')}}" class="readmore">
       {{$readmorebtn}}
    </a>
  </div>
  </div>
  <!-- ../Releases -->

  <!-- Attacks -->
   <div class="row" id="attacks">
       <h2 class="col-sm-12 col-md-12 col-lg-12 title"> 
{{ trans('home.CAMPAIGNS')}} </h2>
@foreach($postscampaigns as $campaign)
   <div class="col-sm-4" >
    <a href="{{url(date_format($campaign->created_at,'Y/m/d').'/'.$campaign->slug)}}">
      @if($campaign->image!='')
      @php $campaign->image = str_replace('\\','/',$campaign->image) @endphp
    <div id="attacksbox" style="background: url({{url('storage/'.$campaign->image)}})">
     @else
    <div id="attacksbox" style="background: #8DC640 0% 0% no-repeat padding-box;">
     @endif
     <p class="caption">
      {{ \Illuminate\Support\Str::limit($campaign->title, 60, $end='...') }}
     </p>
   </div>
 </a>
   </div>
 
@endforeach

<div class="col-sm-12 col-md-12 col-lg-12 text-center">
  <a href="{{url('campaigns')}}" class="readmore">
     {{$readmorebtn}}
  </a>
</div>
    
  </div>
  <!-- ../Attacks -->


</div>

</div>
 

 <!-- media -->
 <div class="container-fluid" id="media">
  <div class="row">
    <div class="container">
      <div class="row">
          <h2 class="col-sm-12 col-md-12 col-lg-12 title">  {{$mediatitle }}</h2>

      </div>

      <div class="row">
        <div class="col-sm-12 col-md-3 col-lg-3">
           <h3>{{$insta }}</h3>

            

          <div id="insta">
            <div id="toplinksocial">
              <a href="https://www.instagram.com/7amleh/" target="_blank" id="instabtn" >
                 <i class="fab fa-instagram"></i> {{trans('home.instafollow')}}
              </a>
            </div>
           <div id="instagram-feed1" class="instagram_feed"></div>
          </div>
        </div>

        <div class="col-sm-12 col-md-3 col-lg-3">
          <h3>{{$youtube }}</h3>
          <div id="youtube" >
            <div id="toplinksocial">
              <a href="https://www.youtube.com/channel/UCffBcFopuwnfYmf4VoI2cLQ/videos" target="_blank"   id="tubebtn">
                 <i class="fab fa-youtube"></i> {{trans('home.youtubefollow')}}
              </a>
            </div>
          <div id="attacks">
              @php
                

                // $videoList = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId=UCffBcFopuwnfYmf4VoI2cLQ&maxResults=10&key=AIzaSyAeqhhaqbCcZ8wkgWf0oCaf2R5nf2nKBJs'));




   if( Cache::has( 'videoList' ) ) {
    $videoList = Cache::get( 'videoList' );
  }else{
//$feedURL = "https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId=UCffBcFopuwnfYmf4VoI2cLQ&maxResults=10&key=AIzaSyCI2kOQxzFKrwHQ3JVO4mzqmPI4HIvEwc8";
$feedURL = "https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId=UCffBcFopuwnfYmf4VoI2cLQ&maxResults=10&key=AIzaSyAeqhhaqbCcZ8wkgWf0oCaf2R5nf2nKBJs";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $feedURL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
$json = curl_exec($ch);

$videoList = json_decode($json, true);

if(!empty($videoList && isset($videoList['items']))){
    Cache::put('videoList', $videoList , 60 * 60 * 24);
}
}

if(isset($videoList['items'])) {


              @endphp

               @foreach($videoList['items'] as $item)
                @if(isset($item['id']['videoId']))
                <div class="youtube-video" id="attacksbox">
            <iframe id="video{{$item['id']['videoId']}}" width="100%" height="100%" style="    border-radius: 12px;     border-bottom-right-radius: 0px; border-bottom-left-radius: 0px;" src="https://www.youtube.com/embed/{{$item['id']['videoId']}}" frameborder="0" allow="accelerometer;  encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p class="  linkyoutube"  data-id="{{$item['id']['videoId']}}" style="line-height: 25px; padding: 10px;">{{$item['snippet']['title']}}  </p>
                </div>
                @endif
              @endforeach
@php
}
@endphp

          </div>
        </div>
        </div>
        
        <div class="col-sm-12 col-md-3 col-lg-3">
          <h3>{{ $twitter}}</h3>

           

          <div id="twitter">
              <div id="toplinksocial">
              <a href="https://twitter.com/7amleh" target="_blank" id="twittbtn">
                 <i class="fab fa-twitter"></i> {{trans('home.twittfollow')}}
              </a>
            </div>
<a class="twitter-timeline" href="https://twitter.com/7amleh?ref_src=twsrc%5Etfw">Tweets by 7amleh</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
              
          </div>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3">
           <h3>{{$facebook}}</h3>

           

          <div id="facebook">
               <div id="toplinksocial">
              <a href="https://www.facebook.com/palsvoices/" target="_blank" id="facebtn">
                  <i class="fab fa-facebook-f"></i> {{trans('home.facefollow')}} 
              </a>
            </div>
<div id="pageContainer">
    <div class="fb-page" data-href="https://www.facebook.com/7amleh" data-width="550" data-height="650" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/7amleh"><a href="https://www.facebook.com/7amleh">Facebook</a></blockquote></div></div>
</div>



          </div>
        </div>
      </div>
    </div>
    
  </div>
 </div>




@endsection
