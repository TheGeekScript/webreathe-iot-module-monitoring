@extends('layouts.app')
@section('title', 'Register New Module')
@section('content')
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="text-center mb-0">Register New Module</h1>
            <a href="{{ route('modules.index') }}" class="btn btn-secondary">Back to Module Status</a>
        </div>
        <div class="card p-4">
            <form action="{{ route('modules.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Module Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Module Type</label>
                    <select class="form-control" id="type" name="type" required>
                        <option value="temperature">Temperature</option>
                        <option value="speed">Speed</option>
                        <option value="pressure">Pressure</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
@endsection