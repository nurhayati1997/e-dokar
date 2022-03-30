						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Notice-->
								<!--end::Notice-->
								<!--begin::Card-->
								<div class="card card-custom gutter-b">
									<div class="card-header flex-wrap border-0 pt-6 pb-0">
										<div class="card-title">
											<h3 class="card-label">Data Karyawan 
											<span class="d-block text-muted pt-2 font-size-sm">UOBK RSUD SYAMRABU BANGKALAN</span></h3>
										</div>
										<button type="button" class="btn btn-success" onClick="tryTambah()">Tambah Data</button>
									</div>
									<div class="card-body">
										<!--begin: Datatable-->
										<div class="table-responsive" id="tempatTabel">
										</div>
										<!-- <table class="table table-separate table-head-custom table-checkable" id="kt_datatable1">
											<thead>
												<tr>
													<th>NO</th>
													<th>Tgl Daftar</th>
													<th>NAMA</th>
													<th>NIK</th>
													<th>No Hp</th>
													<th>Umur</th>
													<th>Status</th>
													<th>Actions</th>
												</tr>
											</thead>
											<tbody>
											</tbody>
										</table> -->
										<!--end: Datatable-->
									</div>
								</div>
								<!--end::Card-->
								<!--begin::Card-->
							</div>
							<!-- Tambah -->
								<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
									<div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
										<div class="modal-content">
											<div class="modal-body p-0">
												<div class="card bg-secondary border-0 mb-0">
													<div class="card-header bg-success pb-1">
														<div class="text-muted text-center mt-2 mb-3">
															<span class="text-muted text-black">Form Tambah Data Karyawan </span>
														</div>
													</div>
													<div class="card-body px-lg-5 py-lg-5">
														<form role="form">
															<div class="form-group mb-3">
																<span class="form-text text-muted">Masukkan Id Karyawan</span>
																<input type="text" class="form-control" id="id_karyawan" placeholder="ID Karyawan" />
															</div>
															<div class="form-group mb-3">
																<span class="form-text text-muted">Masukkan Nama Lengkap</span>
																<input type="text" class="form-control" id="nama" placeholder="Nama Lengkap Karyawan" />
															</div>
															<div class="form-group mb-3">
																<span class="form-text text-muted">Masukkan Email</span>
																<input type="email" class="form-control" id="email" placeholder="abcd@gmail.com" />
															</div>
															<div class="form-group mb-3">
																<span class="form-text text-muted">Masukkan Password</span>
																<input type="password" class="form-control" id="password" placeholder="Gunakan Huruf & Angka" />
															</div>
															<div class="form-group mb-3">
																<span class="form-text text-muted">Pilih Hak Akses</span>
																<select class="form-control" id="rule">
																	<option value="1">1.Kepegawaian</option>
																	<option value="2">2.Diklat</option>
																	<option value="3">3.Karyawan</option>
																</select>
															</div>
															<div class="form-group mb-3">
																<span class="form-text text-muted">Pilih Jabatan</span>
																<select class="form-control" id="jabatan">
																	<option value="Direktur">Direktur</option>
																	<option value="Wadir">Wadir</option>
																	<option value="KA.BAG">KA.BAG</option>
																	<option value="KA.BID">KA.BID</option>
																	<option value="KA.Subag">KA.Subag</option>
																	<option value="KA.Instalasi">KA.Instalasi</option>
																	<option value="KA.Ruangan">KA.Ruangan</option>
																	<option value="KA.Unit">KA.Unit</option>
																	<option value="Staff">Staff</option>
																	<option value="Unit">Unit</option>
																</select>
															</div>
															<div class="form-group mb-3">
																<span class="form-text text-muted">Pilih Status</span>
																<select class="form-control" id="status_karyawan">
																	<option value="PNS">PNS</option>
																	<option value="PPPK">PPPK</option>
																	<option value="THL">THL</option>
																	<option value="Kontrak">Kontrak</option>
																	<option value="Unit">Unit</option>
																</select>
															</div>

															<div class="badge badge-danger" id="pesanErrorTambah"></div>
																<div class="text-center">
																<button type="button" onClick="tambah()" id="tombolTambah" class="btn btn-success my-2">Tambah</button>
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
										Karyawan
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
									<div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
										<div class="modal-content">
											<div class="modal-body p-0">
											<div class="card bg-secondary border-0 mb-0">
												<div class="card-header bg-success pb-1">
												<div class="text-muted text-center mt-2 mb-3">
													<span class="text-muted text-black">Form Edit Data Karyawan </span>
												</div>
												</div>
												<div class="card-body px-lg-5 py-lg-5">
												<form role="form">
													<div class="form-group mb-3">
													<input id="idUser" type="hidden">
													<select class="form-control" id="status">
														<option value="Belum dilayani"> Belum dilayani</option>
														<option value="Sudah dilayani">Sudah diLayani</option>
													</select>
													</div>
													<div class="form-group mb-3">
													<span class="form-text text-muted">Masukkan Tgl Pelayanan</span>
													<input type="date" class="form-control" id="tgl_sudah_dilayani" placeholder="Tgl Sudah dilayani" />
													</div>
													<div class="badge badge-danger" id="pesanErrorEdit"></div>
													<div class="text-center">
													<button type="button" onClick="edit()" id="tombolEdit" class="btn btn-success my-2">Tambah</button>
													</div>
												</form>
												</div>
											</div>
											</div>
										</div>
									</div>
								</div>

							<!-- view -->
								<div class="modal fade" id="modalView" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
									<div class="modal-dialog modal- modal-dialog-centered modal-xl" role="document">
										<div class="modal-content">
											<div class="modal-body p-0">
											<div class="card bg-secondary border-0 mb-0">
												<div class="card-header bg-success pb-1">
												<div class="text-muted text-center mt-2 mb-3">
													<span class="text-muted text-white">Data Pasien</span>
												</div>
												</div>
												<div class="card-body px-lg-5 py-lg-5">
												<!--begin::Form-->
												<form class="form">
												<div class="card-body">
													<div class="form-group row">
													<div class="col-lg-4">
														<!-- <label>Jenis:</label> -->
														<span class="form-text text-muted">Pilih Jenis Test SWAB</span>
														<select class="form-control" id="jenis_swab" disabled>
														<option value="Antigen">Antigen</option>
														<option value="PCR">PCR</option>
														</select>
													</div>
													<div class="col-lg-4">
														<!-- <label>Jenis:</label> -->
														<span class="form-text text-muted">Tujuan Test SWAB</span>
														<select class="form-control" id="tujuan_swab">
														<option value="Screening/Diagnosa">Screening/Diagnosa</option>
														<option value="Perjalanan">Perjalanan</option>
														</select>
													</div>
													<div class="col-lg-4">
														<label>A. IDENTITAS PASIEN:</label>
														<span class="form-text text-muted">Mohon Masukkan Nama Lengkap Anda</span>
														<input type="text" class="form-control" id="nama" placeholder="Nama Lengkap" disabled />
													</div>
													<div class="col-lg-4">
														<!-- <label>Email:</label> -->
														<span class="form-text text-muted">Mohon Masukkan NIK Sesuai KTP</span>
														<input type="text" class="form-control" id="nik" placeholder="NIK" disabled />
													</div>
													<div class="col-lg-4">
														<!-- <label>Username:</label> -->
														<span class="form-text text-muted">Masukkan Nama Orang tua sesuai KK</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-user"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="nama_ortu" placeholder="Nama Orang Tua" disabled/>
														</div>
													</div>
													<div class="col-lg-4">
														<!-- <label>Email:</label> -->
														<span class="form-text text-muted">Mohon Masukkan Tgl Lahir Sesuai KTP</span>
														<input type="date" class="form-control" id="ttl" placeholder="Pilih Tanggal" disabled />
													</div>
													<div class="col-lg-4">
														<!-- <label>Username:</label> -->
														<span class="form-text text-muted">Masukkan Umur Anda</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="umur" placeholder="Umur" disabled/>
														</div>
													</div>
													<div class="col-lg-4">
														<!-- <label>Jenis:</label> -->
														<span class="form-text text-muted">Pilih Jenis Kelamin</span>
														<select class="form-control" id="jk" disabled>
														<option value="Laki-Laki">Laki-Laki</option>
														<option value="Perempuan">Perempuan</option>
														</select>
													</div>
													<div class="col-lg-4">
														<!-- <label>Username:</label> -->
														<span class="form-text text-muted">Masukkan Pekerjaan Anda Sesuai KTP</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="pekerjaan" placeholder="Pekerjaan" disabled/>
														</div>
													</div>
													<div class="col-lg-4">
														<!-- <label>Email:</label> -->
														<span class="form-text text-muted">Mohon Masukkan Jalan / Blok</span>
														<input type="text" class="form-control" id="jalan" placeholder="Jalan / Blok" disabled/>
													</div>
													<div class="col-lg-4">
														<!-- <label>Email:</label> -->
														<span class="form-text text-muted">Mohon Masukkan RT / RW</span>
														<input type="text" class="form-control" id="rt" placeholder="RT / RW" disabled/>
													</div>
													<div class="col-lg-4">
														<!-- <label>Email:</label> -->
														<span class="form-text text-muted">Mohon Masukkan Desa / Kelurahan</span>
														<input type="text" class="form-control" id="desa" placeholder="Desa / Kelurahan" disabled/>
													</div>
													<div class="col-lg-4">
														<!-- <label>Email:</label> -->
														<span class="form-text text-muted">Mohon Masukkan Kecamatan</span>
														<input type="text" class="form-control" id="kec" placeholder="Kecamatan" disabled/>
													</div>
													<div class="col-lg-4">
														<!-- <label>Email:</label> -->
														<span class="form-text text-muted">Mohon Masukkan Kabupaten / Kota</span>
														<input type="text" class="form-control" id="kab" placeholder="Kabupaten / Kota" disabled/>
													</div>
													<div class="col-lg-4">
														<!-- <label>Username:</label> -->
														<span class="form-text text-muted">Masukkan Telp / HP</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="no_hp" placeholder="Telepon / HP" disabled/>
														</div>
													</div>
													</div>
													<div class="form-group row">
													<div class="col-lg-4">
														<label>B. INFORMASI KLINIS:</label>
														<span class="form-text text-muted">Masukkan Tgl Pertama kali Timbul gejala</span>
														<input type="date" class="form-control" id="timbul_gejala" placeholder="Tgl pertama kali timbul gejala" disabled/>
													</div>
													<div class="col-lg-4">
														<!-- <label>Jenis:</label> -->
														<span class="form-text text-muted">Apakah ada Riwayat Demam ?</span>
														<select class="form-control" id="riwayat_demam" disabled>
														<option value="Ya">Ya</option>
														<option value="Tidak">Tidak</option>
														</select>
													</div>
													<div class="col-lg-4">
														<!-- <label>Fax:</label> -->
														<span class="form-text text-muted">Masukkan Derajat Demam</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="derajat_demam" placeholder="Misal 39 " disabled />
														</div>
													</div>
													<div class="col-lg-4">
														<!-- <label>Jenis:</label> -->
														<span class="form-text text-muted">Apakah ada Batuk?</span>
														<select class="form-control" id="riwayat_batuk" disabled>
														<option value="Ya">Ya</option>
														<option value="Tidak">Tidak</option>
														<option value="Tidak Tahu">Tidak Tahu</option>
														</select>
													</div>
													<div class="col-lg-4">
														<!-- <label>Jenis:</label> -->
														<span class="form-text text-muted">Apakah ada Pilek?</span>
														<select class="form-control" id="riwayat_pilek" disabled>
														<option value="Ya">Ya</option>
														<option value="Tidak">Tidak</option>
														<option value="Tidak Tahu">Tidak Tahu</option>
														</select>
													</div>
													<div class="col-lg-4">
														<!-- <label>Jenis:</label> -->
														<span class="form-text text-muted">Apakah ada Sakit Tenggorokan?</span>
														<select class="form-control" id="riwayat_sakit_tenggorokan" disabled>
														<option value="Ya">Ya</option>
														<option value="Tidak">Tidak</option>
														<option value="Tidak Tahu">Tidak Tahu</option>
														</select>
													</div>
													<div class="col-lg-4">
														<!-- <label>Jenis:</label> -->
														<span class="form-text text-muted">Apakah ada Sakit Kepala?</span>
														<select class="form-control" id="riwayat_sakit_kepala" disabled>
														<option value="Ya">Ya</option>
														<option value="Tidak">Tidak</option>
														<option value="Tidak Tahu">Tidak Tahu</option>
														</select>
													</div>
													<div class="col-lg-4">
														<!-- <label>Jenis:</label> -->
														<span class="form-text text-muted">Apakah Lemah (malaise)?</span>
														<select class="form-control" id="lemah" disabled>
														<option value="Ya">Ya</option>
														<option value="Tidak">Tidak</option>
														<option value="Tidak Tahu">Tidak Tahu</option>
														</select>
													</div>
													<div class="col-lg-4">
														<!-- <label>Jenis:</label> -->
														<span class="form-text text-muted">Apakah Nyeri Otot?</span>
														<select class="form-control" id="nyeri_otot" disabled>
														<option value="Ya">Ya</option>
														<option value="Tidak">Tidak</option>
														<option value="Tidak Tahu">Tidak Tahu</option>
														</select>
													</div>
													<div class="col-lg-4">
														<!-- <label>Jenis:</label> -->
														<span class="form-text text-muted">Apakah Nyeri Mual atau Muntah?</span>
														<select class="form-control" id="mual" disabled>
														<option value="Ya">Ya</option>
														<option value="Tidak">Tidak</option>
														<option value="Tidak Tahu">Tidak Tahu</option>
														</select>
													</div>
													<div class="col-lg-4">
														<!-- <label>Jenis:</label> -->
														<span class="form-text text-muted">Apakah Nyeri Abdomen?</span>
														<select class="form-control" id="abdomen" disabled>
														<option value="Ya">Ya</option>
														<option value="Tidak">Tidak</option>
														<option value="Tidak Tahu">Tidak Tahu</option>
														</select>
													</div>
													<div class="col-lg-4">
														<!-- <label>Jenis:</label> -->
														<span class="form-text text-muted">Apakah Diare?</span>
														<select class="form-control" id="diare" disabled>
														<option value="Ya">Ya</option>
														<option value="Tidak">Tidak</option>
														<option value="Tidak Tahu">Tidak Tahu</option>
														</select>
													</div>
													</div>
													<div class="form-group row">
													<div class="col-lg-4">
														<label>KONDISI PENYERTA:</label>
														<span class="form-text text-muted">Apakah Hamil ?</span>
														<select class="form-control" id="hamil" disabled>
														<option value="Ya">Ya</option>
														<option value="Tidak">Tidak</option>
														</select>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Apakah ada Diabetes ?</span>
														<select class="form-control" id="diabetes" disabled>
														<option value="Ya">Ya</option>
														<option value="Tidak">Tidak</option>
														</select>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Apakah ada Penyakit Jantung ?</span>
														<select class="form-control" id="jantung" disabled>
														<option value="Ya">Ya</option>
														<option value="Tidak">Tidak</option>
														</select>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Apakah ada Hipertensi ?</span>
														<select class="form-control" id="hipertensi" disabled>
														<option value="Ya">Ya</option>
														<option value="Tidak">Tidak</option>
														</select>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Apakah ada Keganasan ?</span>
														<select class="form-control" id="keganasan" disabled>
														<option value="Ya">Ya</option>
														<option value="Tidak">Tidak</option>
														</select>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Apakah ada Gangguan Imunologi ?</span>
														<select class="form-control" id="gangguan_imunologi" disabled>
														<option value="Ya">Ya</option>
														<option value="Tidak">Tidak</option>
														</select>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Apakah ada Gagal Ginjal  Kronis ?</span>
														<select class="form-control" id="gagal_ginjal" disabled>
														<option value="Ya">Ya</option>
														<option value="Tidak">Tidak</option>
														</select>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Apakah ada Gangguan Hati Kronis ?</span>
														<select class="form-control" id="gangguan_hati" disabled>
														<option value="Ya">Ya</option>
														<option value="Tidak">Tidak</option>
														</select>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Apakah ada PPOK ?</span>
														<select class="form-control" id="ppok" disabled>
														<option value="Ya">Ya</option>
														<option value="Tidak">Tidak</option>
														</select>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Lainnya, Sebutkan :</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="kondisi_penyerta_lain" placeholder="Kondisi Penyerta Lain" disabled/>
														</div>
													</div>
													</div>
													<div class="form-group row">
													<div class="col-lg-4">
														<label>DIAGNOSIS:</label>
														<span class="form-text text-muted">Apakah ada Pneumonia (Klinis atau Radiologi) ?</span>
														<select class="form-control" id="pneumonia" disabled>
														<option value="Ya">Ya</option>
														<option value="Tidak">Tidak</option>
														<option value="Tidak Tahu">Tidak Tahu</option>
														</select>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Apakah ada ARDS (Acute Respiratory Distress Syndrome) ?</span>
														<select class="form-control" id="ards" disabled>
														<option value="Ya">Ya</option>
														<option value="Tidak">Tidak</option>
														<option value="Tidak Tahu">Tidak Tahu</option>
														</select>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Diagnosis Lainnya, Sebutkan :</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="diagnosis_lain" placeholder="Diagnosis Lain" disabled/>
														</div>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Apakah Pasien Mempunyai diagnosis atau otiologi lain untuk penyakit Pernafasannya ?</span>
														<select class="form-control" id="etiologi" disabled>
														<option value="Ya">Ya</option>
														<option value="Tidak">Tidak</option>
														<option value="Tidak Tahu">Tidak Tahu</option>
														</select>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Diagnosis Penyaki Pernafasan Lainnya, Sebutkan :</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="diagnosis_pernafasan_lain" placeholder="Diagnosis Penyakit Pernafasan Lain" disabled/>
														</div>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Apakah Pasien dirawat di rumah sakit ?</span>
														<select class="form-control" id="rawat_rs" disabled>
														<option value="Ya">Ya</option>
														<option value="Tidak">Tidak</option>
														</select>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Bila Ya, Nama RS Terakhir :</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="rs_terakhir" placeholder="isi (-) jika tidak dirawat di rs" disabled/>
														</div>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Tanggal Masuk RS Terakhir :</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="date" class="form-control" id="tgl_masuk_rs" disabled/>
														</div>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Apakah Pasien dirawat di ICU ?</span>
														<select class="form-control" id="rawat_icu" disabled>
														<option value="Ya">Ya</option>
														<option value="Tidak">Tidak</option>
														</select>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Apakah di lakukan tindakan perawatan intubasi ?</span>
														<select class="form-control" id="tindakan_intubasi" disabled>
														<option value="Ya">Ya</option>
														<option value="Tidak">Tidak</option>
														</select>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Apakah di lakukan tindakan perawatan penggunaan EMCO ?</span>
														<select class="form-control" id="penggunaan_emco" disabled>
														<option value="Ya">Ya</option>
														<option value="Tidak">Tidak</option>
														</select>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Jika ada, nama-nama RS sebelumnya :</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="rs_sebelumnya" placeholder="isi (-) jika tidak" disabled/>
														</div>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Status Pasien terakhir : </span>
														<select class="form-control" id="status_pasien_terakhir" disabled>
														<option value="Selesai Isolasi / Sembuh">Selesai Isolasi / Sembuh</option>
														<option value="Masih Sakit">Masih Sakit</option>
														<option value="Meninggal">Meninggal</option>
														</select>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Jika Meninggal, Tanggal Meninggal :</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="date" class="form-control" id="tgl_meninggal" disabled/>
														</div>
													</div>
													</div>
													<div class="form-group row">
													<!-- luar negeri -->
													<div class="col-lg-4">
														<label>C.Faktor Riwayat Perjalanan:</label>
														<span class="form-text text-muted">Dalam 14 hari sebelum sakit, apakah memiliki riwayat perjalanan dari luar negeri ?</span>
														<select class="form-control" id="riwayat_luar_negeri" disabled>
														<option value="Ya">Ya</option>
														<option value="Tidak">Tidak</option>
														<option value="Tidak Tahu">Tidak Tahu</option>
														</select>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Sebutkan Negara Pertama</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="negara_1" placeholder="Negara pertama " disabled/>
														</div>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Sebutkan Kota Pertama</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="kota_1" placeholder="Kota pertama " disabled />
														</div>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Tanggal Perjalanan Pertama</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="date" class="form-control" id="tgl_negara_1" placeholder="Negara pertama " disabled/>
														</div>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Tgl tiba di Indonesia Pada perjalanan Pertama</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="date" class="form-control" id="tgl_tiba_negara_1" placeholder="Tanggal Tiba pada Perjalanan Pertama " disabled />
														</div>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Sebutkan Negara Kedua</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="negara_2" placeholder="Negara kedua " disabled/>
														</div>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Sebutkan Kota Kedua</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="kota_2" placeholder="Kota kedua " disabled />
														</div>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Tanggal Perjalanan Kedua</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="date" class="form-control" id="tgl_negara_2" disabled />
														</div>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Tgl tiba di Indonesia Pada Perjalanan Kedua</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="date" class="form-control" id="tgl_tiba_negara_2" disabled/>
														</div>
													</div>
													<!-- transmisi lokal -->
													<div class="col-lg-4">
														<span class="form-text text-muted">Dalam 14 hari sebelum sakit, apakah memiliki riwayat perjalanan dari area transmisi lokal ?</span>
														<select class="form-control" id="riwayat_transmisi_lokal" disabled>
														<option value="Ya">Ya</option>
														<option value="Tidak">Tidak</option>
														<option value="Tidak Tahu">Tidak Tahu</option>
														</select>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Sebutkan Provinsi Pertama</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="provinsi_transmisi_1" placeholder="Provinsi tansmisi lokal pertama " disabled/>
														</div>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Sebutkan Kota Pertama</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="kota_transmisi_1" placeholder="Kota tansmisi lokal pertama " disabled />
														</div>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Tanggal Perjalanan di transmisi lokal Pertama</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="date" class="form-control" id="tgl_transmisi_1" disabled/>
														</div>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Tgl tiba dari transmisi lokal Pertama</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="date" class="form-control" id="tgl_tiba_transmisi_1" disabled/>
														</div>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Sebutkan Provinsi Kedua</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="provinsi_transmisi_2" placeholder="Provinsi tansmisi lokal kedua "disabled />
														</div>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Sebutkan Kota Kedua</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="kota_transmisi_2" placeholder="Kota tansmisi lokal kedua " disabled />
														</div>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Tanggal Perjalanan di transmisi lokal Kedua</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="date" class="form-control" id="tgl_transmisi_2" disabled/>
														</div>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Tgl tiba dari transmisi lokal Kedua</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="date" class="form-control" id="tgl_tiba_transmisi_2" disabled/>
														</div>
													</div>
													<!-- ke transmisi lokal -->
													<div class="col-lg-4">
														<span class="form-text text-muted">Dalam 14 hari sebelum sakit, apakah memiliki riwayat perjalanan ke area transmisi lokal ?</span>
														<select class="form-control" id="riwayat_ketransmisi_lokal" disabled>
														<option value="Ya">Ya</option>
														<option value="Tidak">Tidak</option>
														<option value="Tidak Tahu">Tidak Tahu</option>
														</select>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Sebutkan Provinsi</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="provinsi_ketransmisi" placeholder="Provinsi ke tansmisi lokal " disabled />
														</div>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Sebutkan Kota</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="kota_ketransmisi" placeholder="Kota ke tansmisi lokal" disabled />
														</div>
													</div>
													<!-- kontak dengan suspek/probable-->
													<div class="col-lg-4">
														<span class="form-text text-muted">Dalam 14 hari sebelum sakit, apakah memiliki kontak dengan suspek/probable COVID-19 ?</span>
														<select class="form-control" id="riwayat_kontak_suspek" disabled>
														<option value="Ya">Ya</option>
														<option value="Tidak">Tidak</option>
														<option value="Tidak Tahu">Tidak Tahu</option>
														</select>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Sebutkan Nama yang Kontak suspek/probable Pertama</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="nama_suspek_1" placeholder="Nama suspek/probable pertama " disabled />
														</div>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Sebutkan Alamat yang Kontak suspek/probable Pertama</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="alamat_suspek_1" placeholder="alamat suspek/probable pertama " disabled/>
														</div>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Sebutkan hubungan dengan Kontak suspek/probable Pertama</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="hubungan_suspek_1" placeholder="hubungan dengan suspek/probable pertama " disabled/>
														</div>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Tanggal Pertama Kontak dengan suspek/probable</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="date" class="form-control" id="tgl_kontak_suspek_1" disabled/>
														</div>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Tgl terakhir kontak dengan suspek/probable</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="date" class="form-control" id="tgl_terakhir_kontak_suspek_1" disabled/>
														</div>
													</div>
													</div>

													<!-- D -->
													<div class="form-group row">
													<!-- kontak dengan konfirm-->
													<div class="col-lg-4">
														<label>D. Faktor Kontak/Paparan (lanjutan)</label>
														<span class="form-text text-muted">Dalam 14 hari sebelum sakit, apakah memiliki kontak erat dengan kasus konfirmasi dan probable COVID-19 ?</span>
														<select class="form-control" id="riwayat_kontak_konfirm" disabled>
														<option value="Ya">Ya</option>
														<option value="Tidak">Tidak</option>
														<option value="Tidak Tahu">Tidak Tahu</option>
														</select>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Sebutkan Nama yang Kontak Konfirm & probable Pertama</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="nama_konfirm_1" placeholder="Nama Konfirm pertama " disabled/>
														</div>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Sebutkan Alamat yang Kontak Konfirm & probable Pertama</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="alamat_konfirm_1" placeholder="alamat Konfirm pertama " disabled />
														</div>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Sebutkan hubungan dengan Kontak Konfirm & probable Pertama</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="hubungan_konfirm_1" placeholder="hubungan dengan Konfirm pertama " disabled />
														</div>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Tanggal Pertama Kontak dengan Konfirm & probable</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="date" class="form-control" id="tgl_kontak_konfirm_1" disabled/>
														</div>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Tgl terakhir kontak dengan Konfirm & probable</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="date" class="form-control" id="tgl_terakhir_kontak_konfirm_1" disabled/>
														</div>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Apakah pasien termasuk cluster ISPA berat (demam & pneumonia membutuhkan perawatan Rumah Sakit) yang tidak diketahui penyebabnya ?</span>
														<select class="form-control" id="ispa" disabled>
														<option value="Ya">Ya</option>
														<option value="Tidak">Tidak</option>
														<option value="Tidak Tahu">Tidak Tahu</option>
														</select>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Apakah pasien memiliki hewan peliharaan ?</span>
														<select class="form-control" id="hewan_peliharaan" disabled>
														<option value="Ya">Ya</option>
														<option value="Tidak">Tidak</option>
														<option value="Tidak Tahu">Tidak Tahu</option>
														</select>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Sebutkan, Jika memiliki hewan peliharaan</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="jenis_hewan_peliharaan" placeholder="Jenis Hewan Peliharaan " disabled/>
														</div>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Apakah Pasien Seorang petugas Kesehatan ?</span>
														<select class="form-control" id="petugas_kesehatan" disabled>
														<option value="Ya">Ya</option>
														<option value="Tidak">Tidak</option>
														<option value="Tidak Tahu">Tidak Tahu</option>
														</select>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Jika Petugas kesehatan, Alat Pelindung diri (APD) apa yg dipakai
														saat melakukan perawatan pada pasien suspek / peobable / Konfirm?</span>
														<select class="form-control" id="apd" disabled>
														<option value="Gown">Gown</option>
														<option value="Masker Medis">Masker Medis</option>
														<option value="Sarung Tangan">Sarung Tangan</option>
														<option value="Masker N10SH-N95, ANEU STANDARTD FFP2">Masker N10SH-N95, ANEU STANDARTD FFP2</option>
														<option value="FFP3">FFP3</option>
														<option value="Kacamata Pelindung (goggle)">Kacamata Pelindung (goggle)</option>
														<option value="Tidak Memakai APD">Tidak Memakai APD</option>
														</select>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Apakah Melakukan prosedur yang menimbukan aerosol ?</span>
														<select class="form-control" id="aerosol" disabled>
														<option value="Ya">Ya</option>
														<option value="Tidak">Tidak</option>
														</select>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Sebutkan, Jika melakukan prosedur yang menimbulkan aerosol</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="sebutkan_aerosol" placeholder="Jenis Hewan Peliharaan " disabled/>
														</div>
													</div>
													</div>
													<div class="form-group row">
													<!-- kontak 1 -->
													<div class="col-lg-4">
														<label>D.Daftar Kontak Erat Kasus</label>
														<span class="form-text text-muted">Sebutkan Nama yang Kontak Erat Kasus Pertama</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="nama_kasus_1" placeholder="Nama Kontak Kasus Pertama" disabled/>
														</div>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Sebutkan Umur yang Kontak Erat Kasus Pertama</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="umur_kasus_1" placeholder="Umur Kontak Kasus Pertama" disabled/>
														</div>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Sebutkan Jenis Kelamin yang Kontak Erat Kasus Pertama</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="jk_kasus_1" placeholder="Jenis Kelamin Kontak Kasus Pertama" disabled/>
														</div>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Sebutkan Hubungan dengan Kontak Erat Kasus Pertama</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="hubungan_kasus_1" placeholder="Hubungan dengan Kontak Kasus Pertama" disabled/>
														</div>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Sebutkan Alamat Kontak Erat Kasus Pertama</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="alamat_kasus_1" placeholder="Alamat Kontak Kasus Pertama" disabled/>
														</div>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Sebutkan No Hp Kontak Erat Kasus Pertama</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="hp_kasus_1" placeholder="No Hp Kontak Kasus Kedua" disabled/>
														</div>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Sebutkan Aktifitas yang dilakukan oleh Kontak Erat Kasus Pertama</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="aktifitas_kasus_1" disabled/>
														</div>
													</div>
													<!-- kontak 2 -->
													<div class="col-lg-4">
													<br>
														<span class="form-text text-muted">Sebutkan Nama yang Kontak Erat Kasus Kedua</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="nama_kasus_2" placeholder="Nama Kontak Kasus Kedua" disabled />
														</div>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Sebutkan Umur yang Kontak Erat Kasus Kedua</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="umur_kasus_2" placeholder="Umur Kontak Kasus Kedua" disabled />
														</div>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Sebutkan Jenis Kelamin yang Kontak Erat Kasus Kedua</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="jk_kasus_2" placeholder="Jenis Kelamin Kontak Kasus Kedua" disabled />
														</div>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Sebutkan Hubungan dengan Kontak Erat Kasus Kedua</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="hubungan_kasus_2" placeholder="Hubungan dengan Kontak Kasus Kedua" disabled />
														</div>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Sebutkan Alamat Kontak Erat Kasus Kedua</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="alamat_kasus_2" placeholder="Alamat Kontak Kasus Kedua" disabled />
														</div>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Sebutkan No Hp Kontak Erat Kasus Kedua</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="hp_kasus_2" placeholder="No Hp Kontak Kasus Kedua" disabled/>
														</div>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Sebutkan Aktifitas yang dilakukan oleh Kontak Erat Kasus Kedua</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="aktifitas_kasus_2" disabled/>
														</div>
													</div>
													<!-- kontak 3 -->
													<div class="col-lg-4">
													<br>
														<span class="form-text text-muted">Sebutkan Nama yang Kontak Erat Kasus Ketiga</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="nama_kasus_3" placeholder="Nama Kontak Kasus Ketiga" disabled/>
														</div>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Sebutkan Umur yang Kontak Erat Kasus Ketiga</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="umur_kasus_3" placeholder="Umur Kontak Kasus Ketiga" disabled />
														</div>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Sebutkan Jenis Kelamin yang Kontak Erat Kasus Ketiga</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="jk_kasus_3" placeholder="Jenis Kelamin Kontak Kasus Ketiga" disabled />
														</div>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Sebutkan Hubungan dengan Kontak Erat Kasus Ketiga</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="hubungan_kasus_3" placeholder="Hubungan dengan Kontak Kasus Ketiga" disabled/>
														</div>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Sebutkan Alamat Kontak Erat Kasus Ketiga</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="alamat_kasus_3" placeholder="Alamat Kontak Kasus Ketiga" disabled />
														</div>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Sebutkan No Hp Kontak Erat Kasus Ketiga</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="hp_kasus_3" placeholder="No Hp Kontak Kasus Ketiga" disabled/>
														</div>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Sebutkan Aktifitas yang dilakukan oleh Kontak Erat Kasus Ketiga</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="aktifitas_kasus_3" disabled/>
														</div>
													</div>
													<!-- kontak 4 -->
													<div class="col-lg-4">
													<br>
														<span class="form-text text-muted">Sebutkan Nama yang Kontak Erat Kasus Keempat</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="nama_kasus_4" placeholder="Nama Kontak Kasus Keempat" disabled/>
														</div>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Sebutkan Umur yang Kontak Erat Kasus Keempat</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="umur_kasus_4" placeholder="Umur Kontak Kasus Keempat" disabled/>
														</div>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Sebutkan Jenis Kelamin yang Kontak Erat Kasus Keempat</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="jk_kasus_4" placeholder="Jenis Kelamin Kontak Kasus Keempat" disabled/>
														</div>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Sebutkan Hubungan dengan Kontak Erat Kasus Keempat</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="hubungan_kasus_4" placeholder="Hubungan dengan Kontak Kasus Keempat" disabled/>
														</div>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Sebutkan Alamat Kontak Erat Kasus Keempat</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="alamat_kasus_4" placeholder="Alamat Kontak Kasus Keempat" disabled/>
														</div>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Sebutkan No Hp Kontak Erat Kasus Keempat</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="hp_kasus_4" placeholder="No Hp Kontak Kasus Keempat" disabled/>
														</div>
													</div>
													<div class="col-lg-4">
														<span class="form-text text-muted">Sebutkan Aktifitas yang dilakukan oleh Kontak Erat Kasus Keempat</span>
														<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
															<i class="la la-info-circle"></i>
															</span>
														</div>
														<input type="text" class="form-control" id="aktifitas_kasus_4" disabled/>
														</div>
													</div>
													</div>

													<!-- vaksin -->
																		
												<div class="form-group row">
													<div class="col-lg-4">
													<label>E. VAKSIN:</label>
													<span class="form-text text-muted">Apakah Sudah Vaksin 1 ?</span>
													<select class="form-control" id="vaksin1">
														<option value="Ya">Ya</option>
														<option value="Tidak">Tidak</option>
													</select>
													</div>
													<div class="col-lg-4">
													<span class="form-text text-muted">Apakah Sudah Vaksin 2 ?</span>
													<select class="form-control" id="vaksin2">
														<option value="Ya">Ya</option>
														<option value="Tidak">Tidak</option>
													</select>
													</div>
													<div class="col-lg-4">
													<span class="form-text text-muted">Apakah sudah Booster ?</span>
													<select class="form-control" id="booster">
														<option value="Ya">Ya</option>
														<option value="Tidak">Tidak</option>
													</select>
													</div>
												</div>
												</div>
												</form>
												<!--end::Form-->
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
  tampilkan();

  function tampilkan(){
    $("#tempatTabel").html('<i class="fas fa-spinner fa-pulse"></i> Memuat...')
    var baris = '<table class="table table-separate table-head-custom table-checkable" id="tabelUser"><thead class="thead-light"><tr><th>Action</th><th>NO</th><th>ID</th><th>Nama</th><th>Email</th><th>Rule</th></tr></thead>'
      $.ajax({
        type:'POST',
        url: '<?= base_url() ?>data_karyawan/tampil',
        dataType :'json',
        success: function(data){
         //console.log(data);
          for (let i = 0; i < data.length; i++) {
            baris += '<tr>'
            baris += '<td><div style="cursor:pointer;" title="hapus?" id="hapus' + data[i].id + '" onClick="tryHapus(' + data[i].id+ ')"><i class="flaticon-delete text-danger"></i></div>'
            baris += ' <div style="cursor:pointer;" title="edit?"  id="edit' + data[i].id + '" onClick="tryEdit(' + data[i].id+ ')"><i class="flaticon2-pen text-success"></i></div>'
            baris += ' <div style="cursor:pointer;" title="view?" id="cetak' + data[i].id + '" onClick="tryView(' + data[i].id+ ')"><i class="flaticon-eye text-primary"></i></div>'
            baris += '<td>' + (i + 1) + '</td>'
            baris += '<td>' + data[i].id_karyawan + '</td>'
            baris += '<td>' + data[i].nama + '</td>'
            baris += '<td>' + data[i].email + '</td>'
            baris += '<td>' + data[i].rule + '</td>'
            baris += '</td></tr>'
          }
          baris += '</tbody></table>'
          $("#tempatTabel").html(baris);
          $('#tabelUser').DataTable({
            "pageLength": 10,
          });
        }
      });
  }
  function tryCetak(id) {
    window.open(
       "<?= site_url(); ?>pendaftaran/dataById/" + id);
  }

  function tryEdit(id) {
    $("#tombolEdit" + id).html('<i class="fas fa-spinner fa-pulse"></i>')
    $("#idUser").val(id)
    $.ajax({
      url: '<?= base_url() ?>data_karyawan/edit_id',
      method: 'post',
      data: "target=hrd_user&id=" + id,
      dataType: 'json',
      success: function(data) {
        $("#modalEdit").modal('show')
        $("#status").val(data.status)
        $("#tgl_sudah_dilayani").val(data.tgl_sudah_dilayani)
        console.log(data)
        $("#edit" + id).html('<i class="fa fa-edit"></i>')
      }
    });
  }

  function edit() {
    $("#tombolEdit").html('<i class="fas fa-spinner fa-pulse"></i> Memproses..')
    var status = $("#status").val()
    var tgl_sudah_dilayani = $("#tgl_sudah_dilayani").val()
    var id = $("#idUser").val()
    $.ajax({
      url: '<?= base_url() ?>pendaftaran/edit',
      method: 'post',
      data: {
        id: id,
        status: status,
        tgl_sudah_dilayani: tgl_sudah_dilayani
      },
      dataType: 'json',
      success: function(data) {
        if (data == "") {
          $("#idUser").val("")
          $("#status").val("")
          $("#tgl_sudah_dilayani").val("")
        } else {
          $('#pesanErrorEdit').html(data)
        }
        $("#modalEdit").modal('hide');
        tampilkan();
        $("#tombolEdit").html('Edit')
      }
    });
  }

  function tryTambah() {
    $("#id_karyawan").val("")
    $("#nama").val("")
    $("#email").val("")
    $("#password").val("")
    $("#rule").val("")
    $("#status_karyawan").val("")
    $("#jabatan").val("")
    $("#modalTambah").modal('show')
    $('#pesan_error_tambah').html("")
  }

  function tambah() {
    $("#tombolTambah").html('<i class="fas fa-spinner fa-pulse"></i> Memproses..')
    var id_karyawan = $("#id_karyawan").val()
    var nama = $("#nama").val()
    var email = $("#email").val()
    var password = $("#password").val()
    var rule = $("#rule").val()
    var status_karyawan = $("#status_karyawan").val()
    var jabatan = $("#jabatan").val()
    if (rule == null) {
      rule = 0;
    }
    $.ajax({
      url: '<?= base_url() ?>data_karyawan/tambah',
      method: 'post',
      data: {
        id_karyawan: id_karyawan,
        nama: nama,
        email: email,
        password: password,
        rule: rule,
        status_karyawan: status_karyawan,
        jabatan: jabatan
      },
      dataType: 'json',
      success: function(data) {
        if (data == "") {
          $("#modalTambah").modal('hide')
          tampilkan()
          $("#id_karyawan").val("")
          $("#nama").val("")
          $("#email").val("")
          $("#password").val("")
          $("#rule").val("")
          $("#status_karyawan").val("")
          $("#jabatan").val("")
          $('#pesanErroTambah').html("")
        } else {
        //   data = data.replace("<p>", "");
        //   data = data.replace("</p>", "");
          $('#pesanErrorTambah').html(data)
        }
        $("#tombolTambah").html('Tambah')
      }
    });
  }

  function tryView(id) {
    $("#tombolView" + id).html('<i class="fas fa-spinner fa-pulse"></i>')
    $("#idUser").val(id)
    $.ajax({
      url: '<?= base_url() ?>pendaftaran/edit_id',
      method: 'post',
      data: "target=swab_syamrabu&id=" + id,
      dataType: 'json',
      success: function(data) {
        $("#modalView").modal('show')
        $("#riwayat_demam").val(data.riwayat_demam)
        $("#nama").val(data.nama)
        $("#jenis_swab").val(data.jenis_swab)
        $("#jk").val(data.jk)
        $("#nik").val(data.nik)
        $("#nama_ortu").val(data.nama_ortu)
        $("#ttl").val(data.ttl)
        $("#umur").val(data.umur)
        $("#pekerjaan").val(data.pekerjaan)
        $("#jalan").val(data.jalan)
        $("#rt").val(data.rt)
        $("#desa").val(data.desa)
        $("#kec").val(data.kec)
        $("#kab").val(data.kab)
        $("#no_hp").val(data.no_hp)
        $("#derajat_demam").val(data.derajat_demam)
        $("#riwayat_batuk").val(data.riwayat_batuk)
        $("#riwayat_pilek").val(data.riwayat_pilek)
        $("#riwayat_sakit_tenggorokan").val(data.riwayat_sakit_tenggorokan)
        $("#riwayat_sakit_kepala").val(data.riwayat_sakit_kepala)
        $("#lemah").val(data.lemah)
        $("#nyeri_otot").val(data.nyeri_otot)
        $("#mual").val(data.mual)
        $("#abdomen").val(data.abdomen)
        $("#diare").val(data.diare)
        $("#hamil").val(data.hamil)
        $("#diabetes").val(data.diabetes)
        $("#jantung").val(data.jantung)
        $("#hipertensi").val(data.hipertensi)
        $("#keganasan").val(data.keganasan)
        $("#gangguan_imunologi").val(data.gangguan_imunologi)
        $("#gagal_ginjal").val(data.gagal_ginjal)
        $("#gangguan_hati").val(data.gangguan_hati)
        $("#ppok").val(data.ppok)
        $("#kondisi_penyerta_lain").val(data.kondisi_penyerta_lain)
        $("#pneumonia").val(data.pneumonia)
        $("#ards").val(data.ards)
        $("#diagnosis_lain").val(data.diagnosis_lain)
        $("#etiologi").val(data.etiologi)
        $("#diagnosis_pernafasan_lain").val(data.diagnosis_pernafasan_lain)
        $("#rawat_rs").val(data.rawat_rs)
        $("#rs_terakhir").val(data.rs_terakhir)
        $("#tgl_masuk_rs").val(data.tgl_masuk_rs)
        $("#rawat_icu").val(data.rawat_icu)
        $("#tindakan_intubasi").val(data.tindakan_intubasi)
        $("#penggunaan_emco").val(data.penggunaan_emco)
        $("#rs_sebelumnya").val(data.rs_sebelumnya)
        $("#status_pasien_terakhir").val(data.status_pasien_terakhir)
        $("#tgl_meninggal").val(data.tgl_meninggal)
        $("#riwayat_luar_negeri").val(data.riwayat_luar_negeri)
        $("#negara_1").val(data.negara_1)
        $("#kota_1").val(data.kota_1)
        $("#tgl_negara_1").val(data.tgl_negara_1)
        $("#tgl_tiba_negara_1").val(data.tgl_tiba_negara_1)
        $("#negara_2").val(data.negara_2)
        $("#kota_2").val(data.kota_2)
        $("#tgl_negara_2").val(data.tgl_negara_2)
        $("#tgl_tiba_negara_2").val(data.tgl_tiba_negara_2)
        $("#riwayat_transmisi_lokal").val(data.riwayat_transmisi_lokal)
        $("#provinsi_transmisi_1").val(data.provinsi_transmisi_1)
        $("#kota_transmisi_1").val(data.kota_transmisi_1)
        $("#tgl_transmisi_1").val(data.tgl_transmisi_1)
        $("#tgl_tiba_transmisi_1").val(data.tgl_tiba_transmisi_1)
        $("#provinsi_transmisi_2").val(data.provinsi_transmisi_2)
        $("#kota_transmisi_2").val(data.kota_transmisi_2)
        $("#tgl_transmisi_2").val(data.tgl_transmisi_2)
        $("#tgl_tiba_transmisi_2").val(data.tgl_tiba_transmisi_2)
        $("#riwayat_ketransmisi_lokal").val(data.riwayat_ketransmisi_lokal)
        $("#provinsi_ketransmisi").val(data.provinsi_ketransmisi)
        $("#kota_ketransmisi").val(data.kota_ketransmisi)
        $("#riwayat_kontak_suspek").val(data.riwayat_kontak_suspek)
        $("#nama_suspek_1").val(data.nama_suspek_1)
        $("#alamat_suspek_1").val(data.alamat_suspek_1)
        $("#hubungan_suspek_1").val(data.hubungan_suspek_1)
        $("#tgl_kontak_suspek_1").val(data.tgl_kontak_suspek_1)
        $("#tgl_terakhir_kontak_suspek_1").val(data.tgl_terakhir_kontak_suspek_1)
        $("#riwayat_kontak_konfirm").val(data.riwayat_kontak_konfirm)
        $("#nama_konfirm_1").val(data.nama_konfirm_1)
        $("#alamat_konfirm_1").val(data.alamat_konfirm_1)
        $("#hubungan_konfirm_1").val(data.hubungan_konfirm_1)
        $("#tgl_kontak_konfirm_1").val(data.tgl_kontak_konfirm_1)
        $("#tgl_terakhir_kontak_konfirm_1").val(data.tgl_terakhir_kontak_konfirm_1)
        $("#ispa").val(data.ispa)
        $("#jenis_hewan_peliharaan").val(data.jenis_hewan_peliharaan)
        $("#petugas_kesehatan").val(data.petugas_kesehatan)
        $("#apd").val(data.apd)
        $("#aerosol").val(data.aerosol)
        $("#sebutkan_aerosol").val(data.sebutkan_aerosol)
        $("#nama_kasus_1").val(data.nama_kasus_1)
        $("#umur_kasus_1").val(data.umur_kasus_1)
        $("#jk_kasus_1").val(data.jk_kasus_1)
        $("#hubungan_kasus_1").val(data.hubungan_kasus_1)
        $("#alamat_kasus_1").val(data.alamat_kasus_1)
        $("#hp_kasus_1").val(data.hp_kasus_1)
        $("#aktifitas_kasus_1").val(data.aktifitas_kasus_1)
        $("#nama_kasus_2").val(data.nama_kasus_2)
        $("#umur_kasus_2").val(data.umur_kasus_2)
        $("#jk_kasus_2").val(data.jk_kasus_2)
        $("#hubungan_kasus_2").val(data.hubungan_kasus_2)
        $("#alamat_kasus_2").val(data.alamat_kasus_2)
        $("#hp_kasus_2").val(data.hp_kasus_2)
        $("#aktifitas_kasus_2").val(data.aktifitas_kasus_2)
        $("#nama_kasus_3").val(data.nama_kasus_3)
        $("#umur_kasus_3").val(data.umur_kasus_3)
        $("#jk_kasus_3").val(data.jk_kasus_3)
        $("#hubungan_kasus_3").val(data.hubungan_kasus_3)
        $("#alamat_kasus_3").val(data.alamat_kasus_3)
        $("#hp_kasus_3").val(data.hp_kasus_3)
        $("#aktifitas_kasus_3").val(data.aktifitas_kasus_3)
        $("#nama_kasus_4").val(data.nama_kasus_4)
        $("#umur_kasus_4").val(data.umur_kasus_4)
        $("#jk_kasus_4").val(data.jk_kasus_4)
        $("#hubungan_kasus_4").val(data.hubungan_kasus_4)
        $("#alamat_kasus_4").val(data.alamat_kasus_4)
        $("#hp_kasus_4").val(data.hp_kasus_4)
        $("#aktifitas_kasus_4").val(data.aktifitas_kasus_4)
        $("#vaksin1").val(data.vaksin1)
        $("#vaksin2").val(data.vaksin2)
        $("#booster").val(data.booster)
        console.log(data)
        $("#view" + id).html('<i class="fa fa-edit"></i>')
      }
    });
  }

  function view() {
    $("#tombolView").html('<i class="fas fa-spinner fa-pulse"></i> Memproses..')
    var riwayat_demam = $("#riwayat_demam").val()
    var nama = $("#nama").val()
    var jenis_awab = $("#jenis_swab").val()
    var nik = $("#nik").val()
    var nama_ortu = $("#nama_ortu").val()
    var ttl = $("#ttl").val()
    var umur = $("#umur").val()
    var jk = $("#jk").val()
    var pekerjaan = $("#pekerjaan").val()
    var jalan = $("#jalan").val()
    var rt = $("#rt").val()
    var desa = $("#desa").val()
    var kec = $("#kec").val()
    var kab = $("#kab").val()
    var no_hp = $("#no_hp").val()
    var derajat_demam = $("#derajat_demam").val()
    var riwayat_batuk = $("#riwayat_batuk").val()
    var riwayat_pilek = $("#riwayat_pilek").val()
    var riwayat_sakit_tenggorokan = $("#riwayat_sakit_tenggorokan").val()
    var riwayat_sakit_kepala = $("#riwayat_sakit_kepala").val()
    var lemah = $("#lemah").val()
    var nyeri_otot = $("#nyeri_otot").val()
    var mual = $("#mual").val()
    var abdomen = $("#abdomen").val()
    var diare = $("#diare").val()
    var hamil = $("#hamil").val()
    var diabetes = $("#diabetes").val()
    var jantung = $("#jantung").val()
    var hipertensi = $("#hipertensi").val()
    var keganasan = $("#keganasan").val()
    var gangguan_imunologi = $("#gangguan_imunologi").val()
    var gagal_ginjal = $("#gagal_ginjal").val()
    var gangguan_hati = $("#gangguan_hati").val()
    var ppok = $("#ppok").val()
    var kondisi_penyerta_lain = $("#kondisi_penyerta_lain").val()
    var pneumonia = $("#pneumonia").val()
    var ards = $("#ards").val()
    var diagnosis_lain = $("#diagnosis_lain").val()
    var etiologi = $("#etiologi").val()
    var diagnosis_pernafasan_lain = $("#diagnosis_pernafasan_lain").val()
    var rawat_rs = $("#rawat_rs").val()
    var rs_terakhir = $("#rs_terakhir").val()
    var tgl_masuk_rs = $("#tgl_masuk_rs").val()
    var rawat_icu = $("#rawat_icu").val()
    var tindakan_intubasi = $("#tindakan_intubasi").val()
    var penggunaan_emco = $("#penggunaan_emco").val()
    var rs_sebelumnya = $("#rs_sebelumnya").val()
    var status_pasien_terakhir = $("#status_pasien_terakhir").val()
    var tgl_meninggal = $("#tgl_meninggal").val()
    var riwayat_luar_negeri = $("#riwayat_luar_negeri").val()
    var negara_1 = $("#negara_1").val()
    var kota_1 = $("#kota_1").val()
    var tgl_negara_1 = $("#tgl_negara_1").val()
    var tgl_tiba_negara_1 = $("#tgl_tiba_negara_1").val()
    var negara_2 = $("#negara_2").val()
    var kota_2 = $("#kota_2").val()
    var tgl_negara_2 = $("#tgl_negara_2").val()
    var tgl_tiba_negara_2 = $("#tgl_tiba_negara_2").val()
    var riwayat_transmisi_lokal = $("#riwayat_transmisi_lokal").val()
    var provinsi_transmisi_1 = $("#provinsi_transmisi_1").val()
    var kota_transmisi_1 = $("#kota_transmisi_1").val()
    var tgl_transmisi_1 = $("#tgl_transmisi_1").val()
    var tgl_tiba_transmisi_1 = $("#tgl_tiba_transmisi_1").val()
    var provinsi_transmisi_2 = $("#provinsi_transmisi_2").val()
    var kota_transmisi_2 = $("#kota_transmisi_2").val()
    var tgl_transmisi_2 = $("#tgl_transmisi_2").val()
    var tgl_tiba_transmisi_2 = $("#tgl_tiba_transmisi_2").val()
    var riwayat_ketransmisi_lokal = $("#riwayat_ketransmisi_lokal").val()
    var provinsi_ketransmisi = $("#provinsi_ketransmisi").val()
    var kota_ketransmisi = $("#kota_ketransmisi").val()
    var riwayat_kontak_suspek = $("#riwayat_kontak_suspek").val()
    var nama_suspek_1 = $("#nama_suspek_1").val()
    var alamat_suspek_1 = $("#alamat_suspek_1").val()
    var hubungan_suspek_1 = $("#hubungan_suspek_1").val()
    var tgl_kontak_suspek_1 = $("#tgl_kontak_suspek_1").val()
    var tgl_terakhir_kontak_suspek_1 = $("#tgl_terakhir_kontak_suspek_1").val()
    var riwayat_kontak_konfirm = $("#riwayat_kontak_konfirm").val()
    var nama_konfirm_1 = $("#nama_konfirm_1").val()
    var alamat_konfirm_1 = $("#alamat_konfirm_1").val()
    var hubungan_konfirm_1 = $("#hubungan_konfirm_1").val()
    var tgl_kontak_konfirm_1 = $("#tgl_kontak_konfirm_1").val()
    var tgl_terakhir_kontak_konfirm_1 = $("#tgl_terakhir_kontak_konfirm_1").val()
    var hewan_peliharaan = $("#hewan_peliharaan").val()
    var jenis_hewan_peliharaan = $("#jenis_hewan_peliharaan").val()
    var petugas_kesehatan = $("#petugas_kesehatan").val()
    var apd = $("#apd").val()
    var aerosol = $("#aerosol").val()
    var sebutkan_aerosol = $("#sebutkan_aerosol").val()
    var nama_kasus_1 = $("#nama_kasus_1").val()
    var umur_kasus_1 = $("#umur_kasus_1").val()
    var jk_kasus_1 = $("#jk_kasus_1").val()
    var hubungan_kasus_1 = $("#hubungan_kasus_1").val()
    var alamat_kasus_1 = $("#alamat_kasus_1").val()
    var hp_kasus_1 = $("#hp_kasus_1").val()
    var aktifitas_kasus_1 = $("#aktifitas_kasus_1").val()
    var nama_kasus_2 = $("#nama_kasus_2").val()
    var umur_kasus_2 = $("#umur_kasus_2").val()
    var jk_kasus_2 = $("#jk_kasus_2").val()
    var hubungan_kasus_2 = $("#hubungan_kasus_2").val()
    var alamat_kasus_2 = $("#alamat_kasus_2").val()
    var hp_kasus_2 = $("#hp_kasus_2").val()
    var aktifitas_kasus_2 = $("#aktifitas_kasus_2").val()
    var nama_kasus_3 = $("#nama_kasus_3").val()
    var umur_kasus_3 = $("#umur_kasus_3").val()
    var jk_kasus_3 = $("#jk_kasus_3").val()
    var hubungan_kasus_3 = $("#hubungan_kasus_3").val()
    var alamat_kasus_3 = $("#alamat_kasus_3").val()
    var hp_kasus_3 = $("#hp_kasus_3").val()
    var aktifitas_kasus_3 = $("#aktifitas_kasus_3").val()
    var nama_kasus_4 = $("#nama_kasus_4").val()
    var umur_kasus_4 = $("#umur_kasus_4").val()
    var jk_kasus_4 = $("#jk_kasus_4").val()
    var hubungan_kasus_4 = $("#hubungan_kasus_4").val()
    var alamat_kasus_4 = $("#alamat_kasus_4").val()
    var hp_kasus_4 = $("#hp_kasus_4").val()
    var aktifitas_kasus_4 = $("#aktifitas_kasus_4").val()
    var vaksin1 = $("#vaksin1").val()
    var vaksin2 = $("#vaksin2").val()
    var booster = $("#booster").val()
    var id = $("#idUser").val()
    $.ajax({
      url: '<?= base_url() ?>pendaftaran/edit',
      method: 'post',
      data: {
        id: id,
        riwayat_demam: riwayat_demam,
        nama: nama,
        nik: nik,
        nama_ortu: nama_ortu,
        ttl: ttl,
        umur: umur,
        jk: jk,
        pekerjaan: pekerjaan,
        jalan: jalan,
        rt: rt,
        desa: desa,
        kec: kec,
        kab: kab,
        no_hp: no_hp,
        derajat_demam: derajat_demam,
        riwayat_batuk: riwayat_batuk,
        riwayat_pilek: riwayat_pilek,
        riwayat_sakit_tenggorokan: riwayat_sakit_tenggorokan,
        riwayat_sakit_kepala: riwayat_sakit_kepala,
        lemah: lemah,
        nyeri_otot: nyeri_otot,
        mual: mual,
        abdomen: abdomen,
        diare: diare,
        hamil: hamil,
        diabetes: diabetes,
        jantung: jantung,
        hipertensi: hipertensi,
        keganasan: keganasan,
        gangguan_imunologi: gangguan_imunologi,
        gagal_ginjal: gagal_ginjal,
        gangguan_hati: gangguan_hati,
        ppok: ppok,
        kondisi_penyerta_lain: kondisi_penyerta_lain,
        pneumonia: pneumonia,
        ards: ards,
        diagnosis_lain: diagnosis_lain,
        etiologi: etiologi,
        diagnosis_pernafasan_lain: diagnosis_pernafasan_lain,
        rawat_rs: rawat_rs,
        rs_terakhir: rs_terakhir,
        tgl_masuk_rs: tgl_masuk_rs,
        rawat_icu: rawat_icu,
        tindakan_intubasi: tindakan_intubasi,
        penggunaan_emco: penggunaan_emco,
        rs_sebelumnya: rs_sebelumnya,
        status_pasien_terakhir: status_pasien_terakhir,
        tgl_meninggal: tgl_meninggal,
        riwayat_luar_negeri: riwayat_luar_negeri,
        negara_1: negara_1,
        kota_1: kota_1,
        tgl_negara_1: tgl_negara_1,
        tgl_tiba_negara_1: tgl_tiba_negara_1,
        negara_2: negara_2,
        kota_2: kota_2,
        tgl_negara_2: tgl_negara_2,
        tgl_tiba_negara_2: tgl_tiba_negara_2,
        riwayat_transmisi_lokal: riwayat_transmisi_lokal,
        provinsi_transmisi_1: provinsi_transmisi_1,
        kota_transmisi_1: kota_transmisi_1,
        tgl_transmisi_1: tgl_transmisi_1,
        tgl_tiba_transmisi_1: tgl_tiba_transmisi_1,
        provinsi_transmisi_2: provinsi_transmisi_2,
        kota_transmisi_2: kota_transmisi_2,
        tgl_transmisi_2: tgl_transmisi_2,
        tgl_tiba_transmisi_2: tgl_tiba_transmisi_2,
        riwayat_ketransmisi_lokal: riwayat_ketransmisi_lokal,
        provinsi_ketransmisi: provinsi_ketransmisi,
        kota_ketransmisi: kota_ketransmisi,
        riwayat_kontak_suspek: riwayat_kontak_suspek,
        nama_suspek_1: nama_suspek_1,
        alamat_suspek_1: alamat_suspek_1,
        hubungan_suspek_1: hubungan_suspek_1,
        tgl_kontak_suspek_1: tgl_kontak_suspek_1,
        tgl_terakhir_kontak_suspek_1: tgl_terakhir_kontak_suspek_1,
        riwayat_kontak_konfirm: riwayat_kontak_konfirm,
        nama_konfirm_1: nama_konfirm_1,
        alamat_konfirm_1: alamat_konfirm_1,
        hubungan_konfirm_1: hubungan_konfirm_1,
        tgl_kontak_konfirm_1: tgl_kontak_konfirm_1,
        tgl_terakhir_kontak_konfirm_1: tgl_terakhir_kontak_konfirm_1,
        hewan_peliharaan: hewan_peliharaan,
        jenis_hewan_peliharaan: jenis_hewan_peliharaan,
        petugas_kesehatan: petugas_kesehatan,
        apd: apd,
        aerosol: aerosol,
        sebutkan_aerosol: sebutkan_aerosol,
        nama_kasus_1: nama_kasus_1,
        umur_kasus_1: umur_kasus_1,
        jk_kasus_1: jk_kasus_1,
        hubungan_kasus_1: hubungan_kasus_1,
        alamat_kasus_1: alamat_kasus_1,
        hp_kasus_1: hp_kasus_1,
        aktifitas_kasus_1: aktifitas_kasus_1,
        nama_kasus_2: nama_kasus_2,
        umur_kasus_2: umur_kasus_2,
        jk_kasus_2: jk_kasus_2,
        hubungan_kasus_2: hubungan_kasus_2,
        alamat_kasus_2: alamat_kasus_2,
        hp_kasus_2: hp_kasus_2,
        aktifitas_kasus_2: aktifitas_kasus_2,
        nama_kasus_3: nama_kasus_3,
        umur_kasus_3: umur_kasus_3,
        jk_kasus_3: jk_kasus_3,
        hubungan_kasus_3: hubungan_kasus_3,
        alamat_kasus_3: alamat_kasus_3,
        hp_kasus_3: hp_kasus_3,
        aktifitas_kasus_3: aktifitas_kasus_3,
        nama_kasus_4: nama_kasus_4,
        umur_kasus_4: umur_kasus_4,
        jk_kasus_4: jk_kasus_4,
        hubungan_kasus_4: hubungan_kasus_4,
        alamat_kasus_4: alamat_kasus_4,
        hp_kasus_4: hp_kasus_4,
        aktifitas_kasus_4: aktifitas_kasus_4,
        vaksin1: vaksin1,
        vaksin2: vaksin2,
        booster: booster
      },
      dataType: 'json',
      success: function(data) {
        if (data == "") {
          $("#idUser").val("")
          $("#riwayat_demam").val("")
          $("#nama").val("")
          $("#jenis_swab").val("")
          $("#nik").val("")
          $("#nama_ortu").val("")
          $("#ttl").val("")
          $("#umur").val("")
          $("#jk").val("")
          $("#pekerjaan").val("")
          $("#jalan").val("")
          $("#rt").val("")
          $("#desa").val("")
          $("#kec").val("")
          $("#kab").val("")
          $("#no_hp").val("")
          $("#derajat_demam").val("")
          $("#riwayat_batuk").val("")
          $("#riwayat_pilek").val("")
          $("#riwayat_sakit_tenggorokan").val("")
          $("#riwayat_sakit_kepala").val("")
          $("#lemah").val("")
          $("#nyeri_otot").val("")
          $("#mual").val("")
          $("#abdomen").val("")
          $("#diare").val("")
          $("#hamil").val("")
          $("#diabetes").val("")
          $("#jantung").val("")
          $("#hipertensi").val("")
          $("#keganasan").val("")
          $("#gangguan_imunologi").val("")
          $("#gagal_ginjal").val("")
          $("#gangguan_hati").val("")
          $("#ppok").val("")
          $("#kondisi_penyerta_lain").val("")
          $("#pneumonia").val("")
          $("#ards").val("")
          $("#diagnosis_lain").val("")
          $("#etiologi").val("")
          $("#diagnosis_pernafasan_lain").val("")
          $("#rawat_rs").val("")
          $("#rs_terakhir").val("")
          $("#tgl_masuk_rs").val("")
          $("#rawat_icu").val("")
          $("#tindakan_intubasi").val("")
          $("#penggunaan_emco").val("")
          $("#rs_sebelumnya").val("")
          $("#status_pasien_terakhir").val("")
          $("#tgl_meninggal").val("")
          $("#riwayat_luar_negeri").val("")
          $("#negara_1").val("")
          $("#kota_1").val("")
          $("#tgl_negara_1").val("")
          $("#tgl_tiba_negara_1").val("")
          $("#negara_2").val("")
          $("#kota_2").val("")
          $("#tgl_negara_2").val("")
          $("#tgl_tiba_negara_2").val("")
          $("#riwayat_transmisi_lokal").val("")
          $("#provinsi_transmisi_1").val("")
          $("#kota_transmisi_1").val("")
          $("#tgl_transmisi_1").val("")
          $("#tgl_tiba_transmisi_1").val("")
          $("#provinsi_transmisi_2").val("")
          $("#kota_transmisi_2").val("")
          $("#tgl_transmisi_2").val("")
          $("#tgl_tiba_transmisi_2").val("")
          $("#riwayat_ketransmisi_lokal").val("")
          $("#provinsi_ketransmisi").val("")
          $("#kota_ketransmisi").val("")
          $("#riwayat_kontak_suspek").val("")
          $("#nama_suspek_1").val("")
          $("#alamat_suspek_1").val("")
          $("#hubungan_suspek_1").val("")
          $("#tgl_kontak_suspek_1").val("")
          $("#tgl_terakhir_kontak_suspek_1").val("")
          $("#riwayat_kontak_konfirm").val("")
          $("#nama_konfirm_1").val("")
          $("#alamat_konfirm_1").val("")
          $("#hubungan_konfirm_1").val("")
          $("#tgl_kontak_konfirm_1").val("")
          $("#tgl_terakhir_kontak_konfirm_1").val("")
          $("#hewan_peliharaan").val("")
          $("#jenis_hewan_peliharaan").val("")
          $("#petugas_kesehatan").val("")
          $("#apd").val("")
          $("#aerosol").val("")
          $("#sebutkan_aerosol").val("")
          $("#nama_kasus_1").val("")
          $("#umur_kasus_1").val("")
          $("#jk_kasus_1").val("")
          $("#hubungan_kasus_1").val("")
          $("#alamat_kasus_1").val("")
          $("#hp_kasus_1").val("")
          $("#aktifitas_kasus_1").val("")
          $("#nama_kasus_2").val("")
          $("#umur_kasus_2").val("")
          $("#jk_kasus_2").val("")
          $("#hubungan_kasus_2").val("")
          $("#alamat_kasus_2").val("")
          $("#hp_kasus_2").val("")
          $("#aktifitas_kasus_2").val("")
          $("#nama_kasus_3").val("")
          $("#umur_kasus_3").val("")
          $("#jk_kasus_3").val("")
          $("#hubungan_kasus_3").val("")
          $("#alamat_kasus_3").val("")
          $("#hp_kasus_3").val("")
          $("#aktifitas_kasus_3").val("")
          $("#nama_kasus_4").val("")
          $("#umur_kasus_4").val("")
          $("#jk_kasus_4").val("")
          $("#hubungan_kasus_4").val("")
          $("#alamat_kasus_4").val("")
          $("#hp_kasus_4").val("")
          $("#aktifitas_kasus_4").val("")
          $("#vaksin1").val("")
          $("#vaksin2").val("")
          $("#booster").val("")
        } else {
          $('#pesanErrorView').html(data)
        }
        $("#modalView").modal('hide');
        tampilkan();
        $("#tombolView").html('View')
      }
    });
  }

  function tryHapus(id) {
    $("#hapus" + id).html('<i class="fas fa-spinner fa-pulse"></i>')
    $.ajax({
      url: '<?= base_url() ?>data_karyawan/edit_id',
      method: 'post',
      data: "target=hrd_user&id=" + id,
      dataType: 'json',
      success: function(data) {
        $("#id_hapus").val(id)
        $("#teksHapus").html("apakah anda yakin ingin menghapus data dengan nama '" + data.nama + "' ?")

        $("#hapus" + id).html('<i class="fa fa-times"></i>')
      }
    });
    $("#modalHapus").modal('show')
  }

  function hapus() {
    $("#hapus").html('<i class="fas fa-spinner fa-pulse"></i> Memproses..')
    var id = $("#id_hapus").val()
    $.ajax({
      url: '<?= base_url() ?>data_karyawan/hapus',
      method: 'post',
      data: "target=hrd_user&id=" + id,
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
</script>