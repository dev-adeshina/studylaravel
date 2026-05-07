<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{ $title ?? 'StudyGlide Educational Consult' }}</title>
  <meta
    name="description"
    content="A modern study abroad landing page built with Tailwind CSS and Font Awesome." />
  <link rel="shortcut icon" href="https://res.cloudinary.com/{{ config('filesystems.disks.cloudinary.cloud_name') }}/image/upload/{{ \App\Models\Logo::first()->header_path }}" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&family=Sora:wght@500;600;700&family=Roboto+Mono:wght@400;500&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

  @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
  <section class="relative isolate overflow-hidden bg-brand-800 text-white">
  
    <x-header-menu/>
    <x-hero-home />

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






  <x-whatsapp-channel />


</body>

</html>