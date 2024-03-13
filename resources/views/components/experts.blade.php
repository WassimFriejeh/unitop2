<div class="flex lg:flex-row md:flex-row sm:flex-col flex-col  items-end w-full  justify-between">


    @include('components.inline-title', [
        'label' =>  ___('text.experts'),
        // 'label' => $team_members->label,
        'width' => 'lg:w-[50%] md:w-[50%] sm:w-full w-full',
    ])
    @include('components.hover-button', ['display' => 'block', 'label' => 'OUR FOUNDER', 'link' => 'our-founder'])



</div>
<div class="pt-10">
    <hr class="border-darkColor">
</div>
<livewire:departments-controller />


{{-- <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-2    pt-10 gap-2">
    @foreach ($team_members as $team_member)
        <div>
            <div class="asp asp-3-4">
                <img src="{{ $team_member->image['image'] }}" alt="">
            </div>
            <div class="info bg-lightColor p-4">
                <h1
                    class="text-primaryColor lg:text-[12px] md:text-[12px] sm:text-[10px] text-[10px] font-bold uppercase tracking-normal">
                    {{ $team_member->position }}</h1>
                <h1
                    class="text-darkColor lg:text-[20px] md:lg:text-[20px] sm:text-[13px] text-[13px] font-bold capitalize ">
                    {{ $team_member->name }}</h1>
            </div>
            <hr class="border-darkColor">
            <div class="info bg-lightColor p-4">
                <p class="text-[12px] text-darkColor tracking-normal opacity-100 ">{{ $team_member->description }}</p>
            </div>
        </div>
    @endforeach
</div> --}}
