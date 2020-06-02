@extends('member/_layoutProject')

@section('projectCategory')
    Hot projects
@endsection

@section('projectName')
    First-line lake development project
@endsection

@section('projectHeader')
    <img src="{{ asset('images/member/hot/flldp/cover.jpg') }}" class="img-fluid mx-auto" alt="">

    <div class="name">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <h1>@yield('projectName')</h1>

                    <p class="lead">Zemplínska Šírava, Slovak Republic</p>

                    <h3 class="color_primary xs-mb-0">Expected ROI 55-75%, 12-24 months</h3>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('projectContent')
    <div class="card">
        <div class="card-body">
            <img src="{{ asset('images/member/hot/flldp/sirava_logo.jpg') }}" class="float-right d-none d-lg-block" alt="">

            <h2 class="card-title">Key deal points</h2>

            <div class="media">
                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                <div class="media-body">
                    <h3>Updated Status we are working on</h3>

                    <h5>Activities in progress by CEE</h5>

                    <ul>
                        <li>Preliminary positive Statement of municipality for future development – Obtained!</li>

                        <li>We are working on Model Master Plan of entire area to create functional micro areas for specific developments (residential, recreational, commercial, civil amenities)</li>

                        <li>Approval of Master plan from City hall to change the zone plan of the land</li>

                        <li>Obtain official Evaluation of the the land (expected approx value of 10eur/sqm)</li>
                    </ul>

                    <h5>Next Steps by Investor</h5>

                    <ul>
                        <li>Urbanistic Study for state and municipal institutions for future approvals and permits</li>

                        <li>Binding Statement from municipality to Investment Intention and Development Plan</li>

                        <li>Dendrological Report</li>

                        <li>Geothermal Water research</li>

                        <li>Environmental Impact Assessment</li>

                        <li>Zoning Permits for network infrastructure</li>
                    </ul>
                </div>
            </div>

            <hr class="part primary">

            <div class="media">
                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                <div class="media-body">
                    <h3>Location</h3>

                    <p>The land is located in the cadastral area of Koločov, in an attractive recreation area Zemplínska Šírava, about 50 meters from the water, in the east of Slovakia, with a wide possibility of its use.</p>
                </div>
            </div>

            @include('includes/videos/sirava')

            <div class="media xs-mt-20">
                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                <div class="media-body">
                    <p>Zemplínska Šírava is the second largest water area in the Slovak Republic (33,5 km<sup>2</sup>) and is the twelfth largest lake area in Europe. Zemlinska Šírava is known for the largest number of sunny and tropical days in the year.
                        It is located in the immediate vicinity of Michalovce district (40.tis inhabitants) and 50km from the second largest city in the Slovak Republic Košice (250.tis inhabitants) with Kosice international airport.</p>
                </div>
            </div>

            <hr class="part primary">

            <div class="media xs-mb-20 lg-mb-30">
                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                <div class="media-body">
                    <h3>Parameters of land</h3>

                    <p>The total area of the plot is 366 224 m<sup>2</sup>, registered as permanent grassland.</p>
                </div>
            </div>

            <hr class="part primary">

            <div class="media">
                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                <div class="media-body">
                    <h3>Master plan land use</h3>


                    <p>In base of CEE preliminary Real Estate research in location of Sirava (land/houses/flats) it is predictable as follows:</p>

                    <ul>
                        <li>plots for family houses (500-1000m2) suitable for family houses cost approx 30eur/m2 with road and networks,</li>

                        <li>plots for hotel (2000 - 5000m2) can cost cca 50eur/m2</li>

                        <li>plots for retail (approx 10000m2) can cost 80eur/m2</li>
                    </ul>

                    <p>Presumption for these prices are, that plots have good location are equiped with access road and have networks on the border.</p>
                </div>
            </div>

            <a href="{{ asset('images/member/hot/flldp/18.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/flldp/18.jpg') }}" class="img-fluid w-100" alt=""></a>

            <div class="row">
                <div class="col-12 col-lg-6">
                    <a href="{{ asset('images/member/hot/flldp/19.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/flldp/sm/19.jpg') }}" class="img-fluid w-100" alt=""></a>
                </div>

                <div class="col-12 col-lg-6">
                    <a href="{{ asset('images/member/hot/flldp/20.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/flldp/sm/20.jpg') }}" class="img-fluid w-100" alt=""></a>
                </div>
            </div>

            <hr class="part primary">

            <div class="media xs-mb-20 lg-mb-30">
                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                <div class="media-body">
                    <h3>Distance</h3>

                    <ul>
                        <li>City Kosice with International Airport (55km)</li>
                        <li>Arrival to Klokočov village after a 4-way journey from Michalovce</li>
                        <li>Town of Michalovce (9km)</li>
                        <li>border crossing Slovenské Nové Mesto - Sátoraljaújhely (50km) (HU)</li>
                        <li>border crossing Vyšné Nemecké - Uzhhorod (24km) (UA)</li>
                        <li>border crossing Vyšný Komárnik - Barwinek (70km) (PL) </li>
                    </ul>
                </div>
            </div>

            <hr class="part primary">

            <div class="media">
                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                <div class="media-body">
                    <h3>Infrastructure</h3>

                    <ul>
                        <li>path: direct access to the 4-stream main road</li>
                        <li>airport: available - 55km (Kosice International Airport - KSC)</li>
                        <li>gas: available</li>
                        <li>electricity: available</li>
                        <li>water: available</li>
                        <li>sewerage: available</li>
                    </ul>
                </div>
            </div>

            <hr class="part primary">

            <div class="media">
                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                <div class="media-body">
                    <h3>New highway</h3>

                    <p>Since 2017 the European union and Slovakia are building a new highway from Prešov and Košice (This are the number 3 and 2 biggest cities of Slovakia) to the Ukrainian border. This new highway will pass Michalovce which is the nearest town to the Šírava lake. This will save travelers from Prešov and Košice 1 hour shorter travel time to the Šírava recreation lake area. As well this new highway will connect to all other highways in Slovakia, what will make it more easy and much shorter travel time for all domestic and international visitors to travel to the Šírava lake and area.</p>

                    <a href="{{ asset('images/member/hot/flldp/highway1.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/flldp/highway1.jpg') }}" class="img-fluid mx-auto" alt=""></a>

                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="https://www.youtube.com/embed/hYkBf-OIjsI?rel=0" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Market summary</h2>

            <div class="media">
                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                <div class="media-body">
                    <p>Zemplínska šírava is with the area of 33 km² the second largest lake in the Slovak Republic. Its average depth is 3,5 m, the maximum length is 11 km and the maximum width is 3,5 km. The lake is mainly used for recreational purposes and for flood protection. It has become a popular recreation center. There are up to 7 holiday resorts with its own beaches and swimming pools. In 2014, a modern aquapark with year-round operation was built in Kaluža. Visitors can also enjoy the "artificial waves" in the water park. Water sports are also popular. Water scooters, boats and surfboards can be rented here.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Photos</h2>

            <a href="{{ asset('images/member/hot/flldp/sirava_area.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/flldp/sirava_area.jpg') }}" class="img-fluid mx-auto" alt=""></a>

            <div class="row xs-mt-20">
                <div class="col-12 col-lg-4">
                    <a href="{{ asset('images/member/hot/flldp/7.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/flldp/sm/7.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-12 col-lg-4">
                    <a href="{{ asset('images/member/hot/flldp/10.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/flldp/sm/10.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-12 col-lg-4">
                    <a href="{{ asset('images/member/hot/flldp/9.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/flldp/sm/9.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>
            </div>

            <div class="row xs-mt-20">
                <div class="col-12 col-lg-3">
                    <a href="{{ asset('images/member/hot/flldp/11.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/flldp/sm/11.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-12 col-lg-3">
                    <a href="{{ asset('images/member/hot/flldp/12.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/flldp/sm/12.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-12 col-lg-3">
                    <a href="{{ asset('images/member/hot/flldp/13.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/flldp/sm/13.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-12 col-lg-3">
                    <a href="{{ asset('images/member/hot/flldp/14.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/flldp/sm/14.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>
            </div>

            <h4 class="xs-mt-20">Drone photos</h4>

            <div class="row">
                <div class="col-12 col-lg-4">
                    <a href="{{ asset('images/member/hot/flldp/15.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/flldp/sm/15.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-12 col-lg-4">
                    <a href="{{ asset('images/member/hot/flldp/16.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/flldp/sm/16.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-12 col-lg-4">
                    <a href="{{ asset('images/member/hot/flldp/17.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/flldp/sm/17.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>
            </div>

            <h4 class="xs-mt-20">360° photos</h4>

            <div class="embed-responsive embed-responsive-16by9 xs-mb-20">
                <iframe allow="vr,gyroscope,accelerometer,fullscreen" scrolling="no" allowfullscreen="true" src="https://kuula.co/share/7Pj3H?fs=1&vr=0&thumbs=1&chromeless=0&logo=0"></iframe>
            </div>

            <div class="embed-responsive embed-responsive-16by9 xs-mb-20">
                <iframe allow="vr,gyroscope,accelerometer,fullscreen" scrolling="no" allowfullscreen="true" src="https://kuula.co/share/7Pj3d?fs=1&vr=0&thumbs=1&chromeless=0&logo=0"></iframe>
            </div>

            <div class="embed-responsive embed-responsive-16by9 xs-mb-20">
                <iframe allow="vr,gyroscope,accelerometer,fullscreen" scrolling="no" allowfullscreen="true" src="https://kuula.co/share/7Pj3n?fs=1&vr=0&thumbs=1&chromeless=0&logo=0"></iframe>
            </div>
        </div>
    </div>

    <div class="card d-print-none">
        <div class="card-body">
            <h2 class="card-title">Map</h2>

            <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d42035.16588016758!2d22.00095202396911!3d48.80199696011747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDjCsDQ4JzQyLjkiTiAyMsKwMDInMTcuMiJF!5e0!3m2!1sen!2ssk!4v1528197965280"frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
@endsection

@section('projectDetails')
    <div class="info bg_grey">
        <h4 class="title text-center">Investment information</h4>

        <p>Location <span class="float-right">Slovak Republic</span></p>

        <p>Asset class <span class="float-right">New developments</span></p>

        <p>Total investment <span class="float-right">&euro; 2 800 000</span></p>

        <p>Title deed ownership <span class="float-right">&euro; 1 700 000</span></p>

        <p>Pooled resources <span class="float-right">from &euro; 5 000</span></p>

        <p>Expected ROI by completion <span class="float-right">55-75%</span></p>

        <p class="xs-mb-0">Area <span class="float-right">366 324 m<sup>2</sup></span></p>
    </div>

    <a href="{{ route('member.invest') }}" class="btn btn-block btn-primary xs-mb-20">Invest</a>

    <a href="" class="btn btn-block btn-secondary" data-toggle="modal" data-target="#projectContactModal">Request more info</a>
@endsection