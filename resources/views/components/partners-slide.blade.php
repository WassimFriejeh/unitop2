<div class="partners mt-10 mb-10">
    <h3>
        {{ $title }}
    </h3>
    @component('components.autoplay-slider')
        {{-- @foreach ($partners as $partner) --}}
        @foreach ($clients as $client)
            <div class="swiper-slide logo">
                <a @if (isset($client->link)) href="{{ $client->link }}" @endif
                    class="asp asp-2-1   block">
                    <div class="absolute w-full h-full top-0 left-0 bg-lightColor"></div>
                    <img class="" src="{{ $client['image']['image'] }}" alt="">
                </a>
            </div>
        @endforeach
        {{-- @endforeach --}}
    @endcomponent
</div>
