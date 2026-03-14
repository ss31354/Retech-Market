<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReTech-Market | Login </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap');
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc;
        }
        .btn-primary {
            transition: all 0.2s;
            box-shadow: 0 2px 4px rgba(59, 130, 246, 0.25);
        }
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(59, 130, 246, 0.3);
        }
        .btn-outline {
            transition: all 0.2s;
        }
        .btn-outline:hover {
            background-color: rgba(59, 130, 246, 0.08);
        }
    </style>
</head>
<body class="relative min-h-screen">
<!-- Background Pattern -->
<div class="absolute inset-0 bg-[radial-gradient(#e5e7eb_1px,transparent_1px)] [background-size:16px_16px] opacity-10"></div>

<!-- Main Content -->
<div class="relative min-h-screen flex flex-col items-center justify-center p-6 max-w-4xl mx-auto">
    <!-- Logo Section Using Component -->
    <div class="mb-10 text-center">
        <?php if (isset($component)) { $__componentOriginale7dc1b8cfba3f7c6278ef1986decdec2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale7dc1b8cfba3f7c6278ef1986decdec2 = $attributes; } ?>
<?php $component = App\View\Components\Logo::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Logo::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'xl','class' => 'mx-auto mb-6']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale7dc1b8cfba3f7c6278ef1986decdec2)): ?>
<?php $attributes = $__attributesOriginale7dc1b8cfba3f7c6278ef1986decdec2; ?>
<?php unset($__attributesOriginale7dc1b8cfba3f7c6278ef1986decdec2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale7dc1b8cfba3f7c6278ef1986decdec2)): ?>
<?php $component = $__componentOriginale7dc1b8cfba3f7c6278ef1986decdec2; ?>
<?php unset($__componentOriginale7dc1b8cfba3f7c6278ef1986decdec2); ?>
<?php endif; ?>  <!-- Using the logo component -->
        <h1 class="text-4xl font-bold text-gray-800 mb-3">ReTech-Market</h1>
        <p class="text-lg text-gray-600 max-w-lg">
            A peer-to-peer marketplace for used electronics.<br>
            <span class="font-medium text-blue-600">No middleman fees - connect directly with sellers.</span>
        </p>
    </div>

    <!-- Auth Buttons -->
    <div class="flex flex-col sm:flex-row gap-5 mb-14 w-full sm:w-auto">
        <a href="/login" class="btn-primary px-10 py-4 bg-blue-600 text-white rounded-lg font-medium text-center text-lg">
            Login
        </a>
        <a href="/register" class="btn-primary px-10 py-4 bg-green-600 text-white rounded-lg font-medium text-center text-lg">
            Register
        </a>
    </div>

    <!-- Navigation -->
    <div class="absolute top-6 right-6 flex gap-4">
        <a href="/about" class="text-blue-600 hover:text-blue-800 font-medium px-4 py-2 rounded-lg hover:bg-blue-50 transition-colors">
            About Us
        </a>
    </div>

    <!-- Footer -->
    <div class="absolute bottom-6 left-0 right-0 text-center">
        <p class="text-sm text-gray-500">
            ♻️ Reducing e-waste since 2025
        </p>
    </div>
</div>
</body>
</html>
<?php /**PATH D:\Software Engineering\retech-market\app\resources\views/welcome.blade.php ENDPATH**/ ?>