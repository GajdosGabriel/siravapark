@extends('member/_layout')

@section('title', env('APP_NAME') . ' :: Member area / Partner program - Facebook banners')

@section('content')
    <div class="container xs-pt-20 xs-pb-20">
        <a href="{{ route('member.partner.marketing-materials.home') }}"><- @lang('member/partner/marketing.back')</a>

        <h1 class="color_primary xs-mt-20">@lang('member/partner/marketing.html')</h1>

        <h3 class="xs-mt-20">Šírava 2</h3>

        <ul class="nav nav-tabs" id="myTab2" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#970x250b" role="tab">970x250</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#160x600b" role="tab">160x600</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#300x250b" role="tab">300x250</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#300x600b" role="tab">300x600</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#320x50b" role="tab">320x50</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#728x90b" role="tab">728x90</a>
            </li>
        </ul>

        <div class="tab-content" id="myTabContent2">
            <div class="tab-pane fade show active" id="970x250b" role="tabpanel">
                @if(App::getLocale() == 'sk')
                    <iframe src="https://banners.cee-realestate.com/sirava2/sk/970x250/index.php" width="970" height="250" class="d-block mx-auto xs-mb-20" frameborder="0"></iframe>

                    <p class="xs-mt-20">HTML code:</p>

                    <pre class="url">{{ '<iframe src="https://banners.cee-realestate.com/sirava2/sk/970x250/index.php?ref=' }}{{ Auth::user()->id }}{{ '" width="970" height="250" frameborder="0"></iframe>' }}</pre>
                @else
                    <iframe src="https://banners.cee-realestate.com/sirava2/970x250/index.php" width="970" height="250" class="d-block mx-auto xs-mb-20" frameborder="0"></iframe>

                    <p class="xs-mt-20">HTML code:</p>

                    <pre class="url">{{ '<iframe src="https://banners.cee-realestate.com/sirava2/970x250/index.php?ref=' }}{{ Auth::user()->id }}{{ '" width="970" height="250" frameborder="0"></iframe>' }}</pre>
                @endif
            </div>

            <div class="tab-pane fade" id="160x600b" role="tabpanel">
                @if(App::getLocale() == 'sk')
                    <iframe src="https://banners.cee-realestate.com/sirava2/sk/160x600/index.php" width="160" height="600" class="d-block mx-auto xs-mb-20" frameborder="0"></iframe>

                    <p class="xs-mt-20">HTML code:</p>

                    <pre class="url">{{ '<iframe src="https://banners.cee-realestate.com/sirava2/sk/160x600/index.php?ref=' }}{{ Auth::user()->id }}{{ '" width="160" height="600" frameborder="0"></iframe>' }}</pre>

                @else
                    <iframe src="https://banners.cee-realestate.com/sirava2/160x600/index.php" width="160" height="600" class="d-block mx-auto xs-mb-20" frameborder="0"></iframe>

                    <p class="xs-mt-20">HTML code:</p>

                    <pre class="url">{{ '<iframe src="https://banners.cee-realestate.com/sirava2/160x600/index.php?ref=' }}{{ Auth::user()->id }}{{ '" width="160" height="600" frameborder="0"></iframe>' }}</pre>
                @endif
            </div>

            <div class="tab-pane fade" id="300x250b" role="tabpanel">
                @if(App::getLocale() == 'sk')
                    <iframe src="https://banners.cee-realestate.com/sirava2/sk/300x250/index.php" width="300" height="250" class="d-block mx-auto xs-mb-20" frameborder="0"></iframe>

                    <p class="xs-mt-20">HTML code:</p>

                    <pre class="url">{{ '<iframe src="https://banners.cee-realestate.com/sirava2/sk/300x250/index.php?ref=' }}{{ Auth::user()->id }}{{ '" width="300" height="250" frameborder="0"></iframe>' }}</pre>
                @else
                    <iframe src="https://banners.cee-realestate.com/sirava2/300x250/index.php" width="300" height="250" class="d-block mx-auto xs-mb-20" frameborder="0"></iframe>

                    <p class="xs-mt-20">HTML code:</p>

                    <pre class="url">{{ '<iframe src="https://banners.cee-realestate.com/sirava2/300x250/index.php?ref=' }}{{ Auth::user()->id }}{{ '" width="300" height="250" frameborder="0"></iframe>' }}</pre>
                @endif
            </div>

            <div class="tab-pane fade" id="300x600b" role="tabpanel">
                @if(App::getLocale() == 'sk')
                    <iframe src="https://banners.cee-realestate.com/sirava2/sk/300x600/index.php" width="300" height="600" class="d-block mx-auto xs-mb-20" frameborder="0"></iframe>

                    <p class="xs-mt-20">HTML code:</p>

                    <pre class="url">{{ '<iframe src="https://banners.cee-realestate.com/sirava2/sk/300x600/index.php?ref=' }}{{ Auth::user()->id }}{{ '" width="300" height="600" frameborder="0"></iframe>' }}</pre>
                @else
                    <iframe src="https://banners.cee-realestate.com/sirava2/300x600/index.php" width="300" height="600" class="d-block mx-auto xs-mb-20" frameborder="0"></iframe>

                    <p class="xs-mt-20">HTML code:</p>

                    <pre class="url">{{ '<iframe src="https://banners.cee-realestate.com/sirava2/300x600/index.php?ref=' }}{{ Auth::user()->id }}{{ '" width="300" height="600" frameborder="0"></iframe>' }}</pre>
                @endif
            </div>

            <div class="tab-pane fade" id="320x50b" role="tabpanel">
                @if(App::getLocale() == 'sk')
                    <iframe src="https://banners.cee-realestate.com/sirava2/sk/320x50/index.php" width="320" height="50" class="d-block mx-auto xs-mb-20" frameborder="0"></iframe>

                    <p class="xs-mt-20">HTML code:</p>

                    <pre class="url">{{ '<iframe src="https://banners.cee-realestate.com/sirava2/sk/320x50/index.php?ref=' }}{{ Auth::user()->id }}{{ '" width="320" height="50" frameborder="0"></iframe>' }}</pre>
                @else
                    <iframe src="https://banners.cee-realestate.com/sirava2/320x50/index.php" width="320" height="50" class="d-block mx-auto xs-mb-20" frameborder="0"></iframe>

                    <p class="xs-mt-20">HTML code:</p>

                    <pre class="url">{{ '<iframe src="https://banners.cee-realestate.com/sirava2/320x50/index.php?ref=' }}{{ Auth::user()->id }}{{ '" width="320" height="50" frameborder="0"></iframe>' }}</pre>
                @endif
            </div>

            <div class="tab-pane fade" id="728x90b" role="tabpanel">
                @if(App::getLocale() == 'sk')
                    <iframe src="https://banners.cee-realestate.com/sirava2/sk/728x90/index.php" width="728" height="90" class="d-block mx-auto xs-mb-20" frameborder="0"></iframe>

                    <p class="xs-mt-20">HTML code:</p>

                    <pre class="url">{{ '<iframe src="https://banners.cee-realestate.com/sirava2/sk/728x90/index.php?ref=' }}{{ Auth::user()->id }}{{ '" width="728" height="90" frameborder="0"></iframe>' }}</pre>
                @else
                    <iframe src="https://banners.cee-realestate.com/sirava2/728x90/index.php" width="728" height="90" class="d-block mx-auto xs-mb-20" frameborder="0"></iframe>

                    <p class="xs-mt-20">HTML code:</p>

                    <pre class="url">{{ '<iframe src="https://banners.cee-realestate.com/sirava2/728x90/index.php?ref=' }}{{ Auth::user()->id }}{{ '" width="728" height="90" frameborder="0"></iframe>' }}</pre>
                @endif
            </div>
        </div>

        <hr class="part primary">

        <h3>Šírava</h3>

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#970x250" role="tab">970x250</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#160x600" role="tab">160x600</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#300x250" role="tab">300x250</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#300x600" role="tab">300x600</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#320x50" role="tab">320x50</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#728x90" role="tab">728x90</a>
            </li>
        </ul>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="970x250" role="tabpanel">
                @if(App::getLocale() == 'sk')
                    <iframe src="https://banners.cee-realestate.com/sirava/sk/970x250/index.php" width="970" height="250" class="d-block mx-auto xs-mb-20" frameborder="0"></iframe>

                    <p class="xs-mt-20">HTML code:</p>

                    <pre class="url">{{ '<iframe src="https://banners.cee-realestate.com/sirava/sk/970x250/index.php?ref=' }}{{ Auth::user()->id }}{{ '" width="970" height="250" frameborder="0"></iframe>' }}</pre>
                @else
                    <iframe src="https://banners.cee-realestate.com/sirava/970x250/index.php" width="970" height="250" class="d-block mx-auto xs-mb-20" frameborder="0"></iframe>

                    <p class="xs-mt-20">HTML code:</p>

                    <pre class="url">{{ '<iframe src="https://banners.cee-realestate.com/sirava/970x250/index.php?ref=' }}{{ Auth::user()->id }}{{ '" width="970" height="250" frameborder="0"></iframe>' }}</pre>
                @endif
            </div>

            <div class="tab-pane fade" id="160x600" role="tabpanel">
                @if(App::getLocale() == 'sk')
                    <iframe src="https://banners.cee-realestate.com/sirava/sk/160x600/index.php" width="160" height="600" class="d-block mx-auto xs-mb-20" frameborder="0"></iframe>

                    <p class="xs-mt-20">HTML code:</p>

                    <pre class="url">{{ '<iframe src="https://banners.cee-realestate.com/sirava/sk/160x600/index.php?ref=' }}{{ Auth::user()->id }}{{ '" width="160" height="600" frameborder="0"></iframe>' }}</pre>

                @else
                    <iframe src="https://banners.cee-realestate.com/sirava/160x600/index.php" width="160" height="600" class="d-block mx-auto xs-mb-20" frameborder="0"></iframe>

                    <p class="xs-mt-20">HTML code:</p>

                    <pre class="url">{{ '<iframe src="https://banners.cee-realestate.com/sirava/160x600/index.php?ref=' }}{{ Auth::user()->id }}{{ '" width="160" height="600" frameborder="0"></iframe>' }}</pre>
                @endif
            </div>

            <div class="tab-pane fade" id="300x250" role="tabpanel">
                @if(App::getLocale() == 'sk')
                    <iframe src="https://banners.cee-realestate.com/sirava/sk/300x250/index.php" width="300" height="250" class="d-block mx-auto xs-mb-20" frameborder="0"></iframe>

                    <p class="xs-mt-20">HTML code:</p>

                    <pre class="url">{{ '<iframe src="https://banners.cee-realestate.com/sirava/sk/300x250/index.php?ref=' }}{{ Auth::user()->id }}{{ '" width="300" height="250" frameborder="0"></iframe>' }}</pre>
                @else
                    <iframe src="https://banners.cee-realestate.com/sirava/300x250/index.php" width="300" height="250" class="d-block mx-auto xs-mb-20" frameborder="0"></iframe>

                    <p class="xs-mt-20">HTML code:</p>

                    <pre class="url">{{ '<iframe src="https://banners.cee-realestate.com/sirava/300x250/index.php?ref=' }}{{ Auth::user()->id }}{{ '" width="300" height="250" frameborder="0"></iframe>' }}</pre>
                @endif
            </div>

            <div class="tab-pane fade" id="300x600" role="tabpanel">
                @if(App::getLocale() == 'sk')
                    <iframe src="https://banners.cee-realestate.com/sirava/sk/300x600/index.php" width="300" height="600" class="d-block mx-auto xs-mb-20" frameborder="0"></iframe>

                    <p class="xs-mt-20">HTML code:</p>

                    <pre class="url">{{ '<iframe src="https://banners.cee-realestate.com/sirava/sk/300x600/index.php?ref=' }}{{ Auth::user()->id }}{{ '" width="300" height="600" frameborder="0"></iframe>' }}</pre>
                @else
                    <iframe src="https://banners.cee-realestate.com/sirava/300x600/index.php" width="300" height="600" class="d-block mx-auto xs-mb-20" frameborder="0"></iframe>

                    <p class="xs-mt-20">HTML code:</p>

                    <pre class="url">{{ '<iframe src="https://banners.cee-realestate.com/sirava/300x600/index.php?ref=' }}{{ Auth::user()->id }}{{ '" width="300" height="600" frameborder="0"></iframe>' }}</pre>
                @endif
            </div>

            <div class="tab-pane fade" id="320x50" role="tabpanel">
                @if(App::getLocale() == 'sk')
                    <iframe src="https://banners.cee-realestate.com/sirava/sk/320x50/index.php" width="320" height="50" class="d-block mx-auto xs-mb-20" frameborder="0"></iframe>

                    <p class="xs-mt-20">HTML code:</p>

                    <pre class="url">{{ '<iframe src="https://banners.cee-realestate.com/sirava/sk/320x50/index.php?ref=' }}{{ Auth::user()->id }}{{ '" width="320" height="50" frameborder="0"></iframe>' }}</pre>
                @else
                    <iframe src="https://banners.cee-realestate.com/sirava/320x50/index.php" width="320" height="50" class="d-block mx-auto xs-mb-20" frameborder="0"></iframe>

                    <p class="xs-mt-20">HTML code:</p>

                    <pre class="url">{{ '<iframe src="https://banners.cee-realestate.com/sirava/320x50/index.php?ref=' }}{{ Auth::user()->id }}{{ '" width="320" height="50" frameborder="0"></iframe>' }}</pre>
                @endif
            </div>

            <div class="tab-pane fade" id="728x90" role="tabpanel">
                @if(App::getLocale() == 'sk')
                    <iframe src="https://banners.cee-realestate.com/sirava/sk/728x90/index.php" width="728" height="90" class="d-block mx-auto xs-mb-20" frameborder="0"></iframe>

                    <p class="xs-mt-20">HTML code:</p>

                    <pre class="url">{{ '<iframe src="https://banners.cee-realestate.com/sirava/sk/728x90/index.php?ref=' }}{{ Auth::user()->id }}{{ '" width="728" height="90" frameborder="0"></iframe>' }}</pre>
                @else
                    <iframe src="https://banners.cee-realestate.com/sirava/728x90/index.php" width="728" height="90" class="d-block mx-auto xs-mb-20" frameborder="0"></iframe>

                    <p class="xs-mt-20">HTML code:</p>

                    <pre class="url">{{ '<iframe src="https://banners.cee-realestate.com/sirava/728x90/index.php?ref=' }}{{ Auth::user()->id }}{{ '" width="728" height="90" frameborder="0"></iframe>' }}</pre>
                @endif
            </div>
        </div>
    </div>
@endsection