@extends('layouts.app')

@section('content')
<div style="background:url('/img/1920x1080/01.jpg'); background-size: 100%; background-position: center" class="parallax-window" data-parallax="scroll" data-image-src="img/1920x1080/01.jpg">
    <div class="parallax-content container">
        <h1 class="carousel-title">
          @if($lang == 'az')
          Konteyner
          @elseif($lang == 'en')
          Container
          @elseif($lang == 'ru')
          Контейнер
          @endif
        </h1>
        
    </div>
</div>
<object width="100%" height="1000" data="{{asset('pdf/container.pdf')}}"></object>
@endsection