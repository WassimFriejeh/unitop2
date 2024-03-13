@extends('layouts.main')
@section('content')
 
    <div class="main-container w-full main-spacing ">
        <div class="px-4 py-2 rounded-tag">
            {{ isset($job->country->name) ? $job->country->name : '' }}, {{ isset($job->city->label) ? $job->city->label : '' }}
        </div>
        <div
            class="flex lg:flex-row md:flex-row sm:flex-col flex-col justify-between gap-5 lg:items-center md:items-center sm:items-start items-start pt-7">
            <h1
                class="lg:text-[35px] md:text-[30px] sm:text-[26px] text-[26px] text-darkColor font-semibold lg:w-[50%] md:w-[50%] sm:w-full w-full capitalize">
              {{ $job->label }}</h1>
            @include('components.hover-button', ['display' => 'block', 'label' => 'APPLY NOW','link'=>'/apply-now'])
        </div>
        <div class="pt-10 pb-8">
            <h1 class="text-primaryColor text-[15px] uppercase font-medium ">Closing date: <span
                    class="pl-20 text-darkColor text-[15px]">{{ isset($job->closing_date) ? $job->closing_date : '' }}</span></h1>
        </div>
        <hr class="border-black">
        @foreach ($job->job_details as $job)
       
             <div class="pt-8">
            <h1 class="small-tilte font-bold text-[16px]">{{ $job['title'] }}</h1>
            <p class="text-darkColor text-[15px] font-normal pt-5 ">{{ $job['description'] }} </p>
        </div>
        @endforeach
       

        <div class="pt-5 pb-5"> @include('components.hover-button', ['display' => 'block', 'label' => 'APPLY NOW','link'=>'/apply-now'])</div>

    </div>
@endsection
