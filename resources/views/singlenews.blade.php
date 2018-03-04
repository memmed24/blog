@extends('layouts.app')

@section('content')
<div  style="background:url('/img/1920x1080/01.jpg'); background-size: 100%; background-position: center" class="parallax-window" data-parallax="scroll" data-image-src="img/1920x1080/01.jpg">
            <div class="parallax-content container">
                <h1 class="carousel-title">ACSC Logistics</h1>
               
            </div>
        </div>
        <!--========== PARALLAX ==========-->

        <!--========== PAGE LAYOUT ==========-->
     

        <!-- About -->
        <div class="content-lg container">
            <div class="row margin-b-20">
                <div class="col-sm-6">
                    <h2>{{$news->$title}} - <span style="font-size: 20px; color: gray;">{{$news->created_at}}</span></h2>
                </div>
            </div>
            <!--// end row -->

            <div class="row">
                <div class="col-sm-7 sm-margin-b-50">
                    <p>
                    {{$news->$content}}  
                    </p>
                </div>
                <div class="col-sm-4 col-sm-offset-1">
                    <img class="img-responsive" src="{{asset($news->photo)}}" alt="about us">
                </div>
            </div>

            
            <!--// end row -->
        </div>
        <!-- End Team -->
        <!--========== END PAGE LAYOUT ==========-->

@endsection