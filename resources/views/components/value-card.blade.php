<div class="value-card-container {{ $padding }}" onclick="WassimWebsiteFunctions.clickedValue(this)">
    <div class="bg"></div>
    <div class="bg-hover w-full"></div>

    <div class="text-container">
        <div class="flex gap-x-6 font-bold items-end leading-4">
            <p class="number">{{ $number }}</p>
            <p class="capitalize text-[25px]">{{ $result->label }}</p>
        </div>

        <p class="text">{{ $result->text }}</p>
    </div>
    <div class="icon">
        <i class="fa-solid fa-plus"></i>
    </div>
</div>
