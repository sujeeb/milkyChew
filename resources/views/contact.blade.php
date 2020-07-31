@extends('layouts.master1')

@section('title', 'Contact')

@section('content')

<body>
	<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">	
<h1>Customer Feedback</h1><br>

@foreach ($feedbacks as $feedback)
<a href="{{url('feedback/contact/'.$feedback->id)}}">
<div>{{$feedback->id}}) &nbsp {{$feedback->subject}}</div></a>
<div>Commenter... &nbsp<a href="{{url('user/'.$feedback->user->id)}}">{{$feedback->user->name}}</a></div> 
<div>{{$feedback->message}}</div>
@endforeach
</div></div></div>
</body>
@endsection

