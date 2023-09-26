<form>
	<div class="modal fade" id="edit_siswa" tabindex="-1" role="dialog" aria-labelledby="exampleModelLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>

					<h3 class="modal-title" id="exampleModelLabel">
						<span class="glyphicon glyphicon-user"></span>&nbsp;Edit Mahasiswa</h3>
				</div>
				<div class="modal-body">
					<div class="form-group row">
						<label class="col-md-3 col-form-label">NIM</label>
						<div class="col-md-9">
							<input type="text" name="nim_edit" id="nim_edit" class="form-control" placeholder>
							<input type="hidden" name="id_siswa_edit" id="id_siswa_edit" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-3 col-form-label">Nama</label>
						<div class="col-md-9">
							<input type="text" name="nama_edit" id="nama_edit" class="form-control" placeholder="Nama Siswa">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-3 col-form-label">Tanggal Lahir</label>
						<div class="col-md-9">
							<input type="text" name="tanggal_lahir_edit"  id="tanggal_lahir_edit" class="form-control" placeholder="Tanggal Lahir">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-3 col-form-label">Jenis Kelamin</label>
						<div class="col-md-9">
							<input type="radio" name="jenis_kelamin_edit" value="Laki-Laki">Laki-Laki<br>
							<input type="radio" name="jenis_kelamin_edit" value="Perempuan">Perempuan
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-3 col-form-label">Alamat</label>
						<div class="col-md-9">
							<input type="text" name="alamat_edit"  id="alamat_edit" class="form-control" placeholder="Alamat">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
					<button type="submit" id="btn_update" class="btn btn-primary">Simpan</button>
				</div>
			</div>
		</div>
	</div>
</form>
