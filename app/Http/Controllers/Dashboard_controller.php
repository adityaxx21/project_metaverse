<?php

namespace App\Http\Controllers;

use App\Models\maps_metaverse;
use App\Models\prop_metaverse;
use App\Models\user_reg;
use App\Models\user_roles;
use Illuminate\Http\Request;

class Dashboard_controller extends Controller
{
   public function index()
   {
      $data['roles'] = user_roles::get();
      $data['Page'] = "Dashboard";
      $data['total_user'] = user_reg::where('is_deleted',1)->count();
      $data['total_land'] = maps_metaverse::where('is_deleted',1)->count();
      $data['total_prop'] = prop_metaverse::where('is_deleted',1)->count();


      $where = [['is_deleted',1],['created_at', 'LIKE',date("Y-m-d"),'%']];
      $data['user_add_today'] = user_reg::where($where)->count();
      $data['land_add_today'] = maps_metaverse::where($where)->count();
      $data['prop_add_today'] = prop_metaverse::where($where)->count();


    return view('adminpage.dashboard',$data);
   }
}

