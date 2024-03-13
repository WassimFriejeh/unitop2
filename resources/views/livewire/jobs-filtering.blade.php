<div id="jobFilteringComponent">
    <div class="flex sm:flex-row flex-col gap-x-20">
        <div class="custom-select-container flex-1">
            <label for="" class="label text-start">search by</label>
            <div class="w-full flex-1 relative">
                <input type="text" wire:model.live='search'
                    class="w-full text-[18px] sm:placeholder:text-[18px] placeholder:text-[14px] ml-[10%]"
                    placeholder="Keyword/Ref">
                <i
                    class="absolute pointer-events-none text-primaryColor right-3 top-1/2 transform -translate-y-1/2 fa-solid fa-magnifying-glass"></i>
            </div>
        </div>
        <div class="flex gap-x-20 flex-1">
            <div class="custom-select-container">
                <label for="" class="label">Location</label>
                <div class="relative flex-1">
                    <select wire:model.live="countryOption" class="custom-select">
                        <option value="allCountries">View All</option>
                        @foreach ($countries as $country)
                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                        @endforeach
                    </select>
                    <i
                        class="absolute pointer-events-none text-primaryColor right-3 top-1/2 transform -translate-y-1/2 fa-solid fa-arrow-down -rotate-45"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="sm:pt-12 pt-4 sm:pb-20 pb-8 border-b border-b-darkColor border-opacity-20  text-xs">
        <div class="col-span-12 sm:grid grid-cols-12 bg-lightColor px-5 py-3 gap-y-6 font-medium capitalize hidden">
            <div class="col-span-4" wire:click="setSortBy('label')">
                <div class="w-fit flex text-sm items-center gap-x-2 cursor-pointer">
                    <p>
                        title
                    </p>
                    @include('includes.sort-down', ['sortOption' => 'label'])>
                </div>

            </div>
            <div class="col-span-2" wire:click="setSortBy('country_id')">
                <div class="w-fit flex items-center gap-x-2 cursor-pointer">
                    <p>
                        country
                    </p>
                    @include('includes.sort-down', ['sortOption' => 'country_id'])>
                </div>
            </div>
            <div class="col-span-2" wire:click="setSortBy('city_id')">
                <div class="w-fit flex items-center gap-x-2 cursor-pointer">
                    <p>
                        city
                    </p>
                    @include('includes.sort-down', ['sortOption' => 'city_id'])>
                </div>
            </div>
            <div class="col-span-4" wire:click="setSortBy('closing_date')">
                <div class="w-fit flex items-center gap-x-2 cursor-pointer">
                    <p>
                        closing date
                    </p>
                    @include('includes.sort-down', ['sortOption' => 'closing_date'])>
                </div>
            </div>
        </div>
        @foreach ($jobs as $index => $job)
            <div class="col-span-12 grid grid-cols-12 sm:gap-y-6 gap-y-1 {{ $index % 2 ? 'bg-lightColor' : '' }} sm:px-5 px-3 py-3">
                <div class="sm:col-span-4 col-span-12 capitalize w-[80%]">{{ $job->label }}</div>
                <div class="sm:col-span-2 col-span-12 capitalize">
                    {{ isset($job->country->name) ? $job->country->name : '' }}</div>
                <div class="sm:col-span-2 col-span-12 capitalize">
                    {{ isset($job->city->label) ? $job->city->label : '' }}</div>
                <div class="sm:col-span-4 col-span-12 capitalize flex justify-between">
                    <p>{{ isset($job->closing_date) ? $job->closing_date : '' }}</p>
                    <a href="{{ route('job-details', ['slug' => $job->slug]) }}"
                        class="flex items-start gap-x-2 text-primaryColor">
                        <p class="underline sm:text-xs text-[10px] font-bold">VIEW MORE</p>
                        <i class="fa-solid fa-arrow-up rotate-45 text-[18px]"></i>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
    <div class="pagination mt-6 mb-14">
        @if ($jobs->lastPage() > 1)
            <ul>
                @for ($i = 1; $i <= $jobs->lastPage(); $i++)
                    <div>
                        <li class="{{ $i == $jobs->currentPage() ? 'active' : '' }}">
                            <a onclick="WassimWebsiteFunctions.scrollToElement('jobFilteringComponent')"
                                wire:click="gotoPage({{ $i }})">{{ $i }}</a>
                        </li>
                    </div>
                @endfor
            </ul>
        @endif
    </div>
</div>
