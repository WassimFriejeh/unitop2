<header>
    <nav {{-- @if ($is_transparent) onmouseover="WassimWebsiteFunctions.whiteNavbar()" onmouseout="WassimWebsiteFunctions.transparentNavbar() @endif" --}}>
        <div class="header-container  {{ $is_transparent ? 'transparentHeader' : 'whiteHeader' }} whiteHeader">
            <a href="/" class="w-fit"><img id="HomeLogo" class="lg:w-[130px] md:w-[90px] w-[75px]"
                    src="{{ $is_transparent ? '/assets/svg/light-logo.svg' : '/assets/svg/dark-logo.svg' }}"
                    alt="" id="HomeImage"></a>
            <div class="flex h-full gap-x-[2vw] ph:gap-x-2 tb:text-center items-center  font-semibold tb:text-[8px]">

                <button class="dropdown-button" onmouseover="WassimWebsiteFunctions.dropdownHover(this)"
                    onmouseout="WassimWebsiteFunctions.dropdownHover(this)">
                    <p>about us</p>
                    <i class="fa-solid fa-caret-down"></i>
                    <!-- Dropdown menu -->
                    <div class="dropdown-menu hidden" {{-- @if (222) onmouseover="WassimWebsiteFunctions.whiteNavbar()" onmouseout="WassimWebsiteFunctions.transparentNavbar() @endif" --}}>
                        <div>
                            <a href="{{ route('about-us', ['go_to_section' => 'introduction']) }}" class="menu-link">
                                Introduction
                            </a>
                        </div>
                        <div>
                            <a href="{{ route('about-us', ['go_to_section' => 'our-founder']) }}" class="menu-link">
                                Our Founder
                            </a>
                        </div>
                        <div>
                            <a href="{{ route('about-us', ['go_to_section' => 'leadership']) }}" class="menu-link">
                                leadership

                            </a>
                        </div>
                        <div>
                            <a href="{{ route('about-us', ['go_to_section' => 'certifications']) }}" class="menu-link">
                                Awards & Certifications
                            </a>
                        </div>

                    </div>
                </button>
                <button class="dropdown-button" onmouseover="WassimWebsiteFunctions.dropdownHover(this)"
                    onmouseout="WassimWebsiteFunctions.dropdownHover(this)">
                    <p>our story</p>
                    <i class="fa-solid fa-caret-down"></i>
                    <!-- Dropdown menu -->
                    <div class="dropdown-menu hidden" {{-- @if (222) onmouseover="WassimWebsiteFunctions.whiteNavbar()" onmouseout="WassimWebsiteFunctions.transparentNavbar() @endif" --}}>
                        <div>
                            <a href="{{ route('our-story', ['go_to_section' => 'mission_vision']) }}" class="menu-link">
                                Mission
                            </a>
                        </div>
                        <div>
                            <a href="{{ route('our-story', ['go_to_section' => 'mission_vision']) }}" class="menu-link">
                                vission
                            </a>
                        </div>
                        <div>
                            <a href="{{ route('our-story', ['go_to_section' => 'values']) }}" class="menu-link">
                                values
                            </a>
                        </div>
                        <div>
                            <a class="menu-link">
                                sustainability
                            </a>
                        </div>
                        <div>
                            <a href="{{ route('our-story', ['go_to_section' => 'company_strategy']) }}"
                                class="menu-link">
                                company strategy
                            </a>
                        </div>

                    </div>
                </button>
                <a href="/company-history" class=" capitalize sm:block hidden">company history</a>
                <button class="dropdown-button" onmouseover="WassimWebsiteFunctions.dropdownHover(this)"
                    onmouseout="WassimWebsiteFunctions.dropdownHover(this)">
                    <p>services</p>
                    <i class="fa-solid fa-caret-down"></i>
                    <!-- Dropdown menu -->
                    <div class="dropdown-menu hidden" {{-- @if (222) onmouseover="WassimWebsiteFunctions.whiteNavbar()" onmouseout="WassimWebsiteFunctions.transparentNavbar() @endif" --}}>
                        <div>
                            <a href="{{ route('marine-support') }}" class="menu-link">
                                marine support
                            </a>
                        </div>
                        <div>
                            <a href="{{ route('industrial-catering') }}" class="menu-link">
                                industrial catering
                            </a>
                        </div>
                    </div>
                </button>
                <a href="/projects" class=" capitalize sm:block hidden">projects</a>
                <button class="dropdown-button" onmouseover="WassimWebsiteFunctions.dropdownHover(this)"
                    onmouseout="WassimWebsiteFunctions.dropdownHover(this)">
                    <p>careers</p>
                    <i class="fa-solid fa-caret-down"></i>
                    <!-- Dropdown menu -->
                    <div class="dropdown-menu hidden" {{-- @if (222) onmouseover="WassimWebsiteFunctions.whiteNavbar()" onmouseout="WassimWebsiteFunctions.transparentNavbar() @endif" --}}>
                        <div>
                            <a href="{{ route('our-people') }}" class="menu-link">
                                our people
                            </a>
                        </div>
                        <div>
                            <a href="{{ route('job-openings') }}" href="/job-openings" class="menu-link">
                                current openings
                            </a>
                        </div>
                    </div>
                </button>
                <a href="/blogs" class=" capitalize sm:block hidden">blog</a>
            </div>
            <a href="{{ route('contact-us', ['go_to_section' => 'contact_us']) }}" class="btn-arrow contact-us-button"
                id="contact-us-button">
                <p>Contact Us</p>
                <i class="fa-solid fa-arrow-up rotate-45"></i>
            </a>
            <button
                class="space-x-2  items-center justify-center hover:text-black bg-transparent sm:hidden flex hover:bg-transparent"
                id="dropdownbtn" onclick="WassimWebsiteFunctions.toggleResponsiveDropdown()">
                <i class="fa-solid fa-bars fa-2xl text-base" id="dropdownicon"></i>
            </button>
            <div class="absolute w-full hidden flex-col left-0 py-6 top-[50px] tb:top-[115px] space-y-5 bg-white h-screen text-sm text-black main-container"
                id="phonedropdown">
                <button class="dropdown-button phone" onclick="WassimWebsiteFunctions.dropdownPhone(this)">
                    <div class="flex gap-x-1">
                        <p>about us</p>
                        <i class="fa-solid fa-caret-down"></i>
                    </div>
                    <!-- Dropdown menu -->
                    <div class="dropdown-menu hidden" {{-- @if (222) onmouseover="WassimWebsiteFunctions.whiteNavbar()" onmouseout="WassimWebsiteFunctions.transparentNavbar() @endif" --}}>
                        <div>
                            <a href="{{ route('about-us', ['go_to_section' => 'introduction']) }}" class="menu-link">
                                Introduction
                            </a>
                        </div>
                        <div>
                            <a href="{{ route('about-us', ['go_to_section' => 'our-founder']) }}" class="menu-link">
                                Our Founder
                            </a>
                        </div>
                        <div>
                            <a href="{{ route('about-us', ['go_to_section' => 'leadership']) }}" class="menu-link">
                                leadership

                            </a>
                        </div>
                        <div>
                            <a href="{{ route('about-us', ['go_to_section' => 'certifications']) }}" class="menu-link">
                                Awards & Certifications
                            </a>
                        </div>

                    </div>
                </button>
                <button class="dropdown-button phone" onclick="WassimWebsiteFunctions.dropdownPhone(this)">
                    <div class="flex gap-x-1">
                        <p>our story</p>
                        <i class="fa-solid fa-caret-down"></i>
                    </div>
                    <!-- Dropdown menu -->
                    <div class="dropdown-menu hidden" {{-- @if (222) onmouseover="WassimWebsiteFunctions.whiteNavbar()" onmouseout="WassimWebsiteFunctions.transparentNavbar() @endif" --}}>
                        <div>
                            <a href="{{ route('our-story', ['go_to_section' => 'mission_vision']) }}"
                                class="menu-link">
                                Mission
                            </a>
                        </div>
                        <div>
                            <a href="{{ route('our-story', ['go_to_section' => 'mission_vision']) }}"
                                class="menu-link">
                                vission
                            </a>
                        </div>
                        <div>
                            <a href="{{ route('our-story', ['go_to_section' => 'values']) }}" class="menu-link">
                                values
                            </a>
                        </div>
                        <div>
                            <a class="menu-link">
                                sustainability
                            </a>
                        </div>
                        <div>
                            <a href="{{ route('our-story', ['go_to_section' => 'company_strategy']) }}"
                                class="menu-link">
                                company strategy
                            </a>
                        </div>

                    </div>
                </button>
                <a href="/company-history" class="capitalize">company history</a>
                <button class="dropdown-button phone" onclick="WassimWebsiteFunctions.dropdownPhone(this)">
                    <div class="flex gap-x-1">
                        <p>services</p>
                        <i class="fa-solid fa-caret-down"></i>
                    </div>
                    <!-- Dropdown menu -->
                    <div class="dropdown-menu hidden" {{-- @if (222) onmouseover="WassimWebsiteFunctions.whiteNavbar()" onmouseout="WassimWebsiteFunctions.transparentNavbar() @endif" --}}>
                        <div>
                            <a href="{{ route('marine-support') }}" class="menu-link">
                                marine support
                            </a>
                        </div>
                        <div>
                            <a href="{{ route('industrial-catering') }}" class="menu-link">
                                industrial catering
                            </a>
                        </div>
                    </div>
                </button>
                <a href="/projects" class="capitalize">projects</a>
                <button class="dropdown-button phone" onclick="WassimWebsiteFunctions.dropdownPhone(this)">
                    <div class="flex gap-x-1">
                        <p>careers</p>
                        <i class="fa-solid fa-caret-down"></i>
                    </div>
                    <!-- Dropdown menu -->
                    <div class="dropdown-menu hidden" {{-- @if (222) onmouseover="WassimWebsiteFunctions.whiteNavbar()" onmouseout="WassimWebsiteFunctions.transparentNavbar() @endif" --}}>
                        <div>
                            <a href="{{ route('our-people') }}" class="menu-link">
                                our people
                            </a>
                        </div>
                        <div>
                            <a href="{{ route('job-openings') }}" href="/job-openings" class="menu-link">
                                current openings
                            </a>
                        </div>
                    </div>
                </button>
                <a href="/blogs" class="capitalize">blog</a>
            </div>
        </div>
    </nav>
</header>
