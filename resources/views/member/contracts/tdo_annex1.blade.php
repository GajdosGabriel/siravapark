@extends('member/contracts/_layout')

@section('content')
    <h2 class="text-center">@lang('member/contracts/tdo_poa.title', [], 'sk')</h2>

    <p>
        <strong>@lang('member/contracts/tdo_poa.name', [], 'sk'): {{ $objOrder->name }} {{ $objOrder->surname }}</strong><br>
        @lang('member/contracts/tdo_poa.address', [], 'sk'): <strong>{{ $objOrder->street }}</strong>, <strong>{{ $objOrder->city }}</strong>, <strong>{{ $objOrder->zip }}</strong>, <strong>{{ $objOrder->country }}</strong><br>
        @lang('member/contracts/tdo_poa.nationality', [], 'sk'): <strong>{{ $objOrder->nationality }}</strong><br>
        @lang('member/contracts/tdo_poa.next', [], 'sk')
    </p>

    <p class="text-center"><strong>@lang('member/contracts/tdo_poa.hereby', [], 'sk')</strong></p>

    <p>@lang('member/contracts/tdo_poa.law', [], 'sk')</p>

    <p>{{ config('cee.director') }}, Šírava Park, s.r.o., Gorkého 5, 81101, Bratislava, Slovak Republic, @lang('member/contracts/tdo_poa.next2', [], 'sk')</p>

    @if(App::getLocale() != 'sk')
        <h2 class="text-center lang">@lang('member/contracts/tdo_poa.title')</h2>

        <p class="lang">
            <strong>@lang('member/contracts/tdo_poa.name'): {{ $objOrder->name }} {{ $objOrder->surname }}</strong><br>
            @lang('member/contracts/tdo_poa.address'): <strong>{{ $objOrder->street }}</strong>, <strong>{{ $objOrder->city }}</strong>, <strong>{{ $objOrder->zip }}</strong>, <strong>{{ $objOrder->country }}</strong><br>
            @lang('member/contracts/tdo_poa.nationality'): <strong>{{ $objOrder->nationality }}</strong><br>
            @lang('member/contracts/tdo_poa.next')
        </p>

        <p class="text-center lang"><strong>@lang('member/contracts/tdo_poa.hereby')</strong></p>

        <p class="lang">@lang('member/contracts/tdo_poa.law')</p>

        <p class="lang">{{ config('cee.director') }}, Šírava Park, s.r.o., Gorkého 5, 81101, Bratislava, Slovak Republic, @lang('member/contracts/tdo_poa.next2')</p>
    @endif

    <p>
        <strong>@lang('member/contracts/tdo_poa.1', [], 'sk') &euro; {{ number_format($objOrder->tdo->investment, 0, ',', ' ') }}</strong>
        @lang('member/contracts/tdo_poa.2', [], 'sk') <strong>&euro; {{ number_format($objOrder->tdo->investment, 0, ',', ' ') }}</strong>
        @lang('member/contracts/tdo_poa.3', [], 'sk')
    </p>

    <p><strong>@lang('member/contracts/tdo_poa.4', [], 'sk')</strong></p>

    @if(App::getLocale() != 'sk')
        <p class="lang">
            <strong>@lang('member/contracts/tdo_poa.1') &euro; {{ number_format($objOrder->tdo->investment, 0, ',', ' ') }}</strong>
            @lang('member/contracts/tdo_poa.2') <strong>&euro; {{ number_format($objOrder->tdo->investment, 0, ',', ' ') }}</strong>
            @lang('member/contracts/tdo_poa.3')
        </p>

        <p class="lang"><strong>@lang('member/contracts/tdo_poa.4')</strong></p>
    @endif

    <p>@lang('member/contracts/tdo_poa.8', [], 'sk')</p>

    <p>@lang('member/contracts/tdo_poa.9', [], 'sk')</p>

    @if(App::getLocale() != 'sk')
        <p class="lang">@lang('member/contracts/tdo_poa.8')</p>

        <p class="lang">@lang('member/contracts/tdo_poa.9')</p>
    @endif

    <table class="signatures">
        <tr>
            <td>
                @lang('member/contracts/tdo.ba', [], 'sk') {{ date('j.n.Y') }}<br><br>

                @if(App::getLocale() != 'sk')
                    <span class="lang">
                @lang('member/contracts/tdo.ba') {{ date('j.n.Y') }}<br>
            </span>
                @endif
            </td>

            <td>
                @lang('member/contracts/tdo.ba', [], 'sk') {{ date('j.n.Y') }}<br><br>

                @if(App::getLocale() != 'sk')
                    <span class="lang">
                @lang('member/contracts/tdo.ba') {{ date('j.n.Y') }}:
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