<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['cloth']));

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

foreach (array_filter((['cloth']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div class="card h-100">
    <!-- Badge de Status -->
    <?php if (isset($component)) { $__componentOriginal8c81617a70e11bcf247c4db924ab1b62 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8c81617a70e11bcf247c4db924ab1b62 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.status-badge','data' => ['status' => $cloth->status,'class' => 'status-badge']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('status-badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['status' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($cloth->status),'class' => 'status-badge']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8c81617a70e11bcf247c4db924ab1b62)): ?>
<?php $attributes = $__attributesOriginal8c81617a70e11bcf247c4db924ab1b62; ?>
<?php unset($__attributesOriginal8c81617a70e11bcf247c4db924ab1b62); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8c81617a70e11bcf247c4db924ab1b62)): ?>
<?php $component = $__componentOriginal8c81617a70e11bcf247c4db924ab1b62; ?>
<?php unset($__componentOriginal8c81617a70e11bcf247c4db924ab1b62); ?>
<?php endif; ?>
    
    <!-- Imagem da Roupa -->
    <?php if($cloth->image): ?>
        <img src="<?php echo e(asset('storage/' . $cloth->image)); ?>" 
             alt="<?php echo e($cloth->name); ?>" 
             class="cloth-image">
    <?php else: ?>
        <div class="bg-secondary d-flex align-items-center justify-content-center" 
             style="height: 250px;">
            <i class="bi bi-image text-white" style="font-size: 4rem;"></i>
        </div>
    <?php endif; ?>
    
    <!-- Conteúdo do Card -->
    <div class="card-body">
        <h5 class="card-title"><?php echo e($cloth->name); ?></h5>
        
        <p class="card-text">
            <i class="bi bi-tag"></i> <strong>Categoria:</strong> <?php echo e($cloth->category); ?>

        </p>
        
        <p class="card-text">
            <i class="bi bi-palette"></i> <strong>Cor:</strong> <?php echo e($cloth->color); ?>

        </p>
        
        <p class="card-text">
            <i class="bi bi-rulers"></i> <strong>Tamanho:</strong> <?php echo e($cloth->size); ?>

        </p>
        
        <p class="card-text text-success fw-bold">
            <i class="bi bi-currency-dollar"></i> R$ <?php echo e(number_format($cloth->price, 2, ',', '.')); ?>

        </p>
    </div>
    
    <!-- Ações do Card -->
    <div class="card-footer">
        <div class="btn-group w-100">
            <a href="<?php echo e(route('clothes.show', $cloth->id)); ?>" 
               class="btn btn-sm btn-outline-primary">
                <i class="bi bi-eye"></i> Ver
            </a>
            <a href="<?php echo e(route('clothes.edit', $cloth->id)); ?>" 
               class="btn btn-sm btn-outline-warning">
                <i class="bi bi-pencil"></i> Editar
            </a>
            <form action="<?php echo e(route('clothes.destroy', $cloth->id)); ?>" 
                  method="POST" 
                  onsubmit="return confirm('Tem certeza que deseja excluir esta roupa?');"
                  class="d-inline">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn btn-sm btn-outline-danger">
                    <i class="bi bi-trash"></i> Excluir
                </button>
            </form>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\LTP3-CRUD-Laravel\resources\views/components/cloth-card.blade.php ENDPATH**/ ?>