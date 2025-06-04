document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.job-filter button');
    // Job filtering functionality
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
        filterButtons.forEach(btn => btn.classList.remove('bg-white', 'shadow-sm'));
        this.classList.add('bg-white', 'shadow-sm');
        const filterValue = this.textContent.trim();
        console.log('Filter by:', filterValue);
        });
    });

    // Open modal on job title click
    document.querySelectorAll('.job-title').forEach(function(element) {
        element.addEventListener('click', function() {
        var title = this.getAttribute('data-title');
        var content = this.getAttribute('data-content');
        
        document.getElementById('modalTitle').innerHTML = title;
        document.getElementById('modalContent').innerHTML = content;
        document.getElementById('jobModal').classList.remove('hidden');
        });
    });

    // Close modal on close button click
    document.getElementById('closeModal').addEventListener('click', function() {
        document.getElementById('jobModal').classList.add('hidden');
    });

    // Close modal if clicked outside the modal content
    document.getElementById('jobModal').addEventListener('click', function(e) {
        if (e.target.id === 'jobModal') {
        this.classList.add('hidden');
        }
    });

    // Open Apply Now Form
    window.openForm = function(jobTitle) {
        document.getElementById("apply-now-form").style.display = "flex";
        document.getElementById("apply-job-title").innerText = jobTitle;
    };

    // Close Apply Now Form
    window.closeForm = function() {
        document.getElementById("apply-now-form").style.display = "none";
    };

    // Form submission handling
    document.getElementById("application-form").addEventListener("submit", function(event) {
        event.preventDefault();

        // Hide previous messages
        document.getElementById("error-message").style.display = "none";
        document.getElementById("success-message").style.display = "none";

        // Collect form data
        const fullName = document.getElementById("fullName").value.trim();
        const email = document.getElementById("email").value.trim();
        const phone = document.getElementById("phone").value.trim();
        const resume = document.getElementById("resume").files[0];

        // Simple validation functions
        function isValidEmail(email) {
            // Basic email regex
            return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
        }

        function isValidPhone(phone) {
            // Basic phone regex allowing digits, spaces, dashes, plus sign
            return /^[\d\s\-\+]{7,15}$/.test(phone);
        }

        // Validate Full Name
        if (fullName.length < 2) {
            document.getElementById("error-message").innerText = "Please enter your full name (at least 2 characters).";
            document.getElementById("error-message").style.display = "block";
            return;
        }

        // Validate Email
        if (!isValidEmail(email)) {
            document.getElementById("error-message").innerText = "Please enter a valid email address.";
            document.getElementById("error-message").style.display = "block";
            return;
        }

        // Validate Phone
        if (!isValidPhone(phone)) {
            document.getElementById("error-message").innerText = "Please enter a valid phone number.";
            document.getElementById("error-message").style.display = "block";
            return;
        }

        // Validate Resume file presence and type
        if (!resume) {
            document.getElementById("error-message").innerText = "Please upload your resume.";
            document.getElementById("error-message").style.display = "block";
            return;
        }

        const allowedTypes = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
        if (!allowedTypes.includes(resume.type)) {
            document.getElementById("error-message").innerText = "Only PDF, DOC, and DOCX files are allowed for resume.";
            document.getElementById("error-message").style.display = "block";
            return;
        }

        // Validate reCAPTCHA
        const recaptchaResponse = grecaptcha.getResponse();
        if (!recaptchaResponse) {
            document.getElementById("error-message").innerText = "Please complete the reCAPTCHA.";
            document.getElementById("error-message").style.display = "block";
            return;
        }
        const countryCode = document.getElementById("countryCode").value;
        if (!countryCode) {
            document.getElementById("error-message").innerText = "Please select your country code.";
            document.getElementById("error-message").style.display = "block";
            return;
        }

        // Combine full phone number
        const fullPhoneNumber = `+${countryCode}${phone.replace(/\D/g, '')}`;

        // Validate full phone number format (optional)
        if (fullPhoneNumber.length < 8 || fullPhoneNumber.length > 15) {
            document.getElementById("error-message").innerText = "Please enter a valid phone number.";
            document.getElementById("error-message").style.display = "block";
            return;
        }

        // Replace phone field value with full phone number before sending
        this.phone.value = fullPhoneNumber;

        // If all validations pass, proceed with submission
        const formData = new FormData(this);
        formData.append("recaptchaResponse", recaptchaResponse);

        const jobTitle = document.getElementById("apply-job-title").innerText;
        formData.append("position", jobTitle);

        fetch("send-email.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
            document.getElementById("success-message").innerText = "Your application has been submitted successfully!";
            document.getElementById("success-message").style.display = "block";
            document.getElementById("application-form").reset();
            grecaptcha.reset();  // Reset reCAPTCHA after success
            setTimeout(closeForm, 5000);
            } else {
            document.getElementById("error-message").innerText = data.error || "An error occurred. Please try again.";
            document.getElementById("error-message").style.display = "block";
            }
        })
        .catch(error => {
            console.error('Error:', error);
            document.getElementById("error-message").innerText = "An error occurred. Please try again.";
            document.getElementById("error-message").style.display = "block";
        });
    });

    // Fetch country data
    fetch('https://restcountries.com/v3.1/all')
        .then(res => res.json())
        .then(data => {
        const select = document.getElementById('countryCode');
        // Sort countries by name
        data.sort((a, b) => a.name.common.localeCompare(b.name.common));
        data.forEach(country => {
            // Some countries have multiple calling codes
            const callingCodes = country.idd?.root && country.idd?.suffixes ? country.idd.suffixes.map(suffix => country.idd.root + suffix) : [];
            callingCodes.forEach(code => {
            const option = document.createElement('option');
            option.value = code;
            option.textContent = `${country.name.common} (${code})`;
            // Set Malaysia as the default selected option
            if (country.name.common === 'Malaysia') {
            option.selected = true;
            }
            select.appendChild(option);
        });
      });
    })
    .catch(console.error);
});