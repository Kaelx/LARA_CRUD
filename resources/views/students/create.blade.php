@extends('components.layout')
@section('title', 'Create')

@section('content')
    <h1>CREATE</h1>
    <p>Welcome to the create page</p>
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
                <div class="card-header bg-info text-white">ADD STUDENT DATA</div>
                <div class="card-body">
                    <form action="{{ route('students.store') }}" id="StudentForm" name="StudentForm" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter name">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter email">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="contact">Contact</label>
                                        <input type="number" name="contact" id="contact" class="form-control" placeholder="Enter contact">
                                    </div>
                                    <div class="form-group text-center mb-3">
                                        <button type="submit" class="btn btn-primary">Save Data</button>
                                        <a href="/" class="btn btn-secondary">Back</a>
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
