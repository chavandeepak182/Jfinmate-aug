@extends('layouts.header')

@section('title','Loan EMI Eligibility Calculator')

@section('content')

<div class="container-fluid py-4">

    <div class="row">
        <div class="col-md-12">

            <h1 class="text-center fw-bold mb-4" style="color:#000">
                Loan EMI Eligibility Calculator
            </h1>

        </div>
    </div>

    {{-- ================= CALCULATOR SECTION ================= --}}
    <div id="calculatorSection">
        <form action="{{ route('calculator.calculate') }}" method="POST" id="eligibilityForm">

            @csrf

            {{-- Top Tabs --}}

           {{-- ================= TOP TABS ================= --}}
<div class="card mb-4">
    <div class="card-body p-2">
        <div class="row">

            <div class="col-md-6">
                <button
                    type="button"
                    id="calculatorTabBtn"
                    class="btn btn-primary w-100"
                    onclick="showCalculator()">
                    <i class="fas fa-calculator me-2"></i>
                    Calculator
                </button>
            </div>

            <div class="col-md-6">
                <button
                    type="button"
                    id="libraryTabBtn"
                    class="btn btn-light border w-100"
                    onclick="showLibrary()">
                    <i class="fas fa-book me-2"></i>
                    Library
                </button>
            </div>

        </div>
    </div>
</div>


{{-- ================= CALCULATOR SECTION ================= --}}
<div id="calculatorSection">

    <form action="{{ route('calculator.calculate') }}"
          method="POST"
          id="eligibilityForm">

        @csrf

        {{-- REMOVE THE OLD TOP TABS FROM HERE --}}

        {{-- Personal Details --}}
        


            {{-- Personal Details --}}

            <div class="card shadow-sm mb-4">

                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center mb-4">

                        <h3 class="mb-0">
                            Personal Details
                        </h3>

                        <div>

                            <button
                                class="btn btn-primary"
                                type="button"
                                onclick="exportPDF()">

                                Export PDF

                            </button>

                            <button
                                class="btn btn-primary"
                                type="button"
                                onclick="shareWhatsApp()">

                                WhatsApp

                            </button>

                            <button
                                class="btn btn-primary"
                                type="button"
                                onclick="shareEmail()">

                                Email

                            </button>

                        </div>

                    </div>


                    <div class="row">

                        <div class="col-md-6">

                            <label>
                                Full Name
                                <span class="text-danger">*</span>
                            </label>

                            <input
                                type="text"
                                class="form-control"
                                name="full_name"
                                id="fullName"
                                placeholder="Enter your full name"
                                required
                                pattern="[A-Za-z\s]+"
                                title="Name should contain only letters and spaces">

                        </div>

                        <div class="col-md-6">

                            <label>
                                Phone Number
                                <span class="text-danger">*</span>
                            </label>

                            <input
                                type="text"
                                class="form-control"
                                name="phone"
                                id="phone"
                                placeholder="Enter your phone number"
                                required
                                pattern="[0-9]{10}"
                                maxlength="10"
                                title="Phone number must be exactly 10 digits">

                        </div>

                    </div>


                    <div class="row mt-3">

                        <div class="col-md-6">

                            <label>
                                Email Address
                                <span class="text-danger">*</span>
                            </label>

                            <input
                                type="email"
                                class="form-control"
                                name="email"
                                id="email"
                                placeholder="Enter your email"
                                required>

                        </div>

                        <div class="col-md-6">

                            <label>
                                Date Of Birth
                                <span class="text-danger">*</span>
                            </label>

                            <input
                                type="date"
                                class="form-control"
                                name="dob"
                                id="dob"
                                required>

                        </div>

                    </div>

                </div>

            </div>


            {{-- Applicant Type --}}

            <div class="card shadow-sm mb-4">

                <div class="card-body">

                    <label class="fw-bold">

                        Applicant Type

                        <span class="text-danger">*</span>

                    </label>

                    <br><br>

                    <input
                        type="radio"
                        name="applicant_type"
                        value="Salaried"
                        checked
                        id="salariedRadio"
                        onchange="toggleApplicantType()">

                    Salaried

                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <input
                        type="radio"
                        name="applicant_type"
                        value="Business"
                        id="businessRadio"
                        onchange="toggleApplicantType()">

                    Business

                </div>

            </div>



           {{-- Salaried Section --}}

    <div id="salaryDiv">

    <div class="card shadow-sm mb-4">

    <div class="card-header bg-white">

    <h4 class="mb-0">

    Income Details

    </h4>

    </div>

    <div class="card-body">

    <label class="fw-bold">

    Basic Salary

    </label>

    <div class="row mt-3">

    <div class="col-md-4">

    <div class="border rounded p-3">

    <div class="form-check">

    <input
    class="form-check-input salaryCheck"
    type="checkbox"
    id="month1">

    <label
    class="form-check-label fw-bold"
    for="month1">

    First Month

    </label>

    </div>

   <input
    type="number"
    name="basic_salary_1"
    id="salary1"
    class="form-control mt-3 salaryInput"
    placeholder="Enter Salary"
    min="0"
    step="0.01"
    oninput="validateNonNegative(this)">

    </div>

    </div>

    <div class="col-md-4">

    <div class="border rounded p-3">

    <div class="form-check">

    <input
    class="form-check-input salaryCheck"
    type="checkbox"
    id="month2">

    <label
    class="form-check-label fw-bold"
    for="month2">

    Second Month

    </label>

    </div>

    <input
    type="number"
    name="basic_salary_2"
    id="salary2"
    class="form-control mt-3 salaryInput"
    placeholder="Enter Salary"
    min="0"
    step="0.01"
    oninput="validateNonNegative(this)">

    </div>

    </div>

    <div class="col-md-4">

    <div class="border rounded p-3">

    <div class="form-check">

    <input
    class="form-check-input salaryCheck"
    type="checkbox"
    id="month3">

    <label
    class="form-check-label fw-bold"
    for="month3">

    Third Month

    </label>

    </div>

    <input
    type="number"
    name="basic_salary_3"
    id="salary3"
    class="form-control mt-3 salaryInput"
    placeholder="Enter Salary"
    min="0"
    step="0.01"
    oninput="validateNonNegative(this)">

    </div>

    </div>

    </div>

    <div class="alert alert-warning mt-3" role="alert">
        <i class="fas fa-exclamation-triangle"></i>
        <strong>Please select at least one month</strong>
    </div>

    <div class="mt-4 p-3 bg-light rounded">

        <div class="row align-items-center">

            <div class="col-md-6">

                <label class="fw-bold">

                    Average Monthly Salary

                    <span class="text-danger">*</span>

                </label>

                <small class="d-block text-muted">
                    Average will be calculated from selected months
                </small>

            </div>

            <div class="col-md-6">

                <input
                    type="text"
                    id="averageSalary"
                    class="form-control form-control-lg text-primary fw-bold"
                    readonly
                    style="font-size: 1.5rem;"
                    name="avg_salary">

                <small class="d-block text-muted text-end">
                    Calculated average from First, Second, and Third Month salaries
                </small>

            </div>

        </div>

    </div>

    <div class="row mt-4">

        <div class="col-md-6">

            <label>

                Provider Fund (PF) Monthly

            </label>

            <div class="input-group">

                <span class="input-group-text">₹</span>

                <input
                    type="number"
                    name="provident_fund_monthly"
                    id="providentFund"
                    class="form-control"
                    value="0"
                    min="0"
                    step="0.01"
                    oninput="validateNonNegative(this)">

            </div>

            <small class="text-muted">
                Monthly: ₹<span id="pfDisplay">0.00</span>
            </small>

        </div>

        <div class="col-md-6">

            <label>

                Professional Tax Monthly

            </label>

            <div class="input-group">

                <span class="input-group-text">₹</span>

                <input
                    type="number"
                    name="professional_tax_monthly"
                    id="professionalTax"
                    class="form-control"
                    value="0"
                    min="0"
                    step="0.01"
                    oninput="validateNonNegative(this)">

            </div>

            <small class="text-muted">
                Monthly: ₹<span id="ptDisplay">0.00</span>
            </small>

        </div>

    </div>

    <div class="row mt-4">

        <div class="col-md-6">

            <label>

                Income Tax (Yearly)

                <span class="text-danger">*</span>

            </label>

            <div class="input-group">

                <span class="input-group-text">₹</span>

                <input
                    type="number"
                    name="income_tax_yearly"
                    id="incomeTax"
                    class="form-control"
                    value="0"
                    min="0"
                    oninput="validateNonNegative(this)">

            </div>

        </div>

        <div class="col-md-6">

            <label>

                Monthly Tax

            </label>

            <div class="input-group">

                <span class="input-group-text">₹</span>

                <input
                    type="text"
                    id="monthlyTax"
                    class="form-control"
                    readonly
                    value="0.00"
                    name="monthly_tax">

            </div>

            <small class="text-muted">
                Monthly: ₹<span id="monthlyTaxDisplay">0.00</span>
            </small>

        </div>

    </div>

    <div class="card shadow-sm mt-4">

        <div class="card-header bg-white">

            <div class="d-flex justify-content-between align-items-center">

                <h4 class="mb-0">Tax & Deductions</h4>

                <button type="button"
                        id="addDeduction"
                        class="btn btn-primary btn-sm">

                    + Add Deduction

                </button>

            </div>

        </div>

        <div class="card-body">

            <label class="fw-bold mb-3">

                Monthly Deductions

            </label>

            <div id="deductionContainer">

                <p class="text-muted text-center">
                    No deductions added yet
                </p>

            </div>

        </div>

    </div>

    <input type="hidden"
           id="monthly_deductions"
           name="monthly_deductions">

    <hr class="my-4">

    {{-- ================= SALARIED CO-APPLICANT SECTION ================= --}}

    <div class="card shadow-sm mb-4">

        <div class="card-body">

            <div class="form-check mb-3">

                <input
                    type="checkbox"
                    class="form-check-input"
                    id="hasCoApplicantSalary">

                <label class="form-check-label fw-bold">

                    I have a Co-Applicant

                </label>

            </div>

            <div
                id="coApplicantSectionSalary"
                style="display:none;">

                <div class="d-flex justify-content-end mb-3">

                    <button
                        type="button"
                        class="btn btn-primary"
                        id="addCoApplicantSalary">

                        + Add Co-Applicant

                    </button>

                </div>

                <div id="coApplicantContainerSalary">

                </div>

            </div>

        </div>

    </div>

    </div>

    </div>

    </div>

    </div>



    {{-- Business Section --}}

    <div id="businessDiv" style="display:none;">

        {{-- Income Details Card --}}
        <div class="card shadow-sm mb-4">

            <div class="card-header bg-white">
                <h4 class="mb-0">Income Details</h4>
            </div>

            <div class="card-body">

                {{-- Current / Previous / Second Previous Year --}}
                <div class="row">

                    <div class="col-md-4">
                        <div class="border rounded p-3">
                            <label class="fw-bold">Current Year</label>
                            <input type="number"
                                   name="business_current_year"
                                   class="form-control mt-2 businessInput"
                                   placeholder="Enter Income"
                                   min="0"
                                   step="0.01"
                                   oninput="validateNonNegative(this)">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="border rounded p-3">
                            <label class="fw-bold">Previous Year</label>
                            <input type="number"
                                   name="business_previous_year"
                                   class="form-control mt-2 businessInput"
                                   placeholder="Enter Income"
                                   min="0"
                                   step="0.01"
                                   oninput="validateNonNegative(this)">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="border rounded p-3">
                            <label class="fw-bold">Second Previous Year</label>
                            <input type="number"
                                   name="business_second_previous_year"
                                   class="form-control mt-2 businessInput"
                                   placeholder="Enter Income"
                                   min="0"
                                   step="0.01"
                                   oninput="validateNonNegative(this)">
                        </div>
                    </div>

                </div>

                {{-- Average Business Income --}}
                <div class="mt-4 p-3 bg-light rounded">

                    <div class="row align-items-center">

                        <div class="col-md-6">

                            <label class="fw-bold">

                                Average Business Income

                            </label>

                            <small class="d-block text-muted">
                                Average will be calculated from selected years
                            </small>

                        </div>

                        <div class="col-md-6">

                            <input
                                type="text"
                                id="averageBusinessIncome"
                                class="form-control form-control-lg text-primary fw-bold"
                                readonly
                                style="font-size: 1.5rem;"
                                name="avg_business_income">

                        </div>

                    </div>

                </div>

            </div>

        </div>

        {{-- Remuneration Income --}}
        <div class="card shadow-sm mb-4">

            <div class="card-header bg-white d-flex justify-content-between">

                <strong>Remuneration Income</strong>

                <button
                    type="button"
                    id="addRemuneration"
                    class="btn btn-primary btn-sm">

                    + Add

                </button>

            </div>

            <div class="card-body">

                <div id="remunerationContainer">

                    <p class="text-muted text-center">No remuneration income added yet</p>

                </div>

            </div>

        </div>

        {{-- Rental Income --}}
        <div class="card shadow-sm mb-4">

            <div class="card-header bg-white d-flex justify-content-between">

                <strong>Rental Income</strong>

                <button
                    type="button"
                    id="addRental"
                    class="btn btn-primary btn-sm">

                    + Add

                </button>

            </div>

            <div class="card-body">

                <div id="rentalContainer">

                    <p class="text-muted text-center">No rental income added yet</p>

                </div>

            </div>

        </div>

        {{-- Profit Share Income --}}
        <div class="card shadow-sm mb-4">

            <div class="card-header bg-white d-flex justify-content-between">

                <strong>Profit Share Income</strong>

                <button
                    type="button"
                    id="addProfit"
                    class="btn btn-primary btn-sm">

                    + Add

                </button>

            </div>

            <div class="card-body">

                <div id="profitContainer">

                    <p class="text-muted text-center">No profit share income added yet</p>

                </div>

            </div>

        </div>

        {{-- Agriculture Income --}}
        <div class="card shadow-sm mb-4">

            <div class="card-header bg-white d-flex justify-content-between">

                <strong>Agriculture Income</strong>

                <button
                    type="button"
                    id="addAgriculture"
                    class="btn btn-primary btn-sm">

                    + Add

                </button>

            </div>

            <div class="card-body">

                <div id="agricultureContainer">

                    <p class="text-muted text-center">No agriculture income added yet</p>

                </div>

            </div>

        </div>

        {{-- Tax & Deductions for Business --}}
        <div class="card shadow-sm mb-4">

            <div class="card-body">

                <div class="row">

                    <div class="col-md-6">

                        <label>
                            Income Tax (Yearly)
                            <span class="text-danger">*</span>
                        </label>

                        <div class="input-group">

                            <span class="input-group-text">₹</span>

                            <input
                                type="number"
                                id="businessIncomeTax"
                                name="business_income_tax_yearly"
                                class="form-control"
                                value="0"
                                min="0"
                                oninput="validateNonNegative(this)">

                        </div>

                    </div>

                    <div class="col-md-6">

                        <label>
                            Monthly Tax
                        </label>

                        <div class="input-group">

                            <span class="input-group-text">₹</span>

                            <input
                                type="text"
                                id="businessMonthlyTax"
                                class="form-control"
                                value="0.00"
                                readonly
                                name="business_monthly_tax">

                        </div>

                        <small class="text-muted">
                            Monthly: ₹<span id="businessMonthlyTaxDisplay">0.00</span>
                        </small>

                    </div>

                </div>

            </div>

        </div>

        {{-- Tax & Deductions Section for Business --}}
        <div class="card shadow-sm mb-4">

            <div class="card-header bg-white">

                <div class="d-flex justify-content-between align-items-center">

                    <h4 class="mb-0">Tax & Deductions</h4>

                    <button type="button"
                            id="businessAddDeduction"
                            class="btn btn-primary btn-sm">

                        + Add Deduction

                    </button>

                </div>

            </div>

            <div class="card-body">

                <label class="fw-bold mb-3">

                    Monthly Deductions

                </label>

                <div id="businessDeductionContainer">

                    <p class="text-muted text-center">
                        No deductions added yet
                    </p>

                </div>

            </div>

        </div>

        <input type="hidden"
               id="business_monthly_deductions"
               name="business_monthly_deductions">

        <hr class="my-4">

        {{-- ================= BUSINESS CO-APPLICANT SECTION ================= --}}

        <div class="card shadow-sm mb-4">

            <div class="card-body">

                <div class="form-check mb-3">

                    <input
                        type="checkbox"
                        class="form-check-input"
                        id="hasCoApplicantBusiness">

                    <label class="form-check-label fw-bold">

                        I have a Co-Applicant

                    </label>

                </div>

                <div
                    id="coApplicantSectionBusiness"
                    style="display:none;">

                    <div class="d-flex justify-content-end mb-3">

                        <button
                            type="button"
                            class="btn btn-primary"
                            id="addCoApplicantBusiness">

                            + Add Co-Applicant

                        </button>

                    </div>

                    <div id="coApplicantContainerBusiness">

                    </div>

                </div>

            </div>

        </div>

    </div>


            {{-- ================= LOAN DETAILS SECTION (COMMON - BOTTOM) ================= --}}

            <div class="card shadow-sm mb-4">

                <div class="card-header bg-white">

                    <h4 class="mb-0">
                        Loan Details
                    </h4>

                </div>

                <div class="card-body">

                    <div class="row">

                        <div class="col-md-6">

                            <label>
                                Select Bank (FOIR %) 
                                <span class="text-danger">*</span>
                            </label>

                            <select
                                name="bank_name"
                                class="form-control"
                                id="bankSelect"
                                required>

                                <option value="">Select a bank</option>
                                <option value="HDFC">HDFC Bank</option>
                                <option value="ICICI">ICICI Bank</option>
                                <option value="SBI">State Bank of India</option>
                                <option value="AXIS">Axis Bank</option>
                                <option value="KOTAK">Kotak Mahindra Bank</option>
                                <option value="YES">Yes Bank</option>
                                <option value="IDFC">IDFC First Bank</option>
                                <option value="BANK_OF_BARODA">Bank of Baroda</option>
                                <option value="PUNJAB_NATIONAL">Punjab National Bank</option>
                                <option value="CANARA">Canara Bank</option>
                                <option value="UNION_BANK">Union Bank of India</option>

                            </select>

                        </div>

                        <div class="col-md-6">

                            <label>
                                FOIR (%)
                                <span class="text-danger">*</span>
                            </label>

                            <input
                                type="number"
                                name="foir_percentage"
                                id="foirPercentage"
                                class="form-control"
                                placeholder="Enter FOIR percentage"
                                step="0.01"
                                value="50"
                                min="0"
                                oninput="validateNonNegative(this)"
                                required>

                            <small class="text-muted">
                                Fixed Obligation to Income Ratio (FOIR)
                            </small>

                        </div>

                    </div>

                    <div class="row mt-3">

                        <div class="col-md-6">

                            <label>
                                Loan Amount
                                <span class="text-danger">*</span>
                            </label>

                            <input
                                type="number"
                                name="loan_amount"
                                id="loanAmount"
                                class="form-control"
                                placeholder="Enter loan amount"
                                value="500000"
                                min="0"
                                oninput="validateNonNegative(this)"
                                required>

                        </div>

                        <div class="col-md-6">

                            <label>
                                Loan Tenure (Months)
                                <span class="text-danger">*</span>
                            </label>

                            <input
                                type="number"
                                name="loan_tenure"
                                id="loanTenure"
                                class="form-control"
                                placeholder="Enter loan tenure in months"
                                value="60"
                                min="1"
                                oninput="validatePositive(this)"
                                required>

                        </div>

                    </div>

                    <div class="row mt-3">

                        <div class="col-md-6">

                            <label>
                                Interest Rate (%)
                                <span class="text-danger">*</span>
                            </label>

                            <input
                                type="number"
                                name="interest_rate"
                                id="interestRate"
                                class="form-control"
                                placeholder="Enter interest rate"
                                step="0.01"
                                value="8"
                                min="0"
                                oninput="validateNonNegative(this)"
                                required>

                        </div>

                    </div>

                </div>

            </div>

            {{-- Calculate Eligibility Button --}}

            <div class="text-center mt-4 mb-4">

                <button type="button" class="btn btn-primary btn-lg px-5 py-3" id="calculateEligibilityBtn">

                    <i class="fas fa-calculator me-2"></i>
                    Calculate Eligibility

                </button>

            </div>

        </form>

        {{-- ================= ELIGIBILITY RESULT SECTION ================= --}}

        <div id="eligibilityResult" style="display:none;" class="mb-5">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0 text-center">
                        <i class="fas fa-chart-line me-2"></i>
                        Eligibility Results
                    </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="p-3 border rounded">
                                <h6 class="text-muted">Total Monthly Income</h6>
                                <h3 class="text-primary fw-bold" id="resultTotalIncome">₹0.00</h3>
                            </div>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <div class="p-3 border rounded">
                                <h6 class="text-muted">Remaining Income After Tax</h6>
                                <h3 class="text-success fw-bold" id="resultRemainingIncome">₹0.00</h3>
                            </div>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <div class="p-3 border rounded">
                                <h6 class="text-muted">Tax Amount (Monthly)</h6>
                                <h3 class="text-danger fw-bold" id="resultTaxAmount">₹0.00</h3>
                            </div>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <div class="p-3 border rounded">
                                <h6 class="text-muted">Proposed EMI</h6>
                                <h3 class="text-warning fw-bold" id="resultProposedEMI">₹0.00</h3>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-4 p-3 rounded" id="eligibilityStatus">
                        <h2 id="eligibilityMessage" class="fw-bold">Eligible</h2>
                    </div>

                    <div class="text-center mt-4">
                        <button class="btn btn-primary px-4" onclick="saveToLibrary()">
                            <i class="fas fa-save me-2"></i> Save to Library
                        </button>
                        <button class="btn btn-primary px-4" onclick="window.print()">
                            <i class="fas fa-print me-2"></i> Print
                        </button>
                        <button class="btn btn-secondary px-4" onclick="document.getElementById('eligibilityResult').style.display='none'">
                            <i class="fas fa-times me-2"></i> Close
                        </button>
                    </div>
                </div>
            </div>
        </div>

        {{-- ================= EMI CALCULATOR SECTION ================= --}}

        <div class="row mt-5">
            <div class="col-md-12">
                <h2 class="text-center fw-bold mb-4" style="color: #000;">EMI Calculator</h2>
            </div>
        </div>

        <div class="row">
            <!-- EMI Calculator -->
            <div class="col-md-6">
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-white">
                        <h4 class="mb-0">EMI Calculator</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label>Loan Amount <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text">₹</span>
                                <input type="number" id="emiLoanAmount" class="form-control" placeholder="Enter loan amount" value="500000" min="0" oninput="validateNonNegative(this)">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label>Interest Rate (%) <span class="text-danger">*</span></label>
                            <input type="number" id="emiInterestRate" class="form-control" placeholder="Enter interest rate" value="8" step="0.01" min="0" oninput="validateNonNegative(this)">
                        </div>

                        <div class="mb-3">
                            <label>Tenure (Months) <span class="text-danger">*</span></label>
                            <input type="number" id="emiTenure" class="form-control" placeholder="Enter tenure in months" value="60" min="1" oninput="validatePositive(this)">
                        </div>

                        <button id="calculateEMI" class="btn btn-primary w-100">Calculate EMI</button>

                        <div class="mt-3 p-3 bg-light rounded" id="emiResult" style="display:none;">
                            <h5 class="text-center">Monthly EMI</h5>
                            <h3 class="text-center text-primary" id="emiAmount">₹0.00</h3>
                            <hr>
                            <div class="row">
                                <div class="col-6">
                                    <small>Total Payment</small>
                                    <h6 id="emiTotalPayment">₹0.00</h6>
                                </div>
                                <div class="col-6">
                                    <small>Total Interest</small>
                                    <h6 id="emiTotalInterest">₹0.00</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Reverse EMI Calculator -->
            <div class="col-md-6">
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-white">
                        <h4 class="mb-0">Reverse EMI Calculator</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label>Desired EMI <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text">₹</span>
                                <input type="number" id="reverseEMI" class="form-control" placeholder="Enter desired EMI" value="10000" min="0" oninput="validateNonNegative(this)">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label>Interest Rate (%) <span class="text-danger">*</span></label>
                            <input type="number" id="reverseInterestRate" class="form-control" placeholder="Enter interest rate" value="8" step="0.01" min="0" oninput="validateNonNegative(this)">
                        </div>

                        <div class="mb-3">
                            <label>Tenure (Months) <span class="text-danger">*</span></label>
                            <input type="number" id="reverseTenure" class="form-control" placeholder="Enter tenure in months" value="60" min="1" oninput="validatePositive(this)">
                        </div>

                        <button id="calculateReverseEMI" class="btn btn-primary w-100">Calculate Loan Amount</button>

                        <div class="mt-3 p-3 bg-light rounded" id="reverseEMIResult" style="display:none;">
                            <h5 class="text-center">Loan Amount</h5>
                            <h3 class="text-center text-success" id="reverseLoanAmount">₹0.00</h3>
                            <hr>
                            <div class="row">
                                <div class="col-6">
                                    <small>Total Payment</small>
                                    <h6 id="reverseTotalPayment">₹0.00</h6>
                                </div>
                                <div class="col-6">
                                    <small>Total Interest</small>
                                    <h6 id="reverseTotalInterest">₹0.00</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ================= LIBRARY SECTION ================= --}}

    <div id="librarySection" style="display:none;" class="mb-5">
        <div class="card shadow-lg">
            <div class="card-header bg-info text-white d-flex justify-content-between align-items-center">
                <h4 class="mb-0">
                    <i class="fas fa-book me-2"></i>
                    Saved Forms
                </h4>
                <div>
                    <span class="badge bg-light text-dark me-2" id="recordCount">0 Records</span>
                    <button class="btn btn-light btn-sm" onclick="showCalculator()">
                        <i class="fas fa-arrow-left me-2"></i> Back to Calculator
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div id="libraryContent">
                    <div class="text-center text-muted py-5">
                        <i class="fas fa-inbox fa-3x mb-3"></i>
                        <h5>No records saved yet</h5>
                        <p>Calculate eligibility and save results to see them here.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ================= EDIT MODAL ================= --}}

    <div class="modal fade" id="editModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title">
                        <i class="fas fa-edit me-2"></i> Edit Record
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body" id="editModalBody">
                    <!-- Dynamic content will be loaded here -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" onclick="updateRecord()">
                        <i class="fas fa-save me-2"></i> Update Record
                    </button>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection


@push('scripts')

<!-- ================= Bootstrap JS ================= -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
// ================= GLOBAL VALIDATION FUNCTIONS =================

// Validate Non-Negative Values - Prevents negative numbers
function validateNonNegative(input) {
    if (input.value < 0) {
        input.value = 0;
        // Show a brief visual feedback
        input.style.borderColor = '#dc3545';
        setTimeout(function() {
            input.style.borderColor = '';
        }, 2000);
    }
}

// Validate Positive Values - Prevents zero and negative numbers
function validatePositive(input) {
    if (input.value < 1) {
        input.value = 1;
        input.style.borderColor = '#dc3545';
        setTimeout(function() {
            input.style.borderColor = '';
        }, 2000);
    }
}

// ================= GLOBAL VARIABLES =================
let savedRecords = JSON.parse(localStorage.getItem('eligibilityRecords')) || [];
let currentEditIndex = -1;

// ================= VALIDATION FUNCTIONS =================

// Validate Name - Only characters (letters and spaces)
function validateName(input) {
    // Remove any non-alphabetic characters except spaces
    input.value = input.value.replace(/[^a-zA-Z\s]/g, '');
}

// Validate Phone - Only 10 digits
function validatePhone(input) {
    // Remove any non-digit characters
    input.value = input.value.replace(/\D/g, '');
    
    // Limit to 10 digits
    if (input.value.length > 10) {
        input.value = input.value.slice(0, 10);
    }
}

// ================= TAB NAVIGATION =================
function showCalculator() {
    document.getElementById('librarySection').style.display = 'none';
    document.getElementById('eligibilityResult').style.display = 'none';
    document.getElementById('calculatorSection').style.display = 'block';
    
    // Update tab buttons
    const buttons = document.querySelectorAll('.card .btn');
    if (buttons.length >= 2) {
        buttons[0].className = 'btn btn-primary w-100';
        buttons[1].className = 'btn btn-light border w-100';
    }
}

function showLibrary() {
    document.getElementById('librarySection').style.display = 'block';
    document.getElementById('eligibilityResult').style.display = 'none';
    document.getElementById('calculatorSection').style.display = 'none';
    
    // Update tab buttons
    const buttons = document.querySelectorAll('.card .btn');
    if (buttons.length >= 2) {
        buttons[0].className = 'btn btn-light border w-100';
        buttons[1].className = 'btn btn-primary w-100';
    }
    
    renderLibrary();
}

// ================= TOGGLE APPLICANT TYPE =================
function toggleApplicantType() {
    const salaryDiv = document.getElementById('salaryDiv');
    const businessDiv = document.getElementById('businessDiv');
    const selected = document.querySelector('input[name="applicant_type"]:checked');
    
    if(selected && selected.value === 'Salaried') {
        salaryDiv.style.display = 'block';
        businessDiv.style.display = 'none';
    } else if(selected) {
        salaryDiv.style.display = 'none';
        businessDiv.style.display = 'block';
    }
}

// ================= CALCULATE ELIGIBILITY =================
document.addEventListener('DOMContentLoaded', function() {
    
    // Fix the calculate button event
    const calcBtn = document.getElementById('calculateEligibilityBtn');
    if (calcBtn) {
        // Remove any existing event listeners
        const newBtn = calcBtn.cloneNode(true);
        calcBtn.parentNode.replaceChild(newBtn, calcBtn);
        
        // Add new event listener
        newBtn.addEventListener('click', function(e) {
            e.preventDefault();
            calculateEligibility();
        });
        
        // Also add a direct onclick attribute as backup
        newBtn.setAttribute('onclick', 'calculateEligibility()');
    }
    
    // ================= REAL-TIME VALIDATION =================
    // Name validation
    const nameInput = document.getElementById('fullName');
    if (nameInput) {
        nameInput.addEventListener('input', function() {
            validateName(this);
        });
        
        nameInput.addEventListener('keypress', function(e) {
            // Allow only letters, spaces, and backspace
            const key = e.key;
            if (!/^[a-zA-Z\s]$/.test(key) && key !== 'Backspace' && key !== 'Delete' && key !== 'Tab') {
                e.preventDefault();
            }
        });
    }
    
    // Phone validation
    const phoneInput = document.getElementById('phone');
    if (phoneInput) {
        phoneInput.addEventListener('input', function() {
            validatePhone(this);
        });
        
        phoneInput.addEventListener('keypress', function(e) {
            // Allow only digits and backspace
            const key = e.key;
            if (!/^[0-9]$/.test(key) && key !== 'Backspace' && key !== 'Delete' && key !== 'Tab') {
                e.preventDefault();
            }
        });
    }
    
    // ================= FORM VALIDATION ON SUBMIT =================
    const form = document.getElementById('eligibilityForm');
    if (form) {
        form.addEventListener('submit', function(e) {
            // Validate Name
            const nameInput = document.getElementById('fullName');
            const nameValue = nameInput.value.trim();
            
            if (nameValue.length === 0) {
                e.preventDefault();
                alert('Please enter your full name.');
                nameInput.focus();
                return false;
            }
            
            // Check if name contains only letters and spaces
            if (!/^[a-zA-Z\s]+$/.test(nameValue)) {
                e.preventDefault();
                alert('Name should contain only letters and spaces.');
                nameInput.focus();
                return false;
            }
            
            // Validate Phone
            const phoneInput = document.getElementById('phone');
            const phoneValue = phoneInput.value.trim();
            
            if (phoneValue.length === 0) {
                e.preventDefault();
                alert('Please enter your phone number.');
                phoneInput.focus();
                return false;
            }
            
            // Check if phone contains exactly 10 digits
            if (!/^[0-9]{10}$/.test(phoneValue)) {
                e.preventDefault();
                alert('Phone number must be exactly 10 digits.');
                phoneInput.focus();
                return false;
            }
            
            return true;
        });
    }
    
    // ================= ADD VALIDATION TO ALL NUMBER INPUTS =================
    document.querySelectorAll('input[type="number"]').forEach(function(input) {
        // If it has a min attribute, use it for validation
        if (input.hasAttribute('min')) {
            const minVal = parseFloat(input.getAttribute('min'));
            if (minVal === 0) {
                input.addEventListener('input', function() {
                    validateNonNegative(this);
                });
            } else if (minVal > 0) {
                input.addEventListener('input', function() {
                    validatePositive(this);
                });
            }
        }
    });
});

// Main calculation function
function calculateEligibility() {
    console.log('Calculate Eligibility clicked!');
    
    const applicantType = document.querySelector('input[name="applicant_type"]:checked')?.value || 'Salaried';
    
    let totalMonthlyIncome = 0;
    let monthlyTax = 0;
    let monthlyDeductions = 0;
    
    if (applicantType === 'Salaried') {
        totalMonthlyIncome = parseFloat(document.getElementById('averageSalary')?.value) || 0;
        monthlyTax = parseFloat(document.getElementById('monthlyTax')?.value) || 0;
        monthlyDeductions = parseFloat(document.getElementById('monthly_deductions')?.value) || 0;
    } else {
        totalMonthlyIncome = parseFloat(document.getElementById('averageBusinessIncome')?.value) || 0;
        monthlyTax = parseFloat(document.getElementById('businessMonthlyTax')?.value) || 0;
        monthlyDeductions = parseFloat(document.getElementById('business_monthly_deductions')?.value) || 0;
    }
    
    const remainingIncomeAfterTax = totalMonthlyIncome - monthlyTax - monthlyDeductions;
    
    const foirPercentage = parseFloat(document.getElementById('foirPercentage')?.value) || 50;
    const loanAmount = parseFloat(document.getElementById('loanAmount')?.value) || 0;
    const loanTenure = parseInt(document.getElementById('loanTenure')?.value) || 0;
    const interestRate = parseFloat(document.getElementById('interestRate')?.value) || 0;
    
    let proposedEMI = 0;
    if (interestRate > 0 && loanTenure > 0 && loanAmount > 0) {
        const monthlyRate = interestRate / 12 / 100;
        proposedEMI = loanAmount * monthlyRate * Math.pow(1 + monthlyRate, loanTenure) / (Math.pow(1 + monthlyRate, loanTenure) - 1);
    }
    
    const maxEligibleEMI = (remainingIncomeAfterTax * foirPercentage) / 100;
    const isEligible = proposedEMI <= maxEligibleEMI && maxEligibleEMI > 0;
    const eligibilityMessage = isEligible ? '✅ Eligible' : '❌ Not Eligible';
    const statusColor = isEligible ? 'bg-success text-white' : 'bg-danger text-white';
    
    // Update result fields
    document.getElementById('resultTotalIncome').textContent = '₹' + totalMonthlyIncome.toFixed(2);
    document.getElementById('resultRemainingIncome').textContent = '₹' + remainingIncomeAfterTax.toFixed(2);
    document.getElementById('resultTaxAmount').textContent = '₹' + (monthlyTax + monthlyDeductions).toFixed(2);
    document.getElementById('resultProposedEMI').textContent = '₹' + proposedEMI.toFixed(2);
    
    const statusDiv = document.getElementById('eligibilityStatus');
    statusDiv.className = 'text-center mt-4 p-3 rounded ' + statusColor;
    document.getElementById('eligibilityMessage').textContent = eligibilityMessage;
    
    // Show result section
    const resultDiv = document.getElementById('eligibilityResult');
    resultDiv.style.display = 'block';
    
    // Scroll to result
    resultDiv.scrollIntoView({ behavior: 'smooth', block: 'start' });
}

// ================= SAVE TO LIBRARY =================
function saveToLibrary() {
    const record = {
        id: Date.now(),
        date: new Date().toLocaleString(),
        fullName: document.getElementById('fullName')?.value || 'Unnamed Form',
        phone: document.getElementById('phone')?.value || 'N/A',
        email: document.getElementById('email')?.value || 'N/A',
        dob: document.getElementById('dob')?.value || 'N/A',
        applicantType: document.querySelector('input[name="applicant_type"]:checked')?.value || 'N/A',
        totalIncome: document.getElementById('resultTotalIncome')?.textContent || '₹0.00',
        remainingIncome: document.getElementById('resultRemainingIncome')?.textContent || '₹0.00',
        taxAmount: document.getElementById('resultTaxAmount')?.textContent || '₹0.00',
        proposedEMI: document.getElementById('resultProposedEMI')?.textContent || '₹0.00',
        status: document.getElementById('eligibilityMessage')?.textContent || 'N/A',
        bank: document.getElementById('bankSelect')?.options[document.getElementById('bankSelect')?.selectedIndex]?.text || 'N/A',
        loanAmount: document.getElementById('loanAmount')?.value || '0',
        loanTenure: document.getElementById('loanTenure')?.value || '0',
        interestRate: document.getElementById('interestRate')?.value || '0',
        foir: document.getElementById('foirPercentage')?.value || '0'
    };
    
    savedRecords.push(record);
    localStorage.setItem('eligibilityRecords', JSON.stringify(savedRecords));
    
    alert('✅ Record saved successfully to library!');
    renderLibrary();
}

// ================= RENDER LIBRARY AS CARDS =================
function renderLibrary() {
    const container = document.getElementById('libraryContent');
    const recordCount = document.getElementById('recordCount');
    
    if (savedRecords.length === 0) {
        container.innerHTML = `
            <div class="text-center text-muted py-5">
                <i class="fas fa-inbox fa-3x mb-3"></i>
                <h5>No records saved yet</h5>
                <p>Calculate eligibility and save results to see them here.</p>
            </div>
        `;
        if (recordCount) recordCount.textContent = '0 Records';
        return;
    }
    
    if (recordCount) recordCount.textContent = savedRecords.length + ' Records';
    
    let html = `<div class="row">`;
    
    savedRecords.forEach((record, index) => {
        const statusClass = record.status.includes('Eligible') ? 'text-success' : 'text-danger';
        
        html += `
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 shadow-sm hover-shadow">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <h5 class="card-title fw-bold mb-0">${record.fullName}</h5>
                            <span class="badge ${record.status.includes('Eligible') ? 'bg-success' : 'bg-danger'}">${record.status}</span>
                        </div>
                        <p class="text-muted small mb-2">${record.date}</p>
                        <hr>
                        <div class="row g-2">
                            <div class="col-6">
                                <small class="text-muted d-block">Type</small>
                                <strong>${record.applicantType}</strong>
                            </div>
                            <div class="col-6">
                                <small class="text-muted d-block">Bank</small>
                                <strong>${record.bank}</strong>
                            </div>
                            <div class="col-6">
                                <small class="text-muted d-block">Total Income</small>
                                <strong>${record.totalIncome}</strong>
                            </div>
                            <div class="col-6">
                                <small class="text-muted d-block">Proposed EMI</small>
                                <strong>${record.proposedEMI}</strong>
                            </div>
                        </div>
                        <div class="mt-3 d-flex justify-content-end gap-2">
                            <button class="btn btn-sm btn-primary" onclick="viewRecord(${index})">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="btn btn-sm btn-primary" onclick="editRecord(${index})">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="btn btn-sm btn-primary" onclick="deleteRecord(${index})">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        `;
    });
    
    html += `
            </div>
            <div class="text-end mt-3">
                <small class="text-muted">Total Records: ${savedRecords.length}</small>
            </div>
        `;
    
    container.innerHTML = html;
}

// ================= VIEW RECORD =================
function viewRecord(index) {
    const record = savedRecords[index];
    const statusClass = record.status.includes('Eligible') ? 'bg-success text-white' : 'bg-danger text-white';
    
    const html = `
        <div class="row">
            <div class="col-md-6">
                <div class="p-2 border-bottom">
                    <strong>Date:</strong> ${record.date}
                </div>
                <div class="p-2 border-bottom">
                    <strong>Full Name:</strong> ${record.fullName}
                </div>
                <div class="p-2 border-bottom">
                    <strong>Phone:</strong> ${record.phone}
                </div>
                <div class="p-2 border-bottom">
                    <strong>Email:</strong> ${record.email}
                </div>
                <div class="p-2 border-bottom">
                    <strong>DOB:</strong> ${record.dob || 'N/A'}
                </div>
                <div class="p-2 border-bottom">
                    <strong>Applicant Type:</strong> ${record.applicantType}
                </div>
                <div class="p-2 border-bottom">
                    <strong>Bank:</strong> ${record.bank}
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-2 border-bottom">
                    <strong>Total Monthly Income:</strong> ${record.totalIncome}
                </div>
                <div class="p-2 border-bottom">
                    <strong>Remaining Income After Tax:</strong> ${record.remainingIncome}
                </div>
                <div class="p-2 border-bottom">
                    <strong>Tax Amount (Monthly):</strong> ${record.taxAmount}
                </div>
                <div class="p-2 border-bottom">
                    <strong>Proposed EMI:</strong> ${record.proposedEMI}
                </div>
                <div class="p-2 border-bottom">
                    <strong>FOIR:</strong> ${record.foir}%
                </div>
                <div class="p-2 mt-2 rounded text-center ${statusClass}">
                    <strong>Status: ${record.status}</strong>
                </div>
            </div>
        </div>
    `;
    
    const modal = new bootstrap.Modal(document.getElementById('editModal'));
    document.getElementById('editModalBody').innerHTML = html;
    document.querySelector('#editModal .modal-footer').style.display = 'none';
    modal.show();
    
    document.getElementById('editModal').addEventListener('hidden.bs.modal', function() {
        document.querySelector('#editModal .modal-footer').style.display = 'flex';
    }, { once: true });
}

// ================= EDIT RECORD WITH VALIDATION =================
function editRecord(index) {
    currentEditIndex = index;
    const record = savedRecords[index];
    
    const html = `
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label><strong>Full Name</strong> <span class="text-danger">*</span></label>
                    <input type="text" class="form-control edit-field" id="editFullName" 
                           value="${record.fullName}" 
                           placeholder="Enter full name"
                           pattern="[A-Za-z\\s]+"
                           oninput="validateEditName(this)">
                    <small class="text-muted">Only letters and spaces allowed</small>
                    <div class="invalid-feedback">Name should contain only letters and spaces</div>
                </div>
                <div class="mb-3">
                    <label><strong>Phone</strong> <span class="text-danger">*</span></label>
                    <input type="text" class="form-control edit-field" id="editPhone" 
                           value="${record.phone}" 
                           placeholder="Enter 10 digit phone number"
                           pattern="[0-9]{10}"
                           maxlength="10"
                           oninput="validateEditPhone(this)">
                    <small class="text-muted">Enter exactly 10 digits</small>
                    <div class="invalid-feedback">Phone number must be exactly 10 digits</div>
                </div>
                <div class="mb-3">
                    <label><strong>Email</strong> <span class="text-danger">*</span></label>
                    <input type="email" class="form-control edit-field" id="editEmail" 
                           value="${record.email}" 
                           placeholder="Enter email address"
                           oninput="validateEditEmail(this)">
                    <div class="invalid-feedback">Please enter a valid email address</div>
                </div>
                <div class="mb-3">
                    <label><strong>DOB</strong></label>
                    <input type="date" class="form-control edit-field" id="editDob" 
                           value="${record.dob || ''}">
                </div>
                <div class="mb-3">
                    <label><strong>Applicant Type</strong></label>
                    <select class="form-control edit-field" id="editApplicantType">
                        <option value="Salaried" ${record.applicantType === 'Salaried' ? 'selected' : ''}>Salaried</option>
                        <option value="Business" ${record.applicantType === 'Business' ? 'selected' : ''}>Business</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label><strong>Bank</strong></label>
                    <input type="text" class="form-control edit-field" id="editBank" 
                           value="${record.bank}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label><strong>Total Monthly Income</strong> <span class="text-danger">*</span></label>
                    <input type="number" class="form-control edit-field" id="editTotalIncome" 
                           value="${record.totalIncome.replace('₹', '').trim()}" 
                           min="0"
                           step="0.01"
                           oninput="validateEditNumber(this)">
                    <div class="invalid-feedback">Please enter a valid positive number</div>
                </div>
                <div class="mb-3">
                    <label><strong>Remaining Income After Tax</strong> <span class="text-danger">*</span></label>
                    <input type="number" class="form-control edit-field" id="editRemainingIncome" 
                           value="${record.remainingIncome.replace('₹', '').trim()}" 
                           min="0"
                           step="0.01"
                           oninput="validateEditNumber(this)">
                    <div class="invalid-feedback">Please enter a valid positive number</div>
                </div>
                <div class="mb-3">
                    <label><strong>Tax Amount (Monthly)</strong> <span class="text-danger">*</span></label>
                    <input type="number" class="form-control edit-field" id="editTaxAmount" 
                           value="${record.taxAmount.replace('₹', '').trim()}" 
                           min="0"
                           step="0.01"
                           oninput="validateEditNumber(this)">
                    <div class="invalid-feedback">Please enter a valid positive number</div>
                </div>
                <div class="mb-3">
                    <label><strong>Proposed EMI</strong> <span class="text-danger">*</span></label>
                    <input type="number" class="form-control edit-field" id="editProposedEMI" 
                           value="${record.proposedEMI.replace('₹', '').trim()}" 
                           min="0"
                           step="0.01"
                           oninput="validateEditNumber(this)">
                    <div class="invalid-feedback">Please enter a valid positive number</div>
                </div>
                <div class="mb-3">
                    <label><strong>FOIR (%)</strong></label>
                    <input type="number" class="form-control edit-field" id="editFOIR" 
                           value="${record.foir}" 
                           min="0"
                           max="100"
                           step="0.01"
                           oninput="validateEditFOIR(this)">
                    <small class="text-muted">Value between 0 and 100</small>
                    <div class="invalid-feedback">FOIR must be between 0 and 100</div>
                </div>
                <div class="mb-3">
                    <label><strong>Status</strong></label>
                    <select class="form-control edit-field" id="editStatus">
                        <option value="✅ Eligible" ${record.status.includes('Eligible') ? 'selected' : ''}>Eligible</option>
                        <option value="❌ Not Eligible" ${record.status.includes('Not Eligible') ? 'selected' : ''}>Not Eligible</option>
                    </select>
                </div>
            </div>
        </div>
    `;
    
    document.getElementById('editModalBody').innerHTML = html;
    document.querySelector('#editModal .modal-footer').style.display = 'flex';
    
    // Reset validation state
    document.querySelectorAll('.edit-field').forEach(field => {
        field.classList.remove('is-invalid', 'is-valid');
    });
    
    const modal = new bootstrap.Modal(document.getElementById('editModal'));
    modal.show();
}

// ================= EDIT VALIDATION FUNCTIONS =================

function validateEditName(input) {
    const value = input.value;
    // Remove invalid characters
    input.value = value.replace(/[^a-zA-Z\s]/g, '');
    
    if (input.value.trim().length > 0 && /^[a-zA-Z\s]+$/.test(input.value)) {
        input.classList.remove('is-invalid');
        input.classList.add('is-valid');
    } else if (input.value.length > 0) {
        input.classList.remove('is-valid');
        input.classList.add('is-invalid');
    } else {
        input.classList.remove('is-invalid', 'is-valid');
    }
}

function validateEditPhone(input) {
    // Remove non-digits
    input.value = input.value.replace(/\D/g, '');
    
    // Limit to 10 digits
    if (input.value.length > 10) {
        input.value = input.value.slice(0, 10);
    }
    
    if (input.value.length === 10) {
        input.classList.remove('is-invalid');
        input.classList.add('is-valid');
    } else if (input.value.length > 0) {
        input.classList.remove('is-valid');
        input.classList.add('is-invalid');
    } else {
        input.classList.remove('is-invalid', 'is-valid');
    }
}

function validateEditEmail(input) {
    const email = input.value.trim();
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    
    if (email.length > 0 && emailRegex.test(email)) {
        input.classList.remove('is-invalid');
        input.classList.add('is-valid');
    } else if (email.length > 0) {
        input.classList.remove('is-valid');
        input.classList.add('is-invalid');
    } else {
        input.classList.remove('is-invalid', 'is-valid');
    }
}

function validateEditNumber(input) {
    const value = parseFloat(input.value);
    
    if (input.value.length > 0 && !isNaN(value) && value >= 0) {
        input.classList.remove('is-invalid');
        input.classList.add('is-valid');
    } else if (input.value.length > 0) {
        input.classList.remove('is-valid');
        input.classList.add('is-invalid');
    } else {
        input.classList.remove('is-invalid', 'is-valid');
    }
}

function validateEditFOIR(input) {
    const value = parseFloat(input.value);
    
    if (input.value.length > 0 && !isNaN(value) && value >= 0 && value <= 100) {
        input.classList.remove('is-invalid');
        input.classList.add('is-valid');
    } else if (input.value.length > 0) {
        input.classList.remove('is-valid');
        input.classList.add('is-invalid');
    } else {
        input.classList.remove('is-invalid', 'is-valid');
    }
}

// ================= UPDATE RECORD WITH VALIDATION =================
function updateRecord() {
    if (currentEditIndex === -1) return;
    
    // Get all form fields
    const fields = {
        fullName: document.getElementById('editFullName'),
        phone: document.getElementById('editPhone'),
        email: document.getElementById('editEmail'),
        dob: document.getElementById('editDob'),
        applicantType: document.getElementById('editApplicantType'),
        bank: document.getElementById('editBank'),
        totalIncome: document.getElementById('editTotalIncome'),
        remainingIncome: document.getElementById('editRemainingIncome'),
        taxAmount: document.getElementById('editTaxAmount'),
        proposedEMI: document.getElementById('editProposedEMI'),
        foir: document.getElementById('editFOIR'),
        status: document.getElementById('editStatus')
    };
    
    // Validate all fields
    let isValid = true;
    let errorMessages = [];
    
    // Validate Name
    const nameValue = fields.fullName.value.trim();
    if (nameValue.length === 0) {
        isValid = false;
        errorMessages.push('Full Name is required');
        fields.fullName.classList.add('is-invalid');
    } else if (!/^[a-zA-Z\s]+$/.test(nameValue)) {
        isValid = false;
        errorMessages.push('Name should contain only letters and spaces');
        fields.fullName.classList.add('is-invalid');
    } else {
        fields.fullName.classList.remove('is-invalid');
        fields.fullName.classList.add('is-valid');
    }
    
    // Validate Phone
    const phoneValue = fields.phone.value.trim();
    if (phoneValue.length === 0) {
        isValid = false;
        errorMessages.push('Phone number is required');
        fields.phone.classList.add('is-invalid');
    } else if (!/^[0-9]{10}$/.test(phoneValue)) {
        isValid = false;
        errorMessages.push('Phone number must be exactly 10 digits');
        fields.phone.classList.add('is-invalid');
    } else {
        fields.phone.classList.remove('is-invalid');
        fields.phone.classList.add('is-valid');
    }
    
    // Validate Email
    const emailValue = fields.email.value.trim();
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (emailValue.length === 0) {
        isValid = false;
        errorMessages.push('Email is required');
        fields.email.classList.add('is-invalid');
    } else if (!emailRegex.test(emailValue)) {
        isValid = false;
        errorMessages.push('Please enter a valid email address');
        fields.email.classList.add('is-invalid');
    } else {
        fields.email.classList.remove('is-invalid');
        fields.email.classList.add('is-valid');
    }
    
    // Validate Total Income
    const totalIncomeVal = parseFloat(fields.totalIncome.value);
    if (fields.totalIncome.value.length === 0 || isNaN(totalIncomeVal) || totalIncomeVal < 0) {
        isValid = false;
        errorMessages.push('Total Monthly Income must be a valid positive number');
        fields.totalIncome.classList.add('is-invalid');
    } else {
        fields.totalIncome.classList.remove('is-invalid');
        fields.totalIncome.classList.add('is-valid');
    }
    
    // Validate Remaining Income
    const remainingIncomeVal = parseFloat(fields.remainingIncome.value);
    if (fields.remainingIncome.value.length === 0 || isNaN(remainingIncomeVal) || remainingIncomeVal < 0) {
        isValid = false;
        errorMessages.push('Remaining Income must be a valid positive number');
        fields.remainingIncome.classList.add('is-invalid');
    } else {
        fields.remainingIncome.classList.remove('is-invalid');
        fields.remainingIncome.classList.add('is-valid');
    }
    
    // Validate Tax Amount
    const taxAmountVal = parseFloat(fields.taxAmount.value);
    if (fields.taxAmount.value.length === 0 || isNaN(taxAmountVal) || taxAmountVal < 0) {
        isValid = false;
        errorMessages.push('Tax Amount must be a valid positive number');
        fields.taxAmount.classList.add('is-invalid');
    } else {
        fields.taxAmount.classList.remove('is-invalid');
        fields.taxAmount.classList.add('is-valid');
    }
    
    // Validate Proposed EMI
    const proposedEMIVal = parseFloat(fields.proposedEMI.value);
    if (fields.proposedEMI.value.length === 0 || isNaN(proposedEMIVal) || proposedEMIVal < 0) {
        isValid = false;
        errorMessages.push('Proposed EMI must be a valid positive number');
        fields.proposedEMI.classList.add('is-invalid');
    } else {
        fields.proposedEMI.classList.remove('is-invalid');
        fields.proposedEMI.classList.add('is-valid');
    }
    
    // Validate FOIR
    const foirVal = parseFloat(fields.foir.value);
    if (fields.foir.value.length > 0 && (isNaN(foirVal) || foirVal < 0 || foirVal > 100)) {
        isValid = false;
        errorMessages.push('FOIR must be between 0 and 100');
        fields.foir.classList.add('is-invalid');
    } else {
        fields.foir.classList.remove('is-invalid');
        if (fields.foir.value.length > 0) {
            fields.foir.classList.add('is-valid');
        }
    }
    
    // If validation fails, show errors and return
    if (!isValid) {
        alert('Please fix the following errors:\n\n• ' + errorMessages.join('\n• '));
        // Scroll to first invalid field
        const firstInvalid = document.querySelector('.is-invalid');
        if (firstInvalid) {
            firstInvalid.focus();
            firstInvalid.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
        return;
    }
    
    // Update record with validated data
    const record = savedRecords[currentEditIndex];
    record.fullName = nameValue;
    record.phone = phoneValue;
    record.email = emailValue;
    record.dob = fields.dob.value || record.dob || 'N/A';
    record.applicantType = fields.applicantType.value || record.applicantType;
    record.bank = fields.bank.value || record.bank;
    record.totalIncome = '₹' + totalIncomeVal.toFixed(2);
    record.remainingIncome = '₹' + remainingIncomeVal.toFixed(2);
    record.taxAmount = '₹' + taxAmountVal.toFixed(2);
    record.proposedEMI = '₹' + proposedEMIVal.toFixed(2);
    record.foir = fields.foir.value || record.foir;
    record.status = fields.status.value || record.status;
    
    savedRecords[currentEditIndex] = record;
    localStorage.setItem('eligibilityRecords', JSON.stringify(savedRecords));
    
    bootstrap.Modal.getInstance(document.getElementById('editModal')).hide();
    renderLibrary();
    alert('✅ Record updated successfully!');
}

// ================= DELETE RECORD =================
function deleteRecord(index) {
    if (confirm('Are you sure you want to delete this record?')) {
        savedRecords.splice(index, 1);
        localStorage.setItem('eligibilityRecords', JSON.stringify(savedRecords));
        renderLibrary();
        alert('🗑️ Record deleted successfully!');
    }
}

// ================= EXPORT PDF (Placeholder) =================
function exportPDF() {
    alert('📄 PDF export functionality will be implemented here.');
}

// ================= SHARE WHATSAPP =================
function shareWhatsApp() {
    const phone = document.getElementById('phone')?.value || '';
    const name = document.getElementById('fullName')?.value || '';
    const message = `Hello, I'm ${name}. I'm checking my loan eligibility. Please contact me for more details.`;
    const url = `https://wa.me/${phone}?text=${encodeURIComponent(message)}`;
    window.open(url, '_blank');
}

// ================= SHARE EMAIL =================
function shareEmail() {
    const email = document.getElementById('email')?.value || '';
    const name = document.getElementById('fullName')?.value || '';
    const subject = 'Loan Eligibility Inquiry';
    const body = `Hello,\n\nI'm ${name}. I'm interested in checking my loan eligibility.\n\nPlease contact me for more details.\n\nThank you.`;
    const url = `mailto:${email}?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
    window.open(url, '_blank');
}

</script>

<script>

document.addEventListener('DOMContentLoaded', function () {
    const salaryDiv = document.getElementById('salaryDiv');
    const businessDiv = document.getElementById('businessDiv');
    // Default show salary
    salaryDiv.style.display = 'block';
    businessDiv.style.display = 'none';
    
    // Initialize toggleApplicantType
    toggleApplicantType();
    
    // Render library if it was previously open
    renderLibrary();
    
    // Initialize Business Section Add Buttons
    initializeBusinessAddButtons();
});

</script>
<script>

function calculateAverage(){

let total=0;

let count=0;

document.querySelectorAll(".salaryInput").forEach(function(item){

if(item.value!="" && parseFloat(item.value) >= 0)
{

total+=parseFloat(item.value);

count++;

}

});

let avg=0;

if(count>0){

avg=total/count;

}

document.getElementById("averageSalary").value=avg.toFixed(2);

}

document.querySelectorAll(".salaryInput").forEach(function(item){

item.addEventListener("keyup",calculateAverage);

});

// Income Tax calculation
document.getElementById("incomeTax").addEventListener("keyup",function(){

let tax=parseFloat(this.value)||0;

if (tax < 0) tax = 0;

let monthly = (tax/12).toFixed(2);

document.getElementById("monthlyTax").value = monthly;

document.getElementById("monthlyTaxDisplay").textContent = monthly;

});

// Provident Fund display
document.getElementById("providentFund").addEventListener("keyup", function() {
    let val = parseFloat(this.value) || 0;
    if (val < 0) val = 0;
    document.getElementById("pfDisplay").textContent = val.toFixed(2);
});

// Professional Tax display
document.getElementById("professionalTax").addEventListener("keyup", function() {
    let val = parseFloat(this.value) || 0;
    if (val < 0) val = 0;
    document.getElementById("ptDisplay").textContent = val.toFixed(2);
});

</script>
<script>

// Business Average Calculation
document.addEventListener('DOMContentLoaded', function() {
    const businessInputs = document.querySelectorAll('.businessInput');
    const avgField = document.getElementById('averageBusinessIncome');

    businessInputs.forEach(function(input) {
        input.addEventListener('keyup', function() {
            let total = 0;
            let count = 0;
            document.querySelectorAll('.businessInput').forEach(function(item) {
                if (item.value != "" && parseFloat(item.value) >= 0) {
                    total += parseFloat(item.value);
                    count++;
                }
            });
            let avg = 0;
            if (count > 0) {
                avg = total / count;
            }
            avgField.value = avg.toFixed(2);
        });
    });

    // Business Monthly Tax
    document.getElementById('businessIncomeTax').addEventListener('keyup', function() {
        let tax = parseFloat(this.value) || 0;
        if (tax < 0) tax = 0;
        let monthly = (tax / 12).toFixed(2);
        document.getElementById('businessMonthlyTax').value = monthly;
        document.getElementById('businessMonthlyTaxDisplay').textContent = monthly;
    });

    // Business Deductions
    const btn = document.getElementById("businessAddDeduction");
    const container = document.getElementById("businessDeductionContainer");

    if (btn) {
        btn.onclick = function () {
            // Remove the "No deductions" message
            const emptyText = container.querySelector("p");
            if (emptyText) {
                emptyText.remove();
            }

            const row = document.createElement("div");
            row.className = "row mb-3 businessDeductionRow";
            row.innerHTML = `
                <div class="col-md-5">
                    <input type="text"
                           name="business_deduction_name[]"
                           class="form-control"
                           placeholder="Deduction Name">
                </div>
                <div class="col-md-5">
                    <input type="number"
                           name="business_deduction_amount[]"
                           class="form-control businessDeductionAmount"
                           value="0"
                           min="0"
                           oninput="validateNonNegative(this)">
                </div>
                <div class="col-md-2 d-flex align-items-center">
                    <a href="#" class="text-danger removeBusinessDeduction">
                        Remove
                    </a>
                </div>
            `;
            container.appendChild(row);
        };
    }

    // Remove Business Deduction
    document.addEventListener("click", function(e) {
        if (e.target.classList.contains("removeBusinessDeduction")) {
            e.target.closest(".businessDeductionRow").remove();
            
            // Show message if no deductions
            const container = document.getElementById("businessDeductionContainer");
            if (container.querySelectorAll(".businessDeductionRow").length === 0) {
                container.innerHTML = '<p class="text-muted text-center">No deductions added yet</p>';
            }
            
            updateBusinessDeductionTotal();
        }
    });

    // Update Business Deduction Total
    document.addEventListener("input", function(e) {
        if (e.target.classList.contains("businessDeductionAmount")) {
            updateBusinessDeductionTotal();
        }
    });

    function updateBusinessDeductionTotal() {
        let total = 0;
        document.querySelectorAll(".businessDeductionAmount").forEach(function(item) {
            let val = parseFloat(item.value) || 0;
            if (val < 0) val = 0;
            total += val;
        });
        document.getElementById("business_monthly_deductions").value = total;
    }

});

</script>
<script>

let deductionIndex = 0;

function updateDeductionTotal(){

    let total = 0;

    document.querySelectorAll(".deductionAmount").forEach(function(item){
        let val = parseFloat(item.value) || 0;
        if (val < 0) val = 0;
        total += val;
    });

    document.getElementById("monthly_deductions").value = total;

}


document.addEventListener("click",function(e){

    if(e.target.classList.contains("removeDeduction")){

        e.target.closest(".deductionRow").remove();

        // Show message if no deductions
        const container = document.getElementById("deductionContainer");
        if (container.querySelectorAll(".deductionRow").length === 0) {
            container.innerHTML = '<p class="text-muted text-center">No deductions added yet</p>';
        }

        updateDeductionTotal();

    }

});

document.addEventListener("input",function(e){

    if(e.target.classList.contains("deductionAmount")){

        updateDeductionTotal();

    }

});

</script>
<script>

</script>
<script>
document.addEventListener("DOMContentLoaded", function () {

    const btn = document.getElementById("addDeduction");
    const container = document.getElementById("deductionContainer");

    btn.onclick = function () {

        // Remove the "No deductions" message
        const emptyText = container.querySelector("p");
        if (emptyText) {
            emptyText.remove();
        }

        const row = document.createElement("div");

        row.className = "row mb-3 deductionRow";

        row.innerHTML = `
            <div class="col-md-5">
                <input type="text"
                       name="deduction_name[]"
                       class="form-control"
                       placeholder="Deduction Name">
            </div>

            <div class="col-md-5">
                <input type="number"
                       name="deduction_amount[]"
                       class="form-control deductionAmount"
                       value="0"
                       min="0"
                       oninput="validateNonNegative(this)">
            </div>

            <div class="col-md-2 d-flex align-items-center">
                <a href="#" class="text-danger removeDeduction">
                    Remove
                </a>
            </div>
        `;

        container.appendChild(row);

    };

});
</script>

<script>
// ================= EMI CALCULATOR =================
document.getElementById('calculateEMI').addEventListener('click', function() {
    const loanAmount = parseFloat(document.getElementById('emiLoanAmount').value);
    const annualRate = parseFloat(document.getElementById('emiInterestRate').value);
    const tenureMonths = parseInt(document.getElementById('emiTenure').value);

    if (!loanAmount || !annualRate || !tenureMonths) {
        alert('Please fill all fields');
        return;
    }

    if (loanAmount < 0 || annualRate < 0 || tenureMonths < 1) {
        alert('Please enter valid positive values');
        return;
    }

    const monthlyRate = annualRate / 12 / 100;
    const emi = loanAmount * monthlyRate * Math.pow(1 + monthlyRate, tenureMonths) / (Math.pow(1 + monthlyRate, tenureMonths) - 1);
    const totalPayment = emi * tenureMonths;
    const totalInterest = totalPayment - loanAmount;

    document.getElementById('emiAmount').textContent = '₹' + emi.toFixed(2);
    document.getElementById('emiTotalPayment').textContent = '₹' + totalPayment.toFixed(2);
    document.getElementById('emiTotalInterest').textContent = '₹' + totalInterest.toFixed(2);
    document.getElementById('emiResult').style.display = 'block';
});

// ================= REVERSE EMI CALCULATOR =================
document.getElementById('calculateReverseEMI').addEventListener('click', function() {
    const desiredEMI = parseFloat(document.getElementById('reverseEMI').value);
    const annualRate = parseFloat(document.getElementById('reverseInterestRate').value);
    const tenureMonths = parseInt(document.getElementById('reverseTenure').value);

    if (!desiredEMI || !annualRate || !tenureMonths) {
        alert('Please fill all fields');
        return;
    }

    if (desiredEMI < 0 || annualRate < 0 || tenureMonths < 1) {
        alert('Please enter valid positive values');
        return;
    }

    const monthlyRate = annualRate / 12 / 100;
    const loanAmount = desiredEMI * (Math.pow(1 + monthlyRate, tenureMonths) - 1) / (monthlyRate * Math.pow(1 + monthlyRate, tenureMonths));
    const totalPayment = desiredEMI * tenureMonths;
    const totalInterest = totalPayment - loanAmount;

    document.getElementById('reverseLoanAmount').textContent = '₹' + loanAmount.toFixed(2);
    document.getElementById('reverseTotalPayment').textContent = '₹' + totalPayment.toFixed(2);
    document.getElementById('reverseTotalInterest').textContent = '₹' + totalInterest.toFixed(2);
    document.getElementById('reverseEMIResult').style.display = 'block';
});

</script>

<script>

// ================= SALARIED CO-APPLICANT SCRIPT =================
document.addEventListener("DOMContentLoaded", function () {

    const checkbox = document.getElementById("hasCoApplicantSalary");
    const section = document.getElementById("coApplicantSectionSalary");
    const container = document.getElementById("coApplicantContainerSalary");
    const addBtn = document.getElementById("addCoApplicantSalary");

    let count = 0;

    // Show / Hide Co-Applicant Section
    checkbox.onchange = function () {
        section.style.display = this.checked ? "block" : "none";
    };

    // Prevent duplicate click events
    addBtn.onclick = function () {

        count++;

        const html = `
        <div class="card border mb-3 coApplicantCard">

            <div class="card-header d-flex justify-content-between align-items-center">
                <h6 class="mb-0">Co Applicant ${count}</h6>

                <button type="button"
                        class="btn btn-danger btn-sm removeCoApplicantSalary">
                    Remove
                </button>
            </div>

            <div class="card-body">

                <div class="row">

                    <div class="col-md-6">
                        <label>Full Name</label>
                        <input type="text"
                               name="co_name[]"
                               class="form-control coApplicantName"
                               placeholder="Enter full name"
                               pattern="[A-Za-z\\s]+">
                        <small class="text-muted">Only letters allowed</small>
                    </div>

                    <div class="col-md-6">
                        <label>Phone Number</label>
                        <input type="text"
                               name="co_phone[]"
                               class="form-control coApplicantPhone"
                               placeholder="Enter phone number"
                               pattern="[0-9]{10}"
                               maxlength="10">
                        <small class="text-muted">Enter 10 digits only</small>
                    </div>

                </div>

                <hr>

                <label class="fw-bold">Applicant Type</label>
                <br><br>

                <div class="btn-group" role="group">
                    <button type="button"
                            class="btn btn-primary coApplicantSalaryBtn"
                            data-index="${count}">
                        Salaried
                    </button>

                    <button type="button"
                            class="btn btn-outline-primary coApplicantBusinessBtn"
                            data-index="${count}">
                        Business
                    </button>
                </div>

                <hr>

                <!-- Co-Applicant Salaried Section -->
                <div class="coApplicantSalarySection" id="coSalarySection_${count}" style="display:block;">
                    
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-white">
                            <h4 class="mb-0">Income Details</h4>
                        </div>
                        <div class="card-body">

                            <label class="fw-bold">Basic Salary</label>

                            <div class="row mt-3">
                                <div class="col-md-4">
                                    <div class="border rounded p-3">
                                        <div class="form-check">
                                            <input class="form-check-input coSalaryCheck" type="checkbox" id="co_month1_${count}">
                                            <label class="form-check-label fw-bold" for="co_month1_${count}">First Month</label>
                                        </div>
                                        <input type="number"
                                               name="co_basic_salary_1[]"
                                               class="form-control mt-3 coSalaryInput"
                                               placeholder="Enter Salary"
                                               min="0"
                                               step="0.01"
                                               oninput="validateNonNegative(this)">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="border rounded p-3">
                                        <div class="form-check">
                                            <input class="form-check-input coSalaryCheck" type="checkbox" id="co_month2_${count}">
                                            <label class="form-check-label fw-bold" for="co_month2_${count}">Second Month</label>
                                        </div>
                                        <input type="number"
                                               name="co_basic_salary_2[]"
                                               class="form-control mt-3 coSalaryInput"
                                               placeholder="Enter Salary"
                                               min="0"
                                               step="0.01"
                                               oninput="validateNonNegative(this)">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="border rounded p-3">
                                        <div class="form-check">
                                            <input class="form-check-input coSalaryCheck" type="checkbox" id="co_month3_${count}">
                                            <label class="form-check-label fw-bold" for="co_month3_${count}">Third Month</label>
                                        </div>
                                        <input type="number"
                                               name="co_basic_salary_3[]"
                                               class="form-control mt-3 coSalaryInput"
                                               placeholder="Enter Salary"
                                               min="0"
                                               step="0.01"
                                               oninput="validateNonNegative(this)">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4 p-3 bg-light rounded">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <label class="fw-bold">Average Monthly Salary</label>
                                        <small class="d-block text-muted">Average will be calculated from selected months</small>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text"
                                               class="form-control form-control-lg text-primary fw-bold coAverageSalary"
                                               readonly
                                               style="font-size: 1.5rem;">
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <label>Provident Fund Monthly</label>
                                    <div class="input-group">
                                        <span class="input-group-text">₹</span>
                                        <input type="number"
                                               name="co_provident_fund_monthly[]"
                                               class="form-control"
                                               value="0"
                                               min="0"
                                               step="0.01"
                                               oninput="validateNonNegative(this)">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Professional Tax Monthly</label>
                                    <div class="input-group">
                                        <span class="input-group-text">₹</span>
                                        <input type="number"
                                               name="co_professional_tax_monthly[]"
                                               class="form-control"
                                               value="0"
                                               min="0"
                                               step="0.01"
                                               oninput="validateNonNegative(this)">
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <label>Income Tax (Yearly)</label>
                                    <div class="input-group">
                                        <span class="input-group-text">₹</span>
                                        <input type="number"
                                               name="co_income_tax_yearly[]"
                                               class="form-control coIncomeTax"
                                               value="0"
                                               min="0"
                                               oninput="validateNonNegative(this)">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Monthly Tax</label>
                                    <div class="input-group">
                                        <span class="input-group-text">₹</span>
                                        <input type="text"
                                               class="form-control coMonthlyTax"
                                               readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow-sm mt-4">
                                <div class="card-header bg-white">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h4 class="mb-0">Tax & Deductions</h4>
                                        <button type="button"
                                                class="btn btn-primary coAddDeduction btn-sm"
                                                data-index="${count}">
                                            + Add Deduction
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <label class="fw-bold mb-3">Monthly Deductions</label>
                                    <div class="coDeductionContainer" id="coDeductionContainer_${count}">
                                        <p class="text-muted text-center">No deductions added yet</p>
                                    </div>
                                </div>
                            </div>

                            <input type="hidden"
                                   class="co_monthly_deductions"
                                   name="co_monthly_deductions[]"
                                   data-index="${count}">

                        </div>
                    </div>

                </div>

                <!-- Co-Applicant Business Section -->
                <div class="coApplicantBusinessSection" id="coBusinessSection_${count}" style="display:none;">
                    
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-white">
                            <h4 class="mb-0">Income Details</h4>
                        </div>
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="border rounded p-3">
                                        <label class="fw-bold">Current Year</label>
                                        <input type="number"
                                               name="co_business_current_year[]"
                                               class="form-control mt-2 coBusinessInput"
                                               placeholder="Enter Income"
                                               min="0"
                                               step="0.01"
                                               oninput="validateNonNegative(this)">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="border rounded p-3">
                                        <label class="fw-bold">Previous Year</label>
                                        <input type="number"
                                               name="co_business_previous_year[]"
                                               class="form-control mt-2 coBusinessInput"
                                               placeholder="Enter Income"
                                               min="0"
                                               step="0.01"
                                               oninput="validateNonNegative(this)">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="border rounded p-3">
                                        <label class="fw-bold">Second Previous Year</label>
                                        <input type="number"
                                               name="co_business_second_previous_year[]"
                                               class="form-control mt-2 coBusinessInput"
                                               placeholder="Enter Income"
                                               min="0"
                                               step="0.01"
                                               oninput="validateNonNegative(this)">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4 p-3 bg-light rounded">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <label class="fw-bold">Average Business Income</label>
                                        <small class="d-block text-muted">Average will be calculated from selected years</small>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text"
                                               class="form-control form-control-lg text-primary fw-bold coBusinessAverage"
                                               readonly
                                               style="font-size: 1.5rem;">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Remuneration Income -->
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-white d-flex justify-content-between">
                            <strong>Remuneration Income</strong>
                            <button type="button"
                                    class="btn btn-primary btn-sm coAddRemuneration"
                                    data-index="${count}">
                                + Add
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="coRemunerationContainer" id="coRemunerationContainer_${count}">
                                <p class="text-muted text-center">No remuneration income added yet</p>
                            </div>
                        </div>
                    </div>

                    <!-- Rental Income -->
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-white d-flex justify-content-between">
                            <strong>Rental Income</strong>
                            <button type="button"
                                    class="btn btn-primary btn-sm coAddRental"
                                    data-index="${count}">
                                + Add
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="coRentalContainer" id="coRentalContainer_${count}">
                                <p class="text-muted text-center">No rental income added yet</p>
                            </div>
                        </div>
                    </div>

                    <!-- Profit Share Income -->
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-white d-flex justify-content-between">
                            <strong>Profit Share Income</strong>
                            <button type="button"
                                    class="btn btn-primary btn-sm coAddProfit"
                                    data-index="${count}">
                                + Add
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="coProfitContainer" id="coProfitContainer_${count}">
                                <p class="text-muted text-center">No profit share income added yet</p>
                            </div>
                        </div>
                    </div>

                    <!-- Agriculture Income -->
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-white d-flex justify-content-between">
                            <strong>Agriculture Income</strong>
                            <button type="button"
                                    class="btn btn-primary btn-sm coAddAgriculture"
                                    data-index="${count}">
                                + Add
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="coAgricultureContainer" id="coAgricultureContainer_${count}">
                                <p class="text-muted text-center">No agriculture income added yet</p>
                            </div>
                        </div>
                    </div>

                    <!-- Income Tax for Business -->
                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Income Tax (Yearly)</label>
                                    <div class="input-group">
                                        <span class="input-group-text">₹</span>
                                        <input type="number"
                                               name="co_business_income_tax_yearly[]"
                                               class="form-control coBusinessIncomeTax"
                                               value="0"
                                               min="0"
                                               oninput="validateNonNegative(this)">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Monthly Tax</label>
                                    <div class="input-group">
                                        <span class="input-group-text">₹</span>
                                        <input type="text"
                                               class="form-control coBusinessMonthlyTax"
                                               readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tax & Deductions for Business Co-Applicant -->
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-white">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="mb-0">Tax & Deductions</h4>
                                <button type="button"
                                        class="btn btn-primary coBusinessAddDeduction btn-sm"
                                        data-index="${count}">
                                    + Add Deduction
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <label class="fw-bold mb-3">Monthly Deductions</label>
                            <div class="coBusinessDeductionContainer" id="coBusinessDeductionContainer_${count}">
                                <p class="text-muted text-center">No deductions added yet</p>
                            </div>
                        </div>
                    </div>

                    <input type="hidden"
                           class="co_business_monthly_deductions"
                           name="co_business_monthly_deductions[]"
                           data-index="${count}">

                </div>

            </div>

        </div>
        `;

        container.insertAdjacentHTML("beforeend", html);

        // Initialize co-applicant functionality for this instance
        initializeCoApplicant(count);
        
        // Add validation for co-applicant fields
        addCoApplicantValidation();

    };

});

// ================= BUSINESS CO-APPLICANT SCRIPT =================
document.addEventListener("DOMContentLoaded", function () {

    const checkbox = document.getElementById("hasCoApplicantBusiness");
    const section = document.getElementById("coApplicantSectionBusiness");
    const container = document.getElementById("coApplicantContainerBusiness");
    const addBtn = document.getElementById("addCoApplicantBusiness");

    let count = 0;

    // Show / Hide Co-Applicant Section
    checkbox.onchange = function () {
        section.style.display = this.checked ? "block" : "none";
    };

    // Prevent duplicate click events
    addBtn.onclick = function () {

        count++;

        const html = `
        <div class="card border mb-3 coApplicantCard">

            <div class="card-header d-flex justify-content-between align-items-center">
                <h6 class="mb-0">Co Applicant ${count}</h6>

                <button type="button"
                        class="btn btn-danger btn-sm removeCoApplicantBusiness">
                    Remove
                </button>
            </div>

            <div class="card-body">

                <div class="row">

                    <div class="col-md-6">
                        <label>Full Name</label>
                        <input type="text"
                               name="co_name[]"
                               class="form-control coApplicantName"
                               placeholder="Enter full name"
                               pattern="[A-Za-z\\s]+">
                        <small class="text-muted">Only letters allowed</small>
                    </div>

                    <div class="col-md-6">
                        <label>Phone Number</label>
                        <input type="text"
                               name="co_phone[]"
                               class="form-control coApplicantPhone"
                               placeholder="Enter phone number"
                               pattern="[0-9]{10}"
                               maxlength="10">
                        <small class="text-muted">Enter 10 digits only</small>
                    </div>

                </div>

                <hr>

                <label class="fw-bold">Applicant Type</label>
                <br><br>

                <div class="btn-group" role="group">
                    <button type="button"
                            class="btn btn-primary coApplicantSalaryBtn"
                            data-index="${count}">
                        Salaried
                    </button>

                    <button type="button"
                            class="btn btn-outline-primary coApplicantBusinessBtn"
                            data-index="${count}">
                        Business
                    </button>
                </div>

                <hr>

                <!-- Co-Applicant Salaried Section -->
                <div class="coApplicantSalarySection" id="coSalarySection_${count}" style="display:block;">
                    
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-white">
                            <h4 class="mb-0">Income Details</h4>
                        </div>
                        <div class="card-body">

                            <label class="fw-bold">Basic Salary</label>

                            <div class="row mt-3">
                                <div class="col-md-4">
                                    <div class="border rounded p-3">
                                        <div class="form-check">
                                            <input class="form-check-input coSalaryCheck" type="checkbox" id="co_month1_${count}">
                                            <label class="form-check-label fw-bold" for="co_month1_${count}">First Month</label>
                                        </div>
                                        <input type="number"
                                               name="co_basic_salary_1[]"
                                               class="form-control mt-3 coSalaryInput"
                                               placeholder="Enter Salary"
                                               min="0"
                                               step="0.01"
                                               oninput="validateNonNegative(this)">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="border rounded p-3">
                                        <div class="form-check">
                                            <input class="form-check-input coSalaryCheck" type="checkbox" id="co_month2_${count}">
                                            <label class="form-check-label fw-bold" for="co_month2_${count}">Second Month</label>
                                        </div>
                                        <input type="number"
                                               name="co_basic_salary_2[]"
                                               class="form-control mt-3 coSalaryInput"
                                               placeholder="Enter Salary"
                                               min="0"
                                               step="0.01"
                                               oninput="validateNonNegative(this)">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="border rounded p-3">
                                        <div class="form-check">
                                            <input class="form-check-input coSalaryCheck" type="checkbox" id="co_month3_${count}">
                                            <label class="form-check-label fw-bold" for="co_month3_${count}">Third Month</label>
                                        </div>
                                        <input type="number"
                                               name="co_basic_salary_3[]"
                                               class="form-control mt-3 coSalaryInput"
                                               placeholder="Enter Salary"
                                               min="0"
                                               step="0.01"
                                               oninput="validateNonNegative(this)">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4 p-3 bg-light rounded">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <label class="fw-bold">Average Monthly Salary</label>
                                        <small class="d-block text-muted">Average will be calculated from selected months</small>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text"
                                               class="form-control form-control-lg text-primary fw-bold coAverageSalary"
                                               readonly
                                               style="font-size: 1.5rem;">
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <label>Provident Fund Monthly</label>
                                    <div class="input-group">
                                        <span class="input-group-text">₹</span>
                                        <input type="number"
                                               name="co_provident_fund_monthly[]"
                                               class="form-control"
                                               value="0"
                                               min="0"
                                               step="0.01"
                                               oninput="validateNonNegative(this)">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Professional Tax Monthly</label>
                                    <div class="input-group">
                                        <span class="input-group-text">₹</span>
                                        <input type="number"
                                               name="co_professional_tax_monthly[]"
                                               class="form-control"
                                               value="0"
                                               min="0"
                                               step="0.01"
                                               oninput="validateNonNegative(this)">
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <label>Income Tax (Yearly)</label>
                                    <div class="input-group">
                                        <span class="input-group-text">₹</span>
                                        <input type="number"
                                               name="co_income_tax_yearly[]"
                                               class="form-control coIncomeTax"
                                               value="0"
                                               min="0"
                                               oninput="validateNonNegative(this)">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Monthly Tax</label>
                                    <div class="input-group">
                                        <span class="input-group-text">₹</span>
                                        <input type="text"
                                               class="form-control coMonthlyTax"
                                               readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow-sm mt-4">
                                <div class="card-header bg-white">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h4 class="mb-0">Tax & Deductions</h4>
                                        <button type="button"
                                                class="btn btn-primary coAddDeduction btn-sm"
                                                data-index="${count}">
                                            + Add Deduction
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <label class="fw-bold mb-3">Monthly Deductions</label>
                                    <div class="coDeductionContainer" id="coDeductionContainer_${count}">
                                        <p class="text-muted text-center">No deductions added yet</p>
                                    </div>
                                </div>
                            </div>

                            <input type="hidden"
                                   class="co_monthly_deductions"
                                   name="co_monthly_deductions[]"
                                   data-index="${count}">

                        </div>
                    </div>

                </div>

                <!-- Co-Applicant Business Section -->
                <div class="coApplicantBusinessSection" id="coBusinessSection_${count}" style="display:none;">
                    
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-white">
                            <h4 class="mb-0">Income Details</h4>
                        </div>
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="border rounded p-3">
                                        <label class="fw-bold">Current Year</label>
                                        <input type="number"
                                               name="co_business_current_year[]"
                                               class="form-control mt-2 coBusinessInput"
                                               placeholder="Enter Income"
                                               min="0"
                                               step="0.01"
                                               oninput="validateNonNegative(this)">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="border rounded p-3">
                                        <label class="fw-bold">Previous Year</label>
                                        <input type="number"
                                               name="co_business_previous_year[]"
                                               class="form-control mt-2 coBusinessInput"
                                               placeholder="Enter Income"
                                               min="0"
                                               step="0.01"
                                               oninput="validateNonNegative(this)">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="border rounded p-3">
                                        <label class="fw-bold">Second Previous Year</label>
                                        <input type="number"
                                               name="co_business_second_previous_year[]"
                                               class="form-control mt-2 coBusinessInput"
                                               placeholder="Enter Income"
                                               min="0"
                                               step="0.01"
                                               oninput="validateNonNegative(this)">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4 p-3 bg-light rounded">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <label class="fw-bold">Average Business Income</label>
                                        <small class="d-block text-muted">Average will be calculated from selected years</small>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text"
                                               class="form-control form-control-lg text-primary fw-bold coBusinessAverage"
                                               readonly
                                               style="font-size: 1.5rem;">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Remuneration Income -->
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-white d-flex justify-content-between">
                            <strong>Remuneration Income</strong>
                            <button type="button"
                                    class="btn btn-primary btn-sm coAddRemuneration"
                                    data-index="${count}">
                                + Add
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="coRemunerationContainer" id="coRemunerationContainer_${count}">
                                <p class="text-muted text-center">No remuneration income added yet</p>
                            </div>
                        </div>
                    </div>

                    <!-- Rental Income -->
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-white d-flex justify-content-between">
                            <strong>Rental Income</strong>
                            <button type="button"
                                    class="btn btn-primary btn-sm coAddRental"
                                    data-index="${count}">
                                + Add
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="coRentalContainer" id="coRentalContainer_${count}">
                                <p class="text-muted text-center">No rental income added yet</p>
                            </div>
                        </div>
                    </div>

                    <!-- Profit Share Income -->
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-white d-flex justify-content-between">
                            <strong>Profit Share Income</strong>
                            <button type="button"
                                    class="btn btn-primary btn-sm coAddProfit"
                                    data-index="${count}">
                                + Add
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="coProfitContainer" id="coProfitContainer_${count}">
                                <p class="text-muted text-center">No profit share income added yet</p>
                            </div>
                        </div>
                    </div>

                    <!-- Agriculture Income -->
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-white d-flex justify-content-between">
                            <strong>Agriculture Income</strong>
                            <button type="button"
                                    class="btn btn-primary btn-sm coAddAgriculture"
                                    data-index="${count}">
                                + Add
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="coAgricultureContainer" id="coAgricultureContainer_${count}">
                                <p class="text-muted text-center">No agriculture income added yet</p>
                            </div>
                        </div>
                    </div>

                    <!-- Income Tax for Business -->
                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Income Tax (Yearly)</label>
                                    <div class="input-group">
                                        <span class="input-group-text">₹</span>
                                        <input type="number"
                                               name="co_business_income_tax_yearly[]"
                                               class="form-control coBusinessIncomeTax"
                                               value="0"
                                               min="0"
                                               oninput="validateNonNegative(this)">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Monthly Tax</label>
                                    <div class="input-group">
                                        <span class="input-group-text">₹</span>
                                        <input type="text"
                                               class="form-control coBusinessMonthlyTax"
                                               readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tax & Deductions for Business Co-Applicant -->
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-white">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="mb-0">Tax & Deductions</h4>
                                <button type="button"
                                        class="btn btn-primary coBusinessAddDeduction btn-sm"
                                        data-index="${count}">
                                    + Add Deduction
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <label class="fw-bold mb-3">Monthly Deductions</label>
                            <div class="coBusinessDeductionContainer" id="coBusinessDeductionContainer_${count}">
                                <p class="text-muted text-center">No deductions added yet</p>
                            </div>
                        </div>
                    </div>

                    <input type="hidden"
                           class="co_business_monthly_deductions"
                           name="co_business_monthly_deductions[]"
                           data-index="${count}">

                </div>

            </div>

        </div>
        `;

        container.insertAdjacentHTML("beforeend", html);

        // Initialize co-applicant functionality for this instance
        initializeCoApplicant(count);
        
        // Add validation for co-applicant fields
        addCoApplicantValidation();

    };

});

// Function to add validation for co-applicant fields
function addCoApplicantValidation() {
    // Co-applicant Name validation
    document.querySelectorAll('.coApplicantName').forEach(function(input) {
        input.addEventListener('input', function() {
            validateName(this);
        });
        
        input.addEventListener('keypress', function(e) {
            const key = e.key;
            if (!/^[a-zA-Z\s]$/.test(key) && key !== 'Backspace' && key !== 'Delete' && key !== 'Tab') {
                e.preventDefault();
            }
        });
    });
    
    // Co-applicant Phone validation
    document.querySelectorAll('.coApplicantPhone').forEach(function(input) {
        input.addEventListener('input', function() {
            validatePhone(this);
        });
        
        input.addEventListener('keypress', function(e) {
            const key = e.key;
            if (!/^[0-9]$/.test(key) && key !== 'Backspace' && key !== 'Delete' && key !== 'Tab') {
                e.preventDefault();
            }
        });
    });
}

// Function to initialize co-applicant functionality
function initializeCoApplicant(index) {

    // Salary/Business toggle for co-applicant
    const salaryBtn = document.querySelector(`.coApplicantSalaryBtn[data-index="${index}"]`);
    const businessBtn = document.querySelector(`.coApplicantBusinessBtn[data-index="${index}"]`);
    const salarySection = document.getElementById(`coSalarySection_${index}`);
    const businessSection = document.getElementById(`coBusinessSection_${index}`);

    if (salaryBtn && businessBtn) {
        salaryBtn.onclick = function() {
            salaryBtn.classList.remove('btn-outline-primary');
            salaryBtn.classList.add('btn-primary');
            businessBtn.classList.remove('btn-primary');
            businessBtn.classList.add('btn-outline-primary');
            salarySection.style.display = 'block';
            businessSection.style.display = 'none';
        };

        businessBtn.onclick = function() {
            businessBtn.classList.remove('btn-outline-primary');
            businessBtn.classList.add('btn-primary');
            salaryBtn.classList.remove('btn-primary');
            salaryBtn.classList.add('btn-outline-primary');
            salarySection.style.display = 'none';
            businessSection.style.display = 'block';
        };
    }

    // Calculate average salary for co-applicant
    const salaryInputs = document.querySelectorAll(`#coSalarySection_${index} .coSalaryInput`);
    const avgField = document.querySelector(`#coSalarySection_${index} .coAverageSalary`);

    salaryInputs.forEach(function(input) {
        input.addEventListener('keyup', function() {
            let total = 0;
            let count = 0;
            document.querySelectorAll(`#coSalarySection_${index} .coSalaryInput`).forEach(function(item) {
                if (item.value != "" && parseFloat(item.value) >= 0) {
                    total += parseFloat(item.value);
                    count++;
                }
            });
            let avg = 0;
            if (count > 0) {
                avg = total / count;
            }
            avgField.value = avg.toFixed(2);
        });
    });

    // Calculate monthly tax for co-applicant (salary)
    const incomeTax = document.querySelector(`#coSalarySection_${index} .coIncomeTax`);
    const monthlyTax = document.querySelector(`#coSalarySection_${index} .coMonthlyTax`);

    if (incomeTax) {
        incomeTax.addEventListener('keyup', function() {
            let tax = parseFloat(this.value) || 0;
            if (tax < 0) tax = 0;
            let monthly = (tax / 12).toFixed(2);
            monthlyTax.value = monthly;
        });
    }

    // Co-applicant salary deductions
    const addDeductionBtn = document.querySelector(`.coAddDeduction[data-index="${index}"]`);
    const deductionContainer = document.getElementById(`coDeductionContainer_${index}`);
    const hiddenField = document.querySelector(`.co_monthly_deductions[data-index="${index}"]`);

    if (addDeductionBtn) {
        addDeductionBtn.onclick = function() {
            // Remove "No deductions" message
            const emptyText = deductionContainer.querySelector("p");
            if (emptyText) {
                emptyText.remove();
            }

            const row = document.createElement("div");
            row.className = "row mb-3 coDeductionRow";
            row.innerHTML = `
                <div class="col-md-5">
                    <input type="text"
                           name="co_deduction_name_${index}[]"
                           class="form-control"
                           placeholder="Deduction Name">
                </div>
                <div class="col-md-5">
                    <input type="number"
                           name="co_deduction_amount_${index}[]"
                           class="form-control coDeductionAmount"
                           value="0"
                           min="0"
                           oninput="validateNonNegative(this)">
                </div>
                <div class="col-md-2 d-flex align-items-center">
                    <a href="#" class="text-danger coRemoveDeduction">Remove</a>
                </div>
            `;
            deductionContainer.appendChild(row);
            updateCoDeductionTotal(index);
        };
    }

    // Remove co-applicant salary deduction
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('coRemoveDeduction')) {
            e.target.closest('.coDeductionRow').remove();
            
            // Show message if no deductions
            const container = document.getElementById(`coDeductionContainer_${index}`);
            if (container.querySelectorAll('.coDeductionRow').length === 0) {
                container.innerHTML = '<p class="text-muted text-center">No deductions added yet</p>';
            }
            
            updateCoDeductionTotal(index);
        }
    });

    // Update co-applicant salary deduction total
    document.addEventListener('input', function(e) {
        if (e.target.classList.contains('coDeductionAmount')) {
            updateCoDeductionTotal(index);
        }
    });

    function updateCoDeductionTotal(idx) {
        let total = 0;
        document.querySelectorAll(`#coDeductionContainer_${idx} .coDeductionAmount`).forEach(function(item) {
            let val = parseFloat(item.value) || 0;
            if (val < 0) val = 0;
            total += val;
        });
        const hidden = document.querySelector(`.co_monthly_deductions[data-index="${idx}"]`);
        if (hidden) {
            hidden.value = total;
        }
    }

    // Co-applicant business average
    const businessInputs = document.querySelectorAll(`#coBusinessSection_${index} .coBusinessInput`);
    const businessAvg = document.querySelector(`#coBusinessSection_${index} .coBusinessAverage`);

    businessInputs.forEach(function(input) {
        input.addEventListener('keyup', function() {
            let total = 0;
            let count = 0;
            document.querySelectorAll(`#coBusinessSection_${index} .coBusinessInput`).forEach(function(item) {
                if (item.value != "" && parseFloat(item.value) >= 0) {
                    total += parseFloat(item.value);
                    count++;
                }
            });
            let avg = 0;
            if (count > 0) {
                avg = total / count;
            }
            businessAvg.value = avg.toFixed(2);
        });
    });

    // Co-applicant business monthly tax
    const businessTax = document.querySelector(`#coBusinessSection_${index} .coBusinessIncomeTax`);
    const businessMonthlyTax = document.querySelector(`#coBusinessSection_${index} .coBusinessMonthlyTax`);

    if (businessTax) {
        businessTax.addEventListener('keyup', function() {
            let tax = parseFloat(this.value) || 0;
            if (tax < 0) tax = 0;
            let monthly = (tax / 12).toFixed(2);
            businessMonthlyTax.value = monthly;
        });
    }

    // Co-applicant remuneration
    const addRemuneration = document.querySelector(`.coAddRemuneration[data-index="${index}"]`);
    const remContainer = document.getElementById(`coRemunerationContainer_${index}`);

    if (addRemuneration) {
        addRemuneration.onclick = function() {
            const emptyText = remContainer.querySelector("p");
            if (emptyText) emptyText.remove();
            remContainer.insertAdjacentHTML("beforeend", `
                <div class="row mb-3 coRemunerationRow">
                    <div class="col-md-5">
                        <input type="text"
                               name="co_remuneration_source_${index}[]"
                               class="form-control"
                               placeholder="Remuneration Source">
                    </div>
                    <div class="col-md-5">
                        <input type="number"
                               name="co_remuneration_income_${index}[]"
                               class="form-control"
                               placeholder="0"
                               min="0"
                               step="0.01"
                               oninput="validateNonNegative(this)">
                    </div>
                    <div class="col-md-2 d-flex align-items-center">
                        <a href="#" class="text-danger coRemoveRemuneration">Remove</a>
                    </div>
                </div>
            `);
        };
    }

    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('coRemoveRemuneration')) {
            e.target.closest('.coRemunerationRow').remove();
            const container = e.target.closest('.coRemunerationContainer');
            if (container.querySelectorAll('.coRemunerationRow').length === 0) {
                container.innerHTML = '<p class="text-muted text-center">No remuneration income added yet</p>';
            }
        }
    });

    // Co-applicant rental
    const addRental = document.querySelector(`.coAddRental[data-index="${index}"]`);
    const rentContainer = document.getElementById(`coRentalContainer_${index}`);

    if (addRental) {
        addRental.onclick = function() {
            const emptyText = rentContainer.querySelector("p");
            if (emptyText) emptyText.remove();
            rentContainer.insertAdjacentHTML("beforeend", `
                <div class="row mb-3 coRentalRow">
                    <div class="col-md-5">
                        <input type="text"
                               name="co_rental_source_${index}[]"
                               class="form-control"
                               placeholder="Rental Source">
                    </div>
                    <div class="col-md-5">
                        <input type="number"
                               name="co_rental_income_${index}[]"
                               class="form-control"
                               placeholder="0"
                               min="0"
                               step="0.01"
                               oninput="validateNonNegative(this)">
                    </div>
                    <div class="col-md-2 d-flex align-items-center">
                        <a href="#" class="text-danger coRemoveRental">Remove</a>
                    </div>
                </div>
            `);
        };
    }

    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('coRemoveRental')) {
            e.target.closest('.coRentalRow').remove();
            const container = e.target.closest('.coRentalContainer');
            if (container.querySelectorAll('.coRentalRow').length === 0) {
                container.innerHTML = '<p class="text-muted text-center">No rental income added yet</p>';
            }
        }
    });

    // Co-applicant profit
    const addProfit = document.querySelector(`.coAddProfit[data-index="${index}"]`);
    const profitContainer = document.getElementById(`coProfitContainer_${index}`);

    if (addProfit) {
        addProfit.onclick = function() {
            const emptyText = profitContainer.querySelector("p");
            if (emptyText) emptyText.remove();
            profitContainer.insertAdjacentHTML("beforeend", `
                <div class="row mb-3 coProfitRow">
                    <div class="col-md-5">
                        <input type="text"
                               name="co_profit_source_${index}[]"
                               class="form-control"
                               placeholder="Profit Share Source">
                    </div>
                    <div class="col-md-5">
                        <input type="number"
                               name="co_profit_income_${index}[]"
                               class="form-control"
                               placeholder="0"
                               min="0"
                               step="0.01"
                               oninput="validateNonNegative(this)">
                    </div>
                    <div class="col-md-2 d-flex align-items-center">
                        <a href="#" class="text-danger coRemoveProfit">Remove</a>
                    </div>
                </div>
            `);
        };
    }

    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('coRemoveProfit')) {
            e.target.closest('.coProfitRow').remove();
            const container = e.target.closest('.coProfitContainer');
            if (container.querySelectorAll('.coProfitRow').length === 0) {
                container.innerHTML = '<p class="text-muted text-center">No profit share income added yet</p>';
            }
        }
    });

    // Co-applicant agriculture
    const addAgriculture = document.querySelector(`.coAddAgriculture[data-index="${index}"]`);
    const agriContainer = document.getElementById(`coAgricultureContainer_${index}`);

    if (addAgriculture) {
        addAgriculture.onclick = function() {
            const emptyText = agriContainer.querySelector("p");
            if (emptyText) emptyText.remove();
            agriContainer.insertAdjacentHTML("beforeend", `
                <div class="row mb-3 coAgricultureRow">
                    <div class="col-md-5">
                        <input type="text"
                               name="co_agriculture_source_${index}[]"
                               class="form-control"
                               placeholder="Agriculture Source">
                    </div>
                    <div class="col-md-5">
                        <input type="number"
                               name="co_agriculture_income_${index}[]"
                               class="form-control"
                               placeholder="0"
                               min="0"
                               step="0.01"
                               oninput="validateNonNegative(this)">
                    </div>
                    <div class="col-md-2 d-flex align-items-center">
                        <a href="#" class="text-danger coRemoveAgriculture">Remove</a>
                    </div>
                </div>
            `);
        };
    }

    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('coRemoveAgriculture')) {
            e.target.closest('.coAgricultureRow').remove();
            const container = e.target.closest('.coAgricultureContainer');
            if (container.querySelectorAll('.coAgricultureRow').length === 0) {
                container.innerHTML = '<p class="text-muted text-center">No agriculture income added yet</p>';
            }
        }
    });

    // Co-applicant business deductions
    const addBusinessDeductionBtn = document.querySelector(`.coBusinessAddDeduction[data-index="${index}"]`);
    const businessDeductionContainer = document.getElementById(`coBusinessDeductionContainer_${index}`);
    const businessHiddenField = document.querySelector(`.co_business_monthly_deductions[data-index="${index}"]`);

    if (addBusinessDeductionBtn) {
        addBusinessDeductionBtn.onclick = function() {
            // Remove "No deductions" message
            const emptyText = businessDeductionContainer.querySelector("p");
            if (emptyText) {
                emptyText.remove();
            }

            const row = document.createElement("div");
            row.className = "row mb-3 coBusinessDeductionRow";
            row.innerHTML = `
                <div class="col-md-5">
                    <input type="text"
                           name="co_business_deduction_name_${index}[]"
                           class="form-control"
                           placeholder="Deduction Name">
                </div>
                <div class="col-md-5">
                    <input type="number"
                           name="co_business_deduction_amount_${index}[]"
                           class="form-control coBusinessDeductionAmount"
                           value="0"
                           min="0"
                           oninput="validateNonNegative(this)">
                </div>
                <div class="col-md-2 d-flex align-items-center">
                    <a href="#" class="text-danger coRemoveBusinessDeduction">Remove</a>
                </div>
            `;
            businessDeductionContainer.appendChild(row);
            updateCoBusinessDeductionTotal(index);
        };
    }

    // Remove co-applicant business deduction
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('coRemoveBusinessDeduction')) {
            e.target.closest('.coBusinessDeductionRow').remove();
            
            // Show message if no deductions
            const container = document.getElementById(`coBusinessDeductionContainer_${index}`);
            if (container.querySelectorAll('.coBusinessDeductionRow').length === 0) {
                container.innerHTML = '<p class="text-muted text-center">No deductions added yet</p>';
            }
            
            updateCoBusinessDeductionTotal(index);
        }
    });

    // Update co-applicant business deduction total
    document.addEventListener('input', function(e) {
        if (e.target.classList.contains('coBusinessDeductionAmount')) {
            updateCoBusinessDeductionTotal(index);
        }
    });

    function updateCoBusinessDeductionTotal(idx) {
        let total = 0;
        document.querySelectorAll(`#coBusinessDeductionContainer_${idx} .coBusinessDeductionAmount`).forEach(function(item) {
            let val = parseFloat(item.value) || 0;
            if (val < 0) val = 0;
            total += val;
        });
        const hidden = document.querySelector(`.co_business_monthly_deductions[data-index="${idx}"]`);
        if (hidden) {
            hidden.value = total;
        }
    }

}

// Remove Co-Applicant for Salary
document.addEventListener("click", function (e) {
    if (e.target.classList.contains("removeCoApplicantSalary")) {
        e.target.closest(".coApplicantCard").remove();
    }
});

// Remove Co-Applicant for Business
document.addEventListener("click", function (e) {
    if (e.target.classList.contains("removeCoApplicantBusiness")) {
        e.target.closest(".coApplicantCard").remove();
    }
});

// ================= BUSINESS SECTION ADD BUTTONS =================
function initializeBusinessAddButtons() {
    
    // Remove any existing event listeners by cloning and replacing
    const addRemuneration = document.getElementById('addRemuneration');
    const remunerationContainer = document.getElementById('remunerationContainer');
    
    if (addRemuneration) {
        // Clone and replace to remove old listeners
        const newAddRemuneration = addRemuneration.cloneNode(true);
        addRemuneration.parentNode.replaceChild(newAddRemuneration, addRemuneration);
        
        newAddRemuneration.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            const emptyText = remunerationContainer.querySelector('p');
            if (emptyText) emptyText.remove();
            
            const row = document.createElement('div');
            row.className = 'row mb-3 remunerationRow';
            row.innerHTML = `
                <div class="col-md-5">
                    <input type="text"
                           name="remuneration_source[]"
                           class="form-control"
                           placeholder="Remuneration Source">
                </div>
                <div class="col-md-5">
                    <input type="number"
                           name="remuneration_income[]"
                           class="form-control"
                           placeholder="0"
                           min="0"
                           step="0.01"
                           oninput="validateNonNegative(this)">
                </div>
                <div class="col-md-2 d-flex align-items-center">
                    <a href="#" class="text-danger removeRemuneration">Remove</a>
                </div>
            `;
            remunerationContainer.appendChild(row);
        });
    }
    
    // Rental Income
    const addRental = document.getElementById('addRental');
    const rentalContainer = document.getElementById('rentalContainer');
    
    if (addRental) {
        const newAddRental = addRental.cloneNode(true);
        addRental.parentNode.replaceChild(newAddRental, addRental);
        
        newAddRental.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            const emptyText = rentalContainer.querySelector('p');
            if (emptyText) emptyText.remove();
            
            const row = document.createElement('div');
            row.className = 'row mb-3 rentalRow';
            row.innerHTML = `
                <div class="col-md-5">
                    <input type="text"
                           name="rental_source[]"
                           class="form-control"
                           placeholder="Rental Source">
                </div>
                <div class="col-md-5">
                    <input type="number"
                           name="rental_income[]"
                           class="form-control"
                           placeholder="0"
                           min="0"
                           step="0.01"
                           oninput="validateNonNegative(this)">
                </div>
                <div class="col-md-2 d-flex align-items-center">
                    <a href="#" class="text-danger removeRental">Remove</a>
                </div>
            `;
            rentalContainer.appendChild(row);
        });
    }
    
    // Profit Share Income
    const addProfit = document.getElementById('addProfit');
    const profitContainer = document.getElementById('profitContainer');
    
    if (addProfit) {
        const newAddProfit = addProfit.cloneNode(true);
        addProfit.parentNode.replaceChild(newAddProfit, addProfit);
        
        newAddProfit.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            const emptyText = profitContainer.querySelector('p');
            if (emptyText) emptyText.remove();
            
            const row = document.createElement('div');
            row.className = 'row mb-3 profitRow';
            row.innerHTML = `
                <div class="col-md-5">
                    <input type="text"
                           name="profit_source[]"
                           class="form-control"
                           placeholder="Profit Share Source">
                </div>
                <div class="col-md-5">
                    <input type="number"
                           name="profit_income[]"
                           class="form-control"
                           placeholder="0"
                           min="0"
                           step="0.01"
                           oninput="validateNonNegative(this)">
                </div>
                <div class="col-md-2 d-flex align-items-center">
                    <a href="#" class="text-danger removeProfit">Remove</a>
                </div>
            `;
            profitContainer.appendChild(row);
        });
    }
    
    // Agriculture Income
    const addAgriculture = document.getElementById('addAgriculture');
    const agricultureContainer = document.getElementById('agricultureContainer');
    
    if (addAgriculture) {
        const newAddAgriculture = addAgriculture.cloneNode(true);
        addAgriculture.parentNode.replaceChild(newAddAgriculture, addAgriculture);
        
        newAddAgriculture.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            const emptyText = agricultureContainer.querySelector('p');
            if (emptyText) emptyText.remove();
            
            const row = document.createElement('div');
            row.className = 'row mb-3 agricultureRow';
            row.innerHTML = `
                <div class="col-md-5">
                    <input type="text"
                           name="agriculture_source[]"
                           class="form-control"
                           placeholder="Agriculture Source">
                </div>
                <div class="col-md-5">
                    <input type="number"
                           name="agriculture_income[]"
                           class="form-control"
                           placeholder="0"
                           min="0"
                           step="0.01"
                           oninput="validateNonNegative(this)">
                </div>
                <div class="col-md-2 d-flex align-items-center">
                    <a href="#" class="text-danger removeAgriculture">Remove</a>
                </div>
            `;
            agricultureContainer.appendChild(row);
        });
    }
}

// Remove handlers for business section items
document.addEventListener('click', function(e) {
    if (e.target.classList.contains('removeRemuneration')) {
        e.preventDefault();
        e.target.closest('.remunerationRow').remove();
        const container = document.getElementById('remunerationContainer');
        if (container && container.querySelectorAll('.remunerationRow').length === 0) {
            container.innerHTML = '<p class="text-muted text-center">No remuneration income added yet</p>';
        }
    }
    if (e.target.classList.contains('removeRental')) {
        e.preventDefault();
        e.target.closest('.rentalRow').remove();
        const container = document.getElementById('rentalContainer');
        if (container && container.querySelectorAll('.rentalRow').length === 0) {
            container.innerHTML = '<p class="text-muted text-center">No rental income added yet</p>';
        }
    }
    if (e.target.classList.contains('removeProfit')) {
        e.preventDefault();
        e.target.closest('.profitRow').remove();
        const container = document.getElementById('profitContainer');
        if (container && container.querySelectorAll('.profitRow').length === 0) {
            container.innerHTML = '<p class="text-muted text-center">No profit share income added yet</p>';
        }
    }
    if (e.target.classList.contains('removeAgriculture')) {
        e.preventDefault();
        e.target.closest('.agricultureRow').remove();
        const container = document.getElementById('agricultureContainer');
        if (container && container.querySelectorAll('.agricultureRow').length === 0) {
            container.innerHTML = '<p class="text-muted text-center">No agriculture income added yet</p>';
        }
    }
});
</script>
@endpush