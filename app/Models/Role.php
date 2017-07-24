<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 *
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property int $state -1：删除；1：正常
 * @property int $display_order
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereDisplayOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereState($value)
 */
class Role extends Model
{
    protected $table = 'role';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'state',
        'display_order'
    ];

    protected $guarded = [];

        
}