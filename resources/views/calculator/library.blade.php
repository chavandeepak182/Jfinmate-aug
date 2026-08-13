@extends('layouts.header')

@section('title', 'Library')

@section('content')

<div class="container-fluid py-4">

    {{-- PAGE TITLE --}}
    <div class="row">
        <div class="col-md-12">

            <h1 class="text-center fw-bold mb-4">
                Loan Eligibility Library
            </h1>

        </div>
    </div>


    {{-- TOP TABS --}}
    <div class="card mb-4">

        <div class="card-body p-2">

            <div class="row">

                {{-- Calculator --}}
                <div class="col-md-6">

                    <a href="{{ route('calculator.index') }}"
                       class="btn btn-light border w-100">

                        <i class="fas fa-calculator me-2"></i>

                        Calculator

                    </a>

                </div>


                {{-- Library --}}
                <div class="col-md-6">

                    <a href="{{ route('calculator.library') }}"
                       class="btn btn-primary w-100">

                        <i class="fas fa-book me-2"></i>

                        Library

                    </a>

                </div>

            </div>

        </div>

    </div>


    {{-- LIBRARY --}}
    <div class="card shadow-lg">

        <div class="card-header bg-info text-white
                    d-flex justify-content-between
                    align-items-center">

            <h4 class="mb-0">

                <i class="fas fa-book me-2"></i>

                Saved Forms

            </h4>


            <span class="badge bg-light text-dark"
                  id="recordCount">

                0 Records

            </span>

        </div>


        <div class="card-body">

            <div id="libraryContent">

                <div class="text-center text-muted py-5">

                    <i class="fas fa-inbox fa-3x mb-3"></i>

                    <h5>No records saved yet</h5>

                    <p>
                        Calculate eligibility and save results
                        to see them here.
                    </p>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection


@push('scripts')

<script>

let savedRecords =
    JSON.parse(localStorage.getItem('eligibilityRecords')) || [];


function renderLibrary()
{

    const container =
        document.getElementById('libraryContent');

    const recordCount =
        document.getElementById('recordCount');


    if (!container) {
        return;
    }


    if (savedRecords.length === 0)
    {

        container.innerHTML = `

            <div class="text-center text-muted py-5">

                <i class="fas fa-inbox fa-3x mb-3"></i>

                <h5>No records saved yet</h5>

                <p>
                    Calculate eligibility and save
                    results to see them here.
                </p>

            </div>

        `;

        recordCount.textContent = '0 Records';

        return;
    }


    recordCount.textContent =
        savedRecords.length + ' Records';


    let html = `<div class="row">`;


    savedRecords.forEach(function(record, index)
    {

        const statusBadge =
            record.status &&
            record.status.includes('Eligible')
                ? 'bg-success'
                : 'bg-danger';


        html += `

            <div class="col-md-6 col-lg-4 mb-4">

                <div class="card h-100 shadow-sm">

                    <div class="card-body">

                        <div class="d-flex
                                    justify-content-between
                                    align-items-start
                                    mb-2">

                            <h5 class="card-title fw-bold">

                                ${record.fullName}

                            </h5>

                            <span class="badge ${statusBadge}">

                                ${record.status}

                            </span>

                        </div>


                        <p class="text-muted small">

                            ${record.date}

                        </p>


                        <div class="mb-2">

                            <small class="text-muted d-block">
                                Type
                            </small>

                            <strong>
                                ${record.applicantType}
                            </strong>

                        </div>


                        <div class="mb-2">

                            <small class="text-muted d-block">
                                Total Income
                            </small>

                            <strong>
                                ${record.totalIncome}
                            </strong>

                        </div>


                        <div class="mb-2">

                            <small class="text-muted d-block">
                                Bank
                            </small>

                            <strong>
                                ${record.bank}
                            </strong>

                        </div>


                        <div class="mb-3">

                            <small class="text-muted d-block">
                                Proposed EMI
                            </small>

                            <strong>
                                ${record.proposedEMI}
                            </strong>

                        </div>


                        <div class="d-flex
                                    justify-content-end
                                    gap-2">

                            <button
                                class="btn btn-sm btn-primary"
                                onclick="viewRecord(${index})">

                                <i class="fas fa-eye"></i>

                            </button>


                            <button
                                class="btn btn-sm btn-danger"
                                onclick="deleteRecord(${index})">

                                <i class="fas fa-trash"></i>

                            </button>

                        </div>

                    </div>

                </div>

            </div>

        `;

    });


    html += `</div>`;


    container.innerHTML = html;

}


function viewRecord(index)
{

    const record = savedRecords[index];

    alert(

        'Name: ' + record.fullName +
        '\nPhone: ' + record.phone +
        '\nEmail: ' + record.email +
        '\nType: ' + record.applicantType +
        '\nBank: ' + record.bank +
        '\nLoan Amount: ₹' + record.loanAmount +
        '\nLoan Tenure: ' + record.loanTenure +
        '\nInterest Rate: ' + record.interestRate +
        '%\nFOIR: ' + record.foir +
        '%\nProposed EMI: ' + record.proposedEMI +
        '\nStatus: ' + record.status

    );

}


function deleteRecord(index)
{

    if (!confirm(
        'Are you sure you want to delete this record?'
    )) {
        return;
    }


    savedRecords.splice(index, 1);


    localStorage.setItem(
        'eligibilityRecords',
        JSON.stringify(savedRecords)
    );


    renderLibrary();


    alert('Record deleted successfully!');

}


document.addEventListener(
    'DOMContentLoaded',
    function()
    {
        renderLibrary();
    }
);

</script>

@endpush