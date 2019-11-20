@extends('layouts.single')

@section('title')
    <title>Capital Projects</title>
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
        <div class="h1" id="single-heading">Capital Projects</div>
        <div class="mt-3 p text-justify">It was stated that Aabroo management is already intolerant towards any type of corruption on any level of its hierarchy. The system on the higher level is already made very vigilant through the sub committees made from within the members of Executive Committee and all good practices are observed in all aspects of the operations.</div>
        <div class="mt-3 p text-justify">A bi-annual internal audit as well as an annual external audit is conducted every fiscal year (July 01, to June 30). The balance sheets are available on our website.</div>
        <div class="mt-3 p text-justify">Some corruption at the middle level was discovered in the past and appropriate measures were taken to address this. Now the middle level management has to follow the SOPs for all operational workings.</div>
        <div class="mt-3 p text-justify">High level of control is kept at the lowest level (drivers, helpers, etc.) and corruption has been minimized, but irrespective of our full vigilance, we are unable to assure zero corruption.</div>
    </div>
@stop