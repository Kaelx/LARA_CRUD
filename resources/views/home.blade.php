@extends('layouts.app')
@section('title', 'Home')

@section('content')
    <h1>HOME</h1>
    <p>Welcome to the home page</p>

    <div>
        <a href="/students/create" class="btn btn-primary mb-3">ADD DATA</a>
    </div>
    <div>
        @if ($success = Session::get('success'))
            <div id="success-alert" class="alert alert-success">
                {{ $success }}
            </div>
        @endif
    </div>

    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Time Created</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->contact }}</td>
                        <td>{{ $student->created_at }}</td>
                        <td>
                            <a href="{{ route('students.edit', ['student' => $student]) }}" class="btn btn-secondary">EDIT</a>

                            <form action="{{route('students.delete',['student'=> $student] )}}" method="POST" class="d-inline"> 
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">DELETE</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>

    </div>

@endsection
