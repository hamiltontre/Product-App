@extends('layouts.app')

@section('title', __('categories.create'))

@section('content')
    <h1>{{ __('categories.create') }}</h1>
    
    <form action="{{ isset($category) ? route('categories.update', $category) : route('categories.store') }}" method="POST">
        @csrf
        @if(isset($category)) @method('PUT') @endif

        <div class="mb-3">
            <label for="name" class="form-label">{{ __('categories.name') }} *</label>
            <input type="text" class="form-control" id="name" name="name" 
                   value="{{ old('name', $category->name ?? '') }}" required>
        </div>
        
        <div class="mb-3">
            <label for="description" class="form-label">{{ __('categories.description') }}</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ old('description', $category->description ?? '') }}</textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">{{ __('app.save') }}</button>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">{{ __('app.cancel') }}</a>
    </form>
@endsection