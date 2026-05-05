@if($isVisible === true)
<section id="blog" class="shell py-16 sm:py-20 md:py-24 lg:py-28">
    <div class="flex flex-col gap-6 md:flex-row md:items-end md:justify-between">
        <div class="max-w-2xl">
            <h2 class="section-title">{{ $settings->eyebrow}}</h2>
            <p class="mt-4 text-base leading-8 text-slate-600">
                {{ $settings->title }}
            </p>
        </div>


        <a href="#home" class="pixel-anchor group relative inline-flex items-center h-11 justify-between min-w-[180px] px-2 overflow-hidden bg-transparent border border-[#16484B]/50 rounded-lg no-underline transition-all duration-300 hover:border-[#E2C065]/40">

            <div class="pixel-grid absolute inset-0 grid pointer-events-none">
            </div>

            <span class="relative z-10 anchor-text transition-colors duration-500 group-hover:text-[#E2C065]">
                Explore All Resources
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

    <div class="mt-12 sm:mt-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 lg:gap-8">
        <article class="blog-card">
            <img
                src="https://images.unsplash.com/photo-1485955900006-10f4d324d411?auto=format&amp;fit=crop&amp;w=1200&amp;q=80"
                alt="Plant on a table"
                class="blog-card-media"
                loading="lazy" />
            <div class="blog-card-body">
                <p class="blog-card-meta">Scholarships • 5 Min Read</p>
                <div class="blog-card-heading">
                    <h3 class="blog-card-title">Top UK scholarships for Nigerian students in 2026</h3>
                    <span class="blog-card-arrow">
                        <i class="fa-solid fa-arrow-right"></i>
                    </span>
                </div>
                <p class="blog-card-copy">
                    Discover fully funded opportunities, key eligibility criteria, and
                    timelines worth planning around.
                </p>
            </div>
        </article>

        <article class="blog-card">
            <img
                src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&amp;fit=crop&amp;w=1200&amp;q=80"
                alt="Woman smiling"
                class="blog-card-media"
                loading="lazy" />
            <div class="blog-card-body">
                <p class="blog-card-meta">Test Prep • 3 Min Read</p>
                <div class="blog-card-heading">
                    <h3 class="blog-card-title">IELTS preparation: how to score band 8.0 on your first try</h3>
                    <span class="blog-card-arrow">
                        <i class="fa-solid fa-arrow-right"></i>
                    </span>
                </div>
                <p class="blog-card-copy">
                    Master the listening, speaking, and writing sections with a focused,
                    realistic weekly plan.
                </p>
            </div>
        </article>

        <article class="blog-card">
            <div class="blog-card-placeholder">
                <div>
                    <p class="font-display text-5xl tracking-[0.35em] text-brand-700">BLOG</p>
                    <p class="mt-6 text-sm uppercase tracking-[0.4em] text-brand-500">Visa tips</p>
                    <p class="mt-3 text-sm uppercase tracking-[0.4em] text-brand-500">Student stories</p>
                </div>
            </div>
            <div class="blog-card-body">
                <p class="blog-card-meta">Student Life • 10 Min Read</p>
                <div class="blog-card-heading">
                    <h3 class="blog-card-title">Cost of living comparison: UK vs Canada vs USA</h3>
                    <span class="blog-card-arrow">
                        <i class="fa-solid fa-arrow-right"></i>
                    </span>
                </div>
                <p class="blog-card-copy">
                    A comprehensive breakdown of rent, food, and transport to help you
                    budget for international student life.
                </p>
            </div>
        </article>
    </div>
</section>


@endif

