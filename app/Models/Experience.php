<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Profile;


class Experience extends Model
{
    protected $table = 'experience';
    protected $primaryKey = 'experience_id';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'experience_id',
        'job_title',
        'company_name',
        'start_date',
        'end_date',
        'job_description',
    ];

    /**
     *The profiles that belong to the experience.
     */
    public function profile()
    {
        return $this->belongsTo(Profile::class, 'profile_id', 'profile_id');
    }

    protected static function booted()
    {
        static::creating(function ($model) {
            $lastExperience = Experience::orderBy('experience_id', 'desc')->first();

            if ($lastExperience) {
                $model->experience_id = 'exp' . str_pad((int)substr($lastExperience->experience_id, 3) + 1, 4, '0', STR_PAD_LEFT);
            } else {
                $model->experience_id = 'exp0001';
            }
        });
    }
}
