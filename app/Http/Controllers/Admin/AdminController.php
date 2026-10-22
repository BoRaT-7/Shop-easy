<?php
namespace App\Http\Controllers\Admin;



use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Vendor;
use App\Models\Category;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard', [
            'totalOrders' => 15,
            'totalCommission' => 10699,
            'totalUsers' => User::count(),
            'totalVendors' => Vendor::count(),
        ]);
    }

    public function addCategory()
    {
        return view('admin.addcategory');
    }

  public function storeCategory(Request $request)
{
    $validated = $request->validate([
        'name' => ['required', 'string', 'max:255', 'unique:categories,name'],
        'commission' => ['required', 'numeric', 'min:0', 'max:100'],
    ]);

    Category::create($validated);

    return redirect()
        ->route('admin.categories.create')
        ->with('success', 'Category added successfully!');
}
}
