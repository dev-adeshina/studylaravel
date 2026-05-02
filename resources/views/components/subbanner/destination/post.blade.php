@props(['destination'])
<section class="relative isolate overflow-hidden bg-brand-800 text-white">
    <x-header-menu/>

    <div class="shell pb-20 sm:pb-24 md:pb-28 pt-12 sm:pt-16 md:pt-20">
        <div class="grid grid-cols-1 items-center gap-12 lg:py-16 lg:px-40">
            <span class="text-center hero-breadcrumb">Destinantion</span>
            <h1 class="text-center hero-title mb-[0px]">
               Study in {{ $destination ?? 'your dream country' }}
            </h1>
        </div>
        <div class="absolute -bottom-px right-0 h-20 w-28 bg-white [clip-path:polygon(100%_0,0_100%,100%_100%)]"></div>
    </div>


</section>