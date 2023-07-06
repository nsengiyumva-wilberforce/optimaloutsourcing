<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    protected $table = 'training';
    protected $primaryKey = 'training_id';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'training_id',
        'training_title',
        'training_institution',
        'training_start_date',
        'training_end_date',
        'training_description',
    ];

    /**
     * The profiles that belong to the training.
     */
    public function profile(): BelongsTo
    {

        return $this->belongsTo(Profile::class, 'profile_id', 'profile_id');
    }

    protected static function booted()
    {
        static::creating(function ($model) {
            $lastTraining = Training::orderBy('training_id', 'desc')->first();

            if ($lastTraining) {
                $model->training_id = 'trn' . str_pad((int)substr($lastTraining->training_id, 3) + 1, 4, '0', STR_PAD_LEFT);
            } else {
                $model->training_id = 'trn0001';
            }
        });
    }
}
