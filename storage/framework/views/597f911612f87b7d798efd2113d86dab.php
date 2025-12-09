<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['label' => 'Foto da Roupa', 'name' => 'image', 'currentImage' => null, 'required' => false]));

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

foreach (array_filter((['label' => 'Foto da Roupa', 'name' => 'image', 'currentImage' => null, 'required' => false]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div class="mb-3">
    <?php if($currentImage): ?>
        <label class="form-label">Imagem Atual</label>
        <div class="mb-3">
            <img src="<?php echo e(asset('storage/' . $currentImage)); ?>" 
                 alt="Imagem atual" 
                 class="img-thumbnail" 
                 style="max-width: 300px;">
        </div>
    <?php endif; ?>

    <label for="<?php echo e($name); ?>" class="form-label">
        <?php echo e($currentImage ? 'Alterar ' : ''); ?><?php echo e($label); ?> (Opcional)
    </label>
    <input 
        type="file" 
        class="form-control <?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
        id="<?php echo e($name); ?>" 
        name="<?php echo e($name); ?>"
        accept="image/*"
        onchange="previewImage(event, '<?php echo e($name); ?>')"
        <?php echo e($attributes); ?>>
    <?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="invalid-feedback"><?php echo e($message); ?></div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    <small class="text-muted">Formatos aceitos: JPG, PNG, GIF (máx. 2MB)</small>
    
    <!-- Preview da Nova Imagem -->
    <div id="imagePreview-<?php echo e($name); ?>" class="mt-3" style="display: none;">
        <img id="preview-<?php echo e($name); ?>" src="" alt="Preview" class="img-thumbnail" style="max-width: 300px;">
    </div>
</div>

<?php if (! $__env->hasRenderedOnce('a49d6f58-2f20-4c66-9a9d-7b59d3d8a065')): $__env->markAsRenderedOnce('a49d6f58-2f20-4c66-9a9d-7b59d3d8a065'); ?>
    <?php $__env->startPush('scripts'); ?>
    <script>
    function previewImage(event, fieldName) {
        const reader = new FileReader();
        reader.onload = function() {
            const preview = document.getElementById('preview-' + fieldName);
            const previewDiv = document.getElementById('imagePreview-' + fieldName);
            preview.src = reader.result;
            previewDiv.style.display = 'block';
        }
        if (event.target.files[0]) {
            reader.readAsDataURL(event.target.files[0]);
        }
    }
    </script>
    <?php $__env->stopPush(); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\LTP3-CRUD-Laravel\resources\views/components/form-image.blade.php ENDPATH**/ ?>