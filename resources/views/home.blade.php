@extends('layouts.app')
@section('title', 'Home')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @guest
                        <div class="card-body">
                            <p class="lead">You are not logged in. Please login to access the application features.</p>
                        </div>
                    @else
                        <div class="card-header">{{ __('Dashboard') }}</div>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            {{-- {{ __('You are logged in!') }} --}}
                        </div>
                        <div class="card bg-primary text-center m-4">
                            <a href="{{route('main')}}" class="text-white">STUDENT DATA</a>
                        </div>
                        <div class="card bg-danger text-center m-4">
                            <a href="{{route('test')}}" class="text-white">TEST</a>
                        </div>
                    @endguest
                </div>
            </div>
        </div>
    </div>
@endsection
