@extends('layouts.app')
@section('content')

        <div style="background:url('/img/1920x1080/01.jpg'); background-size: 100%; background-position: center" class="parallax-window" data-parallax="scroll" data-image-src="img/1920x1080/01.jpg">
            <div class="parallax-content container">
                <h1 class="carousel-title">@if($lang == 'az')
                  Əlaqə
                  @elseif($lang == 'en')
                  Contact
                  @elseif($lang == 'ru')
                  Kонтакты
                  @endif
                </h1>
                
            </div>
        </div>
        <!--========== PARALLAX ==========-->

      

        
        <!-- <div id="map" class="map height-400">
            
        </div> -->

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6075.564497887379!2d49.89900447300677!3d40.413674416891766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x403062be14bece0b%3A0x31fb76b4f6c02288!2sChinar+Plaza!5e0!3m2!1sen!2s!4v1519223979028" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

@endsection