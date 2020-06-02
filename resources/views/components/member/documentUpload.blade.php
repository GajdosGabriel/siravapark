<form action="{{ route('member.documentUploadPost')}}" method="POST" class="cee" enctype="multipart/form-data">
    @csrf

    <div class="input-group file">
        <label for="file_{{ $intID }}"><img src="{{ asset('images/member/upload.png') }}" class="" alt=""> <span class="d-none d-md-inline">@lang('form.selectFile')</span></label>

        <input type="hidden" name="type" value="{{ $intID }}">

        <input type="file" class="form-control" id="file_{{ $intID }}" name="file" required>

        <div class="input-group-append">
            <button class="btn btn-secondary" type="submit">@lang('form.upload')</button>
        </div>
    </div>

    @if ($errors->has('file'))
        <p class="help-block text-danger">
            <strong>{{ $errors->first('file') }}</strong>
        </p>
    @endif

    <small class="text-muted">@lang('member/invest/step2.upload') <a href="mailto:legal@cee-realestate.com">legal@cee-realestate.com</a></small>

    @if(sizeof($objDocuments) > 0)
        <p class="xs-mb-0 text-muted"><i class="fas fa-check color_green"></i> @lang('member/invest/step2.uploaded') <span class="badge badge-dark">{{ sizeof($objDocuments) }}</span></p>
    @else
        <p class="xs-mb-0 text-muted"><i class="fas fa-exclamation-circle"></i> @lang('member/invest/step2.uploaded0')</p>
    @endif
</form>
