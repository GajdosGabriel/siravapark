@extends('member/_layout')

@section('title', env('APP_NAME') . ' :: Member area - My investments')

@section('startBody')
    @if($objPep->count() == 0)
        @include('member/modals/kycModal')
    @endif
@endsection

@section('content')
    <div class="container xs-pt-20 xs-pb-20 lg-pb-50">
        <div class="row">
            <div class="col-12 col-lg-7">
                <div class="card">
                    <div class="card-body">
                        <h1>@lang('member/nav.investments') <span class="badge badge-dark">{{ $arrOrders->count() }}</span></h1>

                        <ul class="list-group users">
                            @foreach($arrOrders as $objOrder)
                                @component('components/member/order', ['objOrder' => $objOrder])@endcomponent
                            @endforeach
                        </ul>

                        <h3 class="xs-mt-20">@lang('member/invest/investments.news')</h3>

                        <ul class="list-group users xs-mb-20">
                            @foreach($arrArticles as $objArticle)
                                @component('components/member/article', ['objArticle' => $objArticle])@endcomponent
                            @endforeach
                        </ul>

                        <div class="text-center">
                            <a href="{{ route('member.sirava.news') }}" class="btn btn-secondary btn-sm">@lang('member/invest/investments.more')</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-5">
                <div class="card">
                    <div class="card-body">
                        <h3>@lang('member/invest/investments.documents')</h3>

                        <p class="lead font-montserrat xs-mb-0">@lang('member/invest/step2.govID')</p>

                        <p class="small">@lang('member/invest/step2.text3')</p>
                        @component('components/member/documentUpload', [
                            'objDocuments' => $arrDocuments->where('document_id', 1) ?? null,
                            'intID' => 1
                        ])@endcomponent

                        <hr>

                        <p class="lead font-montserrat xs-mb-0 xs-mt-20">@lang('member/invest/step2.address')</p>

                        <p class="small">@lang('member/invest/step2.text4')</p>

                        @component('components/member/documentUpload', [
                            'objDocuments' => $arrDocuments->where('document_id', 2) ?? null,
                            'intID' => 2
                        ])@endcomponent

                        <hr>

                        <p class="lead font-montserrat xs-mb-0 xs-mt-20">@lang('member/invest/step2.funds')</p>

                        <p class="font-weight-bold font-montserrat">@lang('member/invest/step2.text5')</p>

                        <p class="small">@lang('member/invest/step2.text6')</p>

                        @component('components/member/documentUpload', [
                            'objDocuments' => $arrDocuments->where('document_id', 3) ?? null,
                            'intID' => 3
                        ])@endcomponent

                        <hr>

                        <p class="lead font-montserrat xs-mb-0 xs-mt-20">@lang('member/invest/step3.transfer')</p>

                        @component('components/member/documentUpload', [
                            'objDocuments' => $arrDocuments->where('document_id', 6) ?? null,
                            'intID' => 6
                        ])@endcomponent
                    </div>
                </div>
            </div>
        </div>

        <hr class="part primary">

        <div class="text-center">
            @if($objPep->count() == 0)
                <a href="" class="btn btn-secondary" data-toggle="modal" data-target="#kycModal">@lang('member/invest/step2.pep.title')</a>
            @endif

            <a href="{{ route('member.invest') }}" class="btn btn-primary">@lang('member/invest/investments.new')</a>
        </div>
    </div>
@endsection