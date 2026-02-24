<?php

namespace App\Services\Accounting;

use App\Models\JournalEntry;

class JournalService
{
    public function sale(
        float $paid,
        float $due,
        float $subtotal
    ): void {
        $entries = [
            [
                'type' => 'debit',
                'account' => 'Cash',
                'amount' => $paid,
            ],
            [
                'type' => 'debit',
                'account' => 'Accounts Receivable',
                'amount' => $due,
            ],
            [
                'type' => 'credit',
                'account' => 'Sales Revenue',
                'amount' => $subtotal,
            ],
        ];

        foreach ($entries as $entry) {
            JournalEntry::create([
                ...$entry,
                'entry_date' => now(),
            ]);
        }
    }
}
