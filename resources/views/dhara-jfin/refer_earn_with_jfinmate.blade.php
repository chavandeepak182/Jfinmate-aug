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
            background: var(--jf-navy);
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
            background: linear-gradient(135deg, #071b33 0%, #0c3565 100%);
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

    background: #4d62d8;

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
    color: #4d62d8;

    background: rgba(255,255,255,0.95);

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

        background: rgba(255,255,255,0.96);

        color: #4d62d8;

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

<section class="jfinHero" id="home">

    <div class="jfinHeroSlider">

        {{-- ================= SINGLE HERO SLIDE ================= --}}
        <div class="jfinHeroSlide jfinHeroSlideActive"
             style="background-image:url('{{ asset('theme/dhara-jfin/img/refer.jpg') }}');">

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

                        <a href="{{ route('property.login') }}"
                           class="jfinHeroBtn jfinHeroApply">
                             Properties
                        </a>

                        <a href="{{ route('authv3.login.form') }}"
                           class="jfinHeroBtn jfinHeroLogin">
                             Finance
                        </a>

                </div>

            </div>

        </div>

    </div>

</section>

    <!-- =========================================================
         WHY JFINMATE
    ========================================================= -->
    <section class="jf-why">
        <div class="jf-container">
            <div class="jf-why-wrap">
                <div class="jf-why-content">
                    <span class="eyebrow"><i class="fas fa-sparkles"></i> The JFinMate Difference</span>
                    <h2>One platform for your <span>property & finance</span> journey.</h2>
                    <p>Buying a home or arranging finance shouldn't be complicated. At JFinMate, we bring everything together in one place — from verified properties and financial solutions to exclusive customer benefits and referral rewards.</p>
                    <p>Whether you're purchasing your first home, investing in property, or looking for the right financing, we're here to make the journey simple, transparent, and rewarding.</p>
                    <div class="jf-why-points">
                        <div class="jf-why-point"><i class="fas fa-check"></i> Verified Property Options</div>
                        <div class="jf-why-point"><i class="fas fa-check"></i> Expert Financial Guidance</div>
                        <div class="jf-why-point"><i class="fas fa-check"></i> Dedicated Support</div>
                        <div class="jf-why-point"><i class="fas fa-check"></i> Customer Rewards</div>
                    </div>
                </div>
                <div class="jf-reward-box">
                    <div>
                        <div class="jf-reward-icon"><i class="fas fa-gift"></i></div>
                        <h3>Your journey doesn't stop after purchase.</h3>
                        <p>Become a JFinMate customer and unlock opportunities to share your experience with friends and family.</p>
                    </div>
                    <div class="jf-reward-tag"><i class="fas fa-arrow-trend-up"></i> Refer & Earn</div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================
         CHOOSE YOUR JOURNEY
    ========================================================= -->
    <section class="jf-journey">
        <div class="jf-container">
            <div class="jf-section-heading">
                <span class="eyebrow">Start Here</span>
                <h2>Choose Your Journey</h2>
                <p>Whether you're searching for your next property or looking for the right financial solution, JFinMate is here to help.</p>
            </div>
            <div class="jf-journey-grid">
                <!-- property card -->
                <div class="jf-journey-card">
                    <span class="jf-card-number">01</span>
                    <div class="jf-journey-icon"><i class="fas fa-house-chimney"></i></div>
                    <h3>Looking for a Property?</h3>
                    <p>Find verified residential and commercial properties that match your budget and lifestyle.</p>
                    <ul class="jf-benefits">
                        <li><i class="fas fa-circle-check"></i> Expert property guidance</li>
                        <li><i class="fas fa-circle-check"></i> Assistance throughout the buying process</li>
                        <li><i class="fas fa-circle-check"></i> Exclusive customer offers*</li>
                        <li><i class="fas fa-circle-check"></i> Access to referral rewards after becoming a customer</li>
                    </ul>
                    <a href="{{ route('property.login') }}" class="jf-btn jf-btn-primary"><i class="fas fa-building"></i> Explore Properties</a>
                </div>
                <!-- finance card -->
                <div class="jf-journey-card">
                    <span class="jf-card-number">02</span>
                    <div class="jf-journey-icon"><i class="fas fa-coins"></i></div>
                    <h3>Looking for Finance?</h3>
                    <p>Need financial support for your goals? Our experts help you choose the right solution with a smooth and transparent process.</p>
                    <ul class="jf-benefits">
                        <li><i class="fas fa-circle-check"></i> Expert financial guidance</li>
                        <li><i class="fas fa-circle-check"></i> Dedicated relationship support</li>
                        <li><i class="fas fa-circle-check"></i> Hassle-free documentation</li>
                        <li><i class="fas fa-circle-check"></i> No Processing Fee on eligible offers*</li>
                        <li><i class="fas fa-circle-check"></i> Referral rewards after becoming a customer</li>
                    </ul>
                    <a href="{{ route('authv3.login.form') }}" class="jf-btn jf-btn-outline"><i class="fas fa-hand-holding-dollar"></i> Explore Finance</a>
                </div>
            </div>
            <p class="jf-footnote">*Terms & conditions apply. Offers vary by project and eligibility.</p>
        </div>
    </section>

    <!-- =========================================================
         HOW IT WORKS
    ========================================================= -->

<section class="jf-process">

    <div class="jf-container">

        {{-- Section Heading --}}
        <div class="jf-section-heading">
            <span class="eyebrow">
                Simple. Transparent. Rewarding.
            </span>

            <h2>
                How JFinMate Rewards You
            </h2>

            <p>
                Your relationship with JFinMate doesn't end after your
                property purchase or finance journey.
            </p>
        </div>


        {{-- Intro --}}
        <div class="jf-process-intro">

            <div class="jf-process-quote-icon">
                <i class="fas fa-quote-left"></i>
            </div>

            <p>
                Once you become a JFinMate customer, you can recommend us
                to friends and family who are looking for a property or
                financial solution. When their eligible transaction is
                successfully completed through JFinMate, you become eligible
                for referral rewards.
            </p>

        </div>


        {{-- INFOGRAPHIC --}}
        <div class="jf-process-infographic">

            {{-- Connecting Line --}}
            <div class="jf-process-line"></div>


            {{-- STEP 01 --}}
            <div class="jf-process-card">

                <div class="jf-process-icon">
                    <i class="fas fa-house"></i>
                </div>

                <div class="jf-process-number">
                    01
                </div>

                <div class="jf-process-card-content">

                    <h3>
                        Choose a Property or Finance Solution
                    </h3>

                    <p>
                        Browse verified properties or connect with
                        our finance experts.
                    </p>

                </div>

            </div>


            {{-- STEP 02 --}}
            <div class="jf-process-card">

                <div class="jf-process-icon">
                    <i class="fas fa-route"></i>
                </div>

                <div class="jf-process-number">
                    02
                </div>

                <div class="jf-process-card-content">

                    <h3>
                        Complete Your Journey
                    </h3>

                    <p>
                        We'll guide you from enquiry to successful
                        completion.
                    </p>

                </div>

            </div>


            {{-- STEP 03 --}}
            <div class="jf-process-card">

                <div class="jf-process-icon">
                    <i class="fas fa-gift"></i>
                </div>

                <div class="jf-process-number">
                    03
                </div>

                <div class="jf-process-card-content">

                    <h3>
                        Unlock Customer Benefits
                    </h3>

                    <p>
                        Enjoy exclusive offers, cashback or
                        project-specific benefits where applicable.*
                    </p>

                </div>

            </div>


            {{-- STEP 04 --}}
            <div class="jf-process-card">

                <div class="jf-process-icon">
                    <i class="fas fa-users"></i>
                </div>

                <div class="jf-process-number">
                    04
                </div>

                <div class="jf-process-card-content">

                    <h3>
                        Refer Friends & Family
                    </h3>

                    <p>
                        Share JFinMate with people looking for
                        property or finance.
                    </p>

                </div>

            </div>


            {{-- STEP 05 --}}
            <div class="jf-process-card">

                <div class="jf-process-icon">
                    <i class="fas fa-trophy"></i>
                </div>

                <div class="jf-process-number">
                    05
                </div>

                <div class="jf-process-card-content">

                    <h3>
                        Earn Referral Rewards
                    </h3>

                    <p>
                        Receive referral rewards when eligible
                        transactions are successfully completed.
                    </p>

                </div>

            </div>

        </div>


        {{-- Footnote --}}
        <p class="jf-footnote">
            *Subject to project & offer terms.
        </p>

    </div>

</section>
<style>

/* =========================================================
   JFIN SERV - REWARD PROCESS
   BLUE THEME
========================================================= */

.jf-process {
    position: relative;
    width: 100%;
    padding: 90px 20px;

    background:
        linear-gradient(
            135deg,
            #063b5c 0%,
            #07547d 48%,
            #032d48 100%
        );

    overflow: hidden;
}


/* =========================================================
   DECORATIVE BACKGROUND
========================================================= */

.jf-process::before {
    content: "";
    position: absolute;

    width: 420px;
    height: 420px;

    top: -220px;
    right: -160px;

    border-radius: 50%;

    border: 1px solid rgba(0, 171, 233, 0.12);

    pointer-events: none;
}

.jf-process::after {
    content: "";
    position: absolute;

    width: 350px;
    height: 350px;

    bottom: -200px;
    left: -160px;

    border-radius: 50%;

    border: 1px solid rgba(0, 171, 233, 0.08);

    pointer-events: none;
}


/* =========================================================
   CONTAINER
========================================================= */

.jf-process .jf-container {
    position: relative;
    z-index: 2;

    width: 100%;
    max-width: 1200px;

    margin: 0 auto;
}


/* =========================================================
   SECTION HEADING
========================================================= */

.jf-process .jf-section-heading {
    width: 100%;
    max-width: 780px;

    margin: 0 auto 45px;

    text-align: center;
}

.jf-process .eyebrow {
    display: inline-block;

    margin-bottom: 12px;

    color: #00abe9;

    font-size: 13px;
    font-weight: 700;

    line-height: 1.4;

    letter-spacing: 1.5px;

    text-transform: uppercase;
}

.jf-process .jf-section-heading h2 {
    margin: 0 0 15px;

    color: #ffffff;

    font-size: 40px;
    line-height: 1.2;

    font-weight: 700;
}

.jf-process .jf-section-heading p {
    margin: 0;

    color: rgba(255, 255, 255, 0.75);

    font-size: 17px;
    line-height: 1.65;
}


/* =========================================================
   INTRO BOX
========================================================= */

.jf-process-intro {
    display: flex;

    align-items: flex-start;

    gap: 18px;

    width: 100%;
    max-width: 950px;

    margin: 0 auto 65px;

    padding: 24px 28px;

    background: rgba(255, 255, 255, 0.07);

    border: 1px solid rgba(0, 171, 233, 0.20);

    border-radius: 16px;

    box-shadow:
        0 15px 40px rgba(0, 0, 0, 0.10);

    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);

    box-sizing: border-box;
}


/* Quote Icon */

.jf-process-quote-icon {
    flex: 0 0 42px;

    width: 42px;
    height: 42px;

    display: flex;

    align-items: center;
    justify-content: center;

    border-radius: 50%;

    background: #00abe9;

    color: #ffffff;

    font-size: 17px;

    box-shadow:
        0 8px 20px rgba(0, 171, 233, 0.25);
}

.jf-process-intro p {
    flex: 1;

    margin: 0;

    color: rgba(255, 255, 255, 0.84);

    font-size: 15px;
    line-height: 1.7;
}


/* =========================================================
   INFOGRAPHIC
========================================================= */

.jf-process-infographic {
    position: relative;

    display: grid;

    grid-template-columns:
        repeat(5, minmax(0, 1fr));

    gap: 18px;

    width: 100%;

    box-sizing: border-box;
}


/* =========================================================
   CONNECTING LINE
========================================================= */

.jf-process-line {
    position: absolute;

    top: 48px;

    left: 9%;
    right: 9%;

    height: 2px;

    background:
        linear-gradient(
            90deg,
            rgba(0, 171, 233, 0.20),
            #00abe9,
            rgba(0, 171, 233, 0.20)
        );

    z-index: 0;

    pointer-events: none;
}


/* =========================================================
   PROCESS CARD
========================================================= */

.jf-process-card {
    position: relative;

    z-index: 1;

    width: 100%;
    min-width: 0;

    padding: 0 8px 25px;

    text-align: center;

    box-sizing: border-box;

    transition:
        transform 0.3s ease;
}

.jf-process-card:hover {
    transform: translateY(-7px);
}


/* =========================================================
   PROCESS ICON
========================================================= */

.jf-process-icon {
    position: relative;

    width: 96px;
    height: 96px;

    margin: 0 auto 14px;

    display: flex;

    align-items: center;
    justify-content: center;

    border-radius: 50%;

    background: #ffffff;

    border: 6px solid #00abe9;

    color: #07547d;

    font-size: 27px;

    box-shadow:
        0 10px 30px rgba(0, 0, 0, 0.20);

    box-sizing: border-box;

    transition:
        transform 0.3s ease,
        box-shadow 0.3s ease;
}

.jf-process-card:hover .jf-process-icon {
    transform: scale(1.06);

    box-shadow:
        0 14px 35px rgba(0, 171, 233, 0.28);
}


/* =========================================================
   NUMBER
========================================================= */

.jf-process-number {
    display: inline-flex;

    align-items: center;
    justify-content: center;

    min-width: 42px;
    height: 25px;

    padding: 0 9px;

    margin-bottom: 13px;

    border-radius: 20px;

    background: rgba(0, 171, 233, 0.14);

    border: 1px solid rgba(0, 171, 233, 0.40);

    color: #00abe9;

    font-size: 11px;
    font-weight: 800;

    line-height: 1;

    letter-spacing: 1px;

    box-sizing: border-box;
}


/* =========================================================
   CARD CONTENT
========================================================= */

.jf-process-card-content {
    width: 100%;
}

.jf-process-card-content h3 {
    margin: 0 0 10px;

    color: #ffffff;

    font-size: 17px;
    line-height: 1.4;

    font-weight: 700;
}

.jf-process-card-content p {
    margin: 0;

    color: rgba(255, 255, 255, 0.66);

    font-size: 13px;
    line-height: 1.6;
}


/* =========================================================
   FOOTNOTE
========================================================= */

.jf-process .jf-footnote {
    margin: 35px 0 0;

    text-align: center;

    color: rgba(255, 255, 255, 0.48) !important;

    font-size: 12px;
    line-height: 1.5;
}


/* =========================================================
   LARGE TABLET
========================================================= */

@media (max-width: 1100px) {

    .jf-process {
        padding: 75px 20px;
    }

    .jf-process .jf-section-heading h2 {
        font-size: 36px;
    }

    .jf-process-infographic {
        grid-template-columns:
            repeat(3, minmax(0, 1fr));

        gap: 45px 20px;
    }

    .jf-process-line {
        display: none;
    }

    .jf-process-icon {
        width: 88px;
        height: 88px;

        border-width: 5px;

        font-size: 25px;
    }
}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 768px) {

    .jf-process {
        padding: 60px 16px;
    }

    .jf-process .jf-section-heading {
        margin-bottom: 32px;
    }

    .jf-process .jf-section-heading h2 {
        font-size: 31px;
    }

    .jf-process .jf-section-heading p {
        font-size: 15px;
    }


    /* Intro */

    .jf-process-intro {
        margin-bottom: 45px;

        padding: 20px;

        gap: 14px;
    }

    .jf-process-intro p {
        font-size: 14px;
    }

    .jf-process-quote-icon {
        flex: 0 0 38px;

        width: 38px;
        height: 38px;

        font-size: 15px;
    }


    /* Two columns */

    .jf-process-infographic {
        grid-template-columns:
            repeat(2, minmax(0, 1fr));

        gap: 40px 15px;
    }


    .jf-process-card {
        padding-left: 5px;
        padding-right: 5px;
    }


    .jf-process-icon {
        width: 78px;
        height: 78px;

        border-width: 5px;

        font-size: 23px;
    }


    .jf-process-number {
        margin-bottom: 10px;
    }


    .jf-process-card-content h3 {
        font-size: 16px;
    }

    .jf-process-card-content p {
        font-size: 13px;
    }
}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 575px) {

    .jf-process {
        padding: 48px 14px;
    }


    /* Heading */

    .jf-process .jf-section-heading {
        margin-bottom: 28px;
    }

    .jf-process .eyebrow {
        margin-bottom: 9px;

        font-size: 11px;

        letter-spacing: 1.1px;
    }

    .jf-process .jf-section-heading h2 {
        font-size: 25px;

        line-height: 1.3;
    }

    .jf-process .jf-section-heading p {
        font-size: 14px;

        line-height: 1.55;
    }


    /* Intro */

    .jf-process-intro {
        display: block;

        padding: 20px 18px;

        margin-bottom: 40px;

        text-align: center;

        border-radius: 14px;
    }

    .jf-process-quote-icon {
        margin: 0 auto 13px;
    }

    .jf-process-intro p {
        font-size: 13px;

        line-height: 1.65;
    }


    /* Single column */

    .jf-process-infographic {
        display: grid;

        grid-template-columns: 1fr;

        gap: 0;
    }


    /* Vertical line */

    .jf-process-line {
        display: block;

        top: 40px;
        bottom: 40px;

        left: 50%;

        right: auto;

        width: 2px;
        height: auto;

        transform: translateX(-50%);

        background:
            linear-gradient(
                180deg,
                rgba(0, 171, 233, 0.20),
                #00abe9,
                rgba(0, 171, 233, 0.20)
            );
    }


    /* Card */

    .jf-process-card {
        width: 100%;

        padding: 0 10px 45px;
    }

    .jf-process-card:last-child {
        padding-bottom: 10px;
    }


    /* Icon */

    .jf-process-icon {
        width: 82px;
        height: 82px;

        margin-bottom: 12px;

        background: #ffffff;

        border-width: 5px;

        font-size: 23px;
    }


    /* Number */

    .jf-process-number {
        position: relative;
        z-index: 2;

        margin-bottom: 9px;

        background: #07547d;
    }


    /* Content */

    .jf-process-card-content {
        width: 100%;
        max-width: 320px;

        margin: 0 auto;
    }

    .jf-process-card-content h3 {
        font-size: 17px;

        line-height: 1.4;
    }

    .jf-process-card-content p {
        font-size: 13px;

        line-height: 1.6;
    }


    /* Footnote */

    .jf-process .jf-footnote {
        margin-top: 25px;

        font-size: 11px;
    }
}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media (max-width: 375px) {

    .jf-process {
        padding-left: 12px;
        padding-right: 12px;
    }


    .jf-process .jf-section-heading h2 {
        font-size: 23px;
    }


    .jf-process-intro {
        padding: 18px 15px;
    }


    .jf-process-card {
        padding-left: 5px;
        padding-right: 5px;
    }


    .jf-process-icon {
        width: 78px;
        height: 78px;
    }


    .jf-process-card-content {
        max-width: 290px;
    }

}


/* =========================================================
   EXTRA SMALL DEVICES
========================================================= */

@media (max-width: 320px) {

    .jf-process {
        padding-left: 10px;
        padding-right: 10px;
    }

    .jf-process .jf-section-heading h2 {
        font-size: 21px;
    }

    .jf-process .jf-section-heading p {
        font-size: 13px;
    }

    .jf-process-intro p {
        font-size: 12px;
    }

    .jf-process-card-content h3 {
        font-size: 16px;
    }

    .jf-process-card-content p {
        font-size: 12px;
    }

}

</style>


    <!-- =========================================================
         WHY CUSTOMERS PREFER
    ========================================================= -->
   <section class="jf-prefer">
    <div class="jf-container">

        <div class="jf-section-heading">
            <span class="eyebrow">Built Around You</span>

            <h2>Why Customers Prefer JFinMate</h2>

            <p>
                Everything you need, supported by a team you can trust.
            </p>
        </div>

        <div class="jf-prefer-grid">

            {{-- Card 1 --}}
            <div class="jf-prefer-card">
                <div class="jf-prefer-image">
                    <img
                        src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?auto=format&fit=crop&w=800&q=80"
                        alt="Verified Property Options"
                    >
                </div>

                <div class="jf-prefer-content">
                    <h3>Verified Property Options</h3>
                    <p>
                        Explore trusted and verified property options
                        selected to suit your needs.
                    </p>
                </div>
            </div>


            {{-- Card 2 --}}
            <div class="jf-prefer-card">
                <div class="jf-prefer-image">
                    <img
                        src="https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&w=800&q=80"
                        alt="Expert Finance Assistance"
                    >
                </div>

                <div class="jf-prefer-content">
                    <h3>Expert Finance Assistance</h3>
                    <p>
                        Get professional guidance to make your
                        financing journey simple and stress-free.
                    </p>
                </div>
            </div>


            {{-- Card 3 --}}
            <div class="jf-prefer-card">
                <div class="jf-prefer-image">
                    <img
                        src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&w=800&q=80"
                        alt="Dedicated Relationship Managers"
                    >
                </div>

                <div class="jf-prefer-content">
                    <h3>Dedicated Relationship Managers</h3>
                    <p>
                        Get personalised support from a dedicated
                        relationship manager whenever you need it.
                    </p>
                </div>
            </div>


            {{-- Card 4 --}}
            <div class="jf-prefer-card">
                <div class="jf-prefer-image">
                    <img
                        src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?auto=format&fit=crop&w=800&q=80"
                        alt="Transparent Process"
                    >
                </div>

                <div class="jf-prefer-content">
                    <h3>Transparent Process</h3>
                    <p>
                        Clear communication and a transparent process
                        from start to finish.
                    </p>
                </div>
            </div>


            {{-- Card 5 --}}
            <div class="jf-prefer-card">
                <div class="jf-prefer-image">
                    <img
                        src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?auto=format&fit=crop&w=800&q=80"
                        alt="Exclusive Customer Benefits"
                    >
                </div>

                <div class="jf-prefer-content">
                    <h3>Exclusive Customer Benefits*</h3>
                    <p>
                        Enjoy exclusive benefits designed especially
                        for our valued customers.
                    </p>
                </div>
            </div>


            {{-- Card 6 --}}
            <div class="jf-prefer-card">
                <div class="jf-prefer-image">
                    <img
                        src="https://images.unsplash.com/photo-1606761568499-6d2451b23c66?auto=format&fit=crop&w=800&q=80"
                        alt="Referral Rewards"
                    >
                </div>

                <div class="jf-prefer-content">
                    <h3>Referral Rewards</h3>
                    <p>
                        Refer your friends and family and enjoy
                        exciting rewards.
                    </p>
                </div>
            </div>


            {{-- Card 7 --}}
            <div class="jf-prefer-card">
                <div class="jf-prefer-image">
                    <img
                        src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=800&q=80"
                        alt="One Trusted Platform"
                    >
                </div>

                <div class="jf-prefer-content">
                    <h3>One Trusted Platform</h3>
                    <p>
                        Manage your property and finance needs through
                        one reliable and trusted platform.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
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

    color: #d39a2c;
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
</style>
    <!-- =========================================================
         FAQ
    ========================================================= -->
    <section class="jf-faq">
        <div class="jf-container">
            <div class="jf-faq-layout">
                <div class="jf-faq-side">
                    <span class="eyebrow">Need Help?</span>
                    <h2>Frequently Asked Questions</h2>
                    <p>Find quick answers about JFinMate, customer benefits and our referral rewards program.</p>
                </div>
                <div class="jf-faq-list">
                    <div class="jf-faq-item"><h4><i class="fas fa-circle-question"></i> Who can earn referral rewards?</h4><p>Any customer who has successfully purchased a property or availed a financial solution through JFinMate may become eligible for referral rewards, subject to the program terms.</p></div>
                    <div class="jf-faq-item"><h4><i class="fas fa-circle-question"></i> Do I need to become a customer first?</h4><p>Yes. The referral rewards program is available after you complete an eligible property purchase or finance journey with JFinMate.</p></div>
                    <div class="jf-faq-item"><h4><i class="fas fa-circle-question"></i> What can I refer?</h4><p>You can refer people looking to buy a property or explore financing solutions.</p></div>
                    <div class="jf-faq-item"><h4><i class="fas fa-circle-question"></i> How do I receive referral rewards?</h4><p>Referral rewards are processed after your referred customer completes an eligible transaction through JFinMate, as per the program terms.</p></div>
                    <div class="jf-faq-item"><h4><i class="fas fa-circle-question"></i> Are there any customer benefits?</h4><p>Yes. Depending on the project or offer, eligible customers may receive benefits such as cashback, purchase offers or other promotional rewards.</p></div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================
         FINAL CTA
    ========================================================= -->
    <section class="jf-final">
        <div class="jf-container">
            <div class="jf-final-content">
                <span class="eyebrow">Your JFinMate Journey</span>
                <h2>Your Journey Doesn't End After You Buy.<br>It Gets Even More Rewarding.</h2>
                <p>Find your dream property, secure the right financial solution, and enjoy benefits that continue even after your journey is complete.</p>
                <div class="jf-final-buttons">
                    <a href="{{ route('property.login') }}" class="jf-btn jf-btn-primary"><i class="fas fa-building"></i> Explore Properties</a>
                    <a href="{{ route('authv3.login.form') }}" class="jf-btn jf-btn-primary"><i class="fas fa-hand-holding-dollar"></i> Explore Finance Solutions</a>
                </div>
                <p class="jf-brand-line">JFinMate · One Platform. Multiple Benefits.</p>
            </div>
        </div>
    </section>

</div>
@include('dhara-jfin.layout.footer')

