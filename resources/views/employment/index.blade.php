@include('dhara-jfin.layout.header')

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

<style>
    #loan-apply-page {
        box-sizing: border-box;
        font-family: inherit;
        background-color: #f8f9fa;
        min-height: calc(100vh - 80px);
        display: flex;
        align-items: flex-start;
        justify-content: center;
        padding: 40px 15px;
    }

    #loan-apply-page * {
        box-sizing: border-box;
    }

    #loan-apply-page .qr-card {
        width: 100%;
        max-width: 900px;
        background: #fff;
        border-radius: 12px;
        padding: 50px 40px;
        box-shadow: 0 4px 20px rgba(0,0,0,.04);
        border: 1px solid #eaeaea;
        margin-top: 70px; 
    }

    #loan-apply-page .main-title {
        font-size: 28px;
        font-weight: 600;
        color: #1a1a1a;
        margin-bottom: 8px;
        text-align: center;
        margin-top: 0;
    }

    #loan-apply-page .subtitle {
        color: #6c757d;
        font-size: 15px;
        text-align: center;
        margin-bottom: 40px;
    }

    #loan-apply-page .cards-row {
        display: flex;
        flex-wrap: wrap;
        gap: 24px;
        align-items: stretch;
    }

    #loan-apply-page .card-col {
        flex: 1 1 calc(50% - 12px);
        min-width: 300px;
        display: flex;
    }

    #loan-apply-page .type-card {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
        padding: 40px 25px;
        border: 1px solid #295cab;
        border-radius: 10px;
        text-decoration: none;
        color: #1a1a1a;
        text-align: center;
        transition: all .3s ease;
        background: #fff;
    }

    #loan-apply-page .type-card:hover {
        box-shadow: 0 8px 25px rgba(41, 92, 171, 0.1);
        transform: translateY(-2px);
    }

    /* --- UPDATED ICON GRADIENT HERE --- */
    #loan-apply-page .type-icon {
        width: 60px;
        height: 60px;
        margin: 0 auto 20px;
        /* Linear gradient from #2D9DFF to #006AF5 */
        background: linear-gradient(135deg, #2D9DFF 0%, #006AF5 100%);
        border-radius: 12px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 26px;
        color: #fff;
    }

    #loan-apply-page .type-card h4 {
        font-size: 19px;
        font-weight: 600;
        margin-bottom: 8px;
        margin-top: 0;
    }

    #loan-apply-page .type-card p {
        color: #6c757d;
        font-size: 14px;
        margin-bottom: 25px;
        line-height: 1.5;
    }

    #loan-apply-page .select-btn {
        background: transparent;
        color: #006AF5; /* Matched to gradient end color */
        border: 1px solid #006AF5;
        padding: 8px 24px;
        border-radius: 6px;
        font-size: 14px;
        font-weight: 500;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: all 0.3s;
    }

    /* --- BUTTON HOVER GRADIENT --- */
    #loan-apply-page .type-card:hover .select-btn {
        /* Applies the same gradient on hover */
        background: linear-gradient(135deg, #2D9DFF 0%, #006AF5 100%);
        color: #fff;
        border-color: transparent;
    }

    #loan-apply-page .footer-text {
        color: #6c757d;
        font-size: 14px;
        display: block;
        text-align: center;
        margin-top: 40px;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        #loan-apply-page .card-col {
            flex: 1 1 100%;
        }
        #loan-apply-page .qr-card {
            padding: 30px 20px;
            margin-top: 20px;
        }
        #loan-apply-page .main-title {
            font-size: 24px;
        }
    }
</style>

<div id="loan-apply-page">
    <div class="qr-card">

        <!-- Header Section -->
        <div>
            <h2 class="main-title">Apply for a loan</h2>
            <p class="subtitle">Select your employment category to view the required documents</p>
        </div>

        @if(session('success'))
            <div style="background-color: #d1e7dd; color: #0f5132; padding: 15px; border-radius: 5px; text-align: center; margin-bottom: 20px;">
                {{ session('success') }}
            </div>
        @endif

        <!-- Cards Section -->
        <div class="cards-row">

            <!-- Salaried Employee -->
            <div class="card-col">
                <a href="{{ route('employment.documents', 'salaried') }}" class="type-card">
                    <div class="type-icon">
                        <i class="fa-solid fa-briefcase"></i>
                    </div>
                    <h4>Salaried employee</h4>
                    <p>For individuals working in a company or organization</p>
                    <span class="select-btn">
                        Select <i class="fa-solid fa-arrow-right"></i>
                    </span>
                </a>
            </div>

            <!-- Self Employed -->
            <div class="card-col">
                <a href="{{ route('employment.documents', 'self_employed') }}" class="type-card">
                    <div class="type-icon">
                        <i class="fa-solid fa-building"></i>
                    </div>
                    <h4>Self employed</h4>
                    <p>For business owners, professionals and entrepreneurs</p>
                    <span class="select-btn">
                        Select <i class="fa-solid fa-arrow-right"></i>
                    </span>
                </a>
            </div>

        </div>

        <!-- Footer Text -->
        <small class="footer-text">
            Please select the correct employment category
        </small>

    </div>
</div>

</body>
</html>
@include('dhara-jfin.layout.footer')