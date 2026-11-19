<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmploymentApplication extends Model
{
    protected $fillable = [
        'name',
        'mobile_number',
        'email',
        'message',
        'employment_type',
        'status',
        'remark',
    ];
}
