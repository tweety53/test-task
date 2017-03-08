
    @extends('layouts.app')

    @section('content')
        @if(Auth::check())
        <div id="app" class="container">
            <user
                :user-id = {{ Auth::id() }}
            ></user>
        </div>
        @endif
    @endsection
