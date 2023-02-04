<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function sub_category(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Sub_category::class);
    }
}
