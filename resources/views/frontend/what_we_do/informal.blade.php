@extends('layouts.single')

@section('title')
    <title>Aabroo - Education</title>
    <style>
        .header{
            position: relative;
            background: url("{{asset('uploads/resources/header.jpg')}}");
            background-size: cover;
            background-position: center;
            background-origin: border-box;
            min-height: 400px;
        }
    </style>
@stop

@section('content')
    <div style="margin-left: 45px;margin-right: 45px; height: 450px;width: 703px;align-content: center" id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol style="margin-bottom: -30px;" class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="ml-5 mb-5 mr-5">
                    <div class="h1" id="single-heading">Informal Education (Literacy)</div>
                    <div class="mt-3 p text-justify">Wealthy Muslims are bound to give Zakat for purifying their wealth.  Zakat is one of the major sources of funding for Poor the student. Therefore, Aabroo collects Zakat from Local Muslim Community to bear the expensive of poorest of the poor Students.</div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="ml-5 mb-5 mr-5 carousel-content">
                    <div class="h1" id="single-heading">Formal Education</div>
                    <div class="mt-3 p text-justify">The formation of formal education wing is based upon establishing, Jhuggi (tant) schools in the areas on the outskirts of the big cities where innumerable Gypsy Tribes dwell in the Jhuggies (tents made of rags). The living condition in these areas is worse than the urban slums and the Gypsy Children live here in pathetic conditions. In the absence of water, electricity and security they are forced to work for supplementing their family income. They are mostly involved in Rag Picking, begging, disposing-off the daily waste from the streets of the cities for nominal pays.</div>
                    <div class="mt-3 p text-justify">We establish formal &ldquo;Aabroo Welfare Schools&rdquo; either in self-owned or rented buildings. All <b>Aabroo Schools</b> provide formal higher Secondary School level education for the day scholars and strictly follow the syllabi designed by the Text Book Boards of the provincial governments. All &ldquo;Aabroo Welfare Schools&rdquo; are registered with Education Departments of the respective provincial governments and affiliated with the Boards of Intermediate & Secondary Education in their geographical locations.</div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="ml-5 mb-5 mr-5">
                    <div class="h1" id="single-heading">Tech. / Vocational Training</div>
                    <div class="mt-3 p text-justify">TVT is made compulsory for the students of &ldquo;Aabroo Welfare Schools&rdquo;. All the boys and girls are to take at least one trade of his/ her interest from the following :</div>
                    <div class="row">
                        <div class="col-lg-6 col-md-8 col-sm-8 col-xs-8 mt-4">
                            <ol style="line-height: 30px;">
                                <li>Dress Designing and Making</li>
                                <li>General Electronics</li>
                                <li>Home appliances repair & Maintenance</li>
                                <li>Cooking</li>
                                <li>Secretarial Assistance/ Call center</li>
                            </ol>
                        </div>
                        <div class="col-lg-6 col-md-4 col-sm-4 col-xs-4 mt-4">
                            <ul style="list-style: none;line-height: 30px;">
                                <li>Boys & Girls.</li>
                                <li>Boys & Girls.</li>
                                <li>Boys.</li>
                                <li>Girls.</li>
                                <li>Boys & Girls.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-3 p text-justify">We establish formal &ldquo;Aabroo Welfare Schools&rdquo; either in self-owned or rented buildings. All Aabroo Schools provide formal higher Secondary School level education for the day scholars and strictly follow the syllabi designed by the Text Book Boards of the provincial governments. All &ldquo;Aabroo Welfare Schools&rdquo; are registered with Education Departments of the respective provincial governments and affiliated with the Boards of Intermediate & Secondary Education in their geographical locations.</div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="ml-5 mb-5 mr-5">
                    <div class="h1" id="single-heading">IT Education</div>
                    <div class="mt-3 p text-justify">This is an era of Information Technology and it is leaping at a very fast rate. It has made it imperative for the management of &ldquo;Aabroo Educational Welfare Organization&rdquo; to strive for minimize the digital divide. To enhance the understanding of today&rsquo;s technological advancement <b>Aabroo Welfare Schools</b> are equipped with impressive computer labs, libraries with respectable collection of soft books on various technologies accessible through internet cloud. We are in the process of putting up our first STEM lab at Aabroo Welfare Higher Secondary School, Atta Bukash road, Lahore. This lab will be equipped to teach Robotics to the students of our schools.</div>
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