<?php $__env->startSection('content'); ?>
    <div class="flex justify-center py-12">
        <div class="w-full max-w-xl mx-4 sm:mx-6 lg:mx-8">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-6">
                List a New Product
            </h2>

            <div class="bg-white p-6 rounded shadow">

                <form method="POST" action="<?php echo e(route('products.store')); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>

                    <div class="mb-4">
                        <label class="block text-gray-700">Product Name</label>
                        <input type="text" name="name" class="w-full border rounded px-3 py-2" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700">Category</label>
                        <select name="category" class="w-full border rounded px-3 py-2" required>
                            <option value="">Select Category</option>
                            <option value="Smartphone">Smartphone</option>
                            <option value="Smartwatch">Smartwatch</option>
                            <option value="Earbuds">Earbuds</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700">Price ($)</label>
                        <input type="number" name="price" class="w-full border rounded px-3 py-2" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700">Product Image</label>
                        <input type="file" name="image" class="w-full border rounded px-3 py-2" accept="image/*" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700">Product Description</label>
                        <textarea name="description" class="w-full border rounded px-3 py-2" rows="4" required></textarea>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700">Contact Email</label>
                        <input type="email" name="contact_email" class="w-full border rounded px-3 py-2" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700">WhatsApp Number</label>
                        <input type="text" name="whatsapp" class="w-full border rounded px-3 py-2" required>
                    </div>

                    <div>
                        <div class="flex justify-between items-center mt-6">
                            <button type="submit"
                                    class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                                Submit Product
                            </button>
                            <a href="<?php echo e(url()->previous()); ?>"
                               class="text-black hover:text-blue-800 hover:underline">
                                Cancel
                            </a>
                        </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Software Engineering\retech-market\app\resources\views/products/create.blade.php ENDPATH**/ ?>