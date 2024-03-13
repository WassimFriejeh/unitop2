<div>
    <div>

        <div class="flex  lg:gap-10 md:gap-10 sm:gap-0 gap-0 pt-5 lg:w-[50%] md:w-[100%] sm:w-[100%] w-[100%] border-b justify-between pb-4">
            <label for="" class="text-primaryColor text-[13px] font-bold">FILTER BY DEPARTMENT:</label>
            <div class="relative">
                <select wire:model.live="selectedDepartment" class="custom-select">
                    <option value="">View All</option>
                    @foreach ($departments as $department)
                        <option value="{{ $department->label }}">{{ $department->label }}</option>
                    @endforeach
                </select>
                <i
                    class="absolute pointer-events-none text-primaryColor right-3 top-1/2 transform -translate-y-1/2 fa-solid fa-arrow-down -rotate-45"></i>
            </div>
        </div>
    </div>
    <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-2    pt-10 gap-2">
        @forelse ($team_members as $team_member)
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
                    <p class="text-[12px] text-darkColor tracking-normal opacity-100 ">{{ $team_member->description }}
                    </p>
                </div>
            </div>
        @empty
          <div class="w-full col-span-12"> <div class="text-black text-[14px]">
                No team members found in the selected department.
            </div></div>
           
        @endforelse

    </div>
</div>
