@extends('layouts.header')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <h3 class="fw-bold" style="color:#000">
        My Leads
    </h3>

    <a href="{{ route('referraldsa.add.lead') }}"
       class="btn btn-primary">

        <i class="fas fa-plus"></i>
        Add Lead

    </a>

</div>


@if(session('success'))

    <div class="alert alert-success">
        {{ session('success') }}
    </div>

@endif


<div class="card shadow border-0">

    <div class="card-body table-responsive">

        <table class="table table-bordered table-hover align-middle">

            <thead class="table-dark">

                <tr>

                    <th>#</th>

                    <th>Applicant Name</th>

                    <th>Mobile</th>

                    <th>Email</th>

                    <th>Loan Category</th>

                    <th>Loan Amount</th>

                    <th>Status</th>

                    <th>Approved Loan Amount</th>

                    <th>Date</th>

                    <th width="150">
                        Action
                    </th>

                </tr>

            </thead>


            <tbody>

            @forelse($leads as $lead)

                <tr>

                    {{-- # --}}
                    <td>
                        {{ $loop->iteration }}
                    </td>


                    {{-- APPLICANT NAME --}}
                    <td>
                        {{ $lead->customer_name ?? '-' }}
                    </td>


                    {{-- MOBILE --}}
                    <td>
                        {{ $lead->mobile_no ?? '-' }}
                    </td>


                    {{-- EMAIL --}}
                    <td>
                        {{ $lead->email ?? '-' }}
                    </td>


                    {{-- LOAN CATEGORY --}}
                    <td>
                        {{ $lead->category_name ?? '-' }}
                    </td>


                    {{-- LOAN AMOUNT --}}
                    <td>
                        ₹ {{ number_format($lead->loan_amount ?? 0) }}
                    </td>


                    {{-- STATUS --}}
                    <td>

                        @if($lead->status == 'New')

                            <span class="badge bg-primary">
                                New
                            </span>


                        @elseif($lead->status == 'In Progress')

                            <span class="badge bg-warning text-dark">
                                In Progress
                            </span>


                        @elseif($lead->status == 'Approved')

                            <span class="badge bg-success">
                                Approved
                            </span>


                        @elseif($lead->status == 'Rejected')

                            <span class="badge bg-danger">
                                Rejected
                            </span>


                        @elseif($lead->status == 'Closed')

                            <span class="badge bg-dark">
                                Closed
                            </span>


                        @else

                            <span class="badge bg-secondary">
                                {{ $lead->status ?? '-' }}
                            </span>

                        @endif

                    </td>


                    {{-- APPROVED LOAN AMOUNT --}}
                    <td>

                        @if(
                            $lead->status == 'Closed' &&
                            !empty($lead->approved_loan_amount)
                        )

                            <strong>
                                ₹ {{ number_format($lead->approved_loan_amount) }}
                            </strong>

                        @else

                            <span class="text-muted">
                                -
                            </span>

                        @endif

                    </td>


                    {{-- DATE --}}
                    <td>

                        @if($lead->created_at)

                            {{ \Carbon\Carbon::parse($lead->created_at)->format('d M Y') }}

                        @else

                            -

                        @endif

                    </td>


                    {{-- ACTION --}}
            <td>

    {{-- VIEW --}}
    <a href="{{ route('referraldsa.view', $lead->id) }}"
       class="btn btn-sm btn-info text-white"
       title="View">

        <i class="fas fa-eye"></i>

    </a>


    {{-- EDIT --}}
    <a href="{{ route('referraldsa.edit', $lead->id) }}"
       class="btn btn-sm btn-warning"
       title="Edit">

        <i class="fas fa-edit"></i>

    </a>


    {{-- DELETE --}}
    <form
        action="{{ route('referraldsa.delete', $lead->id) }}"
        method="POST"
        class="d-inline"
        onsubmit="return confirm('Are you sure you want to delete this lead?');"
    >

        @csrf
        @method('DELETE')

        <button
            type="submit"
            class="btn btn-sm btn-danger"
            title="Delete"
        >

            <i class="fas fa-trash"></i>

        </button>

    </form>

</td>w

                </tr>

            @empty

                <tr>

                    <td colspan="10"
                        class="text-center py-4">

                        No Leads Found

                    </td>

                </tr>

            @endforelse

            </tbody>

        </table>


        @if(method_exists($leads, 'links'))

            <div class="mt-3">

                {{ $leads->links() }}

            </div>

        @endif

    </div>

</div>

@endsection