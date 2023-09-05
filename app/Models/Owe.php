<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owe extends Model
{
    use HasFactory;

    protected $fillable = ['debtor_name', 'amount', 'date_borrowed', 'expected_return_date', 'notes'];
}
