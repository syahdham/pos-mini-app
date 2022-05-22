@if (\Session::has('success'))
    <div class="alert alert-success">
        <span>{!! \Session::get('success') !!}</span>
    </div>
@elseif(\Session::has('error'))
    <div class="alert alert-danger">
        <span>{!! \Session::get('error') !!}</span>
    </div>
@endif
