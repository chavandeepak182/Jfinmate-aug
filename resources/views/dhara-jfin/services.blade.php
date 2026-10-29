{{-- SEO META DATA FOR SERVICES PAGE --}}
@section('title', 'Loan Services in Pune | Financial Services | JFinserve')
@section('meta_description', 'Explore loan services in Pune wi. Get expert assistance for home loans, LAP, project loans, MSME loans, overdraft and LRD solutions.')
@section('meta_keywords', 'Loan Services in Pune, Financial Services in Pune, Loan Consultant in Pune, Home Loan in Pune, Loan Against Property in Pune, Project Loan in Pune, MSME Loan in Pune, Overdraft Facility in Pune, Lease Rental Discounting in Pune, Business Loan Services in Pune')

@section('content')
@push('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "CollectionPage",
  "@id": "https://jfinserv.com/services#webpage",
  "url": "https://jfinserv.com/services",
  "name": "Financial Services | JF Finserve",
  "description": "Explore financial solutions from JF Finserve, including home loans, loans against property, project loans, MSME loans, overdraft facilities and lease rental discounting.",
  "inLanguage": "en-IN",
  "isPartOf": {
    "@type": "WebSite",
    "@id": "https://jfinserv.com/#website",
    "url": "https://jfinserv.com/",
    "name": "JF Finserve"
  },
  "about": {
    "@type": "Organization",
    "@id": "https://jfinserv.com/#organization",
    "name": "JF Finserve",
    "url": "https://jfinserv.com/"
  },
  "mainEntity": {
    "@type": "ItemList",
    "name": "JF Finserve Financial Services",
    "numberOfItems": 6,
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "item": {
          "@type": "Service",
          "name": "Home Loan",
          "url": "https://jfinserv.com/home-loan",
          "provider": {
            "@id": "https://jfinserv.com/#organization"
          }
        }
      },
      {
        "@type": "ListItem",
        "position": 2,
        "item": {
          "@type": "Service",
          "name": "Loan Against Property",
          "url": "https://jfinserv.com/loan-against-property",
          "provider": {
            "@id": "https://jfinserv.com/#organization"
          }
        }
      },
      {
        "@type": "ListItem",
        "position": 3,
        "item": {
          "@type": "Service",
          "name": "Project Loan",
          "url": "https://jfinserv.com/project-loan",
          "provider": {
            "@id": "https://jfinserv.com/#organization"
          }
        }
      },
      {
        "@type": "ListItem",
        "position": 4,
        "item": {
          "@type": "Service",
          "name": "MSME Loan",
          "provider": {
            "@id": "https://jfinserv.com/#organization"
          }
        }
      },
      {
        "@type": "ListItem",
        "position": 5,
        "item": {
          "@type": "Service",
          "name": "Overdraft Facility",
          "provider": {
            "@id": "https://jfinserv.com/#organization"
          }
        }
      },
      {
        "@type": "ListItem",
        "position": 6,
        "item": {
          "@type": "Service",
          "name": "Lease Rental Discounting",
          "provider": {
            "@id": "https://jfinserv.com/#organization"
          }
        }
      }
    ]
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
        "name": "Services",
        "item": "https://jfinserv.com/services"
      }
    ]
  }
}
</script>
@endpush
@include('dhara-jfin.layout.header')
<main>
<!-- <section class="video-hero">
        <video id="videobcg" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
        <source src="{{ asset('theme/dhara-jfin/videos/jfinserv_banner_services.mp4') }}" type="video/mp4">
        </video>
    <div class="video-banner-overlay">
        <div class="video-overlay-content">
            <h1>We Handle All Your <span>Lending Needs</span></h1>
        </div>
    </div>
</section> -->
<div class="section-header" > 

            <h4 class="finserv-eyebrow" style="color:#295cab;">
                Our Services
            </h4>

            <h2 class="finserv-trusted" style="color:#295cab;">
                We Handle All Your 
                <strong style="color:#00abeb">Lending Needs</strong>
            </h2>
            

            <p>
    Explore flexible and reliable lending solutions designed around your
    financial needs. From home loans to business financing, Jfinserv helps
    you find the right solution with transparency, expert guidance, and a
    hassle-free process.
</p>

        </div>

    <!-- Services Section -->
    <section class="service-page-services-section">
        <div class="service-page-services-grid">
            <!-- Home Loan -->
            <div class="service-page-service-card">
                <div class="service-page-shine"></div>
                <div class="service-page-service-image">
                    <div class="service-page-service-illustration">
                       <img src="{{ asset('theme/dhara-jfin/img/homeloan.jpeg') }}" alt="Home loan services offered by JF Finserve">
                    </div>
                    <div class="service-page-service-badge">Popular</div>
                </div>
                <div class="service-page-service-content">
                    <h3 class="service-page-service-title">Home Loan</h3>
                    <p class="service-page-service-description">We understand you're seeking a new home, with low rates & a seamless process, we're here to help you achieve it.</p>
                    <ul class="service-page-service-features">
                        <li>Competitive interest rates starting at 8.5%</li>
                        <li>Loan amounts up to ₹5 Crore</li>
                        <li>Flexible repayment tenure up to 30 years</li>
                        <li>Quick approval within 48 hours</li>
                    </ul>
                    <div class="service-page-service-footer">
                        <div class="service-page-service-rate">
                            <span class="service-page-rate-label">Starting From</span>
                            <span class="service-page-rate-value">8.5%*</span>
                        </div>
                        <a href="{{url('/home-loan')}}" class="service-page-btn-service">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Loan Against Property -->
            <div class="service-page-service-card">
                <div class="service-page-shine"></div>
                <div class="service-page-service-image">
                    <div class="service-page-service-illustration">
<img src="{{ asset('theme/dhara-jfin/img/lap.jpeg') }}" alt="Loan against property services offered by JF Finserve">                    </div>
                    <div class="service-page-service-badge">Featured</div>
                </div>
                <div class="service-page-service-content">
                    <h3 class="service-page-service-title">Loan Against Property</h3>
                    <p class="service-page-service-description">JFinserv offers Loans Against Property with flexible repayment options and swift loan benefits.</p>
                    <ul class="service-page-service-features">
                        <li>Unlock up to 70% of your property value</li>
                        <li>Attractive interest rates from 9.0%</li>
                        <li>Loan amounts up to ₹10 Crore</li>
                        <li>Minimal documentation required</li>
                    </ul>
                    <div class="service-page-service-footer">
                        <div class="service-page-service-rate">
                            <span class="service-page-rate-label">Starting From</span>
                            <span class="service-page-rate-value">9.0%*</span>
                        </div>
                        <a href="{{url('/loan-against-property')}}" class="service-page-btn-service">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Project Loan -->
            <div class="service-page-service-card">
                <div class="service-page-shine"></div>
                <div class="service-page-service-image">
                    <div class="service-page-service-illustration">
<img src="{{ asset('theme/dhara-jfin/img/projectloan.jpeg') }}" alt="Project loan financing services offered by JF Finserve">                    </div>
                </div>
                <div class="service-page-service-content">
                    <h3 class="service-page-service-title">Project Loan</h3>
                    <p class="service-page-service-description">We simplify construction financing with low rates and an easy BNAO lending application, offering tailored solutions for your project needs.</p>
                    <ul class="service-page-service-features">
                        <li>Specialized construction financing</li>
                        <li>Flexible disbursement as per project stages</li>
                        <li>Competitive rates from 9.5%</li>
                        <li>Expert guidance throughout the project</li>
                    </ul>
                    <div class="service-page-service-footer">
                        <div class="service-page-service-rate">
                            <span class="service-page-rate-label">Starting From</span>
                            <span class="service-page-rate-value">9.5%*</span>
                        </div>
                        <a href="{{url('/project-loan')}}" class="service-page-btn-service">Read More</a>
                    </div>
                </div>
            </div>

            <!-- MSME Loan -->
            <div class="service-page-service-card">
                <div class="service-page-shine"></div>
                <div class="service-page-service-image">
                    <div class="service-page-service-illustration">
                        <img src="{{ asset('theme/dhara-jfin/img/msmeloan.jpeg') }}" alt="MSME business loan from JF Finserve">
                    </div>
                    <div class="service-page-service-badge">New</div>
                </div>
                <div class="service-page-service-content">
                    <h3 class="service-page-service-title">MSME Loan</h3>
                    <p class="service-page-service-description">This service meets the diverse needs of small and medium businesses. Whether it is expanding, investing in equipment, or increasing capital.</p>
                    <ul class="service-page-service-features">
                        <li>Tailored solutions for SMEs</li>
                        <li>Quick processing and approval</li>
                        <li>Collateral-free loans available</li>
                        <li>Working capital support</li>
                    </ul>
                    <div class="service-page-service-footer">
                        <div class="service-page-service-rate">
                            <span class="service-page-rate-label">Starting From</span>
                            <span class="service-page-rate-value">10.0%*</span>
                        </div>
                        <a href="{{url('/msme-loan')}}" class="service-page-btn-service">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Overdraft Facility -->
            <div class="service-page-service-card">
                <div class="service-page-shine"></div>
                <div class="service-page-service-image">
                    <div class="service-page-service-illustration">
                        <img src="{{asset('theme/dhara-jfin/img/overdraft.jpeg')}}" alt="Overdraft loan solutions from JF Finserve">
                    </div>
                </div>
                <div class="service-page-service-content">
                    <h3 class="service-page-service-title">Overdraft Facility</h3>
                    <p class="service-page-service-description">An overdraft facility allows you to withdraw funds beyond your account balance, up to a predetermined limit.</p>
                    <ul class="service-page-service-features">
                        <li>Flexible credit line when you need it</li>
                        <li>Pay interest only on utilized amount</li>
                        <li>Instant access to funds</li>
                        <li>No prepayment penalties</li>
                    </ul>
                    <div class="service-page-service-footer">
                        <div class="service-page-service-rate">
                            <span class="service-page-rate-label">Starting From</span>
                            <span class="service-page-rate-value">11.5%*</span>
                        </div>
                        <a href="{{url('/overdraft-facility')}}" class="service-page-btn-service">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Lease Rental Discounting -->
            <div class="service-page-service-card">
                <div class="service-page-shine"></div>
                <div class="service-page-service-image">
                    <div class="service-page-service-illustration">
                        <img src="{{asset('theme/dhara-jfin/img/lrd.jpeg')}}" alt="Lease rental discounting loan services">
                    </div>
                </div>
                <div class="service-page-service-content">
                    <h3 class="service-page-service-title">Lease Rental Discounting (LRD)</h3>
                    <p class="service-page-service-description">Lease Rental Discounting (LRD) allows property owners to obtain loans by using future rental income as collateral.</p>
                    <ul class="service-page-service-features">
                        <li>Leverage your rental income</li>
                        <li>High loan-to-value ratio</li>
                        <li>Attractive interest rates</li>
                        <li>Suitable for commercial properties</li>
                    </ul>
                    <div class="service-page-service-footer">
                        <div class="service-page-service-rate">
                            <span class="service-page-rate-label">Starting From</span>
                            <span class="service-page-rate-value">9.5%*</span>
                        </div>
                        <a href="{{url('/lease-rental-discounting')}}" class="service-page-btn-service">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="jfin-why-choose">
    <div class="container">

        <!-- Section Heading -->
        <div class="jfin-section-heading">
            <h5>Our Features</h5>

            <h2>
                Why Choose <span>JFinserv?</span>
            </h2>

            <!-- <p>
                We help you navigate the financing process with clarity and confidence.
                From exploring suitable financing options to understanding eligibility
                and documentation, our team supports you at every step.
            </p> -->
        </div>

        <!-- Feature Cards -->
        <div class="jfin-feature-grid">

            <!-- Card 1 -->
            <div class="jfin-feature-card">
                <div class="jfin-feature-icon">
                    <i class="fas fa-handshake"></i>
                </div>

                <h3>Financing Guidance</h3>

                <p>
                    Guidance in exploring suitable financing options
                    based on your needs and financial goals.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="jfin-feature-card">
                <div class="jfin-feature-icon">
                    <i class="fas fa-file-alt"></i>
                </div>

                <h3>Eligibility & Documentation</h3>

                <p>
                    Support in understanding eligibility criteria
                    and the documentation required for financing.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="jfin-feature-card">
                <div class="jfin-feature-icon">
                    <i class="fas fa-bolt"></i>
                </div>

                <h3>End-to-End Support</h3>

                <p>
                    Assistance throughout the financing process
                    to help you move forward with confidence.
                </p>
            </div>

            <!-- Card 4 -->
            <div class="jfin-feature-card">
                <div class="jfin-feature-icon">
                    <i class="fas fa-chart-line"></i>
                </div>

                <h3>Lending Partner Network</h3>

                <p>
                    Access financing options from relevant lending
                    partners to explore suitable solutions.
                </p>
            </div>

        </div>
    </div>
</section>


  <style>
/* Why Choose JFinserv Section */
.jfin-why-choose {
    padding: 20px 0 65px;
    background: #fff;
    font-family: inherit;
}

.jfin-why-choose .container {
    width: 100%;
    max-width: 1500px;
    margin: 0 auto;
    padding: 0 25px;
}

/* Heading */
.jfin-section-heading {
    text-align: center;
    max-width: 1100px;
    margin: 0 auto 50px;
}

.jfin-section-heading h5 {
    color: #295cab;
    font-size: 20px;
    font-weight: 700;
    margin: 0 0 14px;
}

.jfin-section-heading h2 {
    color: #295cab;
    font-size: 33px;
    font-weight: 700;
    line-height: 1.2;
    margin: 0 0 20px;
}

.jfin-section-heading h2 span {
    color: #00abeb;
}

.jfin-section-heading p {
    color: #555b65;
    font-size: 18px;
    line-height: 1.8;
    margin: 0 auto;
    max-width: 1100px;
}

/* Feature Grid */
.jfin-feature-grid {
    display: grid;
    grid-template-columns: repeat(4, minmax(0, 1fr));
    gap: 35px;
    max-width: 1450px;
    margin: 0 auto;
}

/* Feature Card */
.jfin-feature-card {
    background: #fff;
    border: 1px solid #c8dcff;
    border-radius: 25px;
    padding: 33px 25px 30px;
    min-height: 280px;
    box-shadow: 0 5px 12px rgba(41, 92, 171, 0.07);
    transition: transform 0.3s ease,
                box-shadow 0.3s ease,
                border-color 0.3s ease;
}

.jfin-feature-card:hover {
    transform: translateY(-5px);
    border-color: #00abeb;
    box-shadow: 0 10px 24px rgba(41, 92, 171, 0.12);
}

/* Feature Icon */
.jfin-feature-icon {
    width: 46px;
    height: 46px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #dce8fc;
    color: #295cab;
    border-radius: 5px;
    margin-bottom: 27px;
}

.jfin-feature-icon i {
    font-size: 23px;
}

/* Card Title */
.jfin-feature-card h3 {
    color: #343434;
    font-size: 24px;
    font-weight: 700;
    line-height: 1.35;
    margin: 0 0 10px;
}

/* Card Description */
.jfin-feature-card p {
    color: #50545c;
    font-size: 16px;
    line-height: 1.45;
    margin: 0;
}

/* Tablet */
@media (max-width: 1100px) {
    .jfin-feature-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 25px;
    }

    .jfin-section-heading h2 {
        font-size: 36px;
    }
}

/* Mobile */
@media (max-width: 576px) {
    .jfin-why-choose {
        padding: 35px 0 45px;
    }

    .jfin-why-choose .container {
        padding: 0 18px;
    }

    .jfin-section-heading {
        margin-bottom: 30px;
    }

    .jfin-section-heading h5 {
        font-size: 17px;
        margin-bottom: 10px;
    }

    .jfin-section-heading h2 {
        font-size: 29px;
        line-height: 1.3;
        margin-bottom: 14px;
    }

    .jfin-section-heading p {
        font-size: 15px;
        line-height: 1.7;
    }

    .jfin-feature-grid {
        grid-template-columns: 1fr;
        gap: 18px;
    }

    .jfin-feature-card {
        min-height: auto;
        padding: 25px 22px;
        border-radius: 20px;
    }

    .jfin-feature-icon {
        margin-bottom: 20px;
    }

    .jfin-feature-card h3 {
        font-size: 21px;
    }

    .jfin-feature-card p {
        font-size: 15px;
        line-height: 1.6;
    }
}
</style>

    <!-- CTA Section -->
    <section class="service-page-cta-section" id="apply">
        <div class="service-page-cta-content">
            <h2>Ready to Get Started?</h2>
            <p>Choose the loan that fits your needs and apply now. Our experts are here to guide you through every step of the process.</p>
            <a href="{{ route('authv3.login.form') }}" class="service-page-btn-cta">Apply for a Loan</a>
        </div>
    </section>
@include('dhara-jfin.layout.footer')


<script src="{{ asset('theme/dhara-jfin/js/chatbot.js') }}"></script>


