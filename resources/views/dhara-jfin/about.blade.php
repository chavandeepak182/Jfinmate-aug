@section('title', 'Financial Services Company in Pune | JFinserve')

@section('meta_description', 'A financial services provider in Pune offering home loans, MSME loans, project finance, LAP and personalized loan solutions.')

@section('meta_keywords', 'Financial Services Company in Pune, Financial Services Provider in Pune, Financial Consultant in Pune, Loan Consultant in Pune, Financial Consulting Services in Pune, Loan Services in Pune, Financial Services in PCMC')

@push('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "AboutPage",
  "@id": "https://jfinserv.com/about#aboutpage",
  "url": "https://jfinserv.com/about",
  "name": "About JF Finserve",
  "description": "JF Finserve is a financial consulting company that helps individuals, business owners, entrepreneurs and property developers explore suitable financing solutions. Its services include home loans, loans against property, project finance, MSME loans and overdraft facilities.",
  "mainEntity": {
    "@type": "Organization",
    "@id": "https://jfinserv.com/#organization",
    "name": "JF Finserve",
    "url": "https://jfinserv.com/",
    "description": "JF Finserve provides financial consulting and loan assistance services to individuals and businesses. The company helps clients explore financing options for residential property purchases, commercial projects, business expansion and property-backed funding through lending partners.",
    "knowsAbout": [
      "Home Loans",
      "Loan Against Property",
      "Project Finance",
      "MSME Loans",<div class="container-fluid">
      "Overdraft Facilities",
      "Business Loans",
      "Property Financing",
      "Financial Consulting"
    ],
    "areaServed": {
      "@type": "Country",
      "name": "India"
    },
    "hasOfferCatalog": {
      "@type": "OfferCatalog",
      "name": "JF Finserve Financial Services",
      "itemListElement": [
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Home Loan",
            "url": "https://jfinserv.com/home-loan"
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Loan Against Property",
            "url": "https://jfinserv.com/loan-against-property"
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Project Loan",
            "url": "https://jfinserv.com/project-loan"
          }
        }
      ]
    }
  },
  "isPartOf": {
    "@type": "WebSite",
    "@id": "https://jfinserv.com/#website",
    "url": "https://jfinserv.com/",
    "name": "JF Finserve"
  },
  "inLanguage": "en-IN"
}
</script>
@endpush
@include('dhara-jfin.layout.header')


<main>
        <!-- <section class="video-hero">
        <video id="videobcg" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
        <source src="{{ asset('theme/dhara-jfin/videos/about_us_banner.mp4') }}" type="video/mp4">
        </video>
    <div class="video-banner-overlay">
        <div class="video-overlay-content">
            <h1>Empowering your<span> Financial </span>Journey</h1>
           
        </div>
    </div>
</section> -->

<!-- Financial Journey Section -->
<section class="financial-journey-section">

    <div class="container">

        <!-- Heading -->
        <div class="section-header mt-6">

            <h4 class="finserv-eyebrow" style="color:#295cab;">
                About Company
            </h4>

            <h2 class="finserv-trusted" style="color:#295cab;">
                Empowering your
                <strong style="color:#00abeb">financial journey</strong>
            </h2>

            <p>
                Jfinserv Consultant India Private Limited with many finance partners
                strives to get the best loan deals and offers online in just a few clicks.
            </p>

        </div>


        <!-- Images -->
        <div class="financial-journey-images">

            <!-- Left Image -->
            <div class="journey-image journey-image-left">

                <img
                    src="{{ asset('theme/dhara-jfin/img/financial-growth.png') }}"
                    alt="Financial growth and loan solutions"
                >

            </div>


            <!-- Center Image -->
            <div class="journey-image journey-image-center">

                <img
                    src="{{ asset('theme/dhara-jfin/img/financial-planning.png') }}"
                    alt="Financial planning and loan consultation"
                >

            </div>


            <!-- Right Image -->
            <div class="journey-image journey-image-right">

                <img
                    src="{{ asset('theme/dhara-jfin/img/loan-consultation.png') }}"
                    alt="Loan consultation and financial services"
                >

            </div>

        </div>


        <!-- Statistics -->
        <div class="journey-statistics">

            <div class="journey-stat">

                <h3>
                    250 <span>+</span>
                </h3>

                <p>
                    Disbursed Loans
                </p>

            </div>


            <div class="journey-stat">

                <h3>
                    7 <span>+</span>
                </h3>

                <p>
                    Awards Won
                </p>

            </div>


            <div class="journey-stat">

                <h3>
                    50 <span>+</span>
                </h3>

                <p>
                    Skilled Agents
                </p>

            </div>


            <div class="journey-stat">

                <h3>
                    75 <span>+</span>
                </h3>

                <p>
                    Team Members
                </p>

            </div>

        </div>

    </div>

</section>




<!-- Property Financing Section -->
<section class="property-financing-section">

    <div class="property-financing-container">

        <!-- Heading -->
      


<div class="section-header mt-6">

    
  
            <h2 class="finserv-trusted" style="color:#295cab;">
                We Take Care of All
                <strong style="color:#00abeb">Your Property Financing Needs</strong>
            </h2>

            <!-- <p>
                Jfinserv Consultant India Private Limited with many finance partners
                strives to get the best loan deals and offers online in just a few clicks.
            </p> -->

        </div>
        <!-- Main Content -->
        <div class="property-financing-content">

            <!-- LEFT SIDE -->
            <div class="property-financing-left">

                <div class="financing-item">
                    <div class="financing-icon">
                        <i class="fas fa-calculator"></i>
                    </div>

                    <div class="financing-text">
                        Calculate your purchasing power
                    </div>
                </div>


                <div class="financing-item">
                    <div class="financing-icon">
                        <i class="fas fa-tools"></i>
                    </div>

                    <div class="financing-text">
                        Renovate or upgrade your home
                    </div>
                </div>


                <div class="financing-item">
                    <div class="financing-icon">
                        <i class="fas fa-weight-hanging"></i>
                    </div>

                    <div class="financing-text">
                        Refinance your existing loan
                    </div>
                </div>

            </div>


            <!-- CENTER IMAGE -->
            <div class="property-financing-image">

                <img
                    src="{{ asset('theme/dhara-jfin/img/about-home.png') }}"
                    alt="Property financing home"
                >

            </div>


            <!-- RIGHT SIDE -->
            <div class="property-financing-right">

                <div class="financing-item">
                    <div class="financing-icon">
                        <i class="fas fa-piggy-bank"></i>
                    </div>

                    <div class="financing-text">
                        Use the equity in your home for a
                        personal investment
                    </div>
                </div>


                <div class="financing-item">
                    <div class="financing-icon">
                        <i class="fas fa-home"></i>
                    </div>

                    <div class="financing-text">
                        Buy your home
                    </div>
                </div>


                <div class="financing-item">
                    <div class="financing-icon">
                        <i class="fas fa-folder"></i>
                    </div>

                    <div class="financing-text">
                        Expand your property portfolio
                    </div>
                </div>

            </div>

        </div>

    </div>

</section>



<!-- Mission / Values / Vision Section -->
<section class="mission-values-section">
    <div class="container">

        <div class="mission-values-row">

            <!-- Our Mission -->
            <div class="mission-values-item">

                <div class="mission-values-image">
                    <img src="{{ asset('theme/dhara-jfin/img/mission.png') }}"
                         alt="Our Mission - JFinserv">
                </div>

                <div class="mission-values-content">
                    <h3>Our Mission</h3>

                    <p>
                        Our mission is to be the leading finance company,
                        offering secured loans at competitive rates. We
                        focus on maximizing shareholder value while
                        delivering exceptional, customer-centered service.
                    </p>
                </div>

            </div>


            <!-- Our Values -->
            <div class="mission-values-item">

                <div class="mission-values-image">
                    <img src="{{ asset('theme/dhara-jfin/img/values.png') }}"
                         alt="Our Values - JFinserv">
                </div>

                <div class="mission-values-content">
                    <h3>Our Values</h3>

                    <p>
                        We are transitioning into a knowledge-driven
                        organization by enhancing operational autonomy
                        and fostering a strong sense of ownership among
                        employees.
                    </p>
                </div>

            </div>


            <!-- Our Vision -->
            <div class="mission-values-item">

                <div class="mission-values-image">
                    <img src="{{ asset('theme/dhara-jfin/img/vision.png') }}"
                         alt="Our Vision - JFinserv">
                </div>

                <div class="mission-values-content">
                    <h3>Our Vision</h3>

                    <p>
                        To be a leading financial consulting firm, delivering
                        innovative, customized solutions for sustainable
                        client growth, while upholding a culture of
                        excellence and integrity.
                    </p>
                </div>

            </div>

        </div>

    </div>
</section>

<!-- Our Principles Section -->
<section class="jfin-principles">
<div class="container-fluid">
        <div class="section-header mt-6">

    
  
            <h2 class="finserv-trusted" style="color:#295cab;">
                Our 
                <strong style="color:#00abeb">Principles</strong>
            </h2>

            <p>
                Every financial decision deserves clear guidance, transparent communication
                and support you can trust. Here's how we approach your loan journey.
            </p>

        </div>

        <!-- Principles Cards -->
        <div class="jfin-principles-grid">

            <!-- Card 1 -->
            <div class="jfin-principle-card">
                <div class="jfin-principle-icon">
                    <i class="fas fa-balance-scale"></i>
                </div>
                <div class="jfin-principle-content">
                    <h4>Transparent Guidance</h4>
                    <p>
                        We help you understand available loan options based on your
                        financial profile, eligibility and requirements, so you can
                        make informed decisions.
                    </p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="jfin-principle-card">
                <div class="jfin-principle-icon">
                    <i class="fas fa-hands-helping"></i>
                </div>
                <div class="jfin-principle-content">
                    <h4>Customer-Focused Support</h4>
                    <p>
                        We guide you through the loan process, from understanding
                        eligibility and preparing documents to coordinating with
                        relevant financial partners.
                    </p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="jfin-principle-card">
                <div class="jfin-principle-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="jfin-principle-content">
                    <h4>Local Market Understanding</h4>
                    <p>
                        With a focus on Pune and PCMC, we help customers navigate
                        financing requirements with practical guidance tailored
                        to their needs.
                    </p>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="jfin-principle-card">
                <div class="jfin-principle-icon">
                    <i class="fas fa-tachometer-alt"></i>
                </div>
                <div class="jfin-principle-content">
                    <h4>Convenient Assistance</h4>
                    <p>
                        Get support with documentation, application preparation
                        and process coordination to make your loan journey
                        more convenient.
                    </p>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="jfin-principle-card">
                <div class="jfin-principle-icon">
                    <i class="fas fa-bolt"></i>
                </div>
                <div class="jfin-principle-content">
                    <h4>Efficient Processing Support</h4>
                    <p>
                        We help you prepare the required documents and coordinate
                        with financial partners to keep your application moving
                        efficiently. Approval timelines depend on the lender
                        and your eligibility.
                    </p>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="jfin-principle-card">
                <div class="jfin-principle-icon">
                    <i class="fas fa-chart-column"></i>
                </div>
                <div class="jfin-principle-content">
                    <h4>Honest Financial Assessment</h4>
                    <p>
                        We explain eligibility requirements, highlight potential
                        challenges and help you understand your options without
                        making unrealistic promises about loan approval or
                        interest rates.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Font Awesome -->
<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>
/* ==============================
   OUR PRINCIPLES SECTION
================================= */

.jfin-principles {
    width: 100%;
    padding: 18px 0 72px;
    background: #f9fbfe;
    font-family: Arial, Helvetica, sans-serif;
    box-sizing: border-box;
}

.jfin-principles *,
.jfin-principles *::before,
.jfin-principles *::after {
    box-sizing: border-box;
}

.jfin-principles .container-fluid {
    width: 100%;
    max-width: 1500px;
    margin: 0 auto;
    padding: 0 6%;
}

/* Heading */

.jfin-principles-heading {
    text-align: center;
    margin-bottom: 24px;
}

.jfin-principles-heading h2 {
    margin: 0 0 2px;
    color: #333333;
    font-size: 14px;
    line-height: 1.4;
    font-weight: 700;
}

.jfin-principles-heading h3 {
    margin: 0 0 5px;
    color: #2670e8;
    font-size: 9px;
    line-height: 1.5;
    font-weight: 400;
}

.jfin-principles-heading p {
    margin: 0 auto;
    color: #777777;
    font-size: 8px;
    line-height: 1.6;
    font-weight: 400;
}

/* Grid */

.jfin-principles-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 12px;
}

/* Cards */

.jfin-principle-card {
    position: relative;
    min-width: 0;
    min-height: 149px;
    height: 246px;
    width: 325px;
    padding: 0;
    overflow: hidden;
    background: #ffffff;
    border: 1px solid #edf2fc;
    border-radius: 6px;
    box-shadow: 0 2px 7px rgba(36, 94, 180, 0.07);
    transition: transform 0.25s ease,
                box-shadow 0.25s ease;
}

.jfin-principle-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 16px rgba(36, 94, 180, 0.12);
}

/* Blue Icon Box */

.jfin-principle-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 53px;
    height: 53px;
    background: #2c6fe8;
    color: #ffffff;
    border-radius: 0 0 4px 0;
}

.jfin-principle-icon i {
    font-size: 13px;
    line-height: 1;
}

/* Card Text */

.jfin-principle-content {
    padding: 25px 13px 15px;
}

.jfin-principle-content h4 {
    margin: 0 0 5px;
    color: #303030;
    font-size: 18px;
    line-height: 1.35;
    font-weight: 600;
}

.jfin-principle-content p {
    margin: 0;
    color: #737373;
    font-size: 16px;
    line-height: 1.35;
    font-weight: 400;
}

/* Tablet */

@media (max-width: 991px) {
    .jfin-principles .container-fluid {
        padding: 0 25px;
    }

    .jfin-principles-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 15px;
    }

    .jfin-principle-card {
        min-height: 155px;
    }

    .jfin-principle-content h4 {
        font-size: 14px;
    }

    .jfin-principle-content p {
        font-size: 11px;
    }
}

/* Mobile */

@media (max-width: 576px) {
    .jfin-principles {
        padding: 30px 0 45px;
    }

    .jfin-principles .container-fluid {
        padding: 0 16px;
    }

    .jfin-principles-heading {
        margin-bottom: 22px;
    }

    .jfin-principles-heading h2 {
        font-size: 21px;
    }

    .jfin-principles-heading h3 {
        font-size: 12px;
    }

    .jfin-principles-heading p {
        max-width: 360px;
        font-size: 11px;
        line-height: 1.6;
    }

    .jfin-principles-grid {
        grid-template-columns: 1fr;
        gap: 15px;
    }

    .jfin-principle-card {
        min-height: 145px;
    }

    .jfin-principle-icon {
        width: 45px;
        height: 42px;
    }

    .jfin-principle-icon i {
        font-size: 15px;
    }

    .jfin-principle-content {
        padding: 20px 15px 18px;
    }

    .jfin-principle-content h4 {
        font-size: 15px;
        margin-bottom: 7px;
    }

    .jfin-principle-content p {
        font-size: 12px;
        line-height: 1.6;
    }
    /* Mobile only – center the principle cards */
@media (max-width: 576px) {
    .jfin-principles-grid {
        grid-template-columns: 1fr;
        justify-items: center;
    }

    .jfin-principle-card {
        width: 100%;
        max-width: 340px;
        height: auto;
        margin: 0 auto;
    }
}
}
</style>



       
<!-- ==========================================
     AWARDS SECTION
========================================== -->

<section class="awards-section">

    <div class="container-tab">

        <!-- Heading -->
        
        <div class="section-header mt-6">
            <h4 class="finserv-eyebrow" style="color:#295cab;">Our awards</h4>
            <h2 class="finserv-trusted" style="color:#295cab;">
               Top Corporate <strong style="color:#00abeb">Recognitions</strong>
            </h2>
            
        </div>


        <!-- Awards Grid -->
        <div class="awards-grid">


            <!-- ==============================
                 AWARD 1
            =============================== -->
            <div class="award-card">

                <!-- Trophy -->
                <div class="award-trophy">
                    <img src="{{ asset('theme/dhara-jfin/img/trophy.png') }}"
                         alt="Award Trophy">
                </div>

                <!-- Award Information -->
                <div class="award-info">

                    <!-- Bank Logo -->
                    <div class="bank-logo">
                        <img src="{{ asset('theme/dhara-jfin/img/award_logo/home_rank.jpg') }}"
                             alt="PNB">
                    </div>

                    <!-- Award Name -->
                    <div class="award-name">
                        Home Loan Sourcing
                    </div>

                    <div class="award-bottom">
                        Rank 1<sup>st</sup>
                        <span>(Year 2023-24)</span>
                    </div>

                </div>

            </div>


            <!-- ==============================
                 AWARD 2
            =============================== -->
            <div class="award-card">

                <div class="award-trophy">
                    <img src="{{ asset('theme/dhara-jfin/img/trophy.png') }}"
                         alt="Award Trophy">
                </div>

                <div class="award-info">

                    <div class="bank-logo">
                        <img src="{{ asset('theme/dhara-jfin/img/award_logo/Preferred Business Partner.jpg') }}"
                             alt="ARKA FinCap">
                    </div>

                    <div class="award-name">
                        Preferred Business Partner
                    </div>

                    <div class="award-bottom">
                        <span>(Year 2023-24)</span>
                    </div>

                </div>

            </div>


            <!-- ==============================
                 AWARD 3
            =============================== -->
            <div class="award-card">

                <div class="award-trophy">
                    <img src="{{ asset('theme/dhara-jfin/img/trophy.png') }}"
                         alt="Award Trophy">
                </div>

                <div class="award-info">

                    <div class="bank-logo">
                        <img src="{{ asset('theme/dhara-jfin/img/award_logo/pnb.jpg') }}"
                             alt="Bank of Maharashtra">
                    </div>

                    <div class="award-name">
                        For Mobilizing Mortgage Loan -
                    </div>

                    <div class="award-bottom">
                        Rank 1<sup>st</sup>
                        <span>(Year 2021-22)</span>
                    </div>

                </div>

            </div>


            <!-- ==============================
                 AWARD 4
            =============================== -->
            <div class="award-card">

                <div class="award-trophy">
                    <img src="{{ asset('theme/dhara-jfin/img/trophy.png') }}"
                         alt="Award Trophy">
                </div>

                <div class="award-info">

                    <div class="bank-logo">
                        <img src="{{ asset('theme/dhara-jfin/img/award_logo/Best Category in Business.jpg') }}"
                             alt="ANAND RATHI">
                    </div>

                    <div class="award-name">
                        Best Category in Business
                    </div>

                    <div class="award-bottom">
                        <span>(Year 2022-23)</span>
                    </div>

                </div>

            </div>


            <!-- ==============================
                 AWARD 5
            =============================== -->
            <div class="award-card">

                <div class="award-trophy">
                    <img src="{{ asset('theme/dhara-jfin/img/trophy.png') }}"
                         alt="Award Trophy">
                </div>

                <div class="award-info">

                    <div class="bank-logo">
                        <img src="{{ asset('theme/dhara-jfin/img/award_logo/bom.jpg') }}"
                             alt="PNB">
                    </div>

                    <div class="award-name">
                        For Mobilizing Mortgage Loan -
                    </div>

                    <div class="award-bottom">
                        Rank 1<sup>st</sup>
                        <span>(Year 2022-23)</span>
                    </div>

                </div>

            </div>


            <!-- ==============================
                 AWARD 6
            =============================== -->
            <div class="award-card">

                <div class="award-trophy">
                    <img src="{{ asset('theme/dhara-jfin/img/trophy.png') }}"
                         alt="Award Trophy">
                </div>

                <div class="award-info">

                    <div class="bank-logo">
                        <img src="{{ asset('theme/dhara-jfin/img/award_logo/tpd.png') }}"
                             alt="Top Performing DSA">
                    </div>

                    <div class="award-name">
                        Top Performing DSA
                    </div>

                    <div class="award-bottom">
                        <span>(Year 2021-22)</span>
                    </div>

                </div>

            </div>


        </div>

    </div>

</section>






        <section class="about-page-page-hero">
        <div class="about-page-hero-content">
            <div class="about-page-hero-label">About JFINSERV</div>
            <h1 class="about-page-hero-title">Meet the People Behind Your Financial Success</h1>
            <p class="about-page-hero-description">Our dedicated team of financial experts brings years of experience and commitment to helping you achieve your financial goals with personalized guidance and support.</p>
        </div>
    </section>

    <!-- Our Team Section -->
    <section class="about-page-team-section">
        <div class="about-page-section-container">
            <div class="about-page-section-header">
                <!-- <div class="about-page-section-label">Our Team</div> -->
                 <h2 class="finserv-trusted" style="color:#295cab;">
               The Team Behind 

                <strong style="color:#00abeb">Your Financial Journey</strong>
            </h2>
               
                <p class="about-page-section-subtitle">Our team provides expert guidance and personalised support to help you navigate your financial needs with confidence.</p>
            </div>
            
            <div class="about-page-team-grid">
                <!-- Team Member 1 -->
                <div class="about-page-team-card">
                    <div class="about-page-team-image">
                        <img src="{{ asset('theme') }}/dhara-jfin/img/team_new/dilip-y.jpg" alt="JF Finserve team member Dilip Y">
                    </div>
                    <div class="about-page-team-overlay">
                        <ul class="about-page-team-social">
                            <li><a href="#" class="about-page-social-icon"></a></li>
                        </ul>
                    </div>
                    <div class="about-page-team-info">
                        <h3 class="about-page-team-name">Dilip Kumar</h3>
                        <span class="about-page-team-designation">Managing Director</span>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div class="about-page-team-card">
                    <div class="about-page-team-image">
                        <img src="{{ asset('theme') }}/dhara-jfin/img/team_new/parag.png" alt="JF Finserve team member Parag">
                    </div>
                    <div class="about-page-team-overlay">
                        <ul class="about-page-team-social">
                            <li><a href="#" class="about-page-social-icon"></a></li>
                        </ul>
                    </div>
                    <div class="about-page-team-info">
                        <h3 class="about-page-team-name">Parag Bhosale</h3>
                        <span class="about-page-team-designation">Sales Manager</span>
                    </div>
                </div>

                <!-- Team Member 3 -->
                <div class="about-page-team-card">
                    <div class="about-page-team-image">
                        <img src="{{ asset('theme') }}/dhara-jfin/img/team_new/deepak.webp" alt="Nidhi Sonigra">
                    </div>
                    <div class="about-page-team-overlay">
                        <ul class="about-page-team-social">
                            <li><a href="https://www.linkedin.com/in/deepak-chavan-970a40193" class="about-page-social-icon"></a></li>
                        </ul>
                    </div>
                    <div class="about-page-team-info">
                        <h3 class="about-page-team-name">Deepak  Chavan</h3>
                        <span class="about-page-team-designation">Technical Team Lead</span>
                    </div>
                </div>

                <!-- Team Member 4 -->
                <div class="about-page-team-card">
                    <div class="about-page-team-image">
                        <img src="{{ asset('theme') }}/dhara-jfin/img/team_new/lokesh.png" alt="JF Finserve team member Lokesh">
                    </div>
                    <div class="about-page-team-overlay">
                        <ul class="about-page-team-social">
                            <li><a href="#" class="about-page-social-icon"></a></li>
                        </ul>
                    </div>
                    <div class="about-page-team-info">
                        <h3 class="about-page-team-name">Lokesh Bhosale</h3>
                        <span class="about-page-team-designation">Sales Manager</span>
                    </div>
                </div>
                <div class="about-page-team-card">
                    <div class="about-page-team-image">
                        <img src="{{ asset('theme') }}/dhara-jfin/img/team_new/pooja.webp" alt="Nidhi Sonigra">
                    </div>
                    <div class="about-page-team-overlay">
                        <ul class="about-page-team-social">
                            <li><a href="#" class="about-page-social-icon"></a></li>
                        </ul>
                    </div>
                    <div class="about-page-team-info">
                        <h3 class="about-page-team-name">Pooja Mohite</h3>
                        <span class="about-page-team-designation">HR Generalist</span>
                    </div>
                </div>

                <!-- Team Member 5 -->
                <div class="about-page-team-card">
                    <div class="about-page-team-image">
                        <img src="{{ asset('theme') }}/dhara-jfin/img/team_new/praksh.png" alt="JF Finserve team member Praksh">
                    </div>
                    <div class="about-page-team-overlay">
                        <ul class="about-page-team-social">
                            <li><a href="#" class="about-page-social-icon"></a></li>
                        </ul>
                    </div>
                    <div class="about-page-team-info">
                        <h3 class="about-page-team-name">Prakash Malage</h3>
                        <span class="about-page-team-designation">Home Loan Specialist</span>
                    </div>
                </div>

                <!-- Team Member 6 -->
                <!-- <div class="about-page-team-card">
                    <div class="about-page-team-image">
                        <img src="{{ asset('theme') }}/dhara-jfin/img/team_new/dummy.jpg" alt="Kevin Sunny">
                    </div>
                    <div class="about-page-team-overlay">
                        <ul class="about-page-team-social">
                            <li><a href="#" class="about-page-social-icon"></a></li>
                        </ul>
                    </div>
                    <div class="about-page-team-info">
                        <h3 class="about-page-team-name">Kevin Sunny</h3>
                        <span class="about-page-team-designation">Sales Executive</span>
                    </div>
                </div> -->

                <!-- Team Member 7 -->
                <!-- <div class="about-page-team-card">
                    <div class="about-page-team-image">
                        <img src="{{ asset('theme') }}/dhara-jfin/img/team_new/avinash.png" alt="Avinash Bodke">
                    </div>
                    <div class="about-page-team-overlay">
                        <ul class="about-page-team-social">
                            <li><a href="#" class="about-page-social-icon"></a></li>
                        </ul>
                    </div>
                    <div class="about-page-team-info">
                        <h3 class="about-page-team-name">Avinash Bodke</h3>
                        <span class="about-page-team-designation">Senior Accountant</span>
                    </div>
                </div> -->

                <!-- Team Member 8 -->
                <div class="about-page-team-card">
                    <div class="about-page-team-image">
                        <img src="{{ asset('theme') }}/dhara-jfin/img/team_new/rushi.png" alt="JF Finserve team member Rushi">
                    </div>
                    <div class="about-page-team-overlay">
                        <ul class="about-page-team-social">
                            <li><a href="#" class="about-page-social-icon"></a></li>
                        </ul>
                    </div>
                    <div class="about-page-team-info">
                        <h3 class="about-page-team-name">Rushikesh Suryavanshi</h3>
                        <span class="about-page-team-designation">Accountant</span>
                    </div>
                </div>

                <!-- Team Member 9 -->
                <div class="about-page-team-card">
                    <div class="about-page-team-image">
                        <img src="{{ asset('theme') }}/dhara-jfin/img/team_new/sara-s.webp" alt="JF Finserve team member profile placeholder">
                    </div>
                    <div class="about-page-team-overlay">
                        <ul class="about-page-team-social">
                            <li><a href="#" class="about-page-social-icon"></a></li>
                        </ul>
                    </div>
                    <div class="about-page-team-info">
                        <h3 class="about-page-team-name">Sara Shaikh</h3>
                        <span class="about-page-team-designation">Executive Officer</span>
                    </div>
                </div>

                <!-- Team Member 10 -->
                <div class="about-page-team-card">
                    <div class="about-page-team-image">
                        <img src="{{ asset('theme') }}/dhara-jfin/img/team_new/sonali-b.webp" alt="JF Finserve team member profile placeholder">
                    </div>
                    <div class="about-page-team-overlay">
                        <ul class="about-page-team-social">
                            <li><a href="#" class="about-page-social-icon"></a></li>
                        </ul>
                    </div>
                    <div class="about-page-team-info">
                        <h3 class="about-page-team-name">Sonali Bhosale</h3>
                        <span class="about-page-team-designation">Executive Officer</span>
                    </div>
                </div>

                <!-- Team Member 11 -->
                <!-- <div class="about-page-team-card">
                    <div class="about-page-team-image">
                        <img src="{{ asset('theme') }}/dhara-jfin/img/team_new/astha.png" alt="Aasta Rokade">
                    </div>
                    <div class="about-page-team-overlay">
                        <ul class="about-page-team-social">
                            <li><a href="#" class="about-page-social-icon"></a></li>
                        </ul>
                    </div>
                    <div class="about-page-team-info">
                        <h3 class="about-page-team-name">Aasta Rokade</h3>
                        <span class="about-page-team-designation">Executive Telecaller</span>
                    </div>
                </div> -->

                <!-- Team Member 12 -->
                <!-- <div class="about-page-team-card">
                    <div class="about-page-team-image">
                        <img src="{{ asset('theme') }}/dhara-jfin/img/team_new/nikita.png" alt="Nikita Sanap">
                    </div>
                    <div class="about-page-team-overlay">
                        <ul class="about-page-team-social">
                            <li><a href="#" class="about-page-social-icon"></a></li>
                        </ul>
                    </div>
                    <div class="about-page-team-info">
                        <h3 class="about-page-team-name">Nikita Sanap</h3>
                        <span class="about-page-team-designation">Executive Telecaller</span>
                    </div>
                </div> -->

            </div>
        </div>
    </section>

    </main>

    @include('dhara-jfin.layout.footer')
    
<script src="{{ asset('theme/dhara-jfin/js/chatbot.js') }}"></script>
