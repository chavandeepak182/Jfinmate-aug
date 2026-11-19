<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmploymentDocument extends Model
{
    protected $table = 'employment_documents';

    protected $fillable = [
        'employment_type',
        'document_name',
        'is_active',
    ];
}