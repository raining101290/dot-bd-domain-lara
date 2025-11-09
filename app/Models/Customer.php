<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\CustomerLogin;
use App\Models\CustomerAttachment;
use App\Models\CustomerOrder;

class Customer extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'registrant_name',
        'email',
        'father_name',
        'mother_name',
        'gender',
        'telephone',
        'mobile',
        'date_of_birth',
        'fax',
        'occupation',
        'country',
        'city',
        'post',
        'address',
        'customer_type',
    ];

    protected $hidden = ['password'];

    // Relationships
    public function login()
    {
        return $this->hasOne(CustomerLogin::class);
    }

    public function attachments()
    {
        return $this->hasMany(CustomerAttachment::class);
    }

    public function orders()
    {
        return $this->hasMany(CustomerOrder::class);
    }
}
