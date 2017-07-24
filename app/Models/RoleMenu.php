<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RoleMenu
 *
 * @mixin \Eloquent
 * @property int $id
 * @property int $r_id
 * @property int $p_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RoleMenu whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RoleMenu wherePId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RoleMenu whereRId($value)
 */
class RoleMenu extends Model
{
    protected $table = 'role_menu';

    public $timestamps = false;

    protected $fillable = [
        'r_id',
        'p_id'
    ];

    protected $guarded = [];

        
}