<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VisitorEntry extends Model
{
    protected $fillable = [
        'auth_user_num', 'visitor_num', 'status',
    ];
}
