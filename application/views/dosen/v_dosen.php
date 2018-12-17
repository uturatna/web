<div class="col-md-12">
	<div class="card" >
		<div class="card-header" ><?php echo $sub_judul ?></div>
		<div class="card-body">
			<?php 
 				if($this->session->flashdata('info')) {
 				 	echo "<div class='alert alert-primary'>".$this->session->flashdata('info')."</div>";
 				 } 

 				 ?>
			<a href="dosen/add_data" class="btn btn-primary">Tambah Data</a>
			<hr>
			<table class="table table-bordered">
				<tr>
					<th>NIK</th>
					<th>Nama Dosen</th>
					<th>Alamat</th>
					<th>Tanggal Pembuatan</th>
					<th>process</th>
				</tr>
				<?php foreach ( $isi as $value): ?>
				<tr>
					<td><?php echo $value->nik; ?></td>
					<td><?php echo $value->nama_dosen; ?></td>
					<td><?php echo $value->alamat; ?></td>
					<td><?php echo date('d-M-Y', strtotime($value->create_at)); ?></td>
					<td>
						<a href="<?php echo site_url('admin/dosen/edit/').$value->nik ?>" class="btn btn-primary">Edit</a>
						<a href="<?php echo site_url('admin/dosen/delete/'). $value->nik ?>" class="btn btn-danger" 
							onclick="return confirm('Anda Yakin >')" >hapus</a>
					</td>
				</tr>
			<?php endforeach ?>
			</table>
		</div>
	</div>
</div>
