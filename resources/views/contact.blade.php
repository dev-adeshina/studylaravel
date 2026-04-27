<x-layouts.subpage>
    <x-subbanner.contact />
    <main class="shell lg:py-16">
        <div class="mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-4 sm:gap-6 lg:gap-8">

            <div class="max-w-2xl w-full lg:px-8">
                <h1 class="contact-form-title">Contact Us</h1>
                <p class="contact-form-paragraph py-2">
                    You can reach us anytime via
                    <br />
                    <a href="mailto:info@studyglideedu.com" class="contact-form-email">info@studyglideedu.com</a>
                </p>

                <x-contact />
            </div>

            <div class="hidden lg:block lg:w-full lg:bg-[#FAFAFA] lg:p-2">
                <img src="{{ asset('images/about-us.jpg') }}"
                    class="w-full h-[746px] object-cover"
                    alt="About Us">
            </div>
        </div>
    </main>
</x-layouts.subpage>