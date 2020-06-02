<li class="list-group-item {{ $objUser->statusClass }}">
    <span class="float-right">
        @foreach($objUser->roles as $objRole)
            @component('components/admin/roleBadge', ['objRole' => $objRole])@endcomponent
        @endforeach |

        {{ date('j.n. H:i', strtotime($objUser->created_at)) }}
    </span>

    <a href="{{ route('member.partner.users.user', ['id' => $objUser->id]) }}" class="font-weight-bold">{{ $objUser->name }} {{ $objUser->surname }}</a>
    :: {{ $objUser->country }}

    <br>

    <a href="mailto:{{ $objUser->email }}">{{ $objUser->email }}</a>,
    <a href="tel:+{{ $objUser->phone_code }}{{ $objUser->phone }}">+{{ $objUser->phone_code }} {{ $objUser->phone }}</a>
</li>