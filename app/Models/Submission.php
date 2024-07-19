<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    use HasFactory;

    // Define the table associated with the model if it is not the plural form of the model name
    protected $table = 'submissions';

    // Define the fillable fields to allow mass assignment
    protected $fillable = [
        'name',
        'email',
        'message',
    ];
}
