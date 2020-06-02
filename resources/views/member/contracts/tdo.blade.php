@extends('member/contracts/_layout')

@section('content')
    <h2 class="text-center">@lang('member/contracts/tdo.title', [], 'sk')</h2>

    <p class="text-center">
        @lang('member/contracts/tdo.law', [], 'sk')
    </p>

    @if(App::getLocale() != 'sk')
        <h2 class="text-center lang">@lang('member/contracts/tdo.title')</h2>

        <p class="text-center lang">
            @lang('member/contracts/tdo.law')
        </p>
    @endif

    <table class="details">
        <tr>
            <th>@lang('member/contracts/tdo.debtor', [], 'sk')</th>

            <th>@lang('member/contracts/tdo.creditor', [], 'sk')</th>
        </tr>

        <tr>
            <td>
                <strong>Šírava Park, s.r.o.</strong><br>
                @lang('form.companyID', [], 'sk'): 52 028 461<br>
                Gorkého 5, Bratislava, 81101, Slovenská Republika<br><br>
                @lang('member/contracts/tdo.representedBy', [], 'sk') {{ config('cee.director') }}, Managing director<br><br>
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
            <th>@lang('member/contracts/tdo.debtor2', [], 'sk')</th>

            <th>@lang('member/contracts/tdo.creditor2', [], 'sk')</th>
        </tr>
    </table>

    <br>

    @if(App::getLocale() != 'sk')
        <table class="details lang">
            <tr>
                <th>@lang('member/contracts/tdo.debtor')</th>

                <th>@lang('member/contracts/tdo.creditor')</th>
            </tr>

            <tr>
                <td>
                    <strong>Šírava Park, s.r.o.</strong><br>
                    @lang('form.companyID'): 52 028 461<br>
                    Gorkého 5, Bratislava, 81101, Slovenská Republika<br><br>
                    @lang('member/contracts/tdo.representedBy') {{ config('cee.director') }}, Managing director<br><br>
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
                        @lang('public/contact.address'): <strong>{{ $objOrder->company->street }}</strong>, <strong>{{ $objOrder->company->city }}</strong>, <strong>{{ $objOrder->company->zip }}</strong><br>
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
                <th>@lang('member/contracts/tdo.debtor2')</th>

                <th>@lang('member/contracts/tdo.creditor2')</th>
            </tr>
        </table>
    @endif

    <br>

    <table class="details">
        <tr>
            <th colspan="2">
                @lang('member/contracts/tdo.params', [], 'sk')
            </th>
        </tr>

        <tr>
            <td>@lang('member/contracts/tdo.name', [], 'sk')</td>

            <td>
                <strong>{{ $objOrder->tdo->project->name }}</strong>
            </td>
        </tr>

        <tr>
            <td>@lang('member/contracts/tdo.location', [], 'sk')</td>

            <td>
                <strong>{{ $objOrder->tdo->project->location }}</strong>
            </td>
        </tr>

        <tr>
            <td>@lang('member/contracts/tdo.2', [], 'sk')</td>

            <td>
                <strong>{{ $objOrder->tdo->shares }}%</strong><br>
                @lang('member/contracts/tdo.4', [], 'sk')
            </td>
        </tr>

        <tr>
            <td>@lang('member/contracts/tdo.3', [], 'sk')</td>

            <td>
                &euro; <strong>{{ number_format($objOrder->tdo->investment, 0, ',', ' ') }}</strong><br>
                @lang('member/contracts/tdo.5', [], 'sk')
            </td>
        </tr>
    </table>

    <br>

    @if(App::getLocale() != 'sk')
        <table class="details lang">
            <tr>
                <th colspan="2">
                    @lang('member/contracts/tdo.params')
                </th>
            </tr>

            <tr>
                <td>@lang('member/contracts/tdo.name')</td>

                <td>
                    <strong>{{ $objOrder->tdo->project->name }}</strong>
                </td>
            </tr>

            <tr>
                <td>@lang('member/contracts/tdo.location')</td>

                <td>
                    <strong>{{ $objOrder->tdo->project->location }}</strong>
                </td>
            </tr>

            <tr>
                <td>@lang('member/contracts/tdo.2')</td>

                <td>
                    <strong>{{ $objOrder->tdo->shares }}%</strong><br>
                    @lang('member/contracts/tdo.4')
                </td>
            </tr>

            <tr>
                <td>@lang('member/contracts/tdo.3')</td>

                <td>
                    &euro; <strong>{{ number_format($objOrder->tdo->investment, 0, ',', ' ') }}</strong><br>
                    @lang('member/contracts/tdo.5')
                </td>
            </tr>
        </table>
    @endif

    <br>

    <h3 class="text-center">@lang('member/contracts/tdo.a1', [], 'sk')</h3>

    <ol>
        <li>@lang('member/contracts/tdo.6', [], 'sk')</li>

        <li>@lang('member/contracts/tdo.7', [], 'sk')</li>

        <li>@lang('member/contracts/tdo.8', [], 'sk')</li>
    </ol>

    @if(App::getLocale() != 'sk')
        <h3 class="text-center lang">@lang('member/contracts/tdo.a1')</h3>

        <ol class="lang">
            <li>@lang('member/contracts/tdo.6')</li>

            <li>@lang('member/contracts/tdo.7')</li>

            <li>@lang('member/contracts/tdo.8')</li>
        </ol>
    @endif

    <h3 class="text-center">@lang('member/contracts/tdo.a2', [], 'sk')</h3>

    <ol>
        <li>@lang('member/contracts/tdo.9', [], 'sk')</li>

        <li>{!! trans('member/contracts/tdo.10', [], 'sk') !!}</li>

        <li>@lang('member/contracts/tdo.11', [], 'sk')

            <ol type="a">
                <li>@lang('member/contracts/tdo.12', [], 'sk')</li>

                <li>@lang('member/contracts/tdo.13', [], 'sk')</li>

                <li>@lang('member/contracts/tdo.14', [], 'sk')</li>

                <li>@lang('member/contracts/tdo.15', [], 'sk')</li>

                <li>@lang('member/contracts/tdo.16', [], 'sk')</li>
            </ol>
        </li>

        <li>@lang('member/contracts/tdo.17', [], 'sk')</li>

        <li>@lang('member/contracts/tdo.18', [], 'sk')</li>
    </ol>

    @if(App::getLocale() != 'sk')
        <h3 class="text-center lang">@lang('member/contracts/tdo.a2')</h3>

        <ol class="lang">
            <li>@lang('member/contracts/tdo.9')</li>

            <li>{!! trans('member/contracts/tdo.10') !!}</li>

            <li>@lang('member/contracts/tdo.11')

                <ol type="a">
                    <li>@lang('member/contracts/tdo.12')</li>

                    <li>@lang('member/contracts/tdo.13')</li>

                    <li>@lang('member/contracts/tdo.14')</li>

                    <li>@lang('member/contracts/tdo.15')</li>

                    <li>@lang('member/contracts/tdo.16')</li>
                </ol>
            </li>

            <li>@lang('member/contracts/tdo.17')</li>

            <li>@lang('member/contracts/tdo.18')</li>
        </ol>
    @endif

    <h3 class="text-center">@lang('member/contracts/tdo.a3', [], 'sk')</h3>

    <ol>
        <li>@lang('member/contracts/tdo.19', [], 'sk')</li>

        <li>@lang('member/contracts/tdo.20', [], 'sk')</li>

        <li>@lang('member/contracts/tdo.22', [], 'sk')</li>

        <li>@lang('member/contracts/tdo.23', [], 'sk')</li>

        <li>@lang('member/contracts/tdo.24', [], 'sk')

            <ol type="a">
                <li>@lang('member/contracts/tdo.25', [], 'sk')</li>

                <li>@lang('member/contracts/tdo.26', [], 'sk')</li>

                <li>@lang('member/contracts/tdo.27', [], 'sk')</li>
            </ol>
        </li>

        <li>@lang('member/contracts/tdo.29', [], 'sk')</li>

        <li>@lang('member/contracts/tdo.30', [], 'sk')</li>
    </ol>

    @if(App::getLocale() != 'sk')
        <h3 class="text-center lang">@lang('member/contracts/tdo.a3')</h3>

        <ol class="lang">
            <li>@lang('member/contracts/tdo.19')</li>

            <li>@lang('member/contracts/tdo.20')</li>

            <li>@lang('member/contracts/tdo.22')</li>

            <li>@lang('member/contracts/tdo.23')</li>

            <li>@lang('member/contracts/tdo.24')

                <ol type="a">
                    <li>@lang('member/contracts/tdo.25')</li>

                    <li>@lang('member/contracts/tdo.26')</li>

                    <li>@lang('member/contracts/tdo.27')</li>
                </ol>
            </li>

            <li>@lang('member/contracts/tdo.29')</li>

            <li>@lang('member/contracts/tdo.30')</li>
        </ol>
    @endif

    <h3 class="text-center">@lang('member/contracts/tdo.a4', [], 'sk')</h3>

    <ol>
        <li>@lang('member/contracts/tdo.31', [], 'sk')</li>
    </ol>

    @if(App::getLocale() != 'sk')
        <h3 class="text-center lang">@lang('member/contracts/tdo.a4')</h3>

        <ol class="lang">
            <li>@lang('member/contracts/tdo.31')</li>
        </ol>
    @endif

    <h3 class="text-center">@lang('member/contracts/tdo.a5', [], 'sk')</h3>

    <ol>
        <li>@lang('member/contracts/tdo.32', [], 'sk')

            <ol type="a">
                <li>@lang('member/contracts/tdo.33')</li>

                <li>@lang('member/contracts/tdo.34')</li>
            </ol>
        </li>
    </ol>

    @if(App::getLocale() != 'sk')
        <h3 class="text-center lang">@lang('member/contracts/tdo.a5')</h3>

        <ol class="lang">
            <li>@lang('member/contracts/tdo.32')

                <ol type="a">
                    <li>@lang('member/contracts/tdo.33')</li>

                    <li>@lang('member/contracts/tdo.34')</li>
                </ol>
            </li>
        </ol>
    @endif

    <h3 class="text-center">@lang('member/contracts/tdo.a6', [], 'sk')</h3>

    <ol>
        <li>@lang('member/contracts/tdo.35', [], 'sk')</li>

        <li>@lang('member/contracts/tdo.36', [], 'sk')</li>

        <li>@lang('member/contracts/tdo.37', [], 'sk')</li>

        <li>@lang('member/contracts/tdo.38', [], 'sk')</li>

        <li>@lang('member/contracts/tdo.39', [], 'sk')</li>
    </ol>

    @if(App::getLocale() != 'sk')
        <h3 class="text-center lang">@lang('member/contracts/tdo.a6')</h3>

        <ol class="lang">
            <li>@lang('member/contracts/tdo.35')</li>

            <li>@lang('member/contracts/tdo.36')</li>

            <li>@lang('member/contracts/tdo.37')</li>

            <li>@lang('member/contracts/tdo.38')</li>

            <li>@lang('member/contracts/tdo.39')</li>
        </ol>
    @endif

    <h3 class="text-center">@lang('member/contracts/tdo.a7', [], 'sk')</h3>

    <ol>
        <li>@lang('member/contracts/tdo.40', [], 'sk')</li>

        <li>@lang('member/contracts/tdo.41', [], 'sk')</li>

        <li>@lang('member/contracts/tdo.42', [], 'sk')</li>

        <li>@lang('member/contracts/tdo.43', [], 'sk')</li>

        <li>@lang('member/contracts/tdo.44', [], 'sk')</li>
    </ol>

    @if(App::getLocale() != 'sk')
        <h3 class="text-center lang">@lang('member/contracts/tdo.a7')</h3>

        <ol class="lang">
            <li>@lang('member/contracts/tdo.40')</li>

            <li>@lang('member/contracts/tdo.41')</li>

            <li>@lang('member/contracts/tdo.42')</li>

            <li>@lang('member/contracts/tdo.43')</li>

            <li>@lang('member/contracts/tdo.44')</li>
        </ol>
    @endif

    <h3 class="text-center">@lang('member/contracts/tdo.a8', [], 'sk')</h3>

    <ol>
        <li>@lang('member/contracts/tdo.45', [], 'sk')</li>

        <li>@lang('member/contracts/tdo.46', [], 'sk')</li>

        <li>@lang('member/contracts/tdo.47', [], 'sk')</li>
    </ol>

    @if(App::getLocale() != 'sk')
        <h3 class="text-center lang">@lang('member/contracts/tdo.a8')</h3>

        <ol class="lang">
            <li>@lang('member/contracts/tdo.45')</li>

            <li>@lang('member/contracts/tdo.46')</li>

            <li>@lang('member/contracts/tdo.47')</li>
        </ol>
    @endif

    <h3 class="text-center">@lang('member/contracts/tdo.a9', [], 'sk')</h3>

    <ol>
        <li>@lang('member/contracts/tdo.48', [], 'sk')</li>

        <li>@lang('member/contracts/tdo.49', [], 'sk')</li>

        <li>@lang('member/contracts/tdo.50', [], 'sk')</li>
    </ol>

    @if(App::getLocale() != 'sk')
        <h3 class="text-center lang">@lang('member/contracts/tdo.a9')</h3>

        <ol class="lang">
            <li>@lang('member/contracts/tdo.48')</li>

            <li>@lang('member/contracts/tdo.49')</li>

            <li>@lang('member/contracts/tdo.50')</li>
        </ol>
    @endif

    <h3 class="text-center">@lang('member/contracts/tdo.a10', [], 'sk')</h3>

    <ol>
        <li>@lang('member/contracts/tdo.51', [], 'sk')</li>

        <li>@lang('member/contracts/tdo.52', [], 'sk')</li>

        <li>@lang('member/contracts/tdo.53', [], 'sk')</li>

        <li>@lang('member/contracts/tdo.54', [], 'sk')</li>
    </ol>

    @if(App::getLocale() != 'sk')
        <h3 class="text-center lang">@lang('member/contracts/tdo.a10')</h3>

        <ol class="lang">
            <li>@lang('member/contracts/tdo.51')</li>

            <li>@lang('member/contracts/tdo.52')</li>

            <li>@lang('member/contracts/tdo.53')</li>

            <li>@lang('member/contracts/tdo.54')</li>
        </ol>
    @endif

    <h3 class="text-center">@lang('member/contracts/tdo.a11', [], 'sk')</h3>

    <ol>
        <li>@lang('member/contracts/tdo.55', [], 'sk')</li>

        <li>@lang('member/contracts/tdo.57', [], 'sk')</li>

        <li>@lang('member/contracts/tdo.61', [], 'sk')

            <ol type="a">
                <li>@lang('member/contracts/tdo.62', [], 'sk')</li>

                <li>@lang('member/contracts/tdo.63', [], 'sk')</li>

                <li>@lang('member/contracts/tdo.64', [], 'sk')</li>

                <li>@lang('member/contracts/tdo.65', [], 'sk')</li>
            </ol>
        </li>

        <li>@lang('member/contracts/tdo.71', [], 'sk')</li>

        <li>@lang('member/contracts/tdo.72', [], 'sk')</li>

        <li>@lang('member/contracts/tdo.73', [], 'sk')</li>
    </ol>

    @if(App::getLocale() != 'sk')
        <h3 class="text-center lang">@lang('member/contracts/tdo.a11')</h3>

        <ol class="lang">
            <li>@lang('member/contracts/tdo.55')</li>

            <li>@lang('member/contracts/tdo.57')</li>

            <li>@lang('member/contracts/tdo.61')

                <ol type="a">
                    <li>@lang('member/contracts/tdo.62')</li>

                    <li>@lang('member/contracts/tdo.63')</li>

                    <li>@lang('member/contracts/tdo.64')</li>

                    <li>@lang('member/contracts/tdo.65')</li>
                </ol>
            </li>

            <li>@lang('member/contracts/tdo.71')</li>

            <li>@lang('member/contracts/tdo.72')</li>

            <li>@lang('member/contracts/tdo.73')</li>
        </ol>
    @endif

    <h3 class="text-center">@lang('member/contracts/tdo.a12', [], 'sk')</h3>

    <ol>
        <li>@lang('member/contracts/tdo.74', [], 'sk')</li>

        <li>@lang('member/contracts/tdo.75', [], 'sk')</li>

        <li>@lang('member/contracts/tdo.76', [], 'sk')</li>

        <li>@lang('member/contracts/tdo.77', [], 'sk')

            <ol type="a">
                <li>@lang('member/contracts/tdo.78')</li>

                <li>@lang('member/contracts/tdo.79')</li>
            </ol>
        </li>

        <li>@lang('member/contracts/tdo.80', [], 'sk')</li>

        <li>@lang('member/contracts/tdo.81', [], 'sk')</li>

        <li>@lang('member/contracts/tdo.82', [], 'sk')</li>

        <li>@lang('member/contracts/tdo.83', [], 'sk')</li>
    </ol>

    @if(App::getLocale() != 'sk')
        <h3 class="text-center lang">@lang('member/contracts/tdo.a12')</h3>

        <ol class="lang">
            <li>@lang('member/contracts/tdo.74')</li>

            <li>@lang('member/contracts/tdo.75')</li>

            <li>@lang('member/contracts/tdo.76')</li>

            <li>@lang('member/contracts/tdo.77')

                <ol type="a">
                    <li>@lang('member/contracts/tdo.78')</li>

                    <li>@lang('member/contracts/tdo.79')</li>
                </ol>
            </li>

            <li>@lang('member/contracts/tdo.80')</li>

            <li>@lang('member/contracts/tdo.81')</li>

            <li>@lang('member/contracts/tdo.82')</li>

            <li>@lang('member/contracts/tdo.83')</li>
        </ol>
    @endif

    <h3 class="text-center">@lang('member/contracts/tdo.a13', [], 'sk')</h3>

    <ol>
        <li>@lang('member/contracts/tdo.84', [], 'sk')</li>

        <li>@lang('member/contracts/tdo.85', [], 'sk')</li>

        <li>@lang('member/contracts/tdo.86', [], 'sk')</li>

        <li>@lang('member/contracts/tdo.87', [], 'sk')</li>

        <li>@lang('member/contracts/tdo.88', [], 'sk')</li>
    </ol>

    @if(App::getLocale() != 'sk')
        <h3 class="text-center lang">@lang('member/contracts/tdo.a13')</h3>

        <ol class="lang">
            <li>@lang('member/contracts/tdo.84')</li>

            <li>@lang('member/contracts/tdo.85')</li>

            <li>@lang('member/contracts/tdo.86')</li>

            <li>@lang('member/contracts/tdo.87')</li>

            <li>@lang('member/contracts/tdo.88')</li>
        </ol>
    @endif

    <table class="signatures">
        <tr>
            <td>
                @lang('member/contracts/tdo.ba', [], 'sk') {{ date('j.n.Y') }}<br>
                @lang('member/contracts/tdo.debtor', [], 'sk'):<br><br>

                @if(App::getLocale() != 'sk')
                    <span class="lang">
                @lang('member/contracts/tdo.ba') {{ date('j.n.Y') }}<br>
                @lang('member/contracts/tdo.debtor'):
            </span>
                @endif
            </td>

            <td>
                @lang('member/contracts/tdo.ba', [], 'sk') {{ date('j.n.Y') }}<br>
                @lang('member/contracts/tdo.creditor', [], 'sk'):<br><br>

                @if(App::getLocale() != 'sk')
                    <span class="lang">
                @lang('member/contracts/tdo.ba') {{ date('j.n.Y') }}<br>
                @lang('member/contracts/tdo.creditor'):
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