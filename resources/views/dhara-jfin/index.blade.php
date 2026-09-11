{{-- resources/views/dhara-jfin/index.blade.php --}}
 

@include('dhara-jfin.layout.header')

<main>
        <style>
        
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


        /* * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: #f8f9fc;
            color: #1a1a2e;
            line-height: 1.6;
        } */

        /* Header
        header {
            background: white;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        nav {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-weight: 700;
            font-size: 1.5rem;
            color: #4c5fd7;
        }

        .logo span {
            color: #1a1a2e;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
            align-items: center;
        }

        .nav-links a {
            text-decoration: none;
            color: #4a5568;
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: #4c5fd7;
        } */

            /* LOCALITIES SECTION ENHANCED */

.locality-card {
    background: linear-gradient(135deg, #ffffff, #f8f9ff);
    border-radius: 18px;
    padding: 1.8rem;
    box-shadow: 0 8px 25px rgba(0,0,0,0.06);
    transition: all 0.35s ease;
    position: relative;
    overflow: hidden;
}

/* Hover Glow Effect */
.locality-card::before {
    content: "";
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(120deg, transparent, rgba(76,95,215,0.2), transparent);
    transition: 0.6s;
}

.locality-card:hover::before {
    left: 100%;
}

.locality-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 50px rgba(76, 95, 215, 0.18);
}

/* LOCALITIES SECTION ENHANCED */

.locality-card {
    background: linear-gradient(135deg, #ffffff, #f8f9ff);
    border-radius: 18px;
    padding: 1.8rem;
    box-shadow: 0 8px 25px rgba(0,0,0,0.06);
    transition: all 0.35s ease;
    position: relative;
    overflow: hidden;
}

/* Hover Glow Effect */
.locality-card::before {
    content: "";
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(120deg, transparent, rgba(76,95,215,0.2), transparent);
    transition: 0.6s;
}

.locality-card:hover::before {
    left: 100%;
}

.locality-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 50px rgba(76, 95, 215, 0.18);
}
.mini-property {
    display: block;
    background: #fff;
    border-radius: 12px;
    padding: 10px;
    transition: all 0.3s ease;
    text-decoration: none;
}

.mini-property:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 25px rgba(0,0,0,0.12);
}
.mini-property img {
    border-radius: 8px;
    transition: transform 0.4s ease;
}

.mini-property:hover img {
    transform: scale(1.08);
}
.mini-name {
    font-size: 0.95rem;
    font-weight: 600;
    color: #1a1a2e;
}

.mini-developer {
    color: #4c5fd7;
    font-size: 0.85rem;
}

.mini-location {
    font-size: 0.8rem;
    color: #888;
}

        .apply-btn {
            background: #4c5fd7;
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            border: none;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
        }

        .apply-btn:hover {
            background: #3d4ec7;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(76, 95, 215, 0.3);
        }

        /* Container */
        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        /* Section Headers */
        .section-header {
            text-align: center;
            margin: 4rem 0 3rem;
        }
        .extra-property {
    display: none;
}

        .section-header h2 {
            font-size: 2.5rem;
            color: #295cab;
            margin-bottom: 0.5rem;
            font-weight: 700;
        }

        .section-header p {
            color: #295cab;
            font-size: 1.1rem;
        }

        /* Properties by Localities */
        .localities-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 2rem;
            margin-bottom: 4rem;
        }

        .locality-card {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transition: all 0.3s;
            text-align:center;
        }

        .locality-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(76, 95, 215, 0.12);
        }
        .localty-title{
        font-size: 1.6rem;
            color: #1a1a2e;
            margin-bottom: 1.5rem;
            font-weight: 700;
        }
        .properties-mini-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
        }
        .mini-property {
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
        }

        .mini-developer {
            font-size: 0.9rem;
            color: #4c5fd7;
            font-weight: 600;
            height: 1.2em;
            
        }

        .mini-property img {
            width: 100%;
            aspect-ratio: 16/10;
            object-fit: cover;
            border-radius: 4px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        .mini-name {
            font-size: 0.95rem;
            color: #4a5568;
            font-weight: 500;
            line-height: 1.3;
            height: 2.6em;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .mini-location {
            font-size: 0.85rem;
            color: #9ca3af;
        }

        /* Enhanced Property Cards */
.properties-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2.5rem;
}

@media (max-width: 992px) {
    .properties-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 576px) {
    .properties-grid {
        grid-template-columns: 1fr;
    }
}

        .property-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 4px 24px rgba(0,0,0,0.08);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
        }

        .property-card:hover {
            transform: translateY(-12px) scale(1.02);
            box-shadow: 0 20px 60px rgba(76, 95, 215, 0.2);
        }

        .property-image-wrapper {
            position: relative;
            overflow: hidden;
            height: 260px;
        }
.featured-extra {
    display: none;
}
        .property-image-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .property-card:hover .property-image-wrapper img {
            transform: scale(1.1);
        }

        .property-badge {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: rgba(76, 95, 215, 0.95);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            backdrop-filter: blur(10px);
            z-index: 2;
        }

        .featured-badge {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .property-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.7) 0%, transparent 100%);
            padding: 2rem 1.5rem 1rem;
            opacity: 0;
            transition: opacity 0.4s;
        }

        .property-card:hover .property-overlay {
            opacity: 1;
        }

        .quick-stats {
            display: flex;
            gap: 1rem;
            color: white;
            font-size: 0.9rem;
        }

        .stat-item {
            display: flex;
            align-items: center;
            gap: 0.3rem;
        }

        .property-details {
            padding: 1.75rem;
        }

        .property-title {
            font-size: 1.35rem;
            color: #1a1a2e;
            margin-bottom: 0.75rem;
            font-weight: 700;
            line-height: 1.3;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .property-developer {
            color: #6b7280;
            font-size: 0.95rem;
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .property-location {
            color: #9ca3af;
            font-size: 0.9rem;
            margin-bottom: 1.25rem;
            display: flex;
            align-items: center;
            gap: 0.4rem;
        }

        .property-specs {
            display: flex;
            gap: 1.5rem;
            margin-bottom: 1.5rem;
            padding: 1rem;
            background: #f8f9fc;
            border-radius: 12px;
        }

        .spec-item {
            display: flex;
            flex-direction: column;
            gap: 0.25rem;
        }

        .spec-label {
            font-size: 0.8rem;
            color: #9ca3af;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .spec-value {
            font-size: 1rem;
            color: #1a1a2e;
            font-weight: 600;
        }

        .property-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 1.25rem;
            border-top: 2px solid #f1f3f9;
        }

        .property-price {
            font-size: 1.75rem;
            color: #4c5fd7;
            font-weight: 700;
        }

        .contact-btn {
            background: linear-gradient(135deg, #4c5fd7 0%, #667eea 100%);
            color: white;
            padding: 0.875rem 1.75rem;
            border-radius: 12px;
            border: none;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.95rem;
        }

        .contact-btn:hover {
            transform: translateX(4px);
            box-shadow: 0 8px 20px rgba(76, 95, 215, 0.3);
        }

        /* Features Section */
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 2rem;
            margin: 4rem 0;
        }

        .feature-card {
            background: white;
            padding: 2rem;
            border-radius: 16px;
            text-align: center;
            box-shadow: 0 4px 20px rgba(0,0,0,0.06);
            transition: all 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 40px rgba(76, 95, 215, 0.12);
        }

        .feature-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, #e0e7ff 0%, #f0f4ff 100%);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 2rem;
        }

        .feature-card h3 {
            color: #1a1a2e;
            margin-bottom: 1rem;
            font-size: 1.25rem;
        }

        .feature-card p {
            color: #6b7280;
            line-height: 1.7;
        }

        /* Services Section */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 2rem;
            margin: 4rem 0;
        }

        .service-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            transition: all 0.3s;
        }

        .service-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 40px rgba(76, 95, 215, 0.15);
        }

        .service-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .service-content {
            padding: 2rem;
        }

        .service-content h3 {
            color: #4c5fd7;
            margin-bottom: 1rem;
            font-size: 1.35rem;
        }

        .service-content p {
            color: #6b7280;
            line-height: 1.8;
        }

        /* Testimonials */
        .testimonials {
            background: white;
            padding: 4rem 2rem;
            border-radius: 24px;
            margin: 4rem 0;
        }

        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .testimonial-card {
            background: #f8f9fc;
            padding: 2rem;
            border-radius: 16px;
            border-left: 4px solid #4c5fd7;
        }

        .testimonial-stars {
            color: #fbbf24;
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }

        .testimonial-author {
            margin-top: 1.5rem;
            font-weight: 600;
            color: #1a1a2e;
        }

        .testimonial-role {
            color: #9ca3af;
            font-size: 0.9rem;
        }
        /* Search and Filter Section */
        .search-filter-section {
            background: white;
            padding: 2rem;
            border-radius: 20px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
            margin-bottom: 3rem;
            margin-top:2rem;
        }

        .search-bar-wrapper {
            display: flex;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .search-input-group {
            flex: 1;
            position: relative;
        }

        .search-input-group input {
            width: 100%;
            padding: 1rem 1rem 1rem 3rem;
            border: 2px solid #f1f3f9;
            border-radius: 12px;
            font-size: 1rem;
            transition: all 0.3s;
        }

        .search-input-group input:focus {
            border-color: #4c5fd7;
            outline: none;
            box-shadow: 0 0 0 4px rgba(76, 95, 215, 0.1);
        }

        .search-icon {
            position: absolute;
            left: 1.2rem;
            top: 50%;
            transform: translateY(-50%);
            color: #9ca3af;
        }

        .main-filters {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            align-items: center;
        }

        .filter-group {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            min-width: 200px;
        }

        .filter-group label {
            font-size: 0.85rem;
            font-weight: 600;
            color: #4a5568;
        }

        .filter-select {
            padding: 0.75rem 1rem;
            border: 2px solid #f1f3f9;
            border-radius: 10px;
            background: white;
            color: #1a1a2e;
            font-size: 0.95rem;
            cursor: pointer;
            transition: all 0.3s;
        }

        .filter-select:hover {
            border-color: #cbd5e0;
        }

        .expand-filters-btn {
            background: #f8f9fc;
            color: #4c5fd7;
            border: none;
            margin-top:1.8rem;
            padding: 0.75rem 1.5rem;
            border-radius: 10px;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s;
        }

        .expand-filters-btn:hover {
            background: #eef2ff;
        }

        .advanced-filters {
            display: none;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
            margin-top: 1.5rem;
            padding-top: 1.5rem;
            border-top: 1px solid #f1f3f9;
        }

        .advanced-filters.active {
            display: grid;
        }

        .filter-checkbox-group {
            display: flex;
            flex-wrap: wrap;
            gap: 0.75rem;
        }

        .filter-chip {
            padding: 0.5rem 1rem;
            background: #f1f3f9;
            border-radius: 20px;
            font-size: 0.85rem;
            cursor: pointer;
            transition: all 0.3s;
            user-select: none;
        }

        .filter-chip.active {
            background: #4c5fd7;
            color: white;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .section-header h2 {
                font-size: 2rem;
            }

         

            .property-specs {
                flex-direction: column;
                gap: 1rem;
            }
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .property-card {
            animation: fadeInUp 0.6s ease-out;
        }

        .property-card:nth-child(1) { animation-delay: 0.1s; }
        .property-card:nth-child(2) { animation-delay: 0.2s; }
        .property-card:nth-child(3) { animation-delay: 0.3s; }
        .property-card:nth-child(4) { animation-delay: 0.4s; }
        
    </style>
          <style>
/* HERO SEARCH BOX DESIGN */

.hero-search-wrapper {
    margin-top: -60px;
    position: relative;
    z-index: 5;
}

.hero-search-box {
    background: linear-gradient(135deg, #8fb0e8, #7aa0dd);
    padding: 25px 30px;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
}

.hero-search-top {
    display: flex;
    gap: 15px;
    margin-bottom: 20px;
}

.hero-search-top input {
    flex: 1;
    padding: 12px 15px;
    border-radius: 8px;
    border: none;
    font-size: 14px;
}

.hero-search-top button {
    background: #4c5fd7;
    color: white;
    border: none;
    padding: 0 25px;
    border-radius: 8px;
    font-weight: 600;
    cursor: pointer;
    transition: 0.3s;
}

.hero-search-top button:hover {
    background: #3649c5;
}

.hero-search-filters {
    display: flex;
    gap: 15px;
}

.hero-search-filters select {
    flex: 1;
    padding: 10px 12px;
    border-radius: 6px;
    border: none;
    font-size: 13px;
}

@media (max-width:768px){
    .hero-search-top,
    .hero-search-filters{
        flex-direction: column;
    }
}


/* =========================================
   HERO BACKGROUND SEAMLESS FIX
   Do not change layout/design
   ========================================= */

.jfinHero {
    background: #effbff !important;
}

.jfinHeroSlider,
.jfinHeroSlide {
    background-color: #effbff !important;
}

/* Mobile */
@media (max-width: 767px) {
    .jfinHero {
        background: #effbff !important;
    }

    .jfinHeroSlider {
        background: #effbff !important;
    }

    .jfinHeroSlide {
        background-color: #effbff !important;
        background-position: right center !important;
    }
}

/* =========================================================
   FINAL MOBILE HERO - REMOVE WHITE PATCHES
   Keep existing design / text / buttons / person unchanged
   ========================================================= */

@media (max-width: 767px) {

    .jfinHero {
        background: #effbff !important;
        overflow: hidden !important;
    }

    .jfinHeroSlider {
        background: #effbff !important;
    }

    .jfinHeroSlide {
        width: 100% !important;
        height: 100% !important;

        background-repeat: no-repeat !important;

        /* Keep the person/image on right */
        background-size: auto 100% !important;
        background-position: right center !important;

        background-color: #effbff !important;
    }

    /*
     * Cover the image's white/uneven background
     * behind the text area only.
     */
  

    .jfinHeroContent {
        position: relative !important;
        z-index: 10 !important;
    }

    .jfinHeroText {
        position: relative !important;
        z-index: 20 !important;
    }
}


/* Small mobile */
@media (max-width: 480px) {

    .jfinHeroSlide {
        background-size: auto 100% !important;
        background-position: right center !important;
    }

    
}
/* =========================================
   FINAL MOBILE HERO FIX
   Image FULL + NO CUT
   ========================================= */

@media (max-width: 767px) {

    .jfinHero {
        width: 100% !important;
        height: 225px !important;
        min-height: 225px !important;
        overflow: hidden !important;
        background: #effbff !important;
    }

    .jfinHeroSlider {
        width: 100% !important;
        height: 100% !important;
        background: #effbff !important;
    }

    .jfinHeroSlide {
        position: absolute !important;
        inset: 0 !important;

        width: 100% !important;
        height: 100% !important;

        background-repeat: no-repeat !important;

        /* IMPORTANT - don't cut image */
        background-size: auto 100% !important;
        background-position: right center !important;

        background-color: #effbff !important;

        opacity: 0;
        visibility: hidden;
    }

    .jfinHeroSlideActive {
        opacity: 1 !important;
        visibility: visible !important;
    }

    .jfinHeroContent {
        position: relative !important;
        z-index: 10 !important;
    }

    .jfinHeroText {
        position: relative !important;
        z-index: 20 !important;
    }
}


/* 480px */
@media (max-width: 480px) {

    .jfinHero {
        height: 220px !important;
        min-height: 220px !important;
    }

    .jfinHeroSlide {
        background-size: auto 100% !important;
        background-position: right center !important;
    }
}


/* 360px */
@media (max-width: 360px) {

    .jfinHero {
        height: 215px !important;
        min-height: 215px !important;
    }

    .jfinHeroSlide {
        background-size: auto 100% !important;
        background-position: right center !important;
    }
}

/* Very small mobile */

</style>

   {{-- =========================================================
     JFINSERV HERO
     ========================================================= --}}

<section class="jfinHero" id="home">

    <div class="jfinHeroSlider">

        {{-- ================= SLIDE 1 ================= --}}
        <div class="jfinHeroSlide jfinHeroSlideActive"
             style="background-image:url('{{ asset('theme/dhara-jfin/img/loan_banner_new.jpg') }}');">

            <div class="jfinHeroContent">

                <div class="jfinHeroText">

                    <div class="jfinHeroLabel">
                        WELCOME TO JFINSERV
                    </div>

                    <h1 class="jfinHeroTitle">
                        Fastest, Secure and
                        <span>Easy Loan Process</span>
                    </h1>

                    <p class="jfinHeroDescription">
                        Experience fast, secure loans with competitive rates
                        and personalized support in Pune. Enjoy seamless
                        service and exceptional rewards.
                    </p>

                    <div class="jfinHeroButtons">

                        <a href="{{ route('authv3.login.form') }}"
                           class="jfinHeroBtn jfinHeroApply">
                            Apply Now
                        </a>

                        <a href="{{ route('authv3.login.form') }}"
                           class="jfinHeroBtn jfinHeroLogin">
                            Login Now
                        </a>

                    </div>

                </div>

            </div>

        </div>


        {{-- ================= SLIDE 2 ================= --}}
        <div class="jfinHeroSlide"
             style="background-image:url('{{ asset('theme/dhara-jfin/img/reward_banner.jpg') }}');">

            <div class="jfinHeroContent">

                <div class="jfinHeroText">

                    <div class="jfinHeroLabel">
                        TRUSTED FINANCIAL PARTNERS
                    </div>

                    <h1 class="jfinHeroTitle">
                        Unique Reward &
                        <span>Earning Opportunity</span>
                    </h1>

                    <p class="jfinHeroDescription">
                        We offer a unique earning opportunity through our
                        referral program, rewarding both your referrals and
                        those made by your friends.
                    </p>

                    <div class="jfinHeroButtons">

                        <a href="{{ route('authv3.login.form') }}"
                           class="jfinHeroBtn jfinHeroApply">
                            Apply Now
                        </a>

                        <a href="{{ url('/login') }}"
                           class="jfinHeroBtn jfinHeroLogin">
                            Login Now
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- ================= ARROWS ================= --}}
    <div class="jfinHeroNavigation">

        <button type="button"
                class="jfinHeroArrow jfinHeroPrev">
            <i class="fas fa-chevron-left"></i>
        </button>

        <button type="button"
                class="jfinHeroArrow jfinHeroNext">
            <i class="fas fa-chevron-right"></i>
        </button>

    </div>

</section>
<script>
document.addEventListener('DOMContentLoaded', function () {

    const slides = document.querySelectorAll('.jfinHeroSlide');
    const prevBtn = document.querySelector('.jfinHeroPrev');
    const nextBtn = document.querySelector('.jfinHeroNext');

    if (slides.length <= 1) {
        return;
    }

    let currentSlide = 0;
    let autoSlide;

    function showSlide(index) {

        slides.forEach(function (slide) {
            slide.classList.remove('jfinHeroSlideActive');
        });

        currentSlide = (index + slides.length) % slides.length;

        slides[currentSlide].classList.add('jfinHeroSlideActive');
    }


    /* =========================
       NEXT BUTTON
       ========================= */
    if (nextBtn) {
        nextBtn.addEventListener('click', function () {
            showSlide(currentSlide + 1);

            /* Restart automatic slider */
            restartAutoSlide();
        });
    }


    /* =========================
       PREVIOUS BUTTON
       ========================= */
    if (prevBtn) {
        prevBtn.addEventListener('click', function () {
            showSlide(currentSlide - 1);

            /* Restart automatic slider */
            restartAutoSlide();
        });
    }


    /* =========================
       AUTO SLIDE
       ========================= */
    function startAutoSlide() {

        autoSlide = setInterval(function () {
            showSlide(currentSlide + 1);
        }, 5000);

    }


    function restartAutoSlide() {

        clearInterval(autoSlide);
        startAutoSlide();

    }


    /* =========================
       START FIRST SLIDE
       ========================= */
    showSlide(0);
    startAutoSlide();

});
</script>

    {{-- FEATURES --}}
    
<!-- Feature section -->
    <section class="finserv-wrapper">
    <div class="financial-services">

        <!-- Background Decorations -->
        <div class="bg-decoration bg-1"></div>
        <div class="bg-decoration bg-2"></div>

        <!-- Section Title -->
          <div class="finserv-header fade-up">
                    <h4 class="finserv-eyebrow">Our Features</h4>
                    <h1 class="finserv-trusted" style="color:#295cab;">Trusted <strong style="color:#00abeb">Financial</strong> Consultants</h1>
                    <p class="mb-0">We understand that navigating the complexities of the financial landscape can be daunting. That's why our team of experienced professionals is here to guide you every step of the way. With our comprehensive loan services, you can trust us to help you secure the financing you need to achieve your dreams.</p>
                </div>

        <!-- Services Grid -->
        <div class="services-grid">

            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-handshake"></i>
                </div>
                <div class="service-content">
                    <h3>Trusted Company</h3>
                    <p>
                        Trust is our foundation. We guide clients confidently through
                        their financial journey with transparency.
                    </p>
                    <a href="{{ url('/about') }}" class="service-btn">Learn More</a>
                </div>
            </div>

          <div class="service-card">
    <div class="service-icon">
        <i class="fas fa-gift"></i>
    </div>

    <div class="service-content">
        <h3>Unlimited Rewards</h3>

        <p>
            Earn rewards and referral income with performance-based bonuses
            that grow with your success.
        </p>

        <a href="{{ route('refer.earn') }}" class="service-btn">Learn More</a>
    </div>
</div>

            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-bolt"></i>
                </div>
                <div class="service-content">
                    <h3>Fast & Easy Process</h3>
                    <p>
                        Minimal paperwork, quick approvals, and funds disbursed within
                        7 working days.
                    </p>
                    <a href="{{ route('refer.earn') }}" class="service-btn">Learn More</a>
                </div>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <div class="service-content">
                    <h3>High Range Loan</h3>
                    <p>
                        Get loans up to ₹100 Cr with flexible terms, competitive rates,
                        and expert guidance.
                    </p>
                    <a href="{{ route('services') }}" class="service-btn">Learn More</a>
                </div>
            </div>

        </div>
    </div>
</section>
    

    {{-- VIDEO SECTION --}}
    <section class="video-section">
        <div class="video-container">
            <video autoplay muted loop playsinline>
                <source src="{{ asset('theme/dhara-jfin/videos/video_new.mp4') }}" type="video/mp4">
                <source src="https://vjs.zencdn.net/v/oceans.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="video-overlay"></div>
        </div>
    </section>

    {{-- ABOUT --}}
    <section id="about" class="about">
        <div class="container-tab flex">
            <div class="about-text">
                <h2 class="finserv-trusted" style="color:#295cab;">Your <strong style="color:#00abeb">Trusted</strong> Financial Partner</h2>
                <p>At Jfinserv, we believe that transparency and trust are the pillars of a successful financial relationship.</p>
                <p>Whether you're looking for personal growth or business expansion, our expert team is here to guide you every step of the way.</p>
                <a href="{{ url('/about') }}" class="btn btn-primary-hero">Our Story</a>
            </div>

            <div class="about-image">
                <img src="{{asset('theme/dhara-jfin/img/f_partner.png')}}" alt="JF Finserve financial partnership services">
            </div>
        </div>
    </section>

    {{-- SERVICES --}}
                @php
$services = [
    [
        'title' => 'Home Loan',
        'desc' => 'We understand you are seeking a new home, with low rates & a seamless process, we are here to help you through this important financial decision.',
        'link' => 'home-loan',
        'img'  => 'theme/dhara-jfin/img/home_loan.jpg'
    ],
    [
        'title' => 'Project Loan',
        'desc' => 'JFinserv offers Loans Against Property with flexible repayment options and exclusive tax benefits. Check your eligibility today.',
        'link' => 'project-loan',
        'img'  => 'theme/dhara-jfin/img/project_loan.jpg'
    ],
    [
        'title' => 'MSME Loan',
        'desc' => '
We simplify construction financing with low rates and an easy online application, offering tailored loans that ensure a smooth and timely process.',
        'link' => 'msme-loan',
        'img'  => 'theme/dhara-jfin/img/msme_loan.jpg'
    ],
    [
        'title' => 'Loan Against Property',
        'desc' => 'JFinserv offers Loans Against Property with flexible repayment options and exclusive tax benefits. Check your eligibility today.',
        'link' => 'loan-against-property',
        'img'  => 'theme/dhara-jfin/img/loan_against_property.jpg'
    ],
    [
        'title' => 'Overdraft Facility',
        'desc' => 'An overdraft facility allows you to withdraw funds beyond your account balance, up to a predetermined limit.',
        'link' => 'overdraft-facility',
        'img'  => 'theme/dhara-jfin/img/overdraft_loan.jpg'
    ],
    [
        'title' => 'Lease Rental Discounting',
        'desc' => 'Lease Rental Discounting (LRD) allows property owners to obtain loans by using future rental income as collateral.',
        'link' => 'lease-rental-discounting',
        'img'  => 'theme/dhara-jfin/img/lrd_loan.jpg'
    ],
];
@endphp

    {{-- SERVICES --}}
<section id="dharaservices" class="services">
    <div class="container-tab">

        <div class="section-header text-center">
            <h2 class="finserv-trusted" style="color:#295cab;">Our Loan <strong style="color:#00abeb">Products</strong></h2>
            <p>Comprehensive financial solutions tailored to your needs</p>
        </div>

        <div class="services-row">
            @foreach(array_slice($services, 0, 4) as $service)
            <a href="{{ $service['link'] }}" class="service-link">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{ $service['img'] }}?auto=format&fit=crop&w=600&q=80"
                             alt="{{ $service['title'] }}">
                    </div>

                    <div class="service-content">
                        <h3>{{ $service['title'] }}</h3>
                        <p>{{ Str::limit($service['desc'], 110) }}</p>
                    </div>
                </div>
            </a>
            @endforeach
        </div>

        {{-- SINGLE CTA --}}
        <div class="services-cta text-center">
            <a href="{{ url('/services') }}" class="btn btn-primary-hero">
                View All Services
            </a>
        </div>

    </div>
</section>


<!-- properrty -->
     <!-- All Properties -->
<section class="container">

    <div class="section-header">
        <h2>All Properties</h2>
        <p>Explore prime properties based on your accommodation</p>
    </div>

    {{-- ✅ CHECK IF DATA EXISTS --}}
    @if(count($data['allProperties']) > 0)

    <div class="properties-grid">

        @foreach($data['allProperties'] as $index => $v)

            @php
                $img = $v->image ? env('baseURL') . '/' . $v->image : asset('default.jpg');
                $title = $v->title;
                $category = $v->category_name ?? 'Available';
                $builder = $v->builder_name;
                $location = ($v->localities ?? '') . ', ' . ($v->city ?? '');
                $bhk = $v->select_bhk;
                $area = $v->area;

                // ✅ PRICE FIX (DYNAMIC RANGE)
                if (!empty($v->from_price) && !empty($v->to_price)) {
                    $price = "" . formatPrice($v->from_price) . " - " . formatPrice($v->to_price);
                } else {
                    $price = "Price on Request";
                }
            @endphp

            {{-- ❌ REMOVE HIDE WHEN FILTER ACTIVE --}}
            <div class="property-card property-item {{ (!request()->hasAny(['search','bhk','budget','type']) && $index >= 3) ? 'extra-property' : '' }}">

                <!-- Image -->
                <div class="property-image-wrapper">
                    <img src="{{ $img }}" alt="{{ $title }}" loading="lazy">

                    <div class="property-badge">
                        {{ $category }}
                    </div>

                    <div class="property-overlay">
                        <div class="quick-stats">
                            <div class="stat-item">🏠 {{ $bhk }} BHK</div>
                            <div class="stat-item">📐 {{ $area }} Sq. Ft.</div>
                        </div>
                    </div>
                </div>

                <!-- Details -->
                <div class="property-details">

                    <h3 class="property-title">
                        {{ $title }}
                    </h3>

                    <div class="property-developer">
                        <i class="fa-solid fa-building"></i> By {{ $builder }}
                    </div>

                    <div class="property-location">
                        <i class="fa-solid fa-location-dot"></i> {{ $location }}
                    </div>

                    <div class="property-specs">
                        <div class="spec-item">
                            <span class="spec-label">Config</span>
                            <span class="spec-value">{{ $bhk }} BHK</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">Area</span>
                            <span class="spec-value">{{ $area }} SQ.FT</span>
                        </div>
                    </div>

                    <div class="property-footer">
                      <div class="property-price">

                            {{ $price }}

                            <!--<span class="onwards-text">-->
                            <!--    Onwards-->
                            <!--</span>-->

                        </div>

                        <a href="{{ url('property/' . $v->slug) }}">
                            <button class="contact-btn">
                                Contact <span>→</span>
                            </button>
                        </a>
                    </div>

                </div>

            </div>

        @endforeach

    </div>

    {{-- ✅ LOAD MORE ONLY WHEN NO FILTER --}}
  @if(!request()->hasAny(['search','bhk','budget','type']))
<div class="text-center mt-9" style="margin-top:40px;">
    <a href="{{ url('/properties') }}" class="btn btn-primary px-4 py-2">
        View All Properties →
    </a>
</div>
@endif

    @else

    {{-- ❌ NO DATA CASE --}}
    <div class="text-center mt-5">
        <h3>No Properties Found 😔</h3>
        <p>Try changing filters</p>
    </div>

    @endif

</section>
<script>
document.addEventListener("DOMContentLoaded", function(){

    document.getElementById("loadMoreBtn").addEventListener("click", function(){

        let hiddenItems = document.querySelectorAll(".extra-property");

        hiddenItems.forEach(function(item){
            item.style.display = "block";
        });

        this.style.display = "none";
    });

});
</script>


    {{-- TESTIMONIALS --}}
<section id="testimonials" class="testimonials section-padding">
    <div class="container-tab">
        <div class="section-header text-center">
            <h4 style="color:#295cb3">Testimonials</h4>
            <h2 class="finserv-trusted" style="color:#295cab;">What Our <strong style="color:#00abeb">Clients</strong> Say</h2>
            <p>Trust from over 1000+ happy customers across Pune & PCMC.</p>
        </div>

        <div class="testimonials-grid">

            <div class="testimonial-card">
                <div class="stars">
                    @for ($i = 0; $i < 5; $i++)
                        <i class="fas fa-star"></i>
                    @endfor
                </div>
                <p>
                    "Jfinserv helped me get my home loan approved in just 5 days.
                    The process was completely transparent and the team was very professional."
                </p>
                <div class="client-info">
                    <div class="client-details">
                        <h3>Rahul Sharma</h3>
                        <span>Home Loan Customer</span>
                    </div>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="stars">
                    @for ($i = 0; $i < 5; $i++)
                        <i class="fas fa-star"></i>
                    @endfor
                </div>
                <p>
                    "Highly recommend their MSME loan services.
                    They understood my business requirements and offered the best interest rates."
                </p>
                <div class="client-info">
                    <div class="client-details">
                        <h3>Priya Patil</h3>
                        <span>Business Owner</span>
                    </div>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="stars">
                    @for ($i = 0; $i < 5; $i++)
                        <i class="fas fa-star"></i>
                    @endfor
                </div>
                <p>
                    "Excellent experience with their Loan Against Property service.
                    Minimal documentation and very fast disbursement."
                </p>
                <div class="client-info">
                    <div class="client-details">
                        <h3>Amit Deshpande</h3>
                        <span>Real Estate Developer</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


    {{-- CONTACT --}}
    <section class="final-cta" id="apply">
        <div class="final-cta-content">
            <h2>Ready to Get the Best Loan Offer?</h2>
            <p>Apply in minutes and get expert assistance at every step. Join 10,000+ satisfied customers who trusted JFINSERV for their financial needs.</p>
            <a href="{{ route('authv3.login.form') }}" class="btn-primary-hero btn-outline">Apply Now</a>
        </div>
    </section>

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
                            <span>What financial services does Jfinserv offer?</span>
                            <span class="home-faq-icon">▼</span>
                        </div>
                        <div class="home-faq-answer">
                            <div class="home-faq-answer-content">
                                Jfinserv offers a wide range of financial solutions including Home Loans, MSME Loans, Loan Against Property (LAP), Lease Rental Discounting (LRD), and Project Finance tailored to individual and business needs.
                            </div>
                        </div>
                    </div>

                    <div class="home-faq-item">
                        <div class="home-faq-question">
                            <span>Who can apply for a loan with Jfinserv?</span>
                            <span class="home-faq-icon">▼</span>
                        </div>
                        <div class="home-faq-answer">
                            <div class="home-faq-answer-content">
                                Salaried individuals, self-employed professionals, business owners, and companies can apply, subject to eligibility criteria such as income stability, credit history, and property details (if applicable).
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
                                Loan approval timelines depend on document completeness and credit assessment. In most cases, approvals are processed quickly with support from our dedicated relationship managers.
                            </div>
                        </div>
                    </div>

                    <div class="home-faq-item">
                        <div class="home-faq-question">
                            <span>What documents are required to apply for a loan??</span>
                            <span class="home-faq-icon">▼</span>
                        </div>
                        <div class="home-faq-answer">
                            <div class="home-faq-answer-content">
                                Basic documents include identity proof, address proof, income documents, bank statements, and property-related documents where applicable. Exact requirements vary by loan type.
                            </div>
                        </div>
                    </div>
                    <div class="home-faq-item">
                        <div class="home-faq-question">
                            <span>Why choose Jfinserv for your financial needs?</span>
                            <span class="home-faq-icon">▼</span>
                        </div>
                        <div class="home-faq-answer">
                            <div class="home-faq-answer-content">
                                Jfinserv offers competitive interest rates, transparent processes, personalized assistance, and end-to-end support to make borrowing simple and stress-free.
                            </div>
                        </div>
                    </div>

                </div>
                </div>
                </div>
            </div>
        </div>
    </section>

</main>



@include('dhara-jfin.layout.footer')

<script>
    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    //features section
    document.addEventListener("DOMContentLoaded", () => {
    const elements = document.querySelectorAll(".fade-up");

    const observer = new IntersectionObserver(
        entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("show");
                    observer.unobserve(entry.target); // animate once
                }
            });
        },
        {
            threshold: 0.2
        }
    );

    elements.forEach(el => observer.observe(el));
});
document.querySelectorAll('.service-btn').forEach(btn => {
    btn.addEventListener('click', e => {
        console.log(btn.closest('.service-card').querySelector('h3').innerText);
    });
});

    
    // Hero Background Carousel
    const heroSlider = document.querySelector('.hero-slider');
    const slides = document.querySelectorAll('.slide');
    const prevBtn = document.querySelector('.prev-slide');
    const nextBtn = document.querySelector('.next-slide');
    const heroSection = document.querySelector('.hero');
    
    let currentSlide = 0;
    const totalSlides = slides.length;
    let autoSlideInterval;
    let isTransitioning = false;

    if (heroSlider && totalSlides > 0) {
        function updateSlide(index) {
            if (isTransitioning) return;
            isTransitioning = true;

            // Handle wrap around
            if (index >= totalSlides) {
                currentSlide = 0;
            } else if (index < 0) {
                currentSlide = totalSlides - 1;
            } else {
                currentSlide = index;
            }

            const offset = currentSlide * -100;
            heroSlider.style.transform = `translateX(${offset}%)`;

            // Reset transitioning flag after animation
            setTimeout(() => {
                isTransitioning = false;
            }, 1000);

            // Animate content of current slide
            const activeSlide = slides[currentSlide];
            const contentElements = activeSlide.querySelectorAll('.hero-intro, h1, p, .hero-btns');
            
            contentElements.forEach((el, i) => {
                el.style.animation = 'none';
                el.offsetHeight; // trigger reflow
                el.style.animation = `fadeInUp 0.8s ease ${0.1 + (i * 0.1)}s backwards`;
            });
        }

        function nextSlide() {
            updateSlide(currentSlide + 1);
        }

        function prevSlide() {
            updateSlide(currentSlide - 1);
        }

        function startAutoSlide() {
            stopAutoSlide();
            autoSlideInterval = setInterval(nextSlide, 5000);
        }

        function stopAutoSlide() {
            clearInterval(autoSlideInterval);
        }

        // Button Listeners
        if (nextBtn) nextBtn.addEventListener('click', () => {
            nextSlide();
            startAutoSlide();
        });
        
        if (prevBtn) prevBtn.addEventListener('click', () => {
            prevSlide();
            startAutoSlide();
        });

        // Mouse Wheel / Touchpad Scroll Support
        let lastScrollTime = 0;
        const scrollCooldown = 1500; // ms

        heroSection.addEventListener('wheel', (e) => {
            const currentTime = new Date().getTime();
            if (currentTime - lastScrollTime < scrollCooldown) return;

            if (Math.abs(e.deltaX) > Math.abs(e.deltaY)) {
                // Horizontal scroll (typical for touchpads)
                e.preventDefault();
                if (e.deltaX > 50) {
                    nextSlide();
                    lastScrollTime = currentTime;
                    startAutoSlide();
                } else if (e.deltaX < -50) {
                    prevSlide();
                    lastScrollTime = currentTime;
                    startAutoSlide();
                }
            } else if (Math.abs(e.deltaY) > 50) {
                // Vertical scroll on hero section can also trigger slide
                // Only if the user is hovering and deliberately scrolling
                // e.preventDefault(); // Uncomment if you want to block page scroll
                // if (e.deltaY > 50) nextSlide();
                // else prevSlide();
                // lastScrollTime = currentTime;
                // startAutoSlide();
            }
        }, { passive: false });

        // Touch Swipe Support
        let touchStartX = 0;
        let touchEndX = 0;

        heroSection.addEventListener('touchstart', (e) => {
            touchStartX = e.changedTouches[0].screenX;
        }, { passive: true });

        heroSection.addEventListener('touchend', (e) => {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        }, { passive: true });

        function handleSwipe() {
            const swipeThreshold = 50;
            if (touchEndX < touchStartX - swipeThreshold) {
                nextSlide();
                startAutoSlide();
            } else if (touchEndX > touchStartX + swipeThreshold) {
                prevSlide();
                startAutoSlide();
            }
        }

        // Initialize
        startAutoSlide();
    }
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
</script>
<script src="{{ asset('theme/dhara-jfin/js/chatbot.js') }}"></script>

