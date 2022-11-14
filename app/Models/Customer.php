<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory, SoftDeletes;
    public $table = "customer";
   
    protected $fillable = [
        'userName',
        'password',
        'name',
        'gender',
        'phoneNumber',
        'email',
        'status',
        'address',
    ];
}
