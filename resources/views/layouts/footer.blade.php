<div id="pageFooter" class="w-full text-center">
    {{-- <p class="small">@lang('index.copy')</p>--}}

    <div class="mb-4 lg:w-3/6 mx-auto">
        <h6 class="text-lg">Šírava Park official partners:</h6>
        <div class="md:flex items-center pt-3">

            <div class="flex">
                <div class="mb-3">
                    <img style="max-width: 80%" src="{{ asset('images/official-partners/coca-cola.png') }}"
                         class="img-fluid"></img>
                </div>

                <div class="">
                    <img style="max-width: 80%" src="{{ asset('images/official-partners/corona.png') }}"
                         class="img-fluid"></img>
                </div>

            </div>

            <div class="flex">


                <div class="">
                    <img style="max-width: 80%" src="{{ asset('images/official-partners/staropramen.png') }}"
                         class="img-fluid"></img>
                </div>
                
                <div class="">
                    <img style="max-width: 80%" src="{{ asset('images/official-partners/julius-meinl.png') }}"
                         class="img-fluid"></img>
                </div>

{{--                <div class="">--}}
{{--                    <img style="max-width: 80%" src="{{ asset('images/official-partners/generali.png') }}"--}}
{{--                         class="img-fluid"></img>--}}
{{--                </div>--}}

                <div class="">
                    <img style="max-width: 80%" src="{{ asset('images/official-partners/eventservice.png') }}"
                         class="img-fluid"></img>
                </div>
            </div>
        </div>
    </div>

    <p class="small"></p>

    <p><a href="" data-toggle="modal" data-target="#ppModal">@lang('index.pp')</a> | <a href="" data-toggle="modal"
                                                                                        data-target="#tacModal">@lang('index.tac')</a>
        | <a href="" data-toggle="modal" data-target="#mediaModal">@lang('media.media')</a></p>


    <div class="text-xs my-2">Šírava Park, s.r.o., Gorkého 5, 81101 Bratislava, Slovakia, <a href="tel:+421915364622">+421 (0)911 141 718</a>, <a href="mailto:info@siravapark.com"> info@siravapark.com</a></div>

    <div class="">Šírava Park &copy; {{ '2018 - ' . date('Y') }}</div>
</div>
