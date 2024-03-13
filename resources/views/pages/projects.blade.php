@extends('layouts.main')
@section('content')
    <div class="main-container">
        <div class="border-b border-b-darkColor sm:pt-14 sm:pb-10 md:pt-12 md:pb-8 py-2">
            @include('components.inline-title', [
                'label' => 'Featured Projects, Driving Results',
                'width' => 'lg:w-[55%] md:w-[85%] w-full',
            ])
        </div>
        <div>
            <livewire:ProjectsFiltering />
        </div>
    </div>
@endsection
