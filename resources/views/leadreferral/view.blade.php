@extends('layouts.header')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <h3 class="fw-bold" style="color:#000;">
        Lead Details
    </h3>

    <div>

        <a href="{{ route('referraldsa.list') }}"
           class="btn btn-secondary">

            <i class="fas fa-arrow-left"></i>
            Back

        </a>

        <a href="{{ route('referraldsa.edit', $lead->id) }}"
           class="btn btn-warning">

            <i class="fas fa-edit"></i>
            Edit

        </a>

    </div>

</div>


<div class="card shadow border-0">

    <div class="card-header bg-dark text-white">

        <h5 class="mb-0">
            Applicant Details
        </h5>

    </div>


    <div class="card-body">

        <div class="row g-3">


            {{-- CUSTOMER NAME --}}
            <div class="col-md-6">

                <label class="fw-bold">
                    Applicant Name
                </label>

                <div class="form-control bg-light">
                    {{ $lead->customer_name ?? '-' }}
                </div>

            </div>


            {{-- MOBILE --}}
            <div class="col-md-6">

                <label class="fw-bold">
                    Mobile Number
                </label>

                <div class="form-control bg-light">
                    {{ $lead->mobile_no ?? '-' }}
                </div>

            </div>


            {{-- EMAIL --}}
            <div class="col-md-6">

                <label class="fw-bold">
                    Email
                </label>

                <div class="form-control bg-light">
                    {{ $lead->email ?? '-' }}
                </div>

            </div>


            {{-- GENDER --}}
            <div class="col-md-6">

                <label class="fw-bold">
                    Gender
                </label>

                <div class="form-control bg-light">
                    {{ $lead->gender ?? '-' }}
                </div>

            </div>


            {{-- ADDRESS --}}
            <div class="col-md-12">

                <label class="fw-bold">
                    Address
                </label>

                <div class="form-control bg-light"
                     style="height:auto; min-height:60px;">

                    {{ $lead->address ?? '-' }}

                </div>

            </div>


            {{-- PIN CODE --}}
            <div class="col-md-6">

                <label class="fw-bold">
                    PIN Code
                </label>

                <div class="form-control bg-light">
                    {{ $lead->pin_code ?? '-' }}
                </div>

            </div>


            {{-- LOAN CATEGORY --}}
            <div class="col-md-6">

                <label class="fw-bold">
                    Loan Category
                </label>

                <div class="form-control bg-light">
                    {{ $lead->category_name ?? '-' }}
                </div>

            </div>


            {{-- LOAN AMOUNT --}}
            <div class="col-md-6">

                <label class="fw-bold">
                    Loan Amount
                </label>

                <div class="form-control bg-light">

                    ₹ {{ number_format($lead->loan_amount ?? 0) }}

                </div>

            </div>


            {{-- APPROVED LOAN AMOUNT --}}
            <div class="col-md-6">

                <label class="fw-bold">
                    Approved Loan Amount
                </label>

                <div class="form-control bg-light">

                    @if($lead->approved_loan_amount !== null)

                        ₹ {{ number_format($lead->approved_loan_amount) }}

                    @else

                        -

                    @endif

                </div>

            </div>


            {{-- MONTHLY INCOME --}}
            <div class="col-md-6">

                <label class="fw-bold">
                    Monthly Income
                </label>

                <div class="form-control bg-light">

                    @if($lead->monthly_income !== null)

                        ₹ {{ number_format($lead->monthly_income) }}

                    @else

                        -

                    @endif

                </div>

            </div>


            {{-- STATUS --}}
            <div class="col-md-6">

                <label class="fw-bold">
                    Status
                </label>

                <div class="mt-2">

                    @if($lead->status == 'New')

                        <span class="badge bg-primary fs-6">
                            New
                        </span>

                    @elseif($lead->status == 'In Progress')

                        <span class="badge bg-warning text-dark fs-6">
                            In Progress
                        </span>

                    @elseif($lead->status == 'Approved')

                        <span class="badge bg-success fs-6">
                            Approved
                        </span>

                    @elseif($lead->status == 'Rejected')

                        <span class="badge bg-danger fs-6">
                            Rejected
                        </span>

                    @elseif($lead->status == 'Closed')

                        <span class="badge bg-dark fs-6">
                            Closed
                        </span>

                    @else

                        <span class="badge bg-secondary fs-6">
                            {{ $lead->status ?? '-' }}
                        </span>

                    @endif

                </div>

            </div>


            {{-- REMARKS --}}
            <div class="col-md-12">

                <label class="fw-bold">
                    Remarks
                </label>

                <div class="form-control bg-light"
                     style="height:auto; min-height:70px;">

                    {{ $lead->remarks ?? '-' }}

                </div>

            </div>


            {{-- CREATED DATE --}}
            <div class="col-md-6">

                <label class="fw-bold">
                    Created Date
                </label>

                <div class="form-control bg-light">

                    {{ $lead->created_at
                        ? \Carbon\Carbon::parse($lead->created_at)->format('d M Y H:i')
                        : '-' }}

                </div>

            </div>


            {{-- UPDATED DATE --}}
            <div class="col-md-6">

                <label class="fw-bold">
                    Last Updated
                </label>

                <div class="form-control bg-light">

                    {{ $lead->updated_at
                        ? \Carbon\Carbon::parse($lead->updated_at)->format('d M Y H:i')
                        : '-' }}

                </div>

            </div>

        </div>

    </div>

</div>

@endsection