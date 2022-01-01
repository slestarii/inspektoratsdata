@extends("layout.mainlayout")

@section("page_title","Inspektorat | Tambah Arsip")

@section("title","Tambah Arsip")

@section("breadcrumb")
<li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
<li class="breadcrumb-item"><a href="/view_arsip">Arsip</a></li>
<li class="breadcrumb-item active">Tambah Arsip</li> 

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
        <h3 class="card-title">Tambah Arsip</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body">
    <!-- <h1>Tambah Data Temuan</h1> -->
      <form action="/arsip/form_arsip" method="post" enctype="multipart/form-data">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
            Kode Klasifikasi : <input type="text"  class="form-control" name="KODE_KLAS"><br>
            Indeks : <input type="text" class="form-control" name="INDEKS"><br>
            Jenis Arsip : <input type="text"  class="form-control" name="JENIS_ARSIP"><br>
            Kurun Waktu : <input type="text" class="form-control" name="KURUN_WAKTU"><br>
            Tingkat Perkembangan : <input type="text"  class="form-control" name="TINGKAT_PERKEMBANGAN"><br>
            Jumlah : <input type="text" class="form-control" name="JUMLAH"><br>
            Keterangan : <input type="text"  class="form-control" name="KETERANGAN_ARSIP"><br>
            Nomor Definitif Folder : <input type="text" class="form-control" name="NO_DEF_FOLDER"><br>
            Nomor Definitif Bok : <input type="text"  class="form-control" name="NO_DEF_BLOK"><br>
            Lokasi Simpan : <input type="text" class="form-control" name="LOKASI_SIMPAN"><br>
            Jangka Waktu Simpan : <input type="text"  class="form-control" name="JANGKA_WAKTU"><br>
            Nasib Akhir : <input type="text" class="form-control" name="NASIB_AKHIR"><br>
            Kategori Arsip : <input type="text"  class="form-control" name="KATEGORI_ARSIP"><br>
            Tahun Pemnindahan : <input type="text" class="form-control" name="TAHUN_PEMINDAHAN"><br>
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