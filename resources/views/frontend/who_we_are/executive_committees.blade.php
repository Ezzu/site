@extends('layouts.single')

@section('title')
    <title>Executive Committees</title>
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
        <div class="h1" id="single-heading">Executive Committees</div>
        <div class="mt-3 p text-justify">As required by the NGO (non-government organization) legal requirements, the executive committee has 13 members.  They are elected every four years from the general body members. The committee meets quarterly to formulate the day-to-day operational policies through sub-committees. Its current members are:</div>
        <table class="table table-hover mt-5 mb-5 bg-light">
            <thead class="thead-dark" style="background: rgba(10,111,183,0.8);color: #fff;">
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Name</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row" style="padding-top: 20px;">President</th>
                <td>Mr. Iftekhar Feroz<br>Honorary Counsel Portugal</td>
            </tr>
            <tr>
                <th scope="row" style="padding-top: 20px;">Sr. Vice-President</th>
                <td>Mr. Muhammad Anis Mufti<br>CEO: Metals & Crucibles</td>
            </tr>
            <tr>
                <th scope="row">Vice President</th>
                <td>Ms. Asma Anjum Rafi</td>
            </tr>
            <tr>
                <th scope="row">General Secretary</th>
                <td>Ms. Robina Shakil Qureshi*</td>
            </tr>
            <tr>
                <th scope="row">Finance Secretary</th>
                <td>Mrs. Furrukh Khalid</td>
            </tr>
            <tr>
                <th scope="row">Information Secretary</th>
                <td>Brig. Zubair Rehan</td>
            </tr>
            <tr>
                <th scope="row">Joint Secretary</th>
                <td>Dr. Rukhsana Sohail Chugtai</td>
            </tr>
            <tr>
                <th scope="row" style="padding-top: 40px;">Executive Members</th>
                <td>Mr. Shakil Ahmad Qureshi<br>Ms. Ibtesam Sakil<br>Mr. Imtiaz Ahmad Ch.<br>Mrs. Qura-tul-Ain Saif</td>
            </tr>
            </tbody>
        </table>
        <div class="mt-3 mb-5 p small text-justify">* Mrs. Robina Shakil was voted the "Woman Educator of 2009" and was awarded a shield by the Federal Education Minister Mrs. Zubaida Jalal.  Similarly, Late Dr. Abdul Razzaq Khan, the President of Aabroo Educational Welfare Organization, was presented with "Mohsin-e-Pakistan" Award in 2009.</div>
    </div>
@stop