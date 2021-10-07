@extends('adminlte::page')

@section('title', 'Tambah Data Ukuran')

@section('content_header')
    <h1>Tambah Data Ukuran</h1>
@stop

@section('content')
@role('admin')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
				<form action="{{ route('tambahukuran.simpan') }}" class="form-horizontal"  method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
					<div class="form-group">
					<label     class="control-label     col-sm-2">Kategori Jenis</label>
					<div class="col-sm-10">
					<select name='KodeJenis' class="form-control" autofocus required>
							<option value="">Pilih</option>
							@foreach($jenis as $p)
    							<option value="{{$p->NamaJenis}}">{{$p->KodeJenis}} - {{$p->NamaJenis}}</option>
  							@endforeach
					</select>
					</div>

					<label     class="control-label     col-sm-2">Ukuran</label>
					<div class="col-sm-10">
					<input   type="text" name="NamaUkuran"  class="form-control" autofocus required>
					</div>

				</div>

				<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				<div class="btn btn-default">
                  <a href="{{ route('settingpesan') }}">Batal</a>
                </div>
				<button   type="submit"   class="btn   btn-success">Simpan</button>
				</div>
				</div>
				</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endrole
@endsection