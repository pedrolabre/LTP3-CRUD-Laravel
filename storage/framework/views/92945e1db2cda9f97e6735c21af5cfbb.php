

<?php $__env->startSection('title', 'Minhas Roupas - Armário Virtual'); ?>

<?php $__env->startSection('content'); ?>
<div style="max-width: 1400px; margin: 0 auto; padding: 0 20px;">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="mb-0">
            <i class="bi bi-hanger"></i> Meu Armário
        </h1>
        <a href="<?php echo e(route('clothes.create')); ?>" class="btn btn-success">
            <i class="bi bi-plus-circle"></i> Nova Roupa
        </a>
    </div>

    <?php if($clothes->count() > 0): ?>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-3">
            <?php $__currentLoopData = $clothes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cloth): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col">
                    <?php if (isset($component)) { $__componentOriginale27f20c2cf5836b359633993add011e1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale27f20c2cf5836b359633993add011e1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cloth-card','data' => ['cloth' => $cloth]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('cloth-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['cloth' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($cloth)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale27f20c2cf5836b359633993add011e1)): ?>
<?php $attributes = $__attributesOriginale27f20c2cf5836b359633993add011e1; ?>
<?php unset($__attributesOriginale27f20c2cf5836b359633993add011e1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale27f20c2cf5836b359633993add011e1)): ?>
<?php $component = $__componentOriginale27f20c2cf5836b359633993add011e1; ?>
<?php unset($__componentOriginale27f20c2cf5836b359633993add011e1); ?>
<?php endif; ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <!-- Paginação -->
        <div class="mt-4 d-flex justify-content-center">
            <?php echo e($clothes->links()); ?>

        </div>
    <?php else: ?>
        <?php if (isset($component)) { $__componentOriginal5194778a3a7b899dcee5619d0610f5cf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5194778a3a7b899dcee5619d0610f5cf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.alert','data' => ['type' => 'info']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'info']); ?>
            Nenhuma roupa cadastrada ainda. 
            <a href="<?php echo e(route('clothes.create')); ?>" class="alert-link">Clique aqui</a> 
            para adicionar sua primeira roupa!
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5194778a3a7b899dcee5619d0610f5cf)): ?>
<?php $attributes = $__attributesOriginal5194778a3a7b899dcee5619d0610f5cf; ?>
<?php unset($__attributesOriginal5194778a3a7b899dcee5619d0610f5cf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5194778a3a7b899dcee5619d0610f5cf)): ?>
<?php $component = $__componentOriginal5194778a3a7b899dcee5619d0610f5cf; ?>
<?php unset($__componentOriginal5194778a3a7b899dcee5619d0610f5cf); ?>
<?php endif; ?>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\LTP3-CRUD-Laravel\resources\views/clothes/index.blade.php ENDPATH**/ ?>