<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class VendorLoginController extends Controller
{
    public function showLogin()
    {
        return view('auth.vendor-login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $vendor = Vendor::where('email', $credentials['email'])->first();

        if (! $vendor || ! Hash::check(
            $credentials['password'],
            $vendor->password
        )) {
            return back()
                ->withErrors([
                    'email' => 'Invalid email or password.',
                ])
                ->onlyInput('email');
        }

        $request->session()->regenerate();

        session([
            'vendor_id' => $vendor->id,
            'vendor_name' => $vendor->full_name,
        ]);

        return redirect()->route('vendor.dashboard');
    }

    public function dashboard(Request $request)
    {
        if (! session()->has('vendor_id')) {
            return redirect()
                ->route('vendor.login')
                ->withErrors([
                    'email' => 'Please sign in to access your dashboard.',
                ]);
        }

        return view('vendor.dashboard');
    }

    public function logout(Request $request)
    {
        $request->session()->forget([
            'vendor_id',
            'vendor_name',
        ]);

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('vendor.login');
    }
}
