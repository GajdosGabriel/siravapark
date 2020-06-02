@extends('member/contracts/_layout')

@section('content')
    <h2 class="text-center">@lang('member/contracts/tdo2.title', [], 'sk')</h2>

    <p class="text-center">
        @lang('member/contracts/tdo2.law', [], 'sk')
    </p>

    @if(App::getLocale() != 'sk')
        <h2 class="text-center lang">@lang('member/contracts/tdo2.title')</h2>

        <p class="text-center lang">
            @lang('member/contracts/tdo2.law')
        </p>
    @endif

    <table class="details">
        <tr>
            <th>@lang('member/contracts/tdo2.we', [], 'sk')</th>

            <th>@lang('member/contracts/tdo2.him', [], 'sk')</th>
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
            <th>@lang('member/contracts/tdo2.we2', [], 'sk')</th>

            <th>@lang('member/contracts/tdo2.him2', [], 'sk')</th>
        </tr>
    </table>

    <br>

    @if(App::getLocale() != 'sk')
        <table class="details lang">
            <tr>
                <th>@lang('member/contracts/tdo2.we')</th>

                <th>@lang('member/contracts/tdo2.him')</th>
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
                <th>@lang('member/contracts/tdo2.we2')</th>

                <th>@lang('member/contracts/tdo2.him2')</th>
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

    <p>@lang('member/contracts/tdo2.1', [], 'sk')</p>

    <p class="text-center">
        @lang('member/contracts/tdo2.2', [], 'sk')
    </p>

    @if(App::getLocale() != 'sk')
        <p class="lang">@lang('member/contracts/tdo2.1')</p>

        <p class="text-center lang">
            @lang('member/contracts/tdo2.2')
        </p>
    @endif

    <h3 class="text-center">@lang('member/contracts/tdo2.a1', [], 'sk')</h3>

    <ol>
        <li>@lang('member/contracts/tdo2.3', [], 'sk')</li>

        <li>@lang('member/contracts/tdo2.4', ['shares' => $objOrder->tdo->shares], 'sk')</li>

        <li>@lang('member/contracts/tdo2.5', [], 'sk')</li>
    </ol>

    @if(App::getLocale() != 'sk')
        <h3 class="text-center lang">@lang('member/contracts/tdo2.a1')</h3>

        <ol class="lang">
            <li>@lang('member/contracts/tdo2.3')</li>

            <li>@lang('member/contracts/tdo2.4', ['shares' => $objOrder->tdo->shares])</li>

            <li>@lang('member/contracts/tdo2.5')</li>
        </ol>
    @endif

    <h3 class="text-center">@lang('member/contracts/tdo2.a2', [], 'sk')</h3>

    <ol>
        <li>@lang('member/contracts/tdo2.6', [], 'sk')</li>

        <li>@lang('member/contracts/tdo2.7', ['shares' => $objOrder->tdo->shares, 'investment' => number_format($objOrder->tdo->investment, 0, ',', ' ')], 'sk')</li>

        <li>@lang('member/contracts/tdo2.8', ['investment' => number_format($objOrder->tdo->investment, 0, ',', ' ')], 'sk')</li>

        <li>@lang('member/contracts/tdo2.9', [], 'sk')

            <ol type="a">
                <li>@lang('member/contracts/tdo2.10', ['shares' => $objOrder->tdo->shares], 'sk')</li>

                <li>@lang('member/contracts/tdo2.11', ['shares' => $objOrder->tdo->shares], 'sk')</li>
            </ol>
        </li>
    </ol>

    @if(App::getLocale() != 'sk')
        <h3 class="text-center lang">@lang('member/contracts/tdo2.a2')</h3>

        <ol class="lang">
            <li>@lang('member/contracts/tdo2.6')</li>

            <li>@lang('member/contracts/tdo2.7', ['shares' => $objOrder->tdo->shares, 'investment' => number_format($objOrder->tdo->investment, 0, ',', ' ')])</li>

            <li>@lang('member/contracts/tdo2.8', ['investment' => number_format($objOrder->tdo->investment, 0, ',', ' ')])</li>

            <li>@lang('member/contracts/tdo2.9')

                <ol type="a">
                    <li>@lang('member/contracts/tdo2.10', ['shares' => $objOrder->tdo->shares])</li>

                    <li>@lang('member/contracts/tdo2.11', ['shares' => $objOrder->tdo->shares])</li>
                </ol>
            </li>
        </ol>
    @endif

    <h3 class="text-center">@lang('member/contracts/tdo2.a3', [], 'sk')</h3>

    <ol>
        <li>@lang('member/contracts/tdo2.12', [], 'sk')</li>

        <li>@lang('member/contracts/tdo2.13', [], 'sk')</li>

        <li>@lang('member/contracts/tdo2.15', [], 'sk')</li>
    </ol>

    @if(App::getLocale() != 'sk')
        <h3 class="text-center lang">@lang('member/contracts/tdo2.a3')</h3>

        <ol class="lang">
            <li>@lang('member/contracts/tdo2.12')</li>

            <li>@lang('member/contracts/tdo2.13')</li>

            <li>@lang('member/contracts/tdo2.15')</li>
        </ol>
    @endif

    <hr>

    <h2 class="text-center">@lang('member/contracts/tdo2.title2', [], 'sk')</h2>

    <p class="text-center">
        @lang('member/contracts/tdo2.law2', [], 'sk')
    </p>

    @if(App::getLocale() != 'sk')
        <h2 class="text-center lang">@lang('member/contracts/tdo2.title2')</h2>

        <p class="text-center lang">
            @lang('member/contracts/tdo2.law2')
        </p>
    @endif

    <table class="details">
        <tr>
            <th>@lang('member/contracts/tdo2.we3', [], 'sk')</th>

            <th>@lang('member/contracts/tdo2.him3', [], 'sk')</th>
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
            <th>@lang('member/contracts/tdo2.we4', [], 'sk')</th>

            <th>@lang('member/contracts/tdo2.him4', [], 'sk')</th>
        </tr>
    </table>

    <br>

    @if(App::getLocale() != 'sk')
        <table class="details lang">
            <tr>
                <th>@lang('member/contracts/tdo2.we3')</th>

                <th>@lang('member/contracts/tdo2.him3')</th>
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
                <th>@lang('member/contracts/tdo2.we4')</th>

                <th>@lang('member/contracts/tdo2.him4')</th>
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

    <p>@lang('member/contracts/tdo2.1', [], 'sk')</p>

    <p class="text-center">
        @lang('member/contracts/tdo2.16', [], 'sk')
    </p>

    @if(App::getLocale() != 'sk')
        <p class="lang">@lang('member/contracts/tdo2.1')</p>

        <p class="text-center lang">
            @lang('member/contracts/tdo2.16')
        </p>
    @endif

    <h3 class="text-center">@lang('member/contracts/tdo2.aa1', [], 'sk')</h3>

    <ol>
        <li>@lang('member/contracts/tdo2.17', [], 'sk')</li>

        <li>@lang('member/contracts/tdo2.18', ['shares' => $objOrder->tdo->shares, 'investment' => number_format($objOrder->tdo->investment, 0, ',', ' ')], 'sk')</li>

        <li>@lang('member/contracts/tdo2.19', [], 'sk')</li>
    </ol>

    @if(App::getLocale() != 'sk')
        <h3 class="text-center lang">@lang('member/contracts/tdo2.aa1')</h3>

        <ol class="lang">
            <li>@lang('member/contracts/tdo2.17')</li>

            <li>@lang('member/contracts/tdo2.18', ['shares' => $objOrder->tdo->shares, 'investment' => number_format($objOrder->tdo->investment, 0, ',', ' ')])</li>

            <li>@lang('member/contracts/tdo2.19')</li>
        </ol>
    @endif

    <h3 class="text-center">@lang('member/contracts/tdo2.aa2', [], 'sk')</h3>

    <ol>
        <li>@lang('member/contracts/tdo2.20', [], 'sk')</li>
    </ol>

    @if(App::getLocale() != 'sk')
        <h3 class="text-center lang">@lang('member/contracts/tdo2.aa2')</h3>

        <ol class="lang">
            <li>@lang('member/contracts/tdo2.20')</li>
        </ol>
    @endif

    <h3 class="text-center">@lang('member/contracts/tdo2.aa3', [], 'sk')</h3>

    <ol>
        <li>@lang('member/contracts/tdo2.21', [], 'sk')</li>

        <li>@lang('member/contracts/tdo2.22', [], 'sk')</li>

        <li>@lang('member/contracts/tdo2.23', [], 'sk')</li>

        <li>@lang('member/contracts/tdo2.24', [], 'sk')</li>

        <li>@lang('member/contracts/tdo2.25', ['shares' => $objOrder->tdo->shares], 'sk')</li>
    </ol>

    @if(App::getLocale() != 'sk')
        <h3 class="text-center lang">@lang('member/contracts/tdo2.aa3')</h3>

        <ol class="lang">
            <li>@lang('member/contracts/tdo2.21')</li>

            <li>@lang('member/contracts/tdo2.22')</li>

            <li>@lang('member/contracts/tdo2.23')</li>

            <li>@lang('member/contracts/tdo2.24')</li>

            <li>@lang('member/contracts/tdo2.25', ['shares' => $objOrder->tdo->shares])</li>
        </ol>
    @endif

    <h3 class="text-center">@lang('member/contracts/tdo2.aa4', [], 'sk')</h3>

    <ol>
        <li>@lang('member/contracts/tdo2.26', [], 'sk')</li>

        <li>@lang('member/contracts/tdo2.27', [], 'sk')</li>

        <li>@lang('member/contracts/tdo2.28', [], 'sk')</li>

        <li>@lang('member/contracts/tdo2.29', ['date' => date('j.n.Y')], 'sk')</li>
    </ol>

    @if(App::getLocale() != 'sk')
        <h3 class="text-center lang">@lang('member/contracts/tdo2.aa4')</h3>

        <ol class="lang">
            <li>@lang('member/contracts/tdo2.26')</li>

            <li>@lang('member/contracts/tdo2.27')</li>

            <li>@lang('member/contracts/tdo2.28')</li>

            <li>@lang('member/contracts/tdo2.29', ['date' => date('j.n.Y')])</li>
        </ol>
    @endif

    <h3 class="text-center">@lang('member/contracts/tdo2.aa5', [], 'sk')</h3>

    <ol>
        <li>@lang('member/contracts/tdo2.30', [], 'sk')</li>

        <li>@lang('member/contracts/tdo2.31', [], 'sk')</li>
    </ol>

    @if(App::getLocale() != 'sk')
        <h3 class="text-center lang">@lang('member/contracts/tdo2.aa5')</h3>

        <ol class="lang">
            <li>@lang('member/contracts/tdo2.30')</li>

            <li>@lang('member/contracts/tdo2.31')</li>
        </ol>
    @endif

    <h3 class="text-center">@lang('member/contracts/tdo2.aa6', [], 'sk')</h3>

    <ol>
        <li>@lang('member/contracts/tdo2.32', [], 'sk')</li>

        <li>@lang('member/contracts/tdo2.33', [], 'sk')</li>

        <li>@lang('member/contracts/tdo2.34', [], 'sk')</li>

        <li>@lang('member/contracts/tdo2.35', [], 'sk')</li>

        <li>@lang('member/contracts/tdo2.36', [], 'sk')</li>

        <li>@lang('member/contracts/tdo2.37', [], 'sk')</li>

        <li>@lang('member/contracts/tdo2.38', [], 'sk')</li>

        <li>@lang('member/contracts/tdo2.39', [], 'sk')</li>

        <li>@lang('member/contracts/tdo2.40', [], 'sk')</li>
    </ol>

    @if(App::getLocale() != 'sk')
        <h3 class="text-center lang">@lang('member/contracts/tdo2.aa6')</h3>

        <ol class="lang">
            <li>@lang('member/contracts/tdo2.32')</li>

            <li>@lang('member/contracts/tdo2.33')</li>

            <li>@lang('member/contracts/tdo2.34')</li>

            <li>@lang('member/contracts/tdo2.35')</li>

            <li>@lang('member/contracts/tdo2.36')</li>

            <li>@lang('member/contracts/tdo2.37')</li>

            <li>@lang('member/contracts/tdo2.38')</li>

            <li>@lang('member/contracts/tdo2.39')</li>

            <li>@lang('member/contracts/tdo2.40')</li>
        </ol>
    @endif

    <hr>

    <h3 class="text-center">@lang('member/contracts/tdo2.a4', [], 'sk')</h3>

    <ol>
        <li>@lang('member/contracts/tdo2.41', [], 'sk')</li>

        <li>@lang('member/contracts/tdo2.42', [], 'sk')</li>

        <li>@lang('member/contracts/tdo2.43', [], 'sk')</li>

        <li>@lang('member/contracts/tdo2.44', [], 'sk')</li>

        <li>@lang('member/contracts/tdo2.45', [], 'sk')</li>

        <li>@lang('member/contracts/tdo2.46', [], 'sk')</li>

        <li>@lang('member/contracts/tdo2.47', [], 'sk')</li>

        <li>@lang('member/contracts/tdo2.48', [], 'sk')</li>

        <li>@lang('member/contracts/tdo2.49', [], 'sk')</li>
    </ol>

    @if(App::getLocale() != 'sk')
        <h3 class="text-center lang">@lang('member/contracts/tdo2.a4')</h3>

        <ol class="lang">
            <li>@lang('member/contracts/tdo2.41')</li>

            <li>@lang('member/contracts/tdo2.42')</li>

            <li>@lang('member/contracts/tdo2.43')</li>

            <li>@lang('member/contracts/tdo2.44')</li>

            <li>@lang('member/contracts/tdo2.45')</li>

            <li>@lang('member/contracts/tdo2.46')</li>

            <li>@lang('member/contracts/tdo2.47')</li>

            <li>@lang('member/contracts/tdo2.48')</li>

            <li>@lang('member/contracts/tdo2.49')</li>
        </ol>
    @endif

    <table class="signatures">
        <tr>
            <td>
                @lang('member/contracts/tdo.ba', [], 'sk') {{ date('j.n.Y') }}<br>
                @lang('member/contracts/tdo2.we', [], 'sk'):<br><br>

                @if(App::getLocale() != 'sk')
                    <span class="lang">
                @lang('member/contracts/tdo.ba') {{ date('j.n.Y') }}<br>
                @lang('member/contracts/tdo2.we'):
            </span>
                @endif
            </td>

            <td>
                @lang('member/contracts/tdo.ba', [], 'sk') {{ date('j.n.Y') }}<br>
                @lang('member/contracts/tdo2.him', [], 'sk'):<br><br>

                @if(App::getLocale() != 'sk')
                    <span class="lang">
                @lang('member/contracts/tdo.ba') {{ date('j.n.Y') }}<br>
                @lang('member/contracts/tdo2.him'):
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