<div class="col-md-12">
 		<div class="card">
 			<div class="card-header"><?php echo $sub_judul; ?></div>
 			<div class="card-body">


 				<?php 
 				if($this->session->flashdata('info')) {
 				 	echo "<div class='alert alert-primary'>".$this->session->flashdata('info')."</div>";
 				 } 

 				 ?>

 				<a href="<?php echo site_url('admin/pengumuman/tambah') ?>" class="btn btn-primary">Tambah Data</a>
 				<br>
 				<br>

 				<?php foreach ($isi as $value): ?>





 				<div style="border: 1px solid orange; padding: 15px; margin-bottom: 10px ">
 				<div class="row">
 					<div class="col-sm-1">
 						<img width="75px" height="75px" src="<?php echo base_url('assets/bahtiar1.jpg') ?>" class="rounded-circle">
 					</div>
 					<div class="col-sm-11">
 						penulis : <strong><?= $value->penulis ?></strong>
 						<br>
 						<?= $value->created_at ?>
 					</div>
 				</div>
 				<div class="row">
 					<div class="col-sm-10">
 						<h4><?= $value->judul ?></h4>
 						<p><?= $value->isi ?></p>
 					</div>	
 				</div>
 				<div class="row">
 					<div class="col-md-5">
 						
 					</div>
 					<div class="col-md-5">
 						
 					</div>
 					<div class="col-md-2">
 						<a href="<?php echo site_url('admin/pengumuman/edit/' . $value->Kd); ?>" class="btn btn-primary">Edit</a>
 						<a href="<?php echo site_url('admin/pengumuman/hapus/' . $value->Kd); ?>" class="btn btn-danger"
 							onclick="return confirm('Anda Yakin >')">Hapus</a>
 					</div>
 				</div>
 				</div>
 			<?php endforeach; ?>




 			
 		</div>
 	</div>
 </div>