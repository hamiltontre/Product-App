<?php
namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function index()
{
    $products = Product::with('category')->latest()->paginate(10); // Cambia 10 por el número de items por página
    return view('products.index', compact('products'));
}

    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
        ]);

        Product::create($validated);

        return redirect()->route('products.index')
            ->with('success', __('products.created'));
    }

    public function show(Product $product)
{
    return view('products.show', compact('product'));
}

public function edit(Product $product)
{
    $categories = Category::all();
    return view('products.edit', compact('product', 'categories'));
}

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
        ]);

        $product->update($validated);

        return redirect()->route('products.index')
            ->with('success', __('products.updated'));
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')
            ->with('success', __('products.deleted'));
    }
}