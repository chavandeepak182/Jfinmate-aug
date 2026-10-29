@include('dhara-jfin.layout.header')

<?php
    foreach($data['propertie_details'] as $v) {  
            $price_range = $v->from_price. " to ". $v->to_price;
            $img = env('baseURL'). "/".$v->image; 
            $boucher = env('baseURL'). "/".$v->boucher;   
            $address = $v->localities.", ".$v->city; 
            $area = $v->area; 
            $rera = $v->rera; 
            $category = $v->category_name;  
            $latitude = $v->latitude; 
            $longitude = $v->longitude; 
            $s_price = $v->s_price; 
            $land_type = $v->land_type; 
            $builder_name = $v->builder_name; 
            $facilities = $v->facilities; 
            $title = $v->title; 
            $created_at = $v->created_at;
            $beds = $v->beds; 
            $baths = $v->baths; 
            $balconies = $v->balconies; 
            $parking = $v->parking; 
            $builtup_area =$v->builtup_area; 
            $nearby_locations = is_string($v->nearby_locations) ? json_decode($v->nearby_locations, true) : $v->nearby_locations; 
            $property_details = $v->property_details;
            $short_description = $v->short_description;
            $select_bhk = $v->select_bhk;
?>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />


<main class="main-wrapper">
    <div class="custom-container">
      
        <div class="custom-row" id="mainwrapper">
            
            <div class="content-main">
                <!-- Hero Header -->
               
{{-- Property Summary Header --}}


   
        

                <div class="gallery-wrapper">
                    <div class="gallery-main">
                        <button class="nav-arrow left" onclick="prevImage()">‹</button>

                       <img id="mainImage"
     src="{{ asset($data['main_image']) }}"
     alt="{{ $title }}">
                             

                        <button class="nav-arrow right" onclick="nextImage()">›</button>
                    </div>

                  <div class="thumbnail-bar">

    <!-- 🔥 MAIN IMAGE FIRST (properties table) -->
    <img
        src="{{ asset($data['main_image']) }}"
        class="thumbnail active"
        onclick="setImage(0)"
    >

    
  @foreach($data['additional_images'] as $index => $img)

    @if($img->image_url != $data['main_image']) {{-- 🔥 IMPORTANT --}}
    
        <img
            src="{{ asset($img->image_url) }}"
            class="thumbnail"
            onclick="setImage({{ $index + 1 }})"
        >

    @endif

@endforeach

</div>
                </div>
               
               

                 
<div class="property-summary-card">

    <div class="property-summary-left">

        {{-- Property Name --}}
        <h2 class="summary-property-title">
            <i class="fas fa-city"></i>

            <span>{{ $title }}</span>

            @if($builder_name)
                <small class="summary-builder">
                    Project by
                    <span>{{ $builder_name }}</span>
                </small>
            @endif
        </h2>

        {{-- Property Address --}}
        <div class="summary-property-location">
            <i class="fas fa-map-marker-alt"></i>
            <span>{{ $address }}</span>
        </div>

        {{-- Book Visit and RERA --}}
        <div class="summary-actions">

            <button type="button"
                    class="summary-book-btn"
                    onclick="openFormOverlay()">
                <i class="fas fa-phone-alt"></i>
                Book visit
            </button>

            @if(!empty($rera))
                <div class="summary-rera-badge">
                    <i class="fas fa-certificate"></i>
                    <span>Approved by RERA</span>
                </div>
            @endif

        </div>

    </div>

    {{-- Property Price --}}
    <div class="property-summary-right">

        <div class="summary-price">
            ₹{{ number_format((float) $s_price, 0, '.', ',') }}
            <span class="summary-price-star">*</span>
        </div>

        <!-- <div class="summary-price-caption">
            Onwards
        </div> -->

    </div>

</div>


                <div id="galleryModal" class="gallery-modal">
                    <span class="modal-close" onclick="closeGallery()">&times;</span>
                    <img id="modalMainImg" src="" class="modal-main-img">
                    <div class="modal-thumbnails-wrapper">
                        <div class="modal-thumbnails-container">
                            @foreach($data['additional_images'] as $index => $image)
                                <img src="{{ asset($image->image_url) }}" 
                                     class="modal-thumb" 
                                     onclick="updateModalImg('{{ asset($image->image_url) }}', this)"
                                     data-index="{{ $index }}">
                            @endforeach
                        </div>
                    </div>
                </div>

            
{{-- Quick Info Cards --}}

<div class="info-grid">

    <div class="info-card">
        <div class="info-icon"><i class="fas fa-bed"></i></div>
        <div class="info-details">
            <span class="info-value">
                {{ $select_bhk ? $select_bhk . ' BHK' : 'N/A' }}
            </span>
        </div>
    </div>

    <div class="info-card">
        <div class="info-icon"><i class="fas fa-ruler-combined"></i></div>
        <div class="info-details">
            <span class="info-value">
                {{ $area ? $area . ' Sq. Ft.' : 'N/A' }}
            </span>
        </div>
    </div>

    <div class="info-card">
        <div class="info-icon"><i class="fas fa-parking"></i></div>
        <div class="info-details">
            <span class="info-value">
                {{ $land_type ?: 'N/A' }}
            </span>
        </div>
    </div>

    <div class="info-card">
        <div class="info-icon"><i class="fas fa-user-tie"></i></div>
        <div class="info-details">
            <span class="info-value">
                {{ $builder_name ?: 'N/A' }}
            </span>
        </div>
    </div>

</div>






{{-- =========================================
     DYNAMIC FLOOR PLAN SECTION
     Place below your existing Quick Info Grid
========================================= --}}

@php
    $bhkOptions = [];

    if (!empty($select_bhk)) {
        preg_match_all('/\d+/', (string) $select_bhk, $matches);
        $bhkOptions = array_values(array_unique($matches[0]));
    }
@endphp

@if(!empty($bhkOptions))
<div class="dynamic-floor-plan">

    {{-- Heading --}}
    <div class="floor-plan-heading">
        <h2>Floor Plans</h2>
        <p>Explore the floor plan for your preferred configuration.</p>
    </div>

    {{-- BHK Tabs --}}
    <div class="floor-plan-tabs">
        @foreach($bhkOptions as $bhk)
            <button
                type="button"
                class="floor-plan-tab {{ $loop->first ? 'active' : '' }}"
                data-bhk="{{ $bhk }}"
            >
                {{ $bhk }} BHK
            </button>
        @endforeach
    </div>

    {{-- Generated Floor Plan --}}
    <div class="floor-plan-content">
        @foreach($bhkOptions as $bhk)
            <div
                class="floor-plan-item {{ $loop->first ? 'active' : '' }}"
                data-plan-bhk="{{ $bhk }}"
                style="{{ $loop->first ? '' : 'display:none;' }}"
            >
                <div class="auto-floor-plan">
                    <div class="auto-floor-plan-title">Floor plan</div>

                    <div class="floor-drawing" data-bhk="{{ $bhk }}">
                        <svg
                            class="floor-plan-svg"
                            viewBox="0 0 600 300"
                            role="img"
                            aria-label="{{ $bhk }} BHK illustrative floor plan"
                        >
                            {{-- Outer boundary --}}
                            <rect
                                x="10" y="10"
                                width="580" height="280"
                                class="plan-wall"
                            />

                            {{-- Living Room --}}
                            <rect
                                x="10" y="10"
                                width="290" height="140"
                                class="plan-room"
                            />
                            <text
                                x="155" y="80"
                                class="plan-label"
                            >Living</text>

                            {{-- Kitchen --}}
                            <rect
                                x="300" y="10"
                                width="290" height="140"
                                class="plan-room"
                            />
                            <text
                                x="445" y="80"
                                class="plan-label"
                            >Kitchen</text>

                            {{-- Bottom rooms generated using JavaScript --}}
                            <g class="generated-bottom-rooms"></g>
                        </svg>
                    </div>

                    <p class="floor-plan-note">
                        Illustrative layout for {{ $bhk }} BHK.
                        Actual room sizes and layouts may differ.
                    </p>
                </div>
            </div>
        @endforeach
    </div>

</div>
@endif





<script>
(function () {
    'use strict';

    /*
     * Generate the lower part of the floor plan.
     * This is an illustrative diagram, not an architectural drawing.
     */
    function generateFloorPlan(container) {
        const bhk = parseInt(container.dataset.bhk, 10);

        if (!Number.isInteger(bhk) || bhk < 1) {
            return;
        }

        const svg = container.querySelector('.floor-plan-svg');
        const group = container.querySelector('.generated-bottom-rooms');

        if (!svg || !group) {
            return;
        }

        // Prevent duplicate rooms if the function runs again.
        group.replaceChildren();

        const ns = 'http://www.w3.org/2000/svg';

        const startX = 10;
        const startY = 150;
        const totalWidth = 580;
        const roomHeight = 140;

        // Reserve part of the lower row for the balcony.
        const balconyWidth = 145;
        const bedroomCount = Math.max(1, Math.min(bhk, 6));
        const bedroomAreaWidth = totalWidth - balconyWidth;
        const bedroomWidth = bedroomAreaWidth / bedroomCount;

        function createSvgElement(tag, attributes, textContent) {
            const element = document.createElementNS(ns, tag);

            Object.entries(attributes).forEach(function ([key, value]) {
                element.setAttribute(key, value);
            });

            if (textContent !== undefined) {
                element.textContent = textContent;
            }

            return element;
        }

        // Draw bedrooms.
        for (let i = 0; i < bedroomCount; i++) {
            const x = startX + (i * bedroomWidth);

            const rect = createSvgElement('rect', {
                x: x,
                y: startY,
                width: bedroomWidth,
                height: roomHeight,
                class: 'plan-room'
            });

            const label = createSvgElement('text', {
                x: x + (bedroomWidth / 2),
                y: startY + (roomHeight / 2),
                class: 'plan-label',
                'font-size': bedroomWidth < 100 ? 12 : 17
            }, 'Bed ' + (i + 1));

            group.appendChild(rect);
            group.appendChild(label);
        }

        // Draw balcony.
        const balconyX = startX + bedroomAreaWidth;

        const balcony = createSvgElement('rect', {
            x: balconyX,
            y: startY,
            width: balconyWidth,
            height: roomHeight,
            class: 'plan-room'
        });

        const balconyLabel = createSvgElement('text', {
            x: balconyX + (balconyWidth / 2),
            y: startY + (roomHeight / 2),
            class: 'plan-label',
            'font-size': 14
        }, 'Balcony');

        group.appendChild(balcony);
        group.appendChild(balconyLabel);
    }

    function initializeFloorPlans() {
        document.querySelectorAll('.floor-drawing').forEach(
            generateFloorPlan
        );

        document.querySelectorAll('.dynamic-floor-plan').forEach(
            function (section) {
                const tabs = section.querySelectorAll('.floor-plan-tab');
                const plans = section.querySelectorAll('.floor-plan-item');

                tabs.forEach(function (tab) {
                    tab.addEventListener('click', function () {
                        const selectedBhk = tab.dataset.bhk;

                        tabs.forEach(function (item) {
                            const active = item === tab;

                            item.classList.toggle('active', active);
                            item.setAttribute(
                                'aria-pressed',
                                active ? 'true' : 'false'
                            );
                        });

                        plans.forEach(function (plan) {
                            const active =
                                plan.dataset.planBhk === selectedBhk;

                            plan.style.display = active ? 'block' : 'none';
                            plan.classList.toggle('active', active);
                        });
                    });

                    tab.setAttribute(
                        'aria-pressed',
                        tab.classList.contains('active') ? 'true' : 'false'
                    );
                });
            }
        );
    }

    if (document.readyState === 'loading') {
        document.addEventListener(
            'DOMContentLoaded',
            initializeFloorPlans
        );
    } else {
        initializeFloorPlans();
    }
})();
</script>



                <!-- Description -->
               <div class="details-section">
                <h2 class="section-title">
                    <i class="fas fa-align-left"></i> About Project
                </h2>
                <div class="description-content">
                    {!! base64_decode($property_details) !!}
                </div>
            </div>

                <!-- Amenities -->
            
{{-- =========================================
     AMENITIES SECTION - DYNAMIC UI
========================================= --}}

<div class="details-section amenities-section">

    <h2 class="amenities-main-title">Amenities</h2>

    @if(isset($facilities) && !empty($facilities))

        @php
            if (is_string($facilities)) {
                $decoded = json_decode($facilities, true);

                $facilitiesArray = is_array($decoded)
                    ? $decoded
                    : explode(',', $facilities);
            } else {
                $facilitiesArray = (array) $facilities;
            }

            $facilitiesArray = array_filter(
                array_map(function ($facility) {
                    return trim(trim((string) $facility), '"');
                }, $facilitiesArray),
                function ($facility) {
                    return $facility !== '';
                }
            );

            $amenityCategories = [
                'Sports and fitness' => [
                    'swimming pool',
                    'gym',
                    'fitness center',
                    'badminton court',
                    'jogging track',
                    'tennis court',
                    'basketball court',
                    'sports facility',
                    'yoga',
                    'fitness centre'
                ],

                'Lifestyle' => [
                    'clubhouse',
                    'garden',
                    'landscaped garden',
                    'kids play area',
                    'play area',
                    'children play area',
                    'senior citizen zone',
                    'balcony',
                    'spa',
                    'party hall',
                    'community hall'
                ],

                'Safety' => [
                    'security',
                    '24x7 security',
                    'cctv',
                    'cctv surveillance',
                    'video door phone',
                    'fire safety',
                    'intercom',
                    'gated community'
                ],

                'Utilities' => [
                    'power backup',
                    'rainwater harvesting',
                    'ev charging',
                    'covered parking',
                    'parking',
                    'wifi',
                    'wi-fi',
                    'lift',
                    'elevator',
                    'water supply',
                    'air conditioning',
                    'laundry room',
                    'central heating'
                ]
            ];

            $amenityIcons = [
                'swimming pool' => 'fa-swimming-pool',
                'gym' => 'fa-dumbbell',
                'fitness center' => 'fa-dumbbell',
                'fitness centre' => 'fa-dumbbell',
                'badminton court' => 'fa-table-tennis',
                'jogging track' => 'fa-shoe-prints',
                'tennis court' => 'fa-table-tennis',
                'basketball court' => 'fa-basketball-ball',
                'sports facility' => 'fa-running',
                'yoga' => 'fa-spa',

                'clubhouse' => 'fa-home',
                'garden' => 'fa-tree',
                'landscaped garden' => 'fa-tree',
                'kids play area' => 'fa-child',
                'play area' => 'fa-child',
                'children play area' => 'fa-child',
                'senior citizen zone' => 'fa-walking',
                'balcony' => 'fa-building',
                'spa' => 'fa-spa',
                'party hall' => 'fa-glass-cheers',
                'community hall' => 'fa-users',

                'security' => 'fa-shield-alt',
                '24x7 security' => 'fa-shield-alt',
                'cctv' => 'fa-video',
                'cctv surveillance' => 'fa-video',
                'video door phone' => 'fa-phone-volume',
                'fire safety' => 'fa-fire-extinguisher',
                'intercom' => 'fa-phone',
                'gated community' => 'fa-shield-alt',

                'power backup' => 'fa-bolt',
                'rainwater harvesting' => 'fa-cloud-rain',
                'ev charging' => 'fa-charging-station',
                'covered parking' => 'fa-parking',
                'parking' => 'fa-parking',
                'wifi' => 'fa-wifi',
                'wi-fi' => 'fa-wifi',
                'lift' => 'fa-elevator',
                'elevator' => 'fa-elevator',
                'water supply' => 'fa-faucet',
                'air conditioning' => 'fa-snowflake',
                'laundry room' => 'fa-tshirt',
                'central heating' => 'fa-temperature-high',

                'pets allowed' => 'fa-paw',
                'balcony garden' => 'fa-leaf',
                'default' => 'fa-check'
            ];

            $categorizedAmenities = [];

            foreach ($amenityCategories as $category => $keywords) {
                $categorizedAmenities[$category] = [];
            }

            foreach ($facilitiesArray as $facility) {
                $normalized = strtolower(trim($facility));
                $matchedCategory = null;

                foreach ($amenityCategories as $category => $keywords) {
                    foreach ($keywords as $keyword) {
                        if (
                            $normalized === $keyword ||
                            str_contains($normalized, $keyword)
                        ) {
                            $matchedCategory = $category;
                            break 2;
                        }
                    }
                }

                if ($matchedCategory === null) {
                    $matchedCategory = 'Other Amenities';
                }

                $categorizedAmenities[$matchedCategory][] = $facility;
            }

            $categorizedAmenities = array_filter(
                $categorizedAmenities,
                function ($items) {
                    return !empty($items);
                }
            );
        @endphp

        <div class="amenities-grid">

            @foreach($categorizedAmenities as $category => $items)

                <div class="amenity-category">

                    <h3 class="amenity-category-title">
                        {{ $category }}
                    </h3>

                    <div class="amenity-category-list">

                        @foreach($items as $facility)

                            @php
                                $normalized = strtolower(trim($facility));
                                $iconClass = $amenityIcons['default'];

                                foreach ($amenityIcons as $keyword => $icon) {
                                    if (
                                        $keyword !== 'default' &&
                                        (
                                            $normalized === $keyword ||
                                            str_contains($normalized, $keyword)
                                        )
                                    ) {
                                        $iconClass = $icon;
                                        break;
                                    }
                                }
                            @endphp

                            <div class="amenity-item">

                                <div class="amenity-icon">
                                    <i class="fas {{ $iconClass }}"
                                       aria-hidden="true"></i>
                                </div>

                                <span class="amenity-name">
                                    {{ $facility }}
                                </span>

                            </div>

                        @endforeach

                    </div>

                </div>

            @endforeach

        </div>

    @else

        <p class="amenities-empty">
            No amenities listed.
        </p>

    @endif

</div>





                <!-- Location Map -->
             
{{-- =========================================
     LOCATION AND NEARBY SECTION
========================================= --}}
<style>
    
/* Location Map */
.location-map-wrapper {
    width: 100%;
    height: 400px;
    position: relative;
    overflow: hidden;
    border-radius: 12px;
}

#map {
    width: 100%;
    height: 400px;
    min-height: 400px;
    display: block;
    z-index: 1;
}

    </style>
<div class="details-section location-nearby-section">

    <h2 class="location-main-title">Location and nearby</h2>

    {{-- Location Map --}}
    <div class="location-map-wrapper">
        <div id="map"></div>
    </div>

    {{-- Nearby Locations --}}
    @if(isset($nearby_locations) && !empty($nearby_locations))

        @php
            $nearbyCategories = [];

            if (is_array($nearby_locations)) {
                foreach ($nearby_locations as $category => $locations) {

                    if (empty($locations)) {
                        continue;
                    }

                    $items = is_array($locations)
                        ? $locations
                        : [$locations];

                    $items = array_values(array_filter(
                        $items,
                        function ($item) {
                            return is_string($item)
                                || is_numeric($item)
                                ? trim((string) $item) !== ''
                                : !empty($item);
                        }
                    ));

                    if (!empty($items)) {
                        $nearbyCategories[$category] = $items;
                    }
                }
            }
        @endphp

        @if(!empty($nearbyCategories))

            <div class="nearby-grid">

                @foreach($nearbyCategories as $category => $locations)

                    <div class="nearby-category">

                        <h3 class="nearby-category-title">
                            {{ $category }}
                        </h3>

                        <div class="nearby-category-list">

                            @foreach($locations as $loc)

                                <div class="nearby-item">

                                    <span class="nearby-place-name">
                                        {{ is_array($loc)
                                            ? ($loc['name'] ?? $loc['location'] ?? '')
                                            : $loc }}
                                    </span>

                                    @if(is_array($loc) && !empty($loc['distance']))
                                        <span class="nearby-distance">
                                            {{ $loc['distance'] }}
                                        </span>
                                    @endif

                                </div>

                            @endforeach

                        </div>

                    </div>

                @endforeach

            </div>

        @else
            <p class="nearby-empty">No nearby locations specified.</p>
        @endif

    @else
        <p class="nearby-empty">No nearby locations specified.</p>
    @endif

</div>



{{-- Nearby Locations --}}
<div class="details-section nearby-section">

    <h2 class="section-title">
        <i class="fas fa-route"></i> Nearby Locations
    </h2>

    @if(isset($nearby_locations) && is_array($nearby_locations) && count($nearby_locations) > 0)

        <div class="nearby-grid">

            @foreach($nearby_locations as $category => $locations)

                @if(!empty($locations))

                    <div class="nearby-category">

                        <h3 class="nearby-category-title">
                            {{ $category }}
                        </h3>

                        <div class="nearby-category-list">

                            @if(is_array($locations))

                                @foreach($locations as $loc)

                                    @if(!empty($loc))

                                        <div class="nearby-item">

                                            <span class="nearby-place-name">
                                                {{ is_array($loc)
                                                    ? ($loc['name'] ?? $loc['location'] ?? '')
                                                    : $loc }}
                                            </span>

                                            @if(is_array($loc) && !empty($loc['distance']))
                                                <span class="nearby-distance">
                                                    {{ $loc['distance'] }}
                                                </span>
                                            @endif

                                        </div>

                                    @endif

                                @endforeach

                            @else

                                <div class="nearby-item">
                                    <span class="nearby-place-name">
                                        {{ $locations }}
                                    </span>
                                </div>

                            @endif

                        </div>

                    </div>

                @endif

            @endforeach

        </div>

    @else

        <p class="nearby-empty">No nearby locations specified.</p>

    @endif

</div>





                <!-- Popular Searches -->
             
{{-- Popular Searches / Builder Information Card --}}

<div class="popular-searches-section">

    <div class="builder-info">
        <div class="builder-details">
            <h3>{{ $builder_name ?? 'Siddhivinayak Realty' }}</h3>
            <p>Builder since 2008.</p>
        </div>

        <a href="#popular-searches" class="builder-project-link">
            Check other projects
            <i class="fas fa-arrow-up-right-from-square"></i>
        </a>
    </div>

</div>

{{-- Existing dynamic Popular Searches --}}
<div class="details-section popular-searches-content"
     id="popular-searches">

    <h2 class="section-title">
        <i class="fas fa-search"></i> Popular Searches
    </h2>

    <div class="popular-searches">
        <a href="#" class="search-tag">
            Flats for sale in {{ $v->city }}
        </a>

        <a href="#" class="search-tag">
            {{ $select_bhk }} BHK in {{ $v->city }}
        </a>

        <a href="#" class="search-tag">
            Residential Projects in {{ $v->localities }}
        </a>

        <a href="#" class="search-tag">
            {{ $title }} Price
        </a>
    </div>

</div>

            </div>
            


<div class="content-sidebar">

    <div id="enquire" class="sidebar-card">

        {{-- EXISTING EXPRESS INTEREST FORM --}}
        <div class="sidebar-form-box">

            <h3 class="mb-3">Express Interest</h3>

            <form method="POST"
                  id="consult-form"
                  action="{{ route('enquiry.store') }}">

                @csrf

                <div class="row">

                    <div class="form-group">
                        <label for="name">Your name</label>
                        <input
                            class="form-control"
                            name="name"
                            id="name"
                            type="text"
                            placeholder="Abc"
                            required
                        >
                    </div>

                    <div class="form-group">
                        <label for="contact">Mobile number</label>
                        <input
                            type="text"
                            name="contact"
                            id="contact"
                            class="form-control"
                            placeholder="Enter mobile number"
                            required
                        >
                    </div>

                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input
                            class="form-control"
                            name="email"
                            id="email"
                            type="email"
                            placeholder="Enter email address"
                            required
                        >
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea
                            name="message"
                            id="message"
                            class="form-control"
                            rows="5"
                            placeholder="Enter your message"
                            required
                        ></textarea>
                    </div>

                    <div class="form-group text-center">
                        <button
                            class="btn btn-primary btn-md rounded full-width"
                            type="submit"
                        >Send Message</button>
                    </div>

                </div>
            </form>

            <div id="thank-you-message" style="display: none;">
    Thank you for your enquiry! Our team will get back to you shortly.
</div>

            {{-- EXISTING PROJECT STATUS --}}
            <div class="mt-3 pt-3 border-top project-status">

                <h4 class="mb-2">Project Status</h4>

                <div class="d-flex justify-content-between mb-1"
                     style="font-size: 0.85rem;">

                    <span>Posted On:</span>

                    <span class="fw-bold">
                        {{ \Carbon\Carbon::parse($v->created_at)->format('M d, Y') }}
                    </span>

                </div>

                {{-- EXISTING BROCHURE BUTTON --}}
                <button
                    class="btn-brochure mt-2"
                    id="downloadBrochureBtn"
                    onclick="openEnquiryModal()"
                >
                    <i class="fas fa-download"></i>
                    Download Brochure
                </button>

            </div>

        </div>


        {{-- EMI CALCULATOR: ADDED BELOW THE EXISTING FORM --}}
        <div class="emi-calculator-box">

            <h3 class="emi-heading">EMI calculator</h3>

            {{-- Loan Amount --}}
            <div class="emi-control">

                <div class="emi-control-heading">
                    <label for="emi-loan-amount">Loan amount</label>

                    <input
                        type="text"
                        id="emi-loan-display"
                        value="2,50,000"
                        inputmode="numeric"
                        aria-label="Loan amount"
                    >
                </div>

                <input
                    type="range"
                    id="emi-loan-amount"
                    min="50000"
                    max="5000000"
                    step="10000"
                    value="250000"
                    class="emi-slider"
                >

                <div class="emi-limits">
                    <span>50,000</span>
                    <span>50,00,000</span>
                </div>

            </div>


            {{-- Interest Rate --}}
            <div class="emi-control">

                <div class="emi-control-heading">
                    <label for="emi-interest-rate">Interest rate (p.a)</label>

                    <div class="emi-editable-value">
                        <input
                            type="number"
                            id="emi-interest-display"
                            value="12"
                            min="5"
                            max="50"
                            step="0.1"
                            aria-label="Interest rate"
                        >
                        <span>%</span>
                    </div>
                </div>

                <input
                    type="range"
                    id="emi-interest-rate"
                    min="5"
                    max="50"
                    step="0.1"
                    value="12"
                    class="emi-slider"
                >

                <div class="emi-limits">
                    <span>5%</span>
                    <span>50%</span>
                </div>

            </div>


            {{-- Loan Tenure --}}
            <div class="emi-control">

                <div class="emi-control-heading">
                    <label for="emi-tenure">Loan tenure</label>

                    <div class="emi-editable-value">
                        <input
                            type="number"
                            id="emi-tenure-display"
                            value="10"
                            min="5"
                            max="30"
                            step="1"
                            aria-label="Loan tenure in years"
                        >
                        <span>years</span>
                    </div>
                </div>

                <input
                    type="range"
                    id="emi-tenure"
                    min="5"
                    max="30"
                    step="1"
                    value="10"
                    class="emi-slider"
                >

                <div class="emi-limits">
                    <span>5 years</span>
                    <span>30 years</span>
                </div>

            </div>


            {{-- Monthly EMI --}}
            <div class="emi-output">

                <div class="emi-output-label">Monthly EMI</div>

                <div class="emi-output-box">
                    <span id="emi-monthly-result">₹ 3,586</span>
                    <span class="emi-month-text">/ Month</span>
                </div>

            </div>


            {{-- Principal And Interest Breakdown --}}
            <div class="emi-breakdown">

                <div class="emi-breakdown-bar">
                    <div id="emi-principal-bar"
                         class="emi-principal-bar"></div>

                    <div id="emi-interest-bar"
                         class="emi-interest-bar"></div>
                </div>

                <div class="emi-breakdown-row">

                    <div class="emi-breakdown-column">

                        <span class="emi-breakdown-label">
                            Principal amount
                        </span>

                        <div>
                            <strong id="emi-principal-result">
                                ₹ 2,50,000
                            </strong>

                            <small id="emi-principal-percent">(50%)</small>
                        </div>

                    </div>

                    <div class="emi-breakdown-column emi-align-right">

                        <span class="emi-breakdown-label">
                            Total interest
                        </span>

                        <div>
                            <strong id="emi-interest-result">
                                ₹ 1,80,000
                            </strong>

                            <small id="emi-interest-percent">(50%)</small>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


<!-- Brochure Modal Backdrop -->
<div id="modalBackdrop"
     class="modal-backdrop"
     onclick="closeEnquiryModal()"
     style="display: none;">
</div>

<!-- Download Brochure Modal -->
<div class="modal" id="enquiryModal" style="visibility: hidden;">
    <div class="modal-content-prop">

        <div class="modal-header-prop">
            <div class="modal-header-title">
                <h2>Download Brochure</h2>
                <p>Get complete project details in your inbox</p>
            </div>

            <div class="modal-close-prop">
                <button type="button"
                        class="close-btn"
                        onclick="closeEnquiryModal()"
                        aria-label="Close">
                    &times;
                </button>
            </div>
        </div>

        <div class="modal-body">

            <!-- Success Message -->
            <div id="brochureSuccess"
                 class="brochure-success"
                 style="display: none;">
                <strong>Thank You!</strong>
                <p>Your enquiry was submitted successfully. Your brochure download will begin shortly.</p>
            </div>

            <!-- Error Message -->
            <div id="brochureError"
                 class="brochure-error"
                 style="display: none;">
            </div>

            <!-- Enquiry Form -->
            <form id="enquiryForm"
                  class="enquiry-form"
                  method="POST"
                  action="{{ route('enquiry.store') }}">

                @csrf

                <div class="form-group">
                    <label for="brochure_name">
                        Full Name <span class="required">*</span>
                    </label>

                    <input type="text"
                           id="brochure_name"
                           name="name"
                           placeholder="Enter your full name"
                           class="brochure-input"
                           maxlength="255"
                           required>
                </div>

                <div class="form-group">
                    <label for="brochure_phone">
                        Phone Number <span class="required">*</span>
                    </label>

                    <input type="tel"
                           id="brochure_phone"
                           name="contact"
                           placeholder="Enter 10 digit mobile number"
                           class="brochure-input"
                           maxlength="10"
                           inputmode="numeric"
                           pattern="[0-9]{10}"
                           oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10)"
                           required>
                </div>

                <div class="form-group">
                    <label for="brochure_email">
                        Email Address <span class="required">*</span>
                    </label>

                    <input type="email"
                           id="brochure_email"
                           name="email"
                           placeholder="your.email@example.com"
                           class="brochure-input"
                           maxlength="255"
                           required>
                </div>

                <input type="hidden"
                       name="enquiry_type"
                       value="brochure">

                <div class="brochure-info-box">
                    <div class="brochure-info-item">
                        <i class="fas fa-file-pdf"></i>
                        <span>Instant PDF Download</span>
                    </div>

                    <div class="brochure-info-item">
                        <i class="fas fa-lock"></i>
                        <span>Your data is secure</span>
                    </div>
                </div>

                <button type="submit"
                        id="brochureSubmitBtn"
                        class="brochure-submit-btn">
                    <i class="fas fa-download"></i>
                    Download Brochure Now
                </button>

            </form>
        </div>
    </div>
</div>
   <!-- //visit form -->
<div class="form-container">
    <div class="form-header-title">
        <h1>Book a Visit</h1>
        <p>Fill out the form below to schedule your visit</p>
    </div>

    <button class="close-btn visit-close" onclick="closeFormOverlay()">X</button>

    <form id="visitForm" method="POST" action="{{ route('visit.enquiry.submit') }}">
        @csrf

        <!-- NAME (NO VALIDATION) -->
        <div class="form-group">
            <label for="name">
                Name <span class="required">*</span>
            </label>
            <input 
                type="text" 
                id="name" 
                name="name" 
                placeholder="Enter your full name"
            >
        </div>

        <!-- EMAIL -->
        <div class="form-group">
            <label for="email">Email</label>
            <input 
                type="email" 
                id="email" 
                name="email" 
                placeholder="your.email@example.com"
            >
            <small class="error" id="emailError"></small>
        </div>

        <!-- PHONE -->
        <div class="form-group">
            <label for="phone">
                Phone Number <span class="required">*</span>
            </label>
            <input 
                type="tel" 
                id="phone" 
                name="phone" 
                placeholder="Enter 10 digit mobile number"
                maxlength="10"
                oninput="this.value = this.value.replace(/[^0-9]/g, '')"
            >
            <small class="error" id="phoneError"></small>
        </div>

        <!-- VISIT DATE -->
        <div class="form-group">
            <label>
                Visit Date <span class="required">*</span>
            </label>
            <div class="radio-group">
                <label class="radio-option">
                    <input type="radio" name="visitedate" value="this week">
                    <span class="radio-label">This Week</span>
                </label>
                <label class="radio-option">
                    <input type="radio" name="visitedate" value="this weekend">
                    <span class="radio-label">This Weekend</span>
                </label>
                <label class="radio-option">
                    <input type="radio" name="visitedate" value="this month">
                    <span class="radio-label">This Month</span>
                </label>
            </div>
            <small class="error" id="dateError"></small>
        </div>

        <!-- SUBMIT -->
        <button type="submit" class="submit-btn">
            Book Visit
        </button>
    </form>
</div>
<script>
    function closePopup(){
        document.getElementById("popup").style.visibility = "hidden";
        document.getElementById("popupOverlay").style.display = "none";
        document.getElementById("mainwrapper").classList.remove("blur");
    }
    function openEnquiryModal() {
        document.getElementById('enquiryModal').style.visibility = 'visible';
        document.getElementById('modalBackdrop').style.display = 'block';
    }
    function closeEnquiryModal() {
        document.getElementById('enquiryModal').style.visibility = 'hidden';
        document.getElementById('modalBackdrop').style.display = 'none';
    }   
    function openFormOverlay() {
        document.querySelector('.form-container').style.visibility = 'visible';
        // document.querySelector('.form-container-overlay').style.display = 'block';
        document.getElementById("mainwrapper").classList.add("blur");
        document.body.style.overflow = 'hidden'; // Prevent background scrolling
    }
    function closeFormOverlay() {
        document.querySelector('.form-container').style.visibility = 'hidden';
        document.body.style.overflow = ''; // Restore background scrolling
        document.getElementById("mainwrapper").classList.remove("blur");

    }
</script>















<script>
document.addEventListener('DOMContentLoaded', function () {

    const loanSlider = document.getElementById('emi-loan-amount');
    const loanDisplay = document.getElementById('emi-loan-display');

    const interestSlider = document.getElementById('emi-interest-rate');
    const interestDisplay = document.getElementById('emi-interest-display');

    const tenureSlider = document.getElementById('emi-tenure');
    const tenureDisplay = document.getElementById('emi-tenure-display');

    if (
        !loanSlider || !loanDisplay ||
        !interestSlider || !interestDisplay ||
        !tenureSlider || !tenureDisplay
    ) {
        return;
    }

    const formatIndian = function (value) {
        return Math.round(value).toLocaleString('en-IN');
    };

    const formatRupees = function (value) {
        return '₹ ' + formatIndian(value);
    };

    function calculateEMI() {

        const principal = Number(loanSlider.value);
        const annualRate = Number(interestSlider.value);
        const years = Number(tenureSlider.value);

        const months = years * 12;
        const monthlyRate = annualRate / 1200;

        let monthlyEMI;

        if (monthlyRate === 0) {
            monthlyEMI = principal / months;
        } else {
            const factor = Math.pow(1 + monthlyRate, months);

            monthlyEMI =
                principal * monthlyRate * factor / (factor - 1);
        }

        const totalPayment = monthlyEMI * months;
        const totalInterest = Math.max(0, totalPayment - principal);

        const principalPercent =
            totalPayment > 0 ? principal / totalPayment * 100 : 100;

        const interestPercent =
            totalPayment > 0 ? totalInterest / totalPayment * 100 : 0;

        loanDisplay.value = formatIndian(principal);
        interestDisplay.value = annualRate;
        tenureDisplay.value = years;

        document.getElementById('emi-monthly-result').textContent =
            formatRupees(monthlyEMI);

        document.getElementById('emi-principal-result').textContent =
            formatRupees(principal);

        document.getElementById('emi-interest-result').textContent =
            formatRupees(totalInterest);

        document.getElementById('emi-principal-percent').textContent =
            '(' + principalPercent.toFixed(0) + '%)';

        document.getElementById('emi-interest-percent').textContent =
            '(' + interestPercent.toFixed(0) + '%)';

        document.getElementById('emi-principal-bar').style.width =
            principalPercent + '%';

        document.getElementById('emi-interest-bar').style.width =
            interestPercent + '%';
    }

    // Update EMI when a slider changes.

    loanSlider.addEventListener('input', calculateEMI);
    interestSlider.addEventListener('input', calculateEMI);
    tenureSlider.addEventListener('input', calculateEMI);

    // Update loan amount from direct input.

    loanDisplay.addEventListener('change', function () {

        let value = Number(this.value.replace(/[^0-9]/g, ''));

        if (!Number.isFinite(value)) {
            value = 250000;
        }

        value = Math.max(50000, Math.min(5000000, value));

        loanSlider.value = value;
        calculateEMI();
    });

    // Update interest rate from direct input.

    interestDisplay.addEventListener('change', function () {

        let value = parseFloat(this.value);

        if (!Number.isFinite(value)) {
            value = 12;
        }

        value = Math.max(5, Math.min(50, value));

        interestSlider.value = value;
        calculateEMI();
    });

    // Update tenure from direct input.

    tenureDisplay.addEventListener('change', function () {

        let value = parseInt(this.value, 10);

        if (!Number.isFinite(value)) {
            value = 10;
        }

        value = Math.max(5, Math.min(30, value));

        tenureSlider.value = value;
        calculateEMI();
    });

    // Initial calculation.

    calculateEMI();

});
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const form = document.getElementById('consult-form');
    const thankYouMessage = document.getElementById('thank-you-message');

    if (!form) return;

    form.addEventListener('submit', async function (event) {

        event.preventDefault();

        const submitButton = form.querySelector('[type="submit"]');

        if (form.dataset.submitting === 'true') return;

        form.dataset.submitting = 'true';

        if (submitButton) {
            submitButton.disabled = true;
            submitButton.textContent = 'Sending...';
        }

        try {
            const response = await fetch(form.action, {
                method: 'POST',
                body: new FormData(form),
                headers: {
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                credentials: 'same-origin'
            });

            const contentType = response.headers.get('content-type') || '';

            if (!contentType.includes('application/json')) {
                throw new Error(
                    'The server did not return JSON. Please check the enquiry route.'
                );
            }

            const data = await response.json();

            if (!response.ok || data.status !== true) {
                throw new Error(
                    data.message || 'Unable to submit your enquiry. Please try again.'
                );
            }

            // Show the existing success message.
            if (thankYouMessage) {
                thankYouMessage.textContent =
                    data.message || 'Thank you! Your message has been submitted.';

                thankYouMessage.style.display = 'block';
            }

            // Show success popup.
            const popup = document.getElementById('enquiry-success-popup');
            const popupText = document.getElementById('enquiry-success-text');

            if (popup && popupText) {
                popupText.textContent =
                    data.message || 'Thank you for your enquiry!';

                popup.style.display = 'flex';
                document.body.style.overflow = 'hidden';
            }

            // Clear submitted fields.
            form.reset();

        } catch (error) {

            alert(error.message || 'Something went wrong. Please try again.');

        } finally {

            form.dataset.submitting = 'false';

            if (submitButton) {
                submitButton.disabled = false;
                submitButton.textContent = 'Send Message';
            }

        }

    });

    // Close the success popup.
    const closeButton = document.getElementById('close-enquiry-popup');
    const popup = document.getElementById('enquiry-success-popup');

    function closePopup() {
        if (popup) {
            popup.style.display = 'none';
            document.body.style.overflow = '';
        }
    }

    if (closeButton) {
        closeButton.addEventListener('click', closePopup);
    }

    if (popup) {
        popup.addEventListener('click', function (event) {
            if (event.target === popup) {
                closePopup();
            }
        });
    }

});
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('enquiryModal');
    const backdrop = document.getElementById('modalBackdrop');
    const form = document.getElementById('enquiryForm');
    const submitButton = document.getElementById('brochureSubmitBtn');
    const successBox = document.getElementById('brochureSuccess');
    const errorBox = document.getElementById('brochureError');

    if (!modal || !backdrop || !form || !submitButton) {
        return;
    }

    // Existing dynamic brochure URL from your Blade file.
    const brochureUrl = @json($boucher);

    // Open modal.
    window.openEnquiryModal = function () {
        successBox.style.display = 'none';
        errorBox.style.display = 'none';

        modal.style.visibility = 'visible';
        modal.classList.add('active');
        backdrop.style.display = 'block';
        document.body.classList.add('brochure-modal-open');
    };

    // Close modal and restore scrolling.
    window.closeEnquiryModal = function () {
        modal.classList.remove('active');
        modal.style.visibility = 'hidden';
        backdrop.style.display = 'none';
        document.body.classList.remove('brochure-modal-open');
    };

    // Close with Escape key.
    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape' && modal.classList.contains('active')) {
            window.closeEnquiryModal();
        }
    });

    // Submit enquiry and download brochure after success.
    form.addEventListener('submit', async function (event) {
        event.preventDefault();

        successBox.style.display = 'none';
        errorBox.style.display = 'none';

        const mobile = document.getElementById('brochure_phone').value.trim();

        if (!/^[0-9]{10}$/.test(mobile)) {
            errorBox.textContent = 'Please enter a valid 10-digit mobile number.';
            errorBox.style.display = 'block';
            return;
        }

        if (!form.checkValidity()) {
            form.reportValidity();
            return;
        }

        if (!brochureUrl || brochureUrl.trim() === '') {
            errorBox.textContent = 'The brochure is not available right now. Please contact us.';
            errorBox.style.display = 'block';
            return;
        }

        submitButton.disabled = true;
        submitButton.innerHTML = 'Please wait...';

        try {
            const response = await fetch(form.action, {
                method: 'POST',
                body: new FormData(form),
                headers: {
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                }
            });

            const data = await response.json();

            if (!response.ok || data.status !== true) {
                let message = data.message || 'Unable to submit your enquiry. Please try again.';

                if (data.errors) {
                    message = Object.values(data.errors).flat().join('\n');
                }

                throw new Error(message);
            }

            successBox.style.display = 'block';
            successBox.scrollIntoView({
                behavior: 'smooth',
                block: 'nearest'
            });

            form.reset();

            // Trigger the dynamic brochure download.
            const link = document.createElement('a');
            link.href = brochureUrl;
            link.setAttribute('download', '');
            link.style.display = 'none';

            document.body.appendChild(link);
            link.click();
            link.remove();

            // Close the modal after a short delay.
            setTimeout(function () {
                window.closeEnquiryModal();
            }, 1800);

        } catch (error) {
            errorBox.textContent =
                error.message || 'Something went wrong. Please try again.';

            errorBox.style.display = 'block';

        } finally {
            submitButton.disabled = false;
            submitButton.innerHTML =
                '<i class="fas fa-download"></i> Download Brochure Now';
        }
    });
});
</script>
<script>
function openFormOverlay() {
    const form = document.querySelector('.form-container');
    const wrapper = document.getElementById('mainwrapper');

    if (!form) {
        console.error('Book a Visit form not found: .form-container');
        return;
    }

    form.style.setProperty('display', 'block', 'important');
    form.style.setProperty('visibility', 'visible', 'important');
    form.style.setProperty('opacity', '1', 'important');
    form.style.setProperty('z-index', '10002', 'important');

    if (wrapper) {
        wrapper.classList.add('blur');
    }

    document.body.style.overflow = 'hidden';
}

function closeFormOverlay() {
    const form = document.querySelector('.form-container');
    const wrapper = document.getElementById('mainwrapper');

    if (form) {
        form.style.setProperty('display', 'none', 'important');
        form.style.setProperty('visibility', 'hidden', 'important');
        form.style.setProperty('opacity', '0', 'important');
    }

    if (wrapper) {
        // wrapper.classList.remove('blur');
    }

    document.body.style.overflow = '';
}
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<script>
document.addEventListener('DOMContentLoaded', function () {
    const visitForm = document.getElementById('visitForm');

    if (!visitForm) return;

    visitForm.addEventListener('submit', async function (event) {
        event.preventDefault();

        if (!visitForm.checkValidity()) {
            visitForm.reportValidity();
            return;
        }

        const submitButton = visitForm.querySelector(
            'button[type="submit"], input[type="submit"]'
        );

        const originalText = submitButton
            ? submitButton.innerHTML
            : '';

        if (submitButton) {
            submitButton.disabled = true;
            submitButton.innerHTML = 'Please wait...';
        }

        try {
            const response = await fetch(visitForm.action, {
                method: 'POST',
                body: new FormData(visitForm),
                headers: {
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                }
            });

            const data = await response.json();

            if (!response.ok || data.status !== 'success') {
                throw new Error(
                    data.message || 'Unable to submit your visit enquiry.'
                );
            }

            // Close the Book a Visit form.
            if (typeof closeFormOverlay === 'function') {
                closeFormOverlay();
            }

            // Show the success popup without leaving the page.
           Swal.fire({
    icon: 'success',
    title: 'Thank You!',
    text: data.message || 'Visit enquiry submitted successfully.',
    confirmButtonText: 'OK',
    confirmButtonColor: '#295cab',
    allowOutsideClick: false
});

            visitForm.reset();

        } catch (error) {
            alert(error.message || 'Something went wrong. Please try again.');
        } finally {
            if (submitButton) {
                submitButton.disabled = false;
                submitButton.innerHTML = originalText;
            }
        }
    });
});
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const images = [
        @json(asset($data['main_image'])),
        ...@json(
            collect($data['additional_images'])
                ->filter(fn($img) => $img->image_url != $data['main_image'])
                ->values()
                ->map(fn($img) => asset($img->image_url))
                ->all()
        )
    ];

    const mainImage = document.getElementById('mainImage');
    const thumbnails = document.querySelectorAll('.thumbnail');

    let currentIndex = 0;

    function updateGallery(index) {
        if (!mainImage || images.length === 0) return;

        // Keep index within the valid range.
        currentIndex = (index + images.length) % images.length;

        mainImage.src = images[currentIndex];

        thumbnails.forEach((thumbnail, i) => {
            thumbnail.classList.toggle('active', i === currentIndex);
        });
    }

    window.setImage = function (index) {
        updateGallery(index);
    };

    window.nextImage = function () {
        updateGallery(currentIndex + 1);
    };

    window.prevImage = function () {
        updateGallery(currentIndex - 1);
    };

});
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const mapElement = document.getElementById('map');

    if (!mapElement) {
        console.error('Map container #map was not found.');
        return;
    }

    if (typeof L === 'undefined') {
        console.error('Leaflet library did not load.');
        return;
    }

    const lat = Number(@json($latitude ?? 18.5204));
    const lng = Number(@json($longitude ?? 73.8567));

    if (
        !Number.isFinite(lat) ||
        !Number.isFinite(lng) ||
        lat < -90 || lat > 90 ||
        lng < -180 || lng > 180
    ) {
        console.error('Invalid latitude or longitude:', lat, lng);
        return;
    }

    const map = L.map(mapElement).setView([lat, lng], 15);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    L.marker([lat, lng]).addTo(map)
        .bindPopup(@json($title ?? 'Property location'))
        .openPopup();

    setTimeout(function () {
        map.invalidateSize();
    }, 500);
});
</script>

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const mapElement = document.getElementById('map');

    if (!mapElement) {
        console.error('Map container #map was not found.');
        return;
    }

    if (typeof L === 'undefined') {
        console.error('Leaflet JavaScript failed to load.');
        return;
    }

    // Use the selected property's actual coordinates.
    const rawLat = @json($latitude ?? null);
    const rawLng = @json($longitude ?? null);

    const lat = Number(rawLat);
    const lng = Number(rawLng);

    if (
        rawLat === null || rawLat === '' ||
        rawLng === null || rawLng === '' ||
        !Number.isFinite(lat) ||
        !Number.isFinite(lng) ||
        lat < -90 || lat > 90 ||
        lng < -180 || lng > 180
    ) {
        mapElement.innerHTML =
            '<p style="padding:20px;">Property location coordinates are missing or invalid.</p>';

        console.error('Check latitude and longitude in your properties table.');
        return;
    }

    const map = L.map(mapElement).setView([lat, lng], 15);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    L.marker([lat, lng])
        .addTo(map)
        .bindPopup(@json($title ?? 'Property location'))
        .openPopup();

    setTimeout(function () {
        map.invalidateSize();
    }, 300);
});
</script>


<?php } ?>
@include('dhara-jfin.layout.footer')
