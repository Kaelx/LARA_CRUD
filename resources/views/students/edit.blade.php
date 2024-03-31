@extends('components.layout')
@section('title', 'Edit')

@section('content')
    <h1>EDIT</h1>
    <p>Welcome to the edit page</p>
    <div class="row justify-content-center">
        <div>
            @if ($errors->any())
                <div class="alert alert-danger">
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
                <div class="card-header bg-warning text-white">EDIT STUDENT DATA</div>
                <div class="card-body">
                    <form action="{{ route('students.update', ['student' => $student]) }}" id="StudentForm" name="StudentForm" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" id="name" class="form-control" value="{{ $student->name }}" placeholder="Enter name">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" id="email" class="form-control" value="{{ $student->email }}" placeholder="Enter email">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="contact">Contact</label>
                                        <input type="number" name="contact" id="contact" class="form-control" value="{{ $student->contact }}" placeholder="Enter contact">
                                    </div>
                                    <div class="form-group text-center  mb-3">
                                        <button type="submit" class="btn btn-primary">Save Edit</button>
                                        <a href="/" class="btn btn-secondary mr-2">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>

@endsection
