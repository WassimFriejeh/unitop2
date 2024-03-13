<div>
    <div class="grid grid-cols-12  w-full">
        <div class="lg:col-span-7 sm:col-span-12 md:col-span-7 col-span-12 ">
            <div class="w-[90%] flex flex-col h-full  border-t-2 ">
                @include('components.main-title', [
                    'text' => $caption,
                    'title' => $title,
                ])

                <h1 class="parapraph-style mt-10">{!! $paragraph !!}
                </h1>
                <div class="my-auto pt-5">
                    @include('components.hover-button', ['display' => $display, 'label' => $label])
                </div>
            </div>
        </div>
        <div class="sm:col-span-5 pt-5 col-span-12">
            @include('components.main-image', ['position' => 'left-[-5px]', 'image' => $image])

        </div>
    </div> 
</div>
