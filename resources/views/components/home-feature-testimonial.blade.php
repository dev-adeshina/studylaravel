<section id="testimonial" class="py-16 sm:py-20 md:py-24 lg:py-28">
    <div>
        <h2 class="testimonial-section-heading display-md-semibold">{{ $settings->eyebrow }}</h2>
        <p class="testimonial-section-copy">
            {{ $settings->title  }}
        </p>

        <div class="testimonial-grid">

            @foreach($testimonials as $testimonial)
                <article class="testimonial-card group">
                    @if($testimonial->video_url)
                        <video
                            src="{{ $testimonial->video_url }}"
                            alt="Video testimonial"
                            loading="lazy"
                            muted
                            playsinline></video>
                        
                        <span 
                            class="testimonial-play opacity-0 pointer-events-none group-hover:opacity-100 group-hover:pointer-events-auto group-focus-within:opacity-100 group-focus-within:pointer-events-auto transition-opacity duration-200" 
                            data-modal="{{ $testimonial->id }}"
                            data-video-url="{{ $testimonial->video_url }}"
                            role="button" tabindex="0" title="Play video">
                            <i class="fa-solid fa-play"></i>
                        </span>
                    @else
                        <div class="testimonial-no-video bg-gray-200 aspect-video flex items-center justify-center">
                            <i class="fa-solid fa-user fa-3x text-gray-400"></i>
                        </div>
                    @endif
                    <div class="testimonial-overlay opacity-100 group-hover:opacity-0 group-hover:pointer-events-none group-focus-within:opacity-0">
                        <div class="testimonial-stars py-3">
                            @for($i = 0; $i < $testimonial->stars; $i++)
                                <i class="fa-solid fa-star"></i>
                            @endfor
                        </div>
                        <p class="testimonial-name">{{ $testimonial->name }}</p>
                        <p class="testimonial-school">{{ $testimonial->school }}</p>
                        <p class="testimonial-country pb-2">{{ $testimonial->country }}</p>
                    </div>
                </article>
            @endforeach
            <!-- <article class="testimonial-card group">
                <video
                    src="images/testimonial/first.mp4"
                    alt="Video testimonial"
                    loading="lazy"
                    muted
                    playsinline></video>
                <span class="testimonial-play opacity-0 pointer-events-none group-hover:opacity-100 group-hover:pointer-events-auto group-focus-within:opacity-100 group-focus-within:pointer-events-auto transition-opacity duration-200" data-modal="first" role="button" tabindex="0" title="Play video">
                    <i class="fa-solid fa-play"></i>
                </span>
                <div class="testimonial-overlay opacity-100 group-hover:opacity-0 group-hover:pointer-events-none group-focus-within:opacity-0">
                    <div class="testimonial-stars py-3">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p class="testimonial-name">Toyosi</p>
                    <p class="testimonial-school">University of Northumbria</p>
                    <p class="testimonial-country pb-2">UK</p>
                </div>
            </article> -->

            <!-- <article class="testimonial-card group">
                <video
                    src="images/testimonial/second.mp4"
                    alt="Video testimonial"
                    loading="lazy"
                    muted
                    playsinline></video>
                <span class="testimonial-play opacity-0 pointer-events-none group-hover:opacity-100 group-hover:pointer-events-auto group-focus-within:opacity-100 group-focus-within:pointer-events-auto transition-opacity duration-200" data-modal="second" role="button" tabindex="0" title="Play video">
                    <i class="fa-solid fa-play"></i>
                </span>
                <div class="testimonial-overlay opacity-100 group-hover:opacity-0 group-hover:pointer-events-none group-focus-within:opacity-0">
                    <div class="testimonial-stars py-3">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p class="testimonial-name">Deborah</p>
                    <p class="testimonial-school">University of Lancashire</p>
                    <p class="testimonial-country pb-2">UK</p>
                </div>
            </article> -->

            <!-- <article class="testimonial-card group">
                <video
                    src="images/testimonial/third.mp4"
                    alt="Video testimonial"
                    loading="lazy"
                    muted
                    playsinline></video>
                <span class="testimonial-play opacity-0 pointer-events-none group-hover:opacity-100 group-hover:pointer-events-auto group-focus-within:opacity-100 group-focus-within:pointer-events-auto transition-opacity duration-200" data-modal="third" role="button" tabindex="0" title="Play video">
                    <i class="fa-solid fa-play"></i>
                </span>
                <div class="testimonial-overlay opacity-100 group-hover:opacity-0 group-hover:pointer-events-none group-focus-within:opacity-0">
                    <div class="testimonial-stars py-3">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p class="testimonial-name">Ayomide</p>
                    <p class="testimonial-school">University of Sunderland</p>
                    <p class="testimonial-country pb-2">Canada</p>
                </div>
            </article> -->
        </div>

        <div class="testimonial-nav" aria-label="Testimonial navigation">
            <button type="button" class="testimonial-nav-btn" aria-label="Previous testimonial">
                <i class="fa-solid fa-arrow-left"></i>
            </button>
            <button type="button" class="testimonial-nav-btn" aria-label="Next testimonial">
                <i class="fa-solid fa-arrow-right"></i>
            </button>
        </div>
    </div>
</section>



  <!-- SINGLE REUSABLE Video Modal -->
<div id="videoModal-dynamic" class="fixed inset-0 z-[9999] hidden bg-black/90 flex items-center justify-center p-4 sm:p-8" role="dialog" aria-modal="true">
    <button id="closeDynamicModal" class="fixed right-6 top-6 z-50 inline-flex h-14 w-14 items-center justify-center rounded-full bg-white/95 text-2xl text-slate-900" aria-label="Close video">
        <i class="fa-solid fa-xmark"></i>
    </button>

    <video id="modalVideo-dynamic" class="w-full h-auto max-h-[80vh] md:max-w-4xl mx-auto rounded-3xl shadow-2xl object-contain" controls playsinline>
        <source src="" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</div>