@extends('layouts.master1')

@section('title', 'Profile')

@section('content')
<body>
	<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
    <div class="card">
	<h3>Name:  			{{$user->name}}</h3> <br>
		Email: 			{{$user->email}}<br>
		Member Since: 	{{$user->created_at->toFormattedDateString()}}
	<br><br>

	@if(($user->id == Auth::id()) || (Auth::user()->isAdmin()))
	
	{!! Form::open(array('url' => 'update/user/' . $user->id, 'method' => 'get'))!!}

	{!! Form::submit('Edit', ['class' => 'btn-success btn-sm']); !!}

	@endif

</div></div></div>
</body>
@endsection
