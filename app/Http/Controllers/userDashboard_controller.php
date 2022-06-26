<?php

namespace App\Http\Controllers;

use App\Models\maps_metaverse;
use App\Models\prop_metaverse;
use Illuminate\Http\Request;

class userDashboard_controller extends Controller
{
    public function index(Request $request)
    {
        $data['land'] = maps_metaverse::where('is_deleted',1)->orderBy('price','asc')->paginate(5);
        $data['properties'] = prop_metaverse::where('is_deleted',1)->orderBy('price','asc')->paginate(5);
        // print_r($data['land']);

        // $data['fusion'] = array_merge($data['land'], $data['properties']);
        return view('userpage.dashboard', $data);
    }
}
