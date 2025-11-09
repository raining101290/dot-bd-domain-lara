<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerAttachment extends Model
{
    use HasFactory;

    protected $table = 'customer_attachments';

    protected $fillable = [
        'customer_id',
        'file_name',
        'file_url',
        'is_verified',
    ];

    // Relationship: Each attachment belongs to one customer
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
