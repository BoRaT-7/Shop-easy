<?php
namespace App\Http\Controllers\Admin;



use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Vendor;
use App\Models\Category;
use Illuminate\Validation\Rule;

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


    // Save New Category
  public function storeCategory(Request $request)
{
    $validated = $request->validate([
        'name' => ['required',
                    'string', 
                    'max:255', 
                    'unique:categories,name'],

        'commission' => [
                  'required', 
                  'numeric', 
                  'min:0', 
                  'max:100'
                  ],
    ]);

    Category::create($validated);

    return redirect()
        ->route('admin.categories.create')
        ->with('success', 'Category added successfully!');
}

   // Show All Categories
   public function categories()
   {
    $categories = Category::latest()->paginate(10);

    return view ('admin.categories.index',compact('categories'));
   }

   //show edit from 
   public function editCategory($id)
   {
    $category = Category::findOrFail($id);
    return view('admin.categories.edit',compact('category'));
   }

   //Update Category
     public function updateCategory(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $validated = $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('categories', 'name')->ignore($category->id),
            ],
            'commission' => [
                'required',
                'numeric',
                'min:0',
                'max:100',
            ],
        ]);

        $category->update($validated);

        return redirect()
            ->route('admin.categories.index')
            ->with('success', 'Category updated successfully!');
    }

    // Delete Category
    public function deleteCategory($id)
    {
        $category = Category::findOrFail($id);

        $category->delete();

        return redirect()
            ->route('admin.categories.index')
            ->with('success', 'Category deleted successfully!');
    }
}