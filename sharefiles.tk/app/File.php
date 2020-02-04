<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class File extends Authenticatable
{
    protected $table = "file";

    protected $fillable = [
        'name', 'file_name', 'type', 'soft_delete'
    ];
}
