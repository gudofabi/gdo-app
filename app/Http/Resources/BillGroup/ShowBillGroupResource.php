<?php

namespace App\Http\Resources\BillGroup;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ShowBillGroupResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return [
            "id"      => $this->id ?? '',
            "date"    => $this->date ?? '',
            "total"   => $this->total ?? '',
            "bills"   => $this->bills ?? []
        ];
    }
}
