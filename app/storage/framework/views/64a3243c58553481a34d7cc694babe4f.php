<form method="POST" action="<?php echo e(route('password.update')); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>

    <div>
        <label for="current_password" class="block text-sm font-medium text-gray-700">Current Password</label>
        <input id="current_password" name="current_password" type="password"
               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
        <?php $__errorArgs = ['current_password'];
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

    <div class="mt-4">
        <label for="password" class="block text-sm font-medium text-gray-700">New Password</label>
        <input id="password" name="password" type="password"
               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
        <?php $__errorArgs = ['password'];
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

    <div class="mt-4">
        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm New Password</label>
        <input id="password_confirmation" name="password_confirmation" type="password"
               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
    </div>

    <div class="flex justify-end mt-4">
        <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-white hover:bg-indigo-700">
            Update Password
        </button>
    </div>
</form>

<?php /**PATH D:\Software Engineering\retech-market\app\resources\views/profile/partials/update-password-form.blade.php ENDPATH**/ ?>