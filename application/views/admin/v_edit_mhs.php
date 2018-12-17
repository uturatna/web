<div class="col-md-12">
 		<div class="card">
 			<div class="card-header"><?php echo $sub_judul; ?></div>
 			<div class="card-body">

 				
 				<form action="<?php echo site_url('admin/mahasiswa/edit_process') ?>" method="post">
 					<div class="form-group">
 						<label>NIM</label>
 						<input type="text" class="form-control" name="nim" value="<?php echo $isi->nim ?>">
 					</div>
 					<div class="form-group">
 						<label>Nama Mahasiswa</label>
 						<input type="text" class="form-control" name="nama"  value="<?php echo $isi->nama_mhs ?>">
 					</div>
 					<div class="form-group">
 						<label>Program Study</label>
 						<select class="form-control" name="program"  value="<?php echo $isi->program_study ?>">
 							<option value="D3 MI">D3 MI</option>
 							<option value="D3 TI">D3 TI</option>
 							<option value="S1 TI">S1 TI</option>
 							<option value="S1 DKV">S1 DKV</option>
 						</select> 
 					</div>
 					<input type="submit" name="submit" value="Simpan" class="btn btn-primary">
 					<a href="<?php echo site_url('admin/mahasiswa') ?>" class="btn btn-danger">Batal</a>
 				</form>


 			
 		</div>
 	</div>
 </div>