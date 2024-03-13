    <div class="relative">
        <div class="lg:block md:block sm:hidden hidden ">
            <div class="asp asp-5-2">
                <img src="{{ $image }}" alt="" class="">
            </div>
        </div>
        <div class="lg:hidden md:hidden sm:block block ">
            <img src="{{$mobile_image}}" alt="" class="max-h-[100vh] w-full">
        </div>
        <div class="main-container">
            <div class="absolute  lg:bottom-20  md:bottom-20 sm:bottom-0 bottom-0   z-10">
                <h1 class=" text-white text-[50px]  font-semibold">{{ $label }}</h1>
            </div>
        </div>
    </div>
