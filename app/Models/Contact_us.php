<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact_us extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'contact_us';
    //used in secured tables and corrects the table name (when table name doesn't have a plural name) so laravel assumes the plural name even if wrong
    //--- ERROR: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'project.contact_uses' doesn't exist
    protected $guarded = [];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->BelongsTo(User::class, 'created_user_id', 'id');
    }
}
