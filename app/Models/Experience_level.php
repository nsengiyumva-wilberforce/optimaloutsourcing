<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience_level extends Model
{    protected $primaryKey = 'experience_level_id';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'experience_level_id',
        'name',
    ];

    public static function booted()
    {
        static::creating(function ($model) {
            $lastExperienceLevel = Experience_level::orderBy('experience_level_id', 'desc')->first();

            if ($lastExperienceLevel) {
                $model->experience_level_id = 'exp' . str_pad(substr($lastExperienceLevel->experience_level_id, 3) + 1, 5, '0', STR_PAD_LEFT);
            } else {
                $model->experience_level_id = 'exp00001';
            }
        });
    }

    public function jobs()
    {
        return $this->hasMany(Job::class, 'experience_level_id', 'experience_level_id');
    }
}
