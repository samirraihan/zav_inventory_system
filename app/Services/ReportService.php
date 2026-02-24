<?php

namespace App\Services;

use App\Models\Sale;
use App\Models\Product;

class ReportService
{
    public function generate(array $filters): array
    {
        $from = $filters['from'] ?? now()->startOfMonth();
        $to = $filters['to'] ?? now();

        $sales = Sale::whereBetween('sale_date', [$from, $to])->get();

        $totalSell = $sales->sum('total');
        $totalExpense = Product::sum('purchase_price');

        return [
            'sales' => $sales,
            'totalSell' => $totalSell,
            'totalExpense' => $totalExpense,
        ];
    }
}
