<li class="list-group-item {{ $objActivity->user->statusClass }}">
    <a href="{{ route('member.partner.users.user', ['id' => $objActivity->user->id]) }}" class="font-weight-bold">{{ $objActivity->user->name }} {{ $objActivity->user->surname }}</a>
    :: {{ $objActivity->user->country }}

    <span class="float-right">
        @foreach($objActivity->user->roles as $objRole)
            @component('components/admin/roleBadge', ['objRole' => $objRole])@endcomponent
        @endforeach |

        {{ date('j.n. H:i:s', strtotime($objActivity->created_at)) }}
    </span>
</li>