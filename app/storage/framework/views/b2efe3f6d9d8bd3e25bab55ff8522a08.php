<?php $__env->startSection('content'); ?>
    <div class="container mx-auto px-4 py-6">

        <div class="flex justify-center mb-8">
            <a href="<?php echo e(route('products.create')); ?>"
               class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-6 py-3 rounded-lg shadow transition">
                List A New Product
            </a>
        </div>


        <div class="mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 pb-2 border-b border-gray-200">
                My Listings
            </h2>
        </div>

        <?php if($products->isEmpty()): ?>
            <div class="text-center py-10 bg-white rounded-xl shadow-sm p-6">
                <p class="text-gray-500 text-lg">You haven't added any products yet.</p>
                <div class="mt-4 flex justify-center">
                    <a href="<?php echo e(route('products.create')); ?>"
                       class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-6 py-2 rounded-lg shadow transition">
                        List Your First Product
                    </a>
                </div>
            </div>
        <?php else: ?>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                        
                        <div class="h-48 bg-gray-100 overflow-hidden">
                            <?php if($product->image): ?>
                                <img src="<?php echo e(asset('storage/' . $product->image)); ?>"
                                     alt="<?php echo e($product->name); ?>"
                                     class="w-full h-full object-cover">
                            <?php else: ?>
                                <div class="w-full h-full flex items-center justify-center text-gray-400">
                                    <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                            <?php endif; ?>
                        </div>

                        
                        <div class="p-5">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="text-lg font-semibold text-gray-800 truncate"><?php echo e($product->name); ?></h3>
                                <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">
                                    <?php echo e($product->category); ?>

                                </span>
                            </div>

                            <div class="flex items-center mb-3">
                                <span class="text-xl font-bold text-gray-900">$<?php echo e(number_format($product->price, 2)); ?></span>
                            </div>

                            <p class="text-gray-600 text-sm mb-4 line-clamp-2"><?php echo e($product->description); ?></p>

                            
                            <div class="flex justify-between items-center">
                                <a href="<?php echo e(route('products.edit', $product->id)); ?>"
                                   class="text-blue-600 hover:text-blue-800 font-medium text-sm flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                    </svg>
                                    Edit
                                </a>
                                <form action="<?php echo e(route('products.destroy', $product->id)); ?>" method="POST"
                                      onsubmit="return confirm('Are you sure you want to delete this product?')">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit"
                                            class="text-red-600 hover:text-red-800 font-medium text-sm flex items-center">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Software Engineering\retech-market\app\resources\views/products/my_listings.blade.php ENDPATH**/ ?>