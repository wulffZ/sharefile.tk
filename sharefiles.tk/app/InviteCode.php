<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InviteCode extends Model
{
    protected $table = "invite_codes";

    protected $fillable = [
        'user_id', 'code', 'status'
    ];
}
