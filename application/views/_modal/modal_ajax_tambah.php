<form>
	<div class="modal fade" id="tambah_siswa" tabindex="-1" role="dialog" aria-labelledby="exampleModelLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>

					<h3 class="modal-title" id="exampleModelLabel">
						<span class="glyphicon glyphicon-user"></span>&nbsp;Tambah Data Siswa</h3>
				</div>
				<div class="modal-body">
					<div class="form-group row">
						<label class="col-md-3 col-form-label">NIM</label>
						<div class="col-md-9">
							<input type="text" name="nim" id="nim" class="form-control" placeholder="NIM">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-3 col-form-label">Nama</label>
						<div class="col-md-9">
							<input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Siswa">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-3 col-form-label">Tanggal Lahir</label>
						<div class="col-md-9">
							<input type="text" name="tanggal_lahir"  id="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-3 col-form-label">Jenis Kelamin</label>
						<div class="col-md-9">
							<input type="radio" name="jenis_kelamin"  value="Laki-Laki">Laki-Laki<br>
							<input type="radio" name="jenis_kelamin"  value="Perempuan">Perempuan
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-3 col-form-label">Alamat</label>
						<div class="col-md-9">
							<input type="text" name="alamat"  id="alamat" class="form-control" placeholder="Alamat">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
					<button type="submit" id="btn_save" class="btn btn-primary">Simpan</button>
				</div>
			</div>
		</div>
	</div>
</form>
