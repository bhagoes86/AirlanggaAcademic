@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Fitur 
@endsection

@section('contentheader_title')
Fitur
@endsection

@section('main-content')
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Simple Tables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>

  


 <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              
              <h3 class="box-title">KRS</h3>


              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>NO</th>
                  <th>KODE MTK</th>
                  <th>NAMA MATA AJAR</th>
                  <th>SKS MTA</th>
                 <th>JADWAL</th> 
                  <th>KAPASITAS</th>
                  <th>TERISI</th>
                   <th>KELAS</th>
                  <th>AKSI</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>AG001</td>
                  <td>Kalkulus</td>
                  <td>3</td>
                   <td>Jumat 1</td>
                  <td>60</td>
                  <td>56</td>
                  <!-- <td><span class="label label-success">102</span></td>-->
                  <td>102</td>


                 
                  <div class="container">
  
  <!-- Trigger the modal with a button -->
  <td><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Ambil</button></td>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Succes</h4>
        </div>
        <div class="modal-body">
          <p>Mata kuliah berhasil ditambah</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
          
                </tr>
                <tr>
                  <td>2</td>
                  <td>AG002</td>
                  <td>Algoritma dan pemrograman</td>
                  <td>4</td>
                   <td>Jumat 6</td>
                  <td>60</td>
                  <td>9</td>
                 <td>309</td>
                  <div class="container">
 
  <!-- Trigger the modal with a button -->
  <td><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Ambil</button></td>

  <!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Not Succes!</h4>
        </div>
        <div class="modal-body">
          <p>Mata kuliah tidak bisa ditambah karena ada jadwal tabrakan</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

                </tr>
                <tr>
                  <td>3</td>
                  <td>AG003</td>
                  <td>Basis Data</td>
                  <td>3</td>
                   <td>Senin 3</td>
                  <td>60</td>
                  <td>50</td>
                 <td>319</td>
                  <div class="container">
 
  <!-- Trigger the modal with a button -->
  <td><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">Ambil</button></td>

  <!-- Modal -->
  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Not Succes!</h4>
        </div>
        <div class="modal-body">
          <p>Mata kuliah tidak bisa diambil karena belum mencukupi jumlah prasyarat sks</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

                </tr>

                <tr>
                  <td>4</td>
                  <td>AG004</td>
                  <td>Pengantar Teknologi Informasi</td>
                  <td>3</td>
                  <td>kamis 3</td>
                  <td>60</td>
                  <td>43</td>
                   <td>302b</td>
                       
                      
                 <div class="container">
 
  <!-- Trigger the modal with a button -->
  <td><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal4">Ambil</button></td>

  <!-- Modal -->
  <div class="modal fade" id="myModal4" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Not Succes!</h4>
        </div>
        <div class="modal-body">
          <p>Mata kuliah tidak bisa diambil karena sks sudah penuh</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

</tr>
<br>

<div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>IPK</th>
                  <th>IPS</th>
                  <th>Max Terambil</th>
                  <th>Terambil</th>

                 
                </tr>
                 <tr>
                  <td>3.44</td>
                  <td>3.33</td>
                  <td>24</td>
                  <td>18</td>
                </tr>
                  

              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
</body>
</html>

@endsection

@section('code-footer')




@endsection