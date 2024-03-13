@extends('layouts.main')
@section('content')
    <div class="relative">
        <img src={{ $sustainability->banner_image['image'] }} alt="" class=" h-[100vh] w-full">

        <div class="main-container">
            <div class="absolute  lg:bottom-30 md:bottom-4 sm:bottom-4 bottom-4 z-10">
                @include('components.stacked-title', [
                    'label' => $sustainability->label,
                ])
            </div>
        </div>
    </div>
    <div class="main-container w-full">
        <div>
            @include('components.reversed-paragraph', [
                'image' => $sustainability->main_image['image'],
                'caption' => $sustainability->caption,
                'title' => $sustainability->paragraph_title,
                'paragraph' => $sustainability->main_paragraph,
                'display' => 'hidden',
                'link' => '',
                'label' => '',
            ])

            @include('components.hover-button', [
                'display' => 'hidden',
                'label' => 'LEARN MORE',
                'link' => '',
            ])
        </div>


    </div>
@endsection
