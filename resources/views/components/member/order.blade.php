<li class="list-group-item">
    <span class="float-right">
        {{ date('j.n. H:i', strtotime($objOrder->created_at)) }}
    </span>

    <a href="{{ route('member.orders.order', ['id' => $objOrder->id]) }}" class="font-weight-bold">
        @if($objOrder->tdo)@lang('member/invest/step1.tdo')
        @elseif($objOrder->sp)@lang('member/invest/step1.sp')
        @elseif($objOrder->pr)@lang('member/invest/step1.pr')
        @endif
    </a>
    @if($objOrder->tdo)
        | {{ $objOrder->tdo->project->name }}<br>
        @lang('member/invest/order.investment') &euro; {{ number_format($objOrder->tdo->project->total_investment, 0, '', ' ') }} | @lang('member/invest/order.yourInvestment') <strong>&euro; {{ number_format($objOrder->tdo->investment, 0, '', ' ') }}</strong>
    @elseif($objOrder->sp)
        | {{ $objOrder->sp->project->name }}<br>
        @lang('member/invest/order.investment') &euro; {{ number_format($objOrder->sp->project->total_investment, 0, '', ' ') }} | @lang('member/invest/order.yourInvestment') <strong>&euro; {{ number_format($objOrder->sp->investment, 0, '', ' ') }}</strong>
    @elseif($objOrder->pr)
        | <strong>{{ $objOrder->pr->number }}</strong> @lang('member/invest/order.notes') | {{ $objOrder->pr->duration }} @lang('member/invest/order.years2')
    @endif
</li>