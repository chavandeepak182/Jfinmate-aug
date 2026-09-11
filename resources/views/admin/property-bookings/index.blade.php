@extends('layouts.header')

@section('content')

<style>
    .page-title {
        color: #1565C0;
        font-size: 27px;
        font-weight: 600;
        margin: 0 0 20px 0;
    }

    .table-wrapper {
        width: 100%;
        overflow-x: auto;
        background: #fff;
        border-radius: 10px;
    }

    .prop-table {
        width: 100%;
        margin: 0;
        border-collapse: separate;
        border-spacing: 0;
        border: 1px solid #e2e8f0;
        border-radius: 10px;
        overflow: hidden;
        background: #fff;
    }

    .prop-table thead th {
        background: #f1f5f9;
        color: #1565C0;
        font-weight: 600;
        font-size: 14px;
        padding: 13px 12px;
        border-bottom: 1px solid #e2e8f0;
        white-space: nowrap;
    }

    .prop-table tbody td {
        padding: 12px;
        font-size: 14px;
        color: #334155;
        border-bottom: 1px solid #e2e8f0;
        vertical-align: middle;
    }

    .prop-table tbody tr:last-child td {
        border-bottom: none;
    }

    .prop-table tbody tr:hover {
        background: #f8fafc;
    }

    .booking-id {
        font-weight: 600;
        color: #1565C0;
    }

    .customer-name {
        font-weight: 600;
        color: #1e293b;
    }

    .customer-mobile {
        font-size: 13px;
        color: #64748b;
    }

    .property-name {
        color: #334155;
        font-weight: 500;
        margin-bottom: 3px;
    }

    /* Status */
    .status-badge {
        display: inline-block;
        padding: 5px 10px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
        white-space: nowrap;
    }

    .status-pending {
        background: #fff7ed;
        color: #ea580c;
    }

    .status-accepted {
        background: #ecfdf5;
        color: #16a34a;
    }

    .status-rejected {
        background: #fef2f2;
        color: #dc2626;
    }

    /* CP select */
    .cp-select {
        min-width: 160px;
        border: 1px solid #cbd5e1;
        border-radius: 6px;
        padding: 7px 10px;
        font-size: 13px;
        outline: none;
    }

    .cp-select:focus {
        border-color: #1565C0;
        box-shadow: 0 0 0 2px rgba(21, 101, 192, 0.1);
    }

    .cp-status {
        margin-top: 6px;
    }

    /* Action buttons */
    .action-buttons {
        display: flex;
        gap: 7px;
        align-items: center;
        flex-wrap: wrap;
    }

    .action-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 6px 12px;
        border-radius: 6px;
        font-size: 13px;
        font-weight: 500;
        text-decoration: none;
        border: 1px solid transparent;
        cursor: pointer;
        white-space: nowrap;
    }

    .btn-view {
        background: #eff6ff;
        color: #1565C0;
        border-color: #bfdbfe;
    }

    .btn-view:hover {
        background: #dbeafe;
        color: #1565C0;
    }

    .btn-manage {
        background: #1565C0;
        color: #fff;
    }

    .btn-manage:hover {
        background: #0d47a1;
        color: #fff;
    }

    .btn-locked {
        font-size: 12px;
        color: #16a34a;
        font-weight: 500;
    }

    /* CP buttons */
    .cp-action {
        display: flex;
        gap: 6px;
        margin-top: 8px;
    }

    .cp-btn {
        border: none;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 12px;
        cursor: pointer;
    }

    .cp-accept {
        background: #16a34a;
        color: #fff;
    }

    .cp-reject {
        background: #dc2626;
        color: #fff;
    }

    .empty-row {
        text-align: center;
        padding: 25px !important;
        color: #64748b;
    }
</style>


<div class="container-fluid">

    <h2 class="page-title">Property Bookings</h2>

    <div class="table-wrapper">

        <table class="prop-table">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Customer</th>
                    <th>Property</th>
                    <th>Status</th>
                    <th>Assigned CP</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

            @forelse($bookings as $booking)

                <tr>

                    {{-- ID --}}
                    <td>
                        <span class="booking-id">
                            #{{ $booking->id }}
                        </span>
                    </td>


                    {{-- CUSTOMER --}}
                    <td>
                        <div class="customer-name">
                            {{ optional($booking->customer)->name ?? 'N/A' }}
                        </div>

                        <div class="customer-mobile">
                            {{ optional($booking->customer)->mobile_no ?? 'N/A' }}
                        </div>
                    </td>


                    {{-- PROPERTY --}}
                    <td>
                        @foreach($booking->items as $item)

                            <div class="property-name">
                                {{ $item->property->title ?? 'N/A' }}
                            </div>

                        @endforeach
                    </td>


                    {{-- BOOKING STATUS --}}
                    <td>

                        @php
                            $bookingStatus = strtolower($booking->status ?? '');
                        @endphp

                        @if($bookingStatus == 'pending')

                            <span class="status-badge status-pending">
                                Pending
                            </span>

                        @elseif($bookingStatus == 'completed')

                            <span class="status-badge status-accepted">
                                Completed
                            </span>

                        @elseif($bookingStatus == 'customer_confirmed')

                            <span class="status-badge status-accepted">
                                Customer Confirmed
                            </span>

                        @elseif($bookingStatus == 'rejected')

                            <span class="status-badge status-rejected">
                                Rejected
                            </span>

                        @else

                            <span class="status-badge">
                                {{ ucwords(str_replace('_', ' ', $booking->status)) }}
                            </span>

                        @endif

                    </td>


                    {{-- ASSIGNED CP --}}
                    <td>

                        {{-- ADMIN --}}
                        @if(auth()->user()->role_id == config('constants.roles.admin'))

                            <form method="POST"
                                  action="{{ route('admin.assign.cp') }}">

                                @csrf

                                <input type="hidden"
                                       name="booking_id"
                                       value="{{ $booking->id }}">

                                <select name="cp_id"
                                        onchange="this.form.submit()"
                                        class="cp-select">

                                    <option value="">
                                        -- Select CP --
                                    </option>

                                    @foreach($partners as $cp)

                                        <option value="{{ $cp->id }}"
                                            {{ $booking->cp_id == $cp->id ? 'selected' : '' }}>

                                            {{ $cp->name }}

                                        </option>

                                    @endforeach

                                </select>

                            </form>


                            {{-- CP STATUS --}}
                            <div class="cp-status">

                                @if($booking->cp_status == 'pending')

                                    <span class="status-badge status-pending">
                                        Pending
                                    </span>

                                @elseif($booking->cp_status == 'accepted')

                                    <span class="status-badge status-accepted">
                                        Accepted
                                    </span>

                                @elseif($booking->cp_status == 'rejected')

                                    <span class="status-badge status-rejected">
                                        Reassign Required
                                    </span>

                                @endif

                            </div>


                        {{-- CP / PARTNER --}}
                        @elseif(auth()->user()->role_id == config('constants.roles.partner'))

                            @if($booking->cp_status == 'pending')

                                <div class="cp-action">

                                    <form method="POST"
                                          action="{{ route('cp.accept') }}">

                                        @csrf

                                        <input type="hidden"
                                               name="id"
                                               value="{{ $booking->id }}">

                                        <button type="submit"
                                                class="cp-btn cp-accept">

                                            Accept

                                        </button>

                                    </form>


                                    <form method="POST"
                                          action="{{ route('cp.reject') }}">

                                        @csrf

                                        <input type="hidden"
                                               name="id"
                                               value="{{ $booking->id }}">

                                        <button type="submit"
                                                class="cp-btn cp-reject">

                                            Reject

                                        </button>

                                    </form>

                                </div>


                            @elseif($booking->cp_status == 'accepted')

                                <span class="status-badge status-accepted">
                                    Accepted
                                </span>


                            @elseif($booking->cp_status == 'rejected')

                                <span class="status-badge status-rejected">
                                    Rejected
                                </span>

                            @endif

                        @endif

                    </td>


                    {{-- ACTION --}}
                    <td>

                        <div class="action-buttons">

                            {{-- VIEW --}}
                            <a href="{{ route('admin.property.booking.view', $booking->id) }}"
                               class="action-btn btn-view">

                                Manage

                            </a>


                            {{-- MANAGE --}}
                            @if(!in_array($booking->status, ['customer_confirmed', 'completed']))

                                <a href="{{ route('admin.booking.edit', $booking->id) }}"
                                   class="action-btn btn-manage">

                                    edit

                                </a>

                            @else

                                <span class="btn-locked">
                                    🔒 Locked
                                </span>

                            @endif

                        </div>

                    </td>

                </tr>

            @empty

                <tr>

                    <td colspan="6" class="empty-row">
                        No bookings found
                    </td>

                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection