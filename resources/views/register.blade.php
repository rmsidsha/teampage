@include('flash::message')
@extends('master')

@section('content')
		<form action="" method="POST">
            {!! csrf_field() !!} 

			<div class="form-group">
				<label for="id"> {{ __('ID') }} </label>
				<div class="register-id">
					<input id="id" type="text" name="id" value="{{ old('id') }}" required autocomplete="id" autofocus>
                    @error('id')
                        <span class="inavlid-feedback" role="alert">
                            <strong>{{ $message }}</strong>  
                        </span>
                    @enderror
				</div>
			</div>
			<div class="form-group">
				<label for="email"> {{ __('E-MAIL')}} </label>	
				<div class="register-email">
					<input id="email" type="email" name="email" required  value="{{ old('email') }}" autocomplete="email">
                    @error('email')
                        <span class="inavlid-feedback" role="alert">
                            <strong>{{ $message }}</strong>  
                        </span>
                    @enderror
				</div>
			</div>
			<div class="form-group">
				<label for="password"> {{ __('PASSWORD') }} </label>
				<div class="register-password">
					<input id="password" type="password" name="password" required>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</div>
			</div>
			<div class="form-group">
				<label for="password-confirm"> {{ __('CONFIRM PASSWORD')}} </label>
				<div class="register-password">
					<input id="password-confirm" type="password" name="password_confirmation" required>
                    {{-- @error
                        <span class="invakud-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror --}}
				</div>
			</div>
			<div class="form-group">
				<label for="submit"></label>
				<div class="register-submit">
					<input id="submit" type="submit" name="submit" value="submit">
				</div>
			</div>
		</form>

@stop