<html>
<head>
    <title>Welcome to Aabroo</title>
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
    <link href="{{asset('css/lightgallery.css')}}" rel="stylesheet">
    <style>
        .header{
            background: url("{{asset('uploads/resources/header3.jpg')}}");
            background-size: cover;
            background-position: center;
            background-origin: border-box;
            min-height: 300px;
        }
    </style>
    <script src="{{asset('js/news.js')}}"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-3110055334139806",
        enable_page_level_ads: true
      });
    </script>
</head>
<body>
    <div class="social"></div>
    <div class="header">
        @include('includes.menu')
        <div class="dark-layer"></div>
        <div class="btn btn-primary btn-head-donate">DONATE!</div>
        <div class="text-center text-header">An organization beyond political, ethnic and religious descrimination</div>
    </div>
    <div class="text-center marq">
        <marquee scrollamount="5" width="40%">Opening Doors</marquee>
        <span>Aabroo Schools</span>
        <marquee scrollamount="5" direction="right" width="40%">Changing Lives</marquee>
    </div>
    <div class="container">
        <div class="row">
        <div class="col-lg-8 block1 notAnimated animateBlock right" style="font-family:'times new roman'">
                <div class="h1" id="h2" style="cursor: pointer;">Message from Founder</div>
                <div id="u2" class="underline"></div>
                <div class="row">
                    <p class="mb-0 col-md-9 text-justify">I, Robina Shakil, lost my mother in 1980, at the age of 13. Since then my life has been an ongoing struggle. Being eldest of six children and daughter of a poor man, I felt ill prepared to handle the challenges, life had in store for me. By the grace of God, a few elders from the neighborhood not only helped me with my younger brothers and sisters but also encouraged me to continue my studies. I graduated from Lahore College Women University in 1997 and also secured a diploma in Computer Science in the same year.</p>
                    <div class="col-md-3"><img style="padding-bottom:5px;height: 150px;width: 180px;border-radius: 10px;;-moz-border-radius: border-radius: 10px;;border-radius: border-radius: 10px;;" id="img_executive" src="{{asset('uploads/avatars/secretary.jpg')}}" alt="image text"></div>
                </div>
                <div class="p text-justify">Early 1998, I started my first job as Junior Instructor Secretarial Trade at Pak German Technical Training Center, under the Directorate of Manpower & Training. During the second month of my service my father died of Cardiac Arrest and all of us were left orphans. As a result, another test of life began. This time though contrary to 9 years earlier, I was more confident and capable due to my education and training. I married a highly educated person on the condition that he to help me raise my siblings especially my two younger sisters. Gradually, over a span of fourteen years, we settled all my brothers and sisters.</div>
                <div class="p text-justify">I was convinced that success lies in education, learning and patience and above all, Allah’s blessings. Once my family troubles were behind me and we were financially comfortable, I noticed that the domestic maids working in affluent homes were themselves living in dreadful conditions. Firstly they were not only working for very low pay,  but were also being exploited in innumerable ways, beaten by their employers and being subjected to domestic violence by their, fathers, brothers and husbands. Secondly their children did not go to school especially the girls, who were being prepared as a new crop of maids who would replace their mothers.</div>
                <div class="p text-justify">Based on my life experience, I knew that education is the only tool that could rid these children (boys & girls) from this lifelong sentence of servitude and poverty. I was convinced that it was the only way to take them out of this cycle of hopelessness and lead them to a better and more honorable life. In Shaa Allah.</div>
                <div class="p text-justify">After consulting with my husband, I decided to start teaching my maid’s five children in our car porch Very quickly the number grew and within a span of 40 days the number of students increased to 65. We understood that the free midday meal that comes with the free schooling was the biggest motivator for the children as parents didn’t initially understand or appreciate the value of education as it prevented them from working and earning money.</div>
                <div class="p text-justify">This laid the foundation for “Aabroo Educational Welfare Organization”, a train of hope, for the desperately poor children of Pakistan, driven by its privileged benefactors, changing lives along the way.  In Shaa Allah. </div>
            </div>
            <!-- <div class="col-lg-4 block1 notAnimated animateBlock left">
                <div class="h1" id="h1" style="cursor: pointer;">Executive Message</div>
                <div id="u1" class="underline"></div>
                <div class="row">
                    <p class="mb-0 col-md-8 text-justify">A major proportion of the rural population in Pakistan is flooding the posh areas of all major cities. These folks come looking for employment and earn cash wages to sustain their lives.</p>
                    <div class="col-md-4"><img style="height: 70px;width: 200px;border-radius: 10px;" id="img_executive" src="{{asset('uploads/avatars/executive.jpg')}}" alt="image text"></div>
                </div>
                <div class="p text-justify mb-3">In the absence of civil amenities, infrastructure, employment opportunities, health services, appropriate education, and above all non availability of sufficient cash wages these people find it very attractive to migrate towards the urban areas and look for what they need for their living. These people bring along their rural culture, habits their peculiar living styles, language, accents, and the usual rural lethargy. In the cities they dwell in the slums and Kachi Abadies around the posh urban areas. In this way huge rural clusters develop within the urban areas and usual rural routine is set up here.</div>
            </div> -->
            <div class="col-lg-4">
                @include('includes.slider')
            </div>
            <!-- <div class="col-lg-4 block1 notAnimated animateBlock right">
                <div class="h1" id="h2" style="cursor: pointer;">G. Secretary Message</div>
                <div id="u2" class="underline"></div>
                <div class="row">
                    <p class="mb-0 col-md-8 text-justify">A major proportion of the rural population in Pakistan is flooding the posh areas of all major cities. These folks come looking for employment and earn cash wages to sustain their lives.</p>
                    <div class="col-md-4"><img style="height: 100px;width: 200px;border-radius: 10px;;-moz-border-radius: border-radius: 10px;;border-radius: border-radius: 10px;;" id="img_executive" src="{{asset('uploads/avatars/secretary.jpg')}}" alt="image text"></div>
                </div>
                <div class="p text-justify">In the absence of civil amenities, infrastructure, employment opportunities, health services, appropriate education, and above all non availability of sufficient cash wages these people find it very attractive to migrate towards the urban areas and look for what they need for their living. These people bring along their rural culture, habits their peculiar living styles, language, accents, and the usual rural lethargy. In the cities they dwell in the slums and Kachi Abadies around the posh urban areas. In this way huge rural clusters develop within the urban areas and usual rural routine is set up here.</div>
            </div> -->
        </div>
        <div class="row mt-5">
            <div class="col-lg-6 block2 notAnimated animateBlock right" id="panelhistory">
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
            <div class="col-lg-6 block2 mt-5 notAnimated animateBlock left">
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
                            <div class="text-right"><a href="#">View all</a></div>
                        @else
                            <div class="text-center">No news to show</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- Aabroo Brochure -->
        <div style="border-radius: 0;" class="panel">
            <!--<div style="border-radius: 0;" class="h3 mt-0 text-center panel-heading">News & Updates</div>-->
            <div class="panel-body">
                    <div class="h1 text-center text-capitalize" id="h5">Our Newsletter</div>
                    <div class="underline" id="u5" style="position:relative; left:40%; width: 14em; margin-bottom: 30px;"></div>
                    <ul id="lightgallery" style="list-style: none;" class="row">
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
                    <div class="text-right"><a href="{{ route('newsletter') }}">View all</a></div>
            </div>
        </div>
    </div>
    
    <!--Our Projects-->
    <div class="row mt-5 mb-5" style="background: rgba(10,111,183,0.8);padding-bottom: 20px;">
        <div class="container">
            <div class="h1 text-center" style="color: white;">OUR PROJECTS</div>
            @foreach($projects as $project)
                <div class="col-lg-4">
                    <div class="card mt-5 mr-1 mb-5">
                        <img class="card-img-top" style="height: 250px" src="{{asset($project->featured)}}" alt="{{$project->name}}">
                        <div class="card-body">
                            <div class="card-text text-center h3">{{$project->name}}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!--Watch us on youtube-->
    <div class="container">
        <div class="h1 text-center text-capitalize" id="h5">watch us on : youtube</div>
        <div class="underline" id="u5" style="position:relative; left:40%; width: 14em;"></div>
        <div class="row">
            @foreach($videos as $video)
                <div class="col-lg-6">
                    <div class="h3 text-center">{{$video->name}}</div>
                    <div class="mt-5 mb-5"><iframe style="width: 100%;height: 50%;" src="https://www.youtube.com/watch?v=hdmbPmBrza4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
                </div>
            @endforeach
        </div>
    </div>
    @include('includes.footer')
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js'></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
    
    <script  src="{{asset('js/menu.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/headings.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#lightgallery').lightGallery();
        });
    </script>
    <script src="{{asset('js/lightgallery-all.min.js')}}"></script>
</body>
</html>