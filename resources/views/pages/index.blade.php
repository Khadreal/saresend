@extends('master')

@section('title', 'Saresend')

@section('content')
	<div id="holder">
		<div class="form_container col-xs-12">
			<h1>Send Your Mail</h1>
			@if (Session::has('form-submit'))
			    <div class="alert alert-success">
			    	Mail Sent
			    </div>
			@endif
			<form method="post">
				<li>
					<input class="{{ $errors->has('recipient') ? 'has-error' : '' }}" type="text" placeholder="To e.g:example@yahoo.org" name="recipient" value="{{ old('recipient') }}" >
					@if($errors->has('recipient'))
						<span class="err">{{ $errors->first('recipient') }}</span>
					@endif
				</li>
				<li>
					<input class="{{ $errors->has('reply') ? 'has-error' : '' }}" type="text" placeholder="Reply To e.g:myname@yahoo.org" name="reply" value="{{ old('reply') }}" >
					@if($errors->has('reply'))
						<span class="err">{{ $errors->first('reply') }}</span>
					@endif
				</li>

				<li>
					<input class="{{ $errors->has('subject') ? 'has-error' : '' }}" type="text" placeholder="Subject" name="subject" value="{{ old('subject') }}" >
					@if($errors->has('subject'))
						<span class="err">{{ $errors->first('subject') }}</span>
					@endif
				</li>

				<li>
					<textarea name="editor1" id="editor1" class="{{ $errors->has('message') ? 'has-error' : '' }}" name="message" placeholder="Your Message">{{ old('message') }}</textarea>
					@if($errors->has('message'))
						<span class="err">{{ $errors->first('message') }}</span>
					@endif
				</li>
				<input type="hidden" name="_token" value="{!! csrf_token() !!}">

				<input type="submit" value="Send">

			</form>
		</div>
	</div>
	
@endsection