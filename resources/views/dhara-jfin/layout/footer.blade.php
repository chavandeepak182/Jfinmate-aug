
<footer class="jfin-footer">

    <div class="jfin-footer-container">

        <!-- Column 1: Logo, Description and Social Media -->
        <div class="jfin-footer-about">

            <div class="jfin-footer-logo">
                <img src="{{ asset('theme/dhara-jfin/img/logo.jpg') }}"
                     alt="JFinserv Logo">
            </div>

            <p class="jfin-footer-description">
                Jfinserv is a leading financial services provider in Pune and
                PCMC, offering a wide range of loan products with transparency
                and trust.
            </p>

            <!-- Social Media Links -->
            <div class="jfin-footer-social">

                <a href="https://www.facebook.com/profile.php?id=61563098494542"
                   target="_blank"
                   rel="noopener noreferrer"
                   aria-label="Facebook"
                   class="social-facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>

                <!-- <a href="https://x.com/"
                   target="_blank"
                   rel="noopener noreferrer"
                   aria-label="X"
                   class="social-x">
                    <i class="fa-brands fa-x-twitter"></i>
                </a> -->

                <a href="https://www.instagram.com/jfinserv_consultant"
                   target="_blank"
                   rel="noopener noreferrer"
                   aria-label="Instagram"
                   class="social-instagram">
                    <i class="fab fa-instagram"></i>
                </a>

                <a href="https://www.linkedin.com/company/jfinserv-consultant-india-private-limited"
                   target="_blank"
                   rel="noopener noreferrer"
                   aria-label="LinkedIn"
                   class="social-linkedin">
                    <i class="fab fa-linkedin-in"></i>
                </a>

                <a href="https://wa.me/917387465783"
                   target="_blank"
                   rel="noopener noreferrer"
                   aria-label="WhatsApp"
                   class="social-whatsapp">
                    <i class="fab fa-whatsapp"></i>
                </a>

            </div>
        </div>


        <!-- Column 2: Useful Links -->
        <div class="jfin-footer-links">

            <h4>Useful Links</h4>

            <ul>
                <li>
                    <a href="{{ url('/') }}">Home</a>
                </li>

                <li>
                    <a href="{{ url('/about') }}">About Us</a>
                </li>

                <li>
                    <a href="{{ url('/refer-earn') }}">Refer &amp; Earn</a>
                </li>

                <li>
                    <a href="{{ url('/properties') }}">Properties</a>
                </li>

                <li>
                    <a href="{{ url('/eligibility-calculator') }}">Calculator</a>
                </li>

                <li>
                    <a href="{{ url('/contact') }}">Contact</a>
                </li>
            </ul>

        </div>


        <!-- Column 3: Services -->
        <div class="jfin-footer-links">

            <h4>Services</h4>

            <ul>
                <li>
                    <a href="{{ url('/home-loan') }}">Home Loan</a>
                </li>

                <li>
                    <a href="{{ url('/project-loan') }}">Project Loan</a>
                </li>

                <li>
                    <a href="{{ url('/loan-against-property') }}">
                        Loan Against Property
                    </a>
                </li>

                <li>
                    <a href="{{ url('/msme-loan') }}">MSME Loan</a>
                </li>

                <li>
                    <a href="{{ url('/overdraft-facility') }}">
                        Overdraft Facility
                    </a>
                </li>

                <li>
                    <a href="{{ url('/lease-rental-discounting') }}">
                        Lease Rental Discounting
                    </a>
                </li>
            </ul>

        </div>


        <!-- Column 4: Contact Details -->
        <div class="jfin-footer-contact">

            <h4>Reach Us</h4>

            <!-- Office Address -->
            <div class="jfin-contact-item">

                <div class="jfin-contact-icon address-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>

                <p>
                    Office No. 101, Sterling Centre, MG Road,
                    Camp, Pune, Maharashtra 411001.
                </p>

            </div>


            <!-- Email Address -->
            <div class="jfin-contact-item">

                <div class="jfin-contact-icon email-icon">
                    <i class="fas fa-envelope"></i>
                </div>

                <a href="mailto:contact@jfinserv.com">
                    contact@jfinserv.com
                </a>

            </div>


            <!-- Phone Number -->
            <div class="jfin-contact-item">

                <div class="jfin-contact-icon phone-icon">
                    <i class="fas fa-phone-alt"></i>
                </div>

                <a href="tel:+917387465783">
                    +91 73874 65783
                </a>

            </div>

        </div>

    </div>


    <!-- Footer Bottom: Copyright and Legal Links -->
    <div class="jfin-footer-bottom">

        <div class="jfin-footer-bottom-container">

            <p>
                &copy; {{ date('Y') }} Jfinserv. All rights reserved.
            </p>

            <div class="jfin-footer-legal">

                <a href="{{ url('/privacy-policy') }}">
                    Privacy Policy
                </a>

                <a href="{{ url('/terms-and-conditions') }}">
                    Terms &amp; Conditions
                </a>

            </div>

        </div>

    </div>


    <!-- Back to Top Button -->
    <a href="#"
       class="jfin-back-to-top"
       aria-label="Back to top">
        <i class="fas fa-arrow-up"></i>
    </a>

</footer>


<!-- Font Awesome -->
<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">


<style>

/* =========================================
   MAIN FOOTER
========================================= */

.jfin-footer {
    width: 100%;
    margin: 0;
    padding: 0;
    background: #ffffff;
    color: #555555;
    font-family: Arial, Helvetica, sans-serif;
    border-top: 1px solid #eeeeee;
    position: relative;
    overflow: hidden;
}

.jfin-footer,
.jfin-footer * {
    box-sizing: border-box;
}


/* =========================================
   FOUR-COLUMN LAYOUT
========================================= */

.jfin-footer-container {
    width: 100%;
    max-width: 1440px;
    margin: 0 auto;
    padding: 66px 39px 59px;
    display: grid;
    grid-template-columns: 1.65fr 0.82fr 1.02fr 1.38fr;
    column-gap: 32px;
    align-items: start;
}


/* =========================================
   LOGO AND DESCRIPTION
========================================= */

.jfin-footer-about {
    min-width: 0;
}

.jfin-footer-logo {
    height: 40px;
    display: flex;
    align-items: center;
    margin-bottom: 28px;
}

.jfin-footer-logo img {
    display: block;
    width: 209px;
    max-width: 100%;
    height: auto;
    max-height: 42px;
    object-fit: contain;
    object-position: left center;
}

.jfin-footer-description {
    max-width: 365px;
    margin: 0;
    color: #666666;
    font-size: 16px;
    font-weight: 400;
    line-height: 1.45;
}


/* =========================================
   FULL-COLOUR SOCIAL MEDIA ICONS
========================================= */

.jfin-footer-social {
    display: flex;
    align-items: center;
    gap: 30px;
    margin-top: 38px;
    padding-left: 7px;
    flex-wrap: wrap;
}

.jfin-footer-social a {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 25px;
    height: 28px;
    font-size: 24px;
    line-height: 1;
    text-decoration: none;
    transition: transform 0.25s ease, opacity 0.25s ease;
}

.jfin-footer-social a:hover {
    transform: translateY(-3px);
    opacity: 0.8;
}

/* Facebook */

.jfin-footer-social .social-facebook {
    color: #1877F2;
}

/* X */

.jfin-footer-social .social-x {
    color: #000000;
}

/* Instagram */

.jfin-footer-social .social-instagram {
    color: #E4405F;
}

/* LinkedIn */

.jfin-footer-social .social-linkedin {
    color: #0A66C2;
}

/* WhatsApp */

.jfin-footer-social .social-whatsapp {
    color: #25D366;
}


/* =========================================
   COLUMN HEADINGS
========================================= */

.jfin-footer-container h4 {
    margin: 0 0 25px;
    padding: 0;
    color: #295cab;
    font-size: 18px;
    line-height: 1.3;
    font-weight: 600;
}


/* =========================================
   USEFUL LINKS AND SERVICES
========================================= */

.jfin-footer-links {
    min-width: 0;
}

.jfin-footer-links ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.jfin-footer-links ul li {
    padding: 0;
    margin: 0 0 15px;
    line-height: 1.35;
}

.jfin-footer-links ul li:last-child {
    margin-bottom: 0;
}

.jfin-footer-links ul li a {
    color: #666666;
    font-size: 16px;
    font-weight: 400;
    text-decoration: none;
    transition: color 0.2s ease;
}

.jfin-footer-links ul li a:hover {
    color: #00a9e8;
}


/* =========================================
   CONTACT DETAILS
========================================= */

.jfin-footer-contact {
    min-width: 0;
}

.jfin-contact-item {
    display: flex;
    align-items: center;
    gap: 16px;
    margin-bottom: 18px;
}

.jfin-contact-item:last-child {
    margin-bottom: 0;
}

.jfin-contact-icon {
    flex: 0 0 43px;
    width: 43px;
    height: 43px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #00abe90d;
    border-radius: 4px;
    font-size: 17px;
    transition: background 0.25s ease;
}

/* Address Icon */

.jfin-contact-icon.address-icon {
    color: #295cab;
}

/* Email Icon */

.jfin-contact-icon.email-icon {
    color: #295cab;
}

/* Phone Icon */

.jfin-contact-icon.phone-icon {
    color: #295cab;
}

.jfin-contact-item p {
    margin: 0;
    padding: 0;
    color: #666666;
    font-size: 16px;
    font-weight: 400;
    line-height: 1.35;
}

.jfin-contact-item > a {
    color: #666666;
    font-size: 16px;
    line-height: 1.4;
    font-weight: 400;
    text-decoration: none;
    overflow-wrap: anywhere;
    transition: color 0.2s ease;
}

.jfin-contact-item > a:hover {
    color: #00a9e8;
}


/* =========================================
   FOOTER BOTTOM
========================================= */

.jfin-footer-bottom {
    width: 100%;
    background: #235097;
    padding: 16px 39px;
}

.jfin-footer-bottom-container {
    max-width: 1362px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
}

.jfin-footer-bottom-container p {
    margin: 0;
    padding: 0;
    color: #ffffff;
    font-size: 13px;
    line-height: 1.5;
}

.jfin-footer-legal {
    display: flex;
    align-items: center;
    gap: 24px;
    flex-wrap: wrap;
}

.jfin-footer-legal a {
    color: #ffffff;
    font-size: 13px;
    text-decoration: none;
    transition: opacity 0.2s ease;
}

.jfin-footer-legal a:hover {
    opacity: 0.75;
}


/* =========================================
   BACK TO TOP BUTTON
========================================= */

.jfin-back-to-top {
    position: fixed;
    right: 22px;
    bottom: 22px;
    width: 44px;
    height: 44px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #295cab;
    color: #ffffff;
    font-size: 17px;
    text-decoration: none;
    border-radius: 5px;
    box-shadow: 0 3px 12px rgba(0, 0, 0, 0.15);
    opacity: 0;
    visibility: hidden;
    pointer-events: none;
    transform: translateY(10px);
    transition: all 0.3s ease;
    z-index: 999;
}

.jfin-back-to-top.show {
    opacity: 1;
    visibility: visible;
    pointer-events: auto;
    transform: translateY(0);
}

.jfin-back-to-top:hover {
    background: #00a9e8;
    color: #ffffff;
}


/* =========================================
   TABLET RESPONSIVE
========================================= */

@media (max-width: 1024px) {

    .jfin-footer-container {
        padding: 50px 28px;
        grid-template-columns: 1.3fr 1fr;
        column-gap: 45px;
        row-gap: 42px;
    }

    .jfin-footer-description {
        max-width: 390px;
    }

    .jfin-footer-social {
        gap: 25px;
        margin-top: 28px;
    }

    .jfin-footer-contact {
        max-width: 380px;
    }

    .jfin-footer-bottom {
        padding: 16px 28px;
    }
}


/* =========================================
   MOBILE RESPONSIVE
========================================= */

@media (max-width: 600px) {

    .jfin-footer-container {
        padding: 38px 22px 35px;
        grid-template-columns: 1fr;
        gap: 32px;
    }

    .jfin-footer-logo {
        margin-bottom: 20px;
    }

    .jfin-footer-logo img {
        width: 145px;
    }

    .jfin-footer-description {
        max-width: 100%;
        font-size: 14px;
        line-height: 1.65;
    }

    .jfin-footer-social {
        gap: 25px;
        margin-top: 24px;
        padding-left: 0;
    }

    .jfin-footer-social a {
        font-size: 23px;
    }

    .jfin-footer-container h4 {
        font-size: 17px;
        margin-bottom: 20px;
    }

    .jfin-footer-links ul li {
        margin-bottom: 15px;
    }

    .jfin-footer-links ul li a {
        font-size: 14px;
    }

    .jfin-contact-item {
        gap: 13px;
        align-items: center;
        margin-bottom: 16px;
    }

    .jfin-contact-icon {
        flex-basis: 42px;
        width: 42px;
        height: 42px;
    }

    .jfin-contact-item p,
    .jfin-contact-item > a {
        font-size: 13px;
        line-height: 1.6;
    }

    .jfin-footer-bottom {
        padding: 18px 22px;
    }

    .jfin-footer-bottom-container {
        flex-direction: column;
        align-items: flex-start;
        gap: 12px;
    }

    .jfin-footer-legal {
        gap: 18px;
    }

    .jfin-footer-bottom-container p,
    .jfin-footer-legal a {
        font-size: 12px;
    }

    .jfin-back-to-top {
        right: 15px;
        bottom: 15px;
        width: 40px;
        height: 40px;
    }
}


/* =========================================
   SMALL MOBILE
========================================= */

@media (max-width: 360px) {

    .jfin-footer-container {
        padding-left: 16px;
        padding-right: 16px;
    }

    .jfin-footer-social {
        gap: 21px;
    }

    .jfin-contact-item {
        gap: 10px;
    }

    .jfin-footer-bottom {
        padding-left: 16px;
        padding-right: 16px;
    }

    .jfin-footer-legal {
        gap: 12px;
    }
}

</style>


<script>
document.addEventListener('DOMContentLoaded', function () {

    const backToTop = document.querySelector('.jfin-back-to-top');

    if (!backToTop) {
        return;
    }

    function updateBackToTop() {
        if (
            window.scrollY > 300 &&
            !document.body.classList.contains('menu-open')
        ) {
            backToTop.classList.add('show');
        } else {
            backToTop.classList.remove('show');
        }
    }

    window.addEventListener('scroll', updateBackToTop);

    backToTop.addEventListener('click', function (event) {
        event.preventDefault();

        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    updateBackToTop();

});
</script>
