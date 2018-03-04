@extends('layouts.app')

@section('content')

 <div style="background:url('/img/1920x1080/01.jpg'); background-size: 100%; background-position: center" class="parallax-window" data-parallax="scroll" data-image-src="img/1920x1080/01.jpg">
            <div class="parallax-content container">
                <h1 class="carousel-title">

                  @if($lang == 'az')
                  Tezliklə...
                  @elseif($lang == 'en')
                  Coming soon...
                  @elseif($lang == 'ru')
                  Cкоро...
                  @endif

                </h1>
                
            </div>
        </div>
        

@endsection