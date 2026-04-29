<x-layouts.subpage>
     <x-subbanner.destination.post :destination="$destination" />
    <main>
        <div class="shell -mt-8 relative z-10">
            <img src="{{ asset('/images/about-us.jpg') }}" alt="Wireframing Hero" class="w-full h-[400px] md:h-[600px] object-cover rounded-2xl shadow-card">
        </div>

        <article class="shell py-16 md:py-24">
            <div class="max-w-3xl mx-auto">
                <p class="pb-[30px] mb-[16px] border-b border-b-slate-200">
                    In the early stages of product development, wireframing acts as
                    the skeletal framework of your application.
                    It’s where functionality meets structure before aesthetics enter the room.
                </p>

                <h2 class="">Introduction</h2>
                <div class="">
                    <p>
                        Wireframing is a way to design a website service at the structural level.
                        A wireframe is commonly used to lay out content and functionality
                        on a page which takes into account user needs and user journeys.
                    </p>

                    <figure class="my-12">
                        <img src="{{ asset('/images/about-us.jpg') }}" alt="Design Process" class="rounded-xl w-full">
                        <figcaption class="text-sm text-slate-400 mt-3 text-center italic">Exploring the initial sketch phases.</figcaption>
                    </figure>

                    <p class="text-2xl font-semibold text-slate-900 mt-12 mb-4 border-l border-l-purple-500 pl-2 italic">
                        Why is it important?
                    </p>
                    <p>
                        Wireframes are used early in the development process to establish the basic structure of a page before visual design and content is added. It allows stakeholders to focus on the experience rather than the colors.
                    </p>

                    <ul class="list-disc pl-6 space-y-3">
                        <li>Clarifies user interface features</li>
                        <li>Quickly translates ideas into tangible structures</li>
                        <li>Saves time in the long-term development cycle</li>
                    </ul>

                    <div class="bg-brand-50 p-8 rounded-2xl my-12">
                        <h4 class="text-brand-800 font-bold mb-2">Key Insight</h4>
                        <p class="text-brand-700 italic">
                            "Wireframes aren't about how it looks, they are about how it works. If the structure is broken, the prettiest UI in the world won't save it."
                        </p>
                    </div>

                    <div class="flex items-center space-x-3">
                        <button class="flex items-center space-x-2 rounded-xl border border-gray-200 px-4 py-2 text-sm font-semibold text-slate-600 transition hover:bg-gray-50">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-gray-400">
                                <rect width="14" height="14" x="8" y="8" rx="2" ry="2" />
                                <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2" />
                            </svg>
                            <span>Copy link</span>
                        </button>

                        <a href="#" class="flex h-10 w-10 items-center justify-center rounded-xl border border-gray-200 text-gray-400 transition hover:bg-gray-50 hover:text-gray-600">
                            <svg class="h-5 w-5 fill-current" viewBox="0 0 24 24">
                                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                            </svg>
                        </a>

                        <a href="#" class="flex h-10 w-10 items-center justify-center rounded-xl border border-gray-200 text-gray-400 transition hover:bg-gray-50 hover:text-gray-600">
                            <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                                <path d="M12 2C6.477 2 2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12c0-5.523-4.477-10-10-10z" />
                            </svg>
                        </a>

                        <a href="#" class="flex h-10 w-10 items-center justify-center rounded-xl border border-gray-200 text-gray-400 transition hover:bg-gray-50 hover:text-gray-600">
                            <svg class="h-5 w-5 fill-current" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </article>
    </main>
</x-layouts.subpage>