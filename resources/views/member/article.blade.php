@extends('member/_layout')

@section('title', env('APP_NAME') . ' :: Member area - Article - ' . $objArticle->title)

@section('content')
    <div class="container articlePreview clearfix xs-mt-20 xs-mb-20">
        <span class="float-right">{{ date('j.n.Y H:i', strtotime($objArticle->created_at)) }}</span>

        <h1>{{ $objArticle->title }}</h1>

        {!! $objArticle->body !!}
    </div>
@endsection