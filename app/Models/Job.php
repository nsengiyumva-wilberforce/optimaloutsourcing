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
        'category_id',
        'description',
        'experience',
        'experience_level_id',
        'employment_type_id',
        'salary_range_id',
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
        return $this->hasMany(Application::class, 'job_id');
    }

    //every job belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class, 'job_user_id');
    }

    //every job belongs to a category
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    //every job belongs to an employment type
    public function employment_type()
    {
        return $this->belongsTo(Employment_type::class, 'employment_type_id');
    }

    //every job belongs to an experience level
    public function experience_level()
    {
        return $this->belongsTo(Experience_level::class, 'experience_level_id');
    }

    //every job belongs to a salary level
    public function salary_range()
    {
        return $this->belongsTo(Salary_level::class, 'salary_range_id', 'salary_range_id');
    }
}
