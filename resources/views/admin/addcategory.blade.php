
@extends('admin.layout')

@section('title', 'Add Category')

@section('content')

    <h1 class="fw-bold mb-4">Add Category</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

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
                  action="{{ route('admin.categories.store') }}">

                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">
                        Category Name
                    </label>

                    <input type="text"
                           name="name"
                           id="name"
                           class="form-control"
                           value="{{ old('name') }}"
                           placeholder="Enter category name"
                           required>
                </div>

                <div class="mb-3">
                    <label for="commission" class="form-label">
                        Commission (%)
                    </label>

                    <input type="number"
                           name="commission"
                           id="commission"
                           class="form-control"
                           value="{{ old('commission') }}"
                           min="0"
                           max="100"
                           step="0.01"
                           placeholder="Enter commission percentage"
                           required>
                </div>

                <button type="submit" class="btn btn-dark">
                    <i class="fas fa-plus me-1"></i>
                    Add Category
                </button>

            </form>

        </div>
    </div>

@endsection
