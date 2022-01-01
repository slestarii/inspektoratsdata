@extends("layout.mainlayout")

@section("page_title","Inspektorat | Tambah Barang")

@section("title","Tambah Barang")

@section("breadcrumb")
<li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
<li class="breadcrumb-item"><a href="/view_barang">Barang Pakai Habis</a></li>
<li class="breadcrumb-item active">Tambah Barang</li> 
@endsection

@section('custom_css')  
<!-- DataTables -->
<link rel="stylesheet" href="{{asset ('asset/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset ('asset/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<!-- Select2 -->
<link rel="stylesheet" href="{{asset ('asset/plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset ('asset/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
<!-- Theme style -->
<link rel="stylesheet" href="{{asset ('asset/dist/css/adminlte.min.css')}}">
@endsection


@section('content')
 <!-- Default box -->
 <div class="card">    
    <div class="card-header">
        <h3 class="card-title">Tambah Barang</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
        </div>
    </div>

    <div class="card-body">
    <!-- <h1>Tambah Data Temuan</h1> -->
      <form action="/barang/form_barang" method="post" enctype="multipart/form-data">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
            Uraian Rincian : <input type="text"  class="form-control" name="URAIAN_RINCIAN"><br>
            Saldo Awal : <input type="text" class="form-control" name="SALDO_AWAL"><br>
            Penambahan : <input type="text"  class="form-control" name="PENAMBAHAN"><br>
            Pengurangan : <input type="text" class="form-control" name="PENGURANGAN"><br>
            Saldo Akhir : <input type="text" class="form-control" name="SALDO_AKHIR"><br>
            Harga Pembelian : <input type="text" class="form-control" name="HARGA_PEMBELIAN"><br>
            Saldo Akhir (Rp.) : <input type="text" class="form-control" name="SALDO_AKHIR_PERSEDIAAN"><br>
        
            <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
    <div class="card-footer">

    </div>
    <!-- /.card-footer-->
  <!-- </div> -->
  <!-- </div> -->
  <!-- /.card -->
@endsection

@section('custom_script')
<!-- DataTables -->
<script src="{{asset ('asset/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset ('asset/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset ('asset/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset ('asset/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<!-- Select2 -->
<script src="{{asset ('asset/plugins/select2/js/select2.full.min.js')}}"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });

    //Initialize Select2 Elements
    $('.select2').select2()

  });
</script>


@endsection