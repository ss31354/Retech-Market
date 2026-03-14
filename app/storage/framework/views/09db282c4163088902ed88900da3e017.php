<?php $__env->startSection('content'); ?>
    <!-- About Us Section -->
    <div class="min-h-screen py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-xl shadow-lg">
            <!-- About Us Header -->
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-blue-600 mb-4">About Retech-Market</h1>
                <div class="w-24 h-1 bg-blue-400 mx-auto"></div>
            </div>

            <!-- Project Story -->
            <div class="mb-12 bg-blue-50 p-6 rounded-lg border-l-4 border-blue-400">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Why We Built This</h2>
                <p class="text-gray-700 leading-relaxed">
                    We noticed that many people have used tech devices — like smartphones, earbuds, and smartwatches — just sitting unused, while others are actively searching for affordable options. That’s what inspired us to build <strong>ReTech Market</strong> — a simple, modern platform designed to:
                </p>
                <ul class="mt-3 list-disc list-inside text-gray-700 space-y-2 pl-4">
                    <li>Enable easy peer-to-peer resale of used tech devices</li>
                    <li>Provide access to affordable gadgets without middlemen</li>
                    <li>Reduce e-waste by giving electronics a second life</li>
                    <li>Promote a more sustainable and circular tech economy</li>
                    <li>Apply our tech skills to solve real-world challenges</li>
                </ul>
            </div>

            <!-- Team Section -->
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Meet Our Team</h2>
            <div class="grid sm:grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                <!-- Salman -->
                <div class="bg-gradient-to-br from-blue-50 to-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <div class="flex items-center mb-4">
                        <div class="bg-blue-100 text-blue-800 w-12 h-12 rounded-full flex items-center justify-center font-bold text-xl mr-4">
                            SS
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">Salman Syed</h3>
                            <p class="text-blue-600 font-medium">Backend Specialist</p>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-3">
                        6th Semester CS Student passionate about database architecture and Laravel development.
                    </p>
                    <p class="text-gray-600 text-sm">
                        Handles server logic, API integration, and system security.
                    </p>
                </div>

                <!-- Urooj -->
                <div class="bg-gradient-to-br from-green-50 to-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <div class="flex items-center mb-4">
                        <div class="bg-green-100 text-green-800 w-12 h-12 rounded-full flex items-center justify-center font-bold text-xl mr-4">
                            UA
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">Urooj Ali</h3>
                            <p class="text-green-600 font-medium">UI/UX Designer</p>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-3">
                        6th Semester CS Student with focus on human-computer interaction and frontend development.
                    </p>
                    <p class="text-gray-600 text-sm">
                        Designed all wireframes and implements responsive interfaces.
                    </p>
                </div>
            </div>

            <!-- Contact Us Form -->
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-blue-600 mb-4">Contact Us</h1>
                <div class="w-24 h-1 bg-blue-400 mx-auto"></div>
            </div>

            <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
                <form action="<?php echo e(route('contact.submit')); ?>" method="POST">
                    <?php echo csrf_field(); ?>

                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 font-semibold">Name</label>
                        <input type="text" id="name" name="name" class="w-full p-3 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-semibold">Email</label>
                        <input type="email" id="email" name="email" class="w-full p-3 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                    </div>

                    <div class="mb-4">
                        <label for="message" class="block text-gray-700 font-semibold">Message</label>
                        <textarea id="message" name="message" rows="5" class="w-full p-3 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" required></textarea>
                    </div>

                    <button type="submit" class="w-full py-3 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700 transition duration-300">Send Message</button>
                </form>
            </div>

        </div>
    </div>
    <?php if(session('success')): ?>
        <div class="bg-green-500 text-white text-center py-2 rounded-md mb-4">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Software Engineering\retech-market\app\resources\views/contact.blade.php ENDPATH**/ ?>