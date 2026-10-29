{{-- SEO META DATA FOR PROPERTIES PAGE --}}
@section('title', 'Properties in Pune | Residential & Commercial | Financial Services')
@section('meta_description', 'Find properties for sale in Pune, including residential and commercial properties in prime locations. Explore home loans, property financing and other loan solutions with JFinserve')
@section('meta_keywords', 'Properties in Pune, Properties for Sale in Pune, Residential Properties in Pune, Commercial Properties in Pune, Real Estate in Pune, Home Loans in Pune, Property Financing')

@section('content')
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

@include('dhara-jfin.layout.header')
<main>

    @php
    function formatPrice($price) {
        if ($price >= 10000000) return '₹' . round($price / 10000000, 2) . ' Cr';
        if ($price >= 100000) return '₹' . round($price / 100000, 2) . ' L';
        return '₹' . number_format($price);
    }
@endphp
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<body>
    <!-- Header -->
    <!-- <header>
        <nav>
            <div class="logo">
                <span>JCI</span> FINSERV
            </div>
            <ul class="nav-links">
                <li><a href="#about">About Us</a></li>
                <li><a href="#products">Products</a></li>
                <li><a href="#calculator">Calculator</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#properties">Properties</a></li>
                <li><a href="#resources">Resources</a></li>
            </ul>
            <button class="apply-btn">Apply Now</button>
        </nav>
    </header> -->

{{-- =========================================
     PROPERTY HERO + SEARCH
========================================= --}}

<section class="jfin-property-hero">

    {{-- Background image: index_page.jpg --}}
    <div class="jfin-property-background"></div>
    <div class="jfin-property-overlay"></div>

    {{-- Hero heading --}}
    <div class="jfin-property-heading">
        <h1>
            We Are Here To Help You Find
            <span>Your Dream House</span>
        </h1>
        <p>Search across prime locations and premium collections</p>
    </div>

    {{-- Search form --}}
    <div class="jfin-property-search">

        <form method="GET" action="{{ route('properties') }}"
              id="jfinPropertyForm">

            {{-- TOP FILTER TABS --}}
            <div class="jfin-property-tabs">

                <div class="jfin-tab-group">
                    <label class="jfin-tab">
                        <input type="radio" name="type" value="residential"
                            {{ request('type', 'residential') == 'residential' ? 'checked' : '' }}>
                        <span>Residential</span>
                    </label>

                    <label class="jfin-tab">
                        <input type="radio" name="type" value="commercial"
                            {{ request('type') == 'commercial' ? 'checked' : '' }}>
                        <span>Commercial</span>
                    </label>
                </div>

                <!--<div class="jfin-tab-group">-->
                    <!--<label class="jfin-tab">-->
                    <!--    <input type="radio" name="status" value="new"-->
                    <!--        {{ request('status', 'new') == 'new' ? 'checked' : '' }}>-->
                    <!--    <span>New property</span>-->
                    <!--</label>-->

                    <!--<label class="jfin-tab">-->
                    <!--    <input type="radio" name="status" value="resale"-->
                    <!--        {{ request('status') == 'resale' ? 'checked' : '' }}>-->
                    <!--    <span>Resale</span>-->
                    <!--</label>-->
                <!--</div>-->

                {{-- BHK / SQ FT --}}
                <div class="jfin-top-dropdown" id="jfinBhkField">
                    <select name="bhk" aria-label="BHK">
                        <option value="">BHK</option>
                        @foreach($data['bhks'] as $bhk)
                            <option value="{{ $bhk->bhk_name }}"
                                {{ request('bhk') == $bhk->bhk_name ? 'selected' : '' }}>
                                {{ $bhk->bhk_name }} BHK
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="jfin-top-dropdown" id="jfinSqftField"
                     style="{{ request('type') == 'commercial' ? '' : 'display:none;' }}">
                    <select name="sqft" aria-label="Square feet">
                        <option value="">SQ FT</option>
                        @foreach([500, 1000, 1500, 2000] as $sqft)
                            <option value="{{ $sqft }}"
                                {{ request('sqft') == (string)$sqft ? 'selected' : '' }}>
                                {{ $sqft }} SQ FT
                            </option>
                        @endforeach
                    </select>
                </div>

                {{-- Status dropdown-style control --}}
                <!--<div class="jfin-top-dropdown jfin-status-dropdown">-->
                <!--    <select id="jfinStatusSelect" aria-label="Property status">-->
                <!--        <option value="new" {{ request('status', 'new') == 'new' ? 'selected' : '' }}>New property</option>-->
                <!--        <option value="resale" {{ request('status') == 'resale' ? 'selected' : '' }}>Resale</option>-->
                <!--    </select>-->
                <!--</div>-->

            </div>

            {{-- MAIN DARK SEARCH BOX --}}
            <div class="jfin-property-search-box">

                {{-- City --}}
              
{{-- City --}}
<div class="jfin-search-field jfin-city-field">
    <label for="jfinCity">City</label>

    <div class="jfin-search-control jfin-city-control">
        <i class="fas fa-map-marker-alt" aria-hidden="true"></i>

        <input type="text"
               id="jfinCity"
               name="city"
               value="{{ request('city', 'Pune') }}"
               placeholder="Enter city name"
               aria-label="City"
               autocomplete="off">
    </div>
</div>


                {{-- Locality / Area --}}
                <div class="jfin-search-field jfin-locality-field">
                    <label for="jfinLocality">Locality or area</label>

                    <div class="jfin-search-control">
                        <input type="text"
                               id="jfinLocality"
                               name="search"
                               value="{{ request('search') }}"
                               placeholder="Search the Locality "
                               aria-label="Locality or area">
                    </div>
                </div>

                {{-- Dynamic Budget --}}
                <div class="jfin-search-field jfin-budget-field">
                    <label for="jfinBudget">Budget range</label>

                    <div class="jfin-search-control">
                        <select name="budget" id="jfinBudget">
                            <option value="">Budget Range</option>

                            @foreach($data['priceRanges'] as $range)
                                <option value="{{ $range->range_id }}"
                                    {{ request('budget') == $range->range_id ? 'selected' : '' }}>
                                    ₹{{ number_format($range->from_price) }}
                                    - ₹{{ number_format($range->to_price) }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                {{-- Search button --}}
                <div class="jfin-search-submit">
                    <button type="submit">Search</button>
                </div>

            </div>

        </form>
    </div>

</section>

{{-- =========================================
     RESPONSIVE BEHAVIOUR
========================================= --}}
<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('jfinPropertyForm');

    if (!form) return;

    const typeInputs = form.querySelectorAll('input[name="type"]');
    const bhkField = document.getElementById('jfinBhkField');
    const sqftField = document.getElementById('jfinSqftField');
    const statusRadios = form.querySelectorAll('input[name="status"]');
    const statusSelect = document.getElementById('jfinStatusSelect');

    function updatePropertyType() {
        const selected = form.querySelector('input[name="type"]:checked');
        const commercial = selected && selected.value === 'commercial';

        bhkField.style.display = commercial ? 'none' : '';
        sqftField.style.display = commercial ? '' : 'none';
    }

    typeInputs.forEach(function (input) {
        input.addEventListener('change', updatePropertyType);
    });

    // Keep the top status dropdown and status tabs synchronized.
    function syncStatusSelect() {
        const selected = form.querySelector('input[name="status"]:checked');
        if (selected) statusSelect.value = selected.value;
    }

    function syncStatusRadios() {
        statusRadios.forEach(function (radio) {
            radio.checked = radio.value === statusSelect.value;
        });
    }

    statusRadios.forEach(function (radio) {
        radio.addEventListener('change', syncStatusSelect);
    });

    statusSelect.addEventListener('change', syncStatusRadios);

    updatePropertyType();
    syncStatusSelect();
});
</script>
<style>

    ```css
/* Fix City input white background */
.jfin-property-hero .jfin-city-control {
    background: transparent !important;
    overflow: hidden !important;
}

.jfin-property-hero .jfin-city-control input {
    background: transparent !important;
    color: #ffffff !important;
    -webkit-text-fill-color: #ffffff !important;
    caret-color: #ffffff !important;
    border: none !important;
    outline: none !important;
    box-shadow: none !important;
    border-radius: 0 !important;
    appearance: none !important;
    -webkit-appearance: none !important;
}

/* Fix Chrome autofill white box */
.jfin-property-hero .jfin-city-control input:-webkit-autofill,
.jfin-property-hero .jfin-city-control input:-webkit-autofill:hover,
.jfin-property-hero .jfin-city-control input:-webkit-autofill:focus,
.jfin-property-hero .jfin-city-control input:-webkit-autofill:active {
    -webkit-text-fill-color: #ffffff !important;
    caret-color: #ffffff !important;
    -webkit-box-shadow: 0 0 0 100px #08051f inset !important;
    box-shadow: 0 0 0 100px #08051f inset !important;
    border-radius: 0 !important;
}

/* Keep placeholder visible */
.jfin-property-hero .jfin-city-control input::placeholder {
    color: rgba(255, 255, 255, 0.8) !important;
    -webkit-text-fill-color: rgba(255, 255, 255, 0.8) !important;
    opacity: 1 !important;
}
```css
/* Fix Locality / Area white input box */
.jfin-property-hero .jfin-locality-field .jfin-search-control {
    background: transparent !important;
    border: 1px solid rgba(255, 255, 255, 0.65) !important;
    border-radius: 6px !important;
    overflow: hidden !important;
}

.jfin-property-hero .jfin-locality-field input {
    width: 100% !important;
    height: 100% !important;
    background: transparent !important;
    color: #ffffff !important;
    -webkit-text-fill-color: #ffffff !important;
    caret-color: #ffffff !important;
    border: none !important;
    outline: none !important;
    box-shadow: none !important;
    border-radius: 0 !important;
    appearance: none !important;
    -webkit-appearance: none !important;
}

/* Prevent Chrome autofill from making the input white */
.jfin-property-hero .jfin-locality-field input:-webkit-autofill,
.jfin-property-hero .jfin-locality-field input:-webkit-autofill:hover,
.jfin-property-hero .jfin-locality-field input:-webkit-autofill:focus,
.jfin-property-hero .jfin-locality-field input:-webkit-autofill:active {
    -webkit-text-fill-color: #ffffff !important;
    caret-color: #ffffff !important;
    -webkit-box-shadow: 0 0 0 1000px #08051f inset !important;
    box-shadow: 0 0 0 1000px #08051f inset !important;
}

/* Placeholder text */
.jfin-property-hero .jfin-locality-field input::placeholder {
    color: rgba(255, 255, 255, 0.8) !important;
    -webkit-text-fill-color: rgba(255, 255, 255, 0.8) !important;
    opacity: 1 !important;
}
```
/* =========================================
   JFIN PROPERTY HERO
========================================= */

.jfin-property-hero,
.jfin-property-hero * {
    box-sizing: border-box;
}

.jfin-property-hero {
    position: relative;
    width: 100%;
    height: 610px;
    min-height: 610px;
    overflow: hidden;
    isolation: isolate;
    background: #234b80;
    font-family: inherit;
}

/* Background image */
.jfin-property-background {
    position: absolute;
    inset: 0;
    z-index: -2;

    background-image: url("{{ asset('theme/dhara-jfin/img/prop_banner.png') }}");
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
}

/* If using Laravel's public asset path instead, use:
.jfin-property-background {
    background-image: url("/theme/dhara-jfin/images/index_page.jpg");
}
*/

.jfin-property-overlay {
    position: absolute;
    inset: 0;
    z-index: -1;
    background: linear-gradient(
        180deg,
        rgba(16, 42, 78, 0.18) 0%,
        rgba(16, 42, 78, 0.02) 48%,
        rgba(10, 24, 42, 0.16) 100%
    );
    pointer-events: none;
}

/* =========================================
   HERO HEADING
========================================= */

.jfin-property-heading {
    position: relative;
    width: 100%;
    max-width: 700px;
    margin: 0 auto;
    padding: 137px 20px 0;
    text-align: center;
    color: #fff;
}

.jfin-property-heading h1 {
    margin: 0 0 11px;
    padding: 0;
    color: #fff;
    font-size: 31px;
    font-weight: 750;
    line-height: 1.17;
    letter-spacing: -0.55px;
    text-shadow: none;
}

.jfin-property-heading h1 span {
    display: block;
}

.jfin-property-heading p {
    margin: 0;
    padding: 0;
    color: #fff;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.5;
}

/* =========================================
   SEARCH AREA POSITION
========================================= */

.jfin-property-search {
    position: absolute;
    left: 50%;
    bottom: 47px;
    transform: translateX(-50%);
    width: calc(100% - 80px);
    max-width: 965px;
    z-index: 5;
}

.jfin-property-search form {
    width: 100%;
    margin: 0;
}

/* =========================================
   TOP TABS + DROPDOWNS
========================================= */

.jfin-property-tabs {
    display: flex;
    align-items: center;
    gap: 12px;
    width: 100%;
    margin-bottom: 10px;
    margin-left:288px;
}

.jfin-tab-group {
    display: flex;
    align-items: center;
    flex: 0 0 auto;
    height: 36px;
    padding: 3px;
    overflow: hidden;
    border-radius: 6px;
    background: #e9e9f6;
}

.jfin-tab {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    flex: 1 1 50%;
    min-width: 116px;
    height: 30px;
    margin: 0;
    padding: 0 12px;
    border-radius: 5px;
    color: #090725;
    font-size: 11px;
    font-weight: 500;
    white-space: nowrap;
    cursor: pointer;
}

.jfin-tab input {
    position: absolute;
    width: 1px;
    height: 1px;
    opacity: 0;
}

.jfin-tab span {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100%;
}

.jfin-tab input:checked + span {
    border-radius: 5px;
    background: #080624;
    color: #fff;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.12);
}

.jfin-tab input:focus-visible + span {
    outline: 2px solid #168bdb;
    outline-offset: 2px;
}

/* Dropdowns above the panel */
.jfin-top-dropdown {
    position: relative;
    flex: 0 0 115px;
    height: 36px;
    overflow: hidden;
    border-radius: 6px;
    background: #ededf7;
}

.jfin-top-dropdown select {
    display: block;
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0 24px 0 12px;
    border: 0;
    outline: none;
    appearance: none;
    -webkit-appearance: none;
    background: transparent;
    color: #080624;
    font-family: inherit;
    font-size: 11px;
    cursor: pointer;
}

.jfin-top-dropdown::after {
    content: "";
    position: absolute;
    top: 15px;
    right: 12px;
    width: 0;
    height: 0;
    border-left: 4px solid transparent;
    border-right: 4px solid transparent;
    border-top: 5px solid #17152f;
    pointer-events: none;
}

.jfin-top-dropdown select option {
    background: #fff;
    color: #111;
}

/* Hide duplicate status dropdown on desktop:
   screenshot uses status tabs in its place.
   Enable it on smaller screens if desired. */
.jfin-status-dropdown {
    display: none;
}

/* =========================================
   MAIN DARK NAVY PANEL
========================================= */

.jfin-property-search-box {
    display: grid;
    grid-template-columns: 1fr 1.45fr 1.45fr 83px;
    align-items: end;
    gap: 9px;
    width: 100%;
    padding: 28px 30px 29px;
    border: 0;
    border-radius: 19px;
    background: #08051f;
    box-shadow: 0 12px 28px rgba(0, 0, 0, 0.20);
}

.jfin-search-field {
    display: flex;
    flex-direction: column;
    gap: 5px;
    min-width: 0;
}

.jfin-search-field > label {
    display: block;
    margin: 0;
    padding: 0;
    color: #fff;
    font-size: 10px;
    font-weight: 400;
    line-height: 1.4;
}

.jfin-search-control {
    position: relative;
    display: flex;
    align-items: center;
    width: 100%;
    height: 38px;
    min-width: 0;
    overflow: hidden;
    border: 1px solid rgba(255, 255, 255, 0.52);
    border-radius: 6px;
    background: rgba(255, 255, 255, 0.035);
}

.jfin-search-control:focus-within {
    border-color: #fff;
}

.jfin-search-control input,
.jfin-search-control select {
    display: block;
    width: 100%;
    min-width: 0;
    height: 100%;
    margin: 0;
    padding: 0 12px;
    border: 0;
    outline: none;
    background: transparent;
    box-shadow: none;
    color: #fff;
    font-family: inherit;
    font-size: 11px;
}

.jfin-search-control input::placeholder {
    color: rgba(255, 255, 255, 0.80);
    opacity: 1;
}

.jfin-search-control select {
    padding-right: 25px;
    appearance: none;
    -webkit-appearance: none;
    cursor: pointer;
}

.jfin-search-control select option {
    background: #fff;
    color: #111;
}

/* City icon */
.jfin-city-control {
    padding-left: 11px;
}

.jfin-city-control > i:first-child {
    flex: 0 0 auto;
    color: #fff;
    font-size: 13px;
}

.jfin-city-control input {
    padding-left: 9px;
    padding-right: 0;
}

.jfin-city-control .jfin-down-icon {
    flex: 0 0 auto;
    margin: 0 12px;
    color: #fff;
    font-size: 10px;
}

/* Search button */
.jfin-search-submit {
    width: 100%;
}

.jfin-search-submit button {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 38px;
    margin: 0;
    padding: 0 10px;
    border: 1px solid #fff;
    border-radius: 6px;
    background: #fff;
    color: #080624;
    font-family: inherit;
    font-size: 11px;
    font-weight: 600;
    cursor: pointer;
    transition: background 0.2s ease;
}

.jfin-search-submit button:hover {
    background: #e9e9f6;
}

/* =========================================
   TABLET
========================================= */

@media (max-width: 1050px) {
    .jfin-property-search {
        width: calc(100% - 48px);
    }

    .jfin-property-tabs {
        gap: 8px;
    }

    .jfin-tab {
        min-width: 95px;
        padding: 0 8px;
    }

    .jfin-top-dropdown {
        flex-basis: 100px;
    }

    .jfin-property-search-box {
        padding: 24px;
        grid-template-columns: 1fr 1.2fr 1.2fr 80px;
        gap: 8px;
    }
}

@media (max-width: 850px) {
    .jfin-property-hero {
        height: 690px;
        min-height: 690px;
    }

    .jfin-property-heading {
        padding-top: 100px;
    }

    .jfin-property-search {
        bottom: 24px;
        width: calc(100% - 40px);
        max-width: 650px;
    }

    .jfin-property-tabs {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 8px;
    }

    .jfin-tab-group {
        width: 100%;
        min-width: 0;
    }

    .jfin-tab {
        min-width: 0;
        padding: 0 5px;
        font-size: 10px;
    }

    .jfin-top-dropdown {
        flex: 1 1 0;
        min-width: 0;
    }

    .jfin-property-search-box {
        grid-template-columns: 1fr 1fr;
        gap: 12px;
        padding: 22px;
    }

    .jfin-search-submit {
        grid-column: 1 / -1;
    }

    .jfin-search-submit button {
        height: 42px;
    }
}

/* =========================================
   MOBILE
========================================= */

@media (max-width: 600px) {
    .jfin-property-hero {
        height: auto;
        min-height: 720px;
        overflow: hidden;
    }

    .jfin-property-background {
        background-position: center center;
    }
        .jfin-property-tabs {
            margin-left: 1px;
        }

    .jfin-property-overlay {
        background: linear-gradient(
            180deg,
            rgba(10, 30, 65, 0.24),
            rgba(10, 22, 44, 0.38)
        );
    }

    .jfin-property-heading {
        padding: 70px 16px 0;
        max-width: 100%;
    }

    .jfin-property-heading h1 {
        margin-bottom: 10px;
        font-size: clamp(23px, 6vw, 29px);
        line-height: 1.23;
        letter-spacing: -0.3px;
    }

    .jfin-property-heading p {
        max-width: 340px;
        margin: 0 auto;
        font-size: 12px;
        line-height: 1.55;
    }

    .jfin-property-search {
        left: 0;
        right: 0;
        bottom: 16px;
        width: 100%;
        max-width: none;
        padding: 0 12px;
        transform: none;
    }

    .jfin-property-tabs {
        display: grid;
        grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
        gap: 7px;
        margin-bottom: 8px;
    }

    .jfin-tab-group {
        height: 36px;
        padding: 3px;
    }

    .jfin-tab {
        height: 30px;
        font-size: 9px;
    }

    .jfin-top-dropdown {
        height: 36px;
        flex-basis: auto;
    }

    .jfin-top-dropdown select {
        padding-left: 10px;
        font-size: 10px;
    }

    .jfin-property-search-box {
        display: grid;
        grid-template-columns: minmax(0, 1fr);
        gap: 10px;
        padding: 18px 15px;
        border-radius: 15px;
    }

    .jfin-search-field > label {
        font-size: 11px;
    }

    .jfin-search-control {
        height: 41px;
    }

    .jfin-search-control input,
    .jfin-search-control select {
        font-size: 12px;
    }

    .jfin-search-submit button {
        height: 42px;
        font-size: 12px;
    }
}

/* Small iPhones */
@media (max-width: 380px) {
    .jfin-property-hero {
        min-height: 730px;
    }

    .jfin-property-heading {
        padding-top: 58px;
    }

    .jfin-property-heading h1 {
        font-size: 22px;
    }

    .jfin-property-search {
        padding: 0 9px;
        bottom: 12px;
    }

    .jfin-property-search-box {
        padding: 15px 12px;
        gap: 9px;
    }

    .jfin-tab {
        font-size: 8px;
    }
}
</style>
<!-- =========================================================
     PROPERTIES BY LOCALITIES
========================================================= -->

@if(count($data['featuredProperties']) > 0)

<section class="locality-section">

    <!-- ================= HEADER ================= -->

    <div class="locality-header" style="margin-top:50px">
        <h2>Properties by Localities</h2>
        <p>Explore prime properties based on your location</p>
    </div>


    <!-- ================= LOCALITY CARDS ================= -->

    <div class="locality-container">

        @foreach($data['selectedLocalities'] as $localityIndex => $localityData)

            @php

                /*
                |--------------------------------------------------------------------------
                | Locality Name
                |--------------------------------------------------------------------------
                */

                $localityName = $localityData['locality']
                    ?? $localityData['name']
                    ?? 'Locality';

                $cityName = $localityData['city']
                    ?? '';


                /*
                |--------------------------------------------------------------------------
                | Properties
                |--------------------------------------------------------------------------
                */

                $properties = collect(
                    $localityData['properties'] ?? []
                )->values();


                /*
                |--------------------------------------------------------------------------
                | If no properties are found, skip card
                |--------------------------------------------------------------------------
                */

            @endphp


            @if($properties->count() > 0)

                <div
                    class="locality-card"
                    data-locality="{{ $localityIndex }}"
                >

                    <!-- ================= LOCALITY TITLE ================= -->

                    <h3 class="locality-title">

                        {{ $localityName }}

                        @if($cityName)
                            , {{ $cityName }}
                        @endif

                    </h3>


                    <!-- =================================================
                         PROPERTY IMAGE STACK
                    ================================================== -->

                    <div class="property-stack">


                        <!-- =============================================
                             BACK IMAGE 2
                        ============================================== -->

                        <div class="property-layer layer-back-2">

                            <img
                                class="property-img-back-2"
                                src=""
                                alt="Property"
                            >

                        </div>


                        <!-- =============================================
                             BACK IMAGE 1
                        ============================================== -->

                        <div class="property-layer layer-back-1">

                            <img
                                class="property-img-back-1"
                                src=""
                                alt="Property"
                            >

                        </div>


                        <!-- =============================================
                             MAIN PROPERTY CARD
                        ============================================== -->

                        <div class="property-layer layer-main">


                            <!-- MAIN IMAGE -->

                            <div class="property-image-wrapper">

                                <img
                                    class="property-img-main"
                                    src=""
                                    alt="Property"
                                >

                            </div>


                            <!-- ================= PROPERTY INFO ================= -->

                            <div class="property-info">


                                <!-- PROPERTY NAME -->

                                <div class="property-name-box">

                                    <span class="building-icon">
                                        <i class="fas fa-building"></i>
                                    </span>

                                    <span class="property-name">
                                        Property
                                    </span>

                                </div>


                                <!-- BUILDER -->

                                <div class="builder-box">

                                    <span class="project-by">
                                        Project by
                                    </span>

                                    <img
                                        class="builder-logo"
                                        src=""
                                        alt="Builder"
                                    >

                                    <span class="builder-name"></span>

                                </div>

                            </div>

                        </div>

                    </div>


                    <!-- ================= EXPLORE ================= -->

                    <div class="explore-wrapper">

                        <a
                            href="#"
                            class="explore-link"
                        >

                            <span>Explore</span>

                            <span class="explore-arrow">
                                →
                            </span>

                        </a>

                    </div>


                    <!-- =================================================
                         HIDDEN PROPERTY DATA
                         JavaScript uses this data for automatic shuffle
                    ================================================== -->

                    <div
                        class="property-data"
                        style="display:none;"
                    >

                        @foreach($properties as $property)

                            @php

                                /*
                                |--------------------------------------------------------------------------
                                | IMAGE
                                |--------------------------------------------------------------------------
                                */

                                $image = $property->image
                                    ?? $property->featured_image
                                    ?? $property->property_image
                                    ?? $property->thumbnail
                                    ?? asset('frontend/images/no-image.jpg');


                                /*
                                |--------------------------------------------------------------------------
                                | PROPERTY NAME
                                |--------------------------------------------------------------------------
                                */

                                $propertyTitle = $property->title
                                    ?? $property->name
                                    ?? $property->property_name
                                    ?? 'Property';


                                /*
                                |--------------------------------------------------------------------------
                                | BUILDER NAME
                                |--------------------------------------------------------------------------
                                */

                                $builderName = $property->builder_name
                                    ?? $property->developer_name
                                    ?? $property->builder
                                    ?? '';


                                /*
                                |--------------------------------------------------------------------------
                                | BUILDER LOGO
                                |--------------------------------------------------------------------------
                                */

                                $builderLogo = $property->builder_logo
                                    ?? $property->developer_logo
                                    ?? $property->logo
                                    ?? '';


                                /*
                                |--------------------------------------------------------------------------
                                | PROPERTY URL
                                |--------------------------------------------------------------------------
                                */

                               $propertyUrl = route('property.slug', [
    'slug' => $property->slug
]);

                            @endphp


                            <div
                                class="property-item"

                                data-image="{{ $image }}"

                                data-title="{{ $propertyTitle }}"

                                data-builder="{{ $builderName }}"

                                data-builder-logo="{{ $builderLogo }}"

                                data-url="{{ $propertyUrl }}"
                            >
                            </div>

                        @endforeach

                    </div>

                </div>

            @endif

        @endforeach

    </div>

</section>

@endif









<style>



.locality-section {

    width: 100%;

    padding: 0 20px 45px;

    background: #ffffff;

    overflow: hidden;
}


/* =========================================================
   HEADER
========================================================= */

.locality-header {

    text-align: center;

    margin-bottom: 45px;
}


.locality-header h2 {

    margin: 0;

    color: #444444;

    font-size: 30px;

    font-weight: 700;

    line-height: 1.2;
}


.locality-header p {

    margin: 8px 0 0;

    color: #2878ed;

    font-size: 19px;

    font-weight: 400;
}


/* =========================================================
   LOCALITY CONTAINER
========================================================= */

.locality-container {

    width: 100%;

    display: grid;

    grid-template-columns:
        repeat(3, minmax(0, 1fr));

    gap: 24px;

    max-width: 1280px;

    margin: 0 auto;
}


/* =========================================================
   LOCALITY CARD
========================================================= */

.locality-card {

    position: relative;

    height: 455px;

    padding: 25px 26px 20px;

    background: #ffffff;

    border-radius: 17px;

    border: 1px solid #edf3fb;

    box-shadow:
        0 5px 22px rgba(40, 120, 237, 0.14);

    overflow: visible;
}


/* =========================================================
   LOCALITY TITLE
========================================================= */

.locality-title {

    position: relative;

    z-index: 20;

    margin: 0 0 25px;

    color: #3d3d3d;

    font-size: 21px;

    font-weight: 500;

    line-height: 1.3;
}


/* =========================================================
   PROPERTY STACK
========================================================= */

.property-stack {

    position: relative;

    width: 100%;

    height: 280px;

    margin-top: 5px;

    perspective: 1000px;
}
```css
/* ============================================
   FINAL FIX: FEATURED + ALL PROPERTIES ALIGNMENT
   Add at the END of your existing CSS
============================================ */

/* Keep page content inside the same centered width */
main {
    width: 100%;
    max-width: 100%;
    overflow-x: clip;
}

main > .container,
main .container {
    width: 100% !important;
    max-width: 1320px !important;
    margin-left: auto !important;
    margin-right: auto !important;
    padding-left: 24px !important;
    padding-right: 24px !important;
    box-sizing: border-box !important;
}

/* Featured and All Properties section */
main section.container {
    width: 100% !important;
    max-width: 1320px !important;
    margin-left: auto !important;
    margin-right: auto !important;
    box-sizing: border-box !important;
}

/* Both property grids should use equal columns */
main .properties-grid {
    display: grid !important;
    grid-template-columns: repeat(3, minmax(0, 1fr)) !important;
    gap: 24px !important;
    width: 100% !important;
    max-width: 100% !important;
    margin-left: auto !important;
    margin-right: auto !important;
    padding: 0 !important;
    overflow: visible !important;
    box-sizing: border-box !important;
}

/* Cards must fit their grid column */
main .properties-grid .property-card {
    width: 100% !important;
    min-width: 0 !important;
    max-width: 100% !important;
    margin: 0 !important;
    box-sizing: border-box !important;
}

/* Center section headings consistently */
main .section-header {
    width: 100% !important;
    max-width: 100% !important;
    margin-left: auto !important;
    margin-right: auto !important;
    text-align: center !important;
    box-sizing: border-box !important;
}

/* Featured extra cards remain hidden until Load More */
main .featured-extra,
main .extra-property {
    display: none;
}

/* Localities section alignment */
main .locality-section {
    width: 100% !important;
    max-width: 100% !important;
    padding: 0 24px 45px !important;
    margin: 0 auto !important;
    box-sizing: border-box !important;
}

main .locality-container {
    width: 100% !important;
    max-width: 1272px !important;
    margin: 0 auto !important;
    display: grid !important;
    grid-template-columns: repeat(3, minmax(0, 1fr)) !important;
    gap: 24px !important;
    box-sizing: border-box !important;
}

main .locality-card {
    width: 100% !important;
    min-width: 0 !important;
    box-sizing: border-box !important;
}

/* Tablet */
@media (min-width: 601px) and (max-width: 991px) {
    main .properties-grid,
    main .locality-container {
        grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
        gap: 20px !important;
    }
}

/* Mobile */
@media (max-width: 600px) {
    main > .container,
    main .container,
    main section.container {
        padding-left: 15px !important;
        padding-right: 15px !important;
    }

    main .properties-grid,
    main .locality-container {
        grid-template-columns: minmax(0, 1fr) !important;
        gap: 18px !important;
    }

    main .locality-section {
        padding-left: 15px !important;
        padding-right: 15px !important;
    }

    main .properties-grid .property-card {
        width: 100% !important;
        min-width: 0 !important;
    }
}


/* =========================================================
   ALL PROPERTY LAYERS
========================================================= */

.property-layer {

    position: absolute;

    left: 2px;

    top: 0;

    width: calc(100% - 4px);

    height: 255px;

    border-radius: 15px;

    background: #ffffff;

    overflow: hidden;

    box-shadow:
        0 5px 12px rgba(0, 0, 0, 0.13);

    transition:
        transform 0.7s cubic-bezier(.4,0,.2,1),
        opacity 0.7s ease;

}


/* =========================================================
   BACK CARD 2
========================================================= */

.layer-back-2 {

    z-index: 1;

    transform:

        translate(
            9px,
            13px
        )

        rotate(8deg);

    opacity: 0.95;
}


/* =========================================================
   BACK CARD 1
========================================================= */

.layer-back-1 {

    z-index: 2;

    transform:

        translate(
            -6px,
            8px
        )

        rotate(-5deg);

    opacity: 0.98;
}


/* =========================================================
   MAIN CARD
========================================================= */

.layer-main {

    z-index: 5;

    transform:

        translate(
            0,
            0
        )

        rotate(0deg);

    background: #ffffff;
}


/* =========================================================
   BACK IMAGES
========================================================= */

.layer-back-1 img,
.layer-back-2 img {

    width: 100%;

    height: 100%;

    object-fit: cover;

    display: block;
}


/* =========================================================
   MAIN IMAGE
========================================================= */

.property-image-wrapper {

    width: 100%;

    height: 207px;

    overflow: hidden;

    background: #eeeeee;
}


.property-img-main {

    width: 100%;

    height: 100%;

    object-fit: cover;

    display: block;

    transition:
        opacity .35s ease,
        transform .6s ease;
}


/* =========================================================
   PROPERTY INFO
========================================================= */

.property-info {

    height: 55px;

    width: 100%;

    display: flex;

    align-items: center;

    justify-content: space-between;

    padding: 0 11px;

    background: #ffffff;

    border-radius:
        0 0 15px 15px;
}


/* =========================================================
   PROPERTY NAME
========================================================= */

.property-name-box {

    display: flex;

    align-items: center;

    gap: 9px;

    min-width: 0;
}


.building-icon {

    width: 21px;

    height: 21px;

    display: flex;

    align-items: center;

    justify-content: center;

    color: #444444;

    font-size: 16px;

    flex-shrink: 0;
}


.property-name {

    color: #3e3e3e;

    font-size: 17px;

    font-weight: 500;

    white-space: nowrap;

    overflow: hidden;

    text-overflow: ellipsis;
}


/* =========================================================
   BUILDER BOX
========================================================= */

.builder-box {

    display: flex;

    align-items: center;

    justify-content: flex-end;

    gap: 5px;

    white-space: nowrap;

    text-align: right;
}


.project-by {

    color: #777777;

    font-size: 8px;

    font-weight: 400;
}


.builder-logo {

    max-width: 68px;

    max-height: 25px;

    object-fit: contain;

    display: block;
}


.builder-name {

    color: #555555;

    font-size: 10px;

    font-weight: 600;
}


/* =========================================================
   EXPLORE
========================================================= */

.explore-wrapper {

    position: absolute;

    left: 0;

    right: 0;

    bottom: 24px;

    text-align: center;
}


.explore-link {

    display: inline-flex;

    align-items: center;

    gap: 9px;

    text-decoration: none;

    color: #2878ed;

    font-size: 16px;

    font-weight: 500;

    transition: .3s ease;
}


.explore-arrow {

    font-size: 23px;

    line-height: 15px;

    transition: transform .3s ease;
}


.explore-link:hover {

    color: #1764d4;
}


.explore-link:hover
.explore-arrow {

    transform:
        translateX(5px);
}


/* =========================================================
   SHUFFLE ANIMATION
========================================================= */

.locality-card.is-changing
.layer-main {

    transform:
        translateX(-3px)
        rotate(-1deg);
}


.locality-card.is-changing
.layer-back-1 {

    transform:
        translate(
            7px,
            10px
        )
        rotate(6deg);
}


.locality-card.is-changing
.layer-back-2 {

    transform:
        translate(
            -7px,
            14px
        )
        rotate(-7deg);
}


/* =========================================================
   IMAGE FADE
========================================================= */

.property-img-main.fade-out {

    opacity: 0;

    transform:
        scale(1.03);
}


/* =========================================================
   HOVER EFFECT
========================================================= */




/* =========================================================
   TABLET
========================================================= */

@media (max-width: 1100px) {

    .locality-container {

        grid-template-columns:
            repeat(2, minmax(0, 1fr));

    }

}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 767px) {

    .locality-section {

        padding:
            0
            15px
            35px;
    }


    .locality-header {

        margin-bottom: 30px;
    }


    .locality-header h2 {

        font-size: 25px;
    }


    .locality-header p {

        font-size: 15px;
    }


    .locality-container {

        grid-template-columns:
            1fr;

        gap: 20px;

        max-width: 450px;
    }


    .locality-card {

        height: 430px;

        padding:
            22px
            20px
            20px;
    }


    .locality-title {

        font-size: 19px;

        margin-bottom: 23px;
    }


    .property-stack {

        height: 260px;
    }


    .property-layer {

        height: 235px;
    }


    .property-image-wrapper {

        height: 190px;
    }


    .property-name {

        font-size: 15px;
    }


    .builder-logo {

        max-width: 58px;

        max-height: 23px;
    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media (max-width: 450px) {

    .locality-card {

        height: 415px;
    }


    .property-stack {

        height: 245px;
    }


    .property-layer {

        height: 220px;
    }


    .property-image-wrapper {

        height: 175px;
    }


    .property-info {

        padding:
            0 8px;
    }


    .property-name {

        font-size: 14px;
    }


    .project-by {

        font-size: 7px;
    }


    .builder-logo {

        max-width: 52px;
    }


    .explore-wrapper {

        bottom: 18px;
    }

}

</style>
<script>

document.addEventListener(
    "DOMContentLoaded",
    function () {


        /* =====================================================
           GET ALL LOCALITY CARDS
        ===================================================== */

        const localityCards =
            document.querySelectorAll(
                ".locality-card"
            );


        if (!localityCards.length) {

            return;

        }


        /* =====================================================
           INITIALIZE EACH CARD
        ===================================================== */

        localityCards.forEach(
            function (card, cardIndex) {


                /* =============================================
                   GET PROPERTY DATA
                ============================================= */

                const propertyItems =
                    card.querySelectorAll(
                        ".property-item"
                    );


                if (!propertyItems.length) {

                    return;

                }


                /* =============================================
                   GET HTML ELEMENTS
                ============================================= */

                const mainImage =
                    card.querySelector(
                        ".property-img-main"
                    );


                const backImage1 =
                    card.querySelector(
                        ".property-img-back-1"
                    );


                const backImage2 =
                    card.querySelector(
                        ".property-img-back-2"
                    );


                const propertyName =
                    card.querySelector(
                        ".property-name"
                    );


                const builderLogo =
                    card.querySelector(
                        ".builder-logo"
                    );


                const builderName =
                    card.querySelector(
                        ".builder-name"
                    );


                const exploreLink =
                    card.querySelector(
                        ".explore-link"
                    );


                /* =============================================
                   CONVERT PROPERTY DATA TO ARRAY
                ============================================= */

                const properties =
                    Array.from(
                        propertyItems
                    ).map(
                        function (item) {

                            return {

                                image:
                                    item.dataset.image
                                    || "",

                                title:
                                    item.dataset.title
                                    || "Property",

                                builder:
                                    item.dataset.builder
                                    || "",

                                builderLogo:
                                    item.dataset.builderLogo
                                    || "",

                                url:
                                    item.dataset.url
                                    || "#"

                            };

                        }
                    );


                /* =============================================
                   IF ONLY ONE IMAGE
                ============================================= */

                if (properties.length === 1) {

                    setProperty(
                        properties[0],
                        mainImage,
                        propertyName,
                        builderLogo,
                        builderName,
                        exploreLink
                    );

                    return;

                }


                /* =============================================
                   CURRENT IMAGE INDEX
                ============================================= */

                let currentIndex = 0;


                /* =============================================
                   SHOW FIRST IMAGE
                ============================================= */

                function showInitialImages() {

                    const current =
                        properties[
                            currentIndex
                        ];


                    const next =
                        properties[
                            (currentIndex + 1)
                            %
                            properties.length
                        ];


                    const next2 =
                        properties[
                            (currentIndex + 2)
                            %
                            properties.length
                        ];


                    /* MAIN */

                    setProperty(
                        current,
                        mainImage,
                        propertyName,
                        builderLogo,
                        builderName,
                        exploreLink
                    );


                    /* BACK 1 */

                    backImage1.src =
                        next.image;


                    /* BACK 2 */

                    backImage2.src =
                        next2.image;

                }


                /* =============================================
                   CHANGE PROPERTY
                ============================================= */

                function changeProperty() {


                    /*
                    ---------------------------------------------
                    ADD ANIMATION CLASS
                    ---------------------------------------------
                    */

                    card.classList.add(
                        "is-changing"
                    );


                    /*
                    ---------------------------------------------
                    FADE MAIN IMAGE
                    ---------------------------------------------
                    */

                    mainImage.classList.add(
                        "fade-out"
                    );


                    /*
                    ---------------------------------------------
                    WAIT FOR ANIMATION
                    ---------------------------------------------
                    */

                    setTimeout(
                        function () {


                            /*
                            -------------------------------------
                            NEXT IMAGE
                            -------------------------------------
                            */

                            currentIndex++;

                            if (
                                currentIndex >=
                                properties.length
                            ) {

                                currentIndex = 0;

                            }


                            /*
                            -------------------------------------
                            CURRENT
                            -------------------------------------
                            */

                            const current =
                                properties[
                                    currentIndex
                                ];


                            /*
                            -------------------------------------
                            NEXT
                            -------------------------------------
                            */

                            const next =
                                properties[
                                    (currentIndex + 1)
                                    %
                                    properties.length
                                ];


                            /*
                            -------------------------------------
                            NEXT + 2
                            -------------------------------------
                            */

                            const next2 =
                                properties[
                                    (currentIndex + 2)
                                    %
                                    properties.length
                                ];


                            /*
                            -------------------------------------
                            UPDATE MAIN
                            -------------------------------------
                            */

                            setProperty(
                                current,
                                mainImage,
                                propertyName,
                                builderLogo,
                                builderName,
                                exploreLink
                            );


                            /*
                            -------------------------------------
                            UPDATE BACK IMAGES
                            -------------------------------------
                            */

                            backImage1.src =
                                next.image;


                            backImage2.src =
                                next2.image;


                            /*
                            -------------------------------------
                            REMOVE FADE
                            -------------------------------------
                            */

                            setTimeout(
                                function () {

                                    mainImage.classList.remove(
                                        "fade-out"
                                    );

                                },
                                100
                            );


                            /*
                            -------------------------------------
                            REMOVE CARD ANIMATION
                            -------------------------------------
                            */

                            setTimeout(
                                function () {

                                    card.classList.remove(
                                        "is-changing"
                                    );

                                },
                                500
                            );


                        },
                        350
                    );

                }


                /* =============================================
                   INITIAL DISPLAY
                ============================================= */

                showInitialImages();


                /* =============================================
                   AUTOMATIC SHUFFLE
                   
                   3000 = 3 seconds
                ============================================= */

                let intervalTime =
                    3000 + (cardIndex * 500);


                let autoShuffle =
                    setInterval(
                        changeProperty,
                        intervalTime
                    );


                /* =============================================
                   PAUSE WHEN MOUSE IS OVER CARD
                ============================================= */

                card.addEventListener(
                    "mouseenter",
                    function () {

                        clearInterval(
                            autoShuffle
                        );

                    }
                );


                /* =============================================
                   RESUME WHEN MOUSE LEAVES
                ============================================= */

                card.addEventListener(
                    "mouseleave",
                    function () {

                        autoShuffle =
                            setInterval(
                                changeProperty,
                                intervalTime
                            );

                    }
                );

            }
        );


        /* =====================================================
           SET PROPERTY DATA
        ===================================================== */

        function setProperty(
            property,
            mainImage,
            propertyName,
            builderLogo,
            builderName,
            exploreLink
        ) {


            /* =============================================
               MAIN IMAGE
            ============================================= */

            if (property.image) {

                mainImage.src =
                    property.image;

            }


            /* =============================================
               ALT
            ============================================= */

            mainImage.alt =
                property.title;


            /* =============================================
               PROPERTY NAME
            ============================================= */

            propertyName.textContent =
                property.title;


            /* =============================================
               BUILDER LOGO
            ============================================= */

            if (property.builderLogo) {

                builderLogo.src =
                    property.builderLogo;

                builderLogo.style.display =
                    "block";

                builderName.style.display =
                    "none";

            }

            else {

                builderLogo.style.display =
                    "none";

                builderName.style.display =
                    "inline";

                builderName.textContent =
                    property.builder;

            }


            /* =============================================
               EXPLORE URL
            ============================================= */

            if (property.url) {

                exploreLink.href =
                    property.url;

            }

        }

    }
);

</script>

 <style>
        :root {
            --primary-blue: #1877F2; /* Similar to the design blue */
            --dark-text: #1c1c1c;
            --light-gray: #f5f5f5;
            --border-color: #e0e0e0;
            --text-gray: #666;
            --bg-blue-light: #eef6ff;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #f9f9f9;
            padding: 40px 20px;
            color: var(--dark-text);
        }

        /* --- Header Section --- */
        .section-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .section-header h2 {
            font-size: 32px;
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
        }

        .section-header p {
            color: var(--primary-blue);
            font-size: 16px;
            font-weight: 500;
        }

        /* --- Grid Layout --- */
        .properties-grid {
            display: flex;
            justify-content: center;
            gap: 24px;
            max-width: 1400px;
            margin: 0 auto;
            flex-wrap: wrap;
        }

        /* --- Card Component --- */
        .property-card {
            background: #fff;
            border-radius: 12px;
            border: 1px solid var(--border-color);
            width: 380px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .property-card:hover {
            box-shadow: 0 10px 20px rgba(0,0,0,0.05);
        }

        /* Image Area */
        .card-image-wrapper {
            position: relative;
            height: 220px;
            width: 100%;
        }

        .card-image-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Badges over image */
        .badge-tag {
            position: absolute;
            top: 12px;
            left: 12px;
            background-color: var(--primary-blue);
            color: #fff;
            font-size: 10px;
            font-weight: 600;
            padding: 4px 8px;
            border-radius: 4px;
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .badge-approval {
            position: absolute;
            top: 12px;
            right: 12px;
            background-color: rgba(255, 255, 255, 0.9);
            color: #333;
            font-size: 10px;
            font-weight: 500;
            padding: 4px 8px;
            border-radius: 4px;
            display: flex;
            align-items: center;
            gap: 4px;
        }
        
        .approval-icon {
            color: #d32f2f; /* Red icon */
            font-weight: bold;
        }

        /* Card Content */
        .card-content {
            padding: 16px;
        }

        /* Price Row */
        .price-row {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 12px;
        }

        .price-main {
            font-size: 20px;
            font-weight: 700;
            color: #000;
        }

        .price-sub {
            text-align: right;
            font-size: 10px;
            color: var(--text-gray);
        }
        
        .price-sub span {
            display: block;
            font-size: 12px;
            color: #333;
            font-weight: 600;
        }

        /* Title & Location */
        .property-title {
            display: flex;
            align-items: center;
            gap: 8px;
            font-weight: 700;
            font-size: 16px;
            margin-bottom: 4px;
        }

        .location-row {
            display: flex;
            justify-content: space-between;
            font-size: 12px;
            color: var(--text-gray);
            margin-bottom: 16px;
        }

        .location-text {
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .developer-tag {
            font-size: 10px;
            display: flex;
            align-items: center;
            gap: 4px;
        }

        /* Config Boxes (BHK, Sqft, P) */
        .config-row {
            display: flex;
            gap: 8px;
            margin-bottom: 12px;
        }

        .config-box {
            flex: 1;
            border: 1px solid var(--border-color);
            border-radius: 6px;
            padding: 8px;
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 10px;
            font-weight: 500;
        }

        .config-box svg {
            width: 16px;
            height: 16px;
            fill: var(--primary-blue);
        }
        
        .config-text strong {
            display: block;
            font-size: 11px;
            color: #333;
        }
        .config-text span {
            color: var(--text-gray);
            font-size: 9px;
        }

        /* Amenities Icons */
        .amenities-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 12px;
            padding: 0 4px;
        }

        .amenity-item {
            display: flex;
            align-items: center;
            gap: 4px;
            font-size: 10px;
            color: #444;
        }
        
        /* Blue tint for amenity icons */
        .amenity-item svg {
            width: 12px;
            height: 12px;
            fill: var(--primary-blue);
        }

        .see-all {
            font-size: 10px;
            color: var(--primary-blue);
            text-decoration: none;
            display: block;
            margin-bottom: 16px;
        }

        /* Action Buttons */
        .action-buttons {
            display: flex;
            gap: 10px;
            border-top: 1px solid #f0f0f0;
            padding-top: 16px;
        }

        .btn {
            flex: 1;
            padding: 10px;
            border-radius: 6px;
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
            text-align: center;
            transition: background 0.2s;
            text-decoration: none;
            display: inline-block;
        }

        .btn-outline {
            background: #fff;
            border: 1px solid var(--primary-blue);
            color: var(--primary-blue);
        }

        .btn-outline:hover {
            background: #f0f7ff;
        }

        /* Load More Button */
        .load-more-container {
            text-align: center;
            margin-top: 30px;
        }
        
        .btn-load-more {
            background: var(--primary-blue);
            color: #fff;
            border: none;
            padding: 12px 30px;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
        }

        /* SVG Helper Classes */
        .icon-svg {
            width: 14px;
            height: 14px;
            fill: currentColor;
        }

        /* Hide extra featured items initially */
        .featured-extra {
            display: none;
        }
    </style>


    <!-- Featured Properties Dynamic Section -->
    @if(!request()->filled('search') 
        && !request()->filled('bhk') 
        && !request()->filled('budget') 
        && !request()->filled('type') 
        && count($data['featuredProperties']) > 0)

    <section class="container">
        <!-- Header -->
        <div class="section-header">
            <h2>Featured Properties</h2>
            <p>Explore the most exclusive properties</p>
        </div>

        <!-- Cards Container -->
        <div class="properties-grid">
            
            @foreach($data['featuredProperties'] as $index => $v)

                @php
                    $img = $v->image 
                        ? env('baseURL') . '/' . $v->image 
                        : asset('theme/frontend/img/default.jpg');

                    $title = $v->title;
                    $builder = $v->builder_name;
                    $location = ($v->localities ?? '') . ', ' . ($v->city ?? '');
                    $bhk = $v->select_bhk;
                    $area = $v->area;
                    $price = "" . formatPrice($v->from_price) . " - " . formatPrice($v->to_price);
                @endphp

                <!-- Card Item (Dynamic) -->
                <div class="property-card {{ $index >= 3 ? 'featured-extra' : '' }}">
                    <div class="card-image-wrapper">
                        <!-- Dynamic Image -->
                        <img src="{{ $img }}" alt="{{ $title }}" loading="lazy">
                        
                        <!-- Static Badges (Design) -->
                        <div class="badge-tag">
                            <svg class="icon-svg" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                            Featured
                        </div>
                        <div class="badge-approval">
                            Approved by <span class="approval-icon">⛔</span>
                        </div>
                    </div>

                    <div class="card-content">
                        <!-- Dynamic Price -->
                        <div class="price-row">
                            <div class="price-main">{{ $price }}</div>
                            <div class="price-sub">From <span>₹14,400/sqft</span></div>
                        </div>

                        <!-- Dynamic Title -->
                        <div class="property-title">
                            <svg class="icon-svg" style="fill:#555;" viewBox="0 0 24 24"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg>
                            {{ $title }}
                        </div>

                        <!-- Dynamic Location & Builder -->
                        <div class="location-row">
                            <div class="location-text">
                                <svg class="icon-svg" style="fill:#888;" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                                {{ $location }}
                            </div>
                            <div class="developer-tag">
                                By {{ $builder }}
                            </div>
                        </div>

                        <!-- Dynamic Configs (BHK, Area) -->
                        <div class="config-row">
                            <div class="config-box">
                                <svg viewBox="0 0 24 24"><path d="M3 3h18v18H3V3zm2 2v14h14V5H5zm2 2h10v2H7V7zm0 4h10v2H7v-2z"/></svg>
                                <div class="config-text">
                                    <strong>{{ $bhk }} BHK</strong>
                                </div>
                            </div>
                            <div class="config-box">
                                <svg viewBox="0 0 24 24"><path d="M7 14H5v5h5v-2H7v-3zm-2-4h2V7h3V5H5v5zm12 7h-3v2h5v-5h-2v3zM14 5v2h3v3h2V5h-5z"/></svg>
                                <div class="config-text">
                                    <strong>{{ $area }} SQ.FT</strong>
                                </div>
                            </div>
                            <div class="config-box">
                                <svg viewBox="0 0 24 24"><path d="M18 2H6v2h12V2zm-6 4c-4.42 0-8 3.58-8 8s3.58 8 8 8 8-3.58 8-8-3.58-8-8-8zm0 14c-3.31 0-6-2.69-6-6s2.69-6 6-6 6 2.69 6 6-2.69 6-6 6z"/></svg>
                                <div class="config-text">
                                    <strong>1 slot</strong> <span>Included</span>
                                </div>
                            </div>
                        </div>

                        <!-- Static Amenities (Design) -->
                        <div class="amenities-row">
                            <div class="amenity-item">
                                <svg viewBox="0 0 24 24"><path d="M20.57 14.86L22 13.43 20.57 12 17 15.57 8.43 7 12 3.43 10.57 2 9.14 3.43 7.71 2 5.57 4.14 4.14 2.71 2.71 4.14l1.43 1.43L2 7.71l1.43 1.43L2 10.57 3.43 12 7 8.43 15.57 17 12 20.57 13.43 22l1.43-1.43L16.29 22l2.14-2.14 1.43 1.43 1.43-1.43-1.43-1.43L22 16.29l-1.43-1.43z"/></svg>    
                                Gym
                            </div>
                            <div class="amenity-item">
                                <svg viewBox="0 0 24 24"><path d="M22 21c-1.11 0-1.73-.37-2.18-.64-.37-.22-.6-.36-1.15-.36-.56 0-.78.13-1.15.36-.45.27-1.07.64-2.18.64s-1.73-.37-2.18-.64c-.37-.22-.6-.36-1.15-.36-.56 0-.78.13-1.15.36-.45.27-1.07.64-2.18.64s-1.73-.37-2.18-.64c-.37-.22-.6-.36-1.15-.36-.56 0-.78.13-1.15.36-.45.27-1.07.64-2.18.64v-2c.56 0 .78-.13 1.15-.36.45-.27 1.07-.64 2.18-.64s1.73.37 2.18.64c.37.22.6.36 1.15.36.56 0 .78-.13 1.15-.36.45-.27 1.07-.64 2.18-.64s1.73.37 2.18.64c.37.22.6.36 1.15.36.56 0 .78-.13 1.15-.36.45-.27 1.07-.64 2.18-.64v2zM2 15h20v2H2v-2zm0-4h20v2H2v-2zm0-4h20v2H2V7z"/></svg>
                                Swimming pool
                            </div>
                            <div class="amenity-item">
                                <svg viewBox="0 0 24 24"><path d="M17 10.5V7c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.55 0 1-.45 1-1v-3.5l4 4v-11l-4 4z"/></svg>
                                CCTV
                            </div>
                            <div class="amenity-item">
                                <svg viewBox="0 0 24 24"><path d="M12 2l-5.5 9h11z"/><circle cx="17.5" cy="17.5" r="4.5"/><path d="M3 13.5h8v8H3z"/></svg>
                                Clubhouse
                            </div>
                        </div>

                        <a href="{{ url('property/' . $v->slug) }}" class="see-all">See all amenities ></a>

                        <!-- Action Buttons (Updated to only one full-width button) -->
                        <div class="action-buttons">
                            <a href="{{ url('property/' . $v->slug) }}" target="_blank" class="btn btn-outline" style="flex: 100%;">View details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Load More Button -->
        @if(count($data['featuredProperties']) > 3)
        <div class="load-more-container">
            <button id="loadMoreFeatured" class="btn-load-more">
                Load More
            </button>
        </div>
        @endif
    </section>
    @endif

    <script>
    document.addEventListener("DOMContentLoaded", function(){
        var loadMoreBtn = document.getElementById("loadMoreFeatured");
        
        if(loadMoreBtn) {
            loadMoreBtn.addEventListener("click", function(){
                let hiddenItems = document.querySelectorAll(".featured-extra");
                hiddenItems.forEach(function(item){
                    item.style.display = "block";
                });
                this.style.display = "none";
            });
        }
    });
    </script>




    
  
  
  <style>
    :root {
        --primary-blue: #1877F2;
        --dark-text: #1c1c1c;
        --light-gray: #f5f5f5;
        --border-color: #e0e0e0;
        --text-gray: #666;
    }

    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: 'Inter', sans-serif;
        background-color: #f9f9f9;
        padding: 40px 20px;
        color: var(--dark-text);
    }

    /* --- Header Section --- */
    .section-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .section-header h2 {
        font-size: 38px; /* Increased */
        font-weight: 700;
        color: #333;
        margin-bottom: 10px;
    }

    .section-header p {
        color: var(--primary-blue);
        font-size: 18px; /* Increased */
        font-weight: 500;
    }

    /* --- Grid Layout (SINGLE ROW with Horizontal Scroll) --- */
    .properties-grid {
        display: flex;
        justify-content: flex-start;
        gap: 24px;
        max-width: 1400px;
        margin: 0 auto;
        flex-wrap: nowrap;        /* ✅ Force all cards in ONE row */
        overflow-x: auto;         /* ✅ Enable horizontal scrolling */
        padding-bottom: 20px;     /* Space for scrollbar */
        scroll-behavior: smooth;
    }

    /* Custom Scrollbar for better UX */
    .properties-grid::-webkit-scrollbar {
        height: 8px;
    }
    .properties-grid::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 10px;
    }
    .properties-grid::-webkit-scrollbar-thumb {
        background: #c1c1c1;
        border-radius: 10px;
    }
    .properties-grid::-webkit-scrollbar-thumb:hover {
        background: #a8a8a8;
    }

    /* --- Card Component --- */
    .property-card {
        background: #fff;
        border-radius: 12px;
        border: 1px solid var(--border-color);
        min-width: 380px;      /* ✅ Prevent shrinking */
        max-width: 380px;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        flex-shrink: 0;        /* ✅ Prevent cards from shrinking */
    }

    .property-card:hover {
        box-shadow: 0 10px 20px rgba(0,0,0,0.08);
    }

    /* Image Area */
    .card-image-wrapper {
        position: relative;
        height: 240px; /* Increased */
        width: 100%;
    }

    .card-image-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* Badges over image */
    .badge-tag {
        position: absolute;
        top: 14px;
        left: 14px;
        background-color: var(--primary-blue);
        color: #fff;
        font-size: 13px; /* Increased */
        font-weight: 600;
        padding: 6px 12px;
        border-radius: 6px;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .badge-approval {
        position: absolute;
        top: 14px;
        right: 14px;
        background-color: rgba(255, 255, 255, 0.95);
        color: #333;
        font-size: 12px; /* Increased */
        font-weight: 600;
        padding: 6px 12px;
        border-radius: 6px;
        display: flex;
        align-items: center;
        gap: 6px;
    }
    
    .approval-icon {
        color: #d32f2f;
        font-weight: bold;
        font-size: 14px;
    }

    /* Card Content */
    .card-content {
        padding: 20px; /* Increased */
    }

    /* Price Row */
    .price-row {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 14px;
    }

    .price-main {
        font-size: 24px; /* Increased */
        font-weight: 700;
        color: #000;
    }

    .price-sub {
        text-align: right;
        font-size: 12px; /* Increased */
        color: var(--text-gray);
    }
    
    .price-sub span {
        display: block;
        font-size: 15px; /* Increased */
        color: #333;
        font-weight: 700;
    }

    /* Title & Location */
    .property-title {
        display: flex;
        align-items: center;
        gap: 10px;
        font-weight: 700;
        font-size: 20px; /* Increased */
        margin-bottom: 8px;
    }

    .location-row {
        display: flex;
        justify-content: space-between;
        font-size: 14px; /* Increased */
        color: var(--text-gray);
        margin-bottom: 18px;
    }

    .location-text {
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .developer-tag {
        font-size: 13px; /* Increased */
        display: flex;
        align-items: center;
        gap: 6px;
    }

    /* Config Boxes (BHK, Sqft, P) */
    .config-row {
        display: flex;
        gap: 10px;
        margin-bottom: 16px;
    }

    .config-box {
        flex: 1;
        border: 1px solid var(--border-color);
        border-radius: 8px;
        padding: 10px;
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 12px;
        font-weight: 500;
    }

    .config-box svg {
        width: 20px; /* Increased */
        height: 20px;
        fill: var(--primary-blue);
    }
    
    .config-text strong {
        display: block;
        font-size: 14px; /* Increased */
        color: #333;
    }
    .config-text span {
        color: var(--text-gray);
        font-size: 11px; /* Increased */
    }

    /* Amenities Icons */
    .amenities-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 14px;
        padding: 0 4px;
    }

    .amenity-item {
        display: flex;
        align-items: center;
        gap: 5px;
        font-size: 13px; /* Increased */
        color: #444;
    }
    
    .amenity-item svg {
        width: 16px; /* Increased */
        height: 16px;
        fill: var(--primary-blue);
    }

    .see-all {
        font-size: 13px; /* Increased */
        color: var(--primary-blue);
        text-decoration: none;
        display: block;
        margin-bottom: 18px;
        font-weight: 500;
    }

    /* Action Buttons */
    .action-buttons {
        display: flex;
        gap: 10px;
        border-top: 1px solid #f0f0f0;
        padding-top: 18px;
    }

    .btn {
        flex: 1;
        padding: 12px; /* Increased */
        border-radius: 8px;
        font-size: 15px; /* Increased */
        font-weight: 600;
        cursor: pointer;
        text-align: center;
        transition: background 0.2s;
        text-decoration: none;
        display: inline-block;
    }

    .btn-outline {
        background: #fff;
        border: 1px solid var(--primary-blue);
        color: var(--primary-blue);
    }

    .btn-outline:hover {
        background: #f0f7ff;
    }

    /* Load More Button */
    .load-more-container {
        text-align: center;
        margin-top: 40px;
    }
    
    .btn-load-more {
        background: var(--primary-blue);
        color: #fff;
        border: none;
        padding: 14px 40px; /* Increased */
        border-radius: 8px;
        font-size: 16px; /* Increased */
        font-weight: 600;
        cursor: pointer;
    }

    /* SVG Helper Classes */
    .icon-svg {
        width: 16px; /* Increased */
        height: 16px;
        fill: currentColor;
    }

    /* Hide extra properties initially */
    .extra-property {
        display: none !important; /* ✅ Important to override flex */
    }


    </style>


    <style>
    :root {
        --primary-blue: #1877F2;
        --dark-text: #1c1c1c;
        --light-gray: #f5f5f5;
        --border-color: #e0e0e0;
        --text-gray: #666;
    }

    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: 'Inter', sans-serif;
        background-color: #f9f9f9;
        padding: 40px 20px;
        color: var(--dark-text);
    }

    /* --- Header Section --- */
    .section-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .section-header h2 {
        font-size: 38px;
        font-weight: 700;
        color: #333;
        margin-bottom: 10px;
    }

    .section-header p {
        color: var(--primary-blue);
        font-size: 18px;
        font-weight: 500;
    }

    /* --- Grid Layout (SINGLE ROW with Horizontal Scroll) --- */
    .properties-grid {
        display: flex;
        justify-content: flex-start;
        gap: 24px;
        max-width: 1400px;
        margin: 0 auto;
        flex-wrap: nowrap;
        overflow-x: auto;
        padding-bottom: 20px;
        scroll-behavior: smooth;
    }

    /* Custom Scrollbar */
    .properties-grid::-webkit-scrollbar {
        height: 8px;
    }
    .properties-grid::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 10px;
    }
    .properties-grid::-webkit-scrollbar-thumb {
        background: #c1c1c1;
        border-radius: 10px;
    }
    .properties-grid::-webkit-scrollbar-thumb:hover {
        background: #a8a8a8;
    }

    /* --- Card Component --- */
    .property-card {
        background: #fff;
        border-radius: 12px;
        border: 1px solid var(--border-color);
        min-width: 380px;
        max-width: 380px;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        flex-shrink: 0;
    }

    .property-card:hover {
        box-shadow: 0 10px 20px rgba(0,0,0,0.08);
    }

    /* Image Area */
    .card-image-wrapper {
        position: relative;
        height: 240px;
        width: 100%;
    }

    .card-image-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* Badges over image */
    .badge-tag {
        position: absolute;
        top: 14px;
        left: 14px;
        background-color: var(--primary-blue);
        color: #fff;
        font-size: 13px;
        font-weight: 600;
        padding: 6px 12px;
        border-radius: 6px;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .badge-approval {
        position: absolute;
        top: 14px;
        right: 14px;
        background-color: rgba(255, 255, 255, 0.95);
        color: #333;
        font-size: 12px;
        font-weight: 600;
        padding: 6px 12px;
        border-radius: 6px;
        display: flex;
        align-items: center;
        gap: 6px;
    }
    
    .approval-icon {
        color: #d32f2f;
        font-weight: bold;
        font-size: 14px;
    }

    /* Card Content */
    .card-content {
        padding: 20px;
    }

    /* Price Row */
    .price-row {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 14px;
    }

    .price-main {
        font-size: 24px;
        font-weight: 700;
        color: #000;
    }

    .price-sub {
        text-align: right;
        font-size: 12px;
        color: var(--text-gray);
    }
    
    .price-sub span {
        display: block;
        font-size: 15px;
        color: #333;
        font-weight: 700;
    }

    /* Title & Location */
    .property-title {
        display: flex;
        align-items: center;
        gap: 10px;
        font-weight: 700;
        font-size: 20px;
        margin-bottom: 8px;
    }

    .location-row {
        display: flex;
        justify-content: space-between;
        font-size: 14px;
        color: var(--text-gray);
        margin-bottom: 18px;
    }

    .location-text {
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .developer-tag {
        font-size: 13px;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    /* Config Boxes (BHK, Sqft, P) */
    .config-row {
        display: flex;
        gap: 10px;
        margin-bottom: 16px;
    }

    .config-box {
        flex: 1;
        border: 1px solid var(--border-color);
        border-radius: 8px;
        padding: 10px;
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 12px;
        font-weight: 500;
    }

    .config-box svg {
        width: 20px;
        height: 20px;
        fill: var(--primary-blue);
    }
    
    .config-text strong {
        display: block;
        font-size: 14px;
        color: #333;
    }
    .config-text span {
        color: var(--text-gray);
        font-size: 11px;
    }

    /* Amenities Icons */
    .amenities-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 14px;
        padding: 0 4px;
    }

    .amenity-item {
        display: flex;
        align-items: center;
        gap: 5px;
        font-size: 13px;
        color: #444;
    }
    
    .amenity-item svg {
        width: 16px;
        height: 16px;
        fill: var(--primary-blue);
    }

    .see-all {
        font-size: 13px;
        color: var(--primary-blue);
        text-decoration: none;
        display: block;
        margin-bottom: 18px;
        font-weight: 500;
    }

    /* Action Buttons */
    .action-buttons {
        display: flex;
        gap: 10px;
        border-top: 1px solid #f0f0f0;
        padding-top: 18px;
    }

    .btn {
        flex: 1;
        padding: 12px;
        border-radius: 8px;
        font-size: 15px;
        font-weight: 600;
        cursor: pointer;
        text-align: center;
        transition: all 0.2s ease; /* ✅ Smooth transition for hover */
        text-decoration: none;
        display: inline-block;
    }

    /* ✅ View details button - default state (white with blue border/text) */
    .btn-outline {
        background: #fff;
        border: 1px solid var(--primary-blue);
        color: var(--primary-blue);
    }

    /* ✅ View details button - HOVER state (primary blue with white text) */
    .btn-outline:hover {
        background: var(--primary-blue);
        color: #fff;
        border-color: var(--primary-blue);
    }

    /* Load More Button */
    .load-more-container {
        text-align: center;
        margin-top: 40px;
    }
    
    .btn-load-more {
        background: var(--primary-blue);
        color: #fff;
        border: none;
        padding: 14px 40px;
        border-radius: 8px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: background 0.2s ease;
    }

    .btn-load-more:hover {
        background: #1565c0; /* Darker blue on hover */
    }

    /* SVG Helper Classes */
    .icon-svg {
        width: 16px;
        height: 16px;
        fill: currentColor;
    }

    /* Hide extra properties initially */
    .extra-property {
        display: none !important;
    }
</style>


    <!-- All Properties Dynamic Section -->
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

                    <div class="card-image-wrapper">
                        <!-- Dynamic Image -->
                        <img src="{{ $img }}" alt="{{ $title }}" loading="lazy">
                        
                        <!-- Dynamic Badges -->
                        <div class="badge-tag">
                            <svg class="icon-svg" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                            {{ $category }}
                        </div>
                        <div class="badge-approval">
                            Approved by <span class="approval-icon">⛔</span>
                        </div>
                    </div>

                    <div class="card-content">
                        <!-- Dynamic Price -->
                        <div class="price-row">
                            <div class="price-main">{{ $price }}</div>
                            <div class="price-sub">From <span>₹14,400/sqft</span></div>
                        </div>

                        <!-- Dynamic Title -->
                        <div class="property-title">
                            <svg class="icon-svg" style="fill:#555;" viewBox="0 0 24 24"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg>
                            {{ $title }}
                        </div>

                        <!-- Dynamic Location & Builder -->
                        <div class="location-row">
                            <div class="location-text">
                                <svg class="icon-svg" style="fill:#888;" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                                {{ $location }}
                            </div>
                            <div class="developer-tag">
                                By {{ $builder }}
                            </div>
                        </div>

                        <!-- Dynamic Configs (BHK, Area) -->
                        <div class="config-row">
                            <div class="config-box">
                                <svg viewBox="0 0 24 24"><path d="M3 3h18v18H3V3zm2 2v14h14V5H5zm2 2h10v2H7V7zm0 4h10v2H7v-2z"/></svg>
                                <div class="config-text">
                                    <strong>{{ $bhk }} BHK</strong>
                                </div>
                            </div>
                            <div class="config-box">
                                <svg viewBox="0 0 24 24"><path d="M7 14H5v5h5v-2H7v-3zm-2-4h2V7h3V5H5v5zm12 7h-3v2h5v-5h-2v3zM14 5v2h3v3h2V5h-5z"/></svg>
                                <div class="config-text">
                                    <strong>{{ $area }} SQ.FT</strong>
                                </div>
                            </div>
                            <div class="config-box">
                                <svg viewBox="0 0 24 24"><path d="M18 2H6v2h12V2zm-6 4c-4.42 0-8 3.58-8 8s3.58 8 8 8 8-3.58 8-8-3.58-8-8-8zm0 14c-3.31 0-6-2.69-6-6s2.69-6 6-6 6 2.69 6 6-2.69 6-6 6z"/></svg>
                                <div class="config-text">
                                    <strong>1 slot</strong> <span>Included</span>
                                </div>
                            </div>
                        </div>

                        <!-- Static Amenities (Design) -->
                        <div class="amenities-row">
                            <div class="amenity-item">
                                <svg viewBox="0 0 24 24"><path d="M20.57 14.86L22 13.43 20.57 12 17 15.57 8.43 7 12 3.43 10.57 2 9.14 3.43 7.71 2 5.57 4.14 4.14 2.71 2.71 4.14l1.43 1.43L2 7.71l1.43 1.43L2 10.57 3.43 12 7 8.43 15.57 17 12 20.57 13.43 22l1.43-1.43L16.29 22l2.14-2.14 1.43 1.43 1.43-1.43-1.43-1.43L22 16.29l-1.43-1.43z"/></svg>    
                                Gym
                            </div>
                            <div class="amenity-item">
                                <svg viewBox="0 0 24 24"><path d="M22 21c-1.11 0-1.73-.37-2.18-.64-.37-.22-.6-.36-1.15-.36-.56 0-.78.13-1.15.36-.45.27-1.07.64-2.18.64s-1.73-.37-2.18-.64c-.37-.22-.6-.36-1.15-.36-.56 0-.78.13-1.15.36-.45.27-1.07.64-2.18.64s-1.73-.37-2.18-.64c-.37-.22-.6-.36-1.15-.36-.56 0-.78.13-1.15.36-.45.27-1.07.64-2.18.64v-2c.56 0 .78-.13 1.15-.36.45-.27 1.07-.64 2.18-.64s1.73.37 2.18.64c.37.22.6.36 1.15.36.56 0 .78-.13 1.15-.36.45-.27 1.07-.64 2.18-.64s1.73.37 2.18.64c.37.22.6.36 1.15.36.56 0 .78-.13 1.15-.36.45-.27 1.07-.64 2.18-.64v2zM2 15h20v2H2v-2zm0-4h20v2H2v-2zm0-4h20v2H2V7z"/></svg>
                                Swimming pool
                            </div>
                            <div class="amenity-item">
                                <svg viewBox="0 0 24 24"><path d="M17 10.5V7c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.55 0 1-.45 1-1v-3.5l4 4v-11l-4 4z"/></svg>
                                CCTV
                            </div>
                            <div class="amenity-item">
                                <svg viewBox="0 0 24 24"><path d="M12 2l-5.5 9h11z"/><circle cx="17.5" cy="17.5" r="4.5"/><path d="M3 13.5h8v8H3z"/></svg>
                                Clubhouse
                            </div>
                        </div>

                        <a href="{{ url('property/' . $v->slug) }}" class="see-all">See all amenities ></a>

                        <!-- Action Button (Only View details) -->
                        <div class="action-buttons">
                            <a href="{{ url('property/' . $v->slug) }}" class="btn btn-outline" style="flex: 100%;">View details</a>
                        </div>
                    </div>

                </div>

            @endforeach

        </div>

        {{-- ✅ LOAD MORE ONLY WHEN NO FILTER --}}
        @if(!request()->hasAny(['search','bhk','budget','type']))
        <div class="load-more-container">
            <button id="loadMoreBtn" class="btn-load-more">
                Load More
            </button>
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
document.addEventListener("DOMContentLoaded", function () {
    var btn = document.getElementById("loadMoreBtn");
    if (!btn) return;

    btn.addEventListener("click", function () {
        document.querySelectorAll(".extra-property").forEach(function (item) {
            item.classList.remove("extra-property");
        });
        this.style.display = "none";
    });
});
</script>


    <!-- Features Section -->
   <!-- Why Choose Us Section -->
<section class="why-choose-section">

    <div class="why-choose-header">
        <h2>Why Choose Us?</h2>
        <span>Testimonial</span>
    </div>

    <div class="why-choose-grid">

        <!-- Card 1 -->
        <div class="why-card">
            <div class="why-icon">
                <i class="fas fa-building"></i>
            </div>

            <h3>Trusted Company</h3>

            <p>
                Offering a wealth of knowledge, expertise, integrity, and a strong
                track record as guiding you towards your real estate goals with
                personalized support.
            </p>
        </div>

        <!-- Card 2 -->
        <div class="why-card">
            <div class="why-icon">
                <i class="fas fa-home"></i>
            </div>

            <h3>Unlimited Rewards</h3>

            <p>
                Earn rewards by following our automation referral scheme. We offer
                generous and numerous bonuses and incentives over greater warranty
                potential.
            </p>
        </div>

        <!-- Card 3 -->
        <div class="why-card">
            <div class="why-icon">
                <i class="fas fa-briefcase"></i>
            </div>

            <h3>Fast &amp; Easier Process</h3>

            <p>
                We always keep buyers and sellers' promises quick approvals,
                minimal paperwork, competitive rates, and faster to closer
                within 7 days.
            </p>
        </div>

        <!-- Card 4 -->
        <div class="why-card">
            <div class="why-icon">
                <i class="fas fa-money-check-alt"></i>
            </div>

            <h3>High Range Loan</h3>

            <p>
                Our partners are eager to provide offers substantial funding for
                major investments or purchases with competitive rates and quick
                processing.
            </p>
        </div>

    </div>

</section>
<style>
```css
/* ==========================================
   PROPERTY CARDS - RESPONSIVE FIX
========================================== */

.properties-grid {
    width: 100%;
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 24px;
    align-items: stretch;
}

.property-card {
    width: 100%;
    min-width: 0;
    height: auto !important;
    display: flex;
    flex-direction: column;
    overflow: hidden;
    border-radius: 12px;
    box-sizing: border-box;
}

.property-card .card-content {
    width: 100%;
    min-width: 0;
    height: auto !important;
    flex: 1;
    display: flex;
    flex-direction: column;
    padding: 18px;
    box-sizing: border-box;
}

.property-card .amenities-row {
    display: grid !important;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 12px;
    width: 100%;
    margin: 14px 0;
    padding: 0;
}

.property-card .amenity-item {
    display: flex;
    align-items: center;
    gap: 7px;
    min-width: 0;
    font-size: 12px;
    line-height: 1.4;
    white-space: normal;
    overflow-wrap: anywhere;
}

.property-card .amenity-item svg {
    width: 16px;
    height: 16px;
    flex: 0 0 16px;
}

.property-card .see-all {
    display: inline-block;
    width: fit-content;
    max-width: 100%;
    margin: 8px 0 14px;
    font-size: 13px;
    line-height: 1.5;
    overflow-wrap: anywhere;
}

.property-card .action-buttons {
    display: flex;
    width: 100%;
    margin-top: auto;
    padding-top: 14px;
    gap: 10px;
    box-sizing: border-box;
}

.property-card .action-buttons .btn {
    display: flex;
    align-items: center;
    justify-content: center;
    flex: 1 1 100%;
    width: 100%;
    min-width: 0;
    min-height: 44px;
    padding: 10px 14px;
    font-size: 14px;
    line-height: 1.4;
    white-space: normal;
    overflow-wrap: anywhere;
    box-sizing: border-box;
}

/* Tablet */
@media (max-width: 991px) {
    .properties-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 20px;
    }
}

/* Mobile */
@media (max-width: 600px) {
    .properties-grid {
        grid-template-columns: minmax(0, 1fr);
        gap: 20px;
    }

    .property-card {
        max-width: 100%;
        margin: 0;
    }

    .property-card .card-image-wrapper {
        width: 100%;
        height: 220px;
        flex-shrink: 0;
    }

    .property-card .card-image-wrapper > img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .property-card .card-content {
        padding: 16px;
    }

    .property-card .amenities-row {
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 12px 8px;
    }

    .property-card .amenity-item {
        font-size: 12px;
    }

    .property-card .see-all {
        font-size: 13px;
    }

    .property-card .action-buttons .btn {
        min-height: 46px;
        font-size: 14px;
    }
}

/* Small mobile */
@media (max-width: 360px) {
    .property-card .card-content {
        padding: 12px;
    }

    .property-card .amenities-row {
        gap: 10px 6px;
    }

    .property-card .amenity-item {
        font-size: 11px;
    }
}
```
/* =========================================
   WHY CHOOSE US SECTION
========================================= */

.why-choose-section {
    width: 100%;
    padding: 45px 22px 50px;
    background: #ffffff;
    box-sizing: border-box;
}

/* =========================================
   HEADER
========================================= */

.why-choose-header {
    text-align: center;
    margin-bottom: 25px;
}

.why-choose-header h2 {
    margin: 0;
    font-family: Arial, sans-serif;
    font-size: 20px;
    font-weight: 600;
    line-height: 1.3;
    color: #444444;
}

.why-choose-header span {
    display: block;
    margin-top: 4px;
    font-family: Arial, sans-serif;
    font-size: 12px;
    font-weight: 400;
    line-height: 1.3;
    color: #1769ff;
}

/* =========================================
   CARDS GRID
========================================= */

.why-choose-grid {
    width: 100%;
    max-width: 1120px;
    margin: 0 auto;

    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 12px;

    box-sizing: border-box;
}

/* =========================================
   CARD
========================================= */

.why-card {
    min-height: 125px;
    padding: 14px 12px 12px;

    background: #ffffff;

    border: 1px solid #8eaeff;
    border-radius: 8px;

    box-sizing: border-box;

    transition: all 0.25s ease;
}

.why-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(41, 92, 171, 0.12);
}

/* =========================================
   ICON
========================================= */

.why-icon {
    width: 25px;
    height: 25px;

    display: flex;
    align-items: center;
    justify-content: center;

    margin-bottom: 10px;

    background: #edf4ff;
    border-radius: 3px;

    color: #2875e8;

    box-sizing: border-box;
}

.why-icon i {
    font-size: 12px;
}

/* =========================================
   CARD TITLE
========================================= */

.why-card h3 {
    margin: 0 0 6px;

    font-family: Arial, sans-serif;
    font-size: 20px;
    font-weight: 600;

    line-height: 1.3;

    color: #333333;
}

/* =========================================
   CARD DESCRIPTION
========================================= */

.why-card p {
    margin: 0;

    font-family: Arial, sans-serif;
    font-size: 16px;
    font-weight: 400;

    line-height: 1.45;

    color: #666666;
}

/* =========================================
   TABLET
========================================= */

@media (max-width: 900px) {

    .why-choose-section {
        padding: 40px 20px 45px;
    }

    .why-choose-grid {
        grid-template-columns: repeat(2, 1fr);
        max-width: 650px;
        gap: 14px;
    }

    .why-card {
        min-height: 135px;
        padding: 15px 13px;
    }

    .why-card h3 {
        font-size: 14px;
    }

    .why-card p {
        font-size: 10.5px;
        line-height: 1.45;
    }

}

/* =========================================
   MOBILE
========================================= */

@media (max-width: 576px) {

    .why-choose-section {
        padding: 35px 15px 40px;
    }

    .why-choose-header {
        margin-bottom: 20px;
    }

    .why-choose-header h2 {
        font-size: 20px;
    }

    .why-choose-header span {
        font-size: 12px;
    }

    .why-choose-grid {
        grid-template-columns: 1fr;
        gap: 12px;
    }

    .why-card {
        min-height: auto;
        padding: 16px 14px;
    }

    .why-icon {
        width: 30px;
        height: 30px;
        margin-bottom: 10px;
    }

    .why-icon i {
        font-size: 13px;
    }

    .why-card h3 {
        font-size: 14px;
        margin-bottom: 6px;
    }

    .why-card p {
        font-size: 11px;
        line-height: 1.5;
    }

}

/* =========================================
   SMALL MOBILE
========================================= */

@media (max-width: 375px) {

    .why-choose-section {
        padding-left: 12px;
        padding-right: 12px;
    }

    .why-choose-header h2 {
        font-size: 19px;
    }

    .why-choose-header span {
        font-size: 11px;
    }

    .why-card {
        padding: 15px 13px;
    }

    .why-card h3 {
        font-size: 13px;
    }

    .why-card p {
        font-size: 10.5px;
    }

}

/* =========================================================
   FINAL MOBILE RESPONSIVE FIX
   ONE BY ONE / NO HORIZONTAL SCROLL
   ========================================================= */

@media screen and (max-width: 767px) {

    /* -----------------------------------------
       GLOBAL MOBILE FIX
    ----------------------------------------- */

    html,
    body {
        width: 100%;
        max-width: 100%;
        overflow-x: hidden !important;
    }

    main {
        width: 100%;
        max-width: 100%;
        overflow-x: hidden !important;
    }

    main .container {
        width: 100%;
        max-width: 100%;
        padding-left: 12px;
        padding-right: 12px;
        box-sizing: border-box;
    }


    /* -----------------------------------------
       SECTION HEADERS
    ----------------------------------------- */

    .section-header,
    .locality-header {
        width: 100%;
        max-width: 100%;
        box-sizing: border-box;
        padding-left: 5px;
        padding-right: 5px;
    }

    .section-header h2,
    .locality-header h2 {
        font-size: 24px !important;
        line-height: 1.3;
    }

    .section-header p,
    .locality-header p {
        font-size: 13px !important;
        line-height: 1.5;
    }


    /* -----------------------------------------
       PROPERTIES BY LOCALITIES
       ONE CARD PER ROW
    ----------------------------------------- */

    .locality-section {
        width: 100%;
        max-width: 100%;
        padding-left: 12px !important;
        padding-right: 12px !important;
        box-sizing: border-box;
        overflow: hidden !important;
    }

    .locality-container {
        width: 100% !important;
        max-width: 100% !important;

        display: grid !important;
        grid-template-columns: 1fr !important;

        gap: 18px !important;

        margin: 0 auto !important;

        box-sizing: border-box;
    }

    .locality-card {
        width: 100% !important;
        max-width: 100% !important;

        height: auto !important;
        min-height: 430px;

        padding: 18px !important;

        box-sizing: border-box;

        overflow: hidden !important;
    }

    .locality-title {
        width: 100%;
        max-width: 100%;

        font-size: 19px !important;

        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }


    /* -----------------------------------------
       PROPERTY STACK INSIDE LOCALITY
    ----------------------------------------- */

    .property-stack {
        width: 100% !important;
        max-width: 100% !important;

        height: 270px !important;

        box-sizing: border-box;
    }

    .property-layer {
        width: calc(100% - 4px) !important;
        max-width: 100% !important;

        box-sizing: border-box;
    }

    .layer-back-2 {
        transform: translate(6px, 10px) rotate(6deg) !important;
    }

    .layer-back-1 {
        transform: translate(-4px, 6px) rotate(-4deg) !important;
    }

    .layer-main {
        transform: translate(0, 0) rotate(0deg) !important;
    }

    .property-image-wrapper {
        width: 100% !important;
        height: 205px !important;
    }

    .property-img-main,
    .property-img-back-1,
    .property-img-back-2 {
        width: 100% !important;
        height: 100% !important;
        object-fit: cover !important;
    }


    /* -----------------------------------------
       PROPERTY INFO
    ----------------------------------------- */

    .property-info {
        width: 100% !important;
        height: 55px !important;

        padding: 0 9px !important;

        box-sizing: border-box;

        gap: 5px;
    }

    .property-name-box {
        min-width: 0 !important;
        max-width: 55%;
    }

    .property-name {
        max-width: 100%;

        font-size: 14px !important;

        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .building-icon {
        font-size: 14px !important;
    }

    .builder-box {
        max-width: 45%;
        min-width: 0;
    }

    .builder-logo {
        max-width: 55px !important;
        max-height: 22px !important;
    }

    .builder-name {
        max-width: 70px;

        font-size: 9px !important;

        overflow: hidden;
        text-overflow: ellipsis;
    }


    /* -----------------------------------------
       EXPLORE BUTTON
    ----------------------------------------- */

    .explore-wrapper {
        width: 100%;
        box-sizing: border-box;
    }

    .explore-link {
        font-size: 13px !important;
    }


    /* -----------------------------------------
       ALL PROPERTY CARDS
       ONE PER ROW
    ----------------------------------------- */

    .properties-grid {
        width: 100% !important;
        max-width: 100% !important;

        display: grid !important;
        grid-template-columns: 1fr !important;

        gap: 20px !important;

        margin-left: auto !important;
        margin-right: auto !important;

        box-sizing: border-box;
    }

    .property-card {
        width: 100% !important;
        max-width: 100% !important;

        box-sizing: border-box;

        transform: none !important;
    }

    .property-image-wrapper {
        width: 100% !important;
        height: 220px !important;
    }

    .property-details {
        width: 100%;
        box-sizing: border-box;
        padding: 16px !important;
    }

    .property-title {
        font-size: 18px !important;
    }


    /* -----------------------------------------
       PROPERTY SPECS
    ----------------------------------------- */

    .property-specs {
        width: 100% !important;

        display: grid !important;
        grid-template-columns: 1fr 1fr !important;

        box-sizing: border-box;
    }

    .spec-item {
        min-width: 0;
    }

    .spec-value {
        font-size: 12px !important;

        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }


    /* -----------------------------------------
       PROPERTY FOOTER
    ----------------------------------------- */

    .property-footer {
        width: 100%;

        display: flex !important;
        align-items: center;

        box-sizing: border-box;
    }

    .property-price {
        min-width: 0;
        font-size: 16px !important;
    }

    .contact-btn {
        flex-shrink: 0;

        padding: 9px 12px !important;

        font-size: 11px !important;
    }


    /* -----------------------------------------
       FEATURES
       ONE BY ONE
    ----------------------------------------- */

    .features-grid {
        width: 100% !important;
        max-width: 100% !important;

        display: grid !important;
        grid-template-columns: 1fr !important;

        gap: 15px !important;

        margin: 40px 0 !important;

        box-sizing: border-box;
    }

    .feature-card {
        width: 100% !important;
        max-width: 100% !important;

        padding: 22px 18px !important;

        box-sizing: border-box;

        transform: none !important;
    }

    .feature-icon {
        width: 55px;
        height: 55px;

        margin-bottom: 14px;
    }

    .feature-card h3 {
        font-size: 17px !important;
    }

    .feature-card p {
        font-size: 12px !important;
        line-height: 1.6;
    }


    /* -----------------------------------------
       SERVICES
       ONE BY ONE
    ----------------------------------------- */

    .services-grid {
        width: 100% !important;
        max-width: 100% !important;

        display: grid !important;
        grid-template-columns: 1fr !important;

        gap: 18px !important;

        margin: 40px 0 !important;

        box-sizing: border-box;
    }

    .service-card {
        width: 100% !important;
        max-width: 100% !important;

        box-sizing: border-box;

        transform: none !important;
    }

    .service-image {
        width: 100% !important;
        height: 200px !important;

        object-fit: cover !important;
    }

    .service-content {
        padding: 18px !important;
    }

    .service-content h3 {
        font-size: 19px !important;
    }

    .service-content p {
        font-size: 13px !important;
        line-height: 1.6;
    }


    /* -----------------------------------------
       TESTIMONIALS
       ONE BY ONE
    ----------------------------------------- */

    .testimonials {
        width: 100% !important;
        max-width: 100% !important;

        margin: 45px 0 !important;

        padding: 28px 14px !important;

        box-sizing: border-box;

        overflow: hidden !important;
    }

    .testimonial-grid {
        width: 100% !important;
        max-width: 100% !important;

        display: grid !important;
        grid-template-columns: 1fr !important;

        gap: 15px !important;

        margin-top: 25px !important;

        box-sizing: border-box;
    }

    .testimonial-card {
        width: 100% !important;
        max-width: 100% !important;

        padding: 20px !important;

        box-sizing: border-box;
    }

    .testimonial-card p {
        font-size: 13px !important;
        line-height: 1.6;
    }


    /* -----------------------------------------
       MINI PROPERTIES
    ----------------------------------------- */

    .properties-mini-grid {
        width: 100% !important;
        max-width: 100% !important;

        display: grid !important;
        grid-template-columns: 1fr !important;

        gap: 12px !important;

        box-sizing: border-box;
    }

    .mini-property {
        width: 100% !important;
        max-width: 100% !important;

        box-sizing: border-box;
    }

    .mini-property img {
        width: 100% !important;
        height: 150px !important;

        object-fit: cover !important;
    }


    /* -----------------------------------------
       LOAD MORE BUTTON
    ----------------------------------------- */

    #loadMoreBtn,
    #loadMoreFeatured {
        max-width: 100%;

        padding: 11px 22px !important;

        font-size: 13px !important;
    }

}


/* =========================================================
   SMALL MOBILE
   ========================================================= */

@media screen and (max-width: 480px) {

    .locality-section {
        padding-left: 10px !important;
        padding-right: 10px !important;
    }

    .locality-container {
        gap: 15px !important;
    }

    .locality-card {
        min-height: 410px;
        padding: 15px !important;
        border-radius: 14px;
    }

    .locality-title {
        margin-bottom: 18px !important;
        font-size: 18px !important;
    }

    .property-stack {
        height: 255px !important;
    }

    .property-layer {
        height: 235px !important;
    }

    .property-image-wrapper {
        height: 190px !important;
    }

    .property-info {
        height: 45px !important;
    }

    .property-name {
        font-size: 13px !important;
    }

    .builder-logo {
        max-width: 48px !important;
        max-height: 20px !important;
    }

    .properties-grid {
        gap: 16px !important;
    }

    .property-image-wrapper {
        height: 205px !important;
    }

    .feature-card,
    .service-card,
    .testimonial-card {
        border-radius: 14px;
    }

}


/* =========================================================
   VERY SMALL MOBILE
   ========================================================= */

@media screen and (max-width: 360px) {

    .locality-section {
        padding-left: 8px !important;
        padding-right: 8px !important;
    }

    .locality-card {
        padding: 13px !important;
    }

    .property-stack {
        height: 245px !important;
    }

    .property-layer {
        height: 225px !important;
    }

    .property-image-wrapper {
        height: 180px !important;
    }

    .property-name {
        font-size: 12px !important;
    }

    .property-price {
        font-size: 15px !important;
    }

    .contact-btn {
        padding: 8px 10px !important;
        font-size: 10px !important;
    }

}

</style>

    <!-- Services Section -->
    <section class="container">
        <div class="section-header">
            <h2>We Provide Best Services</h2>
            <p>Our Services</p>
        </div>

        <div class="services-grid">
            <div class="service-card">
                <img class="service-image" src="{{ asset('theme/dhara-jfin/img/prop_ser_1.webp') }}" alt="NRI Friendly">
                <div class="service-content">
                    <h3>NRI Friendly</h3>
                    <p>We understand you're seeking a new home, and our team quickly gathers details, flexible options, quick approvals, and complete guidance from afar. This important financial decision.</p>
                </div>
            </div>

            <div class="service-card">
                <img class="service-image" src="{{ asset('theme/dhara-jfin/img/prop_ser_2.webp') }}" alt="Financial planning and loan consultation services">
                <div class="service-content">
                    <h3>Property Management</h3>
                    <p>We simplify construction financing with our value add and we only online application, offering tailored financing solutions, streamlined approval and fast funding process.</p>
                </div>
            </div>

            <div class="service-card">
                <img class="service-image" src="{{ asset('theme/dhara-jfin/img/prop_ser_3.webp') }}" alt="Financial services and loan consultation">
                <div class="service-content">
                    <h3>Investor Deals</h3>
                    <p>Allows offers Loan Against Property with flexible repayment options, executed by our property team. Check your eligibility and apply accurate add-on is tax benefits.</p>
                </div>
            </div>

            <div class="service-card">
                <img class="service-image" src="{{ asset('theme/dhara-jfin/img/prop_ser_4.webp') }}" alt="Financial documents and business planning">
                <div class="service-content">
                    <h3>Loan Assistance</h3>
                    <p>Allows offers Loan Against Property with flexible repayment options, executed by our property team. Check your eligibility and apply accurate add-on is tax benefits.</p>
                </div>
            </div>

            <div class="service-card">
                <img class="service-image" src="{{ asset('theme/dhara-jfin/img/prop_ser_5.webp') }}" alt="Business meeting and financial consultation">
                <div class="service-content">
                    <h3>Group Booking</h3>
                    <p>This service meets the diverse needs of short and medium businesses. Whether you're expanding, Investing in equipment, or increasing capital.</p>
                </div>
            </div>

            <div class="service-card">
                <img class="service-image" src="{{ asset('theme/dhara-jfin/img/prop_ser_6.webp') }}" alt="Property Visits & Booking">
                <div class="service-content">
                    <h3>Property Visits & Booking</h3>
                    <p>JFinserv offers Loan Against Property with flexible repayment options, executed by our property team. Check your eligibility and apply accurate add-on.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->

    
    
    
    
    

<style>
/* =====================================
   TESTIMONIAL SECTION
===================================== */

.testimonial-section {
    width: 100%;
    max-width: 1250px;
    margin: 0 auto;
    padding: 65px 20px 50px;
    box-sizing: border-box;
    text-align: center;
}

/* =====================================
   SECTION HEADER
===================================== */

.testimonial-section .section-header {
    width: 100%;
    margin: 0 auto 55px;
    text-align: center;
}

.testimonial-section .section-header h2 {
    color: #292929;
    font-size: 32px;
    line-height: 1.3;
    font-weight: 600;
    margin: 0 0 12px;
}

.testimonial-section .section-header p {
    color: #007bff;
    font-size: 18px;
    font-weight: 500;
    margin: 0;
}

/* Small decorative line above heading */
.testimonial-section .section-header::before {
    content: "";
    display: block;
    width: 56px;
    height: 5px;
    margin: 0 auto 18px;
    border-radius: 10px;
    background: linear-gradient(90deg, #295cab, #00abeb);
}

/* =====================================
   TESTIMONIAL CARDS GRID
===================================== */

.testimonial-section .testimonial-grid {
    width: 100%;
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 28px;
    align-items: stretch;
    justify-content: center;
    margin: 0 auto;
}

/* =====================================
   INDIVIDUAL CARD
===================================== */

.testimonial-section .testimonial-card {
    width: 100%;
    max-width: none;
    min-width: 0;
    min-height: 290px;
    padding: 30px;
    box-sizing: border-box;
    background: #ffffff;
    border: 1px solid #eeeeee;
    border-radius: 16px;
    box-shadow: 0 5px 25px rgba(0, 0, 0, 0.04);
    text-align: left;
    display: flex;
    flex-direction: column;
    transition: transform 0.25s ease, box-shadow 0.25s ease;
}

.testimonial-section .testimonial-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
}

/* =====================================
   STAR RATING
===================================== */

.testimonial-section .stars {
    color: #ff9800;
    font-size: 23px;
    line-height: 1.4;
    letter-spacing: 2px;
    margin-bottom: 20px;
    white-space: nowrap;
}

.testimonial-section .stars .empty-star {
    color: #dedede;
}

/* =====================================
   TESTIMONIAL TEXT
===================================== */

.testimonial-section .testimonial-text {
    color: #718096;
    font-size: 16px;
    font-style: italic;
    line-height: 1.75;
    margin: 0 0 25px;
    min-height: 84px;
    overflow-wrap: anywhere;
}

/* =====================================
   CUSTOMER PROFILE
===================================== */

.testimonial-section .author-profile {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-top: auto;
}

.testimonial-section .author-img {
    width: 60px;
    height: 60px;
    min-width: 60px;
    border-radius: 50%;
    object-fit: cover;
    display: block;
    background: #f0f0f0;
}

.testimonial-section .author-info {
    min-width: 0;
}

.testimonial-section .author-info h4 {
    color: #292929;
    font-size: 18px;
    font-weight: 600;
    line-height: 1.4;
    margin: 0 0 5px;
}

.testimonial-section .author-info p {
    color: #888888;
    font-size: 15px;
    line-height: 1.5;
    font-style: italic;
    margin: 0;
}

/* =====================================
   TABLET RESPONSIVE
===================================== */

@media (max-width: 992px) {
    .testimonial-section {
        padding: 50px 24px;
    }

    .testimonial-section .testimonial-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 22px;
    }

    .testimonial-section .testimonial-card {
        padding: 25px;
        min-height: 280px;
    }

    .testimonial-section .section-header {
        margin-bottom: 40px;
    }
}

/* =====================================
   MOBILE RESPONSIVE
===================================== */

@media (max-width: 600px) {
    .testimonial-section {
        width: 100%;
        max-width: 100%;
        padding: 40px 16px;
        margin: 0 auto;
        overflow: hidden;
    }

    .testimonial-section .section-header {
        margin: 0 auto 30px;
    }

    .testimonial-section .section-header::before {
        width: 48px;
        height: 4px;
        margin-bottom: 15px;
    }

    .testimonial-section .section-header h2 {
        font-size: 25px;
        line-height: 1.4;
        margin-bottom: 8px;
    }

    .testimonial-section .section-header p {
        font-size: 16px;
    }

    .testimonial-section .testimonial-grid {
        width: 100%;
        grid-template-columns: minmax(0, 1fr);
        gap: 18px;
        margin: 0 auto;
    }

    .testimonial-section .testimonial-card {
        width: 100%;
        max-width: 100%;
        min-width: 0;
        min-height: auto;
        padding: 23px 20px;
        border-radius: 14px;
    }

    .testimonial-section .stars {
        font-size: 21px;
        margin-bottom: 14px;
    }

    .testimonial-section .testimonial-text {
        font-size: 15px;
        line-height: 1.7;
        min-height: 0;
        margin-bottom: 22px;
    }

    .testimonial-section .author-profile {
        gap: 12px;
    }

    .testimonial-section .author-img {
        width: 52px;
        height: 52px;
        min-width: 52px;
    }

    .testimonial-section .author-info h4 {
        font-size: 16px;
    }

    .testimonial-section .author-info p {
        font-size: 13px;
    }
}

/* =====================================
   SMALL MOBILE
===================================== */

@media (max-width: 360px) {
    .testimonial-section {
        padding-right: 12px;
        padding-left: 12px;
    }

    .testimonial-section .testimonial-card {
        padding: 20px 16px;
    }

    .testimonial-section .section-header h2 {
        font-size: 22px;
    }
}
</style>


    <section class="testimonial-section">
        <!-- Header -->
        <div class="section-header">
            <h2>Hear from our customers</h2>
            <!-- <p>Testimonial</p> -->
        </div>

        <!-- Cards Grid -->
        <div class="testimonial-grid">
            
            <!-- Card 1 -->
            <div class="testimonial-card">
                <div class="stars">
                    ★ ★ ★ ★ <span class="empty-star">★</span>
                </div>
                <p class="testimonial-text">
                    "FinServ got my home loan approved in five days. The whole process was completely transparent."
                </p>
                <div class="author-profile">
                    <!-- Replace src with your actual image path -->
                    <img src="https://i.pravatar.cc/150?img=11" alt="Rahul Sharma" class="author-img">
                    <div class="author-info">
                        <h4>Rahul Sharma</h4>
                        <p>Home Loan customer</p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="testimonial-card">
                <div class="stars">
                    ★ ★ ★ ★ <span class="empty-star">★</span>
                </div>
                <p class="testimonial-text">
                    "Highly recommend their MSME loan service. They understood my business requirements and offered the best rate."
                </p>
                <div class="author-profile">
                    <img src="https://i.pravatar.cc/150?img=5" alt="Priya Patil" class="author-img">
                    <div class="author-info">
                        <h4>Priya Patil</h4>
                        <p>Business owner</p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="testimonial-card">
                <div class="stars">
                    ★ ★ ★ ★ <span class="empty-star">★</span>
                </div>
                <p class="testimonial-text">
                    "Excellent experience with their Loan Against Property service. Minimal documentation, fast disbursal."
                </p>
                <div class="author-profile">
                    <img src="https://i.pravatar.cc/150?img=13" alt="Amit Deshpande" class="author-img">
                    <div class="author-info">
                        <h4>Amit Deshpande</h4>
                        <p>Real estate developer</p>
                    </div>
                </div>
            </div>

        </div>
    </section>



<script>

document.addEventListener("DOMContentLoaded", function(){

    let propertyType = document.getElementById("propertyType");
    let bhkField = document.getElementById("bhkField");
    let sqftField = document.getElementById("sqftField");

    function toggleFields(){

        if(propertyType.value === "commercial"){

            bhkField.style.display = "none";
            sqftField.style.display = "block";

        }else{

            bhkField.style.display = "block";
            sqftField.style.display = "none";

        }
    }

    propertyType.addEventListener("change", toggleFields);

    toggleFields();

});

</script>

<script>
$(document).ready(function(){

    $('#budgetSelect').select2({
        width:'100%',
        minimumResultsForSearch: -1
    });

});
</script>
@include('dhara-jfin.layout.footer')

