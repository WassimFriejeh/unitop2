<div>
    <div class="flex sm:gap-x-6 gap-x-2">
        @foreach ($categories as $category)
            <button wire:click="handleClick('{{ $category->id }}')"
                class="navigate-btn {{ $categoryId == $category->id ? 'active' : '' }}">{{ $category->category }}</button>
        @endforeach
    </div>
    <div class="mt-8  text-darkColor text-center">
        <div class="grid sm:grid-cols-3 grid-cols-1 gap-x-4 gap-y-10">
            @foreach ($assets as $asset)
                <div download="{{ $asset->label }}">
                    <div class="asp asp-2-1">
                        <img src="/assets/images/home/island.jpg" alt="">
                    </div>
                    <div class="px-3">
                        <p class="text-lg font-bold mt-5">{{ $asset->label }}</p>
                        <p class="mt-3 text-sm">{{ $asset->info }}</p>
                        <a @if (isset($asset['pdf_file']['file'])) href="{{ $asset['pdf_file']['file'] }}" @endif
                            class="w-fit mt-3 mx-auto flex gap-x-2 items-center bg-primaryColor bg-opacity-10 py-2 px-[10px]"
                            download="{{ $asset->label }}">
                            <img class="w-6 h-6" src="/assets/svg/download-file.svg" alt="">
                            <p class="font-bold uppercase text-primaryColor text-xs">DOWNLOAD PDF</p>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="pagination mt-12">
            @if ($assets->lastPage() > 1)
                <ul>
                    @for ($i = 1; $i <= $assets->lastPage(); $i++)
                        <div>
                            <li class="{{ $i == $assets->currentPage() ? 'active' : '' }}">
                                <a onclick="WassimWebsiteFunctions.scrollToTop()"
                                    wire:click="gotoPage({{ $i }})">{{ $i }}</a>
                            </li>
                        </div>
                    @endfor
                </ul>
            @endif
        </div>
    </div>
</div>
