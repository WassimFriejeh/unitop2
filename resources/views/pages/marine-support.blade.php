@extends('layouts.main')
@section('content')
    <div class="mt-48 py-36 background-img sm:hiddien md:block lg:block hidden ">

        <div class="right-0  absolute top-[-30%] z-10 ">
            <div class="w-[1040px]">
                <div class="asp asp-3-1">
                    <img src={{ $main->banner_first_image['image'] }} alt="">
                </div>
            </div>

        </div>

        <div class="main-container w-full ">
            <h1 class="text-white leading-7  lg:text-[60px] md:text-[45px] sm:text-[26px] text-[26px] capitalize font-bold ">
                <span class="text-white lg:text-[110px] md:text-[150px] sm:text-[90px] text-[90px]  leading-3">
                    <i class=" fa-solid fa-arrow-down -rotate-45"></i>
                </span>
                {{ $main->label }}
            </h1>



            <div class="w-full flex justify-end items-end">
                <div class="w-[52%] text-white text-[18px] text-left">{!! $main->text !!}</div>
            </div>


            <div class="w-[61%] pt-5 flex justify-end items-end">
                <div class="block">
                    <a href="/contact-us" class="hover-btn2 ">
                        <div class="hover-bg  "></div>
                        <div class="bg"></div>
                        <div class="contentLink text-[12px] z-10" title="Get To know us">Contact us</div>
                        <div class="icon"> <i class="fa-solid fa-arrow-up rotate-45" style="transform: rotate(45deg);"></i></div>
                    </a>
                </div>
            </div>

        </div>
    </div>


    </div>
    <div class=" lg:hidden md:hidden sm:block block ">
        <img src={{ $main['marine_mobile_image']['image'] }} alt="">
        <div class="relative background-img">
            {{-- <img src="/assets/images/marineSupport/2.png" alt="" class="h-[650px]"> --}}

         
                <div class="main-container w-full pt-10">
                    <span class="text-white lg:text-[180px] md:text-[150px] sm:text-[58px] text-[58px] leading-3">

                        <i class=" fa-solid fa-arrow-down -rotate-45"></i>
                    </span>
                    <h1
                        class="text-white lg:text-[50px] md:text-[50px] sm:text-[45px] text-[45px] capitalize lgw-[60%] md:w-[60%] sm:w-[100%] w-full  font-bold ">

                        {{ $main->label }} 
                    </h1>
                    <div class="w-[100%] text-white text-[14px] text-left pb-10">{!! $main->text !!}
                    </div>

                    <div class="block">
                        <a href="/contact-us" class="hover-btn2 ">
                            <div class="hover-bg "></div>
                            <div class="bg"></div>
                            <div class="contentLink" title="Get To know us">Contact us</div>
                            <div class="icon"> <i class="fa-solid fa-arrow-up rotate-45" style="transform: rotate(45deg);"></i></div>
                        </a>
                    </div>

                </div>
         

        </div>
    </div>

    <div class="main-container w-full">
        <div class="flex justify-center items-center w-full">
            <h1 class="text-[30px] text-darkColor pt-6 font-semibold"> {{ ___('text.marine_services') }}</h1>
        </div>
        @include('components.services-card')
    </div>
@endsection
