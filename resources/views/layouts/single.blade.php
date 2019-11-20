<html>
<head>
    @yield('title')
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css'>
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/menu.css')}}" rel="stylesheet">
    <link href="{{asset('css/footer.css')}}" rel="stylesheet">
    <link href="{{asset('css/welcome.css')}}" rel="stylesheet">
    <style>
        .tooltip {
          position: relative;
          display: inline-block;
        }
        
        .tooltip .tooltiptext {
          visibility: hidden;
          width: 140px;
          background-color: #555;
          color: #fff;
          text-align: center;
          border-radius: 6px;
          padding: 5px;
          position: absolute;
          z-index: 1;
          bottom: 150%;
          left: 50%;
          margin-left: -75px;
          opacity: 0;
          transition: opacity 0.3s;
        }
        
        .tooltip .tooltiptext::after {
          content: "";
          position: absolute;
          top: 100%;
          left: 50%;
          margin-left: -5px;
          border-width: 5px;
          border-style: solid;
          border-color: #555 transparent transparent transparent;
        }
        
        .tooltip:hover .tooltiptext {
          visibility: visible;
          opacity: 1;
        }
        .marq span{
            font-size: 20px;
            font-weight: bold;
            background: rgb(10,111,183);
            color: white;
            padding: 10px;
        }
        .marq marquee{
            font-size: 15px;
            font-weight: bold;
            margin: 0;
            padding: 0;
            padding-top: 15px;
            color: white;
        }

        .underline{
            margin-top: 0;
            background: rgba(10,111,183,0.9);
            width: 10em;
            height: 5px;
            margin-top: 15px;
            margin-bottom: 15px;
        }

        .h1{
            font-size: 32px;
            font-family: 'PT Sans', sans-serif;
        }

        #single-heading{
            cursor: pointer;
            border-left: 3px solid rgba(10,111,183,0.8);
            padding-left: 20px;
            padding-bottom: 10px;
        }

    </style>
    <script>
        function startNews(){
            $('#news li:first').slideUp(function(){
                $(this).appendTo($('#news')).slideDown();
            });
        }
        function stopNews(){
            clearInterval(interval);
        }
        $(document).ready(function(){
            interval = setInterval(startNews,4000);
            $('#news').hover(function(){
                stopNews();
            },function(){
                interval = setInterval(startNews,4000);
            });
        });
    </script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
         (adsbygoogle = window.adsbygoogle || []).push({
              google_ad_client: "ca-pub-3110055334139806",
              enable_page_level_ads: true
         });
    </script>
</head>
<body>
    @include('includes.menu')
    <div class="header"></div>
    <!--Main Content-->

    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-3">
                <!--QUICK LINKS-->
                <div style="border-radius: 0;" class="panel panel-primary">
                    <div style="border-radius: 0;" class="h3 mt-0 text-center panel-heading text-capitalize">quick links</div>
                    <div class="panel-body" id="quicklinks">
                        <ul class="list-unstyled quick-links">
                            <li><a href="{{route('welcome')}}"><i class="fa fa-angle-double-right"></i>Homepage</a></li>
                            <li><a href="{{route('ensuing_projects')}}"><i class="fa fa-angle-double-right"></i>Our Projects</a></li>
                            <li><a href="{{route('jobs')}}"><i class="fa fa-angle-double-right"></i>Careers</a></li>
                            <li><a href="#footer"><i class="fa fa-angle-double-right"></i>Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="panel border" style="border-radius: 0">
                    <div class="panel-body" style="border-radius: 0">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--HISTORY PANEL AND NEWS UPDATES-->
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-6" id="panelhistory">
                <!--HISTORY OF AABROO-->
                <div class="h1" id="h3" style="cursor: pointer;">HISTORY</div>
                <div id="u3" class="underline"></div>
                <p style="text-align: justify;">&ldquo;Aabroo Educational Welfare Organization&rdquo; was founded on January 01, 2003 and registered under the &ldquo;Voluntary Social Welfare Agencies (Registration and control) Ordinance 1961 (XLVI of 1961)&rdquo; .</p>
                <!--VISION OF AABROO-->
                <div class="h1" id="h6" style="cursor: pointer;">VISION</div>
                <div id="u6" class="underline"></div>
                <p style="text-align: justify;">Alleviate the suffering of the Pakistani migrant, poor, rural class through education of its children.</p>
                <!--MISSION OF AABROO-->
                <div class="h1" id="h4" style="cursor: pointer;">MISSION</div>
                <div id="u4" class="underline"></div>
                <p style="text-align: justify;"><b>Mission Educate Pakistan</b>&rsquo;s underprivileged children without political, religious, or ethnic discrimination to realize every child&rsquo;s potential in becoming a productive member of the Pakistani society.  </p>
            </div>
            <div class="col-lg-6">
                <!--News and updates-->
                <div style="border-radius: 0;" class="panel panel-primary">
                    <div style="border-radius: 0;" class="h3 mt-0 text-center panel-heading">News & Updates</div>
                    <div class="panel-body">
                        @if($count>0)
                            <ul id="news" style="list-style-type: none;height: 350px;overflow: hidden;cursor: pointer;">
                                @foreach($news as $new)
                                    <li class="mb-3" style="border-bottom: 1px solid #EEE;padding-bottom: 5px;">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <img style="height: 50px;width: 90px;" src="{{asset($new->featured)}}" alt="">
                                            </div>
                                            <div class="col-lg-6">
                                                {{$new->statement}}
                                            </div>
                                            <div class="col-lg-3">
                                                {{$new->created_at->diffForHumans()}}
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="text-right"><a href="#">See all</a></div>
                        @else
                            <div class="text-center">No news to show</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Watch us on youtube-->
    <div class="container">
        <div class="h1 text-center text-capitalize" id="h5">watch us on : youtube</div>
        <div class="underline" id="u5" style="position:relative; left:40%; width: 14em;"></div>
        <div class="panel border" style="border-radius: 0">
            <div class="panel-body" style="border-radius: 0">
                <div class="row">
                    @foreach($videos as $video)
                        <div class="col-lg-6">
                            <div class="h3 text-center">{{$video->name}}</div>
                            <div class="mt-5 mb-5"><iframe style="width: 100%;height: 50%;" src="{{$video->link}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @include('includes.footer')
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js'></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>

    <script  src="{{asset('js/menu.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script>
        $('#h1').hover(function(){
            $('#u1').animate({
                width : '+=10em'
            },'slow');
        },function(){
            $('#u1').animate({
                width : '-=10em'
            },'fast');
        });
        $('#h2').hover(function(){
            $('#u2').animate({
                width : '+=10em'
            },'slow');
        },function(){
            $('#u2').animate({
                width : '-=10em'
            },'fast');
        });
        $('#h3').hover(function(){
            $('#u3').animate({
                width : '+=5em'
            },'slow');
        },function(){
            $('#u3').animate({
                width : '-=5em'
            },'fast');
        });
        $('#h4').hover(function(){
            $('#u4').animate({
                width : '+=5em'
            },'slow');
        },function(){
            $('#u4').animate({
                width : '-=5em'
            },'fast');
        });
        $('#h5').hover(function(){
            $('#u5').animate({
                width : '+=6em',
                left : '-=3em'
            },'slow');
        },function(){
            $('#u5').animate({
                width : '-=6em',
                left : '+=3em'
            },'fast');
        });
        $('#h6').hover(function(){
            $('#u6').animate({
                width : '+=2em',
                left : '-=3em'
            },'slow');
        },function(){
            $('#u6').animate({
                width : '-=2em',
                left : '+=3em'
            },'fast');
        });
    </script>
    @yield('scripts')
</body>
</html>