<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserData extends Model
{
    use HasFactory;

    protected $table = 'userdata'; // your table name from migration
    protected $fillable = [
        'name', 'email', 'mobile', 'subject', 'message'
    ];
}
