
@extends('admin.layout')

@section('title', 'Edit Category')

@section('content')

<div class="mb-4">
    <h1 class="fw-bold">Edit Category</h1>
    <p class="text-muted">Update category information below.</p>
</div>

@if($errors->any())
    <div class="alert alert-danger">
        {{ $errors->first() }}
    </div>
@endif

<div class="card border-0 shadow-sm">
    <div class="card-header bg-dark text-white py-3">
        <h5 class="mb-0">Category Information</h5>
    </div>

    <div class="card-body p-4">
        <form method="POST"
              action="{{ route('admin.categories.update', $category->id) }}">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">
                    Category Name
                </label>

                <input
                    type="text"
                    name="name"
                    id="name"
                    class="form-control"
                    value="{{ old('name', $category->name) }}"
                    maxlength="255"
                    required
                >
            </div>

            <div class="mb-3">
                <label for="commission" class="form-label">
                    Commission (%)
                </label>

                <input
                    type="number"
                    name="commission"
                    id="commission"
                    class="form-control"
                    value="{{ old('commission', $category->commission) }}"
                    min="0"
                    max="100"
                    step="0.01"
                    required
                >
            </div>

            <button type="submit" class="btn btn-dark">
                <i class="fas fa-save me-1"></i>
                Update Category
            </button>

            <a href="{{ route('admin.categories.index') }}"
               class="btn btn-secondary">
                Cancel
            </a>
        </form>
    </div>
</div>

@endsection
