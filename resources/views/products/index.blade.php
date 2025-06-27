@extends('layouts.app')

@section('title', __('products.title'))

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>{{ __('products.list') }}</h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary">
            {{ __('products.create') }}
        </a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>{{ __('products.name') }}</th>
                <th>{{ __('products.price') }}</th>
                <th>{{ __('products.category') }}</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>${{ number_format($product->price, 2) }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>
                        <a href="{{ route('products.show', $product) }}" class="btn btn-sm btn-info">{{ __('actions.show') }}</a>
                        <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-warning">{{ __('actions.edit') }}</a>
                        <form action="{{ route('products.destroy', $product) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro?')">{{ __('actions.delete') }}</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $products->links() }}
@endsection