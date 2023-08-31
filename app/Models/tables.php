<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tables extends Model
{
    use HasFactory;
    protected $table = "tables";
    protected $fillable = [
        'id',
        'name',
        'email',
        'contact',
        'date',
        'time',
        'person',
    ];
}
