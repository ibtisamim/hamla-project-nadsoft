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
{{ trans('home.searchresult')}}
      </span>

    </h2>
    </div>
  </div>

<div class="container" id="innercontent">
  @if(count($posts) > 0)
<ul>
@foreach($posts as $post)


<li><a href="{{url(date_format($post->created_at,'Y/m/d').'/'.$post->slug)}}">{{ $post->title}}</a></li>

@endforeach
</ul>
@else
@if($currentlang=="en")
<p class="text-left">No result found</p>
@else
<p class="text-right">
  لا يوجد نتائج مطابقة لعملية البحث
</p>
@endif
@endif

 
    <!-- pagination -->
  <div class="col-sm-12"  >
  <div class="row" id="pagination">
    {{ $posts ->links() }}

    
  </div>
</div>

</div>


@endsection
