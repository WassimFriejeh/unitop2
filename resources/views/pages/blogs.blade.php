@extends('layouts.main')
@section('content')
    <div class="main-container">
        <div class="pb-10 border-b border-b-darkColor">
            @include('components.inline-title', [
                'label' => ___('text.Blogs_listing'),
                'width' => 'w-full',
            ])
        </div>

        <livewire:blogs-listing />

    </div>
@endsection
