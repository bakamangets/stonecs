@extends('adminlte::page')

@section('title', 'Edit Data Motif')

@section('content_header')
    <h1>Edit Data Motif</h1>
@stop

@section('content')
@role('admin')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
				<form action="{{ route('editmotif.simpan', $motif->Id) }}" class="form-horizontal"  method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
				<input type="hidden" name="_method" value="POST">
					<div class="form-group">
					<label     class="control-label     col-sm-2">Id</label>
					<div class="col-sm-10">
					<input   type="text" name="Id"  class="form-control" value="{{$motif->Id}}" readonly>
					</div>

					<label     class="control-label     col-sm-2">Jenis</label>
					<div class="col-sm-10">
					<select name='KodeJenis' class="form-control" autofocus required>
							<option value="{{$motif->KodeJenis}}">{{$motif->KodeJenis}}</option>
							@foreach($jenis as $p)
    							<option value="{{$p->NamaJenis}}">{{$p->KodeJenis}}. {{$p->NamaJenis}}</option>
  							@endforeach
					</select>
					</div>

					<label     class="control-label     col-sm-2">Nama Motif</label>
					<div class="col-sm-10">
					<input   type="text" name="NamaMotif"  class="form-control" value="{{$motif->NamaMotif}}" autofocus required>
					</div>

					<label     class="control-label     col-sm-2">Gambar</label>
					<div class="col-sm-10">
						<input type="file" name="file" autofocus required>
					</div>
				</div>

				<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				<div class="btn btn-default">
                  <a href="{{ route('settingpesan') }}">Kembali</a>
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