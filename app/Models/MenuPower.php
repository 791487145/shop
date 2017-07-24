<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MenuPower
 *
 * @mixin \Eloquent
 * @property int $id
 * @property int $m_id
 * @property int $p_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MenuPower whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MenuPower whereMId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MenuPower wherePId($value)
 */
class MenuPower extends Model
{
    protected $table = 'menu_power';

    public $timestamps = false;

    protected $fillable = [
        'm_id',
        'p_id'
    ];

    protected $guarded = [];

        
}