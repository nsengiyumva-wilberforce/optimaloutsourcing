<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Skill;
use App\Models\Experience;
use App\Models\Training;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Profile extends Model
{
        /**
     * The primary key associated with the table.
     */
    protected $primaryKey = 'profile_id';

    /**
     * Indicates if the IDs are auto-incrementing.
     */
    public $incrementing = false;

    /**
     * The data type of the primary key.
     */
    protected $keyType = 'string';

    protected $fillable = [
        'profile_id',
        'user_id',
        'first_name',
        'last_name',
        'title',
        'cover_photo',
        'profile_photo',
        'location',
        'email',
        'phone_number',
        'about_you',
    ];

        public function user()
    {
        return $this->belongsTo(User::class, 'user_id','user_id');
    }

    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'profile_skill', 'profile_id', 'skill_id');
    }
    /**
     * The experiences that belong to the profile.
     */
    public function experiences(): HasMany
    {
        return $this->hasMany(Experience::class, 'profile_id', 'profile_id');
    }

    /**
     * The trainings that belong to the profile.
     */
    public function trainings(): HasMany
    {
        return $this->hasMany(Training::class, 'profile_id', 'profile_id');
    }

    /**
     * The languages that belong to the profile.
     */
    public function languages(): HasMany
    {
        return $this->hasMany(Language::class, 'profile_id', 'profile_id');
    }

    /**
     * The references that belong to the profile.
     */
    public function references(): HasMany
    {
        return $this->hasMany(Reference::class, 'profile_id', 'profile_id');
    }

    /*
    * The references that belong to the profile.
    */
    public function educations(): HasMany
    {
        return $this->hasMany(Education::class, 'profile_id', 'profile_id');
    }

    /**
     * The certificates that belong to the profile.
     */
    public function certificates(): HasMany
    {
        return $this->hasMany(Certificate::class, 'profile_id', 'profile_id');
    }
    /**
     * custom id generation
     */
    protected static function booted()
    {
        static::creating(function ($model) {
            $lastProfile = Profile::orderBy('profile_id', 'desc')->first();

            if ($lastProfile) {
                $lastProfileId = $lastProfile->profile_id;
                $lastProfileIdNumber = (int)substr($lastProfileId, 1); // Extract the numeric part of the last job_id
                $nextProfileIdNumber = $lastProfileIdNumber + 1;
                $nextProfileId = 'P' . str_pad($nextProfileIdNumber, strlen($lastProfileId) - 1, '0', STR_PAD_LEFT);
            } else {
                $nextProfileId = 'P00001'; // If there are no existing jobs, start with J00001
            }

            $model->profile_id = $nextProfileId;

        });
    }
}
