@extends('layouts.app')
@section('title', 'Create')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div>
                @if ($errors->any())
                    <div id="alert" class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header bg-info text-white">Student Form</div>
                    <div class="card-body">
                        <form action="{{ route('store')}}" id="StudentForm" name="StudentForm" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="form-group mb-3">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Enter name" autocomplete="name" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Enter email" autocomplete="email" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="contact">Contact</label>
                                <input type="number" name="contact" id="contact" class="form-control" placeholder="Enter contact" autocomplete="mobile" required>
                            </div>
                            <div class="form-group text-center mt-3">
                                <a href="{{route('main')}}" class="btn btn-secondary">Back</a>
                                <button type="submit" class="btn btn-success">Save Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
