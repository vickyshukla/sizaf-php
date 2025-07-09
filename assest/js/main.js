//managed-it-services.php

// Animation Scripts
document.addEventListener('DOMContentLoaded', function () {
    // Scroll animation for service cards
    const serviceCards = document.querySelectorAll('.service-card');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fadeInUp');
            }
        });
    }, { threshold: 0.1 });

    serviceCards.forEach(card => {
        card.classList.add('opacity-0', 'translate-y-6');
        observer.observe(card);
    });

    // Hover animation for CTA buttons
    const ctaButtons = document.querySelectorAll('.cta-button');
    ctaButtons.forEach(button => {
        button.addEventListener('mouseenter', () => {
            button.classList.add('shadow-lg', 'scale-105');
        });
        button.addEventListener('mouseleave', () => {
            button.classList.remove('shadow-lg', 'scale-105');
        });
    });
});

// Add any JavaScript for animations here
document.addEventListener('DOMContentLoaded', function () {
    // Example animation - fade in elements on scroll
    const observerOptions = {
        threshold: 0.1
    };

    const observer = new IntersectionObserver(function (entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fadeIn');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe all elements you want to animate
    document.querySelectorAll('.service-card, .cta-section').forEach(card => {
        card.classList.add('opacity-0', 'transition-opacity', 'duration-500');
        observer.observe(card);
    });
});

//Network.php

// Animation Scripts
document.addEventListener('DOMContentLoaded', function () {
    // Scroll animation for service cards
    const serviceCards = document.querySelectorAll('.service-card');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fadeInUp');
            }
        });
    }, { threshold: 0.1 });

    serviceCards.forEach(card => {
        card.classList.add('opacity-0', 'translate-y-6');
        observer.observe(card);
    });

    // Hover animation for CTA buttons
    const ctaButtons = document.querySelectorAll('.cta-button');
    ctaButtons.forEach(button => {
        button.addEventListener('mouseenter', () => {
            button.classList.add('shadow-lg', 'scale-105');
        });
        button.addEventListener('mouseleave', () => {
            button.classList.remove('shadow-lg', 'scale-105');
        });
    });
});

// Add any JavaScript for animations here
document.addEventListener('DOMContentLoaded', function () {
    // Example animation - fade in elements on scroll
    const observerOptions = {
        threshold: 0.1
    };

    const observer = new IntersectionObserver(function (entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fadeIn');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe all elements you want to animate
    document.querySelectorAll('.service-card, .cta-section').forEach(card => {
        card.classList.add('opacity-0', 'transition-opacity', 'duration-500');
        observer.observe(card);
    });
});

// Tech-Infra.php JS

// Animation Scripts
document.addEventListener('DOMContentLoaded', function () {
    // Scroll animation for service cards
    const serviceCards = document.querySelectorAll('.service-card');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fadeInUp');
            }
        });
    }, { threshold: 0.1 });

    serviceCards.forEach(card => {
        card.classList.add('opacity-0', 'translate-y-6');
        observer.observe(card);
    });

    // Hover animation for CTA buttons
    const ctaButtons = document.querySelectorAll('.cta-button');
    ctaButtons.forEach(button => {
        button.addEventListener('mouseenter', () => {
            button.classList.add('shadow-lg', 'scale-105');
        });
        button.addEventListener('mouseleave', () => {
            button.classList.remove('shadow-lg', 'scale-105');
        });
    });
});

// Add any JavaScript for animations here
document.addEventListener('DOMContentLoaded', function () {
    // Example animation - fade in elements on scroll
    const observerOptions = {
        threshold: 0.1
    };

    const observer = new IntersectionObserver(function (entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fadeIn');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe all elements you want to animate
    document.querySelectorAll('.service-card, .cta-section').forEach(card => {
        card.classList.add('opacity-0', 'transition-opacity', 'duration-500');
        observer.observe(card);
    });
});

// Web-Media.php JS

// Animation Scripts
document.addEventListener('DOMContentLoaded', function () {
    // Scroll animation for service cards
    const serviceCards = document.querySelectorAll('.service-card');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fadeInUp');
            }
        });
    }, { threshold: 0.1 });

    serviceCards.forEach(card => {
        card.classList.add('opacity-0', 'translate-y-6');
        observer.observe(card);
    });

    // Hover animation for CTA buttons
    const ctaButtons = document.querySelectorAll('.cta-button');
    ctaButtons.forEach(button => {
        button.addEventListener('mouseenter', () => {
            button.classList.add('shadow-lg', 'scale-105');
        });
        button.addEventListener('mouseleave', () => {
            button.classList.remove('shadow-lg', 'scale-105');
        });
    });
});

// Add any JavaScript for animations here
document.addEventListener('DOMContentLoaded', function () {
    // Example animation - fade in elements on scroll
    const observerOptions = {
        threshold: 0.1
    };

    const observer = new IntersectionObserver(function (entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fadeIn');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe all elements you want to animate
    document.querySelectorAll('.service-card, .cta-section').forEach(card => {
        card.classList.add('opacity-0', 'transition-opacity', 'duration-500');
        observer.observe(card);
    });
});