@if($leadReferrals->count() > 0)

    @foreach($leadReferrals as $key => $row)

        <tr>

            {{-- # --}}
            <td>
                {{ $key + 1 }}
            </td>

            {{-- CUSTOMER NAME --}}
            <td>
                {{ $row->customer_name ?? '-' }}
            </td>

            {{-- MOBILE NUMBER --}}
            <td>
                {{ $row->mobile_no ?? '-' }}
            </td>

            {{-- EMAIL --}}
            <td>
                {{ $row->email ?? '-' }}
            </td>

            {{-- LOAN TYPE --}}
            <td>
                {{ $row->loan_type_name ?? '-' }}
            </td>

            {{-- LOAN AMOUNT --}}
            <td>
                ₹ {{ number_format($row->loan_amount ?? 0) }}
            </td>

            {{-- STATUS --}}
          {{-- STATUS --}}
{{-- STATUS --}}
<td>

    <select
        class="form-select form-select-sm lead-status"
        data-id="{{ $row->id }}"
        style="width:140px;"
    >

        <option value="New"
            {{ ($row->status ?? '') == 'New' ? 'selected' : '' }}>
            New
        </option>

        <option value="In Progress"
            {{ ($row->status ?? '') == 'In Progress' ? 'selected' : '' }}>
            In Progress
        </option>

        <option value="Approved"
            {{ ($row->status ?? '') == 'Approved' ? 'selected' : '' }}>
            Approved
        </option>

        <option value="Rejected"
            {{ ($row->status ?? '') == 'Rejected' ? 'selected' : '' }}>
            Rejected
        </option>

        <option value="Closed"
            {{ ($row->status ?? '') == 'Closed' ? 'selected' : '' }}>
            Closed
        </option>

    </select>

</td>
{{-- APPROVED LOAN AMOUNT --}}
<td>

    @if(($row->status ?? '') == 'Closed')

        <input
            type="number"
            class="form-control form-control-sm approved-loan-amount"
            data-id="{{ $row->id }}"
            value="{{ $row->approved_loan_amount ?? '' }}"
            placeholder="Approved Amount"
            min="0"
            step="0.01"
            style="width:150px;"
        >

    @else

        <span class="text-muted">-</span>

    @endif

</td>

            {{-- CREATED DATE --}}
            <td>
                @if($row->created_at)
                    {{ \Carbon\Carbon::parse($row->created_at)->format('d M Y') }}
                @else
                    -
                @endif
            </td>

        </tr>

    @endforeach

@else

    <tr>
        <td colspan="8" class="text-center py-4">
            No Leads Found
        </td>
    </tr>

@endif