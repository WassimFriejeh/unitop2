<div class="relative {{ $height }} bg-gray-300">
    <div class=" w-full object-cover brightness-50 video-style " data-vbg="{{ isset($link) ? $link : '' }}">
    </div>
    <div class="main-container">
        <div class="absolute  lg:bottom-20  md:bottom-20 sm:bottom-12 bottom-12   z-10">
            <h1
                class=" text-white xl:text-[50px] md:text-[37px] sm:text-[27px] text-[27px] font-semibold {{ $width }}">
                {{ $label }}</h1>
        </div>
    </div>
</div>
