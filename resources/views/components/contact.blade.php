<form class="space-y-6 py-4" action="{{ route('contact.notify')}}" method="POST">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="flex flex-col gap-2">
            <label class="contact-form-label">First name *</label>
            <input type="text" name="first_name" placeholder="First name" class="contact-form-placeholder border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-[#1a4342] outline-none transition-all">
        </div>
        <div class="flex flex-col gap-2">
            <label class="contact-form-label">Last name *</label>
            <input type="text" name="last_name" placeholder="Last name" class="contact-form-placeholder border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-[#1a4342] outline-none transition-all">
        </div>
    </div>

    <div class="flex flex-col gap-2">
        <label class="contact-form-label">Email *</label>
        <input type="email" name="email" placeholder="you@company.com" class="contact-form-placeholder border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-[#1a4342] outline-none">
    </div>

    <div class="flex flex-col gap-2">
        <label class="contact-form-label">Phone Number</label>
        <input type="tel" name="phone_number" placeholder="+234 9133071334" class="contact-form-placeholder border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-[#1a4342] outline-none">
    </div>

    <div class="flex flex-col gap-2">
        <label class="contact-form-label">Message *</label>
        <textarea rows="5" name="message" placeholder="Leave us a message..." class="contact-form-placeholder border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-[#1a4342] outline-none resize-none"></textarea>
    </div>

    <button type="submit" class="w-full secondary-pixel-anchor group relative inline-flex items-center h-11 justify-between  px-1 overflow-hidden bg-[#16484B] border border-white/20 rounded-[5px] no-underline transition-all duration-300 hover:border-white/40">

        <div class="secondary-pixel-grid absolute inset-0 grid pointer-events-none">
        </div>

        <span class="relative z-10 anchor-text text-[#E2C065] transition-colors duration-500 group-hover:text-[#16484B]">
            Send Message
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

    </button>
</form>