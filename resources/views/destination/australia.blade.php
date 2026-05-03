<x-layouts.subpage>
     <x-hero-travels :destination="$destination" />
    <main>
        <div class="shell -mt-8 relative z-10">
            <img src="{{ asset('/images/destination/australia.png') }}" alt="Wireframing Hero" class="w-full h-[400px] md:h-[600px] object-cover rounded-2xl shadow-card">
        </div>

        <article class="shell py-16 md:py-24">
            <div class="max-w-3xl mx-auto">
                <div class="border-b border-b-slate-200 py-4 my-2">
                    <p class="pb-[30px] mb-[16px]">
                        Australia offers one of the world’s best education systems, 
                        outstanding quality of life, and generous post-study work visas. 
                        Students benefit from practical learning, industry connections, 
                        and excellent opportunities to gain international experience.
                    </p>
                    <a href="{{ route('destination') }}" class="pixel-anchor group relative inline-flex items-center h-11 justify-between min-w-[180px] px-2 overflow-hidden bg-transparent border border-[#16484B]/50 rounded-lg no-underline transition-all duration-300 hover:border-[#E2C065]/40">

                        <div class="pixel-grid absolute inset-0 grid pointer-events-none">
                        </div>

                        <span class="relative z-10 anchor-text transition-colors duration-500 group-hover:text-[#E2C065]">
                        Apply Now
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
               

                <h2 class="font-inter font-semibold text-[24px] leading-[32px] mb-[24px] text-[#181D27] tracking-[0%]">List of Schools in Australia</h2>
                <article  class="pl-3 py-2">
                    <ul class="list-disc list-outside ml-6 space-y-2">
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">Griffith University</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">La Trobe (thru Navitas)</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">Western Sydney (thru Navitas)</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">University of Adelaide (Kaplan)</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">James Cook University Brisbane</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">Western Sydney Intl College (Navitas)</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">Western Sydney University Sydney City Campus</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">La Trobe University Sydney Campus</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">La Tobe College (Navitas)</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">Curtin College</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">Deakin College</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">Edith Cowan College</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">Eynesbury College</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">Newcastle Intl College</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">South Australia IBT</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">Sydney IBT</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">Torrens University</li>

                        
                    </ul>
                </article>
            </div>
        </article>
    </main>
</x-layouts.subpage>