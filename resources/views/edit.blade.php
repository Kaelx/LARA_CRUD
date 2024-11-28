@extends('layouts.app')
@section('title', 'Edit')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header bg-warning text-white">Edit Form</div>
                    <div class="card-body">
                        <form action="{{ route('update', ['student' => $student]) }}" id="StudentForm" name="StudentForm"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group mt-3">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name"
                                    class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('name', $student->name) }}" placeholder="Enter name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    value="{{ old('email', $student->email) }}" placeholder="Enter email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <label for="contact">Contact</label>
                                <input type="number" name="contact" id="contact"
                                    class="form-control @error('contact') is-invalid @enderror"
                                    value="{{ old('contact', $student->contact) }}" placeholder="Enter contact">

                                @error('contact')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group text-center mt-3">
                                <a href="{{ route('main') }}" class="btn btn-secondary">Cancel</a>
                                <button type="submit" class="btn btn-success">Save Edit</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
