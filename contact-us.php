<?php include("components/header.php") ?>



<!-- hero section -->

<section class="contain2" id="hero">

    <div class="contain paddingy">

        <div class="relative w-full items-center gap-6">

            <!-- Left Side -->
            <div class="w-full flex items-center justify-center lg:justify-start z-10">
                <div class="flex flex-col gap-4 text-center md:text-left lg:py-8">
                    <h2
                        class="text-4xl md:text-5xl lg:text-[54px] xl:text-[72px] 2xl:text-[82px] leading-none Abhaya font-medium">
                        Together <br />
                        <span class="font-extrabold">we craft tomorrow</span>
                    </h2>

                    <p
                        class="text-[16px] md:text-[18px] lg:text-[20px] xl:text-[24px] text-[#313039] font-normal leading-[1.46] font-medium-Thin font-thin md:w-[90%]">
                        We’d love to hear from you! Whether you have a question, project idea, or partnership opportunity, our team is here to help. Reach out to us for quick assistance and personalized solutions. Let’s connect and create something great together.
                    </p>
                </div>
            </div>

            <!-- Right Side -->
            <div class="absolute -bottom-[1rem] right-0 w-fit z-0 hidden lg:block">
                <div class="w-[350px] h-[300px] xl:w-[350px] xl:h-[350px] bg-[url('assets/multiImages/dotted-bg.png')] z-20 bg-no-repeat bg-contain">
                    <!-- <img src=" assets/multiImages/dotted-bg.png" alt="dotted-bg-banner" class="w-[350px] h-[400px] 2xl:w-full 2xl:h-full" /> -->
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Contact form -->
<style>
    .input-error {
        border-color: #ff4d4d !important;
    }

    .error-text {
        color: #ff4d4d;
        font-size: 14px;
        margin-top: 4px;
        display: block;
        min-height: 20px;
    }

    /* Toast Styles */
    .toast {
        position: fixed;
        top: 20px;
        right: 20px;
        padding: 16px 24px;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        display: flex;
        align-items: center;
        gap: 12px;
        z-index: 1000;
        animation: slideIn 0.3s ease-out;
        max-width: 400px;
    }

    .toast.success {
        background-color: #10b981;
        color: white;
    }

    .toast.error {
        background-color: #ef4444;
        color: white;
    }

    .toast.warning {
        background-color: #f59e0b;
        color: white;
    }

    @keyframes slideIn {
        from {
            transform: translateX(400px);
            opacity: 0;
        }

        to {
            transform: translateX(0);
            opacity: 1;
        }
    }

    @keyframes slideOut {
        from {
            transform: translateX(0);
            opacity: 1;
        }

        to {
            transform: translateX(400px);
            opacity: 0;
        }
    }

    .toast.hiding {
        animation: slideOut 0.3s ease-in;
    }
</style>


<section class="contain2">
    <div class="contain bg-[#1A1C20] flex flex-col justify-center items-center py-4 2xl:py-10">


        <div class="w-full h-full flex flex-col gap-6 px-2 py-6 md:px-12 xl:px-[82px] flex flex-col justify-center ">

            <h2
                class="text-2xl sm:text-3xl 2xl:text-[33px] font-semibold leading-tight text-white">
                Contact Details
            </h2>

            <div class="grid grid-cols-3 items-start mt-6 justify-start text-[#BBBBBD]">
                <!-- Address -->
                <div class="flex items-start gap-3 sm:gap-4">
                    <img src="./assets/icons/locationicon -yellow.svg" alt="location"
                        class="w-[14px] md:w-[15px] xl:w-[18px] h-auto mt-1" />

                    <p class="text-[16px] sm:text-[18px] 2xl:text-[20px] xl:text-[24px]">
                        Fourth Floor, Office No: 303, 32, Vijay Block, Laxmi Nagar,
                        New Delhi, Delhi, 110092
                    </p>
                </div>

                <!-- Phone -->
                <div class="flex items-center gap-3 sm:gap-4">
                    <img src="./assets/icons/callicon-yellow.svg" alt="phone"
                        class="w-[15px] md:w-[16px] xl:w-[19px] h-auto" />
                    <p
                        class="text-[16px] sm:text-[18px] 2xl:text-[20px] xl:text-[24px]">
                        Contact : +91-9650381012
                    </p>
                </div>

                <!-- Email -->
                <div class="flex items-center gap-3 sm:gap-4">
                    <img src="./assets/icons/emailicon-yellow.svg" alt="email"
                        class="w-[15px] md:w-[16px] xl:w-[19px] h-auto" />
                    <p
                        class="text-[16px] sm:text-[18px] 2xl:text-[20px] xl:text-[24px]">
                        Email : info@oakyweb.com
                    </p>
                </div>
            </div>


        </div>



        <form method="post" id="enquiryForm"
            class="w-full h-full flex flex-col  px-2 md:px-12 xl:px-[82px] mt-6">

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 w-full gap-6">

                <!-- Name -->
                <div>
                    <input id="name" type="text" placeholder="Enter your name" class="w-full py-3 xl:py-4 px-4 border border-[#6f6e6e] focus:outline-none focus:ring-2 focus:ring-[#ffda31] " required name="name" />
                    <!-- <span class="error-text"></span> -->
                </div>

                <!-- Phone -->
                <div>
                    <input id="phone" type="tel" placeholder="Enter Your Phone number"
                        required name="phone"
                        oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                        class="w-full py-3 xl:py-4 px-4 border border-[#6f6e6e] focus:outline-none focus:ring-2 focus:ring-[#ffda31] " />

                    <!-- <span class="error-text"></span> -->
                </div>

                <!-- Email -->
                <div>
                    <input id="email" type="email" placeholder="Enter your email ID" required name="email"
                        class="w-full py-3 px-4 xl:py-4 border border-[#6f6e6e] focus:outline-none focus:ring-2 focus:ring-[#ffda31] " />
                    <!-- <span class="error-text"></span> -->
                </div>

                <!-- Budget -->
                <div class="relative flex w-full ">
                    <select id="budget" required name="budget"
                        class="w-full py-3 xl:py-4 px-4 border border-[#6f6e6e] focus:outline-none focus:ring-2 focus:ring-[#ffda31] appearance-none invalid:text-gray-400">
                        <option value="" disabled selected>Select your budget</option>
                        <option value="< $5,000">
                            < $5,000</option>
                        <option value="$5,000 - $10,000">$5,000 - $10,000</option>
                        <option value="> $10,000">> $10,000</option>
                    </select>
                    <svg class="pointer-events-none w-5 h-5 text-black absolute right-3 top-1/2 -translate-y-1/2"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                    <span class="error-text"></span>
                </div>

                <!-- Duration -->
                <div class="relative flex w-full">
                    <select id="duration" required name="duration"
                        class="w-full py-3 xl:py-4 px-4 border border-[#6f6e6e] focus:outline-none focus:ring-2 focus:ring-[#ffda31]  appearance-none invalid:text-gray-400">
                        <option value="" disabled selected>When you want to start*</option>
                        <option value="immediately">Immediately</option>
                        <option value="1month">Within 1 month</option>
                        <option value="3months">Within 3 months</option>
                    </select>
                    <svg class="pointer-events-none w-5 h-5 text-black absolute right-3 top-1/2 -translate-y-1/2"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                    <span class="error-text"></span>
                </div>

                <!-- Hear About -->
                <div class="relative w-full flex">
                    <select id="hear_about" required name="hear_about"
                        class="w-full py-3 xl:py-4 px-4 border border-[#6f6e6e] focus:outline-none focus:ring-2 focus:ring-[#ffda31]  appearance-none invalid:text-gray-400">
                        <option value="" disabled selected>How did you hear about us*</option>
                        <option value="google">Google</option>
                        <option value="social">Social Media</option>
                        <option value="friend">Friend / Referral</option>
                    </select>
                    <svg class="pointer-events-none w-5 h-5 text-black absolute right-3 top-1/2 -translate-y-1/2"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                    <span class="error-text"></span>
                </div>

            </div>

            <!-- Message -->
            <div class="w-full h-full mt-6">
                <textarea id="message" placeholder="About the project*" name="message"
                    class="w-full py-3 px-4 border border-[#6f6e6e] focus:outline-none focus:ring-2 focus:ring-[#ffda31] resize-none" rows="5"
                    required></textarea>
                <span class="error-text"></span>
            </div>

            <div class="flex justify-between mb-2 lg:mb-6 w-full">

                <div class="flex flex-col items-start justify-start gap-2 w-fit">
                    <!-- reCAPTCHA -->
                    <div class="flex w-fit h-fit">
                        <div class="g-recaptcha" id="recaptcha" data-sitekey="6LdQYVYqAAAAAGH1erJC7aUcrCa6D7ZYWtYgacZK">
                        </div>
                        <span class="error-text" id="recaptcha-error"></span>
                    </div>
                    <p class="text-[#BBBBBD] text-sm sm:text-base leading-relaxed">
                        By proceeding, you are agreeing to OakyWeb <span class="text-[#ffda31]"><a href="components/homeComp/privacy.php" target="_blank" rel="noopener">Privacy Policy</a></span> & communication.
                    </p>

                </div>

                <div class="flex flex-col items-start justify-start gap-6 w-fit">

                    <button type="submit" name="submit"
                        class="flex items-center justify-center bg-[#ffda31] text-black px-8 py-3 xl:py-4 xl:px-12 hover:bg-[#f5cb00] transition-all duration-300 gap-2 2xl:text-[21px]">
                        Send Enquiry
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                        </svg>
                    </button>

                </div>

            </div>

        </form>
    </div>
</section>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
    const phone = document.getElementById("phone");
    const phoneError = phone.parentElement.querySelector(".error-text");

    function showPhoneError(msg) {
        phoneError.textContent = msg;
        phoneError.classList.remove("hidden");
        phone.classList.add("border-red-500");
    }

    function clearPhoneError() {
        phoneError.textContent = "";
        phoneError.classList.add("hidden");
        phone.classList.remove("border-red-500");
    }


    // Toast notification function
    function showToast(message, type = 'success') {
        const toast = document.createElement('div');
        toast.className = `toast ${type}`;

        const icon = type === 'success' ?
            '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>' :
            type === 'error' ?
            '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>' :
            '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h23.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>';

        toast.innerHTML = `
                ${icon}
                <span>${message}</span>
            `;

        document.body.appendChild(toast);

        setTimeout(() => {
            toast.classList.add('hiding');
            setTimeout(() => {
                document.body.removeChild(toast);
            }, 300);
        }, 4000);
    }

    const form = document.getElementById("enquiryForm");

    const fields = {
        name: {
            element: document.getElementById("name"),
            validate: val => val.trim().length >= 3,
            message: "Name must be at least 3 characters."
        },
        phone: {
            element: document.getElementById("phone"),
            validate: val => /^[0-9]{10}$/.test(val.replace(/\s/g, '')),
            message: "Phone number must be exactly 10 digits."
        },
        email: {
            element: document.getElementById("email"),
            validate: val => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(val),
            message: "Enter a valid email address."
        },
        budget: {
            element: document.getElementById("budget"),
            validate: val => val !== "",
            message: "Please select your budget."
        },
        duration: {
            element: document.getElementById("duration"),
            validate: val => val !== "",
            message: "Please select when you want to start."
        },
        hear_about: {
            element: document.getElementById("hear_about"),
            validate: val => val !== "",
            message: "Please tell us how you heard about us."
        },
        message: {
            element: document.getElementById("message"),
            validate: val => val.trim().length >= 20,
            message: "Message must be at least 20 characters."
        }
    };

    // Real-time validation on input
    Object.values(fields).forEach(({
        element,
        validate,
        message
    }) => {
        element.addEventListener("input", () => {
            const errorSpan = element.nextElementSibling;
            if (!validate(element.value)) {
                element.classList.add("input-error");
                errorSpan.textContent = message;
            } else {
                element.classList.remove("input-error");
                errorSpan.textContent = "";
            }
        });

        // Also validate on blur for better UX
        element.addEventListener("blur", () => {
            const errorSpan = element.nextElementSibling;
            if (element.value && !validate(element.value)) {
                element.classList.add("input-error");
                errorSpan.textContent = message;
            }
        });
    });

    // reCAPTCHA validation function
    function validateRecaptcha() {
        if (typeof grecaptcha === 'undefined') {
            return false;
        }

        const response = grecaptcha.getResponse();
        const errorSpan = document.getElementById("recaptcha-error");

        if (response.length === 0) {
            errorSpan.textContent = "Please verify you are not a robot.";
            return false;
        } else {
            errorSpan.textContent = "";
            return true;
        }
    }

    // Form submission - AB DATA SUBMIT HOGA
    form.addEventListener("submit", function(e) {
        let valid = true;
        let firstErrorField = null;

        // Validate all fields
        Object.values(fields).forEach(({
            element,
            validate,
            message
        }) => {
            const errorSpan = element.nextElementSibling;
            if (!validate(element.value)) {
                element.classList.add("input-error");
                errorSpan.textContent = message;
                valid = false;
                if (!firstErrorField) {
                    firstErrorField = element;
                }
            } else {
                element.classList.remove("input-error");
                errorSpan.textContent = "";
            }
        });

        // Validate reCAPTCHA
        if (!validateRecaptcha()) {
            e.preventDefault();
            valid = false;
            showToast('Please complete the reCAPTCHA verification.', 'warning');
        }

    });
</script>


<section class="contain2 mt-12">
    <div class="relative contain  flex justify-center items-center z-10 ">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.788347426561!2d77.28021087987946!3d28.636104876968098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfca97021412b%3A0xc0a5baada1a7e8f3!2sVijay%20Block%2C%20Laxmi%20Nagar%2C%20Delhi%2C%20110092!5e0!3m2!1sen!2sin!4v1762953592513!5m2!1sen!2sin"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>

    </div>

    <div class="lg:mt-[-12%]">
        <img src="assets/contactus_page.png" alt="Experienced leadership team of Oakyweb for website development and digital marketing services">
    </div>
</section>


<!-- footer -->
<?php include("components/footer.php") ?>





<?php
if (isset($_POST['submit'])) {
    // Sanitize inputs
    $name = trim(htmlspecialchars($_POST['name']));
    $phone = trim($_POST['phone']);
    $email = trim($_POST['email']);
    $budget = trim($_POST['budget']);
    $duration = trim($_POST['duration']);
    $hear_about = trim($_POST['hear_about']);
    $message = trim(htmlspecialchars($_POST['message']));
    $created_at = date('Y-m-d H:i:s');
    $errors = [];
    $recaptcha_secret = '6LdQYVYqAAAAAM_1MtPnkAcybtgZo5Qsx5Jj653g';


    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }


    if (empty($_POST['g-recaptcha-response'])) {
        $errors[] = "Please complete the reCAPTCHA.";
    } else {
        $recaptcha_response = $_POST['g-recaptcha-response'];


        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
            'secret' => $recaptcha_secret,
            'response' => $recaptcha_response,
            'remoteip' => $_SERVER['REMOTE_ADDR']
        ]));

        $verify = curl_exec($ch);
        curl_close($ch);
        $captcha_success = json_decode($verify);

        if (!$captcha_success || empty($captcha_success->success) || $captcha_success->success !== true) {
            $errors[] = "reCAPTCHA verification failed.";
        }
    }


    if (!empty($errors)) {
        echo "<script>
                showToast('" . implode(', ', $errors) . "', 'error');
                setTimeout(() => { window.location.href = 'contact-us.php'; }, 3000);
              </script>";
        exit;
    }


    $stmt = $conn->prepare("INSERT INTO contact (name, email, phone, message, budget, duration, hear_about,created_at) VALUES (?, ?, ?, ?, ?, ?, ?,?)");
    $stmt->bind_param("ssssssss", $name, $email, $phone, $message, $budget, $duration, $hear_about, $created_at);

    if ($stmt->execute()) {
        echo "<script>
                showToast('Your message has been sent successfully.');
                setTimeout(() => { window.location.href = 'contact-us.php'; }, 3000);
              </script>";
    } else {
        echo "<script>
                showToast('Something went wrong. Please try again later.', 'error');
                setTimeout(() => { window.location.href = 'contact-us.php'; }, 3000);
              </script>";
    }

    $stmt->close();
    $conn->close();
}
?>