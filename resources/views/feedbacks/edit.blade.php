@extends('layouts.master1')

@section('title', 'Login')

@section('content')
<body>
	<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
    <div class="card">
	{!! Form::open(array('url' => 'edit/contact/' . $contact->id, 'files' => true, 'method' => 'PUT')) !!}

	{!! Form::label('subject', 'Subject'); !!}<br>
	{!! Form::text('subject', $contact->subject, ['placeholder' => 'Your subject', 'class' => 'w-50']) !!}<br><br>

	{!! Form::label('message', 'Message'); !!}<br>
	{!! Form::textarea('message', $contact->message, ['placeholder' => 'Your message']) !!}

	<br><br>

	{!! Form::submit('Update', ['class' => 'btn-success btn-sm']); !!}
   
	{!! Form::close() !!}
    </div></div></div></div>
</body>
@endsection