<?php
$this->load->view('_bagian/kepala');
?>
<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href=""><b>Login</b>Admin</a>
    </div>
    <div class="login-box-body">
		<?php echo form_open('login/cek_login');?>
      	<p class="login-box-msg">Masukkan Username dan Password Anda</p>
        <div class="form-group has-feedback">
          <input type="text" class="form-control" placeholder="Masukkan Username Anda" name="username" id="username">
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Masukkan Password Anda" name="password" id="password">
        </div>
        <div class="row">
          <div class="col-xs-12">
            <input class="btn btn-primary btn-flat pull-right" type="submit" value="Sign In">
          </div>
        </div>
        <?php echo form_close();?>
    </div>
  </div>
</body>
<?php
$this->load->view('_bagian/kaki');
?>
<script>
	Swal({
    title:'Gagal Login',
    text:'Pastikan Username dan Password Sudah Benar',
    type:'error',
    showCancelButton:false,
    confirmButtonColor:'#3085d6',
    confirmButtontext:'ok'
  }).then((result)=>{
    if (result.value) {
      window.location.href="<?php echo site_url('login');?>"
    }
  })
</script>

