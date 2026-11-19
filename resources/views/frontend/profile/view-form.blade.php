 @extends('frontend.layouts.customer-dash')

@section('title', 'View Loan Application')

@section('content')

<div class="container-fluid p-0">

    {{-- HEADER --}}
    <div class="card-header py-3">
        <div class="d-flex justify-content-between align-items-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb m-0 bg-transparent">
                    <li class="breadcrumb-item">
                        <a href="{{ route('loan.profile') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('loans.loans-list') }}">All Loans</a>
                    </li>
                    <li class="breadcrumb-item active">View Loan Form</li>
                </ol>
            </nav>

            <a href="{{ route('loans.loans-list') }}" class="btn btn-secondary">
                <i class="bi bi-arrow-left-square me-2"></i> Back
            </a>
        </div>
    </div>

    <div class="bg-white p-4">
        <div class="row justify-content-between">

            {{-- LEFT SIDE --}}
            <div class="col-md-7 p-md-4">

                {{-- PERSONAL INFORMATION --}}
                <div class="section mb-4">
                    <h3 class="h4 mb-3"><strong>Personal Information</strong></h3>

                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <label>Name:</label>
                            <input type="text" class="form-control"
                                value="{{ $applyingUser->name ?? '-' }}" readonly>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Loan ID:</label>
                            <input type="text" class="form-control"
                                value="{{ $loan->loan_reference_id ?? '-' }}" readonly>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label>Mobile No:</label>
                            <input type="text" class="form-control"
                                value="{{ $profile->mobile_no ?? '-' }}" readonly>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label>Marital Status:</label>
                            <input type="text" class="form-control"
                                value="{{ ucfirst($profile->marital_status ?? '-') }}" readonly>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label>Gender:</label>
                            <input type="text" class="form-control"
                                value="{{ ucfirst($profile->gender ?? '-') }}" readonly>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label>Date of Birth:</label>
                            <input type="text" class="form-control"
                                value="{{ $profile->dob ?? '-' }}" readonly>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Residence Address:</label>
                            <textarea class="form-control" rows="2" readonly>{{ $profile->residence_address ?? '-' }}</textarea>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label>City:</label>
                            <input type="text" class="form-control"
                                value="{{ $profile->city_name ?? '-' }}" readonly>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label>State:</label>
                            <input type="text" class="form-control"
                                value="{{ $profile->state_name ?? '-' }}" readonly>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label>Pincode:</label>
                            <input type="text" class="form-control"
                                value="{{ $profile->pincode ?? '-' }}" readonly>
                        </div>

                    </div>
                </div>

                <hr>

                {{-- PROFESSIONAL INFORMATION --}}
                <div class="section mb-4">
                    <h3 class="h4 mb-3"><strong>Professional Information</strong></h3>

                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <label>Company Name:</label>
                            <input type="text" class="form-control"
                                value="{{ $professional->company_name ?? '-' }}" readonly>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Industry:</label>
                            <input type="text" class="form-control"
                                value="{{ $professional->industry ?? '-' }}" readonly>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Company Address:</label>
                            <textarea class="form-control" rows="2" readonly>{{ $professional->company_address ?? '-' }}</textarea>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label>Experience Year:</label>
                            <input type="text" class="form-control"
                                value="{{ $professional->experience_year ?? '-' }}" readonly>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label>Designation:</label>
                            <input type="text" class="form-control"
                                value="{{ $professional->designation ?? '-' }}" readonly>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label>Net Salary:</label>
                            <input type="text" class="form-control"
                                value="{{ $professional->netsalary ?? '-' }}" readonly>
                        </div>

                    </div>
                </div>

                <hr>

                {{-- LOAN INFORMATION --}}
                <div class="section mb-4">
                    <h3 class="h4 mb-3"><strong>Loan Information</strong></h3>

                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <label>Loan Status:</label>
                            <input type="text" class="form-control"
                                value="{{ ucfirst($loan->status ?? '-') }}" readonly>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Loan Category:</label>
                            <input type="text" class="form-control"
                                value="{{ $loan->category_name ?? '-' }}" readonly>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label>Amount:</label>
                            <input type="text" class="form-control"
                                value="{{ isset($loan->amount) ? '₹ '.number_format($loan->amount, 2) : '-' }}"
                                readonly>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label>Tenure:</label>
                            <input type="text" class="form-control"
                                value="{{ $loan->tenure ?? '-' }}" readonly>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label>Tentative Approval:</label>
                            <input type="text" class="form-control"
                                value="{{ $loan->in_principle ?? '-' }}" readonly>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Approved Amount:</label>
                            <input type="text" class="form-control"
                                value="{{ $loan->amount_approved !== null ? '₹ '.number_format($loan->amount_approved, 2) : '-' }}"
                                readonly>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Created At:</label>
                            <input type="text" class="form-control"
                                value="{{ $loan->created_at ? \Carbon\Carbon::parse($loan->created_at)->format('d-m-Y') : '-' }}"
                                readonly>
                        </div>

                        @if(!empty($loan->remarks))
                            <div class="col-md-12 mb-3">
                                <label>Remarks:</label>
                                <textarea class="form-control" rows="3" readonly>{{ $loan->remarks }}</textarea>
                            </div>
                        @endif

                        @if(!empty($loan->sanction_letter))
                            <div class="col-md-12 mb-3">
                                <label>Sanction Letter:</label><br>
                                <a href="{{ asset('storage/sanction_letters/' . $loan->sanction_letter) }}"
                                   target="_blank"
                                   rel="noopener noreferrer"
                                   class="btn btn-sm btn-primary">
                                    <i class="bi bi-file-earmark-pdf"></i>
                                    View Sanction Letter
                                </a>
                            </div>
                        @endif

                    </div>
                </div>

            </div>

            {{-- RIGHT SIDE: DOCUMENTS --}}
            <div class="col-md-4 bg-light p-4">

                <div class="section mb-4">
                    <h3 class="h4 mb-3">
                        <strong style="color:#000">Documents</strong>
                    </h3>

                    <h6 style="color:#000">Uploaded Documents:</h6>

                    @forelse($documents as $doc)
                        <div class="card mb-3 border-0 shadow-sm">
                            <div class="card-body">

                                <div class="mb-2">
                                    <strong>{{ $doc->document_name ?? 'Document' }}</strong>
                                </div>

                                @if(!empty($doc->file_path))
                                    <a href="{{ \Illuminate\Support\Facades\Storage::url($doc->file_path) }}"
                                       target="_blank"
                                       rel="noopener noreferrer"
                                       class="btn btn-sm btn-primary">
                                        <i class="bi bi-eye"></i> View Document
                                    </a>
                                @else
                                    <span class="text-muted">File not available</span>
                                @endif

                            </div>
                        </div>
                    @empty
                        <p class="text-muted">No documents uploaded.</p>
                    @endforelse

                </div>

            </div>

        </div>

        {{-- BOTTOM BACK BUTTON --}}
        <div class="text-end mt-3">
            <a href="{{ route('loans.loans-list') }}" class="btn btn-secondary px-4">
                Back to Loan List
            </a>
        </div>

    </div>

</div>

@endsection