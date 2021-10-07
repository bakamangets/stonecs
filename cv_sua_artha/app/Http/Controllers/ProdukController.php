<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;

class ProdukController extends Controller
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
    	$jenis = \App\jenis::all();
       $produk = \App\produk::all();
       return view('tambahproduk',compact('produk','jenis'));
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
		$tujuan = 'gambar_produk';
 
                // upload file
		$file->move($tujuan,$nama_file);

		produk::create([
        	'KodeJenis' => $request->KodeJenis,
            'NamaProduk' => $request->NamaProduk,
            'Harga' => $request->Harga,
			'HargaPokok' => $request->HargaPokok,
            'Stok' => $request->Stok,
            'Gambar' => $nama_file,
            'Deskripsi' => $request->Deskripsi
        ]);

        return redirect()->route('produk');
    }

    public function show($KodeProduk)
    {
        $produk = produk::where('KodeProduk',$KodeProduk)->first();
        return view('showproduk',compact('produk'));
    }

    public function edit($KodeProduk)
    {
    	$jenis = \App\jenis::all();
        $produk = produk::where('KodeProduk',$KodeProduk)->first();
       return view('editproduk',compact('produk','jenis'));
    }

    public function update(Request $request, $KodeProduk)
    {
    	$this->validate($request, [
			'file' => 'required',
		]);

		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
 
		$nama_file = time()."_".$file->getClientOriginalName();

      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan = 'gambar_produk';
 
                // upload file
		$file->move($tujuan,$nama_file);

        produk::where('KodeProduk', $KodeProduk)->update([
            'KodeProduk' => $request->KodeProduk,
            'KodeJenis' => $request->KodeJenis,
            'NamaProduk' => $request->NamaProduk,
            'Harga' => $request->Harga,
			'HargaPokok' => $request->HargaPokok,
            'Stok' => $request->Stok,
            'Gambar' => $nama_file,
            'Deskripsi' => $request->Deskripsi
        ]);

        return redirect()->route('produk');
    }

    public function destroy($KodeProduk)
    {
        produk::where('KodeProduk',$KodeProduk)->delete();
        return redirect()->route('produk');
    }
}
