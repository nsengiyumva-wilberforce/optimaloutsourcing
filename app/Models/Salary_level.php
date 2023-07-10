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
            $lastSalaryLevel = Salary_level::orderBy('salary_range_id', 'desc')->first();

            if ($lastSalaryLevel) {
                $model->salary_range_id = 'sal' . str_pad(substr($lastSalaryLevel->salary_range_id, 3) + 1, 5, '0', STR_PAD_LEFT);
            } else {
                $model->salary_range_id = 'sal00001';
            }
        });

    }

    public function jobs()
    {
        return $this->hasMany(Job::class, 'salary_range_id', 'salary_range_id');
    }
}
