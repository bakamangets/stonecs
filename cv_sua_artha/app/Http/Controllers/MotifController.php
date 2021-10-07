<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Motif;

class MotifController extends Controller
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
		$motif = \App\motif::all();
		return view('tambahmotif',compact('motif','jenis'));
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
		$tujuan = 'gambar_motif';
 
                // upload file
		$file->move($tujuan,$nama_file);

		motif::create([
        	'KodeJenis' => $request->KodeJenis,
            'NamaMotif' => $request->NamaMotif,
            'Gambar' => $nama_file
        ]);

        return redirect()->route('settingpesan');
    }

    public function show($id)
    {
        $motif = motif::where('Id',$id)->first();
        return view('showmotif',compact('motif'));
    }

    public function edit($id)
    {
    	$jenis = \App\jenis::where('Custom','1')->get();
        $motif = motif::where('Id',$id)->first();
       return view('editmotif',compact('motif','jenis'));
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
		$tujuan = 'gambar_motif';
 
                // upload file
		$file->move($tujuan,$nama_file);

        motif::where('Id', $id)->update([
            'Id' => $request->Id,
            'KodeJenis' => $request->KodeJenis,
            'NamaMotif' => $request->NamaMotif,
            'Gambar' => $nama_file
        ]);

        return redirect()->route('settingpesan');
    }

    public function destroy($id)
    {
        motif::where('Id',$id)->delete();
        return redirect()->route('settingpesan');
    }
}
