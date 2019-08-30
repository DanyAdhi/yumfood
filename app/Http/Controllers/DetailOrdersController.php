<?php

namespace App\Http\Controllers;

use App\DetailOrder;
use Illuminate\Http\Request;

class DetailOrdersController extends Controller
{
    
    public function index()
    {
        $order = DetailOrder::with('menus')->get();
        return $order;
    }

    public function store(Request $request){}

    public function show(DetailOrder $detailOrder){}

    public function update(Request $request, DetailOrder $detailOrder){}

    public function destroy(DetailOrder $detailOrder){}
}
