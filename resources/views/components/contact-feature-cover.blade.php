<main class="shell lg:py-16">
        <div class="mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-4 sm:gap-6 lg:gap-8">

            <div class="max-w-2xl w-full lg:px-8">
                <h1 class="contact-form-title">{{ $contactCover->title }}</h1>
                <p class="font-inter font-semibold lg:text-[24px] lg:mb-[16px] contact-form-paragraph py-2">
                    {{ $contactCover->description }}
                </p>
                <small><a href="mailto:{{ $contactCover->public_email}}" class="contact-form-email">{{ $contactCover->public_email}}</a></small>
                <x-contact />
            </div>

            <div class="hidden lg:block lg:w-full lg:bg-[#FAFAFA] lg:p-2">
                <img 
                    src="https://res.cloudinary.com/{{ config('filesystems.disks.cloudinary.cloud_name') }}/image/upload/{{ $contactCover->image_path }}"
                    class="w-full h-[746px] object-cover"
                    alt="About Us">
            </div>
        </div>
    </main>