@php
    $galleryImages = $blog->gallery;
    $video_link = $blog->video_link;
@endphp
@if (isset($blog))
    <div class="asp asp-3-1">
        <img src={{ $blog->image['image'] }} alt="">
    </div>


    <div class="main-container w-full pt-10">

        <div class="px-4 py-2 rounded-tag">
            {{ $blog->category->label }}
        </div>

        <div class="flex w-full justify-between items-center">
            <h1 class="lg:text-[40px] md:text-[40px] sm:text-[22px] text-[22px] pt-5 font-bold text-darkColor">
                {{ $blog->label }}
            </h1>
            <div class="icon w-12 h-12  hover:bg-darkColor">
              
                <a class="a2a_dd" href="https://www.addtoany.com/share">
                    <div class="flex flex-row gap-2">
                                      <i class="fa-solid fa-share-nodes"></i>

                       
                    </div>
                </a>
            </div>
        </div>
        <p class="text-[18px] lg:w-[86%] md:w-[100%] sm:w-[100%] w-[100%] font-normal tracking-normal pt-5"> {{ $blog->text }}</p>
        <div class="text-[14px] pt-10 pb-5"> {!! $blog->first_paragraph !!}</div>
        <div class="grid grid-cols-12 w-full gap-5 pt-5">
            @if ($galleryImages)
                @foreach ($galleryImages as $gallery)
                    <div class="col-span-6">
                        <div class="relative">
                            <div class="asp asp-1-6-1">
                                <div
                                    class="absolute z-10 top-0 bottom-0 left-0 right-0 justify-center flex items-center">
                                    <img src={{ $gallery['image'] }} alt="" class="brightness-50 cursor-pointer"
                                        {{-- @if ($video_link) onclick="NourhanWebsiteFunctions.openYoutube('{{ $video_link }}')" @endif --}}>
                                    {{-- @if ($video_link)
                                <a href="javascript:" class="play-icon-single-event z-10"
                                    onclick="NourhanWebsiteFunctions.openYoutube('{{ $video_link }}')">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" class="z-10 cursor-pointer"
                                        fill="white" id="playme" onclick="revealVideo('video','youtube1')"
                                        viewBox="0 0 512 512">
                                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path
                                            d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM188.3 147.1c-7.6 4.2-12.3 12.3-12.3 20.9V344c0 8.7 4.7 16.7 12.3 20.9s16.8 4.1 24.3-.5l144-88c7.1-4.4 11.5-12.1 11.5-20.5s-4.4-16.1-11.5-20.5l-144-88c-7.4-4.5-16.7-4.7-24.3-.5z">
                                        </path>
                                    </svg>
                                </a>
                            @endif --}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
            <div class="col-span-6">
                <div class="relative">
                    <div class="asp asp-1-6-1">
                        <div class="absolute z-10 top-0 bottom-0 left-0 right-0 justify-center flex items-center">
                            @if ($video_link)
                                <img src={{ $blog['video_image']['image'] }} alt=""
                                    class="brightness-50 cursor-pointer"
                                    @if ($video_link) onclick="NourhanWebsiteFunctions.openYoutube('{{ $video_link }}')" @endif>
                                <a href="javascript:" class="play-icon-single-event z-10"
                                    onclick="NourhanWebsiteFunctions.openYoutube('{{ $video_link }}')">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" class="z-10 cursor-pointer"
                                        fill="white" id="playme" onclick="revealVideo('video','youtube1')"
                                        viewBox="0 0 512 512">
                                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path
                                            d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM188.3 147.1c-7.6 4.2-12.3 12.3-12.3 20.9V344c0 8.7 4.7 16.7 12.3 20.9s16.8 4.1 24.3-.5l144-88c7.1-4.4 11.5-12.1 11.5-20.5s-4.4-16.1-11.5-20.5l-144-88c-7.4-4.5-16.7-4.7-24.3-.5z">
                                        </path>
                                    </svg>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-[14px] pt-10 pb-5">{!! $blog->second_paragraph !!}</div>
    </div>
@endif
