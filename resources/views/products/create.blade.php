@extends('layouts.app')

@section('title', __('products.create'))

@section('content')
    <h1>{{ __('products.create') }}</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">{{ __('products.name') }}</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">{{ __('products.price') }}</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price" required>
        </div>
        <div class="mb-3">
            <label for="category_id" class="form-label">{{ __('products.category') }}</label>
            <select class="form-select" id="category_id" name="category_id" required>
                <option value="">{{ __('products.select_category') }}</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">{{ __('products.description') }}</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">{{ __('actions.Submit') }}</button>
    </form>
@endsection
