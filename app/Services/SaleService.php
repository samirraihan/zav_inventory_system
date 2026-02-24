<?php

namespace App\Services;

use App\Models\Product;
use App\Models\Sale;
use Illuminate\Support\Facades\DB;
use App\Services\Accounting\JournalService;

class SaleService
{
    public function __construct(
        protected JournalService $journal
    ) {}

    public function create(array $data): Sale
    {
        return DB::transaction(function () use ($data) {

            $product = Product::findOrFail($data['product_id']);

            if ($product->stock < $data['qty']) {
                throw new \RuntimeException('Insufficient stock');
            }

            $subtotal = $product->sell_price * $data['qty'];
            $vat = $subtotal * 0.05;
            $discount = $data['discount'] ?? 0;

            $total = $subtotal + $vat - $discount;
            $due = $total - $data['paid'];

            $product->decrement('stock', $data['qty']);

            $sale = Sale::create([
                'product_id' => $product->id,
                'qty' => $data['qty'],
                'subtotal' => $subtotal,
                'discount' => $discount,
                'vat' => $vat,
                'total' => $total,
                'paid' => $data['paid'],
                'due' => $due,
                'sale_date' => now(),
            ]);

            $this->journal->sale(
                $data['paid'],
                $due,
                $subtotal
            );

            return $sale;
        });
    }
}
