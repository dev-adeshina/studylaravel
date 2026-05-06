<div class="shell pb-20 sm:pb-24 md:pb-28 pt-12 sm:pt-16 md:pt-20">
    <div class="grid grid-cols-1 items-center gap-12">
        <div class="w-full">
            <div
                class="mb-6 inline-flex items-center gap-2 rounded-full border border-accent-300/20 bg-accent-300/10 px-4 py-2 text-[11px] font-semibold uppercase tracking-[0.28em] text-accent-200">
                <i class="fa-solid fa-star text-[10px]"></i>
                {{ $hero->breadcrumb ?? 'Visa Processing | Interview Prep | Admissions'}}
                <!-- Visa Processing | Interview Prep | Admissions -->
            </div>
            <div class="w-full lg:w-4/4">
                <h1 class="font-display text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-semibold leading-tight tracking-[-0.02em] text-white md:leading-[1.1] lg:leading-[1.15]">
                    {{ $hero->title ?? 'Your Global Education'}}
                    <span class="inline-block whitespace-nowrap font-inter text-[2rem] font-medium leading-[1.1] tracking-[-0.02em] text-white underline decoration-white decoration-[2px] underline-offset-[6px] md:text-[60px] md:leading-[72px] md:decoration-[3px] md:underline-offset-[10px]">{{ $hero->highlight_text ?? 'StudyGlide' }}</span>
                    <!-- Your Global Education <span class="inline-block whitespace-nowrap font-inter text-[2rem] font-medium leading-[1.1] tracking-[-0.02em] text-white underline decoration-white decoration-[2px] underline-offset-[6px] md:text-[60px] md:leading-[72px] md:decoration-[3px] md:underline-offset-[10px]">StudyGuide</span> -->
                    <br />
                    Starts Here.
                </h1>
            </div>

            <p class="mt-6 max-w-lg sm:max-w-xl lg:max-w-2xl font-body text-lg sm:text-xl md:text-2xl font-normal leading-7 sm:leading-8 md:leading-relaxed tracking-normal text-white/80">
                {{ $hero->description ?? ' ' }}

            </p>

            <div class="mt-8 sm:mt-10 flex flex-col sm:flex-row items-start sm:items-center gap-4 sm:gap-5 lg:gap-6">

                <div class="flex flex-col sm:flex-row items-center gap-4 w-full max-w-2xl">

                    <a href="{{ route($hero->primary_cta_url) }}" class="pixel-anchor group relative flex items-center h-11 justify-between w-full sm:w-1/2 px-1 overflow-hidden bg-[#E2C065] border border-white/20 rounded-lg no-underline transition-all duration-300 hover:border-white/40 hover:text-white">
                        <div id="pixel-grid" class="pixel-grid absolute inset-0 grid pointer-events-none"></div>

                        <span class="relative z-10 anchor-text pl-3 text-sm font-bold transition-colors duration-500 group-hover:text-white">
                            {{ $hero->primary_cta_text ?? '' }}
                            <!-- Explore Destinations -->
                        </span>

                        <div class="relative z-10 flex items-center justify-center w-8 h-8 ml-4 bg-[#16484b] rounded-md transition-all duration-500 group-hover:bg-white hover:-translate-y-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#E2C065] group-hover:text-[#16484b]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="7" y1="17" x2="17" y2="7"></line>
                                <polyline points="7 7 17 7 17 17"></polyline>
                            </svg>
                        </div>
                    </a>

                    <a href="{{ route($hero->secondary_cta_url) }}" class="secondary-pixel-anchor group relative flex items-center h-11 justify-between w-full sm:w-1/2 px-2 overflow-hidden bg-transparent border border-[#E2C065]/50 rounded-lg no-underline transition-all duration-300 hover:border-[#E2C065]">
                        <div class="secondary-pixel-grid absolute inset-0 grid pointer-events-none"></div>

                        <span class="relative z-10 anchor-text pl-2 text-[#E2C065] text-sm font-bold transition-colors duration-500 group-hover:text-white">
                            <!-- Get Free Advice -->
                             {{ $hero->secondary_cta_text ?? '' }}
                        </span>

                        <div class="relative z-10 flex items-center justify-center w-8 h-8 ml-4 bg-[#E2C065] rounded-md transition-all duration-500 group-hover:bg-[#16484b]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-black group-hover:text-[#E2C065]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="7" y1="17" x2="17" y2="7"></line>
                                <polyline points="7 7 17 7 17 17"></polyline>
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
        </div>


        <div class="relative overflow-hidden shadow-card">
            <img
                src="https://res.cloudinary.com/{{ config('filesystems.disks.cloudinary.cloud_name') }}/image/upload/{{ $hero->image_path }}"
                alt="Smiling international student in a hallway"
                class="h-80 sm:h-[450px] md:h-[500px] lg:h-[540px] w-full object-cover object-center" />
            <div class="absolute inset-0 bg-gradient-to-t from-brand-900 via-brand-900/10 to-transparent"></div>
        </div>
    </div>
</div>