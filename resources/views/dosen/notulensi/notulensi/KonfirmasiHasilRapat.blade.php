@extends('adminlte::layouts.app')

@section('htmlheader_title')
Hasil Rapat
@endsection

@section('contentheader_title')
Hasil Rapat
@endsection

@section('code-header')

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script> 

@endsection

@section('main-content')
<style>
  .form-group label{
    text-align: left !important;
  }
</style>

  @foreach (['danger', 'warning', 'success', 'info'] as $msg)
  @if(Session::has('alert-' . $msg))
<div class="alert alert-{{ $msg }}">
  <p class="" style="border-radius: 0">{{ Session::get('alert-' . $msg) }}</p>
</div>
  {!!Session::forget('alert-' . $msg)!!}
  @endif
  @endforeach


<div class="row">
  <div class="col-md-12">
    <div class="">

      @if (count($errors) > 0)
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
      <br>
      <form id="lihatHasilRapat" method="post" action="{{url('notulensi/'.$notulensi->id_notulen.'/LihatHasilRapat')}}" enctype="multipart/form-data"  class="form-horizontal">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <!-- Menampilkan input text biasa -->
        <div class="form-group">
          <label for="permohonan_ruang_id" class="col-sm-2 control-label">Ruangan</label>
          <div class="col-md-8">
            <input type="text" disabled class="form-control input-lg" id="id_permohonan_ruang" name="id_permohonan_ruang" placeholder="Ruangan" value="{{$notulen->permohonan_ruang_id}}" required>
          </div>
        </div>

        <div class="form-group">
          <label for="nama_rapat" class="col-sm-2 control-label">Nama Rapat</label>
          <div class="col-md-8">
            <input type="text" disabled class="form-control input-lg" id="nama_rapat" name="nama_rapat" placeholder="Masukkan Nama Rapat" value="{{$notulen->nama_rapat}}" required>
          </div>
        </div>

        <div class="form-group">
          <label for="agenda_rapat" class="col-sm-2 control-label">Agenda Rapat</label>
          <div class="col-md-8">
            <textarea id="agenda_rapat" disabled name="agenda_rapat" placeholder=" Masukkan Agenda Rapat" required cols="82" rows="5">{{$notulen->agenda_rapat}}
            </textarea>
          </div>
        </div>

      <!-- Menampilkan textarea -->
        <div class="form-group">
          <label for="waktu_pelaksanaan" class="col-sm-2 control-label">Waktu Pelaksanaan</label>
          <div class="col-md-8">
            <input type="text" disabled class="form-control input-lg" id="datepicker" name="waktu_pelaksanaan" placeholder="Masukkan Tanggal Pelaksanaan" value="{{$notulen->waktu_pelaksanaan}}" required>
          </div>
        </div>

        <!-- Menampilkan dropdown -->
        <div class="form-group">
          <label for="hasil_pembahasan" class="col-sm-2 control-label">Hasil Pembahasan</label>
          <div class="col-md-8">
            <textarea id="hasil_pembahasan" disabled name="hasil_pembahasan" placeholder=" Masukkan Hasil Pembahasan" required cols="82" rows="5">{{$notulen->hasil_pembahasan}}
            </textarea>
          </div>
        </div>

        <div class="form-group">
          <label for="deskripsi_rapat" class="col-sm-2 control-label">Deskripsi Rapat</label>
          <div class="col-md-8">
            <textarea id="deskripsi_rapat" disabled name="deskripsi_rapat" placeholder=" Masukkan Deskripsi Rapat" required cols="82" rows="5">{{$notulen->deskripsi_rapat}}
            </textarea>
          </div>
        </div>

        <div class="form-group text-center">
          <div class="col-md-8 col-md-offset-2">
          <button type="confirm" class="btn btn-primary btn-lg">
              Konfirmasi
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection

@section('code-footer')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
$( function() {
    var date = $('#datepicker').datepicker({ dateFormat: 'yy/mm/dd' }).val();

  } );
  </script>
@endsection
