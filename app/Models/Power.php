<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Power
 *
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property int $display_order
 * @property int $state -1:删除；1：正常
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Power whereDisplayOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Power whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Power whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Power whereState($value)
 */
class Power extends Model
{
    protected $table = 'power';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'display_order',
        'state'
    ];

    protected $guarded = [];

        
}