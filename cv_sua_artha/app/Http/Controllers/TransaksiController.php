<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use Auth;
use App\User;
use DB;
use PDF;

class TransaksiController extends Controller
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
        $user = User::with('roles')->where('id', Auth::user()->id)->first();
        if ($user->roles->count()) {
			$transaksi = transaksi::all();
			$awal = '';
			$akhir = '';
            return view('transaksi',compact('transaksi','awal','akhir'));
        } else {
            $transaksi = transaksi::where('KodePelanggan', Auth::user()->name)->get();
            return view('transaksi',compact('transaksi'));
        }
    }
	
	public function search($tanggal){
		$temp = explode(" ",$tanggal);
		$awal = $temp[0];
		$akhir = $temp[1];
		$transaksi = transaksi::whereBetween('TglOrder',[date('Y-m-d', strtotime(($temp[0]))),date('Y-m-d', strtotime(($temp[1])))])->get();
		
		return view('transaksi',compact('transaksi','awal','akhir'));
	}

    public function create()
    {
    	$user = \App\user::all();
       $produk = \App\produk::all();
       $transaksi = \App\transaksi::all();
       return view('tambahtransaksi',compact('transaksi','produk','user'));
    }

    public function tambah($KodeProduk)
    {
        $produk = \App\produk::where("KodeProduk", $KodeProduk)->first();
        $stoknow = (int)$produk->Stok - 1;

        transaksi::create([
            'KodePelanggan' => Auth::user()->name,
            'KodeProduk' => $produk ->NamaProduk,
            'Jumlah' => 1,
            'TotalBayar' => 1 * $produk ->Harga,
            'AlamatKirim' => Auth::user()->alamat,
            'TglOrder' => date("Y-m-d"),
            'StatusTransaksi' => "Sedang diproses",
			'TelpPelanggan' => Auth::user()->telp
        ]);

        \App\produk::where("KodeProduk", $KodeProduk)->update([
                'stok' => $stoknow
            ]);

        return redirect()->route('transaksi');
    }

    public function simpan(Request $request)
    {
        $produk = \App\produk::where("KodeProduk", $request->KodeProduk)->first();
        $stoknow = (int)$produk->Stok-(int)$request->Jumlah;

		transaksi::create([
        	'KodePelanggan' => $request->KodePelanggan,
            'KodeProduk' => $request->KodeProduk,
            'Jumlah' => $request->Jumlah,
            'TotalBayar' => $request->Jumlah * $produk->Harga,
            'TglOrder' => $request->TglOrder,
            'StatusTransaksi' => $request->StatusTransaksi
        ]);

        \App\produk::where("KodeProduk", $request->KodeProduk)->update([
                'stok' => $stoknow
            ]);

        return redirect()->route('transaksi');
    }

    public function show($KodeTransaksi)
    {
        $transaksi = transaksi::where('KodeTransaksi',$KodeTransaksi)->first();
        return view('showtransaksi',compact('transaksi'));
    }

    public function edit($KodeTransaksi)
    {
    	$user = \App\user::all();
    	$produk = \App\produk::all();
        $transaksi = transaksi::where('KodeTransaksi',$KodeTransaksi)->first();
       return view('edittransaksi',compact('transaksi','produk','user'));
    }

    public function update(Request $request, $KodeTransaksi)
    {

        transaksi::where('KodeTransaksi', $KodeTransaksi)->update([
            'KodeTransaksi' => $request->KodeTransaksi,
            'KodePelanggan' => $request->KodePelanggan,
            'KodeProduk' => $request->KodeProduk,
            'Jumlah' => $request->Jumlah,
            'TotalBayar' => $request->TotalBayar,
            'AlamatKirim' => $request->AlamatKirim,
            'TglOrder' => $request->TglOrder,
            'StatusTransaksi' => $request->StatusTransaksi
        ]);

        return redirect()->route('transaksi');
    }

    public function destroy($KodeTransaksi)
    {
        transaksi::where('KodeTransaksi',$KodeTransaksi)->delete();
        return redirect()->route('transaksi');
    }

    public function cetak(Request $request)
    {
        $post=$request->all();

        $transaksi = transaksi::whereBetween('TglOrder',[date('Y-m-d', strtotime(($post['awal']))),date('Y-m-d', strtotime(($post['akhir'])))])->get();
        $pdf = PDF::loadview('laportrans',['transaksi'=>$transaksi]);
        return $pdf->download('buku-transaksi.pdf');

        // $transaksi = transaksi::paginate(10);
        // $pdf = PDF::loadview('laporpdf',['transaksi'=>$transaksi]);
        // return $pdf->download('buku-transaksi-pdf');
    }
}
