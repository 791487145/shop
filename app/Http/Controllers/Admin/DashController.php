<?php

namespace App\Http\Controllers\Admin;

use App\Models\MenuBase;
use App\Http\Controllers\Admin\BaseController;


class DashController extends BaseController
{
    public function dash()
    {
        $MenuBases = MenuBase::whereState(MenuBase::StateNormal)->whereParentId(self::zero)->get();
        foreach($MenuBases as $menuBase){
            $menuBaseChild = MenuBase::whereState(MenuBase::StateNormal)->whereParentId($menuBase->id)->get();
            $menuBase->child = $menuBaseChild;
        }
        return view('dash.dash',compact('MenuBases'));
    }

    public function index()
    {
        return view('dash.index');
    }
}
