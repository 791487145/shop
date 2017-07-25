<?php

namespace App\Http\Controllers\Admin;

use Lang;
use App\Http\Controllers\GenController;

class BaseController extends GenController
{
    public function resPonse($ret)
    {
        if($ret){
           $ret = [
               'ret' => Lang::get('auth.result.yes'),
               'msg' => Lang::get('auth.response.done')];
            return $ret;
        }
        $ret = [
            'ret' => Lang::get('auth.result.no'),
            'msg' => Lang::get('auth.response.doneNone')];
        return $ret;
    }
}
