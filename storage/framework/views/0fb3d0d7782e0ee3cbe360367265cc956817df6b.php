
    <?php if (isset($component)) { $__componentOriginal501e81491cdd9b61e2d9ba717a17361860b8d597 = $component; } ?>
<?php $component = App\View\Components\HomeLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('home-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\HomeLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

          <!-- Image using Polygon so can add text -->
          
          <div class="relative h-96 m-10 overflow-hidden bg-teal-500 rounded-lg">
            
            <div class="absolute z-30 flex w-full h-full">
              <div class="relative z-30 w-5/6 px-6 py-8 text-white md:py-10 md:w-1/2">
                <h2 class="text-4xl">Find next place to travel <br /> 
                  <br />
                  Discover Amazing place in Bali
                </h2>
                <a href="dashboard">
                <button class="bg-black hover:bg-slate-900 text-white font-bold py-5 px-20 my-16 rounded-full">Plan Your Trip</button>
                </a>
              </div>
              <div class="absolute top-0 right-0 flex w-full h-full">
                <div class="w-1/3 h-full bg-teal-500"></div>
                <div class="relative w-1/3">
                  <svg
                    fill="currentColor"
                    viewBox="0 0 100 100"
                    class="absolute inset-y-0 z-20 h-full text-teal-500"
                  >
                    <polygon id="diagonal" points="0,0 100,0 50,100 0,100"></polygon>
                  </svg>
                  <svg
                    fill="currentColor"
                    viewBox="0 0 100 100"
                    class="absolute inset-y-0 z-10 h-full ml-6 text-white opacity-50"
                  >
                    <polygon points="0,0 100,0 50,100 0,100"></polygon>
                  </svg>
                </div>
              </div>
            </div>
            <div class="absolute top-0 right-0 block w-9/12 h-full">
              <img
                class="object-cover h-full min-w-full"
                src="https://c4.wallpaperflare.com/wallpaper/101/423/703/hindu-tanah-lot-indonesia-pura-batu-bolong-wallpaper-preview.jpg"
              />
            </div>
          </div>

        <!-- Guide -->

        <div class="w-full px-6 py-12 bg-white">
			  <div class="container max-w-4xl mx-auto text-center pb-10">
                <h2 class="text-4xl font-bold text-center tracking-tight text-gray-900 sm:text-5xl md:text-6xl mb-12">
                    <span class="block xl:inline">Top Tour Plan</span>
                    <span class="block text-teal-500 xl:inline">in Bali island</span>
                </h2>
				<h3 class="text-xl md:text-3xl leading-tight text-center max-w-md mx-auto text-gray-900 mb-12">
					Plan your holiday from now! </br> Get a better place for your tour</br> With The Best Recommendation.
				</h3>
        <hr class="w-2/12 mx-auto border-2 rounded-lg border-teal-500 mb-12"/>

			<div class="container max-w-4xl mx-auto text-center flex flex-wrap items-start md:flex-no-wrap">

				<!-- Card -->
        <div class="grid lg:grid-cols-3 gap-x-6 lg:gap-x-12">

  <?php $__currentLoopData = $spots; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="bg-white block rounded-lg shadow-lg mb-6 lg:mb-0" data-mdb-ripple="true"
      data-mdb-ripple-color="light">
      <div class="relative overflow-hidden bg-no-repeat bg-cover">
        <img src="img/<?php echo e($s->spot_img); ?>.jpg" class="w-full rounded-t-lg" />
        <a href="/dashboard">
          <div
            class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
            style="background-color: rgba(251, 251, 251, 0.15)"></div>
        </a>
        <svg class="absolute" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="left: 0; bottom: 0">
          <path fill="#fff"
            d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
          </path>
        </svg>
      </div>

      <div class="p-6">
        <h5 class="font-bold text-lg mb-3"><?php echo e($s->spot_name); ?></h5>
        <p class="mb-4 pb-2"><i class="fa-regular fa-clock"></i>
        <?php echo e($s->spot_desc); ?>

        </p>
        <button data-mdb-ripple="true" data-mdb-ripple-color="light" onclick="location.href='dashboard'" class="inline-block px-6 py-2.5 bg-teal-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out "> Book Now!
        </button>
      </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

					<!-- End Card -->
  </div>
    </div>
      </div>

    
    <!-- End Guide -->

    <!-- About Us -->
    <div class="py-16 bg-white">  
            <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
                <div class="space-y-6 md:space-y-0 md:flex md:gap-6 lg:items-center lg:gap-12">
                    <div class="md:5/12 lg:w-5/12">
                <img src="https://wallpaperaccess.com/full/538039.jpg" alt="bali" loading="lazy" width="" height="">
            </div>
            <div class="md:7/12 lg:w-6/12">
                 <h2 class="text-2xl text-gray-900 font-bold md:text-4xl"> <span class="block xl:inline">Guidy development is carried out by </span>
                    <span class="block text-teal-500 xl:inline">passionate Traveller</span> 
                </h2>
                 <p class="mt-6 text-gray-600">We made this website for Guidy's company as well as for travelers who want to enjoy a vacation in Bali so that it can be easier and more comfortable.</p>
                 <p class="mt-4 text-gray-600">Enjoy your vacation in a relaxed and calm manner without the hassle of finding someone who can guide you to make a trip plan in Bali or find a place to travel in Bali.</p>
          </div>
        </div>
    </div>
  </div>
</div>

<!-- footer -->
<footer class="footer footer-center  w-full p-4 bg-gray-900 text-white">
<div class="container px-6 pt-6">
    <div class="flex justify-center mb-6">
      <a href="#!" type="button" class="rounded-full border-2 border-white text-white leading-normal uppercase hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
        <svg aria-hidden="true"
        focusable="false"
        data-prefix="fab"
        data-icon="facebook-f"
        class="w-2 h-full mx-auto"
        role="img"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 320 512"
      >
        <path
          fill="currentColor"
          d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"
        ></path>
        </svg>
      </a>

      <a href="#!" type="button" class="rounded-full border-2 border-white text-white leading-normal uppercase hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
        <svg aria-hidden="true"
        focusable="false"
        data-prefix="fab"
          data-icon="twitter"
          class="w-3 h-full mx-auto"
          role="img"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 512 512"
        >
          <path
            fill="currentColor"
            d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"
          ></path>
        </svg>
      </a>

      <a href="#!" type="button" class="rounded-full border-2 border-white text-white leading-normal uppercase hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
        <svg aria-hidden="true"
        focusable="false"
        data-prefix="fab"
          data-icon="google"
          class="w-3 h-full mx-auto"
          role="img"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 488 512"
        >
          <path
            fill="currentColor"
            d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"
          ></path>
        </svg>
      </a>

      <a href="https://www.instagram.com/samjoe_tl/" type="button" class="rounded-full border-2 border-white text-white leading-normal uppercase hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
        <svg aria-hidden="true"
        focusable="false"
        data-prefix="fab"
        data-icon="instagram"
          class="w-3 h-full mx-auto"
          role="img"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 448 512"
        >
          <path
            fill="currentColor"
            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
          ></path>
        </svg>
      </a>

      <a href="#!" type="button" class="rounded-full border-2 border-white text-white leading-normal uppercase hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
        <svg aria-hidden="true"
        focusable="false"
        data-prefix="fab"
        data-icon="linkedin-in"
          class="w-3 h-full mx-auto"
          role="img"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 448 512"
        >
          <path
            fill="currentColor"
            d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"
          ></path>
        </svg>
      </a>

      <a href="https://github.com/SamjoeTL" type="button" class="rounded-full border-2 border-white text-white leading-normal uppercase hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
        <svg aria-hidden="true"
        focusable="false"
        data-prefix="fab"
        data-icon="github"
          class="w-3 h-full mx-auto"
          role="img"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 496 512"
        >
          <path
            fill="currentColor"
            d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"
          ></path>
        </svg>
      </a>
    </div>
  </div>
      <div class="text-center">
        <p>
          Copyright © 2022 -
          <a class="font-semibold" href="mailto:tegar.terbaik@gmail.com"
            >Tegar Samjoe Indra Laka - 2115101032</a
          >
        </p>
      </div>
    </footer>
 
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal501e81491cdd9b61e2d9ba717a17361860b8d597)): ?>
<?php $component = $__componentOriginal501e81491cdd9b61e2d9ba717a17361860b8d597; ?>
<?php unset($__componentOriginal501e81491cdd9b61e2d9ba717a17361860b8d597); ?>
<?php endif; ?>   <?php /**PATH D:\Tegar Folder\Semester 3\Teknologi Web\uts\resources\views/frontpage/landingpage.blade.php ENDPATH**/ ?>