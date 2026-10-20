<?php
namespace App\Http\Controllers\Admin;



use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard', [
            'totalOrders' => 15,
            'totalCommission' => 10699,
            'totalUsers' => 50,
            'totalVendors' => 25,
        ]);
    }

    public function addCategory()
    {
        return view('admin.addcategory');
    }

    public function storeCategory(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'commission' => ['required', 'numeric', 'min:0', 'max:100'],
        ]);

        return back()->with(
            'success',
            'Category form submitted successfully!'
        );
    }
}
