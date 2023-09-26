<?php
  $this->load->view('_bagian/kepala');
?>

<div class="wrapper">
  <header class="main-header">
    <a href="#" class="logo">
      <span class="logo-mini"><b>D</b>S</span>
      <span class="logo-lg"><b>Data</b> Siswa</span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="http://localhost/Mahasiswa/asset/img/8.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Eriza Anjelika Vega</span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="http://localhost/Mahasiswa/asset/img/8.jpg" class="img-circle" alt="User Image">
                <p>
                  Eriza Anjelika Vega - Web Developer
                  <small>Member since Nov. 2019</small>
                </p>
              </li>
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                </div>
              </li>
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?php echo base_url('login/logout');?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
              </ul>
              <li>
                  <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="http://localhost/Mahasiswa/asset/img/8.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Eriza Anjelika Vega</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?php echo site_url('halaman');?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('chart');?>">
            <i class="fa fa-pie-chart"></i> <span>Chart</span>
          </a>
        </li>
        <li>
          <a href="#" data-toggle="modal" data-target="#tambah_siswa">
            <i class="fa fa-plus"></i> <span>Tambah Siswa</span>
          </a>
        </li>
      </ul>
    </section>
  </aside>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <section class="content">
        <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box bg-red">
            <span class="info-box-icon"><i class="fa fa-male"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Siswa Laki-Laki</span>
              <span class="info-box-number"><?php echo $this->db->where('jenis_kelamin','Laki-Laki')->get('tbl_siswa')->num_rows();?></span>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box bg-aqua">
            <span class="info-box-icon"><i class="fa fa-male"></i><i class="fa fa-female"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Total Siswa</span>
              <span class="info-box-number"><?php echo $this->db->get('tbl_siswa')->num_rows();?></span>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box bg-green">
           <span class="info-box-icon"><i class="fa fa-female"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Siswa Perempuan</span>
              <span class="info-box-number"><?php echo $this->db->where('jenis_kelamin','Perempuan')->get('tbl_siswa')->num_rows();?></span>
            </div>
          </div>
        </div>
      </div>
        <div class="row">
          <div class="col-xs-12">
            <div class="box box-success">
              <div class="box-header">
            <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#tambah_siswa"><span class="glyphicon glyphicon-plus"></span>Tambah Siswa</button>
            <h1 class="box-title"><span class="fa fa-graduation-cap"></span>Tabel Siswa</h1>
          </div>
               <div class="box-body" id="over">
                  <table class="table table-bordered" id="datasiswa">
                    <thead align="center">
                      <tr>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Tanggal lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody id="show_data">
                    
                    </tbody>
                    <tfoot align="center">
                      <tr>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Tanggal lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                  </table>
                </div >
              </div>
            </div>
        </div>
      </section>
      </div>
  <footer class="main-footer" >
    <div class="pull-right hidden-xs" >
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">ErizaVegas11</a>.</strong> All rights
    reserved.
  </footer> 
</div>
<?php
$this->load->view('_modal/modal_ajax_tambah');
$this->load->view('_modal/modal_ajax_edit');
$this->load->view('_modal/modal_ajax_hapus');

$this->load->view('_bagian/kaki');

$this->load->view('_bagian/ajaxskrip');
?>