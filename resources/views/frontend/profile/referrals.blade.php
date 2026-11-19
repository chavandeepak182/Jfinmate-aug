
@extends('frontend.layouts.customer-dash')

@section('title', 'My Wallet')

@section('content')

<style>
/* ==============================
   MAIN PAGE
============================== */
.wallet-page {
    background: #f5f8fd;
    min-height: 100vh;
    padding: 22px 20px;
}

.wallet-page .page-title {
    font-size: 22px;
    font-weight: 600;
    color: #333;
    margin-bottom: 20px;
}

/* ==============================
   TABS
============================== */
.wallet-tabs {
    border: 0;
    gap: 5px;
    margin-bottom: 15px;
}

.wallet-tabs .nav-link {
    color: #555;
    font-size: 14px;
    padding: 9px 18px;
    border: 1px solid transparent;
    border-radius: 5px;
    background: transparent;
    font-weight: 500;
}

.wallet-tabs .nav-link:hover {
    color: #1682ff;
}

.wallet-tabs .nav-link.active {
    background: #eaf3ff;
    color: #087cff;
    border: 1px solid #4b9aff;
}

/* ==============================
   COMMON CARD
============================== */
.wallet-card {
    background: #fff;
    border: none;
    border-radius: 12px;
    box-shadow: none;
    margin-bottom: 20px;
}

.wallet-card .card-body {
    padding: 22px;
}

.wallet-card .card-heading {
    font-size: 17px;
    font-weight: 600;
    color: #333;
    padding-bottom: 17px;
    border-bottom: 1px solid #eeeeee;
    margin-bottom: 0;
}

/* ==============================
   WALLET BALANCE
============================== */
.balance-box {
    border: 1px solid #6caaff;
    border-radius: 6px;
    min-height: 240px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 25px;
    background: #fff;
}

.balance-label {
    color: #999;
    font-size: 12px;
    margin-bottom: 3px;
}

.balance-amount {
    font-size: 25px;
    font-weight: 700;
    color: #444;
    margin-bottom: 22px;
}

.withdraw-form {
    width: 100%;
    max-width: 390px;
}

.withdraw-form .form-control {
    height: 42px;
    border-radius: 5px;
    font-size: 13px;
    margin-bottom: 8px;
}

.withdraw-btn {
    width: 100%;
    height: 42px;
    border: 1px solid #3993ff;
    background: #fff;
    color: #087cff;
    border-radius: 5px;
    font-size: 14px;
    font-weight: 500;
}

.withdraw-btn:hover {
    background: #087cff;
    color: #fff;
}

/* ==============================
   TABLE DESIGN
============================== */
.wallet-table {
    width: 100%;
    margin-bottom: 0;
    white-space: nowrap;
}

.wallet-table thead th {
    color: #777;
    font-size: 12px;
    font-weight: 500;
    padding: 16px 12px;
    border-bottom: 1px solid #e9e9e9;
    background: #fff;
}

.wallet-table tbody td {
    color: #444;
    font-size: 12px;
    padding: 17px 12px;
    border-bottom: 1px solid #eeeeee;
    vertical-align: middle;
}

.wallet-table tbody tr:last-child td {
    border-bottom: 0;
}

/* ==============================
   STATUS
============================== */
.status-pill {
    display: inline-block;
    min-width: 85px;
    text-align: center;
    padding: 6px 12px;
    border-radius: 8px;
    font-size: 12px;
    font-weight: 500;
    background: #fff;
}

.status-pending {
    color: #ffa500;
    border: 1px solid #ffbd42;
}

.status-open {
    color: #00b84a;
    border: 1px solid #36d77b;
}

.status-completed {
    color: #00a65a;
    border: 1px solid #36d77b;
}

.status-other {
    color: #777;
    border: 1px solid #ccc;
}

/* ==============================
   LEG DOWN
============================== */
.section-heading {
    font-size: 17px;
    font-weight: 600;
    color: #333;
    margin-bottom: 15px;
}

.view-loans-link {
    color: #087cff;
    text-decoration: underline;
    font-size: 13px;
    cursor: pointer;
    border: 0;
    background: transparent;
    padding: 0;
}

.view-loans-link:hover {
    color: #0056b3;
}

/* ==============================
   INVITE REFERRAL FORM
============================== */
.referral-form .form-label {
    font-size: 12px;
    color: #444;
    margin-bottom: 6px;
}

.referral-form .form-control,
.referral-form .form-select {
    height: 42px;
    font-size: 13px;
    border-radius: 5px;
    border: 1px solid #dedede;
}

.referral-form .form-control:focus,
.referral-form .form-select:focus {
    border-color: #4c9cff;
    box-shadow: 0 0 0 2px rgba(76,156,255,.10);
}

.invite-btn {
    background: #1684ff;
    color: #fff;
    border: 1px solid #1684ff;
    border-radius: 5px;
    padding: 10px 25px;
    font-size: 13px;
    font-weight: 500;
}

.invite-btn:hover {
    background: #006fe6;
    color: #fff;
}

/* ==============================
   RESPONSIVE
============================== */
@media(max-width: 767px) {

    .wallet-page {
        padding: 15px 10px;
    }

    .wallet-page .page-title {
        font-size: 19px;
    }

    .wallet-tabs {
        flex-wrap: nowrap;
        overflow-x: auto;
    }

    .wallet-tabs .nav-link {
        white-space: nowrap;
        padding: 8px 12px;
        font-size: 12px;
    }

    .wallet-card .card-body {
        padding: 14px;
    }

    .balance-box {
        min-height: 210px;
        padding: 20px 12px;
    }

    .balance-amount {
        font-size: 22px;
    }

    .wallet-table thead th,
    .wallet-table tbody td {
        padding: 12px 10px;
        font-size: 11px;
    }

    .referral-form .row > div {
        margin-bottom: 12px;
    }
}
</style>

<div class="container-fluid wallet-page">

    {{-- PAGE HEADING --}}
    <div class="mb-3">
        <h3 class="page-title">
            My Wallet
        </h3>
    </div>

    {{-- TABS --}}
    <ul class="nav nav-pills wallet-tabs" role="tablist">

        <li class="nav-item">
            <button
                class="nav-link {{ !in_array(request('tab'), ['legdown', 'invite']) ? 'active' : '' }}"
                data-bs-toggle="pill"
                data-bs-target="#walletTab"
                type="button">
                Wallet
            </button>
        </li>

        <li class="nav-item">
            <button
                class="nav-link {{ request('tab') === 'legdown' ? 'active' : '' }}"
                data-bs-toggle="pill"
                data-bs-target="#legDownTab"
                type="button">
                Leg Down
            </button>
        </li>

        <li class="nav-item">
            <button
                class="nav-link {{ request('tab') === 'invite' ? 'active' : '' }}"
                data-bs-toggle="pill"
                data-bs-target="#inviteReferralTab"
                type="button">
                Invite Referral
            </button>
        </li>

    </ul>

    <div class="tab-content">

        {{-- =====================================
             1. WALLET TAB
        ====================================== --}}
        <div
            class="tab-pane fade {{ !in_array(request('tab'), ['legdown', 'invite']) ? 'show active' : '' }}"
            id="walletTab">

            {{-- WALLET BALANCE --}}
            <div class="wallet-card">
                <div class="card-body">

                    <div class="balance-box">

                        <p class="balance-label">
                            Current Balance
                        </p>

                        <h3 class="balance-amount">
                            ₹{{ number_format($walletBalance, 2) }}
                        </h3>

                        <form
                            action="{{ route('user.withdraw.request') }}"
                            method="POST"
                            class="withdraw-form">

                            @csrf

                            <input
                                type="number"
                                name="amount"
                                class="form-control"
                                placeholder="Withdraw amount"
                                min="1"
                                step="1"
                                required>

                            <button type="submit" class="withdraw-btn">
                                <i class="fas fa-wallet me-2"></i>
                                Withdraw
                            </button>

                        </form>

                    </div>

                </div>
            </div>

            {{-- TRANSACTION HISTORY --}}
            <div class="wallet-card">

                <div class="card-body">

                    <h5 class="card-heading">
                        Transaction history
                    </h5>

                    <div class="table-responsive">

                        <table class="table wallet-table align-middle">

                            <thead>
                                <tr>
                                    <th>Transaction ID</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </tr>
                            </thead>

                            <tbody>

                                @forelse($combinedData as $data)

                                    <tr>

                                        <td>
                                            {{ $data->transaction_id ?? $data->id }}
                                        </td>

                                        <td>
                                            ₹{{ number_format($data->amount, 2) }}
                                        </td>

                                        <td>

                                            @php
                                                $status = strtolower($data->status ?? '');
                                            @endphp

                                            <span class="status-pill
                                                {{ $status === 'pending' ? 'status-pending' :
                                                ($status === 'open' ? 'status-open' :
                                                ($status === 'completed' ? 'status-completed' : 'status-other')) }}">

                                                {{ ucfirst($data->status ?? 'Unknown') }}

                                            </span>

                                        </td>

                                        <td>
                                            {{ \Carbon\Carbon::parse($data->created_at)->format('d M Y, h:i A') }}
                                        </td>

                                    </tr>

                                @empty

                                    <tr>
                                        <td colspan="4" class="text-center text-muted">
                                            No transactions found.
                                        </td>
                                    </tr>

                                @endforelse

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </div>


        {{-- =====================================
             2. LEG DOWN TAB
        ====================================== --}}
        <div
            class="tab-pane fade {{ request('tab') === 'legdown' ? 'show active' : '' }}"
            id="legDownTab">

            <div class="wallet-card">

                <div class="card-body">

                    {{-- TEAM TRANSACTION HISTORY --}}
                    <h5 class="card-heading mb-0">
                        Transaction history
                    </h5>

                    <div class="table-responsive">

                        <table class="table wallet-table align-middle">

                            <thead>
                                <tr>
                                    <th>Sr No.</th>
                                    <th>Name</th>
                                    <th>Referral Code</th>
                                    <th>Parent</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>

                                @forelse($descendants as $i => $d)

                                    <tr>

                                        <td>{{ $i + 1 }}</td>

                                        <td>{{ $d->name }}</td>

                                        <td>{{ $d->referral_code }}</td>

                                        <td>{{ $d->parent_name }}</td>

                                        <td>
                                            <button
                                                type="button"
                                                class="view-loans-link view-child-loans"
                                                data-user-id="{{ $d->user_id }}">

                                                View loans

                                            </button>
                                        </td>

                                    </tr>

                                @empty

                                    <tr>
                                        <td colspan="5" class="text-center text-muted">
                                            No child nodes found.
                                        </td>
                                    </tr>

                                @endforelse

                            </tbody>

                        </table>

                    </div>


                    {{-- LOANS TABLE --}}
                    <div id="loan-details" class="mt-4" style="display:none;">

                        <h5 class="card-heading mb-0">
                            Loans
                        </h5>

                        <div class="table-responsive">

                            <table class="table wallet-table align-middle">

                                <thead>
                                    <tr>
                                        <th>Sr No.</th>
                                        <th>Loan Reference No.</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Category</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td colspan="6" class="text-center">
                                            Select View Loans to see loan details.
                                        </td>
                                    </tr>
                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        {{-- =====================================
             3. INVITE REFERRAL TAB
        ====================================== --}}
        <div
            class="tab-pane fade {{ request('tab') === 'invite' ? 'show active' : '' }}"
            id="inviteReferralTab">

            {{-- SUCCESS MESSAGE --}}
            @if(session('message'))
                <div class="alert alert-success mb-3">
                    {{ session('message') }}
                </div>
            @endif


            {{-- INVITE REFERRAL FORM --}}
            <div class="wallet-card">

                <div class="card-body">

                    <h5 class="card-heading">
                        Invite Referral
                    </h5>

                    <form
                        method="POST"
                        action="{{ route('invite.referral.submit') }}"
                        class="referral-form">

                        @csrf

                        <div class="row mt-3">

                            {{-- FRIEND NAME --}}
                            <div class="col-md-6">

                                <label class="form-label">
                                    Friend Name
                                </label>

                                <input
                                    type="text"
                                    name="name"
                                    value="{{ old('name') }}"
                                    class="form-control"
                                    placeholder="Enter name"
                                    required>

                            </div>


                            {{-- EMAIL --}}
                            <div class="col-md-6">

                                <label class="form-label">
                                    Email (Optional)
                                </label>

                                <input
                                    type="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    class="form-control"
                                    placeholder="Enter email address">

                            </div>


                            {{-- MOBILE --}}
                            <div class="col-md-6">

                                <label class="form-label">
                                    Mobile Number
                                </label>

                                @error('mobile')
                                    <div class="alert alert-danger py-1 mb-2">
                                        {{ $message }}
                                    </div>
                                @enderror

                                <input
                                    type="text"
                                    name="mobile"
                                    value="{{ old('mobile') }}"
                                    class="form-control @error('mobile') is-invalid @enderror"
                                    maxlength="10"
                                    placeholder="Enter mobile number">

                            </div>


                            {{-- PRODUCT TYPE --}}
                            <div class="col-md-6">

                                <label class="form-label">
                                    Product Type
                                </label>

                                <select
                                    name="product_type"
                                    id="productType"
                                    class="form-select"
                                    required>

                                    <option value="">
                                        Select product
                                    </option>

                                    @foreach($loanCategories as $category)

                                        <option
                                            value="{{ $category->loan_category_id }}"
                                            {{ old('product_type') == $category->loan_category_id ? 'selected' : '' }}>

                                            {{ $category->category_name }}

                                        </option>

                                    @endforeach

                                    <option
                                        value="other"
                                        {{ old('product_type') == 'other' ? 'selected' : '' }}>

                                        Other

                                    </option>

                                </select>

                            </div>


                            {{-- OTHER REMARK --}}
                            <div
                                class="col-md-6 mt-2 {{ old('product_type') == 'other' ? '' : 'd-none' }}"
                                id="otherRemarkBox">

                                <label class="form-label">
                                    Please Specify
                                </label>

                                <input
                                    type="text"
                                    name="other_remark"
                                    value="{{ old('other_remark') }}"
                                    class="form-control"
                                    placeholder="Enter product details">

                            </div>

                        </div>


                        <div class="mt-3">

                            <button type="submit" class="invite-btn">
                                Send Invite
                            </button>

                        </div>

                    </form>

                </div>

            </div>


            {{-- MY REFERRAL INVITES --}}
            <div class="wallet-card">

                <div class="card-body">

                    <h5 class="card-heading">
                        My Referral Invites
                    </h5>

                    <div class="table-responsive mt-2">

                        <table class="table wallet-table align-middle">

                            <thead>
                                <tr>
                                    <th>Sr No.</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Product</th>
                                    <th>Date</th>
                                </tr>
                            </thead>

                            <tbody>

                                @forelse($myReferralLeads as $i => $lead)

                                    <tr>

                                        <td>{{ $i + 1 }}</td>

                                        <td>{{ $lead->name }}</td>

                                        <td>{{ $lead->mobile }}</td>

                                        <td>{{ $lead->email ?? '-' }}</td>

                                        <td>{{ $lead->product_name ?? '-' }}</td>

                                        <td>
                                            {{ \Carbon\Carbon::parse($lead->created_at)->format('d M Y') }}
                                        </td>

                                    </tr>

                                @empty

                                    <tr>
                                        <td colspan="6" class="text-center text-muted">
                                            No referral invites sent yet.
                                        </td>
                                    </tr>

                                @endforelse

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection


@section('custom-script')

<script>
document.addEventListener('DOMContentLoaded', function () {

    /* ==================================
       OTHER PRODUCT DROPDOWN
    ================================== */

    const productType = document.getElementById('productType');
    const remarkBox = document.getElementById('otherRemarkBox');

    if (productType && remarkBox) {

        productType.addEventListener('change', function () {

            if (this.value === 'other') {
                remarkBox.classList.remove('d-none');
            } else {
                remarkBox.classList.add('d-none');
            }

        });

    }


    /* ==================================
       LEG DOWN - VIEW LOANS AJAX
    ================================== */

    document.addEventListener('click', async function (e) {

        const button = e.target.closest('.view-child-loans');

        if (!button) return;

        const userId = button.dataset.userId;

        const loanBox = document.getElementById('loan-details');
        const loanBody = loanBox.querySelector('tbody');

        loanBox.style.display = 'block';

        loanBox.scrollIntoView({
            behavior: 'smooth',
            block: 'nearest'
        });

        loanBody.innerHTML = `
            <tr>
                <td colspan="6" class="text-center">
                    Loading...
                </td>
            </tr>
        `;

        try {

            const res = await fetch(
                `/loans-by-child?user_id=${encodeURIComponent(userId)}`
            );

            if (!res.ok) {
                throw new Error('Request failed');
            }

            const loans = await res.json();

            loanBody.innerHTML = '';

            if (!loans.length) {

                loanBody.innerHTML = `
                    <tr>
                        <td colspan="6" class="text-center text-muted">
                            No loans found
                        </td>
                    </tr>
                `;

                return;
            }

            loans.forEach((loan, i) => {

                const tr = document.createElement('tr');

                const values = [
                    i + 1,
                    loan.loan_reference_id ?? '-',
                    '₹' + (loan.amount ?? 0),
                    loan.status ?? '-',
                    loan.category_name ?? '-',
                    loan.created_at ?? '-'
                ];

                values.forEach((value, index) => {

                    const td = document.createElement('td');

                    if (index === 3) {

                        const status = document.createElement('span');

                        status.className =
                            'status-pill ' +
                            (String(value).toLowerCase() === 'pending'
                                ? 'status-pending'
                                : String(value).toLowerCase() === 'open'
                                    ? 'status-open'
                                    : String(value).toLowerCase() === 'completed'
                                        ? 'status-completed'
                                        : 'status-other');

                        status.textContent = value;

                        td.appendChild(status);

                    } else {

                        td.textContent = value;

                    }

                    tr.appendChild(td);

                });

                loanBody.appendChild(tr);

            });

        } catch (error) {

            loanBody.innerHTML = `
                <tr>
                    <td colspan="6" class="text-danger text-center">
                        Failed to load loans
                    </td>
                </tr>
            `;

            console.error(error);

        }

    });


    /* ==================================
       VALIDATION ERROR - OPEN INVITE TAB
    ================================== */

    @if ($errors->has('mobile'))

        const inviteTabBtn = document.querySelector(
            'button[data-bs-target="#inviteReferralTab"]'
        );

        if (inviteTabBtn && window.bootstrap) {

            bootstrap.Tab.getOrCreateInstance(inviteTabBtn).show();

        }

    @endif

});
</script>

@endsection
