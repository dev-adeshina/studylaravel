<section class="max-w-3xl mx-auto p-6 bg-white">

    <div class="divide-y divide-gray-100">

        @foreach ($faqs as $faq)
        <div class="accordion-item py-4">
            <button class="flex w-full items-center justify-between text-left focus:outline-none group">
                <h1 class="faq-title">
                    {{ $faq->title }}
                </h1>
                <div class="relative w-5 h-5 flex-shrink-0 text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute inset-0 transition-opacity duration-300 opacity-100 minus-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute inset-0 transition-opacity duration-300 opacity-0 plus-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
            </button>

            <div class="accordion-content max-h-screen overflow-hidden transition-all duration-300 ease-in-out">
                <p class="faq-paragraph">
                    {!! $faq->content !!}
                </p>
            </div>
        </div>
        @endforeach
    </div>
</section>