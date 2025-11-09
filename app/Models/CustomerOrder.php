<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerOrder extends Model
{
    use HasFactory;

    protected $table = 'customer_orders';

    protected $fillable = [
        'customer_id',
        'order_number',
        'amount',
        'status',
        'notes',
    ];

    // Relationship: each order belongs to one customer
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
