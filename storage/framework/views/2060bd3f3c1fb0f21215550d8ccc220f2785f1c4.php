
<?php if(Session::get('success')): ?>
  <div class="p-4 fixed top-0 right-0 text-sm text-green-700 bg-green-100 rounded-lg shadow-lg z-[5]" role="alert">
    <?php echo e(Session::get('success')); ?>

  </div>
<?php endif; ?>
<?php /**PATH D:\Tegar Folder\Semester 3\Statistik\UAS\resources\views/layouts/message.blade.php ENDPATH**/ ?>