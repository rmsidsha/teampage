@include('flash::message')
@extends('master')

@section('content')
<form action="" method="POST">
	{!! csrf_field() !!} 
		<div>
			<label>
				ID
			</label>
			<div>
				<input id="id" type="text" name="id" required autocomplete="id" autofocus>
				@error('id')
					<span class="inavlid-feedback" role="alert">
                        <strong>{{ $message }}</strong>  
                    </span>
				@enderror
			</div>
		</div>
		<div>
			<label>
				PASSWORD
			</label>
			<div>
				<input id="password" type="password" name="password" required>
				@error('pqssword')
					<span class="inavlid-feedback" role="alert">
                        <strong>{{ $message }}</strong>  
                    </span>
				@enderror
			</div>
		</div>
		<div>
			<div>
				<input id="login" type="submit" name="submit">
			</div>
		</div>
	</form>
	<form method="" action="">
		<div>
			<div>
				<a href="/register">읻홍</a>
			</div>
		</div>
	</form>
@stop
