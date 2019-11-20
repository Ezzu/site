<html>
<head>
    <title>Our Newsletter</title>
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
    <link href="{{asset('css/lightgallery.css')}}" rel="stylesheet">
    <style>
        .header{
            position: relative;
            background: url("{{asset('uploads/resources/newsletter.png')}}");
            background-size: cover;
            background-position: center;
            background-origin: border-box;
            min-height: 300px;
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

        img{
            width: 100%;
        }

        #single-heading{
            cursor: pointer;
            border-left: 3px solid rgba(10,111,183,0.8);
            padding-left: 20px;
            padding-bottom: 10px;
        }
    </style>
</head>
<body>
@include('includes.menu')
<div class="header"></div>
<!--Main Content-->
<div class="container">
    <div class="row mt-5">
        <div class="col">
            <div class="panel border" style="border-radius: 0">
                <div class="panel-body" style="border-radius: 0">

                    <div class="h1" class="ml-5" id="single-heading">Newsletter 2019</div>
                    <hr>
                    <div class="ml-5 mb-5 mt-5 mr-5">
                        <ul id="urdu_2019_gallery" style="list-style: none;" class="row">
                            <li class="col-md-3" style="margin-bottom: 10px;" data-src="{{ asset('uploads/brochures/eng_1.png') }}" data-sub-html="<h4>Aabroo's Newsletter 2019</h4><p>Page 1</p>">
                                <img class="brochure" src="{{ asset('uploads/brochures/eng_1-min.png') }}">
                            </li>
                            <li class="col-md-3" style="margin-bottom: 10px;" data-src="{{ asset('uploads/brochures/eng_2.png') }}" data-sub-html="<h4>Aabroo's Newsletter 2019</h4><p>Page 2</p>">
                                <img class="brochure" src="{{ asset('uploads/brochures/eng_2-min.png') }}">
                            </li>
                            <li class="col-md-3" style="margin-bottom: 10px;" data-src="{{ asset('uploads/brochures/eng_3.png') }}" data-sub-html="<h4>Aabroo's Newsletter 2019</h4><p>Page 3</p>">
                                <img class="brochure" src="{{ asset('uploads/brochures/eng_3-min.png') }}">
                            </li>
                            <li class="col-md-3" style="margin-bottom: 10px;" data-src="{{ asset('uploads/brochures/eng_4.png') }}" data-sub-html="<h4>Aabroo's Newsletter 2019</h4><p>Page 4</p>">
                                <img class="brochure" src="{{ asset('uploads/brochures/eng_4-min.png') }}">
                            </li>                    
                        </ul>
                    </div>
                    <hr>
                    <!--<div class="h1" class="ml-5" id="single-heading">Newsletter 2019 Urdu</div>-->
                    <!--<hr>-->
                    <div class="ml-5 mb-5 mt-5 mr-5">
                        <ul id="eng_2019_gallery" style="list-style: none;" class="row">
                            <li class="col-md-3" style="margin-bottom: 10px;" data-src="{{ asset('uploads/brochures/urdu_1.jpg') }}" data-sub-html="<h4>Aabroo's Newsletter 2019</h4><p>Page 1</p>">
                                <img class="brochure" src="{{ asset('uploads/brochures/urdu_1-min.jpg') }}">
                            </li>
                            <li class="col-md-3" style="margin-bottom: 10px;" data-src="{{ asset('uploads/brochures/urdu_2.jpg') }}" data-sub-html="<h4>Aabroo's Newsletter 2019</h4><p>Page 2</p>">
                                <img class="brochure" src="{{ asset('uploads/brochures/urdu_2-min.jpg') }}">
                            </li>
                            <li class="col-md-3" style="margin-bottom: 10px;" data-src="{{ asset('uploads/brochures/urdu_3.jpg') }}" data-sub-html="<h4>Aabroo's Newsletter 2019</h4><p>Page 3</p>">
                                <img class="brochure" src="{{ asset('uploads/brochures/urdu_3-min.jpg') }}">
                            </li>
                            <li class="col-md-3" style="margin-bottom: 10px;" data-src="{{ asset('uploads/brochures/urdu_4.jpg') }}" data-sub-html="<h4>Aabroo's Newsletter 2019</h4><p>Page 4</p>">
                                <img class="brochure" src="{{ asset('uploads/brochures/urdu_4-min.jpg') }}">
                            </li>                    
                        </ul>
                    </div>
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
    <script type="text/javascript">
        $(document).ready(function(){
            $('#urdu_2019_gallery').lightGallery();
            $('#eng_2019_gallery').lightGallery();
        });
    </script>
    <script src="{{asset('js/lightgallery-all.min.js')}}"></script>
</body>
</html>