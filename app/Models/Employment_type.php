<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employment_type extends Model
{
    protected $primaryKey = 'employment_type_id';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'employment_type_id',
        'name',
    ];

    public static function booted()
    {
        static::creating(function ($model) {
            $lastEmploymentType = Employment_type::orderBy('employment_type_id', 'desc')->first();

            if ($lastEmploymentType) {
                $model->employment_type_id = 'emp' . str_pad(substr($lastEmploymentType->employment_type_id, 3) + 1, 5, '0', STR_PAD_LEFT);
            } else {
                $model->employment_type_id = 'emp00001';
            }
        });
    }

    public function jobs()
    {
        return $this->hasMany(Job::class, 'employment_type_id', 'employment_type_id');
    }
}
