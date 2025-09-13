<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    /** @use HasFactory<\Database\Factories\JobFactory> */
    use HasFactory;

    protected $table = 'job_listings';

    public static array $experience = ['entry', 'mid', 'senior'];
    public static array $categories = ['IT', 'Finance', 'Healthcare', 'Education', 'Marketing', 'Sales', 'Engineering', 'Customer Service', 'Human Resources', 'Legal', 'Operations', 'Product Management', 'Design', 'Writing', 'Consulting', 'Other'];
}


