<style>
  .swal2-container {
    z-index: 3000;
  }
  .selectpicker{
    background-color: white!important;
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
											<h3 class="card-label">Data Karyawan 
											<span class="d-block text-muted pt-2 font-size-sm">UOBK RSUD SYAMRABU BANGKALAN</span></h3>
										</div>
										<div class="card-body px-lg-5 py-lg-5">
											<?php if ($this->session->userdata("rule") == 1) { ?>
												<button type="button" class="btn btn-secondary"><a href="data_karyawan/exel/" target="_blank">Export Excel</a></button>
											<?php } ?>

											<?php if ($this->session->userdata("rule") == 1 or $this->session->userdata("rule") == 2) { ?>
												<button type="button" class="btn btn-success" onClick="tryTambah()">Tambah Data</button>
											<?php } ?>
										</div>
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
															<span class="text-white">Form Tambah Data Karyawan </span>
														</div>
													</div>
													<div class="card-body px-lg-5 py-lg-5">
														<form role="form">
															<!-- <div class="form-group mb-3">
																<div class="custom-file">
																	<input type="file" class="custom-file-input" id="foto" />
																	<label class="custom-file-label" for="customFile">Foto Harus format JPG</label>
																</div>
															</div> -->
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
									<div class="modal-dialog modal- modal-dialog-centered modal-xl" role="document">
										<div class="modal-content">
											<div class="modal-body p-0">
												<div class="card bg-secondary border-0 mb-0">
													<div class="card-header bg-success pb-1">
														<div class=" text-center mt-2 mb-3">
															<span class=" text-white">Form Edit Data Karyawan</span>
														</div>
													</div>
													<div class="card-body px-lg-5 py-lg-5">
														<!--begin::Form-->
														<form class="form">
																<!-- identitas -->
																<div class="form-group row">
																	<!-- <div class="col-lg-4">
																		<div class="custom-file">
																			<input type="file" class="custom-file-input" id="foto" />
																			<label class="custom-file-label" for="customFile">Foto Harus format JPG</label>
																		</div>
																	</div> -->
																	<div class="col-lg-4">
																		<label>A. KELENGKAPAN IDENTITAS KARYAWAN:</label>
																		<input id="idUser" type="hidden">
																		<span class="form-text text-muted">Nama</span>
																		<input type="text" class="form-control" id="editnama" placeholder="Masukkan Nama Tanpa Gelar"/>
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">NIK</span>
																		<input type="text" class="form-control" id="nik" placeholder="Masukkan NIK sesuai KTP"/>
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">No Hp</span>
																		<input type="text" class="form-control" id="no_hp" placeholder="Masukkan No Hp yang bisa dihubungi" />
																	</div>
																	<!-- <div class="col-lg-4">
																		<span class="form-text text-muted">email</span>
																		<input type="text" class="form-control" id="email" placeholder="Sesuaikan Email Anda" />
																	</div> -->
																	<div class="col-lg-4">
																		<span class="form-text text-muted">Alamat Lengkap</span>
																		<input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat Sesuai KTP" />
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">Provinsi</span>
																		<input type="text" class="form-control" id="prov" placeholder="Masukkan Provinsi Sesuai KTP" />
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">Kabupaten Kota</span>
																		<input type="text" class="form-control" id="kab" placeholder="Masukkan Kabupaten Sesuai KTP" />
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">Kecamatan Kota</span>
																		<input type="text" class="form-control" id="kec" placeholder="Masukkan Kecamatan Sesuai KTP" />
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">Kelurahan</span>
																		<input type="text" class="form-control" id="kelu" placeholder="Masukkan Kelurahan Sesuai KTP" />
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">RT/RW</span>
																		<input type="text" class="form-control" id="rt_rw" placeholder="Masukkan RT/RW Sesuai KTP" />
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">Kode Pos</span>
																		<input type="text" class="form-control" id="kode_pos" placeholder="Masukkan Kode Pos Sesuai KTP" />
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">Tempat Lahir</span>
																		<input type="text" class="form-control" id="tempat_lahir" placeholder="Masukkan Tempat Lahir Sesuai KTP" />
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">Tanggal Lahir</span>
																		<input type="date" class="form-control" id="tanggal_lahir" placeholder="Masukkan Tanggal Lahir Sesuai KTP" />
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">Jenis Kelamin</span>
																		<select class="form-control" id="jk">
																			<option value="Perempuan">Perempuan</option>
																			<option value="Laki-Laki">Laki-Laki</option>
																		</select>
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">Agama</span>
																		<select class="form-control" id="agama">
																		<option value="Islam">Islam</option>
																		<option value="Kristen">Kristen</option>
																		<option value="Hindu">Hindu</option>
																		<option value="Budha">Kristen</option>
																		<option value="Konghucu">Konghucu</option>
																		</select>
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">Status Pernikahan</span>
																		<select class="form-control" id="status_pernikahan">
																			<option value="Menikah">Menikah</option>
																			<option value="Belum Menikah">Belum Menikah</option>
																		</select>
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">Golongan Darah</span>
																		<input type="text" class="form-control" id="goldar" placeholder="isi tanda (-) jika tidak tahu" />
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">Suku Bangsa</span>
																		<input type="text" class="form-control" id="suku" placeholder="isi tanda (-) jika tidak tahu" />
																	</div>
																</div>
																<!-- pendidikan -->
																<div class="form-group row">
																	<div class="col-lg-6">
																		<label>B. KELENGKAPAN PENDIDIKAN KARYAWAN:</label>
																		<span class="form-text text-muted">SD</span>
																		<input type="text" class="form-control" id="sd" placeholder="Masukkan Sesuai Ijazah"/>
																	</div>
																	<div class="col-lg-6">
																		<span class="form-text text-muted">No Ijazah SD</span>
																		<input type="text" class="form-control" id="no_sd" placeholder="Masukkan Sesuai Ijazah"/>
																	</div>
																	<div class="col-lg-6">
																		<span class="form-text text-muted">SMP</span>
																		<input type="text" class="form-control" id="smp" placeholder="Masukkan Sesuai Ijazah"/>
																	</div>
																	<div class="col-lg-6">
																		<span class="form-text text-muted">No Ijazah SMP</span>
																		<input type="text" class="form-control" id="no_smp" placeholder="Masukkan Sesuai Ijazah"/>
																	</div>
																	<div class="col-lg-6">
																		<span class="form-text text-muted">SMA</span>
																		<input type="text" class="form-control" id="sma" placeholder="Masukkan Sesuai Ijazah"/>
																	</div>
																	<div class="col-lg-6">
																		<span class="form-text text-muted">No Ijazah SMA</span>
																		<input type="text" class="form-control" id="no_sma" placeholder="Masukkan Sesuai Ijazah"/>
																	</div>
																	<div class="col-lg-6">
																		<span class="form-text text-muted">S1/D-III/D-IV</span>
																		<input type="text" class="form-control" id="s1" placeholder="Masukkan Sesuai Ijazah"/>
																	</div>
																	<div class="col-lg-6">
																		<span class="form-text text-muted">No Ijazah S1/D-III/D-IV</span>
																		<input type="text" class="form-control" id="no_s1" placeholder="Masukkan Sesuai Ijazah"/>
																	</div>
																	<div class="col-lg-6">
																		<span class="form-text text-muted">S2</span>
																		<input type="text" class="form-control" id="s2" placeholder="Masukkan Sesuai Ijazah"/>
																	</div>
																	<div class="col-lg-6">
																		<span class="form-text text-muted">No Ijazah S2</span>
																		<input type="text" class="form-control" id="no_s2" placeholder="Masukkan Sesuai Ijazah"/>
																	</div>
																	<div class="col-lg-6">
																		<span class="form-text text-muted">S3</span>
																		<input type="text" class="form-control" id="s3" placeholder="Masukkan Sesuai Ijazah"/>
																	</div>
																	<div class="col-lg-6">
																		<span class="form-text text-muted">No Ijazah S3</span>
																		<input type="text" class="form-control" id="no_s3" placeholder="Masukkan Sesuai Ijazah"/>
																	</div>
																	<div class="col-lg-6">
																		<span class="form-text text-muted">Profesi</span>
																		<input type="text" class="form-control" id="profesi" placeholder="Masukkan Sesuai Ijazah"/>
																	</div>
																	<div class="col-lg-6">
																		<span class="form-text text-muted">No Ijazah Profesi</span>
																		<input type="text" class="form-control" id="no_profesi" placeholder="Masukkan Sesuai Ijazah"/>
																	</div>
																</div>
																<!-- Kepegawaian -->
																<div class="form-group row">
																	<div class="col-lg-4">
																		<label>C. KELENGKAPAN BERKAS KARYAWAN:</label>
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
																	<div class="col-lg-4">
																		<span class="form-text text-muted">Pilih Status</span>
																		<select class="form-control" id="status_karyawan">
																			<option value="PNS">PNS</option>
																			<option value="PPPK">PPPK</option>
																			<option value="THL">THL</option>
																			<option value="Kontrak">Kontrak</option>
																			<option value="CPNS">CPNS</option>
																		</select>
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">Pilih Jenis Tenaga</span>
																		<select class="form-control" id="jenis_tenaga">
																			<option value="Tenaga Medis / Dokter">Tenaga Medis / Dokter</option>
																			<option value="Tenaga Keperawatan">Tenaga Keperawatan</option>
																			<option value="Tenaga Kesehatan Lainnya">Tenaga Kesehatan Lainnya</option>
																			<option value="Pejabat Struktural">Pejabat Struktural</option>
																			<option value="Tenaga Umum / Non Medis">Tenaga Umum / Non Medis</option>
																		</select>
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">Pilih Jenis detail Tenaga</span>
																		<select class="form-control" id="jenis_detail_tenaga">
																			<option value="Dokter Sub Spesialis">Dokter Sub Spesialis</option>
																			<option value="Dokter Spesialis">Dokter Spesialis</option>
																			<option value="Dokter Gigi Spesialis">Dokter Gigi Spesialis</option>
																			<option value="Dokter Umum">Dokter Umum</option>
																			<option value="Dokter Gigi">Dokter Gigi</option>
																			<option value="Perawat Ahli">Perawat Ahli</option>
																			<option value="Perawat Terampil">Perawat Terampil</option>
																			<option value="Bidan">Bidan</option>
																			<option value="Psikologi Klinis">Psikologi Klinis</option>
																			<option value="Apoteker">Apoteker</option>
																			<option value="Penyuluh Kesehatan Masyarakat">Penyuluh Kesehatan Masyarakat</option>
																			<option value="Nutriosionis">Nutriosionis</option>
																			<option value="Radiografer">Radiografer</option>
																			<option value="Pranata Laboratorium Kesehatan">Pranata Laboratorium Kesehatan</option>
																			<option value="Terapis Gigi dan Mulut">Terapis Gigi dan Mulut</option>
																			<option value="Sanitarian">Sanitarian</option>
																			<option value="Fisioterapis">Fisioterapis</option>
																			<option value="elektomedis">elektomedis</option>
																			<option value="Rekam Medis">Rekam Medis</option>
																			<option value="Asisten Apoteker">Asisten Apoteker</option>
																			<option value="Akupuntur">Akupuntur</option>
																			<option value="Penata Anestesi">Penata Anestesi</option>
																			<option value="Asisten Penata Anestesi">Asisten Penata Anestesi</option>
																			<option value="Refraksi Optisi">Refraksi Optisi</option>
																			<option value="Pejabat Struktural">Pejabat Struktural</option>
																			<option value="Tenagan Umum/Non Medis">Tenagan Umum/Non Medis</option>
																		</select>
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">Pilih Jenis Pendidikan</span>
																		<select class="form-control" id="jenis_pendidikan">
																			<option value="Dokter Umum">Dokter Umum</option>
																			<option value="Dokter Gigi">Dokter Gigi</option>
																			<option value="Spesialis Anestesi">Spesialis Anestesi</option>
																			<option value="Spesialis Bedah">Spesialis Bedah</option>
																			<option value="Spesialis Bedah Saraf">Spesialis Bedah Saraf</option>
																			<option value="Spesialis Orthopedi dan Traumatologi">Spesialis Orthopedi dan Traumatologi</option>
																			<option value="Spesialis Forensik">Spesialis Forensik</option>
																			<option value="Spesialis Jantung Pembuluh Darah">Spesialis Jantung Pembuluh Darah</option>
																			<option value="Spesialis Kandungan">Spesialis Kandungan</option>
																			<option value="Spesialis Kulit Kelamin">Spesialis Kulit Kelamin</option>
																			<option value="Spesialis Anak">Spesialis Anak</option>
																			<option value="Spesialis Mata">Spesialis Mata</option>
																			<option value="Spesialis Penyakit Dalam">Spesialis Penyakit Dalam</option>
																			<option value="Spesialis Paru">Spesialis Paru</option>
																			<option value="Spesialis Radiologi">Spesialis Radiologi</option>
																			<option value="Spesialis Syaraf">Spesialis Syaraf</option>
																			<option value="Spesialis Urologi">Spesialis Urologi</option>
																			<option value="Spesialis THT">USpesialis THTnit</option>
																			<option value="Spesialis THT - KL">Spesialis THT - KL</option>
																			<option value="Spesialis Patologi Klinik">Spesialis Patologi Klinik</option>
																			<option value="Spesialis Patologi Anatomi">Spesialis Patologi Anatomi</option>
																			<option value="Spesialis Fisik dan Rehabilitas">Spesialis Fisik dan Rehabilitas</option>
																			<option value="Spesialis Kedokteran Jiwa">Spesialis Kedokteran Jiwa</option>
																			<option value="Spesialis Emergency Medicine">Spesialis Emergency Medicine</option>
																			<option value="Spesialis Orthodontis">Spesialis Orthodontis</option>
																			<option value="Spesialis Periodontis">Spesialis Periodontis</option>
																			<option value="Spesialis Konservasi">Spesialis Konservasi</option>
																			<option value="Spesialis Bedah Mulut">Spesialis Bedah Mulut</option>
																			<option value="Sub Spesialis Anak Konsultan">Sub Spesialis Anak Konsultan</option>
																			<option value="Sub Spesialis Ginjal dan Hipertensi">Sub Spesialis Ginjal dan Hipertensi</option>
																			<option value="Sub Spesialis Bedah Konsultan Bedah Anak">Sub Spesialis Bedah Konsultan Bedah Anak</option>
																			<option value="Sub Spesialis Bedah Onkologi Konsultan">Sub Spesialis Bedah Onkologi Konsultan</option>
																			<option value="Profesi Keperawatan">Profesi Keperawatan</option>
																			<option value="Sarjana Keperawatan">Sarjana Keperawatan</option>
																			<option value="Akademi Keperawatan">Akademi Keperawatan</option>
																			<option value="SPK">SPK</option>
																			<option value="Akper Anastesi">Akper Anastesi</option>
																			<option value="Kebidanan">Kebidanan</option>
																			<option value="Akademi Kebidanan">Akademi Kebidanan</option>
																			<option value="Pasca Sarjana Psikologi">Paska Sarjana Psikologi</option>
																			<option value="Pasca Sarjana SKM">Pasca Sarjana SKM</option>
																			<option value="Sarjana SKM">Sarjana SKM</option>
																			<option value="Pasca Sarjana Farmasi">Pasca Sarjana Farmasi</option>
																			<option value="Profesi Apoteker">Profesi Apoteker</option>
																			<option value="D-III Farmasi">D-III Farmasi</option>
																			<option value="SMF">SMF</option>
																			<option value="D-III Perawat Gigi">D-III Perawat Gigi</option>
																			<option value="D-IV Teknik Elektromedik">D-IV Teknik Elektromedik</option>
																			<option value="D-III Teknik Elektromedik">D-III Teknik Elektromedik</option>
																			<option value="Sarjana Science">Sarjana Science</option>
																			<option value="D-III Pranata Laboratorium Kes">D-III Pranata Laboratorium Kes</option>
																			<option value="D-IV Pranata Laboratorium Kes">D-IV Pranata Laboratorium Kes</option>
																			<option value="D-IV Rekam Medik">D-IV Rekam Medik</option>
																			<option value="D-III Rekam Medik">D-III Rekam Medik</option>
																			<option value="D-III AKL">D-III AKL</option>
																			<option value="D-III Fisioterapi">D-III Fisioterapi</option>
																			<option value="D-IV Fisioterapi">D-IV Fisioterapi</option>
																			<option value="S1 Gizi">S1 Gizi</option>
																			<option value="SPRG">SPRG</option>
																			<option value="D-III Akupuntur">D-III Akupuntur</option>
																			<option value="D-III Radiologi">Radiologi</option>
																			<option value="Pasca Sarjana Manajemen">Pasca Sarjana Manajemen</option>
																			<option value="Pasca Sarjana Manajemen Kes">Pasca Sarjana Manajemen Kes</option>
																			<option value="Pasca Sarjana Science">Pasca Sarjana Science</option>
																			<option value="Sarjana Psikologi">Sarjana Psikologi</option>
																			<option value="Sarjana Sosial">Sarjana Sosial</option>
																			<option value="Sarjana Hukum">Sarjana Hukum</option>
																			<option value="Sarjana Ekonomi">Sarjana Ekonomi</option>
																			<option value="Sarjana Akuntansi">Sarjana Akuntansi</option>
																			<option value="Sarjana Komputer">Sarjana Komputer</option>
																			<option value="Sarjana Informatika">Informatika</option>
																			<option value="Sarjana Teknik Elektro">Sarjana Teknik Elektro</option>
																			<option value="Sarjana Teknik Lingkungan">Sarjana Teknik Lingkungan</option>
																			<option value="Sarjana Pendidikan">Sarjana Pendidikan</option>
																			<option value="Sarjana Ked.Gigi">Sarjana Ked.Gigi</option>
																			<option value="D-III Manajemen Administrasi/BPA">D-III Manajemen Administrasi/BPA</option>
																			<option value="D-III Manajemen Informatika">D-III Manajemen Informatika</option>
																			<option value="D-III Manajemen Akuntansi">D-III Manajemen Akuntansi</option>
																			<option value="D-III Tkg">D-III Tkg</option>
																			<option value="SPPH">SPPH</option>
																			<option value="SMA/SMK">SMA/SMK</option>
																			<option value="SMP">SMP</option>
																			<option value="SD">SD</option>
																		</select>
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">Jenis Jabatan</span>
																		<select class="form-control" id="jenis_jabatan">
																			<option value="-">Bukan PNS</option>
																			<option value="Struktural">Struktural</option>
																			<option value="Fungsional">Fungsional</option>
																			<option value="Profesi" disable>Profesi</option>
																		</select>
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">Pilih Golongan</span>
																		<select class="form-control" id="golongan">
																			<option value="-">Bukan PNS</option>
																			<option value="I c">I c {Struktural}</option>
																			<option value="I d">I d {Struktural}</option>
																			<option value="II a">II a {Struktural}</option>
																			<option value="II b">II b {Struktural}</option>
																			<option value="II c">II c {Struktural}</option>
																			<option value="II d">II d {Struktural}</option>
																			<option value="III a">III a {Struktural}</option>
																			<option value="III b">III b {Struktural}</option>
																			<option value="III c">III c {Struktural}</option>
																			<option value="III d">III d {Struktural}</option>
																			<option value="IV a">IV a {Struktural}</option>
																			<option value="IV b">IV b {Struktural}</option>
																			<option value="IV c">IV c {Struktural}</option>
																			
																			<option value="II a">II a {Fungsional}</option>
																			<option value="II b">II b {Fungsional}</option>
																			<option value="II c">II c {Fungsional}</option>
																			<option value="II d">II d {Fungsional}</option>
																			<option value="III a">III a {Fungsional}</option>
																			<option value="III b">III b {Fungsional}</option>
																			<option value="III c">III c {Fungsional}</option>
																			<option value="III d">III d {Fungsional}</option>

																			<option value="III a">III a {Profesi}</option>
																			<option value="III b">III b {Profesi}</option>
																			<option value="III c">III c {Profesi}</option>
																			<option value="III d">III d {Profesi}</option>
																			<option value="IV a">IV a {Profesi}</option>
																			<option value="IV b">IV b {Profesi}</option>
																			<option value="IV c">IV c {Profesi}</option>

																		</select>
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">Pangkat Golongan</span>
																		<select class="form-control" id="pangkat_golongan">
																			<option value="-">Bukan PNS</option>
																			<option value="Juru">Juru {Struktural}</option>
																			<option value="Juru Tk.I">Juru Tk.I {Struktural}</option>
																			<option value="Pengatur Muda">Pengatur Muda {Struktural}</option>
																			<option value="Pengatur Muda Tk.I">Pengatur Muda Tk.I {Struktural}</option>
																			<option value="Pengatur">Pengatur {Struktural}</option>
																			<option value="Pengatur Tk.I">Pengatur Tk.I {Struktural}</option>
																			<option value="Penata Muda">Penata Muda {Struktural}</option>
																			<option value="Penata Muda Tk.I">Penata Muda Tk.I {Struktural}</option>
																			<option value="Penata">Penata {Struktural}</option>
																			<option value="Penata Tk.I">Penata Tk.I {Struktural}</option>
																			<option value="Pembina">Pembina</option>
																			<option value="Pembina Tk.I">Pembina Tk.I {Struktural}</option>
																			<option value="Pembina Utama Muda">Pembina Utama Muda {Struktural}</option>
																			
																			<option value="Pemula">Pemula {Fungsional}</option>
																			<option value="Terampil ">Terampil {Fungsional}</option>
																			<option value="Mahir">Mahir {Fungsional}</option>
																			<option value="Penyelia">Penyelia {Fungsional}</option>

																			<option value="Pertama">Pertama</option>
																			<option value="Muda">Muda</option>
																			<option value="Madya">Madya</option>

																		</select>
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">NIP</span>
																		<input type="text" class="form-control" id="nip" />
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">Prediksi Pensiun</span>
																		<input type="date" class="form-control" id="pensiun" />
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">Gaji</span>
																		<input type="text" class="form-control" id="gaji" placeholder="Masukkan Gaji Sesuai SK" />
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">Masukkan Ruangan</span>
																		<select class="form-control" id="ruangan">
																			<option value="LOKET 1 ( RM )">LOKET 1 ( RM )</option>
																			<option value="LOKET  2  ( MOBDA )">LOKET  2  ( MOBDA )</option>
																			<option value="ASOKA">ASOKA</option>
																			<option value="ANGGREK">ANGGREK</option>
																			<option value="SAKURA">SAKURA</option>
																			<option value="BUGENVILE">BUGENVILE</option>
																			<option value="CAMELIA">CAMELIA</option>
																			<option value="CEMPAKA">CEMPAKA</option>
																			<option value="DAHLIA">DAHLIA</option>
																			<option value="EDELWEIS">EDELWEIS</option>
																			<option value="FLAMBOYAN">FLAMBOYAN</option>
																			<option value="MELATI">MELATI</option>
																			<option value="TULIP">TULIP</option>
																			<option value="IBS DAN INSTALASI ANASTHESI">IBS DAN INSTALASI ANASTHESI</option>
																			<option value="HD">HD</option>
																			<option value="IPCN">IPCN</option>
																			<option value="INSTALASI RAWAT JALAN">INSTALASI RAWAT JALAN</option>
																			<option value="INSTALASI FARMASI">INSTALASI FARMASI</option>
																			<option value="INSTALASI KESEHATAN LINGKUNGAN ">INSTALASI KESEHATAN LINGKUNGAN </option>
																			<option value="CLEANING SERVICE">CLEANING SERVICE</option>
																			<option value="RADIOLOGI">RADIOLOGI</option>
																			<option value="INSTALASI LABORATORIUM">INSTALASI LABORATORIUM</option>
																			<option value="INSTALASI LINEN">INSTALASI LINEN</option>
																			<option value="INSTALASI CSSD">INSTALASI CSSD</option>
																			<option value="INSTALASI PEMELIHARAAN SARANA">INSTALASI PEMELIHARAAN SARANA</option>
																			<option value="INSTALASI TEKNOLOGI DAN INFORMASI">INSTALASI TEKNOLOGI DAN INFORMASI</option>
																			<option value="INSTALASI PEMULASARAAN  JENAZAH">INSTALASI PEMULASARAAN  JENAZAH</option>
																			<option value="INSTALASI  GIZI">INSTALASI  GIZI</option>
																			<option value="BAGIAN SUNGRAM DAN REKAM  MEDIK">BAGIAN SUNGRAM DAN REKAM  MEDIK</option>
																			<option value="BIDANG YANKEP">BIDANG YANKEP</option>
																			<option value="BIDANG YANMED">BIDANG YANMED</option>
																			<option value="BIDANG YANJANG">BIDANG YANJANG</option>
																			<option value="BAGIAN UMUM">BAGIAN UMUM</option>
																			<option value="BAGIAN PERLENGKAPAN">BAGIAN PERLENGKAPAN</option>
																			<option value="BAGIAN KEPEGAWAIAN">BAGIAN KEPEGAWAIAN</option>
																			<option value="PETUGAS PARKIR UMUM">PETUGAS PARKIR UMUM</option>
																			<option value="BAGIAN KEUANGAN">BAGIAN KEUANGAN</option>
																			<option value="BAGIAN ESELON">BAGIAN ESELON</option>
																			<option value="KOMITE  MEDIK">KOMITE  MEDIK</option>
																			<option value="TIM PENGADAAN BARANG DAN JASA ( TPBJ )">TIM PENGADAAN BARANG DAN JASA ( TPBJ )</option>
																			<option value="SATPAM">SATPAM</option>
																			<option value="SATUAN PENGAWAS INTERNAL ( SPI)">SATUAN PENGAWAS INTERNAL ( SPI)</option>
																			<option value="INSTALASI GAS MEDIK">INSTALASI GAS MEDIK</option>
																			<option value="IGD">IGD</option>
																			<option value="INSTALASI AMBULANCE">INSTALASI AMBULANCE</option>
																			<option value="INSTALASI PROMKES">INSTALASI PROMKES</option>
																			<option value="PENDIDIKAN&PENELITIAN">PENDIDIKAN&PENELITIAN</option>
																			<option value="PENGADMINISTRASIAN UMUM">PENGADMINISTRASIAN UMUM</option>
																			<option value="UNIT CASEMIX">UNIT CASEMIX</option>
																		</select>
																		
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">No SK</span>
																		<input type="text" class="form-control" id="no_sk" placeholder="Masukkan No Sesuai SK" />
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">No STR</span>
																		<input type="text" class="form-control" id="no_str" placeholder="Masukkan No Sesuai STR" />
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">No SIP</span>
																		<input type="text" class="form-control" id="no_sip" placeholder="Masukkan No Sesuai SIP" />
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">Masa Berlaku STR/SIP</span>
																		<input type="date" class="form-control" id="masa_sip"  />
																	</div>
																</div>
																<div class="badge badge-danger" id="pesanErrorEdit"></div>
																<div class="text-center">
																	<button type="button" onClick="edit()" id="tombolEdit" class="btn btn-success my-2">Simpan</button>
																</div>
														</form>
														<!--end::Form-->
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
												<div class="card-header bg-primary pb-1">
												<div class="text-muted text-center mt-2 mb-3">
													<span class="text-white">Profile Karyawan</span>
												</div>
												</div>
												<div class="card-body px-lg-5 py-lg-5">
													
													<!--begin::Education-->
													<div class="d-flex flex-row">
														<!--begin::Aside-->
														<div class="flex-row-auto offcanvas-mobile w-300px w-xl-325px" id="kt_profile_aside">
															<!--begin::Nav Panel Widget 2-->
															<div class="card card-custom gutter-b">
																<!--begin::Body-->
																<div class="card-body">
																	<!--begin::Wrapper-->
																	<div class="d-flex justify-content-between flex-column pt-4 h-100">
																		<!--begin::Container-->
																		<div class="pb-5">
																			<!--begin::Header-->
																			<div class="d-flex flex-column flex-center">
																				<!--begin::Symbol-->
																				<div class="symbol symbol-120 symbol-circle symbol-success overflow-hidden">
																					<span class="symbol-label" id="view_foto">
																						<!-- <img src="https://preview.keenthemes.com/metronic/theme/html/demo2/dist/assets/media/svg/avatars/007-boy-2.svg" class="h-75 align-self-end" alt="" /> -->
																						<!-- <img src="#" id="view_foto" alt="" /> -->
																					</span>
																				</div>
																				<!--end::Symbol-->
																				<!--begin::Username-->
																				<form role="form">
																					<div class="form-group mb-1">
																						<span class="form-text text-muted">ID Karyawan</span>
																						<input type="text" class="form-control" id="view_id_karyawan" disabled/>
																					</div>
																					<div class="form-group mb-1">
																						<span class="form-text text-muted">Nama Lengkap</span>
																						<input type="text" class="form-control" id="view_nama" disabled/>
																					</div>
																					<div class="form-group mb-1">
																						<span class="form-text text-muted">Gaji</span>
																						<input type="text" class="form-control" id="view_gaji" disabled/>
																					</div>
																					<div class="form-group mb-1">
																						<span class="form-text text-muted">Ruangan</span>
																						<input type="text" class="form-control" id="view_ruangan" disabled/>
																					</div>
																					<div class="form-group mb-3">
																						<span class="form-text text-muted">Status Karyawan</span>
																						<input type="text" class="form-control" id="view_status_karyawan" disabled />
																					</div>
																					<div class="form-group mb-3">
																						<span class="form-text text-muted">NIP</span>
																						<input type="text" class="form-control" id="view_nip" disabled />
																					</div>
																					<div class="form-group mb-3">
																						<span class="form-text text-muted">Jabatan</span>
																						<input type="text" class="form-control" id="view_jabatan" disabled/>
																					</div>
																					<div class="form-group mb-3">
																						<span class="form-text text-muted">NIK</span>
																						<input type="text" class="form-control" id="view_nik" disabled/>
																					</div>
																					<div class="form-group mb-3">
																						<span class="form-text text-muted">Pendidikan</span>
																						<input type="text" class="form-control" id="view_jenis_pendidikan" disabled/>
																					</div>
																					<div class="form-group mb-3">
																						<span class="form-text text-muted">Email</span>
																						<input type="text" class="form-control" id="view_email" disabled/>
																					</div>
																					<div class="form-group mb-3">
																						<span class="form-text text-muted">No Hp</span>
																						<input type="text" class="form-control" id="view_no_hp" disabled/>
																					</div>
																				</form>
																			</div>
																			<!--end::Header-->
																		</div>
																		<!--eng::Container-->
																	</div>
																	<!--end::Wrapper-->
																</div>
																<!--end::Body-->
															</div>
															<!--end::Nav Panel Widget 2-->
														</div>
														<!--end::Aside-->
														<!--begin::Content-->
														<div class="flex-row-fluid ml-lg-8">
															<!--begin::Card-->
															<div class="card card-custom gutter-bs">
																<!--Begin::Header-->
																<div class="card-header card-header-tabs-line">
																	<div class="card-toolbar">
																		<ul class="nav nav-tabs nav-tabs-space-lg nav-tabs-line nav-tabs-bold nav-tabs-line-3x" role="tablist">
																			<li class="nav-item mr-3">
																				<a class="nav-link active" data-toggle="tab" href="#kt_apps_contacts_view_tab_2">
																					<span class="nav-icon mr-2">
																						<span class="svg-icon mr-3">
																							<!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/Communication/Chat-check.svg-->
																							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																									<rect x="0" y="0" width="24" height="24" />
																									<path d="M4.875,20.75 C4.63541667,20.75 4.39583333,20.6541667 4.20416667,20.4625 L2.2875,18.5458333 C1.90416667,18.1625 1.90416667,17.5875 2.2875,17.2041667 C2.67083333,16.8208333 3.29375,16.8208333 3.62916667,17.2041667 L4.875,18.45 L8.0375,15.2875 C8.42083333,14.9041667 8.99583333,14.9041667 9.37916667,15.2875 C9.7625,15.6708333 9.7625,16.2458333 9.37916667,16.6291667 L5.54583333,20.4625 C5.35416667,20.6541667 5.11458333,20.75 4.875,20.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																									<path d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z" fill="#000000" />
																								</g>
																							</svg>
																							<!--end::Svg Icon-->
																						</span>
																					</span>
																					<span class="nav-text font-weight-bold">Info Karyawan</span>
																				</a>
																			</li>
																			<li class="nav-item mr-3">
																				<a class="nav-link" data-toggle="tab" href="#kt_apps_contacts_view_tab_3">
																					<span class="nav-icon mr-2">
																						<span class="svg-icon mr-3">
																							<!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/Devices/Display1.svg-->
																							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																									<rect x="0" y="0" width="24" height="24" />
																									<path d="M11,20 L11,17 C11,16.4477153 11.4477153,16 12,16 C12.5522847,16 13,16.4477153 13,17 L13,20 L15.5,20 C15.7761424,20 16,20.2238576 16,20.5 C16,20.7761424 15.7761424,21 15.5,21 L8.5,21 C8.22385763,21 8,20.7761424 8,20.5 C8,20.2238576 8.22385763,20 8.5,20 L11,20 Z" fill="#000000" opacity="0.3" />
																									<path d="M3,5 L21,5 C21.5522847,5 22,5.44771525 22,6 L22,16 C22,16.5522847 21.5522847,17 21,17 L3,17 C2.44771525,17 2,16.5522847 2,16 L2,6 C2,5.44771525 2.44771525,5 3,5 Z M4.5,8 C4.22385763,8 4,8.22385763 4,8.5 C4,8.77614237 4.22385763,9 4.5,9 L13.5,9 C13.7761424,9 14,8.77614237 14,8.5 C14,8.22385763 13.7761424,8 13.5,8 L4.5,8 Z M4.5,10 C4.22385763,10 4,10.2238576 4,10.5 C4,10.7761424 4.22385763,11 4.5,11 L7.5,11 C7.77614237,11 8,10.7761424 8,10.5 C8,10.2238576 7.77614237,10 7.5,10 L4.5,10 Z" fill="#000000" />
																								</g>
																							</svg>
																							<!--end::Svg Icon-->
																						</span>
																					</span>
																					<span class="nav-text font-weight-bold">Kepegawaian</span>
																				</a>
																			</li>
																			<li class="nav-item mr-3">
																				<a class="nav-link" data-toggle="tab" href="#kt_apps_contacts_view_tab_4">
																					<span class="nav-icon mr-2">
																						<span class="svg-icon mr-3">
																							<!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/Home/Globe.svg-->
																							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																									<rect x="0" y="0" width="24" height="24" />
																									<path d="M13,18.9450712 L13,20 L14,20 C15.1045695,20 16,20.8954305 16,22 L8,22 C8,20.8954305 8.8954305,20 10,20 L11,20 L11,18.9448245 C9.02872877,18.7261967 7.20827378,17.866394 5.79372555,16.5182701 L4.73856106,17.6741866 C4.36621808,18.0820826 3.73370941,18.110904 3.32581341,17.7385611 C2.9179174,17.3662181 2.88909597,16.7337094 3.26143894,16.3258134 L5.04940685,14.367122 C5.46150313,13.9156769 6.17860937,13.9363085 6.56406875,14.4106998 C7.88623094,16.037907 9.86320756,17 12,17 C15.8659932,17 19,13.8659932 19,10 C19,7.73468744 17.9175842,5.65198725 16.1214335,4.34123851 C15.6753081,4.01567657 15.5775721,3.39010038 15.903134,2.94397499 C16.228696,2.49784959 16.8542722,2.4001136 17.3003976,2.72567554 C19.6071362,4.40902808 21,7.08906798 21,10 C21,14.6325537 17.4999505,18.4476269 13,18.9450712 Z" fill="#000000" fill-rule="nonzero" />
																									<circle fill="#000000" opacity="0.3" cx="12" cy="10" r="6" />
																								</g>
																							</svg>
																							<!--end::Svg Icon-->
																						</span>
																					</span>
																					<span class="nav-text font-weight-bold">Pendidikan</span>
																				</a>
																			</li>
																			<li class="nav-item">
																				<a class="nav-link" data-toggle="tab" href="#kt_apps_contacts_view_tab_1">
																					<span class="nav-icon mr-2">
																						<span class="svg-icon mr-3">
																							<!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/General/Notification2.svg-->
																							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																									<rect x="0" y="0" width="24" height="24" />
																									<path d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z" fill="#000000" />
																									<circle fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5" />
																								</g>
																							</svg>
																							<!--end::Svg Icon-->
																						</span>
																					</span>
																					<span class="nav-text font-weight-bold">Berkas</span>
																				</a>
																			</li>
																		</ul>
																	</div>
																</div>
																<!--end::Header-->
																<!--Begin::Body-->
																<div class="card-body px-0">
																	<div class="tab-content pt-5">
																		<!--begin::Tab Content-->
																		<div class="tab-pane active" id="kt_apps_contacts_view_tab_2" role="tabpanel">
																			<form class="form">
																				<!--begin::Heading-->
																				<div class="row">
																					<div class="col-lg-9 col-xl-6 offset-xl-3">
																						<h3 class="font-size-h6 mb-5">Info Karyawan:</h3>
																					</div>
																				</div>
																				<!--end::Heading-->
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right col-form-label">Alamat</label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid" type="text" id="view_alamat" disabled />
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right col-form-label">Provinsi</label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid" type="text" id="view_prov" disabled />
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right col-form-label">Kabupaten/Kota</label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid" type="text" id="view_kab" disabled />
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right col-form-label">Kecamatan</label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid" type="text" id="view_kec" disabled />
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right col-form-label">Kelurahan</label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid" type="text" id="view_kelu" disabled />
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right col-form-label">RT/RW</label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid" type="text" id="view_rt_rw" disabled />
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right col-form-label">Kode Pos</label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid" type="text" id="view_kode_pos" disabled />
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right col-form-label">Tempat Lahir</label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid" type="text" id="view_tempat_lahir" disabled />
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right col-form-label">Tanggal Lahir</label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid" type="text" id="view_tanggal_lahir" disabled />
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right col-form-label">Jenis Kelamin</label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid" type="text" id="view_jk" disabled />
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right col-form-label">Agama</label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid" type="text" id="view_agama" disabled />
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right col-form-label">Status Pernikahan</label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid" type="text" id="view_status_pernikahan" disabled />
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right col-form-label">Golongan Darah</label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid" type="text" id="view_goldar" disabled />
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right col-form-label">Suku Bangsa</label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid" type="text" id="view_suku" disabled />
																					</div>
																				</div>
																				<div class="separator separator-dashed my-10"></div>
																			</form>
																		</div>
																		<!--end::Tab Content-->
																		<!--begin::Tab Content-->
																		<div class="tab-pane" id="kt_apps_contacts_view_tab_3" role="tabpanel">
																			<form class="form">
																				<!--begin::Heading-->
																				<div class="row">
																					<div class="col-lg-9 col-xl-6 offset-xl-3">
																						<h3 class="font-size-h6 mb-5">Kepegawaian :</h3>
																					</div>
																				</div>
																				<!--end::Heading-->
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right col-form-label">Jenis Tenaga</label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid" type="text" id="view_jenis_tenaga" disabled />
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right col-form-label">Jenis Detail Tenaga</label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid" type="text" id="view_jenis_detail_tenaga" disabled />
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right col-form-label">Jenis Jabatan</label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid" type="text" id="view_jenis_jabatan" disabled />
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right col-form-label">Golongan</label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid" type="text" id="view_golongan" disabled />
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right col-form-label">Pangkat Golongan</label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid" type="text" id="view_pangkat_golongan" disabled />
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right col-form-label">No SK</label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid" type="text" id="view_no_sk" disabled />
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right col-form-label">No SIP</label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid" type="text" id="view_no_sip" disabled />
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right col-form-label">No STR</label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid" type="text" id="view_no_str" disabled />
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right col-form-label">Masa Berlaku STR/SIP</label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid" type="text" id="view_masa_sip" disabled />
																					</div>
																				</div>
																				<div class="separator separator-dashed my-10"></div>
																			</form>
																		</div>
																		<!--end::Tab Content-->
																		<!--begin::Tab Content-->
																		<div class="tab-pane" id="kt_apps_contacts_view_tab_4" role="tabpanel">
																			<form class="form">
																				<!--begin::Heading-->
																				<div class="row">
																					<div class="col-lg-9 col-xl-6 offset-xl-3">
																						<h3 class="font-size-h6 mb-5">Pendidikan :</h3>
																					</div>
																				</div>
																				<!--end::Heading-->
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right col-form-label">SD</label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid" type="text" id="view_sd" disabled />
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right col-form-label">No Ijazah SD</label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid" type="text" id="view_no_sd" disabled />
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right col-form-label">SMP</label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid" type="text" id="view_smp" disabled />
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right col-form-label">No Ijazah SMP</label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid" type="text" id="view_no_smp" disabled />
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right col-form-label">SMA</label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid" type="text" id="view_smp" disabled />
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right col-form-label">No Ijazah SMA</label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid" type="text" id="view_no_sma" disabled />
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right col-form-label">S1</label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid" type="text" id="view_s1" disabled />
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right col-form-label">No Ijazah S1</label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid" type="text" id="view_no_s1" disabled />
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right col-form-label">S2</label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid" type="text" id="view_s2" disabled />
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right col-form-label">No Ijazah S2</label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid" type="text" id="view_no_s2" disabled />
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right col-form-label">S3</label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid" type="text" id="view_s3" disabled />
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right col-form-label">No Ijazah S3</label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid" type="text" id="view_no_s3" disabled />
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right col-form-label">Profesi</label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid" type="text" id="view_profesi" disabled />
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right col-form-label">No Ijazah Profesi</label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid" type="text" id="view_no_profesi" disabled />
																					</div>
																				</div>
																			</form>
																		</div>
																		<!--end::Tab Content-->
																		<!--begin::Tab Content-->
																		<div class="tab-pane" id="kt_apps_contacts_view_tab_1" role="tabpanel">
																			<div class="container">
																				<form class="form">
																					
																					<!--begin::List Widget 17-->
																					<div class="card card-custom gutter-b">
																						<!--begin::Header-->
																							<div class="card-header border-0">
																								<h3 class="card-title font-weight-bolder text-dark">Berkas</h3>
																							</div>
																						<!--begin::Body-->
																						<div class="card-body pt-1">
																							<!--begin::Body-->
																							<div class="card-body pt-1">
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
																										<a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1" id="view_file_penempatan">SK Penempatan</a>
																									</div>
																								</div>
																								<!--end::Item-->
																								<!--begin::Item-->
																								<div class="d-flex align-items-center bg-light-success rounded p-5 mb-9">
																									<!--begin::Icon-->
																									<span class="svg-icon svg-icon-success mr-5">
																										<span class="svg-icon svg-icon-lg">
																											<!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/Communication/Write.svg-->
																											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																													<rect x="0" y="0" width="24" height="24" />
																													<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
																													<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																												</g>
																											</svg>
																											<!--end::Svg Icon-->
																										</span>
																									</span>
																									<!--end::Icon-->
																									<!--begin::Title-->
																									<div class="d-flex flex-column flex-grow-1 mr-2">
																									<a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1" id="view_file_sk">SK KARYAWAN</a>
																									</div>
																									<!--end::Title-->
																									<!--begin::Lable-->
																									<!-- <span class="font-weight-bolder text-success py-1 font-size-lg">+50%</span> -->
																									<!--end::Lable-->
																								</div>
																								<!--end::Item-->
																								<!--begin::Item-->
																								<div class="d-flex align-items-center bg-light-danger rounded p-5 mb-9">
																									<!--begin::Icon-->
																									<span class="svg-icon svg-icon-danger mr-5">
																										<span class="svg-icon svg-icon-lg">
																											<!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/Communication/Group-chat.svg-->
																											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																													<rect x="0" y="0" width="24" height="24" />
																													<path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000" />
																													<path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3" />
																												</g>
																											</svg>
																											<!--end::Svg Icon-->
																										</span>
																									</span>
																									<!--end::Icon-->
																									<!--begin::Title-->
																									<div class="d-flex flex-column flex-grow-1 mr-2">
																										<a href="#"  class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1" id="view_file_str">STR</a>
																									</div>
																									<!--end::Title-->
																									<!--begin::Lable-->
																									<!-- <span class="font-weight-bolder text-danger py-1 font-size-lg">-27%</span> -->
																									<!--end::Lable-->
																								</div>
																								<!--end::Item-->
																								<!--begin::Item-->
																								<div class="d-flex align-items-center bg-light-danger rounded p-5 mb-9">
																									<!--begin::Icon-->
																									<span class="svg-icon svg-icon-danger mr-5">
																										<span class="svg-icon svg-icon-lg">
																											<!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/Communication/Group-chat.svg-->
																											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																													<rect x="0" y="0" width="24" height="24" />
																													<path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000" />
																													<path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3" />
																												</g>
																											</svg>
																											<!--end::Svg Icon-->
																										</span>
																									</span>
																									<!--end::Icon-->
																									<!--begin::Title-->
																									<div class="d-flex flex-column flex-grow-1 mr-2">
																										<a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1" id="view_file_skp">SKP</a>
																									</div>
																									<!--end::Title-->
																									<!--begin::Lable-->
																									<!-- <span class="font-weight-bolder text-danger py-1 font-size-lg">-27%</span> -->
																									<!--end::Lable-->
																								</div>
																								<!--end::Item-->
																								<!--begin::Item-->
																								<div class="d-flex align-items-center bg-light-info rounded p-5 mb-9">
																									<!--begin::Icon-->
																									<span class="svg-icon svg-icon-info mr-5">
																										<span class="svg-icon svg-icon-lg">
																											<!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/General/Attachment2.svg-->
																											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																													<rect x="0" y="0" width="24" height="24" />
																													<path d="M11.7573593,15.2426407 L8.75735931,15.2426407 C8.20507456,15.2426407 7.75735931,15.6903559 7.75735931,16.2426407 C7.75735931,16.7949254 8.20507456,17.2426407 8.75735931,17.2426407 L11.7573593,17.2426407 L11.7573593,18.2426407 C11.7573593,19.3472102 10.8619288,20.2426407 9.75735931,20.2426407 L5.75735931,20.2426407 C4.65278981,20.2426407 3.75735931,19.3472102 3.75735931,18.2426407 L3.75735931,14.2426407 C3.75735931,13.1380712 4.65278981,12.2426407 5.75735931,12.2426407 L9.75735931,12.2426407 C10.8619288,12.2426407 11.7573593,13.1380712 11.7573593,14.2426407 L11.7573593,15.2426407 Z" fill="#000000" opacity="0.3" transform="translate(7.757359, 16.242641) rotate(-45.000000) translate(-7.757359, -16.242641)" />
																													<path d="M12.2426407,8.75735931 L15.2426407,8.75735931 C15.7949254,8.75735931 16.2426407,8.30964406 16.2426407,7.75735931 C16.2426407,7.20507456 15.7949254,6.75735931 15.2426407,6.75735931 L12.2426407,6.75735931 L12.2426407,5.75735931 C12.2426407,4.65278981 13.1380712,3.75735931 14.2426407,3.75735931 L18.2426407,3.75735931 C19.3472102,3.75735931 20.2426407,4.65278981 20.2426407,5.75735931 L20.2426407,9.75735931 C20.2426407,10.8619288 19.3472102,11.7573593 18.2426407,11.7573593 L14.2426407,11.7573593 C13.1380712,11.7573593 12.2426407,10.8619288 12.2426407,9.75735931 L12.2426407,8.75735931 Z" fill="#000000" transform="translate(16.242641, 7.757359) rotate(-45.000000) translate(-16.242641, -7.757359)" />
																													<path d="M5.89339828,3.42893219 C6.44568303,3.42893219 6.89339828,3.87664744 6.89339828,4.42893219 L6.89339828,6.42893219 C6.89339828,6.98121694 6.44568303,7.42893219 5.89339828,7.42893219 C5.34111353,7.42893219 4.89339828,6.98121694 4.89339828,6.42893219 L4.89339828,4.42893219 C4.89339828,3.87664744 5.34111353,3.42893219 5.89339828,3.42893219 Z M11.4289322,5.13603897 C11.8194565,5.52656326 11.8194565,6.15972824 11.4289322,6.55025253 L10.0147186,7.96446609 C9.62419433,8.35499039 8.99102936,8.35499039 8.60050506,7.96446609 C8.20998077,7.5739418 8.20998077,6.94077682 8.60050506,6.55025253 L10.0147186,5.13603897 C10.4052429,4.74551468 11.0384079,4.74551468 11.4289322,5.13603897 Z M0.600505063,5.13603897 C0.991029355,4.74551468 1.62419433,4.74551468 2.01471863,5.13603897 L3.42893219,6.55025253 C3.81945648,6.94077682 3.81945648,7.5739418 3.42893219,7.96446609 C3.0384079,8.35499039 2.40524292,8.35499039 2.01471863,7.96446609 L0.600505063,6.55025253 C0.209980772,6.15972824 0.209980772,5.52656326 0.600505063,5.13603897 Z" fill="#000000" opacity="0.3" transform="translate(6.014719, 5.843146) rotate(-45.000000) translate(-6.014719, -5.843146)" />
																													<path d="M17.9142136,15.4497475 C18.4664983,15.4497475 18.9142136,15.8974627 18.9142136,16.4497475 L18.9142136,18.4497475 C18.9142136,19.0020322 18.4664983,19.4497475 17.9142136,19.4497475 C17.3619288,19.4497475 16.9142136,19.0020322 16.9142136,18.4497475 L16.9142136,16.4497475 C16.9142136,15.8974627 17.3619288,15.4497475 17.9142136,15.4497475 Z M23.4497475,17.1568542 C23.8402718,17.5473785 23.8402718,18.1805435 23.4497475,18.5710678 L22.0355339,19.9852814 C21.6450096,20.3758057 21.0118446,20.3758057 20.6213203,19.9852814 C20.2307961,19.5947571 20.2307961,18.9615921 20.6213203,18.5710678 L22.0355339,17.1568542 C22.4260582,16.76633 23.0592232,16.76633 23.4497475,17.1568542 Z M12.6213203,17.1568542 C13.0118446,16.76633 13.6450096,16.76633 14.0355339,17.1568542 L15.4497475,18.5710678 C15.8402718,18.9615921 15.8402718,19.5947571 15.4497475,19.9852814 C15.0592232,20.3758057 14.4260582,20.3758057 14.0355339,19.9852814 L12.6213203,18.5710678 C12.2307961,18.1805435 12.2307961,17.5473785 12.6213203,17.1568542 Z" fill="#000000" opacity="0.3" transform="translate(18.035534, 17.863961) scale(1, -1) rotate(45.000000) translate(-18.035534, -17.863961)" />
																												</g>
																											</svg>
																											<!--end::Svg Icon-->
																										</span>
																									</span>
																									<!--end::Icon-->
																									<!--begin::Title-->
																									<div class="d-flex flex-column flex-grow-1 mr-2">
																										<a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1" id="view_file_sip">SIP</a>
																									</div>
																								</div>
																								<!--end::Item-->
																								<!--begin::Item-->
																								<div class="d-flex align-items-center mb-9 bg-light-warning rounded p-5 mb-9">
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
																										<a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1" id="view_file_sd">Ijazah SD</a>
																									</div>
																								</div>
																								<!--end::Item-->
																								<!--begin::Item-->
																								<div class="d-flex align-items-center bg-light-success rounded p-5 mb-9">
																									<!--begin::Icon-->
																									<span class="svg-icon svg-icon-success mr-5">
																										<span class="svg-icon svg-icon-lg">
																											<!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/Communication/Write.svg-->
																											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																													<rect x="0" y="0" width="24" height="24" />
																													<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
																													<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																												</g>
																											</svg>
																											<!--end::Svg Icon-->
																										</span>
																									</span>
																									<!--end::Icon-->
																									<!--begin::Title-->
																									<div class="d-flex flex-column flex-grow-1 mr-2">
																										<a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1" id="view_file_smp">Ijazah SMP</a>
																									</div>
																									<!--end::Title-->
																									<!--begin::Lable-->
																									<!-- <span class="font-weight-bolder text-success py-1 font-size-lg">+50%</span> -->
																									<!--end::Lable-->
																								</div>
																								<!--end::Item-->
																								<!--begin::Item-->
																								<div class="d-flex align-items-center bg-light-danger rounded p-5 mb-9">
																									<!--begin::Icon-->
																									<span class="svg-icon svg-icon-danger mr-5">
																										<span class="svg-icon svg-icon-lg">
																											<!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/Communication/Group-chat.svg-->
																											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																													<rect x="0" y="0" width="24" height="24" />
																													<path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000" />
																													<path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3" />
																												</g>
																											</svg>
																											<!--end::Svg Icon-->
																										</span>
																									</span>
																									<!--end::Icon-->
																									<!--begin::Title-->
																									<div class="d-flex flex-column flex-grow-1 mr-2">
																										<a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1" id="view_file_sma">Ijazah SMA</a>
																									</div>
																									<!--end::Title-->
																									<!--begin::Lable-->
																									<!-- <span class="font-weight-bolder text-danger py-1 font-size-lg">-27%</span> -->
																									<!--end::Lable-->
																								</div>
																								<!--end::Item-->
																								<!--begin::Item-->
																								<div class="d-flex align-items-center bg-light-info rounded p-5 mb-9">
																									<!--begin::Icon-->
																									<span class="svg-icon svg-icon-info mr-5">
																										<span class="svg-icon svg-icon-lg">
																											<!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/General/Attachment2.svg-->
																											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																													<rect x="0" y="0" width="24" height="24" />
																													<path d="M11.7573593,15.2426407 L8.75735931,15.2426407 C8.20507456,15.2426407 7.75735931,15.6903559 7.75735931,16.2426407 C7.75735931,16.7949254 8.20507456,17.2426407 8.75735931,17.2426407 L11.7573593,17.2426407 L11.7573593,18.2426407 C11.7573593,19.3472102 10.8619288,20.2426407 9.75735931,20.2426407 L5.75735931,20.2426407 C4.65278981,20.2426407 3.75735931,19.3472102 3.75735931,18.2426407 L3.75735931,14.2426407 C3.75735931,13.1380712 4.65278981,12.2426407 5.75735931,12.2426407 L9.75735931,12.2426407 C10.8619288,12.2426407 11.7573593,13.1380712 11.7573593,14.2426407 L11.7573593,15.2426407 Z" fill="#000000" opacity="0.3" transform="translate(7.757359, 16.242641) rotate(-45.000000) translate(-7.757359, -16.242641)" />
																													<path d="M12.2426407,8.75735931 L15.2426407,8.75735931 C15.7949254,8.75735931 16.2426407,8.30964406 16.2426407,7.75735931 C16.2426407,7.20507456 15.7949254,6.75735931 15.2426407,6.75735931 L12.2426407,6.75735931 L12.2426407,5.75735931 C12.2426407,4.65278981 13.1380712,3.75735931 14.2426407,3.75735931 L18.2426407,3.75735931 C19.3472102,3.75735931 20.2426407,4.65278981 20.2426407,5.75735931 L20.2426407,9.75735931 C20.2426407,10.8619288 19.3472102,11.7573593 18.2426407,11.7573593 L14.2426407,11.7573593 C13.1380712,11.7573593 12.2426407,10.8619288 12.2426407,9.75735931 L12.2426407,8.75735931 Z" fill="#000000" transform="translate(16.242641, 7.757359) rotate(-45.000000) translate(-16.242641, -7.757359)" />
																													<path d="M5.89339828,3.42893219 C6.44568303,3.42893219 6.89339828,3.87664744 6.89339828,4.42893219 L6.89339828,6.42893219 C6.89339828,6.98121694 6.44568303,7.42893219 5.89339828,7.42893219 C5.34111353,7.42893219 4.89339828,6.98121694 4.89339828,6.42893219 L4.89339828,4.42893219 C4.89339828,3.87664744 5.34111353,3.42893219 5.89339828,3.42893219 Z M11.4289322,5.13603897 C11.8194565,5.52656326 11.8194565,6.15972824 11.4289322,6.55025253 L10.0147186,7.96446609 C9.62419433,8.35499039 8.99102936,8.35499039 8.60050506,7.96446609 C8.20998077,7.5739418 8.20998077,6.94077682 8.60050506,6.55025253 L10.0147186,5.13603897 C10.4052429,4.74551468 11.0384079,4.74551468 11.4289322,5.13603897 Z M0.600505063,5.13603897 C0.991029355,4.74551468 1.62419433,4.74551468 2.01471863,5.13603897 L3.42893219,6.55025253 C3.81945648,6.94077682 3.81945648,7.5739418 3.42893219,7.96446609 C3.0384079,8.35499039 2.40524292,8.35499039 2.01471863,7.96446609 L0.600505063,6.55025253 C0.209980772,6.15972824 0.209980772,5.52656326 0.600505063,5.13603897 Z" fill="#000000" opacity="0.3" transform="translate(6.014719, 5.843146) rotate(-45.000000) translate(-6.014719, -5.843146)" />
																													<path d="M17.9142136,15.4497475 C18.4664983,15.4497475 18.9142136,15.8974627 18.9142136,16.4497475 L18.9142136,18.4497475 C18.9142136,19.0020322 18.4664983,19.4497475 17.9142136,19.4497475 C17.3619288,19.4497475 16.9142136,19.0020322 16.9142136,18.4497475 L16.9142136,16.4497475 C16.9142136,15.8974627 17.3619288,15.4497475 17.9142136,15.4497475 Z M23.4497475,17.1568542 C23.8402718,17.5473785 23.8402718,18.1805435 23.4497475,18.5710678 L22.0355339,19.9852814 C21.6450096,20.3758057 21.0118446,20.3758057 20.6213203,19.9852814 C20.2307961,19.5947571 20.2307961,18.9615921 20.6213203,18.5710678 L22.0355339,17.1568542 C22.4260582,16.76633 23.0592232,16.76633 23.4497475,17.1568542 Z M12.6213203,17.1568542 C13.0118446,16.76633 13.6450096,16.76633 14.0355339,17.1568542 L15.4497475,18.5710678 C15.8402718,18.9615921 15.8402718,19.5947571 15.4497475,19.9852814 C15.0592232,20.3758057 14.4260582,20.3758057 14.0355339,19.9852814 L12.6213203,18.5710678 C12.2307961,18.1805435 12.2307961,17.5473785 12.6213203,17.1568542 Z" fill="#000000" opacity="0.3" transform="translate(18.035534, 17.863961) scale(1, -1) rotate(45.000000) translate(-18.035534, -17.863961)" />
																												</g>
																											</svg>
																											<!--end::Svg Icon-->
																										</span>
																									</span>
																									<!--end::Icon-->
																									<!--begin::Title-->
																									<div class="d-flex flex-column flex-grow-1 mr-2">
																										<a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1" id="view_file_s1">Ijazah SI</a>
																									</div>
																								</div>
																								<!--end::Item-->
																								<!--begin::Item-->
																								<div class="d-flex align-items-center mb-9 bg-light-warning rounded p-5 mb-9">
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
																										<a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1" id="view_file_s2">Ijazah S2</a>
																									</div>
																								</div>
																								<!--end::Item-->
																								<!--begin::Item-->
																								<div class="d-flex align-items-center bg-light-success rounded p-5 mb-9">
																									<!--begin::Icon-->
																									<span class="svg-icon svg-icon-success mr-5">
																										<span class="svg-icon svg-icon-lg">
																											<!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/Communication/Write.svg-->
																											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																													<rect x="0" y="0" width="24" height="24" />
																													<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
																													<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																												</g>
																											</svg>
																											<!--end::Svg Icon-->
																										</span>
																									</span>
																									<!--end::Icon-->
																									<!--begin::Title-->
																									<div class="d-flex flex-column flex-grow-1 mr-2">
																										<a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1" id="view_file_s3">Ijazah S3</a>
																									</div>
																									<!--end::Title-->
																									<!--begin::Lable-->
																									<!-- <span class="font-weight-bolder text-success py-1 font-size-lg">+50%</span> -->
																									<!--end::Lable-->
																								</div>
																								<!--end::Item-->
																								<!--begin::Item-->
																								<div class="d-flex align-items-center bg-light-danger rounded p-5 mb-9">
																									<!--begin::Icon-->
																									<span class="svg-icon svg-icon-danger mr-5">
																										<span class="svg-icon svg-icon-lg">
																											<!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/Communication/Group-chat.svg-->
																											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																													<rect x="0" y="0" width="24" height="24" />
																													<path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000" />
																													<path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3" />
																												</g>
																											</svg>
																											<!--end::Svg Icon-->
																										</span>
																									</span>
																									<!--end::Icon-->
																									<!--begin::Title-->
																									<div class="d-flex flex-column flex-grow-1 mr-2">
																										<a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1" id="view_file_profesi">Ijazah Profesi</a>
																									</div>
																									<!--end::Title-->
																									<!--begin::Lable-->
																									<!-- <span class="font-weight-bolder text-danger py-1 font-size-lg">-27%</span> -->
																									<!--end::Lable-->
																								</div>
																								<!--end::Item-->
																							</div>
																							<!--end::Body-->
																							
																						</div>
																						<!--end::Body-->
																					</div>
																					<!--end::List Widget 17-->
																				</form>
																			</div>
																		</div>
																		<!--end::Tab Content-->
																		<!--begin::Tab Content-->
																		<div class="tab-pane" id="kt_apps_contacts_view_tab_5" role="tabpanel">
																			<form class="form">
																				<!--begin::Notice-->
																				<div class="row">
																					<div class="col-lg-9 col-xl-6 offset-xl-3">
																						<div class="alert alert-custom alert-light-danger fade show mb-9" role="alert">
																							<div class="alert-icon">
																								<i class="flaticon-warning"></i>
																							</div>
																							<div class="alert-text">Configure user passwords to expire periodically. 
																							<br />Users will need warning that their passwords are going to expire, or they might inadvertently get locked out of the system!</div>
																							<div class="alert-close">
																								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
																									<span aria-hidden="true">
																										<i class="ki ki-close"></i>
																									</span>
																								</button>
																							</div>
																						</div>
																					</div>
																				</div>
																				<!--end::Notice-->
																				<!--begin::Heading-->
																				<div class="row">
																					<div class="col-lg-9 col-xl-6 offset-xl-3">
																						<h3 class="font-size-h6 mb-5">Account:</h3>
																					</div>
																				</div>
																				<!--end::Heading-->
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right col-form-label">Username</label>
																					<div class="col-lg-9 col-xl-6">
																						<div class="spinner spinner-sm spinner-success spinner-right">
																							<input class="form-control form-control-lg form-control-solid" type="text" value="nick84" />
																						</div>
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right col-form-label">Email Address</label>
																					<div class="col-lg-9 col-xl-6">
																						<div class="input-group input-group-lg input-group-solid">
																							<div class="input-group-prepend">
																								<span class="input-group-text">
																									<i class="la la-at"></i>
																								</span>
																							</div>
																							<input type="text" class="form-control form-control-lg form-control-solid" value="nick.watson@loop.com" placeholder="Email" />
																						</div>
																						<span class="form-text text-muted">Email will not be publicly displayed. 
																						<a href="#">Learn more</a>.</span>
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right col-form-label">Language</label>
																					<div class="col-lg-9 col-xl-6">
																						<select class="form-control form-control-lg form-control-solid">
																							<option>Select Language...</option>
																							<option value="id">Bahasa Indonesia - Indonesian</option>
																							<option value="msa">Bahasa Melayu - Malay</option>
																							<option value="ca">Català - Catalan</option>
																							<option value="cs">Čeština - Czech</option>
																							<option value="da">Dansk - Danish</option>
																							<option value="de">Deutsch - German</option>
																							<option value="en" selected="selected">English</option>
																							<option value="en-gb">English UK - British English</option>
																							<option value="es">Español - Spanish</option>
																							<option value="eu">Euskara - Basque (beta)</option>
																							<option value="fil">Filipino</option>
																							<option value="fr">Français - French</option>
																							<option value="ga">Gaeilge - Irish (beta)</option>
																							<option value="gl">Galego - Galician (beta)</option>
																							<option value="hr">Hrvatski - Croatian</option>
																							<option value="it">Italiano - Italian</option>
																							<option value="hu">Magyar - Hungarian</option>
																							<option value="nl">Nederlands - Dutch</option>
																							<option value="no">Norsk - Norwegian</option>
																							<option value="pl">Polski - Polish</option>
																							<option value="pt">Português - Portuguese</option>
																							<option value="ro">Română - Romanian</option>
																							<option value="sk">Slovenčina - Slovak</option>
																							<option value="fi">Suomi - Finnish</option>
																							<option value="sv">Svenska - Swedish</option>
																							<option value="vi">Tiếng Việt - Vietnamese</option>
																							<option value="tr">Türkçe - Turkish</option>
																							<option value="el">Ελληνικά - Greek</option>
																							<option value="bg">Български език - Bulgarian</option>
																							<option value="ru">Русский - Russian</option>
																							<option value="sr">Српски - Serbian</option>
																							<option value="uk">Українська мова - Ukrainian</option>
																							<option value="he">עִבְרִית - Hebrew</option>
																							<option value="ur">اردو - Urdu (beta)</option>
																							<option value="ar">العربية - Arabic</option>
																							<option value="fa">فارسی - Persian</option>
																							<option value="mr">मराठी - Marathi</option>
																							<option value="hi">हिन्दी - Hindi</option>
																							<option value="bn">বাংলা - Bangla</option>
																							<option value="gu">ગુજરાતી - Gujarati</option>
																							<option value="ta">தமிழ் - Tamil</option>
																							<option value="kn">ಕನ್ನಡ - Kannada</option>
																							<option value="th">ภาษาไทย - Thai</option>
																							<option value="ko">한국어 - Korean</option>
																							<option value="ja">日本語 - Japanese</option>
																							<option value="zh-cn">简体中文 - Simplified Chinese</option>
																							<option value="zh-tw">繁體中文 - Traditional Chinese</option>
																						</select>
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right col-form-label">Time Zone</label>
																					<div class="col-lg-9 col-xl-6">
																						<select class="form-control form-control-lg form-control-solid">
																							<option data-offset="-39600" value="International Date Line West">(GMT-11:00) International Date Line West</option>
																							<option data-offset="-39600" value="Midway Island">(GMT-11:00) Midway Island</option>
																							<option data-offset="-39600" value="Samoa">(GMT-11:00) Samoa</option>
																							<option data-offset="-36000" value="Hawaii">(GMT-10:00) Hawaii</option>
																							<option data-offset="-28800" value="Alaska">(GMT-08:00) Alaska</option>
																							<option data-offset="-25200" value="Pacific Time (US &amp; Canada)">(GMT-07:00) Pacific Time (US &amp; Canada)</option>
																							<option data-offset="-25200" value="Tijuana">(GMT-07:00) Tijuana</option>
																							<option data-offset="-25200" value="Arizona">(GMT-07:00) Arizona</option>
																							<option data-offset="-21600" value="Mountain Time (US &amp; Canada)">(GMT-06:00) Mountain Time (US &amp; Canada)</option>
																							<option data-offset="-21600" value="Chihuahua">(GMT-06:00) Chihuahua</option>
																							<option data-offset="-21600" value="Mazatlan">(GMT-06:00) Mazatlan</option>
																							<option data-offset="-21600" value="Saskatchewan">(GMT-06:00) Saskatchewan</option>
																							<option data-offset="-21600" value="Central America">(GMT-06:00) Central America</option>
																							<option data-offset="-18000" value="Central Time (US &amp; Canada)">(GMT-05:00) Central Time (US &amp; Canada)</option>
																							<option data-offset="-18000" value="Guadalajara">(GMT-05:00) Guadalajara</option>
																							<option data-offset="-18000" value="Mexico City">(GMT-05:00) Mexico City</option>
																							<option data-offset="-18000" value="Monterrey">(GMT-05:00) Monterrey</option>
																							<option data-offset="-18000" value="Bogota">(GMT-05:00) Bogota</option>
																							<option data-offset="-18000" value="Lima">(GMT-05:00) Lima</option>
																							<option data-offset="-18000" value="Quito">(GMT-05:00) Quito</option>
																							<option data-offset="-14400" value="Eastern Time (US &amp; Canada)">(GMT-04:00) Eastern Time (US &amp; Canada)</option>
																							<option data-offset="-14400" value="Indiana (East)">(GMT-04:00) Indiana (East)</option>
																							<option data-offset="-14400" value="Caracas">(GMT-04:00) Caracas</option>
																							<option data-offset="-14400" value="La Paz">(GMT-04:00) La Paz</option>
																							<option data-offset="-14400" value="Georgetown">(GMT-04:00) Georgetown</option>
																							<option data-offset="-10800" value="Atlantic Time (Canada)">(GMT-03:00) Atlantic Time (Canada)</option>
																							<option data-offset="-10800" value="Santiago">(GMT-03:00) Santiago</option>
																							<option data-offset="-10800" value="Brasilia">(GMT-03:00) Brasilia</option>
																							<option data-offset="-10800" value="Buenos Aires">(GMT-03:00) Buenos Aires</option>
																							<option data-offset="-9000" value="Newfoundland">(GMT-02:30) Newfoundland</option>
																							<option data-offset="-7200" value="Greenland">(GMT-02:00) Greenland</option>
																							<option data-offset="-7200" value="Mid-Atlantic">(GMT-02:00) Mid-Atlantic</option>
																							<option data-offset="-3600" value="Cape Verde Is.">(GMT-01:00) Cape Verde Is.</option>
																							<option data-offset="0" value="Azores">(GMT) Azores</option>
																							<option data-offset="0" value="Monrovia">(GMT) Monrovia</option>
																							<option data-offset="0" value="UTC">(GMT) UTC</option>
																							<option data-offset="3600" value="Dublin">(GMT+01:00) Dublin</option>
																							<option data-offset="3600" value="Edinburgh">(GMT+01:00) Edinburgh</option>
																							<option data-offset="3600" value="Lisbon">(GMT+01:00) Lisbon</option>
																							<option data-offset="3600" value="London">(GMT+01:00) London</option>
																							<option data-offset="3600" value="Casablanca">(GMT+01:00) Casablanca</option>
																							<option data-offset="3600" value="West Central Africa">(GMT+01:00) West Central Africa</option>
																							<option data-offset="7200" value="Belgrade">(GMT+02:00) Belgrade</option>
																							<option data-offset="7200" value="Bratislava">(GMT+02:00) Bratislava</option>
																							<option data-offset="7200" value="Budapest">(GMT+02:00) Budapest</option>
																							<option data-offset="7200" value="Ljubljana">(GMT+02:00) Ljubljana</option>
																							<option data-offset="7200" value="Prague">(GMT+02:00) Prague</option>
																							<option data-offset="7200" value="Sarajevo">(GMT+02:00) Sarajevo</option>
																							<option data-offset="7200" value="Skopje">(GMT+02:00) Skopje</option>
																							<option data-offset="7200" value="Warsaw">(GMT+02:00) Warsaw</option>
																							<option data-offset="7200" value="Zagreb">(GMT+02:00) Zagreb</option>
																							<option data-offset="7200" value="Brussels">(GMT+02:00) Brussels</option>
																							<option data-offset="7200" value="Copenhagen">(GMT+02:00) Copenhagen</option>
																							<option data-offset="7200" value="Madrid">(GMT+02:00) Madrid</option>
																							<option data-offset="7200" value="Paris">(GMT+02:00) Paris</option>
																							<option data-offset="7200" value="Amsterdam">(GMT+02:00) Amsterdam</option>
																							<option data-offset="7200" value="Berlin">(GMT+02:00) Berlin</option>
																							<option data-offset="7200" value="Bern">(GMT+02:00) Bern</option>
																							<option data-offset="7200" value="Rome">(GMT+02:00) Rome</option>
																							<option data-offset="7200" value="Stockholm">(GMT+02:00) Stockholm</option>
																							<option data-offset="7200" value="Vienna">(GMT+02:00) Vienna</option>
																							<option data-offset="7200" value="Cairo">(GMT+02:00) Cairo</option>
																							<option data-offset="7200" value="Harare">(GMT+02:00) Harare</option>
																							<option data-offset="7200" value="Pretoria">(GMT+02:00) Pretoria</option>
																							<option data-offset="10800" value="Bucharest">(GMT+03:00) Bucharest</option>
																							<option data-offset="10800" value="Helsinki">(GMT+03:00) Helsinki</option>
																							<option data-offset="10800" value="Kiev">(GMT+03:00) Kiev</option>
																							<option data-offset="10800" value="Kyiv">(GMT+03:00) Kyiv</option>
																							<option data-offset="10800" value="Riga">(GMT+03:00) Riga</option>
																							<option data-offset="10800" value="Sofia">(GMT+03:00) Sofia</option>
																							<option data-offset="10800" value="Tallinn">(GMT+03:00) Tallinn</option>
																							<option data-offset="10800" value="Vilnius">(GMT+03:00) Vilnius</option>
																							<option data-offset="10800" value="Athens">(GMT+03:00) Athens</option>
																							<option data-offset="10800" value="Istanbul">(GMT+03:00) Istanbul</option>
																							<option data-offset="10800" value="Minsk">(GMT+03:00) Minsk</option>
																							<option data-offset="10800" value="Jerusalem">(GMT+03:00) Jerusalem</option>
																							<option data-offset="10800" value="Moscow">(GMT+03:00) Moscow</option>
																							<option data-offset="10800" value="St. Petersburg">(GMT+03:00) St. Petersburg</option>
																							<option data-offset="10800" value="Volgograd">(GMT+03:00) Volgograd</option>
																							<option data-offset="10800" value="Kuwait">(GMT+03:00) Kuwait</option>
																							<option data-offset="10800" value="Riyadh">(GMT+03:00) Riyadh</option>
																							<option data-offset="10800" value="Nairobi">(GMT+03:00) Nairobi</option>
																							<option data-offset="10800" value="Baghdad">(GMT+03:00) Baghdad</option>
																							<option data-offset="14400" value="Abu Dhabi">(GMT+04:00) Abu Dhabi</option>
																							<option data-offset="14400" value="Muscat">(GMT+04:00) Muscat</option>
																							<option data-offset="14400" value="Baku">(GMT+04:00) Baku</option>
																							<option data-offset="14400" value="Tbilisi">(GMT+04:00) Tbilisi</option>
																							<option data-offset="14400" value="Yerevan">(GMT+04:00) Yerevan</option>
																							<option data-offset="16200" value="Tehran">(GMT+04:30) Tehran</option>
																							<option data-offset="16200" value="Kabul">(GMT+04:30) Kabul</option>
																							<option data-offset="18000" value="Ekaterinburg">(GMT+05:00) Ekaterinburg</option>
																							<option data-offset="18000" value="Islamabad">(GMT+05:00) Islamabad</option>
																							<option data-offset="18000" value="Karachi">(GMT+05:00) Karachi</option>
																							<option data-offset="18000" value="Tashkent">(GMT+05:00) Tashkent</option>
																							<option data-offset="19800" value="Chennai">(GMT+05:30) Chennai</option>
																							<option data-offset="19800" value="Kolkata">(GMT+05:30) Kolkata</option>
																							<option data-offset="19800" value="Mumbai">(GMT+05:30) Mumbai</option>
																							<option data-offset="19800" value="New Delhi">(GMT+05:30) New Delhi</option>
																							<option data-offset="19800" value="Sri Jayawardenepura">(GMT+05:30) Sri Jayawardenepura</option>
																							<option data-offset="20700" value="Kathmandu">(GMT+05:45) Kathmandu</option>
																							<option data-offset="21600" value="Astana">(GMT+06:00) Astana</option>
																							<option data-offset="21600" value="Dhaka">(GMT+06:00) Dhaka</option>
																							<option data-offset="21600" value="Almaty">(GMT+06:00) Almaty</option>
																							<option data-offset="21600" value="Urumqi">(GMT+06:00) Urumqi</option>
																							<option data-offset="23400" value="Rangoon">(GMT+06:30) Rangoon</option>
																							<option data-offset="25200" value="Novosibirsk">(GMT+07:00) Novosibirsk</option>
																							<option data-offset="25200" value="Bangkok">(GMT+07:00) Bangkok</option>
																							<option data-offset="25200" value="Hanoi">(GMT+07:00) Hanoi</option>
																							<option data-offset="25200" value="Jakarta">(GMT+07:00) Jakarta</option>
																							<option data-offset="25200" value="Krasnoyarsk">(GMT+07:00) Krasnoyarsk</option>
																							<option data-offset="28800" value="Beijing">(GMT+08:00) Beijing</option>
																							<option data-offset="28800" value="Chongqing">(GMT+08:00) Chongqing</option>
																							<option data-offset="28800" value="Hong Kong">(GMT+08:00) Hong Kong</option>
																							<option data-offset="28800" value="Kuala Lumpur">(GMT+08:00) Kuala Lumpur</option>
																							<option data-offset="28800" value="Singapore">(GMT+08:00) Singapore</option>
																							<option data-offset="28800" value="Taipei">(GMT+08:00) Taipei</option>
																							<option data-offset="28800" value="Perth">(GMT+08:00) Perth</option>
																							<option data-offset="28800" value="Irkutsk">(GMT+08:00) Irkutsk</option>
																							<option data-offset="28800" value="Ulaan Bataar">(GMT+08:00) Ulaan Bataar</option>
																							<option data-offset="32400" value="Seoul">(GMT+09:00) Seoul</option>
																							<option data-offset="32400" value="Osaka">(GMT+09:00) Osaka</option>
																							<option data-offset="32400" value="Sapporo">(GMT+09:00) Sapporo</option>
																							<option data-offset="32400" value="Tokyo">(GMT+09:00) Tokyo</option>
																							<option data-offset="32400" value="Yakutsk">(GMT+09:00) Yakutsk</option>
																							<option data-offset="34200" value="Darwin">(GMT+09:30) Darwin</option>
																							<option data-offset="34200" value="Adelaide">(GMT+09:30) Adelaide</option>
																							<option data-offset="36000" value="Canberra">(GMT+10:00) Canberra</option>
																							<option data-offset="36000" value="Melbourne">(GMT+10:00) Melbourne</option>
																							<option data-offset="36000" value="Sydney">(GMT+10:00) Sydney</option>
																							<option data-offset="36000" value="Brisbane">(GMT+10:00) Brisbane</option>
																							<option data-offset="36000" value="Hobart">(GMT+10:00) Hobart</option>
																							<option data-offset="36000" value="Vladivostok">(GMT+10:00) Vladivostok</option>
																							<option data-offset="36000" value="Guam">(GMT+10:00) Guam</option>
																							<option data-offset="36000" value="Port Moresby">(GMT+10:00) Port Moresby</option>
																							<option data-offset="36000" value="Solomon Is.">(GMT+10:00) Solomon Is.</option>
																							<option data-offset="39600" value="Magadan">(GMT+11:00) Magadan</option>
																							<option data-offset="39600" value="New Caledonia">(GMT+11:00) New Caledonia</option>
																							<option data-offset="43200" value="Fiji">(GMT+12:00) Fiji</option>
																							<option data-offset="43200" value="Kamchatka">(GMT+12:00) Kamchatka</option>
																							<option data-offset="43200" value="Marshall Is.">(GMT+12:00) Marshall Is.</option>
																							<option data-offset="43200" value="Auckland">(GMT+12:00) Auckland</option>
																							<option data-offset="43200" value="Wellington">(GMT+12:00) Wellington</option>
																							<option data-offset="46800" value="Nuku'alofa">(GMT+13:00) Nuku'alofa</option>
																						</select>
																					</div>
																				</div>
																				<div class="form-group row align-items-center">
																					<label class="col-xl-3 col-lg-3 col-form-label text-right">Communication</label>
																					<div class="col-lg-9 col-xl-6">
																						<div class="checkbox-inline">
																							<label class="checkbox">
																							<input type="checkbox" />
																							<span></span>Email</label>
																							<label class="checkbox">
																							<input type="checkbox" />
																							<span></span>SMS</label>
																							<label class="checkbox">
																							<input type="checkbox" />
																							<span></span>Phone</label>
																						</div>
																					</div>
																				</div>
																				<div class="separator separator-dashed my-10"></div>
																				<!--begin::Heading-->
																				<div class="row">
																					<div class="col-lg-9 col-xl-6 offset-xl-3">
																						<h3 class="font-size-h6 mb-5">Security:</h3>
																					</div>
																				</div>
																				<!--end::Heading-->
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right col-form-label">Login verification</label>
																					<div class="col-lg-9 col-xl-6">
																						<button type="button" class="btn btn-light-primary font-weight-bold btn-sm">Setup login verification</button>
																						<span class="form-text text-muted">After you log in, you will be asked for additional information to confirm your identity and protect your account from being compromised. 
																						<a href="#">Learn more</a>.</span>
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right col-form-label">Password reset verification</label>
																					<div class="col-lg-9 col-xl-6">
																						<div class="checkbox-inline">
																							<label class="checkbox">
																							<input type="checkbox" />
																							<span></span>Require personal information to reset your password.</label>
																						</div>
																						<span class="form-text text-muted">For extra security, this requires you to confirm your email or phone number when you reset your password. 
																						<a href="#">Learn more</a>.</span>
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right col-form-label"></label>
																					<div class="col-lg-9 col-xl-6">
																						<button type="button" class="btn btn-light-danger font-weight-bold btn-sm">Deactivate your account ?</button>
																					</div>
																				</div>
																			</form>
																		</div>
																		<!--end::Tab Content-->
																	</div>
																</div>
																<!--end::Body-->
															</div>
															<!--end::Card-->
														</div>
														<!--end::Content-->
													</div>
													<!--end::Education-->
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						
							<!-- Tambah Foto-->
								<div class="modal fade" id="modalFoto" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">	
									<div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
										<div class="modal-content">
											<div class="modal-body p-0">
												<div class="card bg-secondary border-0 mb-0">
													<div class="card-header bg-success pb-1">
														<div class="text-muted text-center mt-2 mb-3">
															<span class="text-white">Form Tambah Foto Karyawan </span>
														</div>
													</div>
													<div class="card-body px-lg-5 py-lg-5">
														<form role="form">
															<div class="form-group mb-3">
																<div class="custom-file">
																	<input type="file" class="custom-file-input" id="berkas_foto" accept="image/jpeg,image/jpg,image/png" />
																	<label class="custom-file-label" for="berkas_foto">Foto Harus format JPG</label>
																</div>
															</div>

															
															<div id="div_upload">
															</div>
														</form>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
						
						<!-- Tambah sd-->
							<div class="modal fade" id="modalsd" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">	
								<div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
									<div class="modal-content">
										<div class="modal-body p-0">
											<div class="card bg-secondary border-0 mb-0">
												<div class="card-header bg-success pb-1">
													<div class="text-muted text-center mt-2 mb-3">
														<span class="text-white">Form Tambah Ijazah SD Karyawan </span>
													</div>
												</div>
												<div class="card-body px-lg-5 py-lg-5">
													<form role="form">
														<div class="form-group mb-3">
															<div class="custom-file">
																<input type="file" class="custom-file-input" id="berkas_sd" accept="application/pdf" />
																<label class="custom-file-label" for="berkas_sd">File Harus format PDF</label>
															</div>
														</div>

														
														<div id="div_upload_sd">
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						
						<!-- Tambah smp-->
							<div class="modal fade" id="modalsmp" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">	
								<div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
									<div class="modal-content">
										<div class="modal-body p-0">
											<div class="card bg-secondary border-0 mb-0">
												<div class="card-header bg-success pb-1">
													<div class="text-muted text-center mt-2 mb-3">
														<span class="text-white">Form Tambah Ijazah SMP Karyawan </span>
													</div>
												</div>
												<div class="card-body px-lg-5 py-lg-5">
													<form role="form">
														<div class="form-group mb-3">
															<div class="custom-file">
																<input type="file" class="custom-file-input" id="berkas_smp" accept="application/pdf" />
																<label class="custom-file-label" for="berkas_smp">File Harus format PDF</label>
															</div>
														</div>

														
														<div id="div_upload_smp">
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

						<!-- Tambah sma-->
							<div class="modal fade" id="modalsma" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">	
								<div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
									<div class="modal-content">
										<div class="modal-body p-0">
											<div class="card bg-secondary border-0 mb-0">
												<div class="card-header bg-success pb-1">
													<div class="text-muted text-center mt-2 mb-3">
														<span class="text-white">Form Tambah Ijazah SMA Karyawan </span>
													</div>
												</div>
												<div class="card-body px-lg-5 py-lg-5">
													<form role="form">
														<div class="form-group mb-3">
															<div class="custom-file">
																<input type="file" class="custom-file-input" id="berkas_sma" accept="application/pdf" />
																<label class="custom-file-label" for="berkas_sma">Foto Harus format PDF</label>
															</div>
														</div>

														
														<div id="div_upload_sma">
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

						<!-- Tambah s1-->
							<div class="modal fade" id="modals1" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">	
								<div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
									<div class="modal-content">
										<div class="modal-body p-0">
											<div class="card bg-secondary border-0 mb-0">
												<div class="card-header bg-success pb-1">
													<div class="text-muted text-center mt-2 mb-3">
														<span class="text-white">Form Tambah Ijazah S1 Karyawan </span>
													</div>
												</div>
												<div class="card-body px-lg-5 py-lg-5">
													<form role="form">
														<div class="form-group mb-3">
															<div class="custom-file">
																<input type="file" class="custom-file-input" id="berkas_s1" accept="application/pdf" />
																<label class="custom-file-label" for="berkas_s1">File Harus format PDF</label>
															</div>
														</div>

														
														<div id="div_upload_s1">
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

						<!-- Tambah s2-->
							<div class="modal fade" id="modals2" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">	
								<div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
									<div class="modal-content">
										<div class="modal-body p-0">
											<div class="card bg-secondary border-0 mb-0">
												<div class="card-header bg-success pb-1">
													<div class="text-muted text-center mt-2 mb-3">
														<span class="text-white">Form Tambah Ijazah S2 Karyawan </span>
													</div>
												</div>
												<div class="card-body px-lg-5 py-lg-5">
													<form role="form">
														<div class="form-group mb-3">
															<div class="custom-file">
																<input type="file" class="custom-file-input" id="berkas_s2" accept="application/pdf" />
																<label class="custom-file-label" for="berkas_s2">File Harus format PDF</label>
															</div>
														</div>

														
														<div id="div_upload_s2">
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

						<!-- Tambah s3-->
							<div class="modal fade" id="modals3" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">	
								<div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
									<div class="modal-content">
										<div class="modal-body p-0">
											<div class="card bg-secondary border-0 mb-0">
												<div class="card-header bg-success pb-1">
													<div class="text-muted text-center mt-2 mb-3">
														<span class="text-white">Form Tambah Ijazah S3 Karyawan </span>
													</div>
												</div>
												<div class="card-body px-lg-5 py-lg-5">
													<form role="form">
														<div class="form-group mb-3">
															<div class="custom-file">
																<input type="file" class="custom-file-input" id="berkas_s3" accept="application/pdf" />
																<label class="custom-file-label" for="berkas_s3">File Harus format PDF</label>
															</div>
														</div>

														
														<div id="div_upload_s3">
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						<!-- Tambah s3-->
							<div class="modal fade" id="modals3" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">	
								<div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
									<div class="modal-content">
										<div class="modal-body p-0">
											<div class="card bg-secondary border-0 mb-0">
												<div class="card-header bg-success pb-1">
													<div class="text-muted text-center mt-2 mb-3">
														<span class="text-white">Form Tambah Ijazah S3 Karyawan </span>
													</div>
												</div>
												<div class="card-body px-lg-5 py-lg-5">
													<form role="form">
														<div class="form-group mb-3">
															<div class="custom-file">
																<input type="file" class="custom-file-input" id="berkas_s3" accept="application/pdf" />
																<label class="custom-file-label" for="berkas_s3">File Harus format PDF</label>
															</div>
														</div>

														
														<div id="div_upload_s3">
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

						<!-- Tambah sK-->
							<div class="modal fade" id="modalsk" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">	
								<div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
									<div class="modal-content">
										<div class="modal-body p-0">
											<div class="card bg-secondary border-0 mb-0">
												<div class="card-header bg-success pb-1">
													<div class="text-muted text-center mt-2 mb-3">
														<span class="text-white">Form Tambah SK Karyawan </span>
													</div>
												</div>
												<div class="card-body px-lg-5 py-lg-5">
													<form role="form">
														<div class="form-group mb-3">
															<div class="custom-file">
																<input type="file" class="custom-file-input" id="berkas_sk" accept="application/pdf" />
																<label class="custom-file-label" for="berkas_sk">File Harus format PDF</label>
															</div>
														</div>

														
														<div id="div_upload_sk">
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

						<!-- Tambah Penempatan-->
							<div class="modal fade" id="modalpenempatan" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">	
								<div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
									<div class="modal-content">
										<div class="modal-body p-0">
											<div class="card bg-secondary border-0 mb-0">
												<div class="card-header bg-success pb-1">
													<div class="text-muted text-center mt-2 mb-3">
														<span class="text-white">Form Tambah SK Penempatan Karyawan </span>
													</div>
												</div>
												<div class="card-body px-lg-5 py-lg-5">
													<form role="form">
														<div class="form-group mb-3">
															<div class="custom-file">
																<input type="file" class="custom-file-input" id="berkas_penempatan" accept="application/pdf" />
																<label class="custom-file-label" for="berkas_penempatan">File Harus format PDF</label>
															</div>
														</div>

														
														<div id="div_upload_penempatan">
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

						<!-- Tambah SKP-->
							<div class="modal fade" id="modalskp" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">	
								<div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
									<div class="modal-content">
										<div class="modal-body p-0">
											<div class="card bg-secondary border-0 mb-0">
												<div class="card-header bg-success pb-1">
													<div class="text-muted text-center mt-2 mb-3">
														<span class="text-white">Form Tambah SKP Karyawan </span>
													</div>
												</div>
												<div class="card-body px-lg-5 py-lg-5">
													<form role="form">
														<div class="form-group mb-3">
															<div class="custom-file">
																<input type="file" class="custom-file-input" id="berkas_skp" accept="application/pdf" />
																<label class="custom-file-label" for="berkas_sk">File Harus format PDF</label>
															</div>
														</div>

														
														<div id="div_upload_skp">
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

						<!-- Tambah Profesi-->
							<div class="modal fade" id="modalprofesi" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">	
								<div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
									<div class="modal-content">
										<div class="modal-body p-0">
											<div class="card bg-secondary border-0 mb-0">
												<div class="card-header bg-success pb-1">
													<div class="text-muted text-center mt-2 mb-3">
														<span class="text-white">Form Tambah Ijazah Profesi Karyawan </span>
													</div>
												</div>
												<div class="card-body px-lg-5 py-lg-5">
													<form role="form">
														<div class="form-group mb-3">
															<div class="custom-file">
																<input type="file" class="custom-file-input" id="berkas_profesi" accept="application/pdf" />
																<label class="custom-file-label" for="berkas_profesi">File Harus format PDF</label>
															</div>
														</div>

														
														<div id="div_upload_profesi">
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						
							<!-- Tambah STR-->
							<div class="modal fade" id="modalstr" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">	
								<div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
									<div class="modal-content">
										<div class="modal-body p-0">
											<div class="card bg-secondary border-0 mb-0">
												<div class="card-header bg-success pb-1">
													<div class="text-muted text-center mt-2 mb-3">
														<span class="text-white">Form Tambah STR Karyawan </span>
													</div>
												</div>
												<div class="card-body px-lg-5 py-lg-5">
													<form role="form">
														<div class="form-group mb-3">
															<div class="custom-file">
																<input type="file" class="custom-file-input" id="berkas_str" accept="application/pdf" />
																<label class="custom-file-label" for="berkas_str">File Harus format PDF</label>
															</div>
														</div>

														
														<div id="div_upload_str">
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Tambah SIP-->
							<div class="modal fade" id="modalsip" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">	
								<div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
									<div class="modal-content">
										<div class="modal-body p-0">
											<div class="card bg-secondary border-0 mb-0">
												<div class="card-header bg-success pb-1">
													<div class="text-muted text-center mt-2 mb-3">
														<span class="text-white">Form Tambah SIP Karyawan </span>
													</div>
												</div>
												<div class="card-body px-lg-5 py-lg-5">
													<form role="form">
														<div class="form-group mb-3">
															<div class="custom-file">
																<input type="file" class="custom-file-input" id="berkas_sip" accept="application/pdf" />
																<label class="custom-file-label" for="berkas_sip">File Harus format PDF</label>
															</div>
														</div>

														
														<div id="div_upload_sip">
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
<!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script rel="javascript" type="text/javascript" href="js/jquery-1.11.3.min.js"></script>
<script>
  tampilkan();

  function tampilkan(){
    $("#tempatTabel").html('<i class="fas fa-spinner fa-pulse"></i> Memuat...')
    var baris = '<table class="table table-separate table-head-custom table-checkable" id="tabelUser"><thead class="thead-light"><tr><th>Action</th><th>NO</th><th>Update</th><th>ID</th><th>Nama</th><th>Ruangan</th><th>Jabatan</th><th>Status Karyawan</th><th>Pendidikan</th><th>Jenis Tenaga</th><th>Ijazah Sekolah</th><th>Ijazah Kuliah</th><th>SK</th><th>Berkas Lain</th></tr></thead>'
      $.ajax({
        type:'POST',
        url: '<?= base_url() ?>data_karyawan/tampil',
        dataType :'json',
        success: function(data){
         //console.log(data);
          for (let i = 0; i < data.length; i++) {
            baris += '<tr>'
            baris += '<td><div style="cursor:pointer;" title="hapus?" id="hapus' + data[i].id + '" onClick="tryHapus(' + data[i].id+ ')"><i class="flaticon-delete text-danger"></i></div>'
            // baris += ' <div style="cursor:pointer;" title="upload Berkas?"  id="arsip' + data[i].id + '" onClick="tampil_modal_upload_arsip(' + data[i].id+ ')"><i class="flaticon2-open-box text-warning"></i></div>'
            baris += ' <div style="cursor:pointer;" title="upload foto?"  id="foto' + data[i].id + '" onClick="tampil_modal_upload(' + data[i].id+ ')"><i class="flaticon-photo-camera text-primary"></i></div>'
            baris += ' <div style="cursor:pointer;" title="edit?"  id="edit' + data[i].id + '" onClick="tryEdit(' + data[i].id+ ')"><i class="flaticon2-pen text-success"></i></div>'
           	baris += ' <div style="cursor:pointer;" title="view?" id="view' + data[i].id + '" onClick="tryView(' + data[i].id+ ')"><i class="flaticon-eye text-primary"></i></div>'

            baris += '<td>' + (i + 1) + '</td>'
            baris += '<td>' + data[i].tgl_update + '</td>'
            baris += '<td>' + data[i].id_karyawan + '</td>'
            baris += '<td>' + data[i].nama + '</td>'
            // baris += '<td>' + data[i].foto + '</td>'
            // baris += '<td>' + data[i].foto + '</td>'
            baris += '<td>' + data[i].ruangan + '</td>'
            baris += '<td>' + data[i].jabatan + '</td>'
            baris += '<td>' + data[i].status_karyawan + '</td>'
            baris += '<td>' + data[i]. jenis_pendidikan+ '</td>'
            baris += '<td>' + data[i]. jenis_tenaga+ '</td>'

			
			baris += '<td><div style="cursor:pointer;" title="upload ijazah SD?" id="sd' + data[i].id + '" onClick="tampil_modal_upload_sd(' + data[i].id+ ')"><i class="btn btn-light btn-shadow font-weight-bold mr-2">SD</i></div>'
            baris += ' <div style="cursor:pointer;" title="upload Ijazah SMP?"  id="smp' + data[i].id + '" onClick="tampil_modal_upload_smp(' + data[i].id+ ')"><i class="btn btn-success btn-shadow font-weight-bold mr-2">SMP</i></div>'
            baris += ' <div style="cursor:pointer;" title="upload Ijazah SMA?"  id="sma' + data[i].id + '" onClick="tampil_modal_upload_sma(' + data[i].id+ ')"><i class="btn btn-primary btn-shadow font-weight-bold mr-2">SMA</i></div>'
           	// baris += ' <div style="cursor:pointer;" title="view?" id="view' + data[i].id + '" onClick="tryView(' + data[i].id+ ')"><i class="flaticon-eye text-primary"></i></div>'

			baris += '<td><div style="cursor:pointer;" title="upload Ijazah S1?" id="s1' + data[i].id + '" onClick="tampil_modal_upload_s1(' + data[i].id+ ')"><i class="btn btn-danger btn-shadow font-weight-bold mr-2">S1</i></div>'
            baris += ' <div style="cursor:pointer;" title="upload Ijazah S2?"  id="s2' + data[i].id + '" onClick="tampil_modal_upload_s2(' + data[i].id+ ')"><i class="btn btn-warning btn-shadow font-weight-bold mr-2">S2</i></div>'
            baris += ' <div style="cursor:pointer;" title="upload Ijazah S2?"  id="s3' + data[i].id + '" onClick="tampil_modal_upload_s3(' + data[i].id+ ')"><i class="btn btn-light btn-shadow font-weight-bold mr-2">S3</i></div>'

			baris += '<td><div style="cursor:pointer;" title="upload SK?" id="sk' + data[i].id + '" onClick="tampil_modal_upload_sk(' + data[i].id+ ')"><i class="btn btn-success btn-shadow font-weight-bold mr-2">SK</i></div>'
            baris += ' <div style="cursor:pointer;" title="upload SK Penempatan?"  id="penempatan' + data[i].id + '" onClick="tampil_modal_upload_penempatan(' + data[i].id+ ')"><i class="btn btn-primary btn-shadow font-weight-bold mr-2">Sk Penempatan</i></div>'
            baris += ' <div style="cursor:pointer;" title="upload SKP?"  id="skp' + data[i].id + '" onClick="tampil_modal_upload_skp(' + data[i].id+ ')"><i class="btn btn-danger btn-shadow font-weight-bold mr-2">SKP</i></div>'

			baris += '<td><div style="cursor:pointer;" title="Upload Profesi?" id="profesi' + data[i].id + '" onClick="tampil_modal_profesi(' + data[i].id+ ')"><i class="btn btn-success btn-shadow font-weight-bold mr-2">Ijazah Profesi</i></div>'
			baris += ' <div style="cursor:pointer;" title="upload STR?"  id="str' + data[i].id + '" onClick="tampil_modal_upload_str(' + data[i].id+ ')"><i class="btn btn-warning btn-shadow font-weight-bold mr-2">STR</i></div>'
            baris += ' <div style="cursor:pointer;" title="upload SIP?"  id="sip' + data[i].id + '" onClick="tampil_modal_upload_sip(' + data[i].id+ ')"><i class="btn btn-light btn-shadow font-weight-bold mr-2">SIP</i></div>'

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

	// function reset_form(){
	// 	random_all = '';
	// 	document.getElementById('berkas_foto').value = "";
	// }

  	function tampil_modal_upload(id){
		  
		// reset_form();
    //   document.getElementById("jenis_pernyataan").value = "";
      document.getElementById("berkas_foto").value = "";

      var tombol = '<button type="button" onclick="pernyataan('+id+')" id="simpan_pernyataan" class="btn btn-block btn-info"><div id="loader_upload"> </div> Simpan</button>';
      $("#div_upload").html(tombol);

      $('#modalFoto').modal('show');
    }

	function pernyataan(id) {
      // console.log(id);
      if(document.getElementById("berkas_foto").value == ""){
        document.getElementById("berkas_foto").focus();
      } else{
        var format = $('#berkas_foto').prop('files')[0].type;
        if (format.includes('png') || format.includes('jpg') || format.includes('jpeg')) {
          var form_data = new FormData();
          form_data.append('id', id);
        //   form_data.append('jenis', document.getElementById("jenis_pernyataan").value);
          form_data.append('berkas_foto', $('#berkas_foto').prop('files')[0]);

          $.ajax({
            type: 'POST',
            data: form_data,
            url: '<?= base_url() ?>data_karyawan/upload_pernyataan',
            processData:false,
            contentType:false,
            cache:false,
            dataType: 'json',
            beforeSend: function () {
              $('#simpan_pernyataan').attr('disabled', true);
              $('#loader_upload').html('');
              addSpinner($('#loader_upload'));
            },
            success: function(data) {
              // alert(data);
              // console.log(data);
              $('#simpan_pernyataan').attr('disabled', false);
              removeSpinner($('#loader_upload'), function () {
                $('#loader_upload').html('');
              });
            //   ambil_data();
              $('#modalFoto').modal('hide');
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
              title: 'Type file harus JPEG atau JPG',
              showConfirmButton: false,
              timer: 2500
            });
        }
      }
  	}

	
	function tampil_modal_upload_sd(id){
      document.getElementById("berkas_sd").value = "";

      var tombol = '<button type="button" onclick="pernyataan_sd('+id+')" id="simpan_pernyataan_sd" class="btn btn-block btn-info"><div id="loader_upload_sd"> </div> Simpan</button>';
      $("#div_upload_sd").html(tombol);
      $('#modalsd').modal('show');
    }

	function pernyataan_sd(id) {
      // console.log(id);
      if(document.getElementById("berkas_sd").value == ""){
        document.getElementById("berkas_sd").focus();
      } else{
        var format = $('#berkas_sd').prop('files')[0].type;
        if (format.includes('pdf')) {
          var form_data = new FormData();
          form_data.append('id', id);
        //   form_data.append('jenis', document.getElementById("jenis_pernyataan").value);
          form_data.append('berkas_sd', $('#berkas_sd').prop('files')[0]);

          $.ajax({
            type: 'POST',
            data: form_data,
            url: '<?= base_url() ?>data_karyawan/upload_pernyataan_sd',
            processData:false,
            contentType:false,
            cache:false,
            dataType: 'json',
            beforeSend: function () {
              $('#simpan_pernyataan_sd').attr('disabled', true);
              $('#loader_upload_sd').html('');
              addSpinner($('#loader_upload_sd'));
            },
            success: function(data) {
              // alert(data);
              // console.log(data);
              $('#simpan_pernyataan_sd').attr('disabled', false);
              removeSpinner($('#loader_upload_sd'), function () {
                $('#loader_upload_sd').html('');
              });
            //   ambil_data();
              $('#modalsd').modal('hide');
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

	function tampil_modal_upload_smp(id){
      document.getElementById("berkas_smp").value = "";

      var tombol = '<button type="button" onclick="pernyataan_smp('+id+')" id="simpan_pernyataan_smp" class="btn btn-block btn-info"><div id="loader_upload_smp"> </div> Simpan</button>';
      $("#div_upload_smp").html(tombol);

      $('#modalsmp').modal('show');
    }

	function pernyataan_smp(id) {
      // console.log(id);
      if(document.getElementById("berkas_smp").value == ""){
        document.getElementById("berkas_smp").focus();
      } else{
        var format = $('#berkas_smp').prop('files')[0].type;
        if (format.includes('pdf')) {
          var form_data = new FormData();
          form_data.append('id', id);
        //   form_data.append('jenis', document.getElementById("jenis_pernyataan").value);
          form_data.append('berkas_smp', $('#berkas_smp').prop('files')[0]);

          $.ajax({
            type: 'POST',
            data: form_data,
            url: '<?= base_url() ?>data_karyawan/upload_pernyataan_smp',
            processData:false,
            contentType:false,
            cache:false,
            dataType: 'json',
            beforeSend: function () {
              $('#simpan_pernyataan_smp').attr('disabled', true);
              $('#loader_upload_smp').html('');
              addSpinner($('#loader_upload_smp'));
            },
            success: function(data) {
              // alert(data);
              // console.log(data);
              $('#simpan_pernyataan_smp').attr('disabled', false);
              removeSpinner($('#loader_upload_smp'), function () {
                $('#loader_upload_smp').html('');
              });
            //   ambil_data();
              $('#modalsmp').modal('hide');
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

	function tampil_modal_upload_sma(id){
      document.getElementById("berkas_sma").value = "";

      var tombol = '<button type="button" onclick="pernyataan_sma('+id+')" id="simpan_pernyataan_sma" class="btn btn-block btn-info"><div id="loader_upload_sma"> </div> Simpan</button>';
      $("#div_upload_sma").html(tombol);

      $('#modalsma').modal('show');
    }

	function pernyataan_sma(id) {
      // console.log(id);
      if(document.getElementById("berkas_sma").value == ""){
        document.getElementById("berkas_sma").focus();
      } else{
        var format = $('#berkas_sma').prop('files')[0].type;
        if (format.includes('pdf')) {
          var form_data = new FormData();
          form_data.append('id', id);
        //   form_data.append('jenis', document.getElementById("jenis_pernyataan").value);
          form_data.append('berkas_sma', $('#berkas_sma').prop('files')[0]);

          $.ajax({
            type: 'POST',
            data: form_data,
            url: '<?= base_url() ?>data_karyawan/upload_pernyataan_sma',
            processData:false,
            contentType:false,
            cache:false,
            dataType: 'json',
            beforeSend: function () {
              $('#simpan_pernyataan_sma').attr('disabled', true);
              $('#loader_upload_sma').html('');
              addSpinner($('#loader_upload_sma'));
            },
            success: function(data) {
              // alert(data);
              // console.log(data)
              $('#simpan_pernyataan_sma').attr('disabled', false);
              removeSpinner($('#loader_upload_sma'), function () {
                $('#loader_upload_sma').html('');
              });
            //   ambil_data();
              $('#modalsma').modal('hide');
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

	function tampil_modal_upload_s1(id){
      document.getElementById("berkas_s1").value = "";

      var tombol = '<button type="button" onclick="pernyataan_s1('+id+')" id="simpan_pernyataan_s1" class="btn btn-block btn-info"><div id="loader_upload_s1"> </div> Simpan</button>';
      $("#div_upload_s1").html(tombol);

      $('#modals1').modal('show');
    }

	function pernyataan_s1(id) {
      // console.log(id);
      if(document.getElementById("berkas_s1").value == ""){
        document.getElementById("berkas_s1").focus();
      } else{
        var format = $('#berkas_s1').prop('files')[0].type;
        if (format.includes('pdf')) {
          var form_data = new FormData();
          form_data.append('id', id);
        //   form_data.append('jenis', document.getElementById("jenis_pernyataan").value);
          form_data.append('berkas_s1', $('#berkas_s1').prop('files')[0]);

          $.ajax({
            type: 'POST',
            data: form_data,
            url: '<?= base_url() ?>data_karyawan/upload_pernyataan_s1',
            processData:false,
            contentType:false,
            cache:false,
            dataType: 'json',
            beforeSend: function () {
              $('#simpan_pernyataan_s1').attr('disabled', true);
              $('#loader_upload_s1').html('');
              addSpinner($('#loader_upload_s1'));
            },
            success: function(data) {
              // alert(data);
              // console.log(data)
              $('#simpan_pernyataan_s1').attr('disabled', false);
              removeSpinner($('#loader_upload_s1'), function () {
                $('#loader_upload_s1').html('');
              });
            //   ambil_data();
              $('#modals1').modal('hide');
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

	function tampil_modal_upload_s2(id){
      document.getElementById("berkas_s2").value = "";

      var tombol = '<button type="button" onclick="pernyataan_s2('+id+')" id="simpan_pernyataan_s2" class="btn btn-block btn-info"><div id="loader_upload_s2"> </div> Simpan</button>';
      $("#div_upload_s2").html(tombol);

      $('#modals2').modal('show');
    }

	function pernyataan_s2(id) {
      // console.log(id);
      if(document.getElementById("berkas_s2").value == ""){
        document.getElementById("berkas_s2").focus();
      } else{
        var format = $('#berkas_s2').prop('files')[0].type;
        if (format.includes('pdf')) {
          var form_data = new FormData();
          form_data.append('id', id);
        //   form_data.append('jenis', document.getElementById("jenis_pernyataan").value);
          form_data.append('berkas_s2', $('#berkas_s2').prop('files')[0]);

          $.ajax({
            type: 'POST',
            data: form_data,
            url: '<?= base_url() ?>data_karyawan/upload_pernyataan_s2',
            processData:false,
            contentType:false,
            cache:false,
            dataType: 'json',
            beforeSend: function () {
              $('#simpan_pernyataan_s2').attr('disabled', true);
              $('#loader_upload_s2').html('');
              addSpinner($('#loader_upload_s2'));
            },
            success: function(data) {
              // alert(data);
              // console.log(data)
              $('#simpan_pernyataan_s2').attr('disabled', false);
              removeSpinner($('#loader_upload_s2'), function () {
                $('#loader_upload_s2').html('');
              });
            //   ambil_data();
              $('#modals2').modal('hide');
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

	function tampil_modal_upload_s3(id){
      document.getElementById("berkas_s3").value = "";

      var tombol = '<button type="button" onclick="pernyataan_s3('+id+')" id="simpan_pernyataan_s3" class="btn btn-block btn-info"><div id="loader_upload_s3"> </div> Simpan</button>';
      $("#div_upload_s3").html(tombol);

      $('#modals3').modal('show');
    }

	function pernyataan_s3(id) {
      // console.log(id);
      if(document.getElementById("berkas_s3").value == ""){
        document.getElementById("berkas_s3").focus();
      } else{
        var format = $('#berkas_s3').prop('files')[0].type;
        if (format.includes('pdf')) {
          var form_data = new FormData();
          form_data.append('id', id);
        //   form_data.append('jenis', document.getElementById("jenis_pernyataan").value);
          form_data.append('berkas_s3', $('#berkas_s3').prop('files')[0]);

          $.ajax({
            type: 'POST',
            data: form_data,
            url: '<?= base_url() ?>data_karyawan/upload_pernyataan_s3',
            processData:false,
            contentType:false,
            cache:false,
            dataType: 'json',
            beforeSend: function () {
              $('#simpan_pernyataan_s3').attr('disabled', true);
              $('#loader_upload_s3').html('');
              addSpinner($('#loader_upload_s3'));
            },
            success: function(data) {
              // alert(data);
              // console.log(data)
              $('#simpan_pernyataan_s3').attr('disabled', false);
              removeSpinner($('#loader_upload_s3'), function () {
                $('#loader_upload_s3').html('');
              });
            //   ambil_data();
              $('#modals3').modal('hide');
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

	function tampil_modal_upload_sk(id){
      document.getElementById("berkas_sk").value = "";

      var tombol = '<button type="button" onclick="pernyataan_sk('+id+')" id="simpan_pernyataan_sk" class="btn btn-block btn-info"><div id="loader_upload_sk"> </div> Simpan</button>';
      $("#div_upload_sk").html(tombol);

      $('#modalsk').modal('show');
    }

	function pernyataan_sk(id) {
      // console.log(id);
      if(document.getElementById("berkas_sk").value == ""){
        document.getElementById("berkas_sk").focus();
      } else{
        var format = $('#berkas_sk').prop('files')[0].type;
        if (format.includes('pdf')) {
          var form_data = new FormData();
          form_data.append('id', id);
        //   form_data.append('jenis', document.getElementById("jenis_pernyataan").value);
          form_data.append('berkas_sk', $('#berkas_sk').prop('files')[0]);

          $.ajax({
            type: 'POST',
            data: form_data,
            url: '<?= base_url() ?>data_karyawan/upload_pernyataan_sk',
            processData:false,
            contentType:false,
            cache:false,
            dataType: 'json',
            beforeSend: function () {
              $('#simpan_pernyataan_sk').attr('disabled', true);
              $('#loader_upload_sk').html('');
              addSpinner($('#loader_upload_sk'));
            },
            success: function(data) {
              // alert(data);
              // console.log(data)
              $('#simpan_pernyataan_sk').attr('disabled', false);
              removeSpinner($('#loader_upload_sk'), function () {
                $('#loader_upload_sk').html('');
              });
            //   ambil_data();
              $('#modalsk').modal('hide');
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

	function tampil_modal_upload_penempatan(id){
      document.getElementById("berkas_penempatan").value = "";

      var tombol = '<button type="button" onclick="pernyataan_penempatan('+id+')" id="simpan_pernyataan_penempatan" class="btn btn-block btn-info"><div id="loader_upload_penempatan"> </div> Simpan</button>';
      $("#div_upload_penempatan").html(tombol);

      $('#modalpenempatan').modal('show');
    }

	function pernyataan_penempatan(id) {
      // console.log(id);
      if(document.getElementById("berkas_penempatan").value == ""){
        document.getElementById("berkas_penempatan").focus();
      } else{
        var format = $('#berkas_penempatan').prop('files')[0].type;
        if (format.includes('pdf')) {
          var form_data = new FormData();
          form_data.append('id', id);
        //   form_data.append('jenis', document.getElementById("jenis_pernyataan").value);
          form_data.append('berkas_penempatan', $('#berkas_penempatan').prop('files')[0]);

          $.ajax({
            type: 'POST',
            data: form_data,
            url: '<?= base_url() ?>data_karyawan/upload_pernyataan_penempatan',
            processData:false,
            contentType:false,
            cache:false,
            dataType: 'json',
            beforeSend: function () {
              $('#simpan_pernyataan_penempatan').attr('disabled', true);
              $('#loader_upload_penempatan').html('');
              addSpinner($('#loader_upload_penempatan'));
            },
            success: function(data) {
              // alert(data);
              // console.log(data)
              $('#simpan_pernyataan_penempatan').attr('disabled', false);
              removeSpinner($('#loader_upload_penempatan'), function () {
                $('#loader_upload_penempatan').html('');
              });
            //   ambil_data();
              $('#modalpenempatan').modal('hide');
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

	function tampil_modal_upload_skp(id){
		document.getElementById("berkas_skp").value = "";

		var tombol = '<button type="button" onclick="pernyataan_skp('+id+')" id="simpan_pernyataan_skp" class="btn btn-block btn-info"><div id="loader_upload_skp"> </div> Simpan</button>';
		$("#div_upload_skp").html(tombol);

		$('#modalskp').modal('show');
	}

	function pernyataan_skp(id) {
	// console.log(id);
		if(document.getElementById("berkas_skp").value == ""){
			document.getElementById("berkas_skp").focus();
		} else{
			var format = $('#berkas_skp').prop('files')[0].type;
			if (format.includes('pdf')) {
			var form_data = new FormData();
			form_data.append('id', id);
			//   form_data.append('jenis', document.getElementById("jenis_pernyataan").value);
			form_data.append('berkas_skp', $('#berkas_skp').prop('files')[0]);

			$.ajax({
				type: 'POST',
				data: form_data,
				url: '<?= base_url() ?>data_karyawan/upload_pernyataan_skp',
				processData:false,
				contentType:false,
				cache:false,
				dataType: 'json',
				beforeSend: function () {
				$('#simpan_pernyataan_skp').attr('disabled', true);
				$('#loader_upload_skp').html('');
				addSpinner($('#loader_upload_skp'));
				},
				success: function(data) {
				// alert(data);
				// console.log(data)
				$('#simpan_pernyataan_skp').attr('disabled', false);
				removeSpinner($('#loader_upload_skp'), function () {
					$('#loader_upload_skp').html('');
				});
				//   ambil_data();
				$('#modalskp').modal('hide');
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

		
	function tampil_modal_profesi(id){
      document.getElementById("berkas_profesi").value = "";

      var tombol = '<button type="button" onclick="pernyataan_profesi('+id+')" id="simpan_pernyataan_profesi" class="btn btn-block btn-info"><div id="loader_upload_profesi"> </div> Simpan</button>';
      $("#div_upload_profesi").html(tombol);
      $('#modalprofesi').modal('show');
    }

	function pernyataan_profesi(id) {
      // console.log(id);
      if(document.getElementById("berkas_profesi").value == ""){
        document.getElementById("berkas_profesi").focus();
      } else{
        var format = $('#berkas_profesi').prop('files')[0].type;
        if (format.includes('pdf')) {
          var form_data = new FormData();
          form_data.append('id', id);
        //   form_data.append('jenis', document.getElementById("jenis_pernyataan").value);
          form_data.append('berkas_profesi', $('#berkas_profesi').prop('files')[0]);

          $.ajax({
            type: 'POST',
            data: form_data,
            url: '<?= base_url() ?>data_karyawan/upload_pernyataan_profesi',
            processData:false,
            contentType:false,
            cache:false,
            dataType: 'json',
            beforeSend: function () {
              $('#simpan_pernyataan_profesi').attr('disabled', true);
              $('#loader_upload_profesi').html('');
              addSpinner($('#loader_upload_profesi'));
            },
            success: function(data) {
              // alert(data);
              // console.log(data);
              $('#simpan_pernyataan_profesi').attr('disabled', false);
              removeSpinner($('#loader_upload_profesi'), function () {
                $('#loader_upload_profesi').html('');
              });
            //   ambil_data();
              $('#modalprofesi').modal('hide');
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

	function tampil_modal_upload_str(id){
		document.getElementById("berkas_str").value = "";

		var tombol = '<button type="button" onclick="pernyataan_str('+id+')" id="simpan_pernyataan_str" class="btn btn-block btn-info"><div id="loader_upload_str"> </div> Simpan</button>';
		$("#div_upload_str").html(tombol);

		$('#modalstr').modal('show');
	}

	function pernyataan_str(id) {
	// console.log(id);
		if(document.getElementById("berkas_str").value == ""){
			document.getElementById("berkas_str").focus();
		} else{
			var format = $('#berkas_str').prop('files')[0].type;
			if (format.includes('pdf')) {
			var form_data = new FormData();
			form_data.append('id', id);
			//   form_data.append('jenis', document.getElementById("jenis_pernyataan").value);
			form_data.append('berkas_str', $('#berkas_str').prop('files')[0]);

			$.ajax({
				type: 'POST',
				data: form_data,
				url: '<?= base_url() ?>data_karyawan/upload_pernyataan_str',
				processData:false,
				contentType:false,
				cache:false,
				dataType: 'json',
				beforeSend: function () {
				$('#simpan_pernyataan_str').attr('disabled', true);
				$('#loader_upload_str').html('');
				addSpinner($('#loader_upload_str'));
				},
				success: function(data) {
				// alert(data);
				// console.log(data)
				$('#simpan_pernyataan_str').attr('disabled', false);
				removeSpinner($('#loader_upload_str'), function () {
					$('#loader_upload_str').html('');
				});
				//   ambil_data();
				$('#modalstr').modal('hide');
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

	function tampil_modal_upload_sip(id){
		document.getElementById("berkas_sip").value = "";

		var tombol = '<button type="button" onclick="pernyataan_sip('+id+')" id="simpan_pernyataan_sip" class="btn btn-block btn-info"><div id="loader_upload_sip"> </div> Simpan</button>';
		$("#div_upload_sip").html(tombol);

		$('#modalsip').modal('show');
	}

	function pernyataan_sip(id) {
	// console.log(id);
		if(document.getElementById("berkas_sip").value == ""){
			document.getElementById("berkas_sip").focus();
		} else{
			var format = $('#berkas_sip').prop('files')[0].type;
			if (format.includes('pdf')) {
			var form_data = new FormData();
			form_data.append('id', id);
			//   form_data.append('jenis', document.getElementById("jenis_pernyataan").value);
			form_data.append('berkas_sip', $('#berkas_sip').prop('files')[0]);

			$.ajax({
				type: 'POST',
				data: form_data,
				url: '<?= base_url() ?>data_karyawan/upload_pernyataan_sip',
				processData:false,
				contentType:false,
				cache:false,
				dataType: 'json',
				beforeSend: function () {
				$('#simpan_pernyataan_sip').attr('disabled', true);
				$('#loader_upload_sip').html('');
				addSpinner($('#loader_upload_sip'));
				},
				success: function(data) {
				// alert(data);
				// console.log(data)
				$('#simpan_pernyataan_str').attr('disabled', false);
				removeSpinner($('#loader_upload_sip'), function () {
					$('#loader_upload_sip').html('');
				});
				//   ambil_data();
				$('#modalsip').modal('hide');
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


	
	function tryTambah() {
		$("#id_karyawan").val("")
		$("#nama").val("")
		$("#email").val("")
		$("#password").val("")
		$("#rule").val("")
		// $("#foto").val("")
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
		// var foto = $("#foto").val()
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
			rule: rule
			// foto: foto
			// status_karyawan: status_karyawan,
			// jenis_pendidikan: jenis_pendidikan,
			// jenis_tenaga: jenis_tenaga,
			// jabatan: jabatan
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
			//   $("#foto").val("")
			//   $("#jabatan").val("")
			//   $("#jenis_pendidikan").val("")
			//   $("#jenis_tenaga").val("")
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


	function tryHapus(id) {
		$("#hapus" + id).html('<i class="fas fa-spinner fa-pulse"></i>')
		$.ajax({
		url: '<?= base_url() ?>data_karyawan/edit_id',
		method: 'post',
		data: "target=karyawan&id=" + id,
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
		data: "target=karyawan&id=" + id,
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
		url: '<?= base_url() ?>data_karyawan/edit_id',
		method: 'post',
		data: "target=karyawan&id=" + id,
		dataType: 'json',
		success: function(data) {
			$("#modalEdit").modal('show')
			// $("#foto").val(data.foto)
			$("#editnama").val(data.nama)
			$("#nik").val(data.nik)
			$("#no_hp").val(data.no_hp)
			$("#email").val(data.email)
			$("#alamat").val(data.alamat)
			$("#prov").val(data.prov)
			$("#kab").val(data.kab)
			$("#nip").val(data.nip)
			$("#kec").val(data.kec)
			$("#kelu").val(data.kelu)
			$("#rt_rw").val(data.rt_rw)
			$("#kode_pos").val(data.kode_pos)
			$("#tempat_lahir").val(data.tempat_lahir)
			$("#tanggal_lahir").val(data.tanggal_lahir)
			$("#jk").val(data.jk)
			$("#agama").val(data.agama)
			$("#status_pernikahan").val(data.status_pernikahan)
			$("#goldar").val(data.goldar)
			$("#suku").val(data.suku)
			$("#sd").val(data.sd)
			$("#no_sd").val(data.no_sd)
			$("#file_sd").val(data.file_sd)
			$("#smp").val(data.smp)
			$("#no_smp").val(data.no_smp)
			$("#file_smp").val(data.file_smp)
			$("#sma").val(data.sma)
			$("#no_sma").val(data.no_sma)
			$("#file_sma").val(data.file_sma)
			$("#s1").val(data.s1)
			$("#no_s1").val(data.no_s1)
			$("#file_s1").val(data.file_s1)
			$("#s2").val(data.s2)
			$("#no_s2").val(data.no_s2)
			$("#file_s2").val(data.file_s2)
			$("#s3").val(data.s3)
			$("#no_s3").val(data.no_s3)
			$("#file_s3").val(data.file_s3)
			$("#profesi").val(data.profesi)
			$("#no_profesi").val(data.no_profesi)
			$("#file_profesi").val(data.file_profesi)
			$("#jabatan").val(data.jabatan)
			$("#status_karyawan").val(data.status_karyawan)
			$("#jenis_tenaga").val(data.jenis_tenaga)
			$("#jenis_detail_tenaga").val(data.jenis_detail_tenaga)
			$("#jenis_pendidikan").val(data.jenis_pendidikan)
			$("#golongan").val(data.golongan)
			$("#jenis_jabatan").val(data.jenis_jabatan)
			$("#pangkat_golongan").val(data.pangkat_golongan)
			$("#pensiun").val(data.pensiun)
			$("#gaji").val(data.gaji)
			$("#ruangan").val(data.ruangan)
			$("#no_sk").val(data.no_sk)
			$("#file_sk").val(data.file_sk)
			$("#file_penempatan").val(data.file_penempatan)
			$("#no_str").val(data.no_str)
			$("#file_str").val(data.file_str)
			$("#no_sip").val(data.no_sip)
			$("#file_sip").val(data.file_sip)
			$("#masa_sip").val(data.masa_sip)
			console.log(data)
			$("#edit" + id).html('<i class="fa fa-edit"></i>')
		}
		});
	}

	function edit() {
		$("#tombolEdit").html('<i class="fas fa-spinner fa-pulse"></i> Memproses..')
		// var foto = $("#foto").val()
		var nama = $("#editnama").val()
		var nik = $("#nik").val()
		var no_hp = $("#no_hp").val()
		var email = $("#email").val()
		var alamat = $("#alamat").val()
		var prov = $("#prov").val()
		var kab = $("#kab").val()
		var nip = $("#nip").val()
		var kec = $("#kec").val()
		var kelu = $("#kelu").val()
		var rt_rw = $("#rt_rw").val()
		var kode_pos = $("#kode_pos").val()
		var tempat_lahir = $("#tempat_lahir").val()
		var tanggal_lahir = $("#tanggal_lahir").val()
		var jk = $("#jk").val()
		var agama = $("#agama").val()
		var status_pernikahan = $("#status_pernikahan").val()
		var goldar = $("#goldar").val()
		var suku = $("#suku").val()
		var sd = $("#sd").val()
		var no_sd = $("#no_sd").val()
		var file_sd = $("#file_sd").val()
		var smp = $("#smp").val()
		var no_smp = $("#no_smp").val()
		var file_smp = $("#file_smp").val()
		var sma = $("#sma").val()
		var no_sma = $("#no_sma").val()
		var file_sma = $("#file_sma").val()
		var s1 = $("#s1").val()
		var no_s1 = $("#no_s1").val()
		var file_s1 = $("#file_s1").val()
		var s2 = $("#s2").val()
		var no_s2 = $("#no_s2").val()
		var file_s2 = $("#file_s2").val()
		var s3 = $("#s3").val()
		var no_s3 = $("#no_s3").val()
		var file_s3 = $("#file_s3").val()
		var profesi = $("#profesi").val()
		var no_profesi = $("#no_profesi").val()
		var file_profesi = $("#file_profesi").val()
		var jabatan = $("#jabatan").val()
		var status_karyawan = $("#status_karyawan").val()
		var jenis_tenaga = $("#jenis_tenaga").val()
		var jenis_detail_tenaga = $("#jenis_detail_tenaga").val()
		var jenis_pendidikan = $("#jenis_pendidikan").val()
		var golongan = $("#golongan").val()
		var jenis_jabatan = $("#jenis_jabatan").val()
		var pangkat_golongan = $("#pangkat_golongan").val()
		var pensiun = $("#pensiun").val()
		var gaji = $("#gaji").val()
		var ruangan = $("#ruangan").val()
		var no_sk = $("#no_sk").val()
		var file_sk = $("#file_sk").val()
		var file_penempatan = $("#file_penempatan").val()
		var no_str = $("#no_str").val()
		var file_str = $("#file_str").val()
		var no_sip = $("#no_sip").val()
		var file_sip = $("#file_sip").val()
		var masa_sip = $("#masa_sip").val()
		var id = $("#idUser").val()
		$.ajax({
		url: '<?= base_url() ?>data_karyawan/edit',
		method: 'post',
		data: {
			id: id,
			// foto: foto,
			nama: nama,
			nik: nik,
			nip: nip,
			no_hp: no_hp,
			email: email,
			alamat: alamat,
			prov: prov,
			kab: kab,
			kec: kec,
			kelu: kelu,
			rt_rw: rt_rw,
			kode_pos: kode_pos,
			tempat_lahir: tempat_lahir,
			tanggal_lahir: tanggal_lahir,
			jk: jk,
			agama: agama,
			status_pernikahan: status_pernikahan,
			goldar: goldar,
			suku: suku,
			sd: sd,
			no_sd: no_sd,
			file_sd: file_sd,
			smp: smp,
			no_smp: no_smp,
			file_smp: file_smp,
			sma: sma,
			no_sma: no_sma,
			file_sma: file_sma,
			s1: s1,
			no_s1: no_s1,
			file_s1: file_s1,
			s2: s2,
			no_s2: no_s2,
			file_s2: file_s2,
			s3: s3,
			no_s3: no_s3,
			file_s3: file_s3,
			profesi: profesi,
			no_profesi: no_profesi,
			file_profesi: file_profesi,
			jabatan: jabatan,
			status_karyawan: status_karyawan,
			jenis_tenaga: jenis_tenaga,
			jenis_detail_tenaga: jenis_detail_tenaga,
			jenis_pendidikan: jenis_pendidikan,
			golongan: golongan,
			jenis_jabatan: jenis_jabatan,
			pangkat_golongan: pangkat_golongan,
			pensiun: pensiun,
			gaji: gaji,
			ruangan: ruangan,
			no_sk: no_sk,
			file_sk: file_sk,
			file_penempatan: file_penempatan,
			no_str: no_str,
			file_str: file_str,
			no_sip: no_sip,
			file_sip: file_sip,
			masa_sip: masa_sip
		},
		dataType: 'json',
		success: function(data) {
			if (data == "") {
				$("#idUser").val("")
				// $("#foto").val("")
				$("#nama").val("")
				$("#nik").val("")
				$("#no_hp").val("")
				$("#email").val("")
				$("#alamat").val("")
				$("#nip").val("")
				$("#prov").val("")
				$("#kab").val("")
				$("#kec").val("")
				$("#kelu").val("")
				$("#rt_rw").val("")
				$("#kode_pos").val("")
				$("#tempat_lahir").val("")
				$("#tanggal_lahir").val("")
				$("#jk").val("")
				$("#agama").val("")
				$("#status_pernikahan").val("")
				$("#goldar").val("")
				$("#suku").val("")
				$("#sd").val("")
				$("#no_sd").val("")
				$("#file_sd").val("")
				$("#smp").val("")
				$("#no_smp").val("")
				$("#file_smp").val("")
				$("#sma").val("")
				$("#no_sma").val("")
				$("#file_sma").val("")
				$("#s1").val("")
				$("#no_s1").val("")
				$("#file_s1").val("")
				$("#s2").val("")
				$("#no_s2").val("")
				$("#file_s2").val("")
				$("#s3").val("")
				$("#no_s3").val("")
				$("#file_s3").val("")
				$("#profesi").val("")
				$("#no_profesi").val("")
				$("#file_profesi").val("")
				$("#jabatan").val("")
				$("#status_karyawan").val("")
				$("#jenis_tenaga").val("")
				$("#jenis_detail_tenaga").val("")
				$("#jenis_pendidikan").val("")
				$("#golongan").val("")
				$("#jenis_jabatan").val("")
				$("#pangkat_golongan").val("")
				$("#pensiun").val("")
				$("#gaji").val("")
				$("#ruangan").val("")
				$("#no_sk").val("")
				$("#file_sk").val("")
				$("#file_penempatan").val("")
				$("#no_str").val("")
				$("#file_str").val("")
				$("#no_sip").val("")
				$("#file_sip").val("")
				$("#masa_sip").val("")
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
	
	function tryArsip(id) {
		$("#tombolArsip" + id).html('<i class="fas fa-spinner fa-pulse"></i>')
		$("#idUser").val(id)
		$.ajax({
		url: '<?= base_url() ?>data_karyawan/edit_id',
		method: 'post',
		data: "target=karyawan&id=" + id,
		dataType: 'json',
		success: function(data) {
			$("#modalArsip").modal('show')
			$("#file_sd").val(data.file_sd)
			$("#file_smp").val(data.file_smp)
			$("#file_sma").val(data.file_sma)
			$("#file_s1").val(data.file_s1)
			$("#file_s2").val(data.file_s2)
			$("#file_s3").val(data.file_s3)
			$("#file_profesi").val(data.file_profesi)
			$("#file_sk").val(data.file_sk)
			$("#file_penempatan").val(data.file_penempatan)
			$("#file_str").val(data.file_str)
			$("#file_sip").val(data.file_sip)
			$("#file_skp").val(data.file_skp)
			console.log(data)
			$("#arsip" + id).html('<i class="fa fa-edit"></i>')
		}
		});
	}

	function arsip() {
		$("#tombolArsip").html('<i class="fas fa-spinner fa-pulse"></i> Memproses..')
		var file_sd = $("#file_sd").val()
		var file_smp = $("#file_smp").val()
		var file_sma = $("#file_sma").val()
		var file_s1 = $("#file_s1").val()
		var file_s2 = $("#file_s2").val()
		var file_s3 = $("#file_s3").val()
		var file_profesi = $("#file_profesi").val()
		var file_sk = $("#file_sk").val()
		var file_penempatan = $("#file_penempatan").val()
		var file_str = $("#file_str").val()
		var file_sip = $("#file_sip").val()
		var file_skp = $("#file_skp").val()
		var id = $("#idUser").val()
		$.ajax({
		url: '<?= base_url() ?>data_karyawan/arsip',
		method: 'post',
		data: {
			id: id,
			file_sd: file_sd,
			file_smp: file_smp,
			file_sma: file_sma,
			file_s1: file_s1,
			file_s2: file_s2,
			file_s3: file_s3,
			file_profesi: file_profesi,
			file_sk: file_sk,
			file_penempatan: file_penempatan,
			file_str: file_str,
			file_sip: file_sip,
			file_skp: file_skp
		},
		dataType: 'json',
		success: function(data) {
			if (data == "") {
				$("#idUser").val("")
				$("#file_sd").val("")
				$("#file_smp").val("")
				$("#file_sma").val("")
				$("#file_s1").val("")
				$("#file_s2").val("")
				$("#file_s3").val("")
				$("#file_profesi").val("")
				$("#file_sk").val("")
				$("#file_penempatan").val("")
				$("#file_str").val("")
				$("#file_sip").val("")
				$("#file_skp").val("")
				// console.log(data)
			} else {
			$('#pesanErrorEdit').html(data)
			}
			$("#modalArsip").modal('hide');
			tampilkan();
			$("#tombolArsip").html('Simpan')
		}
		});
	}

	function tryView(id) {
		$("#tombolView" + id).html('<i class="fas fa-spinner fa-pulse"></i>')
		$("#idUser").val(id)
		$.ajax({
		url: '<?= base_url() ?>data_karyawan/edit_id',
		method: 'post',
		data: "target=karyawan&id=" + id,
		dataType: 'json',
		success: function(data) {
			$("#view_file_penempatan").html('');
			$("#view_file_sk").html('');
			$("#view_file_str").html('');
			$("#view_file_skp").html('');
			$("#view_file_sip").html('');
			$("#view_file_sd").html('');
			$("#view_file_smp").html('');
			$("#view_file_s1").html('');
			$("#view_file_s2").html('');
			$("#view_file_s3").html('');
			$("#view_file_profesi").html('');
			$("#view_foto").html('');

			// $("#view_foto").html('<img src="'+base_url+'assets/foto_karyawan/'+data.foto+'">');

			$("#modalView").modal('show')
			$("#view_foto").val(data.foto)
			// $("#foto").val(data.foto)
			$("#view_nama").val(data.nama)
			$("#view_id_karyawan").val(data.id_karyawan)
			$("#view_nik").val(data.nik)
			$("#view_nip").val(data.nip)
			$("#view_no_hp").val(data.no_hp)
			$("#view_email").val(data.email)
			$("#view_alamat").val(data.alamat)
			$("#view_prov").val(data.prov)
			$("#view_kab").val(data.kab)
			$("#view_kec").val(data.kec)
			$("#view_kelu").val(data.kelu)
			$("#view_rt_rw").val(data.rt_rw)
			$("#view_kode_pos").val(data.kode_pos)
			$("#view_tempat_lahir").val(data.tempat_lahir)
			$("#view_tanggal_lahir").val(data.tanggal_lahir)
			$("#view_jk").val(data.jk)
			$("#view_agama").val(data.agama)
			$("#view_status_pernikahan").val(data.status_pernikahan)
			$("#view_goldar").val(data.goldar)
			$("#view_suku").val(data.suku)
			$("#view_sd").val(data.sd)
			$("#view_no_sd").val(data.no_sd)
			$("#view_file_sd").val(data.file_sd)
			$("#view_smp").val(data.smp)
			$("#view_no_smp").val(data.no_smp)
			$("#view_file_smp").val(data.file_smp)
			$("#view_sma").val(data.sma)
			$("#view_no_sma").val(data.no_sma)
			$("#view_file_sma").val(data.file_sma)
			$("#view_s1").val(data.s1)
			$("#view_no_s1").val(data.no_s1)
			$("#view_file_s1").val(data.file_s1)
			$("#view_s2").val(data.s2)
			$("#view_no_s2").val(data.no_s2)
			$("#view_file_s2").val(data.file_s2)
			$("#view_s3").val(data.s3)
			$("#view_no_s3").val(data.no_s3)
			$("#view_file_s3").val(data.file_s3)
			$("#view_profesi").val(data.profesi)
			$("#view_no_profesi").val(data.no_profesi)
			$("#view_file_profesi").val(data.file_profesi)
			$("#view_jabatan").val(data.jabatan)
			$("#view_status_karyawan").val(data.status_karyawan)
			$("#view_jenis_tenaga").val(data.jenis_tenaga)
			$("#view_jenis_detail_tenaga").val(data.jenis_detail_tenaga)
			$("#view_jenis_pendidikan").val(data.jenis_pendidikan)
			$("#view_golongan").val(data.golongan)
			$("#view_jenis_jabatan").val(data.jenis_jabatan)
			$("#view_pangkat_golongan").val(data.pangkat_golongan)
			$("#view_pensiun").val(data.pensiun)
			$("#view_gaji").val(data.gaji)
			$("#view_ruangan").val(data.ruangan)
			$("#view_no_sk").val(data.no_sk)
			$("#view_file_sk").val(data.file_sk)
			$("#view_file_penempatan").val(data.file_penempatan)
			$("#view_no_str").val(data.no_str)
			$("#view_file_str").val(data.file_str)
			$("#view_no_sip").val(data.no_sip)
			$("#view_file_sip").val(data.file_sip)
			$("#view_file_skp").val(data.file_skp)
			$("#view_masa_sip").val(data.masa_sip)


			if(data.foto!=null){
                var foto = '<img src="<?= base_url() ?>assets/foto_karyawan/'+data.foto+'" width="150" height="150" />';
                $("#view_foto").html(foto);
            }

			// if(data.foto!=null){
            //     var foto = '<img src="'+base_url+'assets/foto_karyawan/'+data.foto+'">';
            //     $("#view_foto").html(foto);
            // }

			if(data.file_penempatan!=null){
                var link = ' <a href="<?= base_url() ?>assets/arsip_karyawan/'+data.file_penempatan+'" target="_blank">SK Penempatan</a>';
                $("#view_file_penempatan").html(link);
            }

			if(data.file_sk!=null){
                var link = ' <a href="<?= base_url() ?>assets/arsip_karyawan/'+data.file_sk+'" target="_blank">SK KARYAWAN</a>';
                $("#view_file_sk").html(link);
            }
			
			if(data.file_str!=null){
                var link = ' <a href="<?= base_url() ?>assets/arsip_karyawan/'+data.file_str+'" target="_blank">STR</a>';
                $("#view_file_str").html(link);
            }

			if(data.file_skp!=null){
                var link = ' <a href="<?= base_url() ?>assets/arsip_karyawan/'+data.file_skp+'" target="_blank">SKP</a>';
                $("#view_file_skp").html(link);
            }

			if(data.file_sip!=null){
                var link = ' <a href="<?= base_url() ?>assets/arsip_karyawan/'+data.file_sip+'" target="_blank">SIP</a>';
                $("#view_file_sip").html(link);
            }

			if(data.file_sd!=null){
                var link = ' <a href="<?= base_url() ?>assets/arsip_karyawan/'+data.file_sd+'" target="_blank">IJAZAH SD</a>';
                $("#view_file_sd").html(link);
            }

			if(data.file_smp!=null){
                var link = ' <a href="<?= base_url() ?>assets/arsip_karyawan/'+data.file_smp+'" target="_blank">IJAZAH SMP</a>';
                $("#view_file_smp").html(link);
            }

			if(data.file_sma!=null){
                var link = ' <a href="<?= base_url() ?>assets/arsip_karyawan/'+data.file_sma+'" target="_blank">IJAZAH SMA</a>';
                $("#view_file_sma").html(link);
            }

			if(data.file_s1!=null){
                var link = ' <a href="<?= base_url() ?>assets/arsip_karyawan/'+data.file_s1+'" target="_blank">IJAZAH S1/D-III/D-IV</a>';
                $("#view_file_s1").html(link);
            }

			if(data.file_s2!=null){
                var link = ' <a href="<?= base_url() ?>assets/arsip_karyawan/'+data.file_s2+'" target="_blank">IJAZAH S2</a>';
                $("#view_file_s2").html(link);
            }

			if(data.file_s3!=null){
                var link = ' <a href="<?= base_url() ?>assets/arsip_karyawan/'+data.file_s3+'" target="_blank">IJAZAH S3</a>';
                $("#view_file_s3").html(link);
            }

			if(data.file_profesi!=null){
                var link = ' <a href="<?= base_url() ?>assets/arsip_karyawan/'+data.file_profesi+'" target="_blank">IJAZAH PROFESI</a>';
                $("#view_file_profesi").html(link);
            }
			console.log(data)
			$("#view" + id).html('<i class="fa fa-edit"></i>')
		}
		});
	}

	function view() {
		$("#tombolView").html('<i class="fas fa-spinner fa-pulse"></i> Memproses..')
		var foto = $("#foto").val()
		var nama = $("#view_nama").val()
		var nik = $("#nik").val()
		var no_hp = $("#no_hp").val()
		var email = $("#email").val()
		var alamat = $("#alamat").val()
		var prov = $("#prov").val()
		var kab = $("#kab").val()
		var kec = $("#kec").val()
		var kelu = $("#kelu").val()
		var rt_rw = $("#rt_rw").val()
		var kode_pos = $("#kode_pos").val()
		var tempat_lahir = $("#tempat_lahir").val()
		var tanggal_lahir = $("#tanggal_lahir").val()
		var jk = $("#jk").val()
		var agama = $("#agama").val()
		var status_pernikahan = $("#status_pernikahan").val()
		var goldar = $("#goldar").val()
		var suku = $("#suku").val()
		var sd = $("#sd").val()
		var no_sd = $("#no_sd").val()
		var file_sd = $("#file_sd").val()
		var smp = $("#smp").val()
		var no_smp = $("#no_smp").val()
		var file_smp = $("#file_smp").val()
		var sma = $("#sma").val()
		var no_sma = $("#no_sma").val()
		var file_sma = $("#file_sma").val()
		var s1 = $("#s1").val()
		var no_s1 = $("#no_s1").val()
		var file_s1 = $("#file_s1").val()
		var s2 = $("#s2").val()
		var no_s2 = $("#no_s2").val()
		var file_s2 = $("#file_s2").val()
		var s3 = $("#s3").val()
		var no_s3 = $("#no_s3").val()
		var file_s3 = $("#file_s3").val()
		var profesi = $("#profesi").val()
		var no_profesi = $("#no_profesi").val()
		var file_profesi = $("#file_profesi").val()
		var jabatan = $("#jabatan").val()
		var status_karyawan = $("#status_karyawan").val()
		var jenis_tenaga = $("#jenis_tenaga").val()
		var jenis_detail_tenaga = $("#jenis_detail_tenaga").val()
		var jenis_pendidikan = $("#jenis_pendidikan").val()
		var golongan = $("#golongan").val()
		var pensiun = $("#pensiun").val()
		var gaji = $("#gaji").val()
		var ruangan = $("#ruangan").val()
		var no_sk = $("#no_sk").val()
		var file_sk = $("#file_sk").val()
		var file_penempatan = $("#file_penempatan").val()
		var no_str = $("#no_str").val()
		var file_str = $("#file_str").val()
		var no_sip = $("#no_sip").val()
		var file_sip = $("#file_sip").val()
		var masa_sip = $("#masa_sip").val()
		var id = $("#idUser").val()
		$.ajax({
		url: '<?= base_url() ?>data_karyawan/edit',
		method: 'post',
		data: {
			id: id,
			foto: foto,
			nama: nama,
			nik: nik,
			no_hp: no_hp,
			email: email,
			alamat: alamat,
			prov: prov,
			kab: kab,
			kec: kec,
			kelu: kelu,
			rt_rw: rt_rw,
			kode_pos: kode_pos,
			tempat_lahir: tempat_lahir,
			tanggal_lahir: tanggal_lahir,
			jk: jk,
			agama: agama,
			status_pernikahan: status_pernikahan,
			goldar: goldar,
			suku: suku,
			sd: sd,
			no_sd: no_sd,
			file_sd: file_sd,
			smp: smp,
			no_smp: no_smp,
			file_smp: file_smp,
			sma: sma,
			no_sma: no_sma,
			file_sma: file_sma,
			s1: s1,
			no_s1: no_s1,
			file_s1: file_s1,
			s2: s2,
			no_s2: no_s2,
			file_s2: file_s2,
			s3: s3,
			no_s3: no_s3,
			file_s3: file_s3,
			profesi: profesi,
			no_profesi: no_profesi,
			file_profesi: file_profesi,
			jabatan: jabatan,
			status_karyawan: status_karyawan,
			jenis_tenaga: jenis_tenaga,
			jenis_detail_tenaga: jenis_detail_tenaga,
			jenis_pendidikan: jenis_pendidikan,
			golongan: golongan,
			pensiun: pensiun,
			gaji: gaji,
			ruangan: ruangan,
			no_sk: no_sk,
			file_sk: file_sk,
			file_penempatan: file_penempatan,
			no_str: no_str,
			file_str: file_str,
			no_sip: no_sip,
			file_sip: file_sip,
			masa_sip: masa_sip
		},
		dataType: 'json',
		success: function(data) {
			if (data == "") {
				$("#idUser").val("")
				$("#foto").val("")
				$("#nama").val("")
				$("#nik").val("")
				$("#no_hp").val("")
				$("#email").val("")
				$("#alamat").val("")
				$("#prov").val("")
				$("#kab").val("")
				$("#kec").val("")
				$("#kelu").val("")
				$("#rt_rw").val("")
				$("#kode_pos").val("")
				$("#tempat_lahir").val("")
				$("#tanggal_lahir").val("")
				$("#jk").val("")
				$("#agama").val("")
				$("#status_pernikahan").val("")
				$("#goldar").val("")
				$("#suku").val("")
				$("#sd").val("")
				$("#no_sd").val("")
				$("#file_sd").val("")
				$("#smp").val("")
				$("#no_smp").val("")
				$("#file_smp").val("")
				$("#sma").val("")
				$("#no_sma").val("")
				$("#file_sma").val("")
				$("#s1").val("")
				$("#no_s1").val("")
				$("#file_s1").val("")
				$("#s2").val("")
				$("#no_s2").val("")
				$("#file_s2").val("")
				$("#s3").val("")
				$("#no_s3").val("")
				$("#file_s3").val("")
				$("#profesi").val("")
				$("#no_profesi").val("")
				$("#file_profesi").val("")
				$("#jabatan").val("")
				$("#status_karyawan").val("")
				$("#jenis_tenaga").val("")
				$("#jenis_detail_tenaga").val("")
				$("#jenis_pendidikan").val("")
				$("#golongan").val("")
				$("#pensiun").val("")
				$("#gaji").val("")
				$("#ruangan").val("")
				$("#no_sk").val("")
				$("#file_sk").val("")
				$("#file_penempatan").val("")
				$("#no_str").val("")
				$("#file_str").val("")
				$("#no_sip").val("")
				$("#file_sip").val("")
				$("#masa_sip").val("")
				// console.log(data)
			} else {
			$('#pesanErrorView').html(data)
			}
			$("#modalView").modal('hide');
			tampilkan();
			$("#tombolView").html('Simpan')
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