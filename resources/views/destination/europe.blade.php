<x-layouts.subpage>
     <x-subbanner.destination.post :destination="$destination" />
    <main>
        <div class="shell -mt-8 relative z-10">
            <img src="{{ asset('/images/destination/europe.png') }}" alt="Wireframing Hero" class="w-full h-[400px] md:h-[600px] object-cover rounded-2xl shadow-card">
        </div>

        <article class="shell py-16 md:py-24">
            <div class="max-w-3xl mx-auto">
                <div class="border-b border-b-slate-200 py-4 my-2">
                    <p class="pb-[30px] mb-[16px]">
                        Europe provides high-quality English-taught programmes, 
                        affordable tuition in many countries, and rich cultural experiences. 
                        Discover historic and innovative institutions across the continent.
                    </p>
                    <a href="{{ route('applicants') }}" class="pixel-anchor group relative inline-flex items-center h-11 justify-between min-w-[180px] px-2 overflow-hidden bg-transparent border border-[#16484B]/50 rounded-lg no-underline transition-all duration-300 hover:border-[#E2C065]/40">

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
 

                <h2 class="font-inter font-semibold text-[24px] leading-[32px] mb-[24px] text-[#181D27] tracking-[0%]">List of Schools in Europe</h2>
                <article class="pl-3 py-2">
                    <ul class="list-disc list-outside ml-6 space-y-2">
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">Robert Gordon university</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">University of Hertfordshire</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">Middlesex University</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">Sunderland University</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">Coventry University</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">Birmingham City University College</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">Cambridge Ruskin University College</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">University of Chester</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">Aston University</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">University of Lancashire</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">University of Plymouth</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">Northumbria University</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">University of Chichester</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">University of Creative Arts</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">International College Portsmouth</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">Leicester Global Study Center</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">London Brunel Intl College</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">The College, Swansea University</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">University of Northampton Intl College</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">University of Plymouth Intl College</li>

                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">Kaplan</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">Queens University of Belfast</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">DeMontfort University</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">University of Stirling</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">University of East Anglia</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">GCU (through INTO)</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">MMU (through INTO)</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">Newcastle University</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">Cranfield University</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">QAHE</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">University of Gloucestershire</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">University of Edinburgh</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">University of Derby</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">Keele University</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">CATS Colleges (A Level)</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">Mander Portman Woodward</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">Leicester Global Study Center</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">Univeristy Of Liverpool (Kaplan)</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">University Of Glasgow (Kaplan)</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">Univeristy Of Bristol (Kaplan)</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">University Of West Of England (Kaplan)</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">Notting Trent Univeristy (Kaplan)</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">University Of Birmingham (Kaplan)</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">Univeristy Of Bournemouth (Kaplan)</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">University Of Nottingham (Kaplan)</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">University Of York</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">University of West Scotland</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">University of West London</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">Liverpool John Moore University</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">Edge Hill University</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">University of Salford</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">York St John University</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">INTO Pathway</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">Glasgow Caledonian University</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">Manchester Met. University</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">University Of Exeter</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">Northumbria University</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">University Of Roehampton</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">University Of Ulster</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">Lincoln University</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">Canterbury Christchurch University</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">Buckinghamshire New University</li>
                        <li class="font-inter font-normal text-[#535862] text-[16px] lg:text-[18px] leading-[24px] lg:leading-[28px] mb-[16px] lg:mb-[18px]">Padworth College</li>
                    </ul>
                </article>
            </div>
        </article>
    </main>
</x-layouts.subpage>