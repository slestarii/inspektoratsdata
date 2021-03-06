@extends("layout.mainlayout")

@section("page_title","Inspektorat | Barang Inventaris")

@section("title","Barang Inventaris")

@section("breadcrumb")
<li class="breadcrumb-item"><a href="dashboard">Home</a></li>
<li class="breadcrumb-item active">Barang Inventaris</li> 
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
	  <h3 class="card-title"> Data Barang Inventaris</h3>
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
				<a href="/inventaris/form_inventaris">
				<button type="button" class="btn btn-info float-right" style="float: right;"><i class="fas fa-plus"></i>  Tambah Data</button>
				</a>
			</div>
      <div class="card-body">
      	<table id="example1" class="table table-bordered table-striped">
          <thead>
              <tr>
                <th style="text-align:center">Nomor</th>
				        <th style="text-align:center">Kode Barang</th>
                <th style="text-align:center">Nama/Jenis Barang</th>
                <th style="text-align:center">Nomor Register</th> 
                <th style="text-align:center">Merk</th> 
                <th style="text-align:center">Type</th>
                <th style="text-align:center">Ukuran/CC</th>
                <th style="text-align:center">Bahan</th>
                <th style="text-align:center">Tahun Perolehan</th>
                <th style="text-align:center">Nomor Pabrik</th> 
                <th style="text-align:center">Nomor Rangka</th> 
                <th style="text-align:center">Nomor Mesin</th>
                <th style="text-align:center">Nomor Polisi</th>
                <th style="text-align:center">Nomor BPKB</th>
                <th style="text-align:center">Harga Perolehan</th>
                <th style="text-align:center">Keterangan</th>
              </tr>
          </thead>
          <tbody>
          @foreach($barang_inventaris as $data)
              <tr>
                  <td>{{ $data->KODE_BARANG_INV }}</td>
                  <td>{{ $data->NAMA_BARANG_INV }}</td>
                  <td>{{ $data->NOMOR_REG }}</td>
                  <td>{{ $data->MERK }}</td>
                  <td>{{ $data->TYPE }}</td>
                  <td>{{ $data->UKURAN }}</td>
                  <td>{{ $data->BAHAN }}</td>
                  <td>{{ $data->TAHUN_PEROLEHAN }}</td>
                  <td>{{ $data->NO_PABRIK }}</td>
                  <td>{{ $data->NO_RANGKA }}</td>
                  <td>{{ $data->NO_MESIN }}</td>
                  <td>{{ $data->NO_POLISI }}</td>
                  <td>{{ $data->NO_BPKB }}</td>
                  <td>{{ $data->HARGA_PEROLEHAN }}</td>
                  <td>{{ $data->KETERANGAN_INV }}</td>
                  <td>
                  <button onclick="confirmDelete('{{ $data->ID_BARANG_INV }}')" class="btn btn-danger">
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

<div class="modal fade" id="deleteinventaris" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
		link.href="/inventaris/hapus/" + id
		$('#deleteinventaris').modal('show')
	}

</script>
@endsection