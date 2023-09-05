<?php

namespace App\Services\Bills;

use App\Models\Bill;

class BillsService {

    public $bill;

    public function __construct(Bill $bill) {
        $this->bill = $bill;
    }

    public function getAll($request)
    {
        
    }

    public function getBill($bill)
    {

    }

    public function create($request)
    {
        $response = $this->bill->create($request->all());
        return $response;
    }

    public function update($request, $bill)
    {

    }

    public function delete($id)
    {

    }
}