<?php

$legal = App\GeneratedModels\LegalModel::where('cancelled', 0)->orderBy('orders', 'ASC')->get();
$rows = App\GeneratedModels\InfoModel::where('cancelled', 0)->orderby('orders')->first();
$social_media = App\GeneratedModels\SocialMediaModel::where('cancelled', 0)->orderby('orders')->first();
$certifications = App\GeneratedModels\CertificationsModel::where('cancelled', 0)->orderBy('orders', 'ASC')->get();

?>
<footer class="">
    <div class="main-container lg:space-y-20 space-y-12 sm:pt-10 pt-4 pb-4">
        <div class="grid grid-cols-12 lg:gap-20 gap-6">
            <div class="lg:col-span-3 md:col-span-9 col-span-12 space-y-5">
                <p class="bold-small-text">reach us</p>
                <div class="space-y-3 lg:text-sm text-xs">
                    <p class="font-bold ">head office</p>
                    @if (isset($rows))
                        <p class="">{{ $rows['head_office'] }}</p>
                        <p class="flex gap-2">
                            <span class="font-bold">Email: </span>
                            <a href="mailto:{{ $rows['email'] }}" class="hover:underline">{{ $rows['email'] }}</a>
                        </p>
                        <p class="flex gap-2">
                            <span class="font-bold ">T:</span>
                            <a href="tel:{{ $rows['phone'] }}" class="hover:underline">{{ $rows['phone'] }}</a>
                        </p>
                    @endif
                </div>
                <a href="" class="font-bold underline lg:text-sm text-xs">our offices
                    <i class="fa-solid fa-arrow-up arrow-up-right ml-2"></i>
                </a>
            </div>
            <div class="lg:col-span-3 md:col-span-3 col-span-12 space-y-5">
                <div class="space-y-3 lg:text-sm text-xs">
                    <p class="bold-small-text">connect</p>
                    <div class="md:space-y-2 md:block flex items-center gap-x-2">
                        <a class="hover:underline" href="{{ $social_media->linkedin }}">linkedin</a>
                        <a class="hover:underline" href="{{ $social_media->instagram }}">instagram</a>
                        <a class="hover:underline" href="{{ $social_media->twitter }}">twitter</a>
                        <a class="hover:underline" href="{{ $social_media->youtube }}">youtube</a>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-6 col-span-12 space-y-5">
                <p class="bold-small-text">AWARDS & CERTIFICATIONS</p>
                <div class="flex gap-x-5">
                    @foreach ($certifications as $certificate)
                        <img class="award" src="{{ $certificate->image['image'] }}" alt="">
                    @endforeach
                </div>
                <div class="flex items-center gap-x-2">
                    <p class="text-primaryColor text-sm font-bold">LEARN MORE</p>
                    @include('components.rounded-arrow', [
                        'classes' => 'bg-primaryColor w-8 h-8 text-[15px]',
                        'link' => route('about-us', ['go_to_section' => 'certifications']),
                    ])
                </div>
            </div>
        </div>
        <div
            class="flex lg:flex-row flex-col items-center justify-between lg:text-xs text-[10px] space-y-2 lg:space-y-0 text-center lg:text-left">
            <p>©2023. All Rights Reserved. Copyrights <a class="underline font-bold inline-block">Unitop</a>. Web Design
                & Development by <a class="underline font-bold inline-block" href="https://thewebaddicts.com/">The Web
                    Addicts</a>.</p>
            <div class="flex items-center lg:gap-x-5 gap-x-1">
                @foreach ($legal as $legal)
                    <a href="{{ route('policies', ['slug' => $legal->slug]) }}"
                        class="hover:text-gray-400 transition-all duration-500 ease-in-out">
                        <p class="p-footer">{{ $legal->label }}</p>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</footer>
