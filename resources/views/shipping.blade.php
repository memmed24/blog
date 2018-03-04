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
                    <img class="img-responsive" src="{{asset('img/images/ship.jpg')}}" alt="Slider Image">
                   
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h1 class="carousel-title">
                                  @if($lang == "az")
                                  Dəniz <br> daşımaları
                                  @elseif($lang == "en")
                                  Shipping <br> Company
                                  @elseif($lang == "ru")
                                  Морское <br> Пароходство
                                  @endif
                                </h1>
                                <p></p>
                            </div>
                            <a href="#" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">
                              @if($lang == "az")
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
                <div class="item">
                    <img class="img-responsive" src="{{asset('img/images/ship1.jpg')}}" alt="Slider Image">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h2 class="carousel-title">
                                  @if($lang == "az")
                                  Dəniz <br> daşımaları
                                  @elseif($lang == "en")
                                  Shipping <br> Company
                                  @elseif($lang == "ru")
                                  Морское <br> Пароходство
                                  @endif
                                </h2>
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
                    @if($lang == "az")
                    Dəniz daşımaları
                    @elseif($lang == "ru")
                    Морское Пароходство
                    @elseif($lang == "en")
                    Shipping Company
                    @endif
                    </h1>
                </div>
            </div>
            <!--// end row -->

            <div class="row">
                <div class="col-sm-7 sm-margin-b-50">
                  @if($lang == "az")
                  <h3>"Azərbaycan Xəzər Dəniz Gəmiçiliyi" QSC Xəzər dənizində ən böyük dəniz donanmasına malikdir. Şirkət quru yük limanını saxlayır, yüksaxlama, yükləmə, boşaltma, yükləmə, tanker, quruyük gəmiləri, feribotlar və Ro-Ro gəmiləri və xüsusi bir donanma.Quruyük gəmiləri "Azərbaycan Xəzər Dəniz Gəmiçiliyi Şirkəti" QSC Xəzər, Azov, Qara və Aralıq dənizlərində dəniz nəqlini həyata keçirir."ACSC Logistics" MMC 100% törəmə "Azərbaycan Xəzər Dəniz Gəmiçiliyi Şirkəti" QSC.</h3>                  
                  @elseif($lang == "ru")
                  <h3>«Азербайджанское Каспийское Морское Пароходство» ЗАО владеет крупнейшим морским флотом на Каспийском море. В распоряжении общества находятся Зыгский сухогрузный порт, который обеспечивает хранение, погрузку, разгрузку, перегрузку грузов, а также, танкеры, сухогрузные суда, паромы и Ро-Ро суда и специализированный флот. Сухогрузные суда "Азербайджанское Каспийское Морское Пароходство" ЗАО осуществляют морские перевозки на Каспийском, Азовском, Черном и Средиземном морях.  “ACSC Logistics” OOO 100% дочерняя компания "Азербайджанское Каспийское Морское Пароходство" ЗАО.</h3>  
                  @elseif($lang == "en")
                  <h3>ACSC Logistics LLP is 100% subsidiary of “Azerbaijan Caspian Shipping Company” CJSC.
                      “Azerbaijan Caspian Shipping Company” CJSC owns the largest fleet on the Caspian sea. It has in its possession Zigh dry cargo port, which with its warehouses provides storage of goods, cargo transshipment, loading and unloading and also tankers, dry cargo vessels, ferries and Ro-Ro ships,  which allow us to provide maritime transportation of all types of goods on Caspian, Azov, Black and Mediterranean seas. Our company can calculate and give rates for sea itself and organize the conveyance of any types of cargo by this mode of transport without intermediary freight forwarders.
                </h3>
                  @endif
                </div>
                <div class="col-sm-4 col-sm-offset-1">
                    <img class="img-responsive" src="{{asset('img/logistics1.jpg')}}" alt="about us">
                    <img class="img-responsive" style="margin-top: 25px" src="{{asset('img/logistics.jpg')}}" alt="about us">
                </div>
            </div>
            <!--// end row -->
        </div>

@endsection