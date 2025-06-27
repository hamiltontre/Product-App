@extends('layouts.app')

@section('title', __('categories.title'))

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>{{ __('categories.list') }}</h1>
        <a href="{{ route('categories.create') }}" class="btn btn-primary">
            {{ __('categories.create') }}
        </a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>{{ __('categories.name') }}</th>
                <th>{{ __('categories.description') }}</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                    <td>
                        <a href="{{ route('categories.show', $category) }}" class="btn btn-sm btn-info">{{ __('actions.show') }}</a>
                        <a href="{{ route('categories.edit', $category) }}" class="btn btn-sm btn-warning">{{ __('actions.edit') }}</a>
                        <form action="{{ route('categories.destroy', $category) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro?')">{{ __('actions.delete') }}</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $categories->links() }}
@endsection