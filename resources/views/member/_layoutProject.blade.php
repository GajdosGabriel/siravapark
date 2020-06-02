@extends('member/_layout')

@section('title')
    {{ env('APP_NAME') }} :: Member area - @yield('projectName')
@endsection

@section('startBody')
    <div id="projectContactModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">@lang('general.contactUs')</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form id="projectContactForm" class="cee" method="POST" action="{{ route('member.contactPost') }}">
                        @csrf

                        <input type="hidden" name="subject" value="CEE Project contact form :: @yield('projectName')">

                        <input type="hidden" name="project" value="{{ Request::url() }}">

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">@lang('form.message')</label>

                            <div class="col-md-6">
                                <textarea id="text" name="text" class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}" rows="4" required maxlength="500">{{ old('text') }}</textarea>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="submit" form="projectContactForm" class="btn btn-primary">@lang('form.send')</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container-fluid project-header">
        @yield('projectHeader')
    </div>

    <div class="bg_tertiary xs-pt-20 xs-pb-20 lg-pt-30 lg-pb-30">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 project-details">
                    @yield('projectContent')
                </div>

                <div class="col-12 col-lg-4 project-information">
                    <div class="stickyBlock" data-aos="fade-up" data-aos-delay="1000">
                        @yield('projectDetails')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('endBody')
    <a id="arrowUp" href="#memberNavbar" class="internal d-none d-lg-block" title="Scroll up!"><i class="fa fa-arrow-up"></i></a>
@endsection