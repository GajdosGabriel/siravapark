<div id="holidayFormModal22" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">@lang('holiday.title')</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <p class="lead">@lang('holiday.1')</p>

                @include('includes/videos/spa')

                @include('includes/errorList')

                <form action="{{ route('holiday') }}" method="POST" class="xs-mt-20">
                    @csrf

                    <p class="xs-mb-5 font-weight-bold">@lang('holiday.2')</p>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="2" name="domes" id="glamping" checked>
                        <label class="form-check-label" for="glamping">
                            @lang('holiday.glamping')
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="4" name="domes" id="apartmans">
                        <label class="form-check-label" for="apartmans">
                            @lang('holiday.apartmans')
                        </label>
                    </div>



                    <p class="xs-mt-20 xs-mb-5 font-weight-bold">@lang('holiday.6')</p>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="Only weekend" name="interested" id="weekend1" checked>
                        <label class="form-check-label" for="weekend1">
                            @lang('holiday.weekend1')
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="Midweek" name="interested" id="weekend2">
                        <label class="form-check-label" for="weekend2">
                            @lang('holiday.weekend2')
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="Week + (for holidays)" name="interested" id="weekend3">
                        <label class="form-check-label" for="weekend3">
                            @lang('holiday.weekend3')
                        </label>
                    </div>

                    <p class="xs-mt-20 xs-mb-5 font-weight-bold">@lang('holiday.10')</p>

                    <div class="form-group">
                        <label for="rent">@lang('holiday.12')</label>

                        <div class="row">
                            <div class="col-5">
                                <input type="text" class="form-control" id="rent_from" name="rent_from" maxlength="20" required>
                            </div>

                            <div class="col-2">
                                <p class="text-center"> - </p>
                            </div>

                            <div class="col-5">
                                <input type="text" class="form-control" id="rent_to" name="rent_to" maxlength="20" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group xs-mt-20">
                        <label for="comment"><strong>@lang('holiday.17')</strong></label>

                        <textarea id="comment" name="comment" class="form-control" maxlength="500" required></textarea>
                    </div>

                    <hr>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="nameUser">@lang('holiday.19')</span>
                        </div>
                        <input type="text" name="name" class="form-control"  maxlength="70" required aria-label="Username" aria-describedby="nameUser">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="email">@lang('holiday.20')</span>
                        </div>
                        <input type="email" name="email" class="form-control" placeholder="email"  maxlength="70" required aria-label="Username" aria-describedby="email">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="phone01">@lang('holiday.21')</span>
                        </div>
                        <input type="text" class="form-control" id="phone01" name="phone" maxlength="30" required>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">@lang('holiday.23')</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01" name="country" required>
                            <option selected></option>
                            {!! App\Classes\Country::countries(old('country')) !!}
                        </select>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-blue">@lang('holiday.submit')</button>
                    </div>
                </form>

                <div class="text-center xs-mt-20">
                    <a href="" data-toggle="modal" data-target="#tacModal">@lang('holiday.22')</a>
                </div>

                <hr>

                <h2 class="text-center">@lang('holiday.winner')</h2>

                <div class="row">
                    <div class="col-12 col-lg-8 offset-lg-2">
                        <img src="{{ asset('images/winner/2019_10.jpg') }}" class="img-fluid d-block" alt="">
                        <p class="h4 text-center xs-mt-10">Ivana Regecová</p>
                    </div>
                </div>

            </div>

            <div class="text-center xs-mb-20">
                <a href="" data-toggle="modal" data-target="#tacModal">@lang('legal/tac.past')</a>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('index.close')</button>
            </div>
        </div>
    </div>
</div>
