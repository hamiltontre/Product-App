@extends('layouts.app')

@section('title', 'Bienvenido')

@section('content')
    <div class="text-center py-5">
        <h1>Bienvenido a Product-App</h1>
        <p class="lead">Sistema de gestión de productos y categorías</p>
        
        <div class="mt-4">
            <a href="{{ route('products.index') }}" class="btn btn-primary btn-lg mx-2">
                Ver Productos
            </a>
            <a href="{{ route('categories.index') }}" class="btn btn-secondary btn-lg mx-2">
                Ver Categorías
            </a>
        </div>
    </div>
@endsection