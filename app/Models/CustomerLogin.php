<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerLogin extends Model
{
    use HasFactory;

    protected $table = 'customer_logins';

    protected $fillable = [
        'customer_id',
        'username',
        'password',
    ];

    protected $hidden = [
        'password',
    ];

    // Relationship: Each login belongs to one customer
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
