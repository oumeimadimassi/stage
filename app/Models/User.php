<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Set the user's name.
     *
     * @param  string  $value
     * @return void
     */
    public function setName($value)
    {
        $this->attributes['name'] = ucfirst($value);
    }

    /**
     * Get the user's name.
     *
     * @param  string  $value
     * @return string
     */
    public function getName($value)
    {
        return strtoupper($value);
    }

    /**
     * Set the user's email.
     *
     * @param  string  $value
     * @return void
     */
    public function setEmail($value)
    {
        $this->attributes['email'] = strtolower($value);
    }

    /**
     * Get the user's email.
     *
     * @param  string  $value
     * @return string
     */
    public function getEmail($value)
    {
        return strtolower($value);
    }



    






}
