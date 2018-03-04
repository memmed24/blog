@extends('layouts.app')


@section('content')

<div style="background:url('/img/1920x1080/01.jpg'); background-size: 100%; background-position: center" class="parallax-window" data-parallax="scroll" data-image-src="img/1920x1080/01.jpg">
            <div class="parallax-content container">
                <h1 class="carousel-title">
                  
                      @if($lang == "az")
                      Missiya
                      @elseif($lang == "en")
                      Mission
                      @else
                      Mиссия
                      @endif

                </h1>
                
            </div>
        </div>


        <div>
          <p> </p>
          <i class="fa fa-" aria-hidden="true"></i> 
        </div>
        <!--========== PARALLAX ==========-->

        <!-- End Pricing -->
        <!--========== END PAGE LAYOUT ==========-->
        <!-- About -->
        <div class="content-lg container">
            <div class="row margin-b-20">
                <div class="col-sm-6">
                    <h2>@if($lang == "az")
                      Missiya
                      @elseif($lang == "en")
                      Mission
                      @else
                      Mиссия
                      @endif</h2>
                </div>
            </div>
            <!--// end row -->

            <div class="row">
                <div class="col-sm-7 sm-margin-b-50">
                      @if($lang == "az")
                      <p>
                         ACSC Logistics sizə <br> - nəqliyyat istiqaməti məsləhəti <br> - ən sərfəli marşrutun müəyyənləşdirilməsi <br> - intermodal nəqliyyat məsələləri tövsiyəsi <br> və buna bənzər digər məsələlərdə yardım edəcək. <br> Həmçinin müştərilərimizin gözləntilərindən daha yüksək xidmət göstərmək bizim missiyamızdır. <br> Bizim üstünlüklərimiz praktikada sınanmış və patentləşmiş texnologiyaları istifadə etməkdir. Müştərilərimiz üçün ideal çatdırma zəncirini təşkil etmək bizim əsas məqsədimizdir. <br> - Sürətli çatdırma <br> 
                        - Sərfəli qiymətlər <br> 
                        - Yükdaşımanın əlverişli yolları <br> 
                        - Dostluq münasibətləri
                      </p>
                      @elseif($lang == "en")
                      <p>
                      Services offered by ACSCLogistics:
                      <br> - 	Consultancy of the customers on the choice of the routes, modes of transport, conditions for dangerous, oversized cargo, etc.
                      <br> - 	Freight forwarding and transportation on seaways and railroads of transport routes, including TheCaspian Sea, The Black Sea, Azerbaijan,Turkmenistan, Uzbekistan,Kazakhstan and other CIS countries.
                      <br> - 	Transshipment, warehousing andstorageofgoodsatthePortsofBaku,Poti,Batumi,Hovsan,Turkmenbashi,Kuryk,AktauandotherportsofThe Caspianand Black Seas
                      <br> -	Coordination of transportations on special conditions
                      <br> -	Multimodal transportations
                      <br> -	Chartering of ships of any type


                      </p>
                      @else
                      <p>
                      Услуги, предоставляемые компанией ACSCLogistics:
                      <br> - 	Kонсультации по выбору маршрута, вида транспорта, условий по опасным, негабаритным грузам и т.д.
                      <br> -	Экспедирование как на морских, так и на железнодорожных участках транспортных маршрутов, включая Каспийское море, Черное море, Азербайджан, Грузия, Казахстан, Туркменистан, Узбекистан, а также по сопредельным железным дорогам
                      <br> -	Перевалка и хранение в портах Баку, Поти, Батуми, Баку, Говсан, Актау, Курык, Туркменбаши и других портах Каспийского и Черного морей
                      <br> -	Согласование перевозок на особых условиях
                      <br> -	Мульти модальные перевозки
                      <br> -	Фрахтование судов всех типов 
                      <br> - 	Погрузка/выгрузка, обеспечение вагонамии оформление 
                      <br> - 	Информирование грузовладельцев на всем пути следования 

                      </p>
                      @endif
                    
                </div>
                <div class="col-sm-4 col-sm-offset-1">
                    <img class="img-responsive" src="{{asset('img/logist.png')}}" alt="mission">
                    
                </div>
            </div>
            <!--// end row -->

 </div>

@endsection