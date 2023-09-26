<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $judul_browser;?></title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url();?>asset/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>asset/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>asset/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>asset/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>asset/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>asset/css/sweetalert2.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href=""><b>Login</b>Admin</a>
    </div>
    <div class="login-box-body">
		<?php echo form_open('login/cek_login','onsubmit="return cekLogin(this)"');?>
      	<p class="login-box-msg">Masukkan Username dan Password Anda</p>
        <div class="form-group has-feedback">
          <input type="text" class="form-control" placeholder="Masukkan Username Anda" name="username" id="username">
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Masukkan Password Anda" name="password" id="password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <input class="btn btn-primary btn-flat pull-right" type="submit" value="Login" name="masuk">
          </div>
        </div>
        <?php echo form_close();?>
    </div>
  </div>
</body>
<?php
$this->load->view('_bagian/kaki');
?>
<script language="javascript">
	function cekLogin(form){
		if (form.username.value=="") {
			swal('INFORMASI','Username tidak boleh kosong !','error');
			return(false);
		}else if(form.password.value==""){
			swal('INFORMASI','Password tidak boleh kosong !','error');
			return(false);
		}else{
			return(true);
		}
	}
</script>
