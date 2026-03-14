<?php $__env->startSection('content'); ?>
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-lg">

            
            <?php if($product->image): ?>
                <div class="mb-6">
                    <img src="<?php echo e(asset('storage/' . $product->image)); ?>" alt="<?php echo e($product->name); ?>" class="w-full h-80 object-cover rounded">
                </div>
            <?php endif; ?>

            
            <div class="mb-6">
                <h1 class="text-3xl font-bold text-gray-800 mb-2"><?php echo e($product->name); ?></h1>
                <p class="text-sm text-gray-500 mb-4"><?php echo e($product->category); ?></p>

                <p class="text-lg text-gray-700 mb-4"><?php echo e($product->description); ?></p>

                <div class="text-2xl font-semibold text-green-600 mb-6">
                    $<?php echo e(number_format($product->price, 2)); ?>

                </div>
            </div>

            
            <div class="bg-gray-100 p-6 rounded-lg mb-6">
                <h2 class="text-xl font-bold mb-4 text-gray-800">Contact Details</h2>
                <p class="text-gray-700"><strong>Listed by:</strong> <?php echo e($product->user->name ?? 'Unknown Seller'); ?></p>
                <p class="text-gray-700"><strong>Email:</strong> <?php echo e($product->contact_email); ?></p>
                <p class="text-gray-700"><strong>WhatsApp:</strong> <?php echo e($product->whatsapp); ?></p>
            </div>

            
            <div class="flex justify-start mt-6">
                <a href="<?php echo e(url()->previous()); ?>"
                   class="inline-block bg-blue-500 text-white font-semibold py-3 px-6 rounded-lg shadow-md hover:bg-blue-600 hover:text-black transition">
                    Back
                </a>
            </div>



        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Software Engineering\retech-market\app\resources\views/products/show.blade.php ENDPATH**/ ?>