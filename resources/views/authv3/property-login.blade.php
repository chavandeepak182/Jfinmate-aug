
@include('dhara-jfin.layout.header')

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

<style>
body{
    min-height:100vh;
    display:flex;
    align-items:center;
    justify-content:center;
    background: linear-gradient(135deg,#eef2ff,#f8f9fa);
    font-family:'Segoe UI', sans-serif;
    padding:134px;
}

/* MAIN CARD */
.auth-wrapper{
    width:100%;
    max-width:1050px;
    min-height:600px;
    background:#fff;
    border-radius:22px;
    overflow:hidden;
    box-shadow:0 20px 55px rgba(0,0,0,.12);
    display:flex;
}

/* LEFT IMAGE */
.auth-image{
    width:50%;
    position:relative;
    overflow:hidden;
    min-height:600px;
}

.auth-image img{
    width:100%;
    height:100%;
    object-fit:cover;
    display:block;
}

/* Image overlay */
.auth-image::after{
    content:"";
    position:absolute;
    inset:0;
    background:linear-gradient(
        135deg,
        rgba(0,0,0,.15),
        rgba(0,0,0,.55)
    );
}

/* Image text */
.image-content{
    position:absolute;
    z-index:2;
    left:40px;
    right:40px;
    bottom:45px;
    color:#fff;
}

.image-content h1{
    font-size:38px;
    font-weight:700;
    margin-bottom:12px;
}

.image-content p{
    font-size:16px;
    line-height:1.6;
    margin:0;
    max-width:430px;
    color:rgba(255,255,255,.9);
}

/* RIGHT FORM */
.auth-form{
    width:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    padding:55px 65px;
    background:#fff;
}

.form-inner{
    width:100%;
    max-width:390px;
}

/* Logo/Icon */
.login-icon{
    width:58px;
    height:58px;
    border-radius:15px;
    background:#0d6efd;
    color:#fff;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:24px;
    margin-bottom:22px;
    box-shadow:0 8px 20px rgba(13,110,253,.22);
}

.auth-title{
    font-weight:700;
    color:#222;
    font-size:30px;
    margin-bottom:8px;
}

.auth-sub{
    font-size:14px;
    color:#6c757d;
    line-height:1.6;
}

/* Form */
.form-label{
    font-size:14px;
    font-weight:600;
    color:#333;
    margin-bottom:8px;
}

.input-group{
    border:1px solid #dee2e6;
    border-radius:11px;
    overflow:hidden;
    transition:.2s ease;
}

.input-group:focus-within{
    border-color:#86b7fe;
    box-shadow:0 0 0 .2rem rgba(13,110,253,.10);
}

.input-group-text{
    background:#fff;
    border:0;
    color:#6c757d;
    padding-left:16px;
    padding-right:10px;
}

.form-control{
    height:50px;
    border:0 !important;
    box-shadow:none !important;
    font-size:14px;
}

.form-control::placeholder{
    color:#adb5bd;
}

.btn-login{
    height:50px;
    border-radius:11px;
    font-weight:600;
    border:0;
    box-shadow:0 8px 18px rgba(13,110,253,.18);
    transition:.2s ease;
}

.btn-login:hover{
    transform:translateY(-1px);
    box-shadow:0 10px 22px rgba(13,110,253,.25);
}

/* Alerts */
.alert{
    border-radius:10px;
    font-size:13px;
}

/* Divider */
.divider{
    text-align:center;
    margin:28px 0;
    position:relative;
}

.divider::before{
    content:"";
    position:absolute;
    left:0;
    top:50%;
    width:100%;
    height:1px;
    background:#e9ecef;
}

.divider span{
    background:#fff;
    padding:0 14px;
    position:relative;
    font-size:12px;
    color:#adb5bd;
    font-weight:500;
}

/* Signup */
.signup-link{
    color:#6c757d;
    font-size:14px;
}

.signup-link a{
    text-decoration:none;
    font-weight:600;
    color:#0d6efd;
}

.signup-link a:hover{
    text-decoration:underline;
}

/* TABLET */
@media(max-width:850px){

    .auth-wrapper{
        max-width:650px;
    }

    .auth-image{
        width:45%;
        min-height:560px;
    }

    .auth-form{
        width:55%;
        padding:40px 30px;
    }

    .image-content{
        left:25px;
        right:25px;
        bottom:30px;
    }

    .image-content h1{
        font-size:28px;
    }

    .image-content p{
        font-size:14px;
    }
}

/* MOBILE */
@media(max-width:767px){

    body{
        padding:15px;
        align-items:center;
    }

    .auth-wrapper{
        display:block;
        max-width:480px;
        min-height:auto;
        border-radius:18px;
    }

    .auth-image{
        width:100%;
        height:220px;
        min-height:220px;
    }

    .auth-image img{
        height:220px;
    }

    .image-content{
        left:25px;
        right:25px;
        bottom:22px;
    }

    .image-content h1{
        font-size:25px;
        margin-bottom:5px;
    }

    .image-content p{
        font-size:13px;
        line-height:1.4;
    }

    .auth-form{
        width:100%;
        padding:35px 25px 30px;
    }

    .auth-title{
        font-size:25px;
    }

    .login-icon{
        width:50px;
        height:50px;
        font-size:20px;
        margin-bottom:17px;
    }
}

/* SMALL MOBILE */
@media(max-width:400px){

    body{
        padding:10px;
    }

    .auth-image{
        height:190px;
        min-height:190px;
    }

    .auth-image img{
        height:190px;
    }

    .auth-form{
        padding:30px 18px 25px;
    }

    .image-content h1{
        font-size:22px;
    }

    .auth-title{
        font-size:23px;
    }
}
</style>


<div class="auth-wrapper">

    <!-- LEFT IMAGE SECTION -->
    <div class="auth-image">

        <!-- Change only this image path -->
       <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c"
     alt="Property"
     class="property-login-image">

        <div class="image-content">
            <h1>Find Your Dream Property</h1>
            <p>
                Manage your property journey with a simple,
                secure and seamless experience.
            </p>
        </div>

    </div>


    <!-- RIGHT LOGIN SECTION -->
    <div class="auth-form">

        <div class="form-inner">

            <div class="login-icon">
                <i class="fas fa-building"></i>
            </div>

            <h3 class="auth-title">
                Login to continue
            </h3>

            <p class="auth-sub mb-4">
                Enter your mobile number to receive OTP
            </p>


            {{-- Success Message --}}
            @if(session('success'))
                <div class="alert alert-success text-center">
                    {{ session('success') }}
                </div>
            @endif


            {{-- Error Message --}}
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif


            <!-- YOUR EXISTING BACKEND FORM - NOT CHANGED -->
            <form method="POST" action="{{ route('property.login.otp') }}">
                @csrf

                <div class="mb-3">

                    <label class="form-label">
                        Mobile Number
                    </label>

                    <div class="input-group">

                        <span class="input-group-text">
                            <i class="fas fa-mobile-alt"></i>
                        </span>

                        <input type="text"
                               name="mobile_no"
                               class="form-control"
                               placeholder="Enter your mobile number"
                               maxlength="10"
                               required>

                    </div>

                </div>


                <button type="submit"
                        class="btn btn-primary w-100 btn-login">

                    <i class="fas fa-paper-plane me-2"></i>
                    Send OTP

                </button>

            </form>


            <div class="divider">
                <span>OR</span>
            </div>


            <p class="text-center signup-link mb-0">

                New user?

                <a href="{{ route('property.signup') }}">
                    Create an account
                </a>

            </p>

        </div>

    </div>

</div>

