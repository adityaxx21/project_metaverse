<?php

namespace App\Http\Controllers;

use App\Models\maps_metaverse;
use Illuminate\Http\Request;

class MetaLand_Controller extends Controller
{
  var $location = 'landmark';
  public function index(Request $request)
  {
    $page = 2;
    $data['Page'] = "Kelola Metavers Land";
    $data['landmark'] = maps_metaverse::where('is_deleted',1)->paginate($page);
    $data['get_total'] = (maps_metaverse::where('is_deleted',1)->count());
    $data['page_now'] = $request->page;
    $data['search'] = $request->page;
    $round = ceil($data['get_total']/$page);
    $data['pagin'] = $round;
    // echo $data['pagin'];
    return view('adminpage.kelolaMeta',$data);
  }

  public function inputMeta(Request $request)
  {
    if (session()->get('username') == "") {
        return redirect('/login')->with('alert-notif', 'Anda Harus Login Terlebih Dahulu');
    }
    $get_data = [
        'owner' =>  $request->owner_land,
        'title' => $request->name_land,
        'description' =>  $request->desc_land,
        'url' =>  $request->url_land,
        'price' =>  $request->price_land,
        'created_at' => date("Y-m-d H:i:s"),
    ];

    try {
        $name_img =  $request->file('img_land')->getClientOriginalName();
    } catch (\Throwable $th) {
        $name_img = "";
    }
    if (!empty($name_img)) {
        $img_loc = "/storage/image/" . $this->location . "/";
        $img_save = "/public/image/" . $this->location . "/";

        $request->file('img_land')->storeAs($img_save, $name_img);
        $get_data = array_merge($get_data, array('image' =>  $img_loc . $name_img));
    }
    // print_r($get_data);
    maps_metaverse::create($get_data);
    return redirect('kelolaMetaland');
  }

  public function getData($id)
  {
    $data['data'] = maps_metaverse::where([['id',$id],['is_deleted',1]])->first();
    return Response()->json($data);
  }

  public function updateMeta(Request $request)
  {
    if (session()->get('username') == "") {
        return redirect('/login')->with('alert-notif', 'Anda Harus Login Terlebih Dahulu');
    }
    $id =  $request->id;
    $get_data = [
        'owner' =>  $request->owner,
        'title' => $request->name,
        'description' =>  $request->desc,
        'url' =>  $request->url,
        'price' =>  $request->price,
        'updated_at' => date("Y-m-d H:i:s"),
    ];
    try {
        $name_img =  $request->file('img')->getClientOriginalName();
    } catch (\Throwable $th) {
        $name_img = "";
    }
   
    if ($name_img != null) {
        $img_loc = "/storage/image/" . $this->location . "/";
        $img_save = "/public/image/" . $this->location . "/";

        $request->file('img')->storeAs($img_save, $name_img);
        $get_data = array_merge($get_data, array('image' =>  $img_loc . $name_img));
    }
    // print_r($get_data);
    maps_metaverse::where('id',$id)->update($get_data);
    return redirect('kelolaMetaland');
  }

  
  public function delete_landmark(Request $request)
  {
      $id = $request->id_data;
      // echo($id);
      maps_metaverse::where('id', $id)->update(['is_deleted'=>0]);
      return Redirect('/kelolaMetaland');
  }
}