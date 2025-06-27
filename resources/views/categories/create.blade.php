@extends('layouts.app')

@section('title', __('categories.create'))

@section('content')
    <h1>{{ __('categories.create') }}</h1>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">{{ __('categories.name') }}</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">{{ __('categories.description') }}</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">{{ __('actions.Submit') }}</button>
    </form>
@endsection