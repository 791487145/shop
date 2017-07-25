<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MenuBase
 *
 * @mixin \Eloquent
 * @property int $id
 * @property int $parent_id
 * @property string $icon 图标
 * @property string $path
 * @property string $name
 * @property string $description
 * @property int $display_order
 * @property int $state -1：删除；1：正常
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MenuBase whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MenuBase whereDisplayOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MenuBase whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MenuBase whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MenuBase whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MenuBase whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MenuBase wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MenuBase whereState($value)
 */
class MenuBase extends Model
{
    protected $table = 'menu_base';

    const StateDel = -1;
    const StateNormal = 1;

    public $timestamps = false;

    protected $fillable = [
        'parent_id',
        'icon',
        'path',
        'name',
        'description',
        'display_order',
        'state'
    ];

    protected $guarded = [];

        
}