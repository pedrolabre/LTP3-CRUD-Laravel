<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['status']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['status']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php
    $statusClasses = [
        'novo' => 'bg-success',
        'usado' => 'bg-primary',
        'desgastado' => 'bg-warning text-dark',
        'reparo' => 'bg-danger',
        'doado' => 'bg-secondary'
    ];
    
    $class = $statusClasses[$status] ?? 'bg-secondary';
?>

<span class="badge <?php echo e($class); ?>" <?php echo e($attributes); ?>>
    <?php echo e(ucfirst($status)); ?>

</span>
<?php /**PATH C:\xampp\htdocs\LTP3-CRUD-Laravel\resources\views/components/status-badge.blade.php ENDPATH**/ ?>