@extends('member/_layoutProject')

@section('projectName')
    Recreational new development project
@endsection

@section('projectHeader')
    <a href="{{ route('member.realized.home') }}" class="link"><i class="fas fa-angle-left"></i> @lang('member/track.back')</a>

    <img src="{{ asset('images/member/realized/recreational_new_development_project/cover.jpg') }}" alt="">

    <div class="name">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <h1>@yield('projectName')</h1>

                    <p class="lead">Mengusovce, Slovak Republic</p>

                    <h3 class="color_primary xs-mb-0">@lang('member/track.realized')</h3>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('projectContent')
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">@lang('member/projects/strp.key')</h2>

            <div class="media">
                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                <div class="media-body">
                    <h3>@lang('member/projects/strp.location')</h3>

                    <p>@lang('member/projects/rndp.1')</p>

                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="https://www.youtube.com/embed/b7_a8ehu8jY?rel=0" allowfullscreen></iframe>
                    </div>

                    <p class="xs-mt-20">@lang('member/projects/rndp.2')</p>

                    <p>@lang('member/projects/rndp.3')</p>

                    <a href="{{ asset('images/member/realized/recreational_new_development_project/4.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/realized/recreational_new_development_project/4.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>

                    <p class="xs-mt-20">@lang('member/projects/rndp.4')</p>
                </div>
            </div>

            <div class="media">
                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                <div class="media-body">
                    <h3>@lang('member/projects/rndp.5')</h3>

                    <ul>
                        <li>@lang('member/projects/rndp.6')</li>

                        <li>@lang('member/projects/rndp.7')</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h2 class="card-title">@lang('member/projects/rndp.8')</h2>

            <p>@lang('member/projects/rndp.9')</p>

            <ul>
                <li>@lang('member/projects/rndp.10')</li>

                <li>@lang('member/projects/rndp.11')</li>

                <li>@lang('member/projects/rndp.12')</li>
            </ul>

            <p>@lang('member/projects/rndp.13')</p>

            <hr class="part primary">

            <div class="media">
                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                <div class="media-body">
                    <h3>@lang('member/projects/rndp.24')</h3>

                    <p>@lang('member/projects/rndp.14')</p>

                    <p>
                        @lang('member/projects/rndp.15')<br>
                        @lang('member/projects/rndp.16')
                    </p>
                </div>
            </div>

            <div class="media">
                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                <div class="media-body">
                    <h3>@lang('member/projects/rndp.17')</h3>

                    <ul>
                        <li>@lang('member/projects/rndp.18')</li>

                        <li>@lang('member/projects/rndp.19')</li>

                        <li>@lang('member/projects/rndp.20')</li>

                        <li>@lang('member/projects/rndp.21')</li>
                    </ul>

                    <p class="text-center font-weight-bold">@lang('member/projects/rndp.22')</p>

                    <hr class="part primary">

                    <p>@lang('member/projects/rndp.23')</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h2 class="card-title">@lang('member/projects/strp.photos')</h2>

            <a href="{{ asset('images/member/realized/recreational_new_development_project/5.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/realized/recreational_new_development_project/5.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>

            <div class="row xs-mt-20">
                <div class="col-4">
                    <a href="{{ asset('images/member/realized/recreational_new_development_project/1.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/realized/recreational_new_development_project/sm/1.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-4">
                    <a href="{{ asset('images/member/realized/recreational_new_development_project/2.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/realized/recreational_new_development_project/sm/2.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-4">
                    <a href="{{ asset('images/member/realized/recreational_new_development_project/7.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/realized/recreational_new_development_project/sm/7.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>
            </div>
        </div>
    </div>

    <div class="card d-print-none">
        <div class="card-body">
            <h2 class="card-title">@lang('member/projects/strp.map')</h2>

            <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46935.040552086386!2d20.175399079837103!3d49.07907598376698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473e2604d0ba7351%3A0x825682ba5d743b20!2zQXBhcnRtw6FueSDEjGVyZcWhxYhvdsO9IHNhZA!5e0!3m2!1sen!2ssk!4v1528461337714" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
@endsection

@section('projectDetails')
    <div class="info bg_grey">
        <h4 class="title text-center">@lang('member/projects/strp.info')</h4>

        <p>@lang('member/projects/strp.location') <span class="float-right">Slovak Republic</span></p>

        <p>@lang('member/projects/strp.class') <span class="float-right">@lang('member/projects/strp.class3')</span></p>

        <p class="xs-mb-0">@lang('member/projects/strp.area') <span class="float-right">3 200 m<sup>2</sup></span></p>
    </div>

    <a href="" class="btn btn-block btn-primary" data-toggle="modal" data-target="#projectContactModal">@lang('member/projects/strp.more')</a>
@endsection