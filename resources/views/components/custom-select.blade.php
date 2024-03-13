<div class="flex gap-10 pt-5 w-[50%] border-b justify-between pb-4">
    <label for="" class="text-primaryColor text-[13px] font-bold">{{ $title }}</label>
    <div class="relative">
        <select wire:model.live="selectedDepartment" class="custom-select">
            <option value="">View All</option>
            @foreach ($categories as $categories)
                <option value="{{ $categories->label }}">{{ $categories->label }}</option>
            @endforeach
        </select>
        <i
            class="absolute pointer-events-none text-primaryColor right-3 top-1/2 transform -translate-y-1/2 fa-solid fa-arrow-down -rotate-45"></i>
    </div>
</div>
