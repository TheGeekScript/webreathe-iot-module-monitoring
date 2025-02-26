@extends('layouts.app')
@section('title', 'Module Data - ' . $module->name)
@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="text-center mb-0">Module Data</h1>
    <a href="{{ route('modules.index') }}" class="btn btn-secondary">Back to Module Status</a>
</div>
<div class="text-center card p-4">
    <p><strong>Name:</strong> {{ $module->name }}</p>
    <p><strong>Type:</strong> {{ $module->type }}</p>
    <p><strong>Status:</strong> 
        <span class="badge 
            @if($module->status === 'active') bg-success
            @elseif($module->status === 'inactive') bg-warning
            @else bg-danger
            @endif">
            {{ $module->status }}
        </span>
    </p>

    <h2 class="text-center mb-4">Historical Data</h2>
    <div class="chart-container">
        <canvas id="moduleChart" width="500" height="300"></canvas>
    </div>
</div>
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('moduleChart').getContext('2d');
        const chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: @json($moduleData->pluck('created_at')),
                datasets: [
                            {
                                label: 'Value',
                                data: @json($moduleData->pluck('value')),
                                borderColor: 'rgba(75, 192, 192, 1)',
                                borderWidth: 2,
                                fill: false,
                                tension: 0.1
                            },
                            {
                                label: 'Temperature',
                                data: @json($temperatureData),
                                borderColor: 'rgba(255, 99, 132, 1)',
                                borderWidth: 2,
                                fill: false,
                                tension: 0.1
                            },
                            {
                                label: 'Speed',
                                data: @json($speedData),
                                borderColor: 'rgba(54, 162, 235, 1)',
                                borderWidth: 2,
                                fill: false,
                                tension: 0.1
                            }
                        ]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: true,
                        position: 'top',
                    },
                    tooltip: {
                        enabled: true,
                        mode: 'index',
                        intersect: false,
                    }
                },
                scales: {
                    x: {
                        display: true,
                        title: {
                            display: true,
                            text: 'Time'
                        }
                    },
                    y: {
                        display: true,
                        title: {
                            display: true,
                            text: 'Value'
                        },
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endpush
@endsection