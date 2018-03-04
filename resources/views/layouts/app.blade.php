<!DOCTYPE html>
<!-- ==============================
    Project:        ACSC Logistics Website 2018
    Version:        1.0
    Author:         Bir inc.
    Primary use:    Corporate, Business.
    Email:          elshan.guliyev@unity-solutoins.az
    Like:           http://www.facebook.com/elshan23
    Website:        http://www.unity-solutions.az
================================== -->
<html lang="en" class="no-js">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>ACSC Logistics &#8211; ACSC Logistics</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <!-- GLOBAL MANDATORY STYLES -->
        <!-- <link href="{{asset('http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700')}}" rel="stylesheet" type="text/css"> -->
        <link href="{{asset('vendor/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="{{asset('css/animate.css')}}" rel="stylesheet">
        <link href="{{asset('vendor/swiper/css/swiper.min.css')}}" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="{{asset('css/css/font-awesome.min.css')}}">

        <!-- THEME STYLES -->
        <link href="{{asset('css/layout.min.css')}}" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{asset('img/favicon.png')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
        <link href="{{asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        
        <!-- <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script> -->


    </head>
    <!-- END HEAD -->

    <!-- BODY -->
    <body style="font-family:Arial, Helvetica, sans-serif">

        <!--========== HEADER ==========-->
        <header class="header navbar-fixed-top">


           <!--  ELAVE OLUNDU -->
            <div class=" container-fulid">
                <div class="row">
                    <div class="col-sm-12 col-md-12 head">
                        <ul class="headul">
                            <li><i class="fa fa-mobile " aria-hidden="true"></i> <span><a style="color: white" href="tel:+994124043700">Tel:+994124043700</a></span></li>
                           <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <span><a style="color: white" href="mailto:office@logistics.acsc.az">office@logistics.acsc.az</a></span></li>
                            <li class="downlast"><i class="fa fa-globe" aria-hidden="true"></i> <span style="text-transform:uppercase">{{$lang}}</span> <i class="fa fa-angle-down down" style="font-size: 15px;" aria-hidden="true"></i>

                                <ul class="headuldown">
                                    <li>
                                        <a style="color:white" href="{{url('/az')}}">AZ</a>
                                    </li>
                                    <li>
                                        <a style="color:white" href="{{url('/ru')}}">RUS</a>
                                    </li>
                                    <li>
                                        <a style="color:white" href="{{url('/en')}}">ENG</a>
                                    </li>
                                </ul>

                            </li>
                        </ul>
                    </div>
                  
                </div>
            </div>

               <!--  SON -->



            <!-- Navbar -->
            <nav style="" class="navbar blurry" role="navigation">
                <div class="container" style="">
                    <!-- BACSC and toggle get grouped for better mobile display -->
                    <div class="menu-container">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon"></span>
                        </button>

                        <!-- Logo -->
                        <div class="logo">
                            <a class="logo-wrap" href="index.html">
                                <img class="logo-img logo-img-main" src="{{asset('img/logo.png')}}" alt="Asentus Logo">
                                <img class="logo-img logo-img-active" src="{{asset('img/logo-dark.png')}}" alt="Asentus Logo">
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <ul class="navbar-nav navbar-nav-right">
                                <li class="nav-item"><a class="nav-item-child nav-item-hover active" href="{{url('/'.$lang)}}">
                                    @if($lang ==  'az')
                                    Ana səhifə
                                    @elseif($lang == 'en')
                                    Main page
                                    @elseif($lang == 'ru')
                                    Главная
                                    @endif
                                </a>
                                </li>
                                <li class="nav-item compin "><a class="nav-item-child nav-item-hover" href="#">@if($lang ==  'az')
                                    Şirkət
                                    @elseif($lang == 'en')
                                    Company
                                    @elseif($lang == 'ru')
                                    Компания
                                    @endif</a>

                                       <!--  ELAVE OLUNDU -->
                                    <ul class="compdown">
                                        <li ><a  href="{{url($lang.'/about')}}">@if($lang ==  'az')
                                    Haqqımızda
                                    @elseif($lang == 'en')
                                    About us
                                    @elseif($lang == 'ru')
                                    О нас
                                    @endif</a>
                                            </li>

                                         <li><a href="{{url($lang.'/mission')}}">@if($lang ==  'az')
                                    Missiya
                                    @elseif($lang == 'en')
                                    Mission
                                    @elseif($lang == 'ru')
                                    Миссия
                                    @endif</a>
                                        </li>
                                    </ul>

                                       <!--  ELAVE OLUNDU -->
                                </li>
                                <li class="nav-item infoin"><a class="nav-item-child nav-item-hover" href="#">
                                @if($lang ==  'az')
                                    Faydalı Məlumatlar
                                    @elseif($lang == 'en')
                                    Useful Information
                                    @elseif($lang == 'ru')
                                    Полезная Информация
                                    @endif</a>
                                    <ul class="infodown">
                                        <li ><a  href="{{url($lang.'/about')}}">@if($lang ==  'az')
                                    Xəbərlər
                                    @elseif($lang == 'en')
                                    News
                                    @elseif($lang == 'ru')
                                    Новости
                                    @endif</a>
                                            </li>

                                         <li><a href="{{url($lang.'/info')}}">
                                         @if($lang ==  'az')
                                         Məlumatlar
                                        @elseif($lang == 'en')
                                        Information
                                        @elseif($lang == 'ru')
                                        Информация
                                        @endif</a>
                                        </li>
                                    </ul>
                                
                                </li>
                                <li class="nav-item servin"><a class="nav-item-child nav-item-hover" href="#">
                                    @if($lang ==  'az')
                                    Xidmətlər
                                    @elseif($lang == 'en')
                                    Services
                                    @elseif($lang ==  'ru')
                                    Услуги
                                    @endif
                                </a>


                                               <!--  ELAVE OLUNDU -->

                                        <ul class="servdown">
                                           <li ><a  href="{{url($lang.'/shipping')}}">
                                            @if($lang ==  'az')
                                            Dəniz daşımaları
                                            @elseif($lang == 'en')
                                            Sea transportation
                                            @elseif($lang ==  'ru')
                                            Морские перевозки
                                            @endif
                                           </a>
                                            </li>

                                         <li><a href="{{url($lang.'/railway')}}">
                                            @if($lang ==  'az')
                                            Dəmiryolu daşımaları
                                            @elseif($lang == 'en')
                                            Railway transportation
                                            @elseif($lang ==  'ru')
                                            Железнодорожные перевозки
                                            @endif
                                            </a>
                                        </li>
                                        <li ><a  href="{{url($lang.'/auto')}}
                                            ">
                                            @if($lang == 'az')
                                            Avtomobil daşımaları
                                            @elseif($lang == 'en')
                                            Road transportation
                                            @elseif($lang == 'ru')
                                            Сухопутные перевозки
                                            @endif
                                            </a>
                                            </li>

                                         <li><a href="{{url($lang.'/multi-modal')}}">
                                            @if($lang == 'az')
                                            Multi-modal daşımaları
                                            @elseif($lang == 'en')
                                            Multi-modal transportation
                                            @elseif($lang == 'ru')
                                            Мультимодальные перевозки
                                            @endif 
                                         </a>
                                        </li>
                                        <li ><a  href="{{url($lang.'/door-to-door')}}">
                                            @if($lang == 'az')
                                            Qapıdan-qapıya daşıma
                                            @elseif($lang == 'en')
                                            Door-to-door transportation
                                            @elseif($lang == 'ru')
                                            Перевозки от двери к двери
                                            @endif
                                        </a>
                                            </li>

                                       
                                        </ul>

                                           <!--  ELAVE OLUNDU -->

                                </li>
                                <li class="nav-item recin"><a class="nav-item-child nav-item-hover" href="#">
                                    @if($lang == 'az')
                                    Tariflər
                                    @elseif($lang == 'en')
                                    Tariffs
                                    @elseif($lang == 'ru')
                                    Тарифы
                                    @endif
                                </a>
                                       <!--  ELAVE OLUNDU -->
                                    <ul class="recdown">
                                         <li><a href="{{url($lang.'/comingsoon')}}">@if($lang ==  'az')
                                            Dəniz daşımaları
                                            @elseif($lang == 'en')
                                            Sea transportation
                                            @elseif($lang ==  'ru')
                                            Морские перевозки
                                            @endif</a>
                                        </li>
                                        <li ><a  href="{{url($lang.'/comingsoon')}}">@if($lang ==  'az')
                                            Dəmiryolu daşımaları
                                            @elseif($lang == 'en')
                                            Railway transportation
                                            @elseif($lang ==  'ru')
                                            Железнодорожные перевозки
                                            @endif</a>
                                            </li>
                                    </ul>

                                       <!--  ELAVE OLUNDU -->
                                </li>
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="{{url($lang.'/contact')}}">
                                @if($lang == 'az')
                                Əlaqə
                                @elseif($lang == 'en')
                                Contact
                                @elseif($lang == 'ru')
                                Контакты
                                @endif
                                </a></li>
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="#footer">
                                    @if($lang == 'az')
                                    Müraciət et
                                    @elseif($lang == 'en')
                                    Apply
                                    @elseif($lang == 'ru')
                                    Сообщение
                                    @endif
                                </a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Navbar Collapse -->
                </div>
            </nav>
            <!-- Navbar -->
        </header>
        <!--========== END HEADER ==========-->

        <!--========== SLIDER ==========-->
       @yield('content')

        <!-- End Work -->
        <!--========== END PAGE LAYOUT ==========-->

        <!--========== FOOTER ==========-->
        <footer class="footer" id="footer">
            <!-- Links -->
            <div class="footer-seperator">
                <div class="content-lg container">
                    <div class="row">
                        <div class="col-sm-2 sm-margin-b-50">
                            <!-- List -->
                            <ul class="list-unstyled footer-list">
                                @if($lang == "az")
                                <li class="footer-list-item"><a class="footer-list-link" href="{{url('/').'/az'}}">Ana səhifə</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="{{url('/').'/az/about'}}">Haqqımızda</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="{{url('/').'/az/mission'}}">Missiya</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="{{url('/').'/az/shipping'}}">Dəniz Daşımaları</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="{{url('/').'/az/railway'}}">Dəmiryolu Daşımaları</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="{{url('/az/comingsoon')}}">Tariflər</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="{{url('/az/contact')}}">Əlaqə</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">Müraciət et</a></li>
                                @elseif($lang == "en")
                                <li class="footer-list-item"><a class="footer-list-link" href="{{url('/').'/en'}}">Main page</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="{{url('/').'/en/about'}}">About us</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="{{url('/').'/en/mission'}}">Mission</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="{{url('/').'/en/shipping'}}">Shipping Company</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="{{url('/').'/en/railway'}}">Railway transport</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="{{url('/en/comingsoon')}}">Tariffs</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="{{url('/en/contact')}}">Contact</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">Apply</a></li>
                                @elseif($lang == "ru")
                                <li class="footer-list-item"><a class="footer-list-link" href="{{url('/').'/ru'}}">Главная страница</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="{{url('/').'/ru/about'}}">O нас</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="{{url('/').'/ru/mission'}}">Mиссия</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="{{url('/').'/ru/shipping'}}">Морское Пароходство</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="{{url('/').'/ru/railway'}}">Железнодорожные перевозки</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="{{url('/ru/comingsoon')}}">Tарифы</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="{{url('/ru/contact')}}">Kонтакты</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">Подать заявление</a></li>
                                @endif
                                
                                
                            </ul>
                            <!-- End List -->
                        </div>
                        <div class="col-sm-4 sm-margin-b-30">
                            <!-- List -->
                            <div class="col-md-8">
                                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                                        <h3><a href="#" style=" color: white">
                                            @if($lang == "az")
                                            Bakı / Azərbaycan
                                            @elseif($lang == "en")
                                            Baku / Azerbaijan
                                            @elseif($lang == "ru")
                                            Баку / Азербайджан
                                            @endif
                                        </a></h3>
                                        <ul class="list-unstyled contact-list">
                                            <li><i class="margin-r-10 color-base icon-call-out"></i>
                                                <a href="#" style="color: white">Tel: +994 12 404 37 00
                                                <br>
                                                (ext.3098)
                                                </a>
                                            </li>
                                            <li><i class="margin-r-10 color-base icon-call-out"></i>
                                                <a href="#" style="color: white">Tel: +994 50 243 91 83</a>
                                            </li>
                                            <li><i class="margin-r-10 color-base icon-envelope"></i>
                                                <a href="#" style="color: white">info@acsc.az</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            <!-- End List -->
                        </div>
                        <div class="col-sm-5 sm-margin-b-30">
                            <h2 class="color-white">
                                @if($lang == "az")
                                Əlaqə
                                @elseif($lang == "en")
                                Contact
                                @elseif($lang == "ru")
                                Kонтакты
                                @endif
                            </h2>
                            <form action="{{url('/sendmail')}}" method="post">
                                <input type="text" class="form-control footer-input margin-b-20" name="name" placeholder="@if($lang == "az")Adınız
                                @elseif($lang == "en")Name
                                @elseif($lang == "ru")Имя
                            @endif" >
                                @csrf

                                <input type="text" class="form-control footer-input margin-b-20" name="email" placeholder="@if($lang == "az")E-adress
                                @elseif($lang == "en")E-mail
                                @elseif($lang == "ru")Эл. адрес
                            @endif" >
                                <input type="text" class="form-control footer-input margin-b-20" name="number" placeholder="@if($lang == "az")Əlaqə nömrəsi
                                @elseif($lang == "en")Contact number
                                @elseif($lang == "ru")Контактный номер
                            @endif" >
                                <textarea class="form-control footer-input margin-b-30" rows="6" name="message" placeholder="@if($lang == "az")Mesajınız
                                @elseif($lang == "en")Feedback
                                @elseif($lang == "ru")Обратная связь
                            @endif" ></textarea>
                                <input name="ad" type="submit" class="btn-theme btn-theme-sm btn-base-bg text-uppercase" value="
                                    @if($lang == "az")Göndər
                                    @elseif($lang == "en")Send
                                    @elseif($lang == "ru")Отправлять
                                    @endif
                                ">
                            </form>
                        </div>
                    </div>
                    <!--// end row -->
                </div>
            </div>
            <!-- End Links -->

            <!-- Copyright -->
            <div class="content container">
                <div class="row">
                    <div class="col-xs-6">
                        <img class="footer-logo" src="{{asset('img/logo.png')}}" alt="Asentus Logo">
                    </div>
                    <div class="col-xs-6 text-right">
                        <p class="margin-b-0"><a class="color-base fweight-700" href="http://keenthemes.com/preview/asentus/">Copyright © 2018</a> Powered by: <a class="color-base fweight-700" href="http://www.keenthemes.com/">Unity-solutions.az</a></p>
                    </div>
                </div>
                <!--// end row -->
            </div>
            <!-- End Copyright -->
        </footer>
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="{{asset('vendor/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('vendor/jquery-migrate.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
           <!--  ELAVE OLUNDU -->
        <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
           <!--  ELAVE OLUNDU -->
        <!-- PAGE LEVEL PLUGINS -->
        <!-- <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script> -->

        <script src="{{asset('https://use.fontawesome.com/0c60faf74e.js')}}"></script>
        <script src="{{asset('vendor/jquery.easing.js')}}" type="text/javascript"></script>
        <script src="{{asset('vendor/jquery.back-to-top.js')}}" type="text/javascript"></script>
        <script src="{{asset('vendor/jquery.smooth-scroll.js')}}" type="text/javascript"></script>
        <script src="{{asset('vendor/jquery.wow.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('vendor/swiper/js/swiper.jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('vendor/masonry/jquery.masonry.pkgd.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('vendor/masonry/imagesloaded.pkgd.min.js')}}" type="text/javascript"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="{{asset('js/layout.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/components/wow.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/components/swiper.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/components/masonry.min.js')}}" type="text/javascript"></script>

    </body>
    <!-- END BODY -->
</html>