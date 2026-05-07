

document.addEventListener('DOMContentLoaded', () => {
    
    // --- 1. DYNAMIC VIDEO MODAL LOGIC ---
    const modal = document.getElementById('videoModal-dynamic');
    const modalVideo = document.getElementById('modalVideo-dynamic');
    const closeModalBtn = document.getElementById('closeDynamicModal');

    // Function to close and reset
    const closeDynamicModal = () => {
        if (!modal) return;
        modal.classList.add('hidden');
        modalVideo.pause();
        modalVideo.src = ""; // Stop the video stream immediately
        document.body.style.overflow = ''; // Unlock scroll
        document.documentElement.style.overflow = '';
    };

    // Open logic
    document.querySelectorAll('.testimonial-play').forEach(btn => {
        btn.addEventListener('click', () => {
            const videoUrl = btn.getAttribute('data-video-url');
            
            if (videoUrl && modal && modalVideo) {
                modalVideo.src = videoUrl;
                modalVideo.load();
                modal.classList.remove('hidden');
                
                // Play video and handle browser auto-play restrictions
                modalVideo.play().catch(err => console.error("Playback error:", err));

                // Lock background scrolling
                document.body.style.overflow = 'hidden';
                document.documentElement.style.overflow = 'hidden';
            }
        });
    });

    // Close Events
    closeModalBtn?.addEventListener('click', closeDynamicModal);
    modal?.addEventListener('click', (e) => { if (e.target === modal) closeDynamicModal(); });
    document.addEventListener('keydown', (e) => { if (e.key === 'Escape') closeDynamicModal(); });


    // --- 2. PIXEL GRID ANIMATION (Optimized) ---
    const initPixelGrid = (anchorClass, gridClass, color) => {
        document.querySelectorAll(anchorClass).forEach(anchor => {
            const grid = anchor.querySelector(gridClass);
            if (!grid) return;
            
            const rows = 2, cols = 7;
            grid.style.gridTemplateColumns = `repeat(${cols}, 1fr)`;
            
            for (let i = 0; i < rows * cols; i++) {
                const tile = document.createElement('div');
                tile.style.backgroundColor = color;
                tile.className = 'w-full h-full opacity-0 transition-all duration-300 ease-in-out scale-0';
                tile.style.transitionDelay = `${Math.random() * 400}ms`;
                grid.appendChild(tile);
                
                anchor.addEventListener('mouseenter', () => {
                    tile.style.transitionDelay = `${Math.random() * 350}ms`;
                    tile.classList.add('opacity-100', 'scale-[1.2]');
                });
                anchor.addEventListener('mouseleave', () => {
                    tile.style.transitionDelay = `${Math.random() * 250}ms`;
                    tile.classList.remove('opacity-100', 'scale-[1.2]');
                });
            }
        });
    };

    initPixelGrid('.pixel-anchor', '.pixel-grid', '#16484B');
    initPixelGrid('.secondary-pixel-anchor', '.secondary-pixel-grid', '#E2C065');


    // --- 3. TESTIMONIAL CAROUSEL ---
    const grid = document.querySelector('.testimonial-grid');
    const prevBtn = document.querySelector('[aria-label="Previous testimonial"]');
    const nextBtn = document.querySelector('[aria-label="Next testimonial"]');

    if (grid && prevBtn && nextBtn) {
        const getScrollAmount = () => {
            const card = grid.querySelector('.testimonial-card');
            return card ? card.offsetWidth + 32 : 350;
        };
        nextBtn.addEventListener('click', () => grid.scrollBy({ left: getScrollAmount(), behavior: 'smooth' }));
        prevBtn.addEventListener('click', () => grid.scrollBy({ left: -getScrollAmount(), behavior: 'smooth' }));
    }


    // --- 4. ACCORDION LOGIC ---
    document.querySelectorAll('.accordion-item button').forEach(button => {
        button.addEventListener('click', () => {
            const content = button.nextElementSibling;
            const isOpen = content.style.maxHeight && content.style.maxHeight !== '0px';
            
            content.style.maxHeight = isOpen ? '0px' : content.scrollHeight + "px";
            
            // Toggle Icons
            button.querySelector('.minus-icon')?.classList.toggle('opacity-100', !isOpen);
            button.querySelector('.minus-icon')?.classList.toggle('opacity-0', isOpen);
            button.querySelector('.plus-icon')?.classList.toggle('opacity-0', !isOpen);
            button.querySelector('.plus-icon')?.classList.toggle('opacity-100', isOpen);
        });
    });

});

// Global WhatsApp toggle
window.toggleChat = function () {
    const timeNowElement = document.getElementById('realTime');
    if (timeNowElement) {
        timeNowElement.textContent = new Date().toLocaleTimeString('en-US', { hour: 'numeric', minute: 'numeric', hour12: true });
    }
    document.getElementById('whatsapp-card')?.classList.toggle('hidden');
    document.getElementById('chat-icon')?.classList.toggle('hidden');
    document.getElementById('close-icon')?.classList.toggle('hidden');
};