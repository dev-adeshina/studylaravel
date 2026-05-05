<section class="py-12 sm:py-16 md:py-20">
    <div class="max-w-2xl">
        <p class="eyebrow">{{ $setting->eyebrow ?? 'Our Expertise' }}</p>
        <h2 class="section-title mt-4">{{ $setting->title ?? 'Comprehensive Services' }}</h2>
    </div>

    <div class="mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 sm:gap-6 lg:gap-8">

        @foreach($featureExpertise as $feature)
            <article class="service-card border-transparent">
                <span class="icon-chip">
                   {{ $feature->id ?? ''}}
                    <!-- <i class="fa-solid fa-building-columns"></i> -->
                </span>
                <h3 class="mt-5 font-display text-lg text-slate-900">
                    {{ $feature->title ?? 'University and Course Selection Guidance' }}
                </h3>
                <p class="mt-3 text-sm leading-7 text-slate-600">
                    {{ $feature->description ?? 'Personalised recommendations tailored to your academic background, career aspirations, and budget.' }}
                </p>
            </article>
        @endforeach
    </div>
</section>