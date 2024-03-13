{{-- @foreach ($stacked_section as $stacked_section) --}}
<div class="grid grid-col-12 my-7">
    <div class="col-span-12">
        <div class="col-span-12 ">
            <div class="bg-lightColor gap-3 flex lg:p-10 md:p-10 sm:p-3 p-3 sm:pt-5 lg:pt-10 md:pt-10 pt-5">
                @if($mission->title)
                    <div>
                        <span class="text-primaryColor lg:text-[30px] md:text-[30px] sm:text-[30px] text-[30px]  leading-3">
                            <i class="fa-solid fa-arrow-down -rotate-45"></i>
                        </span>
                    </div>
                @endif

                <div>
                    <div class="flex gap-20 justify-between items-center w-full">
                        <h1
                            class="text-darkColor pb-4  leading-7 lg:text-[20px] md:text-[26px] sm:text-[26px] text-[26px] capitalize  font-bold ">
                            {{ $mission->title }}</h1>
                        <div class="lg:hidden md:hidden sm:block block">@include('includes.rocket2')</div>
                    </div>
                    <h1 class="text-darkColor text-[16px] tracking-normal font-medium">{{ $mission->subtitle }}</h1>
                    <p
                        class="lg:text-[15px] md:text-[15px] sm:text-[15px] text-[15px] font-normal lg:w-[90%] md:w-[90%] sm:w-full w-full pt-4 text-darkColor">
                        {{ $mission->text }}</p>
                </div>
                <div class="items-center lg:block md:block sm:hidden hidden">

                    <div class="image-container">
                        @include('includes.rocket')

                        <img class="active" src="/assets/images/story/rocket.gif" class="w-40">
                    </div>

                </div>



            </div>
        </div>
    </div>
</div>
<div class="grid grid-col-12 my-7">
    <div class="col-span-12">
        <div class="col-span-12 ">
            <div class="bg-lightColor gap-3 flex lg:p-10 md:p-10 sm:p-3 p-3 sm:pt-5 lg:pt-10 md:pt-10 pt-5">
                 @if($vision->title)
                    <div>
                        <span class="text-primaryColor lg:text-[30px] md:text-[30px] sm:text-[30px] text-[30px]  leading-3">
                            <i class="fa-solid fa-arrow-down -rotate-45"></i>
                        </span>
                    </div>
                @endif

                <div>
                    <div class="flex gap-20 justify-between items-center w-full">
                        <h1
                            class="text-darkColor pb-4  leading-7 lg:text-[20px] md:text-[26px] sm:text-[26px] text-[26px] capitalize  font-bold ">
                            {{ $vision->title }}</h1>
                        <div class="lg:hidden md:hidden sm:block block">@include('includes.binocular2')</div>
                    </div>
                    <h1 class="text-darkColor text-[16px] tracking-normal font-medium">{{ $mission->subtitle }}</h1>
                    <p
                        class="lg:text-[15px] md:text-[15px] sm:text-[15px] text-[15px] font-normal lg:w-[90%] md:w-[90%] sm:w-full w-full pt-4 text-darkColor">
                        {{ $mission->text }}</p>
                </div>
                <div class="items-center lg:block md:block sm:hidden hidden">

                    <div class="image-container">
                        @include('includes.binocular')

                        <img class="active" src="/assets/images/story/binocular.gif" class="w-40">
                    </div>

                </div>



            </div>
        </div>
    </div>
</div>

{{-- @endforeach --}}
