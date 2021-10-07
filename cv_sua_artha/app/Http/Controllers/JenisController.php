<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jenis;

class JenisController extends Controller
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
        $jenis = jenis::paginate(10);
        return view('jenis',compact('jenis'));
    }

    public function create()
    {
       $jenis = \App\jenis::all();
       return view('tambahjenis',compact('jenis'));
    }

    public function simpan(Request $request)
    {
        jenis::create([
            'NamaJenis' => $request->NamaJenis,
            'Deskripsi' => $request->Deskripsi,
			'Custom' => $request->Custom,
			'HargaPerMeter' => $request->HargaPerMeter
        ]);

        return redirect()->route('jenis');
    }

    public function show($KodeJenis)
    {
        $jenis = jenis::where('KodeJenis',$KodeJenis)->first();
        return view('showjenis',compact('jenis'));
    }

    public function edit($KodeJenis)
    {
        $jenis = jenis::where('KodeJenis',$KodeJenis)->first();
       return view('editjenis',compact('jenis'));
    }

    public function update(Request $request, $KodeJenis)
    {
        jenis::where('KodeJenis', $KodeJenis)->update([
            'KodeJenis' => $request->KodeJenis,
            'NamaJenis' => $request->NamaJenis,
            'Deskripsi' => $request->Deskripsi,
			'Custom' => $request->Custom,
			'HargaPerMeter' => $request->HargaPerMeter
        ]);

        return redirect()->route('jenis');
    }

    public function destroy($KodeJenis)
    {
        jenis::where('KodeJenis',$KodeJenis)->delete();
        return redirect()->route('jenis');
    }
}
