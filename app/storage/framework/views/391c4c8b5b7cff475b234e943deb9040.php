<!-- resources/views/products/index.blade.php -->



<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2>Your Product Listings</h2>

        <?php if($products->isEmpty()): ?>
            <p>You haven't listed any products yet.</p>
        <?php else: ?>
            <div class="row">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="<?php echo e(asset('storage/' . $product->image)); ?>" class="card-img-top" alt="<?php echo e($product->name); ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo e($product->name); ?></h5>
                                <p class="card-text"><?php echo e($product->description); ?></p>
                                <p><strong>Price:</strong> $<?php echo e($product->price); ?></p>
                                <p><strong>Category:</strong> <?php echo e($product->category); ?></p>
                                <a href="<?php echo e(route('products.edit', $product->id)); ?>" class="btn btn-primary">Edit</a>
                                <form action="<?php echo e(route('products.destroy', $product->id)); ?>" method="POST" style="display:inline;">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Software Engineering\retech-market\app\resources\views/products/index.blade.php ENDPATH**/ ?>