@extends('layouts.main')
@section('content')
    <div class="main-container w-full main-spacing ">
        @if (isset($rows))
            @include('components.inline-title', [
                'label' => $rows->title,
                'width' => 'lg:w-[65%] md:w-[73%] sm:w-full w-full',
            ])
            <div class="pt-9">
                <hr>
            </div>
            <div class="grid grid-cols-12 w-full lg:gap-[87px] md:gap-[60px] sm:gap-5 gap-5 pt-9 main-container">

                {{-- <div class=" lg:block md:block sm:hidden hidden"></div> --}}
                <div class="lg:col-span-7 md:col-span-6 sm:col-span-12 col-span-12 text-[17px]">{{ $rows->text }}</div>
                <div class="lg:col-span-5 md:col-span-6 sm:col-span-12 col-span-12">
                    <h1 class="text-[15px] font-bold">Head Office</h1>
                    <a href="https://maps.google.com?q={{ $rows['head_office'] }}">
                        <p class="lg:text-[16px] md:text-[13px] sm:text-[16px] text-[16px] w-[70%]">{{ $rows['head_office'] }}</p>
                    </a>

                    <p>
                        <span class="font-bold text-[15px]">Email:</span>
                        <a href="mailto:{{ $rows['email'] }}" class="text-[16px] w-[70%]">{{ $rows['email'] }}</a>
                    </p>

                    <p>
                        <span class="font-bold text-[15px]">T:</span>
                        <a href="tel:{{ $rows['phone'] }}" class="text-[16px] w-[70%]">{{ $rows['phone'] }}</a>
                    </p>
                </div>
            </div>

        @endif



    </div>  @if (isset($rows))
    <div class="w-full h-full"> @include('components.google-map')</div>
  @endif
     <div class="main-container w-full main-spacing pt-10" id="contact_us">
        @include('components.contact-form')
     </div>

@endsection
