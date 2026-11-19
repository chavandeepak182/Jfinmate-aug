@include('dhara-jfin.layout.header')

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

<style>
    /* Wrapper scoped to this page only to protect your main header */
    #loan-application-page {
        box-sizing: border-box;
        font-family: inherit;
        background-color: #f8f9fa;
        min-height: 80vh;
        display: flex;
        align-items: flex-start;
        justify-content: center;
        padding: 60px 15px;
    }

    #loan-application-page * {
        box-sizing: border-box;
    }

    /* Main Card */
    #loan-application-page .application-card {
        width: 100%;
        max-width: 650px; 
        background: #fff;
        padding: 40px 45px;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0,0,0,.04);
        border: 1px solid #eaeaea;
            margin-top: 64px;
    }

    /* Top Row with Back Arrow and Title */
    #loan-application-page .top-nav {
        display: flex;
        align-items: center;
        margin-bottom: 5px;
        position: relative;
    }

    #loan-application-page .back-icon {
        color: #6c757d;
        font-size: 18px;
        text-decoration: none;
        transition: 0.2s;
    }

    #loan-application-page .back-icon:hover {
        color: #006AF5;
    }

    #loan-application-page .form-title {
        font-size: 24px;
        color: #1a1a1a;
        font-weight: 600;
        margin: 0;
        text-align: center;
        width: 100%; /* Centers text perfectly */
    }

    /* Subtitle */
    #loan-application-page .subtitle {
        color: #6c757d;
        font-size: 14px;
        text-align: center;
        margin-bottom: 25px;
    }

    /* Employment Category Bar */
    #loan-application-page .employment-bar {
        background: #f0f7ff;
        color: #006AF5;
        padding: 12px 16px;
        border-radius: 6px;
        margin-bottom: 25px;
        font-size: 14px;
        font-weight: 500;
        border: 1px solid #cce0ff;
    }

    /* Form Elements */
    #loan-application-page .form-group {
        margin-bottom: 20px;
    }

    #loan-application-page .form-label {
        font-weight: 500;
        color: #333;
        margin-bottom: 6px;
        display: block;
        font-size: 14px;
    }

    #loan-application-page .form-label span {
        color: #dc3545;
    }

    #loan-application-page .form-control {
        width: 100%;
        min-height: 45px;
        padding: 10px 15px;
        font-size: 14px;
        color: #333;
        background-color: #fff;
        border: 1px solid #e0e0e0;
        border-radius: 6px;
        transition: border-color 0.2s;
    }

    #loan-application-page .form-control::placeholder {
        color: #aaa;
    }

    #loan-application-page .form-control:focus {
        outline: none;
        border-color: #006AF5;
        box-shadow: 0 0 0 3px rgba(0, 106, 245, 0.1);
    }

    #loan-application-page textarea.form-control {
        min-height: 100px;
        resize: vertical;
    }

    /* Gradient Submit Button */
    #loan-application-page .submit-btn {
        background: linear-gradient(135deg, #2D9DFF 0%, #006AF5 100%);
        color: #fff;
        border: none;
        padding: 14px;
        width: 100%;
        border-radius: 6px;
        font-weight: 500;
        font-size: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        cursor: pointer;
        transition: .3s ease;
        margin-top: 10px;
    }

    #loan-application-page .submit-btn:hover {
        background: linear-gradient(135deg, #006AF5 0%, #0056c7 100%);
        transform: translateY(-1px);
    }

    /* Mobile Responsive */
    @media (max-width: 576px) {
        #loan-application-page {
            padding: 30px 15px;
        }
        #loan-application-page .application-card {
            padding: 25px 20px;
        }
    }
</style>

<div id="loan-application-page">
    <div class="application-card">

        <!-- Top Navigation & Title -->
        <div class="top-nav">
            <a href="{{ route('employment.documents', $type) }}" class="back-icon">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
            <h2 class="form-title">Loan Applications</h2>
        </div>

        <p class="subtitle">Please enter your details and our team will contact you.</p>

        <!-- Employment Category Bar -->
        <div class="employment-bar">
            Employment Category - 
            <strong>{{ $type == 'salaried' ? 'Salaried Employee' : 'Self Employed' }}</strong>
        </div>

        <!-- Error Messages -->
        @if($errors->any())
            <div style="background-color: #f8d7da; color: #721c24; padding: 12px; border-radius: 6px; margin-bottom: 20px; font-size: 14px;">
                <ul style="margin: 0; padding-left: 20px;">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('employment.store') }}" method="POST">
            @csrf
            <input type="hidden" name="employment_type" value="{{ $type }}">

            <!-- Full Name -->
            <div class="form-group">
                <label class="form-label">Full Name <span>*</span></label>
                <input type="text" name="name" class="form-control" placeholder="Enter name" value="{{ old('name') }}" required>
            </div>

            <!-- Mobile Number -->
            <div class="form-group">
                <label class="form-label">Mobile Number <span>*</span></label>
                <input type="tel" name="mobile_number" class="form-control" placeholder="Enter mobile number" value="{{ old('mobile_number') }}" maxlength="20" required>
            </div>

            <!-- Email -->
            <div class="form-group">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter email address" value="{{ old('email') }}">
            </div>

            <!-- Message -->
            <div class="form-group">
                <label class="form-label">Email</label> <!-- Note: Kept as 'Email' to match your screenshot, but name is message -->
                <textarea name="message" class="form-control" placeholder="Enter your message">{{ old('message') }}</textarea>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="submit-btn">
                Apply Now <i class="fa-solid fa-arrow-right"></i>
            </button>

        </form>

    </div>
</div>

</body>
</html>
@include('dhara-jfin.layout.footer')
