@extends('layouts.header')

@section('title')
    @parent
    Edit Loan
@endsection
@php
    $isDisbursed = strtolower(trim($loan->status ?? '')) === 'disbursed';
    $roleId = session('role_id');
@endphp
@section('content')
    @parent
    <div class="card-header py-3">
        <div class="d-flex justify-content-between align-items-center">
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb" class="d-flex align-items-center">
                <ol class="breadcrumb m-0 bg-transparent">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('loans.index') }}">All Loans</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Loan</li>
                </ol>
            </nav>
            <!-- Add User Button -->
            <div>
                <a href="{{ route('admin.loans') }}" class="btn btn-secondary"><i class="bi bi-arrow-left-square me-2"></i>
                    Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="bg-white">
        <!-- <form id="editLoanForm" method="post" action="{{ route('updateLoan') }}"> -->
  <form id="editLoanForm"
      method="post"
      action="{{ $roleId == 6 ? route('admin.updateLoan') : route('admin.updateLoan') }}"
      enctype="multipart/form-data">

            @csrf
            <input type="hidden" name="loan_id" value="{{ old('loan_id', $loan->loan_id ?? '') }}">

            <div class="row justify-content-between">
                <!-- Left Section: Personal, Professional, Education & Loan Information -->
                <div class="col-md-7 p-5">
                    <!-- Personal Information -->
                    <div class="section mb-4">
                        <h3 class="h4 mb-2"><strong>Personal Information</strong></h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="user_id">User:</label>
                                        <input type="text" class="form-control" id="user_id" name="user_id"
                                            value="{{ $applyingUser->name ?? '' }}" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="loan_reference_id">Loan Id:</label>
                                        <input type="text" class="form-control" id="loan_reference_id"
                                            name="loan_reference_id"
                                            value="{{ old('loan_reference_id', $loan->loan_reference_id ?? '') }}" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="mobile_no">Mobile No:</label>
                                        <input type="text" class="form-control" id="mobile_no" name="mobile_no"
                                            value="{{ old('mobile_no', $profile->mobile_no ?? '') }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="marital_status">Marital Status:</label>
                                        <select class="form-control" id="marital_status" name="marital_status">
                                            <option value="single"
                                                {{ old('marital_status', $profile->marital_status ?? '') == 'single' ? 'selected' : '' }}>
                                                Single</option>
                                            <option value="married"
                                                {{ old('marital_status', $profile->marital_status ?? '') == 'married' ? 'selected' : '' }}>
                                                Married</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="dob">Date of Birth:</label>
                                        <input type="date" class="form-control" id="dob" name="dob"
                                            value="{{ old('dob', $profile->dob ?? '') }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="residence_address">Residence Address:</label>
                                        <textarea class="form-control" id="residence_address" name="residence_address">{{ old('residence_address', $profile->residence_address ?? '') }}</textarea>
                                    </div>
                                </div>
                           
                               <div class="col-md-4">
    <div class="form-group">
        <label for="state">State:</label>
        <select class="form-control" id="state" name="state">
<option value="">Select State</option>

@foreach($states as $state)
<option value="{{ $state->id }}"
{{ old('state', $profile->state ?? '') == $state->id ? 'selected' : '' }}>
{{ $state->name }}
</option>
@endforeach

</select>
    </div>
                                </div>

                                <div class="col-md-4">
                                <div class="form-group">
                                    <label for="city">City:</label>
                                   <select class="form-control" id="city" name="city">
                                        <option value="">Select City</option>

                                        @foreach($cities as $city)
                                        <option value="{{ $city->id }}"
                                        {{ old('city', $profile->city ?? '') == $city->id ? 'selected' : '' }}>
                                        {{ $city->city }}
                                        </option>
                                        @endforeach

                                        </select>        
 </div>
                            </div>
                            
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="pincode">Pincode:</label>
                                        <input type="text" class="form-control" id="pincode" name="pincode"
                                            value="{{ old('pincode', $profile->pincode ?? '') }}">
                                    </div>
                                </div>
                            </div>
                    </div>

                    <!-- Professional Information -->
                    <div class="section mb-4">
                        <h3 class="h4 mb-2"><strong>Professional Information</strong></h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="company_name">Company Name:</label>
                                        <input type="text" class="form-control" id="company_name" name="company_name"
                                            value="{{ old('company_name', $professional->company_name ?? '') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="industry">Industry:</label>
                                        <input type="text" class="form-control" id="industry" name="industry"
                                            value="{{ old('industry', $professional->industry ?? '') }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="company_address">Company Address:</label>
                                        <textarea class="form-control" id="company_address" name="company_address">{{ old('company_address', $professional->company_address ?? '') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="experience_year">Experience Year:</label>
                                        <input type="number" class="form-control" id="experience_year"
                                            name="experience_year"
                                            value="{{ old('experience_year', $professional->experience_year ?? '') }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="designation">Designation:</label>
                                        <input type="text" class="form-control" id="designation" name="designation"
                                            value="{{ old('designation', $professional->designation ?? '') }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="net_salary">Net Salary:</label>
                                        <input type="number" class="form-control" id="net_salary" name="netsalary"
                                            value="{{ old('netsalary', $professional->netsalary ?? '') }}">
                                    </div>
                                </div>
                            </div>
                    </div>

                    <!-- Loan Information -->
                    <div class="section mb-4">
                        <h3 class="h4 mb-2"><strong>Loan Information</strong></h4>
                            <div class="row">
                               <div class="col-md-6">
    <div class="form-group">
        <label for="status">Loan Status:</label>

        <select name="status"
                class="form-control"
                id="status"
                required
                onchange="toggleRemarkBox(this.value)"
                {{ strtolower(trim($loan->status ?? '')) === 'disbursed' ? 'disabled' : '' }}>

            <option value="approved"
                {{ old('status', $loan->status ?? '') == 'approved' ? 'selected' : '' }}>
                Approved
            </option>

            <option value="rejected"
                {{ old('status', $loan->status ?? '') == 'rejected' ? 'selected' : '' }}>
                Rejected
            </option>

            <option value="in process"
                {{ old('status', $loan->status ?? '') == 'in process' ? 'selected' : '' }}>
                In Process
            </option>

            <option value="disbursed"
                {{ old('status', $loan->status ?? '') == 'disbursed' ? 'selected' : '' }}>
                Disbursed
            </option>

            <option value="document pending"
                {{ old('status', $loan->status ?? '') == 'document pending' ? 'selected' : '' }}>
                Document Pending
            </option>

        </select>

        {{-- Disabled select is not submitted, so keep disbursed value --}}
        @if(strtolower(trim($loan->status ?? '')) === 'disbursed')
            <input type="hidden" name="status" value="disbursed">

            <small class="text-danger">
                <i class="fas fa-lock"></i>
                This loan is disbursed and its status cannot be changed.
            </small>
        @endif

    </div>
</div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="loan_category_id">Loan Category:</label>
                                        <select name="loan_category_id" class="form-control" required>
                                            @foreach ($loanCategories as $category)
                                                <option value="{{ $category->loan_category_id }}"
                                                    {{ old('loan_category_id', $loan->loan_category_id ?? '') == $category->loan_category_id ? 'selected' : '' }}>
                                                    {{ $category->category_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="amount">Amount:</label>
                                        <input type="number" class="form-control" id="amount" name="amount"
                                            value="{{ old('amount', $loan->amount ?? '') }}" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="tenure">Tenure:</label>
                                        <input type="number" class="form-control" id="tenure" name="tenure"
                                            value="{{ old('tenure', $loan->tenure ?? '') }}" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="tenure">Tentative Approval</label>
                                        <select name="in_principle" id="in_principle" class="form-control">
                                            <option value="Yes" {{ $loan->in_principle == 'Yes' ? 'selected' : '' }}>
                                                Yes</option>
                                            <option value="No" {{ $loan->in_principle == 'No' ? 'selected' : '' }}>No
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Sanction Letter (Visible only if status is 'approved') -->
                                <div class="col-md-6">
                                    <div id="sanctionLetterBox" class="section mb-4" style="display: none;">
                                        <h3 class="h4 mb-2"><strong>Sanction Letter</strong></h4>
                                            <div class="form-group">
                                                

                                                <label for="sanction_letter">Upload Sanction Letter:</label>
                                                                <small id="sanctionLetterError"
                                                                    class="text-danger d-none mt-1">
                                                                    Please upload the sanction letter before disbursing the loan.
                                                                </small>
                                                <input type="file" class="form-control" id="sanction_letter"
                                                    name="sanction_letter">
                                                                                                @if ($loan->sanction_letter)
                                                    <small>
                                                        Current file:
                                                        <a href="{{ Storage::url($loan->sanction_letter) }}" target="_blank">
                                                            {{ basename($loan->sanction_letter) }}
                                                        </a>
                                                    </small>
                                                @endif


                                            </div>
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="form-group" id="approvedAmountBox" style="display: none;">
                        <label for="amount_approved">Approved Amount:<span class="text-danger">*</span></label>
                                            <input
                            type="number"
                            class="form-control"
                            id="amountApproved"
                            name="amount_approved"
                            min="0"
                            max="{{ $loan->amount }}"
                            step="1"
                            value="{{ $loan->amount_approved ?? '' }}"
                        >
                        <small id="amountError" class="text-danger"></small>
                    </div>


                    <div class="form-group" id="remark-box" style="display: none;">
                        <label for="remark">Remark:</label>
                        <textarea class="form-control" id="remark" name="remarks">{{ old('remarks') }}</textarea>
                    </div>



                    <div class="mt-4">
                        <button type="submit" class="btn btn-success px-4 py-3 rounded"><strong>UPDATE LOAN</strong></button>
                    </div>
                </div>

            <!-- Right Section: Documents -->
<div class="col-md-4 bg-light p-4">
    <div class="document-section">

        <!-- Header -->
        <div class="document-header">
            <div>
                <h3 class="document-title">
                    <i class="fas fa-folder-open"></i>
                    Documents
                </h3>
                <p class="document-subtitle">Uploaded and required documents</p>
            </div>
        </div>

        <!-- Uploaded Documents -->
        <div class="document-list-section">

            <h6 class="document-label">
                <i class="fas fa-file-alt"></i>
                Uploaded Documents
            </h6>

            @if($documents && $documents->count() > 0)

                <div class="document-list">

                    @foreach ($documents as $doc)

                        @php
                            $fileUrl = Storage::url($doc->file_path);
                            $extension = strtolower(pathinfo($doc->file_path, PATHINFO_EXTENSION));

                            $iconClass = 'fa-file';
                            $iconColor = 'file-default';

                            if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
                                $iconClass = 'fa-file-image';
                                $iconColor = 'file-image';
                            } elseif ($extension === 'pdf') {
                                $iconClass = 'fa-file-pdf';
                                $iconColor = 'file-pdf';
                            } elseif (in_array($extension, ['doc', 'docx'])) {
                                $iconClass = 'fa-file-word';
                                $iconColor = 'file-word';
                            } elseif (in_array($extension, ['xls', 'xlsx'])) {
                                $iconClass = 'fa-file-excel';
                                $iconColor = 'file-excel';
                            } elseif (in_array($extension, ['zip', 'rar'])) {
                                $iconClass = 'fa-file-zipper';
                                $iconColor = 'file-zip';
                            }
                        @endphp

                        <div class="document-card">

                            <!-- File Icon -->
                            <div class="document-icon {{ $iconColor }}">
                                <i class="fas {{ $iconClass }}"></i>
                            </div>

                            <!-- Document Information -->
                            <div class="document-info">

                                <div class="document-name"
                                     title="{{ $doc->document_name }}">
                                    {{ $doc->document_name }}
                                </div>

                                <div class="document-type">
                                    {{ strtoupper($extension) }} File
                                </div>

                            </div>

                            <!-- Actions -->
                            <div class="document-actions">

                                <!-- View -->
                                <a href="{{ $fileUrl }}"
                                   target="_blank"
                                   class="document-action view-document"
                                   title="View Document">
                                    <i class="fas fa-eye"></i>
                                </a>

                                <!-- Download -->
                                <a href="{{ $fileUrl }}"
                                   download
                                   class="document-action download-document"
                                   title="Download Document">
                                    <i class="fas fa-download"></i>
                                </a>

                            </div>

                        </div>

                    @endforeach

                </div>

            @else

                <div class="no-documents">
                    <i class="fas fa-folder-open"></i>
                    <p>No documents uploaded yet.</p>
                </div>

            @endif

        </div>


        <!-- Upload New Documents -->
        <div class="document-upload-section">

            <h6 class="document-label">
                <i class="fas fa-cloud-upload-alt"></i>
                Upload New Documents
            </h6>

            <div id="document-upload-section">

                <div class="document-upload-row mb-3">

                    <div class="row">

                        <div class="col-md-12 mb-2">
                            <input type="text"
                                   name="document_name[]"
                                   class="form-control document-input"
                                   placeholder="Document Name">
                        </div>

                        <div class="col-md-12">
                            <input type="file"
                                   name="documents[]"
                                   class="form-control document-input">
                        </div>

                    </div>

                </div>

            </div>

            <button type="button"
                    class="btn btn-primary add-document-btn"
                    onclick="addDocumentUploadRow()">

                <i class="fas fa-plus"></i>
                Add Another Document

            </button>

        </div>

    </div>
</div>
<style>
    /* =========================================
   DOCUMENT SECTION
========================================= */

.document-section {
    background: #fff;
    border: 1px solid #e5e7eb;
    border-radius: 12px;
    padding: 20px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
}

/* Header */

.document-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 20px;
}

.document-title {
    margin: 0;
    font-size: 21px;
    font-weight: 700;
    color: #1f2937;
}

.document-title i {
    margin-right: 7px;
    color: #2563eb;
}

.document-subtitle {
    margin: 5px 0 0;
    font-size: 13px;
    color: #6b7280;
}

/* Labels */

.document-label {
    display: flex;
    align-items: center;
    gap: 7px;
    margin-bottom: 12px;
    color: #374151;
    font-size: 14px;
    font-weight: 600;
}

.document-label i {
    color: #2563eb;
}

/* Document List */

.document-list {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

/* Document Card */

.document-card {
    display: flex;
    align-items: center;
    width: 100%;
    min-height: 76px;
    padding: 10px;
    background: #fff;
    border: 1px solid #e5e7eb;
    border-radius: 9px;
    transition: all 0.2s ease;
}

.document-card:hover {
    border-color: #bfdbfe;
    box-shadow: 0 3px 10px rgba(37, 99, 235, 0.08);
}

/* File Icon */

.document-icon {
    width: 46px;
    height: 46px;
    min-width: 46px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 8px;
    font-size: 21px;
    margin-right: 11px;
}

.file-pdf {
    color: #dc2626;
    background: #fee2e2;
}

.file-image {
    color: #7c3aed;
    background: #ede9fe;
}

.file-word {
    color: #2563eb;
    background: #dbeafe;
}

.file-excel {
    color: #15803d;
    background: #dcfce7;
}

.file-zip {
    color: #ca8a04;
    background: #fef9c3;
}

.file-default {
    color: #4b5563;
    background: #f3f4f6;
}

/* Document Information */

.document-info {
    min-width: 0;
    flex: 1;
}

.document-name {
    font-size: 14px;
    font-weight: 600;
    color: #1f2937;

    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.document-type {
    margin-top: 4px;
    font-size: 11px;
    color: #9ca3af;
    text-transform: uppercase;
}

/* Actions */

.document-actions {
    display: flex;
    align-items: center;
    gap: 6px;
    margin-left: 8px;
}

.document-action {
    width: 34px;
    height: 34px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 7px;
    text-decoration: none !important;

    transition: all 0.2s ease;
}

.view-document {
    color: #2563eb;
    background: #eff6ff;
}

.view-document:hover {
    color: #fff;
    background: #2563eb;
}

.download-document {
    color: #16a34a;
    background: #f0fdf4;
}

.download-document:hover {
    color: #fff;
    background: #16a34a;
}

/* No Documents */

.no-documents {
    text-align: center;
    padding: 25px 10px;
    border: 1px dashed #d1d5db;
    border-radius: 8px;
    color: #9ca3af;
}

.no-documents i {
    font-size: 28px;
    margin-bottom: 8px;
}

.no-documents p {
    margin: 0;
    font-size: 13px;
}

/* Upload Section */

.document-upload-section {
    margin-top: 25px;
    padding-top: 20px;
    border-top: 1px solid #e5e7eb;
}

.document-input {
    height: 42px;
    font-size: 13px;
    border-radius: 7px;
}

.add-document-btn {
    width: 100%;
    margin-top: 5px;
    border-radius: 7px;
    font-size: 13px;
    font-weight: 600;
    padding: 10px 15px;
}

.add-document-btn i {
    margin-right: 5px;
}


/* =========================================
   MOBILE RESPONSIVE
========================================= */

@media (max-width: 767px) {

    .document-section {
        padding: 15px;
        border-radius: 10px;
    }

    .document-title {
        font-size: 18px;
    }

    .document-subtitle {
        font-size: 12px;
    }

    .document-card {
        min-height: 68px;
        padding: 8px;
    }

    .document-icon {
        width: 40px;
        height: 40px;
        min-width: 40px;
        font-size: 18px;
        margin-right: 9px;
    }

    .document-name {
        font-size: 13px;
    }

    .document-type {
        font-size: 10px;
    }

    .document-actions {
        gap: 4px;
        margin-left: 5px;
    }

    .document-action {
        width: 31px;
        height: 31px;
        font-size: 12px;
    }

    .document-label {
        font-size: 13px;
    }
}
/* Sticky Documents Section */
@media (min-width: 768px) {
    .document-section {
        position: sticky;
        top: 20px;
        z-index: 10;
    }
}
</style>
                    <!-- Education Information -->
                    <!-- <div class="section mb-4 mt-5">
                        <h3 class="h4 mb-2"><strong>Education Information</strong></h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="qualification">Qualification:</label>
                                        <input type="text" class="form-control" id="qualification"
                                            name="qualification"
                                            value="{{ old('qualification', $education->qualification ?? '') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pass_year">Passing Year:</label>
                                        <input type="text" class="form-control" id="pass_year" name="pass_year"
                                            value="{{ old('pass_year', $education->pass_year ?? '') }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="college_name">College Name:</label>
                                        <input type="text" class="form-control" id="college_name" name="college_name"
                                            value="{{ old('college_name', $education->college_name ?? '') }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="college_address">College Address:</label>
                                        <input type="text" class="form-control" id="college_address"
                                            name="college_address"
                                            value="{{ old('college_address', $education->college_address ?? '') }}">
                                    </div>
                                </div>
                            </div>
                    </div>
                </div> -->
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- <script>
        document.addEventListener('DOMContentLoaded', function() {

            $('#editLoanForm').submit(function(e) {
                e.preventDefault(); // Prevent the default form submission
                var form = this;
                var formData = new FormData(form);

                var submitButton = $(this).find('button[type="submit"]');
                submitButton.prop('disabled', true);
                
                var originalText = submitButton.html();
                submitButton.html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Updating...');

                $.ajax({
                    url: $(this).attr('action'),
                    method: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,

                    success: function(response) {
                        console.log(response); // Inspect the response object
                        Swal.fire({
                            title: response.msg ||
                                'Success!', // Fallback to 'Success!' if msg is not present
                            icon: 'success',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href =
                                    "{{ route('admin.loans') }}"; // Redirect to the loans index
                            }
                        });
                    },
                    error: function(xhr) {
    let msg = 'Something went wrong';

    if (xhr.responseJSON?.message) {
        msg = xhr.responseJSON.message;
    }

    Swal.fire({
        title: 'Error!',
        text: msg,
        icon: 'error'
    });
}

                    complete: function() {
                        submitButton.prop('disabled', false);
                        submitButton.html(originalText);
                    }
                });
            });
        });
    </script> -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
$(document).ready(function () {

    $('#editLoanForm').on('submit', function (e) {

        e.preventDefault();

        let form = this;
        let formData = new FormData(form);
        let btn = $(form).find('button[type="submit"]');

        // Disable button
        btn.prop('disabled', true);

        $.ajax({
            url: $(form).attr('action'),
            type: 'POST',
            data: formData,

            processData: false,
            contentType: false,

            headers: {
                'Accept': 'application/json'
            },

        success: function (response) {

    console.log('SUCCESS:', response);

    Swal.fire({
        icon: 'success',
        title: response.msg || 'Loan Updated Successfully',
        confirmButtonText: 'OK'
    }).then(function () {

        @if(session('role_id') == 6)

            // DSA
            window.location.href = "{{ route('dsa.loans') }}";

        @elseif(session('role_id') == 4)

            // Admin
            window.location.href = "{{ route('admin.loans') }}";

        @else

            // Fallback
            window.location.href = "{{ route('dashboard') }}";

        @endif

    });
},
            error: function (xhr) {

                console.log('STATUS:', xhr.status);
                console.log('RESPONSE:', xhr.responseText);
                console.log('JSON:', xhr.responseJSON);

                let msg = 'Something went wrong';

                // Laravel validation error
                if (xhr.responseJSON && xhr.responseJSON.errors) {

                    msg = Object.values(xhr.responseJSON.errors)
                        .flat()
                        .join('<br>');

                }

                // Controller error
                else if (xhr.responseJSON && xhr.responseJSON.msg) {

                    msg = xhr.responseJSON.msg;

                }

                // If Laravel returned HTML
                else if (xhr.responseText) {

                    console.error(xhr.responseText);

                    if (xhr.status === 419) {
                        msg = 'Page expired. Please refresh the page and try again.';
                    }
                    else if (xhr.status === 404) {
                        msg = 'Update Loan route not found.';
                    }
                    else if (xhr.status === 500) {
                        msg = 'Server error occurred. Check Laravel log.';
                    }
                }

                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    html: msg
                });
            },

            complete: function () {

                btn.prop('disabled', false);

            }
        });

    });

});
</script>



    <script>
        function toggleRemarkBox(value) {
            var remarkBox = document.getElementById('remark-box');

            var approvedAmountBox = document.getElementById('approvedAmountBox');
            // approvedAmountBox.style.display = (status === 'disbursed' || status === 'approved') ? 'block' : 'none';

            const approvedAmountInput = document.getElementById('amountApproved');

            if (['rejected', 'approved', 'in process', 'disbursed'].includes(value)) {
                remarkBox.style.display = 'block';
            } else {
                remarkBox.style.display = 'none';
            }

            if (['approved', 'disbursed'].includes(value)) {
                approvedAmountBox.style.display = 'block';
                approvedAmountInput.setAttribute('required', 'required');
            } else {
                approvedAmountBox.style.display = 'none';
                approvedAmountInput.removeAttribute('required');
            }
            // return approvedAmountInput;
            // if (value === 'disbursed') {
            //     approvedAmountInput.setAttribute('required', 'required');
            // } else {
            //     approvedAmountInput.removeAttribute('required');
            // }

            // if (value === 'rejected' || value === 'approved' || value === 'in process' || value === 'disbursed') {
            //     remarkBox.style.display = 'block';
            //     approvedAmountBox.style.display = 'block';
            // } else {
            //     remarkBox.style.display = 'none';
            //     approvedAmountBox.style.display = 'none';
            // }
        }

        function addDocumentUploadRow() {
            var documentUploadSection = document.getElementById('document-upload-section');
            var newRow = document.createElement('div');
            newRow.className = 'document-upload-row mb-3';
            newRow.innerHTML = `
            <div class="row">
                <div class="col-md-12 mb-2">
                    <input type="text" name="document_name[]" class="form-control" placeholder="Document Name">
                </div>
                <div class="col-md-12">
                    <input type="file" name="documents[]" class="form-control">
                </div>
            </div>
        `;
            documentUploadSection.appendChild(newRow);
        }

       function toggleSanctionLetterBox(status) {
    if (status === 'approved' || status === 'disbursed') {
        document.getElementById('sanctionLetterBox').style.display = 'block';
    } else {
        document.getElementById('sanctionLetterBox').style.display = 'none';
    }
}

        // Initialize the form based on current status
      document.addEventListener('DOMContentLoaded', function() {
    var statusElement = document.getElementById('status');
    if (statusElement) {
        const statusValue = statusElement.value;
        toggleSanctionLetterBox(statusValue);
        toggleRemarkBox(statusValue);
    }
});

        // Listen for changes in the loan status
        document.getElementById('status').addEventListener('change', function() {
            toggleSanctionLetterBox(this.value);
        });
    </script>
<script>
$(document).ready(function(){

    function loadCities(state_id, selected_city = null){

        if(state_id){

            $.ajax({
                url: "/get-cities/" + state_id,
                type: "GET",
                success: function(data){

                    let cityDropdown = $('#city');
                    cityDropdown.empty();

                    cityDropdown.append('<option value="">Select City</option>');

                    $.each(data, function(index, city){

                        let selected = '';

                        if(selected_city == city.id){
                            selected = 'selected';
                        }

                        cityDropdown.append(
                            '<option value="'+city.id+'" '+selected+'>'+city.city+'</option>'
                        );

                    });

                }
            });

        }

    }

    // ✅ page load
    let state_id = $('#state').val();
    let selected_city = "{{ $profile->city }}";

    loadCities(state_id, selected_city);

    // ✅ state change
    $('#state').on('change', function(){

        let state_id = $(this).val();

        loadCities(state_id);

    });

});
</script>

@endsection
