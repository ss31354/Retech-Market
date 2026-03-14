<form method="POST" action="<?php echo e(route('profile.destroy')); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('DELETE'); ?>

    <div class="bg-red-100 p-4 rounded-md">
        <h3 class="text-lg font-semibold text-red-700">Delete Account</h3>
        <p class="text-sm text-red-600 mt-1">Once your account is deleted, all of its resources and data will be permanently deleted.</p>
    </div>

    <div class="flex justify-end mt-4">
        <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-white hover:bg-red-700">
            Delete Account
        </button>
    </div>
</form>
<?php /**PATH D:\Software Engineering\retech-market\app\resources\views/profile/partials/delete-user-form.blade.php ENDPATH**/ ?>