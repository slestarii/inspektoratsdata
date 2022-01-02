@extends("layout.mainlayout")

@section("page_title","Inspektorat | Tambah Inventaris")

@section("title","Tambah Inventaris")

@section("breadcrumb")
<li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
<li class="breadcrumb-item"><a href="/view_inventaris">Barang Inventaris</a></li>
<li class="breadcrumb-item active">Tambah Inventaris</li> 
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
        <h3 class="card-title">Tambah Inventaris</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
        </div>
    </div>

    <div class="card-body">
    <!-- <h1>Tambah Data Temuan</h1> -->
      <form action="/inventaris/form_inventaris" method="post" enctype="multipart/form-data">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
            Kode Barang : <input type="text"  class="form-control" name="KODE_BARANG_INV"><br>
            Nama/Jenis Barang : <input type="text" class="form-control" name="NAMA_BARANG_INV"><br>
            Nomor Register : <input type="text"  class="form-control" name="NOMOR_REG"><br>
            Merk : <input type="text" class="form-control" name="MERK"><br>
            Type : <input type="text" class="form-control" name="TYPE"><br>
            Ukuran/CC : <input type="text" class="form-control" name="UKURAN"><br>
            Bahan : <input type="text" class="form-control" name="BAHAN"><br>
            Tahun Perolehan : <input type="text" class="form-control" name="TAHUN_PEROLEHAN"><br>
            Nomor Pabrik : <input type="text" class="form-control" name="NO_PABRIK"><br>
            Nomor Rangka : <input type="text" class="form-control" name="NO_RANGKA"><br>
            Nomor Mesin : <input type="text" class="form-control" name="NO_MESIN"><br>
            Nomor Polisi : <input type="text" class="form-control" name="NO_POLISI"><br>
            Nomor BPKB : <input type="text" class="form-control" name="NO_BPKB"><br>
            Harga Perolehan : <input type="text" class="form-control" name="HARGA_PEROLEHAN"><br>
            Keterangan : <input type="text" class="form-control" name="KETERANGAN_INV"><br>
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