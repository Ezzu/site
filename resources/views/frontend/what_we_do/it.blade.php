@extends('layouts.single')

@section('title')
    <title>IT Education</title>
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
        <div class="h1" id="single-heading">IT Education</div>
        <div class="mt-3 p text-justify">This is an era of Information Technology and it is leaping at a very fast rate. It has made it imperative for the management of &ldquo;Aabroo Educational Welfare Organization&rdquo; to strive for minimize the digital divide. To enhance the understanding of today&rsquo;s technological advancement <b>Aabroo Welfare Schools</b> are equipped with impressive computer labs, libraries with respectable collection of soft books on various technologies accessible through internet cloud. We are in the process of putting up our first STEM lab at Aabroo Welfare Higher Secondary School, Atta Bukash road, Lahore. This lab will be equipped to teach Robotics to the students of our schools.</div>
    </div>
@stop