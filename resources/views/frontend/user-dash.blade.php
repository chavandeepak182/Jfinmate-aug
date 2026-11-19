@extends('frontend.layouts.customer-dash')
@section('title', "My Profile")

@section('content')
<style>
/* Dashboard Cards */
.dashboard-card {
    background: #ffffff;
    border: 1px solid #edf0f7;
    border-radius: 12px;
    padding: 15px 16px;
    min-height: 68px;
    height:98px;
    width: 268.25px;
    display: flex;
    align-items: center;
    gap: 12px;
    box-shadow: 0 3px 12px rgba(30, 64, 175, 0.06);
    transition: all 0.3s ease;
    position: relative;
}

.dashboard-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 18px rgba(30, 64, 175, 0.12);
}

.dashboard-card .icon-box {
    width: 55px;
    height: 50px;
    min-width: 37px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 20px;
}

.dashboard-card .icon-box svg {
    width: 18px;
    height: 18px;
}

.dashboard-card .card-info {
    min-width: 0;
    flex: 1;
}

.dashboard-card h6 {
    font-size: 16px;
    color: #444444;
    font-weight: 500;
    margin: 0 0 3px;
    line-height: 100%;
    font-family:figtree;
}

.dashboard-card h2 {
    font-size: 24px;
    color: #444444;
    font-weight: 600;
    margin: 0;
    line-height: 100%;
    overflow-wrap: anywhere;
    letter-spacing: 10%;
}

/* Icon colors */
.bg-purple {
    background: #8247ff;
}

.bg-orange {
    background: #ff9638;
}

.bg-green {
    background: #08b98a;
}

.bg-blue {
    background: #3985ff;
}

/* Referral copy button */
.referral-copy {
    border: none;
    background: transparent;
    color: #777;
    cursor: pointer;
    padding: 5px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.referral-copy:hover {
    color: #295cab;
}

.referral-copy svg {
    width: 17px;
    height: 17px;
}

/* Responsive */
@media (max-width: 767px) {
    .dashboard-card {
        padding: 13px;
        min-height: 65px;
    }

    .dashboard-card h2 {
        font-size: 14px;
    }
}

@media (max-width: 400px) {
    .dashboard-card {
        gap: 8px;
    }

    .dashboard-card .icon-box {
        width: 33px;
        height: 33px;
        min-width: 33px;
    }
}

/* Gradient colors */
.bg-blue {
    background: linear-gradient(135deg, #3b82f6, #2563eb);
}
.bg-purple {
    background: linear-gradient(135deg, #a855f7, #7c3aed);
}
.bg-orange {
    background: linear-gradient(135deg, #fb923c, #f97316);
}
.bg-green {
    background: linear-gradient(135deg, #34d399, #10b981);
}

.application-card {
    background: #fff;
    border-radius: 2rem;
    border: 1px solid #f1f5f9;
    box-shadow: 0 1px 2px rgba(0,0,0,.05);
    overflow: hidden;
    display: flex;
    flex-direction: column;
    min-height: 400px;
}

@media (min-width: 768px) {
    .application-card {
        flex-direction: row;
    }
}

.application-image {
    position: relative;
    min-height: 220px;
}

.application-image img {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.application-image::after {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(to top, rgba(0,0,0,.8), rgba(0,0,0,.2), transparent);
}

.application-image-content {
    position: absolute;
    bottom: 24px;
    left: 24px;
    right: 24px;
    color: #fff;
}

.status-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: rgba(254, 243, 199, .9);
    color: #92400e;
    font-size: 10px;
    font-weight: 800;
    padding: 4px 10px;
    border-radius: 999px;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.status-dot {
    width: 6px;
    height: 6px;
    background: #f59e0b;
    border-radius: 50%;
}

.application-content {
    padding: 32px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    flex: 1;
}

.progress {
    height: 8px;
    border-radius: 999px;
}

.progress-bar {
    border-radius: 999px;
}

.step-label {
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
}

.alert-action {
    background: rgba(255,237,213,.5);
    border: 1px solid #fed7aa;
    border-radius: 1.25rem;
    padding: 16px;
    display: flex;
    gap: 14px;
}
</style>

<div class="container-fluid p-0">

    <h1 class="h3 mb-4 text-black">Dashboard Overview</h1>

    <div class="row g-3">

        {{-- My Loans --}}
        <div class="col-12 col-sm-6 col-xl-3">
            <a href="{{ route('loans.loans-list') }}"
               class="text-decoration-none">

                <div class="dashboard-card">

                    <div class="icon-box bg-purple">
                        <i data-feather="home"></i>
                    </div>

                    <div class="card-info">
                        <h6>My loans</h6>
                        <h2>{{ $loanCount ?? 0 }}</h2>
                    </div>

                </div>
            </a>
        </div>


        {{-- Disbursed Loans --}}
        <div class="col-12 col-sm-6 col-xl-3">
            <a href="{{ route('loans.loans-list') }}"
               class="text-decoration-none">

                <div class="dashboard-card">

                    <div class="icon-box bg-orange">
                        <i data-feather="activity"></i>
                    </div>

                    <div class="card-info">
                        <h6>Disbursed Loans</h6>
                        <h2>{{ $disbursedLoanCount ?? 0 }}</h2>
                    </div>

                </div>
            </a>
        </div>


        {{-- Total Earnings --}}
        <div class="col-12 col-sm-6 col-xl-3">
            <a href="{{ route('user.walletbalance') }}"
               class="text-decoration-none">

                <div class="dashboard-card">

                    <div class="icon-box bg-green">
                        <i data-feather="credit-card"></i>
                    </div>

                    <div class="card-info">
                        <h6>Total Earnings</h6>
                        <h2>₹{{ number_format($walletBalance ?? 0, 0) }}</h2>
                    </div>

                </div>
            </a>
        </div>


        {{-- Referral Code --}}
        <div class="col-12 col-sm-6 col-xl-3">
    <div class="dashboard-card">

        <div class="card-info">
            <h6>Referral Code</h6>

            <h2 id="referralCodeText">{{ $referralCode ?? '-' }}</h2>
        </div>

        <button type="button"
                class="referral-copy"
                onclick="copyReferralCode()"
                title="Copy Referral Code">

            <i data-feather="copy"></i>
        </button>

    </div>
</div>

    </div>

</div>

{{-- ================= MY LOANS ================= --}}

<div class="customer-loans-section">

    <h5 class="loans-heading">Loans</h5>

    @if(isset($loans) && $loans->count() > 0)

        @foreach($loans as $loan)

            @php
                $status = strtolower(trim($loan->status ?? 'pending'));
                $status = str_replace('_', ' ', $status);

                $steps = [
                    'Application',
                    'Credit Check',
                    'Docs',
                    'Approval',
                    'Closing'
                ];

                $statusConfig = [
                    'pending' => [
                        'step' => 0,
                        'percent' => 10,
                        'title' => 'Application Submitted',
                        'message' => 'Your loan application has been submitted successfully.'
                    ],
                    'loan submitted' => [
                        'step' => 0,
                        'percent' => 10,
                        'title' => 'Application Submitted',
                        'message' => 'Your loan application is awaiting review.'
                    ],
                    'in process' => [
                        'step' => 1,
                        'percent' => 40,
                        'title' => 'Application Under Review',
                        'message' => 'Your loan application is currently being processed.'
                    ],
                    'document verification' => [
                        'step' => 2,
                        'percent' => 60,
                        'title' => 'Action Required',
                        'message' => 'Your documents are currently being verified.'
                    ],
                    'approved' => [
                        'step' => 3,
                        'percent' => 80,
                        'title' => 'Application Approved',
                        'message' => 'Your loan application has been approved.'
                    ],
                    'disbursed' => [
                        'step' => 4,
                        'percent' => 100,
                        'title' => 'Loan Disbursed',
                        'message' => 'Your loan amount has been successfully disbursed.'
                    ],
                    'rejected' => [
                        'step' => 1,
                        'percent' => 40,
                        'title' => 'Application Rejected',
                        'message' => 'Unfortunately, your loan application has been rejected.'
                    ]
                ];

                $config = $statusConfig[$status] ?? [
                    'step' => 0,
                    'percent' => 10,
                    'title' => ucfirst($status),
                    'message' => 'Your loan application status is being updated.'
                ];

                $isRejected = $status === 'rejected';

                $currentStep = $config['step'];
                $progress = $config['percent'];

                $date = !empty($loan->created_at)
                    ? \Carbon\Carbon::parse($loan->created_at)->format('M d, Y')
                    : '-';
            @endphp

            <div class="customer-loan-card">

                {{-- HEADER --}}
                <div class="loan-header">

                    <div class="loan-title-area">

                        <div class="loan-icon">
                            <i class="fas fa-file-invoice"></i>
                        </div>

                        <div>
                            <h5>
                                Application #{{ $loan->loan_reference_id ?? $loan->loan_id }}
                            </h5>

                            <p>Submitted on {{ $date }}</p>

                            @if(isset($loan->amount))
                                <span class="loan-amount">
                                    ₹{{ number_format($loan->amount, 2) }}
                                </span>
                            @endif
                        </div>

                    </div>

                    <a href="{{ route('loan.form') }}"
                       class="resume-loan-btn">
                        Resume Application
                        <i class="fas fa-arrow-right"></i>
                    </a>

                </div>

                {{-- BODY --}}
                <div class="loan-body">

                    {{-- LEFT PROGRESS --}}
                    <div class="loan-progress-section">

                        <div class="progress-heading">

                            @if($isRejected)
                                <span class="rejected-text">
                                    Application Rejected
                                </span>
                            @else
                                Step {{ $currentStep + 1 }} of 5:
                                {{ $steps[$currentStep] }}

                                <strong>{{ $progress }}%</strong>
                            @endif

                        </div>

                        <div class="loan-progress-track">

                            <div class="loan-progress-bar
                                {{ $isRejected ? 'rejected-bar' : '' }}"
                                style="width: {{ $progress }}%">
                            </div>

                            @if(!$isRejected)
                                <span class="progress-dot"
                                      style="left: {{ $progress }}%">
                                </span>
                            @endif

                        </div>

                        <div class="loan-step-labels">

                            @foreach($steps as $index => $step)

                                <span class="
                                    {{ !$isRejected && $index <= $currentStep ? 'active' : '' }}
                                    {{ $isRejected && $index === 1 ? 'rejected-text' : '' }}
                                ">
                                    {{ $step }}
                                </span>

                            @endforeach

                        </div>

                    </div>

                    {{-- RIGHT ACTION BOX --}}
                    <div class="loan-action-box
                        {{ $isRejected ? 'rejected-box' : '' }}">

                        <h6>
                            @if($isRejected)
                                <i class="fas fa-times-circle"></i>
                            @elseif($status === 'disbursed')
                                <i class="fas fa-check-circle"></i>
                            @else
                                <i class="fas fa-info-circle"></i>
                            @endif

                            {{ $config['title'] }}
                        </h6>

                        <p>{{ $config['message'] }}</p>

                    </div>

                </div>

            </div>

        @endforeach

    @else

        <div class="no-loans-card">
            <i class="fas fa-file-invoice"></i>
            <h5>No Loan Applications Found</h5>
            <p>You have not applied for any loans yet.</p>
        </div>

    @endif

</div>
<style>
    ```css
.customer-loans-section {
    padding: 10px 0;
    width: 100%;
}

.loans-heading {
    font-size: 17px;
    font-weight: 600;
    color: #444;
    margin-bottom: 20px;
}

.customer-loan-card {
    background: #fff;
    border-radius: 13px;
    padding: 30px;
    margin-bottom: 16px;
    box-shadow: 0 3px 15px rgba(40, 70, 150, 0.045);
    border: 1px solid #f0f2f8;
}

.loan-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 29px;
    gap: 15px;
}

.loan-title-area {
    display: flex;
    align-items: center;
    gap: 15px;
}

.loan-icon {
    width: 51px;
    height: 47px;
    border-radius: 9px;
    background: linear-gradient(135deg, #319aff, #0875f9);
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 19px;
    flex-shrink: 0;
}

.loan-title-area h5 {
    font-size: 18px;
    font-weight: 600;
    color: #333;
    margin: 0 0 3px;
}

.loan-title-area p {
    font-size: 12px;
    color: #999;
    margin: 0;
}

.loan-amount {
    font-size: 12px;
    color: #555;
    display: inline-block;
    margin-top: 4px;
    font-weight: 600;
}

.resume-loan-btn {
    background: linear-gradient(100deg, #319aff, #0875f9);
    color: #fff !important;
    padding: 12px 28px;
    border-radius: 8px;
    font-size: 13px;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 15px;
    white-space: nowrap;
    transition: .3s;
}

.resume-loan-btn:hover {
    background: #066cde;
}

.loan-body {
    display: grid;
    grid-template-columns: 1.35fr .9fr;
    gap: 40px;
    align-items: center;
}

.progress-heading {
    font-size: 13px;
    color: #444;
    margin-bottom: 15px;
}

.progress-heading strong {
    color: #087cff;
    margin-left: 4px;
}

.loan-progress-track {
    height: 6px;
    background: #d9eaff;
    border-radius: 20px;
    position: relative;
}

.loan-progress-bar {
    height: 100%;
    background: #0785ff;
    border-radius: 20px;
    position: relative;
}

.progress-dot {
    position: absolute;
    top: 50%;
    transform: translate(-50%, -50%);
    height: 15px;
    width: 15px;
    border-radius: 50%;
    background: #0785ff;
}

.loan-step-labels {
    display: flex;
    justify-content: space-between;
    margin-top: 15px;
    gap: 5px;
}

.loan-step-labels span {
    color: #888;
    font-size: 11px;
    text-align: center;
}

.loan-step-labels span.active {
    color: #087cff;
    font-weight: 600;
}

.loan-action-box {
    background: #eff7ff;
    padding: 15px 25px;
    border-radius: 9px;
    min-height: 66px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.loan-action-box h6 {
    font-size: 14px;
    font-weight: 600;
    color: #444;
    margin: 0 0 3px;
}

.loan-action-box h6 i {
    margin-right: 5px;
    color: #087cff;
}

.loan-action-box p {
    font-size: 12px;
    color: #777;
    margin: 0;
}

.rejected-text {
    color: #dc3545 !important;
    font-weight: 600;
}

.rejected-bar {
    background: #dc3545;
}

.rejected-box {
    background: #fff0f0;
}

.rejected-box h6,
.rejected-box p {
    color: #dc3545;
}

.no-loans-card {
    background: #fff;
    padding: 50px 20px;
    text-align: center;
    border-radius: 13px;
}

.no-loans-card > i {
    font-size: 35px;
    color: #1685ff;
    margin-bottom: 15px;
}

.no-loans-card h5 {
    font-size: 17px;
    font-weight: 600;
}

.no-loans-card p {
    color: #888;
    font-size: 13px;
}

/* Responsive */
@media(max-width: 991px) {
    .loan-body {
        grid-template-columns: 1fr;
        gap: 25px;
    }
}

@media(max-width: 576px) {
    .customer-loan-card {
        padding: 18px;
    }

    .loan-header {
        flex-direction: column;
        align-items: flex-start;
    }

    .resume-loan-btn {
        width: 100%;
    }

    .loan-title-area h5 {
        font-size: 15px;
    }

    .loan-step-labels span {
        font-size: 9px;
    }

    .loan-action-box {
        padding: 15px;
    }
}
```
</style>

{{-- Feather Icons --}}
<script>
    document.addEventListener("DOMContentLoaded", function () {
        feather.replace();
    });
</script>
<script>
function copyReferralCode() {

    const referralCode = document.getElementById('referralCodeText').innerText.trim();

    navigator.clipboard.writeText(referralCode)
        .then(function () {

            const button = document.querySelector('.referral-copy');

            button.innerHTML = '<i data-feather="check"></i>';

            feather.replace();

            button.title = 'Copied!';

            setTimeout(function () {
                button.innerHTML = '<i data-feather="copy"></i>';
                feather.replace();
                button.title = 'Copy Referral Code';
            }, 2000);

        })
        .catch(function () {
            alert('Unable to copy referral code!');
        });
}
</script>
@endsection
