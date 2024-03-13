@extends('layouts.main')
@section('content')
    <div class="relative h-screen mouse-tray-container demo-3 loading" id="mouse-tray-container">
        <img class="absolute w-full h-full top-0 left-0 z-[-999]" src="{{ $banner['background_image']['image'] }}"
            alt="">
        <div class="main-container">
            <div class="absolute lg:bottom-20 md:bottom-10  bottom-8 z-10">
                <h1 class="text-white lg:text-[50px] md:text-[40px] text-[25px] font-semibold capitalize">
                    {{ $banner->background_label }}</h1>
            </div>
        </div>
        <div class="content">
            @foreach ($company_histories as $history)
                <img class="content__img" src="{{ $history['image']['image'] }}" alt="Some image" />
            @endforeach
        </div>
    </div>
    <div class="main-container pt-12">
        <div class="border-t border-t-darkColor">
            @include('components.main-title', [
                'text' => $banner->paragraph_caption,
                'title' => $banner->paragraph_title,
                'classes' => 'lg:!w-[60%] md:!w-[75%] w-full',
                'captionClasses' => 'mr-8',
            ])
            <p class="text-darkColor mt-4">{{ $banner->paragraph_text }}</p>
        </div>
    </div>
    <div class="main-container !pr-0 sm:block hidden">
        <div class="flex gap-x-10 mt-[150px]">
            <div class="steps-vertical sticking">
                @foreach ($company_histories as $history)
                    <div class="step active-step">
                        <div class="step-info">
                            <div class="step-label">{{ $history->date }}</div>
                        </div>
                        <div class="step-content">
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="scroll-container w-full">
                @foreach ($company_histories as $history)
                    <section class="slide {{ $loop->first ?? 'active' }}">
                        <div class="flex flex-col justify-center w-[50%]">
                            <h1 class="text-primaryColor xl:text-6xl lg:text-5xl md:text-4xl">{{ $history->date }}</h1>
                            <p class="text-darkColor font-bold text-lg lg:mt-8 mt-5">{{ $history->title }}</p>
                            <p class="mt-2">{{ $history->paragraph }}</p>
                        </div>
                        <div class="w-[40%]">
                            <div class="asp asp-5-6">
                                <img src="{{ $history['image']['image'] }}" alt="">
                            </div>
                        </div>
                    </section>
                @endforeach
            </div>
        </div>
    </div>
    <div class="main-container sm:hidden">
        @foreach ($company_histories as $history)
            <section class="slide {{ $loop->first ?? 'active' }}">
                <div class="flex flex-col justify-center">
                    <h1 class="text-primaryColor text-3xl mt-16">{{ $history->date }}</h1>
                    <p class="text-darkColor font-bold text-lg mt-2">{{ $history->title }}</p>
                    <p class="mt-2">{{ $history->paragraph }}</p>
                </div>
                <div>
                    <div class="asp asp-5-6">
                        <img src="{{ $history['image']['image'] }}" alt="">
                    </div>
                </div>
            </section>
        @endforeach
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/TweenMax.min.js') }}"></script>
    <script src="{{ asset('js/demo3.js') }}"></script>
@endsection
