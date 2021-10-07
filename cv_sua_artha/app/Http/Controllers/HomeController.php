<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\jenis;
use App\produk;
use App\pesan;
use App\transaksi;

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

    public function index(\Illuminate\Http\Request $request){
        $jenis = \App\jenis::all();
        $produk = \App\produk::all();

        $huser = user::count();
        $hjenis = jenis::count();
        $hproduk = produk::count();
        $hpesan = pesan::count();
        $htransaksi = transaksi::count();

        $this->validate($request,[
            'limit'=>'integer',
            ]);
        $produk=produk::when($request->keyword, function ($query) use ($request){
            $query->where('NamaProduk','like',"%{$request->keyword}%");
        })->paginate($request->limit ? $request->limit:18);
        $produk->appends($request->only('keyword'));
        return view('home',compact('produk','jenis'))
        ->with('huser',$huser)
        ->with('hjenis',$hjenis)
        ->with('hproduk',$hproduk)
        ->with('hpesan',$hpesan)
        ->with('htransaksi',$htransaksi);
    }

    public function profile()
    {
        return view('profile');
    }

    public function changepass()
    {
        return view('changepass');
    }
}
