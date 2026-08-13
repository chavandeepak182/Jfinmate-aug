@extends('layouts.header')

@section('content')

<div class="container py-4">

    <div class="card shadow border-0">

        <div class="card-header bg-primary text-white">

            <h4 class="mb-0">
                Edit Lead
            </h4>

        </div>

        <div class="card-body">

            {{-- Validation Errors --}}
            @if($errors->any())

                <div class="alert alert-danger">

                    <ul class="mb-0">

                        @foreach($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                </div>

            @endif


            <form
                action="{{ route('referraldsa.update', $lead->id) }}"
                method="POST"
                enctype="multipart/form-data"
            >

                @csrf


                <div class="row">


                    {{-- APPLICANT NAME --}}
                    <div class="col-md-6 mb-3">

                        <label class="form-label">
                            Applicant Name
                            <span class="text-danger">*</span>
                        </label>

                        <input
                            type="text"
                            name="customer_name"
                            value="{{ old('customer_name', $lead->customer_name) }}"
                            class="form-control"
                            required
                        >

                    </div>


                    {{-- MOBILE --}}
                    <div class="col-md-6 mb-3">

                        <label class="form-label">
                            Mobile Number
                            <span class="text-danger">*</span>
                        </label>

                        <input
                            type="text"
                            name="mobile_no"
                            maxlength="10"
                            value="{{ old('mobile_no', $lead->mobile_no) }}"
                            class="form-control"
                            required
                        >

                    </div>


                    {{-- EMAIL --}}
                    <div class="col-md-6 mb-3">

                        <label class="form-label">
                            Email ID
                            <span class="text-danger">*</span>
                        </label>

                        <input
                            type="email"
                            name="email"
                            value="{{ old('email', $lead->email) }}"
                            class="form-control"
                            required
                        >

                    </div>


                    {{-- GENDER --}}
                    <div class="col-md-6 mb-3">

                        <label class="form-label">
                            Gender
                            <span class="text-danger">*</span>
                        </label>

                        <select
                            name="gender"
                            class="form-select"
                            required
                        >

                            <option value="">
                                Select Gender
                            </option>

                            <option
                                value="Male"
                                {{ old('gender', $lead->gender) == 'Male' ? 'selected' : '' }}
                            >
                                Male
                            </option>

                            <option
                                value="Female"
                                {{ old('gender', $lead->gender) == 'Female' ? 'selected' : '' }}
                            >
                                Female
                            </option>

                            <option
                                value="Other"
                                {{ old('gender', $lead->gender) == 'Other' ? 'selected' : '' }}
                            >
                                Other
                            </option>

                        </select>

                    </div>


                    {{-- ADDRESS --}}
                    <div class="col-md-12 mb-3">

                        <label class="form-label">
                            Address
                            <span class="text-danger">*</span>
                        </label>

                        <textarea
                            name="address"
                            rows="3"
                            class="form-control"
                            required
                        >{{ old('address', $lead->address) }}</textarea>

                    </div>


                    {{-- PIN CODE --}}
                    <div class="col-md-6 mb-3">

                        <label class="form-label">
                            Pin Code
                            <span class="text-danger">*</span>
                        </label>

                        <input
                            type="text"
                            name="pin_code"
                            maxlength="6"
                            value="{{ old('pin_code', $lead->pin_code) }}"
                            class="form-control"
                            required
                        >

                    </div>


                    {{-- LOAN CATEGORY --}}
                    <div class="col-md-6 mb-3">

                        <label class="form-label">
                            Loan Category
                            <span class="text-danger">*</span>
                        </label>

                        <select
                            name="loan_category_id"
                            class="form-select"
                            required
                        >

                            <option value="">
                                Select Loan Category
                            </option>

                            @foreach($loanCategories as $category)

                                <option
                                    value="{{ $category->loan_category_id }}"
                                    {{ old('loan_category_id', $lead->loan_type) == $category->loan_category_id ? 'selected' : '' }}
                                >
                                    {{ $category->category_name }}
                                </option>

                            @endforeach

                        </select>

                    </div>


                    {{-- LOAN AMOUNT --}}
                    <div class="col-md-6 mb-3">

                        <label class="form-label">
                            Loan Amount
                            <span class="text-danger">*</span>
                        </label>

                        <input
                            type="number"
                            name="loan_amount"
                            min="0"
                            step="0.01"
                            value="{{ old('loan_amount', $lead->loan_amount) }}"
                            class="form-control"
                            required
                        >

                    </div>


                    {{-- MONTHLY INCOME --}}
                    <div class="col-md-6 mb-3">

                        <label class="form-label">
                            Monthly Income
                        </label>

                        <input
                            type="number"
                            name="monthly_income"
                            min="0"
                            step="0.01"
                            value="{{ old('monthly_income', $lead->monthly_income) }}"
                            class="form-control"
                        >

                    </div>


                    {{-- REMARKS --}}
                    <div class="col-md-12 mb-3">

                        <label class="form-label">
                            Remarks / Notes
                        </label>

                        <textarea
                            name="remarks"
                            rows="3"
                            class="form-control"
                        >{{ old('remarks', $lead->remarks) }}</textarea>

                    </div>


                    {{-- DOCUMENTS --}}
                    <div class="col-md-12 mb-4">

                        <label class="form-label">
                            Upload Documents
                        </label>

                        <input
                            type="file"
                            name="documents[]"
                            multiple
                            class="form-control"
                        >

                        <small class="text-muted">
                            Upload ID Proof, Income Proof, PDF, JPG or PNG
                        </small>

                    </div>


                    {{-- BUTTONS --}}
                    <div class="col-md-12">

                        <button
                            type="submit"
                            class="btn btn-success px-4"
                        >

                            <i class="fas fa-save"></i>
                            Update Lead

                        </button>


                        <a
                            href="{{ route('referraldsa.list') }}"
                            class="btn btn-secondary"
                        >

                            <i class="fas fa-arrow-left"></i>
                            Back

                        </a>

                    </div>


                </div>

            </form>

        </div>

    </div>

</div>

@endsection