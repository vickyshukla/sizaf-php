// Delay autoplay
window.addEventListener("load", () => {
    setTimeout(() => {
        const video = document.getElementById("bgVideo");
        video.play().then(() => {
            video.classList.remove("opacity-0");
        }).catch((err) => {
            console.warn("Video play failed:", err);
        });
    }, 1000);
});

const slider = document.getElementById('slider');
const cards = slider.querySelectorAll('.carousel-card');
const cardMargin = 16; // Tailwind's gap-4 = 1rem = 16px
let scrollAmount = 0;

function getCardWidth() {
    return cards[0].offsetWidth + cardMargin;
}

document.getElementById('nextBtn').addEventListener('click', () => {
    scrollAmount += getCardWidth();
    slider.scrollTo({ left: scrollAmount, behavior: 'smooth' });
});

document.getElementById('prevBtn').addEventListener('click', () => {
    scrollAmount -= getCardWidth();
    if (scrollAmount < 0) scrollAmount = 0;
    slider.scrollTo({ left: scrollAmount, behavior: 'smooth' });
});

function animateCounter(id, endValue, duration = 2000) {
    const counter = document.getElementById(id);
    let start = 0;
    const increment = endValue / (duration / 16); // ~60fps
    function update() {
        start += increment;
        if (start < endValue) {
            counter.innerText = Math.floor(start).toLocaleString();
            requestAnimationFrame(update);
        } else {
            counter.innerText = endValue.toLocaleString();
        }
    }
    update();
}

// Trigger on load
document.addEventListener('DOMContentLoaded', () => {
    animateCounter("counter0", 7);
    animateCounter("counter1", 113);
    animateCounter("counter2", 4905);
});

document.addEventListener('DOMContentLoaded', function () {
    // Initialize GSAP animations
    gsap.registerPlugin(ScrollTrigger);

    // Animate each section sequentially
    gsap.utils.toArray('.belief-item, .strengths-item, .goals-item').forEach((item, i) => {
        gsap.from(item, {
            scrollTrigger: {
                trigger: item,
                start: "top 80%",
                toggleActions: "play none none none"
            },
            y: 50,
            opacity: 0,
            duration: 0.8,
            delay: i * 0.2,
            ease: "power2.out"
        });
    });

    // Add highlight animation on hover
    document.querySelectorAll('.highlight-text').forEach(item => {
        item.addEventListener('mouseenter', () => {
            gsap.to(item.querySelector('.highlight-trigger::after'), {
                width: '100%',
                duration: 0.3
            });
        });

        item.addEventListener('mouseleave', () => {
            gsap.to(item.querySelector('.highlight-trigger::after'), {
                width: '0%',
                duration: 0.3
            });
        });
    });
});