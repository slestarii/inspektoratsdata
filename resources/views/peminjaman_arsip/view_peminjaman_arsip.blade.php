@extends("layout.mainlayout")

@section("page_title","Inspektorat | Peminjaman Arsip")

@section("title","Peminjaman Arsip")

@section("breadcrumb")
<li class="breadcrumb-item"><a href="dashboard">Home</a></li>
<li class="breadcrumb-item active">Peminjaman Arsip</li> 
@endsection

@section('custom_css')
<!-- DataTables -->
<link rel="stylesheet" href="{{asset ('asset/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset ('asset/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection

@section('content')
<!-- Default box -->
<div class="card">    
  <div class="card-header">
	  <h3 class="card-title">Data Peminjaman Arsip</h3>
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
				<a href="/peminjaman_arsip/view_peminjaman_arsip">
				<button type="button" class="btn btn-info float-right" style="float: right;"><i class="fas fa-plus"></i>  Tambah Data</button>
				</a>
			</div>
      <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th style="text-align:center">Nomor</th>
                <th style="text-align:center">Peminjam</th>
                <th style="text-align:center">Jenis Arsip</th>
                <th style="text-align:center">Tanggal Pinjam</th> 
                <th style="text-align:center">Aksi</th>
              </tr>
            </thead>
            <tbody>
            @foreach($peminjaman_arsip as $data)
              <tr>
                  <td>
                    @foreach($user as $pegawai)
                    @if ($pegawai->NIP === $data->NIP)
                      {{$pegawai->NAMA_USER}}<br>
                    @endif
                    @endforeach
                  </td>
                  <td>
                    @foreach($arsip as $arsip)
                    @if ($arsip->ID_ARSIP === $data->ID_ARSIP)
                      {{$arsip->JENIS_ARSIP}}<br>
                    @endif
                    @endforeach
                  </td>
                  <td>{{ $data->JUMLAH_ARSIP }}</td>
                  <td>{{ $data->TANGGAL_PINJAM_ARSIP }}</td>
                  <td>
                  <button onclick="confirmDelete('{{ $data->ID_PEMINJAMAN_ARSIP }}')" class="btn btn-danger">
                  <i class="fas fa-trash"></i> Hapus</button>
                  </td>
              </tr>
            @endforeach
            </tbody>
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

<div class="modal fade" id="deletepeminjaman_arsip" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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

<script>
  $(function () {
	$("#example1").DataTable({
	  "responsive": true,
	  "autoWidth": false,
	});
  });
</script>
@endsection

@section('scripts')
<script>
	function confirmDelete(id)
	{
		var link = document.getElementById('deleteLink')
		link.href="/peminjaman_arsip/hapus/" + id
		$('#deletepeminjaman_arsip').modal('show')
	}

</script>
@endsection