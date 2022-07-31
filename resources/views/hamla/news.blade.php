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
{{ trans('home.NEWS')}}
      </span>

    </h2>
    </div>
  </div>


<!-- main content -->
<div class="container">
  <!-- news & reports -->
   <div class="row" id="news">
    <!--
    <h2 class="col-sm-12 title">
      اقرا اخر الاخبار والتقارير في موقع حملة
    </h2> -->



     @foreach($posts as $new)
 
  <a href="{{url(date_format($new->created_at,'Y/m/d').'/'.$new->slug)}}" class="col-sm-4">
   <div>
    <div id="newsbox">
     
    @php $new->image = str_replace('\\','/',$new->image) @endphp
     @if (strpos($new->image, 'http') !== false)
     <div id="homeimgbox" style="background: url({{url($new->image)}})">
     </div>
     @else
     <div id="homeimgbox" style="background: url({{url('storage/'.$new->image)}})">
     </div>
     @endif
     <p class="caption">
     
      {{ \Illuminate\Support\Str::limit($new->title, 35, $end='...') }}
     
    
     </p>
   </div>
   </div>
</a>
@endforeach



</div>
  <!-- ../news & reports  -->

    <!-- pagination -->
     <div class="col-sm-12"  >
  <div class="row" id="pagination">
   
   {!! $posts ->links() !!}
  </div>
</div>
</div>
</div>

<script>
        $(document).ready(function() {
            $('ul.navbar-nav li').removeClass('active');
            $('li#news').addClass('active');
        });
    </script>

@endsection
