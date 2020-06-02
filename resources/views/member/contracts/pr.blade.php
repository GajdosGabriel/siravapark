@extends('member/contracts/_layout')

@section('content')
    <h2 class="text-center">@lang('member/contracts/pr.title', [], 'sk')</h2>

    <p class="text-center">@lang('member/contracts/pr.law', [], 'sk')</p>

    @if(App::getLocale() != 'sk')
        <h2 class="text-center lang">@lang('member/contracts/pr.title')</h2>

        <p class="text-center lang">@lang('member/contracts/pr.law')</p>
    @endif

    <h3 class="text-center">@lang('member/contracts/pr.parties', [], 'sk')</h3>

    @if(App::getLocale() != 'sk')
        <h3 class="text-center lang">@lang('member/contracts/pr.parties')</h3>
    @endif

    <table class="details">
        <tr>
            <th>@lang('member/contracts/pr.debtor', [], 'sk')</th>

            <th>@lang('member/contracts/pr.creditor', [], 'sk')</th>
        </tr>

        <tr>
            <td>
                <strong>Šírava Park, s.r.o.</strong><br>
                @lang('form.companyID', [], 'sk'): 52 028 461<br>
                Gorkého 5, Bratislava, 81101, Slovenská Republika<br><br>
                @lang('member/contracts/tdo.representedBy', [], 'sk') {{ config('cee.director') }}, Managing Director<br><br>
                E-mail: info@cee-realestate.com
            </td>

            <td>
                @lang('form.fullName', [], 'sk'): <strong>{{ $objOrder->name }}</strong> <strong>{{ $objOrder->surname }}</strong><br>
                @lang('form.govID', [], 'sk'): <strong>{{ $objOrder->government_id }}</strong><br>
                @lang('public/contact.address', [], 'sk'): <strong>{{ $objOrder->street }}</strong>, <strong>{{ $objOrder->city }}</strong>, <strong>{{ $objOrder->zip }}</strong><br>
                @lang('form.region', [], 'sk'): <strong>{{ $objOrder->region }}</strong><br>
                @lang('form.country', [], 'sk'): <strong>{{ $objOrder->country }}</strong><br>
                @lang('form.nationality', [], 'sk'): <strong>{{ $objOrder->nationality }}</strong><br><br>
                E-mail: <strong>{{ $objOrder->email }}</strong>

                @if($objOrder->company)
                    <br><br><strong>@lang('member/invest/step1.company', [], 'sk')</strong><br>
                    @lang('form.company', [], 'sk'): <strong>{{ $objOrder->company->name }}</strong><br>
                    @lang('form.companyID', [], 'sk'): <strong>{{ $objOrder->company->id_number }}</strong><br>
                    @lang('public/contact.address', [], 'sk'): <strong>{{ $objOrder->company->street }}</strong>, <strong>{{ $objOrder->company->city }}</strong>, <strong>{{ $objOrder->company->zip }}</strong><br>
                    @lang('form.region', [], 'sk'): <strong>{{ $objOrder->company->region }}</strong><br>
                    @lang('form.country', [], 'sk'): <strong>{{ $objOrder->company->country }}</strong>
                @endif

                @if($objOrder->joint)
                    <br><br><strong>@lang('member/invest/step1.joint', [], 'sk')</strong><br>
                    @lang('form.fullName', [], 'sk'): <strong>{{ $objOrder->joint->name }}</strong><br>
                    @lang('form.govID', [], 'sk'): <strong>{{ $objOrder->joint->government_id }}</strong>
                @endif
            </td>
        </tr>

        <tr>
            <th>@lang('member/contracts/pr.debtor2', [], 'sk')</th>

            <th>@lang('member/contracts/pr.creditor2', [], 'sk')</th>
        </tr>
    </table>

    <br>

    @if(App::getLocale() != 'sk')
        <table class="details lang">
            <tr>
                <th>@lang('member/contracts/pr.debtor')</th>

                <th>@lang('member/contracts/pr.creditor')</th>
            </tr>

            <tr>
                <td>
                    <strong>Šírava Park, s.r.o.</strong><br>
                    @lang('form.companyID'): 52 028 461<br>
                    Gorkého 5, Bratislava, 81101, Slovenská Republika<br><br>
                    @lang('member/contracts/tdo.representedBy') {{ config('cee.director') }}, Managing Director<br><br>
                    E-mail: info@cee-realestate.com
                </td>

                <td>
                    @lang('form.fullName'): <strong>{{ $objOrder->name }}</strong> <strong>{{ $objOrder->surname }}</strong><br>
                    @lang('form.govID'): <strong>{{ $objOrder->government_id }}</strong><br>
                    @lang('public/contact.address'): <strong>{{ $objOrder->street }}</strong>, <strong>{{ $objOrder->city }}</strong>, <strong>{{ $objOrder->zip }}</strong><br>
                    @lang('form.region'): <strong>{{ $objOrder->region }}</strong><br>
                    @lang('form.country'): <strong>{{ $objOrder->country }}</strong><br>
                    @lang('form.nationality'): <strong>{{ $objOrder->nationality }}</strong><br><br>
                    E-mail: <strong>{{ $objOrder->email }}</strong>

                    @if($objOrder->company)
                        <br><br><strong>@lang('member/invest/step1.company')</strong><br>
                        @lang('form.company'): <strong>{{ $objOrder->company->name }}</strong><br>
                        @lang('form.companyID'): <strong>{{ $objOrder->company->id_number }}</strong><br>
                        Sídlo: <strong>{{ $objOrder->company->street }}</strong>, <strong>{{ $objOrder->company->city }}</strong>, <strong>{{ $objOrder->company->zip }}</strong><br>
                        @lang('form.region'): <strong>{{ $objOrder->company->region }}</strong><br>
                        @lang('form.country'): <strong>{{ $objOrder->company->country }}</strong>
                    @endif

                    @if($objOrder->joint)
                        <br><br><strong>@lang('member/invest/step1.joint')</strong><br>
                        @lang('form.fullName'): <strong>{{ $objOrder->joint->name }}</strong><br>
                        @lang('form.govID'): <strong>{{ $objOrder->joint->government_id }}</strong>
                    @endif
                </td>
            </tr>

            <tr>
                <th>@lang('member/contracts/pr.debtor2')</th>

                <th>@lang('member/contracts/pr.creditor2')</th>
            </tr>
        </table>
    @endif

    <p>@lang('member/contracts/pr.parties2', [], 'sk')</p>

    @if(App::getLocale() != 'sk')
        <p class="lang">@lang('member/contracts/pr.parties2')</p>
    @endif

    <br>

    <table class="details">
        <tr>
            <th colspan="2">
                @lang('member/contracts/pr.loanInfo', [], 'sk')
            </th>
        </tr>

        <tr>
            <td>
                @lang('member/contracts/pr.principal', [], 'sk')
            </td>

            <td>
                € <strong>{{ number_format($objOrder->pr->total_investment, 0, ',', ' ') }}</strong>
            </td>
        </tr>

        <tr>
            <td>
                @lang('member/contracts/pr.interest', [], 'sk')
            </td>

            <td>
                € <strong>{{ number_format($objOrder->pr->total_interest, 0, ',', ' ') }}</strong>
            </td>
        </tr>

        <tr>
            <td>
                @lang('member/contracts/pr.quarterly', [], 'sk')
            </td>

            <td>
                € <strong>{{ number_format($objOrder->pr->interest, 2, ',', ' ') }}</strong>
            </td>
        </tr>

        <tr>
            <td>
                @lang('member/contracts/pr.notes', [], 'sk')
            </td>

            <td>
                <strong>{{ $objOrder->pr->serial_numbers }}</strong>
            </td>
        </tr>
    </table>

    <br>

    @if(App::getLocale() != 'sk')
        <table class="details lang">
            <tr>
                <th colspan="2">
                    @lang('member/contracts/pr.loanInfo')
                </th>
            </tr>

            <tr>
                <td>
                    @lang('member/contracts/pr.principal')
                </td>

                <td>
                    € <strong>{{ number_format($objOrder->pr->total_investment, 0, ',', ' ') }}</strong>
                </td>
            </tr>

            <tr>
                <td>
                    @lang('member/contracts/pr.interest')
                </td>

                <td>
                    € <strong>{{ number_format($objOrder->pr->total_interest, 0, ',', ' ') }}</strong>
                </td>
            </tr>

            <tr>
                <td>
                    @lang('member/contracts/pr.quarterly')
                </td>

                <td>
                    € <strong>{{ number_format($objOrder->pr->interest, 2, ',', ' ') }}</strong>
                </td>
            </tr>

            <tr>
                <td>
                    @lang('member/contracts/pr.notes')
                </td>

                <td>
                    <strong>{{ $objOrder->pr->serial_numbers }}</strong>
                </td>
            </tr>
        </table>
    @endif

    <br>

    <h3 class="text-center">@lang('member/contracts/pr.a2', [], 'sk')</h3>

    <p>@lang('member/contracts/pr.1', [], 'sk')</p>

    @if(App::getLocale() != 'sk')
        <h3 class="text-center lang">@lang('member/contracts/pr.a2')</h3>

        <p class="lang">@lang('member/contracts/pr.1')</p>
    @endif

    <h3 class="text-center">@lang('member/contracts/pr.a3', [], 'sk')</h3>

    <p>
        @lang('member/contracts/pr.principal', [], 'sk') € <strong>{{ number_format($objOrder->pr->total_investment, 0, ',', ' ') }}</strong><br>
        @lang('member/contracts/pr.rate', [], 'sk') <strong>{{ $objOrder->pr->percent }}</strong>% p.a.<br>
        @lang('member/contracts/pr.rateType', [], 'sk')<br>
        @lang('member/contracts/pr.due', [], 'sk') <strong>{{ date('j.n.Y', strtotime('+' . $objOrder->pr->duration . ' years')) }}</strong><br>
        @lang('member/contracts/pr.due2', [], 'sk')<br>
        @lang('member/contracts/pr.amount', [], 'sk') € <strong>{{ number_format($objOrder->pr->interest, 2, ',', ' ') }}</strong><br>
    </p>

    @if(App::getLocale() != 'sk')
        <h3 class="text-center lang">@lang('member/contracts/pr.a3')</h3>

        <p class="lang">
            @lang('member/contracts/pr.principal') € <strong>{{ number_format($objOrder->pr->total_investment, 0, ',', ' ') }}</strong><br>
            @lang('member/contracts/pr.rate') <strong>{{ $objOrder->pr->percent }}</strong>% p.a.<br>
            @lang('member/contracts/pr.rateType')<br>
            @lang('member/contracts/pr.due') <strong>{{ date('j.n.Y', strtotime('+' . $objOrder->pr->duration . ' years')) }}</strong><br>
            @lang('member/contracts/pr.due2')<br>
            @lang('member/contracts/pr.amount') € <strong>{{ number_format($objOrder->pr->interest, 2, ',', ' ') }}</strong><br>
        </p>
    @endif

    <h3 class="text-center">@lang('member/contracts/pr.a4', [], 'sk')</h3>

    <ol>
        <li>@lang('member/contracts/pr.2', [], 'sk')</li>

        <li>@lang('member/contracts/pr.3', [], 'sk')</li>

        <li>@lang('member/contracts/pr.4', [], 'sk')</li>

        <li>@lang('member/contracts/pr.5', [], 'sk')</li>

        <li>@lang('member/contracts/pr.6', [], 'sk')</li>

        <li>@lang('member/contracts/pr.7', [], 'sk')</li>
    </ol>

    @if(App::getLocale() != 'sk')
        <h3 class="text-center lang">@lang('member/contracts/pr.a4')</h3>

        <ol class="lang">
            <li>@lang('member/contracts/pr.2')</li>

            <li>@lang('member/contracts/pr.3')</li>

            <li>@lang('member/contracts/pr.4')</li>

            <li>@lang('member/contracts/pr.5')</li>

            <li>@lang('member/contracts/pr.6')</li>

            <li>@lang('member/contracts/pr.7')</li>
        </ol>
    @endif

    <h3 class="text-center">@lang('member/contracts/pr.a5', [], 'sk')</h3>

    <ol>
        <li>@lang('member/contracts/pr.8', [], 'sk')</li>

        <li>@lang('member/contracts/pr.9', [], 'sk')</li>

        <li>
            @lang('member/contracts/pr.10', [], 'sk')<br>
            @lang('member/contracts/pr.11', [], 'sk')<br>
            @lang('member/contracts/pr.12', [], 'sk')<br>
            @lang('member/contracts/pr.13', [], 'sk')<br>
            @lang('member/contracts/pr.14', [], 'sk')<br>
            @lang('member/contracts/pr.15', [], 'sk')
        </li>
    </ol>

    @if(App::getLocale() != 'sk')
        <h3 class="text-center lang">@lang('member/contracts/pr.a5')</h3>

        <ol class="lang">
            <li>@lang('member/contracts/pr.8')</li>

            <li>@lang('member/contracts/pr.9')</li>

            <li>
                @lang('member/contracts/pr.10')<br>
                @lang('member/contracts/pr.11')<br>
                @lang('member/contracts/pr.12')<br>
                @lang('member/contracts/pr.13')<br>
                @lang('member/contracts/pr.14')<br>
                @lang('member/contracts/pr.15')
            </li>
        </ol>
    @endif

    <h3 class="text-center">@lang('member/contracts/pr.a6', [], 'sk')</h3>

    <ol>
        <li>@lang('member/contracts/pr.16', [], 'sk')</li>

        <li>@lang('member/contracts/pr.17', [], 'sk')</li>

        <li>@lang('member/contracts/pr.18', [], 'sk')</li>

        <li>@lang('member/contracts/pr.19', [], 'sk')</li>

        <li>@lang('member/contracts/pr.20', [], 'sk')</li>

        <li>@lang('member/contracts/pr.21', [], 'sk')</li>
    </ol>

    @if(App::getLocale() != 'sk')
        <h3 class="text-center lang">@lang('member/contracts/pr.a6')</h3>

        <ol class="lang">
            <li>@lang('member/contracts/pr.16')</li>

            <li>@lang('member/contracts/pr.17')</li>

            <li>@lang('member/contracts/pr.18')</li>

            <li>@lang('member/contracts/pr.19')</li>

            <li>@lang('member/contracts/pr.20')</li>

            <li>@lang('member/contracts/pr.21')</li>
        </ol>
    @endif

    <h3 class="text-center">@lang('member/contracts/pr.a7', [], 'sk')</h3>

    <ol>
        <li>@lang('member/contracts/pr.22', [], 'sk')</li>

        <li>@lang('member/contracts/pr.23', [], 'sk')</li>

        <li>@lang('member/contracts/pr.24', [], 'sk')</li>

        <li>@lang('member/contracts/pr.25', [], 'sk')</li>

        <li>@lang('member/contracts/pr.26', [], 'sk')</li>

        <li>
            @lang('member/contracts/pr.27', [], 'sk')

            <ol type="a">
                <li>@lang('member/contracts/pr.28', [], 'sk')</li>

                <li>@lang('member/contracts/pr.29', [], 'sk')</li>

                <li>@lang('member/contracts/pr.30', [], 'sk')</li>

                <li>@lang('member/contracts/pr.31', [], 'sk')</li>

                <li>@lang('member/contracts/pr.32', [], 'sk')</li>
            </ol>
        </li>

        <li>@lang('member/contracts/pr.33', [], 'sk')</li>
    </ol>

    @if(App::getLocale() != 'sk')
        <h3 class="text-center lang">@lang('member/contracts/pr.a7')</h3>

        <ol class="lang">
            <li>@lang('member/contracts/pr.22')</li>

            <li>@lang('member/contracts/pr.23')</li>

            <li>@lang('member/contracts/pr.24')</li>

            <li>@lang('member/contracts/pr.25')</li>

            <li>@lang('member/contracts/pr.26')</li>

            <li>
                @lang('member/contracts/pr.27')

                <ol type="a">
                    <li>@lang('member/contracts/pr.28')</li>

                    <li>@lang('member/contracts/pr.29')</li>

                    <li>@lang('member/contracts/pr.30')</li>

                    <li>@lang('member/contracts/pr.31')</li>

                    <li>@lang('member/contracts/pr.32')</li>
                </ol>
            </li>

            <li>@lang('member/contracts/pr.33')</li>
        </ol>
    @endif

    <h3 class="text-center">@lang('member/contracts/pr.a8', [], 'sk')</h3>

    <ol>
        <li>@lang('member/contracts/pr.34', [], 'sk')</li>

        <li>@lang('member/contracts/pr.35', [], 'sk')</li>

        <li>@lang('member/contracts/pr.36', [], 'sk')</li>
    </ol>

    @if(App::getLocale() != 'sk')
        <h3 class="text-center lang">@lang('member/contracts/pr.a8')</h3>

        <ol class="lang">
            <li>@lang('member/contracts/pr.34')</li>

            <li>@lang('member/contracts/pr.35')</li>

            <li>@lang('member/contracts/pr.36')</li>
        </ol>
    @endif

    <h3 class="text-center">@lang('member/contracts/pr.a9', [], 'sk')</h3>

    <ol>
        <li>@lang('member/contracts/pr.37', [], 'sk')</li>

        <li>@lang('member/contracts/pr.38', [], 'sk')</li>

        <li>@lang('member/contracts/pr.39', [], 'sk')</li>

        <li>@lang('member/contracts/pr.40', [], 'sk')</li>

        <li>@lang('member/contracts/pr.41', [], 'sk')</li>

        <li>@lang('member/contracts/pr.42', [], 'sk')</li>

        <li>@lang('member/contracts/pr.43', [], 'sk')</li>
    </ol>

    @if(App::getLocale() != 'sk')
        <h3 class="text-center lang">@lang('member/contracts/pr.a9')</h3>

        <ol class="lang">
            <li>@lang('member/contracts/pr.37')</li>

            <li>@lang('member/contracts/pr.38')</li>

            <li>@lang('member/contracts/pr.39')</li>

            <li>@lang('member/contracts/pr.40')</li>

            <li>@lang('member/contracts/pr.41')</li>

            <li>@lang('member/contracts/pr.42')</li>

            <li>@lang('member/contracts/pr.43')</li>
        </ol>
    @endif

    <h3 class="text-center">@lang('member/contracts/pr.a10', [], 'sk')</h3>

    <ol>
        <li>
            @lang('member/contracts/pr.44', [], 'sk')

            <ol type="a">
                <li>@lang('member/contracts/pr.45', [], 'sk')</li>

                <li>@lang('member/contracts/pr.46', [], 'sk')</li>

                <li>@lang('member/contracts/pr.47', [], 'sk')</li>

                <li>@lang('member/contracts/pr.48', [], 'sk')</li>
            </ol>
        </li>

        <li>@lang('member/contracts/pr.49', [], 'sk')</li>

        <li>@lang('member/contracts/pr.50', [], 'sk')</li>
    </ol>

    @if(App::getLocale() != 'sk')
        <h3 class="text-center lang">@lang('member/contracts/pr.a10')</h3>

        <ol class="lang">
            <li>
                @lang('member/contracts/pr.44')

                <ol type="a">
                    <li>@lang('member/contracts/pr.45')</li>

                    <li>@lang('member/contracts/pr.46')</li>

                    <li>@lang('member/contracts/pr.47')</li>

                    <li>@lang('member/contracts/pr.48')</li>
                </ol>
            </li>

            <li>@lang('member/contracts/pr.49')</li>

            <li>@lang('member/contracts/pr.50')</li>
        </ol>
    @endif

    <h3 class="text-center">@lang('member/contracts/pr.a11', [], 'sk')</h3>

    <ol>
        <li>@lang('member/contracts/pr.51', [], 'sk')</li>

        <li>@lang('member/contracts/pr.52', [], 'sk')</li>

        <li>@lang('member/contracts/pr.53', [], 'sk')</li>
    </ol>

    @if(App::getLocale() != 'sk')
        <h3 class="text-center lang">@lang('member/contracts/pr.a11')</h3>

        <ol class="lang">
            <li>@lang('member/contracts/pr.51')</li>

            <li>@lang('member/contracts/pr.52')</li>

            <li>@lang('member/contracts/pr.53')</li>
        </ol>
    @endif

    <h3 class="text-center">@lang('member/contracts/pr.a12', [], 'sk')</h3>

    <ol>
        <li>@lang('member/contracts/pr.64', [], 'sk')</li>

        <li>@lang('member/contracts/pr.65', [], 'sk')</li>

        <li>@lang('member/contracts/pr.66', [], 'sk')</li>
    </ol>

    @if(App::getLocale() != 'sk')
        <h3 class="text-center lang">@lang('member/contracts/pr.a12')</h3>

        <ol class="lang">
            <li>@lang('member/contracts/pr.64')</li>

            <li>@lang('member/contracts/pr.65')</li>

            <li>@lang('member/contracts/pr.66')</li>
        </ol>
    @endif

    <h3 class="text-center">@lang('member/contracts/pr.a13', [], 'sk')</h3>

    <ol>
        <li>@lang('member/contracts/pr.54', [], 'sk')</li>

        <li>@lang('member/contracts/pr.55', [], 'sk')</li>

        <li>@lang('member/contracts/pr.56', [], 'sk')</li>
    </ol>

    @if(App::getLocale() != 'sk')
        <h3 class="text-center lang">@lang('member/contracts/pr.a13')</h3>

        <ol class="lang">
            <li>@lang('member/contracts/pr.54')</li>

            <li>@lang('member/contracts/pr.55')</li>

            <li>@lang('member/contracts/pr.56')</li>
        </ol>
    @endif

    <h3 class="text-center">@lang('member/contracts/pr.a14', [], 'sk')</h3>

    <ol>
        <li>@lang('member/contracts/pr.57', [], 'sk')</li>

        <li>@lang('member/contracts/pr.58', [], 'sk')</li>

        <li>@lang('member/contracts/pr.59', [], 'sk')</li>

        <li>@lang('member/contracts/pr.60', [], 'sk')</li>

        <li>@lang('member/contracts/pr.61', [], 'sk')</li>

        <li>@lang('member/contracts/pr.62', [], 'sk')</li>

        <li>@lang('member/contracts/pr.63', [], 'sk')</li>
    </ol>

    @if(App::getLocale() != 'sk')
        <h3 class="text-center lang">@lang('member/contracts/pr.a14')</h3>

        <ol class="lang">
            <li>@lang('member/contracts/pr.57')</li>

            <li>@lang('member/contracts/pr.58')</li>

            <li>@lang('member/contracts/pr.59')</li>

            <li>@lang('member/contracts/pr.60')</li>

            <li>@lang('member/contracts/pr.61')</li>

            <li>@lang('member/contracts/pr.62')</li>

            <li>@lang('member/contracts/pr.63')</li>
        </ol>
    @endif

    <table class="signatures">
        <tr>
            <td>
                @lang('member/contracts/pr.city', [], 'sk') {{ date('j.n.Y') }}<br>
                @lang('member/contracts/pr.debtor3', [], 'sk')<br><br>

                @if(App::getLocale() != 'sk')
                    <span class="lang">
                @lang('member/contracts/pr.city') {{ date('j.n.Y') }}<br>
                @lang('member/contracts/pr.debtor3')
            </span>
                @endif
            </td>

            <td>
                @lang('member/contracts/pr.city', [], 'sk') {{ date('j.n.Y') }}<br>
                @lang('member/contracts/pr.creditor3', [], 'sk')<br><br>

                @if(App::getLocale() != 'sk')
                    <span class="lang">
                @lang('member/contracts/pr.city') {{ date('j.n.Y') }}<br>
                @lang('member/contracts/pr.creditor3')
            </span>
                @endif
            </td>
        </tr>

        <tr>
            <td class="signature">
                DSS2........................................<br>
                {{ config('cee.director') }}<br>
                Managing Director<br>
                Šírava Park, s.r.o.
            </td>

            <td class="signature">
                DSS1........................................<br>
                {{ $objOrder->name }} {{ $objOrder->surname }}
                @if(isset($objOrder->company))
                    <br>{{ $objOrder->company->name }}
                @endif
            </td>
        </tr>
    </table>
@endsection