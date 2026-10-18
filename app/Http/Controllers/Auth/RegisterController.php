<?php
namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:100',
            'email' => 'required|email|max:255|unique:vendors,email',
            'phone' => 'nullable|string|max:20',
            'business_name' => 'nullable|string|max:255',
            'password' => [
                'required',
                'confirmed',
                Password::min(8),
            ],
        ]);

        Vendor::create([
            'full_name' => $validated['full_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'business_name' => $validated['business_name'] ?? null,
            'password' => Hash::make($validated['password']),
            'status' => 'unverified',
        ]);

        return redirect()
            ->route('vendor.register')
            ->with(
                'success',
                'Registration successful! Your seller account has been created.'
            );
    }
}
