<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\AdmissionForm;

class FormController extends Controller
{
    public function submitForm(Request $request)
    {
        // Validate the form data
    
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'birth_month' => 'required|integer|min:1|max:12',
            'birth_day' => 'required|integer|min:1|max:31',
            'birth_year' => 'required|integer|min:1900|max:2100',
            'gender' => 'required|string|in:male,female',
            'nationality' => 'required|string|max:255',
            'contactno' => 'required|string|max:20', // Assuming the maximum length of a phone number
            'street_address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'zipcode' => 'required|string|max:20', // Assuming the maximum length of a postal/zipcode
            'emergency_name' => 'required|string|max:255',
            'relationship' => 'required|string|max:255',
            'emergency_contact_number' => 'required|string|max:20', // Assuming the maximum length of a phone number
            'school_last_attended' => 'required|string|max:255',
        ]);

        // Create a new AdmissionForm instance and fill it with validated data
        $admissionForm = new AdmissionForm();
        $admissionForm->fill($validatedData);
        
        // Save the form data to the database
        $admissionForm->save();

        // Redirect or return a response as needed
    }
}
