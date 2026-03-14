<?php $__env->startSection('content'); ?>
    <div class="container mx-auto px-4 py-6">
        
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">
                <?php echo e(__('Welcome to ReTech Market')); ?>, <?php echo e(Auth::user()->name ?? 'Guest'); ?>!
            </h1>
            <p class="text-gray-600">Browse the coolest tech and resell your gear in a snap!</p>
        </div>

        
        <form action="<?php echo e(route('products.index')); ?>" method="GET" class="flex flex-wrap items-center gap-4 mb-6">
            
            <input
                type="text"
                name="search"
                placeholder="Search by product title..."
                value="<?php echo e(request('search')); ?>"
                class="w-full sm:w-auto flex-1 px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500"
            >

            
            <select name="category" onchange="this.form.submit()" class="w-full sm:w-[150px] px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
                <option value="">All Categories</option>
                <option value="Smartwatch" <?php echo e(request('category') == 'Smartwatch' ? 'selected' : ''); ?>>Smartwatch</option>
                <option value="Earbuds" <?php echo e(request('category') == 'Earbuds' ? 'selected' : ''); ?>>Earbuds</option>
                <option value="Smartphone" <?php echo e(request('category') == 'Smartphone' ? 'selected' : ''); ?>>Smartphone</option>

            </select>

            
            <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">
                Search
            </button>
        </form>

        <div class="flex justify-center space-x-4 mb-10">
            <a href="<?php echo e(route('products.create')); ?>"
               class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-6 py-3 rounded-lg shadow transition">
                List a Product
            </a>
            <?php if(auth()->guard()->check()): ?>
                <a href="<?php echo e(route('products.myListings')); ?>"
                   class="bg-green-600 hover:bg-green-700 text-white font-medium px-6 py-3 rounded-lg shadow transition">
                    Your Listings
                </a>
            <?php endif; ?>
        </div>

        
        <section class="mb-12">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 pb-2 border-b border-gray-200">
                <?php if(request('search') && request('category')): ?>
                    Showing results for "<?php echo e(request('search')); ?>" in "<?php echo e(request('category')); ?>" category
                <?php elseif(request('search')): ?>
                    Showing results for "<?php echo e(request('search')); ?>"
                <?php elseif(request('category')): ?>
                    Explore "<?php echo e(request('category')); ?>" Listings
                <?php else: ?>
                    Explore Listings from Other Users
                <?php endif; ?>
            </h2>


        <?php if($products->isEmpty()): ?>
                <div class="text-center py-10">
                    <p class="text-gray-500 text-lg">No products available yet. Be the first to list something!</p>
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

                                <div class="flex items-center text-sm text-gray-500 mb-4">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                    </svg>
                                    <?php echo e($product->user->name ?? 'Unknown'); ?>

                                </div>

                                
                                <div class="flex justify-between items-center">
                                    <a href="<?php echo e(route('products.show', $product->id)); ?>"
                                       class="text-blue-600 hover:text-blue-800 font-medium text-sm">
                                        View Details
                                    </a>
                                    <div class="flex space-x-2">
                                        <button class="text-pink-500 hover:text-pink-700 transition"
                                                data-product-id="<?php echo e($product->id); ?>"
                                                onclick="handleInterested(this)">
                                            <svg class="w-6 h-6" fill="<?php echo e(auth()->user()->interestedProducts->contains($product->id) ? 'currentColor' : 'none'); ?>"
                                                 stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                      d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                </path>
                                            </svg>
                                        </button>
                                        <?php if(auth()->id() === $product->user_id): ?>
                                            <a href="<?php echo e(route('products.edit', $product->id)); ?>" class="text-yellow-500 hover:text-yellow-700">
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                                </svg>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
        </section>
    </div>
    <script>
        function handleInterested(button) {
            const productId = button.getAttribute('data-product-id');
            const heartIcon = button.querySelector('svg path');
            const isInterested = heartIcon.getAttribute('fill') === 'currentColor';

            fetch(`/interested-items/${productId}`, {
                method: isInterested ? 'DELETE' : 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'Accept': 'application/json'
                }
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Toggle heart fill state
                        heartIcon.setAttribute('fill', isInterested ? 'none' : 'currentColor');

                        // Show notification
                        showToast(isInterested ? 'Removed from interested items' : 'Added to interested items!');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }

        function showToast(message) {
            const toast = document.createElement('div');
            toast.className = 'fixed bottom-4 right-4 bg-green-500 text-white px-4 py-2 rounded shadow-lg';
            toast.textContent = message;
            document.body.appendChild(toast);

            setTimeout(() => {
                toast.remove();
            }, 3000);
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Software Engineering\retech-market\app\resources\views/dashboard.blade.php ENDPATH**/ ?>