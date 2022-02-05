@extends("layout.mainlayout")

@section("page_title","Inspektorat | Arsip")

@section("title","Arsip")

@section("breadcrumb")
<li class="breadcrumb-item"><a href="dashboard">Home</a></li>
<li class="breadcrumb-item active">Arsip</li> 
@endsection

@section('custom_css')
<!-- DataTables -->
<link rel="stylesheet" href="{{asset ('asset/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset ('asset/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<!-- Select2 -->
<link rel="stylesheet" href="{{asset ('asset/plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset ('asset/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset ('asset/dist/css/adminlte.min.css')}}">
@endsection

@section('content')
<!-- Default box -->
<div class="card">    
  <div class="card-header">
	  <h3 class="card-title"> Data Arsip</h3>
	  <div class="card-tools">
		  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
			<i class="fas fa-minus"></i></button>
		  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
			<i class="fas fa-times"></i></button>
	  </div>
  </div>
  <div class="card-body">
    <div class="card">
			<div class="card-header">
				<a href="/arsip/form_arsip">
				<button type="button" class="btn btn-info float-right" style="float: right;"><i class="fas fa-plus"></i>  Tambah Data</button>
				</a>
			</div>
        <div class="card-body">
	        <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
				        <th style="text-align:center">Nomor</th>
                <th style="text-align:center">Kode Klasifikasi</th>
                <th style="text-align:center">Indeks</th> 
                <th style="text-align:center">Jenis Arsip</th> 
                <th style="text-align:center">Kurun Waktu</th>
                <th style="text-align:center">Tingkat Perkembangan</th>
                <th style="text-align:center">Jumlah</th>
                <th style="text-align:center">Keterangan</th>
                <th style="text-align:center">Nomor Definitif Folder</th>
                <th style="text-align:center">Nomor Definitif Bok</th>
                <th style="text-align:center">Lokasi Simpan</th> 
                <th style="text-align:center">Jangka waktu simpan</th> 
                <th style="text-align:center">Nasib Akhir</th>
                <th style="text-align:center">Kategori Arsip</th>
                <th style="text-align:center">Tahun Pemindahan</th>
                <th style="text-align:center">Unit Pengolah</th>
                <!-- <th style="text-align:center">Status Peminjaman</th> -->
              </tr>
            </thead>

            <tbody>
            @foreach($arsip as $data)
              <tr>
                <td>{{ $data->KODE_KLAS }}</td>
                <td>{{ $data->INDEKS }}</td>
                <td>{{ $data->JENIS_ARSIP }}</td>
                <td>{{ $data->KURUN_WAKTU }}</td>
                <td>{{ $data->TINGKAT_PERKEMBANGAN }}</td>
                <td>{{ $data->JUMLAH }}</td>
                <td>{{ $data->KETERANGAN_ARSIP }}</td>
                <td>{{ $data->NO_DEF_FOLDER }}</td>
                <td>{{ $data->NO_DEF_BLOK }}</td>
                <td>{{ $data->LOKASI_SIMPAN }}</td>
                <td>{{ $data->JANGKA_WAKTU }}</td>
                <td>{{ $data->NASIB_AKHIR }}</td>
                <td>{{ $data->KATEGORI_ARSIP }}</td>
                <td>{{ $data->TAHUN_PEMINDAHAN }}</td>
                <td>{{ $data->UNIT_PENGOLAH }}</td>
                <td>
                  <button onclick="confirmDelete('{{ $data->ID_ARSIP }}')" class="btn btn-danger">
                  <i class="fas fa-trash"></i> Hapus</button>
                  </td>
              </tr>
            @endforeach
            </tbody>
            <tfoot>
            <!-- <tr>
            <th>NIS_NIP</th>
            <th>nama_anggota</th>
            <th>tahun_masuk</th>
            <th>kelas</th>
            <th>username_anggota</th>
            <th>password_anggota</th>
            </tr> -->
            </tfoot>
          </table>
        </div>

			<!-- /.card-body -->
		</div>
		<!-- /.card -->
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
  </div>
  <!-- /.card-footer-->
</div>
<!-- /.card -->


<!-- penomoran-otomatis -->
<script type="text/javascript">
var addNumeration = function(cl){
  var table = document.querySelector('table.' + cl)
  var trs = table.querySelectorAll('tr')
  var counter = 1
  
  Array.prototype.forEach.call(trs, function(x,i){
    var firstChild = x.children[0]
    if (firstChild.tagName === 'TD') {
      var cell = document.createElement('td')
      cell.textContent = counter ++
      x.insertBefore(cell,firstChild)
    } else {
      firstChild.setAttribute('colspan',1)
    }
  })
}

addNumeration("table")
</script>
<!-- /.penomoran-otomatis -->

<div class="modal fade" id="deletearsip" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Hapus Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
      </div>
      <div class="modal-body">
        Apakah anda yakin ingin menghapus data ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
		<a id="deleteLink">
		<button type="button" class="btn btn-danger">Hapus</button>
		</a>
	</div>
    </div>
  </div>
</div>

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

@section('scripts')
<script>
	function confirmDelete(id)
	{
		var link = document.getElementById('deleteLink')
		link.href="/arsip/hapus/" + id
		$('#deletearsip').modal('show')
	}

</script>
@endsection