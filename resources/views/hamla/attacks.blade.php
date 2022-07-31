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
{{ trans('home.CAMPAIGNS')}}
      </span>

    </h2>
    </div>
  </div>

<!-- main content -->
<div class="container">

    <!-- Attacks -->
   <div class="row" id="attacks">
    <!--
       <h2 class="col-sm-12 title"> 
اقرا اخر الاخبار والتقارير في موقع حملة
       </h2> -->

 @foreach($posts as $campaign)
    <div class="col-sm-4" >
      <a href="{{url(date_format($campaign->created_at,'Y/m/d').'/'.$campaign->slug)}}" >
        @php $campaign->image = str_replace('\\','/',$campaign->image) @endphp
      <div id="attacksbox" style="background: url({{url('storage/'.$campaign->image)}})">
     <p class="caption">
      {{ \Illuminate\Support\Str::limit($campaign->title, 60, $end='...') }}
     </p>
   </div>
 </a>
 </div>
@endforeach
  </div>
  <!-- ../Attacks -->
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
            $('li#campaigns').addClass('active');
        });
    </script>


@endsection
