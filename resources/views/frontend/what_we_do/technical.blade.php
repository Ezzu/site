@extends('layouts.single')

@section('title')
    <title>TVT</title>
    <style>
        .header{
            position: relative;
            background: url("{{asset('uploads/resources/header3.jpg')}}");
            background-size: cover;
            background-position: center;
            background-origin: border-box;
            min-height: 400px;
        }
    </style>
@stop

@section('content')
    <div class="ml-5 mb-5">
        <div class="h1" id="single-heading">Technical and Vocational Training</div>
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
@stop