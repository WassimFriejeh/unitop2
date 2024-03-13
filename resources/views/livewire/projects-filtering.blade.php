<div>
    <div class="flex gap-10 pt-5 sm:w-[50%] w-full border-b justify-between pb-4">
        <label for="" class="text-primaryColor text-[13px] font-bold">Filter By Category</label>
        <div class="relative">
            <select wire:model.live="categoryOption" class="custom-select">
                <option value="all">View All</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->category }}</option>
                @endforeach
            </select>
            <i
                class="absolute pointer-events-none text-primaryColor right-3 top-1/2 transform -translate-y-1/2 fa-solid fa-arrow-down -rotate-45"></i>
        </div>
    </div>
    <div class="flex sm:gap-x-6 gap-x-2 sm:mt-10 mt-5">
        <button wire:click="handleType('marine services')"
            class="navigate-btn {{ $type == 'marine services' ? 'active' : '' }}">marine services
        </button>
        <button wire:click="handleType('industrial catering')"
            class="navigate-btn {{ $type == 'industrial catering' ? 'active' : '' }}">industrial catering
        </button>
    </div>
    <div class="grid grid-cols-1 gap-y-6 mt-8">
        @foreach ($projects as $project)
            <div :class="{ 'sm:asp-3-1': expanded }" x-data="{ expanded: false }" @mouseover="expanded=true"
                @mouseleave="expanded=false" class="hover-image-container" {{-- onmouseover="this.classList.toggle('asp asp-4-1');" --}}>
                @if (isset($project['image']['image']))
                    <img src="{{ $project['image']['image'] }} " alt="">
                @endif
                <div class="text-container">
                    <p class="first-letter:capitalize font-bold sm:text-2xl text-lg">{{ $project->name }}</p>
                    <p class="sm:mt-4 mt-2 sm:text-base text-sm">{{ $project->info }}</p>
                    <div class="date-container mt-4" x-show="expanded" x-collapse.duration.1000ms>
                        @foreach ($project->extra_infos as $extra_info)
                            <p
                                class=" {{ !$loop->first ? 'mt-[10px]' : '' }} py-1 px-4 rounded-s-full rounded-e-full bg-primaryColor w-fit font-bold sm:text-base text-xs">
                                {{ $extra_info['date'] }}</p>
                            <p class="sm:text-sm text-xs mt-[6px]">{{ $extra_info['text'] }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="pagination mt-12">
        @if ($projects->lastPage() > 1)
            <ul>
                @for ($i = 1; $i <= $projects->lastPage(); $i++)
                    <div>
                        <li class="{{ $i == $projects->currentPage() ? 'active' : '' }}">
                            <a onclick="WassimWebsiteFunctions.scrollToTop()"
                                wire:click="gotoPage({{ $i }})">{{ $i }}</a>
                        </li>
                    </div>
                @endfor
            </ul>
        @endif
    </div>
</div>
