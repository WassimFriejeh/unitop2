<div class="pt-20 font-bold">
    <div class="flex lg:flex-row md:flex-row sm:flex-col flex-col items-center justify-between mb-9 main-container">
        <p class="sixty-bold">
            {{ $title }}
        </p>
        @include('components.hover-button', [
            'display' => 'block',
            'label' => 'view all articles',
            'link' => '/blogs',
        ])
        {{-- <a href="#" class="flex items-center">
            <p class="uppercase text-primaryColor text-xs">view all articles </p>
            @include('components.rounded-arrow', ['classes' => 'w-8 h-8 text-[15px]'])
        </a> --}}
    </div>
    <div class="owl-carousel owl-theme main-container lg:!pr-0" id="article-carousel">
        @foreach ($blogs as $blog)
            @if ($blog->display_people)
                @include('components.article-card', [
                    'image' => $blog->image['image'],
                    'category' => isset($blog->category->label) ? $blog->category->label : '',
                    'name' => $blog->label,
                    'publisher' => $blog->name_tag,
                    'date' => $blog->date,
                ])
            @endif
        @endforeach


    </div>
</div>
