<!DOCTYPE html>
<html>
<head>
	<title><?php echo $judul ?></title>
	<link rel="stylesheet" href="<?php echo base_url('assets/dist/css/bootstrap.css'); ?>">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-warning" ">
  <a class="navbar-brand" href="#">Project</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('admin/home/index') ?>">Home</a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('admin/pengumuman') ?>">Pengumuman</a>
      </li>

      <!-- <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('admin/mahasiswa') ?>">Mahasiswa</a>
      </li> -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Data Master
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo site_url('admin/mahasiswa') ?>">Mahasiswa</a>
          <a class="dropdown-item" href="<?php echo site_url('admin/dosen') ?>">Dosen</a>
          <a class="dropdown-item" href="<?php echo site_url('admin/perwalian') ?>">Perwalian</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="container" style="margin-top: 10px">
 <div class="row">
 	<!-- <div class="col-md-12">
 		<div class="card" ">
 			<div class="card-header"><?php echo $sub_judul; ?></div>
 			<div class="card-body">
 				Selamat Datang
 			</div>
 		</div>
 	</div> -->
 	<?php $this->load->view($halaman) ?>
 </div>


</div>
<script src="<?php echo base_url('assets/jquery.js') ?>"></script>
<script src="<?php echo base_url('assets/dist/js/bootstrap.js') ?>"></script>
</body>
</html>