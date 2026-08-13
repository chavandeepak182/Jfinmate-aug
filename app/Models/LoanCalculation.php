<?php
// app/Models/LoanCalculation.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanCalculation extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name', 'email', 'phone', 'dob',
        'applicant_type',
        'business_income_2023', 'business_income_2024', 'business_income_2025',
        'remuneration_income', 'rental_income', 'profit_share_income',
        'agriculture_income', 'income_tax_yearly',
        'basic_salary_1', 'basic_salary_2', 'basic_salary_3',
        'average_monthly_salary', 'provident_fund_monthly', 'professional_tax_monthly',
        'monthly_deductions', 'deduction_items', 'has_co_applicant',
        'max_loan_amount', 'monthly_emi', 'total_interest', 'foir',
        'eligible', 'net_surplus', 'total_obligations',
        'interest_rate', 'tenure', 'bank_name', 'loan_type',
        'status'
    ];

    protected $casts = [
        'dob' => 'date',
        'deduction_items' => 'json',
        'has_co_applicant' => 'boolean',
    ];
}