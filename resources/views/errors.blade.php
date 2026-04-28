<x-layouts.subpage>
    <main class="shell lg:py-36">
        <h1 class="text-center font-semibold font-inter text-[48px] mb-[36px] text-[#186c63]">Oops Sorry</h1>
        <p class="text-center font-normal font-inter text-[18px] mb-[14px]"> {{ $error ?? 'Something went wrong!' }}</p>
        <div class="flex item-center justify-center">
            <a href="/" class="text-center font-normal font-inter text-[18px] mb-[14px]">Return Home</a>
        </div>
        
    </main>
</x-layouts.subpage>