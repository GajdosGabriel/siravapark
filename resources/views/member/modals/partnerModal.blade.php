<div id="agreementModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">@lang('member/partner.agreement')</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <h2 class="text-center xs-mb-20">@lang('member/partner.terms.text')</h2>

                <p><strong>Company:</strong> Šírava Park, s.r.o.,</p>
                <p>Gorkého 5, Bratislava, 81101, Slovak republic</p>
                <p><strong>@lang('member/partner.terms.registrationNumber')</strong> </p>

                <p>@lang('member/partner.terms.text2')</p>

                <p>@lang('member/partner.terms.and')</p>

                <p><strong>@lang('member/partner.terms.name')</strong> {{ Auth::user()->name }} {{ Auth::user()->surname }}</p>
                <p><strong>@lang('form.company'):</strong> <span id="fillCompany">{{ Auth::user()->company }}</span></p>
                <p><strong>E-mail:</strong> {{ Auth::user()->email }}</p>
                <p><strong>@lang('form.companyWebsite'):</strong> <span id="fillURL">{{ Auth::user()->url }}</span></p>

                <p>@lang('member/partner.terms.text3')</p>

                <h3>@lang('member/partner.terms.I')</h3>

                <p class='text-justify'>@lang('member/partner.terms.IA')</p>
                <p class='text-justify'>@lang('member/partner.terms.IB')</p>

                <h3>@lang('member/partner.terms.1')</h3>

                <p class='text-justify'>@lang('member/partner.terms.1A')</p>
                <p class='text-justify'>@lang('member/partner.terms.1B')</p>
                <p class='text-justify'>@lang('member/partner.terms.1C')</p>
                <p class='text-justify'>@lang('member/partner.terms.1D')</p>
                <p class='text-justify'>@lang('member/partner.terms.1E')</p>

                <h3>@lang('member/partner.terms.2')</h3>

                <p class='text-justify'>@lang('member/partner.terms.2A')</p>
                <p class='text-justify'>@lang('member/partner.terms.2B')</p>

                <h3>@lang('member/partner.terms.3')</h3>

                <p class='text-justify'>@lang('member/partner.terms.3A')</p>
                <p class='text-justify'>@lang('member/partner.terms.3B')</p>
                <p class='text-justify'>@lang('member/partner.terms.3C')</p>
                <p class='text-justify'>@lang('member/partner.terms.3D')</p>
                <p class='text-justify'>@lang('member/partner.terms.3E')</p>
                <p class='text-justify'>@lang('member/partner.terms.3F')</p>
                <p class='text-justify'>@lang('member/partner.terms.3G')</p>
                <p class='text-justify'>@lang('member/partner.terms.3H')</p>

                <h3>@lang('member/partner.terms.4')</h3>

                <p class='text-justify'>@lang('member/partner.terms.4text')</p>

                <h3>@lang('member/partner.terms.5')</h3>

                <ul>
                    <li>@lang('member/partner.terms.51')</li>

                    <li>@lang('member/partner.terms.52')</li>
                </ul>

                <p class='text-justify'>@lang('member/partner.terms.5B')</p>
                <p class='text-justify'>@lang('member/partner.terms.5C')</p>
                <p class='text-justify'>@lang('member/partner.terms.5D')</p>

                <h3>@lang('member/partner.terms.6')</h3>

                <p class='text-justify'>@lang('member/partner.terms.6A')</p>
                <p class='text-justify'>@lang('member/partner.terms.6B')</p>
                <p class='text-justify'>@lang('member/partner.terms.6C')</p>

                <h3>@lang('member/partner.terms.7')</h3>

                <p class='text-justify'>@lang('member/partner.terms.7text')</p>

                <h3>@lang('member/partner.terms.8')</h3>

                <p class='text-justify'>@lang('member/partner.terms.8A')</p>
                <p class='text-justify'>@lang('member/partner.terms.8B')</p>
                <p class='text-justify'>@lang('member/partner.terms.8C')</p>

                <h3>@lang('member/partner.terms.9')</h3>

                <p class='text-justify'>@lang('member/partner.terms.9A').</p>
                <p class='text-justify'>@lang('member/partner.terms.9B')</p>

                <h3>@lang('member/partner.terms.10')</h3>

                <p class='text-justify'>@lang('member/partner.terms.10A')</p>
                <p class='text-justify'>@lang('member/partner.terms.10B')</p>
            </div>

            <div class="modal-footer">
                <button class="btn btn-secondary" data-dismiss="modal" aria-label="Close">@lang('general.close')</button>
            </div>
        </div>
    </div>
</div>