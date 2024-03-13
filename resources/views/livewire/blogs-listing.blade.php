<div>
    <div class="flex lg:gap-10 md:gap-10 sm:gap-10 gap-10 pt-5 lg:w-[50%] md:w-[100%] sm:w-[100%] w-[100%] border-b justify-between pb-4">
        <label for="" class="text-primaryColor text-[13px] font-bold uppercase">Search by category:</label>
        <div class="relative">
            <select wire:model.live="selectedCategory" class="custom-select">
                <option value="">View All</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->label }}">{{ $category->label }}</option>
                @endforeach
            </select>
            <i
                class="absolute pointer-events-none text-primaryColor right-3 top-1/2 transform -translate-y-1/2 fa-solid fa-arrow-down -rotate-45"></i>
        </div>
    </div>
    <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 grid-cols-1 gap-x-5 gap-y-7 mt-10">
        @foreach ($blogs as $blog)
            @include('components.article-card', [
                'image' => $blog->image['image'],
                'category' => $blog->category->label,
                'name' => $blog->label,
                'publisher' => $blog->name_tag,
                'date' => $blog->date,
            ])
        @endforeach

    </div>

  <div class="pagination mt-12">
    @if ($blogs->lastPage() > 1)
        <ul>
            @for ($i = 1; $i <= $blogs->lastPage(); $i++)
                <div>
                    <li class="{{ $i == $blogs->currentPage() ? 'active' : '' }}">
                        <a onclick="WassimWebsiteFunctions.scrollToTop()" wire:click="gotoPage({{ $i }})">{{ $i }}</a>
                    </li>
                </div>
            @endfor
        </ul>
    @endif
</div>

</div>
