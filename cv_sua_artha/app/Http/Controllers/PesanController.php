<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pesan;
use Auth;
use App\User;
use App\Produk;
use App\Bahan;
use App\Motif;
use App\Models;
use App\Ukuran;
use PDF;

class PesanController extends Controller
{
    public function index()
    {	
		$pesan = pesan::all();
		$awal = '';
		$akhir = '';
        
        return view('pesan',compact('pesan','awal','akhir'));
    }
	
	public function search($tanggal){
		$temp = explode(" ",$tanggal);
		$awal = $temp[0];
		$akhir = $temp[1];
		$pesan = pesan::whereBetween('TglPesan',[date('Y-m-d', strtotime(($temp[0]))),date('Y-m-d', strtotime(($temp[1])))])->get();
		
		return view('pesan',compact('pesan','awal','akhir'));
	}

    public function my()
    {
        $user = User::with('roles')->where('id', Auth::user()->id)->first();
        if ($user->roles->count()) {
            
        } else {
            $pesan = pesan::where('KodePelanggan', Auth::user()->name)->get();
            return view('mypesan',compact('pesan'));
        }

        // $pesan = pesan::paginate(10);
        // return view('mypesan',compact('pesan'));
    }
	
	public function settingpesan()
    {
		$bahan = \App\bahan::all();
		$motif = \App\motif::all();
		$model = \App\models::all();
		$ukuran = \App\ukuran::all();
        return view('settingpesan',compact('bahan','motif','model','ukuran'));
    }
	
	public function custom()
    {
        $user = \App\user::all();
        $pesan = \App\pesan::all();
		$jenis = \App\jenis::where('Custom','1')->get();
		$bahan = \App\bahan::all();
		$motif = \App\motif::all();
		$model = \App\models::all();
		$ukuran = \App\ukuran::all();
		$id = '';
        return view('pesancustom',compact('pesan','user','jenis','bahan','motif','model','ukuran','id'));
    }
	
	public function customs($id)
    {
        $user = \App\user::all();
        $pesan = \App\pesan::all();
		$jenis = \App\jenis::where('Custom','1')->get();
		$bahan = \App\bahan::where('KodeJenis',$id)->get();
		$motif = \App\motif::where('KodeJenis',$id)->get();
		$model = \App\models::where('KodeJenis',$id)->get();
		$ukuran = \App\ukuran::where('KodeJenis',$id)->get();
		$id = $id;
        return view('pesancustom',compact('pesan','user','jenis','bahan','motif','model','ukuran','id'));
    }

    public function gitar()
    {
        $user = \App\user::all();
        $pesan = \App\pesan::all();
        return view('pesangitar',compact('pesan','user'));
    }

    public function gitare()
    {
        $user = \App\user::all();
        $pesan = \App\pesan::all();
        return view('pesangitare',compact('pesan','user'));
    }

    public function bass()
    {
        $user = \App\user::all();
        $pesan = \App\pesan::all();
        return view('pesanbass',compact('pesan','user'));
    }

    public function basse()
    {
        $user = \App\user::all();
        $pesan = \App\pesan::all();
        return view('pesanbasse',compact('pesan','user'));
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
        $tujuan = 'gambar_pesan';
 
                // upload file
        $file->move($tujuan,$nama_file);

        pesan::create([
            'JenisFurniture' => $request->KodeJenis,
            'Bahan' => $request->Bahan,
            'Motif' => $request->Motif,
            'Ukuran' => $request->Ukuran,
            'Model' => $request->Model,
            'Gambar' => $nama_file,
            'Komentar' => $request->Komentar,
            'DP' => "200000",
            'StatusPesan' => "Menunggu diproses",
            'TglPesan' => date("Y-m-d"),
            'KodePelanggan' => Auth::user()->name,
            'AlamatKirim' => Auth::user()->alamat,
			'TelpPelanggan' => Auth::user()->telp
        ]);

        return redirect()->route('mypesan');
    }

    public function show($KodePesan)
    {
        $pesan = pesan::where('KodePesan',$KodePesan)->first();
        return view('showpesan',compact('pesan'));
    }

    public function edit($KodePesan)
    {
        $user = \App\user::all();
        $pesan = pesan::where('KodePesan',$KodePesan)->first();
       return view('editpesan',compact('pesan','user'));
    }

    public function update(Request $request, $KodePesan)
    {
        $this->validate($request, [
            'file' => 'required',
        ]);

        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');
 
        $nama_file = time()."_".$file->getClientOriginalName();

                // isi dengan nama folder tempat kemana file diupload
        $tujuan = 'gambar_pesan';
 
                // upload file
        $file->move($tujuan,$nama_file);

        pesan::where('KodePesan', $KodePesan)->update([
            'KodePesan' => $request->KodePesan,
            'JenisFurniture' => $request->KodeJenis,
            'Bahan' => $request->Bahan,
            'Motif' => $request->Motif,
            'Ukuran' => $request->Ukuran,
            'Model' => $request->Model,
            'Gambar' => $nama_file,
            'Komentar' => $request->Komentar,
            'DP' => $request->DP,
            'StatusPesan' => $request->StatusPesan,
            'TglPesan' => $request->TglPesan,
            'KodePelanggan' => $request->KodePelanggan,
            'AlamatKirim' => $request->AlamatKirim
        ]);

        return redirect()->route('pesan');
    }

    public function destroy($KodePesan)
    {
        pesan::where('KodePesan',$KodePesan)->delete();
        return redirect()->route('pesan');
    }

    public function cetak(Request $request)
    {
        $post=$request->all();

        $pesan = pesan::whereBetween('TglPesan',[date('Y-m-d', strtotime(($post['awal']))),date('Y-m-d', strtotime(($post['akhir'])))])->get();
        $pdf = PDF::loadview('laporpesan',['pesan'=>$pesan]);
        return $pdf->download('buku-pesanan.pdf');

    }
}
