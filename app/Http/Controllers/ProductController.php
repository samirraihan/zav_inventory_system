<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Services\ProductService;

class ProductController extends Controller
{
    public function __construct(
        protected ProductService $service
    ) {}

    public function index()
    {
        $products = $this->service->list();

        return view('products.index', compact('products'));
    }

    public function store(StoreProductRequest $request)
    {
        $this->service->create(
            $request->validated()
        );

        return back()->with('success', 'Product added');
    }
}
