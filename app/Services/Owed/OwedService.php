<?php

namespace App\Services\Owed;

use App\Models\Owe;

class OwedService {

    public $owe;

    public function __construct(Owe $owe) {
        $this->owe = $owe;
    }

    public function getAll($request)
    {
        
    }

    public function getOwed($owe)
    {

    }

    public function add($request)
    {

    }

    public function update($request, $owe)
    {

    }

    public function delete($owe)
    {

    }
}