@props(['status'])

@php
    $statusClasses = [
        'novo' => 'bg-success',
        'usado' => 'bg-primary',
        'desgastado' => 'bg-warning text-dark',
        'reparo' => 'bg-danger',
        'doado' => 'bg-secondary'
    ];
    
    $class = $statusClasses[$status] ?? 'bg-secondary';
@endphp

<span class="badge {{ $class }}" {{ $attributes }}>
    {{ ucfirst($status) }}
</span>
