<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;


    protected $fillable = ['make', 'model', 'year', 'price', 'customer_id'];

    // تعريف العلاقة مع العميل
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
