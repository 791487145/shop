<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 *
 * @mixin \Eloquent
 * @property int $id
 * @property string $name 姓名
 * @property int $rid 角色ID
 * @property int $state 0:禁用；1；正常；-1删除
 * @property int $sex 0:boy;1;girl
 * @property string $mobile
 * @property int $old 年龄
 * @property string $email
 * @property string $salt
 * @property string $password
 * @property int $display_order 排序
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereDisplayOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereOld($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereRid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereSalt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereSex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUpdatedAt($value)
 */
class User extends Model
{
    protected $table = 'user';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'rid',
        'state',
        'sex',
        'mobile',
        'old',
        'email',
        'salt',
        'password',
        'display_order'
    ];

    protected $guarded = [];

        
}