{{-- SEO META DATA FOR HOME LOAN PAGE --}}
@section('title', 'Home Loan in Pune | Easy EMI & Low Interest | JFinserve')
@section('meta_description', 'Get a home loan in Pune with competitive interest rates, flexible tenure, affordable EMIs, quick approval and expert guidance from JFinserve.')
@section('meta_keywords', 'Home Loan in Pune, Home Loan Interest Rates in Pune, Home Loan Consultant in Pune, Best Home Loan in Pune, Home Loan Eligibility, NRI Home Loan, JFinserve Home Loan')

@section('content')
@push('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "@id": "https://jfinserv.com/home-loan#service",
  "name": "Home Loan",
  "url": "https://jfinserv.com/home-loan",
  "description": "JF Finserve assists individuals and families in exploring home loan options for purchasing or constructing residential properties. Get guidance on loan eligibility, documentation, interest rates, repayment terms and financing options through lending partners.",
  "serviceType": "Home Loan Assistance and Financial Consulting",
  "provider": {
    "@type": "Organization",
    "@id": "https://jfinserv.com/#organization",
    "name": "JF Finserve",
    "url": "https://jfinserv.com/"
  },
  "areaServed": {
    "@type": "Country",
    "name": "India"
  },
  "audience": {
    "@type": "PeopleAudience",
    "audienceType": "Individuals and families seeking residential property financing"
  },
  "category": "Financial Services",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://jfinserv.com/home-loan#webpage",
    "url": "https://jfinserv.com/home-loan",
    "name": "Home Loan | JF Finserve",
    "description": "Explore home loan options and get assistance with eligibility, documentation and residential property financing through JF Finserve.",
    "isPartOf": {
      "@type": "WebSite",
      "@id": "https://jfinserv.com/#website",
      "url": "https://jfinserv.com/",
      "name": "JF Finserve"
    },
    "inLanguage": "en-IN",
    "breadcrumb": {
      "@type": "BreadcrumbList",
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
          "name": "Home Loan",
          "item": "https://jfinserv.com/home-loan"
        }
      ]
    }
  }
}
</script>
@endpush
@include('dhara-jfin.layout.header')


<main>
    


  

<!-- Hero section -->
<section class="jfinHero" id="home">

    <div class="jfinHeroSlider">

        <div class="jfinHeroSlide jfinHeroSlideActive"
             style="background-image: url('{{ asset('theme/dhara-jfin/img/homeloan-page.webp') }}');">

            <div class="jfinHeroContent">

                <div class="jfinHeroText">

                    <div class="jfinHeroLabel">
                       
                    </div>

                    <h1 class="jfinHeroTitle">
                        Secure Your Dream Home
                        <span>With Jfinserv</span>
                    </h1>

                    <p class="jfinHeroDescription">
                        Tailored loan solutions for every stage of life.
                    </p>

                    <div class="jfinHeroButtons">

                         <a href="{{ route('authv3.login.form') }}"
               class="home-loan-btn">
                Apply Now
            </a>


                       
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<style>
/* ================= HERO BANNER ================= */
section.jfinHero#home {
    width: 100%;
    overflow: hidden;
}

section.jfinHero#home .jfinHeroSlide {
    width: 100%;
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
}

section.jfinHero#home .jfinHeroContent {
    display: flex;
    align-items: center;
    width: 100%;
    min-height: 550px;
    padding: 40px 7%;
    box-sizing: border-box;
}

/* Transparent black background behind text */
section.jfinHero#home .jfinHeroText {
    width: 100%;
    max-width: 720px;
    padding: 25px 30px;
    /* background: rgba(0, 0, 0, 0.45); */
    border-radius: 10px;
    box-sizing: border-box;
}

/* All text white */
section.jfinHero#home .jfinHeroLabel,
section.jfinHero#home .jfinHeroTitle,
section.jfinHero#home .jfinHeroTitle span,
section.jfinHero#home .jfinHeroDescription {
    color: #ffffff !important;
}

section.jfinHero#home .jfinHeroTitle {
    font-weight: 700;
    line-height: 1.2;
}

section.jfinHero#home .jfinHeroTitle span {
    display: block;
}

section.jfinHero#home .jfinHeroDescription {
    line-height: 1.7;
}

/* Button */
section.jfinHero#home .jfinHeroButtons {
    display: flex;
    flex-wrap: wrap;
    margin-top: 20px;
}

section.jfinHero#home .jfinHeroButtons a.jfinHeroBtn.jfinHeroApply {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 154px;
    min-width: 158px;
    height: 51px;
    padding: 0 15px;
    box-sizing: border-box;

    background: #3069e8 !important;
    color: #ffffff !important;
    border: none !important;
    border-radius: 12px !important;
    box-shadow: none;
    text-decoration: none;
    font-size: 16px;
    font-weight: 600;
    white-space: nowrap;
}

/* Reduce button size on mobile only */
@media (max-width: 480px) {
    section.jfinHero#home .jfinHeroButtons a.jfinHeroBtn.jfinHeroApply {
        width: 130px !important;
        min-width: 100px !important;
        height: 40px !important;
        padding: 0 10px !important;
        font-size: 14px !important;
        border-radius: 10px !important;
    }
}
```css
/* Fix white space above mobile hero banner */
@media (max-width: 768px) {

    section.jfinHero#home {
        width: 100% !important;
        margin-top: 0 !important;
        padding-top: 0 !important;
        overflow: hidden !important;
        background: #17232b !important;
    }

    section.jfinHero#home .jfinHeroSlider {
        width: 100% !important;
        margin: 0 !important;
        padding: 0 !important;
    }

    section.jfinHero#home .jfinHeroSlide {
        margin: 0 !important;
        padding: 0 !important;
        background-size: cover !important;
        background-position: center center !important;
        background-repeat: no-repeat !important;
    }

    section.jfinHero#home .jfinHeroContent {
        min-height: 400px !important;
        margin: 0 !important;
        padding: 14px !important;
    }

    /* Prevent extra space from the first heading */
    section.jfinHero#home .jfinHeroText {
        margin-top: 0 !important;
    }

    section.jfinHero#home .jfinHeroLabel {
        margin-top: 0 !important;
    }
}
```css
/* Fix white patches on mobile hero banner */
@media (max-width: 768px) {

    html,
    body {
        overflow-x: hidden;
    }

    section.jfinHero#home {
        display: block !important;
        width: 100% !important;
        margin: 0 !important;
        padding: 0 !important;
        overflow: hidden !important;
        background: #17232b !important;
        line-height: normal;
    }

    section.jfinHero#home .jfinHeroSlider {
        display: block !important;
        width: 100% !important;
        margin: 0 !important;
        padding: 0 !important;
        background: #17232b !important;
    }

    section.jfinHero#home .jfinHeroSlide {
        display: block !important;
        width: 100% !important;
        min-height: 0 !important;
        height: auto !important;
        margin: 0 !important;
        padding: 0 !important;
        background-size: cover !important;
        background-position: center center !important;
        background-repeat: no-repeat !important;
        background-color: #17232b !important;
    }

    section.jfinHero#home .jfinHeroContent {
        display: flex !important;
        align-items: flex-start !important;
        width: 100% !important;
        min-height: 0 !important;
        height: auto !important;
        padding: 14px !important;
        margin: 0 !important;
        box-sizing: border-box !important;
    }

    section.jfinHero#home .jfinHeroText {
        margin: 0 !important;
        max-width: 100% !important;
    }
}
@media (max-width: 767px) {
    .jfinHeroLabel {
        margin-top: 17px !important;
    }
}

/* ================= TABLET ================= */
@media (max-width: 768px) {
    section.jfinHero#home .jfinHeroContent {
        min-height: 420px;
        padding: 20px;
    }

    section.jfinHero#home .jfinHeroText {
        max-width: 100%;
        padding: 18px;
        /* background: rgba(0, 0, 0, 0.58); */
        border-radius: 8px;
    }

    section.jfinHero#home .jfinHeroTitle {
        font-size: 28px;
        line-height: 1.2;
    }

    section.jfinHero#home .jfinHeroDescription {
        font-size: 14px;
        line-height: 1.5;
    }

    section.jfinHero#home .jfinHeroButtons a.jfinHeroBtn.jfinHeroApply {
        width: 150px;
        min-width: 150px;
        height: 52px;
        font-size: 18px;
    }
}

/* ================= MOBILE / IPHONE ================= */
@media (max-width: 480px) {
    section.jfinHero#home .jfinHeroSlide {
        background-position: 58% center;
    }

    section.jfinHero#home .jfinHeroContent {
        min-height: 400px;
        padding: 14px;
    }

    section.jfinHero#home .jfinHeroText {
        padding: 15px;
        /* background: rgba(0, 0, 0, 0.62); */
        border-radius: 8px;
    }

    section.jfinHero#home .jfinHeroLabel {
        font-size: 10px;
        letter-spacing: 2px;
    }

    section.jfinHero#home .jfinHeroTitle {
        font-size: 24px;
        line-height: 1.25;
        margin: 10px 0;
    }

    section.jfinHero#home .jfinHeroDescription {
        font-size: 12px;
        line-height: 1.5;
        margin-bottom: 12px;
    }

    section.jfinHero#home .jfinHeroButtons {
        margin-top: 15px;
    }

    section.jfinHero#home .jfinHeroButtons a.jfinHeroBtn.jfinHeroApply {
        width: 135px;
        min-width: 135px;
        height: 48px;
        font-size: 16px;
        border-radius: 10px !important;
    }
}

/* Extra-small mobile screens */
@media (max-width: 360px) {
    section.jfinHero#home .jfinHeroContent {
        min-height: 380px;
        padding: 10px;
    }

    section.jfinHero#home .jfinHeroText {
        padding: 12px;
    }

    section.jfinHero#home .jfinHeroTitle {
        font-size: 21px;
    }

    section.jfinHero#home .jfinHeroDescription {
        font-size: 11px;
    }
}
</style>



<!-- =========================================================
     HOME LOAN FEATURES SECTION
========================================================= -->

<section class="home-loan-features">

    <div class="home-loan-features-container">

        <!-- =================================================
             SECTION HEADING
        ================================================== -->

        <div class="home-loan-features-header">

          <h4 class="finserv-eyebrow" style="color:#295cab;">
                 Our Features
            </h4>

            <h2 class="finserv-trusted" style="color:#295cab;">
                Finance Your
                <strong style="color:#00abeb">Dream Home</strong>
            </h2>


            <p>
                At Jfinserv, we understand that buying a home is one of the most significant milestones in your life.
                Our home loan solutions are designed to provide you with the financial support you need at competitive
                interest rates, ensuring a smooth and hassle-free journey to homeownership in Pune and PCMC.
                <br>
                Whether you are a first-time homebuyer or looking to upgrade to a larger space, we offer tailored
                products to suit your specific requirements.
            </p>

        </div>
        


        <!-- =================================================
             FEATURES AREA
        ================================================== -->

        <div class="home-loan-features-wrapper">


            <!-- =============================================
                 LEFT FEATURES
            ============================================== -->

            <div class="home-loan-feature-column home-loan-left-column">


                <!-- FEATURE 1 -->

                <div class="home-loan-feature-item">

                    <div class="home-loan-feature-icon">

                        <i class="fas fa-calculator"></i>

                    </div>

                    <div class="home-loan-feature-text">

                        <h4>
                            Competitive Interest Rates starting
                            from 7.10% (as per CIBIL score).
                        </h4>

                    </div>

                </div>


                <!-- FEATURE 2 -->

                <div class="home-loan-feature-item">

                    <div class="home-loan-feature-icon">

                        <i class="fas fa-tools"></i>

                    </div>

                    <div class="home-loan-feature-text">

                        <h4>
                            Quick Approval and Seamless
                            Processing
                        </h4>

                    </div>

                </div>


                <!-- FEATURE 3 -->

                <div class="home-loan-feature-item">

                    <div class="home-loan-feature-icon">

                        <i class="fas fa-weight-hanging"></i>

                    </div>

                    <div class="home-loan-feature-text">

                        <h4>
                            Balance Transfer Facility with Top-
                            up options
                        </h4>

                    </div>

                </div>

            </div>


            <!-- =============================================
                 CENTER HOUSE IMAGE
            ============================================== -->

            <div class="home-loan-center">

                <div class="home-loan-house">

                    <img
                        src="{{ asset('theme/dhara-jfin/img/homeloan-subimg.png') }}"
                        alt="Home Loan">

                </div>

                <a href="{{ route('authv3.login.form') }}"
                   class="home-loan-feature-btn">
                    Apply Now
                </a>

            </div>


            <!-- =============================================
                 RIGHT FEATURES
            ============================================== -->

            <div class="home-loan-feature-column home-loan-right-column">


                <!-- FEATURE 4 -->

                <div class="home-loan-feature-item">

                    <div class="home-loan-feature-icon">

                        <i class="fas fa-piggy-bank"></i>

                    </div>

                    <div class="home-loan-feature-text">

                        <h4>
                            Flexible Repayment Tenure up to
                            30 years
                        </h4>

                    </div>

                </div>


                <!-- FEATURE 5 -->

                <div class="home-loan-feature-item">

                    <div class="home-loan-feature-icon">

                        <i class="fas fa-home"></i>

                    </div>

                    <div class="home-loan-feature-text">

                        <h4>
                            Minimal Documentation and
                            Transparent Fees
                        </h4>

                    </div>

                </div>


                <!-- FEATURE 6 -->

                <div class="home-loan-feature-item">

                    <div class="home-loan-feature-icon">

                        <i class="fas fa-folder"></i>

                    </div>

                    <div class="home-loan-feature-text">

                        <h4>
                            Expert Guidance throughout the
                            legal and technical process
                        </h4>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     HOME LOAN FEATURES CSS
========================================================= -->

<!-- =========================================================
     WHY CHOOSE OUR HOME LOAN
========================================================= -->

<section class="why-home-loan-section">

    <div class="why-home-loan-container">

        <!-- =========================
             SECTION HEADER
        ========================== -->

       
        <div class="home-loan-features-header">

          

            <h2 class="finserv-trusted" style="color:#295cab;">
                Why Choose Our
                <strong style="color:#00abeb"> Home Loan?</strong>
            </h2>
 <div class="why-home-loan-subtitle">
                Experience hassle-free home financing with India's most trusted lending partner
            </div></p>

          <p>
                Whether you're buying your first home, upgrading to a larger property, or investing in real estate,
                our home loan solutions are designed to make your
                <br class="desktop-break">
                journey smooth and stress-free.
            </p>

        </div>


        <!-- =========================
             TOP 3 CARDS
        ========================== -->

        <div class="home-loan-card-grid">


            <!-- CARD 1 -->

            <div class="home-loan-info-card">

                <div class="home-loan-card-icon">
                    <i class="fas fa-percent"></i>
                </div>

                <h3>
                    Competitive Interest Rates
                </h3>

                <p>
                    Enjoy industry-leading rates starting from 7.10%
                    <br class="desktop-break">
                    (as per CIBIL score).
                </p>

            </div>


            <!-- CARD 2 -->

            <div class="home-loan-info-card">

                <div class="home-loan-card-icon">
                    <i class="fas fa-file-signature"></i>
                </div>

                <h3>
                    100% Digital Application
                </h3>

                <p>
                    Complete your entire loan application online in
                    <br class="desktop-break">
                    minutes. No branch visits, no paperwork hassles.
                </p>

            </div>


            <!-- CARD 3 -->

            <div class="home-loan-info-card">

                <div class="home-loan-card-icon">
                    <i class="fas fa-bolt"></i>
                </div>

                <h3>
                    Fast Disbursal in 48 Hours
                </h3>

                <p>
                    Get your loan approved and disbursed within 48
                    <br class="desktop-break">
                    hours of document verification with our
                    <br class="desktop-break">
                    streamlined process.
                </p>

            </div>

        </div>




</section>


<!-- =========================================================
     CSS
========================================================= -->


<!-- =========================================================
     OUR HOME LOAN BENEFITS SECTION
========================================================= -->

<section class="jfin-home-benefits-section">

    <div class="jfin-home-benefits-container">

        <!-- =================================================
             BENEFITS HEADING
        ================================================== -->

        <div class="jfin-home-benefits-header">

            <h2>
                Our Home
                <strong>Loan Benefits</strong>
            </h2>

            <p>
                Everything you need for a seamless home buying experience
            </p>

        </div>


        <!-- =================================================
             BENEFITS CARDS
        ================================================== -->

        <div class="jfin-home-benefits-grid">


            <!-- =================================================
                 CARD 1
            ================================================== -->

            <div class="jfin-benefit-card">

                <div class="jfin-benefit-icon">
                    <i class="fas fa-home"></i>
                </div>

                <h3>
                    Up to 90% Loan-to-Value
                </h3>

                <p>
                    Finance up to 90% of your property value with
                    minimal down payment, making homeownership
                    more accessible.
                </p>

            </div>


            <!-- =================================================
                 CARD 2
            ================================================== -->

            <div class="jfin-benefit-card">

                <div class="jfin-benefit-icon">
                    <i class="fas fa-file-alt"></i>
                </div>

                <h3>
                    Minimal Documentation
                </h3>

                <p>
                    Simple KYC and income proof requirements.
                    Our digital verification makes the process
                    quick and easy.
                </p>

            </div>


            <!-- =================================================
                 CARD 3
            ================================================== -->

            <div class="jfin-benefit-card">

                <div class="jfin-benefit-icon">
                    <i class="fas fa-calendar-alt"></i>
                </div>

                <h3>
                    Flexible Repayment Options
                </h3>

                <p>
                    Choose tenure up to 30 years with options for
                    part-payment and foreclosure without penalties.
                </p>

            </div>


            <!-- =================================================
                 CARD 4
            ================================================== -->

            <div class="jfin-benefit-card">

                <div class="jfin-benefit-icon">
                    <i class="fas fa-hand-holding-usd"></i>
                </div>

                <h3>
                    No Hidden Charges
                </h3>

                <p>
                    Transparent pricing with no hidden fees.
                    What you see is what you pay—complete clarity
                    guaranteed.
                </p>

            </div>


            <!-- =================================================
                 CARD 5
            ================================================== -->

            <div class="jfin-benefit-card">

                <div class="jfin-benefit-icon">
                    <i class="fas fa-percentage"></i>
                </div>

                <h3>
                    Tax Benefits
                </h3>

                <p>
                    Save up to ₹3.5 lakhs annually with tax
                    deductions on principal and interest payments
                    under IT Act.
                </p>

            </div>


            <!-- =================================================
                 CARD 6
            ================================================== -->

            <div class="jfin-benefit-card">

                <div class="jfin-benefit-icon">
                    <i class="fas fa-headset"></i>
                </div>

                <h3>
                    Dedicated Relationship
                    <br class="jfin-desktop-only">
                    Manager
                </h3>

                <p>
                    Get personalized support from day one with a
                    dedicated expert guiding you through the entire
                    process.
                </p>

            </div>


        </div>

    </div>

</section>


<!-- =========================================================
     HOME LOAN BENEFITS CSS
========================================================= -->


<!-- =========================================================
     ELIGIBILITY & DOCUMENTS SECTION
========================================================= -->

<section class="jfin-eligibility-section" id="home-eligibility">

    <div class="jfin-eligibility-container">

        <!-- =================================================
             SECTION HEADER
        ================================================== -->

        <div class="jfin-eligibility-header">

            <h2 class="finserv-trusted" style="color:#295cab;">
                Eligibility
                <strong style="color:#00abeb">Documents</strong>
            </h2>

            <p>
                Check if you qualify and what documents you'll need
            </p>

        </div>


        <!-- =================================================
             TABS
        ================================================== -->

        <div class="jfin-eligibility-tabs">

            <button
                type="button"
                class="jfin-eligibility-tab active"
                data-tab="salaried">
                Salaried Individuals
            </button>

            <button
                type="button"
                class="jfin-eligibility-tab"
                data-tab="self-employed">
                Self-Employed
            </button>

            <button
                type="button"
                class="jfin-eligibility-tab"
                data-tab="nri">
                NRI Applicants
            </button>

        </div>


        <!-- =================================================
             SALARIED TAB
        ================================================== -->

        <div
            class="jfin-eligibility-tab-content active"
            id="salaried">

            <div class="jfin-eligibility-grid">


                <!-- LEFT - ELIGIBILITY -->

                <div class="jfin-criteria-column">

                    <h3 class="jfin-column-title">
                        Eligibility Criteria
                    </h3>

                    <div class="jfin-checklist">


                        <div class="jfin-check-item">

                            <span class="jfin-check-icon">
                                <i class="fas fa-check-circle"></i>
                            </span>

                            <span>
                                Age: 21 to 65 years at loan maturity
                            </span>

                        </div>


                        <div class="jfin-check-item">

                            <span class="jfin-check-icon">
                                <i class="fas fa-check-circle"></i>
                            </span>

                            <span>
                                Minimum monthly income: ₹25,000
                            </span>

                        </div>


                        <div class="jfin-check-item">

                            <span class="jfin-check-icon">
                                <i class="fas fa-check-circle"></i>
                            </span>

                            <span>
                                Work experience: Minimum 2 years
                            </span>

                        </div>


                        <div class="jfin-check-item">

                            <span class="jfin-check-icon">
                                <i class="fas fa-check-circle"></i>
                            </span>

                            <span>
                                Current job: At least 1 year with current employer
                            </span>

                        </div>


                        <div class="jfin-check-item">

                            <span class="jfin-check-icon">
                                <i class="fas fa-check-circle"></i>
                            </span>

                            <span>
                                Credit score: 700 or above preferred
                            </span>

                        </div>

                    </div>

                </div>


                <!-- RIGHT - DOCUMENTS -->

                <div class="jfin-documents-column">

                    <h3 class="jfin-column-title">
                        Required Documents
                    </h3>

                    <div class="jfin-document-accordion">


                        <!-- APPLICATION / KYC -->

                        <details>

                            <summary>

                                <span>
                                    Application / KYC / Address / Employment
                                </span>

                                <i class="fas fa-chevron-down"></i>

                            </summary>

                            <div class="jfin-document-content">

                                <ul>

                                    <li>
                                        Application form
                                    </li>

                                    <li>
                                        KYC Applicant and Co-Applicant
                                        (Aadhar Card, Pan Card And Passport size Photo)
                                    </li>

                                    <li>
                                        Address proof-(Rent Agreement/Light bill/ Gas book)
                                    </li>

                                    <li>
                                        Employee Proof –Employee ID Card,
                                        Appointment/Offer letter,
                                        Appraisal/Increment letter
                                    </li>

                                </ul>

                            </div>

                        </details>


                        <!-- INCOME / BANKING / TAX -->

                        <details>

                            <summary>

                                <span>
                                    Income / Banking / Tax
                                </span>

                                <i class="fas fa-chevron-down"></i>

                            </summary>

                            <div class="jfin-document-content">

                                <ul>

                                    <li>
                                        Latest Salary Slip latest 6 month.
                                    </li>

                                    <li>
                                        Latest 1 year salary account statement.
                                    </li>

                                    <li>
                                        Form-16 last 3 years
                                    </li>

                                </ul>

                            </div>

                        </details>


                        <!-- EXISTING LOAN -->

                        <details>

                            <summary>

                                <span>
                                    Existing Loan (If Any)
                                </span>

                                <i class="fas fa-chevron-down"></i>

                            </summary>

                            <div class="jfin-document-content">

                                <ul>

                                    <li>
                                        If Existing loan:
                                        All Loan Sanction letter and soa
                                    </li>

                                    <li>
                                        If Closed: NOC.
                                    </li>

                                </ul>

                            </div>

                        </details>


                        <!-- PROPERTY -->

                        <details>

                            <summary>

                                <span>
                                    Property documents
                                </span>

                                <i class="fas fa-chevron-down"></i>

                            </summary>

                            <div class="jfin-document-content">

                                <ul>

                                    <li>Agreement to sale/sale deed.</li>

                                    <li>Index 2 (Suchi kramank 2).</li>

                                    <li>Commencement (permission) certificate.</li>

                                    <li>Completion Certificate/ Occupancy (OC).</li>

                                    <li>Sanctioned plan (blue print).</li>

                                    <li>Payment receipt. (if token amount given)</li>

                                    <li>Floor plan.</li>

                                    <li>Search report.</li>

                                    <li>RR (Registration Receipt)</li>

                                    <li>NA order</li>

                                    <li>RERA Certificate.</li>

                                    <li>Share Certificate</li>

                                    <li>Society registration certificate</li>

                                    <li>Latest Electricity bill.</li>

                                    <li>Property Tax Receipt</li>

                                    <li>Or BUILDER MASTER FILE</li>

                                </ul>

                            </div>

                        </details>


                        <!-- TAKE OVER -->

                        <details>

                            <summary>

                                <span>
                                    In case of Take over loan
                                </span>

                                <i class="fas fa-chevron-down"></i>

                            </summary>

                            <div class="jfin-document-content">

                                <ul>

                                    <li>
                                        List of documents(lod)
                                    </li>

                                    <li>
                                        Sanction Letter
                                    </li>

                                    <li>
                                        Fore closer letter
                                    </li>

                                    <li>
                                        Account statement from date of sanction.
                                    </li>

                                </ul>

                            </div>

                        </details>


                    </div>

                </div>

            </div>

        </div>


        <!-- =================================================
             SELF-EMPLOYED TAB
        ================================================== -->

        <div
            class="jfin-eligibility-tab-content"
            id="self-employed">

            <div class="jfin-eligibility-grid">


                <!-- LEFT -->

                <div class="jfin-criteria-column">

                    <h3 class="jfin-column-title">
                        Eligibility Criteria
                    </h3>

                    <div class="jfin-checklist">


                        <div class="jfin-check-item">

                            <span class="jfin-check-icon">
                                <i class="fas fa-check-circle"></i>
                            </span>

                            <span>
                                Age: 21 to 65 years at loan maturity
                            </span>

                        </div>


                        <div class="jfin-check-item">

                            <span class="jfin-check-icon">
                                <i class="fas fa-check-circle"></i>
                            </span>

                            <span>
                                Business vintage: Minimum 3 years
                            </span>

                        </div>


                        <div class="jfin-check-item">

                            <span class="jfin-check-icon">
                                <i class="fas fa-check-circle"></i>
                            </span>

                            <span>
                                Annual income: Minimum ₹3 lakhs
                            </span>

                        </div>


                        <div class="jfin-check-item">

                            <span class="jfin-check-icon">
                                <i class="fas fa-check-circle"></i>
                            </span>

                            <span>
                                ITR filing: Last 2 years mandatory
                            </span>

                        </div>


                        <div class="jfin-check-item">

                            <span class="jfin-check-icon">
                                <i class="fas fa-check-circle"></i>
                            </span>

                            <span>
                                Credit score: 700 or above preferred
                            </span>

                        </div>


                    </div>

                </div>


                <!-- RIGHT -->

                <div class="jfin-documents-column">

                    <h3 class="jfin-column-title">
                        Required Documents
                    </h3>


                    <div class="jfin-document-accordion">


                        <!-- KYC -->

                        <details>

                            <summary>

                                <span>
                                    KYC / Address
                                </span>

                                <i class="fas fa-chevron-down"></i>

                            </summary>

                            <div class="jfin-document-content">

                                <ul>

                                    <li>
                                        KYC Applicant and Co-Applicant
                                        (Pan Card, Aadhar Cardand Passport size Photo)
                                    </li>

                                    <li>
                                        Passport
                                    </li>

                                    <li>
                                        Address proof-
                                        (Rent Agreement/Light bill/ Gas book)
                                    </li>

                                </ul>

                            </div>

                        </details>


                        <!-- BUSINESS -->

                        <details>

                            <summary>

                                <span>
                                    Business Proof / GST
                                </span>

                                <i class="fas fa-chevron-down"></i>

                            </summary>

                            <div class="jfin-document-content">

                                <ul>

                                    <li>
                                        Business Proof–Pan Card, Shop Act,
                                        Udhyam Aadhar, MSME Certificate
                                    </li>

                                    <li>
                                        If PVT LTD (Certificate of Incorporation,
                                        MOA and AOA)
                                    </li>

                                    <li>
                                        If Partnership firm-
                                        (All Directors KYC and Partnership deed)
                                    </li>

                                    <li>
                                        If Self Employed Professional
                                        (License and Degree Certificate)
                                    </li>

                                    <li>
                                        Gst Certificate (If Applicable)
                                        and GSTR-3B Latest 1 year.
                                    </li>

                                </ul>

                            </div>

                        </details>


                        <!-- ITR -->

                        <details>

                            <summary>

                                <span>
                                    ITR / Financials / Banking
                                </span>

                                <i class="fas fa-chevron-down"></i>

                            </summary>

                            <div class="jfin-document-content">

                                <ul>

                                    <li>
                                        ITR Latest 3 years with Acknowledgement,
                                        Computation of Income, Profit and loss,
                                        Balance Sheet, All Schedules.
                                    </li>

                                    <li>
                                        If Turnover is above 1 cr then Audited ITR.
                                    </li>

                                    <li>
                                        All account bank statement latest 1 year
                                        (Current and Saving both)
                                    </li>

                                </ul>

                            </div>

                        </details>


                        <!-- EXISTING LOAN -->

                        <details>

                            <summary>

                                <span>
                                    If Existing loan
                                </span>

                                <i class="fas fa-chevron-down"></i>

                            </summary>

                            <div class="jfin-document-content">

                                <ul>

                                    <li>
                                        All Loan Sanction letter and SOA
                                    </li>

                                    <li>
                                        If Closed NOC.
                                    </li>

                                </ul>

                            </div>

                        </details>


                        <!-- PROPERTY -->

                        <details>

                            <summary>

                                <span>
                                    Property documents
                                </span>

                                <i class="fas fa-chevron-down"></i>

                            </summary>

                            <div class="jfin-document-content">

                                <ul>

                                    <li>
                                        Agreement to sale/sale deed
                                    </li>

                                    <li>
                                        Index 2 (Suchi kramank 2)
                                    </li>

                                    <li>
                                        Commencement (permission) certificate
                                    </li>

                                    <li>
                                        Completion Certificate/Occupancy (OC)
                                    </li>

                                    <li>
                                        Sanctioned plan (blue print)
                                    </li>

                                    <li>
                                        Payment receipt. (if token amount given)
                                    </li>

                                    <li>
                                        Floor plan
                                    </li>

                                    <li>
                                        RR (Registration Receipt)
                                    </li>

                                    <li>
                                        NA order
                                    </li>

                                    <li>
                                        RERA Certificate
                                    </li>

                                </ul>

                            </div>

                        </details>


                        <!-- RESALE -->

                        <details>

                            <summary>

                                <span>
                                    If Resale
                                </span>

                                <i class="fas fa-chevron-down"></i>

                            </summary>

                            <div class="jfin-document-content">

                                <ul>

                                    <li>
                                        Share Certificate.
                                    </li>

                                    <li>
                                        Society registration certificate.
                                    </li>

                                    <li>
                                        Latest Electricity bill.
                                    </li>

                                    <li>
                                        Latest Property Tax Receipt.
                                    </li>

                                    <li>
                                        Or BUILDER MASTER FILE
                                    </li>

                                </ul>

                            </div>

                        </details>


                        <!-- TAKE OVER -->

                        <details>

                            <summary>

                                <span>
                                    In case of take over loan
                                </span>

                                <i class="fas fa-chevron-down"></i>

                            </summary>

                            <div class="jfin-document-content">

                                <ul>

                                    <li>
                                        List of documents(LOD)
                                    </li>

                                    <li>
                                        Sanction Letter
                                    </li>

                                    <li>
                                        Fore closer Letter
                                    </li>

                                    <li>
                                        Account statement from date of sanction.
                                    </li>

                                </ul>

                            </div>

                        </details>


                    </div>

                </div>

            </div>

        </div>


        <!-- =================================================
             NRI TAB
        ================================================== -->

        <div
            class="jfin-eligibility-tab-content"
            id="nri">

            <div class="jfin-eligibility-grid">


                <!-- LEFT -->

                <div class="jfin-criteria-column">

                    <h3 class="jfin-column-title">
                        Eligibility Criteria
                    </h3>

                    <div class="jfin-checklist">


                        <div class="jfin-check-item">

                            <span class="jfin-check-icon">
                                <i class="fas fa-check-circle"></i>
                            </span>

                            <span>
                                Age: 21 to 65 years at loan maturity
                            </span>

                        </div>


                        <div class="jfin-check-item">

                            <span class="jfin-check-icon">
                                <i class="fas fa-check-circle"></i>
                            </span>

                            <span>
                                NRI/PIO/OCI status with valid passport
                            </span>

                        </div>


                        <div class="jfin-check-item">

                            <span class="jfin-check-icon">
                                <i class="fas fa-check-circle"></i>
                            </span>

                            <span>
                                Stable employment in current country
                            </span>

                        </div>


                        <div class="jfin-check-item">

                            <span class="jfin-check-icon">
                                <i class="fas fa-check-circle"></i>
                            </span>

                            <span>
                                Minimum annual income: $25,000 or equivalent
                            </span>

                        </div>


                        <div class="jfin-check-item">

                            <span class="jfin-check-icon">
                                <i class="fas fa-check-circle"></i>
                            </span>

                            <span>
                                Property to be purchased in India only
                            </span>

                        </div>


                    </div>

                </div>


                <!-- RIGHT -->

                <div class="jfin-documents-column">

                    <h3 class="jfin-column-title">
                        Required Documents (NRI Applicants)
                    </h3>


                    <div class="jfin-document-accordion">


                        <!-- INCOME -->

                        <details>

                            <summary>

                                <span>
                                    Income Proof Documents
                                </span>

                                <i class="fas fa-chevron-down"></i>

                            </summary>

                            <div class="jfin-document-content">

                                <ul>

                                    <li>
                                        Income Proof Documents for NRI
                                    </li>

                                    <li>
                                        Bank Account Statement showing payment
                                        made to Seller / Builder
                                    </li>

                                </ul>

                            </div>

                        </details>


                        <!-- PROPERTY OWNERSHIP -->

                        <details>

                            <summary>

                                <span>
                                    Property Ownership Documents
                                </span>

                                <i class="fas fa-chevron-down"></i>

                            </summary>

                            <div class="jfin-document-content">

                                <ul>

                                    <li>
                                        Sale Deed
                                    </li>

                                    <li>
                                        Stamped Agreement of Sale
                                    </li>

                                    <li>
                                        Allotment Letter
                                    </li>

                                </ul>

                            </div>

                        </details>


                        <!-- NOC -->

                        <details>

                            <summary>

                                <span>
                                    NOC & Possession Certificates
                                </span>

                                <i class="fas fa-chevron-down"></i>

                            </summary>

                            <div class="jfin-document-content">

                                <ul>

                                    <li>
                                        No Objection Certificate (NOC)
                                    </li>

                                    <li>
                                        NOC from Housing Society / Builder
                                    </li>

                                    <li>
                                        Possession Certificate
                                    </li>

                                    <li>
                                        Occupancy Certificate
                                    </li>

                                </ul>

                            </div>

                        </details>


                        <!-- CONSTRUCTION -->

                        <details>

                            <summary>

                                <span>
                                    Construction & Tax Related Documents
                                </span>

                                <i class="fas fa-chevron-down"></i>

                            </summary>

                            <div class="jfin-document-content">

                                <ul>

                                    <li>
                                        Construction Cost Estimate
                                    </li>

                                    <li>
                                        Land Tax Receipt
                                    </li>

                                </ul>

                            </div>

                        </details>


                        <!-- PAYMENT -->

                        <details>

                            <summary>

                                <span>
                                    Payment & Resale Documents
                                </span>

                                <i class="fas fa-chevron-down"></i>

                            </summary>

                            <div class="jfin-document-content">

                                <ul>

                                    <li>
                                        Payment Receipts made to Seller / Builder
                                    </li>

                                    <li>
                                        In case of resale property,
                                        Share Certificate is required
                                    </li>

                                </ul>

                            </div>

                        </details>


                    </div>

                </div>

            </div>

        </div>

    </div>

</section>





<!-- =========================================================
     TAB + ACCORDION JAVASCRIPT
========================================================= -->

<script>

document.addEventListener('DOMContentLoaded', function () {


    /* =====================================================
       TABS
    ===================================================== */

    const eligibilityTabs =
        document.querySelectorAll('.jfin-eligibility-tab');

    const eligibilityContents =
        document.querySelectorAll('.jfin-eligibility-tab-content');


    eligibilityTabs.forEach(function (tab) {

        tab.addEventListener('click', function () {

            const target =
                this.getAttribute('data-tab');


            /* Remove active from all tabs */

            eligibilityTabs.forEach(function (item) {

                item.classList.remove('active');

            });


            /* Hide all contents */

            eligibilityContents.forEach(function (content) {

                content.classList.remove('active');

            });


            /* Active current tab */

            this.classList.add('active');


            /* Show selected content */

            const selectedContent =
                document.getElementById(target);


            if (selectedContent) {

                selectedContent.classList.add('active');

            }

        });

    });


    /* =====================================================
       ACCORDION
       Only one document section open at a time
       inside each document column
    ===================================================== */

    const allDocumentDetails =
        document.querySelectorAll(
            '.jfin-document-accordion details'
        );


    allDocumentDetails.forEach(function (detail) {

        detail.addEventListener('toggle', function () {

            if (!this.open) {

                return;

            }


            const parent =
                this.parentElement;


            parent.querySelectorAll('details').forEach(function (other) {

                if (other !== detail) {

                    other.removeAttribute('open');

                }

            });

        });

    });

});

</script>
<!-- =========================================================
     HOME LOAN EMI SECTION
========================================================= -->

<section class="home-loan-emi-section">

    <div class="home-loan-emi-wrapper">

        <!-- =================================================
             LEFT CONTENT
        ================================================== -->

        <div class="home-loan-emi-left">

            <h2>
                Calculate Your Home<br>
                Loan EMI
            </h2>

            <p>
                Get an instant estimate of your monthly payments and plan<br>
                your finances better
            </p>

            <a href="{{ url('/eligibility-calculator') }}"
               class="home-loan-emi-btn">

                Calculate Detailed EMI

                <span>→</span>

            </a>

        </div>


        <!-- =================================================
             RIGHT EMI BOX
        ================================================== -->

        <div class="home-loan-emi-box">

            <div class="emi-box-title">
                Sample EMI Breakdown
            </div>


            <div class="emi-amount">
                ₹45,500<span>/month</span>
            </div>


            <div class="emi-info" style="color:#fff">
                Loan Amount: ₹50,00,000 
                / <br>Tenure: 20 years
                /<br> Rate: 8.25% p.a.
            </div>


            <div class="emi-bottom">

                <div class="emi-value">

                    <strong>₹50L</strong>

                    <small>
                        Principal
                    </small>

                </div>


                <div class="emi-value">

                    <strong>₹59L</strong>

                    <small>
                        Interest
                    </small>

                </div>


                <div class="emi-value">

                    <strong>₹109L</strong>

                    <small>
                        Total
                    </small>

                </div>


                <div class="emi-value">

                    <strong>₹50L</strong>

                    <small>
                        Principal
                    </small>

                </div>

            </div>

        </div>

    </div>

</section>


    <!-- faqs  -->

    <section class="home-section">
        <div class="container-tab">
            <div class="home-section-header">
                <h2 class="home-section-title">Frequently Asked Questions</h2>
                <p class="home-section-subtitle">
                    Get answers to common queries about our home loan products
                </p>
            </div>

            <div class="home-faq-container">
                <!-- Eligibility Category -->
                <div class="home-faq-category">
                    <!-- <h3 class="home-faq-category-title">Eligibility & Requirements</h3> -->
                    
                    <div class="home-faq-item active">
                        <div class="home-faq-question">
                            <span>What is the minimum income required to apply for a home loan?</span>
                            <span class="home-faq-icon">▼</span>
                        </div>
                        <div class="home-faq-answer">
                            <div class="home-faq-answer-content">
                                For salaried individuals, the minimum monthly income requirement is ₹25,000. For self-employed applicants, we require a minimum annual income of ₹3 lakhs. However, the actual loan amount sanctioned will depend on your overall financial profile, credit score, and repayment capacity.
                            </div>
                        </div>
                    </div>

                    <div class="home-faq-item">
                        <div class="home-faq-question">
                            <span>Can I apply for a home loan if I'm self-employed?</span>
                            <span class="home-faq-icon">▼</span>
                        </div>
                        <div class="home-faq-answer">
                            <div class="home-faq-answer-content">
                                Absolutely! We welcome applications from self-employed professionals and business owners. You'll need to provide additional documentation including ITR for the last 2 years, business proof, and audited financial statements to demonstrate your income stability.
                            </div>
                        </div>
                    </div>
                    <div class="home-faq-item">
                        <div class="home-faq-question">
                            <span>What interest rate will I get on my home loan?</span>
                            <span class="home-faq-icon">▼</span>
                        </div>
                        <div class="home-faq-answer">
                            <div class="home-faq-answer-content">
                                Our home loan interest rates start from 7.10% (as per CIBIL score). The actual rate offered to you will depend on factors like your credit score, income, loan amount, tenure, and employment profile. Customers with excellent credit scores and strong financials may qualify for lower rates.
                            </div>
                        </div>
                    </div>

                    <div class="home-faq-item">
                        <div class="home-faq-question">
                            <span>Are there any processing fees or hidden charges?</span>
                            <span class="home-faq-icon">▼</span>
                        </div>
                        <div class="home-faq-answer">
                            <div class="home-faq-answer-content">
                                We maintain complete transparency. Our processing fee is 0.50% of the loan amount (subject to applicable taxes). There are no hidden charges. All applicable fees including legal, technical valuation, and documentation charges are disclosed upfront before loan sanction.
                            </div>
                        </div>
                    </div>
                    <div class="home-faq-item">
                        <div class="home-faq-question">
                            <span>How long does it take to get loan approval?</span>
                            <span class="home-faq-icon">▼</span>
                        </div>
                        <div class="home-faq-answer">
                            <div class="home-faq-answer-content">
                                With our streamlined digital process, you can receive in-principle approval within 48 hours of submitting complete documentation. Final approval and disbursal typically occur within 7-10 working days, subject to property verification and legal clearances.
                            </div>
                        </div>
                    </div>

                    <div class="home-faq-item">
                        <div class="home-faq-question">
                            <span>Can I prepay my loan without penalties?</span>
                            <span class="home-faq-icon">▼</span>
                        </div>
                        <div class="home-faq-answer">
                            <div class="home-faq-answer-content">
                                Yes! For floating rate home loans, there are zero prepayment charges. You can make part-payments or foreclose your loan anytime without any penalty. For fixed-rate loans, prepayment charges may apply as per the loan agreement terms.
                            </div>
                        </div>
                    </div>

                    <div class="home-faq-item">
                        <div class="home-faq-question">
                            <span>What is the maximum loan tenure available?</span>
                            <span class="home-faq-icon">▼</span>
                        </div>
                        <div class="home-faq-answer">
                            <div class="home-faq-answer-content">
                                We offer flexible repayment tenure ranging from 5 years to 30 years. The maximum tenure will depend on your age at the time of application and must conclude before you turn 65 years. Longer tenures result in lower EMIs but higher overall interest costs.
                            </div>
                        </div>
                    </div>
                </div>
                </div>

                <!-- Application Process Category -->
                <!-- <div class="home-faq-category"> -->
                    <!-- <h3 class="home-faq-category-title">Application Process</h3> -->
                    
                    

                <!-- Interest Rates Category -->
                <!-- <div class="home-faq-category"> -->
                    <!-- <h3 class="home-faq-category-title">Interest Rates & Charges</h3> -->
                    
                    
                </div>
            </div>
        </div>
    </section>


</main>

@include('dhara-jfin.layout.footer')

<script>
        
    

        // Tab functionality
        const tabs = document.querySelectorAll('.home-tab');
        const tabContents = document.querySelectorAll('.home-tab-content');

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                const target = tab.dataset.tab;
                
                tabs.forEach(t => t.classList.remove('active'));
                tabContents.forEach(tc => tc.classList.remove('active'));
                
                tab.classList.add('active');
                document.getElementById(target).classList.add('active');
            });
        });

        // FAQ accordion
        const faqItems = document.querySelectorAll('.home-faq-item');

        faqItems.forEach(item => {
            const question = item.querySelector('.home-faq-question');
            
            question.addEventListener('click', () => {
                const isActive = item.classList.contains('active');
                
                // Close all other items
                faqItems.forEach(i => i.classList.remove('active'));
                
                // Toggle current item
                if (!isActive) {
                    item.classList.add('active');
                }
            });
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add scroll-triggered animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe feature cards and benefit cards
        document.querySelectorAll('.home-feature-card, .home-benefit-card').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'opacity 0.6s ease-out, transform 0.6s ease-out';
            observer.observe(card);
        });
</script>

<script src="{{ asset('theme/dhara-jfin/js/chatbot.js') }}"></script>

