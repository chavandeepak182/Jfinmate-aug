<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmploymentDocument;
use App\Models\EmploymentApplication;

class EmploymentApplicationController extends Controller
{
    // QR Landing Page
    public function index()
    {
        return view('employment.index');
    }

    // Employment Type Document List
    public function documents($type)
    {
        if (!in_array($type, ['salaried', 'self_employed'])) {
            abort(404);
        }

        $documents = EmploymentDocument::where('employment_type', $type)
            ->where('is_active', 1)
            ->orderBy('id')
            ->get();

        return view('employment.documents', compact('documents', 'type'));
    }

    // Application Form
    public function create($type)
    {
        if (!in_array($type, ['salaried', 'self_employed'])) {
            abort(404);
        }

        return view('employment.apply', compact('type'));
    }

    // Store Application
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'mobile_number' => 'required|string|max:20',
            'email' => 'nullable|email|max:255',
            'message' => 'nullable|string|max:2000',
            'employment_type' => 'required|in:salaried,self_employed',
        ]);

        EmploymentApplication::create($validated);

        return redirect()
            ->route('employment.index')
            ->with('success', 'Your application has been submitted successfully!');
    }

    // =====================================
    // ADMIN: Display All QR Applications
    // =====================================
    public function adminIndex()
    {
        $applications = EmploymentApplication::latest()->paginate(20);

        return view('admin.employment-applications', compact('applications'));
    }

    // =====================================
    // ADMIN: Edit Application
    // =====================================
    public function edit($id)
    {
        $application = EmploymentApplication::findOrFail($id);

        return view('admin.edit-employment-application', compact('application'));
    }

    // =====================================
    // ADMIN: Update Status and Remark
    // =====================================
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'status' => 'required|in:Pending,Contacted',
            'remark' => 'nullable|string|max:5000',
        ]);

        $application = EmploymentApplication::findOrFail($id);

        $application->update($validated);

        return redirect()
            ->route('admin.employment-applications')
            ->with('success', 'Application updated successfully!');
    }
}
