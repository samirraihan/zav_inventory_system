<?php

namespace App\Http\Controllers;

use App\Models\JournalEntry;

class JournalController extends Controller
{
    public function index()
    {
        $journals = JournalEntry::latest()->get();

        return view('journals.index', compact('journals'));
    }
}
