<section class="relative isolate overflow-hidden bg-brand-800 text-white">
    <x-header-menu/>
    <div class="shell pb-20 sm:pb-24 md:pb-28 pt-12 sm:pt-16 md:pt-20">
        <div class="grid grid-cols-1 items-center gap-12 py-16">
            <div class="w-full">
                <div class="hero-breadcrumb">
                    {{ $hero->breadcrumb ?? 'Destination' }}
                </div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-12">
                <div class="order-1 col-span-7 lg:pr-20">
                    <h1 class="hero-title">
                        {{ $hero->title ?? 'Where would you like to study?' }}
                    </h1>
                </div>
                <div class="order-2 col-span-5 lg:pl-20">
                    <p class="hero-paragraph">
                        {{ $hero->description ?? 'Explore top study destinations with strong partnerships and proven success for international students' }}
                    </p>
                </div>
            </div>
        </div>
        <div class="absolute -bottom-px right-0 h-20 w-28 bg-white [clip-path:polygon(100%_0,0_100%,100%_100%)]"></div>
</section>