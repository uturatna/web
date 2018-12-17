<div class="col-md-12">
 		<div class="card">
 			<div class="card-header"><?php echo $sub_judul; ?></div>
 			<div class="card-body">

 				
 				<form action="<?php echo site_url('admin/pengumuman/Proses_edit') ?>" method="post">
 					<div class="form-group">
 						<label>Judul</label>
 						<input type="text" class="form-control" name="judul" value="<?php echo $isi->judul ?>">
 					</div>
 					<div class="form-group">
 						<label>Isi</label>
 						<textarea  class="form-control" name="isi" cols="30" rows="5"><?php echo $isi->isi ?></textarea>
 					</div>
 					<div class="form-group">
 						<label>Penulis</label>
 						<input type="text" class="form-control" name="penulis" value="<?php echo $isi->penulis ?>">
 						<input type="hidden" name="id" value="<?php echo $isi->Kd; ?>">
 					</div>
 					<input type="submit" name="submit" value="Simpan" class="btn btn-primary">
 					<a href="<?php echo site_url('admin/pengumuman') ?>" class="btn btn-danger">Batal</a>
 				</form>


 			
 		</div>
 	</div>
 </div>