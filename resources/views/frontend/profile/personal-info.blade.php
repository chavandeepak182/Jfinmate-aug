@extends('frontend.layouts.customer-dash')
@section('title', 'All Personal Details')

@section('content')

<style>
/* Page background and main profile container */
.profile-page {
    background: #f5f7fb;
    min-height: 100vh;
    padding: 25px 20px;
}

.profile-main-card {
    background: #fff;
    border: 0;
    border-radius: 12px;
    padding: 20px 22px;
    box-shadow: none;
}

.profile-section {
    padding: 0 0 28px;
    margin-bottom: 32px;
    border-bottom: 1px solid #f0f0f0;
}

.profile-section:last-child {
    border-bottom: 0;
    margin-bottom: 0;
    padding-bottom: 0;
}

.profile-section-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 18px;
}

.profile-section-title {
    color: #444;
    font-size: 20px;
    font-weight: 600;
    margin: 0;
}

.profile-edit-btn {
    border: 0;
    background: transparent;
    color: #444444;
    font-size: 18px;
    padding: 2px 4px;
    line-height: 1;
}

.profile-edit-btn:hover {
    color: #1684ff;
}

.profile-field {
    margin-bottom: 12px;
}

.profile-field label {
    display: block;
    color: #444;
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 5px;
}

.profile-value {
    display: flex;
    align-items: center;
    width: 100%;
    min-height: 38px;
    padding: 8px 12px;
    border: 1px solid #dedede;
    border-radius: 5px;
    background: #fff;
    color: #888;
    font-size: 16px;
    overflow-wrap: anywhere;
}

.profile-save-btn {
    background: #1684ff;
    color: #fff;
    border: 1px solid #1684ff;
    border-radius: 6px;
    padding: 8px 20px;
    font-size: 13px;
}

.profile-save-btn:hover {
    background: #006fe6;
    color: #fff;
}

/* Popup forms use the same clean field UI as the profile page */
.profile-modal .modal-content {
    border: 0;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 12px 35px rgba(0, 0, 0, .12);
}

.profile-modal .modal-header {
    background: #fff;
    border-bottom: 1px solid #f0f0f0;
    padding: 18px 22px;
}

.profile-modal .modal-title {
    color: #444;
    font-size: 18px;
    font-weight: 600;
}

.profile-modal .modal-body {
    background: #fff;
    padding: 22px;
}

.profile-modal .form-label {
    display: block;
    font-size: 14px;
    font-weight: 600;
    color: #444;
    margin-bottom: 6px;
}

.profile-modal .form-control,
.profile-modal .form-select {
    width: 100%;
    min-height: 42px;
    border: 1px solid #dedede;
    border-radius: 5px;
    background-color: #fff;
    color: #777;
    font-size: 15px;
    padding: 9px 12px;
    box-shadow: none;
}

.profile-modal .form-control:focus,
.profile-modal .form-select:focus {
    border-color: #1684ff;
    box-shadow: 0 0 0 2px rgba(22, 132, 255, .10);
}

.profile-modal .modal-footer {
    background: #fff;
    border-top: 1px solid #f0f0f0;
    padding: 14px 22px;
}

.profile-modal .modal-footer .btn {
    min-width: 95px;
    border-radius: 6px;
    font-size: 13px;
    padding: 8px 18px;
}

.profile-modal .modal-footer .btn-primary {
    background: #1684ff;
    border-color: #1684ff;
}

.profile-modal .modal-footer .btn-primary:hover {
    background: #006fe6;
    border-color: #006fe6;
}

.profile-modal .invalid-feedback {
    font-size: 12px;
}

@media (max-width: 767px) {
    .profile-modal .modal-dialog {
        margin: 10px;
    }

    .profile-modal .modal-body {
        padding: 16px;
    }

    .profile-modal .modal-header,
    .profile-modal .modal-footer {
        padding-left: 16px;
        padding-right: 16px;
    }
}

@media (max-width: 767px) {
    .profile-page { padding: 14px 8px; }
    .profile-main-card { padding: 16px 12px; }
    .profile-section { margin-bottom: 24px; padding-bottom: 22px; }
    .profile-section-title { font-size: 15px; }
}
</style>

<div class="container-fluid profile-page">
    <div class="profile-main-card">

        {{-- ================= PERSONAL DETAILS ================= --}}
        <section class="profile-section">
            <div class="profile-section-header">
                <h5 class="profile-section-title">Personal Details</h5>
                @if($profile)
                    <button type="button" class="profile-edit-btn" data-bs-toggle="modal" data-bs-target="#editProfileModal" aria-label="Edit Personal Details">
                        <i class="far fa-edit"></i>
                    </button>
                @endif
            </div>

            @if($profile)
                <div class="row">
                    <div class="col-md-6 profile-field">
                        <label>Name</label>
                        <div class="profile-value">{{ $user->name ?? '—' }}</div>
                    </div>
                    <div class="col-md-6 profile-field">
                        <label>Email</label>
                        <div class="profile-value">{{ $user->email_id ?? '—' }}</div>
                    </div>
                    <div class="col-md-6 profile-field">
                        <label>Mobile Number</label>
                        <div class="profile-value">{{ $profile->mobile_no ?? '—' }}</div>
                    </div>
                    <div class="col-md-6 profile-field">
                        <label>Gender</label>
                        <div class="profile-value">{{ $profile->gender ? ucfirst($profile->gender) : '—' }}</div>
                    </div>
                    <div class="col-md-6 profile-field">
                        <label>Date of Birth</label>
                        <div class="profile-value">{{ $profile->dob ?? '—' }}</div>
                    </div>
                    <div class="col-md-6 profile-field">
                        <label>Marital Status</label>
                        <div class="profile-value">{{ $profile->marital_status ?? '—' }}</div>
                    </div>
                    <div class="col-12 profile-field">
                        <label>Residential Address</label>
                        <div class="profile-value">
                            {{ $profile->residence_address ?? '—' }}, {{ $profile->city_name ?? '—' }}, {{ $profile->state_name ?? '—' }} - {{ $profile->pincode ?? '—' }}
                        </div>
                    </div>
                </div>
            @else
                <div class="alert alert-info mb-0">No personal information available.</div>
            @endif
        </section>

        {{-- ================= PROFESSIONAL DETAILS ================= --}}
        <section class="profile-section">
            <div class="profile-section-header">
                <h5 class="profile-section-title">Professional Details</h5>
                <button type="button" class="profile-edit-btn" data-bs-toggle="modal" data-bs-target="#editProfessionalModal" aria-label="Edit Professional Details">
                    <i class="far fa-edit"></i>
                </button>
            </div>

            @if($professionalDetails)
                <div class="row">
                    <div class="col-md-6 profile-field">
                        <label>Designation</label>
                        <div class="profile-value">{{ $professionalDetails->designation ?? '—' }}</div>
                    </div>
                    <div class="col-md-6 profile-field">
                        <label>Company</label>
                        <div class="profile-value">{{ $professionalDetails->company_name ?? '—' }}</div>
                    </div>
                    <div class="col-md-6 profile-field">
                        <label>Experience</label>
                        <div class="profile-value">{{ $professionalDetails->experience_year ? $professionalDetails->experience_year.' yrs' : '—' }}</div>
                    </div>
                    <div class="col-md-6 profile-field">
                        <label>Industry</label>
                        <div class="profile-value">{{ $professionalDetails->industry ?? '—' }}</div>
                    </div>
                    <div class="col-12 profile-field">
                        <label>Residential Address</label>
                        <div class="profile-value">{{ $professionalDetails->company_address ?? '—' }}</div>
                    </div>
                </div>
            @else
                <div class="alert alert-info mb-0">No professional details added yet.</div>
            @endif
        </section>

        {{-- ================= BANK DETAILS ================= --}}
        <section class="profile-section">
            <div class="profile-section-header">
                <h5 class="profile-section-title">Bank Details</h5>
                <button type="button" class="profile-edit-btn" data-bs-toggle="modal" data-bs-target="#bankDetailsModal" aria-label="Edit Bank Details">
                    <i class="far fa-edit"></i>
                </button>
            </div>

            @if($bankDetails)
                <div class="row">
                    <div class="col-md-6 profile-field">
                        <label>Bank Name</label>
                        <div class="profile-value">{{ $bankDetails->bank_name ?? '—' }}</div>
                    </div>
                    <div class="col-md-6 profile-field">
                        <label>Account Number</label>
                        <div class="profile-value">{{ $bankDetails->account_no ? '****'.substr($bankDetails->account_no, -4) : '—' }}</div>
                    </div>
                    <div class="col-md-6 profile-field">
                        <label>IFSC Code</label>
                        <div class="profile-value">{{ $bankDetails->ifsc_code ?? '—' }}</div>
                    </div>
                    <div class="col-md-6 profile-field">
                        <label>Branch Name</label>
                        <div class="profile-value">{{ $bankDetails->branch_name ?? '—' }}</div>
                    </div>
                    <div class="col-12 profile-field">
                        <label>UPI ID</label>
                        <div class="profile-value">{{ $bankDetails->upi_id ?? '—' }}</div>
                    </div>
                </div>
            @else
                <div class="alert alert-warning mb-0">Bank details not added yet.</div>
            @endif
        </section>

    </div>
</div>


    <!-- ================= EDIT PERSONAL DETAILS MODAL ================= -->
		<div class="modal fade profile-modal" id="editProfileModal" tabindex="-1" aria-hidden="true">
			<div class="modal-dialog modal-lg modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Edit Personal Details</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
					</div>

					<form action="{{ route('user.profile.update') }}" method="POST">
						@csrf
						<!-- <input type="hidden" name="user_id" value="{{ $user->id }}"> -->

						<div class="modal-body row g-3">

							<div class="col-md-6">
								<label class="form-label">Name</label>
								<input type="text" name="name"
									class="form-control"
									value="{{ old('name', $user->name ?? '') }}">
							</div>

							<div class="col-md-6">
								<label class="form-label">Email</label>
								<input type="email" name="email_id"
									class="form-control"
									value="{{ old('email_id', $user->email_id ?? '') }}">
							</div>

							<div class="col-md-6">
								<label class="form-label">Mobile No</label>
								<input type="text" name="mobile_no"
									class="form-control"
									value="{{ old('mobile_no', $profile->mobile_no ?? '') }}" required>
							</div>

							<div class="col-md-6">
								<label class="form-label">Date of Birth</label>
								<input type="date" name="dob"
									class="form-control"
									value="{{ old('dob', $profile->dob ?? '') }}">
							</div>

							<div class="col-md-6">
                                <label class="form-label">Gender</label>
                                <select name="gender" class="form-select">
                                    <option value="">Select Gender</option>

                                    <option value="male"
                                        {{ old('gender', $profile->gender ?? '') == 'male' ? 'selected' : '' }}>
                                        Male
                                    </option>

                                    <option value="female"
                                        {{ old('gender', $profile->gender ?? '') == 'female' ? 'selected' : '' }}>
                                        Female
                                    </option>

                                    <option value="other"
                                        {{ old('gender', $profile->gender ?? '') == 'other' ? 'selected' : '' }}>
                                        Other
                                    </option>
                                </select>
                            </div>


                                                        <div class="col-md-6">
								<label class="form-label">Marital Status</label>
								<input type="text" name="marital_status"
									class="form-control"
									value="{{ old('marital_status', $profile->marital_status ?? '') }}">
							</div>

							<div class="col-12">
								<label class="form-label">Residence Address</label>
								<input type="text" name="residence_address"
									class="form-control"
									value="{{ old('residence_address', $profile->residence_address ?? '') }}">
							</div>

						<div class="row g-3">

                                <!-- STATE -->
                                <div class="col-md-4">
                                    <label class="form-label">State</label>
                                    <select name="state" id="state" class="form-select">
                                        <option value="">Select State</option>
                                        @foreach($states as $state)
                                            <option value="{{ $state->id }}"
                                                {{ old('state', $profile->state ?? '') == $state->id ? 'selected' : '' }}>
                                                {{ $state->name }}
                                            </option>
                                        @endforeach
                                    </select>



                                </div>
                                <!-- CITY -->
                                <div class="col-md-4">
                                    <label class="form-label">City</label>
                                    <select name="city" id="city" class="form-select">
                                        <option value="">Select City</option>
                                    </select>

                                </div>


                                        <!-- PINCODE -->
                                        <div class="col-md-4">
                                            <label class="form-label">Pincode</label>
                                            <input type="text"
                                                name="pincode"
                                                class="form-control"
                                                value="{{ old('pincode', $profile->pincode ?? '') }}">
                                        </div>

                                            </div>


						</div>

						<div class="modal-footer">
							<button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Save Changes</button>
						</div>
					</form>
				</div>
			</div>
		</div>

		<!-- ================= EDIT PROFESSIONAL DETAILS MODAL ================= -->
		<div class="modal fade profile-modal" id="editProfessionalModal" tabindex="-1" aria-hidden="true">
			<div class="modal-dialog modal-lg modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Edit Professional Details</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
					</div>

					<form action="{{ route('user.professional.update') }}" method="POST">
						@csrf
						<input type="hidden" name="professional_id"
							value="{{ $professionalDetails->professional_id ?? '' }}">

						<div class="modal-body row g-3">

							<div class="col-md-6">
								<label class="form-label">Profession Type</label>
								<input type="text" name="profession_type"
									class="form-control"
									value="{{ old('profession_type', $professionalDetails->profession_type ?? '') }}">
							</div>

							<div class="col-md-6">
								<label class="form-label">Designation</label>
								<input type="text" name="designation"
									class="form-control"
									value="{{ old('designation', $professionalDetails->designation ?? '') }}">
							</div>

							<div class="col-md-6">
								<label class="form-label">Company Name</label>
								<input type="text" name="company_name"
									class="form-control"
									value="{{ old('company_name', $professionalDetails->company_name ?? '') }}">
							</div>

							<div class="col-md-6">
								<label class="form-label">Industry</label>
								<input type="text" name="industry"
									class="form-control"
									value="{{ old('industry', $professionalDetails->industry ?? '') }}">
							</div>

							<div class="col-md-6">
								<label class="form-label">Experience (Years)</label>
								<input type="number" name="experience_year" id="experience_year"
       class="form-control"
       max="99" min="0"
       value="{{ old('experience_year', $professionalDetails->experience_year ?? '') }}">
							</div>

							<div class="col-12">
								<label class="form-label">Company Address</label>
								<input type="text" name="company_address"
									class="form-control"
									value="{{ old('company_address', $professionalDetails->company_address ?? '') }}">
							</div>

						</div>

						<div class="modal-footer">
							<button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Save Changes</button>
						</div>
					</form>
				</div>
			</div>
		</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const professionalForm = document.querySelector('#editProfessionalModal form');
    const experienceInput = document.getElementById('experience_year');

    if (professionalForm && experienceInput) {
        professionalForm.addEventListener('submit', function (e) {
            const experience = experienceInput.value;

            if (experience !== '' && (Number(experience) < 0 || Number(experience) > 99)) {
                alert('Experience must be between 0 to 99 years');
                e.preventDefault();
            }
        });
    }
});
</script>

<!-- ================= BANK DETAILS MODAL ================= -->
<div class="modal fade profile-modal" id="bankDetailsModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">
                    {{ $bankDetails ? 'Edit Bank Details' : 'Add Bank Details' }}
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <form action="{{ route('user.bank.save') }}" method="POST">
                @csrf
                <input type="hidden" name="user_id" value="{{ $user->id }}">

                <div class="modal-body row g-3">

                    <!-- Bank Name -->
                    <div class="col-md-6">
                        <label class="form-label">Bank Name</label>
                        <input type="text"
                               name="bank_name"
                               class="form-control @error('bank_name') is-invalid @enderror"
                               value="{{ old('bank_name', $bankDetails->bank_name ?? '') }}"
                               required
                               pattern="[A-Za-z ]+"
                               oninput="this.value=this.value.replace(/[^A-Za-z ]/g,'')">
                        @error('bank_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Account Number -->
                    <div class="col-md-6">
                        <label class="form-label">Account Number</label>
                        <input type="text"
                               name="account_no"
                               class="form-control @error('account_no') is-invalid @enderror"
                               value="{{ old('account_no', $bankDetails->account_no ?? '') }}"
                               required
                               pattern="[0-9]+"
                               maxlength="18"
                               oninput="this.value=this.value.replace(/[^0-9]/g,'')">
                        @error('account_no')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- IFSC Code -->
                    <div class="col-md-6">
                        <label class="form-label">IFSC Code</label>
                        <input type="text"
                               name="ifsc_code"
                               class="form-control text-uppercase @error('ifsc_code') is-invalid @enderror"
                               value="{{ old('ifsc_code', $bankDetails->ifsc_code ?? '') }}"
                               placeholder="SBIN0001234"
                               required>
                        @error('ifsc_code')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Branch Name -->
                    <div class="col-md-6">
                        <label class="form-label">Branch Name</label>
                        <input type="text"
                               name="branch_name"
                               class="form-control @error('branch_name') is-invalid @enderror"
                               value="{{ old('branch_name', $bankDetails->branch_name ?? '') }}"
                               required
                               pattern="[A-Za-z ]+"
                               oninput="this.value=this.value.replace(/[^A-Za-z ]/g,'')">
                        @error('branch_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- UPI ID -->
                     <div class="col-md-6">
                        <label class="form-label">UPI Id</label>
                        <input type="text"
                            name="upi_id"
                            class="form-control @error('upi_id') is-invalid @enderror"
                            value="{{ old('upi_id', $bankDetails->upi_id ?? '') }}"
                            placeholder="example@upi"
                            pattern="[a-zA-Z0-9._-]+@[a-zA-Z]{2,}"
                            title="Enter a valid UPI ID (example@bank)"
                          oninput="this.value=this.value.replace(/[^a-zA-Z0-9._@-]/g,'')">
                      </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                        Cancel
                    </button>
                    <button type="submit" class="btn btn-primary">
                        Save Bank Details
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const stateSelect = document.getElementById('state');
    const citySelect  = document.getElementById('city');

    const selectedCity = "{{ old('city', $profile->city ?? '') }}";

    function loadCities(stateId, selectedCity = null) {
        if (!stateId) {
            citySelect.innerHTML = '<option value="">Select City</option>';
            return;
        }

        fetch(`/get-cities/${stateId}`)
            .then(res => res.json())
            .then(cities => {
                citySelect.innerHTML = '<option value="">Select City</option>';

                cities.forEach(city => {
                    const option = document.createElement('option');
                    option.value = city.id;
                    option.textContent = city.city;

                    if (selectedCity && selectedCity == city.id) {
                        option.selected = true;
                    }

                    citySelect.appendChild(option);
                });
            });
    }

    // When state changes
    stateSelect.addEventListener('change', function () {
        loadCities(this.value);
    });

    // 🔥 IMPORTANT: load cities on EDIT page load
    if (stateSelect.value) {
        loadCities(stateSelect.value, selectedCity);
    }
});
</script>
<script>
document.addEventListener("DOMContentLoaded", function () {

    const form = document.querySelector('#editProfileModal form');
    const phoneInput = document.querySelector('input[name="mobile_no"]');
    const dobInput = document.querySelector('input[name="dob"]');

    // 🔥 create error elements
    const phoneError = document.createElement("div");
    phoneError.className = "text-danger mt-1";

    const dobError = document.createElement("div");
    dobError.className = "text-danger mt-1";

    phoneInput.parentNode.appendChild(phoneError);
    dobInput.parentNode.appendChild(dobError);

    form.addEventListener("submit", function(e){

        let isValid = true;

        // clear old errors
        phoneError.innerText = "";
        dobError.innerText = "";

        // ===== MOBILE VALIDATION =====
        let phone = phoneInput.value.trim();
        let phonePattern = /^[0-9]{10}$/;

        if (!phonePattern.test(phone)) {
            phoneError.innerText = "Enter valid 10 digit mobile number";
            isValid = false;
        }

        // ===== DOB VALIDATION (18+) =====
        let dob = dobInput.value;

        if (dob) {
            let birthDate = new Date(dob);
            let today = new Date();

            let age = today.getFullYear() - birthDate.getFullYear();
            let m = today.getMonth() - birthDate.getMonth();

            if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }

            if (age < 18) {
                dobError.innerText = "Age must be 18+";
                isValid = false;
            }
        }

        if (!isValid) {
            e.preventDefault();
        }

    });

});
</script>

@endsection
