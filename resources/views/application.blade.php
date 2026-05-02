<x-layouts.subpage>
        <x-subbanner.applicant />
    <main>
       
        <article class="shell py-16 md:py-24">
            <div class="max-w-3xl mx-auto lg:px-16 lg:py-16">
                <h1 class="font-inter font-bold text-[28px] lg:text-[48px] leading-[32px] lg:uppercase mb-[24px] lg:mb-[32px] text-brand-800 tracking-[0%] lg:tracking-[2px] text-center"> {{ $destination }}</h1>
                <h2 class="font-inter font-semibold text-[24px] leading-[32px] mb-[24px] text-[#181E22] tracking-[3px] text-center">Start your study abroad journey here</h2>
                
                <x-applicant-form/>

            </div>
        </article>
    </main>
</x-layouts.subpage>