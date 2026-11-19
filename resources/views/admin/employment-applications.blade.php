
@extends('layouts.header')

@section('content')

<div class="container-fluid">

    <h3 class="fw-bold mb-4" style="color:#000">QR Applications</h3>

    <div class="card border-0 shadow-sm">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle">

                    <thead class="table-light">
                        <tr>
                            <th>Sr. No.</th>
                            <th>Name</th>
                            <th>Mobile Number</th>
                            <th>Email</th>
                            <!-- <th>Message</th> -->
                            <th>Employment Type</th>
                            <th>Date</th>
                            <th>Status</th>
                             <th>Remark</th>
                             <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($applications as $key => $application)

                            <tr>
                                <td>{{ $applications->firstItem() + $key }}</td>

                                <td>{{ $application->name }}</td>

                                <td>{{ $application->mobile_number }}</td>

                                <td>{{ $application->email ?? '-' }}</td>

                                <!-- <td>{{ $application->message ?? '-' }}</td> -->

                                <td>
                                    @if($application->employment_type == 'salaried')
                                        <span class="badge bg-primary">
                                            Salaried Employee
                                        </span>
                                    @else
                                        <span class="badge bg-success">
                                            Self Employed
                                        </span>
                                    @endif
                                </td>

                                <td>
                                    {{ $application->created_at->format('d-m-Y') }}
                                </td>
                                <td>
    @if($application->status == 'Pending')
        <span class="badge bg-warning text-dark">Pending</span>
    @else
        <span class="badge bg-success">Contacted</span>
    @endif
</td>

<td>{{ $application->remark ?? '-' }}</td>
<td>
    <a href="{{ route('admin.employment-applications.edit', $application->id) }}"
       class="btn btn-sm btn-primary">
        <i class="fas fa-edit"></i> Edit
    </a>
</td>
                            </tr>

                        @empty

                            <tr>
                                <td colspan="7" class="text-center">
                                    No applications found.
                                </td>
                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

            {{ $applications->links() }}

        </div>

    </div>

</div>

@endsection
