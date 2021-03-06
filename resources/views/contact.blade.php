@extends('layouts/main')

@section('content')
<h1>Contact view</h1>

<form action="{{ url('/contact') }}" method="POST">
	{{ csrf_field() }}
	<div class="form-group">
		<input type="text" class="form-control {{ $errors->has('contact_name') ? 'is-invalid' : '' }}" name="contact_name" id="contact_name" placeholder="Votre nom"
		value="{{ old('contact_name') }}"> {!! $errors->first('contact_name', '
		<div class="invalid-feedback" style="color: red;">:message</div></br>') !!}
	</div>
	<div class="form-group">
		<input type="email" class="form-control {{ $errors->has('contact_email') ? 'is-invalid' : '' }}" name="contact_email" id="contact_email" placeholder="Votre email"
		value="{{ old('contact_email') }}"> {!! $errors->first('contact_email', '
		<div class="invalid-feedback" style="color: red;">:message</div></br>') !!}
	</div>
	<div class="form-group">
		<textarea class="form-control {{ $errors->has('contact_message') ? 'is-invalid' : '' }}" name="contact_message" id="contact_message" placeholder="Votre message">{{ old('contact_message') }}</textarea>                            {!! $errors->first('contact_message', '
		<div class="invalid-feedback" style="color: red;">:message</div></br>') !!}
	</div>
	<button type="submit" class="btn btn-secondary" style="background-color: #DADDDF; padding: 15px 32px;">Envoyer !</button></br></br>
	<p><a href="contact.list" style="text-decoration: underline;">Voir la liste des contacts</a></p>
</form>

@endsection

@section('title', 'Contact')