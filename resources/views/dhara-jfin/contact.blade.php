
@include('dhara-jfin.layout.header')

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<main>

    <!-- =====================================================
         PAGE BANNER
    ====================================================== -->

    <section class="video-hero">

        <video
            id="videobcg"
            preload="auto"
            autoplay
            loop
            muted
            playsinline
            volume="0"
        >
            <source
                src="{{ asset('theme/dhara-jfin/videos/jfinserv_contact_banner.mp4') }}"
                type="video/mp4"
            >
        </video>

        <div class="video-banner-overlay">

            <div class="video-overlay-content">

                <h1>
                    We are here to help you Move
                    <span>Forward</span>
                </h1>

            </div>

        </div>

    </section>


    <!-- =====================================================
         CONTACT SECTION
    ====================================================== -->

    <section class="contact-section">

        <div class="container-tab">

            <!-- Section Heading -->

            <div class="section-header-contact-page">

                <h1>
                    For Loan Details, Assistance Or Any Queries.
                </h1>

            </div>


            <!-- =================================================
                 CONTACT GRID
            ================================================== -->

            <div class="contact-grid">


                <!-- LEFT IMAGE -->

                <div class="contact-image">

                    <img
                        src="{{ asset('theme') }}/frontend/img/contact-img.png"
                        alt="JF Finserve contact and customer support"
                    >

                </div>


                <!-- RIGHT FORM -->

                <div class="contact-form">

                    <h4 class="text-primary">
                        Get In Touch With Us.
                    </h4>

                    <p>
                        Want to get in touch? We'd love to hear from you.
                        Here's how you can reach us...
                    </p>


                    <form
                        action="{{ route('enquiry.store') }}"
                        method="POST"
                    >

                        @csrf


                        <div class="form-grid">


                            <!-- NAME -->

                            <div class="form-group">

                                <label>
                                    Your Name
                                </label>

                                <input
                                    type="text"
                                    name="name"
                                    value="{{ old('name') }}"
                                    required
                                >

                            </div>


                            <!-- EMAIL -->

                            <div class="form-group">

                                <label>
                                    Your Email
                                </label>

                                <input
                                    type="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    required
                                >

                            </div>


                            <!-- PHONE -->

                            <div class="form-group">

                                <label>
                                    Your Phone
                                </label>

                                <input
                                    type="tel"
                                    name="contact"
                                    value="{{ old('contact') }}"
                                    required
                                    maxlength="10"
                                    pattern="[0-9]{10}"
                                    placeholder="Enter 10 digit mobile number"
                                    inputmode="numeric"
                                    oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                                >

                            </div>


                            <!-- ENQUIRY TYPE -->

                            <div class="form-group">

                                <label>
                                    Enquiry Type
                                </label>

                                <select
                                    name="enquiry_type"
                                    required
                                >

                                    <option
                                        value=""
                                        disabled
                                        {{ old('enquiry_type') ? '' : 'selected' }}
                                    >
                                        Select Type
                                    </option>

                                    <option
                                        value="loan"
                                        {{ old('enquiry_type') == 'loan' ? 'selected' : '' }}
                                    >
                                        Loan
                                    </option>

                                    <option
                                        value="property"
                                        {{ old('enquiry_type') == 'property' ? 'selected' : '' }}
                                    >
                                        Property
                                    </option>

                                </select>

                            </div>


                            <!-- ADDRESS -->

                            <div class="form-group full-width">

                                <label>
                                    Address
                                </label>

                                <input
                                    type="text"
                                    name="address"
                                    value="{{ old('address') }}"
                                    required
                                >

                            </div>


                            <!-- MESSAGE -->

                            <div class="form-group full-width">

                                <label>
                                    Message
                                </label>

                                <textarea
                                    name="message"
                                    rows="4"
                                    required
                                >{{ old('message') }}</textarea>

                            </div>


                            <!-- SUBMIT -->

                            <div class="form-group full-width">

                                <button
                                    type="submit"
                                    class="btn-primary"
                                >
                                    Submit
                                </button>

                            </div>


                        </div>

                    </form>

                </div>

            </div>


            <!-- =================================================
                 MAP
            ================================================== -->

            <div class="map-wrapper">

                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.239325295986!2d73.87668237465209!3d18.518084069251273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c04fa53aaaab%3A0xe41ec8638ad1532e!2sJfinserv!5e0!3m2!1sen!2sin!4v1723443378612!5m2!1sen!2sin"
                    loading="lazy"
                    allowfullscreen
                    referrerpolicy="no-referrer-when-downgrade"
                ></iframe>

            </div>

        </div>

    </section>

</main>



<!-- =========================================================
     SUCCESS ALERT
========================================================= -->

@if(session('success'))

<script>

document.addEventListener("DOMContentLoaded", function () {

    Swal.fire({

        title: "Thank You!",

        text: @json(session('success')),

        icon: "success",

        confirmButtonText: "OK",

        confirmButtonColor: "#0d6efd"

    });

});

</script>

@endif



<!-- =========================================================
     MOBILE RESPONSIVE CSS
========================================================= -->

<style>

/* =========================================================
   GENERAL FIX
========================================================= */

.video-hero,
.contact-section,
.contact-section *,
.video-banner-overlay {
    box-sizing: border-box;
}

.contact-section {
    width: 100%;
    overflow: hidden;
}


/* =========================================================
   VIDEO HERO
========================================================= */

.video-hero {
    position: relative;

    width: 100%;
    height: 520px;

    overflow: hidden;
}

#videobcg {
    position: absolute;

    top: 50%;
    left: 50%;

    width: 100%;
    height: 100%;

    min-width: 100%;
    min-height: 100%;

    transform: translate(-50%, -50%);

    object-fit: cover;

    display: block;
}

.video-banner-overlay {
    position: absolute;

    inset: 0;

    width: 100%;
    height: 100%;

    display: flex;

    align-items: center;
    justify-content: center;

    background: rgba(0, 0, 0, 0.30);

    z-index: 2;
}

.video-overlay-content {
    width: 100%;

    padding: 20px;

    text-align: center;
}

.video-overlay-content h1 {
    margin: 0 auto;

    max-width: 900px;

    color: #ffffff;

    font-size: 48px;

    line-height: 1.25;

    font-weight: 700;

    text-shadow: 0 3px 10px rgba(0, 0, 0, 0.45);
}

.video-overlay-content h1 span {
    color: #ffffff;
}


/* =========================================================
   CONTACT SECTION
========================================================= */

.contact-section {
    width: 100%;
}

.container-tab {
    width: 100%;
    max-width: 1200px;

    margin: 0 auto;

    padding-left: 20px;
    padding-right: 20px;
}


/* =========================================================
   CONTACT HEADING
========================================================= */

.section-header-contact-page {
    width: 100%;

    text-align: center;

    padding: 55px 0 35px;
}

.section-header-contact-page h1 {
    margin: 0;

    color: #295cab;

    font-size: 32px;

    line-height: 1.35;

    font-weight: 700;
}


/* =========================================================
   CONTACT GRID
========================================================= */

.contact-grid {
    width: 100%;

    display: grid;

    grid-template-columns: minmax(0, 0.9fr) minmax(0, 1.1fr);

    gap: 45px;

    align-items: center;
}


/* =========================================================
   CONTACT IMAGE
========================================================= */

.contact-image {
    width: 100%;

    display: flex;

    align-items: center;
    justify-content: center;
}

.contact-image img {
    display: block;

    width: 100%;

    max-width: 520px;

    height: auto;

    object-fit: contain;
}


/* =========================================================
   CONTACT FORM
========================================================= */

.contact-form {
    width: 100%;

    padding: 30px;

    border-radius: 14px;

    background: #ffffff;

    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);

    border: 1px solid #edf0f5;
}

.contact-form h4 {
    margin: 0 0 8px;

    font-size: 25px;

    font-weight: 700;
}

.contact-form > p {
    margin: 0 0 25px;

    color: #777777;

    font-size: 14px;

    line-height: 1.7;
}


/* =========================================================
   FORM GRID
========================================================= */

.form-grid {
    display: grid;

    grid-template-columns: repeat(2, minmax(0, 1fr));

    gap: 18px;

    width: 100%;
}

.form-group {
    width: 100%;
    min-width: 0;
}

.form-group.full-width {
    grid-column: 1 / -1;
}


/* =========================================================
   LABEL
========================================================= */

.form-group label {
    display: block;

    margin-bottom: 7px;

    color: #333333;

    font-size: 14px;

    font-weight: 600;
}


/* =========================================================
   INPUT / SELECT / TEXTAREA
========================================================= */

.form-group input,
.form-group select,
.form-group textarea {
    display: block;

    width: 100%;

    max-width: 100%;

    border: 1px solid #dce2ea;

    border-radius: 7px;

    background: #ffffff;

    color: #333333;

    font-family: inherit;

    font-size: 14px;

    outline: none;

    transition: all 0.2s ease;

    box-shadow: none;
}

.form-group input,
.form-group select {
    height: 48px;

    padding: 10px 13px;
}

.form-group textarea {
    min-height: 115px;

    padding: 12px 13px;

    resize: vertical;
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus {
    border-color: #295cab;

    box-shadow: 0 0 0 3px rgba(41, 92, 171, 0.10);
}

.form-group input::placeholder,
.form-group textarea::placeholder {
    color: #999999;
}


/* =========================================================
   BUTTON
========================================================= */

.contact-form .btn-primary {
    display: inline-flex;

    align-items: center;
    justify-content: center;

    width: 150px;

    min-height: 48px;

    padding: 10px 20px;

    border: 0;

    border-radius: 7px;

    background: #295cab;

    color: #ffffff;

    font-size: 15px;

    font-weight: 600;

    cursor: pointer;

    transition: all 0.25s ease;
}

.contact-form .btn-primary:hover {
    background: #1f4789;

    transform: translateY(-1px);
}


/* =========================================================
   MAP
========================================================= */

.map-wrapper {
    position: relative;

    width: 100%;

    height: 400px;

    margin-top: 60px;
    margin-bottom: 60px;

    overflow: hidden;

    border-radius: 12px;

    box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
}

.map-wrapper iframe {
    display: block;

    width: 100%;

    height: 100%;

    min-height: 400px;

    border: 0;
}


/* =========================================================
   SWEET ALERT
========================================================= */

.swal2-popup {
    border-radius: 12px;

    font-family: 'Poppins', sans-serif;
}

.swal2-title {
    font-size: 24px;

    font-weight: 600;
}

.swal2-confirm {
    padding: 10px 25px;

    font-size: 16px;
}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 991px) {

    .video-hero {
        height: 430px;
    }

    .video-overlay-content h1 {
        font-size: 38px;
    }

    .container-tab {
        padding-left: 18px;
        padding-right: 18px;
    }

    .section-header-contact-page {
        padding: 45px 0 30px;
    }

    .section-header-contact-page h1 {
        font-size: 28px;
    }

    .contact-grid {
        grid-template-columns: 1fr;

        gap: 35px;
    }

    .contact-image img {
        max-width: 450px;
    }

    .contact-form {
        width: 100%;

        padding: 28px;
    }

    .map-wrapper {
        margin-top: 45px;
    }
}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 767px) {

    /* ---------------------------------------------
       HERO
    --------------------------------------------- */

    .video-hero {
        height: 300px;

        min-height: 300px;
    }

    #videobcg {
        width: 100%;
        height: 100%;

        min-width: 100%;
        min-height: 100%;

        object-fit: cover;

        object-position: center center;
    }

    .video-banner-overlay {
        background: rgba(0, 0, 0, 0.38);
    }

    .video-overlay-content {
        padding: 15px;
    }

    .video-overlay-content h1 {
        max-width: 100%;

        font-size: 27px;

        line-height: 1.35;
    }


    /* ---------------------------------------------
       CONTAINER
    --------------------------------------------- */

    .container-tab {
        width: 100%;

        padding-left: 15px;
        padding-right: 15px;
    }


    /* ---------------------------------------------
       HEADING
    --------------------------------------------- */

    .section-header-contact-page {
        padding: 35px 5px 25px;
    }

    .section-header-contact-page h1 {
        font-size: 23px;

        line-height: 1.4;
    }


    /* ---------------------------------------------
       CONTACT GRID
    --------------------------------------------- */

    .contact-grid {
        display: flex;

        flex-direction: column;

        gap: 25px;

        width: 100%;
    }


    /* ---------------------------------------------
       IMAGE
    --------------------------------------------- */

    .contact-image {
        width: 100%;

        padding: 0 10px;

        order: 1;
    }

    .contact-image img {
        display: block;

        width: 100%;

        max-width: 360px;

        height: auto;
    }


    /* ---------------------------------------------
       FORM
    --------------------------------------------- */

    .contact-form {
        width: 100%;

        padding: 20px 16px;

        border-radius: 10px;

        order: 2;
    }

    .contact-form h4 {
        font-size: 21px;

        line-height: 1.35;
    }

    .contact-form > p {
        margin-bottom: 20px;

        font-size: 13px;

        line-height: 1.65;
    }


    /* ---------------------------------------------
       FORM GRID
    --------------------------------------------- */

    .form-grid {
        display: flex;

        flex-direction: column;

        gap: 15px;

        width: 100%;
    }

    .form-group,
    .form-group.full-width {
        width: 100%;

        grid-column: auto;
    }


    /* ---------------------------------------------
       LABEL
    --------------------------------------------- */

    .form-group label {
        margin-bottom: 6px;

        font-size: 13px;
    }


    /* ---------------------------------------------
       INPUT
    --------------------------------------------- */

    .form-group input,
    .form-group select {
        width: 100%;

        height: 47px;

        min-height: 47px;

        padding: 10px 12px;

        font-size: 14px;
    }


    /* ---------------------------------------------
       TEXTAREA
    --------------------------------------------- */

    .form-group textarea {
        width: 100%;

        min-height: 110px;

        padding: 11px 12px;

        font-size: 14px;

        line-height: 1.5;
    }


    /* ---------------------------------------------
       BUTTON
    --------------------------------------------- */

    .contact-form .btn-primary {
        width: 100%;

        min-height: 47px;

        height: 47px;

        font-size: 15px;
    }


    /* ---------------------------------------------
       MAP
    --------------------------------------------- */

    .map-wrapper {
        width: 100%;

        height: 300px;

        min-height: 300px;

        margin-top: 35px;

        margin-bottom: 35px;

        border-radius: 9px;
    }

    .map-wrapper iframe {
        width: 100%;

        height: 300px;

        min-height: 300px;
    }


    /* ---------------------------------------------
       SWEET ALERT MOBILE
    --------------------------------------------- */

    .swal2-popup {
        width: calc(100% - 30px) !important;

        max-width: 380px;

        padding: 20px;
    }

    .swal2-title {
        font-size: 21px;
    }

    .swal2-html-container {
        font-size: 14px;
    }

    .swal2-confirm {
        padding: 9px 22px;

        font-size: 14px;
    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media (max-width: 480px) {

    .video-hero {
        height: 245px;

        min-height: 245px;
    }

    #videobcg {
        object-position: center center;
    }

    .video-overlay-content h1 {
        font-size: 22px;

        line-height: 1.35;
    }


    .container-tab {
        padding-left: 12px;
        padding-right: 12px;
    }


    .section-header-contact-page {
        padding: 28px 3px 20px;
    }

    .section-header-contact-page h1 {
        font-size: 20px;

        line-height: 1.4;
    }


    .contact-grid {
        gap: 20px;
    }


    .contact-image {
        padding: 0 5px;
    }

    .contact-image img {
        max-width: 320px;
    }


    .contact-form {
        padding: 18px 13px;
    }

    .contact-form h4 {
        font-size: 19px;
    }

    .contact-form > p {
        font-size: 12.5px;
    }


    .form-grid {
        gap: 13px;
    }


    .form-group label {
        font-size: 12.5px;
    }


    .form-group input,
    .form-group select {
        height: 45px;

        min-height: 45px;

        font-size: 13px;
    }


    .form-group textarea {
        min-height: 100px;

        font-size: 13px;
    }


    .contact-form .btn-primary {
        height: 45px;

        min-height: 45px;
    }


    .map-wrapper {
        height: 260px;

        min-height: 260px;

        margin-top: 28px;
    }

    .map-wrapper iframe {
        height: 260px;

        min-height: 260px;
    }

}


/* =========================================================
   VERY SMALL MOBILE
========================================================= */

@media (max-width: 360px) {

    .video-hero {
        height: 220px;

        min-height: 220px;
    }

    .video-overlay-content h1 {
        font-size: 19px;
    }


    .section-header-contact-page h1 {
        font-size: 18px;
    }


    .contact-form {
        padding: 16px 11px;
    }


    .contact-form h4 {
        font-size: 18px;
    }


    .form-group input,
    .form-group select {
        height: 44px;

        min-height: 44px;
    }


    .form-group textarea {
        min-height: 95px;
    }


    .map-wrapper {
        height: 230px;

        min-height: 230px;
    }

    .map-wrapper iframe {
        height: 230px;

        min-height: 230px;
    }

}

</style>


@include('dhara-jfin.layout.footer')

<script src="{{ asset('theme/dhara-jfin/js/chatbot.js') }}"></script>
