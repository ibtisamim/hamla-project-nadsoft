@extends('hamla.layouts.Web_app')



@section('content')

@php $currentlang = session()->get('locale'); @endphp



 @if($currentlang=="en")
  <link rel="stylesheet" href="{{ url('web/hamla/css/getinvolved-en.css') }} ">
@else
 <link rel="stylesheet" href="{{ url('web/hamla/css/getinvolved.css') }} ">

@endif


 <div class="container-fluid">
   <div class="row">
    <h2 class="articletitle ">
      <span>
  {{trans('home.getinvolvedlabel')}}
      </span>
    </h2>
    </div>
  </div>


  <!-- main content -->
<div class="container" id="section1">
  <div class="row text-left">
   
   <h2>
     @if($getinvolved != null)
                    @if($currentlang=="en")
                    {!!  $getinvolved->getTranslatedAttribute('excerpt','en') !!}
                    @else
                    {!! $getinvolved->excerpt !!}
                    @endif
                    <br/>
               
                    @endif
   </h2>

   <ul>
    <li><img src="web/hamla/images/donate/icon1.png" />
<span>
{{trans('home.img1')}}
</span>
    </li>
     <li><img src="web/hamla/images/donate/icon6.png" />
<span>
  {{trans('home.img2')}}
</span>
     </li>
      <li><img src="web/hamla/images/donate/icon2.png" />
<span>
  {{trans('home.img3')}}
</span>
      </li>
     <li><img src="web/hamla/images/donate/icon7.png" />
<span>
 {{trans('home.img4')}}
</span>
     </li>
      <li><img src="web/hamla/images/donate/icon3.png" />

<span>
    {{trans('home.img5')}}
</span>
      </li>
     <li><img src="web/hamla/images/donate/icon4.png" />

<span>
 {{trans('home.img6')}}
</span>
     </li>
     <li><img src="web/hamla/images/donate/icon5.png" />


<span>
{{trans('home.img7')}}
</span>
     </li>
   </ul>


   <p>
     
{{trans('home.tawasal')}}:

<a href="mailto:{{setting('site.email')}}"> {{setting('site.email')}}</a>
{{trans('home.tawasaltxt')}}
   </p>
    
  </div>
</div>


<div class="container-fluid" id="section2">
   <div class="row">
    <div class="container">
      <div class="row text-left">
 @if($getinvolved != null)
                    @if($currentlang=="en")
                    {!!  $getinvolved->getTranslatedAttribute('description','en') !!}
                    @else
                    {!! $getinvolved->description !!}
                    @endif
                    <br/>
               
                    @endif

     </div>
    </div>
    </div>
  </div>

@endsection
