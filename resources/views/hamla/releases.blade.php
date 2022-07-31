@extends('hamla.layouts.Web_app')



@section('content')
@php $currentlang = session()->get('locale'); @endphp

 @if($currentlang=="en")
  <link rel="stylesheet" href="{{ url('web/hamla/css/category-en.css') }} ">
@else
 <link rel="stylesheet" href="{{ url('web/hamla/css/category.css') }} ">

@endif

 <div class="container-fluid">
   <div class="row">
    <h2 class="articletitle">
      <span>
{{ trans('home.PUBLICATIONS')}}
      </span>

    </h2>
    </div>
  </div>


<!-- main content -->
<div class="container">
  <!-- Releases -->
   <div class="row" id="releases">
    <!--
   <h2 class="col-sm-12 title">
   اقرا آخر اصدارات موقع حملة
   </h2> -->




  @foreach($posts as $release)

  <a href="{{url(date_format($release->created_at,'Y/m/d').'/'.$release->slug)}}" class="col-sm-6">
<div>
  <div id="releasesbox">
     
     @if($release->image!='')
     @if (strpos($release->image, 'http') !== false)
     <img src="{{url($release->image)}}" class="img-fluid" />
     @else
     <img src="{{url('storage/'.$release->image)}}" class="img-fluid" />
     @endif
     @else
     @if($currentlang=="en")
<div  style="background: #8DC640 0% 0% no-repeat padding-box; width: 252px; height: 100%;     float: left;">
     </div>
     @else
     <div  style="background: #8DC640 0% 0% no-repeat padding-box; width: 252px; height: 100%;     float: right;">
     </div>
     @endif
      @endif

     <p class="caption">
      {{ \Illuminate\Support\Str::limit($release->title, 80, $end='...') }}
     
      
     </p>
   </div>
   </div>
</a>

@endforeach

 <!-- pagination -->
 <div class="col-sm-12"  >
  <div class="row" id="pagination">

    {!! $posts ->links() !!}
  </div>
</div>
</div>

  <!-- ../Releases -->



 
</div>


<script>
        $(document).ready(function() {
            $('ul.navbar-nav li').removeClass('active');
            $('li#releases').addClass('active');
        });
    </script>
    
@endsection
