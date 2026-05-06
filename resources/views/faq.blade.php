<x-layouts.subpage>
    <x-hero-faq />
    <main>

        <div id="mission-statement" class="shell py-16">
           
            <x-faq-feature-main />



            <section id="faq-contacts" class="flex flex-col items-center justify-center bg-white px-6 py-12 text-center">

                <div class="flex -space-x-3 mb-6">
                    <img class="h-12 w-12 rounded-full border-2 border-white object-cover" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Team member 1">
                    <img class="h-14 w-14 rounded-full border-2 border-white object-cover z-10 scale-110" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Team member 2">
                    <img class="h-12 w-12 rounded-full border-2 border-white object-cover" src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Team member 3">
                </div>

                <h2 class="text-xl font-semibold text-gray-900 mb-2">
                    Still have questions?
                </h2>
                <p class="text-gray-600 mb-8 max-w-md">
                    Can't find the answer you're looking for? Please chat to our friendly team.
                </p>

                <a href="{{ route('contact') }}" class="secondary-pixel-anchor group relative inline-flex items-center h-11 justify-between  px-1 overflow-hidden bg-[#16484B] border border-white/20 rounded-[5px] no-underline transition-all duration-300 hover:border-white/40">

                    <div class="secondary-pixel-grid absolute inset-0 grid pointer-events-none">
                    </div>

                    <span class="relative z-10 anchor-text text-[#E2C065] transition-colors duration-500 group-hover:text-[#16484B]">
                        Contact Support
                    </span>

                    <div class="relative z-10 flex items-center justify-center w-8 h-8 ml-4 bg-[#E2C065] rounded-[5px] transition-all duration-500 group-hover:bg-[#16484B] hover:-translate-y-1 hover:scale-110">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5 text-[#16484B] transition-transform duration-500 group-hover:text-[#E2C065]"
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

            </section>
        </div>
    </main>
</x-layouts.subpage>