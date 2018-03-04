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
                    <img class="img-responsive" src="{{asset('img/1920x1080/01.jpg')}}" alt="Slider Image">
                   
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                
                                <h1 class="carousel-title">
                                
                                @if($lang == "az")
 
                                “Qapıdan-qapıya” <br> daşıma

                                @elseif($lang == "en")

                                "Door-to-door" <br> transportation

                                @else

                                "Oт двери до двери" <br> транспорта

                                @endif
                                </h1>
                                <p></p>
                            </div>
                            <a href="#" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">@if($lang == 'az')
                            Məlumat
                            @elseif($lang == 'en')
                            Info
                            @elseif($lang == 'ru')
                            Информация
                            @endif</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="img-responsive" src="{{asset('img/1920x1080/railway.jpg')}}" alt="Slider Image">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                            <h1 class="carousel-title">
                                
                                @if($lang == "az")
 
                                “Qapıdan-qapıya” <br> daşıma

                                @elseif($lang == "en")

                                "Door-to-door" <br> transportation

                                @else

                                "Oт двери до двери" <br> транспорта

                                @endif
                                </h1>
                                <p></p>
                            </div>                            
                            <a href="{{url($lang.'/railway')}}" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">
                            @if($lang == 'az')
                            Məlumat
                            @elseif($lang == 'en')
                            Info
                            @elseif($lang == 'ru')
                            Информация
                            @endif
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--========== SLIDER ==========-->

    






        <!--========== PAGE LAYOUT ==========-->
        <!-- Service -->

        <div class="bg-color-sky-light" data-auto-height="true">
            <div class="content-lg container">
                <div class="row row-space-1 margin-b-2">
                    <div class="col-sm-4 sm-margin-b-2">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="icon-globe icons" style="color: #31465B; font-size: 50px"></i>

                                </div>
                                <div class="service-info" style="margin-top: 28px"> 
                                    <h3>
                                        @if($lang == 'az')
                                        Nəqliyyat və Çatdırma Həlləri
                                        @elseif($lang == 'en')
                                        Transportation and shipping solutions
                                        @elseif($lang == 'ru')
                                        Решения для транспортировки и доставки
                                        @endif
                                        </h3>
                                    <p class="margin-b-5">
                                        @if($lang == 'az')
                                        Bizimlə tərəfdaş şirkətlərə məxsus olan aktivlərdən istifadə etməyə imkan verir.
                                        @elseif($lang == 'en')
                                        Our partnerships allow us to leverage company-owned assets.
                                        @elseif($lang == 'ru')
                                        Наши партнерские отношения позволяют нам использовать активы, принадлежащие компании.
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 sm-margin-b-2">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".2s">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-screen-tablet" style="color: #31465B; font-size: 50px"></i>
                                </div>
                                <div class="service-info">
                                    <h3>
                                        @if($lang == 'az')
                                        Praktikadakı məsələlərin araşdırılması
                                        @elseif($lang == 'en')
                                        Explore Case Studies
                                        @elseif($lang == 'ru')
                                        Изучите примеры из практики
                                        @endif
                                    </h3>
                                    <p class="margin-b-5">
                                        @if($lang == 'az')
                                        Sənaye təchizat zəncirləri, saxlama və daşıma həlləri haqqında daha çox məlumat əldə edin.
                                        @elseif($lang == 'en')
                                        Learn more about our industry-specific supply chain, warehousing and distribution solutions.
                                        @elseif($lang == 'ru')
                                        Узнайте больше о наших отраслевых цепочках поставок, складских и дистрибуционных решениях.
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-badge" style="color: #31465B; font-size: 50px"></i>
                                </div>
                                <div class="service-info">
                                    <h3>
                                        @if($lang == 'az')
                                        Layihənin idarə olunması
                                        @elseif($lang == 'en')
                                        Project Management
                                        @elseif($lang == 'ru')
                                        Управление проектом
                                        @endif
                                    </h3>
                                    <p class="margin-b-5">
                                        @if($lang =='az')
                                        İstənilən ölçülü və miqyaslı layihələr üçün nəqliyyatı, saxlanması və paylanması üçün kompleks həllər.
                                        @elseif($lang == 'en')
                                        Comprehensive, scalable transportation, warehousing and distribution solutions for projects of any size and scope.
                                        @elseif($lang == 'ru')
                                        Комплексные, масштабируемые решения для транспортировки, складирования и распределения для проектов любого размера и масштаба.
                                        @endif
                                    </p>
                                </div>
                                <a href="#" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                </div>
                <!--// end row -->

                <div class="row row-space-1">
                    <div class="col-sm-4 sm-margin-b-2">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".4s">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-notebook" style="color: #31465B; font-size: 50px"></i>
                                </div>
                                <div class="service-info">
                                    <h3>
                                        @if($lang == 'az')
                                        Anbar xidmətləri
                                        @elseif($lang == 'en')
                                        Warehousing
                                        @elseif($lang == 'ru')
                                        Cкладирование
                                        @endif
                                    </h3>
                                    <p class="margin-b-5">
                                        @if($lang =='az')
                                        Ehtiyacları müəyyən edərkən, anbar ehtiyaclarını diqqətə almaq vacibdir.
                                        @elseif($lang =='en')
                                        In determining needs, one should look beyond the basic need of a warehouse to store things. Whilst, this is correct there are also other considerations.
                                        @elseif($lang == 'ru')
                                        При определении потребностей нужно смотреть за пределы основной потребности склада в хранении вещей. Хотя, это верно, есть и другие соображения.
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 sm-margin-b-2">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".5s">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-speedometer" style="color: #31465B; font-size: 50px"></i>
                                </div>
                                <div class="service-info">
                                    <h3>
                                        @if($lang == 'az')
                                        Sürətli çatdırma
                                        @elseif($lang == 'ru')
                                        Быстрая доставка
                                        @elseif($lang == 'en')
                                        Fast Delivery
                                        @endif
                                    </h3>
                                    <p class="margin-b-5">
                                        @if($lang == 'az')
                                        ACSC logistics ilə yükünüzü göndərdiyiniz zaman bu, beynəlxalq yükdaşıma və kuryer çatdırılması xidmətləri üzrə mütəxəssislər ilə göndərilirsiniz deməkdir! 
                                        @elseif($lang == 'en')
                                        When you ship with ACSC logistics – you’re shipping with specialists in international shipping and courier delivery services! 
                                        @elseif($lang == 'ru')
                                        Пользуясь услугами ACSC logistics - вы отправляете со специалистами в области международных перевозок и курьерской доставки!
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".6s">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-badge" style="color: #31465B; font-size: 50px"></i>
                                </div>
                                <div class="service-info">
                                    <h3>
                                        @if($lang == 'az')
                                        Logistikanın doğru şəkildə idarə olunması
                                        @elseif($lang == 'en')
                                        Managing logistics the right way
                                        @elseif($lang == 'ru')
                                        Правильное управление логистикой
                                        @endif
                                    </h3>
                                    <p class="margin-b-5">
                                        @if($lang == 'az')
                                        Bizim əsas öhdəliyimiz effektiv beynəlxalq logistika infrastrukturunun yaradılmasıdır. Bu məqsədi nəzərə alaraq, müştərilərimiz üçün asanlıqla yerinə yetirmək üçün çox vaxt və resurslar sərf etdik.
                                        @elseif($lang == 'en')
                                        Our primary commitment is the establishment of an effective international logistics infrastructure. With this goal in mind, we have invested a great deal of time and resources to make fulfillment easy for our clients.
                                        @elseif($lang == 'ru')
                                        Нашей основной задачей является создание эффективной международной логистической инфраструктуры. С этой целью мы вложили много времени и ресурсов, чтобы удовлетворить потребности наших клиентов.
                                        @endif
                                    </p>
                                </div>
                                </div>
                        </div>
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End Service -->

        <!-- Latest Products -->
        <div class="content-lg container">
            <div class="row margin-b-40">
                <div class="col-sm-6">
                    <h2>
                        @if($lang == 'az')
                        Xəbərlər
                        @elseif($lang == 'en')
                        News
                        @elseif($lang == 'ru')
                        Новости
                        @endif
                    </h2>
                    <p>
                        @if($lang == 'az')
                        Yeniliklərdən xəbərdar olmaq üçün abunə olub xəbərlərimizi e-poçtunuza ala bilərsiz!
                        @elseif($lang == 'ru')
                        Подпишитесь на обновления наших новостей и получите их по электронной почте!
                        @elseif($lang == 'en')
                        Subscribe to updates of our news and receive them on your email!
                        @endif
                    </p>
                </div>
            </div>
            <!--// end row -->

            <div class="row">
                

                @foreach($news as $news_)
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="margin-b-20">
                        <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                            <img style="height: 200px" class="img-responsive" src="{{asset($news_->photo)}}" alt="Latest Products Image">
                        </div>
                    </div>
                    <h4><a href="#">{{$news_->title_.$lang}}</a> <span class="text-uppercase margin-l-20">Sərgi</span></h4>
                    <p>{{$news_->content_.$lang}}</p>
                    <a class="link" href="{{url($lang.'/news').'/'.$news_->id}}">Ətraflı</a>
                </div>


                @endforeach

            </div>
            <!--// end row -->
        </div>
        <!-- End Latest Products -->

        <!-- Clients -->
        <div class="bg-color-sky-light">
            <div class="content-lg container">
                <!-- Swiper Clients -->
                <div class="swiper-slider swiper-clients">
                    <!-- Swiper Wrapper -->
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="img/clients/01.png" alt="Clients Logo">
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="img/clients/02.png" alt="Clients Logo">
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="img/clients/03.png" alt="Clients Logo">
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="img/clients/04.png" alt="Clients Logo">
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="img/clients/05.png" alt="Clients Logo">
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="img/clients/06.png" alt="Clients Logo">
                        </div>
                    </div>
                    <!-- End Swiper Wrapper -->
                </div>
                <!-- End Swiper Clients -->
            </div>
        </div>
        <!-- End Clients -->

        <!-- Testimonials -->
        <div class="content-lg container">
            <div class="row">
                <div class="col-sm-9">
                    <h2>Müştərilərimizin rəyləri</h2>

                    <!-- Swiper Testimonials -->
                    <div class="swiper-slider swiper-testimonials">
                        <!-- Swiper Wrapper -->
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <blockquote class="blockquote">
                                    <div class="margin-b-20">
                                        ACSC Logistics-in yüksək səviyyəli xidməti!
Mən Azərbaycana yük göndərməli idim və ACSC Logistics şirkətinin xidmətlərindən istifadə etmək qərarına gəldim.

Sifariş vermədən əvvəl internetdə logistika şirkətlərini araştırdım və veb saytdakı məlumatlardan faydalandım. Və danışıqlar apardıqdan sonra, çox məqbul bir qiymət verildi və məhz bu şirkəti seçdim. Çatdırılma çox sürətli idi - yalnız 48 saat sonra yük lazımlı ünvana çatdırıldı.


                                    </div>
                                    <div class="margin-b-20">
                                       Mən bu şirkətin xidmətlərindən yenidən istifadə edəcəyimə şübhə etmirəm və göstərilən kömək üçün təşəkkür edirəm. Hər kəsə çox tövsiyə olunur.
                                    </div>
                                    <p><span class="fweight-700 color-link">Elşən Quliyev</span></p>
                                </blockquote>
                            </div>
                            <div class="swiper-slide">
                                <blockquote class="blockquote">
                                    <div class="margin-b-20">
                                     ACSC Logistics-in yüksək səviyyəli xidməti!
Mən Azərbaycana yük göndərməli idim və ACSC Logistics şirkətinin xidmətlərindən istifadə etmək qərarına gəldim.

Sifariş vermədən əvvəl internetdə logistika şirkətlərini araştırdım və veb saytdakı məlumatlardan faydalandım. Və danışıqlar apardıqdan sonra, çox məqbul bir qiymət verildi və məhz bu şirkəti seçdim. Çatdırılma çox sürətli idi - yalnız 48 saat sonra yük lazımlı ünvana çatdırıldı.
                                    </div>
                                    <div class="margin-b-20">
                                        Mən bu şirkətin xidmətlərindən yenidən istifadə edəcəyimə şübhə etmirəm və göstərilən kömək üçün təşəkkür edirəm. Hər kəsə çox tövsiyə olunur.
                                    </div>
                                    <p><span class="fweight-700 color-link">Elşən Quliyev</span></p>
                                </blockquote>
                            </div>
                        </div>
                        <!-- End Swiper Wrapper -->

                        <!-- Pagination -->
                        <div class="swiper-testimonials-pagination"></div>
                    </div>
                    <!-- End Swiper Testimonials -->
                </div>
            </div>
            <!--// end row -->
        </div>
        <!-- End Testimonials -->
 
   





        <!-- Pricing -->
     <!--   <div class="bg-color-sky-light">
            <div class="content-lg container">
                <div class="row row-space-1">
                    <div class="col-sm-4 sm-margin-b-2">
                        <!-- Pricing -->
      <!--                  <div class="pricing">
                            <div class="margin-b-30">
                                <i class="pricing-icon icon-chemistry"></i>
                                <h3>Low <span> - $</span> 49</h3>
                                <p>Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                            </div>
                            <ul class="list-unstyled pricing-list margin-b-50">
                                <li class="pricing-list-item">Basic Features</li>
                                <li class="pricing-list-item">Up to 5 products</li>
                                <li class="pricing-list-item">50 Users Panels</li>
                            </ul>
                            <a href="pricing.html" class="btn-theme btn-theme-sm btn-default-bg text-uppercase">Choose</a>
                        </div>
                        <!-- End Pricing -->
         <!--           </div>
                    <div class="col-sm-4 sm-margin-b-2">
                        <!-- Pricing -->
         <!--               <div class="pricing pricing-active">
                            <div class="margin-b-30">
                                <i class="pricing-icon icon-badge"></i>
                                <h3>Professional <span> - $</span> 149</h3>
                                <p>Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                            </div>
                            <ul class="list-unstyled pricing-list margin-b-50">
                                <li class="pricing-list-item">Basic Features</li>
                                <li class="pricing-list-item">Up to 100 products</li>
                                <li class="pricing-list-item">100 Users Panels</li>
                            </ul>
                            <a href="pricing.html" class="btn-theme btn-theme-sm btn-default-bg text-uppercase">Choose</a>
                        </div>
                        <!-- End Pricing -->
       <!--             </div>
                    <div class="col-sm-4">
                        <!-- Pricing -->
        <!--                <div class="pricing">
                            <div class="margin-b-30">
                                <i class="pricing-icon icon-shield"></i>
                                <h3>Advanced <span> - $</span> 249</h3>
                                <p>Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                            </div>
                            <ul class="list-unstyled pricing-list margin-b-50">
                                <li class="pricing-list-item">Extended Features</li>
                                <li class="pricing-list-item">Unlimited products</li>
                                <li class="pricing-list-item">Unlimited Users Panels</li>
                            </ul>
                            <a href="pricing.html" class="btn-theme btn-theme-sm btn-default-bg text-uppercase">Choose</a>
                        </div>
                        <!-- End Pricing -->
      <!--              </div>
                </div>
                <!--// end row -->
  <!--          </div>
        </div>
        <!-- End Pricing -->

        <!-- Promo Section -->
    <!--    <div class="promo-section overflow-h">
            <div class="container">
                <div class="clearfix">
                    <div class="ver-center">
                        <div class="ver-center-aligned">
                            <div class="promo-section-col">
                                <h2>Our Clients</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua enim minim veniam exercitation ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua enim minim veniam exercitation</p>
                                <p>Ipsum dolor sit amet consectetur adipiscing elit sed tempor incididut ut sead laboret dolore magna aliqua enim minim veniam exercitation ipsum dolor sit amet consectetur adipiscing</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="promo-section-img-right">
                <img class="img-responsive" src="img/970x970/01.jpg" alt="Content Image">
            </div>
        </div>   -->
        <!-- End Promo Section -->


                    





        <!-- Work -->
        <div class="bg-color-sky-light overflow-h">
            <div class="content-lg container">
                <div class="row margin-b-40">
                    <div class="col-sm-6">
                        <h2>Faydalı Məlumatlar</h2>
                        <p>Konteynerlər, Vagonlar və Logistika ilə bağlı bir çox faydalı məlumatları burada əldə edə bilərsiz.</p>
                    </div>
                </div>
                <!--// end row -->

                <!-- Masonry Grid -->
                <div class="masonry-grid">
                    <div class="masonry-grid-sizer col-xs-6 col-sm-6 col-md-1"></div>
                    <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-8">
                        <!-- Work -->
                        <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="{{url('img/800x400/01.jpg')}}" alt="Portfolio Image">
                            </div>
                            <div class="work-content">
                                <h3 class="color-white margin-b-5">
                                    @if($lang == 'az')
                                    Vaqonlar
                                    @elseif($lang == 'en')
                                    Trains
                                    @elseif($lang == 'ru')
                                    Поезда
                                    @endif
                                </h3>
                                <p class="color-white margin-b-0">Bu linkə keçid edərək vaqonlar haqqında faydalı məlumatları görəcəksiz</p>
                            </div>
                            <a class="content-wrapper-link" href="{{$lang.'/train'}}"></a>
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                        <!-- Work -->
                        <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".2s">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="{{url('img/397x400/01.jpg')}}" alt="Portfolio Image">
                            </div>
                            <div class="work-content">
                                <h3 class="color-white margin-b-5">
                                    @if($lang == 'az')
                                    Konteynerlər
                                    @elseif($lang == 'en')
                                    Containers
                                    @elseif($lang == 'ru')
                                    Контейнеры
                                    @endif</h3>
                                <p class="color-white margin-b-0">Konteynerlərin həcmi, tipləri və digər məlumatları bu linkə keçərək əldə edə bilərsiniz</p>
                            </div>
                            <a class="content-wrapper-link" href="{{$lang.'/container'}}"></a>
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                        <!-- Work -->
                        <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="{{url('img/397x300/01.jpg')}}" alt="Portfolio Image">
                            </div>
                            <div class="work-content">
                                <h3 class="color-white margin-b-5">Malların Yüklənməsi</h3>
                                <p class="color-white margin-b-0">Yükünüzün zədə almadan yüklənməsi və daşınması</p>
                            </div>
                            <a class="content-wrapper-link" href="#"></a>
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                        <!-- Work -->
                        <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".4s">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="{{url('img/397x300/02.jpg')}}" alt="Portfolio Image">
                            </div>
                            <div class="work-content">
                                <h3 class="color-white margin-b-5">Anbar</h3>
                                <p class="color-white margin-b-0">Yükün anbara yığılması</p>
                            </div>
                            <a class="content-wrapper-link" href="#"></a>
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                        <!-- Work -->
                        <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".5s">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="{{url('img/397x300/03.jpg')}}" alt="Portfolio Image">
                            </div>
                            <div class="work-content">
                                <h3 class="color-white margin-b-5">Tankerlər</h3>
                                <p class="color-white margin-b-0">Tankerlərimiz haqqında məlumatlar</p>
                            </div>
                            <a class="content-wrapper-link" href="#"></a>
                        </div>
                        <!-- End Work -->
                    </div>
                </div>
                <!-- End Masonry Grid -->
            </div>
        </div>
@endsection