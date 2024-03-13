@extends('layouts.main')
@section('content')
    <div class="main-container main-spacing  w-full"> @include('components.inline-title', [
        'label' =>  $legal->label,
        'width' => 'lg:w-[73%] md:w-[73%] sm:w-full w-full',
    ])
        <div class="text-[16px] pt-6 pb-7">{!! $legal->paragraph !!}</div>

        @foreach ($legal->statements as $statement)
             <hr class="">
        <div class="grid grid-cols-12 w-full gap-2 pt-6 pb-6">
            <div class="lg:col-span-4 md:col-span-4 sm:col-span-12 col-span-12"><h1 class="text-primaryColor text-[14px] uppercase font-semibold">{{ $statement["title"] }}</h1></div>
            <div class="lg:col-span-8 md:col-span-8 sm:col-span-12 col-span-12">
                <p class="text-[13px] font-normal">{!! nl2br($statement["text"]) !!}</p></div>
        </div>
        @endforeach

    </div>
@endsection
