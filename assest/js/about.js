// FAQ functionality
document.addEventListener('DOMContentLoaded', function() {

window.toggleFAQ= function(id) {
  const content = document.getElementById(id + '-content');
  const button = document.querySelector(`[aria-controls="${id}-content"]`);
  const icon = button.querySelector('svg:last-child');
  
  if (content.classList.contains('hidden')) {
    content.classList.remove('hidden');
    button.setAttribute('aria-expanded', 'true');
    icon.classList.add('rotate-180');
  } else {
    content.classList.add('hidden');
    button.setAttribute('aria-expanded', 'false');
    icon.classList.remove('rotate-180');
  }
}

// Filter FAQs by search query
window.filterFAQs= function() {
  const query = document.getElementById('faq-search').value.toLowerCase();
  const faqItems = document.querySelectorAll('[data-category]');
  let visibleCount = 0;
  
  faqItems.forEach(item => {
    const question = item.querySelector('span').textContent.toLowerCase();
    const answer = item.querySelector('div[id$="-content"]').textContent.toLowerCase();
    
    if (question.includes(query) || answer.includes(query)) {
      item.style.display = 'block';
      visibleCount++;
    } else {
      item.style.display = 'none';
    }
  });
  
  const resultsDiv = document.getElementById('search-results');
  if (query) {
    resultsDiv.classList.remove('hidden');
    document.getElementById('results-count').textContent = visibleCount;
    document.getElementById('search-query').textContent = query;
  } else {
    resultsDiv.classList.add('hidden');
  }
}

// Filter by category
window.filterByCategory= function(category) {
  const faqItems = document.querySelectorAll('[data-category]');
  
  faqItems.forEach(item => {
    if (item.getAttribute('data-category') === category) {
      item.style.display = 'block';
    } else {
      item.style.display = 'none';
    }
  });
  
  document.getElementById('faq-search').value = '';
  document.getElementById('search-results').classList.add('hidden');
}

// Clear all filters
window.clearFilters= function() {
  const faqItems = document.querySelectorAll('[data-category]');
  faqItems.forEach(item => {
    item.style.display = 'block';
  });
  
  document.getElementById('faq-search').value = '';
  document.getElementById('search-results').classList.add('hidden');
}

// Initialize all FAQs to be closed on page load
  const faqContents = document.querySelectorAll('[id$="-content"]');
  faqContents.forEach(content => {
    content.classList.add('hidden');
  })
  const contactForm = document.getElementById("contact-form");
  if (contactForm) {
    const submitButton = document.getElementById("submitButton");
    const submitButtonText = document.querySelectorAll(".submitButtonText");
    const loader = document.getElementById("loader");
    const errorToast = document.getElementById("error-message");
    const successToast = document.getElementById("success-message");

    function showToast(el) {
      el.classList.remove("hidden", "opacity-0", "translate-y-10");
      el.classList.add("opacity-100", "translate-y-0");

      setTimeout(() => {
        el.classList.remove("opacity-100", "translate-y-0");
        el.classList.add("opacity-0", "translate-y-10");
        setTimeout(() => el.classList.add("hidden"), 500);
      }, 4000);
    }

    contactForm.addEventListener("submit", function (e) {
      e.preventDefault();

      const formData = new FormData(contactForm);
      const fullName = contactForm.fullName.value.trim();
      const email = contactForm.email.value.trim();
      const phone = contactForm.phone.value.trim();
      const city = contactForm.city.value.trim();
      const country = contactForm.country.value.trim();
      const address = contactForm.address.value.trim();
      const message = contactForm.message.value.trim();

      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      const phoneRegex = /^[\d\s\-\+]{7,15}$/;
      const textOnlyRegex = /^[a-zA-Z\s\-']{2,}$/;

      const showError = (msg) => {
        errorToast.textContent = msg;
        showToast(errorToast);
      };

      if (fullName.length < 2 || !textOnlyRegex.test(fullName)) {
        showError("Please enter a valid full name (at least 2 letters).");
        return;
      }

      if (!emailRegex.test(email)) {
        showError("Please enter a valid email address.");
        return;
      }

      if (!phoneRegex.test(phone)) {
        showError("Please enter a valid phone number (7–15 digits).");
        return;
      }

      if (city.length < 2 || !textOnlyRegex.test(city)) {
        showError("Please enter a valid city name (letters only).");
        return;
      }

      if (country.length < 2 || !textOnlyRegex.test(country)) {
        showError("Please enter a valid country name (letters only).");
        return;
      }

      if (address.length < 5) {
        showError("Please enter a valid address (at least 5 characters).");
        return;
      }

      // Optional message: only validate if provided
      if (message && message.length < 10) {
        showError("If you provide a message, it should be at least 10 characters.");
        return;
      }

      // Show loader
      submitButtonText.forEach(element => {
        element.classList.add("hidden");
      });      
      loader.classList.remove("hidden");
      submitButton.disabled = true;

      fetch("contact-form.php", {
        method: "POST",
        body: formData
      })
        .then(response => response.json())
        .then(data => {
          if (data) {
            showToast(successToast);
            contactForm.reset();
          }
        })
        .catch(error => {
          console.error("Error:", error);
          showError("Something went wrong. Try again later.");
        })
        .finally(() => {
          loader.classList.add("hidden");
          submitButtonText.forEach(element => {
            element.classList.remove("hidden");
          });
          submitButton.disabled = false;
        });
    });
  }
});
  
  // Animation for contact cards
  const contactCards = document.querySelectorAll('[itemtype="https://schema.org/PostalAddress"], [itemtype="https://schema.org/Organization"]');
  
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry, index) => {
      if (entry.isIntersecting) {
        entry.target.style.transitionDelay = `${index * 100}ms`;
        entry.target.classList.add('animate-fadeInUp');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1 });
  
  contactCards.forEach(card => {
    card.classList.add('opacity-0', 'translate-y-6');
    observer.observe(card);
  });
  
  const slider = document.getElementById('testimonialSlider');
  const totalItems = slider.children.length;
  const visibleSlides = 3;
  const itemWidth = slider.children[0].offsetWidth;
  let currentIndex = 0;

  const dotsContainer = document.getElementById('sliderDots');
  const dots = dotsContainer.querySelectorAll('button');

  function slideTo(index) {
    const maxIndex = totalItems - visibleSlides;
    if (index < 0) index = 0;
    if (index > maxIndex) index = 0; // loop
    slider.style.transform = `translateX(-${index * itemWidth}px)`;
    currentIndex = index;
    updateDots();
  }

  function updateDots() {
    dots.forEach((dot, i) => {
      dot.classList.toggle('bg-pink-500', i === currentIndex);
      dot.classList.toggle('bg-gray-300', i !== currentIndex);
    });
  }

  // Attach click events to dots
  dots.forEach((dot) => {
    dot.addEventListener('click', () => {
      const index = parseInt(dot.getAttribute('data-index'));
      slideTo(index);
    });
  });

  // Auto-slide every 5s
  setInterval(() => {
    slideTo(currentIndex + 1);
  }, 5000);

  // Initial update
  updateDots();

 document.querySelectorAll(".highlight").forEach(function(el) {
  el.addEventListener("click", function() {
    document.querySelectorAll(".highlight").forEach(function(el2) {
      el2.classList.remove("border-2", "border-pink-500");
    });
    this.classList.add("border-2", "border-pink-500");
  });
});