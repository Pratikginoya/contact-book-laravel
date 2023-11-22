<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact_book extends Model
{
    protected $table = 'contact_books';
    protected $fillable = ['name','email','password','city'];
}