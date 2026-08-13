<?php
// app/Http/Controllers/CalculatorController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoanCalculation;

class CalculatorController extends Controller
{
    /**
     * Display the Calculator Form
     */
    public function index()
    {
        $calculation = session('calculation') ?? new LoanCalculation();
        return view('calculator.index', compact('calculation'));
    }

    /**
     * Process the multi-step form
     */
  public function calculate(Request $request)
{
   $request->validate([
    'full_name' => 'required|string|max:255',
    'email' => 'nullable|email|max:255',
    'phone' => 'required|string|max:15',
    'dob' => 'nullable|date',
    'applicant_type' => 'required|in:Salaried,Business',

    // Loan details
    'interest_rate' => 'required|numeric|min:0',
    'tenure' => 'required|numeric|min:0',

    // Obligations
    'monthly_deductions' => 'nullable|numeric|min:0',
    'existing_emi' => 'nullable|numeric|min:0',

    // Salaried
    'basic_salary_1' => 'nullable|numeric|min:0',
    'basic_salary_2' => 'nullable|numeric|min:0',
    'basic_salary_3' => 'nullable|numeric|min:0',

    'provident_fund_monthly' => 'nullable|numeric|min:0',
    'professional_tax_monthly' => 'nullable|numeric|min:0',

    // Business
    'business_income_2023' => 'nullable|numeric|min:0',
    'business_income_2024' => 'nullable|numeric|min:0',
    'business_income_2025' => 'nullable|numeric|min:0',

    'remuneration_income' => 'nullable|numeric|min:0',
    'rental_income' => 'nullable|numeric|min:0',
    'profit_share_income' => 'nullable|numeric|min:0',
    'agriculture_income' => 'nullable|numeric|min:0',
    'income_tax_yearly' => 'nullable|numeric|min:0',
]);

    $data = $request->all();

    if ($data['applicant_type'] == 'Salaried') {

        $salary = array_filter([
            $data['basic_salary_1'] ?? 0,
            $data['basic_salary_2'] ?? 0,
            $data['basic_salary_3'] ?? 0,
        ]);

        $averageSalary = count($salary)
            ? array_sum($salary) / count($salary)
            : 0;

        $monthlyIncome =
            $averageSalary
            - ($data['provident_fund_monthly'] ?? 0)
            - ($data['professional_tax_monthly'] ?? 0);

    } else {

        $income = array_filter([
            $data['business_income_2023'] ?? 0,
            $data['business_income_2024'] ?? 0,
            $data['business_income_2025'] ?? 0,
        ]);

        $businessAverage = count($income)
            ? array_sum($income) / count($income)
            : 0;

        $yearlyIncome =
            $businessAverage
            + ($data['remuneration_income'] ?? 0)
            + ($data['rental_income'] ?? 0)
            + ($data['profit_share_income'] ?? 0)
            + ($data['agriculture_income'] ?? 0);

        $monthlyIncome =
            ($yearlyIncome / 12)
            - (($data['income_tax_yearly'] ?? 0) / 12);
    }

    return $this->performCalculation($request, $monthlyIncome);
}
    /**
     * Perform the actual loan calculation
     */
   private function performCalculation(Request $request, $monthlyIncome)
{
    $data = $request->all();

    $interest = $data['interest_rate'];
    $tenure = $data['tenure'];

    $monthlyDeductions = $data['monthly_deductions'] ?? 0;
    $existingEmi = $data['existing_emi'] ?? 0;

    $totalObligations = $monthlyDeductions + $existingEmi;

    $maxFoir =
        $data['applicant_type'] == 'Business'
        ? 50
        : 60;

    $eligibleEmi =
        ($monthlyIncome * $maxFoir / 100)
        - $totalObligations;

    if ($eligibleEmi < 0) {
        $eligibleEmi = 0;
    }

    $monthlyRate = $interest / 12 / 100;
    $months = $tenure * 12;

    $loanAmount = 0;

    if ($monthlyRate > 0) {

        $loanAmount =
            $eligibleEmi *
            ((pow(1 + $monthlyRate, $months) - 1)
            / ($monthlyRate * pow(1 + $monthlyRate, $months)));

    }

    $totalInterest =
        ($eligibleEmi * $months)
        - $loanAmount;

    $foir =
        $monthlyIncome > 0
            ? ($totalObligations / $monthlyIncome) * 100
            : 0;

    $save = LoanCalculation::create([

        'full_name' => $data['full_name'],
        'email' => $data['email'],
        'phone' => $data['phone'],
        'dob' => $data['dob'],

        'applicant_type' => $data['applicant_type'],

        'basic_salary_1' => $data['basic_salary_1'] ?? null,
        'basic_salary_2' => $data['basic_salary_2'] ?? null,
        'basic_salary_3' => $data['basic_salary_3'] ?? null,

        'business_income_2023' => $data['business_income_2023'] ?? null,
        'business_income_2024' => $data['business_income_2024'] ?? null,
        'business_income_2025' => $data['business_income_2025'] ?? null,

        'remuneration_income' => $data['remuneration_income'] ?? null,
        'rental_income' => $data['rental_income'] ?? null,
        'profit_share_income' => $data['profit_share_income'] ?? null,
        'agriculture_income' => $data['agriculture_income'] ?? null,

        'income_tax_yearly' => $data['income_tax_yearly'] ?? null,

        'provident_fund_monthly' => $data['provident_fund_monthly'] ?? null,
        'professional_tax_monthly' => $data['professional_tax_monthly'] ?? null,

        'monthly_deductions' => $monthlyDeductions,

        'interest_rate' => $interest,
        'tenure' => $tenure,

        'monthly_emi' => round($eligibleEmi),

        'max_loan_amount' => round($loanAmount),

        'total_interest' => round($totalInterest),

        'foir' => round($foir, 2),

        'net_surplus' => round($monthlyIncome - $totalObligations),

        'total_obligations' => round($totalObligations),

        'eligible' => $eligibleEmi > 0,

        'status' => 'Calculated'
    ]);

    return redirect()
        ->route('calculator.result')
        ->with('success', 'Loan calculated successfully.');
}

    /**
     * Reset the form
     */
    public function reset()
    {
        session()->forget(['calculation', 'result', 'step']);
        return redirect()->route('calculator.index');
    }

    /**
     * Download Report
     */
    public function downloadReport($id = null)
    {
        if ($id) {
            $calculation = LoanCalculation::findOrFail($id);
            $result = $calculation->toArray();
        } else {
            $result = session('result');
            if (!$result) {
                return redirect()->route('calculator.index')->with('error', 'No data found!');
            }
        }
        
        $content = $this->generateReportContent($result);
        
        return response($content)
            ->header('Content-Type', 'text/plain')
            ->header('Content-Disposition', 'attachment; filename="eligibility_report_' . date('Y_m_d_His') . '.txt"');
    }

    private function generateReportContent($result)
    {
        $content = "═══════════════════════════════════════════════════════════════\n";
        $content .= "        LOAN ELIGIBILITY REPORT - " . date('Y') . "\n";
        $content .= "═══════════════════════════════════════════════════════════════\n\n";
        $content .= "Applicant Type     : " . ($result['applicant_type'] ?? 'N/A') . "\n";
        $content .= "Report Date        : " . date('d-m-Y H:i:s') . "\n";
        $content .= "───────────────────────────────────────────────────────────────\n\n";
        $content .= "📊 INCOME & OBLIGATIONS\n";
        $content .= "───────────────────────────────────────────────────────────────\n";
        $content .= "Monthly Income     : ₹ " . number_format($result['monthly_income'] ?? 0) . "\n";
        $content .= "Monthly Deductions : ₹ " . number_format($result['total_obligations'] ?? 0) . "\n";
        $content .= "Net Surplus        : ₹ " . number_format($result['net_surplus'] ?? 0) . "\n";
        $content .= "FOIR               : " . number_format($result['foir'] ?? 0, 2) . "%\n";
        $content .= "\n";
        $content .= "💰 ELIGIBILITY RESULT\n";
        $content .= "───────────────────────────────────────────────────────────────\n";
        $content .= "Maximum Loan Amount: ₹ " . number_format($result['max_loan_amount'] ?? 0) . "\n";
        $content .= "Monthly EMI        : ₹ " . number_format($result['monthly_emi'] ?? 0) . "\n";
        $content .= "Total Interest     : ₹ " . number_format($result['total_interest'] ?? 0) . "\n";
        $content .= "Total Payment      : ₹ " . number_format($result['total_payment'] ?? 0) . "\n";
        $content .= "\n";
        $content .= "Status             : " . (($result['eligible'] ?? false) ? "✅ ELIGIBLE" : "❌ NOT ELIGIBLE") . "\n";
        $content .= "═══════════════════════════════════════════════════════════════\n";
        
        return $content;
    }
}