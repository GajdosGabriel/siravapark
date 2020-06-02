<li class="list-group-item{{ $objComment->note == 1 ? ' danger' : '' }}">
    {{--<span class="float-right">--}}
        {{--<a href="{{ route('admin.comments.edit', ['id' => $objComment->id]) }}"><i class="fa fa-edit"></i></a>--}}

        {{--<a href="{{ route('admin.comments.delete', ['id' => $objComment->id]) }}" class="btn-delete text-danger xs-ml-10"><i class="fa fa-trash"></i></a>--}}
    {{--</span>--}}

    <p class="xs-mb-0">{{ date('j.n. H:i', strtotime($objComment->created_at)) }} :: {{ $objComment->text }}</p>
</li>