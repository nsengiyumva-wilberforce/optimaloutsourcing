<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey = 'category_id';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'category_id',
        'name',
    ];

    public static function booted()
    {
        static::creating(function ($model) {
            $lastCategory = Category::orderBy('category_id', 'desc')->first();

            if ($lastCategory) {
                $lastCategoryId = $lastCategory->category_id;
                $lastCategoryIdNumber = (int) substr($lastCategoryId, 1); // Extract the numeric part of the last job_id
                $nextCategoryIdNumber = $lastCategoryIdNumber + 1;
                $nextCategoryId = 'c' . str_pad($nextCategoryIdNumber, strlen($lastCategoryId) - 1, '0', STR_PAD_LEFT);
            } else {
                $nextCategoryId = 'c00001'; // If there are no existing jobs, start with J00001
            }

            $model->category_id = $nextCategoryId;

        });

    }

    public function jobs()
    {
        return $this->hasMany(Job::class, 'category_id', 'category_id');
    }
}
