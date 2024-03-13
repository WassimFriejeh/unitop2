@extends('layouts.main')
@section('content')

    <div class="relative">

            <img src={{ $ourFounder->banner_image['image'] }} alt="" class="h-[100vh] w-full">

        <div class="main-container">
            <div class="absolute  lg:bottom-20 md:bottom-0 sm:bottom-4 bottom-4 z-10">
                @include('components.stacked-title', [
                    'label' => $ourFounder->label,
                ])
            </div>
        </div>
    </div>
    <div class="main-container w-full pb-10">
        @include('components.reversed-paragraph', [
           'image' => $ourFounder->main_image['image'],
            'caption' => $ourFounder->caption,
            'title' => $ourFounder->paragraph_title,
            'paragraph' =>$ourFounder->main_paragraph,
                        'display' => 'hidden',
                        'link'=>'',
                         'label'=>'',])

    </div>
@endsection
