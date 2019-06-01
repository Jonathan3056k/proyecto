@if (Session::has('delete'))
    <div class="alert alert-danger" role="alert">
        <strong>{{Session::get('delete')}}</strong>
    </div>
@endif

@if (Session::has('save'))
    <div class="alert alert-success" role="alert">
        <strong>{{Session::get('save')}}</strong>
    </div>
@endif