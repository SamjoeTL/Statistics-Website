<?php if (isset($component)) { $__componentOriginal3d62dbed0010cc6c2e3e99ed543a0ae1086554a4 = $component; } ?>
<?php $component = App\View\Components\TemplateLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('template-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\TemplateLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <!DOCTYPE html>
    <html>

    <body>
        <style>
            dialog[open] {
            animation: appear .15s cubic-bezier(0, 1.8, 1, 1.8);
          }

            dialog::backdrop {
              background: linear-gradient(45deg, rgba(0, 0, 0, 0.5), rgba(54, 54, 54, 0.5));
              backdrop-filter: blur(3px);
            }


          @keyframes appear {
            from {
              opacity: 0;
              transform: translateX(-3rem);
            }

            to {
              opacity: 1;
              transform: translateX(0);
            }
          }
          </style>

          <section class="flex items-start justify-center w-screen h-screen p-10 ">
            <button onclick="document.getElementById('myModal').showModal()" id="btn" class="px-10 py-3 text-white bg-gray-800 rounded shadow-xl text">Open</button>
          </section>

          <dialog id="myModal" class="w-11/12 h-auto p-5 bg-white rounded-md md:w-1/2 ">

             <div class="flex flex-col w-full h-auto ">
                  <!-- Header -->
                  <div class="flex items-center justify-center w-full h-auto">
                    <div class="flex items-center justify-center w-10/12 h-auto py-3 text-2xl font-bold">
                          Modal Header
                    </div>
                    <div onclick="document.getElementById('myModal').close();" class="flex justify-center w-1/12 h-auto cursor-pointer">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </div>
                    <!--Header End-->
                  </div>
                    <!-- Modal Content-->
                    <div class="card-body">
                        <form action="<?php echo e(route('import')); ?>"
                              method="POST"
                              enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <input type="file" name="file"
                                   class="form-control">
                            <br>
                            <button class="btn btn-success">
                                  Import User Data
                               </button>
                            </form>
                        </div>
                    </div>
                </div>
            </body>
                    <!-- End of Modal Content-->



                  </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3d62dbed0010cc6c2e3e99ed543a0ae1086554a4)): ?>
<?php $component = $__componentOriginal3d62dbed0010cc6c2e3e99ed543a0ae1086554a4; ?>
<?php unset($__componentOriginal3d62dbed0010cc6c2e3e99ed543a0ae1086554a4); ?>
<?php endif; ?>
<?php /**PATH D:\Tegar Folder\Semester 3\Statistik\UAS\resources\views/backpage/import.blade.php ENDPATH**/ ?>