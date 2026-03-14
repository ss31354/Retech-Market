<?php $__env->startSection('content'); ?>
    <div class="flex justify-center py-12">
        <div class="w-full max-w-xl mx-4 sm:mx-6 lg:mx-8">
            <h2 class="font-semibold text-2xl text-gray-800 mb-6">Edit Product</h2>

            <div class="bg-white p-6 rounded shadow">
                <form action="<?php echo e(route('products.update', $product->id)); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>

                    <div class="mb-4">
                        <label for="name" class="block text-gray-700">Product Name</label>
                        <input type="text" name="name" id="name" value="<?php echo e($product->name); ?>" class="w-full px-4 py-2 border rounded" required>
                    </div>

                    <div class="mb-4">
                        <label for="category" class="block text-gray-700">Category</label>
                        <input type="text" name="category" id="category" value="<?php echo e($product->category); ?>" class="w-full px-4 py-2 border rounded" required>
                    </div>

                    <div class="mb-4">
                        <label for="price" class="block text-gray-700">Price</label>
                        <input type="number" name="price" id="price" value="<?php echo e($product->price); ?>" class="w-full px-4 py-2 border rounded" required>
                    </div>

                    <div class="mb-4">
                        <label for="description" class="block text-gray-700">Description</label>
                        <textarea name="description" id="description" class="w-full px-4 py-2 border rounded" required><?php echo e($product->description); ?></textarea>
                    </div>

                    <div class="mb-4">
                        <label for="contact_email" class="block text-gray-700">Contact Email</label>
                        <input type="email" name="contact_email" id="contact_email" value="<?php echo e($product->contact_email); ?>" class="w-full px-4 py-2 border rounded" required>
                    </div>

                    <div class="mb-4">
                        <label for="whatsapp" class="block text-gray-700">WhatsApp</label>
                        <input type="text" name="whatsapp" id="whatsapp" value="<?php echo e($product->whatsapp); ?>" class="w-full px-4 py-2 border rounded" required>
                    </div>

                    <div class="mb-4">
                        <label for="image" class="block text-gray-700">Image (optional)</label>
                        <input type="file" name="image" id="image" class="w-full px-4 py-2 border rounded">
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                            Update Product
                        </button>

                        <a href="<?php echo e(url()->previous()); ?>" class="text-black-600 hover:text-blue-800">
                            Cancel
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Software Engineering\retech-market\app\resources\views/products/edit.blade.php ENDPATH**/ ?>