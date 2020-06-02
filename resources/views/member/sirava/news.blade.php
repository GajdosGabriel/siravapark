@extends('member/_layout')

@section('title', env('APP_NAME') . ' :: Member area - News room')

@section('content')
    <div class="container-fluid project-header">
        <img src="{{ asset('images/member/hot/flldp/25.jpg') }}" class="img-fluid mx-auto" alt="">

        <div class="name">
            <div class="container">
                <h1>@lang('member/news.title')</h1>
            </div>
        </div>
    </div>

    <div class="container xs-pt-20 xs-pb-20 lg-pb-50">
        <div class="card">
            <div class="card-body">
                <ul class="list-group users xs-mb-20">
                    @foreach($arrArticles as $objArticle)
                        @component('components/member/article', ['objArticle' => $objArticle])@endcomponent
                    @endforeach
                </ul>

                <div class="pagination-center">
                    {{ $arrArticles->links() }}
                </div>

                <div class="text-center xs-mt-20">
                    <a href="{{ route('member.home') }}" class="btn btn-secondary">@lang('public/nav.home')</a>

                    <a href="https://www.einpresswire.com/newsroom/cee_real_estate_group_newsroom/?n=2" class="btn btn-primary" target="_blank">@lang('member/news.press')</a>
                </div>
            </div>
        </div>
    </div>
@endsection