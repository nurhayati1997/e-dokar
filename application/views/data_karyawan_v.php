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
															<span class="text-white">Form Tambah Data Karyawan </span>
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
															<!-- <div class="form-group mb-3">
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
															<div class="form-group mb-3">
																<span class="form-text text-muted">Pilih Jenis Tenaga</span>
																<select class="form-control" id="jenis_tenaga">
																	<option value="Tenaga Medis / Dokter">Tenaga Medis / Dokter</option>
																	<option value="Tenaga Keperawatan">Tenaga Keperawatan</option>
																	<option value="Tenaga Kesehatan Lainnya">Tenaga Kesehatan Lainnya</option>
																	<option value="Pejabat Struktural">Pejabat Struktural</option>
																	<option value="Tenaga Umum / Non Medis">Tenaga Umum / Non Medis</option>
																</select>
															</div>
															
															<div class="form-group mb-3">
																<span class="form-text text-muted">Masukkan Jenis Pendidikan</span>
																<input type="text" class="form-control" id="jenis_pendidikan" placeholder="Mohon sesuaikan dengan data ketenagaan" />
															</div> -->

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
																	<div class="col-lg-4">
																		<label>A. KELENGKAPAN IDENTITAS KARYAWAN:</label>
																		<div class="custom-file">
																			<input id="idUser" type="hidden">
																			<input type="file" class="custom-file-input" id="foto" />
																			<label class="custom-file-label" for="customFile">Foto Harus format JPG</label>
																		</div>
																	</div>
																	<!-- <div class="col-lg-4">
																		<span class="form-text text-muted">Nama</span>
																		<input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Tanpa Gelar"/>
																	</div> -->
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
																		<input type="date" class="form-control" id="tempat_lahir" placeholder="Masukkan Tanggal Lahir Sesuai KTP" />
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
																	<div class="col-lg-4">
																		<label>B. KELENGKAPAN PENDIDIKAN KARYAWAN:</label>
																		<span class="form-text text-muted">SD</span>
																		<input type="text" class="form-control" id="sd" placeholder="Masukkan Sesuai Ijazah"/>
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">No Ijazah SD</span>
																		<input type="text" class="form-control" id="no_sd" placeholder="Masukkan Sesuai Ijazah"/>
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">Upload Ijazah SD</span>
																		<div class="custom-file">
																			<input type="file" class="custom-file-input" id="file_sd" />
																			<label class="custom-file-label" for="customFile">File Ijazah Harus format pdf</label>
																		</div>
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">SMP</span>
																		<input type="text" class="form-control" id="smp" placeholder="Masukkan Sesuai Ijazah"/>
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">No Ijazah SMP</span>
																		<input type="text" class="form-control" id="no_smp" placeholder="Masukkan Sesuai Ijazah"/>
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">Upload Ijazah SMP</span>
																		<div class="custom-file">
																			<input type="file" class="custom-file-input" id="file_smp" />
																			<label class="custom-file-label" for="customFile">File Ijazah Harus format pdf</label>
																		</div>
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">SMA</span>
																		<input type="text" class="form-control" id="sma" placeholder="Masukkan Sesuai Ijazah"/>
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">No Ijazah SMA</span>
																		<input type="text" class="form-control" id="no_sma" placeholder="Masukkan Sesuai Ijazah"/>
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">Upload Ijazah SMA</span>
																		<div class="custom-file">
																			<input type="file" class="custom-file-input" id="file_sma" />
																			<label class="custom-file-label" for="customFile">File Ijazah Harus format pdf</label>
																		</div>
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">S1</span>
																		<input type="text" class="form-control" id="s1" placeholder="Masukkan Sesuai Ijazah"/>
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">No Ijazah S1</span>
																		<input type="text" class="form-control" id="no_s1" placeholder="Masukkan Sesuai Ijazah"/>
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">Upload Ijazah S1</span>
																		<div class="custom-file">
																			<input type="file" class="custom-file-input" id="file_s1" />
																			<label class="custom-file-label" for="customFile">File Ijazah Harus format pdf</label>
																		</div>
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">S2</span>
																		<input type="text" class="form-control" id="s2" placeholder="Masukkan Sesuai Ijazah"/>
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">No Ijazah S2</span>
																		<input type="text" class="form-control" id="no_s2" placeholder="Masukkan Sesuai Ijazah"/>
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">Upload Ijazah S2</span>
																		<div class="custom-file">
																			<input type="file" class="custom-file-input" id="file_s2" />
																			<label class="custom-file-label" for="customFile">File Ijazah Harus format pdf</label>
																		</div>
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">S3</span>
																		<input type="text" class="form-control" id="s3" placeholder="Masukkan Sesuai Ijazah"/>
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">No Ijazah S3</span>
																		<input type="text" class="form-control" id="no_s3" placeholder="Masukkan Sesuai Ijazah"/>
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">Upload Ijazah S3</span>
																		<div class="custom-file">
																			<input type="file" class="custom-file-input" id="file_s3" />
																			<label class="custom-file-label" for="customFile">File Ijazah Harus format pdf</label>
																		</div>
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">Profesi</span>
																		<input type="text" class="form-control" id="profesi" placeholder="Masukkan Sesuai Ijazah"/>
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">No Ijazah Profesi</span>
																		<input type="text" class="form-control" id="no_profesi" placeholder="Masukkan Sesuai Ijazah"/>
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">Upload Ijazah Profesi</span>
																		<div class="custom-file">
																			<input type="file" class="custom-file-input" id="file_profesi" />
																			<label class="custom-file-label" for="customFile">File Ijazah Harus format pdf</label>
																		</div>
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
																			<option value="Unit">Unit</option>
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
																		</select>
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">Masukkan Jenis Pendidikan</span>
																		<input type="text" class="form-control" id="jenis_pendidikan" placeholder="Mohon sesuaikan dengan data ketenagaan" />
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">Pangkat Golongan</span>
																		<input type="text" class="form-control" id="golongan" placeholder="isi (-) jika bukan ASN"/>
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
																		<span class="form-text text-muted">No SK</span>
																		<input type="text" class="form-control" id="no_sk" placeholder="Masukkan No Sesuai SK" />
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">Upload SK</span>
																		<div class="custom-file">
																			<input type="file" class="custom-file-input" id="file_sk" />
																			<label class="custom-file-label" for="customFile">File SK Harus format pdf</label>
																		</div>
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">Upload SK Penempatan</span>
																		<div class="custom-file">
																			<input type="file" class="custom-file-input" id="file_penempatan" />
																			<label class="custom-file-label" for="customFile">File SK Penempatan Harus format pdf</label>
																		</div>
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">No STR</span>
																		<input type="text" class="form-control" id="no_str" placeholder="Masukkan No Sesuai STR" />
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">Upload STR</span>
																		<div class="custom-file">
																			<input type="file" class="custom-file-input" id="file_str" />
																			<label class="custom-file-label" for="customFile">File STR Harus format pdf</label>
																		</div>
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">No SIP</span>
																		<input type="text" class="form-control" id="no_sip" placeholder="Masukkan No Sesuai SK" />
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">Upload SIP</span>
																		<div class="custom-file">
																			<input type="file" class="custom-file-input" id="file_sip" />
																			<label class="custom-file-label" for="customFile">File SIP Harus format pdf</label>
																		</div>
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

							<!--end::Container-->
						</div>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
  tampilkan();

  function tampilkan(){
    $("#tempatTabel").html('<i class="fas fa-spinner fa-pulse"></i> Memuat...')
    var baris = '<table class="table table-separate table-head-custom table-checkable" id="tabelUser"><thead class="thead-light"><tr><th>Action</th><th>NO</th><th>Update</th><th>ID</th><th>Nama</th><th>Jabatan</th><th>Status Karyawan</th><th>Pendidikan</th><th>Jenis Tenaga</th></tr></thead>'
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
            baris += '<td>' + data[i].tgl_update + '</td>'
            baris += '<td>' + data[i].id_karyawan + '</td>'
            baris += '<td>' + data[i].nama + '</td>'
            // baris += '<td>' + data[i].email + '</td>'
            baris += '<td>' + data[i].jabatan + '</td>'
            baris += '<td>' + data[i].status_karyawan + '</td>'
            baris += '<td>' + data[i]. jenis_pendidikan+ '</td>'
            baris += '<td>' + data[i]. jenis_tenaga+ '</td>'
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

  function tryTambah() {
    $("#id_karyawan").val("")
    $("#nama").val("")
    $("#email").val("")
    $("#password").val("")
    $("#rule").val("")
    $("#status_karyawan").val("")
    $("#jabatan").val("")
    $("#jenis_pendidikan").val("")
    $("#jenis_tenaga").val("")
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
    var jenis_pendidikan =  $("#jenis_pendidikan").val()
    var jenis_tenaga =  $("#jenis_tenaga").val()
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
        //   $("#status_karyawan").val("")
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
        $("#foto").val(data.foto)
        $("#nama").val(data.nama)
        $("#nik").val(data.nik)
        $("#no_hp").val(data.no_hp)
        $("#email").val(data.email)
        $("#alamat").val(data.alamat)
        $("#prov").val(data.prov)
        $("#kab").val(data.kab)
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
        $("#pensiun").val(data.pensiun)
        $("#gaji").val(data.gaji)
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
    var foto = $("#foto").val()
    var nama = $("#nama").val()
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
</script>