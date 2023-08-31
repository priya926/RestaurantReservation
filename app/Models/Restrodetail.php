<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Restrodetail extends Model
{
    use HasFactory;
    protected $table = "restrodetails";
       // Add it's type to casts as array
    public $casts = ['restro_facilities'=> 'array'];

    protected $fillable = [
        'id',
        'name',
        'contact',
        'email',
        'address',
        'cost_per_two',
        'cuisine',
        'otime',
        'ctime',
        'wotime',
        'wctime',
        'description',
        'must_try',
        'select',
        'offer',
        'restro_facilities',
        'tp',
        'iep',
        'mp',
    ];

    public function restro()
    {
        return $this->belongsTo(User::class);
    }
}
