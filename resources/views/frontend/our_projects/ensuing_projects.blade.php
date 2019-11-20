@extends('layouts.single')

@section('title')
    <title>Ensuing Projects</title>
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
    <div class="ml-5 mb-5">
        <div class="h1" id="single-heading">Ensuing Projects</div>
        <ol style="font-size: 19px;">
            <li>Land for expansion:
                <ul>
                    <li>Purchased 1250 sq. yds. (@ Rs. 10,000/sq. yd. for Rs. 12.5 million).</li>
                    <li>To buy 500 sq. yds.</li>
                </ul>
            </li><br>
            <li>Higher Secondary School:
                <ul>
                    <li>90% complete.</li>
                    <li>Has applied for upgradation from Secondary to Higher Secondary School.</li>
                </ul>
            </li><br>
            <li>Primary School:
                <ul>
                    <li>Started construction.</li>
                    <li>Completion in March 2018, Insha Allah.</li>
                    <li>Excluding land, the estimated cost is Rs. 10 Million.</li>
                </ul>
            </li><br>
            <li>Home of Peace (an orphanage):
                <ul>
                    <li>Started construction.</li>
                    <li>Completion in March 2018, Insha Allah.</li>
                    <li>The estimated cost is Rs. 20 Million.</li>
                </ul>
            </li><br>
            <li>The Information Technology Laboratory:
                <ul>
                    <li>@ Higher Secondary School.</li>
                    <li>Ready to serve as a digital Library at the Aabroo Barkat Hussain Public Library in partnership with the Quaid-e- Azam Public Library.</li>
                </ul>
            </li>
        </ol>
    </div>
@stop