<?php $__env->startSection('content'); ?>
    <div class="container mx-auto px-4 py-6">
        
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">
                <?php echo e(__('My Interested Items')); ?>

            </h1>
            <p class="text-gray-600">Your saved items that you're interested in</p>
        </div>

        <?php if(session('success')): ?>
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6" role="alert">
                <span class="block sm:inline"><?php echo e(session('success')); ?></span>
            </div>
        <?php endif; ?>

        
        <section class="mb-12">
            <?php if($interestedProducts->isEmpty()): ?>
                <div class="text-center py-10 bg-white rounded-xl shadow-sm p-6">
                    <p class="text-gray-500 text-lg">You haven't marked any items as interested yet.</p>
                    <p class="text-gray-500 mt-2">Click the heart icon on products to save them here.</p>
                </div>
            <?php else: ?>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    <?php $__currentLoopData = $interestedProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition duration-300 flex flex-col h-full">
                            
                            <div class="relative h-48 bg-gray-100 overflow-hidden">
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

                            
                            <div class="p-5 flex flex-col flex-grow">
                                <div class="flex justify-between items-start mb-2">
                                    <h3 class="text-lg font-semibold text-gray-800 truncate"><?php echo e($product->name); ?></h3>
                                    <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded whitespace-nowrap ml-2">
                                        <?php echo e($product->category); ?>

                                    </span>
                                </div>

                                <div class="mb-3">
                                    <span class="text-xl font-bold text-gray-900">$<?php echo e(number_format($product->price, 2)); ?></span>
                                </div>

                                <p class="text-gray-600 text-sm mb-4 line-clamp-2 flex-grow"><?php echo e($product->description); ?></p>

                                <div class="flex items-center text-sm text-gray-500 mb-4">
                                    <svg class="w-4 h-4 mr-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="truncate"><?php echo e($product->user->name ?? 'Unknown'); ?></span>
                                </div>

                                
                                <div class="flex justify-between items-center mt-auto">
                                    <a href="<?php echo e(route('products.show', $product->id)); ?>"
                                       class="text-blue-600 hover:text-blue-800 font-medium text-sm whitespace-nowrap">
                                        View Details
                                    </a>
                                    <button class="text-pink-500 hover:text-pink-700 transition"
                                            data-product-id="<?php echo e($product->id); ?>"
                                            onclick="removeFromInterested(this)">
                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                
                <div class="mt-8">
                    <?php echo e($interestedProducts->links()); ?>

                </div>
            <?php endif; ?>
        </section>
    </div>

    <script>
        function removeFromInterested(button) {
            const productId = button.getAttribute('data-product-id');
            const card = button.closest('.bg-white');

            fetch(`/interested-items/${productId}`, {
                method: 'DELETE',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'Accept': 'application/json'
                }
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Add fade out animation before removing
                        card.style.transition = 'opacity 300ms ease';
                        card.style.opacity = '0';

                        setTimeout(() => {
                            card.remove();
                            showToast('Removed from your interested items');

                            // If no items left, show empty state
                            if (document.querySelectorAll('.bg-white').length === 0) {
                                window.location.reload();
                            }
                        }, 300);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    showToast('Error removing item', 'error');
                });
        }

        function showToast(message, type = 'success') {
            const toast = document.createElement('div');
            toast.className = `fixed bottom-4 right-4 ${
                type === 'success' ? 'bg-green-500' : 'bg-red-500'
            } text-white px-4 py-2 rounded shadow-lg`;
            toast.textContent = message;
            document.body.appendChild(toast);

            setTimeout(() => {
                toast.remove();
            }, 3000);
        }
    </script


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Software Engineering\retech-market\app\resources\views/interested-items/index.blade.php ENDPATH**/ ?>