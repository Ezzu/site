@extends('layouts.single')

@section('title')
    <title>Why we are?</title>
    <style>
        .header{
            position: relative;
            background: url("{{asset('uploads/resources/header1.jpg')}}");
            background-size: cover;
            background-position: center;
            background-origin: border-box;
            min-height: 400px;
        }
    </style>
@stop

@section('content')
    <div class="ml-5 mb-5">
        <div class="h1" id="single-heading">Why we are ?</div>
        <div class="mt-3 p text-justify">In Pakistan&rsquo;s rural areas, there is lack of employment opportunities and civil amenities (water, sewage, roads, electricity, health services, and educational facilities).  Because of that, the rural population is moving to the major cities in large numbers.  They live there in slums (kachi abadies).  In the Province of Punjab, there are 1,100 urban slums, with a population of 125 million.  The city of Lahore has 250 slums with a population of three million.  Children are a major portion of this population.</div>
        <div class="mt-3 p text-justify">Their parents work as house-servants, and laborers in factories and in the construction industry.  The children are unattended and neglected.  They remain illiterate.  They work as domestic helpers, street vendors, or beg to supplement the family income.  They are malnourished and have poor health.  Some are sexually exploited.  These children grow up to be thieves, vagabonds, and prostitutes.  For the future of Pakistan, it is necessary to educate these illiterate and neglected children who has nothing and no hope.  However, their parents do not have the resources to educate their children.  Educating these children is Aabroo's focus.</div>
    </div>
@stop