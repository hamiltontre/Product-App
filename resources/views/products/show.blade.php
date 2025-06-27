@extends('layouts.app')

@section('title', __('products.view'))

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">{{ __('products.details') }}</h5>
        </div>
        <div class="card-body">
            <dl class="row">
                <dt class="col-sm-3">{{ __('products.name') }}</dt>
                <dd class="col-sm-9">{{ $product->name }}</dd>

                <dt class="col-sm-3">{{ __('products.price') }}</dt>
                <dd class="col-sm-9">${{ number_format($product->price, 2) }}</dd>

                <dt class="col-sm-3">{{ __('products.category') }}</dt>
                <dd class="col-sm-9">{{ $product->category->name }}</dd>

                <dt class="col-sm-3">{{ __('products.description') }}</dt>
                <dd class="col-sm-9">{{ $product->description ?? __('messages.not_specified') }}</dd>
            </dl>
        </div>
        <div class="card-footer text-end">
            <a href="{{ route('products.index') }}" class="btn btn-secondary">
                {{ __('actions.back') }}
            </a>
            <a href="{{ route('products.edit', $product) }}" class="btn btn-primary">
                {{ __('actions.edit') }}
            </a>
        </div>
    </div>
@endsection