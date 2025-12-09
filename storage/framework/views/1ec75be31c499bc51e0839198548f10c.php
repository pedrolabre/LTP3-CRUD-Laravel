<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['type' => 'success', 'message']));

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

foreach (array_filter((['type' => 'success', 'message']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php
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
?>

<div class="alert <?php echo e($alertClass); ?>" <?php echo e($attributes); ?>>
    <i class="bi bi-<?php echo e($icon); ?>"></i> <?php echo e($message ?? $slot); ?>

</div>
<?php /**PATH C:\xampp\htdocs\LTP3-CRUD-Laravel\resources\views/components/alert.blade.php ENDPATH**/ ?>