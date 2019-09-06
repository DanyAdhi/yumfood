<?php

namespace App\Http\Controllers;

use App\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\VendorResource;


class VendorsController extends Controller
{
    
    public function index(Request $request )
    {
        $tag    = $request->query('tags');

        if(!empty($tag)){
                
            $vendor = Vendor::with('tags')->whereHas('tags', 
                        function($q) use ($tag){
                            $q->whereIn('tags.name',$tag);
                        }, '=', count($tag));

            $vendor= VendorResource::collection($vendor->orderBy('id','DESC')->paginate(10));
        }else{
            $vendor = VendorResource::collection(Vendor::with('tags')->orderBy('id','DESC')->paginate(10));
        }
        return $vendor;
    }


    public function store(Request $request)
    {
        $validation = Validator::make($request->all(),[
            'name'      => 'required|max:128',
            'logo'      => 'required',
        ]);

        $vendor = Vendor::create([
            "name"   => $request->name,
            "logo"   => $request->logo,
        ]);

        if($validation->fails()){
            return $validation->errors()->toJson();
        }else{
            return response()->json([
            'message'   => 'data successfully inserted',
            'value'     => $vendor
            ], 201);
        }
    }

    
    public function show($idVendor)
    {
        $data = new  VendorResource(Vendor::with('tags')->findOrFail($idVendor));
        return response()->json([
            'data' => $data
        ], 200);
    }


    public function update(Request $request, $idVendor)
    {
        $validation = Validator::make($request->all(),[
            'name'      => 'required|max:128',
            'logo'      => 'required',
        ]);

        $data =  Vendor::findOrFail($idVendor);
        
        if($validation->fails()){
            return $validation->errors()->toJson();
        }else{
            $data->update($request->input());
            return response()->json([
                'message'   => 'Data successfully update',
                'data'      => $data
            ], 201);
        }
    }

   
    public function destroy($idVendor)
    {
        $data = Vendor::findOrFail($idVendor);
        $data->delete();
        return response()->json([
            'message' => 'data successfully delete',
            'value' => $data
            ], 200);
    }
}