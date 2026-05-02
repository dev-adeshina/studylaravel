<!-- <header class="relative z-50 isolate overflow-hidden bg-brand-800 text-white py-8">
    <div class="hero-pattern absolute inset-0 bg-grid-fade opacity-50 pointer-events-none"></div>
    <div class="shell pt-3 sm:pt-4 lg:pt-6">
        <nav class="flex items-center justify-between gap-4">
            <a href="{{ route('home') }}" class="flex shrink-0 items-center">
                <img src="{{ asset('/images/logo.svg') }}" alt="StudyGuide logo" class="h-10 w-auto md:h-11" />
            </a>

            <div class="hidden md:flex items-center gap-4 lg:gap-6 xl:gap-8">
                <a href="{{ route('home') }}" class="nav-link anchor-nav text-xs lg:text-sm font-bold">HOME</a>
                <a href="{{ route('about') }}" class="nav-link anchor-nav text-xs lg:text-sm font-bold">ABOUT US</a>
                <a href="{{ route('services') }}" class="nav-link anchor-nav text-xs lg:text-sm font-bold">SERVICES</a>
                <a href="{{ route('destination') }}" class="nav-link anchor-nav text-xs lg:text-sm font-bold">DESTINATION</a>
                <a href="{{ route('faq') }}" class="nav-link anchor-nav text-xs lg:text-sm font-bold">FAQ</a>
                <a href="{{ route('blog') }}" class="nav-link anchor-nav text-xs lg:text-sm font-bold">BLOG</a>
            </div>

            <div class="flex items-center gap-3">

                <a href="#apply" class="hidden sm:inline-flex pixel-anchor group relative items-center h-11 px-4 overflow-hidden bg-[#E2C065] border border-white/20 rounded-lg no-underline transition-all duration-300">
                    <div id="pixel-grid" class="pixel-grid absolute inset-0 grid pointer-events-none">
                    </div>
                    <span class="relative z-10 text-sm font-bold mr-10">Get In Touch</span>
                    <div class="relative z-10 flex items-center justify-center w-7 h-7 ml-3 bg-[#16484b] rounded-md group-hover:bg-[#E2C065]">
                        <svg class="w-4 h-4 text-[#E2C065] group-hover:text-[#16484b]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                            <line x1="7" y1="17" x2="17" y2="7"></line>
                            <polyline points="7 7 17 7 17 17"></polyline>
                        </svg>
                    </div>
                </a>

                <details class="relative md:hidden group">
                    <summary class="relative flex h-11 w-11 items-center justify-center text-white">
                        <i class="fa-solid fa-bars absolute transition-opacity duration-200 group-[open]:opacity-0"></i>
                        <i class="fa-solid fa-xmark absolute opacity-0 transition-opacity duration-200 group-[open]:opacity-100"></i>
                    </summary>

                    <div class="absolute right-0 top-full mt-4 z-50 w-[80vw] max-w-[300px]  border border-white/10 bg-brand-900/98 p-6 shadow-2xl rounded-xl backdrop-blur-lg">
                        <div class="flex flex-col gap-5 text-sm font-bold text-white/80">
                            <a href="{{ route('home') }}" class="hover:text-[#E2C065]">HOME</a>
                            <a href="{{ route('about') }}" class="hover:text-[#E2C065]">ABOUT US</a>
                            <a href="{{ route('services') }}" class="hover:text-[#E2C065]">SERVICE</a>
                            <a href="{{ route('destination') }}" class="hover:text-[#E2C065]">DESTINATION</a>
                            <a href="{{ route('faq') }}" class="hover:text-[#E2C065]">FAQ</a>
                            <a href="{{ route('blog') }}" class="hover:text-[#E2C065]">BLOG</a>
                            <hr class="border-white/10">
                            <a href="#apply" class="w-full bg-[#E2C065] py-3 text-center text-brand-900 rounded-lg">Get In Touch</a>
                        </div>
                    </div>
                </details>
            </div>
        </nav>
    </div>
</header> -->

<x-header-menu/>