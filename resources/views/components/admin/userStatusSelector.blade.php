@if($status == 0)<option value="0" selected>Not reached yet</option>
@else<option value="0">Not reached yet</option>
@endif

@if($status == 1)<option value="1" class="bg-danger" selected>Don't call</option>
@else<option value="1" class="bg-danger">Don't call</option>
@endif

@if($status == 2)<option value="2" class="bg_yellow" selected>Call back</option>
@else<option value="2" class="bg_yellow">Call back</option>
@endif

@if($status == 3)<option value="3" class="bg_hot" selected>Hot client</option>
@else<option value="3" class="bg_hot">Hot client</option>
@endif

@if($status == 5)<option value="5" class="bg_blue" selected>Phase 3 client</option>
@else<option value="5" class="bg_blue">Phase 3 client</option>
@endif

@if($status == 4)<option value="4" class="bg-success" selected>Already client</option>
@else<option value="4" class="bg-success">Already client</option>
@endif