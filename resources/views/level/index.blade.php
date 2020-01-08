@extends('layouts.master')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title">Data Level</h3>
					<div class="right">
						<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class=" btn btn-primay lnr lnr-plus-circle"> Tambah Data Level </i></button>
					</div>
				</div>
				<div class="panel-body">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>ID LEVEL</th>
								<th>NAMA LEVEL</th>
							</tr>
						</thead>
						<tbody>
							@foreach($data_level as $level)
							<tr>
								<td>{{$level->id_level}}</td>
						 		<td>{{$level->nama_level}}</td>
								<td>
									<a href="/level/{{$level->id_level}}/edit" class="btn btn-primary">Edit</a>
									<a href="/level/{{$level->id_level}}/delete" class="btn btn-danger"onclick="return confirm('Yakin Mau Dihapus ?')">Delete</a>
								</td>
							</tr>
						@endforeach
						</tbody>
					</table>
				</div>
			</div>
					</div>	
				</div>
			</div>		
		</div>
	</div>

	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  					<div class="modal-dialog" role="document">
		    					<div class="modal-content">
		      						<div class="modal-header">
		        						<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
		        						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		         	 						<span aria-hidden="true">&times;</span>
		        						</button>
      						</div>
      						<div class="modal-body">
        					<form action="/level/create" method="POST">
        						{{csrf_field()}}
  								<div class="form-group">
    						<label for="exampleInputEmail1">Id Level</label>
    						<input  name="id_level" type="integer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Id Level">
  							</div>

  							<div class="form-group">
    						<label for="exampleInputEmail1">Nama Level</label>
    						<input name="nama_level" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Level">
  							</div>
							
      						</div>
      						<div class="modal-footer">
        						<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        						<button type="submit" class="btn btn-primary">Simpan</button>
        						</form>
      						</div>
    					</div>
  					</div>
@stop