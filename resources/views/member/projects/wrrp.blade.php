@extends('member/_layoutProject')

@section('projectCategory')
    Hot projects
@endsection

@section('projectName')
    Wellness Resort renovation project
@endsection

@section('projectHeader')
    <img src="{{ asset('images/member/hot/wrrp/cover.jpg') }}" class="img-fluid mx-auto" alt="">

    <div class="name">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <h1>@yield('projectName')</h1>

                    <p class="lead">Rožňava, Slovak Republic</p>

                    <h3 class="color_primary xs-mb-0">Expected ROI 45-65%</h3>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('projectContent')
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Key deal points</h2>

            <div class="media">
                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                <div class="media-body">
                    <p class="text-danger">Full case study will be available in few weeks.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Location</h2>

            <div class="media">
                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                <div class="media-body">
                    <p>
                        The main object of the hotel is that it is located in a protective zone, of a protected
                        area called the national monument “DOMICA", near the village Kečovo. It is located in the
                        central part of a recreational area Domica.
                    </p>
                </div>
            </div>

        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Accommodation</h2>

            <div class="media">
                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                <div class="media-body">
                    <p>
                        The accommodation is two-storey building, the 1st floor and 2nd floor. The main purpose of
                        these units, are on the ground floor of the rooms and apartments on the 2nd floor. It has
                        an overhead floor boiler room and also a walk-in balcony. 1st floor (1129.81 m2) - with
                        two apartments and 22 x room, 24 x bathroom + WC, communication space - staircase,
                        corridor, storage room, terrace. 2nd floor (57,79 m2) - where there is a corridor +
                        staircase, boiler room and balcony.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Photos</h2>

            <h4>Exterior</h4>

            <div>
                <a href="{{ asset('images/member/hot/wrrp/1.jpg') }}" data-lightbox="photos"><img
                            src="{{ asset('images/member/hot/wrrp/1.jpg') }}" class="img-fluid mx-auto w-100"
                            alt=""></a>
            </div>

            <div class="row xs-mt-20">
                <div class="col-4">
                    <a href="{{ asset('images/member/hot/wrrp/2.jpg') }}" data-lightbox="photos"><img
                                src="{{ asset('images/member/hot/wrrp/2.jpg') }}"
                                class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-4">
                    <a href="{{ asset('images/member/hot/wrrp/3.jpg') }}" data-lightbox="photos"><img
                                src="{{ asset('images/member/hot/wrrp/3.jpg') }}"
                                class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-4">
                    <a href="{{ asset('images/member/hot/wrrp/4.jpg') }}" data-lightbox="photos"><img
                                src="{{ asset('images/member/hot/wrrp/4.jpg') }}"
                                class="img-fluid d-block mx-auto" alt=""></a>
                </div>
            </div>

            <div class="row xs-mt-20">
                <div class="col-4">
                    <a href="{{ asset('images/member/hot/wrrp/5.jpg') }}" data-lightbox="photos"><img
                                src="{{ asset('images/member/hot/wrrp/5.jpg') }}"
                                class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-4">
                    <a href="{{ asset('images/member/hot/wrrp/6.jpg') }}" data-lightbox="photos"><img
                                src="{{ asset('images/member/hot/wrrp/6.jpg') }}"
                                class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-4">
                    <a href="{{ asset('images/member/hot/wrrp/7.jpg') }}" data-lightbox="photos"><img
                                src="{{ asset('images/member/hot/wrrp/7.jpg') }}"
                                class="img-fluid d-block mx-auto" alt=""></a>
                </div>
            </div>

            <h4 class="xs-mt-20">BUILDING CASTLE</h4>

            <div class="media">
                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                <div class="media-body">
                    <p>
                        The castle is designed as a three-storey building without basement, unfolded
                        building the construction began in 2008. The building is divided into two
                        operational units. One, is to be made available to the public - for visitors, the
                        other for actors. The object of the entrance, is designed in a way that follows
                        fairytale route. The main entrance for visitors, will be the entry from the
                        southern side by a field staircase into the space of the future universal hall.
                        Visitors will be able to continue to use the main courtyard, from which you can
                        get to the amphitheater where fairy tales will be played.
                    </p>
                </div>
            </div>

            <h4 class="xs-mt-20">Interior</h4>

            <a href="{{ asset('images/member/hot/wrrp/8.jpg') }}" data-lightbox="photos"><img
                        src="{{ asset('images/member/hot/wrrp/8.jpg') }}"
                        class="img-fluid d-block mx-auto" alt=""></a>

            <div class="row xs-mt-20">
                <div class="col-6">
                    <a href="{{ asset('images/member/hot/wrrp/9.jpg') }}" data-lightbox="photos"><img
                                src="{{ asset('images/member/hot/wrrp/9.jpg') }}"
                                class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-6">
                    <a href="{{ asset('images/member/hot/wrrp/10.jpg') }}" data-lightbox="photos"><img
                                src="{{ asset('images/member/hot/wrrp/10.jpg') }}"
                                class="img-fluid d-block mx-auto" alt=""></a>
                </div>
            </div>

            <div class="row xs-mt-20">
                <div class="col-4">
                    <a href="{{ asset('images/member/hot/wrrp/11.jpg') }}" data-lightbox="photos"><img
                                src="{{ asset('images/member/hot/wrrp/11.jpg') }}"
                                class="img-fluid d-block mx-auto" alt=""></a>
                </div>


                <div class="col-4">
                    <a href="{{ asset('images/member/hot/wrrp/12.jpg') }}" data-lightbox="photos"><img
                                src="{{ asset('images/member/hot/wrrp/12.jpg') }}"
                                class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-4">
                    <a href="{{ asset('images/member/hot/wrrp/13.jpg') }}" data-lightbox="photos"><img
                                src="{{ asset('images/member/hot/wrrp/13.jpg') }}"
                                class="img-fluid d-block mx-auto" alt=""></a>
                </div>
            </div>

            <div class="row xs-mt-20">
                <div class="col-6">
                    <a href="{{ asset('images/member/hot/wrrp/14.jpg') }}" data-lightbox="photos"><img
                                src="{{ asset('images/member/hot/wrrp/14.jpg') }}"
                                class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-6">
                    <a href="{{ asset('images/member/hot/wrrp/15.jpg') }}" data-lightbox="photos"><img
                                src="{{ asset('images/member/hot/wrrp/15.jpg') }}"
                                class="img-fluid d-block mx-auto" alt=""></a>
                </div>
            </div>

            <h4 class="xs-mt-20">Bungalow</h4>

            <div class="media">
                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                <div class="media-body">
                    <p>
                        Bungalow - It is designed as one-storey building with two attics, ie three-storey with
                        ramps. There are, four identical bungalows on the property. The ground floor (166.91
                        m2) contains three rooms with own sanitary facilities, a corridor, a balcony, a boiler
                        room and a room for cleaning. The floor (122.49 m2) contains three bedrooms with own
                        sanitary facilities, a corridor, a balcony and a room for cleaning. The attic
                        (87.45m2) includes an apartment with two rooms, anteroom, balcony, bathroom and
                        toilet.
                    </p>
                </div>
            </div>

            <h4 class="xs-mt-20">Wellness</h4>

            <div class="row xs-mt-20">
                <div class="col-6">
                    <a href="{{ asset('images/member/hot/wrrp/16.jpg') }}" data-lightbox="photos"><img
                                src="{{ asset('images/member/hot/wrrp/16.jpg') }}"
                                class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-6">
                    <a href="{{ asset('images/member/hot/wrrp/17.jpg') }}" data-lightbox="photos"><img
                                src="{{ asset('images/member/hot/wrrp/17.jpg') }}"
                                class="img-fluid d-block mx-auto" alt=""></a>
                </div>
            </div>

            <div class="row xs-mt-20">
                <div class="col-4">
                    <a href="{{ asset('images/member/hot/wrrp/18.jpg') }}" data-lightbox="photos"><img
                                src="{{ asset('images/member/hot/wrrp/18.jpg') }}"
                                class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-4">
                    <a href="{{ asset('images/member/hot/wrrp/19.jpg') }}" data-lightbox="photos"><img
                                src="{{ asset('images/member/hot/wrrp/19.jpg') }}"
                                class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-4">
                    <a href="{{ asset('images/member/hot/wrrp/20.jpg') }}" data-lightbox="photos"><img
                                src="{{ asset('images/member/hot/wrrp/20.jpg') }}"
                                class="img-fluid d-block mx-auto" alt=""></a>
                </div>
            </div>

            <div class="row xs-mt-20">
                <div class="col-4">
                    <a href="{{ asset('images/member/hot/wrrp/21.jpg') }}" data-lightbox="photos"><img
                                src="{{ asset('images/member/hot/wrrp/21.jpg') }}"
                                class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-4">
                    <a href="{{ asset('images/member/hot/wrrp/22.jpg') }}" data-lightbox="photos"><img
                                src="{{ asset('images/member/hot/wrrp/22.jpg') }}"
                                class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-4">
                    <a href="{{ asset('images/member/hot/wrrp/23.jpg') }}" data-lightbox="photos"><img
                                src="{{ asset('images/member/hot/wrrp/23.jpg') }}"
                                class="img-fluid d-block mx-auto" alt=""></a>
                </div>
            </div>

            <h4 class="xs-mt-20">Wellness</h4>

            <div class="media">
                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                <div class="media-body">
                    <p>Wellness - It is designed as a two-storey building (ground floor and 1st floor),
                        located in the central part of recreation area Domica. The building serves as a civic
                        building (an object of relaxation - entertaining water activities, such as
                        inhalations, whirling massages, thermal - water light attractions, etc.). It creates a
                        fairy - tale world for children. </p>
                </div>
            </div>

            <h4 class="xs-mt-20">Surroundings</h4>

            <div class="media">
                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                <div class="media-body">
                    <p>
                        Wellness Resort Domica is located about 1 km from the village Kečovo and Dlhá Ves,
                        district Rožňava, opposite the DOMICA cave. Domica Cave is the largest cave of Slovak
                        Karst. It is a very well known cave in the world. Located on the southern slope of
                        Silická planina , it is part of the cave complex, which creates a genetic system with
                        a total length of about 25 km with the Baradla cave in Hungary. The Domica itself is
                        5,358 meters long, of which a circle of 1,315 meters is available to the public since
                        1932.
                    </p>
                </div>
            </div>

            <h4 class="xs-mt-20">Our vision</h4>

            <div class="row xs-mt-20">
                <div class="col-4">
                    <a href="{{ asset('images/member/hot/wrrp/24.jpg') }}" data-lightbox="photos"><img
                                src="{{ asset('images/member/hot/wrrp/24.jpg') }}"
                                class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-4">
                    <a href="{{ asset('images/member/hot/wrrp/25.jpg') }}" data-lightbox="photos"><img
                                src="{{ asset('images/member/hot/wrrp/25.jpg') }}"
                                class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-4">
                    <a href="{{ asset('images/member/hot/wrrp/26.jpg') }}" data-lightbox="photos"><img
                                src="{{ asset('images/member/hot/wrrp/26.jpg') }}"
                                class="img-fluid d-block mx-auto" alt=""></a>
                </div>
            </div>

            <div class="row xs-mt-20">
                <div class="col-4">
                    <a href="{{ asset('images/member/hot/wrrp/27.jpg') }}" data-lightbox="photos"><img
                                src="{{ asset('images/member/hot/wrrp/27.jpg') }}"
                                class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-4">
                    <a href="{{ asset('images/member/hot/wrrp/28.jpg') }}" data-lightbox="photos"><img
                                src="{{ asset('images/member/hot/wrrp/28.jpg') }}"
                                class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-4">
                    <a href="{{ asset('images/member/hot/wrrp/29.jpg') }}" data-lightbox="photos"><img
                                src="{{ asset('images/member/hot/wrrp/29.jpg') }}"
                                class="img-fluid d-block mx-auto" alt=""></a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('projectDetails')
    <div class="info bg_grey">
        <h4 class="title text-center">Investment information</h4>

        <p>Location <span class="float-right">Rožňava, Slovak Republic</span></p>

        <p>Asset class <span class="float-right">Investment properties</span></p>

        <p>Expected ROI by completion <span class="float-right">45-65%</span></p>

        <p>Area <span class="float-right">24 704 m<sup>2</sup></span></p>
    </div>

    <a href="{{ route('member.invest') }}" class="btn btn-block btn-primary disabled xs-mb-20">Invest<br>(Comign soon)</a>

    <a href="" class="btn btn-block btn-primary" data-toggle="modal" data-target="#projectContactModal">Send me Case study<br>as soon as it is available</a>
@endsection