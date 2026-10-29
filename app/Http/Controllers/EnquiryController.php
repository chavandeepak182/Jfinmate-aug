<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Enquiry;
class EnquiryController extends Controller
{
    public function enquiryLead()
    {
        $enquiries = Enquiry::all();
        return view('admin.enquiry.index', compact('enquiries'));
    }
    public function showForm()
    {
        return view('frontend.enquiry-form');
    }

public function store(Request $request)
{
    $validated = $request->validate([
        'name'         => 'required|string|max:255',
        'email'        => 'required|email|max:255',
        'contact'      => 'required|string|max:15',
        'amount'       => 'nullable|numeric',
        'address'      => 'nullable|string',
        'message'      => 'nullable|string',
        'enquiry_type' => 'nullable|string',
        'property_id'  => 'nullable|integer',
    ]);

    try {
        $enquiry = Enquiry::create($validated);

        return response()->json([
            'status'  => true,
            'message' => 'Thank you for your enquiry! Our team will get back to you shortly.',
            'data'    => [
                'id' => $enquiry->id,
            ],
        ], 201);

    } catch (\Throwable $e) {
        \Log::error('Enquiry submission failed: ' . $e->getMessage());

        return response()->json([
            'status'  => false,
            'message' => 'Unable to submit your enquiry right now. Please try again.',
        ], 500);
    }
}


}
