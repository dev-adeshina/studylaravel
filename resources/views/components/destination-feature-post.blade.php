<main>
    <div class="shell -mt-8 relative z-10">
        <img 
        src="https://res.cloudinary.com/{{ config('filesystems.disks.cloudinary.cloud_name') }}/image/upload/{{ $slugs->image_path }}"
        alt="Wireframing Hero" class="w-full h-[400px] md:h-[600px] object-cover rounded-2xl shadow-card">
    </div>

    <article class="shell py-16 md:py-24">
        <div class="max-w-3xl mx-auto">
            <div class="border-b border-b-slate-200 py-4 my-2">
                <p class="pb-[30px] mb-[16px]">
                    {!! $slugs->intro_text !!}
                </p>


                <a href="{{ route($slugs->cta_route) }}" class="pixel-anchor my-[16px] group relative inline-flex items-center h-11 justify-between min-w-[180px] px-2 overflow-hidden bg-transparent border border-[#16484B]/50 rounded-lg no-underline transition-all duration-300 hover:border-[#E2C065]/40">

                    <div class="pixel-grid absolute inset-0 grid pointer-events-none">
                    </div>

                    <span class="relative z-10 anchor-text transition-colors duration-500 group-hover:text-[#E2C065]">
                       {{ $slugs->cta_label }}
                    </span>

                    <div class="relative z-10 flex items-center justify-center w-8 h-8 ml-4 bg-[#16484b] rounded-[5px] transition-all duration-500 group-hover:bg-[#E2C065] hover:-translate-y-1 hover:scale-110">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5 text-[#E2C065] transition-transform duration-500 group-hover:text-[#16484b]"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2.5"
                            stroke-linecap="round"
                            stroke-linejoin="round">
                            <line x1="7" y1="17" x2="17" y2="7"></line>
                            <polyline points="7 7 17 7 17 17"></polyline>
                        </svg>
                    </div>

                </a>
            </div>


            <h2 class="font-inter font-semibold text-[24px] leading-[32px] mb-[24px] text-[#181D27] tracking-[0%]">List of Schools in the United States</h2>
                <article class="
                    prose max-w-none pl-3 py-2  
                    font-normal text-[#535862] 
                    [&_ul]:list-disc [&_ul]:ml-6 
                    [&_li]:list-item pl-3 py-2 
                    font-inter  [&_ul]:space-y-2 
                    [&_li]:text-[16px] lg:[&_li]:text-[18px] 
                    [&_li]:leading-[24px] lg:[&_li]:leading-[28px]
                    pl-3 py-2 font-inter  mb-[16px] lg:mb-[18px]">
                
                    {!! $slugs->schools_list !!}
               
            </article>
        </div>
    </article>
</main>