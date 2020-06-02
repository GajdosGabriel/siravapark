@extends('member/_layoutProject')

@section('projectName')
    @lang('member/projects/strp.title')
@endsection

@section('projectHeader')
    <img src="{{ asset('images/member/hot/renovations/cover.jpg') }}" class="img-fluid mx-auto" alt="">

    <div class="name">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <h1>@yield('projectName')</h1>

                    <p class="lead">@lang('member/projects/strp.cities')</p>

                    <h3 class="color_primary xs-mb-0">@lang('member/why_invest.subtitle')</h3>
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
                    @include('includes/videos/howItWorks')

                    <p class="xs-mt-20">@lang('member/projects/strp.1')</p>

                    <p>@lang('member/projects/strp.2')</p>

                    <p>@lang('member/projects/strp.3')</p>

                    <p>@lang('member/projects/strp.4')</p>

                    <p>@lang('member/projects/strp.5')</p>

                    <p class="xs-mt-20"><strong>@lang('member/why_invest.pr')</strong></p>

                    <p>@lang('member/why_invest.pr1')</p>

                    <p><strong>@lang('member/why_invest.guarantees')</strong></p>

                    <p>@lang('member/why_invest.text7')</p>

                    <p class="color_primary">@lang('member/projects/strp.6')</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h2 class="card-title">@lang('member/projects/strp.photos')</h2>

            <div>
                <a href="{{ asset('images/member/hot/renovations/3.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/renovations/sm/3.jpg') }}" class="img-fluid w-100 mx-auto" alt="" data-aos="zoom-in"></a>
            </div>

            <div class="row xs-mt-20">
                <div class="col-6">
                    <a href="{{ asset('images/member/hot/renovations/2.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/renovations/sm/2.jpg') }}" class="img-fluid d-block mx-auto" alt="" data-aos="zoom-in"></a>
                </div>

                <div class="col-6">
                    <a href="{{ asset('images/member/hot/renovations/1.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/renovations/sm/1.jpg') }}" class="img-fluid d-block mx-auto" alt="" data-aos="zoom-in"></a>
                </div>
            </div>
        </div>
    </div>

    <div class="card d-print-none">
        <div class="card-body">
            <h2 class="card-title">@lang('member/projects/strp.map')</h2>

            <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1336382.195857509!2d16.739401916964322!3d48.91129081990664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2ssk!4v1533554427304" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
@endsection

@section('projectDetails')
    <div class="info bg_grey">
        <h4 class="title text-center">@lang('member/projects/strp.info')</h4>

        <p>@lang('member/projects/strp.location') <span class="float-right">@lang('member/projects/strp.location2')</span></p>

        <p>@lang('member/projects/strp.class') <span class="float-right">@lang('member/projects/strp.class2')</span></p>

        <p>@lang('member/projects/strp.pr') <span class="float-right">@lang('member/projects/strp.from')</span></p>

        <p>@lang('member/projects/strp.roi') <span class="float-right">@lang('member/projects/strp.percent')</span></p>

        <p class="xs-mb-0">@lang('member/projects/strp.area') <span class="float-right">50 - 300 m<sup>2</sup></span></p>
    </div>

    <a href="{{ route('member.invest') }}" class="btn btn-block btn-primary xs-mb-20">@lang('member/nav.invest')</a>

    <a href="" class="btn btn-block btn-secondary" data-toggle="modal" data-target="#projectContactModal">@lang('member/projects/strp.more')</a>
@endsection