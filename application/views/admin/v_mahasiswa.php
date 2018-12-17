<div class="col-md-12">
	<div class="card" >
		<div class="card-header" ><?php echo $sub_judul ?></div>
		<div class="card-body">
			<?php 
 				if($this->session->flashdata('info')) {
 				 	echo "<div class='alert alert-primary'>".$this->session->flashdata('info')."</div>";
 				 } 

 				 ?>
			<a href="mahasiswa/add_mhs" class="btn btn-primary">Tambah Data</a>
			<hr>
			<table class="table table-bordered">
				<tr>
					<th>NIM</th>
					<th>Nama Mahasiswa</th>
					<th>Program Study</th>
					<th>Tanggal Pembuatan</th>
					<th>process</th>
				</tr>
				<?php foreach ( $isi as $value): ?>
				<tr>
					<td><?php echo $value->nim; ?></td>
					<td><?php echo $value->nama_mhs; ?></td>
					<td><?php echo $value->program_study; ?></td>
					<td><?php echo date('d-M-Y', strtotime($value->created_at)); ?></td>
					<td>
						<a href="<?php echo site_url('admin/mahasiswa/edit_mhs/'). $value->nim ?>" class="btn btn-primary">Edit</a>
						<a href="<?php echo site_url('admin/mahasiswa/edit_mhs/'). $value->nim ?>" class="btn btn-danger">hapus</a>
					</td>
				</tr>
			<?php endforeach ?>
			</table>
		</div>
	</div>
</div>
