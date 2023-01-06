<?php if (isset($component)) { $__componentOriginal501e81491cdd9b61e2d9ba717a17361860b8d597 = $component; } ?>
<?php $component = App\View\Components\HomeLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('home-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\HomeLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php $__currentLoopData = $spots; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="z-30 relative items-center justify-center w-full h-full overflow-auto">
    <div class="inset-0 h-screen bg-cover bg-center" 
        style=" 
        background-image: 
        url('https://mediaim.expedia.com/destination/1/0f42d24364321283d2e7a242ffb50dab.jpg');"
    >
    </div>
    <div class="absolute inset-0 z-20 flex items-center justify-center h-screen w-full bg-gray-900 bg-opacity-75"></div>
    <div class="absolute inset-0  z-30  flex flex-col items-center justify-center">
        <div class="shadow-2xl rounded-lg w-4/5 h-96 bg-cover bg-center"
            style=" 
            background-image: 
            url('img/<?php echo e($s->spot_img); ?>.jpg');">

            <div class="grid grid-cols-12 gap-1">
                <div class="relative my-6 px-8 col-span-12 sm:col-span-12 md:col-span-7 lg:col-span-7 xxl:col-span-7">
                    <div class="border-l-4 border-black py-20 px-5 mx-2 absolute left-0">
                        <p class="italic text-black text-xl md:text-4xl lg:text-4xl uppercase text-center  font-semibold ">
                        <?php echo e($s->spot_name); ?>

                        </p>
                    </div>
                    <div class="text-black font-semibold text-xl mb-4">01</div>
                    <div class="absolute border-black border-t-4 bottom-0 py-1 px-4 w-4/5"></div>
                </div>
                <div class="col-span-12 sm:col-span-12 md:col-span-5 lg:col-span-5 xxl:col-span-5">
                    <div class="relative bg-teal-300 h-full md:h-96 w-full bg-opacity-50 rounded-tr-lg rounded-br-lg">
                        <div class="p-8">
                            <p class="text-black text-xs md:text-sm lg:text-xl mb-4">
                            <?php echo e($s->spot_desc); ?>

                            </p>
                            <div class="bottom-0 absolute p-2 right-0">
                                <button class="opacity-75 bg-gray-100 hover:bg-teal-900 hover:text-black text-sm font-bold py-2 px-4 rounded inline-flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>LEARN MORE</span>
                                </button> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal501e81491cdd9b61e2d9ba717a17361860b8d597)): ?>
<?php $component = $__componentOriginal501e81491cdd9b61e2d9ba717a17361860b8d597; ?>
<?php unset($__componentOriginal501e81491cdd9b61e2d9ba717a17361860b8d597); ?>
<?php endif; ?><?php /**PATH D:\Tegar Folder\Semester 3\Teknologi Web\uts\resources\views/elo/spot.blade.php ENDPATH**/ ?>