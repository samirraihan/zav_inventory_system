<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Sale;
use App\Http\Requests\StoreSaleRequest;
use App\Services\SaleService;

class SaleController extends Controller
{
    public function __construct(
        protected SaleService $service
    ) {}

    public function index()
    {
        $products = Product::all();
        $sales = Sale::latest()->get();

        return view('sales.index', compact('products', 'sales'));
    }

    public function store(StoreSaleRequest $request)
    {
        try {

            $this->service->create(
                $request->validated()
            );

            return back()->with('success', 'Sale completed');
        } catch (\Exception $e) {

            return back()->with('error', $e->getMessage());
        }
    }
}
