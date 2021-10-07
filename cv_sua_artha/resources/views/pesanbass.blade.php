@extends('adminlte::page')

@section('title', 'Custom Order Bass Akustik')

@section('content_header')

@stop

@section('content')
    @role('owner')
    <h2>Oops!</h2>
    <h3>Halaman ini hanya untuk pelanggan.</h3>

    @elserole ('admin')    
    <h2>Oops!</h2>
    <h3>Halaman ini hanya untuk pelanggan.</h3>

    @else
    <h2>Custom Order</h2>
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                <form action="{{ route('pesanbass.simpan') }}" class="form-horizontal"  method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <div class="form-group">
                    <div class="col-sm-10">
                    <input   type="text" name="AlatMusik" value="Bass Akustik" class="form-control" readonly>
                    </div>

                    <label     class="control-label     col-sm-2">Body</label>
                    <div class="col-sm-10">
                    <select name='Body' class="form-control" autofocus required>
                            <option value="">Pilih</option>
                            <option value="Solid Body">Solid Body</option>
                            <option value="Solid Body + Pickguard">Solid Body + Pickguard</option>
                            <option value="Single Cut">Single Cut</option>
                            <option value="Single Cut + Pickguard">Single Cut + Pickguard</option>
                            <option value="Upright">Upright</option>
                            <option value="Custom Body">Custom/Lainnya (sertakan gambar referensi)</option>
                    </select>
                    </div>

                    <label     class="control-label     ">Bahan (Body & Neck)</label>
                    <div class="col-sm-10">
                    <select name='Bahan' class="form-control" autofocus required>
                            <option value="">Pilih</option>
                            <option value="Maple">Maple</option>
                            <option value="Rosewood">Rosewood</option>
                            <option value="Ebony">Ebony</option>
                    </select>
                    </div>

                    <label     class="control-label     col-sm-2">Warna Body</label>
                    <div class="col-sm-10">
                    <input   type="text" name="Warna"  class="form-control" autofocus required>
                    </div>

                    <label     class="control-label     col-sm-2">Fret</label>
                    <div class="col-sm-10">
                    <select name='Fret' class="form-control" autofocus required>
                            <option value="">Pilih</option>
                            <option value="22">22</option>
                            <option value="24">24</option>
                    </select>
                    </div>

                    <label     class="control-label     col-sm-2">Fretboard</label>
                    <div class="col-sm-10">
                    <select name='Fretboard' class="form-control" autofocus required>
                            <option value="">Pilih</option>
                            <option value="Maple">Maple</option>
                            <option value="Rosewood">Rosewood</option>
                            <option value="Ebony">Ebony</option>
                    </select>
                    </div>

                    <label     class="control-label     col-sm-2">Inlay</label>
                    <div class="col-sm-10">
                    <select name='Inlay' class="form-control" autofocus required>
                            <option value="">Pilih</option>
                            <option value="Dot Inlay">Dot Inlay</option>
                            <option value="Block Inlay">Block Inlay</option>
                            <option value="Custom Inlay">Custom/Lainnya (sertakan gambar referensi)</option>
                    </select>
                    </div>

                    <label     class="control-label     col-sm-2">Headstock</label>
                    <div class="col-sm-10">
                    <select name='Headstock' class="form-control" autofocus required>
                            <option value="">Pilih</option>
                            <option value="Cort">Cort</option>
                            <option value="Yamaha">Yamaha</option>
                            <option value="Fender">Fender</option>
                            <option value="Squier">Squier</option>
                            <option value="Marcus Miller">Marcus Miller</option>
                            <option value="Signature">Custom/Lainnya (sertakan gambar referensi)</option>
                    </select>
                    </div>

                    <label     class="control-label     col-sm-2">Ukuran Senar</label>
                    <div class="col-sm-10">
                    <select name='Senar' class="form-control" autofocus required>
                            <option value="">Pilih</option>
                            <option value="42 - 86 (Small)">42 - 86 (Small)</option>
                            <option value="46 - 96 (Medium)">46 - 96 (Medium)</option>
                            <option value="52 - 105 (Large)">52 - 105 (Large)</option>
                    </select>
                    </div>

                    <label     class="control-label     ">Referensi Pemain</label>
                    <div class="col-sm-10">
                    <select name='Kidal' class="form-control" autofocus required>
                            <option value="">Pilih</option>
                            <option value="Kidal">Kidal</option>
                            <option value="Tidak Kidal">Tidak Kidal</option>
                    </select>
                    </div>

                    <label     class="control-label     col-sm-2">Gambar Referensi</label>
                    <div class="col-sm-10">
                        <input type="file" name="file" autofocus required>
                    </div>

                    <label     class="control-label     col-sm-2">Komentar Tambahan</label>
                    <div class="col-sm-10">
                    <input   type="text" name="Komentar"  class="form-control" autofocus required>
                    </div>
                </div>

                <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                <div class="btn btn-default">
                  <a href="{{ route('pesan') }}">Kembali</a>
                </div>
                <button   type="submit"   class="btn   btn-primary">Order</button>
                </div>
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
    @endrole
                         
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop