<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReportFilterRequest;
use App\Services\ReportService;

class ReportController extends Controller
{
    public function __construct(
        protected ReportService $service
    ) {}

    public function index(ReportFilterRequest $request)
    {
        $data = $this->service->generate(
            $request->validated()
        );

        return view('reports.index', $data);
    }
}
