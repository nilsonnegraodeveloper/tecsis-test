@foreach (['danger', 'warning', 'success', 'info'] as $msg)
    @if (Session::has('alert-' . $msg))
        <div class="alert alert-{{ $msg }}" role="alert">
            {!! Session::get('alert-' . $msg) !!}
        </div>
    @endif
@endforeach

@foreach ($errors->all() as $error)  
	<li style="color:red;">{{ $error }}</li>
	<br>
@endforeach
