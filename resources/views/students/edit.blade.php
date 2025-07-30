@extends('layouts.app')
@section('title', 'Edit Student')

@section('content')


<div class="container mt-4">
    <div class="row">
        <div class="col-md-6 offset-3">

            <h2 class="text-white m-0">Edit Student</h2>
            <a href="{{ route('students.index') }}" class="btn btn-outline-warning mt-2">Back</a>
            <div class="card bg-dark text-white mt-4">
                <div class="card-body border border-light rounded">
                    <form action="{{ route('students.update', $student->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input name="name" type="text"
                                class="form-control bg-dark text-white @error('name') is-invalid @enderror" value="{{old('name', $student->name) }}">
                            @error('name')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input name="email" type="text"
                                class="form-control bg-dark text-white @error('email') is-invalid @enderror" value="{{old('email', $student->email) }}">
                            @error('email')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone</label>
                            <input name="phone" type="text"
                                class="form-control bg-dark text-white @error('phone') is-invalid @enderror" value="{{old('phone', $student->phone) }}">
                            @error('phone')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-outline-success text-white">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection