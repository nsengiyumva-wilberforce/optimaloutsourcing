<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    protected $primaryKey = 'reference_id';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'reference_id',
        'full_name',
        'title_and_organization',
        'email',
        'phone_number',
        'relationship',
    ];
    public static function booted()
    {
        static::creating(function ($model) {
            $lastReference = Reference::orderBy('reference_id', 'desc')->first();

            if ($lastReference) {
                $lastReferenceId = $lastReference->reference_id;
                $lastReferenceIdNumber = (int)substr($lastReferenceId, 1); // Extract the numeric part of the last job_id
                $nextReferenceIdNumber = $lastReferenceIdNumber + 1;
                $nextReferenceId = 'ref' . str_pad($nextReferenceIdNumber, strlen($lastReferenceId) - 1, '0', STR_PAD_LEFT);
            } else {
                $nextReferenceId = 'ref00001'; // If there are no existing jobs, start with J00001
            }

            $model->reference_id = $nextReferenceId;
        });
    }

    /**
     * The profiles that belong to the reference.
     */
    public function profile()
    {
        return $this->belongsTo(Profile::class, 'profile_id', 'profile_id');
    }
}
