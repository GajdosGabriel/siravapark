<li class="list-group-item {{ $objUser->statusClass }}">
    <a href="
    {{ route('admin.users.user', ['id' => $objUser->id]) }}
            " class="font-weight-bold">{{ $objUser->name }} {{ $objUser->surname }}</a>
    | {{ $objUser->country }} |
    <a href="mailto:{{ $objUser->email }}"><i class="fas fa-envelope"></i></a> |
    <a href="tel:+{{ $objUser->phone_code }}{{ $objUser->phone }}"><i class="fas fa-phone-square"></i></a>

    <span class="float-right" title="{{ (date('Y-m-d', strtotime($objUser->created_at)) == date('Y-m-d')) ? date('H:i', strtotime($objUser->created_at)) : date('j.n. H:i', strtotime($objUser->created_at)) }}">
        @foreach($objUser->roles as $objRole)
            @component('components/admin/roleBadge', ['objRole' => $objRole])@endcomponent
        @endforeach |

        @if($objUser->referral != null)<a href="
{{--        {{ route('admin.users.user', ['id' => $objUser->referral->id]) }}--}}
                    " class="badge badge-dark" data-toggle="tooltip" data-placement="top" title="Referral">{{ $objUser->referral->name }} {{ $objUser->referral->surname }}</a> |@endif

{{--        {{ (date('Y-m-d', strtotime($objUser->created_at)) == date('Y-m-d')) ? date('H:i', strtotime($objUser->created_at)) : date('j.n. H:i', strtotime($objUser->created_at)) }}--}}
    {{ $objUser->created_at->diffForHumans() }}
    </span>

    @if($objUser->note)<p class="xs-mt-10 xs-mb-0"><i class="far fa-sticky-note color_red"></i> {{ $objUser->note->text }}</p>@endif
</li>