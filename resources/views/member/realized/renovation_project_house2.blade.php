@extends('member/_layoutProject')

@section('projectCategory')
    Realized projects
@endsection

@section('projectName')
    Renovation project house 2
@endsection

@section('projectHeader')
    <a href="{{ route('member.realized.home') }}" class="link"><i class="fas fa-angle-left"></i> @lang('member/track.back')</a>

    <img src="{{ asset('images/member/realized/renovation_project_house2/cover.jpg') }}" alt="">

    <div class="name">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <h1>@yield('projectName')</h1>

                    <p class="lead">Svätý Jur, Slovak Republic</p>

                    <h3 class="color_primary xs-mb-0">@lang('member/track.realized')</h3>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('projectContent')
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">@lang('member/projects/strp.photos')</h2>

            <a href="{{ asset('images/member/realized/renovation_project_house2/1.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/realized/renovation_project_house2/sm/1.jpg') }}" class="img-fluid d-block w-100 xs-mb-20" alt=""></a>

            <div class="row xs-mt-20">
                <div class="col-4">
                    <a href="{{ asset('images/member/realized/renovation_project_house2/2.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/realized/renovation_project_house2/sm/2.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-4">
                    <a href="{{ asset('images/member/realized/renovation_project_house2/3.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/realized/renovation_project_house2/sm/3.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-4">
                    <a href="{{ asset('images/member/realized/renovation_project_house2/4.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/realized/renovation_project_house2/sm/4.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>
            </div>
        </div>
    </div>

    <div class="card d-print-none">
        <div class="card-body">
            <h2 class="card-title">@lang('member/projects/strp.map')</h2>

            <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d42509.58062454122!2d17.16400237914032!3d48.24803818339658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c904d6ec36675%3A0x9d4841399f8c3b66!2zU3bDpHTDvSBKdXI!5e0!3m2!1sen!2ssk!4v1532423878707" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
@endsection

@section('projectDetails')
    <div class="info bg_grey">
        <h4 class="title text-center">@lang('member/projects/strp.info')</h4>

        <p>@lang('member/projects/strp.location') <span class="float-right">Svätý Jur, Slovak Republic</span></p>

        <p>@lang('member/projects/strp.class') <span class="float-right">Investment properties</span></p>
    </div>

    <a href="" class="btn btn-block btn-primary" data-toggle="modal" data-target="#projectContactModal">@lang('member/projects/strp.more')</a>
@endsection