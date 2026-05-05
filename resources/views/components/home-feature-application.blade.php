@if($applicationSetting && $applicationSetting->show_form == true)
<section id="apply" class="shell py-16 sm:py-20 md:py-24 lg:py-28">
    <div class="grid gap-10 lg:grid-cols-[1fr_1fr] lg:items-start">
        <div class="relative overflow-hidden w-full h-64 sm:h-80 md:h-96 lg:min-h-[786px] my-16">
            <img
                
                src="https://res.cloudinary.com/{{ config('filesystems.disks.cloudinary.cloud_name') }}/image/upload/{{ $applicationSetting->image_path }}"
                alt="Prospective student holding books"
                class="absolute inset-0 w-full h-full object-cover object-center" />

            <div class="absolute inset-0 bg-gradient-to-tr from-black/80 via-black/20 to-transparent"></div>
        </div>
        <div class="max-w-xl">
            <h2 class="section-title px-4 sm:px-6 lg:px-8">{{ $settings->eyebrow}}</h2>
            <p class="mt-4 font-body font-normal text-lg sm:text-xl leading-[1.75] tracking-normal text-slate-600 px-4 sm:px-6 lg:px-8">
                {{ $settings->title }}
            </p>
            <x-applicant-form />
        </div>
    </div>
</section>
@endif