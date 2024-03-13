 

 <div class="sm:col-span-7 col-span-12">
     <div class="lg:w-[67%] md:w-[67%] sm:w-full w-full flex flex-col  border-t-2 ">
         @include('components.main-title', [
             'text' => $caption,
             'title' => $title,
         ])
     </div>
<div class="grid grid-cols-12 pt-10 items-center">
    <div class="col-span-3 sm:hidden hidden lg:block md:block">
        <img src="/assets/images/story/load.png" alt="" class="lg:w-[180px] md:w-[120px] sm:w-[180px] w-[180px]  loader" id="loader">
    </div>

    <div class="lg:col-span-9 md:col-span-9 sm:col-span-12 col-span-12">
        <div class="parapraph-style">{!! $story->loader_paragraph !!}
        </div>
    </div>
</div>

 <div>
     <div class="grid grid-cols-12 pt-10  w-full">
         <div class="sm:col-span-12 col-span-12 md:col-span-7 lg:col-span-7">
             <div class="lg:w-[90%] md:w-[90%] sm:w-[100%] w-[100%] flex flex-col  border-t-2 ">
                 <div class="parapraph-style pt-10 w-[97%]">{!!$paragraph !!}
                 </div>
             </div>
         </div>
         <div class="sm:col-span-5 col-span-12">
             @include('components.main-image', ['position' => 'left-[-8px]', 'image' => $image])
         </div>
     </div>
     @include('components.hover-button', ['display' => $display, 'label' => 'LEARN MORE'])
 </div>

 </div>
<script>// Get the loader element
const loader = document.getElementById('loader');

let lastScrollTop = 0;

// Listen for the scroll event
window.addEventListener('scroll', function () {
    // Get the current scroll position
    const currentScrollTop = window.scrollY;

    // Check the scroll direction
    if (currentScrollTop > lastScrollTop) {
        // Scrolling down, add the reverse class with a faster transition
        loader.classList.add('reverse');
        loader.style.transition = 'transform 2s ease'; // Faster transition for scrolling down
    } else {
        // Scrolling up, remove the reverse class with a slower transition
        loader.classList.remove('reverse');
        loader.style.transition = 'transform 2s ease'; // Slower transition for scrolling up
    }

    // Update the last scroll position
    lastScrollTop = currentScrollTop;
});

    </script>