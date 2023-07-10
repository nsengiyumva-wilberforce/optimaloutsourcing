<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience_level extends Model
{
    use HasFactory;
    protected $primaryKey = 'experience_level_id';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'experience_level_id',
        'name',
    ];

    public static function booted()
    {
        static::creating(function ($model) {
            $lastExperienceLevel = Job::orderBy('experience_level_id', 'desc')->first();

            if ($lastExperienceLevel) {
                $lastExperienceLevelId = $lastExperienceLevel->experience_level_id;
                $lastExperienceLevelIdNumber = (int) substr($lastExperienceLevelId, 1); // Extract the numeric part of the last job_id
                $nextExperienceLevelIdNumber = $lastExperienceLevelIdNumber + 1;
                $nextExperienceLevelId = 'el' . str_pad($nextExperienceLevelIdNumber, strlen($lastExperienceLevelId) - 1, '0', STR_PAD_LEFT);
            } else {
                $nextExperienceLevelId = 'el00001'; // If there are no existing jobs, start with J00001
            }

            $model->experience_level_id = $nextExperienceLevelId;

        });

    }
}
