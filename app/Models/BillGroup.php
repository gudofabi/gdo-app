<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillGroup extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'total'];

    public function bills()
    {
        return $this->hasMany(Bill::class);
    }
}
