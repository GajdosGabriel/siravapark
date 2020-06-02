@extends('member/_layoutProject')

@section('projectCategory')
    Hot projects
@endsection

@section('projectName')
    City center renovation project
@endsection

@section('projectHeader')
    <img src="{{ asset('images/member/hot/ccrp/cover.jpg') }}" class="img-fluid mx-auto" alt="">

    <div class="name">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <h1>@yield('projectName')</h1>

                    <p class="lead">Bratislava, Slovak Republic</p>

                    <h3 class="color_primary xs-mb-0">Expected ROI 35%, 9-12 months</h3>
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
                    <h4>Description</h4>

                    <p>
                        Very private historical building in direct city center on one of most favorite street<br>
                        4 floor above ground, 1 underground floor for storage or fitness / wellness<br>
                        large private quite internal garden with 4 garages<br>
                        960 sqm usable area, 830 sqm apartments area on land plot of 635sqm<br>
                        apartments usable area from 150sqm – 170sqm with high ceilings<br>
                        3 luxurious apartments to reconstruct, 1 to build on the roof with majestic city center views
                    </p>

                    <h4>Planned Standard of Building</h4>

                    <p>
                        Shell and Core apartments<br>
                        Air Conditioning<br>
                        Heated wooden floors<br>
                        Independent media network in each apartment<br>
                        Lift to be constructed in backyard
                    </p>

                    <h4>Location</h4>

                    <p>
                        Prestigious part of Historical Old Town Centre<br>
                        Complete Civil Amenities within reach<br>
                        Ambassies all around<br>
                        Many historical buildings already reconstructed and sold out
                    </p>

                    <h4>Benefits and Potential</h4>

                    <p>
                        Very strategic location for Living or Administration<br>
                        Possible Parking also in front of the building<br>
                        These segment of apartments are missing in local real estate market offer
                    </p>

                    <h4>Business Plan</h4>

                    <p>
                        Acquisition Cost: approx 750.000eur<br>
                        Recons Costs: approx. 550.000eur<br>
                        Sales Income: approx. 2.000.000eur<br>
                        Margin: 36%<br>
                        ROI: 56%
                    </p>

                    <p>
                        AVG price of Comparative Appartments in the same and close surroundings is 2.850eur/sqm VAT incl.<br>
                        AVG price of City Center Apartments is 2.900eur/sqm VAT incl.
                    </p>

                    <h4>Timing</h4>

                    <p>
                        Recons - 3 Months<br>
                        Permits – 6 months<br>
                        Sales – during Recons
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{--<div class="card">--}}
        {{--<div class="card-body">--}}
            {{--<h2 class="card-title">Total m<sup>2</sup></h2>--}}

            {{--<div class="media">--}}
                {{--<img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">--}}

                {{--<div class="media-body">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-4"><p>Land 635,00</p></div>--}}
                        {{--<div class="col-6"><p>Gross building 962,82</p></div>--}}
                        {{--<div class="col-4"><p>Apartments 636,29</p></div>--}}
                        {{--<div class="col-6"><p>Commercial 158,09</p></div>--}}
                        {{--<div class="col-4"><p>Parking 75,00 </p></div>--}}
                        {{--<div class="col-6"><p>Balcony & terrace 72,85</p></div>--}}
                        {{--<div class="col-4"><p>Storage 35,14</p></div>--}}
                        {{--<div class="col-6"><p>Common others 95,59</p></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Photos</h2>

            <h4>Exterior</h4>

            <a href="{{ asset('images/member/hot/ccrp/1.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/ccrp/1.jpg') }}" class="img-fluid mx-auto w-100" alt=""></a>

            <div class="row xs-mt-20 xs-mb-20">
                <div class="col-12 col-lg-3 xs-pb-20">
                    <a href="{{ asset('images/member/hot/ccrp/2.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/ccrp/sm/2.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-12 col-lg-3 xs-pb-20">
                    <a href="{{ asset('images/member/hot/ccrp/3.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/ccrp/sm/3.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-12 col-lg-3 xs-pb-20">
                    <a href="{{ asset('images/member/hot/ccrp/4.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/ccrp/sm/4.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-12 col-lg-3">
                    <a href="{{ asset('images/member/hot/ccrp/5.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/ccrp/sm/5.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>
            </div>

            <h4 class="xs-mt-20">Exterior 360°</h4>

            <div class="embed-responsive embed-responsive-16by9 xs-mb-20">
                <iframe allow="vr,gyroscope,accelerometer,fullscreen" scrolling="no" allowfullscreen="true" src="https://kuula.co/share/7PsLJ?fs=1&vr=0&thumbs=1&chromeless=0&logo=0"></iframe>
            </div>

            <div class="embed-responsive embed-responsive-16by9 xs-mb-20">
                <iframe allow="vr,gyroscope,accelerometer,fullscreen" scrolling="no" allowfullscreen="true" src="https://kuula.co/share/7Pj2M?fs=1&vr=0&thumbs=1&chromeless=0&logo=0"></iframe>
            </div>

            <div class="embed-responsive embed-responsive-16by9 xs-mb-20">
                <iframe allow="vr,gyroscope,accelerometer,fullscreen" scrolling="no" allowfullscreen="true" src="https://kuula.co/share/7Pj2T?fs=1&vr=0&thumbs=1&chromeless=0&logo=0"></iframe>
            </div>

            <h4 class="xs-mt-20">Interior</h4>

            <a href="{{ asset('images/member/hot/ccrp/6.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/ccrp/sm/6.jpg') }}" class="img-fluid w-100" alt=""></a>

            <div class="row xs-mt-20">
                <div class="col-12 col-lg-4 xs-pb-20">
                    <a href="{{ asset('images/member/hot/ccrp/7.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/ccrp/sm/7.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-12 col-lg-4 xs-pb-20">
                    <a href="{{ asset('images/member/hot/ccrp/8.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/ccrp/sm/8.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-12 col-lg-4">
                    <a href="{{ asset('images/member/hot/ccrp/9.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/ccrp/sm/9.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>
            </div>

            <div class="row xs-mt-20 xs-mb-20">
                <div class="col-12 col-lg-4 xs-pb-20">
                    <a href="{{ asset('images/member/hot/ccrp/10.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/ccrp/sm/10.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-12 col-lg-4 xs-pb-20">
                    <a href="{{ asset('images/member/hot/ccrp/11.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/ccrp/sm/11.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-12 col-lg-4">
                    <a href="{{ asset('images/member/hot/ccrp/12.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/ccrp/sm/12.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>
            </div>

            <h4 class="xs-mt-20">Interior 360°</h4>

            <div class="embed-responsive embed-responsive-16by9 xs-mb-20">
                <iframe allow="vr,gyroscope,accelerometer,fullscreen" scrolling="no" allowfullscreen="true" src="https://kuula.co/share/7Pj2n?fs=1&vr=0&thumbs=1&chromeless=0&logo=0"></iframe>
            </div>

            <div class="embed-responsive embed-responsive-16by9 xs-mb-20">
                <iframe allow="vr,gyroscope,accelerometer,fullscreen" scrolling="no" allowfullscreen="true" src="https://kuula.co/share/7Pj26?fs=1&vr=0&thumbs=1&chromeless=0&logo=0"></iframe>
            </div>

            <h4 class="xs-mt-20">Floor plans</h4>

            <div>
                <a href="{{ asset('images/member/hot/ccrp/plans/0.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/ccrp/plans/sm/0.jpg') }}" class="img-fluid mx-auto" alt=""></a>
            </div>

            <div class="row xs-mt-20">
                <div class="col-3">
                    <a href="{{ asset('images/member/hot/ccrp/plans/1.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/ccrp/plans/sm/1.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-3">
                    <a href="{{ asset('images/member/hot/ccrp/plans/2.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/ccrp/plans/sm/2.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-3">
                    <a href="{{ asset('images/member/hot/ccrp/plans/3.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/ccrp/plans/sm/3.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-3">
                    <a href="{{ asset('images/member/hot/ccrp/plans/4.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/ccrp/plans/sm/4.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('projectDetails')
    <div class="info bg_grey">
        <h4 class="title text-center">Investment information</h4>

        <p>Location <span class="float-right">Bratislava, Slovak Republic</span></p>

        <p>Asset class <span class="float-right">Investment properties</span></p>

        <p>Total investment <span class="float-right">&euro; 1 500 000</span></p>

        <p>Title deed ownership <span class="float-right">&euro; 450 000</span></p>

        <p>Pooled resources <span class="float-right">from &euro; 5 000</span></p>

        <p>Expected ROI <span class="float-right">35%</span></p>
    </div>

    <a href="{{ route('member.invest') }}" class="btn btn-block btn-primary xs-mb-20">Invest</a>

    <a href="" class="btn btn-block btn-secondary" data-toggle="modal" data-target="#projectContactModal">Request value calculation</a>
@endsection