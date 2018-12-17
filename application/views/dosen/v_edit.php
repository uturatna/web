<div class="col-md-12">
 		<div class="card">
 			<div class="card-header"><?php echo $sub_judul; ?></div>
 			<div class="card-body">

 				
 				<form action="<?php echo site_url('admin/dosen/edit_process') ?>" method="post">
 					<div class="form-group">
 						<label>NIK</label>
 						<input type="text" class="form-control" name="nik" value="<?php echo $isi->nik ?>">
 					</div>
 					<div class="form-group">
 						<label>Nama Dosen</label>
 						<input type="text" class="form-control" name="nama" value="<?php echo $isi->nama_dosen ?>">
 					</div>
 					<div class="form-group">
 						<label>Alamat</label>
 						<input type="text" name="alamat" class="form-control" value="<?php echo $isi->alamat ?>">
 					</div>
 					<input type="submit" name="submit" value="Simpan" class="btn btn-primary">
 					<a href="<?php echo site_url('admin/dosen') ?>" class="btn btn-danger">Batal</a>
 				</form>


 			
 		</div>
 	</div>
 </div>