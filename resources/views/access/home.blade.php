@extends('access.layouts.Web_app')



@section('content')



    <section id="home">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mx-auto">
                        @php
                            $active = 'active';
                        @endphp

                        <div id="carouselhome" class="carousel slide carousel-fade" data-ride="carousel" style="width: 100%; max-width: 100%;">
                            <div class="carousel-inner ">
                                @foreach($slider as $slide)
                                    <div class="carousel-item {{$active}} col-md-12">
                                        <div class="col-md-5 float-left">
                                            <h2 class="maintitle">{{$slide->title}}</h2>
                                            <p>
                                                {{$slide->description}}
                                            </p>

                                        </div>
                                        <div class="homeslideimg col-md-7 float-right">
                                            <img src="{{url('storage/'.$slide->image)}}"  />
                                        </div>
                                        @php
                                            $active = '';
                                        @endphp
                                    </div>
                                @endforeach

                            </div>

                            <!--
                            <ol class="carousel-indicators">
                                @php
                                    $index = 0;
                                @endphp
                                @foreach($slider as $slide)
                                    @if($index == 0)
                                        <li data-target="#carouselhome" data-slide-to="{{$index}}" class="active"></li>
                                    @else
                                        <li data-target="#carouselhome" data-slide-to="{{$index}}"></li>
                                    @endif
                                    @php $index ++; @endphp
                                @endforeach
                            </ol> -->


                            <!--
                            <a class="carousel-control-prev" href="#carouselhome" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">
                                <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                            <a class="carousel-control-next" href="#carouselhome" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only"><i class="fas fa-angle-left"></i></span>
                            </a> -->

                        </div>


                </div>
            </div>
        </div>
    </section>

        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12" >
                    <h2 class="maintitle">About Us</h2>
                </div>
                </div>
                <div class="row">
                    <div class="col-lg-12" id="gallerycontainer">

                    @foreach($gallerysales as $img)
                        <div class="galleryitem">
                            <img src="{{url('storage/'.$img->image)}}" />
                        </div>
                        @endforeach
                </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 mx-auto">

                        {!! $about->description !!}
                    </div>
                </div>
            </div>
        </section>

        <section id="brands" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 d-none d-md-block d-lg-block" style="      float: none; margin: auto;  text-align: center;">
                        <h2 class="maintitle">Our Brands</h2>
                        <div id="carouselExampleCaptions" class="carousel slide cat-slider col-lg-10 float-none" style="margin: auto" data-ride="carousel">

                            <div class="carousel-inner">
                                @php $active = 'active'; $index = 0; $length = 0; @endphp
                                @foreach($brands as $brand)
                                    @if($index==0)
                                        <div class="carousel-item {{$active}}">
                                            @endif
                                            @php $active = ''; $index ++;  $length ++;@endphp

                                                <div class="col-md-4  brand mr-2 ml-2" >
                                                    <span class="helper"></span> <img src="{{url('storage/'.$brand->image)}}">

                                                </div>


                                            @if($index==2)
                                                @php $index = 0; @endphp
                                        </div>
                                @elseif($length==count($brands))
                                </div>
                                    @endif
                                @endforeach

                            </div>

                            @if(count($brands) > 2)
                            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">
                                <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only"><i class="fas fa-angle-left"></i></span>
                            </a>
                                @endif

                        </div>

                </div>

                    <div class="col-lg-12 d-block d-sm-none " style="        text-align: center;">
                        <h2 class="maintitle">Our Brands</h2>
                        <div id="carouselExampleCaptions2" class="carousel slide cat-slider" data-ride="carousel">

                            <div class="carousel-inner">
                                @php $active = 'active'; @endphp
                                @foreach($brands as $brand)
                                        <div class="carousel-item {{$active}}">
                                            @php $active = ''; @endphp
                                            <div class="brandmobile">
                                                <span class="helper"></span><img src="{{url('storage/'.$brand->image)}}" style="height: 112px; margin: 5px;">
                                            </div>
                                    </div>
                            @endforeach
                        </div>

                    </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 ">
                        <h2 class="maintitle" >Contact us</h2>

                        <div class="col-md-7 float-left" id="contactformcontainer">
                        <div class="ccontactform">


                            <form method="post"  action="{{ route('contactus') }}"  >
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-10 mt-3" style="       margin: auto; float: none;">
                                        <p class="contacttitle">Keep in touch!</p>
                                        <p class="contactdesc">Send us your message and we will serve you as quick as we can</p>
                                        <label>Your Name:
                                        </label>
                                        <input type="text" class="form-control" name="name" value="{{old('name')}}" required placeholder="Enter Full Name">
                                    </div>


                                    <div class="form-group col-md-10 mt-3" style="       margin: auto; float: none;">
                                        <label>Your Email:
                                        </label>
                                        <input type="text" class="form-control" name="email" value="{{old('email')}}" required placeholder="Enter Your Email">
                                    </div>
                                    <div class="form-group col-md-10 mt-3" style="      margin: auto; float: none;">
                                        <label>Your Message:
                                        </label>
                                        <textarea class="form-control"  name="msg" placeholder="Enter your message" required>{{old('msg')}}</textarea>

                                    </div>
                                    <button class="col-md-4 offset-md-4 col-12 mt-3 btn btn-primary "  required type="submit">
                                       Send
                                    </button>
                                </div>
                            </form>
                        </div>
                        </div>
                        <div class="col-md-5 float-right" id="contactinfo">

                            @if ((setting('site.map') != null) && (setting('site.address')!=null))
                                <div class="row mb-4 desc">
                                    <div class="col-2 text-right"><i class="fas fa-map-marker-alt"></i></i></div>
                                    <div class="col-10">
                                        <a href="{{ setting('site.map') }}" target="_blank">{{ setting('site.address') }}</a>
                                    </div>
                                </div>
                            @elseif(setting('site.address')!=null)
                                <div class="row mb-4 desc">
                                    <div class="col-2 text-center"><i class="fas fa-map-marker-alt"></i></div>
                                    <div class="col-7">
                                        {!! setting('site.address') !!}
                                    </div>
                                </div>
                            @endif

                            @if(setting('site.phone') != null)
                                    <div class="row mb-4 desc num">
                                        <div class="col-2 text-right"><i class="fas fa-phone-alt"></i></div>
                                        <div class="col-10 " style="    direction: ltr;">{{ setting('site.phone') }}</div>
                                    </div>
                                @endif


                            @if(setting('site.email') != null)
                                <div class="row mb-4 desc">
                                    <div class="col-2 text-right"><i class="fas fa-envelope"></i></div>
                                    <div class="col-10">
                                        {{ setting('site.email') }}
                                    </div>
                                </div>
                            @endif







<!--
                                <div class="row  social">
                                    <p>Follow us on social Media</p>

                                    <a href="https://www.facebook.com" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="https://twitter.com/?lang=en" target="_blank">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="http://instagram.com" target="_blank">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div> -->


                        </div>

                   </div>
                </div>
            </div>
        </section>

@endsection
