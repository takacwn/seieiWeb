<?php
/**
 * Created by PhpStorm.
 * User: rootcom
 * Date: 2016/07/24
 * Time: 11:31
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    public $fillable = [
        'lastname',
        'firstname',
        'email',
        'active',
        'site',
        'tag',
        'send_key',
    ];
}