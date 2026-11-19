@extends('layouts.header')

@section('content')

<style>
    /* Custom styles to match the provided design */
    .loan-app-container {
        background-color: #f8f9fa; /* Light grey background */
        min-height: 100vh;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    
    .loan-card {
        background: #ffffff;
        border-radius: 12px;
        border: 1px solid #eaeaea;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
        max-width: 750px;
    }

    .loan-header {
        text-align: center;
        position: relative;
        margin-bottom: 2rem;
    }

    .back-arrow {
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        color: #6c757d;
        text-decoration: none;
        font-size: 1.2rem;
    }

    .loan-header h3 {
        font-weight: 600;
        color: #212529;
        margin-bottom: 0.5rem;
        font-size: 1.5rem;
    }

    .loan-header p {
        color: #6c757d;
        font-size: 0.9rem;
        margin-bottom: 0;
    }

    .employment-badge {
        background-color: #f0f7ff;
        border: 1px solid #d0e7ff;
        color: #0d6efd;
        padding: 12px 16px;
        border-radius: 8px;
        font-weight: 500;
        margin-bottom: 1.5rem;
        font-size: 0.95rem;
    }

    .form-label {
        font-weight: 600;
        color: #495057;
        font-size: 0.9rem;
        margin-bottom: 0.5rem;
    }

    .form-label .required {
        color: #dc3545;
    }

        /* Adjusted for form-control and form-select */
    .form-control, .form-select {
        border: 1px solid #dee2e6;
        border-radius: 8px;
        padding: 0.75rem 1rem;
        font-size: 0.95rem;
        color: #495057;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        height: auto; /* Ensures height adjusts to padding */
        line-height: 1.5; /* Standardizes line height */
    }

    /* Specific fix for the select dropdown to ensure text and arrow align */
    .form-select {
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
        padding-left: 1rem;
        /* Keep space on the right for the dropdown arrow */
        padding-right: 2.5rem; 
        background-position: right 1rem center;
    }

    .form-control::placeholder {
        color: #adb5bd;
    }

    .form-control:focus, .form-select:focus {
        border-color: #86b7fe;
        box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.15);
    }

    .form-control[readonly] {
        background-color: #f8f9fa;
        opacity: 1;
        cursor: default;
    }

    .btn-apply {
        background-color: #0d6efd;
        color: white;
        font-weight: 600;
        padding: 0.8rem;
        border-radius: 8px;
        border: none;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 8px;
        transition: background-color 0.2s;
        box-shadow: 0 4px 6px rgba(13, 110, 253, 0.2);
    }

    .btn-apply:hover {
        background-color: #0b5ed7;
        color: white;
    }
</style>

<div class="loan-app-container py-5">
    <div class="container">
        <div class="loan-card mx-auto p-4 p-md-5">
            
            <!-- Header -->
            <div class="loan-header">
                <a href="{{ route('admin.employment-applications') }}" class="back-arrow">
                    &larr;
                </a>
                <h3>Edit Application</h3>
                <p>Review and update the application details below.</p>
            </div>

            <form action="{{ route('admin.employment-applications.update', $application->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Employment Category Badge -->
                <div class="employment-badge">
                    Employment Category - {{ $application->employment_type == 'salaried' ? 'Salaried Employee' : 'Self Employed' }}
                </div>

                <!-- Full Name -->
                <div class="mb-3">
                    <label class="form-label">Full Name <span class="required">*</span></label>
                    <input type="text" 
                           class="form-control" 
                           value="{{ $application->name }}" 
                           readonly>
                </div>

                <!-- Mobile Number -->
                <div class="mb-3">
                    <label class="form-label">Mobile Number <span class="required">*</span></label>
                    <input type="text" 
                           class="form-control" 
                           value="{{ $application->mobile_number }}" 
                           readonly>
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label class="form-label">Email Id (Optional)</label>
                    <input type="text" 
                           class="form-control" 
                           value="{{ $application->email ?? '-' }}" 
                           readonly>
                </div>

                <!-- Message (readonly) -->
                <div class="mb-4">
                    <label class="form-label">Applicant Message (Optional)</label>
                    <textarea class="form-control" 
                              rows="3" 
                              readonly>{{ $application->message }}</textarea>
                </div>

                <hr class="my-4 text-muted">

                <!-- Status (Editable) -->
                <div class="mb-4">
                    <label class="form-label">Update Status <span class="required">*</span></label>
                    <select name="status" class="form-select" required>
                        <option value="Pending" {{ old('status', $application->status) == 'Pending' ? 'selected' : '' }}>
                            Pending
                        </option>
                        <option value="Contacted" {{ old('status', $application->status) == 'Contacted' ? 'selected' : '' }}>
                            Contacted
                        </option>
                    </select>
                </div>

                <!-- Admin Remark (Editable) -->
                <div class="mb-4">
                    <label class="form-label">Remark</label>
                    <textarea name="remark" 
                              class="form-control" 
                              rows="4" 
                              maxlength="5000" 
                              placeholder="Enter your remark here...">{{ old('remark', $application->remark) }}</textarea>
                </div>

                <!-- Submit Button -->
                <div class="mt-5">
                    <button type="submit" class="btn-apply">
                        Update Application &rarr;
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>

@endsection