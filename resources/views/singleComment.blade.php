@extends('layouts.master1')

@section('title', 'Login')

@section('content')
<body>
	<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
    <div class="card">
	{{$feedback->id}}) &nbsp;
	{{$feedback->subject}}<br>
	{{$feedback->message}}
	<br><br>
	@if(($feedback->user_id == Auth::id()) || (Auth::user()->isAdmin()) )
	<div class="btn-group">
	{!! Form::open(array('url' => 'delete/contact/' . $feedback->id, 'method' => 'DELETE')) !!}
	
	{!! Form::submit('Delete', ['class' => 'btn-success btn-sm'])!!}
	{!! Form::close() !!}&nbsp;&nbsp;&nbsp;&nbsp;

	{!! Form::open(array('url' => 'edit/contact/' . $feedback->id, 'method' => 'get'))!!}

	{!! Form::submit('Edit', ['class' => 'btn-success btn-sm']); !!}
   
	{!! Form::close() !!}</div>
	@endif
</div></div></div></div>
</body>
@endsection
