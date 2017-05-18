@extends('adminlte::layouts.app')
@section('code-header')

@endsection

@section('htmlheader_title')
Jadwal Sidang Proposal
@endsection

@section('contentheader_title')
Jadwal Sidang Proposal
@endsection

@section('main-content')

<!-- <div class="row"> -->

<!-- <div class="wrapper">
<button type="button" class="btn btn-primary">Tambah</button>
</div> -->

<div class="alert alert-success" style="display: none;" id="info-simpan-jadwal-proposal">
  <strong>Success!</strong> Simpan Data Berhasil.
</div>

<div class="panel panel-default">
  <!-- <div class="panel-heading">Panel Heading</div> -->
  <div class="panel-body">
      
      <!-- tabel -->
      <div class="col-md-12">

      <div class="box" id="wrapper-tombol-jadwal-sidang-proposal">

      <button type="button" class="btn btn-success"  id="tombol-tambah-jadwal-sidang-proposal" data-toggle="modal" data-target="#modal-tambah-jadwal-sidang-proposal">Tambah Jadwal Sidang</button>

      <button type="button" class="btn btn-warning" id="tombol-edit-jadwal-sidang-proposal">Edit Jadwal Sidang</button>

      <button type="button" class="btn btn-danger" id="tombol-hapus-jadwal-sidang-proposal">Hapus Jadwal Sidang</button>

      </div>

      

<table data-toggle="table" id="tabel-jadwal-sidang-proposal"  data-search="true" data-locale="en-US" data-toolbar="#wrapper-tombol-jadwal-sidang-proposal" >

<thead>
      <tr>
        <th data-field="state" data-radio="true"></th>
        <th>NIM</th>
        <!-- <th>Nama</th> -->
        <th>KBK</th>
        <th>Judul Proposal</th>
        <!-- <th>Status Proposal</th> -->
        <th>Tanggal Sidang</th>
        <th>Waktu Sidang</th>
        <th>Tempat Sidang</th>
        <th>Dosen Pembimbing 1</th>
        <th>Dosen Pembimbing 2</th>
        <th>Dosen Penguji</th>
        <!-- <th></th> -->
        
      </tr>
    </thead>
    <tbody>

   
@for ($i = 0; $i < count($jadwal_sidang_proposal); $i++)
                            <tr>
                                <!-- Task Name -->
                                <td></td>
                                <td>
                                    <div>{{ $jadwal_sidang_proposal[$i]['nim']}}</div>
                                </td>
                                <td>
                                    <div>{{ $jadwal_sidang_proposal[$i]['jenis_kbk']}}</div>
                                </td>
                                <td>
                                    <div>{{ $jadwal_sidang_proposal[$i]['Judul']}}</div>
                                </td>
                                <td>
                                    <div>{{ $jadwal_sidang_proposal[$i]['tgl_sidangpro']}}</div>
                                </td>
                                <td>
                                    <div>{{ $jadwal_sidang_proposal[$i]['waktu_sidangpro']}}</div>
                                </td>
                                <td>
                                    <div>{{ $jadwal_sidang_proposal[$i]['ruang']}}</div>
                                </td>
                                <td>
                                    <div>{{ $jadwal_sidang_proposal[$i]['dosen_pembimbing1']}}</div>
                                </td>
                                <td>
                                    <div>{{ $jadwal_sidang_proposal[$i]['dosen_pembimbing2']}}</div>
                                </td>
                                <td>
                                    <div>{{ $jadwal_sidang_proposal[$i]['dosen_penguji']}}</div>
                                </td>
                                <!-- <td class="table-text">
                                    <div>{{ $jadwal_sidang_proposal[$i]['nim']}}</div>
                                </td> -->
                                </tr>
@endfor

   
 

   
      
    </tbody>
    
</table>

</div>

  </div>
</div>


<!-- Modal -->
<div id="modal-tambah-jadwal-sidang-proposal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Jadwal Sidang Proposal</h4>
      </div>
      <div class="modal-body pre-scrollable">
      <!-- baris 1 -->
      <div class="row">

      <div class="col-md-6">

       <div class="form-group">
      <label for="daftar-tambah-nim-jadwal-sidang-proposal">NIM</label>
      <select class="form-control" id="daftar-tambah-nim-jadwal-sidang-proposal" name="daftar-tambah-nim-jadwal-sidang-proposal">
          
        <option disabled selected value> -- select an option -- </option>

         @foreach($daftar_mhs as $item)
        <option value="{{$item->nim}}">{{$item->nim}}</option>
        @endforeach

      </select>
      </div>

      </div>

      <div class="col-md-6">

      <div class="form-group">
      <label for="daftar-tambah-nama-jadwal-sidang-proposal">Nama</label>
      
      <input type="text" class="form-control" id="daftar-tambah-nama-jadwal-sidang-proposal" name="daftar-tambah-nama-jadwal-sidang-proposal"></input>
      </div>

      </div>

      </div>

      <!-- baris 2 -->

         <div class="row">

      <div class="col-md-6">

       <div class="form-group">
      <label for="daftar-tambah-kbk-jadwal-sidang-proposal">KBK</label>
      <select class="form-control" id="daftar-tambah-kbk-jadwal-sidang-proposal" name="daftar-tambah-kbk-jadwal-sidang-proposal">
          <option disabled selected value> -- select an option -- </option>

           @foreach($daftar_kbk as $item)
        <option value="{{$item->id_kbk}}">{{$item->jenis_kbk}}</option>
        @endforeach

      </select>
      </div>

      </div>

      <div class="col-md-6">

      <div class="form-group">
      <label for="daftar-tambah-judul-jadwal-sidang-proposal">Judul Proposal</label>
      
      <input type="text" class="form-control" id="daftar-tambah-judul-jadwal-sidang-proposal" name="daftar-tambah-judul-jadwal-sidang-proposal"></input>
      </div>

      </div>

      </div>

      <!--  -->

     <div class="row">

      <div class="col-md-6">

       <div class="form-group">
      <label for="daftar-tambah-tanggal-jadwal-sidang-proposal">Tanggal Sidang</label>
      <input type="text" class="form-control" id="daftar-tambah-tanggal-jadwal-sidang-proposal"></input>
      </div>

      </div>

      <div class="col-md-6">

      <div class="form-group bootstrap-timepicker timepicker">
      <label for="daftar-tambah-waktu-jadwal-sidang-proposal">Waktu Sidang</label>
      
      <input type="text" class="form-control" id="daftar-tambah-waktu-jadwal-sidang-proposal" name="daftar-tambah-waktu-jadwal-sidang-proposal"></input>
      </div>

      </div>

      </div>

      <!--  -->

      <div class="row">

      <div class="col-md-12">

       <div class="form-group">
      <label for="daftar-tambah-tempat-jadwal-sidang-proposal">Tempat Sidang</label>
      <select  class="form-control" id="daftar-tambah-tempat-jadwal-sidang-proposal">
            <option disabled selected value> -- select an option -- </option>

             @foreach($daftar_tempat as $item)
        <option value="{{$item->id_ruang}}">{{$item->nama_ruang}}</option>
        @endforeach

      </select>
      </div>

      </div>

     <!--  <div class="col-md-6">

      <div class="form-group">
      <label for="daftar-tambah-waktu-jadwal-sidang-proposal">Waktu Sidang</label>
      
      <input type="text" class="form-control" id="daftar-tambah-waktu-jadwal-sidang-proposal" name="daftar-tambah-waktu-jadwal-sidang-proposal"></input>
      </div>

      </div> -->

      </div>

      <!--  -->

       <div class="row">

      <div class="col-md-12">

       <div class="form-group">
      <label for="daftar-tambah-dosbing1-jadwal-sidang-proposal">Dosen Pembimbing 1</label>
      <select  class="form-control" id="daftar-tambah-dosbing1-jadwal-sidang-proposal">
          
          <option disabled selected value> -- select an option -- </option>

             @foreach($daftar_dosen as $item)
        <option value="{{$item->nip}}">{{$item->nip}}</option>
        @endforeach
      </select>
      </div>

      </div>

     <!--  <div class="col-md-6">

      <div class="form-group">
      <label for="daftar-tambah-waktu-jadwal-sidang-proposal">Waktu Sidang</label>
      
      <input type="text" class="form-control" id="daftar-tambah-waktu-jadwal-sidang-proposal" name="daftar-tambah-waktu-jadwal-sidang-proposal"></input>
      </div>

      </div> -->

      </div>

      <!--  -->

      <div class="row">

      <div class="col-md-12">

       <div class="form-group">
      <label for="daftar-tambah-dosbing2-jadwal-sidang-proposal">Dosen Pembimbing 2</label>
      <select  class="form-control" id="daftar-tambah-dosbing2-jadwal-sidang-proposal">
          
          <option disabled selected value> -- select an option -- </option>

             @foreach($daftar_dosen as $item)
        <option value="{{$item->nip}}">{{$item->nip}}</option>
        @endforeach
      </select>
      </div>

      </div>

     <!--  <div class="col-md-6">

      <div class="form-group">
      <label for="daftar-tambah-waktu-jadwal-sidang-proposal">Waktu Sidang</label>
      
      <input type="text" class="form-control" id="daftar-tambah-waktu-jadwal-sidang-proposal" name="daftar-tambah-waktu-jadwal-sidang-proposal"></input>
      </div>

      </div> -->

      </div>

      <!--  -->

      <div class="row">

      <div class="col-md-12">

       <div class="form-group">
      <label for="daftar-tambah-dosbing-penguji-jadwal-sidang-proposal">Dosen Penguji</label>
      <select  class="form-control" id="daftar-tambah-dosbing-penguji-jadwal-sidang-proposal">
          <option disabled selected value> -- select an option -- </option>

             @foreach($daftar_dosen as $item)
        <option value="{{$item->nip}}">{{$item->nip}}</option>
        @endforeach
      </select>
      </div>

      </div>

     <!--  <div class="col-md-6">

      <div class="form-group">
      <label for="daftar-tambah-waktu-jadwal-sidang-proposal">Waktu Sidang</label>
      
      <input type="text" class="form-control" id="daftar-tambah-waktu-jadwal-sidang-proposal" name="daftar-tambah-waktu-jadwal-sidang-proposal"></input>
      </div>

      </div> -->

      </div>

      <!--  -->
       <div class="row">

      <div class="col-md-12">

       <div class="form-group">
      <label for="daftar-tambah-nip-jadwal-sidang-proposal">NIP Petugas</label>
      <select  class="form-control" id="daftar-tambah-nip-jadwal-sidang-proposal">
          
            <option disabled selected value> -- select an option -- </option>

             @foreach($daftar_petugas_tu as $item)
        <option value="{{$item->nip_petugas}}">{{$item->nama_petugas}}</option>
        @endforeach
      </select>
      </div>

      </div>

     <!--  <div class="col-md-6">

      <div class="form-group">
      <label for="daftar-tambah-waktu-jadwal-sidang-proposal">Waktu Sidang</label>
      
      <input type="text" class="form-control" id="daftar-tambah-waktu-jadwal-sidang-proposal" name="daftar-tambah-waktu-jadwal-sidang-proposal"></input>
      </div>

      </div> -->

      </div>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="tombol-submit-tambah-jadwal-sidang-proposal">Simpan</button>



        <script type="text/javascript">



        $(document).ready(function() {  

            $('#tombol-submit-tambah-jadwal-sidang-proposal').click(function(){

                var nim = $('#daftar-tambah-nim-jadwal-sidang-proposal').val();
                
                var kbk = $('#daftar-tambah-kbk-jadwal-sidang-proposal').val();

                var judul_proposal = $("#daftar-tambah-judul-jadwal-sidang-proposal").val();

                var tgl = $('#daftar-tambah-tanggal-jadwal-sidang-proposal').val();

                var waktu = $('#daftar-tambah-waktu-jadwal-sidang-proposal').val();

                var tempat = $('#daftar-tambah-tempat-jadwal-sidang-proposal').val();

                var dosbing1 = $('#daftar-tambah-dosbing1-jadwal-sidang-proposal').val();

                var dosbing2 = $('#daftar-tambah-dosbing2-jadwal-sidang-proposal').val();

                var penguji = $('#daftar-tambah-dosbing-penguji-jadwal-sidang-proposal').val();

                var petugas = $('#daftar-tambah-nip-jadwal-sidang-proposal').val();

                /*alert(nim+" "+kbk+" "+judul_proposal+" "+tgl+" "+waktu+" "+tempat+" "+dosbing1+" "+dosbing2+" "+penguji+" "+petugas);*/
 
                $.ajax({
                     url: 'create-jadwal-sidang-proposal',
                    type: "post",
                    data: {"_token": "{{ csrf_token() }}",
                        "nim":nim,
                        "kbk":kbk,
                        'judul_proposal':judul_proposal,
                        'tgl':tgl,
                        'waktu':waktu,
                        'tempat':tempat,
                        'dosbing1':dosbing1,
                        'dosbing2':dosbing2,
                        'penguji':penguji,
                        'petugas':petugas
                    },
                    success: function(response){
                        if(response.status_insert==1){
                            // $('#modal-tambah-jadwal-sidang-proposal').modal('hide'); 
                            // $('#info-simpan-jadwal-proposal').show();
                            alert('Berhasil simpan data');
                            location.reload();
                        }
                        else{
                            //$('#info-simpan-jadwal-proposal').hide();
                            alert('Gagal simpan data');
                        }
                    }
                });      
            });

            



             $('#daftar-tambah-tanggal-jadwal-sidang-proposal').datepicker({
                format: 'yyyy-mm-dd'
                });
             $('#daftar-tambah-waktu-jadwal-sidang-proposal').timepicker({
                minuteStep: 1,
                secondStep: 5,
                showInputs: false,
                
                modalBackdrop: true,
                showSeconds: true,
                showMeridian: false
            });
             
        }); 
            
        </script>
      </div>
    </div>

  </div>
</div>

@endsection



