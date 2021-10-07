<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;

class ModelController extends Controller
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
		$model = \App\models::all();
		return view('tambahmodel',compact('model','jenis'));
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
		$tujuan = 'gambar_model';
 
                // upload file
		$file->move($tujuan,$nama_file);

		models::create([
        	'KodeJenis' => $request->KodeJenis,
            'NamaModel' => $request->NamaModel,
            'Gambar' => $nama_file
        ]);

        return redirect()->route('settingpesan');
    }

    public function show($id)
    {
        $model = models::where('Id',$id)->first();
        return view('showmodel',compact('model'));
    }

    public function edit($id)
    {
    	$jenis = \App\jenis::where('Custom','1')->get();
        $model = models::where('Id',$id)->first();
       return view('editmodel',compact('model','jenis'));
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
		$tujuan = 'gambar_model';
 
                // upload file
		$file->move($tujuan,$nama_file);

        models::where('Id', $id)->update([
            'Id' => $request->Id,
            'KodeJenis' => $request->KodeJenis,
            'NamaModel' => $request->NamaModel,
            'Gambar' => $nama_file
        ]);

        return redirect()->route('settingpesan');
    }

    public function destroy($id)
    {
        models::where('Id',$id)->delete();
        return redirect()->route('settingpesan');
    }
}
