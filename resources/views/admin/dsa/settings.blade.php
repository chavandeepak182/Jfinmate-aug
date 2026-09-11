@extends('layouts.header')

@section('content')

<style>
.card-box {
    background: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.08);
    margin-bottom: 20px;
}

.section-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 15px;
}

.section-title {
    font-size: 18px;
    font-weight: 600;
}

.doc-card {
    background: #f8f9fb;
    padding: 12px;
    border-radius: 8px;
    margin-top: 10px;
}

.doc-name {
    font-weight: bold;
    font-size: 15px;
    color: #333;
}

.bank-box {
    background: #f8f9fb;
    padding: 15px;
    border-radius: 8px;
}

.bank-box p {
    margin: 3px 0;
}

.btn-add {
    background: #007bff;
    color: #fff;
    padding: 6px 15px;
    border-radius: 6px;
    border: none;
    cursor: pointer;
}

.btn-add:hover {
    background: #0069d9;
    color: #fff;
}

.btn-add.w-100 {
    width: 100%;
}

.btn-danger {
    background: #dc3545;
    color: #fff;
    padding: 6px 15px;
    border-radius: 6px;
    border: none;
    cursor: pointer;
}

.btn-danger:hover {
    background: #c82333;
    color: #fff;
}

.modal-bg {
    position: fixed;
    top:0; left:0;
    width:100%; height:100%;
    background: rgba(0,0,0,0.5);
    display:none;
    justify-content:center;
    align-items:center;
    z-index: 9999;
}

.modal-box {
    background:#fff;
    padding:25px;
    border-radius:10px;
    width:650px;
    max-width: 95%;
    max-height: 90vh;
    overflow-y: auto;
}

.modal-box h5 {
    margin-bottom: 15px;
    color: #000;
}

.form-row {
    display: flex;
    gap: 10px;
    margin-bottom: 10px;
}

.form-row .form-group {
    flex: 1;
}

.form-row input {
    width: 100%;
    padding: 8px 12px;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 14px;
}

.form-row input:focus {
    border-color: #007bff;
    outline: none;
    box-shadow: 0 0 0 0.2rem rgba(0,123,255,0.25);
}

.form-row input.is-invalid {
    border-color: #dc3545;
}

.form-row input.is-valid {
    border-color: #28a745;
}

.field-error {
    color: #dc3545;
    font-size: 12px;
    margin-top: 3px;
    display: block;
}

.alert-success {
    background: #d4edda;
    color: #155724;
    padding: 12px 15px;
    border-radius: 6px;
    border: 1px solid #c3e6cb;
    margin-bottom: 15px;
}

.alert-danger {
    background: #f8d7da;
    color: #721c24;
    padding: 12px 15px;
    border-radius: 6px;
    border: 1px solid #f5c6cb;
    margin-bottom: 15px;
}

.form-actions {
    display: flex;
    gap: 10px;
    margin-top: 15px;
}

.form-actions button {
    flex: 1;
}

@media (max-width: 768px) {
    .form-row {
        flex-direction: column;
    }
    
    .modal-box {
        width: 95%;
        padding: 15px;
    }
}
</style>

<div class="container mt-4">

    <!-- Display success/error messages -->
    @if(session('success'))
        <div class="alert-success">{{ session('success') }}</div>
    @endif
    
    @if(session('error'))
        <div class="alert-danger">{{ session('error') }}</div>
    @endif

    <!-- ======================== -->
    <!-- 📄 DOCUMENTS SECTION    -->
    <!-- ======================== -->
    <div class="card-box">
        <div class="section-title">Documents</div>

        <form method="POST" action="{{ route('dsa.documents.upload') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-row">
                <div class="form-group">
                    <input type="text" name="doc_name" placeholder="Document name" 
                           value="{{ old('doc_name') }}" 
                           class="{{ $errors->has('doc_name') ? 'is-invalid' : '' }}">
                    @error('doc_name')
                        <span class="field-error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="file" name="file" 
                           class="{{ $errors->has('file') ? 'is-invalid' : '' }}">
                    @error('file')
                        <span class="field-error">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <button class="btn-add mt-2">Upload</button>
        </form>

        @if($documents->count() > 0)
            @foreach($documents as $doc)
                <div class="doc-card">
                    <div class="doc-name">{{ $doc->name }}</div>
                    @if($doc->file)
                        <small>
                            <a href="{{ asset('storage/'.$doc->file) }}" target="_blank">Preview</a> |
                            <a href="{{ asset('storage/'.$doc->file) }}" download>Download</a>
                        </small>
                    @endif
                </div>
            @endforeach
        @else
            <p>No documents uploaded</p>
        @endif
    </div>

    <!-- ======================== -->
    <!-- 🏦 BANK DETAILS SECTION -->
    <!-- ======================== -->
    <div class="card-box">

        <div class="section-header">
            <div class="section-title">Bank Details</div>
            <button class="btn-add" onclick="openModal()">+ Add</button>
        </div>

        @if($bank)
            <div class="bank-box">
                <p><b>Bank:</b> {{ $bank->bank_name }}</p>
                <p><b>Account No:</b> {{ $bank->account_number }}</p>
                <p><b>IFSC:</b> {{ $bank->ifsc_code }}</p>
                <p><b>Branch:</b> {{ $bank->branch_name ?? '-' }}</p>
                <p><b>Holder:</b> {{ $bank->account_holder_name }}</p>
                <p><b>UPI ID:</b> {{ $bank->upi_id ?? '-' }}</p>

                <button class="btn-add mt-2" onclick="openModal()">Edit</button>
            </div>
        @else
            <p>No bank details added</p>
        @endif

    </div>
</div>

<!-- ======================== -->
<!-- 🔥 BANK DETAILS MODAL    -->
<!-- ======================== -->
<div class="modal-bg" id="bankModal">
    <div class="modal-box">

        <h5 style="color: #000;">Add Bank Details</h5>

        @if($errors->any())
            <div class="alert-danger" style="margin-bottom: 15px;">
                <ul style="margin: 0; padding-left: 20px;">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('dsa.settings.save') }}" id="bankForm">
            @csrf

            <div class="form-row">
                <div class="form-group">
                    <input type="text" name="bank_name" 
                           value="{{ old('bank_name', $bank->bank_name ?? '') }}" 
                           placeholder="Bank Name"
                           class="{{ $errors->has('bank_name') ? 'is-invalid' : '' }}">
                    @error('bank_name')
                        <span class="field-error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="text" name="account_number" 
                           value="{{ old('account_number', $bank->account_number ?? '') }}" 
                           placeholder="Account Number"
                           class="{{ $errors->has('account_number') ? 'is-invalid' : '' }}">
                    @error('account_number')
                        <span class="field-error">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <input type="text" name="ifsc_code" 
                           value="{{ old('ifsc_code', $bank->ifsc_code ?? '') }}" 
                           placeholder="IFSC Code"
                           class="{{ $errors->has('ifsc_code') ? 'is-invalid' : '' }}">
                    @error('ifsc_code')
                        <span class="field-error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="text" name="branch_name" 
                           value="{{ old('branch_name', $bank->branch_name ?? '') }}" 
                           placeholder="Branch Name"
                           class="{{ $errors->has('branch_name') ? 'is-invalid' : '' }}">
                    @error('branch_name')
                        <span class="field-error">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <input type="text" name="account_holder_name" 
                           value="{{ old('account_holder_name', $bank->account_holder_name ?? '') }}" 
                           placeholder="Account Holder"
                           class="{{ $errors->has('account_holder_name') ? 'is-invalid' : '' }}">
                    @error('account_holder_name')
                        <span class="field-error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="text" name="upi_id" 
                           value="{{ old('upi_id', $bank->upi_id ?? '') }}" 
                           placeholder="UPI ID (e.g., example@paytm)"
                           class="{{ $errors->has('upi_id') ? 'is-invalid' : '' }}">
                    @error('upi_id')
                        <span class="field-error">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn-add w-100">Save Bank Details</button>
                <button type="button" class="btn-danger w-100" onclick="closeModal()">Cancel</button>
            </div>

        </form>
    </div>
</div>

<script>
function openModal(){
    document.getElementById('bankModal').style.display = 'flex';
    document.body.style.overflow = 'hidden';
}

function closeModal(){
    document.getElementById('bankModal').style.display = 'none';
    document.body.style.overflow = 'auto';
}

document.getElementById('bankModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeModal();
    }
});

document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeModal();
    }
});

// Real-time validation for IFSC Code
document.querySelector('input[name="ifsc_code"]')?.addEventListener('input', function() {
    this.value = this.value.toUpperCase();
    const ifscRegex = /^[A-Z]{4}0[A-Z0-9]{6}$/;
    if (this.value.length > 0 && !ifscRegex.test(this.value)) {
        this.classList.add('is-invalid');
        this.classList.remove('is-valid');
        showFieldError(this, 'Please enter a valid IFSC Code (e.g., SBIN0001234)');
    } else if (this.value.length > 0) {
        this.classList.remove('is-invalid');
        this.classList.add('is-valid');
        removeFieldError(this);
    } else {
        this.classList.remove('is-invalid', 'is-valid');
        removeFieldError(this);
    }
});

// Account Number Validation
document.querySelector('input[name="account_number"]')?.addEventListener('input', function() {
    this.value = this.value.replace(/\D/g, '');
    if (this.value.length > 0 && (this.value.length < 9 || this.value.length > 18)) {
        this.classList.add('is-invalid');
        this.classList.remove('is-valid');
        showFieldError(this, 'Account Number must be between 9 to 18 digits');
    } else if (this.value.length > 0) {
        this.classList.remove('is-invalid');
        this.classList.add('is-valid');
        removeFieldError(this);
    } else {
        this.classList.remove('is-invalid', 'is-valid');
        removeFieldError(this);
    }
});

// UPI ID Validation
document.querySelector('input[name="upi_id"]')?.addEventListener('input', function() {
    const upiRegex = /^[a-zA-Z0-9.\-_]+@[a-zA-Z0-9.\-_]+$/;
    if (this.value.length > 0 && !upiRegex.test(this.value)) {
        this.classList.add('is-invalid');
        this.classList.remove('is-valid');
        showFieldError(this, 'Please enter a valid UPI ID (e.g., example@paytm)');
    } else if (this.value.length > 0) {
        this.classList.remove('is-invalid');
        this.classList.add('is-valid');
        removeFieldError(this);
    } else {
        this.classList.remove('is-invalid', 'is-valid');
        removeFieldError(this);
    }
});

function showFieldError(input, message) {
    removeFieldError(input);
    const error = document.createElement('span');
    error.className = 'field-error';
    error.textContent = message;
    input.parentNode.appendChild(error);
}

function removeFieldError(input) {
    const parent = input.parentNode;
    const existingError = parent.querySelector('.field-error');
    if (existingError) {
        existingError.remove();
    }
}

@if($errors->any())
window.onload = function () {
    openModal();
}
@endif
</script>

@if($errors->any())
<script>
window.onload = function () {
    openModal();
}
</script>
@endif

@endsection