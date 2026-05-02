<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{ $title ?? 'StudyGlide Educational Consult' }}</title>
  <meta
    name="description"
    content="A modern study abroad landing page built with Tailwind CSS and Font Awesome." />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&family=Sora:wght@500;600;700&family=Roboto+Mono:wght@400;500&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

  @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
  <section class="relative isolate overflow-hidden bg-brand-800 text-white">
    <x-header-menu/>

    <div class="shell pb-20 sm:pb-24 md:pb-28 pt-12 sm:pt-16 md:pt-20">
      <div class="grid grid-cols-1 items-center gap-12">
        <div class="w-full">
          <div
            class="mb-6 inline-flex items-center gap-2 rounded-full border border-accent-300/20 bg-accent-300/10 px-4 py-2 text-[11px] font-semibold uppercase tracking-[0.28em] text-accent-200">
            <i class="fa-solid fa-star text-[10px]"></i>
            Visa Processing | Interview Prep | Admissions
          </div>
          <div class="w-full lg:w-4/4">
            <h1 class="font-display text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-semibold leading-tight tracking-[-0.02em] text-white md:leading-[1.1] lg:leading-[1.15]">
              Your Global Education <span class="inline-block whitespace-nowrap font-inter text-[2rem] font-medium leading-[1.1] tracking-[-0.02em] text-white underline decoration-white decoration-[2px] underline-offset-[6px] md:text-[60px] md:leading-[72px] md:decoration-[3px] md:underline-offset-[10px]">StudyGuide</span>
              <br />
              Starts Here.
            </h1>
          </div>

          <p class="mt-6 max-w-lg sm:max-w-xl lg:max-w-2xl font-body text-lg sm:text-xl md:text-2xl font-normal leading-7 sm:leading-8 md:leading-relaxed tracking-normal text-white/80">
            Expert guidance for Nigerian students ready to study in the UK, USA,
            Canada, and beyond. We simplify the journey from application to
            arrival so your next move feels certain.
          </p>

          <div class="mt-8 sm:mt-10 flex flex-col sm:flex-row items-start sm:items-center gap-4 sm:gap-5 lg:gap-6">

            <div class="flex flex-col sm:flex-row items-center gap-4 w-full max-w-2xl">

              <a href="{{ route('destination') }}" class="pixel-anchor group relative flex items-center h-11 justify-between w-full sm:w-1/2 px-1 overflow-hidden bg-[#E2C065] border border-white/20 rounded-lg no-underline transition-all duration-300 hover:border-white/40">
                <div id="pixel-grid" class="pixel-grid absolute inset-0 grid pointer-events-none"></div>

                <span class="relative z-10 anchor-text pl-3 text-sm font-bold transition-colors duration-500 group-hover:text-brand-900">
                  Explore Destinations
                </span>

                <div class="relative z-10 flex items-center justify-center w-8 h-8 ml-4 bg-[#16484b] rounded-md transition-all duration-500 group-hover:bg-white hover:-translate-y-1">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#E2C065] group-hover:text-[#16484b]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="7" y1="17" x2="17" y2="7"></line>
                    <polyline points="7 7 17 7 17 17"></polyline>
                  </svg>
                </div>
              </a>

              <a class="secondary-pixel-anchor group relative flex items-center h-11 justify-between w-full sm:w-1/2 px-2 overflow-hidden bg-transparent border border-[#E2C065]/50 rounded-lg no-underline transition-all duration-300 hover:border-[#E2C065]">
                <div class="secondary-pixel-grid absolute inset-0 grid pointer-events-none"></div>

                <span class="relative z-10 anchor-text pl-2 text-[#E2C065] text-sm font-bold transition-colors duration-500 group-hover:text-white">
                  Get Free Advice
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
            src="images/hero-header-section.png"
            alt="Smiling international student in a hallway"
            class="h-80 sm:h-[450px] md:h-[500px] lg:h-[540px] w-full object-cover object-center" />
          <div class="absolute inset-0 bg-gradient-to-t from-brand-900 via-brand-900/10 to-transparent"></div>
        </div>
      </div>
    </div>

    <div
      class="absolute -bottom-px right-0 h-20 w-28 bg-white [clip-path:polygon(100%_0,0_100%,100%_100%)]"></div>
  </section>

  <main>
    {{ $slot }}
  </main>

  <footer id="faq" class="relative mt-12 overflow-hidden bg-brand-800 text-white">
    <div
      class="pointer-events-none absolute -top-px right-0 h-20 w-28 bg-white [clip-path:polygon(100%_100%,0_0,100%_0)]"></div>
    <div class="shell py-16">
      <div class="grid gap-10 border-b border-white/10 pb-12 md:grid-cols-2 xl:grid-cols-[1fr_0.85fr_0.8fr_1.35fr]">
        <div>
          <div class="flex items-center gap-3">
            <a href="{{ route('home') }}" class="flex items-center gap-3">
              <x-footer-logo />
            </a>
          </div>
          <x-footer-slogan/>
        </div>

        <div>
          <h3 class="font-display text-lg">Contact</h3>
          <x-footer-contact />
        </div>

        <div>
          <h3 class="font-display text-lg">Quick Links</h3>
          <x-quick-link/>
        </div>

        <div>
          
          <x-newsletter-title />
          <x-newsletter-discription />
          <x-footer-signup />

        </div>
      </div>

      <div class="flex flex-col gap-4 pt-6 text-sm text-white/55 md:flex-row md:items-center md:justify-between contact-text">
        <x-copyright />
        <x-social-links />
        <x-designer-name />
      </div>
    </div>
  </footer>



  <!-- Video Modal - FIRST -->
  <div id="videoModal-first" class="fixed inset-0 z-[9999] hidden bg-black/90 flex items-center justify-center p-4 sm:p-8" role="dialog" aria-modal="true">
    <button class="closeModalBtn fixed right-6 top-6 z-50 inline-flex h-14 w-14 items-center justify-center rounded-full bg-white/95 text-2xl text-slate-900" aria-label="Close video" title="Close">
      <i class="fa-solid fa-xmark"></i>
    </button>

    <video id="modalVideo-first" class="w-full h-[75vh] sm:h-[80vh] max-h-[80vh] max-w-[95vw] sm:max-w-[90vw] md:max-w-4xl mx-auto rounded-3xl shadow-2xl object-contain ring-2 ring-white/20" controls preload="metadata" playsinline>
      <source src="images/testimonial/first.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  </div>

  <!-- Video Modal - FIRST -->
  <div id="videoModal-second" class="fixed inset-0 z-[9999] hidden bg-black/90 flex items-center justify-center p-4 sm:p-8" role="dialog" aria-modal="true">
    <button class="closeModalBtn fixed right-6 top-6 z-50 inline-flex h-14 w-14 items-center justify-center rounded-full bg-white/95 text-2xl text-slate-900" aria-label="Close video" title="Close">
      <i class="fa-solid fa-xmark"></i>
    </button>

    <video id="modalVideo-second" class="w-full h-[75vh] sm:h-[80vh] max-h-[80vh] max-w-[95vw] sm:max-w-[90vw] md:max-w-4xl mx-auto rounded-3xl shadow-2xl object-contain ring-2 ring-white/20" controls preload="metadata" playsinline>
      <source src="images/testimonial/second.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  </div>

  <!-- Video Modal - FIRST -->
  <div id="videoModal-third" class="fixed inset-0 z-[9999] hidden bg-black/90 flex items-center justify-center p-4 sm:p-8" role="dialog" aria-modal="true">
    <button class="closeModalBtn fixed right-6 top-6 z-50 inline-flex h-14 w-14 items-center justify-center rounded-full bg-white/95 text-2xl text-slate-900" aria-label="Close video" title="Close">
      <i class="fa-solid fa-xmark"></i>
    </button>

    <video id="modalVideo-third" class="w-full h-[75vh] sm:h-[80vh] max-h-[80vh] max-w-[95vw] sm:max-w-[90vw] md:max-w-4xl mx-auto rounded-3xl shadow-2xl object-contain ring-2 ring-white/20" controls preload="metadata" playsinline>
      <source src="images/testimonial/third.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  </div>


  <x-whatsapp-channel />


</body>

</html>