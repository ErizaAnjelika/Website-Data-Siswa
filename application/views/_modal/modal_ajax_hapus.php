<form>
	<div class="modal fade" id="hapus_siswa" tabindex="-1" role="dialog" aria-labelledby="exampleModelLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="close">
						<span aria-hidden="true">&times;</span>
					</button>

					<h3 class="modal-title" id="exampleModelLabel">
						<span class="glyphicon glyphicon-trash"></span>&nbsp; Hapus Data Siswa
					</h3>
				</div>
				<div class="modal-body">
					<span>Apakah Anda yakin ingin menghapus data ini??</span>
					<div class="form-group row" hidden>
						<label class="col-md-3 col-form-label">NIM</label>
						<div class="col-md-9">
							<input type="text" name="nim_hapus" id="nim_hapus" class="form-control" placeholder="Nama Penulis">
						</div>
					</div>
					<div class="form-group row" hidden>
						<label class="col-md-3 col-form-label">Nama</label>
						<div class="col-md-9">
							<input type="text" name="nama_hapus" id="nama_hapus" class="form-control" placeholder="Nama Penulis">
							<input type="hidden" name="id_siswa_hapus" id="id_siswa_hapus" class="form-control">
						</div>
					</div>
					<div class="form-group row" hidden>
						<label class="col-md-3 col-form-label">Tanggal Lahir</label>
						<div class="col-md-9">
							<input type="text" name="tanggal_lahir_hapus"  id="tanggal_lahir_hapus" class="form-control" placeholder="Tanggal Lahir">
						</div>
					</div>
					<div class="form-group row" hidden>
						<label class="col-md-3 col-form-label">Jenis Kelamin</label>
						<div class="col-md-9">
							<input type="radio" name="jenis_kelamin_hapus"  value="Laki-Laki" disabled>Laki-Laki<br>
							<input type="radio" name="jenis_kelamin_hapus"  value="Perempuan" disabled>Perempuan
						</div>
					</div>
					<div class="form-group row" hidden>
						<label class="col-md-3 col-form-label">Alamat</label>
						<div class="col-md-9">
							<input type="text" name="alamat_hapus"  id="alamat_hapus" class="form-control">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" id="btn_delete" class="btn btn-danger">Hapus</button>
				</div>
			</div>
		</div>
	</div>
</form>