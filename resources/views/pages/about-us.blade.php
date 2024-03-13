@extends('layouts.main')
@section('content')
{{-- @dd($aboutUs['mobile_image']); --}}
    @include('components.main-banner', [
        'image' => $aboutUs->banner_image['image'],
        'label' => $aboutUs->label,
        'mobile_image'=>$aboutUs['mobile_image']['image'],
    ])
    <div class="main-container w-full pt-7" id="introduction">
        @include('components.paragraph', [
            'image' => $aboutUs->main_image['image'],
            'caption' => $aboutUs->caption,
            'title' => $aboutUs->paragraph_title,
            'paragraph' => $aboutUs->main_paragraph,
            'display' => 'hidden',
            'link' => '',
               'label'=>'LEARN MORE',
        ])
        <div id="our-founder">
            @include('components.experts')
        </div>
        <div id="leadership">
            @include('components.ourStory-paragraph', [
                'paragraph' => $our_story->paragraph,
            ])
        </div>

    </div>

    <div class="py-20" id="certifications">
        @include('components.slide-autoplay')
    </div>
@endsection
{{-- @section('scripts')
    <script>
        window.addEventListener('DOMContentCreated', () => {
            @if (request()->input('go_to_section'))
                WassimWebsiteFunctions.scrollToElement('introduction');
            @endif
        });
    </script>
@endsection --}}
