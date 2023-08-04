<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $primaryKey = 'language_id';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'language_id',
        'language',
        'spoken_language_level',
        'written_language_level'
    ];
    protected static function booted()
    {
        static::creating(function ($model) {
            $lastLanguage= Language::orderBy('language_id', 'desc')->first();

            if ($lastLanguage) {
                $model->language_id = 'exp' . str_pad((int)substr($lastLanguage->language_id, 3) + 1, 4, '0', STR_PAD_LEFT);
            } else {
                $model->language_id = 'exp0001';
            }
        });
    }

    /**
     * The profiles that belong to the language.
     */
    public function profile()
    {
        return $this->belongsTo(Profile::class, 'profile_id', 'profile_id');
    }
}
