@extends('adminlte::page')

@section('title', 'Detail Kategori')

@section('content_header')
    <h1>Detail Kategori</h1>
@stop

@section('content')
@role('admin')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body"><form  class="form-horizontal"  method="post">
				{{ csrf_field() }}
				<input type="hidden" name="_method" value="PUT">
					<div class="form-group">
					<label     class="control-label     col-sm-2">Kode Jenis</label>
					<div class="col-sm-10">
					<p>{{ $jenis->KodeJenis }}</p>
					</div>
					<div class="form-group">
					<label     class="control-label     col-sm-2">Nama Jenis</label>
					<div class="col-sm-10">
					<p>{{ $jenis->NamaJenis }}</p>
					</div>
					<div class="form-group">
					<label     class="control-label     col-sm-2">Deskripsi</label>
					<div class="col-sm-10">
					<p>{{ $jenis->Deskripsi }}</p>
					</div>
				</div>

				<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				<a href="{{   route('jenis')   }}"  type="button"   class="btn   btn-primary">Kembali</a>
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