<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUsInfo extends Model
{
    use HasFactory;
    protected $table = "contact_us_info";
    protected $casts = [];

    public $fillable = ['first_name', 'last_name', 'email', 'phone_number', 'company_name','subject', 'message'];
}
