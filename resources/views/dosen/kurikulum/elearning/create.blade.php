@extends('adminlte::layouts.app')

@section('htmlheader_title')
Tambah Capaian Program
@endsection

@section('contentheader_title')
Tambah Capaian Program
@endsection

@section('code-header')

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script> 
<link rel="stylesheet" href="{{ asset('/css/dropzone.css') }}">

@endsection

@section('main-content')
<style>
  .form-group label{
    text-align: left !important;
  }
</style>
  <!-- Ini buat menampilkan notifikasi -->
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
      <form id="tambahCapaianProgram" method="post" action="{{url('/dosen/kurikulum/cp_program/create')}}" enctype="multipart/form-data"  class="form-horizontal">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <!-- Menampilkan input text biasa -->
        
        <!-- Menampilkan textarea -->
        <div class="box-body">
           <div class="form-group">
              <label class="col-sm-2 control-label" for="exampleInputEmail1">Mata Kuliah</label>
              <div class="col-md-6">
                <select class="form-control">
                  <option>Mata Kuliah</option>
                  <option>Kecerdasan Buatan</option>
                  <option>Riset Operasi</option>
                  <option>Perancangan Sistem Informasi</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label for="capaian_program_spesifik" class="col-sm-2 control-label">Judul</label>
              <div class="col-md-6">
                <textarea id="capaian_program_spesifik" name="capaian_program_spesifik" placeholder=" capaian Program Spesifik" required cols="82" rows="5"></textarea>
              </div>
            </div>

            <div class="form-group">
              <label for="id_prodi" class="col-sm-2 control-label">Tanggal</label>
              <div class="col-md-6">
                <input type="text" class="form-control input-lg" id="prodi_id" name="prodi_id" placeholder="Masukkan prodi Id" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label" for="exampleInputFile">File input</label>
              <div class="col-md-6">
                <input id="exampleInputFile" type="file">
                <p class="help-block">Example block-level help text here.</p>
              </div>
            </div>

            <div class="form-group text-center">
              <div style="text-align: right;" class="col-md-8">
                <button type="submit" class="btn btn-primary btn-lg">
                Upload
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