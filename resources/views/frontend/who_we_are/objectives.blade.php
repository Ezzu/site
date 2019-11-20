@extends('layouts.single')

@section('title')
    <title>Objectives</title>
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
        <div class="h1" id="single-heading">Objectives</div>
        <div class="mt-3 p text-justify">Focused on the children living in the shanty areas of the urban slums surrounding the posh habitats of big cities in Pakistan and strive for their wellbeing by providing free of cost education and vocational training with the help of Pakistani community through establishing the following :</div>
        <ul class="mt-3 mb-5" style="cursor: zoom-in;">
            <li>Establish Aabroo Welfare Higher Secondary Schools for formal education.</li>
            <li>Establish Vocational Training facilities at all the schools for both genders.</li>
            <li>Arrange sports & extracurricular activities for the students.</li>
            <li>Establish Medical Centers for providing early health assistance to the students and their parents.</li>
            <li>Establish nutrition (food & milk) programs for the students enrolled in the Aabroo Welfare Schools.</li>
            <li>Provide books, stationery, school uniforms & school shoes for free.</li>
            <li>Establish a Family Support initiative for the poor parents.</li>
            <li>Devise a sustainability initiative for these schools in a way to minimize their dependence on the donations from the benefactors.</li>
        </ul>
    </div>
@stop