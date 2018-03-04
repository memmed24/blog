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
                    <img class="img-responsive" src="{{asset('img/images/door1.png')}}" alt="Slider Image">
                   
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h1 class="carousel-title">
                                  @if($lang == 'az')
                                  "Qapıdan-qapıya" <br> daşıma
                                  @elseif($lang == 'ru')
                                  "Oт двери до двери" транспорт
                                  @elseif($lang == 'en')
                                  "Door-to-door" transport
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
                    <img class="img-responsive" src="{{asset('img/images/door.jpg')}}" alt="Slider Image">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h2 class="carousel-title">@if($lang == 'az')
                                  "Qapıdan-qapıya" <br> daşıma
                                  @elseif($lang == 'ru')
                                  "Oт двери до двери" транспорт
                                  @elseif($lang == 'en')
                                  "Door-to-door" transport
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
                      Qapıdan-qapıya daşıma
                      @elseif($lang == 'en')
                      Door-to-door transport
                      @elseif($lang == 'ru')
                      Oт двери до двери транспорт
                      @endif
                    </h1>
                </div>
            </div>
            <!--// end row -->

            <div class="row">
                <div class="col-sm-7 sm-margin-b-50">
                    <h3>
                        @if($lang == 'az')
                        "ACSC Logistics" MMC bütün növ nəqliyyat vasitələrindən istifadə etməklə "qapılı qapı" xidmətlərini təmin edir, malların hər növünün ən qısa müddətdə təhlükəsiz daşınmasını təşkil edir, malların idarəsi və saxlanması üçün ara və digər nöqtələrə keçir. Bununla yanaşı, yükgötürənlərə malların daşınması üçün ən optimal marşrut və nəqliyyat vasitələrinin seçilməsi, digər məsələlər və digər xidmətlər üzrə məsləhətlər verilir. ACSC Logistics Ltd Xidmətlərimizin daha səmərəli və optimal şəkildə həyata keçirilməsinə kömək edən Xəzər dənizinin bütün limanlarında gəmi agentləri var.
                        @elseif($lang == 'en')
                        Our company provides “door-to-door” service arranging the safe transportation of cargo of all types in the shortest period of time, consult customers on selecting the most optimal route and means of transport and on other issues. In addition, we can provide cargo handling at intermediate and other points, organize the storage of goods and other services. Furhtermore, at all ports of Caspian Sea we have ship agents, what contributes to the optimal and effective realization of our services. 
                        @elseif($lang == 'ru')
                        “ACSC Logistics” OOO оказывает "от двери до двери"(door-to-door) услуги используя все виды транспорта, организовывает безопасную транспортировку грузов всех видов в кратчайшие сроки, обработку и хранение грузов на промежуточных и других пунктах. Вдобавок осуществляет консультации грузоотправителей по выбору наиболее оптимальных маршрутов и транспортных средств для перевозки грузов и по другим вопросам и другие услуги.  У “ACSC Logistics” OOO во всех портах Каспийского моря имеются судовые агенты, что способствует более эффективной и оптимальной реализации наших услуг.
                        @endif
                    </h3>    
                </div>
                <div class="col-sm-4 col-sm-offset-1">
                    <img class="img-responsive" src="{{asset('img/doortodoor.png')}}" alt="about us">
                </div>
            </div>
            <!--// end row -->
        </div>
@endsection