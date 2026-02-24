<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JournalEntry extends Model
{
    protected $fillable = [
        'type',
        'account',
        'amount',
        'entry_date',
    ];
}
