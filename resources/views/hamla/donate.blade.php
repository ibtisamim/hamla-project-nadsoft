@extends('hamla.layouts.Web_app')



@section('content')

@php $currentlang = session()->get('locale'); @endphp



 @if($currentlang=="en")
  <link rel="stylesheet" href="{{ url('web/hamla/css/donate-en.css') }} ">
@else
 <link rel="stylesheet" href="{{ url('web/hamla/css/donate.css') }} ">

@endif



 <div class="container-fluid">
   <div class="row">
    <h2 class="articletitle">
      <span>
        {{ trans('home.donatelable')}}
      </span>
    </h2>
    </div>
  </div>


  <!-- main content -->

<div class="container" id="mainsection">
  <div class="row">
   
<h2 id="firtstsection">
  {{trans('home.donatesection1')}}
</h2>


<div class="col-sm-12">
  <div id="accordion" >
<!-- accordion 1 -->
     <div class="card mb-2">
    <div class="card-header" id="heading1">
      <h5 class="mb-0 panel-heading"  data-toggle="collapse" data-target="#collapse1"  aria-expanded="true" aria-controls="collapse1">
       Paypal
      </h5>
    </div>

    <div id="collapse1" class="collapse show " aria-labelledby="heading1" data-parent="#accordion">
      <div class="card-body border-top">
    <!--
      <h2>
        تبرع من خلال موقع paypal لتكن معاملتك اكثر سرعة ،آمان

      </h2> -->
    
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick"><br />
<input type="hidden" name="hosted_button_id" value="AV67UA7UAJBNC"><br />
@if($currentlang=="en")
        <input type="image" src="{{url('/web/hamla/images/paypalbutton-en.png')}}" style="    max-width: 100%;" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"><br />
        @else
       <input type="image" src="{{url('/web/hamla/images/paypalbutton.png')}}" style="    max-width: 100%;" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"><br />
        @endif


 


</form>


     
      </div>
    </div>



  </div>
<!-- ../accordion 1 -->


<!-- accordion 2 -->
     <div class="card mb-2">
    <div class="card-header" id="heading2">
      <h5 class="mb-0 panel-heading"  data-toggle="collapse" data-target="#collapse2"  aria-expanded="true" aria-controls="collapse2">
    {{trans('home.checktext2')}}
      </h5>
    
    </div>

    <div id="collapse2" class="collapse show " aria-labelledby="heading2" data-parent="#accordion">
      <div class="card-body border-top">
    
    
      
      <h2>
     {{trans('home.checktext')}}
      </h2>
    
    <div class=" col-sm-7  addressacc">
       @if($currentlang=="en")
        {{setting('site.check')}}
        @else
         {{setting('site.checkar')}}
        @endif
    </div>

    @if($currentlang=="en")
 <a href="{{setting('site.donatemap')}}" target="_blank">
        <img src="{{url('web/hamla/images/map.png')}}" style="    margin-left: 10px;     margin-right: 10px;     margin-top: -2px;" />{{trans('home.maptitle')}}
      </a>
      @else
      @if($currentlang=="ar")
 <a href="{{setting('site.donatemap')}}" target="_blank">
        {{trans('home.maptitle')}}<img src="{{url('web/hamla/images/map.png')}}" style="    margin-left: 10px;     margin-right: 10px;     margin-top: -2px;" />
      </a>
@endif
@endif

    



     

      </div>
    </div>



  </div>
<!-- ../accordion 2 -->



<!-- accordion 3 -->
     <div class="card mb-2">
    <div class="card-header" id="heading3">
      <h5 class="mb-0 panel-heading"  data-toggle="collapse" data-target="#collapse3"  aria-expanded="true" aria-controls="collapse3">
  {{trans('home.banktext1')}}
      </h5>
    </div>

    <div id="collapse3" class="collapse show " aria-labelledby="heading3" data-parent="#accordion">
      <div class="card-body border-top">
    
    <h2>
      {{trans('home.banktext2')}}
    </h2>
    
    <div class="col-sm-8" id="box">
        @if($currentlang=="en")
        {!!setting('site.bank')!!}
        @else
        {!!setting('site.bankar')!!}
        @endif
    </div>
      
      </div>
    </div>



  </div>
<!-- ../accordion 3 -->

  </div>


  </div>
    
  </div>
</div>

@endsection
