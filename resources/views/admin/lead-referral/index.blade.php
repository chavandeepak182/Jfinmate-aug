@extends('layouts.header')

@section('title', 'Lead Referral Management')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h3 class="mb-0" style="color:#000">Lead Referral Management</h3>

        <button class="btn btn-primary"
                data-bs-toggle="modal"
                data-bs-target="#leadReferralModal">
            <i class="fa fa-plus"></i> Add Lead Referral
        </button>
    </div>

    <!-- Dashboard Cards -->
<div class="row mb-4">

    <!-- Total Lead Referral -->
    <div class="col-lg-3 col-md-6 mb-3">
        <a href="{{ route('admin.lead-referral.index',['type'=>'total_referral']) }}" class="text-decoration-none text-dark">
            <div class="card dashboard-card border-left-primary shadow-sm">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <span class="card-title">Total Lead Referral</span>
                        <h2>{{ $totalLeadReferral }}</h2>
                    </div>
                    <div class="card-icon bg-primary">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <!-- Today's Referral -->
   <!-- Today's Leads -->
<div class="col-lg-3 col-md-6 mb-3">
    <a href="{{ route('admin.lead-referral.index',['type'=>'today_leads']) }}"
       class="text-decoration-none text-dark">

        <div class="card dashboard-card border-left-success shadow-sm">

            <div class="card-body d-flex justify-content-between align-items-center">

                <div>
                    <span class="card-title">Today's Leads</span>
                    <h2>{{ $todayLead }}</h2>
                </div>

                <div class="card-icon bg-success">
                    <i class="fas fa-calendar-day"></i>
                </div>

            </div>

        </div>
    </a>
</div>

    <!-- Closed Leads -->
    <div class="col-lg-3 col-md-6 mb-3">
        <a href="{{ route('admin.lead-referral.index',['type'=>'closed_leads']) }}" class="text-decoration-none text-dark">
            <div class="card dashboard-card border-left-warning shadow-sm">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <span class="card-title">Closed Leads</span>
                        <h2>{{ $closedLead }}</h2>
                    </div>
                    <div class="card-icon bg-warning">
                        <i class="fas fa-check-circle"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <!-- Total Leads -->
    <div class="col-lg-3 col-md-6 mb-3">
        <a href="{{ route('admin.lead-referral.index',['type'=>'total_leads']) }}" class="text-decoration-none text-dark">
            <div class="card dashboard-card border-left-danger shadow-sm">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <span class="card-title">Lead List</span>
                        <h2>{{ $totalLead }}</h2>
                    </div>
                    <div class="card-icon bg-danger">
                        <i class="fas fa-chart-line"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>

</div>
<style>
    .dashboard-card{
    border-radius:12px;
    border:0;
    transition:.3s;
    background:#fff;
}

.dashboard-card:hover{
    transform:translateY(-5px);
    box-shadow:0 10px 25px rgba(0,0,0,.12)!important;
}

.card-title{
    font-size:14px;
    color:#6c757d;
    font-weight:600;
}

.dashboard-card h2{
    margin-top:8px;
    margin-bottom:0;
    font-size:32px;
    font-weight:700;
    color:#1f2937;
}

.card-icon{
    width:60px;
    height:60px;
    border-radius:50%;
    display:flex;
    justify-content:center;
    align-items:center;
    color:#fff;
    font-size:24px;
}

.border-left-primary{
    border-left:5px solid #0d6efd!important;
}

.border-left-success{
    border-left:5px solid #198754!important;
}

.border-left-warning{
    border-left:5px solid #ffc107!important;
}

.border-left-danger{
    border-left:5px solid #dc3545!important;
}
    </style>

    <!-- Search -->
    <div class="card shadow">

        <div class="card-header">

            <div class="row">

                <div class="col-md-4">

                    <input type="text"
                           class="form-control"
                           id="search"
                           placeholder="Search Name / Email / Mobile">

                </div>

            </div>

        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="table-dark" id="leadReferralTableHead">

    <tr>
        <th>Sr.No.</th>
        <th>Referral Code</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>City</th>
        <th>State</th>
        <th>PAN</th>
        <th width="120">Action</th>
    </tr>

</thead>

                    <tbody id="leadReferralList">

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

<!-- Modal -->

<div class="modal fade"
     id="leadReferralModal"
     tabindex="-1">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

           <form id="leadReferralForm" method="POST">

    @csrf

                <input type="hidden"
                       name="id"
                       id="id">

                <div class="modal-header">

                    <h5>Add Lead Referral</h5>

                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="modal">
                    </button>

                </div>

                <div class="modal-body">

                    <div class="row">

                        <div class="col-md-6 mb-3">

                            <label>Full Name</label>

                            <input type="text"
                                   name="full_name"
                                   class="form-control">

                        </div>

                        <div class="col-md-6 mb-3">

                            <label>Email</label>

                            <input type="email"
                                   name="email_id"
                                   class="form-control">

                        </div>

                        <div class="col-md-6 mb-3">

                            <label>Mobile</label>

                            <input type="text"
                                   name="mobile_no"
                                   class="form-control">

                        </div>

                        <div class="col-md-6 mb-3">

                            <label>Password</label>

                            <input type="password"
                                   name="password"
                                   class="form-control">

                        </div>

                        <div class="col-md-6 mb-3">

                            <label>PAN Number</label>

                            <input type="text"
       name="pan_no"
       id="pan_no"
       class="form-control"
       maxlength="10"
       style="text-transform: uppercase;">

                        </div>

                        <div class="col-md-6 mb-3">

                            <label>Date of Birth</label>

                            <input type="date"
                                   name="dob"
                                   class="form-control">

                        </div>

                        <div class="col-md-12 mb-3">

                            <label>Address</label>

                            <textarea class="form-control"
                                      name="address"></textarea>

                        </div>

                        <div class="col-md-4">

                            <label>State</label>

                            <select id="state" name="state" class="form-control">

                                <option value="">Select State</option>

                                @foreach($states as $state)

                                    <option value="{{ $state->id }}">
                                        {{ $state->name }}
                                    </option>

                                @endforeach

                            </select>

                        </div>

                        <div class="col-md-4">

                            <label>City</label>

                            <select id="city" name="city" class="form-control">
    <option value="">Select City</option>
</select>

                        </div>

                        <div class="col-md-4">

                            <label>Pincode</label>

                            <input type="text"
                                   name="pincode"
                                   class="form-control">

                        </div>

                    </div>

                </div>

                <div class="modal-footer">

                    <button class="btn btn-success">

                        Save Lead Referral

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection

@push('scripts')
<script>
$(function () {

    // Remove previous status event
    $(document).off('change.leadStatus');

    // Add only ONE status event
    $(document).on('change.leadStatus', '.lead-status', function (e) {

        e.preventDefault();

        let select = $(this);
        let leadId = select.data('id');
        let status = select.val();

        console.log('STATUS CLICKED:', leadId, status);

        // Prevent double request
        if (select.data('updating') === true) {
            return;
        }

        select.data('updating', true);
        select.prop('disabled', true);

        $.ajax({

            url: "{{ route('admin.lead-referral.change-lead-status') }}",

            type: "POST",

            data: {
                _token: "{{ csrf_token() }}",
                id: leadId,
                status: status
            },

            success: function (response) {

                console.log('STATUS RESPONSE:', response);

                if (response.status == 1) {

                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: 'Lead status updated successfully.',
                        timer: 1500,
                        showConfirmButton: false
                    });

                } else {

                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: response.message || 'Unable to update lead status.'
                    });

                }
            },

            error: function (xhr) {

                console.log('STATUS ERROR:', xhr.status);
                console.log(xhr.responseText);

                let message = 'Unable to update lead status.';

                if (xhr.responseJSON) {

                    if (xhr.responseJSON.message) {
                        message = xhr.responseJSON.message;
                    }

                    if (xhr.responseJSON.errors) {

                        message = Object.values(
                            xhr.responseJSON.errors
                        )
                        .flat()
                        .join('\n');
                    }
                }

                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: message
                });
            },

            complete: function () {

                select.data('updating', false);
                select.prop('disabled', false);

            }

        });

    });

});
</script>
<script>

let currentType = 'total_referral';

$(function () {

    // Load list according to URL type
    let urlParams = new URLSearchParams(window.location.search);
    currentType = urlParams.get('type') ?? 'total_referral';

    loadLeadReferral('', currentType);

    // Search
    $('#search').on('keyup', function () {
        loadLeadReferral($(this).val(), currentType);
    });

    // State -> City
    $('#state').on('change', function () {

        let state_id = $(this).val();

        if (state_id == '') {
            $('#city').html('<option value="">Select City</option>');
            return;
        }

        $.ajax({
            url: "{{ route('admin.lead-referral.city') }}",
            type: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                state_id: state_id
            },
            success: function (response) {

                let option = '<option value="">Select City</option>';

                $.each(response, function (i, row) {
                    option += '<option value="' + row.id + '">' + row.city + '</option>';
                });

                $('#city').html(option);

            }
        });

    });

    // Save
    $('#leadReferralForm').off('submit').on('submit', function (e) {

        e.preventDefault();

        let form = $(this);
        let btn = form.find('button[type=submit]');

        btn.prop('disabled', true);

        $.ajax({

            url: "{{ route('admin.lead-referral.store') }}",

            type: "POST",

            data: new FormData(this),

            processData: false,

            contentType: false,

            success: function (res) {

                btn.prop('disabled', false);

                if (res.status == 1) {

                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: res.message
                    }).then(function () {

                        form[0].reset();

                        $('#city').html('<option value="">Select City</option>');

                        $('#leadReferralModal').modal('hide');

                        $('body').removeClass('modal-open');
                        $('.modal-backdrop').remove();
                        $('body').css({
                            overflow: '',
                            paddingRight: ''
                        });

                        loadLeadReferral($('#search').val(), currentType);

                    });

                } else {

                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: res.message
                    });

                }

            },

            error: function (xhr) {

                btn.prop('disabled', false);

                if (xhr.status == 422) {

                    let errors = xhr.responseJSON.errors;

                    $.each(errors, function (key, value) {

                        Swal.fire({
                            icon: 'error',
                            title: 'Validation Error',
                            text: value[0]
                        });

                        return false;

                    });

                }

            }

        });

    });

});

// Load List
function loadLeadReferral(search = '', type = currentType) {

    currentType = type;

    /*
    |--------------------------------------------------------------------------
    | CHANGE TABLE HEADER
    |--------------------------------------------------------------------------
    */

 if (
    type === 'total_leads' ||
    type === 'closed_leads' ||
    type === 'today_leads'
) {

    $('#leadReferralTableHead').html(`
        <tr>
            <th>#</th>
            <th>Customer Name</th>
            <th>Mobile Number</th>
            <th>Email</th>
            <th>Loan Type</th>
            <th>Loan Amount</th>
            <th>Status</th>
            <th>Approved Loan Amount</th>
            <th>Created Date</th>
        </tr>
    `);

    $('#search').attr(
        'placeholder',
        'Search Customer Name / Mobile / Email / Loan Type'
    );

} else {

    $('#leadReferralTableHead').html(`
        <tr>
            <th>#</th>
            <th>Referral Code</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>City</th>
            <th>State</th>
            <th>PAN Number</th>
            <th width="120">Action</th>
        </tr>
    `);

    $('#search').attr(
        'placeholder',
        'Search Name / Email / Mobile'
    );
}

    /*
    |--------------------------------------------------------------------------
    | LOAD DATA
    |--------------------------------------------------------------------------
    */

    $.ajax({

        url: "{{ route('admin.lead-referral.list') }}",

        type: "GET",

        data: {
            search: search,
            type: type
        },

        success: function(response) {

            $('#leadReferralList').html(response.html);

        },

        error: function(xhr) {

            console.log(xhr.responseText);

            $('#leadReferralList').html(`
                <tr>
                    <td colspan="9" class="text-center text-danger">
                        Unable to load data
                    </td>
                </tr>
            `);

        }

    });
}
</script>
<script>
    $(document).on('click', '.deleteLeadReferral', function () {

    let id = $(this).data('id');

    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, Delete'
    }).then((result) => {

        if (result.isConfirmed) {

            $.ajax({

                url: "{{ url('admin/lead-referral/delete') }}/" + id,

                type: "DELETE",

                data: {
                    _token: "{{ csrf_token() }}"
                },

                success: function (res) {

                    if (res.status == 1) {

                        Swal.fire(
                            'Deleted!',
                            res.message,
                            'success'
                        );

                        loadLeadReferral($('#search').val(), currentType);

                    } else {

                        Swal.fire(
                            'Error!',
                            'Unable to delete.',
                            'error'
                        );

                    }

                }

            });

        }

    });

});
</script>
<script>
    $(document)
    .off('change.approvedAmount', '.approved-loan-amount')
    .on('change.approvedAmount', '.approved-loan-amount', function () {

        let input = $(this);

        let leadId = input.data('id');

        let amount = input.val();

        $.ajax({

            url: "{{ route('admin.lead-referral.approved-amount') }}",

            type: "POST",

            data: {
                _token: "{{ csrf_token() }}",
                id: leadId,
                approved_loan_amount: amount
            },

            success: function (response) {

                if (response.status == 1) {

                    console.log(
                        'Approved amount saved.'
                    );

                } else {

                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: response.message
                    });

                }

            },

            error: function (xhr) {

                console.log(xhr.responseText);

                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Unable to save approved loan amount.'
                });

            }

        });

    });

    $('#pan_no').on('input', function () {
    this.value = this.value
        .toUpperCase()
        .replace(/[^A-Z0-9]/g, '')
        .substring(0, 10);
});
</script>


@endpush