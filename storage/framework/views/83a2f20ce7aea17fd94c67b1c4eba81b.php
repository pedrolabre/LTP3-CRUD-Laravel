

<?php $__env->startSection('title', 'Nova Roupa - Armário Virtual'); ?>

<?php $__env->startSection('content'); ?>
<div style="max-width: 900px; margin: 0 auto; padding: 0 20px;">
    <h1 class="mb-4">
        <i class="bi bi-plus-circle"></i> Cadastrar Nova Roupa
    </h1>
    
    <form action="<?php echo e(route('clothes.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

        <?php echo $__env->make('clothes.partials.form-fields', ['cloth' => null], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <div class="d-flex justify-content-between mt-4">
            <a href="<?php echo e(route('clothes.index')); ?>" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Voltar
            </a>
            <button type="submit" class="btn btn-primary">
                <i class="bi bi-save"></i> Salvar Roupa
            </button>
        </div>
    </form>
</div>

<?php echo $__env->yieldPushContent('scripts'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\LTP3-CRUD-Laravel\resources\views/clothes/create.blade.php ENDPATH**/ ?>