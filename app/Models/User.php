<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    //Either the $guarded (empty square brackets) OR $fillable (and only all wanted columns included)

    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    //     'username',
    // ];

    protected $guarded = [];


    public function product_detail(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->HasMany(Product_detail::class);
    }

    public function cart(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->HasMany(Cart::class);
    }

    public function subscription(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->HasOne(Subscription::class);
    }

    public function contact_us(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->HasMany(Contact_us::class);
    }

    public function created_user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->BelongsTo(User::class);
    }

    public function updated_user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->BelongsTo(User::class);
    }

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
    ];

    //Inside the user model

    public function scopeType($query, $userType)
    {
        return $query->where('user_type', '=', $userType);
    }

}
