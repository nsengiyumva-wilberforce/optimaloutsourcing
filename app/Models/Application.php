<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Application extends Model
{
    /**
     * The primary key associated with the table.
     */
    protected $primaryKey = 'application_id';
    public $incrementing = false;
    protected $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'application_id',
        'job_id',
        'user_id',
        'status',
        'resume',
    ];

    public static function booted()
    {
        static::creating(function ($model) {
            $lastApplication = Application::orderBy('application_id', 'desc')->first();

            if ($lastApplication) {
                $lastApplicationId = $lastApplication->application_id;
                $lastapplicationIdNumber = (int)substr($lastApplicationId, 1); // Extract the numeric part of the last application_id
                $nextApplicationIdNumber = $lastApplicationIdNumber + 1;
                $nextApplicationId = 'A' . str_pad($nextApplicationIdNumber, strlen($lastApplicationId) - 1, '0', STR_PAD_LEFT);
            } else {
                $nextApplicationId = 'A00001'; // If there are no existing Applications, start with A00001
            }

            $model->application_id = $nextJobId;

        });

        static::created(function ($application) {
            $application->job->increment('application_count');
        });

        static::deleted(function ($application) {
            $application->job->decrement('application_count');
        });
    }

    public function job()
    {
        return $this->belongsTo(Job::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
