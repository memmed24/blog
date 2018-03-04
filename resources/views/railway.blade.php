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
                    <img class="img-responsive" src="{{asset('img/images/railway.jpg')}}" alt="Slider Image">
                   
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h1 class="carousel-title">
                                  @if($lang == 'az')
                                  Dəmiryolu <br>daşınmaları
                                  @elseif($lang == 'en')
                                  Railway <br>transportation
                                  @elseif($lang == 'ru')
                                  Железнодорожные <br>перевозки
                                  @endif
                                </h1>
                                <p></p>
                            </div>
                            <a href="#" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">Məlumat</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="img-responsive" src="{{asset('img/images/railway1.jpg')}}" alt="Slider Image">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h2 class="carousel-title">@if($lang == 'az')
                                  Dəmiryolu <br>daşınmaları
                                  @elseif($lang == 'en')
                                  Railway <br>transportation
                                  @elseif($lang == 'ru')
                                  Железнодорожные <br>перевозки
                                  @endif</h2>
                                <p></p>
                            </div>                            
                            <a href="#" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">Məlumat
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
                    Qatar daşımaları
                    @elseif($lang == 'en')
                    Railway transportation 
                    @elseif($lang == 'ru')
                    Железнодорожные перевозки 
                    @endif
                    </h1>
                </div>
            </div>
            <!--// end row -->

            <div class="row">
                <div class="col-sm-7 sm-margin-b-50">
                    @if($lang == 'az')  
                    <h3>Şirkətimiz də dəmir yolu nəqliyyatı tariflərini hesablaya və təqdim edə və logistika xidmətlərinin vasitəçiləri olmadan nəqliyyatın hər cür nəqliyyatını təşkil edə bilər. MDB-nin üzvü kimi regionda bir çox ölkələr var</h3>
                    @elseif($lang == 'en')
                    <h3>Our company can calculate and give rates for railway transportation itself and organize the conveyance of any types of cargo by this type of transport without intermediary logistics service providers. Having agreements with railway offices of many CIS countries  we can organize the transportation of any type of cargo by rail including also the provision of railway carriages in Azerbaijan as well as in all CIS territory. </h3>
                    @elseif($lang == 'ru')
                    <h3>Наша компания также может рассчитать и предоставить тарифы на железнодорожные перевозки и организовать транспортировку любого вида транспорта без посреднических поставщиков логистических услуг. Будучи членом СНГ, у нас есть много стран в регионе.</h3> 
                    @endif
                </div>
                <div class="col-sm-4 col-sm-offset-1">
                    <img class="img-responsive" src="{{asset('img/logistics2.jpg')}}" alt="about us">
                </div>
            </div>
            <!--// end row -->
        </div>


@endsection