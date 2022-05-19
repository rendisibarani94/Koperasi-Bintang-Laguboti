<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\tiket;

class TiketController extends Controller
{
    public function index(){
        $datas = Tiket::with('user')->get();
        dd('$datas');
        return view('tiket', compact('datas'));
    }
}
