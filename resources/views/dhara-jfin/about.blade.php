@section('title', 'About Us')
@section('content')
@include('dhara-jfin.layout.header')

<style>
    /* ============================================================
   OUR TEAM SECTION – MOBILE RESPONSIVE (UI unchanged)
   Only adds responsive behavior, preserves all existing styles
   ============================================================ */

/* ----- force images to be responsive & maintain aspect ratio ----- */
.about-page-team-image img {
  width: 100%;
  height: auto;
  display: block;
}

/* ----- mobile first: ensure grid stacks properly on small screens ----- */
.about-page-team-grid {
  display: grid;
  grid-template-columns: 1fr; /* single column on mobile */
  gap: 1.5rem;
  justify-items: center;
}

/* ----- cards take full width on mobile, but keep max-width for readability ----- */
.about-page-team-card {
  width: 100%;
  max-width: 320px; /* prevents cards from becoming too wide on mobile */
  margin: 0 auto;
}

/* ----- tablet (portrait) – 2 columns ----- */
@media (min-width: 600px) {
  .about-page-team-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 2rem;
  }
  .about-page-team-card {
    max-width: 340px;
  }
}

/* ----- desktop – 3 columns ----- */
@media (min-width: 1024px) {
  .about-page-team-grid {
    grid-template-columns: repeat(3, 1fr);
    gap: 2.5rem;
  }
  .about-page-team-card {
    max-width: 360px;
  }
}

/* ----- large screens – 4 columns (optional, but matches your grid) ----- */
@media (min-width: 1280px) {
  .about-page-team-grid {
    grid-template-columns: repeat(4, 1fr);
  }
  .about-page-team-card {
    max-width: 100%;
  }
}

/* ----- extra small devices (below 380px) – prevent overflow ----- */
@media (max-width: 380px) {
  .about-page-team-grid {
    gap: 1.2rem;
  }
  .about-page-team-card {
    max-width: 100%;
  }
  .about-page-team-info {
    padding: 0.8rem 0.5rem 1.2rem;
  }
  .about-page-team-name {
    font-size: 1rem;
  }
  .about-page-team-designation {
    font-size: 0.8rem;
  }
}

/* ----- preserve all existing styles: no UI changes ----- */
/* The following ensures that your existing styles (colors, fonts, shadows, etc.)
   remain untouched. Only layout & spacing are adjusted for responsiveness. */

.about-page-team-section {
  /* your existing styles remain */
}

.about-page-section-container {
  /* your existing styles remain */
}

.about-page-section-header {
  /* your existing styles remain */
}

.about-page-section-label {
  /* your existing styles remain */
}

.about-page-team-overlay {
  /* your existing styles remain */
}

.about-page-team-social {
  /* your existing styles remain */
}

.about-page-social-icon {
  /* your existing styles remain */
}

/* ====== END – NO UI CHANGES, ONLY RESPONSIVE BEHAVIOR ====== */
</style>
<main>
        <section class="video-hero">
        <video id="videobcg" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
        <source src="{{ asset('theme/dhara-jfin/videos/about_us_banner.mp4') }}" type="video/mp4">
        </video>
    <div class="video-banner-overlay">
        <div class="video-overlay-content">
            <h1>Empowering your<span> Financial </span>Journey</h1>
            <!-- <p>Tailored financial solutions for large-scale construction and infrastructure projects.</p>
            <a href="{{ url('/apply') }}" class="btn-primary">
                Apply Now
            </a> -->
        </div>
    </div>
</section>

        <section class="about-section-main">
            <div class="container-tab">
                <div class="about-grid">
                    <div class="about-content-left">
                        <h4>About Our Company</h4>
                        <h2 class="finserv-trusted" style="color:#295cab;">We Promise To <br><strong style="color:#00abeb">Deliver</strong> The Best</h2>
                        <p>Jfinserv Consultant India Private Limited with many finance partners strives to get you the best loan deals and offers online in just a few clicks. You can compare various loan products online with latest interest rates from Nationalized/Government banks and NBFCs in India including Indian Bank, BOM, PNB, RBL, UBI, BOB, Kotak, Axis, ICICI Bank, Aditya Birla Capital and other partners. Our team of financial experts works hard to find and get you the best deal. 
                            <a href="#" class="incorp-cert">INCORPORATION CERTIFICATE <i class="fas fa-arrow-right"></i></a></p>
                        
                        <p>Jfinserv Can Help With All Your Home Lending Needs.</p>
                        
                        <ul class="about-features-list">
                            <li><i class="fas fa-check"></i> Calculate Your Purchasing Power</li>
                            <li><i class="fas fa-check"></i> Buy Your Home</li>
                            <li><i class="fas fa-check"></i> Renovate Or Upgrade Your Home</li>
                            <li><i class="fas fa-check"></i> Use the Equity In Your Home For A Personal Investment</li>
                            <li><i class="fas fa-check"></i> Expand Your Property Portfolio</li>
                            <li><i class="fas fa-check"></i> Refinance Your Existing Loan</li>
                        </ul>
                    </div>
                    <div class="about-content-right">
                        <div class="about-image-wrapper">
                            <!-- Placeholder image based on reference -->
                            <img src="{{asset('theme/dhara-jfin/img/about-1.jpg')}}" alt="JF Finserve team and financial services">
                        </div>
                        <div class="stats-grid">
                            <div class="stat-box">
                                <h3>250 +</h3>
                                <p>Disbursed Loans</p>
                            </div>
                            <div class="stat-box">
                                <h3>7 +</h3>
                                <p>Awards Won</p>
                            </div>
                            <div class="stat-box">
                                <h3>50 +</h3>
                                <p>Skilled Agents</p>
                            </div>
                            <div class="stat-box">
                                <h3>75 +</h3>
                                <p>Team Members</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mission-vision-section">
            <div class="container-tab">
                <div class="mission-vision-grid">
                    <div class="mission-vision-image">
                        <img src="{{asset('theme/dhara-jfin/img/mision.jpg')}}" alt="Mission Vision Values">
                    </div>
                    <div class="mission-vision-content">
                        <h4>Future Ready</h4>
                        <h2 class="finserv-trusted" style="color:#295cab;">Mission, Vision <strong style="color:#00abeb">& Values</strong></h2>
                        
                        <div class="mission-box">
                            <h3>Our Mission</h3>
                            <p>Our mission is to be the leading finance company, offering secured loans at competitive rates. We focus on maximizing shareholder value while delivering exceptional, customer-centered service.</p>
                        </div>
                        
                        <div class="mission-box">
                            <h3>Our Values</h3>
                            <p>We are transitioning into a knowledge-driven organization by enhancing operational autonomy and fostering a strong sense of ownership among employees.</p>
                        </div>
                        
                        <div class="mission-box">
                            <h3>Our Vision</h3>
                            <p>To be a leading financial consulting firm, delivering innovative, customized solutions for sustainable client growth, while upholding a culture of excellence and integrity.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

       
<section class="awards-section">
    <div class="container-tab">

        <div class="section-header">
            <h4 class="finserv-eyebrow" style="color:#295cab;">Our Awards</h4>
            <h2 class="finserv-trusted" style="color:#295cab;">
                Top Corporate <strong style="color:#00abeb">Recognitions</strong>
            </h2>
        </div>

        <div class="awards-grid">

            <!-- Award 1 -->
            <div class="award-card">
                <div class="award-logo">
                    <img src="{{ asset('theme') }}/dhara-jfin/img/award_logo/home_rank.jpg"
                         alt="Home Loan Sourcing Rank 1 Award"
                         class="award-logo-img">
                </div>

                <h3>Home Loan Sourcing - Rank 1<sup>st</sup></h3>
                <p>Year 2023-24</p>
            </div>


            <!-- Award 2 -->
            <div class="award-card">
                <div class="award-logo">
                    <img src="{{ asset('theme') }}/dhara-jfin/img/award_logo/Preferred Business Partner.jpg"
                         alt="ARKA Preferred Business Partner Award"
                         class="award-logo-img">
                </div>

                <h3>Preferred Business Partner</h3>
                <p>Year 2023-24</p>
            </div>


            <!-- Award 3 -->
            <!-- <div class="award-card">
                <div class="award-logo">
                    <img src="{{ asset('theme') }}/dhara-jfin/img/award_logo/bom.jpg"
                         alt="Best Performing Home Loan Sourcing Award"
                         class="award-logo-img">
                </div>

                <h3>Best Performing in Home Loan Sourcing</h3>
                <p>Year 2023-24</p>
            </div> -->


            <!-- Award 4 -->
            <div class="award-card">
                <div class="award-logo">
                    <img src="{{ asset('theme') }}/dhara-jfin/img/award_logo/pnb.jpg"
                         alt="Mortgage Loan Mobilizing Rank 1 Award"
                         class="award-logo-img">
                </div>

                <h3>For Mobilizing Mortgage Loan - Rank 1<sup>st</sup></h3>
                <p>Year 2022-23</p>
            </div>


            <!-- Award 5 -->
            <div class="award-card">
                <div class="award-logo">
                    <img src="{{ asset('theme') }}/dhara-jfin/img/award_logo/Best Category in Business.jpg"
                         alt="ANAND RATHI Best Category in Business Award"
                         class="award-logo-img">
                </div>

                <h3>Best Category in Business</h3>
                <p>Year 2022-23</p>
            </div>


            <!-- Award 6 -->
            <div class="award-card">
                <div class="award-logo">
                    <img src="{{ asset('theme') }}/dhara-jfin/img/award_logo/bom.jpg"
                         alt="Mortgage Loan Mobilizing Rank 1 Award"
                         class="award-logo-img">
                </div>

                <h3>For Mobilizing Mortgage Loan - Rank 1<sup>st</sup></h3>
                <p>Year 2021-22</p>
            </div>


            <!-- Award 7 -->
            <div class="award-card">
                <div class="award-logo">
                    <img src="{{ asset('theme') }}/dhara-jfin/img/award_logo/tpd.png"
                         alt="Top Performing DSA Award"
                         class="award-logo-img">
                </div>

                <h3>Top Performing DSA</h3>
                <p>Year 2021-22</p>
            </div>

        </div>
    </div>
</section>


<style>
/* ================================
   AWARDS SECTION
================================ */
.awards-section {
    padding: 70px 0;
    background: #f8fbff;
}

.awards-section .section-header {
    text-align: center;
    margin-bottom: 45px;
}

.awards-section .finserv-eyebrow {
    margin-bottom: 10px;
    font-size: 16px;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
}

.awards-section .finserv-trusted {
    margin: 0;
    font-size: 36px;
    font-weight: 700;
}


/* ================================
   AWARDS GRID
================================ */
.awards-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 25px;
}


/* ================================
   AWARD CARD
================================ */
.award-card {
    background: #ffffff;
    border-radius: 14px;
    padding: 28px 22px;
    text-align: center;
    min-height: 260px;

    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;

    border: 1px solid #e8eef7;

    box-shadow: 0 8px 25px rgba(41, 92, 171, 0.08);

    transition: all 0.3s ease;
}

.award-card:hover {
    transform: translateY(-7px);
    box-shadow: 0 15px 35px rgba(41, 92, 171, 0.16);
    border-color: #00abeb;
}


/* ================================
   AWARD LOGO BOX
================================ */
.award-logo {
    width: 120px;
    height: 100px;

    display: flex;
    align-items: center;
    justify-content: center;

    margin-bottom: 22px;

    background: #ffffff;
    border-radius: 10px;
}


/* ================================
   AWARD IMAGE
================================ */
.award-logo-img {
    max-width: 110px;
    max-height: 90px;

    width: auto;
    height: auto;

    object-fit: contain;

    display: block;
}


/* ================================
   AWARD TITLE
================================ */
.award-card h3 {
    margin: 0 0 8px;

    color: #173b70;

    font-size: 17px;
    line-height: 1.45;

    font-weight: 700;
}

.award-card h3 sup {
    font-size: 10px;
    top: -0.4em;
    position: relative;
}


/* ================================
   YEAR
================================ */
.award-card p {
    margin: 0;

    color: #6b7280;

    font-size: 14px;
    font-weight: 500;
}


/* ================================
   TABLET
================================ */
@media (max-width: 991px) {

    .awards-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .awards-section .finserv-trusted {
        font-size: 30px;
    }
}


/* ================================
   MOBILE
================================ */
@media (max-width: 575px) {

    .awards-section {
        padding: 50px 15px;
    }

    .awards-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }

    .awards-section .finserv-trusted {
        font-size: 26px;
    }

    .award-card {
        min-height: 240px;
    }
}
</style>
```



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
                <div class="about-page-section-label">Our Team</div>
                <!-- <h2 class="about-page-section-title">Expert Financial Advisors</h2>
                <p class="about-page-section-subtitle">Dedicated professionals committed to helping you make smart financial decisions and achieve your dreams.</p> -->
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
