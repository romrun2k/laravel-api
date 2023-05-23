<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emplployee extends Model
{
    use HasFactory;

    protected $table = "employee";

    protected $fillable = ["name", "email", "phone_no", "gender", "age"];

}