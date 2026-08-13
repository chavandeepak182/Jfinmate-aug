@extends('layouts.header')

@section('title')
@parent
JFS | Wallet Balance 
@endsection

@section('content')
<style>
   .dashboard-card{

    display:block;
    background:#fff;
    border-radius:22px;
    padding:28px;
    text-decoration:none;
    color:#222;
    border:1px solid #edf2f7;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
    transition:.35s;
    min-height:210px;

}

.dashboard-card:hover{

    transform:translateY(-8px);
    box-shadow:0 20px 40px rgba(0,0,0,.12);
    text-decoration:none;
    color:#222;

}

.card-top{

    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:35px;

}

.card-icon{

    width:65px;
    height:65px;
    border-radius:18px;
    display:flex;
    justify-content:center;
    align-items:center;
    font-size:26px;

}

.purple{

    background:#efe9ff;
    color:#6f42c1;

}

.orange{

    background:#fff3e8;
    color:#ff7a00;

}

.card-badge{

    padding:8px 18px;
    border-radius:30px;
    font-size:14px;
    font-weight:600;

}

.badge-success{

    background:#e9fbef;
    color:#16a34a;

}

.badge-danger{

    background:#ffecec;
    color:#ef4444;

}

.dashboard-card h4{

    font-size:28px;
    margin-bottom:15px;
    color:#374151;
    font-weight:600;

}

.dashboard-card h2{

    font-size:42px;
    color:#2563eb;
    margin-bottom:15px;

}

.dashboard-card p{

    color:#94a3b8;
    margin:0;
    font-size:15px;

}

@media(max-width:768px){

.dashboard-card{

    margin-bottom:20px;

}

}


.invoice-modal{

    border:none;

    border-radius:20px;

    overflow:hidden;

    box-shadow:0 20px 50px rgba(0,0,0,.15);

}

.invoice-modal .modal-header{

    background:#f8fafc;

    border-bottom:1px solid #edf2f7;

    padding:20px 25px;

}

.invoice-modal .modal-body{

    background:#fff;

}

.invoice-header{

    text-align:center;

    margin-bottom:25px;

}

.invoice-logo{

    width:170px;

    margin-bottom:15px;

}

.invoice-header h3{

    font-weight:700;

    color:#1e293b;

    margin-bottom:5px;

}

.invoice-header p{

    color:#64748b;

}

.invoice-box{

    background:#f8fafc;

    border-radius:14px;

    padding:18px;

    margin-bottom:20px;

}

.invoice-box p{

    margin-bottom:10px;

}

.invoice-table{

    width:100%;

    border-collapse:collapse;

    margin-top:20px;

}

.invoice-table th{

    background:#2563eb;

    color:#fff;

    padding:12px;

    text-align:left;

}

.invoice-table td{

    padding:12px;

    border-bottom:1px solid #edf2f7;

}

.invoice-total{

    font-size:18px;

    font-weight:700;

    color:#16a34a;

}

.invoice-status{

    display:inline-block;

    padding:8px 18px;

    border-radius:30px;

    background:#dcfce7;

    color:#15803d;

    font-weight:600;

}

.btn-success{

    border-radius:10px;

}

.btn-close{

    box-shadow:none;

}
</style>
<div class="container-fluid mb-4">



    <!-- Dashboard Cards -->
    <div class="row g-4">

        <!-- Redeem Request Card -->
        <div class="col-lg-6 col-md-6">

            <a href="{{ route('admin.withdrawal.requests') }}" class="dashboard-card">

                <div class="card-top">

                    <div class="card-icon purple">
                        <i class="fas fa-wallet"></i>
                    </div>

                    <span class="card-badge badge-success">
                        Redeem
                    </span>

                </div>

                <h4>Redeem Requests</h4>

                <h2>
                    <i class="fas fa-arrow-circle-right"></i>
                </h2>

                <p>
                    View all redeem requests
                </p>

            </a>

        </div>

        <!-- Referral Card -->

        <div class="col-lg-6 col-md-6">

            <a href="{{ route('referral_earnings') }}" class="dashboard-card">

                <div class="card-top">

                    <div class="card-icon orange">
                        <i class="fas fa-users"></i>
                    </div>

                    <span class="card-badge badge-danger">
                        Referral
                    </span>

                </div>

                <h4>Referral Earnings</h4>

                <h2>
                    <i class="fas fa-arrow-circle-right"></i>
                </h2>

                <p>
                    View all referral earnings
                </p>

            </a>

        </div>

    </div>

</div>
<!-- DataTables CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

<div class="container-fluid mt-4">

    <!-- Search Card -->
    <div class="card border-0 shadow-sm rounded-4 mb-4">

        <div class="card-body">

            <form method="GET" action="{{ route('admin.transactions') }}">

                <div class="row align-items-center">

                    <div class="col-md-8">

                        <input type="text"
                               name="search"
                               class="form-control search-box"
                               placeholder="Search by Name / Transaction ID..."
                               value="{{ request()->search }}">

                    </div>

                    <div class="col-md-4 text-end">

                        <button class="btn btn-primary px-4">

                            <i class="fas fa-search me-2"></i>

                            Search

                        </button>

                    </div>

                </div>

            </form>

        </div>

    </div>


    <!-- Transaction Card -->

    <div class="card transaction-card border-0 shadow-sm rounded-4">

        <div class="card-header bg-white border-0 py-4">

            <div class="d-flex justify-content-between align-items-center">

                <div>

                    <h4 class="mb-1 fw-bold">

                        <i class="fas fa-credit-card text-primary me-2"></i>

                        Transactions List

                    </h4>

                    <small class="text-muted">

                        Total Transactions :
                        {{ $data['transactions']->total() }}

                    </small>

                </div>

            </div>

        </div>

        <div class="card-body p-0">

            <div class="table-responsive">

                <table class="table transaction-table align-middle mb-0">

                    <thead>

                    <tr>

                        <th>#</th>

                        <th>User</th>

                        <th>Transaction ID</th>

                        <th>Amount</th>

                        <th>Status</th>

                        <th>Date</th>

                        <th>Action</th>

                    </tr>

                    </thead>

                    <tbody>

                    @foreach($data['transactions'] as $transaction)

                    <tr>

                        <td>{{ $loop->iteration }}</td>

                        <td>

                            <strong>

                                {{ $transaction->user_name }}

                            </strong>

                        </td>

                        <td>

                            <span class="txn-id">

                                {{ $transaction->transaction_id }}

                            </span>

                        </td>

                        <td>

                            <span class="amount-badge">

                                ₹{{ number_format($transaction->amount,2) }}

                            </span>

                        </td>

                        <td>

                            @if(strtolower($transaction->status)=='approved')

                                <span class="badge bg-success rounded-pill px-3">

                                    Approved

                                </span>

                            @elseif(strtolower($transaction->status)=='pending')

                                <span class="badge bg-warning text-dark rounded-pill px-3">

                                    Pending

                                </span>

                            @else

                                <span class="badge bg-danger rounded-pill px-3">

                                    {{ ucfirst($transaction->status) }}

                                </span>

                            @endif

                        </td>

                        <td>

                            {{ \Carbon\Carbon::parse($transaction->created_at)->format('d M Y') }}

                            <br>

                            <small class="text-muted">

                                {{ \Carbon\Carbon::parse($transaction->created_at)->format('h:i A') }}

                            </small>

                        </td>

                        <td>

                            <button
                                class="btn btn-primary rounded-pill px-3 show-history-btn"
                                data-transaction-id="{{ $transaction->transaction_id }}">

                                <i class="fa fa-eye me-1"></i>

                                Invoice

                            </button>

                        </td>

                    </tr>

                    @endforeach

                    </tbody>

                </table>

            </div>

        </div>

        <div class="card-footer bg-white border-0 py-3">

            {!! $data['transactions']->appends(['search'=>request()->search])->links('pagination::bootstrap-5') !!}

        </div>

    </div>

</div>

<!-- Modern Invoice Modal -->
<!-- Transaction Invoice Modal -->
<div class="modal fade"
     id="invoiceModal"
     tabindex="-1"
     aria-labelledby="invoiceModalLabel"
     aria-hidden="true">

    <div class="modal-dialog modal-lg modal-dialog-centered">

        <div class="modal-content invoice-modal">

            <!-- Header -->
            <div class="modal-header invoice-modal-header">

                <div>
                    <h4 class="modal-title fw-bold mb-1">
                        <i class="fas fa-file-invoice-dollar text-primary me-2"></i>
                        Transaction Invoice
                    </h4>

                    <small class="text-muted">
                        JFinserv Consultant
                    </small>
                </div>

                <div class="d-flex align-items-center gap-2">

                    <button id="downloadInvoice"
                            type="button"
                            class="btn btn-success invoice-download-btn">

                        <i class="fa fa-download me-1"></i>
                        Download

                    </button>

                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="modal">
                    </button>

                </div>

            </div>


            <!-- Body -->
            <div class="modal-body invoice-modal-body">

                <div id="transaction-invoice-content">

                    <!-- Invoice Header -->
                    <div class="invoice-header">

                        <div class="invoice-logo-wrapper">

                            <img src="{{ asset('theme/frontend/img/logo.png') }}"
                                 class="invoice-logo"
                                 alt="JFinserv Consultant">

                        </div>

                        <h3 class="invoice-company">
                            JFinserv Consultant
                        </h3>

                        <p class="invoice-subtitle">
                            Transaction Invoice
                        </p>

                    </div>


                    <div class="invoice-divider"></div>


                    <!-- Transaction Information -->
                    <div class="invoice-section">

                        <div class="section-title">
                            <i class="fas fa-user-circle me-2"></i>
                            Customer Information
                        </div>


                        <div class="invoice-grid">

                            <!-- Row 1 -->
                            <div class="invoice-field">

                                <span class="field-label">
                                    <i class="fas fa-user me-2"></i>
                                    Customer Name
                                </span>

                                <span class="field-value"
                                      id="invoice-user-name">
                                    -
                                </span>

                            </div>


                            <div class="invoice-field">

                                <span class="field-label">
                                    <i class="fas fa-envelope me-2"></i>
                                    Email
                                </span>

                                <span class="field-value"
                                      id="invoice-email">
                                    -
                                </span>

                            </div>


                            <!-- Row 2 -->
                            <div class="invoice-field">

                                <span class="field-label">
                                    <i class="fas fa-phone me-2"></i>
                                    Contact
                                </span>

                                <span class="field-value"
                                      id="invoice-contact">
                                    -
                                </span>

                            </div>


                            <div class="invoice-field">

                                <span class="field-label">
                                    <i class="fas fa-calendar-alt me-2"></i>
                                    Date
                                </span>

                                <span class="field-value"
                                      id="invoice-date">
                                    -
                                </span>

                            </div>

                        </div>

                    </div>


                    <!-- Transaction Information -->
                    <div class="invoice-section">

                        <div class="section-title">
                            <i class="fas fa-receipt me-2"></i>
                            Transaction Details
                        </div>


                        <div class="invoice-grid">

                            <!-- Row 1 -->
                            <div class="invoice-field">

                                <span class="field-label">
                                    <i class="fas fa-hashtag me-2"></i>
                                    Transaction ID
                                </span>

                                <span class="field-value transaction-value"
                                      id="invoice-transaction-id">
                                    -
                                </span>

                            </div>


                            <div class="invoice-field">

                                <span class="field-label">
                                    <i class="fas fa-check-circle me-2"></i>
                                    Status
                                </span>

                                <span class="field-value">
                                    <span class="invoice-status"
                                          id="invoice-status">
                                        -
                                    </span>
                                </span>

                            </div>

                        </div>

                    </div>


                    <!-- Amount Details -->
                    <div class="invoice-section">

                        <div class="section-title">
                            <i class="fas fa-money-bill-wave me-2"></i>
                            Amount Details
                        </div>


                        <div class="invoice-grid">

                            <!-- Row 1 -->
                            <div class="invoice-field">

                                <span class="field-label">
                                    Requested Amount
                                </span>

                                <span class="field-value amount-value"
                                      id="invoice-amount">
                                    ₹0.00
                                </span>

                            </div>


                            <div class="invoice-field">

                                <span class="field-label">
                                    GST
                                </span>

                                <span class="field-value"
                                      id="invoice-gst">
                                    ₹0.00
                                </span>

                            </div>


                            <!-- Row 2 -->
                            <div class="invoice-field">

                                <span class="field-label">
                                    TDS
                                </span>

                                <span class="field-value"
                                      id="invoice-tds">
                                    ₹0.00
                                </span>

                            </div>


                            <div class="invoice-field final-amount-field">

                                <span class="field-label">
                                    Final Amount
                                </span>

                                <span class="field-value final-amount"
                                      id="invoice-final-amount">
                                    ₹0.00
                                </span>

                            </div>

                        </div>

                    </div>


                    <!-- Existing AJAX Content -->
                    <div id="invoice-ajax-content">
                    </div>


                    <!-- Footer -->
                    <div class="invoice-footer">

                        <div>
                            <i class="fas fa-shield-alt me-1"></i>
                            Secure Transaction
                        </div>

                        <div>
                            This is a computer-generated invoice.
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>
<style>
    /* =========================================
   INVOICE DESIGN
========================================= */

#transaction-invoice-content {
    background: #fff;
    padding: 32px;
    border-radius: 14px;
    border: 1px solid #e8edf3;
    color: #1f2937;
}


/* =========================================
   HEADER
========================================= */

.invoice-header {
    text-align: center;
    padding: 5px 0 18px;
}

.invoice-logo {
    width: 145px;
    max-width: 100%;
    height: auto;
    object-fit: contain;
    margin-bottom: 10px;
}

.invoice-header h3 {
    margin: 0;
    font-size: 23px;
    font-weight: 700;
    color: #172033;
}

.invoice-header p {
    margin: 5px 0 0;
    font-size: 13px;
    color: #7b8794;
}

#transaction-invoice-content hr {
    border: 0;
    border-top: 1px solid #e5e9ef;
    margin: 20px 0 25px;
}


/* =========================================
   INVOICE DETAILS
========================================= */

.invoice-details {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 14px 18px;
    margin-bottom: 25px;
}


/* =========================================
   EACH FIELD
========================================= */

.invoice-detail-box {
    background: #f8fafc;
    border: 1px solid #e7ecf2;
    border-radius: 10px;
    padding: 14px 16px;
    min-height: 68px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.invoice-detail-label {
    font-size: 11px;
    font-weight: 600;
    color: #7a8796;
    text-transform: uppercase;
    letter-spacing: .5px;
    margin-bottom: 6px;
}

.invoice-detail-value {
    font-size: 14px;
    font-weight: 600;
    color: #202938;
    word-break: break-word;
}


/* =========================================
   TRANSACTION ID
========================================= */

.invoice-transaction-id {
    font-family: monospace;
    font-size: 13px;
    color: #2563eb;
}


/* =========================================
   CONTACT - FULL WIDTH
========================================= */

.invoice-contact {
    grid-column: 1 / -1;
}


/* =========================================
   AMOUNT SECTION
========================================= */

.invoice-amount-section {
    margin-top: 8px;
    border: 1px solid #e5eaf0;
    border-radius: 12px;
    overflow: hidden;
}

.invoice-amount-title {
    background: #f8fafc;
    padding: 13px 16px;
    font-size: 15px;
    font-weight: 700;
    color: #263244;
    border-bottom: 1px solid #e5eaf0;
}

.invoice-amount-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 13px 16px;
    border-bottom: 1px solid #edf0f4;
}

.invoice-amount-row:last-child {
    border-bottom: 0;
}

.invoice-amount-label {
    font-size: 13px;
    color: #667085;
}

.invoice-amount-value {
    font-size: 14px;
    font-weight: 600;
    color: #263244;
}


/* =========================================
   FINAL AMOUNT
========================================= */

.invoice-final-row {
    background: #f0fdf4;
}

.invoice-final-row .invoice-amount-label {
    font-weight: 700;
    color: #166534;
}

.invoice-final-row .invoice-amount-value {
    font-size: 19px;
    font-weight: 800;
    color: #15803d;
}


/* =========================================
   STATUS
========================================= */

.invoice-status {
    display: inline-block;
    width: fit-content;
    padding: 5px 12px;
    border-radius: 20px;
    background: #dcfce7;
    color: #15803d;
    font-size: 12px;
    font-weight: 700;
}


/* =========================================
   FOOTER
========================================= */

.invoice-footer {
    margin-top: 25px;
    padding-top: 16px;
    border-top: 1px solid #e5e9ef;

    display: flex;
    justify-content: space-between;
    align-items: center;

    font-size: 11px;
    color: #8a95a3;
}


/* =========================================
   DOWNLOAD BUTTON
========================================= */

.invoice-modal .btn-success {
    border-radius: 8px;
    padding: 8px 16px;
    font-weight: 600;
}


/* =========================================
   MOBILE
========================================= */

@media (max-width: 767px) {

    #transaction-invoice-content {
        padding: 20px 15px;
    }

    .invoice-details {
        grid-template-columns: 1fr;
        gap: 12px;
    }

    .invoice-contact {
        grid-column: auto;
    }

    .invoice-header h3 {
        font-size: 20px;
    }

    .invoice-logo {
        width: 125px;
    }

    .invoice-footer {
        flex-direction: column;
        gap: 7px;
        text-align: center;
    }
}
</style>

@endsection

@section('script')
@parent
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

<script>
$(document).ready(function() {
    // Handle clicking on the 'eye' button to show the invoice
    $('.show-history-btn').on('click', function() {
        var transactionId = $(this).data('transaction-id');

        $.ajax({
            url: '/admin/transactions/' + transactionId + '/history',
            method: 'GET',
            success: function(data) {
                if (data.error) {
                    alert(data.error);
                    return;
                }

                var invoiceHtml = `
                    <div id="transaction-invoice-content" style="padding: 20px;">
                        <div style="text-align: center; border-bottom: 2px solid #ddd; padding-bottom: 10px;">
                            <img src="../theme/frontend/img/logo.png" alt="Company Logo" style="width: 50%;margin-bottom: 10px;">
                        </div>                        
                        <div style="margin-top: 20px; border-bottom: 2px dashed #ddd; padding-bottom: 10px;">
                            <div style="display: flex; justify-content: space-between; align-items: center;">                                
                                <p style="margin: 0;"><strong>Date:</strong> ${data.created_at}</p>
                            </div>
                            <p style="margin: 0;"><strong>Transaction ID:</strong> ${data.transaction_id}</p>
                            <p style="margin: 0;"><strong>Name:</strong> ${data.user_name}</p>
                            <p style="margin: 0;"><strong>Email:</strong> ${data.email_id }</p>
                            <p style="margin: 0;"><strong>Contact:</strong> ${data.contact}</p>
                        </div>
                        <div style="margin-top: 20px;">
                            <h5>Transaction Details</h5>
                            <table style="width: 100%; border-collapse: collapse;">
                                <tr>
                                    <td style="padding: 5px;"><strong>Requested Amount:</strong></td>
                                    <td style="padding: 5px; text-align: right;">₹${data.amount}</td>
                                </tr>
                                <tr>
                                    <td style="padding: 5px;"><strong>GST (2%):</strong></td>
                                    <td style="padding: 5px; text-align: right;">₹${data.gst}</td>
                                </tr>
                                <tr>
                                    <td style="padding: 5px;"><strong>TDS (2%):</strong></td>
                                    <td style="padding: 5px; text-align: right;">₹${data.tds}</td>
                                </tr>
                                <tr style="border-top: 2px solid #000;">
                                    <td style="padding: 5px;"><strong>Final Amount:</strong></td>
                                    <td style="padding: 5px; text-align: right; font-weight: bold;">₹${data.final_amount}</td>
                                </tr>
                            </table>
                        </div>
                        <div style="margin-top: 20px; text-align: center; border-top: 2px solid #ddd; padding-top: 10px;">
                            <p>Status: <strong>${data.status}</strong></p>
                        </div>
                    </div>
                `;

                $('#transaction-invoice-content').html(invoiceHtml);
                $('#invoiceModal').modal('show');
            },
            error: function() {
                alert('Error fetching transaction history.');
            }
        });
    });
});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
<script>
document.getElementById('downloadInvoice').addEventListener('click', function () {

    const invoice = document.getElementById('transaction-invoice-content');

    if (!invoice) {
        alert('Invoice content not found.');
        return;
    }

    const transactionId =
        $('.show-history-btn').data('transaction-id') || 'invoice';

    const options = {
        margin: 10,

        filename: 'invoice-' + transactionId + '.pdf',

        image: {
            type: 'jpeg',
            quality: 0.98
        },

        html2canvas: {
            scale: 2,
            useCORS: true
        },

        jsPDF: {
            unit: 'mm',
            format: 'a4',
            orientation: 'portrait'
        }
    };

    html2pdf()
        .set(options)
        .from(invoice)
        .save();

});
</script>
@endsection
