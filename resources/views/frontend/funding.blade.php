@extends('layouts.single')

@section('title')
    <title>Funding</title>
    <style>
        .header{
            position: relative;
            background: url("{{asset('uploads/resources/header2.jpg')}}");
            background-size: cover;
            background-position: center;
            background-origin: border-box;
            min-height: 400px;
        }
    </style>
@stop

@section('content')
    <div style="margin-left: 45px;margin-right: 45px; height: 318px;width: 703px;align-content: center" id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol style="margin-bottom: -30px;" class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="ml-5 mb-5 mr-5">
                    <div class="h1" id="single-heading">Zakat</div>
                    <div class="mt-3 p text-justify">Wealthy Muslims are bound to give Zakat for purifying their wealth.  Zakat is one of the major sources of funding for Poor the student. Therefore, Aabroo collects Zakat from Local Muslim Community to bear the expensive of poorest of the poor Students.</div>
                    <div class="mt-3 p text-justify">Aabroo maintains a separate Zakat account and expenditures from this account are made strictly for the Muslim Students, according to the guidelines per Islamic Sharia.</div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="ml-5 mb-5 mr-5 carousel-content">
                    <div class="h1" id="single-heading">Cash Donations (Sadqat)</div>
                    <div class="mt-3 p text-justify">Donations are various types of charity giveaways like Sadqat and Khairat. Our trustees and good people of our local communities give us donations for helping the poor students enrolled in Aabroo Welfare high schools. A major proportion of this money is used for the Non-Muslim students and partly for further developments and expansions.</div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="ml-5 mb-5 mr-5">
                    <div class="h1" id="single-heading">Educate a Child Program</div>
                    <div class="mt-3 p text-justify">Educate a child program was launched in May 2005. Aabroo offers educational sponsorship of the low privileged students to the Pakistani community @ Rs. 700 (seven hundred only) per month per child. One can sponsor as many students with a payment schedule of one&rsquo;s own convenience.</div>
                    <div class="mt-3 p text-justify">Aabroo furnishes a sponsorship file carrying a Student Information Sheet bearing child&rsquo;s photograph to the sponsor and keeps sending the Result Sheet for each exam the student takes.</div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="ml-5 mb-5 mr-5">
                    <div class="h1" id="single-heading">Qurbani Hides Collection</div>
                    <div class="mt-3 p text-justify">Eid-ul-Azha is another opportunity that Aabroo avails to raise funds from the public. This campaign starts at the very beginning of Haj Month when we call our donors to donate us Hides and Meat from their sacrificed animals.</div>
                    <div class="mt-3 p text-justify">Hides are sold to the tanneries and the meat is distributed to the poor student.</div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="ml-5 mb-5 mr-5">
                    <div class="h1" id="single-heading">Solid Waste Management Program</div>
                    <div class="mt-3 p text-justify">This is basically a Sustainability Initiative.  Aabroo&rsquo;s governance has decided it as a policy, that the dependence of Aabroo Educational Welfare Organization&rsquo;s educational and other allied undertakings shall have a minimum dependence on the donations from the benefactors and shall have an income generating venture to support its present and future endeavors.</div>
                    <div class="mt-3 p text-justify">Our smart workers would come to your house weekly, on a fixed schedule and collect the garbage bag filled with your recyclable dry waste while providing a fresh clean empty garbage bags free of cost for the next week. This dry waste collected daily from the community is taken to our waste recycling facility where the garbage is sorted by the well-trained staff before being sold to recycling companies.</div>
                    <div class="mt-3 p text-justify">Aabroo has introduced the concept of in-house segregation of Biodegradable and dry recyclable domestic waste and its door to door collection from the rich households.</div>
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