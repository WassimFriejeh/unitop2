@extends('layouts.main')
@section('content')
    <div class="main-container">
        <div class="sm:py-12 py-4 border-b border-b-darkColor">
            @include('components.inline-title', [
                'label' => 'Join Our Team current openings',
                'width' => 'sm:w-[50%] w-full',
            ])
        </div>
        <livewire:JobsFiltering />
    </div>
@endsection
