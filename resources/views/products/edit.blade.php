@extends('layouts.app')

@section('title', __('products.edit'))

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">{{ __('products.edit') }}</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('products.update', $product) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">{{ __('products.name') }} *</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" 
                           id="name" name="name" value="{{ old('name', $product->name) }}" required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">{{ __('products.price') }} *</label>
                    <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" 
                           id="price" name="price" value="{{ old('price', $product->price) }}" required>
                    @error('price')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="category_id" class="form-label">{{ __('products.category') }} *</label>
                    <select class="form-select @error('category_id') is-invalid @enderror" 
                            id="category_id" name="category_id" required>
                        <option value="">{{ __('products.select_category') }}</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" 
                                {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">{{ __('products.description') }}</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" 
                              id="description" name="description" rows="3">{{ old('description', $product->description) }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="d-flex justify-content-end">
                    <a href="{{ route('products.index') }}" class="btn btn-secondary me-2">
                        {{ __('actions.cancel') }}
                    </a>
                    <button type="submit" class="btn btn-primary">
                        {{ __('actions.update') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection