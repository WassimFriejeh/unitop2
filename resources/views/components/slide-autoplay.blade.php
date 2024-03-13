 <div class="partners mt-10 mb-10">
            <h3>
             {{ ___('text.certificate') }}
            </h3>
            @component('components.autoplay-slider')
                @foreach ($certifications as $certificate)
                    <div class="swiper-slide logo">
                        <div class="asp asp-2-1 whitesh-overlay contain ">
                            <div class="absolute w-full h-full top-0 left-0 bg-lightColor"></div>
                            <img class="fit !max-w-20 mx-auto min-h-[230px] " src={{ $certificate->image['image'] }}
                                alt="" style="filter: grayscale(100%);">

                            <div class="absolute z-10 top-0  flex justify-center items-center pt-5 w-full">
                                <h1 class="text-[15px] font-semibold items-center text-center ">{{ $certificate->text }}</h1>
                            </div>

                        </div>
                    </div>
                @endforeach
                {{-- @endforeach --}}
            @endcomponent
        </div>