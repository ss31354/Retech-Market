<form method="POST" action="<?php echo e(route('profile.update')); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PATCH'); ?>

    <div>
        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
        <input id="name" name="name" type="text"
               value="<?php echo e(old('name', auth()->user()->name)); ?>"
               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
        <?php $__errorArgs = ['name'];
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
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input id="email" name="email" type="email"
               value="<?php echo e(old('email', auth()->user()->email)); ?>"
               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
        <?php $__errorArgs = ['email'];
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
        <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-white hover:bg-indigo-700">
            Save Profile
        </button>
    </div>
</form>
<?php /**PATH D:\Software Engineering\retech-market\app\resources\views/profile/partials/update-profile-information-form.blade.php ENDPATH**/ ?>