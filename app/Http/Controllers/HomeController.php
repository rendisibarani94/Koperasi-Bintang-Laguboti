<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function store(Request $request){
        redirect('/tiket')->with('mssg', 'Pesanan telah dibuat, dan akan diproses Admin');
        DB::table('tiket')->insert([
        'asal' => $request->asal,
        'kontak' => $request->kontak,
        'tujuan' => $request->tujuan,
        'jadwal' => $request->jadwal,
        'jenismobil' => $request->jenismobil,
        'bangku' => $request->bangku
        ]);
        
        return view('tiket', [
            $asal = 'asal' => $request->asal,
            $kontak = 'kontak' => $request->kontak,
            $tujuan = 'tujuan' => $request->tujuan,
            $jadwal = 'jadwal' => $request->jadwal,
            $jenismobil = 'jenismobil' => $request->jenismobil,
            $bangku = 'bangku' => $request->bangku
        ]);
    }
}
