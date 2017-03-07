@extends('layouts.app')

@section('content')
	<div class="container">
		<h1>User data:</h1>

		<hr>

		<p>Name: {{ $user-> name }}</p>
		<p>Phone: {{ $user-> phone_number}}</p>

		<a class="btn btn-primary" href="/user/{{$user->id}}/edit">Edit you profile</a>
	</div>
@endsection