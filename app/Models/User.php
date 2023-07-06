<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Application;
use App\Models\Profile;
use App\Models\Job;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

        /**
     * The primary key associated with the table.
     */
    protected $primaryKey = 'user_id';

    /**
     * Indicates if the IDs are auto-incrementing.
     */
    public $incrementing = false;

    /**
     * The data type of the primary key.
     */
    protected $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     */

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'phone_number',
        'email',
        'password',
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

        /**
     * custom id generation
     */
    protected static function booted()
    {
        static::creating(function ($model) {
            $lastUser = User::orderBy('user_id', 'desc')->first();

            if ($lastUser) {
                $lastUserId = $lastUser->user_id;
                $lastUserIdNumber = (int)substr($lastUserId, 1); // Extract the numeric part of the last uer_id
                $nextUserIdNumber = $lastUserIdNumber + 1;
                $nextUserId = 'U' . str_pad($nextUserIdNumber, strlen($lastUserId) - 1, '0', STR_PAD_LEFT);
            } else {
                $nextUserId = 'U00001'; // If there are no existing users, start with U00001
            }

            $model->user_id = $nextUserId;

        });
    }

    //every user can have many jobs
    public function jobs()
    {
        return $this->hasMany(Job::class);
    }

    public function applications()
    {
        return $this->hasMany(Application::class);
    }
        public function profile()
    {
        return $this->hasOne(Profile::class, 'user_id');
    }
}
