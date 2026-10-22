
@extends('admin.layout')

@section('title', 'All Categories')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="fw-bold mb-0">All Categories</h1>

    <a href="{{ route('admin.categories.create') }}"
       class="btn btn-dark">
        <i class="fas fa-plus me-1"></i>
        Add Category
    </a>
</div>

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show">
        {{ session('success') }}
        <button type="button" class="btn-close"
                data-bs-dismiss="alert"></button>
    </div>
@endif

@if($errors->any())
    <div class="alert alert-danger">
        {{ $errors->first() }}
    </div>
@endif

<div class="card border-0 shadow-sm">
    <div class="card-header bg-dark text-white py-3">
        <h5 class="mb-0">Category List</h5>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Category Name</th>
                        <th>Commission</th>
                        <th>Created At</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($categories as $category)
                        <tr>
                            <td>{{ $categories->firstItem() + $loop->index }}</td>

                            <td class="fw-semibold">
                                {{ $category->name }}
                            </td>

                            <td>
                                <span class="badge bg-info text-dark">
                                    {{ number_format($category->commission, 2) }}%
                                </span>
                            </td>

                            <td>
                                {{ $category->created_at?->format('d M Y') ?? 'N/A' }}
                            </td>

                            <td class="text-center">
                                <a href="{{ route('admin.categories.edit', $category->id) }}"
                                   class="btn btn-sm btn-primary">
                                    <i class="fas fa-edit"></i> Edit
                                </a>

                                <form
                                    action="{{ route('admin.categories.destroy', $category->id) }}"
                                    method="POST"
                                    class="d-inline"
                                    onsubmit="return confirm('Are you sure you want to delete this category?')">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center py-5">
                                <i class="fas fa-folder-open fa-2x text-secondary mb-3"></i>
                                <p class="mb-2">No categories found.</p>

                                <a href="{{ route('admin.categories.create') }}"
                                   class="btn btn-dark btn-sm">
                                    Add Your First Category
                                </a>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-3">
            {{ $categories->links() }}
        </div>
    </div>
</div>

@endsection
