<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bahan;

class BahanController extends Controller
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
		$bahan = \App\bahan::all();
		return view('tambahbahan',compact('bahan','jenis'));
    }

    public function simpan(Request $request)
    {
    	$this->validate($request, [
			'file' => 'required',
		]);

		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
 
		$nama_file = time()."_".$file->getClientOriginalName();

      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan = 'gambar_bahan';
 
                // upload file
		$file->move($tujuan,$nama_file);

		bahan::create([
        	'KodeJenis' => $request->KodeJenis,
            'NamaBahan' => $request->NamaBahan,
            'Gambar' => $nama_file
        ]);

        return redirect()->route('settingpesan');
    }

    public function show($id)
    {
        $bahan = bahan::where('Id',$id)->first();
        return view('showbahan',compact('bahan'));
    }

    public function edit($id)
    {
    	$jenis = \App\jenis::where('Custom','1')->get();
        $bahan = bahan::where('Id',$id)->first();
       return view('editbahan',compact('bahan','jenis'));
    }

    public function update(Request $request, $id)
    {
    	$this->validate($request, [
			'file' => 'required',
		]);

		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
 
		$nama_file = time()."_".$file->getClientOriginalName();

      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan = 'gambar_bahan';
 
                // upload file
		$file->move($tujuan,$nama_file);

        bahan::where('Id', $id)->update([
            'Id' => $request->Id,
            'KodeJenis' => $request->KodeJenis,
            'NamaBahan' => $request->NamaBahan,
            'Gambar' => $nama_file
        ]);

        return redirect()->route('settingpesan');
    }

    public function destroy($id)
    {
        bahan::where('Id',$id)->delete();
        return redirect()->route('settingpesan');
    }
}
