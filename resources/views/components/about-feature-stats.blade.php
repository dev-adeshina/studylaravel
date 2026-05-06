<section id="stats" class="py-16 md:py-20">
    <div class="mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-4 sm:gap-6 lg:gap-12 p-8 bg-[#FAFAFA]">
        @foreach ($stats as $stat)
            <div class="text-center">
                <h3 class="about-stats-number">{{ $stat->title }}</h3>
                <p class="about-stats-paragraph">{{ $stat->paragraph }}</p>
            </div>
        @endforeach
    </div>
</section>