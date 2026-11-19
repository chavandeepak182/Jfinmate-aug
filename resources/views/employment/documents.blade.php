@include('dhara-jfin.layout.header')

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

<style>
    /* Wrapper scoped to this page only to protect your main header */
    #documents-page {
        box-sizing: border-box;
        font-family: inherit;
        background-color: #f8f9fa;
        min-height: 80vh;
        display: flex;
        align-items: flex-start;
        justify-content: center;
        /* Increased top/bottom padding to push the card down */
        padding: 60px 15px; 
    }

    #documents-page * {
        box-sizing: border-box;
    }

    /* Main Card - Made narrower to match screenshot */
    #documents-page .document-card {
        width: 100%;
        max-width: 650px; 
        background: #fff;
        padding: 40px 45px;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0,0,0,.04);
        border: 1px solid #eaeaea;
        margin-top: 72px;
    }

    /* Header Text */
    #documents-page .header-section {
        text-align: center;
        margin-bottom: 30px;
    }

    #documents-page .document-heading {
        color: #1a1a1a;
        font-size: 26px;
        font-weight: 600;
        margin-bottom: 6px;
        margin-top: 0;
    }

    #documents-page .subtitle {
        color: #6c757d;
        font-size: 14px;
        margin-bottom: 6px;
    }

    #documents-page .subtitle strong {
        color: #006AF5;
        font-weight: 600;
    }

    #documents-page .instruction-text {
        color: #6c757d;
        font-size: 13px;
        margin: 0;
    }

    /* List Container */
    #documents-page .document-list {
        margin-bottom: 25px;
    }

    /* List Items - Looking exactly like individual boxes */
    #documents-page .document-item {
        display: flex;
        align-items: center;
        gap: 14px;
        padding: 12px 16px; /* Added padding inside */
        border: 1px solid #eaeaea; /* Added border around each item */
        border-radius: 8px;
        margin-bottom: 10px; /* Space between items */
        background-color: #fff;
        transition: 0.2s ease;
    }

    #documents-page .document-item:last-child {
        margin-bottom: 0;
    }

    #documents-page .document-item strong {
        font-size: 14px;
        color: #333;
        font-weight: 500;
    }

    /* Check Icon Style */
    #documents-page .check-icon {
        width: 26px;
        height: 26px;
        min-width: 26px;
        background: #f0f7ff;
        color: #006AF5;
        border: 1px solid #cce0ff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 12px;
        flex-shrink: 0;
    }

    /* Apply Button with Gradient */
    #documents-page .apply-btn {
        background: linear-gradient(135deg, #2D9DFF 0%, #006AF5 100%);
        color: #fff;
        border: none;
        border-radius: 8px;
        padding: 14px;
        font-weight: 500;
        font-size: 15px;
        text-decoration: none;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        width: 100%;
        transition: .3s ease;
        box-shadow: 0 4px 15px rgba(0, 106, 245, 0.15);
    }

    #documents-page .apply-btn:hover {
        background: linear-gradient(135deg, #006AF5 0%, #0056c7 100%);
        color: #fff;
        transform: translateY(-1px);
    }

    /* Mobile Responsive */
    @media (max-width: 576px) {
        #documents-page {
            padding: 30px 15px;
        }
        #documents-page .document-card {
            padding: 30px 20px;
        }
        #documents-page .document-heading {
            font-size: 24px;
        }
    }
</style>

<div id="documents-page">
    <div class="document-card">

        <!-- Header Section -->
        <div class="header-section">
            <h2 class="document-heading">Required Documents</h2>
            <p class="subtitle">
                Employment Category - <strong>{{ $type == 'salaried' ? 'Salaried Employee' : 'Self Employed' }}</strong>
            </p>
            <p class="instruction-text">
                Please keep the following documents ready before applying.
            </p>
        </div>

        <!-- Document List -->
        <div class="document-list">
            @forelse($documents as $document)
                <div class="document-item">
                    <div class="check-icon">
                        <i class="fa-solid fa-check"></i>
                    </div>
                    <strong>{{ $document->document_name }}</strong>
                </div>
            @empty
                <div style="padding: 20px; text-align: center; color: #856404; background-color: #fff3cd; border-radius: 8px; margin: 20px 0;">
                    No documents have been configured for this employment category.
                    Please contact the administrator.
                </div>
            @endforelse
        </div>

        <!-- Apply Button -->
        <a href="{{ route('employment.create', $type) }}" class="apply-btn">
            Apply Now <i class="fa-solid fa-arrow-right"></i>
        </a>

    </div>
</div>

</body>
</html>

@include('dhara-jfin.layout.footer')