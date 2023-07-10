<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salary_level extends Model
{
    use HasFactory;
    protected $primaryKey = 'salary_level_id';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'salary_level_id',
        'starting_salary',
        'ending_salary'
    ];

    public static function booted()
    {
        static::creating(function ($model) {
            $lastSalaryLevel = Job::orderBy('salary_level_id', 'desc')->first();

            if ($lastSalaryLevel) {
                $lastSalaryLevelId = $lastSalaryLevel->salary_level_id;
                $lastSalaryLevelIdNumber = (int) substr($lastSalaryLevelId, 1); // Extract the numeric part of the last job_id
                $nextSalaryLevelIdNumber = $lastSalaryLevelIdNumber + 1;
                $nextSalaryLevelId = 'sl' . str_pad($nextSalaryLevelIdNumber, strlen($lastSalaryLevelId) - 1, '0', STR_PAD_LEFT);
            } else {
                $nextSalaryLevelId = 'sl00001'; // If there are no existing jobs, start with J00001
            }

            $model->salary_level_id = $nextSalaryLevelId;

        });

    }
}
