{{-- SEO META DATA FOR REFER & EARN PAGE --}}
@section('title', 'Refer & Earn | Earn Extra Income | Passive Income')
@section('meta_description', 'Refer friends and family looking for property or finance solutions and earn referral rewards with JFinMate. Create a passive income stream and earn extra money while enjoying exclusive benefits.')
@section('meta_keywords', 'Refer and Earn, Refer and Earn Program, Referral Rewards, Refer Friends and Earn, Refer and Earn Rewards, Customer Referral Program, Passive Income, Extra Income')

{{-- ✅ PUSH SCHEMA TO HEAD --}}
@push('schema')

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "WebPage",
      "@id": "https://jfinserv.com/refer-earn#webpage",
      "url": "https://jfinserv.com/refer-earn",
      "name": "Refer & Earn | JF Finserve",
      "description": "Refer friends and family to JFinMate for property and financial services. Eligible customers can earn referral rewards when referred customers complete qualifying transactions, subject to program terms and conditions.",
      "inLanguage": "en-IN",
      "isPartOf": {
        "@type": "WebSite",
        "@id": "https://jfinserv.com/#website",
        "url": "https://jfinserv.com/",
        "name": "JF Finserve"
      },
      "about": {
        "@id": "https://jfinserv.com/#organization"
      },
      "mainEntity": {
        "@id": "https://jfinserv.com/refer-earn#referral-service"
      },
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
            "name": "Refer & Earn",
            "item": "https://jfinserv.com/refer-earn"
          }
        ]
      }
    },
    {
      "@type": "Service",
      "@id": "https://jfinserv.com/refer-earn#referral-service",
      "name": "JFinMate Refer & Earn Program",
      "url": "https://jfinserv.com/refer-earn",
      "serviceType": "Customer Referral Rewards Program",
      "description": "JFinMate enables eligible customers to refer friends and family who are looking to purchase property or explore financial solutions. Referral rewards may be available after the referred customer completes an eligible transaction, subject to applicable program terms.",
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
        "audienceType": "Existing eligible JFinMate customers interested in referring friends and family for property or financial services"
      },
      "mainEntityOfPage": {
        "@id": "https://jfinserv.com/refer-earn#webpage"
      }
    },
    {
      "@type": "ItemList",
      "@id": "https://jfinserv.com/refer-earn#referral-steps",
      "name": "How the JFinMate Referral Program Works",
      "numberOfItems": 5,
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Choose a Property or Finance Solution",
          "description": "Explore property options or connect with JFinMate's financial services team."
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Complete Your Journey",
          "description": "Complete an eligible property purchase or financial transaction through JFinMate."
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Unlock Customer Benefits",
          "description": "Access applicable customer offers and benefits subject to eligibility and offer terms."
        },
        {
          "@type": "ListItem",
          "position": 4,
          "name": "Refer Friends and Family",
          "description": "Recommend JFinMate to people looking for property or financial solutions."
        },
        {
          "@type": "ListItem",
          "position": 5,
          "name": "Earn Referral Rewards",
          "description": "Become eligible for referral rewards when a referred customer completes a qualifying transaction, subject to program terms."
        }
      ]
    }
  ]
}
</script>

@endpush

{{-- HEADER --}}
@include('dhara-jfin.layout.header')

  <style>
        /* ----- RESET & BASE ----- */
       
        .jf-modern {
            max-width: 100%;
            overflow-x: hidden;
        }
        .jf-container {
            width: min(1180px, calc(100% - 40px));
            margin: 0 auto;
        }
        /* buttons & common */
        .jf-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 12px 28px;
            border-radius: 60px;
            font-weight: 700;
            font-size: 0.95rem;
            text-decoration: none;
            transition: 0.2s;
            border: 2px solid transparent;
            cursor: pointer;
            min-height: 50px;
        }
        .jf-btn-primary {
            background: #1769e0;
            color: #fff;
            border-color: #1769e0;
        }
        .jf-btn-primary:hover {
            background: #0d4fb3;
            border-color: #0d4fb3;
        }
        .jf-btn-outline {
            background: transparent;
            color: #071b33;
            border-color: #cbd9e8;
        }
        .jf-btn-outline:hover {
            border-color: #1769e0;
            color: #1769e0;
            background: #f2f8ff;
        }
        .jf-footnote {
            font-size: 0.8rem;
            color: #718096;
            margin-top: 20px;
        }
        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-size: 0.75rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1.2px;
            color: #1769e0;
            background: #eaf3ff;
            padding: 6px 14px;
            border-radius: 40px;
        }

        /* =========================================================
           JFINMATE HERO BANNER - DESKTOP / TABLET / MOBILE
           ========================================================= */

        #home.hero {
            width: 100%;
            margin: 0;
            padding: 0;
            overflow: hidden;
            position: relative;
        }

        #home .hero-slider {
            width: 100%;
            margin: 0;
            padding: 0;
            position: relative;
        }

        #home .hero-slider .slide {
            width: 100%;
            height: 78vh;
            min-height: 600px;
            max-height: 800px;
            position: relative;
            display: flex;
            align-items: center;
            overflow: hidden;
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
        }

        #home .hero-slider .slide::before {
            content: "";
            position: absolute;
            inset: 0;
            z-index: 1;
            pointer-events: none;
            background: linear-gradient(
                90deg,
                rgba(255,255,255,0.96) 0%,
                rgba(255,255,255,0.88) 28%,
                rgba(255,255,255,0.48) 55%,
                rgba(255,255,255,0.10) 78%,
                rgba(255,255,255,0) 100%
            );
        }

        #home .hero-content {
            width: min(1180px, calc(100% - 40px));
            height: 100%;
            margin: 0 auto;
            padding: 50px 0;
            position: relative;
            z-index: 2;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            text-align: left;
            box-sizing: border-box;
        }

        #home .hero-intro {
            display: block;
            margin: 0 0 14px;
            color: #295cab;
            font-size: 15px;
            line-height: 1.4;
            font-weight: 800;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        #home .hero-content h1 {
            width: 100%;
            max-width: 720px;
            margin: 0 0 20px;
            color: #1a1a2e;
            font-size: clamp(42px, 5vw, 68px);
            line-height: 1.08;
            font-weight: 800;
            letter-spacing: -1.5px;
        }

        #home .hero-content h1 span {
            color: #295cab !important;
        }

        #home .hero-content > p {
            width: 100%;
            max-width: 650px;
            margin: 0 0 30px;
            color: #4a5568;
            font-size: 17px;
            line-height: 1.75;
        }

        #home .hero-btns {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            flex-wrap: wrap;
            gap: 14px;
            width: auto;
        }

        #home .hero-btns .btn {
            min-height: 52px;
            padding: 13px 28px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50px;
            font-size: 15px;
            font-weight: 700;
            line-height: 1.2;
            text-decoration: none;
            box-sizing: border-box;
            transition: all 0.25s ease;
        }

        #home .hero-btns .btn-primary-hero {
            background: #295cab;
            color: #ffffff;
            border: 2px solid #295cab;
        }

        #home .hero-btns .btn-primary-hero:hover {
            background: #1e4789;
            border-color: #1e4789;
            color: #ffffff;
            transform: translateY(-2px);
        }

        #home .hero-btns .btn-outline {
            background: rgba(255,255,255,0.92);
            color: #295cab;
            border: 2px solid #295cab;
        }

        #home .hero-btns .btn-outline:hover {
            background: #295cab;
            color: #ffffff;
            transform: translateY(-2px);
        }

        /* TABLET */
        @media (max-width: 991px) {
            #home .hero-slider .slide {
                height: 620px;
                min-height: 620px;
            }

            #home .hero-content {
                width: min(100% - 50px, 760px);
            }

            #home .hero-content h1 {
                max-width: 620px;
                font-size: clamp(40px, 6vw, 56px);
            }

            #home .hero-content > p {
                max-width: 580px;
                font-size: 16px;
            }
        }

        /* MOBILE */
      /* =========================================================
   HERO - MOBILE FIX
   ========================================================= */




/* =========================================================
   SMALL MOBILE
   ========================================================= */

@media (max-width: 480px) {

    #home .hero-slider .slide {
        min-height: 590px;
        height: 590px;

        /*
         * More right-side image visible.
         */
        background-size: auto 100%;
        background-position: 92% center;
    }

    #home .hero-content {
        min-height: 590px;
        height: 590px;

        padding: 40px 10px;
    }

    #home .hero-intro {
        font-size: 10px;
        letter-spacing: 1.2px;
    }

    #home .hero-content h1 {
        width: 72%;
        max-width: 300px;

        font-size: 29px;
        line-height: 1.15;
    }

    #home .hero-content > p {
        width: 69%;
        max-width: 300px;

        font-size: 12.5px;
        line-height: 1.6;
    }

    #home .hero-btns {
        width: 65%;
        max-width: 285px;
    }

    #home .hero-btns .btn {
        min-height: 50px;
        font-size: 13px;
    }
}
        /* SMALL MOBILE */
        @media (max-width: 480px) {
            #home .hero-slider .slide {
                min-height: 590px;
                background-position: 68% center;
            }

            #home .hero-content {
                min-height: 590px;
                padding: 45px 16px;
            }

            #home .hero-intro {
                font-size: 10px;
                letter-spacing: 1.2px;
            }

            #home .hero-content h1 {
                font-size: 30px;
                line-height: 1.15;
            }

            #home .hero-content > p {
                font-size: 13px;
                line-height: 1.65;
            }

            #home .hero-btns {
                max-width: 310px;
            }

            #home .hero-btns .btn {
                min-height: 48px;
                font-size: 13px;
            }
        }

        /* ===== OTHER SECTIONS (JFINMATE MODERN) ===== */
        :root {
            --jf-navy: #071b33;
            --jf-blue: #1769e0;
            --jf-blue-dark: #0d4fb3;
            --jf-sky: #eaf3ff;
            --jf-light: #f6f9fd;
            --jf-text: #26364a;
            --jf-muted: #718096;
            --jf-border: #e3ebf5;
            --jf-white: #ffffff;
            --jf-success: #18a66b;
        }

        .jf-modern .jf-section-heading {
            max-width: 700px;
            margin: 0 auto 55px;
            text-align: center;
        }
        .jf-modern .jf-section-heading h2 {
            font-size: clamp(30px, 4vw, 44px);
            font-weight: 800;
            color: var(--jf-navy);
            margin: 15px 0;
        }
        .jf-modern .jf-section-heading p {
            color: var(--jf-muted);
            font-size: 1rem;
            line-height: 1.8;
        }

        /* why */
        .jf-why {
            padding: 100px 0;
            background: var(--jf-light);
            position: relative;
        }
        .jf-why-wrap {
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            gap: 70px;
            align-items: center;
        }
        .jf-why-content h2 {
            font-size: clamp(32px, 4vw, 48px);
            font-weight: 800;
            color: var(--jf-navy);
            line-height: 1.12;
            margin: 20px 0 20px;
        }
        .jf-why-content h2 span { color: var(--jf-blue); }
        .jf-why-content p {
            color: var(--jf-muted);
            line-height: 1.85;
            margin-bottom: 16px;
        }
        .jf-why-points {
            display: grid;
            grid-template-columns: repeat(2,1fr);
            gap: 14px;
            margin-top: 30px;
        }
        .jf-why-point {
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 700;
            color: var(--jf-navy);
            font-size: 0.9rem;
        }
        .jf-why-point i {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: #e4f7ef;
            color: var(--jf-success);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .jf-reward-box {
            background: #295cab;
            border-radius: 35px;
            padding: 45px;
            color: #fff;
            min-height: 360px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
            overflow: hidden;
        }
        .jf-reward-icon {
            width: 72px;
            height: 72px;
            border-radius: 20px;
            background: rgba(255,255,255,0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
        }
        .jf-reward-box h3 {
            font-size: 28px;
            line-height: 1.2;
            margin: 30px 0 12px;
        }
        .jf-reward-box p { color: rgba(255,255,255,0.7); }
        .jf-reward-tag {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #1769e0;
            padding: 10px 18px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 0.85rem;
            width: fit-content;
        }

        /* journey */
        .jf-journey {
            padding: 100px 0;
            background: #fff;
        }
        .jf-journey-grid {
            display: grid;
            grid-template-columns: repeat(2,1fr);
            gap: 25px;
        }
        .jf-journey-card {
            border: 1px solid var(--jf-border);
            border-radius: 28px;
            padding: 38px;
            background: #fff;
            transition: 0.25s;
            position: relative;
        }
        .jf-journey-card:hover {
            transform: translateY(-7px);
            box-shadow: 0 25px 60px rgba(17,51,89,0.08);
            border-color: #cfe1fa;
        }
        .jf-card-number {
            position: absolute;
            right: 25px;
            top: 20px;
            font-size: 70px;
            font-weight: 900;
            color: #f1f6fc;
            line-height: 1;
        }
        .jf-journey-icon {
            width: 62px;
            height: 62px;
            border-radius: 18px;
            background: #eaf3ff;
            color: var(--jf-blue);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 25px;
            margin-bottom: 25px;
        }
        .jf-journey-card h3 {
            font-size: 25px;
            color: var(--jf-navy);
            margin-bottom: 14px;
        }
        .jf-journey-card > p { color: var(--jf-muted); }
        .jf-benefits {
            list-style: none;
            margin: 25px 0 30px;
        }
        .jf-benefits li {
            display: flex;
            gap: 11px;
            margin-bottom: 12px;
            color: #44556b;
            font-size: 0.9rem;
        }
        .jf-benefits li i { color: var(--jf-success); margin-top: 3px; }

        /* process */
        .jf-process {
            padding: 100px 0;
            background: var(--jf-navy);
            color: #fff;
        }
        .jf-process .eyebrow {
            background: rgba(255,255,255,0.09);
            color: #8ebfff;
        }
        .jf-process .jf-section-heading h2 { color: #fff; }
        .jf-process .jf-section-heading p { color: rgba(255,255,255,0.6); }
        .jf-process-intro {
            max-width: 900px;
            margin: 0 auto 65px;
            padding: 28px 32px;
            border-left: 3px solid var(--jf-blue);
            background: rgba(255,255,255,0.05);
            border-radius: 0 16px 16px 0;
        }
        .jf-process-intro p { color: rgba(255,255,255,0.72); }
        .jf-steps {
            display: grid;
            grid-template-columns: repeat(5,1fr);
            gap: 20px;
        }
        .jf-step-number {
            width: 54px;
            height: 54px;
            border-radius: 50%;
            background: #1769e0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            font-size: 1rem;
            margin-bottom: 20px;
            box-shadow: 0 0 0 8px rgba(23,105,224,0.12);
        }
        .jf-step h4 { color: #fff; font-size: 1.1rem; margin-bottom: 8px; }
        .jf-step p { color: rgba(255,255,255,0.55); font-size: 0.85rem; }

        /* prefer */
        .jf-prefer {
            padding: 100px 0;
            background: var(--jf-light);
        }
        .jf-prefer-grid {
            display: grid;
            grid-template-columns: repeat(4,1fr);
            gap: 15px;
        }
        .jf-prefer-item {
            background: #fff;
            border: 1px solid var(--jf-border);
            border-radius: 18px;
            padding: 25px 20px;
            min-height: 120px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 12px;
            transition: 0.2s;
        }
        .jf-prefer-item:hover {
            transform: translateY(-4px);
            box-shadow: 0 15px 35px rgba(17,51,89,0.06);
        }
        .jf-prefer-item i { font-size: 24px; color: var(--jf-blue); }
        .jf-prefer-item span { font-weight: 700; color: var(--jf-navy); }

        /* faq */
        .jf-faq {
            padding: 100px 0;
            background: #fff;
        }
        .jf-faq-layout {
            display: grid;
            grid-template-columns: 0.7fr 1.3fr;
            gap: 70px;
            align-items: start;
        }
        .jf-faq-side h2 {
            font-size: 38px;
            color: var(--jf-navy);
            margin: 14px 0;
        }
        .jf-faq-side p { color: var(--jf-muted); }
        .jf-faq-list {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }
        .jf-faq-item {
            border: 1px solid var(--jf-border);
            border-radius: 15px;
            padding: 20px 23px;
            background: #fff;
        }
        .jf-faq-item h4 {
            display: flex;
            align-items: center;
            gap: 12px;
            color: var(--jf-navy);
            font-size: 1rem;
            margin-bottom: 8px;
        }
        .jf-faq-item h4 i { color: var(--jf-blue); }
        .jf-faq-item p {
            color: var(--jf-muted);
            font-size: 0.9rem;
            line-height: 1.7;
            margin-left: 27px;
        }

        /* final cta */
        .jf-final {
            padding: 100px 0;
            background: #295cab;
            color: #fff;
            text-align: center;
        }
        .jf-final-content .eyebrow {
            background: rgba(255,255,255,0.08);
            color: #86b9ff;
        }
        .jf-final-content h2 {
            font-size: clamp(32px,5vw,52px);
            margin: 16px 0;
        }
        .jf-final-content p { color: rgba(255,255,255,0.7); max-width: 650px; margin: 0 auto; }
        .jf-final-buttons {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 14px;
            margin-top: 30px;
        }
        .jf-final .jf-btn-primary {
            background: #fff;
            color: var(--jf-navy);
            border-color: #fff;
        }
        .jf-final .jf-btn-primary:hover { background: #eaf3ff; }
        .jf-final .jf-btn-outline {
            border-color: rgba(255,255,255,0.25);
            color: #fff;
        }
        .jf-final .jf-btn-outline:hover { background: rgba(255,255,255,0.1); }
        .jf-brand-line {
            margin-top: 40px !important;
            opacity: 0.5;
            font-size: 0.9rem;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 991px) {
            .jf-why-wrap, .jf-faq-layout {
                grid-template-columns: 1fr;
                gap: 45px;
            }
            .jf-steps { grid-template-columns: repeat(2,1fr); }
            .jf-prefer-grid { grid-template-columns: repeat(2,1fr); }
            .jf-faq-side { text-align: center; }
        }
        @media (max-width: 767px) {
            .jf-why, .jf-journey, .jf-process, .jf-prefer, .jf-faq, .jf-final {
                padding: 70px 0;
            }
            .jf-journey-grid { grid-template-columns: 1fr; }
            .jf-why-points { grid-template-columns: 1fr; }
            .jf-steps { grid-template-columns: 1fr; }
            .jf-step {
                display: grid;
                grid-template-columns: 55px 1fr;
                gap: 12px;
            }
            .jf-step-number { grid-row: span 2; margin: 0; }
            .jf-faq-item p { margin-left: 0; margin-top: 8px; }
            .jf-prefer-grid { grid-template-columns: 1fr 1fr; }
            .jf-final-buttons { flex-direction: column; align-items: center; }
            .jf-final-buttons .jf-btn { width: 100%; max-width: 340px; }
        }
        @media (max-width: 480px) {
            .jf-prefer-grid { grid-template-columns: 1fr; }
            .jf-reward-box { padding: 28px; }
            .jf-journey-card { padding: 24px 20px; }
        }

        /* =========================================================
   JFINMATE HERO
   DESKTOP + TABLET + MOBILE
   ========================================================= */

.jf-hero {
    width: 100%;
    margin: 0;
    padding: 0;
    overflow: hidden;
    position: relative;
    background: #eef6ff;
}

.jf-hero-inner {
    width: 100%;
    min-height: 680px;
    height: 680px;

    position: relative;
    overflow: hidden;

    background: #eef6ff;
}


/* =========================================================
   HERO IMAGE
   ========================================================= */

.jf-hero-image {
    position: absolute;

    width: auto;
    height: 100%;

    max-width: none;

    right: 0;
    top: 0;

    object-fit: contain;
    object-position: right center;

    z-index: 1;

    display: block;
}


/* =========================================================
   OVERLAY
   ========================================================= */

.jf-hero-overlay {
    position: absolute;

    left: 0;
    top: 0;
    bottom: 0;

    width: 68%;

    z-index: 2;

    pointer-events: none;

    background: linear-gradient(
        90deg,
        rgba(238,246,255,1) 0%,
        rgba(238,246,255,0.98) 30%,
        rgba(238,246,255,0.85) 52%,
        rgba(238,246,255,0.35) 78%,
        rgba(238,246,255,0) 100%
    );
}


/* =========================================================
   CONTAINER
   ========================================================= */

.jf-hero-container {
    width: 100%;
    max-width: 1200px;

    height: 100%;

    margin: 0 auto;

    padding: 0 25px;

    position: relative;

    z-index: 3;

    box-sizing: border-box;
}


/* =========================================================
   CONTENT
   ========================================================= */

.jf-hero-content {
    width: 55%;
    max-width: 650px;

    height: 100%;

    display: flex;

    flex-direction: column;

    justify-content: center;

    align-items: flex-start;

    text-align: left;
}


/* =========================================================
   INTRO
   ========================================================= */

.jf-hero-intro {
    margin: 0 0 14px;

    color: #295cab;

    font-size: 15px;

    line-height: 1.4;

    font-weight: 800;

    letter-spacing: 2px;

    text-transform: uppercase;
}


/* =========================================================
   HEADING
   ========================================================= */

.jf-hero-content h1 {
    margin: 0 0 20px;

    max-width: 650px;

    color: #101828;

    font-size: clamp(42px, 5vw, 68px);

    line-height: 1.08;

    font-weight: 800;

    letter-spacing: -1.5px;
}

.jf-hero-content h1 span {
    color: #295cab;
}


/* =========================================================
   DESCRIPTION
   ========================================================= */

.jf-hero-content p {
    margin: 0 0 30px;

    max-width: 600px;

    color: #4a5568;

    font-size: 17px;

    line-height: 1.7;
}


/* =========================================================
   BUTTONS
   ========================================================= */

.jf-hero-buttons {
    display: flex;

    align-items: center;

    justify-content: flex-start;

    gap: 14px;

    flex-wrap: wrap;
}


.jf-btn {
    min-height: 52px;

    padding: 13px 27px;

    display: inline-flex;

    align-items: center;

    justify-content: center;

    border-radius: 10px;

    text-decoration: none;

    font-size: 15px;

    font-weight: 700;

    line-height: 1.2;

    box-sizing: border-box;

    transition: all 0.25s ease;
}


/* PRIMARY BUTTON */

.jf-btn-primary {
    color: #ffffff;

    background:#1e4fd8;;

    border: 2px solid #4d62d8;
}

.jf-btn-primary:hover {
    color: #ffffff;

    background: #354bc5;

    border-color: #354bc5;

    transform: translateY(-2px);
}


/* OUTLINE BUTTON */

.jf-btn-outline {
    color:#ffff;

    background:#1e4fd8;

    border: 2px solid #4d62d8;
}

.jf-btn-outline:hover {
    color: #ffffff;

    background: #4d62d8;

    transform: translateY(-2px);
}


/* =========================================================
   TABLET
   ========================================================= */

@media (max-width: 991px) {

    .jf-hero-inner {
        height: 620px;

        min-height: 620px;
    }

    .jf-hero-image {
        height: 100%;

        right: -40px;
    }

    .jf-hero-overlay {
        width: 72%;
    }

    .jf-hero-container {
        padding: 0 25px;
    }

    .jf-hero-content {
        width: 60%;
    }

    .jf-hero-content h1 {
        font-size: 48px;
    }

    .jf-hero-content p {
        font-size: 15px;

        max-width: 520px;
    }

    .jf-btn {
        padding: 12px 22px;

        font-size: 14px;
    }
}


/* =========================================================
   MOBILE
   ========================================================= */

/* =========================================================
   JFINMATE HERO - MOBILE FINAL
   ========================================================= */

@media (max-width: 767px) {

    .jf-hero {
        width: 100%;
        margin: 0;
        padding: 0;
        overflow: hidden;
    }

    .jf-hero-inner {
        width: 100%;
        height: 650px;
        min-height: 650px;
        position: relative;
        overflow: hidden;
        background: #eef6ff;
    }


    /* =====================================================
       IMAGE
       ===================================================== */

    .jf-hero-image {
        position: absolute;

        height: 100%;
        width: auto;
        max-width: none;

        top: 0;

        /*
         * Keep image on right.
         */
        right: -85px;

        object-fit: contain;
        object-position: right center;

        z-index: 1;

        display: block;
    }


    /* =====================================================
       IMAGE OVERLAY
       ===================================================== */

    .jf-hero-overlay {
        position: absolute;

        top: 0;
        left: 0;

        width: 100%;
        height: 100%;

        z-index: 2;

        pointer-events: none;

        background: linear-gradient(
            90deg,
            rgba(238,246,255,0.99) 0%,
            rgba(238,246,255,0.97) 32%,
            rgba(238,246,255,0.82) 48%,
            rgba(238,246,255,0.45) 65%,
            rgba(238,246,255,0.08) 100%
        );
    }


    /* =====================================================
       CONTAINER
       ===================================================== */

    .jf-hero-container {
        width: 100%;
        height: 100%;

        margin: 0;
        padding: 0 5px;

        position: relative;
        z-index: 3;

        box-sizing: border-box;
    }


    /* =====================================================
       CONTENT
       ===================================================== */

    .jf-hero-content {

        width: 68%;
        max-width: 345px;

        height: 100%;

        margin: 0;

        display: flex;
        flex-direction: column;

        justify-content: center;
        align-items: flex-start;

        text-align: left;
    }


    /* =====================================================
       INTRO
       ===================================================== */

    .jf-hero-intro {

        width: 100%;

        margin: 0 0 13px;

        font-size: 11px;
        line-height: 1.4;

        letter-spacing: 1.4px;

        color: #295cab;

        font-weight: 800;

        white-space: nowrap;
    }


    /* =====================================================
       HEADING
       ===================================================== */

    .jf-hero-content h1 {

        width: 100%;
        max-width: 340px;

        margin: 0 0 18px;

        font-size: 30px;
        line-height: 1.13;

        letter-spacing: -0.5px;

        color: #101828;
    }

    .jf-hero-content h1 span {
        color: #295cab !important;
    }


    /* =====================================================
       DESCRIPTION
       ===================================================== */

    .jf-hero-content p {

        width: 100%;
        max-width: 335px;

        margin: 0 0 25px;

        font-size: 13px;
        line-height: 1.65;

        color: #526174;
    }


    /* =====================================================
       BUTTON AREA
       ===================================================== */

    .jf-hero-buttons {

        width: 100%;
        max-width: 285px;

        display: flex;

        flex-direction: column;

        align-items: stretch;

        gap: 10px;
    }


    /* =====================================================
       BUTTON
       ===================================================== */

    .jf-btn {

        width: 100%;

        min-height: 52px;

        padding: 12px 10px;

        display: flex;

        align-items: center;
        justify-content: center;

        box-sizing: border-box;

        border-radius: 10px;

        font-size: 14px;

        line-height: 1.25;

        text-align: center;
    }


    .jf-btn-primary {

        background: #4d62d8;

        color: #ffffff;

        border: 2px solid #4d62d8;
    }


    .jf-btn-outline {

        background:#1e4fd8;;

        color: #fff;

        border: 2px solid #4d62d8;
    }
}


/* =========================================================
   SMALL MOBILE - 480px
   ========================================================= */

@media (max-width: 480px) {

    .jf-hero-inner {

        height: 590px;
        min-height: 590px;
    }


    .jf-hero-image {

        height: 590px;

        /*
         * Move image further right.
         */
        right: -100px;
    }


    .jf-hero-content {

        width: 69%;
        max-width: 300px;
    }


    .jf-hero-intro {

        font-size: 9px;

        letter-spacing: 1.1px;

        margin-bottom: 10px;
    }


    .jf-hero-content h1 {

        font-size: 28px;

        line-height: 1.14;

        margin-bottom: 15px;
    }


    .jf-hero-content p {

        font-size: 12px;

        line-height: 1.6;

        margin-bottom: 20px;
    }


    .jf-hero-buttons {

        max-width: 270px;

        gap: 9px;
    }


    .jf-btn {

        min-height: 49px;

        font-size: 13px;
    }
}


/* =========================================================
   SMALL MOBILE
   ========================================================= */

@media (max-width: 480px) {

    .jf-hero-inner {

        height: 590px;

        min-height: 590px;
    }


    .jf-hero-image {

        height: 590px;

        right: -65px;
    }


    .jf-hero-content {

        width: 68%;

        max-width: 300px;
    }


    .jf-hero-intro {

        font-size: 9px;

        letter-spacing: 1.1px;

        margin-bottom: 10px;
    }


    .jf-hero-content h1 {

        font-size: 28px;

        line-height: 1.14;

        margin-bottom: 15px;
    }


    .jf-hero-content p {

        font-size: 12px;

        line-height: 1.6;

        margin-bottom: 20px;
    }


    .jf-hero-buttons {

        max-width: 275px;

        gap: 9px;
    }


    .jf-btn {

        min-height: 49px;

        font-size: 13px;

        padding: 11px 10px;
    }
}

/* =========================================================
   MOBILE ONLY - FINAL FIX
   ========================================================= */

@media (max-width: 767px) {

    /* BUTTONS ONE BELOW ANOTHER */
    .jf-clean-buttons {
        display: flex !important;
        flex-direction: column !important;
        align-items: flex-start !important;
        justify-content: flex-start !important;

        width: 100% !important;
        gap: 8px !important;

        position: relative !important;
        z-index: 50 !important;
    }


    .jf-clean-btn {
        display: flex !important;

        width: 190px !important;
        min-width: 190px !important;

        height: 42px !important;
        min-height: 42px !important;

        margin: 0 !important;

        align-items: center !important;
        justify-content: center !important;

        box-sizing: border-box !important;

        border-radius: 25px !important;

        white-space: nowrap !important;
    }


    /* =====================================================
       IMAGE - MOVE TO RIGHT
       ===================================================== */

    .jf-clean-image {
        width: 100% !important;

        height: 245px !important;
        min-height: 245px !important;

        position: relative !important;

        margin: 0 !important;

        display: flex !important;

        align-items: flex-end !important;

        justify-content: flex-end !important;

        overflow: hidden !important;

        z-index: 1 !important;
    }


    .jf-clean-image img {
        width: 100% !important;

        height: 100% !important;

        object-fit: cover !important;

        /*
         * Move complete image toward right
         */
        object-position: 72% center !important;

        display: block !important;
    }


    /* Keep text above image */
    .jf-clean-hero-content {
        position: relative !important;

        z-index: 20 !important;
    }
}


/* =========================================================
   SMALL MOBILE
   ========================================================= */

@media (max-width: 480px) {

    .jf-clean-buttons {
        flex-direction: column !important;

        align-items: flex-start !important;

        gap: 7px !important;
    }


    .jf-clean-btn {
        width: 180px !important;

        min-width: 180px !important;

        height: 40px !important;

        min-height: 40px !important;
    }


    .jf-clean-image {
        height: 230px !important;

        min-height: 230px !important;
    }


    .jf-clean-image img {
        object-position: 76% center !important;
    }
}

@media (max-width: 767px) {
    .jfinHeroSlide:nth-child(1) {
        background-size: auto 63% !important;
        
    }
}
    </style>


<div class="jf-modern">

   {{-- =========================================================
     JFINSERV HERO
     ========================================================= --}}
<style>
    
/* FINAL FIX: Force the complete hero heading to black */
section.jfinHero#home .jfinHeroSlider .jfinHeroSlide .jfinHeroContent .jfinHeroText h1.jfinHeroTitle,
section.jfinHero#home .jfinHeroSlider .jfinHeroSlide .jfinHeroContent .jfinHeroText h1.jfinHeroTitle span {
    color: #000000 !important;
    -webkit-text-fill-color: #000000 !important;
}
/* Force Hero Heading and Description to Black */
section.jfinHero#home .jfinHeroSlider .jfinHeroSlide .jfinHeroContent .jfinHeroText h1.jfinHeroTitle,
section.jfinHero#home .jfinHeroSlider .jfinHeroSlide .jfinHeroContent .jfinHeroText h1.jfinHeroTitle span,
section.jfinHero#home .jfinHeroSlider .jfinHeroSlide .jfinHeroContent .jfinHeroText .jfinHeroDescription {
    color: #000000 !important;
    -webkit-text-fill-color: #000000 !important;
}
/* Force Hero Heading, Description and Label to Black */
section.jfinHero#home .jfinHeroSlider .jfinHeroSlide .jfinHeroContent .jfinHeroText h1.jfinHeroTitle,
section.jfinHero#home .jfinHeroSlider .jfinHeroSlide .jfinHeroContent .jfinHeroText h1.jfinHeroTitle span,
section.jfinHero#home .jfinHeroSlider .jfinHeroSlide .jfinHeroContent .jfinHeroText .jfinHeroDescription,
section.jfinHero#home .jfinHeroSlider .jfinHeroSlide .jfinHeroContent .jfinHeroText .jfinHeroLabel {
    color: #000000 !important;
    -webkit-text-fill-color: #000000 !important;
}

.jfinHeroButtons .jfinHeroBtn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    text-decoration: none;
}

.jfinHeroButtons .jfinHeroBtn i {
    font-size: 13px;
    transition: transform 0.3s ease;
}

.jfinHeroButtons .jfinHeroBtn:hover i {
    transform: translateX(4px);
}

/* ==========================================
   MOBILE HERO - FIX BLACK SPACE & BUTTONS
========================================== */

@media (max-width: 576px) {

    section.jfinHero#home {
        height: auto !important;
        min-height: 0 !important;
        padding: 0 !important;
        margin: 0 !important;
        overflow: hidden !important;
        background: transparent !important;
    }

    section.jfinHero#home .jfinHeroSlider {
        height: auto !important;
        min-height: 0 !important;
        overflow: hidden !important;
        background: transparent !important;
    }

    section.jfinHero#home .jfinHeroSlide {
        position: relative !important;
        height: auto !important;
        min-height: 0 !important;
        padding: 20px 16px 24px !important;
        box-sizing: border-box !important;
        background-size: cover !important;
        background-position: 58% center !important;
        background-repeat: no-repeat !important;
        overflow: hidden !important;
    }

    section.jfinHero#home .jfinHeroContent {
        position: relative !important;
        inset: auto !important;
        width: 100% !important;
        height: auto !important;
        min-height: 0 !important;
        padding: 0 !important;
        margin: 0 !important;
        box-sizing: border-box !important;
    }

    section.jfinHero#home .jfinHeroText {
        width: 65% !important;
        max-width: 65% !important;
        padding: 0 !important;
        margin: 0 !important;
        box-sizing: border-box !important;
    }

    section.jfinHero#home .jfinHeroTitle {
        font-size: clamp(19px, 5.2vw, 25px) !important;
        line-height: 1.2 !important;
        margin: 8px 0 10px !important;
        overflow-wrap: break-word !important;
    }

    section.jfinHero#home .jfinHeroDescription {
        font-size: 11px !important;
        line-height: 1.4 !important;
        margin: 0 0 14px !important;
    }

    section.jfinHero#home .jfinHeroLabel {
        font-size: 9px !important;
        line-height: 1.4 !important;
        letter-spacing: 1.5px !important;
    }

    /* Buttons stay inside the text area */
    section.jfinHero#home .jfinHeroButtons {
        display: flex !important;
        flex-direction: column !important;
        align-items: flex-start !important;
        gap: 8px !important;
        width: 100% !important;
        margin: 14px 0 0 !important;
        padding: 0 !important;
    }

    section.jfinHero#home .jfinHeroButtons .jfinHeroBtn {
        display: inline-flex !important;
        align-items: center !important;
        justify-content: center !important;
        gap: 8px !important;

        width: auto !important;
        max-width: 100% !important;
        min-width: 0 !important;
        min-height: 42px !important;
        height: auto !important;

        padding: 10px 12px !important;
        margin: 0 !important;
        border-radius: 9px !important;
        box-sizing: border-box !important;

        font-size: 12px !important;
        line-height: 1.2 !important;
        white-space: nowrap !important;
    }

    section.jfinHero#home .jfinHeroButtons .jfinHeroBtn i {
        font-size: 12px !important;
        flex-shrink: 0 !important;
    }

    /* Prevent a dark strip below the banner */
    section.jfinHero#home .jfinHeroSlider::after,
    section.jfinHero#home .jfinHeroSlide::after {
        content: none !important;
    }
}

/* Extra-small phones */
@media (max-width: 360px) {
    section.jfinHero#home .jfinHeroText {
        width: 68% !important;
        max-width: 68% !important;
    }

    section.jfinHero#home .jfinHeroButtons .jfinHeroBtn {
        padding: 9px 10px !important;
        font-size: 11px !important;
    }
}
section.jfinHero#home .jfinHeroButtons a.jfinHeroBtn.jfinHeroApply {
   
    width: 180px;
}
@media (max-width: 480px) {
    section.jfinHero#home .jfinHeroButtons a.jfinHeroBtn.jfinHeroApply {
        width: 151px !important;
}
}
section.jfinHero#home .jfinHeroSlide {
    height:670px;
}

</style>
<section class="jfinHero" id="home">

    <div class="jfinHeroSlider">

        {{-- ================= SINGLE HERO SLIDE ================= --}}
        <div class="jfinHeroSlide jfinHeroSlideActive"
             style="background-image:url('{{ asset('theme/dhara-jfin/img/refer_page.jpg') }}');">

            <div class="jfinHeroContent">

                <div class="jfinHeroText">

                    <div class="jfinHeroLabel">
                        BUY. FINANCE. REFER. EARN.
                    </div>

                    <h1 class="jfinHeroTitle">
                        One Platform.
                        <span>Multiple Benefits.</span>
                    </h1>

                    <p class="jfinHeroDescription">
                        Find your dream home or the right financial solution
                        with JFinMate. Enjoy exclusive customer benefits and
                        unlock referral rewards after becoming our customer.
                    </p>
          
                        <div class="jfinHeroButtons">

                            <a href="{{ url('/properties') }}"
                            class="jfinHeroBtn jfinHeroApply">
                                Explore Properties
                                <i class="fas fa-arrow-right"></i>
                            </a>

                            <a href="{{ url('/authv3/login') }}"
                            class="jfinHeroBtn jfinHeroApply">
                                Explore Finance
                                <i class="fas fa-arrow-right"></i>
                            </a>

                        </div>


            </div>

        </div>

    </div>

</section>

    <!-- =========================================================
         WHY JFINMATE
    ========================================================= -->
   
<section class="jfm-difference-section">
    <div class="jfm-difference-container">

        <!-- LEFT CONTENT -->
        <div class="jfm-difference-content">
            <span class="jfm-difference-label">The JFinMate Difference</span>

            <h2>
                Whether you’re buying your dream <br>home or need the right finance, we’re <br>here for you.
            </h2>

            <p class="jfm-difference-description">
                Buying a home or arranging finance shouldn't be complicated.
                At <br>JFinMate, we bring everything together in one place — from
                <br>verified properties and financial solutions to exclusive
                customer <br>benefits and referral rewards.
            </p>

            <ul class="jfm-benefits-list">
                <li>
                    <span class="jfm-check-icon">✓</span>
                    <span>Verified Property Options</span>
                </li>
                <li>
                    <span class="jfm-check-icon">✓</span>
                    <span>Dedicated Support</span>
                </li>
                <li>
                    <span class="jfm-check-icon">✓</span>
                    <span>Expert Financial Guidance</span>
                </li>
                <li>
                    <span class="jfm-check-icon">✓</span>
                    <span>Customer Rewards</span>
                </li>
            </ul>
        </div>

        <!-- RIGHT CARDS -->
        <div class="jfm-difference-cards">

            <!-- PROPERTY CARD -->
            <div class="jfm-difference-card">
                <div class="jfm-card-image">
                    <img
                        src="{{ asset('theme/dhara-jfin/img/property-card.jpg') }}"
                        alt="Residential apartment buildings"
                        loading="lazy"
                    >
                </div>

                <div class="jfm-card-body">
                    <h3>Looking for a <span>Property?</span></h3>

                    <p>
                        Explore verified properties across top locations
                        in India according to your needs.
                    </p>

                    <a href="{{ url('/properties') }}" class="jfm-card-button">
                        <span>View properties</span>
                        <span class="jfm-card-arrow">→</span>
                    </a>
                </div>
            </div>

            <!-- FINANCE CARD -->
            <div class="jfm-difference-card">
                <div class="jfm-card-image">
                    <img
                        src="{{ asset('theme/dhara-jfin/img/finance-card.webp') }}"
                        alt="Home finance documents and consultation"
                        loading="lazy"
                    >
                </div>

                <div class="jfm-card-body">
                    <h3>Looking for <span>Finance?</span></h3>

                    <p>
                        Get the right loan for your home, business
                        or investment.
                    </p>

                    <a href="{{ url('authv3/login') }}" class="jfm-card-button">
                        <span>Apply for loan</span>
                        <span class="jfm-card-arrow">→</span>
                    </a>
                </div>
            </div>

        </div>
    </div>

</section>
<style>
/* =========================================
   JFINMATE DIFFERENCE SECTION
========================================= */

.jfm-difference-section {
    width: 100%;
    margin: 0;
    padding: 52px 24px 0;
    background: #fbfcfe;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
    overflow: hidden;
}

.jfm-difference-section *,
.jfm-difference-section *::before,
.jfm-difference-section *::after {
    box-sizing: border-box;
}

.jfm-difference-container {
    width: 100%;
    max-width: 1240px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 0.94fr 1.25fr;
    align-items: start;
    gap: 42px;
}

/* LEFT CONTENT */

.jfm-difference-content {
    min-width: 0;
    padding-top: 1px;
}

.jfm-difference-label {
    display: block;
    margin-bottom: 7px;
    color: #2874ff;
    font-size: 16px;
    font-weight: 400;
    line-height: 1.4;
}

.jfm-difference-content h2 {
    margin: 0 0 10px;
    color: #373737;
    font-size: 18px;
    font-weight: 700;
    line-height: 1.28;
    letter-spacing: -0.2px;
}

.jfm-difference-description {
    margin: 0 0 10px;
    color: #777777;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.55;
}

.jfm-benefits-list {
    display: flex;
    flex-direction: column;
    gap: 10px;
    margin: 0;
    padding: 0;
    list-style: none;
}

.jfm-benefits-list li {
    display: flex;
    align-items: center;
    gap: 9px;
    min-height: 31px;
    color: #353535;
    font-size: 14px;
    line-height: 1.4;
}

.jfm-check-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    flex: 0 0 26px;
    width: 26px;
    height: 26px;
    border-radius: 4px;
    background: #e3edff;
    color: #2874ff;
    font-size: 15px;
    font-weight: 600;
}

/* RIGHT SIDE CARDS */

.jfm-difference-cards {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    align-items: stretch;
    gap: 12px;
    min-width: 0;
}

.jfm-difference-card {
    min-width: 0;
    display: flex;
    flex-direction: column;
    overflow: hidden;
    background: #ffffff;
    border: 1px solid #f0f1f3;
    border-radius: 12px;
    box-shadow: 0 2px 7px rgba(0, 0, 0, 0.07);
}

.jfm-card-image {
    width: 100%;
    height: 174px;
    flex-shrink: 0;
    overflow: hidden;
    background: #edf3f9;
}

.jfm-card-image img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    transition: transform 0.35s ease;
}

.jfm-difference-card:hover .jfm-card-image img {
    transform: scale(1.035);
}

/* CARD BODY */

.jfm-card-body {
    display: flex;
    flex: 1;
    flex-direction: column;
    align-items: stretch;
    padding: 10px 16px 18px;
}

.jfm-card-body h3 {
    margin: 0 0 7px;
    color: #393939;
    font-size: 16px;
    font-weight: 700;
    line-height: 1.3;
    letter-spacing: -0.2px;
}

.jfm-card-body h3 span {
    color: #2874ff;
}

.jfm-card-body p {
    margin: 0 0 14px;
    color: #777777;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.5;
}

.jfm-card-button {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    width: 100%;
    min-height: 31px;
    margin-top: auto;
    padding: 6px 10px;
    border: 1px solid #4b83ff;
    border-radius: 5px;
    background: #ffffff;
    color: #2874ff;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.3;
    text-align: center;
    text-decoration: none;
    transition: background 0.25s ease, color 0.25s ease;
}

.jfm-card-button:hover,
.jfm-card-button:focus-visible {
    background: #2874ff;
    color: #ffffff;
}

.jfm-card-arrow {
    font-size: 15px;
    line-height: 1;
    transition: transform 0.25s ease;
}

.jfm-card-button:hover .jfm-card-arrow {
    transform: translateX(3px);
}

/* BOTTOM FOOTER STRIP */

.jfm-difference-footer {
    width: calc(100% + 48px);
    min-height: 60px;
    margin: 48px -24px 0;
    padding: 22px 12px 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #eff6ff;
    color: #2874ff;
    font-size: 16px;
    font-weight: 400;
    text-align: center;
}

/* =========================================
   LARGE LAPTOPS
========================================= */

@media (min-width: 1400px) {
    .jfm-difference-container {
        max-width: 1280px;
        gap: 55px;
    }

    .jfm-card-image {
        height: 195px;
    }
}

/* =========================================
   TABLETS
========================================= */

@media (max-width: 991px) {
    .jfm-difference-section {
        padding: 38px 20px 0;
    }

    .jfm-difference-container {
        grid-template-columns: 1fr;
        gap: 28px;
    }

    .jfm-difference-content {
        max-width: 650px;
    }

    .jfm-difference-content h2 {
        font-size: 22px;
    }

    .jfm-difference-description {
        font-size: 13px;
    }

    .jfm-benefits-list {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 12px;
    }

    .jfm-benefits-list li {
        font-size: 12px;
    }

    .jfm-difference-cards {
        gap: 18px;
    }

    .jfm-card-image {
        height: 220px;
    }

    .jfm-card-body {
        padding: 14px 16px 18px;
    }

    .jfm-card-body h3 {
        font-size: 18px;
    }

    .jfm-card-body p {
        font-size: 12px;
    }

    .jfm-card-button {
        min-height: 38px;
        font-size: 12px;
    }

    .jfm-difference-footer {
        width: calc(100% + 40px);
        margin: 35px -20px 0;
    }
}

/* =========================================
   MOBILE PHONES
========================================= */

@media (max-width: 576px) {
    .jfm-difference-section {
        padding: 30px 16px 0;
    }

    .jfm-difference-container {
        grid-template-columns: minmax(0, 1fr);
        gap: 25px;
    }

    .jfm-difference-label {
        font-size: 11px;
        margin-bottom: 8px;
    }

    .jfm-difference-content h2 {
        font-size: 21px;
        line-height: 1.35;
        margin-bottom: 10px;
    }

    .jfm-difference-description {
        font-size: 12px;
        line-height: 1.65;
        margin-bottom: 15px;
    }

    .jfm-benefits-list {
        grid-template-columns: minmax(0, 1fr);
        gap: 10px;
    }

    .jfm-benefits-list li {
        gap: 10px;
        min-height: 32px;
        font-size: 12px;
    }

    .jfm-check-icon {
        flex-basis: 29px;
        width: 29px;
        height: 29px;
        font-size: 16px;
    }

    .jfm-difference-cards {
        grid-template-columns: minmax(0, 1fr);
        gap: 18px;
    }

    .jfm-difference-card {
        width: 100%;
        border-radius: 12px;
    }

    .jfm-card-image {
        height: 210px;
    }

    .jfm-card-body {
        padding: 15px 15px 17px;
    }

    .jfm-card-body h3 {
        font-size: 18px;
        line-height: 1.4;
        margin-bottom: 7px;
    }

    .jfm-card-body p {
        font-size: 12px;
        line-height: 1.6;
        margin-bottom: 14px;
    }

    .jfm-card-button {
        min-height: 42px;
        font-size: 12px;
    }

    .jfm-difference-footer {
        width: calc(100% + 32px);
        min-height: 55px;
        margin: 30px -16px 0;
        padding: 18px 10px;
        font-size: 11px;
    }
}

/* =========================================
   SMALL IPHONES
========================================= */

@media (max-width: 360px) {
    .jfm-difference-section {
        padding-right: 12px;
        padding-left: 12px;
    }

    .jfm-difference-content h2 {
        font-size: 19px;
    }

    .jfm-card-image {
        height: 180px;
    }

    .jfm-card-body h3 {
        font-size: 16px;
    }

    .jfm-difference-footer {
        width: calc(100% + 24px);
        margin-right: -12px;
        margin-left: -12px;
    }
}
</style>

    <!-- =========================================================
         CHOOSE YOUR JOURNEY
    ========================================================= -->
  
<section class="jfm-rewards-section">

    <div class="jfm-rewards-container">

        <!-- Heading -->
       
        <div class="jfm-feature-heading">

            <h4 class="jfm-feature-label">
          Simple. Transparent. Rewarding.
            </h4>

            <h1 class="jfm-feature-title">
                How JFinMate
                <strong>Rewards You</strong>
                
            </h1>

           <p>
                Your relationship with JFinMate doesn't end after your
                property purchase or finance journey.
            </p>

        </div>

        <!-- Five Steps -->
        <div class="jfm-rewards-steps">

            <div class="jfm-reward-step">
                <div class="jfm-reward-icon">
                    <i class="fas fa-rupee-sign"></i>
                </div>
                <h3>1</h3>
                <h4>Choose a Property or Finance Solution</h4>
                <p>
                    Browse verified properties or connect with our finance experts.
                </p>
            </div>

            <div class="jfm-reward-step">
                <div class="jfm-reward-icon">
                    <i class="fas fa-route"></i>
                </div>
                <h3>2</h3>
                <h4>Complete Your Journey</h4>
                <p>
                    We'll guide you from enquiry to successful completion.
                </p>
            </div>

            <div class="jfm-reward-step">
                <div class="jfm-reward-icon">
                    <i class="fas fa-hand-holding-heart"></i>
                </div>
                <h3>3</h3>
                <h4>Unlock Customer Benefits</h4>
                <p>
                    Enjoy exclusive offers, cashback or project-specific
                    benefits where applicable.
                </p>
            </div>

            <div class="jfm-reward-step">
                <div class="jfm-reward-icon">
                    <i class="fas fa-share-alt"></i>
                </div>
                <h3>4</h3>
                <h4>Refer Friends &amp; Family</h4>
                <p>
                    Share JFinMate with people looking for property or finance.
                </p>
            </div>

            <div class="jfm-reward-step">
                <div class="jfm-reward-icon">
                    <i class="fas fa-gift"></i>
                </div>
                <h3>5</h3>
                <h4>Earn Referral Rewards</h4>
                <p>
                    Receive referral rewards when eligible transactions
                    are successfully completed.
                </p>
            </div>

        </div>

        <!-- Referral Banner -->
        <div class="jfm-referral-banner">

            <div class="jfm-referral-gift">
                <i class="fas fa-gift"></i>
            </div>

            <div class="jfm-referral-content">
                <h3>Your journey doesn't stop after purchase.</h3>
                <p>
                    Become a JFinMate customer and unlock opportunities
                    to share your experience with friends and family.
                </p>
            </div>

            <a href="{{ url('/refer-earn') }}"
               class="jfm-referral-button">
                <span>Refer &amp; Earn</span>
                <i class="fas fa-arrow-right"></i>
            </a>

        </div>

    </div>
</section>
<style>
/* ==========================================
   JFINMATE REWARDS SECTION
========================================== */

.jfm-rewards-section {
    width: 100%;
    margin: 0;
    padding: 38px 24px 44px;
    background: #f0f6fd;
    font-family: Arial, Helvetica, sans-serif;
    box-sizing: border-box;
    overflow: hidden;
}

.jfm-rewards-section *,
.jfm-rewards-section *::before,
.jfm-rewards-section *::after {
    box-sizing: border-box;
}

.jfm-rewards-container {
    width: 100%;
    max-width: 1250px;
    margin: 0 auto;
}

/* HEADING */

.jfm-rewards-heading {
    text-align: center;
    margin: 0 auto 43px;
}

.jfm-rewards-eyebrow {
    display: block;
    color: #2874f0;
    font-size: 16px;
    line-height: 1.5;
    margin-bottom: 5px;
}

.jfm-rewards-heading h2 {
    margin: 0 0 5px;
    color: #373737;
    font-size: 20px;
    font-weight: 700;
    line-height: 1.35;
}

.jfm-rewards-heading p {
    margin: 0;
    color: #777777;
    font-size: 12px;
    line-height: 1.5;
}

/* STEPS GRID */

.jfm-rewards-steps {
    display: grid;
    grid-template-columns: repeat(5, minmax(0, 1fr));
    gap: 20px;
    align-items: start;
    margin-bottom: 43px;
}

.jfm-reward-step {
    min-width: 0;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.jfm-reward-icon {
    width: 39px;
    height: 39px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 0 13px;
    border-radius: 3px;
    background: #2874e8;
    color: #ffffff;
    font-size: 15px;
}

.jfm-reward-step h3 {
    margin: 0 0 10px;
    color: #393939;
    font-size: 13px;
    font-weight: 700;
    line-height: 1.2;
}

.jfm-reward-step h4 {
    min-height: 15px;
    margin: 0 0 5px;
    color: #171717;
    font-size: 16px;
    font-weight: 500;
    line-height: 1.35;
}

.jfm-reward-step p {
    max-width: 190px;
    margin: 0;
    color: #777777;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.45;
}

/* REFERRAL BANNER */

.jfm-referral-banner {
    display: flex;
    align-items: center;
    gap: 22px;
    width: 100%;
    min-height: 78px;
    padding: 15px 17px;
    border-radius: 7px;
    background: #e4efff;
}

.jfm-referral-gift {
    width: 39px;
    height: 39px;
    flex: 0 0 39px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 4px;
    background: #2874e8;
    color: #ffffff;
    font-size: 22px;
}

.jfm-referral-content {
    flex: 1;
    min-width: 0;
}

.jfm-referral-content h3 {
    margin: 0 0 4px;
    color: #3b3b3b;
    font-size: 20px;
    font-weight: 700;
    line-height: 1.4;
}

.jfm-referral-content p {
    max-width: 460px;
    margin: 0;
    color: #777777;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.5;
}

.jfm-referral-button {
    min-width: 144px;
    min-height: 43px;
    padding: 8px 13px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    flex-shrink: 0;
    border: 1px solid #2874e8;
    border-radius: 4px;
    background: #2874e8;
    color: #ffffff !important;
    font-size: 14px;
    line-height: 1.3;
    text-decoration: none;
    transition: background 0.25s ease;
}

.jfm-referral-button:hover {
    background: #185ac4;
    border-color: #185ac4;
    color: #ffffff !important;
}

.jfm-referral-button i {
    font-size: 11px;
    transition: transform 0.25s ease;
}

.jfm-referral-button:hover i {
    transform: translateX(3px);
}

/* ==========================================
   LAPTOP
========================================== */

@media (min-width: 1200px) {
    .jfm-rewards-section {
        padding-right: 30px;
        padding-left: 30px;
    }

    .jfm-rewards-steps {
        gap: 28px;
    }
}

/* ==========================================
   TABLET
========================================== */

@media (max-width: 991px) {
    .jfm-rewards-section {
        padding: 35px 20px;
    }

    .jfm-rewards-steps {
        grid-template-columns: repeat(3, minmax(0, 1fr));
        column-gap: 20px;
        row-gap: 30px;
        margin-bottom: 35px;
    }

    .jfm-reward-step h4 {
        font-size: 12px;
    }

    .jfm-reward-step p {
        font-size: 11px;
    }

    .jfm-referral-banner {
        gap: 14px;
    }
}

/* ==========================================
   MOBILE
========================================== */

@media (max-width: 576px) {
    .jfm-rewards-section {
        padding: 30px 16px 28px;
    }

    .jfm-rewards-heading {
        margin-bottom: 30px;
    }

    .jfm-rewards-heading h2 {
        font-size: 21px;
    }

    .jfm-rewards-heading p {
        max-width: 340px;
        margin: 0 auto;
        font-size: 12px;
        line-height: 1.6;
    }

    .jfm-rewards-eyebrow {
        font-size: 11px;
    }

    .jfm-rewards-steps {
        grid-template-columns: repeat(2, minmax(0, 1fr));
        column-gap: 18px;
        row-gap: 28px;
        margin-bottom: 30px;
    }

    .jfm-reward-icon {
        width: 34px;
        height: 34px;
        margin-bottom: 10px;
        font-size: 17px;
    }

    .jfm-reward-step h3 {
        margin-bottom: 7px;
        font-size: 14px;
    }

    .jfm-reward-step h4 {
        min-height: 0;
        margin-bottom: 6px;
        font-size: 12px;
        line-height: 1.4;
    }

    .jfm-reward-step p {
        max-width: 230px;
        font-size: 11px;
        line-height: 1.55;
    }

    /* Banner stacks cleanly on phones */
    .jfm-referral-banner {
        display: grid;
        grid-template-columns: 40px minmax(0, 1fr);
        align-items: center;
        gap: 12px;
        padding: 16px 13px;
    }

    .jfm-referral-gift {
        width: 38px;
        height: 38px;
        font-size: 20px;
    }

    .jfm-referral-content h3 {
        font-size: 12px;
    }

    .jfm-referral-content p {
        font-size: 10.5px;
        line-height: 1.55;
    }

    .jfm-referral-button {
        grid-column: 1 / -1;
        width: 100%;
        min-height: 42px;
        font-size: 12px;
    }
}

/* ==========================================
   VERY SMALL PHONES
========================================== */

@media (max-width: 360px) {
    .jfm-rewards-section {
        padding-right: 12px;
        padding-left: 12px;
    }

    .jfm-rewards-steps {
        column-gap: 12px;
    }

    .jfm-reward-step h4 {
        font-size: 11px;
    }

    .jfm-reward-step p {
        font-size: 10px;
    }

    .jfm-referral-banner {
        padding: 13px 10px;
    }
}
</style>

    <!-- =========================================================
         HOW IT WORKS
    ========================================================= -->

<section class="jfm-why-section">
    <div class="jfm-why-container">

       
        <div class="jfm-feature-heading">

            <h4 class="jfm-feature-label">
          Built Around You
            </h4>

            <h1 class="jfm-feature-title">
                Why Customers
                <strong>Prefer JFinMate</strong>
                
            </h1>

            <p>Everything you need, supported by a team you can trust.</p>

        </div>

        <div class="jfm-why-grid">

            <div class="jfm-why-card">
                <div class="jfm-why-image">
                    <img src="{{ asset('theme/dhara-jfin/img/verified-property.jpg') }}"
                         alt="Verified Property Options" loading="lazy">
                </div>
                <div class="jfm-why-card-content">
                    <h3>Verified Property Options</h3>
                    <p>Explore trusted and verified property options selected to suit your needs.</p>
                </div>
            </div>

            <div class="jfm-why-card">
                <div class="jfm-why-image">
                    <img src="{{ asset('theme/dhara-jfin/img/finance-assistance.jpg') }}"
                         alt="Expert Finance Assistance" loading="lazy">
                </div>
                <div class="jfm-why-card-content">
                    <h3>Expert Finance Assistance</h3>
                    <p>Get professional guidance to make your financing journey simple and stress-free.</p>
                </div>
            </div>

            <div class="jfm-why-card">
                <div class="jfm-why-image">
                    <img src="{{ asset('theme/dhara-jfin/img/relationship-manager.jpg') }}"
                         alt="Dedicated Relationship Manager" loading="lazy">
                </div>
                <div class="jfm-why-card-content">
                    <h3>Dedicated Relationship Manager</h3>
                    <p>Get personalised support from a dedicated relationship manager whenever you need it.</p>
                </div>
            </div>

            <div class="jfm-why-card">
                <div class="jfm-why-image">
                    <img src="{{ asset('theme/dhara-jfin/img/transparent-process.jpg') }}"
                         alt="Transparent Process" loading="lazy">
                </div>
                <div class="jfm-why-card-content">
                    <h3>Transparent Process</h3>
                    <p>Clear communication and a transparent process from start to finish.</p>
                </div>
            </div>

            <div class="jfm-why-card">
                <div class="jfm-why-image">
                    <img src="{{ asset('theme/dhara-jfin/img/customer-benefits.jpg') }}"
                         alt="Exclusive Customer Benefits" loading="lazy">
                </div>
                <div class="jfm-why-card-content">
                    <h3>Exclusive Customer Benefits</h3>
                    <p>Enjoy exclusive benefits designed especially for our valued customers.</p>
                </div>
            </div>

            <div class="jfm-why-card">
                <div class="jfm-why-image">
                    <img src="{{ asset('theme/dhara-jfin/img/referral-rewards.jpg') }}"
                         alt="Referral Rewards" loading="lazy">
                </div>
                <div class="jfm-why-card-content">
                    <h3>Referral Rewards</h3>
                    <p>Refer your friends and family and enjoy exciting rewards.</p>
                </div>
            </div>

        </div>
    </div>
</section>
<style>
/* =====================================
   WHY CUSTOMERS PREFER JFINMATE
===================================== */

.jfm-why-section {
    width: 100%;
    padding: 50px 24px 48px;
    margin: 0;
    background: #fbfcfe;
    font-family: Arial, Helvetica, sans-serif;
    box-sizing: border-box;
    overflow: hidden;
}

.jfm-why-section *,
.jfm-why-section *::before,
.jfm-why-section *::after {
    box-sizing: border-box;
}

.jfm-why-container {
    width: 100%;
    max-width: 1240px;
    margin: 0 auto;
}

/* HEADING */

.jfm-why-heading {
    text-align: center;
    margin-bottom: 32px;
}

.jfm-why-heading > span {
    display: block;
    color: #2874ff;
    font-size: 16px;
    line-height: 1.5;
    margin-bottom: 5px;
}

.jfm-why-heading h2 {
    margin: 0 0 5px;
    color: #383838;
    font-size: 30px;
    font-weight: 700;
    line-height: 1.35;
}

.jfm-why-heading p {
    margin: 0;
    color: #777;
    font-size: 14px;
    line-height: 1.5;
}

/* GRID */

.jfm-why-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    column-gap: 22px;
    row-gap: 32px;
    align-items: start;
}

/* CARD */

.jfm-why-card {
    min-width: 0;
    width: 100%;
    background: transparent;
    border: none;
    border-radius: 0;
    overflow: hidden;
}

/* IMAGE */

.jfm-why-image {
    width: 100%;
    height: 195px;
    overflow: hidden;
    border-radius: 9px 9px 0 0;
    background: #edf2f7;
}

.jfm-why-image img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    transition: transform 0.3s ease;
}

.jfm-why-card:hover .jfm-why-image img {
    transform: scale(1.025);
}

/* CARD TEXT */

.jfm-why-card-content {
    padding: 9px 11px 0;
}

.jfm-why-card-content h3 {
    margin: 0 0 7px;
    color: #3b3b3b;
    font-size: 16px;
    font-weight: 700;
    line-height: 1.35;
}

.jfm-why-card-content p {
    margin: 0;
    color: #777;
    font-size: 11px;
    font-weight: 400;
    line-height: 1.5;
}

/* =====================================
   TABLETS
===================================== */

@media (max-width: 991px) {
    .jfm-why-section {
        padding: 40px 20px;
    }

    .jfm-why-grid {
        column-gap: 18px;
        row-gap: 28px;
    }

    .jfm-why-image {
        height: 165px;
    }

    .jfm-why-card-content {
        padding: 9px 5px 0;
    }

    .jfm-why-card-content h3 {
        font-size: 14px;
    }

    .jfm-why-card-content p {
        font-size: 11px;
    }
}

/* =====================================
   MOBILE
===================================== */

@media (max-width: 600px) {
    .jfm-why-section {
        padding: 32px 16px 35px;
    }

    .jfm-why-heading {
        margin-bottom: 25px;
    }

    .jfm-why-heading h2 {
        font-size: 20px;
        line-height: 1.35;
    }

    .jfm-why-heading p {
        max-width: 340px;
        margin: 0 auto;
        font-size: 12px;
    }

    .jfm-why-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
        column-gap: 14px;
        row-gap: 25px;
    }

    .jfm-why-image {
        height: 135px;
        border-radius: 7px 7px 0 0;
    }

    .jfm-why-card-content {
        padding: 8px 2px 0;
    }

    .jfm-why-card-content h3 {
        margin-bottom: 5px;
        font-size: 13px;
        line-height: 1.4;
    }

    .jfm-why-card-content p {
        font-size: 11px;
        line-height: 1.5;
    }
}

/* SMALL PHONES */

@media (max-width: 380px) {
    .jfm-why-section {
        padding-right: 12px;
        padding-left: 12px;
    }

    .jfm-why-grid {
        column-gap: 12px;
        row-gap: 22px;
    }

    .jfm-why-image {
        height: 115px;
    }

    .jfm-why-card-content h3 {
        font-size: 12px;
    }

    .jfm-why-card-content p {
        font-size: 10px;
    }
}
</style>


    <!-- =========================================================
         WHY CUSTOMERS PREFER
    ========================================================= -->
   
<style>

/* =========================================
   WHY CUSTOMERS PREFER JFINMATE
========================================= */

.jf-prefer {
    width: 100%;
    padding: 80px 20px;
    background: #f7f9fc;
    overflow: hidden;
}

.jf-prefer .jf-container {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
}


/* =========================================
   SECTION HEADING
========================================= */

.jf-prefer .jf-section-heading {
    text-align: center;
    max-width: 750px;
    margin: 0 auto 45px;
}

.jf-prefer .eyebrow {
    display: inline-block;
    margin-bottom: 10px;

    font-size: 14px;
    font-weight: 700;
    letter-spacing: 1.5px;
    text-transform: uppercase;

    color:#1e4fd8;
   
}

.jf-prefer .jf-section-heading h2 {
    margin: 0 0 12px;

    font-size: 38px;
    line-height: 1.2;
    font-weight: 700;

    color: #172b4d;
}

.jf-prefer .jf-section-heading p {
    margin: 0;

    font-size: 17px;
    line-height: 1.6;

    color: #667085;
}


/* =========================================
   CARD GRID
========================================= */

.jf-prefer-grid {
    display: grid;

    grid-template-columns: repeat(4, minmax(0, 1fr));

    gap: 24px;

    width: 100%;
}


/* =========================================
   CARD
========================================= */

.jf-prefer-card {
    width: 100%;
    min-width: 0;

    background: #ffffff;

    border-radius: 18px;

    overflow: hidden;

    border: 1px solid #e8ecf2;

    box-shadow: 0 8px 30px rgba(20, 40, 70, 0.07);

    transition:
        transform 0.3s ease,
        box-shadow 0.3s ease;
}

.jf-prefer-card:hover {
    transform: translateY(-7px);

    box-shadow: 0 16px 40px rgba(20, 40, 70, 0.13);
}


/* =========================================
   IMAGE
========================================= */

.jf-prefer-image {
    width: 100%;
    height: 190px;

    overflow: hidden;

    background: #e9edf3;
}

.jf-prefer-image img {
    display: block;

    width: 100%;
    height: 100%;

    object-fit: cover;

    transition: transform 0.5s ease;
}

.jf-prefer-card:hover .jf-prefer-image img {
    transform: scale(1.06);
}


/* =========================================
   CARD CONTENT
========================================= */

.jf-prefer-content {
    padding: 22px 20px 24px;

    text-align: center;
}

.jf-prefer-content h3 {
    margin: 0 0 10px;

    font-size: 18px;
    line-height: 1.35;
    font-weight: 700;

    color: #172b4d;
}

.jf-prefer-content p {
    margin: 0;

    font-size: 14px;
    line-height: 1.6;

    color: #667085;
}


/* =========================================
   TABLET
========================================= */

@media (max-width: 1100px) {

    .jf-prefer {
        padding: 70px 20px;
    }

    .jf-prefer-grid {
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 20px;
    }

    .jf-prefer-image {
        height: 180px;
    }

    .jf-prefer .jf-section-heading h2 {
        font-size: 34px;
    }
}


/* =========================================
   SMALL TABLET
========================================= */

@media (max-width: 768px) {

    .jf-prefer {
        padding: 55px 16px;
    }

    .jf-prefer .jf-section-heading {
        margin-bottom: 30px;
    }

    .jf-prefer .jf-section-heading h2 {
        font-size: 29px;
    }

    .jf-prefer .jf-section-heading p {
        font-size: 15px;
    }

    .jf-prefer-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 16px;
    }

    .jf-prefer-image {
        height: 165px;
    }

    .jf-prefer-content {
        padding: 18px 15px 20px;
    }

    .jf-prefer-content h3 {
        font-size: 16px;
    }

    .jf-prefer-content p {
        font-size: 13px;
    }
}
  
        /* =========================================================
   JFINSERV HERO - CLEAN VERSION
   ========================================================= */

.jfinHero,
.jfinHero * {
    box-sizing: border-box;
}


/* =========================================================
   HERO
   ========================================================= */

.jfinHero {
    position: relative;

    width: 100%;
    height: 570px;

    overflow: hidden;

    margin: 0;
    padding: 0;

    background: #eef7ff;
}


/* =========================================================
   SLIDER
   ========================================================= */

.jfinHeroSlider {
    position: relative;

    width: 100%;
    height: 100%;
}


/* =========================================================
   SLIDE
   ========================================================= */

.jfinHeroSlide {
    position: absolute;

    inset: 0;

    width: 100%;
    height: 100%;

    background-repeat: no-repeat;

    background-size: cover;
    background-position: center center;

    opacity: 0;
    visibility: hidden;

    transition:
        opacity .7s ease,
        visibility .7s ease;

    z-index: 1;
}


/* Active */

.jfinHeroSlideActive {
    opacity: 1;

    visibility: visible;

    z-index: 2;
}


/* =========================================================
   SLIDE IMAGE POSITIONS - DESKTOP
   ========================================================= */

.jfinHeroSlide:nth-child(1) {
    background-position: center center;
}

.jfinHeroSlide:nth-child(2) {
    background-position: right center;
}


/* =========================================================
   CONTENT
   ========================================================= */

.jfinHeroContent {
    position: relative;

    width: 100%;
    max-width: 1350px;

    height: 100%;

    margin: 0 auto;

    padding: 0 70px;

    display: flex;

    align-items: center;

    justify-content: flex-start;

    z-index: 10;
}


/* =========================================================
   TEXT
   ========================================================= */

.jfinHeroText {
    position: relative;

    width: 52%;
    max-width: 650px;

    z-index: 20;
}


/* =========================================================
   LABEL
   ========================================================= */

.jfinHeroLabel {
    margin-bottom: 15px;

    color: #ed1c24;

    font-size: 13px;
    font-weight: 700;

    line-height: 1.3;

    letter-spacing: 4px;

    text-transform: uppercase;
}


/* =========================================================
   TITLE
   ========================================================= */

.jfinHeroTitle {
    margin: 0 0 18px;

    color: #295cab;

    font-size: 48px;
    font-weight: 800;

    line-height: 1.12;

    letter-spacing: -.5px;
}


.jfinHeroTitle span {
    color: #009fe3;
}


/* =========================================================
   DESCRIPTION
   ========================================================= */

.jfinHeroDescription {
    max-width: 570px;

    margin: 0 0 28px;

    color: #333;

    font-size: 16px;

    line-height: 1.6;
}


/* =========================================================
   BUTTONS
   ========================================================= */

.jfinHeroButtons {
    display: flex;

    align-items: center;

    gap: 12px;
}


.jfinHeroBtn {
    min-width: 130px;

    height: 48px;

    padding: 0 25px;

    display: inline-flex;

    align-items: center;
    justify-content: center;

    border-radius: 30px;

    font-size: 15px;
    font-weight: 700;

    text-decoration: none;

    transition: .25s ease;
}


/* Apply */

.jfinHeroApply {
    color: #fff;

    background: #2858d7;

    border: 2px solid #2858d7;

    box-shadow: 0 8px 20px rgba(40,88,215,.25);
}


/* Login */

.jfinHeroLogin {
    color: #fff;

    background: #ed1c24;

    border: 2px solid #ed1c24;

    box-shadow: 0 8px 20px rgba(237,28,36,.22);
}


/* =========================================================
   ARROWS
   ========================================================= */

.jfinHeroNavigation {
    position: absolute;

    right: 35px;
    bottom: 30px;

    display: flex;

    gap: 10px;

    z-index: 100;
}


.jfinHeroArrow {
    width: 48px;
    height: 48px;

    border: 0;

    border-radius: 50%;

    display: flex;

    align-items: center;
    justify-content: center;

    color: #444;

    background: rgba(255,255,255,.95);

    cursor: pointer;

    font-size: 15px;

    box-shadow: 0 5px 15px rgba(0,0,0,.12);
}

/* =========================================================
   JFINSERV HERO - MOBILE ONLY
   DESKTOP CSS WILL NOT CHANGE
   ========================================================= */

@media (max-width: 767px) {

    /* HERO */
    .jfinHero {
        width: 100% !important;
        height: 225px !important;
        min-height: 225px !important;

        margin: 0 !important;
        padding: 0 !important;

        overflow: hidden !important;

        position: relative !important;
    }


    /* SLIDER */
    .jfinHeroSlider {
        width: 100% !important;
        height: 100% !important;
    }


    /* =====================================================
       IMAGE
       ===================================================== */

    .jfinHeroSlide {
        width: 100% !important;
        height: 100% !important;

        background-repeat: no-repeat !important;

        /*
         * Smaller image on mobile
         */
        background-size: auto 82% !important;

        background-position: right bottom !important;

        transform: none !important;
    }


    /* First banner */
    .jfinHeroSlide:nth-child(1) {
        background-size: auto 82% !important;
        background-position: right bottom !important;
    }


    /* Second banner */
    .jfinHeroSlide:nth-child(2) {
        background-size: auto 82% !important;
        background-position: right bottom !important;
    }


    /* =====================================================
       CONTENT
       ===================================================== */

    .jfinHeroContainer {
        width: 100% !important;
        height: 100% !important;

        margin: 0 !important;

        padding: 14px 10px 8px 12px !important;

        display: flex !important;

        align-items: flex-start !important;
        justify-content: flex-start !important;

        position: relative !important;

        z-index: 10 !important;
    }


    /* =====================================================
       TEXT AREA
       ===================================================== */

    .jfinHeroContent {
        width: 55% !important;

        max-width: 205px !important;

        margin: 0 !important;
        padding: 0 !important;

        position: relative !important;

        z-index: 30 !important;
    }


    /* =====================================================
       LABEL
       ===================================================== */

    .jfinHeroLabel {
        margin: 0 0 5px 0 !important;
        padding: 0 !important;

        font-size: 7px !important;

        line-height: 1.2 !important;

        letter-spacing: 2px !important;

        white-space: nowrap !important;
    }


    /* =====================================================
       TITLE
       ===================================================== */

    .jfinHeroTitle {
        width: 100% !important;

        margin: 0 0 6px 0 !important;
        padding: 0 !important;

        font-size: 18px !important;

        line-height: 1.08 !important;

        letter-spacing: 0 !important;

        position: relative !important;

        top: 0 !important;
        left: 0 !important;
        right: auto !important;
        bottom: auto !important;

        transform: none !important;

        z-index: 40 !important;
    }


    .jfinHeroTitle span {
        color: #009fe3 !important;
    }


    /* =====================================================
       DESCRIPTION
       ===================================================== */

    .jfinHeroDescription {
        width: 100% !important;

        max-width: 200px !important;

        margin: 0 0 9px 0 !important;
        padding: 0 !important;

        font-size: 7.2px !important;

        line-height: 1.3 !important;

        position: relative !important;

        z-index: 40 !important;

        display: -webkit-box !important;

        -webkit-box-orient: vertical !important;

        -webkit-line-clamp: 3 !important;

        overflow: hidden !important;
    }


    /* =====================================================
       BUTTONS
       ===================================================== */

    .jfinHeroButtons {
        width: 100% !important;

        display: flex !important;

        align-items: center !important;

        gap: 7px !important;

        margin: 0 !important;
        padding: 0 !important;

        position: relative !important;

        z-index: 50 !important;
    }


    .jfinHeroButton {
        width: 88px !important;
        min-width: 88px !important;

        height: 39px !important;

        padding: 0 5px !important;

        display: inline-flex !important;

        align-items: center !important;
        justify-content: center !important;

        border-radius: 25px !important;

        font-size: 10.5px !important;

        white-space: nowrap !important;
    }


    /* =====================================================
       ARROWS
       ===================================================== */

    .jfinHeroNavigation {
        position: absolute !important;

        right: 8px !important;

        bottom: 8px !important;

        display: flex !important;

        gap: 7px !important;

        z-index: 100 !important;
    }


    .jfinHeroArrow {
        width: 36px !important;
        height: 36px !important;

        min-width: 36px !important;

        padding: 0 !important;

        display: flex !important;

        align-items: center !important;
        justify-content: center !important;

        font-size: 12px !important;
    }

}


/* =========================================================
   SMALL MOBILE
   ========================================================= */

@media (max-width: 480px) {

    .jfinHero {
        height: 220px !important;
        min-height: 220px !important;
    }


    .jfinHeroSlide {
        /*
         * Keep person + phone smaller
         */
        background-size: auto 78% !important;

        background-position: right bottom !important;
    }


    .jfinHeroContainer {
        padding: 13px 9px 7px 11px !important;
    }


    .jfinHeroContent {
        width: 54% !important;
        max-width: 200px !important;
    }


    .jfinHeroTitle {
        font-size: 17px !important;
        line-height: 1.07 !important;
    }


    .jfinHeroDescription {
        font-size: 7px !important;

        max-width: 190px !important;

        line-height: 1.28 !important;
    }


    .jfinHeroButton {
        width: 86px !important;
        min-width: 86px !important;

        height: 38px !important;

        font-size: 10px !important;
    }

}


/* =========================================================
   VERY SMALL MOBILE
   ========================================================= */

@media (max-width: 360px) {

    .jfinHero {
        height: 215px !important;
        min-height: 215px !important;
    }


    .jfinHeroSlide {
        background-size: auto 75% !important;

        background-position: right bottom !important;
    }


    .jfinHeroContainer {
        padding: 12px 8px 7px 10px !important;
    }


    .jfinHeroContent {
        width: 55% !important;
    }


    .jfinHeroTitle {
        font-size: 16px !important;
    }


    .jfinHeroDescription {
        font-size: 6.8px !important;
    }


    .jfinHeroButton {
        width: 80px !important;
        min-width: 80px !important;

        height: 36px !important;

        font-size: 9.5px !important;
    }


    .jfinHeroNavigation {
        right: 7px !important;
        bottom: 7px !important;
    }


    .jfinHeroArrow {
        width: 33px !important;
        height: 33px !important;
    }

}
@media (max-width: 767px) {

    /* Give the text more horizontal space */
    .jfinHeroContent {
        width: 62% !important;
        max-width: 250px !important;
    }

    .jfinHeroText {
        width: 100% !important;
        max-width: 250px !important;
    }

    /* Don't break normal words */
    .jfinHeroTitle {
        width: 100% !important;

        font-size: 18px !important;
        line-height: 1.08 !important;

        word-break: normal !important;
        overflow-wrap: normal !important;
        white-space: normal !important;
    }

    .jfinHeroTitle span {
        display: inline !important;

        white-space: normal !important;
        word-break: normal !important;
        overflow-wrap: normal !important;
    }

    /* Description */
    .jfinHeroDescription {
        width: 100% !important;
        max-width: 230px !important;

        word-break: normal !important;
        overflow-wrap: normal !important;

        font-size: 7.5px !important;
        line-height: 1.35 !important;
    }

    /* Keep image on right */
    .jfinHeroSlide {
        background-size: auto 78% !important;
        background-position: right bottom !important;
    }

}


/* =====================================================
   480px
   ===================================================== */

@media (max-width: 480px) {

    .jfinHeroContent {
        width: 61% !important;
        max-width: 235px !important;
    }

    .jfinHeroText {
        width: 100% !important;
        max-width: 235px !important;
    }

    .jfinHeroTitle {
        font-size: 17px !important;
        line-height: 1.08 !important;
    }

    .jfinHeroDescription {
        max-width: 215px !important;
        font-size: 7px !important;
    }

}


/* =====================================================
   360px
   ===================================================== */

@media (max-width: 360px) {

    .jfinHeroContent {
        width: 60% !important;
        max-width: 215px !important;
    }

    .jfinHeroText {
        max-width: 215px !important;
    }

    .jfinHeroTitle {
        font-size: 16px !important;
    }

    .jfinHeroDescription {
        max-width: 195px !important;
        font-size: 6.8px !important;
    }

}
@media (max-width: 767px) {

    .jfinHeroContent {
        width: 64% !important;
        max-width: 255px !important;
    }

    .jfinHeroText {
        width: 100% !important;
        max-width: 255px !important;
    }

    .jfinHeroTitle {
        width: 100% !important;

        font-size: 18px !important;
        line-height: 1.08 !important;

        word-break: normal !important;
        overflow-wrap: normal !important;
    }

    .jfinHeroTitle span {
        display: inline !important;
        white-space: normal !important;
    }

}


/* SMALL MOBILE */

@media (max-width: 480px) {

    .jfinHeroContent {
        width: 64% !important;
        max-width: 240px !important;
    }

    .jfinHeroText {
        max-width: 240px !important;
    }

    .jfinHeroTitle {
        font-size: 17px !important;
    }

}


/* VERY SMALL MOBILE */

@media (max-width: 360px) {

    .jfinHeroContent {
        width: 63% !important;
        max-width: 225px !important;
    }

    .jfinHeroText {
        max-width: 225px !important;
    }

    .jfinHeroTitle {
        font-size: 16px !important;
    }

}@media (max-width: 767px) {

    .jfinHeroContent {
        width: 70% !important;
        max-width: 280px !important;
        flex: 0 0 70% !important;
    }

    .jfinHeroText {
        width: 100% !important;
        max-width: 280px !important;
    }

    .jfinHeroTitle {
        width: 250px !important;
        max-width: 250px !important;

        font-size: 18px !important;
        line-height: 1.08 !important;

        margin: 0 0 7px 0 !important;

        word-break: normal !important;
        overflow-wrap: normal !important;
        white-space: normal !important;
    }

    .jfinHeroTitle span {
        display: inline !important;
        white-space: normal !important;
        word-break: normal !important;
    }

    .jfinHeroDescription {
        width: 220px !important;
        max-width: 220px !important;

        font-size: 7.2px !important;
        line-height: 1.3 !important;
    }

    .jfinHeroButtons {
        gap: 7px !important;
    }

    .jfinHeroButton {
        width: 105px !important;
        min-width: 105px !important;
    }

    .jfinHeroSlide {
        background-size: auto 78% !important;
        background-position: right bottom !important;
    }
}


/* =========================================
   SMALL MOBILE
   ========================================= */

@media (max-width: 480px) {

    .jfinHeroContent {
        width: 69% !important;
        max-width: 260px !important;
    }

    .jfinHeroText {
        max-width: 260px !important;
    }

    .jfinHeroTitle {
        width: 235px !important;
        max-width: 235px !important;

        font-size: 17px !important;
    }

    .jfinHeroDescription {
        width: 205px !important;
        max-width: 205px !important;
    }

    .jfinHeroButton {
        width: 100px !important;
        min-width: 100px !important;
    }
}


/* =========================================
   360px MOBILE
   ========================================= */

@media (max-width: 360px) {

    .jfinHeroContent {
        width: 68% !important;
        max-width: 240px !important;
    }

    .jfinHeroTitle {
        width: 220px !important;
        max-width: 220px !important;

        font-size: 16px !important;
    }

    .jfinHeroDescription {
        width: 195px !important;
        max-width: 195px !important;
    }

    .jfinHeroButton {
        width: 92px !important;
        min-width: 92px !important;
    }
}
/* =========================================================
   TABLET
   ========================================================= */

@media (max-width: 1100px) {

    .jfinHero {
        height: 480px;
    }

    .jfinHeroContent {
        padding: 0 40px;
    }

    .jfinHeroText {
        width: 55%;
    }

    .jfinHeroTitle {
        font-size: 40px;
    }

    .jfinHeroDescription {
        font-size: 14px;
    }
}


/* =========================================================
   MOBILE
   ========================================================= */

@media (max-width: 767px) {

    .jfinHero {
        position: relative;

        width: 100%;

        /*
         * Banner starts normally.
         * No negative margin.
         * No transform.
         */
        height: 225px !important;
        min-height: 225px !important;

        margin: 0 !important;
        padding: 0 !important;

        overflow: hidden !important;
    }


    .jfinHeroSlider {
        width: 100%;
        height: 100%;
    }


    /* =====================================================
       MOBILE SLIDE
       ===================================================== */

    .jfinHeroSlide {
        position: absolute;

        inset: 0;

        width: 100%;
        height: 100%;

        /*
         * VERY IMPORTANT
         */
        background-size: auto 100% !important;

        background-repeat: no-repeat !important;

        background-position: right center !important;

        opacity: 0;

        visibility: hidden;

        transform: none !important;
    }


    .jfinHeroSlideActive {
        opacity: 1;

        visibility: visible;
    }


    /* Slide 1 */

    .jfinHeroSlide:nth-child(1) {
        background-position: right center !important;
    }


    /* Slide 2 */

    .jfinHeroSlide:nth-child(2) {
        background-position: right center !important;
    }


    /* =====================================================
       CONTENT
       ===================================================== */

    .jfinHeroContent {
        position: relative;

        width: 100%;
        height: 100%;

        margin: 0;
        padding: 16px 12px 10px !important;

        display: block !important;

        z-index: 10;
    }


    /* =====================================================
       TEXT AREA
       ===================================================== */

    .jfinHeroText {
        position: relative;

        width: 54% !important;

        max-width: 210px !important;

        margin: 0 !important;

        padding: 0 !important;

        z-index: 30;
    }


    /* =====================================================
       LABEL
       ===================================================== */

    .jfinHeroLabel {
        margin: 0 0 5px;

        color: #ed1c24;

        font-size: 7px;

        font-weight: 700;

        line-height: 1.25;

        letter-spacing: 2px;
    }


    /* =====================================================
       TITLE
       ===================================================== */

    .jfinHeroTitle {
        position: relative;

        margin: 0 0 6px;

        padding: 0;

        color: #295cab;

        font-size: 18px !important;

        font-weight: 800;

        line-height: 1.08 !important;

        letter-spacing: 0;

        /*
         * Prevent clipping
         */
        top: auto !important;
        left: auto !important;
        right: auto !important;
        bottom: auto !important;

        transform: none !important;
    }


    .jfinHeroTitle span {
        color: #009fe3;
    }


    /* =====================================================
       DESCRIPTION
       ===================================================== */

    .jfinHeroDescription {
        width: 100%;

        max-width: 200px;

        margin: 0 0 10px;

        padding: 0;

        color: #333;

        font-size: 7.5px;

        line-height: 1.35;

        display: -webkit-box;

        -webkit-line-clamp: 3;

        -webkit-box-orient: vertical;

        overflow: hidden;
    }


    /* =====================================================
       BUTTONS
       ===================================================== */

    .jfinHeroButtons {
        display: flex;

        align-items: center;

        gap: 7px;

        margin: 0;

        padding: 0;

        position: relative;

        z-index: 40;
    }


    .jfinHeroBtn {
        width: 94px;

        min-width: 94px;

        height: 40px;

        padding: 0 5px;

        border-radius: 25px;

        font-size: 11px;

        white-space: nowrap;
    }


    /* =====================================================
       MOBILE ARROWS
       ===================================================== */

    .jfinHeroNavigation {
        position: absolute;

        right: 10px;

        bottom: 9px;

        display: flex;

        gap: 8px;

        z-index: 100;
    }


    .jfinHeroArrow {
        width: 38px;

        height: 38px;

        font-size: 12px;
    }

}


/* =========================================================
   SMALL MOBILE
   ========================================================= */

@media (max-width: 480px) {

    .jfinHero {
        height: 225px !important;
    }


    .jfinHeroContent {
        padding: 15px 12px 10px !important;
    }


    .jfinHeroText {
        width: 53% !important;
    }


    .jfinHeroTitle {
        font-size: 17px !important;
    }


    .jfinHeroDescription {
        font-size: 7.2px;

        max-width: 195px;
    }


    .jfinHeroBtn {
        width: 90px;

        min-width: 90px;

        height: 39px;

        font-size: 10.5px;
    }


    .jfinHeroArrow {
        width: 37px;

        height: 37px;
    }
}


/* =========================================================
   360px
   ========================================================= */

@media (max-width: 360px) {

    .jfinHero {
        height: 220px !important;
    }


    .jfinHeroContent {
        padding: 14px 10px 8px !important;
    }


    .jfinHeroText {
        width: 54% !important;
    }


    .jfinHeroTitle {
        font-size: 16px !important;
    }


    .jfinHeroDescription {
        font-size: 7px;

        -webkit-line-clamp: 3;
    }


    .jfinHeroBtn {
        width: 83px;

        min-width: 83px;

        height: 37px;

        font-size: 10px;
    }


    .jfinHeroNavigation {
        right: 8px;

        bottom: 8px;
    }


    .jfinHeroArrow {
        width: 34px;

        height: 34px;
    }
}
/* =====================================================
   FIX HEADER OVERLAPPING HERO
   ===================================================== */

@media (max-width: 767px) {

    .jfinHero {
        margin-top: 67px !important;
        height: 225px !important;
        min-height: 225px !important;
    }

    .jfinHeroContent {
        padding-top: 12px !important;
    }

    .jfinHeroText {
        margin-top: 0 !important;
    }

    .jfinHeroLabel {
        margin-top: 0 !important;
    }

    .jfinHeroTitle {
        margin-top: 0 !important;
        transform: none !important;
        top: auto !important;
    }
}


/* =========================================
   SMALL MOBILE
   ========================================= */

@media (max-width: 480px) {

    .hero {
        height: 560px !important;
        min-height: 560px !important;
    }

    .hero .slide {
        height: 560px !important;
        min-height: 560px !important;

      
        background-position: right bottom !important;
    }

    .hero .hero-content {
        width: 65% !important;
        max-width: 65% !important;

        padding-top: 65px !important;
    }

    .hero .hero-content h1 {
        font-size: 23px !important;
    }

    .hero .hero-content p {
        font-size: 12px !important;
    }
}



/* =========================================================
   FINSERV FEATURE SECTION
   ========================================================= */

.finserv-wrapper {
    width: 100%;
    padding: 80px 20px;
    background: #ffffff;
    overflow: hidden;
}

.financial-services {
    position: relative;
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
}

/* =========================================
   MOBILE
========================================= */

@media (max-width: 575px) {

    .jf-prefer {
        padding: 45px 14px;
    }

    .jf-prefer .jf-section-heading {
        padding: 0 5px;
        margin-bottom: 28px;
    }

    .jf-prefer .eyebrow {
        font-size: 12px;
        letter-spacing: 1.2px;
    }

    .jf-prefer .jf-section-heading h2 {
        font-size: 25px;
        line-height: 1.3;
    }

    .jf-prefer .jf-section-heading p {
        font-size: 14px;
        line-height: 1.5;
    }

    .jf-prefer-grid {
        grid-template-columns: 1fr;
        gap: 18px;
    }

    .jf-prefer-card {
        border-radius: 16px;
    }

    .jf-prefer-image {
        height: 200px;
    }

    .jf-prefer-content {
        padding: 20px 18px 22px;
    }

    .jf-prefer-content h3 {
        font-size: 18px;
    }

    .jf-prefer-content p {
        font-size: 14px;
    }
}


/* =========================================
   VERY SMALL MOBILE
========================================= */

@media (max-width: 375px) {

    .jf-prefer {
        padding-left: 12px;
        padding-right: 12px;
    }

    .jf-prefer .jf-section-heading h2 {
        font-size: 23px;
    }

    .jf-prefer-image {
        height: 185px;
    }
}
@media (max-width: 767px) {
    .jfinHeroSlider {
        width: 106% !important;
        height: 86% !important;
    }
}
</style>
    <!-- =========================================================
         FAQ
    ========================================================= -->
   
<section class="jf-faq">
    <div class="jf-container">

        <!-- FAQ Heading -->
       
           <div class="home-section-header">
                <h2 class="home-section-title">Frequently Asked Questions</h2>
                <p class="home-section-subtitle">
                    Get answers to common queries about our home loan products
                </p>
            </div>
        <!-- FAQ Questions -->
        <div class="jf-faq-list">

            <div class="jf-faq-item">
                <button class="jf-faq-question" type="button"
                        aria-expanded="false">
                    <span>Who can earn referral rewards?</span>
                    <span class="jf-faq-toggle">+</span>
                </button>
                <div class="jf-faq-answer">
                    <p>
                        Any customer who has successfully purchased a property
                        or availed a financial solution through JFinMate may
                        become eligible for referral rewards, subject to the
                        program terms.
                    </p>
                </div>
            </div>

            <div class="jf-faq-item">
                <button class="jf-faq-question" type="button"
                        aria-expanded="false">
                    <span>Do I need to become a customer first?</span>
                    <span class="jf-faq-toggle">+</span>
                </button>
                <div class="jf-faq-answer">
                    <p>
                        Yes. The referral rewards program is available after
                        you complete an eligible property purchase or finance
                        journey with JFinMate.
                    </p>
                </div>
            </div>

            <div class="jf-faq-item">
                <button class="jf-faq-question" type="button"
                        aria-expanded="false">
                    <span>What can I refer?</span>
                    <span class="jf-faq-toggle">+</span>
                </button>
                <div class="jf-faq-answer">
                    <p>
                        You can refer people looking to buy a property or
                        explore financing solutions.
                    </p>
                </div>
            </div>

            <div class="jf-faq-item">
                <button class="jf-faq-question" type="button"
                        aria-expanded="false">
                    <span>How do I receive referral rewards?</span>
                    <span class="jf-faq-toggle">+</span>
                </button>
                <div class="jf-faq-answer">
                    <p>
                        Referral rewards are processed after your referred
                        customer completes an eligible transaction through
                        JFinMate, as per the program terms.
                    </p>
                </div>
            </div>

            <div class="jf-faq-item">
                <button class="jf-faq-question" type="button"
                        aria-expanded="false">
                    <span>Are there any customer benefits?</span>
                    <span class="jf-faq-toggle">+</span>
                </button>
                <div class="jf-faq-answer">
                    <p>
                        Yes. Depending on the project or offer, eligible
                        customers may receive benefits such as cashback,
                        purchase offers or other promotional rewards.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
<style>
/* ==========================================
   JFINMATE FAQ SECTION
========================================== */

.jf-faq {
    width: 100%;
    padding: 30px 24px 24px;
    margin: 0;
    background: #ffffff;
    font-family: Arial, Helvetica, sans-serif;
    box-sizing: border-box;
}

.jf-faq *,
.jf-faq *::before,
.jf-faq *::after {
    box-sizing: border-box;
}

.jf-faq .jf-container {
    width: 100%;
    max-width: 1000px;
    margin: 0 auto;
}

/* Heading */

.jf-faq-heading {
    text-align: center;
    margin: 0 0 34px;
}

.jf-faq-heading h2 {
    margin: 0 0 5px;
    color: #2874f0;
    font-size: 30px;
    font-weight: 600;
    line-height: 1.35;
}

.jf-faq-heading p {
    margin: 0;
    color: #555555;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.5;
}

/* FAQ list */

.jf-faq-list {
    width: 100%;
    max-width: 770px;
    margin: 0 auto;
}

.jf-faq-item {
    width: 100%;
    margin: 0;
    border: 0;
    border-bottom: 1px solid transparent;
    background: transparent;
}

/* Question row */

.jf-faq-question {
    width: 100%;
    min-height: 51px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
    padding: 12px 4px;

    border: 0;
    border-radius: 0;
    outline: none;
    background: transparent;

    color: #333333;
    font-family: inherit;
    font-size: 16px;
    font-weight: 600;
    line-height: 1.45;
    text-align: left;

    cursor: pointer;
    appearance: none;
    -webkit-appearance: none;
}

.jf-faq-question > span:first-child {
    flex: 1;
    min-width: 0;
}

/* Plus / minus icon */

.jf-faq-toggle {
    flex: 0 0 20px;
    width: 20px;
    height: 20px;
    display: flex;
    align-items: center;
    justify-content: center;

    color: #333333;
    font-family: Arial, sans-serif;
    font-size: 21px;
    font-weight: 400;
    line-height: 1;

    transition: transform 0.2s ease;
}

/* Answer */

.jf-faq-answer {
    display: none;
    padding: 0 30px 15px 4px;
}

.jf-faq-answer p {
    margin: 0;
    color: #6b6b6b;
    font-size: 12px;
    font-weight: 400;
    line-height: 1.7;
}

/* Open item */

.jf-faq-item.active .jf-faq-answer {
    display: block;
}

.jf-faq-item.active .jf-faq-toggle {
    transform: rotate(45deg);
}

.jf-faq-question:focus-visible {
    outline: 2px solid #2874f0;
    outline-offset: 2px;
}

/* ==========================================
   TABLET
========================================== */

@media (max-width: 768px) {
    .jf-faq {
        padding: 28px 22px 24px;
    }

    .jf-faq-heading {
        margin-bottom: 25px;
    }

    .jf-faq-heading h2 {
        font-size: 22px;
    }

    .jf-faq-heading p {
        font-size: 12px;
    }

    .jf-faq-list {
        max-width: 100%;
    }

    .jf-faq-question {
        min-height: 50px;
        font-size: 13px;
    }
}

/* ==========================================
   MOBILE
========================================== */

@media (max-width: 480px) {
    .jf-faq {
        padding: 27px 16px 25px;
    }

    .jf-faq-heading {
        margin-bottom: 23px;
    }

    .jf-faq-heading h2 {
        font-size: 21px;
        line-height: 1.35;
    }

    .jf-faq-heading p {
        max-width: 330px;
        margin: 0 auto;
        font-size: 12px;
        line-height: 1.6;
    }

    .jf-faq-question {
        min-height: 52px;
        padding: 13px 2px;
        gap: 12px;
        font-size: 12px;
    }

    .jf-faq-toggle {
        flex-basis: 18px;
        width: 18px;
        height: 18px;
        font-size: 20px;
    }

    .jf-faq-answer {
        padding: 0 24px 14px 2px;
    }

    .jf-faq-answer p {
        font-size: 12px;
        line-height: 1.65;
    }
}

/* Small phones */

@media (max-width: 360px) {
    .jf-faq {
        padding-right: 12px;
        padding-left: 12px;
    }

    .jf-faq-heading h2 {
        font-size: 19px;
    }

    .jf-faq-question {
        font-size: 11.5px;
    }
}

/* Fix excessive spacing between FAQ items */
.jf-faq {
    padding: 30px 24px 24px !important;
}

.jf-faq-heading {
    margin-bottom: 25px !important;
}

.jf-faq-list {
    max-width: 770px;
    margin: 0 auto;
}

.jf-faq-item {
    margin: 0 !important;
    padding: 0 !important;
    min-height: 0 !important;
    border: 0 !important;
}

.jf-faq-question {
    display: flex !important;
    align-items: center !important;
    justify-content: space-between !important;
    width: 100% !important;
    min-height: 0 !important;
    height: auto !important;
    padding: 15px 4px !important;
    margin: 0 !important;
    line-height: 1.4 !important;
    font-size: 16px !important;
}

.jf-faq-answer {
    padding: 0 30px 14px 4px !important;
    margin: 0 !important;
}

.jf-faq-answer p {
    margin: 0 !important;
    line-height: 1.6 !important;
    font-size: 14px;
}

/* Mobile spacing */
@media (max-width: 576px) {
    .jf-faq {
        padding: 25px 16px 20px !important;
    }

    .jf-faq-heading {
        margin-bottom: 18px !important;
    }

    .jf-faq-question {
        padding: 13px 2px !important;
        font-size: 12px !important;
    }

    .jf-faq-answer {
        padding: 0 24px 12px 2px !important;
    }
}

</style>
<script>
document.querySelectorAll('.jf-faq-question').forEach(function (button) {
    button.addEventListener('click', function () {
        const item = this.closest('.jf-faq-item');
        const isOpen = item.classList.contains('active');

        // Close all FAQ items first
        document.querySelectorAll('.jf-faq-item').forEach(function (faqItem) {
            faqItem.classList.remove('active');

            const faqButton = faqItem.querySelector('.jf-faq-question');
            if (faqButton) {
                faqButton.setAttribute('aria-expanded', 'false');
            }
        });

        // Open the selected item if it was closed
        if (!isOpen) {
            item.classList.add('active');
            this.setAttribute('aria-expanded', 'true');
        }
    });
});
</script>

    <!-- =========================================================
         FINAL CTA
    ========================================================= -->
    
<section class="referSubHero">
    <div class="referSubPattern"></div>

    <div class="referSubBuilding">
        <img
            src="{{ asset('theme/dhara-jfin/img/refer_earn_cta.png') }}"
            alt="Modern commercial building"
        >
    </div>

    <div class="referSubContent">
        <h2>
            Your Journey Doesn't End After You Buy.<br>
            It Gets Even More Rewarding.
        </h2>

        <p>
            Find your dream property, secure the right financial solution,
            and enjoy benefits that continue even after<br class="referSubDesktopBreak">
            your journey is complete.
        </p>

        <div class="referSubButtons">
            <a href="{{ url('/properties') }}" class="referSubBtn">
                <i class="fas fa-building"></i>
                <span>Explore properties</span>
            </a>

            <a href="{{ url('authv3/login') }}" class="referSubBtn">
                <i class="fas fa-rupee-sign"></i>
                <span>Apply for loan</span>
            </a>
        </div>
    </div>
</section>
<style>
/* =========================================
   REFER SUB HERO BANNER
========================================= */

.referSubHero {
    position: relative;
    isolation: isolate;
    width: 100%;
    min-height: 423px;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    box-sizing: border-box;

    padding: 35px 24px;

    background: linear-gradient(
        110deg,
        #1b59cf 0%,
        #1550be 60%,
        #1048ae 100%
    );

    font-family: Arial, Helvetica, sans-serif;
}

.referSubHero *,
.referSubHero *::before,
.referSubHero *::after {
    box-sizing: border-box;
}

/* LEFT DECORATIVE PATTERN */

.referSubPattern {
    position: absolute;
    z-index: -1;
    top: 0;
    left: 0;
    width: 24%;
    height: 100%;
    pointer-events: none;

    background-image: radial-gradient(
        circle,
        rgba(111, 180, 255, 0.35) 1.2px,
        transparent 1.6px
    );

    background-size: 13px 13px;

    -webkit-mask-image: linear-gradient(
        to right,
        #000 0%,
        rgba(0, 0, 0, 0.7) 50%,
        transparent 100%
    );

    mask-image: linear-gradient(
        to right,
        #000 0%,
        rgba(0, 0, 0, 0.7) 50%,
        transparent 100%
    );
}

/* BUILDING IMAGE ON RIGHT */

.referSubBuilding {
    position: absolute;
    z-index: -1;
    right: 0;
    bottom: 0;

    width: 25%;
    height: 94%;

    display: flex;
    align-items: flex-end;
    justify-content: flex-end;

    pointer-events: none;
}

.referSubBuilding img {
    display: block;
    width: 100%;
    height: 100%;

    object-fit: contain;
    object-position: right bottom;

    opacity: 0.85;
}

/* CENTER CONTENT */

.referSubContent {
    position: relative;
    z-index: 1;

    width: 100%;
    max-width: 720px;
    margin: 0 auto;

    text-align: center;
    color: #ffffff;
}

.referSubContent h2 {
    margin: 0 0 8px;

    color: #ffffff;
    font-size: 25px;
    font-weight: 700;
    line-height: 1.25;
    letter-spacing: 0.05px;
}

.referSubContent p {
    margin: 0 auto 20px;
    max-width: 610px;

    color: rgba(255, 255, 255, 0.94);
    font-size: 14px;
    font-weight: 400;
    line-height: 1.5;
}

/* BUTTONS */

.referSubButtons {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    gap: 7px;
}

.referSubBtn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;

    width: 146px;
    min-height: 35px;
    padding: 8px 12px;

    border: 1px solid #ffffff;
    border-radius: 7px;

    background: #ffffff;
    color: #2874f0 !important;
    -webkit-text-fill-color: #2874f0;

    font-size: 10px;
    font-weight: 500;
    line-height: 1.3;
    text-decoration: none;
    white-space: nowrap;

    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.08);

    transition:
        background 0.25s ease,
        color 0.25s ease,
        transform 0.25s ease;
}

.referSubBtn i {
    flex-shrink: 0;
    color: #2874f0;
    -webkit-text-fill-color: #2874f0;
    font-size: 13px;
}

.referSubBtn:hover {
    background: #edf4ff;
    border-color: #edf4ff;
    color: #1550be !important;
    -webkit-text-fill-color: #1550be;
    transform: translateY(-1px);
}

.referSubBtn:hover i {
    color: #1550be;
    -webkit-text-fill-color: #1550be;
}

/* =========================================
   TABLET
========================================= */

@media (max-width: 991px) {
    .referSubHero {
        min-height: 235px;
        padding: 32px 22px;
    }

    .referSubContent {
        max-width: 640px;
    }

    .referSubContent h2 {
        font-size: 17px;
    }

    .referSubBuilding {
        width: 25%;
        height: 85%;
        opacity: 0.7;
    }

    .referSubContent p {
        max-width: 520px;
        font-size: 10px;
    }
}

/* =========================================
   MOBILE
========================================= */

@media (max-width: 600px) {
    .referSubHero {
        min-height: 245px;
        padding: 30px 16px;

        background: linear-gradient(
            110deg,
            #1b59cf,
            #1048ae
        );
    }

    .referSubPattern {
        width: 32%;
        opacity: 0.65;
    }

    .referSubBuilding {
        width: 34%;
        height: 72%;
        opacity: 0.24;
    }

    .referSubContent {
        max-width: 100%;
    }

    .referSubContent h2 {
        font-size: 19px;
        line-height: 1.35;
        margin-bottom: 10px;
    }

    .referSubContent p {
        max-width: 430px;
        margin-bottom: 18px;
        font-size: 11px;
        line-height: 1.6;
    }

    .referSubDesktopBreak {
        display: none;
    }

    .referSubButtons {
        gap: 9px;
    }

    .referSubBtn {
        width: auto;
        min-width: 140px;
        min-height: 40px;
        padding: 9px 13px;
        font-size: 11px;
    }
}

/* SMALL PHONES */

@media (max-width: 380px) {
    .referSubHero {
        min-height: 235px;
        padding: 26px 12px;
    }

    .referSubContent h2 {
        font-size: 17px;
    }

    .referSubContent p {
        font-size: 10px;
    }

    .referSubButtons {
        gap: 7px;
    }

    .referSubBtn {
        min-width: 130px;
        padding: 8px 10px;
        gap: 7px;
        font-size: 10px;
    }

    .referSubBuilding {
        width: 38%;
        opacity: 0.18;
    }
}
</style>

</div>
@include('dhara-jfin.layout.footer')

