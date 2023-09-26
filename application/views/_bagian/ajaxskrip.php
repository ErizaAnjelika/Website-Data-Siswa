<script>
	$(document).ready(function(){
		$(function(){
			$('#tanggal_lahir').datepicker({format:'yyyy-mm-dd'});
			autoclose:true;
		});
		$(function(){
			$('#tanggal_lahir_edit').datepicker({format:'yyyy-mm-dd'});
			autoclose:true;
		});
		tampil();
		
		$('#datasiswa').DataTable({
			'paging'		:true,
			'lengthChange'	:true,
			'searching'		:true,
			'ordering'		:true,
			'info'			:true,
			'autoWidth'		:false

		});

		function tampil(){
			$.ajax({
				type   		:'ajax',
				url         :'<?php echo site_url('halaman/tampil_data');?>',
				async       :false,
				dataType    :'json',
				success     :function(data){
					var html  = '';
					var i;
					var no=0;

					for(i=0; i<data.length;i++){
						no++;
						html+='<tr>'+
									'<td>'+data[i].nim+'</td>'+
									'<td>'+data[i].nama+'</td>'+
									'<td>'+data[i].tanggal_lahir+'</td>'+
									'<td>'+data[i].jenis_kelamin+'</td>'+
									'<td>'+data[i].alamat+'</td>'+
									'<td>'+
									'<a href="javascript:void(0);" class=" glyphicon glyphicon-pencil btn btn-info item_edit" data-id_siswa="'+data[i].id_siswa+'" data-nim="'+data[i].nim+'" data-nama="'+data[i].nama+'" data-tanggal_lahir="'+data[i].tanggal_lahir+'"data-jenis_kelamin="'+data[i].jenis_kelamin+'" data-alamat="'+data[i].alamat+'"></a>'+' '+

									'<a href="javascript:void(0);" class="glyphicon glyphicon-remove btn btn-danger item_delete" data-id_siswa="'+data[i].id_siswa+'" data-nama="'+data[i].nama+'" data-tanggal_lahir="'+data[i].tanggal_lahir+'"data-jenis_kelamin="'+data[i].jenis_kelamin+'" data-alamat="'+data[i].alamat+'"></a>'+
									'</td>'+
									'</tr>';
					}
					$('#show_data').html(html);
				}
			});
		}

		$('#btn_save').on('click',function(){
			var nim   			=$('#nim').val();
			var nama 			=$('#nama').val();
			var tanggal_lahir =$('#tanggal_lahir').val();
			var jenis_kelamin =$('[name="jenis_kelamin"]:checked').val();
			var alamat        =$('#alamat').val();


			$.ajax({
				type  :   "POST",
				url       :"<?php echo site_url('halaman/simpan')?>",
				beforeSend:function(){
					          swal({
						        title:'Loading',
						        html:'Memproses data',
						        onOpen:()=>{swal.showLoading()}
					         })
				},
				dataType:"JSON",
				data:{nim:nim,nama:nama,tanggal_lahir:tanggal_lahir,jenis_kelamin:jenis_kelamin, alamat:alamat},
				success:function(data){
					swal({
						type:'success',
						title:'Tambah Siswa',
						text:'Anda berhasil menambah data Siswa baru'
					})
					$('[name="nim"]').val("");
					$('[name="nama"]').val("");
					$('[name="tanggal_lahir"]').val("");
					$('[name="jenis_kelamin"]').val("");
					$('[name="alamat"]').val("");
					$('#tambah_siswa').modal('hide');
					tampil();
					window.location.href='<?= site_url('halaman');?>';
				}
			});
			return false;
		});

		$('#show_data').on('click','.item_edit',function(){
			var id_siswa     	= $(this).data('id_siswa');
			var nim     		= $(this).data('nim');
			var nama   			= $(this).data('nama');
			var tanggal_lahir 	= $(this).data('tanggal_lahir');
			var jenis_kelamin 	= $(this).data('jenis_kelamin');
			var alamat  		= $(this).data('alamat');


			$('#edit_siswa').modal('show');
			$('[name="id_siswa_edit"]').val(id_siswa);
			$('[name="nim_edit"]').val(nim);
			$('[name="nama_edit"]').val(nama);
			$('[name="tanggal_lahir_edit"]').val(tanggal_lahir);
			$('[name="jenis_kelamin_edit"][value='+jenis_kelamin+']').prop('checked',true);
			$('[name="alamat_edit"]').val(alamat);
		});

		$('#btn_update').on('click',function(){
			var id_siswa   	 	=$('#id_siswa_edit').val();
			var nim  			=$('#nim_edit').val();
			var nama    		=$('#nama_edit').val();
			var tanggal_lahir 	=$('#tanggal_lahir_edit').val();
			var jenis_kelamin  =$('[name="jenis_kelamin_edit"]:checked').val();
			var alamat  		=$('#alamat_edit').val();

			$.ajax({
				type:"POST",
				url:"<?php echo site_url('halaman/update');?>",
				beforeSend:function(){
					swal({
						        title:'Menunggu',
						        html:'Memproses data',
						        onOpen:()=>{swal.showLoading()}
					         })
				},
				dataType:"JSON",
				data:{id_siswa:id_siswa,nim:nim,nama:nama , tanggal_lahir:tanggal_lahir, jenis_kelamin:jenis_kelamin,alamat:alamat},
				success:function(data){
					swal({
						type:'success',
						title:'Edit Data Mahasiswa',
						text:'Perubahan Data Berhasil disimpan'
					})
					$('[name="nim_edit"]').val("");
					$('[name="nama_edit"]').val("");
					$('[name="tanggal_lahir_edit"]').val("");
					$('[name="jenis_kelamin_edit"][value='+jenis_kelamin+']').prop('checked',true);
					$('[name="alamat_edit"]').val("");
					$('#edit_siswa').modal('hide');
					tampil();
					window.location.href='<?= site_url('halaman');?>';
				}
			});
			return false;
		});

		$('#show_data').on('click','.item_delete',function(){
			var id_siswa     	= $(this).data('id_siswa');
			var nim     		= $(this).data('nim');
			var nama   			= $(this).data('nama');
			var tanggal_lahir 	= $(this).data('tanggal_lahir');
			var jenis_kelamin 	= $(this).data('jenis_kelamin');
			var alamat  		= $(this).data('alamat');


			$('#hapus_siswa').modal('show');
			$('[name="id_siswa_hapus"]').val(id_siswa);
			$('[name="nim_hapus"]').val(id_siswa);
			$('[name="nama_hapus"]').val(nama);
			$('[name="tanggal_lahir_hapus"]').val(tanggal_lahir);
			$('[name="jenis_kelamin_hapus"]').val(jenis_kelamin);
			$('[name="alamat_hapus"]').val(alamat);
		});

		$('#btn_delete').on('click',function(){
			var id_siswa = $('#id_siswa_hapus').val();

			swal({
				title				:'Konfigurasi',
				text        		:'Anda Ingin Menghapus?',
				type        		:'Warning',
				showCancelButton	:true,
				confirmButtonText	:'Hapus',
				confirmButtonColor	:'#d33',
				cancelButtonColor	:'#3085d6',
				cancelButtonText	:'Tidak',
				reverseButtons		:true
			}).then((result) =>{
				if (result.value) {
					$.ajax({
						url:"<?php echo site_url('halaman/hapus');?>",
						method:"POST",
						beforeSend:function(){
							swal({
								title:'Loading',
								html:'Menghapus Data',
								onOpen:()=>{swal.showLoading()}
							})
						},
						data:{id_siswa:id_siswa},
						success:function(data){
							swal(
								'Hapus',
								'Berhasil Terhapus',
								'success'
								)
							$('[name="id_siswa_hapus"]').val("");
							$('[name="nim_hapus"]').val("");
							$('[name="nama_hapus"]').val("");
							$('[name="tanggal_lahir_hapus"]').val("");
							$('[name="jenis_kelamin_hapus"]').val("");
							$('[name="alamat_hapus"]').val("");
							$('#hapus_siswa').modal('hide');
							tampil();
						}
					})
				}else if(swal.DismissReason.cancel){
					swal(
						'Batal',
						'Anda Membatalkan Penghapusan',
						'error'
						)
						$('[name="id_siswa_hapus"]').val("");
						$('[name="nim_hapus"]').val("");
						$('[name="nama_hapus"]').val("");
						$('[name="tanggal_lahir_hapus"]').val("");
						$('[name="jenis_kelamin_hapus"]').val("");
						$('[name="alamat_hapus"]').val("");
						$('#hapus_siswa').modal('hide');
						tampil();
						window.location.href='<?= site_url('halaman');?>';
				}
			});
			return false;
		});
  

	})
</script>