<?php
$this->load->view('_bagian/kepala');
?>

<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="<?php echo site_url('login/logout');?>">Log Out</a></li>
			</ul>
		</div>
	</div>
</nav>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3>SELAMAT DATANG <?php echo $this->session->userdata('nama');?></h3>
			<h4>Selamat Mengelola Data Rumah Tangga Anda,jika ada masalah Anda bisa menghubungi CS untuk menyelesaikannya,Terima kasih</h4>
		</div>
	</div>
</div>

<?php
$this->load->view('_bagian/kaki');
?>