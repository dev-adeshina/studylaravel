<!-- 1. Added 'container mx-auto' to keep content from hitting the screen edges -->
<div class="container mx-auto px-4 py-16">

    <!-- 2. Responsive Grid: 1 col on mobile, 2 on tablet (md), 3 on desktop (lg) -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-10">

        @foreach($travels as $travel)
        <!-- Card Item -->
        <div class="flex flex-col group destination-uk">
            <!-- 3. Fixed Image Container -->
            <div class="relative overflow-hidden aspect-[16/10]">
                <img
                    src="https://res.cloudinary.com/{{ config('filesystems.disks.cloudinary.cloud_name') }}/image/upload/{{ $travel->image_path }}"
                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                    alt="Study in UK">
                <!-- Overlay Shadow -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
            </div>

            <!-- 4. Content Spacing -->
            <div class="mt-6 flex flex-col flex-grow">
                <h1 class="destination-title">{{ $travel->title }}</h1>
                <p class="destination-paragraph">
                   {{ $travel->description }}
                </p>


                <a href="{{ route('travels.' . $travel->slug) }}" class="pixel-anchor group my-4 relative inline-flex items-center h-11 justify-between lg:w-[280px] min-w-[180px] px-2 overflow-hidden bg-transparent border border-[#16484B]/50 rounded-lg no-underline transition-all duration-300 hover:border-[#E2C065]/40">

                    <div class="pixel-grid absolute inset-0 grid pointer-events-none">
                    </div>

                    <span class="relative z-10 anchor-text transition-colors duration-500 group-hover:text-[#E2C065]">
                        View Destination
                    </span>

                    <div class="relative z-10 flex items-center justify-center w-8 h-8 ml-4 bg-[#16484b] rounded-[5px] transition-all duration-500 group-hover:bg-[#E2C065] hover:-translate-y-1 hover:scale-110">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5 text-[#E2C065] transition-transform duration-500 group-hover:text-[#16484b]"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2.5"
                            stroke-linecap="round"
                            stroke-linejoin="round">
                            <line x1="7" y1="17" x2="17" y2="7"></line>
                            <polyline points="7 7 17 7 17 17"></polyline>
                        </svg>
                    </div>

                </a>
            </div>
        </div>
        @endforeach

        <!-- Repeat for other destinations... -->


    </div>
</div>