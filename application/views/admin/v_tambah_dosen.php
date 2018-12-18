<div class="col-md-12">
 		<div class="card">
 			<div class="card-header"><?php echo $sub_judul; ?></div>
 			<div class="card-body">

 				
 				<form action="<?php echo site_url('admin/dosen/tambah_process') ?>" method="post">
 					<div class="form-group">
 						<label>NIK</label>
 						<input type="text" class="form-control" name="nik">
 					</div>
 					<div class="form-group">
 						<label>Nama Dosen</label>
 						<input type="text" class="form-control" name="nama">
 					</div>
 						<div class="form-group">
 						<label>Alamat</label>
 						<textarea  class="form-control" name="alamat" cols="30" rows="5"></textarea>
 					</div>
 				
 					<input type="submit" name="submit" value="Simpan" class="btn btn-primary">
 					<a href="<?php echo site_url('admin/dosen') ?>" class="btn btn-danger">Batal</a>
 				</form>


 			
 		</div>
 	</div>
 </div>