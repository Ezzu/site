@extends('layouts.single')

@section('title')
    <title>Financial</title>
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
        <div class="h1" id="single-heading">Financial Transparency</div>
        <div class="mt-3 p text-justify">A financial bi-annual internal audit and an annual external audit are conducted.  Details of the Aabroo&rsquo;s balance sheets are published on Aabroo website.</div>
        <div class="mt-3 p text-justify">Aabroo is intolerant of corruption in all its facets and at levels of Aabroo&rsquo;s organization. An Executive Subcommittee is responsible for vigilance and nurturing practices in all aspects of Aabroo&rsquo;s operations.</div>
        <br>
        <hr>
        <div id="accounts" style="height: 500px;"></div>
        <hr>
    </div>
    <div class="container">
<!--        <h4><a href="{{route('download',['filename'=>'report15'])}}">Download Audit Report 2015</a></h4> -->
        <h4><a href="{{route('download',['filename'=>'report16'])}}">Download Audit Report 2016</a></h4>
        <h4><a href="{{route('download',['filename'=>'report17'])}}">Download Audit Report 2017</a></h4>
        <h4><a href="{{route('download',['filename'=>'report18'])}}">Download Audit Report 2018</a></h4>
    </div>
@stop

@section('scripts')
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/series-label.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script type="text/javascript">
        $(function(){
            $('#accounts').highcharts({

                title: {
                    text: 'Aabroo Educational Welfare Organization, 2004-2018'
                },

                subtitle: {
                    text: 'Expenditures Reports'
                },

                yAxis: {
                    title: {
                        text: 'Expenses in Rs.'
                    },
                    min: 0,
                    max: 50000000,
                    tickInterval: 5000000,
height: '100%',
                    resize: {
                        enabled: true,
                    }

                },
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'top'
                },

                plotOptions: {
                    series: {
                        label: {
                            connectorAllowed: false
                        },
                        pointStart: 2004,
                        pointInterval: 1
                    }
                },

                series: [{
                    name: 'Reciepts',
                    data: [874170, 1463884, 2240220, 3733524, 3944300, 3941220, 3590020, 4827830, 7269798, 6334627, 13150303, 20062557, 18444400, 25074800, 45098866]
                }, {
                    name: 'Enrollment',
                    data: [ 250, 480, 670, 1050, 1400, 1790, 2100, 2480, 2810, 3122, 3510, 3900, 4200, 4500, 4720]
                }, {
                    name: 'Educational Expenditure',
                    data: [391140, 680678, 1250118, 2619168, 2779300, 2834847, 2890485, 3257760, 3830353, 4275791, 4284590, 6601904, 8277720, 8953340, 13494273]
                }, {
                    name: 'Non-Educational Expenditure',
                    data: [443453, 757964, 888320, 1044397, 1134532, 796238, 1124660, 1442710, 1281637, 1508591, 2228713, 4234224, 6083702, 6418793, 21031413]
                }, {
                    name: 'Excess of Receipts',
                    data: [9320, 4562, 60492, 95573, 85021, 346363, 122050, 59944, 1974316, 1278682, 4458806, 7228339, 4731471, 7412783, 9231641]
                }, {
                    name: 'Capital Expenses',
                    data: [ 330257, 320000, 415852, 344787, 401020, 408520, 413561, 365254, 413548, 415879, 8341425, 15356876, 14379846, 20421355, 28254322]
                    // data: [ 30257, 30000, 45852, 34787, 41020, 48520, 43561, 65254, 123548, 1245879, 3456876, 6456876, 6579846, 7021355, 8754322]
                }, {
                    name: 'Administrative Expenditure',
                    data: [ 33257, 32000, 41852, 34487, 40100, 40820, 41361, 36554, 41348, 41589, 43425, 356876, 439846, 421355, 43522]

                }],

                responsive: {
                    rules: [{
                        condition: {
                            maxWidth: 600
                        },
                        chartOptions: {
                            legend: {
                                layout: 'horizontal',
                                align: 'center',
                                verticalAlign: 'bottom'
                            }
                        }
                    }]
                }

            })
        });
    </script>
@stop