<?php

namespace App\Http\Controllers\Dongphuc;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\nhaSX;


class nhaSXController extends Controller
{
    public function nsx(Request $request)
    {
        $nsx = nhaSX::select('id as id', 'nhasanxuat as text')->get();
        return response()->json($nsx);
    }









}

