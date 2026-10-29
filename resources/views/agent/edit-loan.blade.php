@extends('layouts.header')

@section('title', 'Edit Loan')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<div class="card-header py-3">
    <div class="d-flex justify-content-between align-items-center">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="d-flex align-items-center">
            <ol class="breadcrumb m-0 bg-transparent">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('agent.allAgentLoans') }}">All Loans</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Loan</li>
            </ol>
        </nav>
        <a href="{{ route('agent.allAgentLoans') }}" class="btn btn-primary float-right rounded"><i class="fa fa-arrow-left"></i> Back</a>
    </div>
</div>
<div class="bg-white">
    @if(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ session('success') }}',
            });
        </script>
    @endif

    @if ($errors->any())
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                html: '<ul>@foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach</ul>',
            });
        </script>
    @endif

    <form id="editLoanForm" method="post" action="{{ route('agent.updateLoan') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="loan_id" value="{{ old('loan_id', $loan->loan_id ?? '') }}">
        <div class="row">
            <!-- Left Section: Personal, Professional, Education & Loan Information -->
            <div class="col-md-8 px-5 py-3 mb-5"> <!-- Added pr-3 for padding -->
                <h3 class="h5 mb-3 mt-3"><strong>Loan Information</strong></h3>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="status">Loan Status:</label>
                            <select name="status" class="form-control" id="status" required onchange="toggleRemarkBox(this.value)">
                                <option value="in process" {{ old('status', $loan->status ?? '') == 'in process' ? 'selected' : '' }}>In Process</option>
                                <option value="document pending" {{ old('status', $loan->status ?? '') == 'document pending' ? 'selected' : '' }}>Document Pending</option>
                                <option value="disbursed" {{ old('status', $loan->status ?? '') == 'disbursed' ? 'selected' : '' }}>Disbursed</option>
                                <option value="approved" {{ old('status', $loan->status ?? '') == 'approved' ? 'selected' : '' }}>Approved</option>
                                <option value="rejected" {{ old('status', $loan->status ?? '') == 'rejected' ? 'selected' : '' }}>Rejected</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="loan_category_id">Loan Category:</label>
                            <select name="loan_category_id" class="form-control" required>
                                @foreach($loanCategories as $category)
                                    <option value="{{ $category->loan_category_id }}" {{ old('loan_category_id', $loan->loan_category_id ?? '') == $category->loan_category_id ? 'selected' : '' }}>
                                        {{ $category->category_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!-- Remarks Box -->
                    <div class="col-md-12">
                        <div id="remarkBox" class="section mb-4" style="display: none;">
                            <h4 class="mb-3">Remark</h4>
                            <div class="form-group">
                                <label for="remarks">Remark:</label>
                                <textarea class="form-control" id="remarks" name="remarks">{{ old('remarks', $loan->remarks ?? '') }}</textarea>
                            </div>
                        </div>
                    </div>
                  <div class="form-group" id="approvedAmountBox" style="display: none;">
                            <label for="amount_approved">
                                Approved Amount:<span class="text-danger">*</span>
                            </label>

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
                    <script>
                    document.querySelector("form").addEventListener("submit", function(e) {

                        let approved = parseFloat(document.getElementById("amountApproved").value);
                        let maxAmount = {{ $loan->amount ?? 0 }};

                        if (isNaN(approved)) return;

                        if (approved < 0) {
                            e.preventDefault();
                            document.getElementById("amountError").innerText =
                                "Amount cannot be negative";
                            return;
                        }

                        if (approved > maxAmount) {
                            e.preventDefault();
                            document.getElementById("amountError").innerText =
                                "Approved amount cannot exceed loan amount";
                        }
                    });
                    </script>
                    <!-- Sanction Letter (Visible only if status is 'approved') -->
                    <div class="col-md-12">
                        <div id="sanctionLetterBox" class="section mb-4" style="display: none;">
                            <h4 class="mb-3">Sanction Letter</h4>
                            <div class="form-group">
                                <label for="sanction_letter">Upload Sanction Letter:</label>
                                <input type="file" class="form-control" id="sanction_letter" name="sanction_letter">
                                @if($loan->sanction_letter)
                                    <small>Current file: <a href="{{ asset('storage/' . $loan->sanction_letter) }}" target="_blank">{{ $loan->sanction_letter }}</a></small>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="amount">Loan Amount:</label>
                            <input type="number" class="form-control" id="amount" name="amount" value="{{ old('amount', $loan->amount ?? '') }}" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="tenure">Loan Tenure:</label>
                            <input type="number" class="form-control" id="tenure" name="tenure" value="{{ old('tenure', $loan->tenure ?? '') }}" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="tenure">Tentative Approval</label>
                            <select name="in_principle" id="in_principle" class="form-control">
                                <option value="Yes" {{ $loan->in_principle == 'Yes' ? 'selected' : '' }}>Yes</option>
                                <option value="No" {{ $loan->in_principle == 'No' ? 'selected' : '' }}>No</option>
                            </select>                            
                        </div>
                    </div>
                </div>
                <!-- Personal Information -->
                <h3 class="h5 mb-3 mt-3"><strong>Personal Information</strong></h3>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="user_id">User:</label>
                            <input type="text" class="form-control" id="user_id" name="user_id" value="{{ $applyingUser->name ?? '' }}" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="loan_reference_id">Loan Id:</label>
                            <input type="text" class="form-control" id="loan_reference_id" name="loan_reference_id" value="{{ old('loan_reference_id', $loan->loan_reference_id ?? '') }}" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="mobile_no">Mobile No:</label>
                            <input type="text" class="form-control" id="mobile_no" name="mobile_no" value="{{ old('mobile_no', $profile->mobile_no ?? '') }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="marital_status">Marital Status:</label>
                            <select class="form-control" id="marital_status" name="marital_status">
                                <option value="single" {{ old('marital_status', $profile->marital_status ?? '') == 'single' ? 'selected' : '' }}>Single</option>
                                <option value="married" {{ old('marital_status', $profile->marital_status ?? '') == 'married' ? 'selected' : '' }}>Married</option>
                            </select>
                        </div>
                    </div>                    
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="dob">Date of Birth:</label>
                            <input type="date" class="form-control" id="dob" name="dob" value="{{ old('dob', $profile->dob ?? '') }}">
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
                           <select id="state" name="state" class="form-control">
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
                           <select id="city" name="city" class="form-control">
    <option value="">Select City</option>
</select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="pincode">Pincode:</label>
                            <input type="text" class="form-control" id="pincode" name="pincode" value="{{ old('pincode', $profile->pincode ?? '') }}">
                        </div>
                    </div>
                </div>

                <!-- Professional Information -->
                <h3 class="h5 mb-3 mt-3"><strong>Professional Information</strong></h3>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="company_name">Company Name:</label>
                            <input type="text" class="form-control" id="company_name" name="company_name" value="{{ old('company_name', $professional->company_name ?? '') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="industry">Industry:</label>
                            <input type="text" class="form-control" id="industry" name="industry" value="{{ old('industry', $professional->industry ?? '') }}">
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
                            <input type="number" class="form-control" id="experience_year" name="experience_year" value="{{ old('experience_year', $professional->experience_year ?? '') }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="designation">Designation:</label>
                            <input type="text" class="form-control" id="designation" name="designation" value="{{ old('designation', $professional->designation ?? '') }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="net_salary">Net Salary:</label>
                            <input type="number" class="form-control" id="net_salary" name="netsalary" value="{{ old('netsalary', $professional->netsalary ?? '') }}">
                        </div>
                    </div>
                </div>
                
                <div class="mt-3">
                    <button type="submit" class="btn btn-warning rounded py-2 px-3"><strong>UPDATE LOAN</strong></button>
                </div>              
            </div>

            <!-- Right Section: Document Management -->
<style>
/* =========================================================
   DOCUMENT COLUMN
========================================================= */
.document-column {
    padding: 25px 30px 25px 10px;
}

/* =========================================================
   MAIN DOCUMENT CARD
========================================================= */
.document-section {
    width: 100%;
    background: #ffffff;
    border: 1px solid #e1e5eb;
    border-radius: 15px;
    padding: 25px;
    box-shadow: 0 3px 12px rgba(0, 0, 0, 0.04);
    position: sticky;
    top: 20px;
    box-sizing: border-box;
}

/* HEADER */
.document-header { margin-bottom: 25px; }
.document-header-left { display: flex; align-items: flex-start; gap: 14px; }
.document-folder-icon { color: #2864d7; font-size: 30px; flex-shrink: 0; }
.document-title { margin: 0; color: #293548; font-size: 25px; font-weight: 700; line-height: 1.3; }
.document-subtitle { margin: 5px 0 0; color: #7b8494; font-size: 14px; line-height: 1.5; }

/* SECTION LABEL */
.document-label {
    display: flex;
    align-items: center;
    gap: 8px;
    margin: 0 0 14px;
    color: #293548;
    font-size: 16px;
    font-weight: 700;
}
.document-label i { color: #2864d7; }

/* DOCUMENT LIST */
.document-list { display: flex; flex-direction: column; gap: 10px; }

/* DOCUMENT CARD */
.document-card {
    width: 100%;
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 10px;
    border: 1px solid #dfe4ea;
    border-radius: 11px;
    background: #ffffff;
    box-sizing: border-box;
}

/* DOCUMENT ICON */
.document-icon {
    width: 55px; height: 55px; min-width: 55px;
    display: flex; align-items: center; justify-content: center;
    border-radius: 10px; font-size: 22px; flex-shrink: 0;
}
.file-image   { background: #eee8ff; color: #7c3aed; }
.file-pdf     { background: #fee2e2; color: #dc2626; }
.file-word    { background: #e5efff; color: #2563eb; }
.file-excel   { background: #e5f8ec; color: #15803d; }
.file-default { background: #f1f3f5; color: #596579; }

/* DOCUMENT INFO */
.document-info { flex: 1; min-width: 0; }
.document-name {
    color: #293548; font-size: 14px; font-weight: 600;
    white-space: nowrap; overflow: hidden; text-overflow: ellipsis;
}
.document-type { margin-top: 4px; color: #9299a5; font-size: 10px; }

/* DOCUMENT ACTIONS */
.document-actions { display: flex; gap: 6px; flex-shrink: 0; }
.document-action {
    width: 38px; height: 38px;
    border: none; border-radius: 8px;
    display: flex; align-items: center; justify-content: center;
    cursor: pointer; text-decoration: none !important; flex-shrink: 0;
}
.view-document     { background: #edf5ff; color: #2864d7 !important; }
.view-document:hover { background: #2864d7; color: #ffffff !important; }
.download-document { background: #edfbf3; color: #159447 !important; }
.download-document:hover { background: #159447; color: #ffffff !important; }
.delete-document   { background: #fff0f0; color: #dc2626; }
.delete-document:hover { background: #dc2626; color: #ffffff; }

/* DIVIDER */
.document-divider { height: 1px; background: #e2e5e9; margin: 27px 0; }

/* UPLOAD ROW */
.document-upload-row { width: 100%; margin-bottom: 15px; box-sizing: border-box; }

/* DOCUMENT NAME INPUT */
.document-name-wrapper { width: 100%; margin-bottom: 10px; }
.document-input {
    width: 100%; height: 53px;
    border: 1px solid #d8dee6; border-radius: 9px;
    padding: 0 15px; font-size: 14px; color: #293548;
    background: #ffffff; box-sizing: border-box; outline: none;
}
.document-input:focus { border-color: #2864d7; box-shadow: 0 0 0 2px rgba(40,100,215,0.08); }
.document-input::placeholder { color: #7b8494; }

/* =========================================================
   CUSTOM FILE UPLOAD  ← THE IMPORTANT PART
========================================================= */
.custom-file-wrapper {
    position: relative;                 /* anchor for absolute children */
    width: 100%;
    height: 53px;
    display: flex;
    align-items: center;
    background: #e9edf2;
    border: 1px solid #d8dee6;
    border-radius: 9px;
    overflow: hidden;
    box-sizing: border-box;
}

/* HIDE native file input — bulletproof */
.custom-file-wrapper .document-file-input {
    position: absolute !important;
    width: 1px !important;
    height: 1px !important;
    padding: 0 !important;
    margin: -1px !important;
    overflow: hidden !important;
    clip: rect(0,0,0,0) !important;
    white-space: nowrap !important;
    border: 0 !important;
    opacity: 0 !important;
    pointer-events: none !important;
    z-index: -1 !important;
}

/* CHOOSE FILE button (left) */
.custom-file-label {
    position: relative;
    z-index: 2;
    height: 100%;
    min-width: 80px;
    margin: 0;
    padding: 0 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #e9edf2;
    border-right: 1px solid #d8dee6;
    cursor: pointer;
    box-sizing: border-box;
    flex-shrink: 0;
    transition: background 0.2s ease;
}
.custom-file-label:hover { background: #dde4ec; }

.choose-file-text {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 7px;
    color: #536174;
    font-size: 14px;
    font-weight: 500;
    white-space: nowrap;
}
.choose-file-text i { font-size: 18px; color: #596579; }

/* SELECTED FILE NAME (right) */
.selected-file-name {
    flex: 1;
    min-width: 0;
    height: 100%;
    padding: 0 14px;
    display: flex;
    align-items: center;
    color: #596579;
    font-size: 13px;
    font-weight: 500;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    box-sizing: border-box;
    z-index: 1;
}
.selected-file-name.has-file {
    color: #2864d7;
    font-weight: 600;
}

/* ADD ANOTHER BUTTON */
.add-document-btn {
    width: 100%;
    height: 52px;
    border: none;
    border-radius: 8px;
    background: #0866d3;
    color: #ffffff;
    font-size: 15px;
    font-weight: 600;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    cursor: pointer;
    transition: background 0.2s ease, transform 0.1s ease;
}
.add-document-btn:hover { background: #0056b8; }
.add-document-btn:active { transform: scale(0.99); }
.add-document-btn i { font-size: 16px; }

/* NO DOCUMENTS */
.no-documents {
    padding: 22px;
    text-align: center;
    border: 1px dashed #d6dbe2;
    border-radius: 10px;
    color: #9aa2af;
}
.no-documents i { display: block; font-size: 24px; margin-bottom: 7px; }
.no-documents p { margin: 0; font-size: 13px; }

/* RESPONSIVE */
@media (max-width: 991px) {
    .document-column { padding: 20px 15px; }
    .document-section { position: relative; top: auto; width: 100%; }
}
@media (max-width: 575px) {
    .document-column { padding: 15px 10px; }
    .document-section { padding: 18px; border-radius: 12px; }
    .document-header { margin-bottom: 20px; }
    .document-header-left { gap: 10px; }
    .document-folder-icon { font-size: 24px; }
    .document-title { font-size: 21px; }
    .document-subtitle { font-size: 12px; }
    .document-label { font-size: 14px; margin-bottom: 12px; }
    .document-card { padding: 8px; gap: 8px; }
    .document-icon { width: 45px; height: 45px; min-width: 45px; font-size: 18px; }
    .document-name { font-size: 13px; }
    .document-type { font-size: 9px; }
    .document-actions { gap: 4px; }
    .document-action { width: 32px; height: 32px; font-size: 11px; }
    .document-input { height: 50px; }
    .custom-file-wrapper { height: 50px; }
    .custom-file-label { min-width: 120px; padding: 0 10px; }
    .choose-file-text { font-size: 13px; gap: 5px; }
    .choose-file-text i { font-size: 16px; }
    .selected-file-name { padding: 0 10px; font-size: 12px; }
    .add-document-btn { height: 50px; font-size: 14px; }
}
@media (max-width: 380px) {
    .document-section { padding: 15px; }
    .document-title { font-size: 19px; }
    .custom-file-label { min-width: 105px; padding: 0 8px; }
    .choose-file-text { font-size: 12px; }
    .choose-file-text i { font-size: 14px; }
    .selected-file-name { padding: 0 8px; font-size: 11px; }
}
</style> 
            <!-- =========================================================
     RIGHT SIDE : DOCUMENTS
========================================================= -->

<div class="col-lg-4 col-md-12 document-column">

    <div class="document-section">

        <!-- HEADER -->
        <div class="document-header">

            <div class="document-header-left">

                <div class="document-folder-icon">
                    <i class="fas fa-folder-open"></i>
                </div>

                <div>
                    <h3 class="document-title">
                        Documents
                    </h3>

                    <p class="document-subtitle">
                        Uploaded and required documents
                    </p>
                </div>

            </div>

        </div>


        <!-- =================================================
             EXISTING DOCUMENTS
        ================================================== -->

        <div class="document-list-section">

            <h6 class="document-label">
                <i class="fas fa-file-alt"></i>
                Uploaded Documents
            </h6>


            <div id="uploadedDocuments">

                @if(isset($documents) && $documents->count() > 0)

                    <div class="document-list">

                        @foreach($documents as $doc)

                            @php

                                $fileUrl = Storage::url($doc->file_path);

                                $extension = strtolower(
                                    pathinfo(
                                        $doc->file_path,
                                        PATHINFO_EXTENSION
                                    )
                                );

                                if(in_array($extension, ['jpg','jpeg','png','gif','webp'])) {

                                    $iconClass = 'fa-file-image';
                                    $iconColor = 'file-image';

                                } elseif($extension === 'pdf') {

                                    $iconClass = 'fa-file-pdf';
                                    $iconColor = 'file-pdf';

                                } elseif(in_array($extension, ['doc','docx'])) {

                                    $iconClass = 'fa-file-word';
                                    $iconColor = 'file-word';

                                } elseif(in_array($extension, ['xls','xlsx'])) {

                                    $iconClass = 'fa-file-excel';
                                    $iconColor = 'file-excel';

                                } else {

                                    $iconClass = 'fa-file';
                                    $iconColor = 'file-default';

                                }

                            @endphp


                            <div class="document-card"
                                 id="document-{{ $doc->document_id }}">


                                <!-- FILE ICON -->
                                <div class="document-icon {{ $iconColor }}">

                                    <i class="fas {{ $iconClass }}"></i>

                                </div>


                                <!-- FILE INFORMATION -->
                                <div class="document-info">

                                    <div class="document-name"
                                         title="{{ $doc->document_name }}">

                                        {{ $doc->document_name }}

                                    </div>

                                    <div class="document-type">

                                        {{ strtoupper($extension) }} FILE

                                    </div>

                                </div>


                                <!-- ACTION BUTTONS -->
                                <div class="document-actions">

                                    <!-- VIEW -->
                                    <a href="{{ $fileUrl }}"
                                       target="_blank"
                                       class="document-action view-document"
                                       title="View Document">

                                        <i class="fas fa-eye"></i>

                                    </a>


                                    <!-- DOWNLOAD -->
                                    <a href="{{ $fileUrl }}"
                                       download
                                       class="document-action download-document"
                                       title="Download Document">

                                        <i class="fas fa-download"></i>

                                    </a>


                                    <!-- DELETE -->
                                    <button type="button"
                                            class="document-action delete-document"
                                            onclick="deleteDocument({{ $doc->document_id }}, this)"
                                            title="Delete Document">

                                        <i class="fas fa-trash"></i>

                                    </button>

                                </div>

                            </div>

                        @endforeach

                    </div>

                @else

                    <div class="no-documents">

                        <i class="fas fa-folder-open"></i>

                        <p>
                            No documents uploaded yet.
                        </p>

                    </div>

                @endif

            </div>

        </div>


        <!-- DIVIDER -->
        <div class="document-divider"></div>


        <!-- =================================================
             UPLOAD NEW DOCUMENTS
        ================================================== -->

        <div class="document-upload-section">

            <h6 class="document-label">

                <i class="fas fa-cloud-upload-alt"></i>

                Upload New Documents

            </h6>


            <div id="document-upload-section">


                <!-- FIRST DOCUMENT -->
                <div class="document-upload-row">


                    <!-- DOCUMENT NAME -->
                    <div class="document-name-wrapper">

                        <input type="text"
                               name="document_name[]"
                               class="form-control document-input"
                               placeholder="Document Name">

                    </div>


                    <!-- FILE -->
                    <div class="custom-file-wrapper">

                        <label for="document_file_1"
                               class="custom-file-label">

                            <span class="choose-file-text">

                                <i class="fas fa-folder-open"></i>


                            </span>

                        </label>


                        <input type="file"
                               id="document_file_1"
                               name="documents[]"
                               class="document-file-input"
                               accept=".pdf,.doc,.docx,.jpg,.jpeg,.png">


                        <span class="selected-file-name">

                            No file chosen

                        </span>

                    </div>

                </div>

            </div>


            <!-- ADD ANOTHER -->
            <button type="button"
                    class="add-document-btn"
                    onclick="addDocumentUploadRow()">

                <i class="fas fa-plus"></i>

                Add Another Document

            </button>

        </div>

    </div>

</div>         
        </div>
    </form>
</div>

<!-- JavaScript for Document Upload Rows -->
<script>
  function addDocumentUploadRow() {

    const documentSection = document.getElementById('document-upload-section');

    const index = documentSection.querySelectorAll('.document-upload-row').length + 1;

    const newRow = document.createElement('div');

    newRow.className = 'document-upload-row mb-3';

    newRow.innerHTML = `
        
        <div class="document-name-wrapper">

            <input type="text"
                   name="document_name[]"
                   class="form-control document-input"
                   placeholder="Document Name">

        </div>

        <div class="custom-file-wrapper">

            <label for="document_file_${index}"
                   class="custom-file-label">

                <span class="choose-file-text">

                    <i class="fas fa-folder-open"></i>

                    Choose File

                </span>

            </label>

            <input type="file"
                   id="document_file_${index}"
                   name="documents[]"
                   class="document-file-input"
                   accept=".pdf,.doc,.docx,.jpg,.jpeg,.png">

            <span class="selected-file-name">

                No file chosen

            </span>

        </div>

    `;

    documentSection.appendChild(newRow);
}

    function toggleRemarkBox(value) {

    const remarkBox = document.getElementById('remarkBox');
    const approvedAmountBox = document.getElementById('approvedAmountBox');
    const approvedAmountInput = document.getElementById('amountApproved');

    if (['rejected','approved','in process','disbursed','document pending'].includes(value)) {
        remarkBox.style.display = 'block';
    } else {
        remarkBox.style.display = 'none';
    }

    if (['approved','disbursed'].includes(value)) {
        approvedAmountBox.style.display = 'block';
        approvedAmountInput.setAttribute('required','required');
    } else {
        approvedAmountBox.style.display = 'none';
        approvedAmountInput.removeAttribute('required');
    }
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
    const currentStatus = document.getElementById('status').value;
    var status = document.getElementById('status') ? document.getElementById('status').value : '';
    toggleSanctionLetterBox(status);
    toggleRemarkBox(currentStatus);
});

// Listen for changes in the loan status
document.getElementById('status').addEventListener('change', function() {
    toggleSanctionLetterBox(this.value);
});
document.addEventListener('DOMContentLoaded', function(){

    const status = document.getElementById('status').value;

    toggleRemarkBox(status);
    toggleSanctionLetterBox(status);

});

</script>
<script>
$(document).ready(function () {

    $('#editLoanForm').on('submit', function (e) {
        e.preventDefault();

        const status = $('#status').val();
        const newFile = $('#sanction_letter').val();
        const hasExistingFile = "{{ $loan->sanction_letter ? 'yes' : '' }}";

        // Only when disbursed
        if (status === 'disbursed' && !newFile && !hasExistingFile) {
            Swal.fire({
                icon: 'warning',
                title: 'Sanction Letter Required',
                text: 'Please upload sanction letter before disbursing loan'
            });
            return false;
        }

        let formData = new FormData(this);
        let btn = $(this).find('button[type="submit"]');

        btn.prop('disabled', true);

        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,

            success: function (response) {

                Swal.fire({
                    icon: 'success',
                    title: response.msg || 'Loan Updated Successfully',
                    confirmButtonText: 'OK'
                }).then(() => {

                    window.location.href = "{{ route('agent.allAgentLoans') }}";

                });

            },

            error: function (xhr) {

    let msg = 'Something went wrong';

    // Laravel validation errors
    if (xhr.responseJSON?.errors) {

        let errors = xhr.responseJSON.errors;

        msg = Object.values(errors)
            .flat()
            .join('<br>');

    }
    // Controller custom error
    else if (xhr.responseJSON?.msg) {

        msg = xhr.responseJSON.msg;

    }
    // Normal response
    else if (xhr.responseText) {

        console.log(xhr.responseText);
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
$(document).ready(function(){

    let selectedState = $('#state').val();
    let selectedCity = "{{ old('city', $profile->city ?? '') }}";

    function loadCities(state_id, selectedCity = null) {

        if(state_id){
            $.ajax({
                url: '/get-cities/' + state_id,
                type: 'GET',
                success: function(data){

                    $('#city').empty();
                    $('#city').append('<option value="">Select City</option>');

                    $.each(data, function(key, value){

                        let selected = (selectedCity == value.id) ? 'selected' : '';

                        $('#city').append(
                            `<option value="${value.id}" ${selected}>${value.city}</option>`
                        );
                    });

                }
            });
        }
    }

    // 👉 PAGE LOAD (FIX YOUR ISSUE)
    if(selectedState){
        loadCities(selectedState, selectedCity);
    }

    // 👉 ON CHANGE
    $('#state').on('change', function(){
        loadCities($(this).val());
    });

});
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {

    function updateFileName(input) {

        const wrapper = input.closest('.custom-file-wrapper');
        if (!wrapper) return;

        const display = wrapper.querySelector('.selected-file-name');
        if (!display) return;

        if (input.files && input.files.length > 0) {
            display.textContent = input.files[0].name;
            display.classList.add('has-file');
        } else {
            display.textContent = 'No file chosen';
            display.classList.remove('has-file');
        }
    }

    // Delegated listener - works for dynamically added rows too
    document.addEventListener('change', function (e) {
        if (e.target && e.target.classList.contains('document-file-input')) {
            updateFileName(e.target);
        }
    });

    // Initialize any existing file inputs on page load
    document.querySelectorAll('.document-file-input').forEach(function (input) {
        updateFileName(input);
    });

});
</script>
@endsection
