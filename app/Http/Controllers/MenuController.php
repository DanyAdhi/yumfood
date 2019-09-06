<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Vendor;
use Illuminate\Http\Request;
use App\Http\Resources\MenuResource;


class MenuController extends Controller
{
    public function all()
    {
        $data = MenuResource::collection(Menu::with('vendor')->orderBy('id','DESC')->paginate(10));
        return $data;
    }

    public function index($idVendor)
    {
        $data = MenuResource::collection(Menu::with('vendor')->where('vendor_id',$idVendor)->orderBy('id','DESC')->paginate(10));
        return $data;
    }

    public function show($idVendor, $idMenu)
    {
        $data = new MenuResource(Menu::with('vendor')->where('vendor_id', $idVendor)->findOrFail($idMenu));
        return response()->json([
            'data' => $data
        ], 200);
    }
}
