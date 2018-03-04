@extends('layouts.app')
@section('content')
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="container">
            
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                </ol>
            </div>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox"> 
                <div class="item active">
                    <img class="img-responsive" src="{{asset('img/images/multimodal1.jpg')}}" alt="Slider Image">
                   
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h1 class="carousel-title">
                                @if($lang == "az")
                                Multi <br> modal
                                @elseif($lang == "en")
                                Multi <br> modal
                                @elseif($lang == "ru")
                                Мультимодальные
                                @endif  
                                </h1>
                                <p></p>
                            </div>
                            <a href="#" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">@if($lang == "az")
                              Məlumat
                              @elseif($lang == "en")
                              Info
                              @elseif($lang == "ru")
                              Информация
                              @endif</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="img-responsive" src="{{asset('img/images/multimodal.jpg')}}" alt="Slider Image">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                            <h1 class="carousel-title">
                                @if($lang == "az")
                                Multi <br> modal
                                @elseif($lang == "en")
                                Multi <br> modal
                                @elseif($lang == "ru")
                                Мультимодальные
                                @endif  
                                </h1>
                                <p></p>
                            </div>                            
                            <a href="#" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">@if($lang == "az")
                              Məlumat
                              @elseif($lang == "en")
                              Info
                              @elseif($lang == "ru")
                              Информация
                              @endif
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--========== SLIDER ==========-->

        <div class="content-lg container">
            <div class="row margin-b-20">
                <div class="col-sm-6">
                    <h1>
                      @if($lang == 'az')
                      Multi-modal daşıma
                      @elseif($lang == 'en')
                      Multi-modal transport
                      @elseif($lang == 'ru')
                      Мультимодальный транспорт
                      @endif
                    </h1>
                </div>
            </div>
            <!--// end row -->

            <div class="row">
                <div class="col-sm-7 sm-margin-b-50">
                    <h3>
                        @if($lang == 'az')
                        Sifarişlərdən və müştərilərin tələblərindən asılı olaraq, dünyanın müxtəlif bölgələrinə malların çatdırılması üçün müxtəlif nəqliyyat növlərini istifadə edərək və birləşdirən nəqliyyat xidmətləri göstərə bilərik.
                        @elseif($lang == 'en')
                        Depending on the order and the requirements of the clients we can provide the transportation service using and combining different modes of transport to deliver the cargo to any region in the world.
                        @elseif($lang == 'ru')
                        Взависимости от заказов и требований клиентов мы можем предоставлять услуги перевозки изпользуя и комбинируя разные виды транспортов для доставки грузов в любой регион мира.
                        @endif
                    </h3>    
                </div>
                <div class="col-sm-4 col-sm-offset-1">
                    <img class="img-responsive" src="{{asset('img/multimodal.png')}}" alt="about us">
                </div>
            </div>
            <!--// end row -->
        </div>
@endsection