{{--<h1>404 Error</h1>--}}

@if(!empty(session('error')))
    <div class="alert alert-danger" role="alert">
        {{session('error')}}
    </div>
@endif
@if(!empty(session('success')))
    <div class="alert alert-success" role="alert">
        {{session('success')}}
    </div>
@endif
@if(!empty(session('incorrect')))
    <div class="alert alert-danger" role="alert">
        {{session('incorrect')}}
    </div>
@endif
