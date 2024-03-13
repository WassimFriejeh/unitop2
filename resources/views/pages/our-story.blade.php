@extends('layouts.main')
@section('content')
    {{--  {{ ___('text.results') }} --}}
    @include('components.main-banner', [
        'image' => $story->banner_image['image'],
        'label' => $story->label,
        'mobile_image' => $story['mobile_image']['image'],
    ])
    <div class="main-container w-full">
        @include('components.loader-paragraph', [
            'image' => $story->main_image['image'],
            'caption' => $story->caption,
            'title' => $story->paragraph_title,
            'paragraph' => $story->main_paragraph,
            'display' => 'hidden',
            'link' => '',
        ])

        <div id="mission_vision">
            @include('components.stacked-section')
        </div>
        <div id="values">
            @include('components.inline-title', [
                'label' => ___('text.results'),
                'width' => 'lg:w-[60%] md:w-[73%] sm:w-full w-full',
            ])
        </div>
        <div class="grid grid-cols-12 pt-10">
            <div class="lg:col-span-5 md:col-span-5 sm:col-span-0 col-span-0"></div>
            <div class="lg:col-span-7 md:col-span-7 sm:col-span-12 col-span-12">
                <p class="text-[18px] tracking-normal text-darkColor font-normal">{{ $story->results_paragraph }}</p>
            </div>
        </div>
    </div>
    <div class="main-container w-full !pr-0 !pl-0 ">
        <div class="grid grid-cols-12 border-y border-y-darkColor border-opacity-20 my-12 ">
            @foreach ($results as $index => $result)
                <div
                    class="{{ $loop->last ? 'col-span-12' : 'lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12' }} flex border-b border-y-darkColor border-opacity-20">
                    @include('components.value-card', [
                        'padding' => '',
                        'number' => str_pad($index + 1, 2, '0', STR_PAD_LEFT),
                        'result' => $result,
                    ])
                </div>
            @endforeach
        </div>
    </div>
    </div>
    <div x-data="{ showText: false }">
        <div class="h-[100vh] pt-10 bg-cover bg-fixed bg-center bg-no-repeat shadow-lg relative"
            style="background-image:url('/assets/images/story/2.png');" x-ref="image" x-data="{ isVisible: false }"
            x-on:scroll.window="isVisible = $refs.image.getBoundingClientRect().top < window.innerHeight * 0.1">
            <div x-data="{ showText: false }">
                <div class="h-[100vh] pt-10 bg-cover bg-fixed bg-center bg-no-repeat shadow-lg relative"
                    style="background-image:url('/assets/images/story/2.png');" x-ref="image" x-data="{ isVisible: false }"
                    x-on:scroll.window="isVisible = $refs.image.getBoundingClientRect().top < window.innerHeight * 0.1">

                    <div class="absolute bottom-16 z-10 " x-show="isVisible" x-collapse>
                        <div class="main-container w-full">
                            <h1 class="text-white text-[50px] w-[100%]">
                                <div class="header flex justify-between items-center w-full">
                                    <h2 class="w-[60%] font-bold lg:text-[53px] md:text-[30px] sm:text-[30px] text-[30px]">
                                        {{ $sustainability->label }} </h2>
                                    <a href="/sustainability" class="flex items-center">@include('components.rounded-arrow', [
                                        'classes' => 'w-12 h-12 text-[14px]',
                                        'hovered' => true,
                                    ])</a>
                                </div>
                            </h1>
                        </div>
                    </div>

                </div>
            </div>
        </div>
            <div class="main-container pt-10">
                @include('components.reversed-paragraph', [
                    'image' => $strategy_paragraph->main_image['image'],
                    'caption' => $strategy_paragraph->caption,
                    'title' => $strategy_paragraph->paragraph_title,
                    'paragraph' => $strategy_paragraph->main_paragraph,
                    'display' => 'hidden',
                    'link' => '',
                    'label' => '',
                ])
            </div>
        @endsection
