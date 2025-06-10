document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.job-filter button');
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            filterButtons.forEach(btn => btn.classList.remove('bg-white', 'shadow-sm'));
            this.classList.add('bg-white', 'shadow-sm');
            const filterValue = this.textContent.trim();
            console.log('Filter by:', filterValue);
        });
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

    // Display Success Toast Message
    function showSuccessToast() {
        const successMessage = document.getElementById("success-message");

        successMessage.classList.remove("hidden");
        successMessage.classList.add("transition-opacity", "opacity-100", "duration-500", "transform", "translate-y-0");

        setTimeout(() => {
            successMessage.classList.remove("opacity-100");
            successMessage.classList.add("opacity-0", "translate-y-10");

            setTimeout(() => {
            successMessage.classList.add("hidden");
            }, 500);
        }, 4000);
    }

    // Display Error Toast Message
    function showErrorToast() {
    const errorMessage = document.getElementById("error-message");
    errorMessage.classList.remove("hidden");
    errorMessage.classList.add("transition-opacity", "opacity-100", "duration-500", "transform", "translate-y-0");

    setTimeout(() => {
        errorMessage.classList.remove("opacity-100");
        errorMessage.classList.add("opacity-0", "translate-y-10");

        setTimeout(() => {
        errorMessage.classList.add("hidden");
        }, 500);
    }, 4000);
    }

    // Form submission handling
    document.getElementById("application-form").addEventListener("submit", function(event) {
        event.preventDefault();

        // Collect form data
        const fullName = document.getElementById("fullName").value.trim();
        const email = document.getElementById("email").value.trim();
        const phone = document.getElementById("phone").value.trim();
        const resume = document.getElementById("resume").files[0];

        // Simple validation functions
        function isValidEmail(email) {
            return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
        }

        function isValidPhone(phone) {
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
        const fullPhoneNumber = `${countryCode} ${phone.replace(/\D/g, '')}`;

        // Validate full phone number format (optional)
        if (fullPhoneNumber.length < 8 || fullPhoneNumber.length > 15) {
            document.getElementById("error-message").innerText = "Please enter a valid phone number.";
            document.getElementById("error-message").style.display = "block";
            return;
        }

        // Replace phone field value with full phone number before sending
        this.phone.value = fullPhoneNumber;

        // Show loader and hide submit button content
        const submitButtonText = document.getElementById("submitButtonText");
        const loader = document.getElementById("loader");
        submitButtonText.classList.add("hidden");
        loader.classList.remove("hidden");
        submitButton.disabled = true;

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
                showSuccessToast();
                document.getElementById("application-form").reset();
                grecaptcha.reset();  // Reset reCAPTCHA after success
                setTimeout(() => {
                    closeForm();
                }, 5000);
            } else {
                document.getElementById("error-message").innerText = data.error || "An error occurred. Please try again.";
                document.getElementById("error-message").style.display = "block";
            }
        })
        .catch(error => {
            console.error('Error:', error);
    showErrorToast();
        })
        .finally(() => {
            // Hide loader and enable submit button again
            loader.classList.add("hidden");
            submitButtonText.classList.remove("hidden"); 
            submitButton.disabled = false; 
        });
    });

    // Fetch country data
    fetch('https://restcountries.com/v3.1/all?fields=name,idd')
    .then(res => res.json())
    .then(data => {
        if (Array.isArray(data)) {
            data.sort((a, b) => a.name.common.localeCompare(b.name.common));
            document.querySelectorAll('.countryCode').forEach(select => {
                data.forEach(country => {
                    const callingCodes = country.idd?.root && country.idd?.suffixes 
                        ? country.idd.suffixes.map(suffix => country.idd.root + suffix) 
                        : [];

                    callingCodes.forEach(code => {
                        const option = document.createElement('option');
                        option.value = code;
                        option.textContent = `${country.name.common} (${code})`;
                        if (country.name.common === 'Malaysia') {
                            option.selected = true;
                        }
                        select.appendChild(option);
                    });
                });
            });
        } else {
            console.error('Data is not an array:', data);
        }
    })
    .catch(console.error);
});