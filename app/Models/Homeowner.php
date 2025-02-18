<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homeowner extends Model {
    use HasFactory;
    protected $fillable = ['first_name', 'middle_name' , 'last_name', 'email', 'phone', 'address'];
    protected $table = 'homeowner';
    protected $guarded = ['id'];
}
