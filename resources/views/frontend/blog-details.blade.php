
@include('dhara-jfin.layout.header')

@section('title', $blog->blog_name)
@section('description', Str::limit(strip_tags($blog->description), 160))
@section('keywords', $blog->blog_name)

@section('content')


<!-- =========================================================
     BLOG DETAIL PAGE
========================================================= -->

<div class="blog-detail-page">


    <!-- =====================================================
         HERO SECTION
    ====================================================== -->

    <section class="blog-detail-hero">

        <div
            class="blog-detail-hero-image"
            style="background-image: url('{{ asset('storage/' . $blog->image) }}');">
        </div>

        <div class="blog-detail-hero-overlay"></div>

        <div class="blog-detail-hero-content">

            <div class="blog-detail-hero-inner">

                <h1 class="blog-detail-hero-title">
                    {{ $blog->blog_name }}
                </h1>

                <p class="blog-detail-hero-description">
                    {{ Str::limit(strip_tags($blog->description), 120, '...') }}
                </p>

            </div>

        </div>

    </section>



    <!-- =====================================================
         MAIN BLOG CONTENT
    ====================================================== -->

    <section class="blog-detail-main">

        <div class="blog-detail-container">

            <div class="blog-detail-layout">


                <!-- =================================================
                     LEFT - MAIN BLOG
                ================================================== -->

                <main class="blog-detail-content">


                    <!-- Featured Image -->

                    <div class="blog-main-image-wrapper">

                        <img
                            src="{{ asset('storage/' . $blog->image) }}"
                            alt="{{ $blog->blog_name }}"
                            class="blog-main-image"
                        >

                    </div>


                    <!-- Blog Title -->

                    <h2 class="blog-main-title">
                        {{ $blog->blog_name }}
                    </h2>


                    <!-- Blog Meta -->

                    <div class="blog-main-meta">

                        <span class="blog-meta-item">

                            <i class="bi bi-calendar3"></i>

                            Published on
                            {{ \Carbon\Carbon::parse($blog->created_at)->format('F d, Y') }}

                        </span>


                        @if(!empty($blog->category_name))

                            <span class="blog-meta-divider">
                                |
                            </span>

                            <span class="blog-meta-item">

                                <i class="bi bi-folder2-open"></i>

                                Category:
                                <strong>
                                    {{ $blog->category_name }}
                                </strong>

                            </span>

                        @endif

                    </div>


                    <!-- Full Blog Description -->

                    <div class="blog-description">

                        {!! $blog->description !!}

                    </div>

                </main>



                <!-- =================================================
                     RIGHT - SIDEBAR
                ================================================== -->

                <aside class="blog-detail-sidebar">


                    <!-- Latest Blogs -->

                    <div class="latest-blogs-box">

                        <div class="sidebar-heading">

                            <h3>
                                Latest Blogs
                            </h3>

                            <span></span>

                        </div>


                        @forelse($latestBlogs as $latest)

                            <article class="latest-blog-item">


                                <!-- Image -->

                                <a
                                    href="{{ route('blogs.show', $latest->slug) }}"
                                    class="latest-blog-image-link"
                                >

                                    <img
                                        src="{{ asset('storage/' . $latest->image) }}"
                                        alt="{{ $latest->blog_name }}"
                                        class="latest-blog-image"
                                        loading="lazy"
                                    >

                                </a>


                                <!-- Content -->

                                <div class="latest-blog-content">

                                    <a
                                        href="{{ route('blogs.show', $latest->slug) }}"
                                        class="latest-blog-title"
                                    >
                                        {{ Str::limit($latest->blog_name, 50) }}
                                    </a>


                                    <p class="latest-blog-description">

                                        {{ Str::limit(strip_tags($latest->description), 60, '...') }}

                                    </p>


                                    <span class="latest-blog-date">

                                        <i class="bi bi-calendar3"></i>

                                        {{ \Carbon\Carbon::parse($latest->created_at)->format('M d, Y') }}

                                    </span>

                                </div>

                            </article>

                        @empty

                            <div class="sidebar-empty">

                                <i class="bi bi-journal-x"></i>

                                <p>
                                    No latest blogs available.
                                </p>

                            </div>

                        @endforelse

                    </div>

                </aside>

            </div>



            <!-- =================================================
                 RELATED BLOGS
            ================================================== -->

            @if($relatedBlogs->count() > 0)

                <section class="related-blogs-section">


                    <!-- Heading -->

                    <div class="related-heading">

                        <div>

                            <h2>
                                Related Blogs
                            </h2>

                            <p>
                                You may also like these articles
                            </p>

                        </div>

                    </div>


                    <!-- Related Blog Grid -->

                    <div class="related-blog-grid">

                        @foreach($relatedBlogs as $related)

                            <article class="related-blog-card">


                                <!-- Image -->

                                <a
                                    href="{{ route('blogs.show', $related->slug) }}"
                                    class="related-blog-image-link"
                                >

                                    <div class="related-blog-image-wrapper">

                                        <img
                                            src="{{ asset('storage/' . $related->image) }}"
                                            class="related-blog-image"
                                            alt="{{ $related->blog_name }}"
                                            loading="lazy"
                                        >

                                    </div>

                                </a>


                                <!-- Card Content -->

                                <div class="related-blog-body">


                                    <!-- Date -->

                                    <div class="related-blog-date">

                                        <i class="bi bi-calendar3"></i>

                                        {{ \Carbon\Carbon::parse($related->created_at)->format('M d, Y') }}

                                    </div>


                                    <!-- Title -->

                                    <a
                                        href="{{ route('blogs.show', $related->slug) }}"
                                        class="related-blog-title"
                                    >

                                        {{ Str::limit($related->blog_name, 60, '...') }}

                                    </a>


                                    <!-- Description -->

                                    <p class="related-blog-description">

                                        {{ Str::limit(strip_tags($related->description), 80, '...') }}

                                    </p>


                                    <!-- Read More -->

                                    <a
                                        href="{{ route('blogs.show', $related->slug) }}"
                                        class="related-read-more"
                                    >

                                        Read More

                                        <i class="bi bi-arrow-right"></i>

                                    </a>

                                </div>

                            </article>

                        @endforeach

                    </div>

                </section>

            @endif

        </div>

    </section>

</div>



<!-- =========================================================
     BLOG DETAIL PAGE CSS
========================================================= -->

<style>


/* =========================================================
   GLOBAL
========================================================= */

.blog-detail-page {
    width: 100%;
    overflow: hidden;
    background: #ffffff;
}

.blog-detail-page *,
.blog-detail-page *::before,
.blog-detail-page *::after {
    box-sizing: border-box;
}


/* =========================================================
   HERO
========================================================= */

.blog-detail-hero {
    position: relative;

    width: 100%;
    height: 450px;
    min-height: 450px;

    overflow: hidden;
}

.blog-detail-hero-image {
    position: absolute;
    inset: 0;

    width: 100%;
    height: 100%;

    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;

    transform: scale(1.01);
}

.blog-detail-hero-overlay {
    position: absolute;
    inset: 0;

    width: 100%;
    height: 100%;

    background:
        linear-gradient(
            90deg,
            rgba(0, 0, 0, 0.68) 0%,
            rgba(0, 0, 0, 0.48) 45%,
            rgba(0, 0, 0, 0.25) 100%
        );
}

.blog-detail-hero-content {
    position: absolute;
    inset: 0;

    z-index: 2;

    display: flex;
    align-items: center;
    justify-content: center;

    width: 100%;
}

.blog-detail-hero-inner {
    width: 100%;
    max-width: 1000px;

    padding: 30px 25px;

    text-align: center;
}

.blog-detail-hero-title {
    margin: 0;

    color: #ffffff;

    font-size: 48px;
    line-height: 1.2;
    font-weight: 700;

    text-shadow: 0 3px 12px rgba(0, 0, 0, 0.45);
}

.blog-detail-hero-description {
    max-width: 850px;

    margin: 18px auto 0;

    color: rgba(255, 255, 255, 0.95);

    font-size: 18px;
    line-height: 1.7;
    font-weight: 400;

    text-shadow: 0 2px 8px rgba(0, 0, 0, 0.4);
}


/* =========================================================
   MAIN SECTION
========================================================= */

.blog-detail-main {
    width: 100%;

    padding: 65px 0 75px;

    background: #ffffff;
}

.blog-detail-container {
    width: 100%;
    max-width: 1200px;

    margin: 0 auto;

    padding: 0 20px;
}


/* =========================================================
   MAIN LAYOUT
========================================================= */

.blog-detail-layout {
    display: grid;

    grid-template-columns: minmax(0, 2fr) minmax(300px, 1fr);

    gap: 45px;

    align-items: start;
}


/* =========================================================
   MAIN BLOG
========================================================= */

.blog-detail-content {
    width: 100%;
    min-width: 0;
}

.blog-main-image-wrapper {
    position: relative;

    width: 100%;
    height: 430px;

    overflow: hidden;

    border-radius: 14px;

    background: #f3f5f8;

    margin-bottom: 28px;

    box-shadow: 0 8px 28px rgba(0, 0, 0, 0.08);
}

.blog-main-image {
    display: block;

    width: 100%;
    height: 100%;

    object-fit: cover;
    object-position: center center;
}

.blog-main-title {
    margin: 0 0 16px;

    color: #222222;

    font-size: 32px;
    line-height: 1.35;
    font-weight: 700;
}


/* =========================================================
   META
========================================================= */

.blog-main-meta {
    display: flex;

    flex-wrap: wrap;

    align-items: center;

    gap: 10px;

    padding-bottom: 22px;

    margin-bottom: 25px;

    border-bottom: 1px solid #e9edf2;
}

.blog-meta-item {
    display: inline-flex;

    align-items: center;

    gap: 7px;

    color: #777777;

    font-size: 14px;

    line-height: 1.5;
}

.blog-meta-item i {
    color: #295cab;

    font-size: 15px;
}

.blog-meta-item strong {
    color: #444444;
}

.blog-meta-divider {
    color: #c4c9d0;
}


/* =========================================================
   BLOG DESCRIPTION
========================================================= */

.blog-description {
    color: #444444;

    font-size: 17px;

    line-height: 1.9;

    word-break: normal;

    overflow-wrap: break-word;
}

.blog-description p {
    margin: 0 0 20px;
}

.blog-description h1,
.blog-description h2,
.blog-description h3,
.blog-description h4,
.blog-description h5,
.blog-description h6 {
    margin-top: 30px;
    margin-bottom: 15px;

    color: #222222;

    line-height: 1.4;
}

.blog-description h1 {
    font-size: 32px;
}

.blog-description h2 {
    font-size: 28px;
}

.blog-description h3 {
    font-size: 24px;
}

.blog-description h4 {
    font-size: 21px;
}

.blog-description ul,
.blog-description ol {
    margin: 0 0 22px;

    padding-left: 25px;
}

.blog-description li {
    margin-bottom: 8px;
}

.blog-description a {
    color: #295cab;

    text-decoration: underline;

    word-break: break-word;
}

.blog-description blockquote {
    margin: 25px 0;

    padding: 18px 22px;

    border-left: 4px solid #295cab;

    background: #f5f8fc;

    color: #555555;

    border-radius: 0 8px 8px 0;
}

.blog-description img {
    display: block;

    max-width: 100%;
    width: auto;
    height: auto;

    margin: 25px auto;

    border-radius: 8px;

    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
}

.blog-description table {
    display: block;

    width: 100%;

    max-width: 100%;

    overflow-x: auto;

    border-collapse: collapse;

    margin: 25px 0;
}

.blog-description table th,
.blog-description table td {
    padding: 10px 12px;

    border: 1px solid #dddddd;

    text-align: left;
}

.blog-description iframe,
.blog-description video {
    max-width: 100%;
}


/* =========================================================
   SIDEBAR
========================================================= */

.blog-detail-sidebar {
    width: 100%;

    position: sticky;
    top: 25px;
}

.latest-blogs-box {
    width: 100%;

    padding: 24px;

    border: 1px solid #e7ebf1;

    border-radius: 14px;

    background: #ffffff;

    box-shadow: 0 8px 28px rgba(0, 0, 0, 0.06);
}


/* =========================================================
   SIDEBAR HEADING
========================================================= */

.sidebar-heading {
    margin-bottom: 22px;
}

.sidebar-heading h3 {
    margin: 0;

    color: #222222;

    font-size: 22px;

    line-height: 1.35;

    font-weight: 700;
}

.sidebar-heading span {
    display: block;

    width: 45px;
    height: 3px;

    margin-top: 9px;

    border-radius: 5px;

    background: #295cab;
}


/* =========================================================
   LATEST BLOG ITEM
========================================================= */

.latest-blog-item {
    display: flex;

    align-items: flex-start;

    gap: 14px;

    width: 100%;

    padding-bottom: 18px;
    margin-bottom: 18px;

    border-bottom: 1px solid #edf0f4;
}

.latest-blog-item:last-child {
    padding-bottom: 0;
    margin-bottom: 0;

    border-bottom: 0;
}

.latest-blog-image-link {
    display: block;

    flex: 0 0 92px;

    width: 92px;
    height: 75px;

    overflow: hidden;

    border-radius: 8px;

    background: #f2f4f7;
}

.latest-blog-image {
    display: block;

    width: 100%;
    height: 100%;

    object-fit: cover;

    transition: transform 0.3s ease;
}

.latest-blog-image-link:hover .latest-blog-image {
    transform: scale(1.06);
}

.latest-blog-content {
    min-width: 0;

    flex: 1;
}

.latest-blog-title {
    display: -webkit-box;

    margin: 0 0 6px;

    color: #222222;

    font-size: 15px;
    line-height: 1.45;
    font-weight: 600;

    text-decoration: none !important;

    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;

    overflow: hidden;

    transition: color 0.2s ease;
}

.latest-blog-title:hover {
    color: #295cab;
}

.latest-blog-description {
    display: -webkit-box;

    margin: 0 0 6px;

    color: #777777;

    font-size: 12.5px;
    line-height: 1.5;

    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;

    overflow: hidden;
}

.latest-blog-date {
    display: inline-flex;

    align-items: center;

    gap: 5px;

    color: #929292;

    font-size: 11.5px;
}

.latest-blog-date i {
    color: #295cab;
}


/* =========================================================
   EMPTY SIDEBAR
========================================================= */

.sidebar-empty {
    padding: 20px 10px;

    text-align: center;

    color: #888888;
}

.sidebar-empty i {
    display: block;

    margin-bottom: 8px;

    color: #295cab;

    font-size: 30px;
}

.sidebar-empty p {
    margin: 0;

    font-size: 13px;
}


/* =========================================================
   RELATED BLOG SECTION
========================================================= */

.related-blogs-section {
    width: 100%;

    margin-top: 70px;

    padding-top: 50px;

    border-top: 1px solid #edf0f4;
}

.related-heading {
    display: flex;

    align-items: flex-end;
    justify-content: space-between;

    margin-bottom: 28px;
}

.related-heading h2 {
    margin: 0;

    color: #222222;

    font-size: 30px;

    line-height: 1.3;

    font-weight: 700;
}

.related-heading p {
    margin: 7px 0 0;

    color: #777777;

    font-size: 14px;
}


/* =========================================================
   RELATED BLOG GRID
========================================================= */

.related-blog-grid {
    display: grid;

    grid-template-columns: repeat(3, minmax(0, 1fr));

    gap: 28px;

    width: 100%;
}


/* =========================================================
   RELATED CARD
========================================================= */

.related-blog-card {
    display: flex;

    flex-direction: column;

    height: 100%;

    min-width: 0;

    overflow: hidden;

    border: 1px solid #e8edf3;

    border-radius: 13px;

    background: #ffffff;

    box-shadow: 0 6px 22px rgba(0, 0, 0, 0.06);

    transition:
        transform 0.3s ease,
        box-shadow 0.3s ease;
}

.related-blog-card:hover {
    transform: translateY(-6px);

    box-shadow: 0 14px 32px rgba(41, 92, 171, 0.13);
}


/* =========================================================
   RELATED IMAGE
========================================================= */

.related-blog-image-link {
    display: block;

    width: 100%;

    text-decoration: none;
}

.related-blog-image-wrapper {
    position: relative;

    width: 100%;
    height: 205px;

    overflow: hidden;

    background: #f2f4f7;
}

.related-blog-image {
    display: block;

    width: 100%;
    height: 100%;

    object-fit: cover;

    transition: transform 0.45s ease;
}

.related-blog-card:hover .related-blog-image {
    transform: scale(1.05);
}


/* =========================================================
   RELATED BODY
========================================================= */

.related-blog-body {
    flex: 1;

    display: flex;

    flex-direction: column;

    padding: 20px;
}

.related-blog-date {
    display: inline-flex;

    align-items: center;

    gap: 6px;

    margin-bottom: 10px;

    color: #888888;

    font-size: 12px;
}

.related-blog-date i {
    color: #295cab;
}

.related-blog-title {
    display: -webkit-box;

    margin: 0 0 10px;

    color: #222222;

    font-size: 18px;
    line-height: 1.45;
    font-weight: 700;

    text-decoration: none !important;

    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;

    overflow: hidden;

    transition: color 0.2s ease;
}

.related-blog-title:hover {
    color: #295cab;
}

.related-blog-description {
    display: -webkit-box;

    margin: 0 0 18px;

    color: #777777;

    font-size: 13.5px;
    line-height: 1.65;

    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;

    overflow: hidden;
}


/* =========================================================
   READ MORE
========================================================= */

.related-read-more {
    display: inline-flex;

    align-items: center;

    gap: 7px;

    width: fit-content;

    margin-top: auto;

    padding: 9px 15px;

    border-radius: 6px;

    background: #295cab;

    color: #ffffff !important;

    font-size: 13px;

    font-weight: 600;

    text-decoration: none !important;

    transition:
        background 0.2s ease,
        transform 0.2s ease;
}

.related-read-more:hover {
    background: #1f4789;

    color: #ffffff !important;

    transform: translateX(2px);
}

.related-read-more i {
    font-size: 13px;
}


/* =========================================================
   LARGE TABLET
========================================================= */

@media (max-width: 1100px) {

    .blog-detail-layout {
        grid-template-columns: minmax(0, 1.8fr) minmax(280px, 1fr);

        gap: 30px;
    }

    .blog-detail-hero-title {
        font-size: 42px;
    }

    .blog-main-image-wrapper {
        height: 380px;
    }

    .related-blog-grid {
        gap: 22px;
    }

}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 991px) {

    .blog-detail-hero {
        height: 380px;
        min-height: 380px;
    }

    .blog-detail-hero-title {
        font-size: 38px;
    }

    .blog-detail-hero-description {
        font-size: 16px;
    }


    .blog-detail-main {
        padding: 50px 0 60px;
    }

    .blog-detail-container {
        padding: 0 18px;
    }


    .blog-detail-layout {
        grid-template-columns: 1fr;

        gap: 45px;
    }


    .blog-detail-sidebar {
        position: static;

        width: 100%;
    }


    .latest-blogs-box {
        padding: 22px;
    }


    .latest-blog-item {
        gap: 18px;
    }


    .latest-blog-image-link {
        flex-basis: 110px;

        width: 110px;
        height: 85px;
    }


    .latest-blog-title {
        font-size: 16px;
    }


    .latest-blog-description {
        font-size: 13px;
    }


    .related-blogs-section {
        margin-top: 55px;
        padding-top: 40px;
    }


    .related-blog-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));

        gap: 22px;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 767px) {

    .blog-detail-hero {
        height: 300px;
        min-height: 300px;
    }


    .blog-detail-hero-image {
        background-position: center center;
    }


    .blog-detail-hero-overlay {
        background:
            linear-gradient(
                to bottom,
                rgba(0, 0, 0, 0.25),
                rgba(0, 0, 0, 0.65)
            );
    }


    .blog-detail-hero-inner {
        padding: 20px 16px;
    }


    .blog-detail-hero-title {
        font-size: 29px;

        line-height: 1.3;
    }


    .blog-detail-hero-description {
        margin-top: 12px;

        font-size: 14px;

        line-height: 1.6;

        display: -webkit-box;

        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;

        overflow: hidden;
    }


    .blog-detail-main {
        padding: 35px 0 45px;
    }


    .blog-detail-container {
        padding: 0 15px;
    }


    .blog-detail-layout {
        gap: 35px;
    }


    /* Main Image */

    .blog-main-image-wrapper {
        height: auto;

        aspect-ratio: 16 / 10;

        margin-bottom: 22px;

        border-radius: 11px;
    }


    /* Main title */

    .blog-main-title {
        margin-bottom: 13px;

        font-size: 25px;

        line-height: 1.35;
    }


    /* Meta */

    .blog-main-meta {
        align-items: flex-start;

        flex-direction: column;

        gap: 7px;

        padding-bottom: 18px;

        margin-bottom: 20px;
    }


    .blog-meta-divider {
        display: none;
    }


    .blog-meta-item {
        font-size: 12.5px;
    }


    /* Description */

    .blog-description {
        font-size: 15px;

        line-height: 1.8;
    }


    .blog-description h1 {
        font-size: 27px;
    }


    .blog-description h2 {
        font-size: 24px;
    }


    .blog-description h3 {
        font-size: 21px;
    }


    .blog-description img {
        margin: 20px auto;

        border-radius: 6px;
    }


    .blog-description table {
        font-size: 13px;
    }


    /* Sidebar */

    .latest-blogs-box {
        padding: 18px;

        border-radius: 11px;
    }


    .sidebar-heading {
        margin-bottom: 18px;
    }


    .sidebar-heading h3 {
        font-size: 20px;
    }


    .latest-blog-item {
        gap: 12px;

        padding-bottom: 15px;

        margin-bottom: 15px;
    }


    .latest-blog-image-link {
        flex: 0 0 90px;

        width: 90px;
        height: 70px;
    }


    .latest-blog-title {
        font-size: 14px;
    }


    .latest-blog-description {
        font-size: 11.5px;

        -webkit-line-clamp: 2;
    }


    .latest-blog-date {
        font-size: 10.5px;
    }


    /* Related */

    .related-blogs-section {
        margin-top: 40px;

        padding-top: 35px;
    }


    .related-heading {
        margin-bottom: 22px;
    }


    .related-heading h2 {
        font-size: 25px;
    }


    .related-heading p {
        font-size: 12.5px;
    }


    .related-blog-grid {
        grid-template-columns: 1fr;

        gap: 20px;
    }


    .related-blog-image-wrapper {
        height: 210px;
    }


    .related-blog-body {
        padding: 18px;
    }


    .related-blog-title {
        font-size: 18px;
    }


    .related-blog-description {
        font-size: 13px;
    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media (max-width: 480px) {

    .blog-detail-hero {
        height: 250px;
        min-height: 250px;
    }


    .blog-detail-hero-title {
        font-size: 24px;
    }


    .blog-detail-hero-description {
        font-size: 13px;
    }


    .blog-detail-main {
        padding: 28px 0 40px;
    }


    .blog-detail-container {
        padding: 0 12px;
    }


    .blog-main-image-wrapper {
        aspect-ratio: 16 / 10;

        border-radius: 9px;
    }


    .blog-main-title {
        font-size: 22px;
    }


    .blog-meta-item {
        font-size: 11.5px;
    }


    .blog-description {
        font-size: 14px;

        line-height: 1.75;
    }


    .latest-blogs-box {
        padding: 15px;
    }


    .latest-blog-image-link {
        flex-basis: 82px;

        width: 82px;
        height: 65px;
    }


    .latest-blog-title {
        font-size: 13px;
    }


    .latest-blog-description {
        font-size: 10.5px;
    }


    .related-heading h2 {
        font-size: 22px;
    }


    .related-heading p {
        font-size: 11.5px;
    }


    .related-blog-image-wrapper {
        height: 190px;
    }


    .related-blog-body {
        padding: 16px;
    }


    .related-blog-title {
        font-size: 17px;
    }

}


/* =========================================================
   VERY SMALL MOBILE
========================================================= */

@media (max-width: 360px) {

    .blog-detail-hero {
        height: 225px;
        min-height: 225px;
    }


    .blog-detail-hero-title {
        font-size: 21px;
    }


    .blog-detail-hero-description {
        font-size: 12px;

        -webkit-line-clamp: 2;
    }


    .blog-main-title {
        font-size: 20px;
    }


    .blog-description {
        font-size: 13.5px;
    }


    .latest-blog-image-link {
        flex-basis: 75px;

        width: 75px;
        height: 60px;
    }


    .latest-blog-title {
        font-size: 12px;
    }


    .related-blog-image-wrapper {
        height: 175px;
    }

}

</style>


<!-- =========================================================
     BOOTSTRAP ICONS
========================================================= -->

<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
>

@include('dhara-jfin.layout.footer')


