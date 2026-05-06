<section id="our-story" class="py-16 md:py-20">

    <div class="max-w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-2 gap-4 sm:gap-6 lg:gap-12">
        <div class="lg:flex lg:items-center lg:justify-center lg:p-12">
            <div class="max-w-full">
                <small class="about-story-eyebrow-insight">{{ $story->eyebrow }}</small>
                <h2 class="about-story-eyebrow-title">{{ $story->title }}</h2>
                <p class="about-story-eyebrow-paragraph">
                    {{ $story->body_text_one }}
                </p>
                <p class="about-story-eyebrow-paragraph">
                    {{ $story->body_text_two }}
                </p>
            </div>

        </div>
        <div class="lg:w-[576px] lg:h-[654px]">
            <img 
            src="https://res.cloudinary.com/{{ config('filesystems.disks.cloudinary.cloud_name') }}/image/upload/{{ $story->image_path }}"
            alt="About us image" class="h-full w-full object-cover rounded-lg">
        </div>
    </div>
</section>