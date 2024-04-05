@extends('layouts.app')
@section('title', 'Edit')

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
                    <div class="card-header bg-warning text-white">Edit Form</div>
                    <div class="card-body">
                        <form action="{{route('update',['student' => $student])}}" id="StudentForm" name="StudentForm" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group mt-3">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ $student->name }}"
                                    placeholder="Enter name">
                            </div>
                            <div class="form-group mt-3">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" value="{{ $student->email }}"
                                    placeholder="Enter email">
                            </div>
                            <div class="form-group mt-3">
                                <label for="contact">Contact</label>
                                <input type="number" name="contact" id="contact" class="form-control" value="{{ $student->contact }}"
                                    placeholder="Enter contact">
                            </div>
                            <div class="form-group text-center mt-3">
                                <a href="{{route('main')}}" class="btn btn-secondary">Cancel</a>
                                <button type="submit" class="btn btn-success">Save Edit</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
