@extends('layouts.single')

@section('title')
    <title>Sub Committees</title>
    <style>
        .header{
            position: relative;
            background: url("{{asset('uploads/resources/header.jpg')}}");
            background-size: cover;
            background-position: center;
            background-origin: border-box;
            min-height: 400px;
        }
        .table{
            background: white;
        }
    </style>
@stop

@section('content')
    <div class="ml-5 mb-5">
        <div class="h1" id="single-heading">Sub Committees</div>
        <div class="mt-3 p text-justify">To ensure smooth functioning and transparency of the organizational operations, following Sub Committees are constituted from amongst the members of the Executive Committee of Aabroo Educational Welfare Organization through a resolution taken by the Executive Committee during its bi-yearly meeting for this purpose.</div>
        <div class="mt-3 p text-justify">These committees have a clear cut mandate and requisite powers to develop SOPs in consultation with the department heads for the implementations of their recommendations after their approval from the Executive Committee.</p></div>
        <div class="h3">Sale/ Purchase Committee:</div>
        <table class="table table-hover">
            <tbody>
            <tr><td>1.</td><td  style="width: 50%">Mrs. Robina Shakil</td><td>General Secretary</td></tr>
            <tr><td>2.</td><td style="width: 50%">Mr. Imtiaz A. Chaudhary</td><td>Executive Member</td></tr>
            <tr><td>3.</td><td style="width: 50%">Mr. Shakil A. Qureshi</td><td>Executive Member</td></tr>
            </tbody>
        </table>
        <div class="h3">Accounts Committee:</div>
        <table class="table table-hover">
            <tbody>
            <tr><td>1.</td><td style="width: 50%">Mr. Iftrkhar Feroz</td><td>President</td></tr>
            <tr><td>2.</td><td style="width: 50%">Mrs. Robina Shakil</td><td>General Secretary</td></tr>
            <tr><td>3.</td><td style="width: 50%">Mrs. Furrukh Khalid</td><td>Finance Secretary</td></tr>
            </tbody>
        </table>
        <div class="h3">Construction Committee:</div>
        <table class="table table-hover">
            <tbody>
            <tr><td>1.</td><td style="width: 50%">Mr. Mohammad Anis Mufti</td><td>Sr. Vice President</td></tr>
            <tr><td>2.</td><td style="width: 50%">Mr. Shakil A. Qureshi</td><td>Executive Member</td></tr>
            <tr><td>3.</td><td style="width: 50%">Mr. Imtiaz A. Chaudhary</td><td>Executive</td></tr>
            </tbody>
        </table>
        <div class="h3">Human resource Committee:</div>
        <table class="table table-hover">
            <tbody>
            <tr><td>1.</td><td style="width: 50%">Brig &reg; Zubair Rehan</td><td>Information Secretary</td></tr>
            <tr><td>2.</td><td style="width: 50%">Mrs. Robina Shakil</td><td>General Secretary</td></tr>
            <tr><td>3.</td><td style="width: 50%">Mrs. Quratul-Ain Saif</td><td>Executive Member</td></tr>
            </tbody>
        </table>
        <div class="h3">Fundraising & Marketing Committee:</div>
        <table class="table table-hover">
            <tbody>
            <tr><td>1.</td><td style="width: 50%">Brig &reg; Zubair Rehan</td><td>Information Secretary</td></tr>
            <tr><td>2.</td><td style="width: 50%">Mrs. Nabiha Tehsin</td><td>Executive Member</td></tr>
            <tr><td>3.</td><td style="width: 50%">Mr. Bashir A. Mughal</td><td>Executive Member</td></tr>
            </tbody>
        </table>
        <div class="h3">Education/ Vocational training Committee:</div>
        <table class="table table-hover">
            <tbody>
            <tr><td>1.</td><td style="width: 50%">Mr. Mohammad Anis Mufti</td><td>Executive Member</td></tr>
            <tr><td>2.</td><td style="width: 50%">Mr. Shakil A. Qureshi</td><td>Executive Member</td></tr>
            </tbody>
        </table>
    </div>
@stop