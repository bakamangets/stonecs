@extends('adminlte::page')

@section('title', 'Custom Order Gitar Elektrik')

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
                <form action="{{ route('pesangitare.simpan') }}" class="form-horizontal"  method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <div class="form-group">
                    <div class="col-sm-10">
                    <input   type="text" name="AlatMusik" value="Gitar Elektrik" class="form-control" readonly>
                    </div>

                    <label     class="control-label     col-sm-2">Body</label>

                    <div class="">
                   <!--  <select name='Body' class="form-control" autofocus required>
                            <option value="">Pilih</option>
                            <option value="Strat">Strat</option>
                            <option value="Tele">Tele</option>
                            <option value="Jaguar/Jazzmaster">Jaguar/Jazzmaster</option>
                            <option value="SG">SG</option>
                            <option value="Single Cut/Les Paul">Single Cut/Les Paul</option>
                            <option value="Hollow Body">Hollow Body</option>
                            <option value="Baritone">Baritone</option>
                            <option value="Custom Body">Custom/Lainnya (sertakan gambar referensi)</option>
                    </select> -->

                    <input type="radio" name="gender"
                    <?php if (isset($gender) && $gender=="other") echo "checked";?>
                    value="other">Jaguar
                    <a href="" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
                      <img src="https://stuff.fendergarage.com/images/0/0/w/taxonomy-electric-guitar-jaguar-american-professional-car.png" class="img-fluid mb-2" alt="jaguar">
                    </a>
                    <input type="radio" name="gender"
                    <?php if (isset($gender) && $gender=="other") echo "checked";?>
                    value="other">Jazzmaster
                    <a href="" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
                      <img src="https://stuff.fendergarage.com/images/5/p/U/taxonomy-electric-guitar-jazzmaster-american-ultra.png" class="img-fluid mb-2" alt="jazzmaster">
                    </a>
                    <input type="radio" name="gender"
                    <?php if (isset($gender) && $gender=="other") echo "checked";?>
                    value="other">Duo-Sonic
                    <a href="" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
                      <img src="https://stuff.fendergarage.com/images/t/N/v/taxonomy-electric-guitar-duosonic.png" class="img-fluid mb-2" alt="duo-sonic">
                    </a>
                    <input type="radio" name="gender"
                    <?php if (isset($gender) && $gender=="other") echo "checked";?>
                    value="other">Mustang
                    <a href="" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
                      <img src="https://stuff.fendergarage.com/images/s/C/Z/taxonomy-electric-guitar-mustang.png" class="img-fluid mb-2" alt="mustang">
                    </a>

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
                    <!-- <input   type="text" name="Warna"  class="form-control" autofocus required> -->
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-default text-center active">
                  <input type="radio" name="color_option" id="color_option1" autocomplete="off" checked="">
                  Green
                  <br>
                  <i class="fas fa-circle fa-2x text-green"></i>
                </label>
                <label class="btn btn-default text-center">
                  <input type="radio" name="color_option" id="color_option2" autocomplete="off">
                  Blue
                  <br>
                  <i class="fas fa-circle fa-2x text-blue"></i>
                </label>
                <label class="btn btn-default text-center">
                  <input type="radio" name="color_option" id="color_option3" autocomplete="off">
                  Purple
                  <br>
                  <i class="fas fa-circle fa-2x text-purple"></i>
                </label>
                <label class="btn btn-default text-center">
                  <input type="radio" name="color_option" id="color_option4" autocomplete="off">
                  Red
                  <br>
                  <i class="fas fa-circle fa-2x text-red"></i>
                </label>
                <label class="btn btn-default text-center">
                  <input type="radio" name="color_option" id="color_option5" autocomplete="off">
                  Orange
                  <br>
                  <i class="fas fa-circle fa-2x text-orange"></i>
                </label>
              </div>
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
                            <option value="Fender">Fender</option>
                            <option value="Squier">Squier</option>
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