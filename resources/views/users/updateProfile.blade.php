@extends('layouts.master1')

@section('title', 'Edit Profile')

@section('content')
<body>
	<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
    <div class="card">

    	    @if (count($errors) > 0)
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
            @endif

	{!! Form::open(array('url' => 'update/user/' . $user->id, 'method'=>'PUT', 'class' => 'needs-validation')) !!}
	{{csrf_field()}}

	{!! Form::label('name', 'Name'); !!}<br>
	{!! Form::text('name', $user->name, ['placeholder' => 'Your name', 'class' => 'w-50']) !!}<br><br>

	{!! Form::label('email', 'Email'); !!}<br>
	{!! Form::email('email', $user->email, ['placeholder' => 'Your email', 'class' => 'w-50']) !!}<br><br>

	{!! Form::label('password', 'Password'); !!}<br>
	{!! Form::password('password', ['placeholder' => 'Your password', 'class' => 'w-50']) !!}<br><br>

	{!! Form::label('password_confirmation', 'Confirm Password'); !!}<br>
	{!! Form::password('password_confirmation', ['placeholder' => 'Confirm new password', 'class' => 'w-50']) !!}<br><br>

	<br><br>

	{!! Form::submit('Update', ['class' => 'btn-success btn-sm']); !!}
   
	{!! Form::close() !!}
    </div></div></div></div>
</body>
@endsection