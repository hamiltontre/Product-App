<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ __('app.welcome') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container text-center py-5">
        <h1>{{ __('app.welcome_message') }}</h1>
        <div class="mt-4">
            <a href="{{ route('categories.index') }}" class="btn btn-primary me-2">
                {{ __('categories.title') }}
            </a>
            <a href="{{ route('products.index') }}" class="btn btn-success">
                {{ __('products.title') }}
            </a>
        </div>
    </div>
</body>
</html>