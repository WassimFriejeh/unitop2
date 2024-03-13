@extends('layouts.main')
@section('content')
    @if (isset($main_banner->link))
        @include('components.video-background', [
            'label' => $main_banner->label,
            'link' => $main_banner->link,
            'height' => 'h-[100vh]',
            'width' => 'lg:w-[60%] md:w-[70%] sm:w-full w-full',
        ])
    @elseif (isset($main_banner['banner_image']['image']))
        @include('components.main-banner', [
            'image' => $main_banner['image']['image'],
            'label' => 'blabla',
        ])
    @endif
    <div class="main-container sm:!pr-0 w-full sm:mt-20 mt-8">
        @include('components.paragraph', [
            'image' => $main_banner['image']['image'],
            'caption' => $main_banner->caption,
            'title' => $main_banner->title,
            'paragraph' => $main_banner->paragraph,
            'display' => 'block',
            'link' => route('about-us'),
            'label' => 'LEARN MORE',
        ])
    </div>
    <div class="grid sm:grid-cols-5 grid-cols-2 py-20 lg:gap-7 md:gap-4 gap-3 main-container">
        @foreach ($stats as $stat)
            @include('components.stats-box', [
                'title' => $stat->title,
                'number' => $stat->stat,
            ])
        @endforeach
    </div>
    <div class="main-container pb-20">
        <div class="flex justify-between items-end">
            <h1
                class="text-darkColor leading-7 xl:text-[45px] lg:text-[37px] md:text-[28px] sm:text-[26px] text-[20px] capitalize font-bold">
                <span class="text-primaryColor lg:text-[180px] md:text-[150px] sm:text-[90px] text-[90px]  leading-3">
                    <i class=" fa-solid fa-arrow-down -rotate-45"></i>
                </span>
                {{ $our_story->top_part }}
            </h1>
            @include('components.rounded-arrow', [
                'classes' => 'w-12 h-12',
                'hovered' => true,
                'link' => route('our-story'),
            ])
        </div>
        <div class="flex justify-between lg:mt-6 mt-0">
            <div class="w-[30%] flex flex-col justify-center gap-y-10 ">
                <p
                    class="text-darkColor leading-10 xl:text-[45px] lg:text-[37px] md:text-[28px] sm:text-[26px] text-[20px] capitalize  font-bold">
                    {{ $our_story->bottom_part }}</p>
                <div class="flex items-center lg:text-4xl text-3xl text-primaryColor font-bold">
                    <p>1993</p>
                    <hr class="w-full border-darkColor lg:mx-6 mx-2">
                    <p>2024</p>
                </div>
            </div>
            <div class="w-[60%] mt-6">
                {!! $our_story->our_story !!}
            </div>
        </div>
    </div>
    <div class="relative w-full">
        <img class="absolute w-full h-full z-[-999]" src="/assets/images/home/orange-bg.jpg" alt="">
        <div class="main-container py-9">
            <div class="flex pt-3 ">
                <h1 class="sixty-bold-white lg:w-[55%] md:w-[87%] sm:w-full w-full"><span class="bold-small-white pr-4">OUR
                        SERVICES</span>Navigating Diverse Industries with Precision & Expertise
                </h1>
            </div>

            <div class="grid grid-cols-12 lg:gap-20 md:gap-16" x-data ="{ expanded1 : false, expanded2 : false }">
                <div class="lg:col-span-6 md:col-span-6 col-span-12 mt-14">
                    <div class="asp asp-11-9 cover framed">
                        <img class="w-full h-full framed-image " id="original-image"
                            src="/assets/images/home/building-ship.jpg" alt="">

                        @foreach ($services as $service)
                            <img class="services-images w-full h-full framed-image hidden"
                                src="{{ $service['service_image']['image'] }}" alt=""
                                data-attribute="{{ $service->id }}">
                        @endforeach
                    </div>
                </div>

                <div
                    class="lg:col-span-6 md:col-span-5 col-span-12 flex flex-col justify-center lg:text-[35px] md:text-[20px] leading-tight text-white  font-bold capitalize lg:mb-20">
                    {{-- @foreach ($services as $index => $service) --}}
                    <div class="service-container" :class="{ '!opacity-100': expanded1 }">
                        <span class="left-icon" x-show="expanded1" x-transition>
                            <i class="fa-solid fa-arrow-down -rotate-45"></i>
                        </span>
                        <div>
                            <div class="transitioned-text">
                                <p class="cursor-pointer" style="transition: all 0.6s ease;"
                                    @click="expanded1 = !expanded1 , expanded2=false" data-id="{{ $services[0]->id }}"
                                    onclick="WassimWebsiteFunctions.showServiceImage({{ $services[0]->id }})">
                                    {{ $services[0]->title }}
                                </p>
                                <div x-show="expanded1" x-transition
                                    class="icon right-icon !bg-white !text-primaryColor sm:text-[13px] text-[12px]   hover:bg-darkColor">
                                    <i class="absolute fa-solid fa-arrow-up rotate-45"></i>
                                </div>
                            </div>
                            <p class="text" x-show="expanded1" x-collapse>
                                {{ $services[0]->paragraph }}
                            </p>
                        </div>
                    </div>
                    <hr class="w-full sm:my-7 my-3">
                    <div class="service-container" :class="{ '!opacity-100': expanded2 }">
                        <span class="left-icon" x-show="expanded2" x-transition>
                            <i class="fa-solid fa-arrow-down -rotate-45"></i>
                        </span>
                        <div>
                            <div class="transitioned-text">
                                <p class="cursor-pointer" style="transition: all 0.6s ease;"
                                    @click="expanded2 = !expanded2 , expanded1=false" data-id="{{ $services[1]->id }}"
                                    onclick="WassimWebsiteFunctions.showServiceImage({{ $services[1]->id }})">
                                    {{ $services[1]->title }}
                                </p>
                                <div x-show="expanded2" x-transition
                                    class="icon right-icon !bg-white !text-primaryColor sm:text-[13px] text-[12px]  hover:bg-darkColor">
                                    <i class="absolute fa-solid fa-arrow-up rotate-45"></i>
                                </div>
                            </div>
                            <p class="text" x-show="expanded2" x-collapse>
                                {{ $services[1]->paragraph }}
                            </p>
                        </div>
                    </div>
                    {{-- @endforeach --}}

                </div>
            </div>
        </div>
    </div>
    <div>
        @include('components.articles-slide', ['title' => 'blog','blogs'=>$blogs])
    </div>
    <div class="bg-lightColor py-12">
        <div class="swiper-container lg:px-16 px-0 main-container" id="testimonialsCarousel">
            <div class="swiper-wrapper">
                @foreach ($testimonials as $testimonial)
                    <div class="swiper-slide">
                        <div>
                            <div class="text-darkColor sm:w-[60%] w-full text-center sm:text-left ml-auto">
                                <p class="sixty-bold sm:mb-12 mb-6">Testimonials</p>
                            </div>
                            <div class="flex sm:flex-row flex-col-reverse items-start justify-center">
                                <div
                                    class="sm:w-[25%] w-full pr-8 sm:border-r-[1.5px] border-t-[1.5px] border-r-darkColor border-opacity-20 mt-10 sm:mt-0">
                                    <div class="font-bold py-3">
                                        <div class="flex gap-x-3 sm:block">
                                            <img class="sm:w-16 sm:h-16 w-8 h-8" src="/assets/svg/testimonial-svg.svg"
                                                alt="">
                                            <p class="uppercase mt-3 text-primaryColor text-[13px]">BY
                                                {{ $testimonial->name }}
                                        </div>
                                        </p>
                                        <p class="opacity-50 mt-[6px] text-[11px]">{{ $testimonial->position }}
                                        </p>
                                        <p class="opacity-50 mt-[6px] text-[11px]">
                                            {{ $testimonial->company }}</p>
                                    </div>
                                </div>
                                <div class="text-darkColor sm:w-[60%] w-full sm:ml-12">
                                    <div>
                                        {!! $testimonial->paragraph !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="main-container flex items-center justify-center text-[18px] lg:mt-32 md:mt-12 sm:gap-x-1">
            <div id="custom-pagination" class="pagination"></div>
            <div class="prevBtn icon sm:w-12 sm:h-12 w-8 h-8 sm:text-base text-sm  hover:bg-darkColor "> <i
                    class="absolute fa-solid fa-arrow-up -rotate-90"></i></div>
            <div class="nextBtn icon sm:w-12 sm:h-12 w-8 h-8 sm:text-base text-sm  hover:bg-darkColor "> <i
                    class="absolute fa-solid fa-arrow-up rotate-90"></i></div>

        </div>
    </div>
    <div class="py-20">
        @component('components.partners-slide', ['title' => 'Some Of Our Clients', 'clients' => $clients])
        @endcomponent
    </div>
@endsection
