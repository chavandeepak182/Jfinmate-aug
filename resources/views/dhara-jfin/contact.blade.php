{{-- SEO META DATA FOR CONTACT PAGE --}}
@section('title', 'Loan & Financial Services Enquiry | loan consultant in pune')
@section('meta_description', 'Get in touch with JFinserve for loan enquiries and financial services. Connect with our team for business loans, home loans, property financing and funding solutions.')
@section('meta_keywords', 'Loan Services, Loan Enquiry, JFSL Customer Support, Loan Consultant in Pune, Business Loans, Home Loans, Property Financing, Funding Solutions')

@section('content')
@push('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "ContactPage",
      "@id": "https://jfinserv.com/contact#webpage",
      "url": "https://jfinserv.com/contact",
      "name": "Contact JF Finserve | Financial Services",
      "description": "Contact JF Finserve for assistance with home loans, loans against property, project finance, MSME loans, overdraft facilities and lease rental discounting. Connect with our team for financial guidance and loan assistance.",
      "inLanguage": "en-IN",
      "isPartOf": {
        "@id": "https://jfinserv.com/#website"
      },
      "about": {
        "@id": "https://jfinserv.com/#organization"
      },
      "mainEntity": {
        "@id": "https://jfinserv.com/#organization"
      },
      "breadcrumb": {
        "@id": "https://jfinserv.com/contact#breadcrumb"
      }
    },
    {
      "@type": "Organization",
      "@id": "https://jfinserv.com/#organization",
      "name": "JF Finserve",
      "legalName": "Jfinserv Consultant India Private Limited",
      "url": "https://jfinserv.com/",
      "email": "contact@jfinserv.com",
      "telephone": "+91-73874-65783",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Office No. 423, Sterling Centre, MG Road, Camp",
        "addressLocality": "Pune",
        "addressRegion": "Maharashtra",
        "postalCode": "411001",
        "addressCountry": "IN"
      },
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+91-73874-65783",
        "email": "contact@jfinserv.com",
        "contactType": "customer service",
        "areaServed": "IN",
        "availableLanguage": [
          "English",
          "Hindi",
          "Marathi"
        ]
      }
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://jfinserv.com/contact#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://jfinserv.com/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Contact Us",
          "item": "https://jfinserv.com/contact"
        }
      ]
    }
  ]
}
</script>
@endpush
@include('dhara-jfin.layout.header')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<main>

    <!-- =====================================================
         PAGE BANNER
    ====================================================== -->
```html
<section class="jfinHero contactHero" id="home">

    <div class="jfinHeroSlider">

        <div class="jfinHeroSlide jfinHeroSlideActive"
             style="background-image: url('{{ asset('theme/dhara-jfin/img/contact_page.png') }}');">

            <div class="jfinHeroContent">

                <div class="jfinHeroText">

                    <h1 class="jfinHeroTitle">
                        We are here to
                        <span>help you Move <br>Forward</span>
                    </h1>

                    <p class="jfinHeroDescription">
                        Get in touch for loan details, finance assistance <br>or any other queries.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<style>
/* Contact Hero Heading */
section.jfinHero.contactHero#home .jfinHeroContent .jfinHeroText h1.jfinHeroTitle,
section.jfinHero.contactHero#home .jfinHeroContent .jfinHeroText h1.jfinHeroTitle span {
    color: #000 !important;
    -webkit-text-fill-color: #000 !important;
    opacity: 1 !important;
    visibility: visible !important;
}

/* Contact Hero Paragraph */
section.jfinHero.contactHero#home .jfinHeroContent .jfinHeroText p.jfinHeroDescription {
    color: #000 !important;
    -webkit-text-fill-color: #000 !important;
    opacity: 1 !important;
    visibility: visible !important;
}

/* Ensure text is visible above background */
section.jfinHero.contactHero#home .jfinHeroText {
    position: relative;
    z-index: 10;
}
</style>



    
<style>
/* ===============================
   CONTACT SECTION
================================ */

.jfin-contact {
    width: 100%;
    padding: 50px 25px 55px;
    background: #f9fbfd;
    font-family: Arial, Helvetica, sans-serif;
    box-sizing: border-box;
}

.jfin-contact *,
.jfin-contact *::before,
.jfin-contact *::after {
    box-sizing: border-box;
}

.jfin-contact-container {
    max-width: 1100px;
    width: 100%;
    margin: 0 auto;
    display: grid;
    grid-template-columns: minmax(0, 1.65fr) minmax(280px, 0.95fr);
    gap: 65px;
    align-items: start;
}

/* LEFT INFO GRID */

.jfin-contact-info-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 16px;
    margin-bottom: 14px;
}

.jfin-contact-info-card {
    min-height: 90px;
    padding: 15px 16px;
    border: 1px solid #e2e2e2;
    border-radius: 10px;
    background: #fff;
    transition: box-shadow 0.25s ease;
}

.jfin-contact-info-card:hover {
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.06);
}

.jfin-contact-info-card h4 {
    display: flex;
    align-items: center;
    gap: 9px;
    margin: 0 0 8px;
    color: #424242;
    font-size: 18px;
    font-weight: 600;
}

.jfin-contact-info-card h4 i {
    font-size: 15px;
    color: #4c4c4c;
}

.jfin-contact-info-card p {
    margin: 0;
    color: #666;
    font-size: 14px;
    line-height: 1.65;
    overflow-wrap: anywhere;
}

.jfin-contact-info-card a {
    color: inherit;
    text-decoration: none;
}

.jfin-contact-info-card a:hover {
    color: #2870e8;
}

/* MAP */

.jfin-contact-map {
    width: 100%;
    height: 269px;
    overflow: hidden;
    border-radius: 10px;
    border: 1px solid #e1e5eb;
    background: #fff;
    margin-top: 14px;
}

.jfin-contact-map iframe {
    display: block;
    width: 100%;
    height: 100%;
    border: 0;
}

/* SOCIAL MEDIA */

.jfin-contact-social {
    min-height: 40px;
    display: flex;
    align-items: center;
    gap: 26px;
    flex-wrap: wrap;
    padding: 10px 12px;
    margin-top: 14px;
    border-radius: 9px;
    background: #fff;
}

.jfin-contact-social strong {
    margin-right: 3px;
    color: #444;
    font-size: 14px;
    font-weight: 700;
}

.jfin-contact-social a {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 25px;
    text-decoration: none;
}

.jfin-contact-social a:nth-of-type(1) {
    color: #1877f2;
}

.jfin-contact-social a:nth-of-type(2) {
    color: #1da1f2;
}

.jfin-contact-social a:nth-of-type(3) {
    color: #0a66c2;
}

.jfin-contact-social a:nth-of-type(4) {
    color: #e4405f;
}

/* CONTACT FORM CARD */

.jfin-contact-form-card {
    width: 142%;
    padding: 20px 17px 17px;
    border-radius: 13px;
    background: #fff;
    border: 1px solid #edf3f5;
    box-shadow: 0 2px 9px rgba(34, 94, 105, 0.10);
}

.jfin-contact-form-card h3 {
    margin: 0 0 20px;
    color: #333;
    font-size: 14px;
    font-weight: 700;
}

.jfin-form-group {
    margin-bottom: 12px;
}

.jfin-form-group label {
    display: block;
    margin-bottom: 5px;
    color: #333;
    font-size: 14px;
    font-weight: 500;
}

.jfin-form-group input,
.jfin-form-group textarea {
    display: block;
    width: 100%;
    min-width: 0;
    padding: 10px;
    border: 1px solid #dedede;
    border-radius: 6px;
    outline: none;
    background: #fafafa;
    color: #333;
    font-family: inherit;
    font-size: 10px;
    transition: border-color 0.2s ease;
}

.jfin-form-group input {
    height: 35px;
}

.jfin-form-group textarea {
    height: 70px;
    resize: vertical;
}

.jfin-form-group input:focus,
.jfin-form-group textarea:focus {
    border-color: #2870e8;
    background: #fff;
}

.jfin-form-group input::placeholder,
.jfin-form-group textarea::placeholder {
    color: #999;
}

.jfin-contact-consent {
    display: flex;
    align-items: flex-start;
    gap: 8px;
    margin: 10px 0 14px;
}

.jfin-contact-consent input {
    width: 14px;
    height: 14px;
    flex-shrink: 0;
    margin: 2px 0 0;
    cursor: pointer;
    accent-color: #2870e8;
}

.jfin-contact-consent label {
    color: #777;
    font-size: 12px;
    line-height: 1.45;
    cursor: pointer;
}

.jfin-contact-submit {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    min-height: 34px;
    padding: 9px 15px;
    border: 0;
    border-radius: 5px;
    background: #2870e8;
    color: #fff;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    transition: background 0.2s ease;
}

.jfin-contact-submit:hover {
    background: #185bc8;
}

/* TABLET RESPONSIVE */

@media (max-width: 900px) {
    .jfin-contact-container {
        grid-template-columns: minmax(0, 1.2fr) minmax(260px, 0.9fr);
        gap: 25px;
    }

    .jfin-contact {
        padding: 40px 20px;
    }

    .jfin-contact-info-grid {
        gap: 12px;
    }
}

/* MOBILE RESPONSIVE */

@media (max-width: 650px) {
    .jfin-contact {
        padding: 30px 16px;
    }

    .jfin-contact-container {
        grid-template-columns: minmax(0, 1fr);
        gap: 25px;
    }

    .jfin-contact-info-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 10px;
    }

    .jfin-contact-info-card {
        min-height: 100px;
        padding: 13px 11px;
    }

    .jfin-contact-info-card h4 {
        gap: 6px;
        font-size: 12px;
    }

    .jfin-contact-info-card h4 i {
        font-size: 13px;
    }

    .jfin-contact-info-card p {
        font-size: 11px;
        line-height: 1.6;
    }

    .jfin-contact-map {
        height: 200px;
    }

    .jfin-contact-social {
        gap: 12px;
    }

    .jfin-contact-form-card {
        max-width: 100%;
        padding: 22px 18px;
    }

    .jfin-contact-form-card h3 {
        font-size: 17px;
        margin-bottom: 20px;
    }

    .jfin-form-group label {
        font-size: 12px;
    }

    .jfin-form-group input {
        height: 42px;
        font-size: 13px;
    }

    .jfin-form-group textarea {
        height: 100px;
        font-size: 13px;
    }

    .jfin-contact-consent label {
        font-size: 11px;
    }

    .jfin-contact-submit {
        min-height: 44px;
        font-size: 14px;
    }
}

/* SMALL MOBILE */

@media (max-width: 360px) {
    .jfin-contact-info-grid {
        grid-template-columns: minmax(0, 1fr);
    }

    .jfin-contact-info-card {
        min-height: auto;
    }

    .jfin-contact-social {
        gap: 10px;
    }
}</style>



<section class="jfin-contact">
    <div class="jfin-contact-container">

        <!-- LEFT SIDE -->
        <div class="jfin-contact-left">

            <div class="jfin-contact-info-grid">

                <!-- Office Address -->
                <div class="jfin-contact-info-card">
                    <h4>
                        <i class="fas fa-map-marker-alt"></i>
                        Office address
                    </h4>
                    <p>
                        Office No. 101, Sterling Centre,<br>
                        MG Road, Camp, Pune,<br>
                        Maharashtra 411001.
                    </p>
                </div>

                <!-- Email -->
                <div class="jfin-contact-info-card">
                    <h4>
                        <i class="far fa-envelope"></i>
                        Email us
                    </h4>
                    <p>
                        <a href="mailto:contact@jfinserv.com">
                            contact@jfinserv.com
                        </a>
                    </p>
                </div>

                <!-- Phone -->
                <div class="jfin-contact-info-card">
                    <h4>
                        <i class="fas fa-phone-alt"></i>
                        Call us
                    </h4>
                    <p>
                        <a href="tel:+917387465783">
                            +91 73874 65783
                        </a>
                    </p>
                </div>

                <!-- Working Hours -->
                <div class="jfin-contact-info-card">
                    <h4>
                        <i class="far fa-clock"></i>
                        Working Hours
                    </h4>
                    <p>
                        Monday - Saturday<br>
                        9:00 AM - 6:00 PM
                    </p>
                </div>

            </div>

            <!-- Google Map -->
            <div class="jfin-contact-map">
                <iframe
                    src="https://maps.google.com/maps?q=Sterling%20Centre%20MG%20Road%20Camp%20Pune%20Maharashtra%20411001&t=&z=15&ie=UTF8&iwloc=&output=embed"
                    loading="lazy"
                    allowfullscreen
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

            <!-- Social Media -->
            <div class="jfin-contact-social">
                <strong>Follow us on</strong>

                <a href="#" aria-label="Facebook">
                    <i class="fab fa-facebook-square"></i>
                </a>

                <a href="#" aria-label="Twitter">
                    <i class="fab fa-twitter"></i>
                </a>

                <a href="#" aria-label="LinkedIn">
                    <i class="fab fa-linkedin"></i>
                </a>

                <a href="#" aria-label="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>

        </div>

    
<!-- RIGHT SIDE CONTACT FORM -->
<div class="jfin-contact-form-card">

    <h3>Contact us</h3>

    <form action="{{ route('enquiry.store') }}" method="POST">
        @csrf

        <!-- NAME -->
        <div class="jfin-form-group">
            <label for="contact_name">Name</label>
            <input
                type="text"
                id="contact_name"
                name="name"
                value="{{ old('name') }}"
                placeholder="Your name"
                required
            >
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <!-- EMAIL -->
        <div class="jfin-form-group">
            <label for="contact_email">Email</label>
            <input
                type="email"
                id="contact_email"
                name="email"
                value="{{ old('email') }}"
                placeholder="Enter your email"
                required
            >
            @error('email')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <!-- CONTACT NUMBER -->
        <div class="jfin-form-group">
            <label for="contact_phone">Contact number</label>
            <input
                type="tel"
                id="contact_phone"
                name="contact"
                value="{{ old('contact') }}"
                placeholder="Enter 10 digit mobile number"
                maxlength="10"
                pattern="[0-9]{10}"
                inputmode="numeric"
                oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                required
            >
            @error('contact')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <!-- ENQUIRY TYPE -->
        <div class="jfin-form-group">
            <label for="enquiry_type">Enquiry Type</label>
            <select
                id="enquiry_type"
                name="enquiry_type"
                required
            >
                <option value="" disabled
                    {{ old('enquiry_type') ? '' : 'selected' }}>
                    Select Enquiry Type
                </option>

                <option value="loan"
                    {{ old('enquiry_type') == 'loan' ? 'selected' : '' }}>
                    Loan
                </option>

                <option value="property"
                    {{ old('enquiry_type') == 'property' ? 'selected' : '' }}>
                    Property
                </option>
            </select>

            @error('enquiry_type')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <!-- ADDRESS -->
        <div class="jfin-form-group">
            <label for="contact_address">Address</label>
            <input
                type="text"
                id="contact_address"
                name="address"
                value="{{ old('address') }}"
                placeholder="Enter your address"
                required
            >
            @error('address')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <!-- MESSAGE -->
        <div class="jfin-form-group">
            <label for="contact_message">Message</label>
            <textarea
                id="contact_message"
                name="message"
                placeholder="Enter your message"
                rows="4"
                required
            >{{ old('message') }}</textarea>

            @error('message')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <!-- CONSENT -->
        <div class="jfin-contact-consent">
            <input
                type="checkbox"
                id="contact_consent"
                name="consent"
                value="1"
                {{ old('consent') ? 'checked' : '' }}
                required
            >

            <label for="contact_consent">
                I hereby authorize you to send notifications via SMS,
                Email, RCS and other channels as per the Terms of Service
                and Privacy Policy.
            </label>
        </div>

        @error('consent')
            <small class="text-danger">{{ $message }}</small>
        @enderror

        <!-- SUBMIT -->
        <button type="submit" class="jfin-contact-submit">
            Submit
        </button>

    </form>
</div>


    </div>
</section>
</main>



<!-- =========================================================
     SUCCESS ALERT
========================================================= -->

@if(session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            if (typeof Swal !== 'undefined') {
                Swal.fire({
                    icon: 'success',
                    title: 'Thank You!',
                    text: @json(session('success')),
                    confirmButtonText: 'OK',
                    confirmButtonColor: '#295cab',
                    allowOutsideClick: false
                });
            } else {
                alert(@json(session('success')));
            }
        });
    </script>
@endif



<!-- =========================================================
     MOBILE RESPONSIVE CSS
========================================================= -->



@include('dhara-jfin.layout.footer')

<script src="{{ asset('theme/dhara-jfin/js/chatbot.js') }}"></script>
