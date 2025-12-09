@props(['type' => 'success', 'message'])

@php
    $alertClasses = [
        'success' => 'alert-success',
        'error' => 'alert-danger',
        'danger' => 'alert-danger',
        'info' => 'alert-info',
        'warning' => 'alert-warning',
    ];
    
    $icons = [
        'success' => 'check-circle',
        'error' => 'exclamation-triangle',
        'danger' => 'exclamation-triangle',
        'info' => 'info-circle',
        'warning' => 'exclamation-triangle',
    ];
    
    $alertClass = $alertClasses[$type] ?? 'alert-info';
    $icon = $icons[$type] ?? 'info-circle';
@endphp

<div class="alert {{ $alertClass }}" {{ $attributes }}>
    <i class="bi bi-{{ $icon }}"></i> {{ $message ?? $slot }}
</div>
