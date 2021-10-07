@extends('adminlte::page')

@section('title', 'Custom Furniture')

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
    <h2>Furniture Custom</h2>
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                <form action="{{ route('pesancustom.simpan') }}" class="form-horizontal"  method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <div class="form-group">
                    <label     class="control-label     col-sm-2">Jenis Furniture</label>
					<div class="col-sm-10">
					<select id="KodeJenis" name='KodeJenis' class="form-control" autofocus required>
							<option value="">Pilih</option>
							@foreach($jenis as $p)
    							<option value="{{$p->NamaJenis}}" <?php if($id != '' && $id == $p->NamaJenis){ echo 'selected'; } ?> >{{$p->KodeJenis}} - {{$p->NamaJenis}}</option>
  							@endforeach
					</select>
					</div>

                    <!--<label     class="control-label     col-sm-2">Body</label>
                    <div class="col-sm-10">
                    <select name='Body' class="form-control" autofocus required>
                            <option value="">Pilih</option>
                            <option value="Solid Body">Solid Body</option>
                            <option value="Solid Body + Pickguard">Solid Body + Pickguard</option>
                            <option value="Single Cut">Single Cut</option>
                            <option value="Single Cut + Pickguard">Single Cut + Pickguard</option>
                            <option value="Custom Body">Custom/Lainnya (sertakan gambar referensi)</option>
                    </select>
                    </div>-->

                    <!--<label     class="control-label     ">Bahan (Body & Neck)</label>
                    <div class="col-sm-10">
                    <select name='Bahan' class="form-control" autofocus required>
                            <option value="">Pilih</option>
                            <option value="Maple">Maple</option>
                            <option value="Rosewood">Rosewood</option>
                            <option value="Ebony">Ebony</option>
                    </select>
                    </div>-->

					<label     class="control-label     col-sm-2">Bahan</label>
					<div class="col-sm-10">
					<select name='Bahan' class="form-control" autofocus required>
							<option value="">Pilih</option>
							@foreach($bahan as $p)
    							<option value="{{$p->NamaBahan}}">{{$p->NamaBahan}}</option>
  							@endforeach
					</select>
					</div>
					<div style="display:flex;" >
						@foreach($bahan as $p)
						<div style="margin:5px;" >
							<img src="{{ asset('gambar_bahan/' .$p->Gambar) }}" class="" alt="Product Image" style="width:150px;height:150px;" >
							<p style="text-align:center;font-size: 12px;" >{{$p->NamaBahan}}</p>
						</div>
						@endforeach
					</div>
					
					<label     class="control-label     col-sm-2">Motif</label>
					<div class="col-sm-10">
					<select name='Motif' class="form-control" autofocus required>
							<option value="">Pilih</option>
							@foreach($motif as $p)
    							<option value="{{$p->NamaMotif}}">{{$p->NamaMotif}}</option>
  							@endforeach
					</select>
					</div>
					<div style="display:flex;" >
						@foreach($motif as $p)
						<div style="margin:5px;" >
							<img src="{{ asset('gambar_motif/' .$p->Gambar) }}" class="" alt="Product Image" style="width:150px;height:150px;" >
							<p style="text-align:center;font-size: 12px;" >{{$p->NamaMotif}}</p>
						</div>
						@endforeach
					</div>
					
					<label     class="control-label     col-sm-2">Model</label>
					<div class="col-sm-10">
					<select name='Model' class="form-control" autofocus required>
							<option value="">Pilih</option>
							@foreach($model as $p)
    							<option value="{{$p->NamaModel}}">{{$p->NamaModel}}</option>
  							@endforeach
					</select>
					</div>
					<div style="display:flex;" >
						@foreach($model as $p)
						<div style="margin:5px;" >
							<img src="{{ asset('gambar_model/' .$p->Gambar) }}" class="" alt="Product Image" style="width:150px;height:150px;" >
							<p style="text-align:center;font-size: 12px;" >{{$p->NamaModel}}</p>
						</div>
						@endforeach
					</div>
					
					<label     class="control-label     col-sm-2">Ukuran</label>
					<div class="col-sm-10">
					<select name='Ukuran' class="form-control" autofocus required>
							<option value="">Pilih</option>
							@foreach($ukuran as $p)
    							<option value="{{$p->NamaUkuran}}">{{$p->NamaUkuran}}</option>
  							@endforeach
					</select>
					</div>

                    <!--<label     class="control-label     col-sm-2">Fret</label>
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
                            <option value="Gibson">Gibson</option>
                            <option value="Epiphone">Epiphone</option>
                            <option value="Jackson">Jackson</option>
                            <option value="Schecter">Schecter</option>
                            <option value="Ibanez">Ibanez</option>
                            <option value="PRS">PRS</option>
                            <option value="Signature">Custom/Lainnya (sertakan gambar referensi)</option>
                    </select>
                    </div>

                    <label     class="control-label     col-sm-2">Ukuran Senar</label>
                    <div class="col-sm-10">
                    <select name='Senar' class="form-control" autofocus required>
                            <option value="">Pilih</option>
                            <option value="8 - 42 (Small)">8 - 42 (Small)</option>
                            <option value="9 - 46 (Medium)">9 - 46 (Medium)</option>
                            <option value="10 - 52 (Large)">10 - 52 (Large)</option>
                    </select>
                    </div>

                    <label     class="control-label     ">Referensi Pemain</label>
                    <div class="col-sm-10">
                    <select name='Kidal' class="form-control" autofocus required>
                            <option value="">Pilih</option>
                            <option value="Kidal">Kidal</option>
                            <option value="Tidak Kidal">Tidak Kidal</option>
                    </select>
                    </div>-->

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
                <button   type="submit"   class="btn   btn-success">Order</button>
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
	<script>
		$('body').on('change','#KodeJenis',function(){
			var KodeJenis = $(this).val();
			window.location.href = "http://localhost/cv_sua_artha/public/pesancustoms/"+KodeJenis;
		});
	</script>
@stop