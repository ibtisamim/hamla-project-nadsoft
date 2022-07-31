<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{setting('site.description')}}">
    <meta name="author" content="Nadsoft">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> {{setting('site.title')}} </title>

    <link rel="apple-touch-icon" sizes="57x57" href="/web/favicons/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/web/favicons/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/web/favicons/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/web/favicons/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/web/favicons/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/web/favicons/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/web/favicons/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/web/favicons/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/web/favicons/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/web/favicons/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/web/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/web/favicons/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/web/favicons/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/web/favicons/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
@yield('headercontent')
    <link href="{{ url('/web/fontawesome/css/all.css') }}" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- fancybox -->

 @php $currentlang = session()->get('locale'); @endphp
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 



@if($currentlang=="en")
 <link rel="stylesheet" href="{{ url('/web/hamla/css/menu-footer-en.css') }}" />
<link rel="stylesheet" href="{{ url('/web/hamla/css/fontar.css') }} ">
@else
<link rel="stylesheet" href="{{ url('/web/hamla/css/fontar.css') }} ">
 <link rel="stylesheet" href="{{ url('/web/hamla/css/menu-footer.css') }}" />

@endif

 

 <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<script>
  /*
    $( window ).resize(function() {
    var container_width = $('#pageContainer').width();    
    $('#pageContainer').html('<div class="fb-page" data-href="https://www.facebook.com/7amleh" data-width="' + container_width + '" data-height="650" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/7amleh"><a href="https://www.facebook.com/7amleh">Facebook</a></blockquote></div></div>');
    FB.XFBML.parse();   */ 

    </script>


<script src="{{url('/web/hamla/Instagram/jquery.instagramFeed.min.js')}}"></script>

    <script>
        (function($){
            $(window).on('load', function(){
                $.instagramFeed({
                    'username': '7amleh',
                    'container': "#instagram-feed1",
                    'display_profile': true,
                    'display_biography': true,
                    'display_gallery': true,
                    'display_igtv': true,
                    'callback': null,
                    'styling': true,
                    'items': 10,
                    'items_per_row': 1,
                    'margin': 2
                }); 
            });
        })(jQuery);
    </script>


    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-164128117-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-164128117-1');
</script>

</head>



<body id="page-top">
  


<header>
  <div class="container">
  <div class="row">
     <div class="col-sm-2" id="logo">
     <a href="{{url('/')}}">
      <img src="{{url('/web/hamla/images/logo-new-font-03-1-1024x362.png')}}" class="img-fluid">
     </a>
    </div>
     <div class="col-sm-7">
      <nav class="navbar navbar-expand-sm">
        <!--
  <a class="navbar-brand" href="#">Navbar</a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item" id="about">
        <a class="nav-link" href="{{url('about')}}">{{ trans('home.aboutlabel')}}</a>
      </li>

      <li class="nav-item" id="news">
        <a class="nav-link" href="{{url('news')}}">{{ trans('home.NEWS')}}</a>
      </li>   
      <li class="nav-item" id="releases">
        
        <a class="nav-link" href="{{url('releases')}}">
        {{ trans('home.PUBLICATIONS')}}
        </a>
       
      </li>
      <li class="nav-item" id="campaigns">
         <a class="nav-link" href="{{url('campaigns')}}">
          {{ trans('home.CAMPAIGNS')}}
        </a>
      </li> 


      <li class="nav-item" id="contact">
        <a class="nav-link" href="{{url('contact')}}">
          {{ trans('home.contactus')}}
        </a>
      </li> 

     
      @if($currentlang=="en")
      <li class="nav-item">
         <a class="nav-link" href="{{url('lang/ar')}}" id="arlink">عربي
        </a>

       
      </li>  
      @else
      <li class="nav-item">
        <a class="nav-link" href="{{url('lang/en')}}">En</a>
      </li> 
      @endif
     
    </ul>
  </div>  
</nav>
     </div>
     <div class="col-sm-3" id="leftheaderpart">
       

       <a class="link2header" href="{{url('get-involved')}}">
          {{ trans('home.getinvolvedlabel')}}
       </a>

       <a class="likn1header" href="{{url('donate')}}">
         {{ trans('home.donatelable')}}
       </a>

     
      
     </div>
   </div>
    </div>
</header>


<!-- Main Content -->
@yield('content')

<!-- subcscribe -->
 <div class="container-fluid" id="subscribe">
  <div class="row">
    <div class="container">
      <div class="row">
        @if($currentlang=="ar")
          @php
          $namelabel = "الاسم";
          $emaillabel = "البريد الإلكتروني";
          $submitlabel = "ارسل انضمامي";
          @endphp
        <h4>انضم/ي إلى قائمة النشر  </h4>
        <p>
          لتكن جزء من التكافل المجتمعي وتنضم لفريق النشر في حملة
          </p>
        @else
          @php
          $namelabel = "Name";
          $emaillabel = "Email";
          $submitlabel = "Send";
          @endphp

        <h4>Sign up</h4>
        <p>Join 7amleh newsletter and get latest updates on our activities</p>
        @endif
      
           <form method="post"  action="{{ route('subscribe') }}" id="subscribeform" >
                                @csrf
          <input type="text" name="name" value="{{ old('name') }}" required placeholder="{{$namelabel}}">
          <input type="email" name="email" value="{{ old('email') }}" required placeholder="{{$emaillabel}}" > 
          <input type="submit" value="{{$submitlabel}}" id="btnsubscribe">
        </form>

         @if(session()->has('success'))
@if(Session::has('form'))
@php 
$form = session()->get('form'); 
 @endphp 
@if($form == "subscribe")
@php session()->put('form', '');  @endphp
    <div class="text-center alert alert-success" style="width: 100%; display: inline-block;">
        {{ trans('home.subscribesuccess') }}
    </div>
    @endif
@endif
@endif



@if  (count($errors) > 0)

    <div class="text-center alert alert-danger" style="width: 100%; display: inline-block;">
   {{ trans('home.subscribeerror') }}
  </div>

  

@endif


      </div>
    </div>
    
  </div>
 </div>
<!-- ../subcscribe -->

<!-- footer -->
<div class="jumbotron" style="margin-bottom:0">
  <footer>

<div class="container">
  <div class="row">
    <p class="col-sm-12" id="footerlogo">
      <img src="{{url('/web/hamla/images/footerlogo.png')}}" id="footerlogoimg"/>
    </p>
  </div>

  <div class="row">
    <ul class="footerul">
      <li><a href="{{url('/')}}">{{ trans('home.homelabel')}}</a></li>
      <li><a href="{{url('about')}}">{{ trans('home.aboutlabel')}}</a></li>
      <li><a href="{{url('news')}}">{{ trans('home.NEWS')}}</a></li>
      <li><a href="{{url('campaigns')}}">{{ trans('home.CAMPAIGNS')}}</a></li>
      <li><a href="{{url('releases')}}">{{ trans('home.PUBLICATIONS')}}</a></li>
      
      <li><a href="{{url('contact')}}">{{ trans('home.contactus')}}</a></li>
      <li><a href="{{url('donate')}}">{{ trans('home.donatelable')}}</a></li> 
      <li><a href="{{url('get-involved')}}">{{ trans('home.getinvolvedlabel')}}</a></li>
    </ul>
  </div>

     <div class="row socialfooter">
    <ul>
      <li><a href="{{setting('site.facebooklink')}}" target="_blank"><img src="{{url('/web/hamla/images/facebook.png')}}" /></a></li>
      <li><a href="{{setting('site.twitterlink')}}" target="_blank"><img src="{{url('/web/hamla/images/twitter.png')}}" /></a></li>
      <li><a href="{{setting('site.tubelink')}}" target="_blank"><img src="{{url('/web/hamla/images/youtupe.png')}}" /></a></li>
      <li><a href="{{setting('site.linkedlink')}}" target="_blank"><img src="{{url('/web/hamla/images/linkedin.png')}}" /></a></li>
      <li><a href="mailto:{{setting('site.email')}}"><img src="{{url('/web/hamla/images/email.png')}}" /></a></li>
    </ul>
    
  </div>

 <div class="row" id="copyright">
   
    <div class="col-sm-6">
      {{ trans('home.copyright')}} &copy;
    <span style="color:  #8DC640;">{{ trans('home.hamlaname')}}</span>
    
  </div>
    <div class="col-sm-6">
      {{ trans('home.developedby')}}
      <span id="nadsoft">NADSoft</span>
    </div>
 </div>

</div>
    </footer>
</div>







<!-- Plugin JavaScript -->
<script src="{{url('/web/access/vendor/jquery-easing/jquery.easing.min.js')}}"></script>


</body>
</html>
