<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $primaryKey = 'skill_id';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'skill_id',
        'skill_name'
    ];

    /**
     *The profiles that belong to the skill.
     */
    public function profiles()
    {
        return $this->belongsToMany(Profile::class, 'profile_skill', 'skill_id', 'profile_id');
    }

        /**
     * custom id generation
     */
    protected static function booted()
    {
        static::creating(function ($model) {
            $lastSkill = Skill::orderBy('skill_id', 'desc')->first();

            if ($lastSkill) {
                $lastSkillId = $lastSkill->skill_id;
                $lastSkillIdNumber = (int)substr($lastSkillId, 1); // Extract the numeric part of the last skill_id
                $nextSkillIdNumber = $lastSkillIdNumber + 1;
                $nextSkillId = 'S' . str_pad($nextSkillIdNumber, strlen($lastSkillId) - 1, '0', STR_PAD_LEFT);
            } else {
                $nextSkillId = 'S00001'; // If there are no existing skills, start with S00001
            }

            $model->skill_id = $nextSkillId;

        });
    }
}
