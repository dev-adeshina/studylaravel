<section id="service-stories" class="py-16 md:py-20">
    <div class="flex flex-col gap-y-20">

         @foreach($mainFeatures as $main) 
        <div class="group flex flex-col lg:flex-row lg:even:flex-row-reverse items-center">
            <div class="w-full lg:w-1/2 order-2 lg:order-none 
                                px-4 py-8
                                lg:pl-[340px] lg:pr-[100px] 
                                lg:group-even:pl-[100px] lg:group-even:pr-[340px]">

                <h1 class="service-title">{{ $main->title }}</h1>
                <p class="service-paragraph">
                    {{ $main->description }}
                </p>

                <a href="{{ route('contact')}}" class="pixel-anchor group/btn my-4 relative inline-flex items-center h-11 justify-between w-full lg:w-[180px] min-w-[180px] px-2 overflow-hidden bg-transparent border border-[#16484B]/50 rounded-lg no-underline transition-all duration-300 hover:border-[#E2C065]/40">
                    <div class="pixel-grid absolute inset-0 grid pointer-events-none"></div>
                    <span class="relative z-10 anchor-text transition-colors duration-500 group-hover/btn:text-[#E2C065]">
                        Talk to Us
                    </span>
                    <div class="relative z-10 flex items-center justify-center w-8 h-8 ml-4 bg-[#16484b] rounded-[5px] transition-all duration-500 group-hover/btn:bg-[#E2C065] hover:-translate-y-1 hover:scale-110">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#E2C065] transition-transform duration-500 group-hover/btn:text-[#16484b]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="7" y1="17" x2="17" y2="7"></line>
                            <polyline points="7 7 17 7 17 17"></polyline>
                        </svg>
                    </div>
                </a>
            </div>

            <div class="relative w-full lg:w-1/2 order-1 lg:order-none">
                <img src="https://res.cloudinary.com/{{ config('filesystems.disks.cloudinary.cloud_name') }}/image/upload/{{ $main->image_path }}" class="w-full h-auto object-cover">
                <!-- Overlay Shadow -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
            </div>

        </div>
        @endforeach
    </div>
</section>