<?php $__env->startSection('header'); ?>
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        <?php echo e(__('Profile')); ?>

    </h2>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <!-- Profile Section Heading -->
            <div class="text-center mb-8">
                <h3 class="text-2xl font-semibold text-gray-800">Profile Section</h3>
                <p class="text-gray-600">Manage your profile information and settings</p>
            </div>

            <!-- Top Link Buttons with Icons -->
            <div class="flex justify-between items-center mb-6 space-x-4">
                <!-- View Interested Products Button -->
                <a href="<?php echo e(route('interested-items.index')); ?>" class="inline-flex items-center px-6 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <!-- Heart (Love) Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 21l-1-1C5 15.5 2 12.5 2 9c0-2.5 2-4.5 4-4.5 1.5 0 3 1.5 4 3 1-1.5 2.5-3 4-3 2 0 4 2 4 4.5 0 3.5-3 6.5-9 11z" />
                    </svg>
                    View Interested Products
                </a>

                <!-- View My Listings Button -->
                <a href="<?php echo e(route('products.myListings')); ?>" class="inline-flex items-center px-6 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <!-- Hamburger (Three Bars) Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    View My Listings
                </a>
            </div>


            <!-- Profile Update Section -->
            <div class="p-6 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl space-y-6 mx-auto">
                    <?php echo $__env->make('profile.partials.update-profile-information-form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

                    <!-- WhatsApp Number Update Form -->
                    <form method="POST" action="<?php echo e(route('profile.update-whatsapp')); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>

                        <div class="mb-6">
                            <label for="whatsapp_number" class="block text-sm font-medium text-gray-700">WhatsApp Number</label>
                            <input id="whatsapp_number" name="whatsapp_number" type="text"
                                   value="<?php echo e(old('whatsapp_number', auth()->user()->whatsapp_number)); ?>"
                                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                            <?php $__errorArgs = ['whatsapp_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-red-500 text-xs"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="flex justify-end mt-4">
                            <button type="submit" class="inline-flex items-center px-6 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                Save WhatsApp Number
                            </button>
                        </div>
                    </form>

                </div>
            </div>

            <!-- Update Password Section -->
            <div class="p-6 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl mx-auto">
                    <?php echo $__env->make('profile.partials.update-password-form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                </div>
            </div>

            <!-- Delete Account Section -->
            <div class="p-6 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl mx-auto">
                    <?php echo $__env->make('profile.partials.delete-user-form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Software Engineering\retech-market\app\resources\views/profile/edit.blade.php ENDPATH**/ ?>