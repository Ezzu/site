@extends('layouts.single')

@section('title')
    <title>Success Stories</title>
    <style>
        .header{
            position: relative;
            background: url("{{asset('uploads/resources/success.jpg')}}");
            background-size: cover;
            background-position: center;
            background-origin: border-box;
            min-height: 400px;
        }
    </style>
@stop

@section('content')
    <div style="margin-left: 45px;margin-right: 45px;" id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol style="margin-bottom: -30px;" class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="ml-5 mb-5 mr-5">
                    <div class="h1" id="single-heading">Ms. Hafeeza Majeed</div>
                    <span class="mt-3 p text-justify" style="float:right;"><img style="height:100px;width:100px;margin-left:10px;margin-bottom:5px;" src="{{asset('uploads/success_stories/hafeeza.jpg')}}" alt="Hafeeza"></span>
                    <div class="mt-3 p text-justify">Hafeeza Majeed, belonging to a poor family, daughter a mechanic, eldest of six siblings, secured her admission in class  one at &rdquo;Aabroo Welfare High School for girls&ldquo;, Kamahan Road, Lahore in April, 2004. She remained very regular and later proved to be a very hard working student. She took her Matriculation examination in March 2012, from BISE, Lahore and secured 68 % marks. Aabroo Educational Welfare Organization sponsored her college education and she took her I.Com. examination in 2014 from BISE, Lahore and secured 67% marks. Looking at her interest and hard work her further education was again sponsored by Aabroo Educational Welfare Organization for her graduation in Commerce Education. She took her B.Com. examination through “The University of Punjab” and graduated in 2016.</div>
                    <div class="mt-3 p text-justify">Presently she is employed as &rdquo;Junior Accountant&ldquo; in the accounts department of Aabroo Educational Welfare Organization. She is continuing her MBA (evening) at the Department of Business Administration, University of The Punjab.</div>
                    <div class="mt-3 p text-justify">We wish her best of luck in her future endeavors.</div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="ml-5 mb-5 mr-5">
                    <div class="h1" id="single-heading">Ms. Tayyeba Abdul Sattar</div>
                    <span class="mt-3 p text-justify" style="float:right;"><img style="height:100px;width:100px;margin-left:10px;margin-bottom:10px;" src="{{asset('uploads/success_stories/tayyaba.jpg')}}" alt="Tayyaba"></span>
                    <div class="mt-3 p text-justify">Tayyeba Abdul sattar, belonging to a poor family, daughter an unskilled worker, she was fourth of six siblings, secured her admission in class  one at &rdquo;Aabroo Welfare High School for girls&ldquo;, Kamahan Road, Lahore in April, 2004. She remained very regular and later proved to be a very hard working student. She took her Matriculation examination in March 2012, from BISE, Lahore and secured 64 % marks. Aabroo Educational Welfare Organization sponsored her college education and she took her I.Com. examination in 2017 from BISE, Lahore and secured 66% marks. Looking at her interest and hard work her further education was again sponsored by Aabroo Educational Welfare Organization for her graduation in Commerce Education. She took her B.Com. examination through “The University of Punjab” and graduated in 2016.</div>
                    <div class="mt-3 p text-justify">Presently she is employed as &rdquo;Junior Accountant&ldquo; in the accounts department of Aabroo Educational Welfare Organization. She is continuing her MBA (evening) at the Department of Business Administration, University of The Punjab.</div>
                    <div class="mt-3 p text-justify">We wish her best of luck in her future endeavors.</div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="ml-5 mb-5 mr-5">
                    <div class="h1" id="single-heading">Ms. Aasma Mahboob</div>
                    <!-- <span class="mt-3 p text-justify" style="float:right;"><img style="height:100px;width:100px;padding: 0 0 5px 5px;" src="{{asset('uploads/success_stories/asma.jpg')}}" alt="Asma"></span> -->
                    <div class="mt-3 p text-justify">Aasma Mahboob, belonging to a poor family, daughter a mechanic, eldest of five siblings, secured her admission in class  one at &rdquo;Aabroo Welfare High School for girls&ldquo;, Kamahan Road, Lahore in April, 2004. She remained very regular and later proved to be a very hard working student. She took her Matriculation examination in March 2013, from BISE, Lahore and secured 68 % marks. Aabroo Educational Welfare Organization sponsored her college education and she took her F. Sc. examination from BISE, Lahore and secured 76% marks. Looking at her interest and hard work, her educational sponsorship was renewed by Aabroo Educational Welfare Organization for the graduation. She graduated with 1st.division, from &rdquo;The University of Punjab&ldquo; and earned her B.A degree in 2016.</div>
                    <div class="mt-3 p text-justify">Presently she is employed as &rdquo;Teacher&ldquo; for junior classes @ Aabroo Welfare Elementary School. She is continuing her M.A-English (evening) at the Department of English Language, University of The Punjab, Lahore.</div>
                    <div class="mt-3 p text-justify">We wish her best of luck in her future endeavors.</div>
                </div>
            </div>
        </div>
        <a style="margin-left: -45px; color: black;width: 45px;background:rgb(10,111,150);" class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a style="margin-right: -45px; color: black;width: 45px;background:rgb(10,111,150);" class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span style="color: black" class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
@stop