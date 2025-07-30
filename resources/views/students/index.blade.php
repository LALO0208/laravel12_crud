@extends('layouts.app')
@section('title', 'Students List')
@section('content')
    <div class="container mt-4">
        <h2 class="mb-4 text-white">Student List</h2>
        <a href="{{ route('students.create') }}" class="btn btn-outline-info mb-3">Add Student</a>
        @session('success')
            <div class="alert alert-success alert-dimissible fade show" role="alert">
                <strong>Success!</strong>{{ $value }}
                <button type="button" class="btn-close" data-bs-dimiss="alert" aria-label="Close"></button>
            </div>
        @endsession
        <table class="table table-bordered table-dark table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($students as $Student)
                    <tr>
                        <td>{{ $Student->id }}</td>
                        <td>{{ $Student->name }}</td>
                        <td>{{ $Student->email }}</td>
                        <td>{{ $Student->phone }}</td>
                        <td>
                            <a href="{{ route('students.show', $Student->id) }}" class="btn btn-outline-warning">View</a>
                            <a href="{{ route('students.edit', $Student->id) }}" class="btn btn-outline-info">Edit</a>
                            <a href="" class="btn btn-outline-danger">Delete</a>
                        </td>
                    </tr>

                @empty
                    <tr>
                        <td colspan="5" class="text-center">No Student Found!</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="d-flex justify-content-end mt-4">
            {{ $students->links('vendor.pagination.bootstrap-5-dark') }}
        </div>
    </div>
@endsection