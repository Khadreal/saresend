<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    //
    protected $fillable = [
        'subject', 'filepath', 'fileurl', 'balance',
    ];
}
