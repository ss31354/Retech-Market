<!-- resources/views/products/create.blade.php -->



<?php $__env->startSection('content'); ?>
    <div class="max-w-7xl mx-auto px-6 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Add New Product</h2>

        <!-- Product Form -->
        <form action="<?php echo e(route('products.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>

            <div class="space-y-4">
                <!-- Product Name -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Product Name</label>
                    <input type="text" id="name" name="name" class="mt-1 block w-full p-2 border rounded" required>
                </div>

                <!-- Category Dropdown -->
                <div>
                    <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                    <select name="category" id="category" class="mt-1 block w-full p-2 border rounded" required>
                        <option value="">Select Category</option>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($category); ?>"><?php echo e($category); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <!-- Price -->
                <div>
                    <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                    <input type="number" id="price" name="price" class="mt-1 block w-full p-2 border rounded" required>
                </div>

                <!-- Image URL -->
                <div>
                    <label for="image_url" class="block text-sm font-medium text-gray-700">Image URL</label>
                    <input type="url" id="image_url" name="image_url" class="mt-1 block w-full p-2 border rounded" required>
                </div>

                <!-- Submit Button -->
                <div class="pt-4">
                    <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded-lg">Add Product</button>
                </div>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Software Engineering\retech-market\app\resources\views/products/create.blade.php ENDPATH**/ ?>
