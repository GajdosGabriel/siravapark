<li class="list-group-item articlePreview">
    <span class="float-right">{{ date('j.n.Y H:i', strtotime($objArticle->created_at)) }}</span>

    <a href="{{ route('member.news.article', ['id' => $objArticle->id]) }}" class="lead d-block xs-mb-20">{{ $objArticle->title }}</a>

    {!! $objArticle->body !!}
</li>