<section id="features" class="py-12 sm:py-16 md:py-20">
    <h2 class="about-guide-main-title">Why Choose StudyGlide?</h2>
    <p class="about-guide-main-paragraph">
        At StudyGlide Educational Consult, we go beyond simply processing applications.
        We become your dedicated partner throughout your entire study abroad journey.
        Here’s why thousands of students trust us:
    </p>


    <div class="mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-4 sm:gap-6 lg:gap-8">
        @foreach($infoGraph as $info) 
            <div class="w-full bg-[#FAFAFA] p-2 lg:p-8">
                <span class="icon-circle about-guide-icon">
                    {{ $info->id }}
                    
                </span>
                <h1 class="about-guide-title">{{ $info->title }}</h1>
                <p class="about-guide-paragraph">
                    {{ $info->description }}
                </p>
            </div>
        @endforeach
        

    </div>

</section>