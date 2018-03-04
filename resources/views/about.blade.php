@extends('layouts.app')


@section('content')

        <div style="background:url('/img/1920x1080/01.jpg'); background-size: 100%; background-position: center" class="parallax-window" data-parallax="scroll" data-image-src="{{asset('img/1920x1080/01.jpg')}}">
            <div class="parallax-content container">
                <h1 class="carousel-title">ACSC Logistics</h1>
               
            </div>
        </div>
        

        <!-- About -->
        <div class="content-lg container">
            <div class="row margin-b-20">
                <div class="col-sm-6">
                    <h2>
                      @if($lang == "az")
                      Haqqımızda
                      @elseif($lang == "en")
                      About us
                      @else
                      O нас
                      @endif
                      

                    </h2>
                </div>
            </div>
            <!--// end row -->

            <div class="row">
                <div class="col-sm-7 sm-margin-b-50">
                    @if($lang == "az")
                    <p>Nəqliyyat-logistika şirkəti kimi yaradılan “ACSC Logistics” MMC şirkəti, dəniz yolu, avtomobil yolu və dəmir yolu daşımaları həyata keçirir. "Azərbaycan Xəzər Dəniz Gəmiçiliyi" QSC tərəfindən təsis edilən şirkətin əsas məqsədi "Qədim İpək Yolu"nun, xüsusilə Transxəzər Nəqliyyat Dəhlizinin Avropa və Asiya arasında ən qısa marşrut kimi tam istifadəsini təşviq etmək, bu istiqamətdə əlavə yük axınlarının cəlb edilməsi imkanlarını araşdırmaq və onu həyata keçirmək, həmçinin bu nəqliyyat dəhlizinin potensialını, ötürmə qabiliyyətini artırmaqdır.“AXDG” QSC Trans-Xəzər nəqliyyat dəhlizinin dəniz hissəsində nəqliyyat qabiliyyətini artırmaq üçün Xəzər dənizi limanlarının genişləndirilməsi fonunda sistemli iş aparır. Hal-hazırda, “AXDG” QSC Xəzər dənizində yeganə bərə operatorudur və istismarında ümumi həcmi 500-dən çox və illik həcmi 60.000-dən çox vaqon daşıma qabiliyyəti olan 13 gəmi ilə fəaliyyət göstərir. Həmçinin, hazırda 2019-cu ildə istismara verilməsiplanlaşdırılaniki yeni unikal Ro-Pax tipli dəmiryolu-avtomobil-sərnişin gəmi-bərələri tikilir. “ACSC Logistics” MMC şirkəti, həm ölkə daxilində, həm də ölkə hüdudlarından kənarda geniş çeşitdə nəqliyyat və logistika xidmətləri göstərməklə yanaşı, ilk növbədə tərəfdaşların maraqlarını rəhbər tutaraqtərəfdaş təşkilatların vaqon parklarındanmüvəffəqiyyətlə yararlanır.Qısa müddətdə şirkət özünü etibarlı tərəfdaş, ödəməqabiliyyətli müştəri və dəqiq və dürüsticraçı kimi özünü təsdiq etmişdir.“ACSC Logistics” MMC məqsədlərinə nail olmaq istiqamətində hər hansı bir mənfəət əldə etmək üçün xüsusi maliyyə vəsaitinə ehtiyac duymayan şirkətdir. “ACSC Logistics” MMC, “AXDG” QSC ənənələrinə sadiq qalan hər bir əməkdaşı simasında aşağıdakı prinsiplərə əsaslanır: 
                        <br>
                            <br> -	Uzunmüddətli tərəfdaşlıqların yaradılması
                            <br> -	Şəffaf və aydın tarif siyasəti
                            <br> -	İnnovativ iş üsullarından istifadə
                            <br> -	Yüksək standartlara uyğun xidmət göstərmək
                            <br> -	Öz müştərilərinə ən yaxşı şərtləri təmin etmək
                            <br> -	Yarana biləcək gecikmələri aradan qaldırmaq üçün qabaqlayıcı tədbirlərin görülməsi, eləcə də ortaya çıxa biləcək məsələlərin həllində operativliyi təmin etmək
                            <br>
                            <b><span style="color: black; font-weight: 700">“ACSC Logistics” MMC tərəfindən göstərilən xidmətlər aşağıdakı kimidir:</span></b>
                            <br> -	Təhlükəli, əndazəsiz və s. yüklərin daşınma şəraiti, uyğun marşrutun, nəqliyyat növünün seçilməsi üçün məsləhət verilməsi
                            <br> -	Xəzər dənizi, Qara dəniz hövzələrində, eləcə də Azərbaycan, Gürcüstan, Qazaxıstan, Türkmənistan, Özbəkistan və s. istiqamətlərdə dəniz yolu və dəmir yolu daşımaları
                            <br> -	Poti, Batumi, Bakı, Hövsan, Aktau, Kurik, Türkmənbaşı və digər Xəzər və Qara dəniz limanlarında yükaşırma və saxlama xidmətləri
                            <br> -	Xüsusi şəraitdə yükdaşımaların razılaşdırılması
                            <br> -	Multimodal daşımalar
                            <br> -	Bütün tip gəmilər üzrə yükdaşıma
                            <br> -	Yükləmə/boşalma, vaqonların təmin olunması və rəsmiləşdirilməsi
                            <br> -	Bütün marşrut üzrə yük sahiblərini məlumatlandırılması
                            <br>
                            <b><span style="color: black; font-weight:700">Missiyamız</span></b>
                            <br> -	Müştərilərimiz üçün ideal təchizat zəncirinə nail olmaq
                            <br> -	Qısa müddət
                            <br> -	Qənaətçilik 
                            <br> -	Çatdırılmanın əlverişli yolları
                            <br> -	Dostluq münasibətləri

                    </p>
                    @elseif($lang == "en")
                    <p>ACSC Logistics was established as a logistics company realizing sea, rail and road transport.The company was founded by CJSC Azerbaijan Caspian Shipping Company, which aims to foster full accomplishment of “Ancient Silk Road” particularly, Trans Caspian International Transport Route, as the shortest route between Asia and Europe, evaluation and the implementation of the possibilities of attraction additional cargo flow in this direction, also the increase of the throughout capacity of this corridor. Against the back drop of expansion of ports of The Caspian Sea, CJSC “ACSC” is carrying out systematic works to increase transport capacity in the offshore section of the trans-Caspian corridor. Fortoday, CJSC“ACSC” is the only ferry operatoron The Caspian Sea and operates 13 ferries with a total capacity of more than 500 railway carriages and annual transshipment capacity of more than 60,000 railway carriages. Inaddition, currently two new unique railway-car-passenger ferries are being built, commissioning of which is expected to take place in 2019. 
                    ACSC Logistics provides wide range of logistics services in Azerbaijan as well as over seas, successfully operates car parks of its partner organizations, guided by the interests of the partners in the first place.In a short time, the company has established itself as a reliable and responsible partner, a solvent customer and a clear performer. ACSC Logistics is a self-sufficient company aim of which is not gaining profits at any cost but the satisfaction of its customers providing high-quality service to them. Being loyal to the traditions laid down by CJSC“ ACSC”, each employee of ACSC Logistics is guided by the principles: 

                        <br> -  Building long-term partnerships 
                        <br> -  Transparent and clear tarif fpolicy
                        <br> - 	Implementation of innovative working methods
                        <br> - 	Providing high-standard services
                        <br> - 	Providing the best conditions for its customers
                        <br> -	Carrying out preventive measures to eliminate possible costs, as well as promptness in resolving the issues that might arise
                        <br> -	Professional and timely fulfillment of duties according to agreements
                    </p>



                    @else
                    <p>
                    
                    ACSCLogistics создана как транспортно-логистическая компания осуществляющая морские, железнодорожные и автомобильные перевозки.   Компания учреждена ЗАО «Азербайджанское Каспийское Морское Пароходство» главными целями которого является способствовать задействованию в полную силу “Древнего Шелкового Пути”, в частности, транс-Каспийского транспортного коридора, как кратчайшего маршрута между Европой и Азией, изучение возможностей привлечения дополнительных грузопотоков в этом направлении и его осуществление, а также увеличение потенциала, пропускной возможности данного транспортного коридора. На фоне работ по расширению портов Каспийского моря, ЗАО «АКМП» проводит планомерные работы с целью наращивания транспортного потенциала на морском участке транс-Каспийского коридора. На сегодняшний день ЗАО «АКМП» является единственным паромным оператором на Каспийском море и эксплуатирует 13 паромов общей вместимостью более 500 вагонов и годовой перевалочной мощностью более 60,000 вагонов. Также в настоящее время ведется строительство двух новых уникальных железнодорожно-автомобильно-пассажирских паромов сдача в эксплуатацию которых ожидается в 2019 году. Компания ACSCLogistics оказывает широкий спектр транспортно-логистических услуг как в Азербайджане, так и за ее пределами, успешно оперирует вагонными парками партнерских организаций, при этом руководствуясь в первую очередь интересами партнеров. За короткое время компания зарекомендовала себя как надежного партнера, платежеспособного заказчика и четкого исполнителя. ACSCLogistics самодостаточная компания, которая не ставит особых финансовых задач направленных на получение прибыли любой ценой. Верная традициям, заложенным ЗАО «АКМП», ACSCLogistics в лице каждого сотрудника руководствуется принципами:
                    
                    
                        <br>
                            <br> -	Hалаживание долгосрочных партнерскихотношений
                            <br> -	Прозрачная и четкая тарифная политика
                            <br> -	Использованиеинновационных методов работы
                            <br> -	Оказание услуг по высоким стандартам
                            <br> -	Предоставление наилучших условий своим заказчикам 
                            <br> -	Проведение превентивных мер для устранения возможных издержек, а также оперативность в решение возникающих вопросов
                            <br> -  Профессиональное и своевременное исполнение обязанностей согласно договоренностям
                    </p>     
                    @endif
                    
                            
                    
                </div>
                <div class="col-sm-4 col-sm-offset-1">
                    <img class="img-responsive" src="{{asset('img/logistics1.jpg')}}" alt="about us">
                    <img class="img-responsive" style="margin-top: 25px" src="{{asset('img/logistics.jpg')}}" alt="about us">
                    <img class="img-responsive" style="margin-top: 25px" src="{{asset('img/logistics2.jpg')}}" alt="about us">
                </div>
            </div>
            <!--// end row -->
        </div>

@endsection