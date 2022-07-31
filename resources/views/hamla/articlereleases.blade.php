@extends('hamla.layouts.Web_app')

@section('headercontent')
<meta property="og:url"                content="{{url(date_format($post->created_at,'Y/m/d').'/'.$post->slug)}}" />
<meta property="og:type"               content="article" />
<meta property="og:title"              content=" {{$post->title}}" />
<meta property="og:description"        content="{{$post->excerpt}}" />
      @if (strpos($post->image, 'http') !== false)
      <meta property="og:image"              content="{{$post->image}}" /> 
@else
<meta property="og:image"              content="{{url('/storage/'.$post->image)}}" />
    
  @endif


@endsection

@section('content')

 @php $currentlang = session()->get('locale'); @endphp

 <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">



@if($currentlang=="en")
  <link rel="stylesheet" href="{{ url('/web/hamla/css/article-en.css') }}" />
@else
  <link rel="stylesheet" href="{{ url('/web/hamla/css/article.css') }}" />
@endif

<div class="container-fluid">
   <div class="row">
    <h2 class="articletitle2">
      <span>
        {{ trans('home.PUBLICATIONS')}}
      </span><br/>
     
      {{$post->title}}
     
<br/>
   <p class="date col-sm-2 col-md-2" >
        {{$post->created_at->format('Y-m-d')}}
      </p>

      <p class="col-sm-2 col-md-2" id="categorylink">
        <a href="{{url('releases')}}">{{ trans('home.PUBLICATIONS')}}</a>
      </p>

      <div class="col-sm-12 col-md-12" id="categoryshare">
       
           <div class="social-buttons">
          <ul>
            <li>
    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url(date_format($post->created_at,'Y/m/d').'/'.$post->slug)) }}"
       target="_blank">
       <img src="{{url('/web/hamla/images/facebook.png')}}">
    </a>
  </li>

  <li>
    <a href="https://twitter.com/intent/tweet?url={{ urlencode(url(date_format($post->created_at,'Y/m/d').'/'.$post->slug)) }}"
       target="_blank">
       <img src="{{url('/web/hamla/images/twitter.png')}}">
    </a>
    </li>
<li><a href="whatsapp://send?text={{ urlencode(url(date_format($post->created_at,'Y/m/d').'/'.$post->slug)) }}"><img src="{{url('/web/hamla/images/whatsup.png')}}"></a></li>
<li>
    <a href="http://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(url(date_format($post->created_at,'Y/m/d').'/'.$post->slug)) }}"
       target="_blank">
       <img src="{{url('/web/hamla/images/linkedin.png')}}">
    </a>
  </li>
    </ul>
</div>
      </div>


    </h2>
  
   

     </div>
  </div>



<!-- main content -->
<div class="container" id="articecontent">
  <div class="row">
<p>
 
      {{$post->excerpt}}
      
</p>
    
     @if($post->image != '')
    <p>
      @if (strpos($post->image, 'http') !== false) 
      <img src="{{$post->image}}" class="img-fluid">
      @else
      <img src="{{url('/storage/'.$post->image)}}" class="img-fluid">
      @endif
    </p>
    @endif

{!!  $post->body !!}
  </div>
</div>


<!-- related -->
@if(count($relatedposts) > 0)
 <div class="container-fluid" id="related">
  <div class="row">
    <div class="container">
      <div class="row">
         <div class="col-sm-12">
        <h2 id="title">
        {{trans('home.relatedtitle')}}
        </h2>
        </div>
        </div>

<div class="row" id="releases">

@php $counter = 0; @endphp
@foreach($relatedposts as $relatedpost)
   <a href="{{url(date_format($relatedpost->created_at,'Y/m/d').'/'.$relatedpost->slug)}}" class="col-sm-6">
<div>
  <div id="releasesbox">
     
     @if($relatedpost->image!='')
     @if (strpos($relatedpost->image, 'http') !== false)
     <img src="{{$relatedpost->image}}" class="img-fluid" />
     @else
     <img src="{{url('storage/'.$relatedpost->image)}}" class="img-fluid" />
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
      {{ \Illuminate\Support\Str::limit($relatedpost->title, 80, $end='...') }}
     
     </p>
   </div>
   </div>
</a>
@php $counter++; @endphp
@if($counter > 1)
@php break; @endphp
@endif
@endforeach

  
</div>
  <!-- tags -->
 @if(count($tags) > 0)
 @php $count = count($tags) ; @endphp
      <div class="row">
  <div class="col-sm-12">
    <span class="tagspan">Tags :</span>
   
    <ul class="tagslist">
      @for ($i = 0; $i < $count; $i++)
        @if(strlen($tags[$i]) > 4)
        <li><a href="{{url('/tags/3/'.$tags[$i] )}}">
<i class="fa fa-tag"></i>
      {{ $tags[$i] }} </a></li>
      @endif
    @endfor
    </ul>
  </div>
</div>
@endif
<!-- end tags -->




      </div>
    </div>
  </div>
  @endif
<!-- ../related -->

<script>

    var popupSize = {
        width: 780,
        height: 550
    };

    $(document).on('click', '.social-buttons > a', function(e){

        var
            verticalPos = Math.floor(($(window).width() - popupSize.width) / 2),
            horisontalPos = Math.floor(($(window).height() - popupSize.height) / 2);

        var popup = window.open($(this).prop('href'), 'social',
            'width='+popupSize.width+',height='+popupSize.height+
            ',left='+verticalPos+',top='+horisontalPos+
            ',location=0,menubar=0,toolbar=0,status=0,scrollbars=1,resizable=1');

        if (popup) {
            popup.focus();
            e.preventDefault();
        }

    });
</script>
@endsection
