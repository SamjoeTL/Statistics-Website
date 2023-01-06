<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

  <title><?php echo e(config('app.name', 'Laravel')); ?></title>


  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css" />

  <!-- Scripts -->
  <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
  <style>
    @import url(https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css);

    /**
 * tailwind.config.js
 * module.exports = {
 *   variants: {
 *     extend: {
 *       backgroundColor: ['active'],
 *     }
 *   },
 * }
 */
    .active\:bg-gray-50:active {
      --tw-bg-opacity: 1;
      background-color: rgba(249, 250, 251, var(--tw-bg-opacity));
    }
  </style>
</head>

<body class="font-sans antialiased">
  <div class="min-h-screen bg-gray-100 flex">
    <?php echo $__env->make('layouts.navigation-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Page Heading -->
    <?php if(isset($header)): ?>
      <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
          <?php echo e($header); ?>

        </div>
      </header>
    <?php endif; ?>

    <!-- Page Content -->
    <main>
      <?php echo $__env->make('layouts.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo e($slot); ?>

    </main>
  </div>
  <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
</body>

</html>
<?php /**PATH D:\Tegar Folder\Semester 3\Statistik\UAS\resources\views/layouts/template-layout.blade.php ENDPATH**/ ?>