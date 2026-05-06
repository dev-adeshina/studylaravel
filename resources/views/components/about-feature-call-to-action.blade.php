<section id="contact-us" class="flex item-center justify-center bg-[#FAFAFA] py-16">
    <div>
        <h2 class="about-contact-footer-title">
        {{ $callToAction->title }}    
       </h2>
        <p class="about-contact-footer-paragraph">
            {{ $callToAction->description }}
            
        </p>
        <div class="flex justify-center">
            <a 
            href="{{ route($callToAction->button_link) }}" 
            class="pixel-anchor group my-4 relative inline-flex items-center h-11 justify-between min-w-[180px] px-2 overflow-hidden bg-transparent border border-[#16484B]/50 rounded-lg no-underline transition-all duration-300 hover:border-[#E2C065]/40">

                <div class="pixel-grid absolute inset-0 grid pointer-events-none">
                </div>

                <span class="relative z-10 anchor-text transition-colors duration-500 group-hover:text-[#E2C065]">
                   

                    {{ $callToAction->button_text }}
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

    </div>

</section>