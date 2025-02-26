@extends('layouts.app')
@section('title', 'Module Status')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="text-center mb-0">Module Status</h1>
    <a href="{{ route('modules.create') }}" class="btn btn-primary">Register New Module</a>
</div>
<div class="table-responsive">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Type</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($modules as $module)
                <tr>
                    <td>{{ $module->id }}</td>
                    <td>{{ $module->name }}</td>
                    <td>{{ $module->type }}</td>
                    <td>
                        <span class="badge 
                            @if($module->status === 'active') bg-success
                            @elseif($module->status === 'inactive') bg-warning
                            @else bg-danger
                            @endif">
                            {{ $module->status }}
                        </span>
                    </td>
                    <td>
                        <a href="{{ route('modules.show', $module->id) }}" class="btn btn-sm btn-secondary">View Data</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        @foreach ($modules as $module)
            @if ($module->status === 'malfunction')
                // alert('Module {{ $module->name }} is malfunctioning!');
            @endif
        @endforeach
    });
</script>
@endpush
@endsection