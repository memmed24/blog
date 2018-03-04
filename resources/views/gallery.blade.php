@extends('layouts.app')

@section('content')

    <div style="background:url('/img/1920x1080/01.jpg'); background-size: 100%; background-position: center" class="parallax-window" data-parallax="scroll" data-image-src="{{asset('img/1920x1080/01.jpg')}}">
        <div class="parallax-content container">
            <h1 class="carousel-title">
                @if($lang == 'az')
                    Qaleriya
                @elseif($lang == 'en')
                    Gallery
                @elseif($lang == 'ru')
                    галерея
                @endif
            </h1>

        </div>
    </div>

    <div class="content-lg container">
        <div class="row margin-b-20">
            <div class="col-sm-6">
                <h2>
                    @if($lang == 'az')
                        Qaleriya
                    @elseif($lang == 'en')
                        Gallery
                    @elseif($lang == 'ru')
                        галерея
                    @endif


                </h2>
            </div>
        </div>
        <!--// end row -->

        <div class="row">

            @foreach($galleries as $gallery)

                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <p>{{$gallery->caption}}</p>
                        @if($gallery->type == 0)
                            <img src="/{{$gallery->source}}" alt="">
                        @elseif($gallery->type == 1)
                            <video src="/{{$gallery->source}}"></video>
                        @endif
                    </div>
                </div>

            @endforeach
            {{$galleries->links()}}

        </div>
        <!--// end row -->
    </div>

@endsection