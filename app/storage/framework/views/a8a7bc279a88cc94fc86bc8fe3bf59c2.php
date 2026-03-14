<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['size' => 'md', 'class' => '']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['size' => 'md', 'class' => '']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php

    $sizes = [
        'sm' => 'h-10',    // 40px (was 32px)
        'md' => 'h-16',    // 64px (was 48px) - DEFAULT
        'lg' => 'h-24',    // 96px (was 80px)
        'xl' => 'h-32',    // 128px (was 96px)
    ];
?>

<a href="<?php echo e(url('/dashboard')); ?>" <?php echo e($attributes->merge(['class' => 'inline-block ' . $class])); ?>>
    <img
        src="<?php echo e(asset('images/logo/retech-market-logo.png')); ?>"
        alt="ReTech-Market Logo"
        class="<?php echo e($sizes[$size]); ?> w-auto hover:scale-105 transition-transform duration-200"
    >
</a>
<?php /**PATH D:\Software Engineering\retech-market\app\resources\views/components/logo.blade.php ENDPATH**/ ?>