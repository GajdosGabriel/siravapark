<div id="tacModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">@lang('index.tac')</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                @if(!in_array(App::getLocale(), ['en', 'sk']))
                    <p class="text-center lead text-danger">@lang('index.trans')</p>
                @endif

                <h3 class="text-center">@lang('legal/tac.title')</h3>

                <p>@lang('legal/tac.cond')</p>

                <p>@lang('legal/tac.1')</p>

                <p>@lang('legal/tac.2')</p>

                <p>@lang('legal/tac.3')</p>

                <p>@lang('legal/tac.4')</p>

                <p>@lang('legal/tac.5')</p>

                <p>@lang('legal/tac.5a')</p>

                <p>@lang('legal/tac.5b')</p>

                <p>@lang('legal/tac.5c')</p>

                <p>@lang('legal/tac.6')</p>

                <p>@lang('legal/tac.7')</p>

                <p>@lang('legal/tac.8')</p>

                <p>@lang('legal/tac.9')</p>

                <p>@lang('legal/tac.10')</p>

                <p>@lang('legal/tac.11')</p>

                <p>@lang('legal/tac.12')</p>

                <p>@lang('legal/tac.13')</p>

                <p>@lang('legal/tac.14')</p>

                <hr class="part blue">

                <h2 class="text-center">@lang('legal/tac.past')</h2>

                <div class="row">

                    <div class="col-12 col-lg-4">
                        <img src="{{ asset('images/winner/2019_november.jpg') }}" class="img-fluid d-block" alt="">
                        <p class="h4 text-center xs-mt-10">Jozef Žembery</p>
                    </div>

                    <div class="col-12 col-lg-4">
                        <img src="{{ asset('images/winner/2019_10.jpg') }}" class="img-fluid d-block" alt="">
                        <p class="h4 text-center xs-mt-10">Ivana Regecová</p>
                    </div>

                    <div class="col-12 col-lg-4">
                        <img src="{{ asset('images/winner/2019_september.jpg') }}" class="img-fluid d-block" alt="">
                        <p class="h4 text-center xs-mt-10">Linda Szalayová</p>
                    </div>

                    <div class="col-12 col-lg-4">
                        {{--<h4 class="text-center">August 2019</h4>--}}

                        <img src="{{ asset('images/winner/2019-08.jpg') }}" class="img-fluid d-block" alt="">

                        <p class="h4 text-center xs-mt-10">Helena Kandráčová</p>
                    </div>

                    <div class="col-12 col-lg-4">
                        {{--<h4 class="text-center">July 2019</h4>--}}

                        <img src="{{ asset('images/winner/2019_july.jpg') }}" class="img-fluid d-block" alt="">

                        <p class="h4 text-center xs-mt-10">Marek P.</p>
                    </div>

                    <div class="col-12 col-lg-4">
                        {{--<h4 class="text-center">June 2019</h4>--}}

                        <img src="{{ asset('images/winner/2019_june_Lauren.jpg') }}" class="img-fluid d-block" alt="">

                        <p class="h4 text-center xs-mt-10">Lauren J. from UK</p>
                    </div>

                    <div class="col-12 col-lg-4">
                        {{--<h4 class="text-center">May 2019</h4>--}}

                        <img src="{{ asset('images/winner/2019_may_matus_N_b.jpg') }}" class="img-fluid d-block" alt="">

                        <p class="h4 text-center xs-mt-10">Matúš N.</p>
                    </div>

                    <div class="col-12 col-lg-4">
                        {{--<h4 class="text-center">April 2019</h4>--}}

                        <img src="{{ asset('images/winner/2_april_2019_vlasta_b.jpg') }}" class="img-fluid d-block" alt="">

                        <p class="h4 text-center xs-mt-10">Vlasta B.</p>
                    </div>

                    <div class="col-12 col-lg-4">
                        {{--<h4 class="text-center">March 2019</h4>--}}

                        <img src="{{ asset('images/winner/1_march_2019_monika_t.jpg') }}" class="img-fluid d-block" alt="">

                        <p class="h4 text-center xs-mt-10">Monika T.</p>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('index.close')</button>
            </div>
        </div>
    </div>
</div>
