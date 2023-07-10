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
            $lastEmploymentType = Job::orderBy('employment_type_id', 'desc')->first();

            if ($lastEmploymentType) {
                $lastEmploymentTypeId = $lastEmploymentType->employment_type_id;
                $lastEmploymentTypeIdNumber = (int) substr($lastEmploymentTypeId, 1); // Extract the numeric part of the last job_id
                $nextEmploymentTypeIdNumber = $lastEmploymentTypeIdNumber + 1;
                $nextEmploymentTypeId = 'et' . str_pad($nextEmploymentTypeIdNumber, strlen($lastEmploymentTypeId) - 1, '0', STR_PAD_LEFT);
            } else {
                $nextEmploymentTypeId = 'et00001'; // If there are no existing jobs, start with J00001
            }

            $model->job_id = $nextEmploymentTypeId;

        });

    }


}
