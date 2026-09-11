@extends('layouts.header')
@section('title')
    @parent
    JFS | Dashboard
@endsection
@section('content')
    @parent
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
   
 <style>/* ===== Overlay ===== */

/* =========================================================
   CUSTOMER / USER TABLE UI
   Only UI styling - HTML, AJAX & functionality unchanged
   ========================================================= */

/* Main table card */
#user_table_container {
    width: 100%;
    overflow-x: auto;
    background: #ffffff;
    border-radius: 10px;
}

/* Search area */
#userSearch {
    height: 44px;
    width: 100%;
    border: 1px solid #dfe3e8;
    border-radius: 7px;
    padding: 10px 14px;
    font-size: 14px;
    color: #333;
    background: #fff;
    box-shadow: none;
    transition: all 0.2s ease;
}

#userSearch::placeholder {
    color: #9aa1aa;
    font-size: 13px;
}

#userSearch:focus {
    border-color: #295cab;
    box-shadow: 0 0 0 3px rgba(41, 92, 171, 0.08);
    outline: none;
}

/* Search row spacing */
#user_table_container ~ * {
    box-sizing: border-box;
}

/* Table */
#user_table {
    width: 100%;
    min-width: 850px;
    margin: 0;
    border-collapse: separate;
    border-spacing: 0;
    background: #fff;
}

/* Table header */
#user_table thead th {
    background: #f6f8fb;
    color: #374151;
    font-size: 13px;
    font-weight: 600;
    padding: 14px 16px;
    border-top: 1px solid #e8ebef;
    border-bottom: 1px solid #e8ebef;
    white-space: nowrap;
    vertical-align: middle;
}

/* First header */
#user_table thead th:first-child {
    border-left: 1px solid #e8ebef;
    border-radius: 8px 0 0 0;
}

/* Last header */
#user_table thead th:last-child {
    border-right: 1px solid #e8ebef;
    border-radius: 0 8px 0 0;
}

/* Table body cells */
#user_table tbody td {
    padding: 14px 16px;
    font-size: 13px;
    color: #4b5563;
    vertical-align: middle;
    border-bottom: 1px solid #edf0f3;
    background: #fff;
    white-space: nowrap;
}

/* ID column */
#user_table tbody td:first-child {
    color: #6b7280;
    font-weight: 500;
}

/* Row hover */
#user_table tbody tr {
    transition: background 0.2s ease;
}

#user_table tbody tr:hover td {
    background: #f8fafc;
}

/* Customer name link */
#user_table .user-link {
    color: #295cab;
    font-weight: 600;
    text-decoration: none;
    transition: color 0.2s ease;
}

#user_table .user-link:hover {
    color: #174a91;
    text-decoration: underline;
}

/* Empty table */
#user_table tbody:empty::after {
    content: "No records found";
    display: block;
    text-align: center;
    padding: 30px;
    color: #9ca3af;
}

/* =========================================================
   ACTION BUTTONS
   ========================================================= */

#user_table td:last-child {
    min-width: 135px;
}

#user_table .edit-user,
#user_table .delete-user,
#user_table .reset-password {
    width: 32px;
    height: 32px;
    padding: 0;
    margin-right: 5px;
    border-radius: 6px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border: none;
    font-size: 12px;
    transition: all 0.2s ease;
}

/* Edit */
#user_table .edit-user {
    background: #e8f1ff;
    color: #2563eb;
}

#user_table .edit-user:hover {
    background: #2563eb;
    color: #fff;
    transform: translateY(-1px);
}

/* Delete */
#user_table .delete-user {
    background: #feecec;
    color: #dc2626;
}

#user_table .delete-user:hover {
    background: #dc2626;
    color: #fff;
    transform: translateY(-1px);
}

/* Reset password */
#user_table .reset-password {
    background: #fff5d9;
    color: #d97706;
}

#user_table .reset-password:hover {
    background: #d97706;
    color: #fff;
    transform: translateY(-1px);
}

/* Remove default Bootstrap button focus outline */
#user_table button:focus {
    outline: none;
    box-shadow: none;
}

/* =========================================================
   PAGINATION / TABLE FOOTER
   ========================================================= */

#user_table_container > .d-flex {
    padding: 14px 4px 2px;
    flex-wrap: wrap;
    gap: 12px;
}

/* Showing entries */
#user_table_container .dataTables_info {
    color: #6b7280;
    font-size: 13px;
}

/* Pagination wrapper */
#user_table_container .dataTables_paginate {
    margin-left: auto;
}

/* Pagination list */
#user_table_container .pagination {
    margin: 0;
    display: flex;
    align-items: center;
    gap: 4px;
}

/* Pagination item */
#user_table_container .pagination .page-item {
    margin: 0;
}

/* Pagination links */
#user_table_container .pagination .page-link {
    min-width: 34px;
    height: 34px;
    padding: 6px 10px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border: 1px solid #e2e6eb;
    border-radius: 6px;
    background: #fff;
    color: #4b5563;
    font-size: 13px;
    text-decoration: none;
    transition: all 0.2s ease;
}

/* Pagination hover */
#user_table_container .pagination .page-link:hover {
    background: #f1f5f9;
    border-color: #cbd5e1;
    color: #295cab;
}

/* Active page */
#user_table_container .pagination .page-item.active .page-link {
    background: #295cab;
    border-color: #295cab;
    color: #fff;
}

/* Disabled pagination */
#user_table_container .pagination .page-item.disabled .page-link {
    background: #f8f9fa;
    color: #b0b6bd;
    border-color: #e5e7eb;
    cursor: not-allowed;
}

/* =========================================================
   TABLE CARD SPACING
   ========================================================= */

.card:has(#user_table) {
    border: 1px solid #edf0f3;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.04);
    background: #fff;
}

.card:has(#user_table) .card-body {
    padding: 22px;
}

/* Search column */
.card:has(#user_table) .row.mb-3 {
    margin-bottom: 18px !important;
}

.card:has(#user_table) .row.mb-3 .col-md-4 {
    max-width: 380px;
}

/* =========================================================
   MOBILE RESPONSIVE
   ========================================================= */

@media (max-width: 767px) {

    /* Card spacing */
    .card:has(#user_table) .card-body {
        padding: 14px;
    }

    /* Search full width */
    .card:has(#user_table) .row.mb-3 .col-md-4 {
        max-width: 100%;
        width: 100%;
    }

    #userSearch {
        height: 42px;
        font-size: 13px;
    }

    /* Horizontal table scroll */
    #user_table_container {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        border-radius: 8px;
    }

    #user_table {
        min-width: 850px;
    }

    #user_table thead th {
        padding: 12px 13px;
        font-size: 12px;
    }

    #user_table tbody td {
        padding: 12px 13px;
        font-size: 12px;
    }

    /* Action buttons */
    #user_table .edit-user,
    #user_table .delete-user,
    #user_table .reset-password {
        width: 30px;
        height: 30px;
        margin-right: 3px;
    }

    /* Footer */
    #user_table_container > .d-flex {
        display: flex !important;
        flex-direction: column;
        align-items: flex-start !important;
        padding-top: 14px;
    }

    #user_table_container .dataTables_paginate {
        width: 100%;
        margin-left: 0;
        overflow-x: auto;
    }

    #user_table_container .pagination {
        justify-content: flex-start;
        flex-wrap: nowrap;
        width: max-content;
    }

    #user_table_container .pagination .page-link {
        min-width: 32px;
        height: 32px;
        font-size: 12px;
    }

    #user_table_container .dataTables_info {
        font-size: 12px;
    }
}

/* Small mobile */
@media (max-width: 480px) {

    .card:has(#user_table) .card-body {
        padding: 10px;
    }

    #user_table thead th {
        padding: 11px 12px;
    }

    #user_table tbody td {
        padding: 11px 12px;
    }

    #user_table_container > .d-flex {
        gap: 10px;
    }
}


.modal-overlay {
    background: rgba(0,0,0,0.15);
    display: flex;
    align-items: center;
    justify-content: center;
}
.personal-details-form input::placeholder {
    color: #9ca3af;
}
input[type="password"]::placeholder {
    color: #6b7280;
    font-size: 13px;
}
.password-wrapper {
    position: relative;
}
.teal{
background: linear-gradient(135deg,#06b6d4,#0e7490);
color:#fff;
}

.teal .overview-icon i{
color:#fff;
font-size:32px;
}

.teal .overview-content h3,
.teal .overview-content p,
.teal .overview-content span{
color:#fff;
}

.password-wrapper input {
    padding-right: 40px;
}

.toggle-password {
    position: absolute;
    top: 50%;
    right: 12px;
    transform: translateY(-50%);
    cursor: pointer;
    color: #6c757d;
}

.toggle-password:hover {
    color: #000;
}



/* ===== Container ===== */
.modal-container,
.modal-dialog.modal-container {
    max-width: 900px;
    width: 100%;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 10px 40px rgba(0,0,0,0.12);
    padding: 24px 28px 30px;
}
.modal-backdrop {
    display: none !important;
}
body.modal-open {
    overflow: auto !important;
    padding-right: 0 !important;
}
.modal-backdrop.show {
    opacity: 0 !important;
}

/* ===== Header ===== */
.modal-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-bottom: none;
    padding: 0 0 16px;
}

.modal-header h2 {
    font-size: 18px;
    font-weight: 600;
    margin: 0;
}

.modal-header p {
    font-size: 13px;
    color: #6b7280;
    margin: 4px 0 0;
}

.modal-close {
    background: none;
    border: none;
    font-size: 14px;
    color: #2563eb;
    cursor: pointer;
}

/* ===== Section Titles ===== */
.personal-details-form h4,
.section-title {
    font-size: 14px;
    font-weight: 600;
    margin: 22px 0 10px;
}

/* ===== Form Layout ===== */
.personal-details-form {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 16px 20px;
}

.personal-details-form .form-group {
    display: flex;
    flex-direction: column;
}

.personal-details-form .form-row {
    grid-column: span 2;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 16px 20px;
}

/* ===== Labels ===== */
.personal-details-form label {
    font-size: 13px;
    font-weight: 500;
    margin-bottom: 6px;
    color: #111827;
}

/* ===== Inputs ===== */
.personal-details-form input {
    height: 42px;
    padding: 10px 12px;
    border-radius: 6px;
    border: 1px solid #e5e7eb;
    font-size: 14px;
    outline: none;
    transition: border 0.2s;
}

.personal-details-form input::placeholder {
    color: #9ca3af;
}

.personal-details-form input:focus {
    border-color: #3b82f6;
}

/* Full width fields */
.personal-details-form .form-group:nth-child(3),
.personal-details-form .form-group:nth-child(4),
.personal-details-form .form-group:nth-child(6),
.personal-details-form .form-group:nth-child(9) {
    grid-column: span 2;
}

/* ===== Footer ===== */
.modal-footer {
    grid-column: span 2;
    margin-top: 20px;
    display: flex;
    justify-content: flex-end;
    gap: 12px;
}

/* ===== Buttons ===== */
.btn-back {
    background: transparent;
    border: none;
    color: #6b7280;
    font-size: 14px;
    cursor: pointer;
}

.btn-submit {
    background: #3b82f6;
    color: #fff;
    border: none;
    padding: 12px 22px;
    border-radius: 8px;
    font-size: 14px;
    font-weight: 500;
    cursor: pointer;
    width: 100%;
}

.btn-submit:hover {
    background: #2563eb;
}

/* Remove underline & blue color from clickable cards */


.overview-link {
  text-decoration: none;
  color: inherit;
  display: block;
}

.overview-link:hover,
.overview-link:focus,
.overview-link:active {
  text-decoration: none;
  color: inherit;
}
</style>  
    
  <div class="page-header">
    <div>
      <h1 id="pageTitle">All Customers</h1>
      <p id="pageSubtitle">Manage and view all customers information.</p>
    </div>
    <div class="header-actions">
      <button class="btn-export" onclick="refreshUsers()">
        <i class="fas fa-sync-alt"></i> Refresh
      </button>
      <button type="button"
        class="btn btn-primary"
        id="openAddModal"
        data-bs-toggle="modal"
        data-bs-target="#addUserView">
    Add Customer
</button>


    </div>
  </div>

  <!-- MESSAGE -->
  <div id="messageBox"></div>
    <div class="card-header py-3">
         <div class="row pt-5 pb-4">
                <div class="col-12">
<div class="customer-overview-grid">

<!-- ================= TOTAL CUSTOMERS ================= -->
<a href="javascript:void(0)"
   class="overview-link load-list active"
   data-type="customer">

  <div class="overview-card blue">

    <div class="overview-icon">
      <i class="fas fa-users"></i>
    </div>

    <div class="overview-content">
      <h3 style="font-size:28px;">Total Customers</h3>
      <p id="totalCustomers">{{ $totalCustomers }}</p>
      <span class="overview-status">Tracked from Records</span>
    </div>

  </div>
</a>

<!-- ================= TOTAL EMPLOYEES ================= -->
<a href="javascript:void(0)"
   class="overview-link load-list"
   data-type="agent">

  <div class="overview-card green">

    <div class="overview-icon">
      <i class="fas fa-user-tie"></i>
    </div>

    <div class="overview-content">
      <h3 style="font-size:28px;">Total Employees</h3>
      <p id="totalEmployees" style="font-size:20px;">
        {{ $totalEmployees}}
      </p>
      <span class="overview-status">System Users</span>
    </div>

  </div>
</a>

<!-- ================= CHANNEL PARTNERS ================= -->
<a href="javascript:void(0)"
   class="overview-link load-list"
   data-type="cp">

  <div class="overview-card purple">

    <div class="overview-icon">
      <i class="fas fa-handshake"></i>
    </div>

    <div class="overview-content">
      <h3 style="font-size:25px;">Channel Partners</h3>
      <p id="totalPartners" style="font-size:20px;">
        {{ $totalChannelPartners }}
      </p>
      <span class="overview-status">Active Partners</span>
    </div>

  </div>
</a>

<!-- ================= ACTIVE USERS (OPTIONAL) ================= -->
<!-- <a href="javascript:void(0)"
   class="overview-link load-list"
   data-type="active">

<div class="overview-card purple">

<div class="overview-icon">
<i class="fas fa-circle"></i>
</div>

<div class="overview-content">
<h3 style="font-size:28px;">Active Customer</h3>

<p style="font-size:20px;">
{{ $activeCustomers }}
</p>

<span class="overview-status">Active Loan Users</span>

</div>
</div>
</a> -->
<a href="javascript:void(0)"
   class="overview-link load-list"
   data-type="active">

<div class="overview-card teal">

<div class="overview-icon">
<i class="fas fa-user-check"></i>
</div>

<div class="overview-content">
<h3 style="font-size:28px;">Active Customer</h3>

<p style="font-size:20px;">
{{ $activeCustomers }}
</p>

<span class="overview-status">Active Loan Users</span>

</div>
</div>
</a>

<!-- ================= OUR CUSTOMERS ================= -->
<!-- <a href="javascript:void(0)"
   class="overview-link load-list"
   data-type="our">

<div class="overview-card blue">

<div class="overview-icon">
<i class="fas fa-user-check"></i>
</div>

<div class="overview-content">
<h3 style="font-size:28px;">Our Customers</h3>

<p style="font-size:20px;">
{{ $ourCustomers }}
</p>

<span class="overview-status">Disbursed Loan Customers</span>

</div>
</div>
</a> -->

</div>

                </div>
            </div>
    </div>

          

    



    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card pt-3">
                <div class="card-body">
                    <!-- 🔍 SEARCH BAR -->
                <div class="row mb-3">
                    <div class="col-md-4">
                        <input type="text"
                            id="userSearch"
                            class="form-control"
                            placeholder="Search by Name or Mobile">
                    </div>
                </div>
                    <div class="table-responsive" id="user_table_container">
                        <table id="user_table" class="table">
                            <thead>
                                <tr>
                                    <th> ID </th>
                                    <th> Name </th>
                                    <th> Email ID </th>
                                    <th> Mobile Number </th>
                                    <th> Pan No. </th>
                                    <th> Status </th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tbody id="user_table_body">
                                
                               @foreach ($users as $user)
<tr>
    <td>{{ $loop->iteration + ($users->currentPage() - 1) * $users->perPage() }}</td>
                                        <td><a href="javascript:void(0);" 
                                        class="user-link" 
                                        data-name="{{ $user->name }}" 
                                        data-email="{{ $user->email_id }}" 
                                        data-mobile="{{ $user->mobile_no ?? '-' }}" 
                                        data-dob="{{ $user->profile->pan_number ?? '-' }}" 
                                        > {{ $user->name }}
                                        </a>

                                        </td>
                                        <td>{{ $user->email_id }}</td>
<td>{{ $user->profile->mobile_no ?? $user->mobile_no ?? '-' }}</td>
                                        <td>{{ $user->profile->pan_number ?? ''}}</td>
                                       <td>
    <label style="margin-right: 12px;">
        <input type="radio"
               name="status_{{ $user->id }}"
               value="1"
               onclick="updateStatus({{ $user->id }}, 1)"
               {{ $user->status == 1 ? 'checked' : '' }}>
        Active
    </label>

    <label>
        <input type="radio"
               name="status_{{ $user->id }}"
               value="0"
               onclick="updateStatus({{ $user->id }}, 0)"
               {{ $user->status == 0 ? 'checked' : '' }}>
        Inactive
    </label>
</td>
                                        <td>
                                           <button type="button"
                                                    class="btn btn-primary btn-xs edit-user"
                                                    data-id="{{ $user->id }}">
                                                <i class="fa fa-edit"></i>
                                            </button>


                                            <button type="button"
                                                class="btn btn-danger btn-xs delete-user"
                                                data-id="{{ $user->id }}">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                        <button type="button"
                                            class="btn btn-warning btn-xs reset-password"
                                            data-id="{{ $user->id }}">
                                        <i class="fa fa-key"></i>
                                    </button>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- Pagination Links -->
                        <div class="d-flex justify-content-between align-items-center mt-4">
                            <div class="dataTables_info">
                                Showing {{ $users->firstItem() }} to {{ $users->lastItem() }} of {{ $users->total() }}
                                entries
                            </div>
                            <div class="dataTables_paginate paging_simple_numbers">
                                <nav>
                                    {{ $users->onEachSide(1)->links('pagination::bootstrap-4') }}
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

           
 
    <!-- Add User Modal -->
  
<div class="modal fade" id="addUserView" tabindex="-1"
     aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg rounded-4 overflow-hidden">

            <!-- Modal Header -->
            <div class="modal-header px-4 py-3 bg-white border-bottom">

                <div class="d-flex align-items-center gap-3">

                    <div class="d-flex align-items-center justify-content-center rounded-circle"
                         style="width:44px;height:44px;background:#f1f3f5;">
                        <i class="fa fa-user-plus text-dark fs-5"></i>
                    </div>

                    <div>
                        <h5 class="modal-title fw-semibold text-dark mb-0"
                            id="exampleModalLabel">
                            Add New User
                        </h5>

                        <small class="text-muted">
                            Enter the user's details below
                        </small>
                    </div>

                </div>

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>

            </div>

            <!-- Modal Body -->
            <div class="modal-body p-4"
                 style="background:#fafafa;">

                <form class="user" id="addUser" method="post">
                    @csrf

                    <!-- Basic Information -->
                    <div class="mb-4">

                        <div class="d-flex align-items-center mb-3">
                            <span class="fw-semibold text-dark">
                                Basic Information
                            </span>
                            <div class="flex-grow-1 ms-3"
                                 style="height:1px;background:#e9ecef;"></div>
                        </div>

                        <div class="row g-3">

                            <div class="form-group col-lg-4">
                                <label for="full_name"
                                       class="form-label fw-semibold text-dark">
                                    Name
                                </label>

                                <input type="text"
                                       class="form-control"
                                       id="full_name"
                                       name="full_name"
                                       required
                                       placeholder="Enter full name">
                            </div>

                            <div class="form-group col-lg-4">
                                <label for="email_id"
                                       class="form-label fw-semibold text-dark">
                                    Email ID
                                </label>

                                <input type="email"
                                       class="form-control"
                                       id="email_id"
                                       name="email_id"
                                       required
                                       placeholder="Enter email address">
                            </div>

                            <input type="hidden"
                                   id="user_id"
                                   name="user_id">

                            <div class="form-group col-lg-4">
                                <label class="form-label fw-semibold text-dark">
                                    Password
                                </label>

                                <div class="password-wrapper position-relative">

                                    <input type="password"
                                           class="form-control"
                                           id="password"
                                           name="password"
                                           placeholder="Enter minimum 6 characters"
                                           minlength="6"
                                           style="padding-right:45px;">

                                    <span class="toggle-password"
                                          onclick="togglePassword()"
                                          style="position:absolute;
                                                 right:14px;
                                                 top:50%;
                                                 transform:translateY(-50%);
                                                 cursor:pointer;
                                                 z-index:5;
                                                 color:#6c757d;">
                                        <i class="fa fa-eye"
                                           id="eyeIcon"></i>
                                    </span>

                                </div>

                                <small class="text-muted">
                                    Leave blank to keep existing password
                                </small>
                            </div>

                        </div>
                    </div>

                    <input type="hidden"
                           id="user_type"
                           name="user_type"
                           value="customer">


                    <!-- Personal Information -->
                    <div class="mb-4">

                        <div class="d-flex align-items-center mb-3">
                            <span class="fw-semibold text-dark">
                                Personal Information
                            </span>

                            <div class="flex-grow-1 ms-3"
                                 style="height:1px;background:#e9ecef;"></div>
                        </div>

                        <div class="row g-3">

                            <div class="form-group col-lg-4">
                                <label for="mobile_no"
                                       class="form-label fw-semibold text-dark">
                                    Mobile Number
                                </label>

                                <input type="tel"
                                       class="form-control"
                                       id="mobile_no"
                                       name="mobile_no"
                                       required
                                       placeholder="Enter mobile number">
                            </div>

                            <div class="form-group col-lg-4">
                                <label for="dob"
                                       class="form-label fw-semibold text-dark">
                                    Date of Birth
                                </label>

                                <input type="date"
                                       class="form-control"
                                       id="dob"
                                       name="dob"
                                       max="{{ \Carbon\Carbon::now()->subYears(18)->format('Y-m-d') }}">
                            </div>

                            <div class="form-group col-lg-4">
                                <label for="address"
                                       class="form-label fw-semibold text-dark">
                                    Address
                                </label>

                                <input type="tel"
                                       class="form-control"
                                       id="address"
                                       name="address"
                                       placeholder="Enter address">
                            </div>

                        </div>
                    </div>


                    <!-- Location Information -->
                    <div class="mb-2">

                        <div class="d-flex align-items-center mb-3">
                            <span class="fw-semibold text-dark">
                                Location Information
                            </span>

                            <div class="flex-grow-1 ms-3"
                                 style="height:1px;background:#e9ecef;"></div>
                        </div>

                        <div class="row g-3">

                            <div class="form-group col-lg-4">
                                <label class="form-label fw-semibold text-dark">
                                    State
                                </label>

                                <select class="form-control"
                                        id="state"
                                        name="state"
                                        required>
                                    <option value="">
                                        -- Select State --
                                    </option>

                                    @foreach($states as $state)
                                        <option value="{{ $state->id }}">
                                            {{ $state->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-lg-4">
                                <label class="form-label fw-semibold text-dark">
                                    City
                                </label>

                                <select class="form-control"
                                        id="city"
                                        name="city"
                                        required>
                                    <option value="">
                                        -- Select City --
                                    </option>
                                </select>
                            </div>

                            <div class="form-group col-lg-4">
                                <label for="pincode"
                                       class="form-label fw-semibold text-dark">
                                    Pincode
                                </label>

                                <input type="text"
                                       class="form-control pincode-input"
                                       id="pincode"
                                       name="pincode"
                                       maxlength="6"
                                       inputmode="numeric"
                                       autocomplete="postal-code"
                                       placeholder="Enter 6 digit pincode">

                                <small id="pincode_error"
                                       class="text-danger"></small>
                            </div>

                        </div>
                    </div>

                    <!-- Footer -->
                    <div class="modal-footer px-0 pb-0 mt-4 border-top">

                        <button type="button"
                                class="btn btn-light border px-4"
                                data-bs-dismiss="modal">
                            Close
                        </button>

                        <button type="submit"
                                class="btn btn-dark px-4"
                                id="submitUserBtn">
                            <i class="fa fa-save me-2"></i>
                            Save User
                        </button>

                    </div>

                </form>

            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="resetPasswordModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow rounded-4 overflow-hidden">

            <!-- Header -->
            <div class="modal-header px-4 py-3 bg-white border-bottom">

                <div class="d-flex align-items-center gap-3">

                    <div class="d-flex align-items-center justify-content-center rounded-circle"
                         style="width:42px;height:42px;background:#f1f3f5;">
                        <i class="fa fa-lock text-dark"></i>
                    </div>

                    <div>
                        <h5 class="modal-title mb-0 fw-semibold text-dark">
                            Reset Password
                        </h5>
                        <small class="text-muted">
                            Create a new secure password
                        </small>
                    </div>

                </div>

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>

            </div>

            <!-- Body -->
            <div class="modal-body p-4">

                <form id="resetPasswordForm">
                    @csrf

                    <input type="hidden" id="reset_user_id">

                    <div class="mb-4">

                        <label for="new_password"
                               class="form-label fw-semibold text-dark mb-2">
                            New Password
                        </label>

                        <div class="input-group">

                            <span class="input-group-text bg-light border-end-0"
                                  style="border-radius:10px 0 0 10px;">
                                <i class="fa fa-key text-secondary"></i>
                            </span>

                            <input type="password"
                                   class="form-control bg-light border-start-0 border-end-0"
                                   id="new_password"
                                   placeholder="Enter new password"
                                   required
                                   minlength="6"
                                   style="height:48px;">

                            <span class="input-group-text bg-light border-start-0"
                                  style="cursor:pointer;border-radius:0 10px 10px 0;"
                                  id="toggleNewPassword">
                                <i class="fa fa-eye text-secondary"></i>
                            </span>

                        </div>

                        <small class="text-muted d-block mt-2">
                            <i class="fa fa-info-circle me-1"></i>
                            Password must contain at least 6 characters.
                        </small>

                    </div>

                    <!-- Update Button -->
                    <button type="submit"
                            class="btn btn-dark w-100 fw-semibold"
                            style="height:48px;border-radius:10px;">
                        <i class="fa fa-key me-2"></i>
                        Update Password
                    </button>

                </form>

            </div>

        </div>
    </div>
</div>







@endsection

@section('script')
    @parent
    


<script>
$(document).on('click', '.edit-user', function () {

    let userId = $(this).data('id');

    $.ajax({
        url: "{{ route('getUserById') }}",
        type: "GET",
        data: { id: userId },
        success: function (res) {

            $('#user_id').val(res.id);
            $('#full_name').val(res.name);
            $('#email_id').val(res.email_id);
            $('#mobile_no').val(res.mobile_no);
             $('#password').val(res.password);
            $('#dob').val(res.dob);
            $('#address').val(res.address);
           // ✅ SET STATE FIRST
    $('#state').val(res.state);

    // ✅ LOAD CITY & SELECT IT
    loadCities(res.state, res.city);
            $('#pincode').val(res.pincode);

            $('#submitUserBtn').text('Update');

            // 🔥 Update modal title based on active card
            if (currentType === 'agent') {
                $('#exampleModalLabel').text('Edit Agent');
            } else if (currentType === 'cp') {
                $('#exampleModalLabel').text('Edit Channel Partner');
            } else {
                $('#exampleModalLabel').text('Edit Customer');
            }

            $('#addUserView').modal('show');
        }
    });
});
</script>

<script>
$(document).off('submit', '#addUser').on('submit', '#addUser', function (e) {
    e.preventDefault();

    if ($('#submitUserBtn').prop('disabled')) return;

    let formData = new FormData(this);
    let userId = $('#user_id').val();
    let url = userId
        ? "{{ route('updateUser') }}"
        : "{{ route('insertUser') }}";

    $('#submitUserBtn').prop('disabled', true);

    $.ajax({
        url: url,
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,

        success: function (res) {
            if (res.status === 1) {
                swal("Success", res.msg, "success").then(() => {
                    $('#addUserView').modal('hide');
                    $('#addUser')[0].reset();
                    $('#user_id').val('');
                    $('#submitUserBtn').text('Save').prop('disabled', false);

                    // reload current list
                    $.ajax({
                        url: "{{ route('load.list.by.type') }}",
                        type: "GET",
                        data: { type: currentType },
success: function (res) {
    $('#user_table_body').html(res.html);
    $('.dataTables_paginate nav').html(res.pagination); // refresh pagination
}
                    });
                });
            } else {
                $('#submitUserBtn').prop('disabled', false);
                swal("Error", "Something went wrong", "error");
            }
        },

        error: function (xhr) {
            $('#submitUserBtn').prop('disabled', false);

            if (xhr.status === 422) {
                let msg = '';
                $.each(xhr.responseJSON.errors, function (k, v) {
                    msg += v[0] + '\n';
                });
                swal("Validation Error", msg, "error");
            } else {
                swal("Error", "Server error occurred", "error");
            }
        }
    });
});
</script>


<script>
$(document).on('click', '.delete-user', function () {

    let userId = $(this).data('id');

    swal({
        title: "Are you sure?",
        text: "This user will be deleted permanently.",
        icon: "warning",
        buttons: ["Cancel", "Yes, Delete"],
        dangerMode: true,
    }).then((willDelete) => {

        if (willDelete) {
            $.ajax({
                url: "{{ route('deleteUser') }}",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    user_id: userId
                },
                dataType: "json",
                success: function (res) {
                    if (res.status === 1) {
                        swal("Deleted!", res.msg, "success")
                            .then(() => location.reload());
                    } else {
                        swal("Error", res.error ?? "Delete failed", "error");
                    }
                },
               error: function (xhr) {

    // clear old errors
    $('.text-danger').text('');

    if (xhr.status === 422) {
        let errors = xhr.responseJSON.errors;

        if (errors.dob) {
            $('#dob_error').text(errors.dob[0]);
        }

        if (errors.full_name) {
            $('#full_name').after('<small class="text-danger">'+errors.full_name[0]+'</small>');
        }

        if (errors.email_id) {
            $('#email_id').after('<small class="text-danger">'+errors.email_id[0]+'</small>');
        }

        if (errors.mobile_no) {
            $('#mobile_no').after('<small class="text-danger">'+errors.mobile_no[0]+'</small>');
        }
    }
}

            });
        }

    });
});
</script>
<script>


   $(document).on('click', '.load-list', function () {

    $('.overview-link').removeClass('active');
    $(this).addClass('active');

    let type = $(this).data('type');
    currentType = type;

    $('#user_type').val(type);

    if (type === 'customer') {
        $('#openAddModal').text('Add Customer');
        $('#exampleModalLabel').text('Add New Customer');
    } 
    else if (type === 'agent') {
        $('#openAddModal').text('Add Employee');
        $('#exampleModalLabel').text('Add New Agent');
    } 
    else if (type === 'cp') {
        $('#openAddModal').text('Add Channel Partner');
        $('#exampleModalLabel').text('Add New Channel Partner');
    }
    else if (type === 'active') {
    $('#openAddModal').text('Active Customers');
    $('#exampleModalLabel').text('Active Customers');
}

    $.ajax({
        url: "{{ route('load.list.by.type') }}",
        type: "GET",
        data: { 
            type: type,
            page: 1 // 🔥 reset page when switching list
        },
        success: function (res) {

            $('#user_table_body').html(res.html);

            // 🔥 THIS FIXES THE ISSUE
            $('.dataTables_paginate nav').html(res.pagination);

        }
    });

});
</script>

<script>
let currentType = 'customer'; // default
</script>
<script>
function isAbove18(dob) {
    let today = new Date();
    let birthDate = new Date(dob);

    let age = today.getFullYear() - birthDate.getFullYear();
    let monthDiff = today.getMonth() - birthDate.getMonth();

    if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }

    return age >= 18;
}

$(document).on('submit', '#addUser', function (e) {

    let dob = $('#dob').val();

    if (dob) {
        if (!isAbove18(dob)) {
            e.preventDefault();
            swal("Validation Error", "User must be at least 18 years old.", "error");
            return false;
        }
    }
});
</script>

<script>
    $(document).on('click', '.reset-password', function () {
    let userId = $(this).data('id');

    $('#reset_user_id').val(userId);
    $('#new_password').val('');

    $('#resetPasswordModal').modal('show');
});
$('#resetPasswordForm').on('submit', function (e) {
    e.preventDefault();

    $.ajax({
        url: "{{ route('admin.reset.password') }}",
        type: "POST",
        data: {
            _token: "{{ csrf_token() }}",
            user_id: $('#reset_user_id').val(),
            password: $('#new_password').val()
        },
        success: function (res) {
            swal("Success", res.msg, "success");
            $('#resetPasswordModal').modal('hide');
        },
        error: function () {
            swal("Error", "Password reset failed", "error");
        }
    });
});
$('#toggleNewPassword').on('click', function () {

    let input = $('#new_password');
    let icon  = $(this).find('i');

    if (input.attr('type') === 'password') {
        input.attr('type', 'text');
        icon.removeClass('fa-eye').addClass('fa-eye-slash');
    } else {
        input.attr('type', 'password');
        icon.removeClass('fa-eye-slash').addClass('fa-eye');
    }
});


</script>
<script>$('#state').on('change', function () {

    let stateId = $(this).val();
    $('#city').html('<option value="">Loading...</option>');

    if (!stateId) {
        $('#city').html('<option value="">-- Select City --</option>');
        return;
    }

    $.ajax({
        url: '/get-cities/' + stateId,
        type: 'GET',
        success: function (cities) {

            let options = '<option value="">-- Select City --</option>';

            cities.forEach(function (city) {
                options += `<option value="${city.id}">
                                ${city.city}
                            </option>`;
            });

            $('#city').html(options);
        }
    });
});
</script>
<script>function loadCities(stateId, selectedCity = null) {

    $('#city').html('<option value="">Loading...</option>');

    $.ajax({
        url: '/get-cities/' + stateId,
        type: 'GET',
        success: function (cities) {

            let options = '<option value="">-- Select City --</option>';

            cities.forEach(function (city) {
                options += `<option value="${city.id}">
                                ${city.city}
                            </option>`;
            });

            $('#city').html(options);

            // ✅ Select city on edit
            if (selectedCity) {
                $('#city').val(selectedCity);
            }
        }
    });
}
</script>
<script>
function togglePassword() {
    const password = document.getElementById('password');
    const icon = document.getElementById('eyeIcon');

    if (password.type === 'password') {
        password.type = 'text';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
    } else {
        password.type = 'password';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
    }
}
</script>

  <!-- serach bar -->
   <script>
$(document).on('click', '.pagination a', function (e) {
    e.preventDefault();

    let page = new URL($(this).attr('href')).searchParams.get('page');

    $.ajax({
        url: "{{ route('load.list.by.type') }}",
        type: "GET",
        data: {
            type: currentType,
            search: $('#userSearch').val(),
            page: page
        },
        success: function (res) {
            $('#user_table_body').html(res.html);
            $('.dataTables_paginate nav').html(res.pagination);
        }
    });
});
</script>
<script>
let searchTimer = null;

// 🔍 LIVE SEARCH
$(document).on('keyup', '#userSearch', function () {
    clearTimeout(searchTimer);

    searchTimer = setTimeout(function () {
        $.ajax({
            url: "{{ route('load.list.by.type') }}",
            type: "GET",
            data: {
                type: currentType,
                search: $('#userSearch').val()
            },
            success: function (res) {
                $('#user_table_body').html(res.html);
                $('.dataTables_paginate nav').html(res.pagination);
            }
        });
    }, 300); // debounce
});
</script>
<script>
function updateStatus(userId, status) {

    $.ajax({
        url: "{{ route('admin.update.employee.status') }}",
        type: "POST",

        data: {
            _token: "{{ csrf_token() }}",
            user_id: userId,
            status: status
        },

        success: function(res) {

            if (res.status == 1) {

                let label = "User";

                if (currentType === 'customer') {
                    label = "Customer";
                } else if (currentType === 'agent') {
                    label = "Employee";
                } else if (currentType === 'cp') {
                    label = "Channel Partner";
                }

                swal(
                    "Success",
                    status == 1
                        ? label + " activated successfully"
                        : label + " deactivated successfully",
                    "success"
                ).then(function() {

                    // Reload current list
                    $.ajax({
                        url: "{{ route('load.list.by.type') }}",
                        type: "GET",
                        data: {
                            type: currentType,
                            page: 1
                        },

                        success: function(res) {
                            $('#user_table_body').html(res.html);
                            $('.dataTables_paginate nav').html(res.pagination);
                        }
                    });

                });

            } else {

                swal(
                    "Error",
                    res.msg || "Status update failed",
                    "error"
                );
            }
        },

        error: function(xhr) {

            console.log(xhr.responseText);

            swal(
                "Error",
                "Status update failed",
                "error"
            );
        }
    });
}
</script>
<script>
    // 🔴 LIVE EMAIL VALIDATION (typing time)
$(document).on('input', '#email_id', function () {

    let email = $(this).val().trim();

    // remove old error
    $('#email_id').next('.text-danger').remove();

    let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.(com|in|net|org|edu)$/i;

    if (email === '') {
        $('#email_id').after('<small class="text-danger">Email is required</small>');
    }
    else if (!emailPattern.test(email)) {
        $('#email_id').after('<small class="text-danger">Only .com, .in, .net, .org, .edu allowed</small>');
    }

});
</script>
<script>
$(document).on('input', '#password', function () {

    let password = $(this).val();

    // Remove old error
    $('#password_error').remove();

    // Password minimum 6 characters
    if (password.length > 0 && password.length < 6) {

        $(this).after(
            '<small id="password_error" class="text-danger">' +
            'Password must be at least 6 characters.' +
            '</small>'
        );
    }
});
</script>
@endsection