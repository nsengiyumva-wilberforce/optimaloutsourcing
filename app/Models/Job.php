<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Application;

class Job extends Model
{
    /**
     * The primary key associated with the table.
     */
    protected $primaryKey = 'job_id';

    /**
     * Indicates if the IDs are auto-incrementing.
     */
    public $incrementing = false;

    /**
     * The data type of the primary key.
     */
    protected $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'job_id',
        'job_user_id',
        'job_title',
        'location',
        'category',
        'description',
        'experience',
        'career_level',
        'employment_type',
        'salary_range',
        'published',
    ];

        /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'published' => false,
    ];

    /**
     * custom id generation
     */
    protected static function booted()
    {
        static::creating(function ($model) {
            $lastJob = Job::orderBy('job_id', 'desc')->first();

            if ($lastJob) {
                $lastJobId = $lastJob->job_id;
                $lastJobIdNumber = (int)substr($lastJobId, 1); // Extract the numeric part of the last job_id
                $nextJobIdNumber = $lastJobIdNumber + 1;
                $nextJobId = 'J' . str_pad($nextJobIdNumber, strlen($lastJobId) - 1, '0', STR_PAD_LEFT);
            } else {
                $nextJobId = 'J00001'; // If there are no existing jobs, start with J00001
            }

            $model->job_id = $nextJobId;

        });
    }

    public function applications()
    {
        return $this->hasMany(Application::class);
    }

    //every job belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class, 'job_user_id');
    }

}
