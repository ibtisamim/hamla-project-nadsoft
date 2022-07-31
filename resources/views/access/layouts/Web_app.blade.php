<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{setting('site.description')}}">
    <meta name="author" content="">
    <title> {{setting('site.title')}} @yield('title')</title>





    <link href="{{ url('/web/fontawesome/css/all.css') }}" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- fancybox -->
    <link href="{{ url('/web/access/js/fancybox/dist/jquery.fancybox.min.css') }}" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="{{ url('/web/access/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->

    <link rel="stylesheet" href="{{ url('/web/access/css/scrolling-nav.css') }}?v=<?=time();?>" />
    <link rel="stylesheet" href="{{ url('/web/access/css/style.css') }}?v=<?=time();?>" />

    <script src="{{url('/web/access/vendor/jquery/jquery.min.js')}}"></script>
</head>




<body id="page-top">


<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark  fixed-top" id="mainNav">
    <div class="container">
        <div class="row">
            <div class="col-lg-2" id="logocontainer">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">
                    <img src="{{'storage/'.setting('site.logo')}}" class="img-fluid" id="logo">
                </a>
            </div>
            <div class="mainmenuconteiner col-lg-8" >


                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#brands">Brands</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#contact">Contact Us</a>
                        </li>


                        @if ((Session::has('lang')) )
                            @php $lang = Session::get('lang');  @endphp
                            @if($lang=="en")
                                <!--
                                <li class="nav-item">
                                    <a class="nav-link js-scroll-trigger lang" href="{{url('/language')}}">Ar</a>
                                </li> -->
                            @else
                                <!--
                                <li class="nav-item">
                                    <a class="nav-link js-scroll-trigger lang" href="{{url('/language')}}">En</a>
                                </li> -->
                            @endif
                        @endif

                    </ul>
                </div>
            </div>
        </div>

</div>
</nav>


<!--
<header class="bg-primary text-white">
<div class="container text-center">
<h1>Welcome to Scrolling Nav</h1>
<p class="lead">A landing page template freshly redesigned for Bootstrap 4</p>
</div>
</header> -->

<!-- Main Content -->
@yield('content')

<footer class="py-2 bg-dark">
<div class="container">
    <div class="row">
        <div class="col-lg-6"><p class="powerdp">Powered by <img src="/web/access/css/images/nadsoftlogo.png"/> </p></div>
        <div class="col-lg-6"><p class="copyright">All rights reserved <span style="color: #FB2120">Access</span> &copy; 2020</p></div>

    </div>

</div>
</footer>

<div class="modalmessages">

@if ((Session::has('success')) || (count($errors) > 0))
<div class="row">
<div class="col-md-12">
@if(count($errors) > 0)
<!-- Modal -->
   <div class="modal " id="errorsmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h2 class="maintitle">
Errors List
                   </h2>

                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true" style="color: #E94150; font-size: 35px; opacity: 1;">&times;</span>
                   </button>

               </div>

               <div class="modal-body" style=" padding: 5%;">
                   @foreach ($errors->all() as $error)
                       <p class="text-left alert alert-danger">{!!   $error !!}</p>
                   @endforeach
               </div>
           </div>
       </div>
   </div>
@endif



@if(Session::has('success'))
<!-- Modal -->
   <div class="modal " id="errorsmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true" style="color: #E94150; font-size: 35px; opacity: 1;">&times;</span>
                   </button>
               </div>

               <div class="modal-body" style=" padding: 5%;">
                   <div class="alert alert-success">
                       {!!   Session::get('success') !!}
                   </div>
               </div>
           </div>
       </div>
   </div>

@endif
</div>
</div>

@endif
</div>


<script src="{{url('/web/access/js/fancybox/dist/jquery.fancybox.min.js')}}"></script>

<!-- Bootstrap core JavaScript -->
<script src="{{url('/web/access/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Plugin JavaScript -->
<script src="{{url('/web/access/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
<!-- Custom JavaScript for this theme -->
<script src="{{url('/web/access/js/scrolling-nav.js')}}"></script>



<script>

$(document).ready(function(){

$(function () {

$('#errorsmodal').modal('show');
$('[data-toggle="tooltip"]').tooltip()
});


});



</script>

</body>
</html>
