import Swal from 'sweetalert2';
window.Swal = Swal;


      const anchors = document.querySelectorAll('.pixel-anchor');
      const rows = 2, cols = 7, pixelColor = '#16484B';

      anchors.forEach(anchor => {
        const grid = anchor.querySelector('.pixel-grid'); // per-anchor grid
        grid.style.gridTemplateColumns = `repeat(${cols}, 1fr)`;
        grid.style.gridTemplateRows = `repeat(${rows}, 1fr)`;

        const tiles = [];
        for (let i = 0; i < rows * cols; i++) {
          const tile = document.createElement('div');
          tile.style.backgroundColor = pixelColor;
          tile.className = 'w-full h-full opacity-0 transition-all duration-300 ease-in-out scale-0';
          tile.style.transitionDelay = `${Math.random() * 400}ms`;
          grid.appendChild(tile);
          tiles.push(tile);
        }

        anchor.addEventListener('mouseenter', () => {
          tiles.forEach(t => {
            t.style.transitionDelay = `${Math.random() * 350}ms`;
            t.classList.add('opacity-100', 'scale-[1.2]');
          });
        });
        anchor.addEventListener('mouseleave', () => {
          tiles.forEach(t => {
            t.style.transitionDelay = `${Math.random() * 250}ms`;
            t.classList.remove('opacity-100', 'scale-[1.2]');
          });
        });
      });


      const secondary_anchors = document.querySelectorAll('.secondary-pixel-anchor');
      const secondary_rows = 2, secondary_cols = 7, secondary_pixelColor = '#E2C065';

      secondary_anchors.forEach(anchor => {
        const grid = anchor.querySelector('.secondary-pixel-grid'); // per-anchor grid
        grid.style.gridTemplateColumns = `repeat(${secondary_cols}, 1fr)`;
        grid.style.gridTemplateRows = `repeat(${secondary_rows}, 1fr)`;

        const tiles = [];
        for (let i = 0; i < secondary_rows * secondary_cols; i++) {
          const tile = document.createElement('div');
          tile.style.backgroundColor = secondary_pixelColor;
          tile.className = 'w-full h-full opacity-0 transition-all duration-300 ease-in-out scale-0';
          tile.style.transitionDelay = `${Math.random() * 400}ms`;
          grid.appendChild(tile);
          tiles.push(tile);
        }

        
        anchor.addEventListener('mouseenter', () => {
          tiles.forEach(t => {
            t.style.transitionDelay = `${Math.random() * 350}ms`;
            t.classList.add('opacity-100', 'scale-[1.2]');
          });
        });
        anchor.addEventListener('mouseleave', () => {
          tiles.forEach(t => {
            t.style.transitionDelay = `${Math.random() * 250}ms`;
            t.classList.remove('opacity-100', 'scale-[1.2]');
          });
        });
      });


      function openVideoModal(name) {
        const modal = document.getElementById(`videoModal-${name}`);
        const video = document.getElementById(`modalVideo-${name}`);
        if (!modal || !video) return;

        // Hide any other open modals and pause their videos
        document.querySelectorAll('[id^="videoModal-"]').forEach(m => {
          if (m !== modal) {
            m.classList.remove('show');
            m.classList.add('hidden');
            const vid = m.querySelector('video');
            if (vid) { vid.pause(); vid.currentTime = 0; }
          }
        });

        modal.classList.remove('hidden');
        setTimeout(() => modal.classList.add('show'), 10);

        // Lock scroll
        document.documentElement.style.height = '100vh';
        document.documentElement.style.overflow = 'hidden';
        document.body.style.height = '100vh';
        document.body.style.overflow = 'hidden';

        // Try to play (muted in-card; modal can be unmuted if user wants)
        video.play().catch(() => {});
      }

      function closeVideoModal(name) {
        // If name provided, close that modal; otherwise close any open modal
        const modals = name ? [document.getElementById(`videoModal-${name}`)] : Array.from(document.querySelectorAll('[id^="videoModal-"]'));
        modals.forEach(modal => {
          if (!modal) return;
          modal.classList.remove('show');
          const vid = modal.querySelector('video');
          if (vid) { vid.pause(); vid.currentTime = 0; }
          setTimeout(() => modal.classList.add('hidden'), 300);
        });

        // Reset scroll lock
        document.documentElement.style.height = '';
        document.documentElement.style.overflow = '';
        document.body.style.height = '';
        document.body.style.overflow = '';
      }

      document.addEventListener('DOMContentLoaded', () => {
        // Attach click/keyboard to all play buttons
        document.querySelectorAll('.testimonial-play').forEach(btn => {
          const name = btn.dataset.modal;
          if (!name) return;
          btn.addEventListener('click', () => openVideoModal(name));
          btn.addEventListener('keydown', e => {
            if (e.key === 'Enter' || e.key === ' ') {
              e.preventDefault();
              openVideoModal(name);
            }
          });
        });

        // Attach close handlers for each modal's close button and backdrop
        document.querySelectorAll('[id^="videoModal-"]').forEach(modal => {
          const name = modal.id.replace('videoModal-', '');
          // Close button inside modal
          const closeBtn = modal.querySelector('.closeModalBtn');
          if (closeBtn) closeBtn.addEventListener('click', () => closeVideoModal(name));

          // Backdrop click: close when clicking directly on modal container (not the video)
          modal.addEventListener('click', e => {
            if (e.target === modal) closeVideoModal(name);
          });
        });

        // ESC key closes any open modal
        document.addEventListener('keydown', e => {
          if (e.key === 'Escape') closeVideoModal();
        });
      });


      document.addEventListener('DOMContentLoaded', () => {
        const grid = document.querySelector('.testimonial-grid');
        const prevBtn = document.querySelector('[aria-label="Previous testimonial"]');
        const nextBtn = document.querySelector('[aria-label="Next testimonial"]');

        if (!grid || !prevBtn || !nextBtn) return;

        const getScrollAmount = () => {
          // Get the width of one card including the gap
          const card = grid.querySelector('.testimonial-card');
          return card.offsetWidth + 32; // 32 is the gap (8 in tailwind)
        };

        nextBtn.addEventListener('click', () => {
          grid.scrollBy({ left: getScrollAmount(), behavior: 'smooth' });
        });

        prevBtn.addEventListener('click', () => {
          grid.scrollBy({ left: -getScrollAmount(), behavior: 'smooth' });
        });
      });

      document.addEventListener('DOMContentLoaded', () => {
        const scrollCarousel = (btn, direction) => {
          const targetId = btn.getAttribute('data-target');
          const container = document.getElementById(targetId);
          
          if (container) {
            const card = container.querySelector('article');
            const scrollAmount = card.offsetWidth + 24; // Card width + gap
            
            container.scrollBy({ 
              left: direction === 'next' ? scrollAmount : -scrollAmount, 
              behavior: 'smooth' 
            });
          }
        };

        // Attach listeners to all next buttons
        document.querySelectorAll('.nav-btn-next').forEach(btn => {
          btn.onclick = () => scrollCarousel(btn, 'next');
        });

        // Attach listeners to all prev buttons
        document.querySelectorAll('.nav-btn-prev').forEach(btn => {
          btn.onclick = () => scrollCarousel(btn, 'prev');
        });
      });


       window.toggleChat = function () {

        const now = new Date();
        const timeString = now.toLocaleTimeString('en-US', { 
          hour: 'numeric', 
          minute: 'numeric', 
          hour12: true 
        });

        const timeNowElement = document.getElementById('realTime');

        if (timeNowElement) {
          timeNowElement.textContent = timeString;
        }

        const card = document.getElementById('whatsapp-card');
        const chatIcon = document.getElementById('chat-icon');
        const closeIcon = document.getElementById('close-icon');
        card.classList.toggle('hidden');
        chatIcon.classList.toggle('hidden');
        closeIcon.classList.toggle('hidden');
    }

    document.querySelectorAll('.accordion-item button').forEach(button => {
          button.addEventListener('click', () => {
          const content = button.nextElementSibling;
          const minusIcon = button.querySelector('.minus-icon');
          const plusIcon = button.querySelector('.plus-icon');

            // Toggle content height
            if (content.style.maxHeight && content.style.maxHeight !== '0px') {
                content.style.maxHeight = '0px';
                minusIcon.classList.replace('opacity-100', 'opacity-0');
                plusIcon.classList.replace('opacity-0', 'opacity-100');
            } else {
                content.style.maxHeight = content.scrollHeight + "px";
                minusIcon.classList.replace('opacity-0', 'opacity-100');
                plusIcon.classList.replace('opacity-100', 'opacity-0');
            }
          });
      });

      const myWidget = window.cloudinary.createUploadWidget({
          cloudName: "dhthtqqff", 
          uploadPreset: "ml_default",
          resourceType: "video",
          // ... other settings
      }, (error, result) => {
          if (!error && result && result.event === "success") {
              document.getElementById("video-url-input").value = result.info.secure_url;
              document.getElementById("video-url-input").dispatchEvent(new Event("input"));
          }
      });

myWidget.open();