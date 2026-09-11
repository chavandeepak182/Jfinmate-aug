@extends('layouts.header')

@section('title')
    @parent
    JFS | Loan Details
@endsection

@section('content')
@parent

<style>
    .loan-details-page {
        background: #f6f8fc;
        padding: 0 0 30px;
    }

    .loan-details-page .loan-topbar {
        padding: 18px 24px;
        background: #fff;
        border-bottom: 1px solid #e8edf3;
    }

    .loan-details-page .loan-breadcrumb {
        margin: 0;
        padding: 0;
        background: transparent;
        align-items: center;
    }

    .loan-details-page .loan-breadcrumb .breadcrumb-item {
        font-size: 12px;
        font-weight: 500;
        color: #8b96a8;
    }

    .loan-details-page .loan-breadcrumb a {
        color: #5d6b80;
        text-decoration: none;
    }

    .loan-details-page .loan-breadcrumb a:hover {
        color: #2563eb;
    }

    .loan-details-page .breadcrumb-item + .breadcrumb-item::before {
        color: #b4bdca;
    }

    .loan-details-page .loan-back-btn {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        padding: 8px 15px;
        border: 1px solid #dce3eb;
        border-radius: 9px;
        background: #fff;
        color: #344054;
        font-size: 12px;
        font-weight: 600;
        text-decoration: none;
        transition: .2s ease;
    }

    .loan-details-page .loan-back-btn:hover {
        background: #f5f8fc;
        border-color: #cbd5e1;
        color: #1d2939;
        transform: translateY(-1px);
    }

    .loan-details-page .loan-wrapper {
        padding: 24px;
    }

    .loan-details-page .loan-main-card {
        overflow: hidden;
        background: #fff;
        border: 1px solid #e7ebf1;
        border-radius: 16px;
        box-shadow: 0 7px 25px rgba(20, 35, 60, .05);
    }

    .loan-details-page .loan-column {
        padding: 0;
    }

    .loan-details-page .loan-column-right {
        background: #f8fafc;
        border-left: 1px solid #edf0f4;
    }

    .loan-details-page .loan-section {
        padding: 24px;
        border-bottom: 1px solid #edf0f4;
    }

    .loan-details-page .loan-section:last-child {
        border-bottom: 0;
    }

    .loan-details-page .loan-section-title {
        display: flex;
        align-items: center;
        gap: 11px;
        margin-bottom: 20px;
    }

    .loan-details-page .loan-section-icon {
        width: 37px;
        height: 37px;
        min-width: 37px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 10px;
        background: #edf4ff;
        color: #2563eb;
        font-size: 14px;
    }

    .loan-details-page .loan-section-title h3 {
        margin: 0;
        color: #26344b;
        font-size: 15px;
        font-weight: 700;
    }

    .loan-details-page .loan-section-title p {
        margin: 2px 0 0;
        color: #98a2b3;
        font-size: 10px;
    }

    .loan-details-page .loan-field {
        margin-bottom: 15px;
    }

    .loan-details-page .loan-field:last-child {
        margin-bottom: 0;
    }

    .loan-details-page .loan-field label {
        display: block;
        margin-bottom: 7px;
        color: #7f8b9e;
        font-size: 9px;
        line-height: 1.2;
        font-weight: 700;
        letter-spacing: .65px;
        text-transform: uppercase;
    }

    .loan-details-page .loan-field label i {
        margin-right: 5px;
        color: #91a3be;
    }

    .loan-details-page .loan-field .form-control {
        min-height: 40px;
        padding: 9px 12px;
        background: #fafbfd;
        border: 1px solid #e4e9f0;
        border-radius: 9px;
        color: #29364c;
        font-size: 12px;
        font-weight: 600;
        box-shadow: none;
    }

    .loan-details-page .loan-field .form-control:focus {
        border-color: #cbdaf2;
        background: #fff;
        box-shadow: 0 0 0 3px rgba(37, 99, 235, .06);
    }

    .loan-details-page .loan-field .form-control[readonly] {
        cursor: default;
    }

    .loan-details-page .loan-column-right .loan-section {
        padding: 22px;
    }

    .loan-details-page .loan-document {
        position: relative;
        display: flex;
        align-items: center;
        gap: 11px;
        margin-bottom: 10px;
        padding: 12px;
        background: #fff;
        border: 1px solid #e5eaf1;
        border-radius: 10px;
    }

    .loan-details-page .loan-document:last-child {
        margin-bottom: 0;
    }

    .loan-details-page .loan-document-icon {
        width: 35px;
        height: 35px;
        min-width: 35px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 8px;
        background: #fff1f1;
        color: #dc4c4c;
        font-size: 13px;
    }

    .loan-details-page .loan-document-content {
        min-width: 0;
        flex: 1;
    }

    .loan-details-page .loan-document-name {
        display: block;
        margin-bottom: 3px;
        color: #7f8b9e;
        font-size: 9px;
        font-weight: 700;
        letter-spacing: .5px;
        text-transform: uppercase;
    }

    .loan-details-page .loan-document-path {
        display: block;
        overflow: hidden;
        color: #475467;
        font-size: 11px;
        font-weight: 500;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .loan-details-page .loan-empty {
        margin: 0;
        padding: 14px;
        color: #98a2b3;
        background: #fff;
        border: 1px dashed #dfe5ed;
        border-radius: 10px;
        font-size: 11px;
        text-align: center;
    }

    .loan-details-page .loan-summary {
        margin-bottom: 22px;
        padding: 20px;
        background: linear-gradient(135deg, #f8fbff, #eef5ff);
        border: 1px solid #dfeafb;
        border-radius: 13px;
    }

    .loan-details-page .loan-summary-label {
        margin-bottom: 5px;
        color: #7d8da7;
        font-size: 9px;
        font-weight: 700;
        letter-spacing: .7px;
        text-transform: uppercase;
    }

    .loan-details-page .loan-summary-value {
        color: #1f5fc7;
        font-size: 21px;
        font-weight: 750;
    }

    @media (max-width: 991px) {
        .loan-details-page .loan-column-right {
            border-left: 0;
            border-top: 1px solid #edf0f4;
        }
    }

    @media (max-width: 767px) {
        .loan-details-page .loan-topbar {
            padding: 15px;
        }

        .loan-details-page .loan-wrapper {
            padding: 14px;
        }

        .loan-details-page .loan-topbar > .d-flex {
            gap: 12px;
            align-items: flex-start !important;
        }

        .loan-details-page .loan-breadcrumb {
            flex-wrap: wrap;
        }

        .loan-details-page .loan-back-btn {
            white-space: nowrap;
        }

        .loan-details-page .loan-section {
            padding: 18px;
        }
    }
</style>

<div class="loan-details-page">
<!-- Breadcrumbs -->
<div class="loan-topbar">
    <div class="d-flex justify-content-between align-items-center">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="d-flex align-items-center">
            <ol class="breadcrumb m-0 bg-transparent loan-breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('loans.index') }}">Loans List</a></li>
            <li class="breadcrumb-item"><a href="{{ route('loans.index') }}">All Loans</a></li>
            <li class="breadcrumb-item active" aria-current="page">Loan Details</li>
            </ol>
        </nav>
        <!-- Add User Button -->
         <div>
            <a href="{{ url()->previous() }}" class="loan-back-btn"><i class="bi bi-arrow-left"></i> Back</a>
        </div>
    </div>
</div>

<!-- Begin Page Content -->
<div class="loan-wrapper"><div class="loan-main-card">
    @if ($loan)
        <div class="row">
            <!-- Left side -->
            <div class="col-lg-8 loan-column">
                <!-- Basic information -->
                <div class="loan-section">
                    <div class="loan-section-title"><div class="loan-section-icon"><i class="fas fa-file-invoice-dollar"></i></div><div><h3>Basic Information</h3><p>Loan application overview</p></div></div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3 loan-field">
                                <label class="form-label">Loan Category</label>
                                <input type="text" class="form-control" value="{{ $loan->loan_category_name ?? 'N/A' }}" readonly />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3 loan-field">
                                <label class="form-label">Loan Amount</label>
                                <input type="text" class="form-control" value="{{ $loan->amount ?? 'N/A' }}" readonly />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3 loan-field">
                                <label class="form-label">Loan Tenure</label>
                                <input type="text" class="form-control" value="{{ $loan->tenure ?? 'N/A' }}" readonly />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3 loan-field">
                                <label class="form-label">Applied By</label>
                                <input type="text" class="form-control" value="{{ $loan->user_name ?? 'N/A' }}" readonly />
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Profile Information -->
                @if ($profile)
                <div class="loan-section">
                    <div class="loan-section-title"><div class="loan-section-icon"><i class="fas fa-user"></i></div><div><h3>Profile Information</h3><p>Applicant personal information</p></div></div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3 loan-field">
                                <label class="form-label">Mobile Number</label>
                                <input type="text" class="form-control" value="{{ $profile->mobile_no ?? 'N/A' }}" readonly />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3 loan-field">
                                <label class="form-label">Date of Birth</label>
                                <input type="text" class="form-control" value="{{ $profile->dob ?? 'N/A' }}" readonly />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3 loan-field">
                                <label class="form-label">Marital Status</label>
                                <input type="text" class="form-control" value="{{ $profile->marital_status ?? 'N/A' }}" readonly />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3 loan-field">
                                <label class="form-label">Residence Address</label>
                                <input type="text" class="form-control" value="{{ $profile->residence_address ?? 'N/A' }}" readonly />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3 loan-field">
                                <label class="form-label">City</label>
                               <input type="text" class="form-control" value="{{ $profile->city_name ?? 'N/A' }}" readonly />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3 loan-field">
                                <label class="form-label">State</label>
                                <input type="text" class="form-control" value="{{ $profile->state_name ?? 'N/A' }}" readonly />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3 loan-field">
                                <label class="form-label">Pincode</label>
                                <input type="text" class="form-control" value="{{ $profile->pincode ?? 'N/A' }}" readonly />
                            </div>
                        </div>
                    </div>
                </div>
                @endif

                <!-- Professional Information -->
                @if ($professional)
                <div class="loan-section">
                    <div class="loan-section-title"><div class="loan-section-icon"><i class="fas fa-briefcase"></i></div><div><h3>Professional Information</h3><p>Employment and income information</p></div></div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3 loan-field">
                                <label class="form-label">Company Name</label>
                                <input type="text" class="form-control" value="{{ $professional->company_name ?? 'N/A' }}" readonly />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3 loan-field">
                                <label class="form-label">Designation</label>
                                <input type="text" class="form-control" value="{{ $professional->designation ?? 'N/A' }}" readonly />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3 loan-field">
                                <label class="form-label">Industry</label>
                                <input type="text" class="form-control" value="{{ $professional->industry ?? 'N/A' }}" readonly />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3 loan-field">
                                <label class="form-label">Experience (Years)</label>
                                <input type="text" class="form-control" value="{{ $professional->experience_year ?? 'N/A' }}" readonly />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3 loan-field">
                                <label class="form-label">Net Salary</label>
                                <input type="text" class="form-control" value="{{ $professional->netsalary ?? 'N/A' }}" readonly />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3 loan-field">
                                <label class="form-label">Gross Salary</label>
                                <input type="text" class="form-control" value="{{ $professional->gross_salary ?? 'N/A' }}" readonly />
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>

            <!-- Right side (if needed) -->
            <div class="col-lg-4 loan-column loan-column-right">
                <!-- Educational Information -->
                @if ($education)
                <div class="loan-section">
                    <div class="loan-section-title"><div class="loan-section-icon"><i class="fas fa-graduation-cap"></i></div><div><h3>Educational Information</h3><p>Applicant education details</p></div></div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3 loan-field">
                                <label class="form-label">Qualification</label>
                                <input type="text" class="form-control" value="{{ $education->qualification ?? 'N/A' }}" readonly />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3 loan-field">
                                <label class="form-label">College Name</label>
                                <input type="text" class="form-control" value="{{ $education->college_name ?? 'N/A' }}" readonly />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3 loan-field">
                                <label class="form-label">Pass Year</label>
                                <input type="text" class="form-control" value="{{ $education->pass_year ?? 'N/A' }}" readonly />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3 loan-field">
                                <label class="form-label">College Address</label>
                                <input type="text" class="form-control" value="{{ $education->college_address ?? 'N/A' }}" readonly />
                            </div>
                        </div>
                    </div>
                </div>
                @endif

               
<!-- Documents -->
@if ($documents && count($documents) > 0)

    <div class="loan-section">

        <div class="loan-section-title">
            <div class="loan-section-icon">
                <i class="fas fa-file-lines"></i>
            </div>

            <div>
                <h3>Documents</h3>
                <p>Uploaded loan documents</p>
            </div>
        </div>

        <div class="row">

            @foreach($documents as $document)

                @php
                    $filePath = $document->file_path;

                    /*
                    |--------------------------------------------------------------------------
                    | Document URL
                    |--------------------------------------------------------------------------
                    | If database contains a complete URL, use it directly.
                    | Otherwise use Laravel storage URL.
                    |--------------------------------------------------------------------------
                    */
                    if (filter_var($filePath, FILTER_VALIDATE_URL)) {
                        $documentUrl = $filePath;
                    } else {
                        $documentUrl = asset('storage/' . ltrim($filePath, '/'));
                    }
                @endphp

                <div class="col-lg-12 mb-3">

                    <div class="document-item">

                        <!-- Document Icon -->
                        <div class="document-icon">
                            <i class="fas fa-file-pdf"></i>
                        </div>

                        <!-- Document Details -->
                        <div class="document-info">

                            <div class="document-name">
                                {{ ucfirst($document->document_name) }}
                            </div>

                            <a href="{{ $documentUrl }}"
                               target="_blank"
                               rel="noopener noreferrer"
                               class="view-document">

                                <i class="fas fa-eye"></i>
                                View Document

                            </a>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

@else

    <div class="loan-section">
        <div class="loan-section-title">
            <div class="loan-section-icon">
                <i class="fas fa-file-lines"></i>
            </div>

            <div>
                <h3>Documents</h3>
                <p>Uploaded loan documents</p>
            </div>
        </div>

        <p class="text-muted mb-0">
            No documents found.
        </p>
    </div>

@endif

        </div>
    </div>

@else

    <p>No loan details found.</p>

@endif

</div>
</div>
</div>

@endsection


