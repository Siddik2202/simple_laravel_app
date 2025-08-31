<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserData;

class UserDataController extends Controller
{
    // This is for storing user data
     public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|unique:userdata,email',
            'mobile'  => 'required|string|max:15',
            'subject' => 'nullable|string|max:255',
            'message' => 'nullable|string',
        ]);

        UserData::create($validated);

        return back()->with('success', 'Your data has been submitted successfully!');
        
    }
}
