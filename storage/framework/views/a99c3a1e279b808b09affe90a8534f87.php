

<?php $__env->startSection('title', $cloth->name . ' - Armário Virtual'); ?>

<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h4 class="mb-0"><i class="bi bi-eye"></i> Detalhes da Roupa</h4>
                <?php if (isset($component)) { $__componentOriginal8c81617a70e11bcf247c4db924ab1b62 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8c81617a70e11bcf247c4db924ab1b62 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.status-badge','data' => ['status' => $cloth->status]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('status-badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['status' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($cloth->status)]); ?>
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
            </div>
            <div class="card-body">
                <div class="row">
                    <!-- Imagem -->
                    <div class="col-md-5 mb-3">
                        <?php if($cloth->image): ?>
                            <img src="<?php echo e(asset('storage/' . $cloth->image)); ?>" 
                                 alt="<?php echo e($cloth->name); ?>" 
                                 class="img-fluid rounded shadow">
                        <?php else: ?>
                            <div class="bg-secondary rounded d-flex align-items-center justify-content-center" 
                                 style="height: 400px;">
                                <i class="bi bi-image text-white" style="font-size: 6rem;"></i>
                            </div>
                        <?php endif; ?>
                    </div>

                    <!-- Informações -->
                    <div class="col-md-7">
                        <h2 class="mb-4"><?php echo e($cloth->name); ?></h2>

                        <div class="cloth-details">
                            <div class="detail-item">
                                <span class="detail-label"><i class="bi bi-tag"></i> Categoria</span>
                                <span class="detail-value"><?php echo e($cloth->category); ?></span>
                            </div>
                            
                            <div class="detail-item">
                                <span class="detail-label"><i class="bi bi-palette"></i> Cor</span>
                                <span class="detail-value"><?php echo e($cloth->color); ?></span>
                            </div>
                            
                            <div class="detail-item">
                                <span class="detail-label"><i class="bi bi-rulers"></i> Tamanho</span>
                                <span class="detail-value"><?php echo e($cloth->size); ?></span>
                            </div>
                            
                            <div class="detail-item">
                                <span class="detail-label"><i class="bi bi-droplet"></i> Material</span>
                                <span class="detail-value"><?php echo e($cloth->material); ?></span>
                            </div>
                            
                            <div class="detail-item">
                                <span class="detail-label"><i class="bi bi-currency-dollar"></i> Preço</span>
                                <span class="detail-value text-success fw-bold">R$ <?php echo e(number_format($cloth->price, 2, ',', '.')); ?></span>
                            </div>
                            
                            <div class="detail-item">
                                <span class="detail-label"><i class="bi bi-shop"></i> Loja</span>
                                <span class="detail-value"><?php echo e($cloth->store); ?></span>
                            </div>
                            
                            <div class="detail-item">
                                <span class="detail-label"><i class="bi bi-calendar-event"></i> Data de Compra</span>
                                <span class="detail-value"><?php echo e($cloth->purchase_date->format('d/m/Y')); ?></span>
                            </div>
                            
                            <div class="detail-item">
                                <span class="detail-label"><i class="bi bi-info-circle"></i> Status</span>
                                <span class="detail-value"><?php if (isset($component)) { $__componentOriginal8c81617a70e11bcf247c4db924ab1b62 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8c81617a70e11bcf247c4db924ab1b62 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.status-badge','data' => ['status' => $cloth->status]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('status-badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['status' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($cloth->status)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8c81617a70e11bcf247c4db924ab1b62)): ?>
<?php $attributes = $__attributesOriginal8c81617a70e11bcf247c4db924ab1b62; ?>
<?php unset($__attributesOriginal8c81617a70e11bcf247c4db924ab1b62); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8c81617a70e11bcf247c4db924ab1b62)): ?>
<?php $component = $__componentOriginal8c81617a70e11bcf247c4db924ab1b62; ?>
<?php unset($__componentOriginal8c81617a70e11bcf247c4db924ab1b62); ?>
<?php endif; ?></span>
                            </div>
                            
                            <div class="detail-item">
                                <span class="detail-label"><i class="bi bi-clock"></i> Cadastrado em</span>
                                <span class="detail-value"><?php echo e($cloth->created_at->format('d/m/Y H:i')); ?></span>
                            </div>
                            
                            <?php if($cloth->updated_at != $cloth->created_at): ?>
                            <div class="detail-item">
                                <span class="detail-label"><i class="bi bi-pencil-square"></i> Última atualização</span>
                                <span class="detail-value"><?php echo e($cloth->updated_at->format('d/m/Y H:i')); ?></span>
                            </div>
                            <?php endif; ?>
                        </div>

                        <!-- Ações -->
                        <div class="d-flex gap-2 mt-4">
                            <a href="<?php echo e(route('clothes.index')); ?>" class="btn btn-secondary">
                                <i class="bi bi-arrow-left"></i> Voltar
                            </a>
                            <a href="<?php echo e(route('clothes.edit', $cloth->id)); ?>" class="btn btn-warning">
                                <i class="bi bi-pencil"></i> Editar
                            </a>
                            <form action="<?php echo e(route('clothes.destroy', $cloth->id)); ?>" 
                                  method="POST" 
                                  onsubmit="return confirm('Tem certeza que deseja excluir esta roupa?');"
                                  class="d-inline">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger">
                                    <i class="bi bi-trash"></i> Excluir
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\LTP3-CRUD-Laravel\resources\views/clothes/show.blade.php ENDPATH**/ ?>