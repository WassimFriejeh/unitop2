 <a href="{{ route('blog-details', ['slug' => $blog->slug]) }}" class="slide-card">
     <div class="asp asp-5-3">
         <img src="{{ $image }}" alt="">
     </div>
     <div class="text-container relative">
         <div class="absolute h-full w-full bg-lightColor z-[-100] top-0 left-0"></div>
         <div class="bg-hover"></div>
         <div class="flex justify-between items-center">
             <div class="category">{{ isset($category) ? $category : '' }}</div>
             <div  class="icon w-8 h-8 text-[13px] ">
    <i class="absolute fa-solid fa-arrow-up rotate-45" style="transform: rotate(45deg);"></i>
             </div>

             
         </div>
         <p class=" text-xl first-letter:capitalize font-bold">{{ $name }}</p>
         <hr class="line">
         <div class="last">
             <p>{{ $publisher }}</p>
             <p>{{ $date }}</p>
         </div>
     </div>
 </a>
