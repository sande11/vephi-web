<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'company_logo',
        'position',
        'location',
        'posted_on',
        'closing_date',
        'job_type',
        'level',
        'about_company',
        'about_position',
        'responsibilities',
        'qualifications',
        'application',
    ];
}
