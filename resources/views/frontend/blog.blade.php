
@include('dhara-jfin.layout.header')

@section('title', 'Blogs')
@section('description', '')
@section('keywords', '')

@section('content')

<!-- =========================================================
     BLOG HERO BANNER
========================================================= -->
<section class="blog-page-banner">
    <div class="blog-page-banner-overlay"></div>

    <div class="blog-page-banner-content">
        <!-- Optional title -->
        <!-- <h1>Blogs</h1> -->
    </div>
</section>


<!-- =========================================================
     BLOG PAGE STYLES
========================================================= -->
<style>
    /* =====================================================
       GLOBAL BLOG PAGE
    ===================================================== */

    .blog-page-wrapper {
        width: 100%;
        overflow: hidden;
    }

    /* =====================================================
       HERO BANNER
    ===================================================== */

    .blog-page-banner {
        position: relative;
        width: 100%;
        height: 420px;
        min-height: 420px;

        background-image: url('{{ asset('theme/frontend/img/blog.jpg') }}');
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;

        display: flex;
        align-items: center;
        justify-content: center;

        overflow: hidden;
    }

    .blog-page-banner-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(
            to bottom,
            rgba(0, 0, 0, 0.08),
            rgba(0, 0, 0, 0.25)
        );
        z-index: 1;
    }

    .blog-page-banner-content {
        position: relative;
        z-index: 2;
        width: 100%;
        max-width: 1200px;
        padding: 0 20px;
    }

    .blog-page-banner-content h1 {
        margin: 0;
        color: #ffffff;
        font-size: 52px;
        font-weight: 700;
        text-align: center;
        text-shadow: 0 3px 12px rgba(0, 0, 0, 0.45);
    }


    /* =====================================================
       BLOG MAIN CONTAINER
    ===================================================== */

    .blog-main-section {
        width: 100%;
        padding: 65px 0 70px;
        background: #ffffff;
    }

    .blog-container {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding-left: 20px;
        padding-right: 20px;
    }


    /* =====================================================
       SECTION TITLE
    ===================================================== */

    .blog-section-title {
        margin: 0 0 35px;
        text-align: center;
        color: #295cab;
        font-size: 34px;
        line-height: 1.25;
        font-weight: 700;
    }

    .blog-section-title::after {
        content: "";
        display: block;
        width: 55px;
        height: 3px;
        margin: 14px auto 0;
        background: #295cab;
        border-radius: 5px;
    }


    /* =====================================================
       SEARCH AREA
    ===================================================== */

    .blog-filter-box {
        width: 100%;
        padding: 25px;
        margin-bottom: 45px;

        background: #ffffff;
        border: 1px solid #e8edf5;
        border-radius: 14px;

        box-shadow: 0 8px 30px rgba(41, 92, 171, 0.08);
    }

    .blog-filter-row {
        display: flex;
        align-items: center;
        gap: 15px;
        width: 100%;
    }

    .blog-search-field,
    .blog-category-field {
        height: 50px !important;
        min-height: 50px !important;

        width: 100%;
        border: 1px solid #d9e0eb !important;
        border-radius: 8px !important;

        padding: 10px 15px !important;

        color: #333333;
        background: #ffffff;

        font-size: 15px;
        outline: none;

        box-shadow: none !important;
    }

    .blog-search-field:focus,
    .blog-category-field:focus {
        border-color: #295cab !important;
        box-shadow: 0 0 0 3px rgba(41, 92, 171, 0.10) !important;
    }

    .blog-search-button {
        width: 100%;
        height: 50px;

        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;

        border: 0;
        border-radius: 8px;

        background: #295cab;
        color: #ffffff;

        font-size: 15px;
        font-weight: 600;

        transition: all 0.25s ease;
    }

    .blog-search-button:hover {
        background: #1e4788;
        color: #ffffff;
        transform: translateY(-1px);
    }

    .blog-search-button i {
        font-size: 16px;
    }


    /* =====================================================
       SELECT2
    ===================================================== */

    .blog-filter-box .select2-container {
        width: 100% !important;
    }

    .blog-filter-box .select2-container--default
    .select2-selection--single {
        width: 100%;
        height: 50px;

        border: 1px solid #d9e0eb;
        border-radius: 8px;

        background: #ffffff;
    }

    .blog-filter-box .select2-container--default
    .select2-selection--single
    .select2-selection__rendered {
        height: 48px;
        line-height: 48px;

        padding-left: 15px;
        padding-right: 40px;

        color: #333333;
        font-size: 15px;
    }

    .blog-filter-box .select2-container--default
    .select2-selection--single
    .select2-selection__arrow {
        height: 48px;
        right: 8px;
    }

    .blog-filter-box .select2-container--default.select2-container--open
    .select2-selection--single,
    .blog-filter-box .select2-container--default.select2-container--focus
    .select2-selection--single {
        border-color: #295cab;
    }

    .select2-dropdown {
        border: 1px solid #d9e0eb !important;
        border-radius: 8px !important;
        overflow: hidden;
    }

    .select2-results__option {
        padding: 10px 14px;
        font-size: 14px;
    }

    .select2-container--default
    .select2-results__option--highlighted[aria-selected] {
        background-color: #295cab;
    }


    /* =====================================================
       BLOG GRID
    ===================================================== */

    .blog-grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 30px;
        width: 100%;
    }


    /* =====================================================
       BLOG CARD
    ===================================================== */

    .blog-card-link {
        display: block;
        height: 100%;

        color: inherit;
        text-decoration: none !important;
    }

    .blog-card {
        position: relative;

        height: 100%;
        min-height: 100%;

        display: flex;
        flex-direction: column;

        background: #ffffff;

        border: 1px solid #e8edf5;
        border-radius: 14px;

        overflow: hidden;

        box-shadow: 0 6px 24px rgba(0, 0, 0, 0.06);

        transition:
            transform 0.3s ease,
            box-shadow 0.3s ease;
    }

    .blog-card:hover {
        transform: translateY(-7px);
        box-shadow: 0 15px 35px rgba(41, 92, 171, 0.15);
    }


    /* =====================================================
       BLOG IMAGE
    ===================================================== */

    .blog-card-image-wrapper {
        position: relative;
        width: 100%;
        height: 220px;

        overflow: hidden;
        background: #f1f4f8;
    }

    .blog-card-image {
        display: block;

        width: 100%;
        height: 100%;

        object-fit: cover;
        object-position: center center;

        transition: transform 0.45s ease;
    }

    .blog-card:hover .blog-card-image {
        transform: scale(1.05);
    }


    /* =====================================================
       BLOG CARD BODY
    ===================================================== */

    .blog-card-body {
        flex: 1;

        display: flex;
        flex-direction: column;

        padding: 22px 22px 15px;
    }

    .blog-card-title {
        margin: 0 0 12px;

        color: #222222;

        font-size: 20px;
        line-height: 1.4;
        font-weight: 700;

        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .blog-card-description {
        margin: 0;

        color: #6c757d;

        font-size: 14px;
        line-height: 1.7;

        display: -webkit-box;
        -webkit-line-clamp: 4;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }


    /* =====================================================
       BLOG CARD FOOTER
    ===================================================== */

    .blog-card-footer {
        padding: 15px 22px 20px;

        border-top: 1px solid #edf0f4;

        background: #ffffff;
    }

    .blog-card-date {
        display: inline-flex;
        align-items: center;
        gap: 7px;

        color: #777777;

        font-size: 13px;
        line-height: 1.4;
    }

    .blog-card-date i {
        color: #295cab;
        font-size: 14px;
    }


    /* =====================================================
       EMPTY BLOG RESULT
    ===================================================== */

    .blog-empty-box {
        width: 100%;
        padding: 50px 20px;

        text-align: center;

        border: 1px solid #e8edf5;
        border-radius: 14px;

        background: #fafbfd;
    }

    .blog-empty-box i {
        display: block;

        margin-bottom: 15px;

        color: #295cab;
        font-size: 42px;
    }

    .blog-empty-box h4 {
        margin-bottom: 8px;

        color: #333333;
        font-size: 21px;
        font-weight: 600;
    }

    .blog-empty-box p {
        margin: 0;

        color: #777777;
        font-size: 14px;
    }


    /* =====================================================
       PAGINATION
    ===================================================== */

    .blog-pagination {
        margin-top: 50px;

        display: flex;
        align-items: center;
        justify-content: center;

        width: 100%;
    }

    .blog-pagination nav {
        display: flex;
        justify-content: center;
        width: 100%;
    }

    .blog-pagination .pagination {
        margin: 0;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 6px;
    }

    .blog-pagination .page-link {
        min-width: 40px;
        height: 40px;

        display: inline-flex;
        align-items: center;
        justify-content: center;

        border: 1px solid #dce3ed !important;
        border-radius: 7px !important;

        color: #295cab;
        background: #ffffff;

        font-size: 14px;
        font-weight: 500;

        box-shadow: none !important;
    }

    .blog-pagination .page-link:hover {
        color: #ffffff;
        background: #295cab;
        border-color: #295cab !important;
    }

    .blog-pagination .page-item.active .page-link {
        color: #ffffff;
        background: #295cab;
        border-color: #295cab !important;
    }

    .blog-pagination .page-item.disabled .page-link {
        color: #aaa;
        background: #f7f8fa;
    }


    /* =====================================================
       TABLET
    ===================================================== */

    @media (max-width: 991px) {

        .blog-page-banner {
            height: 360px;
            min-height: 360px;
        }

        .blog-main-section {
            padding: 50px 0 60px;
        }

        .blog-container {
            padding-left: 18px;
            padding-right: 18px;
        }

        .blog-section-title {
            font-size: 30px;
            margin-bottom: 30px;
        }

        .blog-filter-box {
            padding: 20px;
            margin-bottom: 35px;
        }

        .blog-filter-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .blog-filter-search {
            grid-column: 1 / -1;
        }

        .blog-filter-button {
            grid-column: 1 / -1;
        }

        .blog-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 24px;
        }

        .blog-card-image-wrapper {
            height: 210px;
        }

        .blog-card-title {
            font-size: 19px;
        }
    }


    /* =====================================================
       MOBILE
    ===================================================== */

    @media (max-width: 767px) {

        .blog-page-banner {
            height: 260px;
            min-height: 260px;

            background-position: center center;
        }

        .blog-page-banner-overlay {
            background: rgba(0, 0, 0, 0.20);
        }

        .blog-page-banner-content {
            padding: 0 15px;
        }

        .blog-page-banner-content h1 {
            font-size: 34px;
        }


        .blog-main-section {
            padding: 38px 0 45px;
        }

        .blog-container {
            padding-left: 15px;
            padding-right: 15px;
        }


        /* Section title */

        .blog-section-title {
            margin-bottom: 25px;

            font-size: 27px;
            line-height: 1.3;
        }

        .blog-section-title::after {
            width: 45px;
            margin-top: 10px;
        }


        /* Search box */

        .blog-filter-box {
            padding: 16px;

            margin-bottom: 30px;

            border-radius: 12px;
        }

        .blog-filter-row {
            display: flex;
            flex-direction: column;
            align-items: stretch;
            gap: 12px;
        }

        .blog-filter-search,
        .blog-filter-category,
        .blog-filter-button {
            width: 100%;
        }

        .blog-search-field,
        .blog-search-button {
            width: 100%;
            height: 48px !important;
            min-height: 48px !important;
        }

        .blog-filter-box .select2-container--default
        .select2-selection--single {
            height: 48px;
        }

        .blog-filter-box .select2-container--default
        .select2-selection--single
        .select2-selection__rendered {
            height: 46px;
            line-height: 46px;
        }

        .blog-filter-box .select2-container--default
        .select2-selection--single
        .select2-selection__arrow {
            height: 46px;
        }


        /* Blog grid */

        .blog-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
        }


        /* Card */

        .blog-card {
            border-radius: 12px;
        }

        .blog-card-image-wrapper {
            height: 210px;
        }

        .blog-card-body {
            padding: 18px 18px 12px;
        }

        .blog-card-title {
            margin-bottom: 9px;

            font-size: 18px;
            line-height: 1.4;
        }

        .blog-card-description {
            font-size: 14px;
            line-height: 1.65;

            -webkit-line-clamp: 4;
        }

        .blog-card-footer {
            padding: 13px 18px 17px;
        }


        /* Pagination */

        .blog-pagination {
            margin-top: 35px;
        }

        .blog-pagination .pagination {
            gap: 4px;
        }

        .blog-pagination .page-link {
            min-width: 36px;
            height: 36px;

            font-size: 13px;
        }
    }


    /* =====================================================
       SMALL MOBILE
    ===================================================== */

    @media (max-width: 480px) {

        .blog-page-banner {
            height: 220px;
            min-height: 220px;
        }

        .blog-section-title {
            font-size: 24px;
        }

        .blog-filter-box {
            padding: 13px;
        }

        .blog-card-image-wrapper {
            height: 190px;
        }

        .blog-card-body {
            padding: 16px;
        }

        .blog-card-title {
            font-size: 17px;
        }

        .blog-card-description {
            font-size: 13px;
        }

        .blog-card-footer {
            padding: 12px 16px 15px;
        }

        .blog-card-date {
            font-size: 12px;
        }

        .blog-pagination .page-link {
            min-width: 34px;
            height: 34px;
        }
    }


    /* =====================================================
       VERY SMALL DEVICES
    ===================================================== */

    @media (max-width: 360px) {

        .blog-page-banner {
            height: 200px;
            min-height: 200px;
        }

        .blog-container {
            padding-left: 12px;
            padding-right: 12px;
        }

        .blog-section-title {
            font-size: 22px;
        }

        .blog-card-image-wrapper {
            height: 175px;
        }
    }

    .blog-page-banner {
    position: relative;
    width: 100%;
    height: 420px;
    min-height: 420px;

    background-image: url('{{ asset('theme/frontend/img/blog.jpg') }}');
    background-repeat: no-repeat;

    /* Show complete image */
    background-size: 100% 100%;
    background-position: center center;

    display: flex;
    align-items: center;
    justify-content: center;

    overflow: hidden;
}
/* ================================
   SEARCH BUTTON
================================ */

.blog-filter-button {
    width: 150px;
    flex: 0 0 150px;
}

.blog-search-button {
    width: 100%;
    height: 50px;

    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;

    padding: 0 20px;

    border: none !important;
    border-radius: 8px !important;

    background: #295cab !important;
    color: #ffffff !important;

    font-size: 15px;
    font-weight: 600;
    line-height: 1;

    cursor: pointer;
    text-decoration: none;

    transition: all 0.25s ease;
}

.blog-search-button:hover {
    background: #1e4788 !important;
    color: #ffffff !important;
    transform: translateY(-1px);
    box-shadow: 0 5px 15px rgba(41, 92, 171, 0.20);
}

.blog-search-button:active {
    transform: translateY(0);
}

.blog-search-button i {
    font-size: 16px;
    line-height: 1;
}

/* ================================
   MOBILE
================================ */

@media (max-width: 767px) {

    .blog-filter-button {
        width: 100% !important;
        flex: none !important;
    }

    .blog-search-button {
        width: 100% !important;
        height: 48px !important;
        min-height: 48px !important;

        padding: 0 16px;

        border-radius: 8px !important;

        font-size: 15px;
    }

    .blog-search-button i {
        font-size: 16px;
    }
}
</style>


<!-- =========================================================
     BLOG MAIN SECTION
========================================================= -->
<section class="blog-main-section">

    <div class="blog-container">

        <!-- Section Heading -->
        <h2 class="blog-section-title">
            Explore Blogs
        </h2>


        <!-- =================================================
             SEARCH + CATEGORY FILTER
        ================================================== -->
        <div class="blog-filter-box">

    <form method="GET" action="{{ url('/blogs') }}" class="blog-filter-form">

        <div class="blog-filter-row">

            <!-- Search -->
            <div class="blog-filter-search">

                <input
                    type="text"
                    name="search"
                    value="{{ request('search') }}"
                    class="blog-search-field"
                    placeholder="Search blogs..."
                    autocomplete="off"
                >

            </div>

            <!-- Category -->
            <div class="blog-filter-category">

                <select
                    id="category"
                    name="category"
                    class="blog-category-field"
                >

                    <option value="">-- Select Category --</option>

                    @foreach($categories as $category)

                        <option
                            value="{{ $category->pid }}"
                            {{ request('category') == $category->pid ? 'selected' : '' }}
                        >
                            {{ $category->category_name }}
                        </option>

                    @endforeach

                </select>

            </div>

            <!-- Search Button -->
            <div class="blog-filter-button">

                <button
                    type="submit"
                    class="blog-search-button"
                >
                    <i class="bi bi-search"></i>
                    <span>Search</span>
                </button>

            </div>

        </div>

    </form>

</div>

        <!-- =================================================
             BLOG GRID
        ================================================== -->

        @if($allIndustries->count() > 0)

            <div class="blog-grid">

                @foreach($allIndustries as $blog)

                    <div class="blog-grid-item">

                        <a
                            href="{{ route('blogs.show', $blog->slug) }}"
                            class="blog-card-link"
                        >

                            <article class="blog-card">

                                <!-- Blog Image -->
                                <div class="blog-card-image-wrapper">

                                    <img
                                        src="{{ asset('storage/' . $blog->image) }}"
                                        class="blog-card-image"
                                        alt="{{ $blog->blog_name }}"
                                        loading="lazy"
                                    >

                                </div>


                                <!-- Blog Content -->
                                <div class="blog-card-body">

                                    <h3 class="blog-card-title">
                                        {{ $blog->blog_name }}
                                    </h3>

                                    <p class="blog-card-description">
                                        {{ Str::limit(strip_tags($blog->description), 120, '...') }}
                                    </p>

                                </div>


                                <!-- Blog Date -->
                                <div class="blog-card-footer">

                                    <small class="blog-card-date">

                                        <i class="bi bi-calendar3"></i>

                                        {{ \Carbon\Carbon::parse($blog->created_at)->format('F d, Y') }}

                                    </small>

                                </div>

                            </article>

                        </a>

                    </div>

                @endforeach

            </div>


            <!-- =================================================
                 PAGINATION
            ================================================== -->

            @if($allIndustries->hasPages())

                <div class="blog-pagination">

                    {{ $allIndustries->withQueryString()->links() }}

                </div>

            @endif


        @else

            <!-- =================================================
                 NO BLOGS FOUND
            ================================================== -->

            <div class="blog-empty-box">

                <i class="bi bi-journal-x"></i>

                <h4>No blogs found</h4>

                <p>
                    Try changing your search or selecting another category.
                </p>

            </div>

        @endif

    </div>

</section>


<!-- =========================================================
     SELECT2 + BOOTSTRAP ICONS
========================================================= -->

<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css"
>

<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


<script>
    $(document).ready(function () {

        $('#category').select2({
            width: '100%',
            placeholder: '-- Select Category --',
            allowClear: true
        });

    });
</script>

@include('dhara-jfin.layout.footer')

