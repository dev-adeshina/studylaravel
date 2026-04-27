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

  {{ $slot }}
  <footer id="faq" class="relative mt-12 overflow-hidden bg-brand-800 text-white">
    <div
      class="pointer-events-none absolute -top-px right-0 h-20 w-28 bg-white [clip-path:polygon(100%_100%,0_0,100%_0)]"></div>
    <div class="shell py-16">
      <div class="grid gap-10 border-b border-white/10 pb-12 md:grid-cols-2 xl:grid-cols-[1fr_0.85fr_0.8fr_1.35fr]">
        <div>
          <div class="flex items-center gap-3">
            <a href="{{ route('home') }}" class="flex items-center gap-3">
              <img src="{{ asset('/images/Logo_footer.png') }}" class="w-full" alt="StudyGuide logo" class="h-11 w-11" />
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
          <p  id="realTime" class="mt-1 text-right text-[10px] text-gray-400">10:25 AM</p>
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