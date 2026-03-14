<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>ReTech-Market</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Favicon -->
    <link rel="icon" href="<?php echo e(asset('images/logo/retech-market-logo.png')); ?>" type="image/png">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- App Styles and Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

    <!-- Custom Scrollbar -->
    <style>
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-thumb {
            background: #3B82F6;
            border-radius: 4px;
        }
    </style>
</head>

<body class="font-sans antialiased min-h-screen flex flex-col"
      style="background: linear-gradient(135deg, #f0fdfa 0%, #e0f2fe 50%, #f0f9ff 100%)">

<!-- Header with dark green background -->
<header class="shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <?php echo $__env->make('layouts.navigation', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </div>
</header>

<!-- Page Main Content -->
<main class="flex-grow">
    <?php if(isset($header)): ?>
        <div class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <?php echo e($header); ?>

            </div>
        </div>
    <?php endif; ?>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <?php echo $__env->yieldContent('content'); ?> 
    </div>
</main>

<!-- Footer -->
<footer class="bg-white border-t">
    <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8 text-center text-gray-500 text-sm">
      &copy; <?php echo e(date('Y')); ?> ReTech-Market. Developed by Salman & Urooj. All rights reserved.
    </div>
</footer>

</body>
</html>
<?php /**PATH D:\Software Engineering\retech-market\app\resources\views/layouts/app.blade.php ENDPATH**/ ?>