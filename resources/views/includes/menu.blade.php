<nav class="navbar navbar-expand-md navbar-light bg-light navbar-fixed-top" style="z-index: 1">
    <a class="outside-brand" href="/" style="text-decoration:none;display: none;">
        <img src="{{asset('uploads/resources/logo.png')}}" style="height: 40px; width: 60px;" alt="">
        <span class="text-center logo1-text" style="vertical-align:bottom;color: rgb(10,111,183)">Educational Welfare Organization</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li>
                <a class="brand" href="/" style="text-decoration:none;">
                    <img src="{{asset('uploads/resources/logo.png')}}" style="height: 40px; width: 60px;" alt="">
                    <span class="text-center logo-text" style="vertical-align:bottom;">Educational Welfare Organization</span>
                </a>
            <li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Who we are?
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="{{route('why_we_are')}}">Why we are?</a></li>
                    <li><a class="dropdown-item" href="#panelhistory">Our History</a></li>
                    <li><a class="dropdown-item" href="{{ route('newsletter') }}">Our Newsletter</a></li>
                    <li><a class="dropdown-item" href="#panelhistory">Vision</a></li>
                    <li><a class="dropdown-item" href="#panelhistory">Mission</a></li>
                    <li><a class="dropdown-item" href="{{route('objectives')}}">Objectives</a></li>
                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Governance</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('executive_committees')}}">Executive Committees</a></li>
                            <li><a class="dropdown-item" href="{{route('sub_committees')}}">Sub Committees</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    What we do?
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="{{route('our_services')}}">Our Services</a></li>
                    <li><a class="dropdown-item" href="{{route('informal')}}">Education</a>
                        <!-- <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('informal')}}">Informal</a></li>
                            <li><a class="dropdown-item" href="{{route('formal')}}">Formal</a></li>
                            <li><a class="dropdown-item" href="{{route('technical')}}">Tech. / Vocational Training</a></li>
                            <li><a class="dropdown-item" href="{{route('it')}}">IT Education</a></li>
                        </ul> -->
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Accounts
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Transparency</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('financial')}}">Financial</a></li>
                            <li><a class="dropdown-item" href="{{route('corruption')}}">Corruption</a></li>
                        </ul>
                    </li>
                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Sustainability</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('waste_management')}}">Solid Waste Recycling Project</a></li>
                            <li><a class="dropdown-item" href="{{route('endowment_fund')}}">Aabroo Educational Endowement Fund</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Our Projects
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="{{route('ensuing_projects')}}">Ensuing Projects</a></li>
                    <li><a class="dropdown-item" href="#">Capital Projects</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Aabroo Needs
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Land</a></li>
                    <li><a class="dropdown-item" href="#">Construction</a></li>
                    <li><a class="dropdown-item" href="#">Stationary</a></li>
                    <li><a class="dropdown-item" href="#">Books</a></li>
                    <li><a class="dropdown-item" href="#">Sports Good</a></li>
                    <li><a class="dropdown-item" href="#">Lab Apparatus</a></li>
                    <li><a class="dropdown-item" href="#">Classroom Furniture</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('success_stories')}}">Success Stories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('funding')}}">Funding</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Media</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('road_map')}}">Road Map</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('jobs')}}">Careers</a>
            </li>
        </ul>
        <div class="text-right"><div class="donation-btn"><a href=""><img id="donation-btn" src="{{asset('uploads/resources/donation.png')}}" style="height: 45px;width: 60px;padding: 5px 15px;"></a></div></div>
    </div>
</nav>