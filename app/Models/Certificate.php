<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    protected $primaryKey = 'certificate_id';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'certificate_id',
        'certificate_name',
        'date_of_certification',
        'certificate_attachment'
    ];
    protected static function booted()
    {
        static::creating(function ($model) {
            $lastCertificate= Certificate::orderBy('certificate_id', 'desc')->first();

            if ($lastCertificate) {
                $model->certificate_id = 'cer' . str_pad((int)substr($lastCertificate->certificate_id, 3) + 1, 4, '0', STR_PAD_LEFT);
            } else {
                $model->certificate_id = 'cer0001';
            }
        });
    }

    /**
     * The profiles that belong to the certificate.
     */
    public function profile()
    {
        return $this->belongsTo(Profile::class, 'profile_id', 'profile_id');
    }
}
