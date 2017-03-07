@extends('layouts.app')

@section('content')
	<div class="container">
		<h1>Edit your profile:</h1>
			<form class="form-horizontal" role="form" method="POST" action="/user/ {{ $user->id }}">
	                        {{ csrf_field() }}
	                        {{ method_field('PUT') }}

	                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
	                            <label for="name" class="col-md-4 control-label">Name</label>

	                            <div class="col-md-6">
	                                <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" autofocus>

	                                @if ($errors->has('name'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('name') }}</strong>
	                                    </span>
	                                @endif
	                            </div>
	                        </div>

	                        <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
	                            <label for="phone_number" class="col-md-4 control-label">Phone number</label>

	                            <div class="col-md-6">
	                                <input id="phone_number" type="text" class="form-control" name="phone_number" value="{{ $user->phone_number }}" >

	                                @if ($errors->has('phone_number'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('phone_number') }}</strong>
	                                    </span>
	                                @endif
	                            </div>
	                        </div>

	                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
	                            <label for="password" class="col-md-4 control-label">Old password</label>

	                            <div class="col-md-6">
	                                <input id="password" type="text" class="form-control" name="old_password" >
				@if (Session::has('error'))
				   <div class="alert alert-warning">{{ Session::get('error') }}</div>
				@endif

	                                
	                            </div>
	                        </div>

	                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
	                            <label for="password" class="col-md-4 control-label">New password</label>

	                            <div class="col-md-6">
	                                <input id="password" type="text" class="form-control" name="new_password" >

	                           
	                            </div>
	                        </div>

	                        
	                        <div class="form-group">
	                            <div class="col-md-6 col-md-offset-4">
	                                <button type="submit" class="btn btn-primary">
	                                    Apply changes
	                                </button>
	                            </div>
	                        </div>
	                    </form>
			

			@if (Session::has('success'))
			   <div class="alert alert-success">{{ Session::get('success') }}</div>
			@endif
	</div>
@endsection