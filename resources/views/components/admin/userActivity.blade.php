<li class="list-group-item
    {{ $objActivity->activity_id == 1 ? ' success' : '' }}
    {{ $objActivity->activity_id == 2 ? ' danger' : '' }}">
    {{ $objActivity->activity->name }}

    <span class="float-right">{{ date('j.n.Y H:i', strtotime($objActivity->created_at)) }}</span>
</li>