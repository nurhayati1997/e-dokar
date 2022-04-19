<style>
/* The spinner */

@keyframes spinner {
  to {transform: rotate(360deg);}
}

.spinner,
.spinner:before {
  width: 20px;
  height: 20px;
  box-sizing: border-box;
}

.spinner:before {
  content: '';
  display: block;
  border-radius: 50%;
  border: 2px solid #ccc;
  border-top-color: #333;
  animation: spinner .6s linear infinite;
}

.spinner-absolute {
  position: absolute;
  top: 50%;
  left: 50%;
  margin-top: -10px;
  margin-left: -10px;
}

/* Animations */

.spinner-add,
.spinner-remove {
  animation-fill-mode: both;
  animation-duration: .4s;
}

.spinner-add {
  animation-name: spinner-add;
}

@keyframes spinner-add {
  from {transform: scale(0);}
  to {transform: scale(1);}
}

.spinner-remove {
  animation-name: spinner-remove;
}

@keyframes spinner-remove {
  to {transform: scale(0);}
}

  .bootstrap-select>.dropdown-toggle.bs-placeholder, .bootstrap-select>.dropdown-toggle.bs-placeholder:active, .bootstrap-select>.dropdown-toggle.bs-placeholder:focus, .bootstrap-select>.dropdown-toggle.bs-placeholder:hover{
    color: white;
  }
</style>
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Notice-->
								<!--end::Notice-->
								<!--begin::Card-->
								<div class="card card-custom gutter-b">
									<div class="card-header flex-wrap border-0 pt-6 pb-0">
										<div class="card-title">
											<h3 class="card-label">Data Pelatihan Karyawan 
											<span class="d-block text-muted pt-2 font-size-sm">UOBK RSUD SYAMRABU BANGKALAN</span></h3>
										</div>
                    <div class="card-body px-lg-5 py-lg-5">
											<?php if ($this->session->userdata("rule") == 1) { ?>
												<button type="button" class="btn btn-secondary"><a href="pelatihan_karyawan/exel/" target="_blank">Export Excel</a></button>
											<?php } ?>

                      <?php if ($this->session->userdata("rule") == 1 or $this->session->userdata("rule") == 2) { ?>
                        <button type="button" class="btn btn-success" onclick="tampil_input_modal()">Tambah Data</button>
                      <?php } ?>
                    </div>
                  </div>
									<div class="card-body">
										<!--begin: Datatable-->
										<div class="table-responsive" id="tempatTabel">
										</div>
			
									</div>
								</div>
								<!--end::Card-->
								<!--begin::Card-->
							</div>
							<!-- Tambah -->
								<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
									<div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
										<div class="modal-content">
											<div class="modal-body p-0">
												<div class="card bg-secondary border-0 mb-0">
													<div class="card-header bg-success pb-1">
														<div class="text-muted text-center mt-2 mb-3">
															<span class="text-white">Form Tambah Data Pelatihan Karyawan </span>
														</div>
													</div>
													<div class="card-body px-lg-5 py-lg-5">
														<form role="form">
															<div class="form-group mb-3">
																<span class="form-text text-muted">Pilih Nama</span>
																<select class="form-control" id="nama_karyawan">
																</select>
															</div>
															<div class="form-group mb-3">
																<span class="form-text text-muted">Masukkan Nama Pelatihan</span>
																<input type="text" class="form-control" id="nama_pelatihan" placeholder="Nama Acara Pelatihan" />
															</div>
															<div class="form-group mb-3">
																<span class="form-text text-muted">Masukkan Tanggal Mulai</span>
																<input type="date" class="form-control" id="tgl_mulai_pelatihan"/>
															</div>
															<div class="form-group mb-3">
																<span class="form-text text-muted">Masukkan Tanggal Selesai</span>
																<input type="date" class="form-control" id="tgl_selesai_pelatihan"/>
															</div>
															<div class="form-group mb-3">
																<span class="form-text text-muted">Masukkan Durasi Pelatihan</span>
																<input type="text" class="form-control" id="durasi_pelatihan" placeholder="Gunakan Huruf & Angka" />
															</div>
															<div class="form-group mb-3">
																<span class="form-text text-muted">Masukkan No Sertifikat</span>
																<input type="text" class="form-control" id="no_sertifikat" placeholder="Gunakan Huruf & Angka" />
															</div>

															<!-- <div class="form-group mb-3">
																<span class="form-text text-muted">Upload Sertifiikat Pelatihan</span>
																<div class="custom-file">
																	<input type="file" class="custom-file-input" id="file_sertifikat" />
																	<label class="custom-file-label" for="customFile">File Sertofokat Harus format pdf</label>
																</div>
															</div> -->

																		
														
															<div class="badge badge-danger" id="pesanErrorTambah"></div>
																<div class="text-center">
																<button type="button" id="simpan_button" class="btn btn-success my-2" onclick="tambah_baru()"><div id="loader"> </div> Simpan</button>
															</div>
														</form>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

							<!-- hapus -->
							<div class="modal fade" id="modalHapus" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header no-bd">
									<h5 class="modal-title">
										<span class="fw-mediumbold">
										Hapus Data</span>
										<span class="fw-light">
										Pelatihan Karyawan
										</span>
									</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									</div>
									<div class="modal-body">
									<p id="teksHapus"></p>
									<input type="hidden" id="id_hapus" name="id_hapus" />
									</div>
									<div class="modal-footer no-bd">
									<button type="button" id="hapus" onClick="hapus()" class="btn btn-primary">Hapus</button>
									<button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
									</div>
								</div>
								</div>
							</div>

							<!-- edit -->
								<div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
								  <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
										<div class="modal-content">
											<div class="modal-body p-0">
												<div class="card bg-secondary border-0 mb-0">
													<div class="card-header bg-success pb-1">
														<div class="text-muted text-center mt-2 mb-3">
															<span class="text-white">Form Edit Data Pelatihan Karyawan </span>
														</div>
													</div>
													<div class="card-body px-lg-5 py-lg-5">
														<form role="form">
															<div class="form-group mb-3">
																<input id="idUser" type="hidden">
																<span class="form-text text-muted">Masukkan Nama Pelatihan</span>
																<input type="text" class="form-control" id="edit_nama_pelatihan" placeholder="Nama Acara Pelatihan" />
															</div>
															<div class="form-group mb-3">
																<span class="form-text text-muted">Masukkan Tanggal Mulai</span>
																<input type="date" class="form-control" id="edit_tgl_mulai_pelatihan"/>
															</div>
															<div class="form-group mb-3">
																<span class="form-text text-muted">Masukkan Tanggal Selesai</span>
																<input type="date" class="form-control" id="edit_tgl_selesai_pelatihan"/>
															</div>
															<div class="form-group mb-3">
																<span class="form-text text-muted">Masukkan Durasi Pelatihan</span>
																<input type="text" class="form-control" id="edit_durasi_pelatihan" placeholder="Gunakan Huruf & Angka" />
															</div>
															<div class="form-group mb-3">
																<span class="form-text text-muted">Masukkan No Sertifikat</span>
																<input type="text" class="form-control" id="edit_no_sertifikat" placeholder="Gunakan Huruf & Angka" />
															</div>

															<div class="form-group mb-3">
																<span class="form-text text-muted">Upload Sertifiikat Pelatihan</span>
																<div class="custom-file">
																	<input type="file" class="custom-file-input" id="edit_file_sertifikat" />
																	<label class="custom-file-label" for="customFile">File Sertofokat Harus format pdf</label>
																</div>
															</div>

																		
														
															<div class="badge badge-danger" id="pesanErrorTambah"></div>
																<div class="text-center">
																<button type="button"  class="btn btn-success my-2" onClick="edit()" id="tombolEdit">Simpan</button>
															</div>
														</form>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
              
              
						<!-- Tambah sertifikat-->
							<div class="modal fade" id="modalsertifikat" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">	
								<div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
									<div class="modal-content">
										<div class="modal-body p-0">
											<div class="card bg-secondary border-0 mb-0">
												<div class="card-header bg-success pb-1">
													<div class="text-muted text-center mt-2 mb-3">
														<span class="text-white">Form Tambah Sertifikat Pelatihan Karyawan </span>
													</div>
												</div>
												<div class="card-body px-lg-5 py-lg-5">
													<form role="form">
														<div class="form-group mb-3">
															<div class="custom-file">
																<input type="file" class="custom-file-input" id="berkas_sertifikat" accept="application/pdf" />
																<label class="custom-file-label" for="berkas_sertifikat">Foto Harus format PDF</label>
															</div>
														</div>

														
														<div id="div_upload_sertifikat">
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
              
              
						<!-- View-->
							<div class="modal fade" id="modalview" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">	
								<div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
									<div class="modal-content">
										<div class="modal-body p-0">
											<div class="card bg-secondary border-0 mb-0">
												<div class="card-header bg-success pb-1">
													<div class="text-muted text-center mt-2 mb-3">
														<span class="text-white">Data Pelatihan Karyawan </span>
													</div>
												</div>
												<div class="card-body px-lg-5 py-lg-5">
																				<form role="form">
																					<div class="form-group mb-1">
																						<span class="form-text text-muted">Nama Pelatihan</span>
																		<input id="idUser" type="hidden">
																						<input type="text" class="form-control" id="view_nama_pelatihan" disabled/>
																					</div>
																					<div class="form-group mb-1">
																						<span class="form-text text-muted">Durasi Pelatihan</span>
																						<input type="text" class="form-control" id="view_durasi_pelatihan" disabled/>
																					</div>
																					<div class="form-group mb-1">
																						<span class="form-text text-muted">Mulai Pelatihan</span>
																						<input type="text" class="form-control" id="view_tgl_mulai_pelatihan" disabled/>
																					</div>
																					<div class="form-group mb-1">
																						<span class="form-text text-muted">Selesai Pelatihan</span>
																						<input type="text" class="form-control" id="view_tgl_selesai_pelatihan" disabled/>
																					</div>
																					<div class="form-group mb-3">
																						<span class="form-text text-muted">No Sertifikat</span>
																						<input type="text" class="form-control" id="view_no_sertifikat" disabled />
																					</div>
                                          <!--begin::Item-->
                                          <div class="d-flex align-items-center mb-9 bg-light-warning rounded p-5">
                                            <!--begin::Icon-->
                                            <span class="svg-icon svg-icon-warning mr-5">
                                              <span class="svg-icon svg-icon-lg">
                                                <!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/Home/Library.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
                                                    <rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
                                                  </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                              </span>
                                            </span>
                                            <!--end::Icon-->
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                              <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1" id="view_file_sertifikat">File Sertifikat</a>
                                            </div>
                                          </div>

																				</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>


							<!--end::Container-->
						</div>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
  var random_all = '';
  tampilkan();

    function tampilkan(){
      $("#tempatTabel").html('<i class="fas fa-spinner fa-pulse"></i> Memuat...')
      var baris = '<table class="table table-separate table-head-custom table-checkable" id="tabelUser"><thead class="thead-light"><tr><th>Action</th><th>NO</th><th>Tanggal Pengisian</th><th>Nama</th><th>Pelatihan</th><th>Durasi</th><th>No Sertifikat</th><th>Mulai</th><th>Selesai</th></tr></thead>'
        $.ajax({
          type:'POST',
          url: '<?= base_url() ?>pelatihan_karyawan/tampil',
          dataType :'json',
          success: function(data){
          //console.log(data);
            for (let i = 0; i < data.length; i++) {
              baris += '<tr>'
              baris += '<td><div style="cursor:pointer;" title="hapus?" id="hapus' + data[i].id + '" onClick="tryHapus(' + data[i].id+ ')"><i class="flaticon-delete text-danger"></i></div>'
              baris += ' <div style="cursor:pointer;" title="Upload Sertifikat?"  id="sertifikat' + data[i].id + '" onClick="tampil_modal_sertifikat(' + data[i].id+ ')"><i class="flaticon2-open-box text-warning"></i></div>'
              baris += ' <div style="cursor:pointer;" title="view?" id="view' + data[i].id + '" onClick="tryView(' + data[i].id+ ')"><i class="flaticon-eye text-primary"></i></div>'
              baris += '<td>' + (i + 1) + '</td>'
              baris += '<td>' + data[i].tgl_update + '</td>'
              baris += '<td>' + data[i].nama + '</td>'
              baris += '<td>' + data[i].nama_pelatihan + '</td>'
              baris += '<td>' + data[i].durasi_pelatihan + '</td>'
              // baris += '<td>' + data[i].email + '</td>'
              baris += '<td>' + data[i].no_sertifikat + '</td>'
              // baris += '<td>' + data[i].file_sertifikat + '</td>'
              baris += '<td>' + data[i].tgl_mulai_pelatihan+ '</td>'
              baris += '<td>' + data[i].tgl_selesai_pelatihan+ '</td>'
              baris += '</td></tr>'
            }
            baris += '</tbody></table>'
            $("#tempatTabel").html(baris);
            $('#tabelUser').DataTable({
              "pageLength": 20,
            });
          }
        });
    }

    function tampil_modal_sertifikat(id){
      document.getElementById("berkas_sertifikat").value = "";

      var tombol = '<button type="button" onclick="pernyataan_sertifikat('+id+')" id="simpan_pernyataan_sertifikat" class="btn btn-block btn-info"><div id="loader_upload_sertifikat"> </div> Simpan</button>';
      $("#div_upload_sertifikat").html(tombol);
      $('#modalsertifikat').modal('show');
    }

	  function pernyataan_sertifikat(id) {
      // console.log(id);
      if(document.getElementById("berkas_sertifikat").value == ""){
        document.getElementById("berkas_sertifikat").focus();
      } else{
        var format = $('#berkas_sertifikat').prop('files')[0].type;
        if (format.includes('pdf')) {
          var form_data = new FormData();
          form_data.append('id', id);
        //   form_data.append('jenis', document.getElementById("jenis_pernyataan").value);
          form_data.append('berkas_sertifikat', $('#berkas_sertifikat').prop('files')[0]);

          $.ajax({
            type: 'POST',
            data: form_data,
            url: '<?= base_url() ?>pelatihan_karyawan/upload_pernyataan_sertifikat',
            processData:false,
            contentType:false,
            cache:false,
            dataType: 'json',
            beforeSend: function () {
              $('#simpan_pernyataan_sertifikat').attr('disabled', true);
              $('#loader_upload_sertifikat').html('');
              addSpinner($('#loader_upload_sertifikat'));
            },
            success: function(data) {
              // alert(data);
              // console.log(data);
              $('#simpan_pernyataan_sertifikat').attr('disabled', false);
              removeSpinner($('#loader_upload_sertifikat'), function () {
                $('#loader_upload_sertifikat').html('');
              });
            //   ambil_data();
              $('#modalsertifikat').modal('hide');
              Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Data Berhasil Diupload',
                showConfirmButton: false,
                timer: 2500
              });
            }
          });
        }else{
           Swal.fire({
              position: 'center',
              icon: 'error',
              title: 'Type file harus PDF atau JPEG atau JPG',
              showConfirmButton: false,
              timer: 2500
            });
        }
      }
  	}

    function tryView(id) {
      $("#tombolView" + id).html('<i class="fas fa-spinner fa-pulse"></i>')
      $("#idUser").val(id)
      $.ajax({
      url: '<?= base_url() ?>pelatihan_karyawan/edit_id',
      method: 'post',
      data: "target=pelatihan_karyawan&id=" + id,
      dataType: 'json',
      success: function(data) {
        $("#view_file_sertifikat").html('');

        // $("#view_foto").html('<img src="'+base_url+'assets/foto_karyawan/'+data.foto+'">');

        $("#modalview").modal('show')
        $("#view_nama").val(data.nama)
        $("#view_nama_pelatihan").val(data.nama_pelatihan)
        $("#view_tgl_mulai_pelatihan").val(data.tgl_mulai_pelatihan)
        $("#view_tgl_selesai_pelatihan").val(data.tgl_selesai_pelatihan)
        $("#view_durasi_pelatihan").val(data.durasi_pelatihan)
        $("#view_no_sertifikat").val(data.no_sertifikat)
        $("#view_file_sertifikat").val(data.file_sertifikat)


        if(data.file_sertifikat!=null){
          var link = ' <a href="<?= base_url() ?>assets/arsip_karyawan/'+data.file_sertifikat+'" target="_blank">Sertifikat Pelatihan</a>';
          $("#view_file_sertifikat").html(link);
        }
        console.log(data)
        $("#view" + id).html('<i class="fa fa-edit"></i>')
      }
      });
	  }

  
    function get_nama() {
      $.ajax({
          type: 'POST',
          url: '<?= base_url() ?>pelatihan_karyawan/get_nama_karyawan',
          dataType: 'json',
          success: function(data) {
              var html = '<option value="">-Pilih Karyawan-</option>';
              for (var i = 0; i < data.length; i++) {
                  html += '<option value="' + data[i].id + '">' +  data[i].nama +'</option>';
              }
              $("#nama_karyawan").html(html);
          }
      });
    }

  function reset_form(){
    random_all = '';
    document.getElementById('nama_karyawan').value = "";
    document.getElementById('nama_pelatihan').value = "";
    document.getElementById('tgl_mulai_pelatihan').value = "";
    document.getElementById('tgl_selesai_pelatihan').value = "";
    document.getElementById('durasi_pelatihan').value = "";
    document.getElementById('no_sertifikat').value = "";
  }

  function tampil_input_modal(){
    get_nama();
    reset_form();
    // get_random();
    // get_nrm();
    $('#modalTambah').modal('show');
  }


  function tambah_baru() {
      if (document.getElementById('nama_pelatihan').value == "") {
          document.getElementById('nama_pelatihan').focus();
      } else if(document.getElementById('nama_karyawan').value == "") {
          document.getElementById('nama_karyawan').focus();
      } else {
          $.ajax({
              type: 'POST',
              data: 'nama_pelatihan=' + document.getElementById("nama_pelatihan").value + '&tgl_mulai_pelatihan=' + document.getElementById('tgl_mulai_pelatihan').value
              + '&nama_karyawan=' +  document.getElementById('nama_karyawan').value + '&tgl_selesai_pelatihan=' +  document.getElementById('tgl_selesai_pelatihan').value
              + '&durasi_pelatihan=' +  document.getElementById('durasi_pelatihan').value + '&no_sertifikat=' +  document.getElementById('no_sertifikat').value,
              url: '<?= base_url() ?>pelatihan_karyawan/tambah_pelatihan',
              dataType: 'json',
              beforeSend: function () {
                $('#simpan_button').attr('disabled', true);
                $('#loader').html('');
                addSpinner($('#loader'));
              },
              success: function(data) {
                 console.log(data);
                 tampilkan()
                
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Data Berhasil Ditambahkan',
                    showConfirmButton: false,
                    timer: 1500
                });
                $('#simpan_button').attr('disabled', false);
                removeSpinner($('#loader'), function () {
                  $('#loader').html('');
                });
                $('#modalTambah').modal('hide');
              }
          });
      }
  }


  function tryHapus(id) {
    $("#hapus" + id).html('<i class="fas fa-spinner fa-pulse"></i>')
    $.ajax({
      url: '<?= base_url() ?>pelatihan_karyawan/edit_id',
      method: 'post',
      data: "target=pelatihan_karyawan&id=" + id,
      dataType: 'json',
      success: function(data) {
        $("#id_hapus").val(id)
        $("#teksHapus").html("apakah anda yakin ingin menghapus data ? '")

        $("#hapus" + id).html('<i class="fa fa-times"></i>')
      }
    });
    $("#modalHapus").modal('show')
  }

  function hapus() {
    $("#hapus").html('<i class="fas fa-spinner fa-pulse"></i> Memproses..')
    var id = $("#id_hapus").val()
    $.ajax({
      url: '<?= base_url() ?>pelatihan_karyawan/hapus',
      method: 'post',
      data: "target=pelatihan_karyawan&id=" + id,
      dataType: 'json',
      success: function(data) {
        $("#id_hapus").val("")
        $("#teksHapus").html("")
        tampilkan()
        $("#modalHapus").modal('hide')
        $("#hapus").html('Hapus')
      }
    });
  }


  function tryEdit(id) {
    $("#tombolEdit" + id).html('<i class="fas fa-spinner fa-pulse"></i>')
    $("#idUser").val(id)
    $.ajax({
      url: '<?= base_url() ?>pelatihan_karyawan/edit_id',
      method: 'post',
      data: "target=pelatihan_karyawan&id=" + id,
      dataType: 'json',
      success: function(data) {
        $("#modalEdit").modal('show')
        $("#edit_nama_pelatihan").val(data.nama_pelatihan)
        $("#edit_tgl_mulai_pelatihan").val(data.tgl_mulai_pelatihan)
        $("#edit_tgl_selesai_pelatihan").val(data.tgl_selesai_pelatihan)
        $("#edit_durasi_pelatihan").val(data.durasi_pelatihan)
        $("#edit_no_sertifikat").val(data.no_sertifikat)
        $("#edit_file_sertifikat").val(data.file_sertifikat)
        console.log(data)
        $("#edit" + id).html('<i class="fa fa-edit"></i>')
      }
    });
  }

  function edit() {
    $("#tombolEdit").html('<i class="fas fa-spinner fa-pulse"></i> Memproses..')
    var nama_pelatihan = $("#edit_nama_pelatihan").val()
    var tgl_mulai_pelatihan = $("#edit_tgl_mulai_pelatihan").val()
    var tgl_selesai_pelatihan = $("#edit_tgl_selesai_pelatihan").val()
    var durasi_pelatihan = $("#edit_durasi_pelatihan").val()
    var no_sertifikat = $("#edit_no_sertifikat").val()
    var file_sertifikat = $("#edit_file_sertifikat").val()
    var id = $("#idUser").val()
    $.ajax({
      url: '<?= base_url() ?>pelatihan_karyawan/edit',
      method: 'post',
      data: {
        nama_pelatihan: nama_pelatihan,
        tgl_mulai_pelatihan: tgl_mulai_pelatihan,
        tgl_selesai_pelatihan: tgl_selesai_pelatihan,
        durasi_pelatihan: durasi_pelatihan,
        no_sertifikat: no_sertifikat,
        file_sertifikat: file_sertifikat
      },
      dataType: 'json',
      success: function(data) {
        if (data == "") {
			$("#idUser").val("")
			$("#nama_pelatihan").val("")
			$("#tgl_mulai_pelatihan").val("")
			$("#tgl_selesai_pelatihan").val("")
			$("#durasi_pelatihan").val("")
			$("#no_sertifikat").val("")
			$("#file_sertifikat").val("")
			// console.log(data)
        } else {
          $('#pesanErrorEdit').html(data)
        }
        $("#modalEdit").modal('hide');
        tampilkan();
        $("#tombolEdit").html('Simpan')
      }
    });
  }

function addSpinner(el, static_pos)
{
  var spinner = el.children('.spinner');
  if (spinner.length && !spinner.hasClass('spinner-remove')) return null;
  !spinner.length && (spinner = $('<div class="spinner' + (static_pos ? '' : ' spinner-absolute') + '"/>').appendTo(el));
  animateSpinner(spinner, 'add');
}

function removeSpinner(el, complete)
{
  var spinner = el.children('.spinner');
  spinner.length && animateSpinner(spinner, 'remove', complete);
}

function removeSpinner(el, complete)
{
  var spinner = el.children('.spinner');
  spinner.length && animateSpinner(spinner, 'remove', complete);
}

function animateSpinner(el, animation, complete)
{
  if (el.data('animating')) {
    el.removeClass(el.data('animating')).data('animating', null);
    el.data('animationTimeout') && clearTimeout(el.data('animationTimeout'));
  }
  el.addClass('spinner-' + animation).data('animating', 'spinner-' + animation);
  el.data('animationTimeout', setTimeout(function() { animation == 'remove' && el.remove(); complete && complete(); }, parseFloat(el.css('animation-duration')) * 1000));
}

</script>