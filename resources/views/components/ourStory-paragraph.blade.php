

<div class="flex lg:flex-row md:flex-row sm:flex-row-col flex-col items-end w-full  justify-between">

   @include('components.inline-title', [
     'label' => $our_story->title,
     'width' => 'lg:w-[73%] md:w-[73%] sm:w-full w-full',
 ])
      @include('components.rounded-arrow', ['classes' => 'w-12 h-12', 'hovered' => true,'link'=>'/our-story'])
        </div>
 <p class="parapraph-style pt-10 w-[86%]">{!! $paragraph !!}</p>
