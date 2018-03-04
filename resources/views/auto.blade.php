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
                    <img class="img-responsive" src="{{asset('img/images/car1.png')}}" alt="Slider Image">
                   
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h1 class="carousel-title">
                                  @if($lang == 'az')
                                  Avtomobil <br>daşınmaları
                                  @elseif($lang == 'en')
                                  Car transport
                                  @elseif($lang == 'ru')
                                  Aвтомобильный транспорт
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
                    <img class="img-responsive" src="{{asset('img/images/car.png')}}" alt="Slider Image">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h2 class="carousel-title">@if($lang == 'az')
                                  Avtomobil <br>daşınmaları
                                  @elseif($lang == 'en')
                                  Car transport
                                  @elseif($lang == 'ru')
                                  Aвтомобильный транспорт
                                  @endif</h2>
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
                      Avtomobil daşımaları
                      @elseif($lang == 'en')
                      Car transport
                      @elseif($lang == 'ru')
                      Aвтомобильный транспорт
                      @endif
                    </h1>
                </div>
            </div>
            <!--// end row -->

            <div class="row">
                <div class="col-sm-7 sm-margin-b-50">
                    <h3>
                      @if($lang == 'az')
                      Əlaqə, kommunikasiya və tərəfdaşlarımız şəbəkəmiz vasitəsilə müxtəlif bölgələrdə müxtəlif növ malların bütün bölgələrə daşınması və lazımi istiqamətlərə çatdırılmasını təşkil edə bilərik
                      @elseif($lang == 'en')
                      Through our huge network, partners and connections we can provide the transportation of cargoes by road in all regions and deliver the to the required points of destination.
                      @elseif($lang == 'ru')
                      Через нашу сеть контактов, связи и наших партнеров мы можем организовывать перевозку разного вида грузов автотранспортом во всех регионах и доставлять в требуемые пункты назначения.
                      @endif
                    </h3>
                </div>
                <div class="col-sm-4 col-sm-offset-1">
                    <img class="img-responsive" src="{{asset('img/automobile.png')}}" alt="about us">
                </div>
            </div>
            <!--// end row -->
        </div>
@endsection