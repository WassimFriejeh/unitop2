@extends('layouts.main')
@section('content')
    {{-- <div class="relative lg:block md:block sm:hidden hidden overflow-hidden pt-[265px]">

        <img src="/assets/images/marineSupport/2.png" alt="" class="min-h-[100vh]">

        <div class="right-0  absolute bottom-[50%] z-10 ">
            <div class="w-[1040px]">
                <div class="asp asp-3-1">
                    <img src={{ $main['banner_fist_image']['image']  }}  alt="">
                </div>
            </div>

        </div>
        <div class="main-container max-h-[100vh]">
            <div class="absolute z-10 bottom-20">
                <h1
                    class="text-white leading-7  lg:text-[50px] md:text-[45px] sm:text-[26px] text-[26px] capitalize font-bold ">
                    <span class="text-white lg:text-[110px] md:text-[150px] sm:text-[90px] text-[90px]  leading-3">
                        <i class=" fa-solid fa-arrow-down -rotate-45"></i>
                    </span>
                    {{ $main->label }}
                </h1>

                <div class="grid grid-cols-12">
                    <div class="col-span-5"></div>
                    <div class="col-span-7">
                        <div class="w-[76%] text-white text-[15px] text-left">{!! $main->text !!} </div>
                    </div>
                </div>
                <div class="grid grid-cols-12 pt-5">
                    <div class="col-span-5"></div>
                    <div class="col-span-7">


                        <div class="block">
                            <a href="/contact-us" class="hover-btn2 ">
                                <div class="hover-bg "></div>
                                <div class="bg"></div>
                                <div class="contentLink" title="Get To know us">Contact us</div>
                                <div class="icon"> <i class="fa-solid fa-arrow-up rotate-45"></i></div>
                            </a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <div class=" lg:hidden md:hidden sm:block block ">

        <img src={{ $main['industrial_mobile_image']['image'] }} alt="">

        <div class="relative"> <img src="/assets/images/marineSupport/2.png" alt="" class="h-[780px]">

            <div class="absolute top-0 bottom-0">
                <div class="main-container w-full pt-10">
                    <span class="text-white lg:text-[180px] md:text-[150px] sm:text-[58px] text-[58px] leading-3">

                        <i class=" fa-solid fa-arrow-down -rotate-45"></i>
                    </span>
                    <h1
                        class="text-white lg:text-[50px] md:text-[50px] sm:text-[45px] text-[45px] capitalize lgw-[60%] md:w-[60%] sm:w-[100%] w-full  font-bold ">

                        {{ ___('text.industrial_services') }} 
                    </h1>
                    <div class="w-[100%] text-white text-[14px] text-left pb-10">{!! $main->text !!} </div>

                   <div class="block">
                            <a href="/contact-us" class="hover-btn2 ">
                                <div class="hover-bg "></div>
                                <div class="bg"></div>
                                <div class="contentLink" title="Get To know us">Contact us</div>
                                <div class="icon"> <i class="fa-solid fa-arrow-up rotate-45"></i></div>
                            </a>
                        </div>
                </div>
            </div>
        </div>







    </div> --}}
    <div class="mt-56 py-28 background-img sm:hiddien md:block lg:block hidden ">

        <div class="right-0  absolute top-[-30%] z-10 ">
            <div class="w-[1040px]">
                <div class="asp asp-3-1">
                    <img src={{ $main['banner_fist_image']['image'] }} alt="">
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



            <div class="w-full flex justify-end items-end pt-6">
                <div class="w-[52%] text-white text-[17px] text-left">{!! $main->text !!}</div>
            </div>


            <div class="w-[62%] pt-5 flex justify-end items-end">
                <div class="block">
                    <a href="/contact-us" class="hover-btn2 ">
                        <div class="hover-bg  "></div>
                        <div class="bg"></div>
                        <div class="contentLink text-[13px] z-10" title="Get To know us">Contact us</div>
                        <div class="icon"> <i class="fa-solid fa-arrow-up rotate-45" style="transform: rotate(45deg);"></i></div>
                    </a>
                </div>
            </div>

        </div>
    </div>
{{-- {{ ___('text.industrial_services') }} --}}

    </div>
    <div class=" lg:hidden md:hidden sm:block block ">
        <img src={{ $main['industrial_mobile_image']['image'] }} alt="">
        <div class="relative background-img">
            {{-- <img src="/assets/images/marineSupport/2.png" alt="" class="h-[650px]"> --}}


            <div class="main-container w-full pt-10 pb-16">
                <span class="text-white lg:text-[180px] md:text-[150px] sm:text-[58px] text-[58px] leading-3">

                    <i class=" fa-solid fa-arrow-down -rotate-45" style="transform: rotate(45deg);"></i>
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
                        <div class="icon"> <i class="fa-solid fa-arrow-up rotate-45"></i></div>
                    </a>
                </div>

            </div>


        </div>
    </div>

    <div class="main-container w-full">
        <div class="flex justify-center items-center w-full">
            <h1 class="text-[30px] text-darkColor pt-10  font-semibold">{{ ___('text.industrial_services') }}</h1>
        </div>
        @include('components.services-card')
    </div>
@endsection
