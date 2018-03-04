@extends('layouts.app')

@section('content')
<div  style="background:url('/img/1920x1080/01.jpg'); background-size: 100%; background-position: center" class="parallax-window" data-parallax="scroll" data-image-src="img/1920x1080/01.jpg">
            <div class="parallax-content container">
                <h1 class="carousel-title">
                  @if($lang == 'az')
                  Xəbərlər
                  @elseif($lang == 'en')
                  News
                  @elseif($lang == 'ru')
                  Новости
                  @endif
                </h1>
            </div>
        </div>
        <!--========== PARALLAX ==========-->

        <!--========== PAGE LAYOUT ==========-->
        <!-- Our Exceptional Solutions -->
        <div class="content-lg container">
            <!--// end row -->

            <div class="row margin-b-50">
                <!-- Our Exceptional Solutions -->
                @foreach($news as $news_)
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="margin-b-20">
                        <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                            <img style="height: 200px" class="img-responsive" src="{{asset($news_->photo)}}" alt="Our Exceptional Solutions Image">
                        </div>
                    </div>
                    <h3><a href="{{url($lang.'/news/'.$news_->id)}}">{{$news_->title_.$lang}}</a> <span class="text-uppercase margin-l-20">{{$news_->getCategoryAttr()}}</span></h3>
                    <p>{{$news_->content_.$lang}}</p>
                    <a class="link" href="{{url($lang.'/news/'.$news_->id)}}">
                      @if($lang == 'az')
                      Daha çox...
                      @elseif($lang == 'en')
                      Read More...
                      @elseif($lang == 'ru')
                      Подробнее...
                      @endif
                    </a>
                </div>

                @endforeach
                <!-- End Our Exceptional Solutions -->

            </div>
            <!--// end row -->
        {{$news->links()}}
        </div>
@endsection