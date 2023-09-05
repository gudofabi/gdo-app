<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    protected $fillable = ['bill_group_id', 'name', 'amount', 'amount_paid', 'status'];

    public function billGroup()
    {
        return $this->belongsTo(BillGroup::class);
    }
}
