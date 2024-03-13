
<div>
    <div class="grid grid-cols-12 pt-10 lg:gap-10 md:gap-10 sm:gap-0 gap-0 w-full">

          <div class="sm:col-span-5 col-span-12">
            @include('components.main-image', ['position' => 'right-[-8px]', 'image' => $image])
        </div>
       <div class="lg:col-span-7 sm:col-span-12 md:col-span-7 col-span-12 ">
            <div class="w-[90%] flex flex-col  border-t-2 ">
                @include('components.main-title', [
                    'text' => $caption,
                    'title' => $title,
                ])
                <h1 class="parapraph-style pt-6 lg:w-[95%] md:w-[100%] sm:w-[100%] w-full">{!! $paragraph !!}
                </h1>

            </div>
        </div>
    </div>
    @include('components.hover-button', ['display' => $display, 'label' => 'LEARN MORE'])
</div>
