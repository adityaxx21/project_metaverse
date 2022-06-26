<?php

namespace App\Http\Controllers;

use App\Models\maps_metaverse;
use App\Models\prop_metaverse;
use Illuminate\Http\Request;

class shop_controller extends Controller
{
    public function index()
    {
        $data['land'] = maps_metaverse::get();
        $data['properties'] = prop_metaverse::get();
        return view('userpage.shop',$data);
    }
}
