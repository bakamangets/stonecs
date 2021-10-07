<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ukuran;

class UkuranController extends Controller
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
        $produk = produk::paginate(10);
        return view('produk',compact('produk'));
    }

    public function create()
    {
		$jenis = \App\jenis::where('Custom','1')->get();
		$ukuran = \App\ukuran::all();
		return view('tambahukuran',compact('ukuran','jenis'));
    }

    public function simpan(Request $request)
    {

		ukuran::create([
        	'KodeJenis' => $request->KodeJenis,
            'NamaUkuran' => $request->NamaUkuran
        ]);

        return redirect()->route('settingpesan');
    }

    public function show($id)
    {
        $ukuran = bahan::where('Id',$id)->first();
        return view('showbahan',compact('bahan'));
    }

    public function edit($id)
    {
    	$jenis = \App\jenis::where('Custom','1')->get();
        $ukuran = ukuran::where('Id',$id)->first();
       return view('editukuran',compact('ukuran','jenis'));
    }

    public function update(Request $request, $id)
    {

        ukuran::where('Id', $id)->update([
            'Id' => $request->Id,
            'KodeJenis' => $request->KodeJenis,
            'NamaUkuran' => $request->NamaUkuran
        ]);

        return redirect()->route('settingpesan');
    }

    public function destroy($id)
    {
        ukuran::where('Id',$id)->delete();
        return redirect()->route('settingpesan');
    }
}
