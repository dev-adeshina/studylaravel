

<section id="destinations" class="shell py-16 sm:py-20 md:py-24 lg:py-28">
    <div class="flex flex-col gap-6 md:flex-row md:items-end md:justify-between py-6">
        <div>
            <p class="eyebrow">{{ $setting->eyebrow ?? 'Global Reach' }}</p>
            <h2 class="section-title mt-4">{{ $setting->title ?? 'Top Study Destinations' }}</h2>
        </div>


        <a href="{{ route('destination') }}" class="pixel-anchor group relative inline-flex items-center h-11 justify-between min-w-[180px] px-2 overflow-hidden bg-transparent border border-[#16484B]/50 rounded-lg no-underline transition-all duration-300 hover:border-[#E2C065]/40">

            <div class="pixel-grid absolute inset-0 grid pointer-events-none">
            </div>

            <span class="relative z-10 anchor-text transition-colors duration-500 group-hover:text-[#E2C065]">
                View All Destinations
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

    <div id="destination-carousel" class="destination-grid">
        @foreach($destinations as $destination)
            @php
                $extension = pathinfo($destination->image_path, PATHINFO_EXTENSION);
            @endphp
            <article class="group destination-card">
                <img
                    src="https://res.cloudinary.com/{{ config('filesystems.disks.cloudinary.cloud_name') }}/image/upload/{{ $destination->image_path }}"
                    alt="{{ $destination->slug ?? 'Destination' }}"
                    class="destination-card-image object-[52%_center]" />
                <div class="destination-card-content">
                    <h3 class="font-display text-[2rem] leading-tight">{{ $destination->name  ?? 'bla bla bla'}}</h3>
                    <p class="text-sm leading-6 text-white/80">
                        {{ $destination->excerpt ?? 'blabla' }}
                    </p>
                </div>
            </article>
        @endforeach
    </div>
    <div class="testimonial-nav">
        <button type="button" class="nav-btn-prev" data-target="destination-carousel">
            <i class="fa-solid fa-arrow-left"></i>
        </button>
        <button type="button" class="nav-btn-next" data-target="destination-carousel">
            <i class="fa-solid fa-arrow-right"></i>
        </button>
    </div>
</section>