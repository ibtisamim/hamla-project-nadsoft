@extends('hamla.layouts.Web_app')

@section('content')
@php $currentlang = session()->get('locale'); @endphp
@if($currentlang=="en")
   <link rel="stylesheet" href="{{url('web/hamla/css/about-en.css')}}">
@else
 <link rel="stylesheet" href="{{url('web/hamla/css/about.css')}}">
@endif
    

 <div class="container-fluid">
   <div class="row">
    <h2 class="articletitle">
      @if($currentlang=="en")
      <span>
        About Us
      </span><br/>
      7amleh – Arab Center for Social Media Advancement
      @else
      <span>عن حملة</span><br/>
      حملة- المركز العربي لتطوير الإعلام الاجتماعي
      @endif

    </h2>
    </div>
  </div>


  <!-- main content -->
<div class="container" id="content">
  <div class="row">
     @if($about != null)
                    <!-- first section -->
                    @if($currentlang=="en")
                    {!!  $about->getTranslatedAttribute('description','en') !!}
                    @else
                    {!! $about->description !!}
                    @endif

                    


                    
                    <br/>
               
                    @endif
  </div>
</div>


<div class="container-fluid" id="team">
  <div class="row">
    <div class="container">
      <div class="row">

        <h2 class="maintitle">{{trans('home.teamstext')}}</h2>


      </div>

      <div class="row">
        <h2 class="col-sm-12 title"  id="part1"> 
        {{trans('home.teams1')}}
        </h2>
        @foreach($team1 as $tem1)
        <div class="col-sm-4">
          <div class="temmember">
            <!--
            <img src="{{url('storage/'.$tem1->image)}}">
          -->

        @php $tem1->image = str_replace('\\','/',$tem1->image) @endphp
     <div  class="teamimg" style="background: url({{url('storage/'.$tem1->image)}})">
     </div>

            <p class="caption">
              <span class="name">
                @if($currentlang=="en")
                {{ $tem1->getTranslatedAttribute('name','en') }}
                @else
                {{$tem1->name}}
                @endif
              </span>
              @if($currentlang=="en")
              {{ $tem1->getTranslatedAttribute('description','en') }}
              @else
              {{$tem1->description}}
              @endif
            </p>
          </div>
        </div>

@endforeach
         
</div>

      <!-- row2 -->
       <div class="row" id="part2">
        <h2 class="col-sm-12 title"> 
{{trans('home.teams2')}}
        </h2>

        @foreach($team2 as $tem2)
        <div class="col-sm-4">
          <div class="temmember">
            <!--
            <img src="{{url('storage/'.$tem2->image)}}"> -->
             @php $tem2->image = str_replace('\\','/',$tem2->image) @endphp
     <div  class="teamimg" style="background: url({{url('storage/'.$tem2->image)}})">
     </div>
            <p class="caption">

              <span class="name">
@if($currentlang=="en")
                {{ $tem2->getTranslatedAttribute('name','en') }}
                @else
                {{$tem2->name}}
                @endif
              </span>
               @if($currentlang=="en")
              {{ $tem2->getTranslatedAttribute('description','en') }}
              @else
              {{$tem2->description}}
              @endif
            </p>
          </div>
        </div>

@endforeach
     

      </div>
      <!-- ../row2 -->

      </div>
   </div>
    

<div class="container-fluid" >
 <!-- row3 -->
       <div class="row" id="team2">
        <div class="container">
          <div class="row">
        <h2 class="col-sm-12 title"> 
{{trans('home.teams3')}}
        </h2>

        @foreach($team3 as $tem3)
        <div class="col-sm-4">
          <div class="temmember">
            @php $tem3->image = str_replace('\\','/',$tem3->image) @endphp
     <div  class="teamimg" style="background: url({{url('storage/'.$tem3->image)}})">
     </div>
<!--
            <img src="{{url('storage/'.$tem3->image)}}"> -->
            <p class="caption">
                <span class="name">@if($currentlang=="en")
                {{ $tem3->getTranslatedAttribute('name','en') }}
                @else
                {{$tem2->name}}
                @endif</span>
                @if($currentlang=="en")
              {{ $tem3->getTranslatedAttribute('description','en') }}
              @else
              {{$tem3->description}}
              @endif
          </div>
        </div>
        @endforeach

</div>

</div>
</div>
</div>


  </div>
</div>


<script>
        $(document).ready(function() {
            $('ul.navbar-nav li').removeClass('active');
            $('li#about').addClass('active');
        });
    </script>

@endsection
