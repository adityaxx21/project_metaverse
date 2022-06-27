<?php

namespace App\Http\Controllers;

use App\Models\maps_metaverse;
use App\Models\prop_metaverse;
use Illuminate\Http\Request;

class shop_controller extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search_me;
        if ($search != null) {
            $cond = [['is_deleted',1],['title','LIKE','%'.$search.'%']] ;
        } else {
            $cond = [['is_deleted',1]];
        }
        $data['land'] = maps_metaverse::where($cond)->get();
        $data['properties'] = prop_metaverse::where($cond)->get();
        return view('userpage.shop',$data);
    }
}
