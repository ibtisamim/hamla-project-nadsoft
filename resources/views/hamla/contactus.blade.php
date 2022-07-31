@extends('hamla.layouts.Web_app')



@section('content')

@php $currentlang = session()->get('locale'); 


@endphp


 @if($currentlang=="en")
  <link rel="stylesheet" href="{{ url('web/hamla/css/contactus-en.css') }} ">
@else
 <link rel="stylesheet" href="{{ url('web/hamla/css/contactus.css') }} ">

@endif


 <div class="container-fluid">
   <div class="row">
    <h2 class="articletitle">
      <span>
      {{trans('home.contactustitle')}}
      </span>
    </h2>
    </div>
  </div>


<!-- main content -->
<div class="container" style="position: relative;">
  <div class="row" id="contactinfo">
   

        
   <div class="col-sm-6" id="info">
     <p>
      @if($currentlang=="en")
       {{setting('site.description')}}
       @else
        {{setting('site.sitedescriptionen')}}
       @endif
     </p>


     <div id="address">
     <i class="fas fa-location-arrow"></i>
       <span>{{trans('home.addresslabel')}}:</span>

@if($currentlang=="ar")
      {{setting('site.address')}}
      @else
      {{setting('site.addressen')}}
      @endif

      
     </div>

     <div  id="fax">
      <img src="web/hamla/images/fax.png" />
       <span>{{trans('home.faxlabel')}} :</span>
       {{setting('site.fax')}}
     </div>

     <div id="phone">
      <img src="web/hamla/images/phone.png" />

       <span>{{trans('home.phonelabel')}} :</span>
      {{setting('site.phone')}}
     </div>

     <div id="email">
      <img src="web/hamla/images/emailcontact.png" />

       <span>{{trans('home.emaillabel')}} :</span>
      {{setting('site.email')}}
     </div>

   </div>

   <div class="col-sm-6">
     <div class="formcontact">

<p>
  {{trans('home.boxcontacttitle')}}
</p>
       <form method="post"  action="{{ route('contactus') }}"  >
          @csrf
        <label>
{{trans('home.nameplaceholder')}}
          <span>*</label>
        <input type="text" name="name" class="contactinputtext" required>
        <label> 
{{trans('home.emailplaceholder')}}
          <span>*</span></label>
        <input type="text" name="email" class="contactinputtext" required >
        <label> 
{{trans('home.subjectplaceholder')}}
          <span>*</span></label>
        <input type="text" name="subject" class="contactinputtext" required>
        <label>
            {{trans('home.msgplaceholder')}}
         <span>*</span></label>
        <input type="text" name="msg" class="contactinputtext" required>


        <button type="submit" class="contactinputbtn">
          {{trans('home.contactbtn')}}
        </button>
      </form>


@if(session()->has('success'))
@if(Session::has('form'))
@php 
$form = session()->get('form'); 
 @endphp
@if($form == "contact")
@php session()->put('form', '');  @endphp
    <div class="text-center alert alert-success" style="width: 100%; display: inline-block;">
        {{ trans('home.contactsuccess') }}
    </div>
    @endif
@endif
@endif



<p>
  {{trans('home.contacttext')}}
</p>

<ul id="social">
  <li><a href="{{setting('site.facebooklink')}}" target="_blank"><img src="web/hamla/images/facebook.png" style=" max-width: 13px;"> </a></li>
  <li><a href="{{setting('site.twitterlink')}}" target="_blank"><img src="web/hamla/images/twitter.png"> </a></li>
  <li><a href="{{setting('site.whatsup')}}" target="_blank"><img src="web/hamla/images/whatsup.png"> </a></li>
  <li><a href="{{setting('site.linkedlink')}}" target="_blank"><img src="web/hamla/images/linkedin.png"> </a></li>
  </ul>
     </div>
   </div>
    
  </div>
</div>


<div class="container-fluid" id="googlemap">
   <div class="row">
    {!! setting('site.google_analytics_tracking_id') !!}
   </div>
</div>

<script>
        $(document).ready(function() {
            $('ul.navbar-nav li').removeClass('active');
            $('li#contact').addClass('active');
        });
    </script>

@endsection
