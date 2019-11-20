@extends('layouts.single')

@section('title')
    <title>Solid Waste Recycling Project</title>
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
        <div class="h1" id="single-heading">Solid Waste Recycling Project</div>
        <div class="mt-3 p text-justify">This is basically a Sustainability Initiative.  Aabroo&rsquo;s governance has decided it as a policy, that the dependence of Aabroo Educational Welfare Organization&rsquo;s educational and other allied undertakings shall have a minimum dependence on the donations from the benefactors and shall have an income generating venture to support its present and future endeavors.</div>
        <div class="mt-3 p text-justify">Aabroo Solid Waste Management initiative was launched on February 01, 2007 with a dual mission:</div>
        <ol class="mt-3">
            <li>To raise funds for Aabroo Welfare Schools that run under the Aabroo Educational Welfare Organization, providing free education to the homeless and destitute children.</li><br>
            <li>To educate the public particularly the housewives, students in the schools, colleges, and universities and create a widespread awareness regarding (Reduce-Reuse-Recycle) for Environment Protection.</li>
        </ol>
        <div class="h2">SOLID WASTE MANAGEMENT PROJECT BRIEF</div>
        <div class="h3">Dry/Recyclable Inorganic Waste:</div>
        <div class="mt-3 p text-justify">Aabroo provides polypropylene bags to the donor that is kept in the house/ office for one week. The donor secures in this bag, any recyclable material produced in their households like emptied PET bottles, old newspapers old books, used notebooks, cartons, various packaging, used clothes, uniforms, shoes and school shoes, school bags etc. This bag is collected and replaced with a new empty bag by the Aabroo solid waste collection staff on weekly basis.</div>
        <div class="mt-3 p text-justify">This waste is transported to a warehouse to be manually segregated into separate items for selling to recyclers. Presently Aabroo collects solid waste from nearly 7000 households and institutions on weekly basis and approximately 28000 donors per month. This activity generates funds to support one-third of the present monthly expenditure of Aabroo. We hope the in a few years this initiative is going to fully support Aabroo&rsquo;s funding requirements.</div>
        <div class="h3">Procedure:</div>
        <div class="mt-3 p text-justify">Aabroo gives a poly propylene bag to the donor that he/ she keeps in the house and replaces it normally in three months. The donor collects used PET bottles, old newspapers old books, used notebooks, cartons, various packaging, used clothes, uniforms, shoes and school shoes, school bags etc. This bag when becomes full, it is collected by the Aabroo solid waste collection staff (weekly or fortnightly). This waste is transported to a warehouse to be manually segregated into separate items for selling to recyclers.</div>
    </div>
@stop