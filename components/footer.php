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
<script>
    function showToast(message, type = 'success') {
        const toast = document.createElement('div');
        toast.className = `toast ${type}`;

        const icon = type === 'success' ?
            '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>' :
            type === 'error' ?
            '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>' :
            '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>';

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
</script>



<!-- main footer -->
<section class="contain2 bg-black text-white paddingy" id="contact-us">
    <div class="contain">

        <div class="flex flex-col lg:flex-row lg:justify-between">
            <!-- Left Heading -->
            <div class="">
                <h2
                    class="text-manually-footer leading-tight font-medium ">
                    Curious?
                </h2>
                <h2 class="mt-1 text-44 leading-none font-medium text-secondary lg:tracking-tighter">
                    We Turn Questions into Smart <span class="font-extrabold text-primary"> Solutions.</span>
                </h2>
            </div>


            <!-- Right Social Icons  -->
            <div class="flex items-center justify-center gap-6 mt-6 lg:mt-0">

                <a href="https://www.linkedin.com/company/oakyweb/" target="_blank" rel="noopener noreferrer"
                    class="bg-white text-black p-2  w-6 h-6 xl:w-7 xl:h-7 flex items-center justify-center aspect-square rounded-[4px] transition-all hover:bg-[#ffc835]">
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>

                <a href="https://www.facebook.com/OakyWeb/" target="_blank" rel="noopener noreferrer"
                    class="bg-white text-black p-2  w-6 h-6 xl:w-7 xl:h-7 flex items-center justify-center aspect-square rounded-[4px] transition-all hover:bg-[#ffc835]">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>

                <a href="https://www.instagram.com/oaky_web/" target="_blank" rel="noopener noreferrer"
                    class="bg-white text-black p-2  w-6 h-6 xl:w-7 xl:h-7 flex items-center justify-center aspect-square rounded-[4px] transition-all hover:bg-[#ffc835]">
                    <i class=" fa-brands fa-instagram"></i>
                </a>

                <a href="https://twitter.com/oakyweb" target="_blank" rel="noopener noreferrer"
                    class="bg-white text-black p-2  w-6 h-6 xl:w-7 xl:h-7 flex items-center justify-center aspect-square rounded-[4px] transition-all hover:bg-[#ffc835]">
                    <i class="fa-brands fa-x-twitter"></i>
                </a>
            </div>

        </div>


        <section class="w-full paddingy pb-0">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-6">

                <!-- Column 1 -->
                <div class="text-24 ">

                    <ul id="responsive-menu" class="flex flex-col gap-2 xl:gap-3"></ul>

                    <script>
                        function createMenuLink(text, link1) {
                            return `
                                    <li>
                                        <a href="${link1}" class="relative font-medium link-funderline">
                                            ${text}
                                        </a>
                                    </li>
                                `;
                        }

                        const menuItems = [{
                                text: "Home",
                                link1: "./"
                            },
                            {
                                text: "About",
                                link1: "about-us.html"
                            },
                            {
                                text: "Portfolio",
                                link1: "#"
                            },
                            {
                                text: "Careers",
                                link1: "#"
                            },
                            {
                                text: "Contact us",
                                link1: "contact-us.html"
                            }
                        ];

                        document.getElementById("responsive-menu").innerHTML =
                            menuItems.map(item => createMenuLink(item.text, item.link1)).join("");
                    </script>

                </div>


                <!-- Column 2 -->
                <div class="text-18  mt-4 md:mt-0 text-[#64748b]">

                    <ul id="industry-list" class="space-y-2 xl:space-y-3"></ul>

                    <script>
                        function createIndustryItem(text2, link) {
                            return `
                            <li>
                                    <a href="${link}"
                                        class="relative link-funderline font-medium">
                                                ${text2}
                                    </a>
                                </li>
                                `;
                        }

                        const industries = [{
                                text2: "Custom Software Solutions",
                                link1: "custom-software-solution.html"
                            },
                            {
                                text2: "Mobile App Development",
                                link1: "mobile-application.html"
                            },
                            {
                                text2: "Website Development",
                                link1: "web-design-development.html"
                            },
                            {
                                text2: "E-Commerce Solutions",
                                link1: "e-commerce-solution.html"
                            },
                            {
                                text2: "UI & UX Design",
                                link1: "ui-ux-design.html"
                            },
                            {
                                text2: "Digital Marketing",
                                link1: "social-media.html"
                            },
                            {
                                text2: "Cloud & DevOps",
                                link1: "web-hosting.html"
                            },
                            {
                                text2: "OEE Dashboard",
                                link1: "oee-dashboard.html"
                            },
                        ];

                        document.getElementById("industry-list").innerHTML =
                            industries.map(item => createIndustryItem(item.text2, item.link1)).join("");
                    </script>
                </div>


                <!-- Column 3 -->

                <div class="flex flex-col gap-2 items-start mt-4 md:mt-0">

                    <div class="">
                        <img src="assets/icons/f-review-4.png" alt="Google Review-img" />
                    </div>

                    <div class="flex items-start justify-start mt-4 xl:mt-8 gap-4">
                        <img src="./assets/icons/locationicon -yellow.svg" alt="location"
                            class="h-8 h-auto mt-1" />

                        <p class="text-18 xl:pr-16 text-[#64748b]">
                            Fourth Floor, Office No: 303, 32, Vijay Block, Laxmi Nagar,
                            New Delhi, Delhi, 110092
                        </p>
                    </div>

                </div>



                <!-- Column 4 -->
                <form method="post">
                    <div class="flex flex-col gap-4 xl:gap-6 mt-4 md:mt-0"
                        id="contact">

                        <p class="text-22 font-medium">Contact Us</p>

                        <input type="text" placeholder="Your Name*" name="name" required
                            class="w-full px-3 py-2 text-16 border border-gray-800 bg-[#0D0D0D] focus:outline-none focus:border-gray-400 text-white placeholder-[#64748b]">

                        <input type="email" placeholder="Enter Your Email ID*" required"
                            class="w-full px-3 py-2 text-16 border border-gray-800 bg-[#0D0D0D] focus:outline-none focus:border-gray-400 text-white placeholder-[#64748b]">

                        <textarea placeholder="Your Message*" rows="2" required
                            class="w-full px-3 py-2 text-16 border border-gray-800 bg-[#0D0D0D] focus:outline-none focus:border-gray-400 text-white placeholder-[#64748b] resize-none"></textarea>


                        <button type="submit" name="subscribe"
                            class="w-full py-3 flex items-center justify-center gap-2 bg-primary font-medium text-black group hover:bg-white text-16">
                            Send Message
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-3 h-3 xl:w-4 xl:h-4 arrow-move">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                            </svg>
                        </button>
                    </div>
                </form>

            </div>
        </section>

    </div>
</section>


<!-- below footer-->
<section class=" bg-primary text-black contain2 py-4">
    <div class="contain">

        <div class="flex flex-col lg:flex-row justify-between lg:items-center w-full text-[12px] xl:text-[14px]">

            <!-- Left: Logo + Info -->
            <div class="flex flex-col xl:flex-row lg:flex-col gap-6 xl:gap-10 2xl:gap-20">

                <div class="flex items-center  ">
                    <div class="border-r border-white pr-4">
                        <img src="assets/logo-black.png" alt="OakyWeb" class="h-12">
                    </div>
                    <p class="pl-4">Better IT Future <br> Together.</p>
                </div>


                <!-- Info text -->
                <div class="flex ">

                    <div class="flex flex-col sm:flex-row gap-4 xl:gap-2 2xl:gap-4 sm:items-center">
                        <p><a href="privacy.html" target="_blank" rel="noopener">Privacy Policy</a></p>
                        <span class="e mx-1 hidden sm:block">•</span>
                        <p>ISO 9001 : 2015 Certified</p>
                        <span class=" mx-1 hidden sm:block">•</span>
                        <p>CIN: U74999DL2017PTC320820</p>
                    </div>

                </div>
            </div>

            <!-- Right: Copyright -->
            <div class="mt-4 lg:mt-0">
                Copyright @ 2025 Oakyweb. All rights reserved.
            </div>

        </div>

    </div>
</section>




<script src="script79.js"></script>

</html>

<?php
date_default_timezone_set('Asia/Kolkata');
include("db_config.php");

if (isset($_POST['subscribe'])) {

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $created_at = date('Y-m-d H:i:s');

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>
                showToast('Invalid email address.', 'error');
                setTimeout(() => { window.location.href = './'; }, 3000);
              </script>";
        exit;
    }


    $checkStmt = $conn->prepare("SELECT id FROM subscribe WHERE email = ? LIMIT 1");
    $checkStmt->bind_param("s", $email);
    $checkStmt->execute();
    $checkStmt->store_result();

    if ($checkStmt->num_rows > 0) {

        echo "<script>
                showToast('This email is already subscribed.', 'error');
                setTimeout(() => { window.location.href = './'; }, 3000);
              </script>";
    } else {

        $insertStmt = $conn->prepare("INSERT INTO subscribe (name, email, create_at) VALUES (?, ?, ?)");
        $insertStmt->bind_param("sss", $name, $email, $created_at);


        if ($insertStmt->execute()) {
            echo "<script>
                    showToast('Subscribed to newsletter successfully.');
                    setTimeout(() => { window.location.href = './'; }, 3000);
                  </script>";
        } else {
            echo "<script>
                    showToast('Something went wrong. Please try again later.', 'error');
                    setTimeout(() => { window.location.href = './'; }, 3000);
                  </script>";
        }

        $insertStmt->close();
    }

    $checkStmt->close();
    $conn->close();
}
?>