@php
    // Check if we are currently on the home page
    $isHome = Request::routeIs('home') || Request::is('/');
    
    // Determine the href based on the page
    $href = $isHome ? $headerSettings->cta_to_area : $headerSettings->cta_url;
@endphp

<header class="relative z-9999">
      <div class="hero-pattern absolute inset-0 bg-grid-fade opacity-50 pointer-events-none"></div>

      <div class="shell pt-3 sm:pt-4 lg:pt-6">
        <nav class="flex-none lg:flex items-center justify-between gap-4">
          <a href="{{ route('home') }}" class="hidden lg:block flex shrink-0 items-center">
            <x-main-logo/>
          </a>

          <div class="hidden md:flex items-center gap-4 lg:gap-6 xl:gap-8">
            @if($navLink !== null)
                @foreach($navLink as $link) 
                    <a href="{{ route($link->url ?? '') }}" class="nav-link anchor-nav font-inter font-semibold text-[14px] uppercase">{{ $link->label ?? ''}}</a>
                @endforeach
            @endif
          </div>

          <div class="flex items-center justify-between gap-3">

            <a href="{{ $href  }}" class="hidden sm:inline-flex pixel-anchor group relative items-center h-11 px-4 overflow-hidden bg-[#E2C065]  border border-white/20 rounded-lg no-underline transition-all duration-300">
              <div id="pixel-grid" class="pixel-grid absolute inset-0 grid pointer-events-none">
              </div>
              <span class="relative z-10 text-[16px] leading-[24px] font-semibold  text-[#16484B] mr-10 hover:text-[#facfac]">{{ $headerSettings->cta }}</span>
              <div class="relative z-10 flex items-center justify-center w-7 h-7 ml-3 bg-[#16484b] rounded-md group-hover:bg-[#E2C065]">
                <svg class="w-4 h-4 text-[#E2C065] group-hover:text-[#16484b]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                  <line x1="7" y1="17" x2="17" y2="7"></line>
                  <polyline points="7 7 17 7 17 17"></polyline>
                </svg>
              </div>
            </a>
            <a href="{{ route('home') }}" class="md:hidden flex shrink-0 items-center">
              <x-main-logo/>
            </a>
            <details class="flex relative md:hidden group float-right">
              
                <!-- <summary class="relative flex h-11 w-11 items-center justify-center text-white  cursor-pointer">
                  <i class="fa-solid fa-bars absolute transition-opacity duration-200 group-[open]:opacity-0"></i>
                  <i class="fa-solid fa-xmark absolute opacity-0 transition-opacity duration-200 group-[open]:opacity-100"></i>
                </summary> -->
                <summary class="relative flex h-11 w-11 cursor-pointer items-center justify-center text-white list-none">
                  <!-- Bars Icon -->
                  <i class="fa-solid fa-bars absolute transition-all duration-300 scale-100 opacity-100 group-open:scale-0 group-open:opacity-0"></i>
                  
                  <!-- Xmark Icon -->
                  <i class="fa-solid fa-xmark absolute transition-all duration-300 scale-0 opacity-0 group-open:scale-100 group-open:opacity-100"></i>
                </summary>

              <div class="absolute top-[+60%] right-0 mt-4 z-50 w-[100vw] max-w-[300px] border border-white/10 bg-brand-900/98 p-6 shadow-2xl rounded-xl backdrop-blur-lg">
                <div class="flex flex-col gap-5 text-sm font-bold text-white/80">
                    @if($navLink !== null)
                        @foreach($navLink as $link) 
                            <a href="{{ route($link->url ?? '') }}" class="hover:text-[#E2C065] font-inter font-semibold text-[16px] leading-[24px] mb-[16px]">{{ $link->label ?? ''}}</a>
                            
                        @endforeach
                    @endif
                  <hr class="border-white/10 my-3">
                  <!-- <a href="{{ $href  }}" class="w-full bg-[#E2C065] py-3 px-5 text-brand-900 text-[#16484B] rounded-lg">{{ $headerSettings->cta }}</a> -->
                   
                </div>
                <div class="w-full flex flex-col text-sm font-bold text-white/80 py-2">
                  <a href="{{ $href }}" class="pixel-anchor group relative flex items-center h-11 overflow-hidden bg-[#E2C065] border border-white/20 rounded-lg no-underline transition-all duration-300">
                    <!-- 1. Changed 'grid' to 'flex' and added 'justify-between' and 'w-full' -->
                    <div id="pixel-grid" class="absolute inset-0 flex items-center justify-between px-2 w-full pointer-events-none">
                      
                      <!-- 2. Removed 'pl-2' to let the flex container handle the padding -->
                      <span 
                        class="relative z-10 text-[16px] leading-[24px] font-semibold  text-[#16484B]">
                        {{ $headerSettings->cta }}
                      </span>

                      <!-- 3. Removed 'ml-3' (margin) since 'justify-between' handles the gap -->
                      <div class="relative z-10 flex items-center justify-center w-7 h-7 bg-[#16484b] rounded-md group-hover:bg-white transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#E2C065] group-hover:text-[#16484b]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                          <line x1="7" y1="17" x2="17" y2="7"></line>
                          <polyline points="7 7 17 7 17 17"></polyline>
                        </svg>
                      </div>

                    </div>
                  </a>
                  
                </div>
                
              </div>
            </details>
          </div>
        </nav>
      </div>
    </header>