<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    /**
     * @var mixed
     */
    public static $tableName = 'infos';

    protected $fillable = [
        'name',
        'user_id',
        'company',
        'request',
        'message',
        'phone',
    ];
}
