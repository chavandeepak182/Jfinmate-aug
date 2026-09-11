@include('dhara-jfin.layout.header')


<main>
    <style>
        /* =========================================================
   JFIN PROCESS - MOBILE RESPONSIVE ONLY
   ADD AT THE VERY END OF CSS
========================================================= */


/* =========================================================
   TABLET / MOBILE
========================================================= */

@media (max-width: 768px) {

    /* Main section */
    .jf-process {
        width: 100%;
        padding: 60px 15px !important;
        overflow: hidden;
    }

    .jf-process .jf-container {
        width: 100%;
        max-width: 100%;
        padding: 0 !important;
        margin: 0 auto;
    }


    /* -----------------------------------------
       SECTION HEADING
    ----------------------------------------- */

    .jf-process .jf-section-heading {
        width: 100%;
        max-width: 100%;
        margin: 0 auto 30px !important;
        padding: 0 5px;

        text-align: center;
    }

    .jf-process .eyebrow {
        display: block;

        margin: 0 0 9px !important;

        font-size: 11px !important;
        line-height: 1.4;

        letter-spacing: 1px;

        color: #00abe9 !important;
    }

    .jf-process .jf-section-heading h2 {
        width: 100%;

        margin: 0 0 10px !important;

        font-size: 28px !important;
        line-height: 1.25 !important;

        color: #fff;
    }

    .jf-process .jf-section-heading p {
        width: 100%;

        margin: 0 auto !important;

        font-size: 14px !important;
        line-height: 1.55 !important;

        color: rgba(255,255,255,0.72);
    }


    /* -----------------------------------------
       INTRO BOX
    ----------------------------------------- */

    .jf-process-intro {
        width: 100%;
        max-width: 100%;

        display: flex !important;

        align-items: flex-start !important;

        gap: 12px !important;

        margin: 0 auto 40px !important;

        padding: 18px !important;

        border-radius: 14px !important;

        box-sizing: border-box;
    }

    .jf-process-quote-icon {
        flex: 0 0 36px !important;

        width: 36px !important;
        height: 36px !important;

        font-size: 14px !important;

        background: #00abe9 !important;

        color: #fff !important;
    }

    .jf-process-intro p {
        width: auto;

        flex: 1;

        margin: 0 !important;

        font-size: 13px !important;
        line-height: 1.65 !important;

        text-align: left;

        color: rgba(255,255,255,0.82);
    }


    /* -----------------------------------------
       INFOGRAPHIC
    ----------------------------------------- */

    .jf-process-infographic {
        position: relative;

        width: 100% !important;

        display: flex !important;

        flex-direction: column !important;

        align-items: center !important;

        gap: 0 !important;

        margin: 0 !important;

        padding: 0 !important;
    }


    /* -----------------------------------------
       VERTICAL CONNECTING LINE
    ----------------------------------------- */

    .jf-process-line {
        display: block !important;

        position: absolute !important;

        top: 40px !important;
        bottom: 40px !important;

        left: 50% !important;
        right: auto !important;

        width: 2px !important;
        height: auto !important;

        transform: translateX(-50%) !important;

        background:
            linear-gradient(
                180deg,
                rgba(0,171,233,0.15),
                #00abe9,
                rgba(0,171,233,0.15)
            ) !important;

        z-index: 0 !important;
    }


    /* -----------------------------------------
       EACH STEP
    ----------------------------------------- */

    .jf-process-card {
        position: relative !important;

        z-index: 1 !important;

        width: 100% !important;
        max-width: 100% !important;

        display: flex !important;

        flex-direction: column !important;

        align-items: center !important;

        justify-content: flex-start !important;

        padding: 0 10px 45px !important;

        margin: 0 !important;

        text-align: center !important;

        box-sizing: border-box;
    }

    .jf-process-card:last-child {
        padding-bottom: 10px !important;
    }


    /* -----------------------------------------
       STEP ICON
    ----------------------------------------- */

    .jf-process-icon {
        position: relative !important;

        z-index: 2 !important;

        width: 82px !important;
        height: 82px !important;

        min-width: 82px !important;
        min-height: 82px !important;

        margin: 0 auto 10px !important;

        display: flex !important;

        align-items: center !important;
        justify-content: center !important;

        border: 5px solid #00abe9 !important;

        border-radius: 50% !important;

        background: #fff !important;

        color: #07547d !important;

        font-size: 23px !important;

        box-shadow:
            0 8px 25px rgba(0,0,0,0.20);

        box-sizing: border-box;
    }


    /* -----------------------------------------
       STEP NUMBER
    ----------------------------------------- */

    .jf-process-number {
        position: relative !important;

        z-index: 3 !important;

        display: inline-flex !important;

        align-items: center !important;
        justify-content: center !important;

        min-width: 42px !important;
        height: 25px !important;

        margin: 0 auto 9px !important;

        padding: 0 9px !important;

        border-radius: 20px !important;

        background: #07547d !important;

        border: 1px solid #00abe9 !important;

        color: #00abe9 !important;

        font-size: 11px !important;
        font-weight: 800 !important;

        line-height: 1 !important;

        box-sizing: border-box;
    }


    /* -----------------------------------------
       STEP CONTENT
    ----------------------------------------- */

    .jf-process-card-content {
        position: relative;

        z-index: 2;

        width: 100% !important;

        max-width: 340px !important;

        margin: 0 auto !important;

        padding: 0 !important;

        text-align: center !important;
    }

    .jf-process-card-content h3 {
        width: 100%;

        margin: 0 0 8px !important;

        font-size: 17px !important;
        line-height: 1.4 !important;

        color: #fff !important;
    }

    .jf-process-card-content p {
        width: 100%;

        margin: 0 !important;

        font-size: 13px !important;
        line-height: 1.6 !important;

        color: rgba(255,255,255,0.67) !important;
    }


    /* -----------------------------------------
       FOOTNOTE
    ----------------------------------------- */

    .jf-process .jf-footnote {
        width: 100%;

        margin: 25px auto 0 !important;

        padding: 0 10px;

        text-align: center;

        font-size: 11px !important;
        line-height: 1.5;

        color: rgba(255,255,255,0.5) !important;
    }
}


/* =========================================================
   MOBILE 575px
========================================================= */

@media (max-width: 575px) {

    .jf-process {
        padding: 48px 14px !important;
    }


    /* Heading */

    .jf-process .jf-section-heading {
        margin-bottom: 25px !important;
        padding: 0 3px;
    }

    .jf-process .eyebrow {
        font-size: 10px !important;
        letter-spacing: 0.9px !important;
    }

    .jf-process .jf-section-heading h2 {
        font-size: 25px !important;
        line-height: 1.3 !important;
    }

    .jf-process .jf-section-heading p {
        font-size: 13px !important;
        line-height: 1.55 !important;
    }


    /* Intro */

    .jf-process-intro {
        display: block !important;

        padding: 18px 16px !important;

        margin-bottom: 38px !important;

        text-align: center !important;
    }

    .jf-process-quote-icon {
        margin: 0 auto 12px !important;
    }

    .jf-process-intro p {
        font-size: 12.5px !important;
        line-height: 1.65 !important;

        text-align: center !important;
    }


    /* Steps */

    .jf-process-card {
        padding-left: 5px !important;
        padding-right: 5px !important;
        padding-bottom: 42px !important;
    }

    .jf-process-icon {
        width: 78px !important;
        height: 78px !important;

        min-width: 78px !important;
        min-height: 78px !important;

        border-width: 5px !important;

        font-size: 22px !important;
    }

    .jf-process-number {
        min-width: 40px !important;
        height: 24px !important;

        font-size: 10px !important;
    }

    .jf-process-card-content {
        max-width: 310px !important;
    }

    .jf-process-card-content h3 {
        font-size: 16px !important;
        line-height: 1.4 !important;
    }

    .jf-process-card-content p {
        font-size: 12.5px !important;
        line-height: 1.6 !important;
    }

    .jf-process .jf-footnote {
        margin-top: 20px !important;

        font-size: 10.5px !important;
    }
}


/* =========================================================
   SMALL MOBILE 375px
========================================================= */

@media (max-width: 375px) {

    .jf-process {
        padding: 42px 12px !important;
    }


    .jf-process .jf-section-heading h2 {
        font-size: 23px !important;
    }

    .jf-process .jf-section-heading p {
        font-size: 12.5px !important;
    }


    .jf-process-intro {
        padding: 16px 13px !important;

        border-radius: 12px !important;
    }

    .jf-process-intro p {
        font-size: 12px !important;
    }


    .jf-process-card {
        padding-bottom: 38px !important;
    }


    .jf-process-icon {
        width: 74px !important;
        height: 74px !important;

        min-width: 74px !important;
        min-height: 74px !important;

        font-size: 20px !important;
    }


    .jf-process-number {
        min-width: 38px !important;
        height: 23px !important;

        font-size: 10px !important;
    }


    .jf-process-card-content {
        max-width: 290px !important;
    }


    .jf-process-card-content h3 {
        font-size: 15px !important;
    }

    .jf-process-card-content p {
        font-size: 12px !important;
    }


    .jf-process-line {
        top: 36px !important;
        bottom: 36px !important;
    }
}


/* =========================================================
   EXTRA SMALL 320px
========================================================= */

@media (max-width: 320px) {

    .jf-process {
        padding: 38px 10px !important;
    }


    .jf-process .jf-section-heading h2 {
        font-size: 21px !important;
    }


    .jf-process .jf-section-heading p {
        font-size: 12px !important;
    }


    .jf-process-intro {
        padding: 15px 12px !important;
    }

    .jf-process-intro p {
        font-size: 11.5px !important;
    }


    .jf-process-icon {
        width: 70px !important;
        height: 70px !important;

        min-width: 70px !important;
        min-height: 70px !important;

        font-size: 19px !important;
    }


    .jf-process-number {
        min-width: 36px !important;
        height: 22px !important;

        font-size: 9px !important;
    }


    .jf-process-card-content {
        max-width: 270px !important;
    }


    .jf-process-card-content h3 {
        font-size: 14px !important;
    }


    .jf-process-card-content p {
        font-size: 11.5px !important;
    }


    .jf-process-line {
        top: 34px !important;
        bottom: 34px !important;
    }

}
/* =========================================================
   HOME LOAN OVERVIEW - MOBILE RESPONSIVE
========================================================= */

@media (max-width: 768px) {

    /* Main Section */
    .home-section {
        width: 100% !important;

        display: block !important;

        padding: 50px 15px !important;

        margin: 0 !important;

        overflow: hidden !important;

        box-sizing: border-box !important;
    }


    /* Container */
    .home-section .container-tab {
        width: 100% !important;

        max-width: 100% !important;

        margin: 0 auto !important;

        padding: 0 !important;

        box-sizing: border-box !important;
    }


    /* =====================================================
       HEADING
    ===================================================== */

    .home-section-header {
        width: 100% !important;

        display: block !important;

        margin: 0 auto 22px !important;

        padding: 0 !important;

        text-align: center !important;
    }


    .home-section-header .finserv-trusted {
        width: 100% !important;

        margin: 0 0 10px !important;

        padding: 0 !important;

        font-size: 26px !important;

        line-height: 1.3 !important;

        font-weight: 600 !important;

        text-align: center !important;

        word-break: normal !important;

        overflow-wrap: normal !important;
    }


    .home-section-subtitle {
        width: 100% !important;

        margin: 0 auto !important;

        padding: 0 5px !important;

        font-size: 13px !important;

        line-height: 1.55 !important;

        text-align: center !important;

        box-sizing: border-box !important;
    }


    /* =====================================================
       INTRO TEXT
    ===================================================== */

    .home-overview-intro {
        width: 100% !important;

        max-width: 100% !important;

        margin: 0 auto 28px !important;

        padding: 0 5px !important;

        font-size: 13px !important;

        line-height: 1.65 !important;

        text-align: center !important;

        box-sizing: border-box !important;
    }


    /* =====================================================
       FEATURE CARDS
       IMPORTANT: overrides inline grid-template-columns
    ===================================================== */

    .home-feature-cards {
        width: 100% !important;

        max-width: 100% !important;

        display: grid !important;

        grid-template-columns: 1fr !important;

        grid-template-rows: none !important;

        gap: 16px !important;

        margin: 0 !important;

        padding: 0 !important;

        box-sizing: border-box !important;
    }


    /* =====================================================
       INDIVIDUAL CARD
    ===================================================== */

    .home-feature-card {
        width: 100% !important;

        min-width: 0 !important;

        max-width: 100% !important;

        display: block !important;

        padding: 22px 18px !important;

        margin: 0 !important;

        text-align: center !important;

        border-radius: 14px !important;

        box-sizing: border-box !important;

        overflow: hidden !important;
    }


    /* =====================================================
       ICON
    ===================================================== */

    .home-feature-icon {
        width: 58px !important;

        height: 58px !important;

        min-width: 58px !important;

        margin: 0 auto 13px !important;

        display: flex !important;

        align-items: center !important;

        justify-content: center !important;

        font-size: 27px !important;

        line-height: 1 !important;

        border-radius: 50% !important;
    }


    /* =====================================================
       CARD TITLE
    ===================================================== */

    .home-feature-title {
        width: 100% !important;

        margin: 0 0 8px !important;

        padding: 0 !important;

        font-size: 17px !important;

        line-height: 1.4 !important;

        text-align: center !important;

        word-break: normal !important;

        overflow-wrap: break-word !important;
    }


    /* =====================================================
       CARD DESCRIPTION
    ===================================================== */

    .home-feature-description {
        width: 100% !important;

        margin: 0 !important;

        padding: 0 !important;

        font-size: 13px !important;

        line-height: 1.6 !important;

        text-align: center !important;

        word-break: normal !important;

        overflow-wrap: break-word !important;
    }

}


/* =========================================================
   SMALL MOBILE - 575px
========================================================= */

@media (max-width: 575px) {

    .home-section {
        padding: 42px 14px !important;
    }


    .home-section-header {
        margin-bottom: 19px !important;
    }


    .home-section-header .finserv-trusted {
        font-size: 23px !important;

        line-height: 1.3 !important;
    }


    .home-section-subtitle {
        padding: 0 !important;

        font-size: 12.5px !important;

        line-height: 1.55 !important;
    }


    .home-overview-intro {
        padding: 0 2px !important;

        margin-bottom: 24px !important;

        font-size: 12.5px !important;

        line-height: 1.65 !important;
    }


    .home-feature-cards {
        grid-template-columns: 1fr !important;

        gap: 14px !important;
    }


    .home-feature-card {
        padding: 20px 16px !important;

        border-radius: 13px !important;
    }


    .home-feature-icon {
        width: 54px !important;

        height: 54px !important;

        min-width: 54px !important;

        margin-bottom: 11px !important;

        font-size: 25px !important;
    }


    .home-feature-title {
        font-size: 16px !important;

        line-height: 1.4 !important;
    }


    .home-feature-description {
        font-size: 12.5px !important;

        line-height: 1.6 !important;
    }

}


/* =========================================================
   VERY SMALL MOBILE - 375px
========================================================= */

@media (max-width: 375px) {

    .home-section {
        padding: 38px 12px !important;
    }


    .home-section-header .finserv-trusted {
        font-size: 21px !important;
    }


    .home-section-subtitle {
        font-size: 12px !important;
    }


    .home-overview-intro {
        font-size: 12px !important;

        line-height: 1.6 !important;
    }


    .home-feature-card {
        padding: 18px 14px !important;
    }


    .home-feature-icon {
        width: 50px !important;

        height: 50px !important;

        min-width: 50px !important;

        font-size: 23px !important;
    }


    .home-feature-title {
        font-size: 15px !important;
    }


    .home-feature-description {
        font-size: 11.5px !important;
    }

}


/* =========================================================
   EXTRA SMALL - 320px
========================================================= */

@media (max-width: 320px) {

    .home-section {
        padding: 34px 10px !important;
    }


    .home-section-header .finserv-trusted {
        font-size: 20px !important;
    }


    .home-section-subtitle {
        font-size: 11.5px !important;
    }


    .home-overview-intro {
        font-size: 11.5px !important;
    }


    .home-feature-cards {
        gap: 12px !important;
    }


    .home-feature-card {
        padding: 17px 12px !important;
    }


    .home-feature-icon {
        width: 48px !important;

        height: 48px !important;

        min-width: 48px !important;

        font-size: 21px !important;
    }


    .home-feature-title {
        font-size: 14px !important;
    }


    .home-feature-description {
        font-size: 11px !important;

        line-height: 1.55 !important;
    }

}

</style>
    </style>

    {{-- HERO SECTION --}}
    

    {{-- MAIN CONTENT --}}
    <section class="video-hero">
        <video id="videobcg" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
        <source src="{{ asset('theme/dhara-jfin/videos/home_loan_banner.mp4') }}" type="video/mp4">
        </video>
    <div class="video-banner-overlay">
        <div class="video-overlay-content">
            <h1>Secure Your Dream Home with <span>Jfinserv</span></h1>
            <p>Tailored loan solutions for every stage of life</p>
            <a href="{{ route('authv3.login.form') }}" class="btn-primary">
                Apply Now
            </a>
        </div>
    </div>
</section>

    <section class="finserv-wrapper">
        <div class="container-tab">
            <div class="finserv-header">
                <h4 class="finserv-eyebrow">Our Features</h4>
                <h2 class="finserv-trusted" style="color:#295cab;">Finance Your <strong style="color:#00abeb">Dream</strong> Home</h2>
                <p class="home-section-subtitle">
                   At Jfinserv, we understand that buying a home is one of the most significant milestones in your life.
                        Our home loan solutions are designed to provide you with the financial support you need at competitive
                        interest rates, ensuring a smooth and hassle-free journey to homeownership in Pune and PCMC.
                </p>
                <p class="home-overview-intro">
                Whether you are a first-time homebuyer or looking to upgrade to a larger space,
                        we offer tailored products to suit your specific requirements.
                </p>
            </div>
            <div class="about-grid">
                {{-- LEFT CONTENT --}}
                <div class="about-content-left">
            
                    <ul class="home-checklist">
                        <li class="home-checklist-item"><i class="fas fa-check"></i> Competitive Interest Rates starting from 7.10% (as per CIBIL score).</li>
                        <li class="home-checklist-item"><i class="fas fa-check"></i> Flexible Repayment Tenure up to 30 years</li>
                        <li class="home-checklist-item"><i class="fas fa-check"></i> Quick Approval and Seamless Processing</li>
                        <li class="home-checklist-item"><i class="fas fa-check"></i> Minimal Documentation and Transparent Fees</li>
                        <li class="home-checklist-item"><i class="fas fa-check"></i> Balance Transfer Facility with Top-up options</li>
                        <li class="home-checklist-item"><i class="fas fa-check"></i> Expert Guidance throughout the legal and technical process</li>
                    </ul>

                </div>

                {{-- RIGHT IMAGE --}}
                <div class="about-content-right">
                    <div class="about-image-wrapper">
                        <img
                            src="https://images.unsplash.com/photo-1583608205776-bfd35f0d9f83?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80"
                            alt="Modern residential house for home purchase"
                        >
                    </div>
                </div>
            </div>
       
            <div class="about-content-button" style="margin-top: 2rem;">
                        <a href="{{ route('authv3.login.form') }}" class="btn btn-primary-hero" style="padding:1rem 3rem; font-size:1.5rem;">
                            Apply Now
                        </a>
                    </div>
         </div>
    </section>
    
    <!-- overview section  -->
    <section class="home-section">
        <div class="container-tab">
            <div class="home-section-header">
                <h2 class="finserv-trusted" style="color:#295cab;">Why Choose Our <strong style="color:#00abeb">Home</strong> Loan?</h2>
                <p class="home-section-subtitle">
                    Experience hassle-free home financing with India's most trusted lending partner
                </p>
            </div>

            <p class="home-overview-intro">
                Whether you're buying your first home, upgrading to a larger property, or investing in real estate, our home loan solutions are designed to make your journey smooth and stress-free.
            </p>

            <div class="home-feature-cards" style="grid-template-columns: repeat(3, 1fr);">
                <div class="home-feature-card">
                    <div class="home-feature-icon">💰</div>
                    <h3 class="home-feature-title">Competitive Interest Rates</h3>
                    <p class="home-feature-description">
                        Enjoy industry-leading rates starting from 7.10% (as per CIBIL score).
                    </p>
                </div>

                <div class="home-feature-card">
                    <div class="home-feature-icon">📱</div>
                    <h3 class="home-feature-title">100% Digital Application</h3>
                    <p class="home-feature-description">
                        Complete your entire loan application online in minutes. No branch visits, no paperwork hassles.
                    </p>
                </div>

                <div class="home-feature-card">
                    <div class="home-feature-icon">⚡</div>
                    <h3 class="home-feature-title">Fast Disbursal in 48 Hours</h3>
                    <p class="home-feature-description">
                        Get your loan approved and disbursed within 48 hours of document verification with our streamlined process.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- benefits section  -->
    <section class="home-section home-benefits-section">
        <div class="container-tab">
            <div class="home-section-header">
                <h2 class="finserv-trusted" style="color:#295cab;">Our Home Loan <strong style="color:#00abeb">Benefits</strong></h2>
                <p class="home-section-subtitle">
                    Everything you need for a seamless home buying experience
                </p>
            </div>

            <div class="home-benefit-grid">
                <div class="home-benefit-card">
                    <div class="home-benefit-header">
                        <div class="home-benefit-icon">🏠</div>
                        <h3 class="home-benefit-title">Up to 90% Loan-to-Value</h3>
                    </div>
                    <p class="home-benefit-description">
                        Finance up to 90% of your property value with minimal down payment, making homeownership more accessible.
                    </p>
                </div>

                <div class="home-benefit-card">
                    <div class="home-benefit-header">
                        <div class="home-benefit-icon">📄</div>
                        <h3 class="home-benefit-title">Minimal Documentation</h3>
                    </div>
                    <p class="home-benefit-description">
                        Simple KYC and income proof requirements. Our digital verification makes the process quick and easy.
                    </p>
                </div>

                <div class="home-benefit-card">
                    <div class="home-benefit-header">
                        <div class="home-benefit-icon">🔄</div>
                        <h3 class="home-benefit-title">Flexible Repayment Options</h3>
                    </div>
                    <p class="home-benefit-description">
                        Choose tenure up to 30 years with options for part-payment and foreclosure without penalties.
                    </p>
                </div>

                <div class="home-benefit-card">
                    <div class="home-benefit-header">
                        <div class="home-benefit-icon">💳</div>
                        <h3 class="home-benefit-title">No Hidden Charges</h3>
                    </div>
                    <p class="home-benefit-description">
                        Transparent pricing with no hidden fees. What you see is what you pay—complete clarity guaranteed.
                    </p>
                </div>

                <div class="home-benefit-card">
                    <div class="home-benefit-header">
                        <div class="home-benefit-icon">🎯</div>
                        <h3 class="home-benefit-title">Tax Benefits</h3>
                    </div>
                    <p class="home-benefit-description">
                        Save up to ₹3.5 lakhs annually with tax deductions on principal and interest payments under IT Act.
                    </p>
                </div>

                <div class="home-benefit-card">
                    <div class="home-benefit-header">
                        <div class="home-benefit-icon">👨‍💼</div>
                        <h3 class="home-benefit-title">Dedicated Relationship Manager</h3>
                    </div>
                    <p class="home-benefit-description">
                        Get personalized support from day one with a dedicated expert guiding you through the entire process.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- eligibiity and docs  -->

    <section class="home-section" id="home-eligibility">
        <div class="container-tab">
            <div class="home-section-header">
                <h2 class="finserv-trusted" style="color:#295cab;">Eligibility <strong style="color:#00abeb">&</strong> Documents</h2>
                <p class="home-section-subtitle">
                    Check if you qualify and what documents you'll need
                </p>
            </div>

            <div class="home-tabs">
                <button class="home-tab active" data-tab="salaried">Salaried Individuals</button>
                <button class="home-tab" data-tab="self-employed">Self-Employed</button>
                <button class="home-tab" data-tab="nri">NRI Applicants</button>
            </div>

            <!-- Salaried Tab -->
            <div class="home-tab-content active" id="salaried">
                <div class="home-eligibility-grid">
                    <div class="home-eligibility-section">
                        <h3>✓ Eligibility Criteria</h3>
                        <ul class="home-checklist">
                            <li class="home-checklist-item">
                                <span class="home-checklist-icon">✓</span>
                                <span>Age: 21 to 65 years at loan maturity</span>
                            </li>
                            <li class="home-checklist-item">
                                <span class="home-checklist-icon">✓</span>
                                <span>Minimum monthly income: ₹25,000</span>
                            </li>
                            <li class="home-checklist-item">
                                <span class="home-checklist-icon">✓</span>
                                <span>Work experience: Minimum 2 years</span>
                            </li>
                            <li class="home-checklist-item">
                                <span class="home-checklist-icon">✓</span>
                                <span>Current job: At least 1 year with current employer</span>
                            </li>
                            <li class="home-checklist-item">
                                <span class="home-checklist-icon">✓</span>
                                <span>Credit score: 700 or above preferred</span>
                            </li>
                        </ul>
                    </div>

                    <div class="home-documents-section">
                        <h3>📄 Required Documents</h3>
                        <div class="home-document-list">
                            <!-- KYC / PAN / Net Worth -->
                            <details>
                                <summary>Application / KYC / Address / Employment</summary>
                                <ul>
                                    <li>Application form</li>
                                    <li>KYC Applicant and Co-Applicant (Aadhar Card, Pan Card And Passport size Photo)</li>
                                    <li>Address proof-(Rent Agreement/Light bill/ Gas book)</li>
                                    <li>Employee Proof –Employee ID Card, Appointment/Offer letter, Appraisal/Increment letter</li>
                                </ul>
                            </details>

                            <!-- Income / Banking / Tax -->
                            <details>
                                <summary>Income / Banking / Tax</summary>
                                <ul>
                                    <li>Latest Salary Slip latest 6 month.</li>
                                    <li>Latest 1 year salary account statement.</li>
                                    <li>Form-16 last 3 years</li>
                                </ul>
                            </details>

                            <!-- Premises / Ownership -->
                            <details>
                                <summary>Existing Loan (If Any)</summary>
                                <ul>
                                    <li>If Existing loan: All Loan Sanction letter and soa</li>
                                    <li>If Closed: NOC.</li>
                                </ul>
                            </details>

                            <!-- Banking / Stock -->
                            <details>
                                <summary>Property documents</summary>
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
                            </details>

                            <!-- In case of Take over loan  -->
                            <details>
                                <summary>In case of Take over loan </summary>
                                <ul>
                                    <li>List of documents(lod)</li>
                                    <li>Sanction Letter </li>
                                    <li>Fore closer letter </li>
                                    <li>Account statement from date of sanction.</li>
                                </ul>
                            </details>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Self-Employed Tab -->
            <div class="home-tab-content" id="self-employed">
                <div class="home-eligibility-grid">
                    <div class="home-eligibility-section">
                        <h3>✓ Eligibility Criteria</h3>
                        <ul class="home-checklist">
                            <li class="home-checklist-item">
                                <span class="home-checklist-icon">✓</span>
                                <span>Age: 21 to 65 years at loan maturity</span>
                            </li>
                            <li class="home-checklist-item">
                                <span class="home-checklist-icon">✓</span>
                                <span>Business vintage: Minimum 3 years</span>
                            </li>
                            <li class="home-checklist-item">
                                <span class="home-checklist-icon">✓</span>
                                <span>Annual income: Minimum ₹3 lakhs</span>
                            </li>
                            <li class="home-checklist-item">
                                <span class="home-checklist-icon">✓</span>
                                <span>ITR filing: Last 2 years mandatory</span>
                            </li>
                            <li class="home-checklist-item">
                                <span class="home-checklist-icon">✓</span>
                                <span>Credit score: 700 or above preferred</span>
                            </li>
                        </ul>
                    </div>


                    <!-- self employed  -->

                    <div class="home-documents-section">
                        <h3>📄 Required Documents</h3>
                        <div class="home-document-list">
                            <!-- KYC / PAN / Net Worth -->
                            <details>
                                <summary>KYC / Address </summary>
                                <ul>
                                    <li>KYC Applicant and Co-Applicant (Pan Card, Aadhar Cardand Passport size Photo)</li>
                                    <li>Passport</li>
                                    <li>Address proof- (Rent Agreement/Light bill/ Gas book)</li>
                                </ul>
                            </details>

                            <!-- Business Proof / GST -->
                            <details>
                                <summary>Business Proof / GST</summary>
                                <ul>
                                    <li>Business Proof–Pan Card, Shop Act, Udhyam Aadhar, MSME Certificate</li>
                                    <li>If PVT LTD (Certificate of Incorporation, MOA and AOA)</li>
                                    <li>If Partnership firm- (All Directors KYC and Partnership deed)</li>
                                    <li>If Self Employed Professional (License and Degree Certificate)</li>
                                    <li>Gst Certificate (If Applicable) and GSTR-3B Latest 1 year.</li>
                                </ul>
                            </details>

                            <!-- Premises / Ownership -->
                            <details>
                                <summary>ITR / Financials / Banking</summary>
                                <ul>
                                    <li>ITR Latest 3 years with Acknowledgement, Computation of Income, Profit and loss, Balance Sheet, All Schedules.</li>
                                    <li>If Turnover is above 1 cr then Audited ITR.</li>
                                    <li>All account bank statement latest 1 year (Current and Saving both)</li>
                                </ul>
                            </details>

                            <!-- Banking / Stock -->
                            <details>
                                <summary>If Existing loan</summary>
                                <ul>
                                    <li>All Loan Sanction letter and SOA</li>
                                    <li>If Closed NOC.</li>
                                </ul>
                            </details>

                            <!-- In case of Take over loan  -->
                            <details>
                                <summary>Property documents</summary>
                                <ul>
                                    <li>Agreement to sale/sale deed</li>
                                    <li>Index 2 (Suchi kramank 2)</li>
                                    <li>Commencement (permission) certificate</li>
                                    <li>Completion Certificate/Occupancy (OC)</li>
                                    <li>Sanctioned plan (blue print)</li>
                                    <li>Payment receipt. (if token amount given)</li>
                                    <li>Floor plan</li>
                                    <li>RR (Registration Receipt)</li>
                                    <li>NA order</li>
                                    <li>RERA Certificate</li>
                                </ul>
                            </details>
                            <details>
                                <summary>If Resale </summary>
                                <ul>
                                    <li>Share Certificate. </li>
                                    <li>Society registration certificate.</li>
                                    <li>Latest Electricity bill. </li>
                                    <li>Latest Property Tax Receipt. </li>
                                    <li>Or BUILDER MASTER FILE </li>
                                </ul>
                            </details>
                            <details>
                                <summary> In case of take over loan </summary>
                                <ul>
                                    <li>List of documents(LOD) </li>
                                    <li>Sanction Letter </li>
                                    <li>Fore closer Letter </li>
                                    <li>Account statement from date of sanction. </li>
                                </ul>
                            </details>
                        </div>
                    </div>
                </div>
            </div>

            <!-- NRI Tab -->
            <div class="home-tab-content" id="nri">
                <div class="home-eligibility-grid">
                    <div class="home-eligibility-section">
                        <h3>✓ Eligibility Criteria</h3>
                        <ul class="home-checklist">
                            <li class="home-checklist-item">
                                <span class="home-checklist-icon">✓</span>
                                <span>Age: 21 to 65 years at loan maturity</span>
                            </li>
                            <li class="home-checklist-item">
                                <span class="home-checklist-icon">✓</span>
                                <span>NRI/PIO/OCI status with valid passport</span>
                            </li>
                            <li class="home-checklist-item">
                                <span class="home-checklist-icon">✓</span>
                                <span>Stable employment in current country</span>
                            </li>
                            <li class="home-checklist-item">
                                <span class="home-checklist-icon">✓</span>
                                <span>Minimum annual income: $25,000 or equivalent</span>
                            </li>
                            <li class="home-checklist-item">
                                <span class="home-checklist-icon">✓</span>
                                <span>Property to be purchased in India only</span>
                            </li>
                        </ul>
                    </div>


                    <div class="home-documents-section">
                        <h3>📄 Required Documents (NRI Applicants)</h3>

                        <!-- Income Proof -->
                        <details>
                            <summary>Income Proof Documents</summary>
                            <ul>
                                <li>Income Proof Documents for NRI</li>
                                <li>Bank Account Statement showing payment made to Seller / Builder</li>
                            </ul>
                        </details>

                        <!-- Property Ownership -->
                        <details>
                            <summary>Property Ownership Documents</summary>
                            <ul>
                                <li>Sale Deed</li>
                                <li>Stamped Agreement of Sale</li>
                                <li>Allotment Letter</li>
                            </ul>
                        </details>

                        <!-- NOC & Possession -->
                        <details>
                            <summary>NOC & Possession Certificates</summary>
                            <ul>
                                <li>No Objection Certificate (NOC)</li>
                                <li>NOC from Housing Society / Builder</li>
                                <li>Possession Certificate</li>
                                <li>Occupancy Certificate</li>
                            </ul>
                        </details>

                        <!-- Construction & Tax -->
                        <details>
                            <summary>Construction & Tax Related Documents</summary>
                            <ul>
                                <li>Construction Cost Estimate</li>
                                <li>Land Tax Receipt</li>
                            </ul>
                        </details>

                        <!-- Payment & Resale -->
                        <details>
                            <summary>Payment & Resale Documents</summary>
                            <ul>
                                <li>Payment Receipts made to Seller / Builder</li>
                                <li>In case of resale property, Share Certificate is required</li>
                            </ul>
                        </details>

                    </div>


                    <!-- <div class="home-documents-section">
                        <h3>📄 Required Documents</h3>
                        <ul class="home-document-list">
                            <li class="home-document-item">
                                <span class="home-document-icon">📋</span>
                                <span>Valid passport & visa copy</span>
                            </li>
                            <li class="home-document-item">
                                <span class="home-document-icon">📋</span>
                                <span>PAN Card & Aadhaar Card</span>
                            </li>
                            <li class="home-document-item">
                                <span class="home-document-icon">📋</span>
                                <span>Employment contract/offer letter</span>
                            </li>
                            <li class="home-document-item">
                                <span class="home-document-icon">📋</span>
                                <span>Last 6 months' salary slips</span>
                            </li>
                            <li class="home-document-item">
                                <span class="dhome-ocument-icon">📋</span>
                                <span>NRE/NRO account statements</span>
                            </li>
                            <li class="home-document-item">
                                <span class="home-document-icon">📋</span>
                                <span>Property documents & POA (if applicable)</span>
                            </li>
                        </ul>
                    </div> -->
                </div>
            </div>
        </div>
    </section>

    <!-- emi  -->
    <section class="home-section home-emi-preview-section" id="emi">
        <div class="container-tab">
            <div class="home-emi-preview-container">
                <div class="home-emi-preview-content">
                    <h2 class="home-section-title">Calculate Your Home Loan EMI</h2>
                    <p class="home-section-subtitle">
                        Get an instant estimate of your monthly payments and plan your finances better
                    </p>
                    
                    <a href="{{ url('/eligibility-calculator') }}" class="home-btn home-btn-primary home-btn-large">Calculate Detailed EMI →</a>
                </div>

                <div class="home-emi-preview-card">
                    <div class="home-emi-preview-title">Sample EMI Breakdown</div>
                    <div class="home-emi-preview-amount">₹45,500<span style="font-size: 1.5rem; font-weight: 500;">/month</span></div>
                    <div class="home-emi-preview-details">
                        Loan Amount: ₹50,00,000 | Tenure: 20 years | Rate: 8.25% p.a.
                    </div>

                    <div class="home-emi-stats">
                        <div class="home-emi-stat">
                            <div class="home-emi-stat-value">₹50L</div>
                            <div class="home-emi-stat-label">Principal</div>
                        </div>
                        <div class="home-emi-stat">
                            <div class="home-emi-stat-value">₹59L</div>
                            <div class="home-emi-stat-label">Interest</div>
                        </div>
                        <div class="home-emi-stat">
                            <div class="home-emi-stat-value">₹109L</div>
                            <div class="home-emi-stat-label">Total</div>
                        </div>
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

