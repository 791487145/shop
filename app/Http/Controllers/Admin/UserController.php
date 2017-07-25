<?php

namespace App\Http\Controllers\Admin;

use App\Models\MenuBase;
use App\Http\Controllers\Admin\BaseController;
use Illuminate\Http\Request;
use Lang;


class UserController extends BaseController
{
    public function menuList()
    {
        $MenuBases = MenuBase::whereState(MenuBase::StateNormal)->orderBy('display_order','asc')->get();
        foreach($MenuBases as $menuBase){
            $menuBase->menu = '一级菜单';
            if($menuBase->parent_id){
                $menuBase->menu = MenuBase::whereId($menuBase->parent_id)->pluck('name');
            }
        }
        return view('boss.user.user_menu_list',compact('MenuBases'));
    }

    public function menuAdd(Request $request)
    {
        if($request->isMethod('post')){
            $MenuBase = new MenuBase();
            $MenuBase->name = $request->input('name');
            $MenuBase->parent_id = $request->input('parent_id');
            $MenuBase->icon = $request->icon;
            $MenuBase->description = $request->description;
            $MenuBase->display_order = $request->display_order;
            $ret = $MenuBase->save();
            $result = self::resPonse($ret);
            return response()->json($result);
        }
        $MenuBases = MenuBase::whereParentId(self::zero)->whereState(MenuBase::StateNormal)->get();
        return view('boss.user.user_menu_add',compact('MenuBases'));
    }

    public function menuUpdate(Request $request,$id)
    {

    }

}
