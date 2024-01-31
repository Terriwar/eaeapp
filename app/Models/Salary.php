<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    protected $fillable = [
        'work_year',
        'experience_level',
        'employment_type',
        'job_title',
        'salary',
        'salary_currency',
        'salary_in_usd',
        'employee_residence',
        'remote_ratio',
        'company_location',
        'company_size',
    ];
}
