@extends('layouts.header')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.js"></script>

<style>
.container{padding:0 10px;}
.title{color:#1565C0;font-size:27px;margin-bottom:20px;}
.section{margin-bottom:32px;}
.section-title{font-size:18px;font-weight:600;margin-bottom:16px;color:#2d3748;display:flex;align-items:center;gap:8px;}
.section-title::before{content:'';width:4px;height:20px;background:#667eea;border-radius:2px;}
.form-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:20px;}
.form-group{display:flex;flex-direction:column;gap:8px;}
.form-group label{font-size:14px;font-weight:600;color:#2d3748;}
.form-group input,
.form-group select{padding:8px 10px;border:2px solid #e2e8f0;border-radius:8px;font-size:14px;transition:all .2s;}
.form-group input:focus,
.form-group select:focus{outline:none;border-color:#667eea;}

/* calculation panel */
.calculation-panel{
    display:grid;grid-template-columns:1fr 1fr;
    background:linear-gradient(135deg,#f8fafc 0%,#e8eef5 100%);
    padding:12px 24px 0;border-radius:8px;border:2px solid #e2e8f0;
}
.calculation-row{display:flex;gap:12px;align-items:center;padding:12px 24px;border-bottom:1px solid #e2e8f0;}
.calculation-row:last-child{border-bottom:none;}
.calculation-row p{margin-bottom:0;font-size:14px;color:#69707d;font-weight:500;}
.calculation-row span{font-size:16px;font-weight:600;color:#2d3748;}

/* offers */
.offer-table{width:100%;border-collapse:separate;border-spacing:0 16px;}
.offer-head{background:#f1f5f9;border-radius:8px;}
.offer-head th{padding:12px;text-align:left;font-size:13px;color:#475569;}
.offer-item td{background:#f8fafc;border:2px solid #e2e8f0;padding:18px 20px;}
.offer-item td:first-child{border-radius:8px 0 0 8px;}
.offer-item td:last-child{border-radius:0 8px 8px 0;width:70px;text-align:center;}
.offer-item:hover td{border-color:#cbd5e0;box-shadow:0 2px 8px rgba(0,0,0,.05);}
.offer-input{padding:12px 16px;border:2px solid #e2e8f0;border-radius:6px;font-size:15px;width:100%;background:#fff;}
.offer-input:focus{outline:none;border-color:#667eea;}
.offer-remove-btn{width:40px;height:40px;border:2px solid #fee2e2;background:#fef2f2;color:#dc2626;border-radius:8px;cursor:pointer;}
.btn-add-offer{
    width:100%;padding:14px 24px;background:#fff;border:2px dashed #cbd5e0;border-radius:8px;
    color:#667eea;font-size:15px;font-weight:600;cursor:pointer;transition:all .2s;
    display:flex;align-items:center;justify-content:center;gap:8px;font-family:inherit;
}
.btn-add-offer:hover{border-color:#667eea;background:#f0f4ff;}

.selected-offer{
    width:100%;background:linear-gradient(135deg,#f8fafc 0%,#e8eef5 100%);
    border-radius:8px;border:2px solid #e2e8f0;padding:16px;margin-bottom:16px;
}
.offer-amt{font-size:20px;margin-bottom:0;}
.offer-amt strong{color:#2d3748;}
#offer_amount_display{color:#008000;font-weight:700;}

.checkbox-wrapper{
    display:flex;align-items:center;gap:12px;padding:16px;background:#f8fafc;
    border-radius:8px;border:2px solid #e2e8f0;cursor:pointer;transition:all .2s;
}
.checkbox-wrapper:hover{border-color:#667eea;background:#f0f4ff;}
.checkbox-label{font-size:15px;font-weight:500;color:#2d3748;cursor:pointer;}

.btn-primary{padding:12px 30px;background:linear-gradient(135deg,#667eea 0%,#764ba2 100%);color:#fff;border:none;border-radius:8px;font-size:16px;font-weight:600;cursor:pointer;}
.btn-primary:hover{transform:translateY(-2px);box-shadow:0 8px 16px rgba(102,126,234,.3);}
.submit-btn{text-align:center;margin-top:20px;}

#mlm_type{
    appearance:none;-webkit-appearance:none;
    background-color:#fff;
    background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%23475569' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='m6 9 6 6 6-6'/%3E%3C/svg%3E");
    background-repeat:no-repeat;background-position:right 12px center;background-size:16px;
    cursor:pointer;padding-right:35px;
}

.pool-hint{display:block;margin-top:6px;color:#64748b;font-size:12px;}
.pool-hint b{color:#0f766e;}
</style>

@php
    $isLocked = in_array($booking->status, ['customer_confirmed','completed']);
@endphp

<div class="container">

<h2 class="title">Edit Property Booking</h2>

<form id="bookingEditForm"
      method="POST"
      action="{{ route('admin.booking.update', $booking->id) }}">
@csrf

{{-- ===========================
   AGREEMENT & COMMISSION
=========================== --}}
<div class="section">
    <h2 class="section-title">Agreement & Commission</h2>
    <div class="form-grid">

        <div class="form-group">
            <label>Agreement Cost (₹)</label>
            <input type="number" id="agreement_cost" name="agreement_cost"
                   value="{{ $booking->agreement_cost }}" {{ $isLocked ? 'readonly' : '' }}>
        </div>

        <div class="form-group">
            <label>Commission %</label>
            <input type="number" id="commission_percentage" name="commission_percentage" step="0.01"
                   value="{{ $booking->commission_percentage }}" {{ $isLocked ? 'readonly' : '' }}>
        </div>

        <div class="form-group">
            <label>TDS %</label>
            <input type="number" id="tds_percentage" name="tds_percentage" step="0.01"
                   value="{{ ($booking->tds_percentage == '0.00' || $booking->tds_percentage == 0) ? '' : $booking->tds_percentage }}"
                   {{ $isLocked ? 'readonly' : '' }}>
        </div>

        <div class="form-group">
            <label>GST %</label>
            <input type="number" id="gst_percentage" name="gst_percentage" step="0.01"
                   value="{{ ($booking->gst_percentage == '0.00' || $booking->gst_percentage == 0) ? '' : $booking->gst_percentage }}"
                   {{ $isLocked ? 'readonly' : '' }}>
        </div>

        {{-- MLM CALCULATION --}}
        <div class="form-group">
            <label for="mlm_type">MLM Calculation Type</label>
            <select id="mlm_type" name="mlm_type"
                    style="width:100%;padding:10px 35px 10px 12px;border:2px solid #e2e8f0;border-radius:8px;"
                    {{ $isLocked ? 'disabled' : '' }}>
                <option value="amount" {{ old('mlm_type', $booking->mlm_type ?? 'amount') == 'amount' ? 'selected' : '' }}>Fixed Amount (₹)</option>
                <option value="percent" {{ old('mlm_type', $booking->mlm_type ?? 'amount') == 'percent' ? 'selected' : '' }}>Percentage (%)</option>
            </select>
            @if($isLocked)
                <input type="hidden" name="mlm_type" value="{{ $booking->mlm_type ?? 'amount' }}">
            @endif
        </div>

        <div class="form-group">
            <label id="mlm_input_label" for="mlm_value">
                {{ ($booking->mlm_type ?? 'amount') == 'percent' ? 'MLM Percentage (%)' : 'MLM Amount (₹)' }}
            </label>
            <input type="number" id="mlm_value" name="mlm_value" step="0.01" min="0"
                   value="{{ old('mlm_value', $booking->mlm_value ?? 0) }}"
                   placeholder="Enter MLM amount"
                   {{ $isLocked ? 'readonly' : '' }}>
        </div>

        <div class="form-group">
            <label for="mlm_calculated">Calculated MLM Deduction (₹)</label>
            <input type="text" id="mlm_calculated"
                   value="₹ {{ number_format($booking->mlm_amount ?? 0, 2) }}" readonly
                   style="background:#f0fdf4;color:#15803d;font-weight:700;">
        </div>

        <input type="hidden" id="mlm_amount" name="mlm_amount"
               value="{{ old('mlm_amount', $booking->mlm_amount ?? 0) }}">

    </div>
</div>

<hr>

{{-- ===========================
   CALCULATION SUMMARY
=========================== --}}
<div class="section">
    <h2 class="section-title">Calculation Summary</h2>
    <div class="calculation-panel">
        <div class="calculation-row">
            <p>Actual Commission:</p>
            <span id="actual_commission">₹ {{ number_format($booking->actual_commission ?? 0, 2) }}</span>
        </div>
        <div class="calculation-row">
            <p>TDS Amount:</p>
            <span id="tds_amount">₹ {{ number_format($booking->tds_amount ?? 0, 2) }}</span>
        </div>
        <div class="calculation-row">
            <p>GST Amount:</p>
            <span id="gst_amount">₹ {{ number_format($booking->gst_amount ?? 0, 2) }}</span>
        </div>
        <div class="calculation-row">
            <p>Net Commission:</p>
            <span id="net_commission">₹ {{ number_format($booking->net_commission ?? 0, 2) }}</span>
        </div>
        <div class="calculation-row">
            <p>Offer Pool (50% after MLM):</p>
            <span id="offer_pool">₹ {{ number_format($booking->offer_pool ?? 0, 2) }}</span>
        </div>
        <div class="calculation-row">
            <p>Company Share (50%):</p>
            <span id="final_commission">₹ {{ number_format($booking->final_commission ?? 0, 2) }}</span>
        </div>
    </div>
</div>

<hr>

{{-- ===========================
   OFFERS (DYNAMIC)
=========================== --}}
<div class="section">
    <h2 class="section-title">Offers (Optional)</h2>

    <label class="checkbox-wrapper">
        <input type="checkbox"
               id="enable_offers"
               name="enable_offers"
               value="1"
               {{ $booking->offers ? 'checked' : '' }}
               {{ $isLocked ? 'disabled' : '' }}
               onchange="toggleOffers()">
        <span class="checkbox-label">Enable Offers</span>
    </label>
</div>

<div class="section" id="offers_box" style="margin-top:10px; {{ $booking->offers ? '' : 'display:none;' }}">

    <div class="selected-offer">
        <p class="offer-amt">
            <strong>Offer Amount:</strong>
            <span id="offer_amount_display">₹ {{ number_format($booking->offer_pool ?? 0, 2) }}</span>
        </p>
    </div>

    <table class="offer-table">
        <thead>
            <tr class="offer-head">
                <th>Main Offer</th>
                <th>Amount</th>
                @if(!$isLocked)<th>Action</th>@endif
            </tr>
        </thead>
        <tbody id="offer_rows">

        @if($booking->offers)
            @foreach(json_decode($booking->offers, true) as $i => $offer)
            <tr class="offer-main" data-offer="{{ $i }}">
                <td>
                    <input class="offer-input" type="text"
                           name="offers[{{ $i }}][label]"
                           value="{{ $offer['label'] }}"
                           {{ $isLocked ? 'readonly' : '' }}>
                </td>
                <td>
                    <input class="offer-input offer-main-amount" type="number"
                           name="offers[{{ $i }}][amount]"
                           value="{{ $offer['amount'] }}"
                           oninput="validateMainOffer(this, {{ $i }})"
                           onblur="validateMainOffer(this, {{ $i }})"
                           onchange="validateMainOffer(this, {{ $i }})"
                           {{ $isLocked ? 'readonly' : '' }}>
                    <small class="pool-hint">
                        Max allowed: ₹ <b class="pool-hint-value">{{ number_format($booking->offer_pool ?? 0, 2) }}</b>
                    </small>
                </td>
                @if(!$isLocked)
                <td class="action-cell">
                    <button type="button" class="offer-remove-btn"
                            onclick="removeOfferGroup({{ $i }})">❌</button>
                </td>
                @endif
            </tr>

            <tr class="offer-summary" data-summary="{{ $i }}">
                <td colspan="3" style="padding-left:60px;">
                    <div style="display:flex;justify-content:space-between;font-weight:600;">
                        <span>Total of Sub Items: ₹
                            <span class="sub-total" data-parent="{{ $i }}">0.00</span>
                        </span>
                        <span style="color:green;">Remaining Cashback: ₹
                            <span class="remaining-cashback" data-parent="{{ $i }}">0.00</span>
                        </span>
                    </div>
                </td>
            </tr>

            {{-- SUB ITEMS --}}
            @if(!empty($offer['items']))
                @foreach($offer['items'] as $j => $sub)
                <tr class="sub-item" data-parent="{{ $i }}">
                    <td colspan="3">
                        <div style="display:flex;gap:20px;align-items:flex-start;width:100%;">
                            <div style="flex:2;display:flex;flex-direction:column;gap:10px;">
                                <input class="offer-input" type="text"
                                       name="offers[{{ $i }}][items][{{ $j }}][label]"
                                       value="{{ $sub['label'] }}"
                                       {{ $isLocked ? 'readonly' : '' }}>
                                <textarea class="offer-input summernote"
                                          name="offers[{{ $i }}][items][{{ $j }}][description]"
                                          style="width:100%;">{{ $sub['description'] ?? '' }}</textarea>
                            </div>
                            <div style="flex:1;">
                                <input class="offer-input sub-amount" type="number"
                                       name="offers[{{ $i }}][items][{{ $j }}][amount]"
                                       value="{{ $sub['amount'] }}"
                                       oninput="updateSubTotals({{ $i }})"
                                       {{ $isLocked ? 'readonly' : '' }}>
                            </div>
                            @if(!$isLocked)
                            <div style="display:flex;align-items:center;">
                                <button type="button" class="offer-remove-btn"
                                        onclick="removeSubItem(this, {{ $i }})">❌</button>
                            </div>
                            @endif
                        </div>
                    </td>
                </tr>
                @endforeach
            @endif

            @if(!$isLocked)
            <tr class="offer-sub-btn" data-offer="{{ $i }}">
                <td colspan="3" style="padding-left:30px;">
                    <button type="button" onclick="addSubItem({{ $i }})" class="btn-add-offer">
                        ➕ Add Sub Item
                    </button>
                </td>
            </tr>
            @endif

            @endforeach
        @endif

        </tbody>
    </table>

    @if(!$isLocked)
    <button type="button" class="btn-add-offer" onclick="addMainOffer()">
        ➕ Add Main Offer
    </button>
    @endif

</div>{{-- close #offers_box --}}

<div class="submit-btn">
    @if(!$isLocked)
        <button class="btn-primary" type="submit">Update Booking</button>
    @endif
</div>

</form>

</div>

{{-- ===========================
   JS CALCULATIONS
=========================== --}}
@if(!$isLocked)
<script>
/*
 * Corrected Offers script:
 * - Cashback may exist without Sub Items.
 * - Furniture and other Main Offers require at least one valid Sub Item.
 * - A Main Offer amount cannot exceed the Offer Pool.
 * - Sub Items total cannot exceed their own Main Offer amount.
 * - Removing a Main Offer removes its summary, Sub Items and Add Sub Item row.
 * - Removing Furniture does not prevent the remaining Cashback offer from updating.
 * - No old validation requiring all Sub Items to equal the entire Offer Pool.
 */

// Start after the highest existing Main Offer index to avoid duplicate field names.
let offerIndex = 0;

document.querySelectorAll('tr.offer-main').forEach(function (row) {
    const currentIndex = Number(row.getAttribute('data-offer'));
    if (Number.isFinite(currentIndex)) {
        offerIndex = Math.max(offerIndex, currentIndex + 1);
    }
});

/* ====================================
   MAIN CALCULATION
==================================== */
function recalc() {
    const cost     = Number(document.getElementById('agreement_cost')?.value) || 0;
    const percent  = Number(document.getElementById('commission_percentage')?.value) || 0;
    const tds      = Number(document.getElementById('tds_percentage')?.value) || 0;
    const gst      = Number(document.getElementById('gst_percentage')?.value) || 0;
    const mlmType  = document.getElementById('mlm_type')?.value || 'amount';
    const mlmValue = Math.max(0, Number(document.getElementById('mlm_value')?.value) || 0);

    const actual = cost * percent / 100;
    const tdsAmt = actual * tds / 100;
    const gstAmt = actual * gst / 100;
    const net = actual - tdsAmt - gstAmt;

    const offerPoolRaw = Math.max(0, net / 2);
    const companyShare = Math.max(0, net / 2);

    let mlm = 0;

    if (mlmType === 'percent') {
        mlm = offerPoolRaw * Math.min(mlmValue, 100) / 100;
    } else {
        mlm = Math.min(mlmValue, offerPoolRaw);
    }

    const finalOfferPool = Math.max(0, offerPoolRaw - mlm);

    const setText = (id, value) => {
        const element = document.getElementById(id);
        if (element) element.innerText = value;
    };

    setText('actual_commission', '₹ ' + actual.toFixed(2));
    setText('tds_amount', '₹ ' + tdsAmt.toFixed(2));
    setText('gst_amount', '₹ ' + gstAmt.toFixed(2));
    setText('net_commission', '₹ ' + net.toFixed(2));
    setText('offer_pool', '₹ ' + finalOfferPool.toFixed(2));
    setText('final_commission', '₹ ' + companyShare.toFixed(2));

    const mlmLabel = document.getElementById('mlm_input_label');
    if (mlmLabel) {
        mlmLabel.innerText = mlmType === 'percent'
            ? 'MLM Percentage (%)'
            : 'MLM Amount (₹)';
    }

    const mlmCalculated = document.getElementById('mlm_calculated');
    if (mlmCalculated) mlmCalculated.value = '₹ ' + mlm.toFixed(2);

    const mlmAmount = document.getElementById('mlm_amount');
    if (mlmAmount) mlmAmount.value = mlm.toFixed(2);

    const offerDisplay = document.getElementById('offer_amount_display');
    if (offerDisplay) offerDisplay.innerText = '₹ ' + finalOfferPool.toFixed(2);

    document.querySelectorAll('.pool-hint-value').forEach(function (element) {
        element.innerText = finalOfferPool.toFixed(2);
    });

    window.finalOfferPoolAmount = finalOfferPool;

    document.querySelectorAll('tr.offer-main').forEach(function (row) {
        const input = row.querySelector('.offer-main-amount');
        const value = Number(input?.value) || 0;

        if (input) {
            input.style.borderColor = value > finalOfferPool + 0.01
                ? 'red'
                : '#e2e8f0';
        }

        updateSubTotals(row.getAttribute('data-offer'));
    });
}

['agreement_cost', 'commission_percentage', 'tds_percentage', 'gst_percentage', 'mlm_value']
    .forEach(function (id) {
        document.getElementById(id)?.addEventListener('input', recalc);
    });

document.getElementById('mlm_type')?.addEventListener('change', recalc);

/* ====================================
   TOGGLE OFFERS
==================================== */
function toggleOffers() {
    const box = document.getElementById('offers_box');
    const checkbox = document.getElementById('enable_offers');

    if (!box || !checkbox) return;

    box.style.display = checkbox.checked ? 'block' : 'none';
}

/* ====================================
   ADD MAIN OFFER
==================================== */
function addMainOffer() {
    const index = offerIndex++;
    const fixedAmount = Number(window.finalOfferPoolAmount) || 0;

    const html = `
        <tr class="offer-main" data-offer="${index}">
            <td>
                <input class="offer-input" type="text"
                       name="offers[${index}][label]"
                       placeholder="Main Offer Name" required>
            </td>
            <td>
                <input class="offer-input offer-main-amount" type="number"
                       name="offers[${index}][amount]"
                       min="0" step="0.01"
                       value="${fixedAmount.toFixed(2)}"
                       oninput="validateMainOffer(this, ${index})"
                       onblur="validateMainOffer(this, ${index})">
                <small class="pool-hint">
                    Max allowed: ₹ <b class="pool-hint-value">${fixedAmount.toFixed(2)}</b>
                </small>
            </td>
            <td class="action-cell">
                <button type="button" class="offer-remove-btn"
                        onclick="removeOfferGroup(${index})">❌</button>
            </td>
        </tr>
        <tr class="offer-summary" data-summary="${index}">
            <td colspan="3" style="padding-left:60px;">
                <div style="display:flex;justify-content:space-between;font-weight:600;">
                    <span>Total of Sub Items: ₹
                        <span class="sub-total" data-parent="${index}">0.00</span>
                    </span>
                    <span style="color:green;">Remaining Cashback: ₹
                        <span class="remaining-cashback" data-parent="${index}">
                            ${fixedAmount.toFixed(2)}
                        </span>
                    </span>
                </div>
            </td>
        </tr>
        <tr class="offer-sub-btn" data-offer="${index}">
            <td colspan="3" style="padding-left:30px;">
                <button type="button" onclick="addSubItem(${index})" class="btn-add-offer">
                    ➕ Add Sub Item
                </button>
            </td>
        </tr>`;

    document.getElementById('offer_rows').insertAdjacentHTML('beforeend', html);
    updateSubTotals(index);
}

/* ====================================
   ADD SUB ITEM
==================================== */
function addSubItem(parentIndex) {
    const buttonRow = document.querySelector(
        'tr.offer-sub-btn[data-offer="' + parentIndex + '"]'
    );

    if (!buttonRow) return;

    // Timestamp-based key prevents duplicate input names after a Sub Item is removed.
    const subKey = Date.now().toString();

    const html = `
        <tr class="sub-item" data-parent="${parentIndex}">
            <td colspan="3">
                <div style="display:flex;gap:20px;align-items:flex-start;width:100%;">
                    <div style="flex:2;display:flex;flex-direction:column;gap:10px;">
                        <input class="offer-input" type="text"
                               name="offers[${parentIndex}][items][${subKey}][label]"
                               placeholder="Sub Item Name" required>
                        <textarea class="offer-input summernote"
                                  name="offers[${parentIndex}][items][${subKey}][description]"
                                  placeholder="Description" style="width:100%;"></textarea>
                    </div>
                    <div style="flex:1;">
                        <input class="offer-input sub-amount" type="number"
                               name="offers[${parentIndex}][items][${subKey}][amount]"
                               min="0" step="0.01"
                               placeholder="Amount"
                               oninput="updateSubTotals(${parentIndex})" required>
                    </div>
                    <div style="display:flex;align-items:center;">
                        <button type="button" class="offer-remove-btn"
                                onclick="removeSubItem(this, ${parentIndex})">❌</button>
                    </div>
                </div>
            </td>
        </tr>`;

    buttonRow.insertAdjacentHTML('beforebegin', html);
    initSummernote();
    updateSubTotals(parentIndex);
}

/* ====================================
   DESTROY SUMMERNOTE IF INITIALIZED
==================================== */
function destroySummernoteWithin(row) {
    if (!window.jQuery || !row) return;

    $(row).find('textarea.summernote').each(function () {
        try {
            if ($(this).next('.note-editor').length) {
                $(this).summernote('destroy');
            }
        } catch (error) {
            console.warn('Summernote cleanup skipped:', error);
        }
    });
}

/* ====================================
   REMOVE MAIN OFFER AND ITS CHILD ROWS
==================================== */
function removeOfferGroup(index) {
    const mainRow = document.querySelector(
        'tr.offer-main[data-offer="' + index + '"]'
    );

    const summaryRow = document.querySelector(
        'tr.offer-summary[data-summary="' + index + '"]'
    );

    const buttonRow = document.querySelector(
        'tr.offer-sub-btn[data-offer="' + index + '"]'
    );

    const subRows = document.querySelectorAll(
        'tr.sub-item[data-parent="' + index + '"]'
    );

    subRows.forEach(function (row) {
        destroySummernoteWithin(row);
        row.remove();
    });

    if (mainRow) mainRow.remove();
    if (summaryRow) summaryRow.remove();
    if (buttonRow) buttonRow.remove();

    // Remaining offers stay in the form and will be submitted normally.
    recalc();
}

/* ====================================
   REMOVE ONE SUB ITEM
==================================== */
function removeSubItem(button, parentIndex) {
    const row = button.closest('tr.sub-item');

    if (!row) return;

    destroySummernoteWithin(row);
    row.remove();

    updateSubTotals(parentIndex);
}

/* ====================================
   VALIDATE MAIN OFFER AMOUNT
==================================== */
function validateMainOffer(input, parentIndex) {
    const finalOfferPool = Number(window.finalOfferPoolAmount) || 0;
    const entered = Number(input.value) || 0;

    if (entered > finalOfferPool) {
        alert(
            'Offer Amount cannot exceed the Offer Pool!\n' +
            'Available Offer Pool: ₹ ' + finalOfferPool.toFixed(2)
        );

        input.value = finalOfferPool.toFixed(2);
    }

    if (entered < 0) input.value = '0';

    updateSubTotals(parentIndex);
}

/* ====================================
   LIVE SUB TOTALS
==================================== */
function updateSubTotals(parentIndex) {
    const mainRow = document.querySelector(
        'tr.offer-main[data-offer="' + parentIndex + '"]'
    );

    if (!mainRow) return;

    const mainInput = mainRow.querySelector('.offer-main-amount');
    const groupLimit = Math.max(0, Number(mainInput?.value) || 0);

    const inputs = document.querySelectorAll(
        'tr.sub-item[data-parent="' + parentIndex + '"] .sub-amount'
    );

    let total = 0;
    inputs.forEach(function (input) {
        total += Math.max(0, Number(input.value) || 0);
    });

    // Do not silently change a different input; show an error if total is too high.
    if (total > groupLimit + 0.01) {
        const activeInput = document.activeElement;

        if (activeInput && activeInput.classList.contains('sub-amount')) {
            const currentValue = Math.max(0, Number(activeInput.value) || 0);
            const otherTotal = total - currentValue;
            const allowed = Math.max(0, groupLimit - otherTotal);

            activeInput.value = allowed.toFixed(2);
            total = otherTotal + allowed;
        } else {
            total = groupLimit;
        }
    }

    const totalEl = document.querySelector(
        '.sub-total[data-parent="' + parentIndex + '"]'
    );

    if (totalEl) totalEl.innerText = total.toFixed(2);

    const remainingEl = document.querySelector(
        '.remaining-cashback[data-parent="' + parentIndex + '"]'
    );

    if (remainingEl) {
        remainingEl.innerText = Math.max(0, groupLimit - total).toFixed(2);
    }
}

/* ====================================
   SUBMIT VALIDATION
==================================== */
const bookingEditForm = document.getElementById('bookingEditForm');

if (bookingEditForm) {
    bookingEditForm.addEventListener('submit', function (event) {
        const enableOffers = document.getElementById('enable_offers');

        // Offers are optional. If disabled, let the form submit.
        if (!enableOffers || !enableOffers.checked) return;

        recalc();

        const offerPool = Number(window.finalOfferPoolAmount) || 0;
        let errorMessage = '';

        const mainRows = document.querySelectorAll('tr.offer-main');

        for (const row of mainRows) {
            const index = row.getAttribute('data-offer');
            const labelInput = row.querySelector('input[name$="[label]"]');
            const amountInput = row.querySelector('.offer-main-amount');

            const label = (labelInput?.value || '').trim();
            const type = label.toLowerCase();
            const mainAmount = Math.max(0, Number(amountInput?.value) || 0);

            const subRows = document.querySelectorAll(
                'tr.sub-item[data-parent="' + index + '"]'
            );

            if (!label) {
                errorMessage = 'Please enter a Main Offer name.';
                break;
            }

            if (mainAmount > offerPool + 0.01) {
                errorMessage =
                    'Main Offer Amount cannot exceed the Offer Pool.\n\n' +
                    'Offer Pool: ₹ ' + offerPool.toFixed(2);
                break;
            }

            // Cashback is allowed without Sub Items.
            // Furniture and every other Main Offer need at least one Sub Item.
            if (type !== 'cashback' && subRows.length === 0) {
                errorMessage = 'Please add at least one Sub Item for ' + label + '.';
                break;
            }

            let subTotal = 0;

            for (const subRow of subRows) {
                const subLabelInput = subRow.querySelector('input[name$="[label]"]');
                const subAmountInput = subRow.querySelector('.sub-amount');

                const subLabel = (subLabelInput?.value || '').trim();
                const subAmount = Math.max(0, Number(subAmountInput?.value) || 0);

                if (type !== 'cashback' && (!subLabel || subAmount <= 0)) {
                    errorMessage =
                        'Please enter the Sub Item name and a valid amount for ' +
                        label + '.';
                    break;
                }

                subTotal += subAmount;
            }

            if (errorMessage) break;

            if (subTotal > mainAmount + 0.01) {
                errorMessage =
                    'Sub Items total cannot exceed Main Offer Amount.\n\n' +
                    'Main Offer: ₹ ' + mainAmount.toFixed(2) +
                    '\nSub Items Total: ₹ ' + subTotal.toFixed(2);
                break;
            }
        }

        // IMPORTANT:
        // Do not require Sub Items total to equal the full Offer Pool.
        // This permits a Cashback-only offer and permits removing another offer.

        if (errorMessage) {
            event.preventDefault();
            alert(errorMessage);
        }
    });
}

/* ====================================
   SUMMERNOTE
==================================== */
function initSummernote() {
    if (!window.jQuery || !$.fn.summernote) return;

    $('.summernote').each(function () {
        if (!$(this).next('.note-editor').length) {
            $(this).summernote({
                height: 100,
                toolbar: [
                    ['style', ['bold', 'italic', 'underline']],
                    ['para', ['ul', 'ol']],
                    ['insert', ['link']],
                    ['view', ['codeview']]
                ]
            });
        }
    });
}

/* ====================================
   INITIALIZE
==================================== */
document.addEventListener('DOMContentLoaded', function () {
    initSummernote();
    recalc();
    toggleOffers();

    document.querySelectorAll('tr.offer-main').forEach(function (row) {
        updateSubTotals(row.getAttribute('data-offer'));
    });
});
</script>
@endif

@endsection