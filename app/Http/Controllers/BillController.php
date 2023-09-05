<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bill;
use App\Services\Bills\BillsService;
use App\Traits\ResponseFormatterTrait;

class BillController extends Controller
{
    use ResponseFormatterTrait;
    private BillsService $billsService;

    public function __construct(BillsService $billsService)
    {
        $this->billsService = $billsService;
    }

    public function index(Request $request)
    {
        
    }

    public function show($bill)
    {

    }

    public function store(Request $request)
    {
        return $this->responseSuccess(
            message: "Bills successfully created!",
            data: $this->billsService->create($request)
        );
    }

    public function update(Request $request)
    {

    }

    public function destroy($bill)
    {

    }
}
