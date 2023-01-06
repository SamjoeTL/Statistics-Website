<?php if (isset($component)) { $__componentOriginal3d62dbed0010cc6c2e3e99ed543a0ae1086554a4 = $component; } ?>
<?php $component = App\View\Components\TemplateLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('template-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\TemplateLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

<body>
   <div class="overflow-x-auto relative w-full">
    <h1 class="font-bold text-3xl my-10">List Guider of Guidy 2022</h1>
<button class="focus:outline-none text-white bg-teal-700 hover:bg-gray-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-teal-600 dark:hover:bg-teal-700 dark:focus:ring-teal-800"><a href="create">Add Data</a></button>
    <table class="w-full text-sm text-left text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-200">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Number
                </th>
                <th scope="col" class="py-3 px-6">
                    Name
                </th>
                <th scope="col" class="py-3 px-6">
                    Desc
                </th>
                <th scope="col" class="py-3 px-6">
                    contact email
                </th>
                <th scope="col" class="py-3 px-6">
                    action
                </th>
                <th scope="col" class="py-3 px-6">
                    action
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
                $i = 1;
            ?>
            <?php $__currentLoopData = $guiders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="bg-white border-b">
            <td class="py-4 px-6">
                    <?php echo e($g->guider_id); ?>

                </td>
                <td class="py-4 px-6">
                    <?php echo e($g->guider_name); ?>

                </td>
                <td class="py-4 px-6">
                    <?php echo e($g->guider_desc); ?>

                </td>
                <td class="py-4 px-6">
                    <?php echo e($g->contact_name); ?>

                </td>
                <td class="py-4 px-6"><button class="bg-teal-500 rounded h-8 w-12 text-white "><a href="admin/<?php echo e($g->guider_id); ?>/edit">Edit</a></button></td>

                <td class="py-4 px-6">
                <form action="admin/<?php echo e($g->guider_id); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                    <input class="bg-teal-500 rounded h-8 w-12 text-white" type="submit" value="Delete">
                    </form>
                    </td>
                </th>
            </tr>
            <?php
                $i++;
            ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
</body>


 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3d62dbed0010cc6c2e3e99ed543a0ae1086554a4)): ?>
<?php $component = $__componentOriginal3d62dbed0010cc6c2e3e99ed543a0ae1086554a4; ?>
<?php unset($__componentOriginal3d62dbed0010cc6c2e3e99ed543a0ae1086554a4); ?>
<?php endif; ?>
<?php /**PATH D:\Tegar Folder\Semester 3\Teknologi Web\uts\resources\views/backpage/admin.blade.php ENDPATH**/ ?>