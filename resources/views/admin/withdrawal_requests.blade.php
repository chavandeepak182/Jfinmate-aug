@extends('layouts.header')
@section('title')
@parent
JFS | Wallet Balance 
@endsection
@section('content')

@section('content')
@parent

<style>
 #wrapper #content-wrapper #content{
    background:#f4f7fe;
}

.dashboard-card{

    background:#fff;
    border-radius:20px;
    padding:28px;
    display:block;
    text-decoration:none;
    height:248px;
    border:1px solid #edf2f7;
    box-shadow:0 8px 25px rgba(0,0,0,.08);
    transition:.35s;
}

.dashboard-card:hover{

    transform:translateY(-6px);
    box-shadow:0 18px 40px rgba(0,0,0,.15);
    text-decoration:none;
}

.card-header-top{

    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:35px;
}

.icon-box{

    width:60px;
    height:60px;
    border-radius:18px;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:24px;
}

.purple{

    background:#efe9ff;
    color:#6d28d9;
}

.orange{

    background:#fff2e7;
    color:#f97316;
}

.status-badge{

    padding:8px 18px;
    border-radius:30px;
    font-size:14px;
    font-weight:600;
}

.green{

    background:#e9f9ef;
    color:#16a34a;
}

.red{

    background:#ffecec;
    color:#ef4444;
}

.dashboard-card h5{

    font-size:30px;
    color:#4b5563;
    margin-bottom:15px;
}

.dashboard-card h2{

    font-size:50px;
    font-weight:700;
    color:#0f172a;
    margin-bottom:12px;
}

.dashboard-card p{

    color:#94a3b8;
    font-size:15px;
}

@media(max-width:768px){

.dashboard-card{

    height:auto;
    margin-bottom:20px;
}

.dashboard-card h5{

    font-size:22px;
}

.dashboard-card h2{

    font-size:38px;
}

}}
   
</style>

<!-- Breadcrumbs -->
<div class="container-fluid mb-4 wallet-dashboard">

    <div class="row g-4">

        <div class="col-lg-6 col-md-6 wallet-col">

            <a href="{{ route('referral_earnings') }}" class="dashboard-card">

                <div class="card-header-top">

                    <div class="icon-box purple">
                        <i class="fas fa-wallet"></i>
                    </div>

                    <span class="status-badge green">
                        Earnings
                    </span>

                </div>

                <h5>Referral Earnings</h5>

                <h2><h2>{{ $referralCount }}</h2></h2>

                <p>Click to view referral earnings</p>

            </a>

        </div>

        <div class="col-lg-6 col-md-6 wallet-col">

            <a href="{{ route('admin.transactions') }}" class="dashboard-card">

                <div class="card-header-top">

                    <div class="icon-box orange">
                        <i class="fas fa-history"></i>
                    </div>

                    <span class="status-badge red">
                        History
                    </span>

                </div>

                <h5>Transaction History</h5>

                <h2>{{ $transactionCount }}</h2>

                <p>Click to view transaction history</p>

            </a>

        </div>

    </div>

</div>

<link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet"/>
<link href="https://cdn.datatables.net/datetime/1.5.1/css/dataTables.dateTime.min.css" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet"/>
<link href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css" rel="stylesheet"/>
<div class="card custom-card shadow-sm border-0 wallet-withdrawal-card">

    <div class="card-header bg-white border-0 py-3 px-4">

        <div class="d-flex justify-content-between align-items-center">

            <div>

                <div class="wallet-withdrawal-heading">
                    <div class="wallet-withdrawal-heading-icon">
                        <i class="fas fa-wallet"></i>
                    </div>
                    <div>
                        <h4 class="wallet-withdrawal-title">Withdrawal Requests</h4>
                        <small class="wallet-withdrawal-subtitle">
                            Manage and approve referral withdrawal requests
                        </small>
                    </div>
                </div>

                

            </div>

            <span class="badge bg-primary fs-6 px-3 py-2 wallet-request-count">
                {{ count($requests) }} Requests
            </span>

        </div>

    </div>

    <div class="card-body">

        <div class="table-responsive">

            <table id="example" class="table custom-table align-middle">

                <thead>

                    <tr>

                       <th>Name</th>
                    <th>Mobile Number</th>
                    <th>Email ID</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th width="120">Action</th>

                    </tr>

                </thead>
<tbody>

@foreach($requests as $request)

<tr>

    <td>
        <strong>{{ $request->name }}</strong>
    </td>

    <td>
        {{ $request->mobile }}
    </td>

    <td>
        {{ $request->email }}
    </td>

    <td>
        <span class="amount-badge">
            ₹{{ number_format($request->amount,2) }}
        </span>
    </td>

    <td>
        @if($request->status=='approved')
            <span class="badge bg-success">
                Approved
            </span>
        @elseif($request->status=='pending')
            <span class="badge bg-warning text-dark">
                Pending
            </span>
        @else
            <span class="badge bg-danger">
                {{ ucfirst($request->status) }}
            </span>
        @endif
    </td>

    <td>
        <button
            class="btn btn-primary btn-sm rounded-pill px-3"
            data-bs-toggle="modal"
            data-bs-target="#viewRequestModal{{ $request->id }}">
            <i class="fa fa-eye me-1"></i> View
        </button>
    </td>

</tr>

<!-- Modal -->
<div class="modal fade" id="viewRequestModal{{ $request->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Request Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">

                <p><strong>Name:</strong> {{ $request->name }}</p>
                <p><strong>Mobile Number:</strong> {{ $request->mobile }}</p>
                <p><strong>Email ID:</strong> {{ $request->email }}</p>
                <p><strong>Amount:</strong> ₹{{ number_format($request->amount,2) }}</p>

                <form id="approveForm{{ $request->id }}"
      action="{{ route('admin.withdrawal.approve',$request->id) }}"
      method="POST">

    @csrf

                    <div class="mb-3">
                        <label>GST</label>
                        <select name="gst" id="gst{{ $request->id }}" class="form-control">
                            <option value="0">0%</option>
                            <option value="2">2%</option>
                            <option value="5">5%</option>
                            <option value="12">12%</option>
                            <option value="18">18%</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label>TDS</label>
                        <select name="tds" id="tds{{ $request->id }}" class="form-control">
                            <option value="0">0%</option>
                            <option value="1">1%</option>
                            <option value="2">2%</option>
                            <option value="5">5%</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label>Transaction ID</label>
                        <input type="text" name="transaction_id" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Actual Amount</label>
                        <input type="text" id="actual_amount{{ $request->id }}" class="form-control" readonly>
                    </div>

                    <!-- <button type="submit" class="btn btn-success">
                        Approve
                    </button> -->
                    <button type="button"
                        class="btn btn-success approve-btn"
                        data-id="{{ $request->id }}">
                    Approve
                </button>

                </form>

            </div>

        </div>
    </div>
</div>

@endforeach

</tbody>
                

            </table>

        </div>

    </div>

</div>
<style>
    .custom-card{

    border-radius:18px;

    overflow:hidden;

    box-shadow:0 10px 30px rgba(0,0,0,.08);

}

.custom-card .card-header{

    background:#fff;

    border-bottom:1px solid #edf2f7;

}

.custom-table{

    margin-bottom:0;

}

.custom-table thead{

    background:#f8fafc;

}

.custom-table thead th{

    border:none;

    padding:16px;

    color:#475569;

    font-weight:700;

    white-space:nowrap;

}

.custom-table tbody td{

    padding:16px;

    border-top:1px solid #eef2f7;

    vertical-align:middle;

}

.custom-table tbody tr{

    transition:.3s;

}

.custom-table tbody tr:hover{

    background:#f8fbff;

}

.amount-badge{

    background:#e8fff2;

    color:#16a34a;

    padding:8px 14px;

    border-radius:25px;

    font-weight:600;

}

.btn-primary{

    border-radius:30px;

}

.dataTables_wrapper .dataTables_filter input{

    border-radius:10px;

    border:1px solid #ddd;

    padding:6px 12px;

}

.dataTables_wrapper .dataTables_length select{

    border-radius:8px;

}

.modal-content{

    border:none;

    border-radius:18px;

}

.modal-header{

    background:#f8fafc;

    border-bottom:1px solid #eee;

}

.modal-footer{

    border-top:1px solid #eee;

}
    </style>

@endsection

@section('script')
@parent

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.1.3/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.1.3/js/dataTables.bootstrap5.js"></script>

<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
<script>
// Add event listener for GST and TDS selection change
$(document).ready(function () {
    @foreach($requests as $request)
    $('#gst{{ $request->id }}').on('change', function () {
        calculateAmount({{ $request->id }}, {{ $request->amount }});
    });

    $('#tds{{ $request->id }}').on('change', function () {
        calculateAmount({{ $request->id }}, {{ $request->amount }});
    });
    @endforeach
});

// Function to calculate the actual amount after GST and TDS deduction
function calculateAmount(requestId, amount) {
    var gstRate = $('#gst' + requestId).val(); // Get the selected GST rate
    var tdsRate = $('#tds' + requestId).val(); // Get the selected TDS rate

    var gstAmount = (amount * gstRate) / 100; // Calculate GST amount
    var tdsAmount = (amount * tdsRate) / 100; // Calculate TDS amount

    var actualAmount = amount - gstAmount - tdsAmount; // Subtract GST and TDS from original amount

    $('#actual_amount' + requestId).val('₹' + actualAmount.toFixed(2)); // Display actual amount after GST and TDS
}


</script>
<script>
$(document).ready(function () {

    $(document).on('click', '.approve-btn', function (e) {

        e.preventDefault();

        let requestId = $(this).data('id');

        let form = document.getElementById(
            'approveForm' + requestId
        );

        // Check required fields first
        if (!form.checkValidity()) {
            form.reportValidity();
            return;
        }

        swal({
            title: "Are you sure?",
            text: "Do you want to approve this withdrawal request?",
            icon: "warning",
            buttons: {
                cancel: {
                    text: "No, Cancel",
                    value: false,
                    visible: true
                },
                confirm: {
                    text: "Yes, Approve",
                    value: true,
                    visible: true
                }
            }
        }).then(function (willApprove) {

            if (willApprove) {

                // Submit the original form
                form.submit();

            }

        });

    });

});
</script>

@endsection


<style>
/* =========================================================
   JFINSERV WALLET / WITHDRAWAL PAGE - UI ONLY
   No Blade logic, routes, variables, forms or JS changed.
========================================================= */

#wrapper #content-wrapper #content {
    background: #f5f7fb !important;
}

/* ================= WALLET SUMMARY ================= */

.wallet-dashboard {
    padding: 2px 0 22px;
}

.wallet-dashboard .row {
    margin-left: -9px;
    margin-right: -9px;
}

.wallet-dashboard .wallet-col {
    padding-left: 9px;
    padding-right: 9px;
}

.wallet-dashboard .dashboard-card {
    position: relative;
    display: block;
    width: 100%;
    min-height: 210px;
    height: auto;
    padding: 25px;
    overflow: hidden;
    text-decoration: none !important;
    background: #ffffff;
    border: 1px solid #e7ebf1;
    border-radius: 16px;
    box-shadow: 0 7px 24px rgba(20, 35, 60, .055);
    transition: transform .22s ease, box-shadow .22s ease, border-color .22s ease;
}

.wallet-dashboard .dashboard-card::after {
    content: "";
    position: absolute;
    width: 135px;
    height: 135px;
    right: -55px;
    bottom: -65px;
    border-radius: 50%;
    background: rgba(37, 99, 235, .045);
    pointer-events: none;
}

.wallet-dashboard .dashboard-card:hover {
    transform: translateY(-4px);
    border-color: #d9e4f5;
    box-shadow: 0 14px 32px rgba(20, 35, 60, .10);
}

.wallet-dashboard .card-header-top {
    position: relative;
    z-index: 1;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 27px;
}

.wallet-dashboard .icon-box {
    width: 52px;
    height: 52px;
    min-width: 52px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 13px;
    font-size: 20px;
}

.wallet-dashboard .purple {
    background: #edf4ff;
    color: #2563eb;
}

.wallet-dashboard .orange {
    background: #fff4e8;
    color: #ed7a18;
}

.wallet-dashboard .status-badge {
    padding: 6px 12px;
    border-radius: 20px;
    font-size: 9px;
    line-height: 1;
    font-weight: 800;
    letter-spacing: .45px;
    text-transform: uppercase;
}

.wallet-dashboard .green {
    background: #eaf8f0;
    color: #16804a;
}

.wallet-dashboard .red {
    background: #fff0f0;
    color: #d63f3f;
}

.wallet-dashboard .dashboard-card h5 {
    position: relative;
    z-index: 1;
    margin: 0 0 9px;
    color: #667085;
    font-size: 13px;
    line-height: 1.4;
    font-weight: 700;
}

.wallet-dashboard .dashboard-card h2 {
    position: relative;
    z-index: 1;
    margin: 0 0 8px;
    color: #1d2939;
    font-size: 32px;
    line-height: 1.1;
    font-weight: 800;
}

.wallet-dashboard .dashboard-card p {
    position: relative;
    z-index: 1;
    margin: 0;
    color: #98a2b3;
    font-size: 10px;
}

/* ================= WITHDRAWAL CARD ================= */

.wallet-withdrawal-card {
    margin-top: 4px;
    overflow: hidden;
    background: #ffffff;
    border: 1px solid #e5eaf1 !important;
    border-radius: 16px !important;
    box-shadow: 0 7px 25px rgba(20, 35, 60, .055) !important;
}

.wallet-withdrawal-card .card-header {
    padding: 19px 22px !important;
    background: #ffffff !important;
    border-bottom: 1px solid #edf0f4 !important;
}

.wallet-withdrawal-heading {
    display: flex;
    align-items: center;
    gap: 11px;
}

.wallet-withdrawal-heading-icon {
    width: 38px;
    height: 38px;
    min-width: 38px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 10px;
    background: #edf4ff;
    color: #2563eb;
    font-size: 14px;
}

.wallet-withdrawal-title {
    margin: 0 0 2px;
    color: #26344b !important;
    font-size: 15px;
    line-height: 1.3;
    font-weight: 800 !important;
}

.wallet-withdrawal-subtitle {
    color: #98a2b3 !important;
    font-size: 10px;
}

.wallet-request-count {
    display: inline-flex;
    align-items: center;
    padding: 7px 11px !important;
    border-radius: 20px !important;
    background: #edf4ff !important;
    color: #2563eb !important;
    font-size: 9px !important;
    font-weight: 800;
    letter-spacing: .3px;
}

/* ================= TABLE ================= */

.wallet-withdrawal-card .card-body {
    padding: 0 !important;
}

.wallet-withdrawal-card .table-responsive {
    padding: 18px 20px 20px;
}

.wallet-withdrawal-card .custom-table {
    width: 100%;
    margin: 0 !important;
    border: 1px solid #e5eaf1;
    border-radius: 11px;
    border-collapse: separate;
    border-spacing: 0;
    overflow: hidden;
}

.wallet-withdrawal-card .custom-table thead {
    background: #f7f9fc !important;
}

.wallet-withdrawal-card .custom-table thead th {
    padding: 12px 13px !important;
    border: 0 !important;
    border-bottom: 1px solid #e5eaf1 !important;
    color: #667085 !important;
    font-size: 9px !important;
    font-weight: 800 !important;
    letter-spacing: .55px;
    text-transform: uppercase;
    white-space: nowrap;
}

.wallet-withdrawal-card .custom-table tbody td {
    padding: 13px !important;
    border-top: 0 !important;
    border-bottom: 1px solid #edf0f4 !important;
    color: #475467;
    font-size: 13px;
    vertical-align: middle;
}

.wallet-withdrawal-card .custom-table tbody tr:last-child td {
    border-bottom: 0 !important;
}

.wallet-withdrawal-card .custom-table tbody tr {
    transition: background-color .18s ease;
}

.wallet-withdrawal-card .custom-table tbody tr:hover {
    background: #f9fbff !important;
}

.wallet-withdrawal-card .custom-table tbody td:first-child {
    color: #26344b;
    font-weight: 700;
}

/* ================= AMOUNT ================= */

.wallet-withdrawal-card .amount-badge {
    display: inline-flex;
    align-items: center;
    padding: 6px 10px;
    border-radius: 20px;
    background: #eaf8f0 !important;
    border: 1px solid #ccebd8;
    color: #16804a !important;
    font-size: 10px;
    font-weight: 800;
    white-space: nowrap;
}

/* ================= STATUS ================= */

.wallet-withdrawal-card tbody .badge {
    display: inline-flex;
    align-items: center;
    padding: 6px 9px;
    border-radius: 20px;
    font-size: 9px;
    font-weight: 800;
}

.wallet-withdrawal-card tbody .bg-success {
    background: #eaf8f0 !important;
    color: #16804a !important;
}

.wallet-withdrawal-card tbody .bg-warning {
    background: #fff6df !important;
    color: #a46600 !important;
}

.wallet-withdrawal-card tbody .bg-danger {
    background: #fff0f0 !important;
    color: #d63f3f !important;
}

/* ================= VIEW BUTTON ================= */

.wallet-withdrawal-card .btn-primary {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 5px;
    padding: 6px 11px !important;
    border: 1px solid #d5e3fa !important;
    border-radius: 8px !important;
    background: #edf4ff !important;
    color: #2563eb !important;
    font-size: 10px;
    font-weight: 700;
    box-shadow: none !important;
}

.wallet-withdrawal-card .btn-primary:hover {
    background: #e1edff !important;
    color: #174bb7 !important;
}

/* ================= DATATABLE ================= */

.wallet-withdrawal-card .dataTables_wrapper {
    color: #667085;
    font-size: 10px;
}

.wallet-withdrawal-card .dataTables_wrapper .dataTables_length,
.wallet-withdrawal-card .dataTables_wrapper .dataTables_filter {
    margin-bottom: 13px;
}

.wallet-withdrawal-card .dataTables_wrapper .dataTables_length label,
.wallet-withdrawal-card .dataTables_wrapper .dataTables_filter label {
    color: #7d899b;
    font-size: 10px;
    font-weight: 600;
}

.wallet-withdrawal-card .dataTables_wrapper .dataTables_filter input {
    min-height: 34px;
    margin-left: 6px;
    padding: 6px 10px;
    border: 1px solid #dfe5ed !important;
    border-radius: 8px !important;
    background: #fbfcfe;
    outline: none;
}

.wallet-withdrawal-card .dataTables_wrapper .dataTables_filter input:focus {
    border-color: #a9c5ef !important;
    box-shadow: 0 0 0 3px rgba(37, 99, 235, .06);
}

.wallet-withdrawal-card .dataTables_wrapper .dataTables_length select {
    min-height: 33px;
    margin: 0 5px;
    padding: 4px 25px 4px 8px;
    border: 1px solid #dfe5ed !important;
    border-radius: 7px !important;
}

.wallet-withdrawal-card .dataTables_wrapper .dataTables_info {
    color: #98a2b3;
    font-size: 9px;
}

.wallet-withdrawal-card .dataTables_wrapper .dataTables_paginate .paginate_button {
    padding: 5px 9px !important;
    border: 0 !important;
    border-radius: 6px !important;
    font-size: 9px;
}

.wallet-withdrawal-card .dataTables_wrapper .dataTables_paginate .paginate_button.current {
    background: #2563eb !important;
    border: 0 !important;
    color: #fff !important;
}

/* ================= MODAL ================= */

.wallet-withdrawal-card .modal-content {
    overflow: hidden;
    border: 1px solid #e3e8ef !important;
    border-radius: 15px !important;
    box-shadow: 0 20px 50px rgba(20, 35, 60, .16);
}

.wallet-withdrawal-card .modal-header {
    padding: 16px 19px !important;
    background: #f8fafc !important;
    border-bottom: 1px solid #e8edf3 !important;
}

.wallet-withdrawal-card .modal-title {
    color: #26344b;
    font-size: 14px;
    font-weight: 800;
}

.wallet-withdrawal-card .modal-body {
    padding: 19px !important;
    background: #ffffff;
}

.wallet-withdrawal-card .modal-body > p {
    margin-bottom: 9px;
    padding: 9px 11px;
    background: #f8fafc;
    border: 1px solid #edf0f4;
    border-radius: 8px;
    color: #667085;
    font-size: 10px;
}

.wallet-withdrawal-card .modal-body > p strong {
    color: #344054;
}

.wallet-withdrawal-card .modal-body .form-label,
.wallet-withdrawal-card .modal-body label {
    display: block;
    margin-bottom: 6px;
    color: #707d91;
    font-size: 9px;
    font-weight: 800;
    letter-spacing: .55px;
    text-transform: uppercase;
}

.wallet-withdrawal-card .modal-body .form-control {
    min-height: 39px;
    padding: 8px 10px;
    border: 1px solid #dfe5ed;
    border-radius: 8px;
    background: #fbfcfe;
    color: #344054;
    font-size: 11px;
    box-shadow: none;
}

.wallet-withdrawal-card .modal-body .form-control:focus {
    border-color: #a9c5ef;
    background: #fff;
    box-shadow: 0 0 0 3px rgba(37, 99, 235, .06);
}

.wallet-withdrawal-card .modal-body .form-control[readonly] {
    background: #f2f5f8;
    color: #16804a;
    font-weight: 800;
}

.wallet-withdrawal-card .approve-btn {
    min-width: 105px;
    padding: 8px 14px;
    border: 0;
    border-radius: 8px;
    background: #16804a !important;
    color: #fff !important;
    font-size: 10px;
    font-weight: 800;
    box-shadow: 0 4px 12px rgba(22, 128, 74, .15);
}

.wallet-withdrawal-card .approve-btn:hover {
    background: #12683c !important;
}

/* ================= MOBILE ================= */

@media (max-width: 991px) {
    .wallet-dashboard .dashboard-card {
        min-height: 190px;
    }

    .wallet-withdrawal-card .table-responsive {
        padding: 15px;
    }
}

@media (max-width: 767px) {
    .wallet-dashboard .dashboard-card {
        min-height: 180px;
        padding: 20px;
    }

    .wallet-dashboard .dashboard-card h2 {
        font-size: 28px;
    }

    .wallet-dashboard .dashboard-card h5 {
        font-size: 12px;
    }

    .wallet-withdrawal-card .card-header {
        padding: 16px !important;
    }

    .wallet-withdrawal-card .card-header > .d-flex {
        align-items: flex-start !important;
        gap: 12px;
    }

    .wallet-request-count {
        white-space: nowrap;
    }

    .wallet-withdrawal-card .table-responsive {
        padding: 12px;
    }

    .wallet-withdrawal-card .custom-table {
        min-width: 720px;
    }
}

@media (max-width: 480px) {
    .wallet-withdrawal-heading-icon {
        width: 34px;
        height: 34px;
        min-width: 34px;
        font-size: 12px;
    }

    .wallet-withdrawal-title {
        font-size: 13px;
    }

    .wallet-withdrawal-subtitle {
        font-size: 9px;
    }
}
</style>
