@extends('layouts.app')

@section('title', __('categories.view'))

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">{{ __('categories.details') }}</h5>
        </div>
        <div class="card-body">
            <dl class="row">
                <dt class="col-sm-3">{{ __('categories.name') }}</dt>
                <dd class="col-sm-9">{{ $category->name }}</dd>

                <dt class="col-sm-3">{{ __('categories.description') }}</dt>
                <dd class="col-sm-9">{{ $category->description ?? __('messages.not_specified') }}</dd>
            </dl>
        </div>
        <div class="card-footer text-end">
            <a href="{{ route('categories.index') }}" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> {{ __('actions.back') }}
            </a>
            <a href="{{ route('categories.edit', $category) }}" class="btn btn-primary">
                <i class="bi bi-pencil"></i> {{ __('actions.edit') }}
            </a>
        </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
@endpush