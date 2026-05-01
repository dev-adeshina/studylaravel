<form class="mt-5 flex flex-col gap-3 sm:flex-row sm:items-stretch" action="{{ route('subscribe') }}" method="POST">
    @csrf
    <input type="email" name="email" class="footer-subscribe-input form-field min-w-0 flex-1 border-white/15 bg-white text-slate-900 sm:min-w-[260px]" placeholder="Enter your email" required />
    
    <button type="submit"  class="pixel-anchor group relative inline-flex items-center h-11 justify-between  px-1 overflow-hidden bg-[#E2C065] border border-white/20 rounded-[5px] no-underline transition-all duration-300 hover:border-white/40">

    <div class="pixel-grid absolute inset-0 grid pointer-events-none">
        </div>

    <span class="relative z-10 anchor-text transition-colors duration-500 group-hover:text-[#E2C065]">
        Subscribe
    </span>

    <span class="relative z-10 flex items-center justify-center w-8 h-8 ml-4 bg-[#16484b] rounded-[5px] transition-all duration-500 group-hover:bg-[#E2C065] hover:-translate-y-1 hover:scale-110">
    <svg 
        xmlns="http://www.w3.org/2000/svg" 
        class="w-5 h-5 text-[#E2C065] transition-transform duration-500 group-hover:text-[#16484b]" 
        viewBox="0 0 24 24" 
        fill="none" 
        stroke="currentColor" 
        stroke-width="2.5" 
        stroke-linecap="round" 
        stroke-linejoin="round"
    >
        <line x1="7" y1="17" x2="17" y2="7"></line>
        <polyline points="7 7 17 7 17 17"></polyline>
        </svg>
    </span>
    
    </button>
</form>

