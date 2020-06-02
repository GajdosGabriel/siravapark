@extends('member/contracts/_layout')

@section('content')
    <h2 class="text-center">@lang('member/contracts/sp.title', [], 'sk')</h2>

    <p class="text-center">
        @lang('member/contracts/sp.law', [], 'sk')
    </p>

    @if(App::getLocale() != 'sk')
        <h2 class="text-center lang">@lang('member/contracts/sp.title')</h2>

        <p class="text-center lang">
            @lang('member/contracts/sp.law')
        </p>
    @endif

    <table class="details">
        <tr>
            <th>@lang('member/contracts/sp.en', [], 'sk')</th>

            <th>@lang('member/contracts/sp.sp', [], 'sk')</th>
        </tr>

        <tr>
            <td>
                <strong>Šírava Development s.r.o.</strong><br>
                @lang('form.companyID', [], 'sk'): 52 112 985<br>
                Gorkého 5, Bratislava, 81101, Slovenská Republika<br><br>
                @lang('member/contracts/sp.representedBy', ['director' => config('cee.director')], 'sk')<br><br>
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
            <th>@lang('member/contracts/sp.en2', [], 'sk')</th>

            <th>@lang('member/contracts/sp.sp2', [], 'sk')</th>
        </tr>
    </table>

    <br>

    @if(App::getLocale() != 'sk')
        <table class="details lang">
            <tr>
                <th>@lang('member/contracts/sp.en')</th>

                <th>@lang('member/contracts/sp.sp')</th>
            </tr>

            <tr>
                <td>
                    <strong>Šírava Development s.r.o.</strong><br>
                    @lang('form.companyID'): 52 112 985<br>
                    Gorkého 5, Bratislava, 81101, Slovenská Republika<br><br>
                    @lang('member/contracts/sp.representedBy', ['director' => config('cee.director')])<br><br>
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
                <th>@lang('member/contracts/sp.en2')</th>

                <th>@lang('member/contracts/sp.sp2')</th>
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
                <strong>{{ $objOrder->sp->project->name }}</strong>
            </td>
        </tr>

        <tr>
            <td>@lang('member/contracts/tdo.location', [], 'sk')</td>

            <td>
                <strong>{{ $objOrder->sp->project->location }}</strong>
            </td>
        </tr>

        <tr>
            <td>@lang('member/contracts/tdo.2', [], 'sk')</td>

            <td>
                <strong>{{ $objOrder->sp->shares }}%</strong><br>
                @lang('member/contracts/tdo.4', [], 'sk')
            </td>
        </tr>

        <tr>
            <td>@lang('member/contracts/tdo.3', [], 'sk')</td>

            <td>
                &euro; <strong>{{ number_format($objOrder->sp->investment, 0, ',', ' ') }}</strong><br>
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
                    <strong>{{ $objOrder->sp->project->name }}</strong>
                </td>
            </tr>

            <tr>
                <td>@lang('member/contracts/tdo.location')</td>

                <td>
                    <strong>{{ $objOrder->sp->project->location }}</strong>
                </td>
            </tr>

            <tr>
                <td>@lang('member/contracts/tdo.2')</td>

                <td>
                    <strong>{{ $objOrder->sp->shares }}%</strong><br>
                    @lang('member/contracts/tdo.4')
                </td>
            </tr>

            <tr>
                <td>@lang('member/contracts/tdo.3')</td>

                <td>
                    &euro; <strong>{{ number_format($objOrder->sp->investment, 0, ',', ' ') }}</strong><br>
                    @lang('member/contracts/tdo.5')
                </td>
            </tr>
        </table>
    @endif

    <br>

    <h3 class="text-center">@lang('member/contracts/sp.a1', [], 'sk')</h3>

    <p>@lang('member/contracts/sp.1', [], 'sk')</p>

    @if(App::getLocale() != 'sk')
        <h3 class="text-center lang">@lang('member/contracts/sp.a1')</h3>

        <p class="lang">@lang('member/contracts/sp.1')</p>
    @endif

    <h3 class="text-center">@lang('member/contracts/sp.a2', [], 'sk')</h3>

    <ol>
        <li>@lang('member/contracts/sp.2', [], 'sk')</li>

        <li>@lang('member/contracts/sp.3', ['amount' => $objOrder->sp->investment], 'sk')</li>

        <li>@lang('member/contracts/sp.4', [], 'sk')</li>

        <li>@lang('member/contracts/sp.5', [], 'sk')</li>
    </ol>

    @if(App::getLocale() != 'sk')
        <h3 class="text-center lang">@lang('member/contracts/sp.a2')</h3>

        <ol class="lang">
            <li>@lang('member/contracts/sp.2')</li>

            <li>@lang('member/contracts/sp.3', ['amount' => $objOrder->sp->investment])</li>

            <li>@lang('member/contracts/sp.4')</li>

            <li>@lang('member/contracts/sp.5')</li>
        </ol>
    @endif

    <h3 class="text-center">@lang('member/contracts/sp.a3', [], 'sk')</h3>

    <ol>
        <li>@lang('member/contracts/sp.7', ['shares' => $objOrder->sp->shares], 'sk')</li>

        <li>@lang('member/contracts/sp.8', [], 'sk')</li>

        <li>@lang('member/contracts/sp.9', [], 'sk')</li>

        <li>@lang('member/contracts/sp.10', [], 'sk')</li>

        <li>@lang('member/contracts/sp.11', [], 'sk')</li>

        <li>@lang('member/contracts/sp.12', [], 'sk')</li>

        <li>@lang('member/contracts/sp.13', [], 'sk')</li>

        <li>@lang('member/contracts/sp.14', [], 'sk')</li>
    </ol>

    @if(App::getLocale() != 'sk')
        <h3 class="text-center lang">@lang('member/contracts/sp.a3')</h3>

        <ol class="lang">
            <li>@lang('member/contracts/sp.7', ['shares' => $objOrder->sp->shares])</li>

            <li>@lang('member/contracts/sp.8')</li>

            <li>@lang('member/contracts/sp.9')</li>

            <li>@lang('member/contracts/sp.10')</li>

            <li>@lang('member/contracts/sp.11')</li>

            <li>@lang('member/contracts/sp.12')</li>

            <li>@lang('member/contracts/sp.13')</li>

            <li>@lang('member/contracts/sp.14')</li>
        </ol>
    @endif

    <h3 class="text-center">@lang('member/contracts/sp.a4', [], 'sk')</h3>

    <ol>
        <li>@lang('member/contracts/sp.15', [], 'sk')</li>

        <li>@lang('member/contracts/sp.16', [], 'sk')</li>

        <li>@lang('member/contracts/sp.17', [], 'sk')</li>

        <li>@lang('member/contracts/sp.18', [], 'sk')</li>
    </ol>

    @if(App::getLocale() != 'sk')
        <h3 class="text-center lang">@lang('member/contracts/sp.a4')</h3>

        <ol class="lang">
            <li>@lang('member/contracts/sp.15')</li>

            <li>@lang('member/contracts/sp.16')</li>

            <li>@lang('member/contracts/sp.17')</li>

            <li>@lang('member/contracts/sp.18')</li>
        </ol>
    @endif

    <h3 class="text-center">@lang('member/contracts/sp.a5', [], 'sk')</h3>

    <ol>
        <li>@lang('member/contracts/sp.19', [], 'sk')</li>

        <li>@lang('member/contracts/sp.20', [], 'sk')</li>
    </ol>

    @if(App::getLocale() != 'sk')
        <h3 class="text-center lang">@lang('member/contracts/sp.a5')</h3>

        <ol class="lang">
            <li>@lang('member/contracts/sp.19')</li>

            <li>@lang('member/contracts/sp.20')</li>
        </ol>
    @endif

    <h3 class="text-center">@lang('member/contracts/sp.a6', [], 'sk')</h3>

    <ol>
        <li>@lang('member/contracts/sp.21', [], 'sk')</li>

        <li>@lang('member/contracts/sp.22', [], 'sk')

            <ol type="a">
                <li>@lang('member/contracts/sp.23', [], 'sk')</li>

                <li>@lang('member/contracts/sp.24', [], 'sk')</li>

                <li>@lang('member/contracts/sp.25', [], 'sk')</li>

                <li>@lang('member/contracts/sp.26', [], 'sk')</li>

                <li>@lang('member/contracts/sp.27', [], 'sk')</li>
            </ol>
        </li>

        <li>@lang('member/contracts/sp.28', [], 'sk')</li>

        <li>@lang('member/contracts/sp.29', [], 'sk')</li>
    </ol>

    @if(App::getLocale() != 'sk')
        <h3 class="text-center lang">@lang('member/contracts/sp.a6')</h3>

        <ol class="lang">
            <li>@lang('member/contracts/sp.21')</li>

            <li>@lang('member/contracts/sp.22')

                <ol type="a">
                    <li>@lang('member/contracts/sp.23')</li>

                    <li>@lang('member/contracts/sp.24')</li>

                    <li>@lang('member/contracts/sp.25')</li>

                    <li>@lang('member/contracts/sp.26')</li>

                    <li>@lang('member/contracts/sp.27')</li>
                </ol>
            </li>

            <li>@lang('member/contracts/sp.28')</li>

            <li>@lang('member/contracts/sp.29')</li>
        </ol>
    @endif

    <h3 class="text-center">@lang('member/contracts/sp.a7', [], 'sk')</h3>

    <ol>
        <li>@lang('member/contracts/sp.32', [], 'sk')</li>

        <li>@lang('member/contracts/sp.33', [], 'sk')</li>

        <li>@lang('member/contracts/sp.34', [], 'sk')</li>

        <li>@lang('member/contracts/sp.35', [], 'sk')</li>

        <li>@lang('member/contracts/sp.36', [], 'sk')</li>
    </ol>

    @if(App::getLocale() != 'sk')
        <h3 class="text-center lang">@lang('member/contracts/sp.a7')</h3>

        <ol class="lang">
            <li>@lang('member/contracts/sp.32')</li>

            <li>@lang('member/contracts/sp.33')</li>

            <li>@lang('member/contracts/sp.34')</li>

            <li>@lang('member/contracts/sp.35')</li>

            <li>@lang('member/contracts/sp.36')</li>
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