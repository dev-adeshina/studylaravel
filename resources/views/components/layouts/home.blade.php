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
    <header class="relative z-50">
      <div class="hero-pattern absolute inset-0 bg-grid-fade opacity-50 pointer-events-none"></div>

      <div class="shell pt-3 sm:pt-4 lg:pt-6">
        <nav class="flex items-center justify-between gap-4">
          <a href="{{ route('home') }}" class="flex shrink-0 items-center">
            <img src="images/logo.svg" alt="StudyGuide logo" class="h-10 w-auto md:h-11" />
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
              <span class="relative z-10 text-sm font-bold mr-10 text-[#16484B]">Get In Touch</span>
              <div class="relative z-10 flex items-center justify-center w-7 h-7 ml-3 bg-[#16484b] rounded-md group-hover:bg-[#E2C065]">
                <svg class="w-4 h-4 text-[#E2C065] group-hover:text-[#16484b]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                  <line x1="7" y1="17" x2="17" y2="7"></line>
                  <polyline points="7 7 17 7 17 17"></polyline>
                </svg>
              </div>
            </a>

            <details class="relative md:hidden group">

                <!-- <summary class="flex h-11 w-11 cursor-pointer list-none items-center justify-center rounded-lg border border-white/15 bg-white/10 text-white transition hover:bg-white/15">
                  <span class="group-[open]:hidden">
                      <i class="fa-solid fa-bars"></i>
                  </span>
                  <span class="hidden group-[open]:block">
                      <i class="fa-solid fa-xmark"></i>
                  </span>  
                </summary> -->

                <summary class="relative flex h-11 w-11 items-center justify-center text-white">

                  <i class="fa-solid fa-bars absolute transition-opacity duration-200 group-[open]:opacity-0"></i>

                  <i class="fa-solid fa-xmark absolute opacity-0 transition-opacity duration-200 group-[open]:opacity-100"></i>

                </summary>

              <div class="absolute right-0 top-full mt-4 z-50 w-[80vw] max-w-[300px] border border-white/10 bg-brand-900/98 p-6 shadow-2xl rounded-xl backdrop-blur-lg">
                <div class="flex flex-col gap-5 text-sm font-bold text-white/80">
                  <a href="{{ route('home') }}" class="hover:text-[#E2C065]">HOME</a>
                  <a href="{{ route('about') }}" class="hover:text-[#E2C065]">ABOUT US</a>
                  <a href="{{ route('services') }}" class="hover:text-[#E2C065]">SERVICE</a>
                  <a href="{{ route('destination') }}" class="hover:text-[#E2C065]">DESTINATION</a>
                  <a href="{{ route('faq') }}" class="hover:text-[#E2C065]">FAQ</a>
                  <a href="{{ route('blog') }}" class="hover:text-[#E2C065]">BLOG</a>
                  <hr class="border-white/10">
                  <a href="#apply" class="w-full bg-[#E2C065] py-3 text-center text-brand-900 text-[#16484B] rounded-lg">Get In Touch</a>
                </div>
              </div>
            </details>
          </div>
        </nav>
      </div>
    </header>

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

              <a href="#destinations" class="pixel-anchor group relative flex items-center h-11 justify-between w-full sm:w-1/2 px-1 overflow-hidden bg-[#E2C065] border border-white/20 rounded-lg no-underline transition-all duration-300 hover:border-white/40">
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
              <img src="images/Logo_footer.png" class="w-full" alt="StudyGuide logo" class="h-11 w-11" />
            </a>
          </div>
          <p class="mt-6 max-w-sm footer-cta ">
            Nigeria's most trusted education
            consultancy, bridging the gap between
            local talent and global opportunities.
          </p>
        </div>

        <div>
          <h3 class="font-display text-lg">Contact</h3>
          <div class="mt-5 space-y-3 text-sm text-white/70">
            <p class="contact-text">
              <span class="font-semibold contact-title">Office Address</span>
              <br />
              Shop 1MS FAAN complex beside FAAN staff quarters, Ikeja along Lagos State
            </p>
            <p class="contact-text">
              <span class="font-semibold contact-title">Phone</span>
              <br />
              +234 913 307 1334
            </p>
            <p class="contact-text">
              <span class="font-semibold contact-title">Email</span>
              <br />
              Info@studyglideedu.com
            </p>
          </div>
        </div>

        <div>
          <h3 class="font-display text-lg">Quick Links</h3>
          <div class="mt-5 space-y-3">
            <a href="{{ route('about') }}" class="quick-link-text">About us</a>
            <a href="{{ route('contact') }}" class="quick-link-text block">Contact Us</a>
            <a href="{{ route('faq') }}" class="quick-link-text block">FAQ</a>
            <a href="{{ route('blog') }}" class="quick-link-text block">Blog</a>
            <a href="{{ route('blog') }}" class="quick-link-text block">Blog Post</a>
            <a href="{{ route('services') }}" class="quick-link-text block">Scholarship</a>
          </div>
        </div>

        <div>
          <h3 class="font-display text-lg">Stay up to date</h3>
          <p class="mt-5 max-w-[48ch] contact-text">
            Study abroad news and opportunities, first access to new intakes, and
            practical planning tips delivered monthly.
          </p>
          <x-footer-signup />

        </div>
      </div>

      <div class="flex flex-col gap-4 pt-6 text-sm text-white/55 md:flex-row md:items-center md:justify-between contact-text">
        <p>&copy; <script>
            document.write(new Date().getFullYear())
          </script> StudyGlide. All rights reserved.</p>
        <div class="flex items-center gap-5 text-base">
          <a href="https://twitter.com/studyglide_edu" aria-label="X" class="transition hover:text-accent-200"><i class="fa-brands fa-x-twitter"></i></a>
          <a href="https://www.tiktok.com/@studyglide_edu?_r=1&_t=ZS-95OCqk0Sirk" aria-label="TikTok" class="transition hover:text-accent-200"><i class="fa-brands fa-tiktok"></i></a>
          <a href="https://www.instagram.com/studyglide_edu?utm_source=qr&igsh=enFiZXQ4azl1eXg4" aria-label="Instagram" class="transition hover:text-accent-200"><i class="fa-brands fa-instagram"></i></a>
          <a href="https://www.facebook.com/share/18DvbTwACB/" aria-label="Facebook" class="transition hover:text-accent-200"><i class="fa-brands fa-facebook-f"></i></a>
        </div>
        <p>Design by <span class="underline underline-offset-4">JayintopStudio</span></p>
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


  <div class="fixed right-6 bottom-6 z-50 flex flex-col items-end font-sans">
    <div id="whatsapp-card" class="mb-4 hidden w-72 overflow-hidden rounded-2xl bg-white shadow-2xl ring-1 ring-black/5 transition-all duration-300 transform scale-95 origin-bottom-right">
      <div class="bg-[#25D366] p-4 text-white">
        <div class="flex items-center gap-3">
          <div class="relative">
            <img src="https://ui-avatars.com/api/?name=Support&background=white&color=25D366" class="h-10 w-10 rounded-full" alt="Support">
            <span class="absolute right-0 bottom-0 h-3 w-3 rounded-full border-2 border-[#25D366] bg-emerald-400"></span>
          </div>
          <div>
            <p class="font-bold text-sm">Customer Support</p>
            <p class="text-xs opacity-90">Typically replies within an hour</p>
          </div>
        </div>
      </div>

      <div class="bg-[#E5DDD5] p-4">
        <div class="relative rounded-lg bg-white p-3 shadow-sm after:absolute after:-left-2 after:top-2 after:border-8 after:border-transparent after:border-r-white">
          <p class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1">Support</p>
          <p class="text-sm text-gray-800">Hi there! 👋<br>How can we help you today?</p>
          <p id="realTime" class="mt-1 text-right text-[10px] text-gray-400">10:25 AM</p>
        </div>
      </div>

      <div class="bg-white p-3">
        <a href="https://wa.me/+2349133071334" target="_blank" class="flex items-center justify-center gap-2 rounded-full bg-[#25D366] px-4 py-2 text-sm font-bold text-white transition-transform hover:scale-105 active:scale-95">
          <svg class="h-5 w-5 fill-current" viewBox="0 0 24 24">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L0 24l6.335-1.662c1.72.937 3.659 1.432 5.631 1.433h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
          </svg>
          Start Chat
        </a>
      </div>
    </div>

    <button onclick="toggleChat()" class="group flex h-14 w-14 items-center justify-center rounded-full bg-[#25D366] text-white shadow-lg transition-all hover:scale-110 active:scale-95">
      <svg id="chat-icon" class="h-8 w-8 transition-transform group-hover:rotate-12" fill="currentColor" viewBox="0 0 24 24">
        <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.767 5.767 0 1.267.405 2.436 1.087 3.388l-.394 1.44 1.487-.38c.903.522 1.946.823 3.055.823 3.181 0 5.767-2.586 5.767-5.767 0-3.181-2.586-5.767-5.767-5.767zm4.611 8.219c-.062.176-.36.345-.491.375-.13.029-.261.05-.741-.144-.594-.242-1.215-.653-1.788-1.226-.573-.573-.984-1.194-1.226-1.788-.194-.48-.173-.611-.144-.741.03-.131.199-.429.375-.491.176-.062.232-.053.305-.015s.163.153.238.303c.075.15.25.617.272.661.022.044.022.094 0 .138-.022.044-.044.088-.088.138l-.134.131c-.044.044-.094.094-.041.185.053.091.236.391.507.632.348.31.641.406.731.45.091.044.144.037.197-.022.053-.059.226-.263.286-.353.06-.091.12-.075.201-.044.082.031.517.244.607.288.091.044.15.066.172.103.022.037.022.213-.04.389zM12 2C6.477 2 2 6.477 2 12c0 1.891.524 3.66 1.434 5.168L2 22l4.957-1.301C8.384 21.531 10.121 22 12 22c5.523 0 10-4.477 10-10S17.523 2 12 2z" />
      </svg>

      <span id="close-icon" class="hidden text-2xl font-light">&times;</span>
    </button>
  </div>


</body>

</html>