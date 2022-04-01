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
																	<div class="col-lg-4">
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
																					<span class="symbol-label">
																						<img src="https://preview.keenthemes.com/metronic/theme/html/demo2/dist/assets/media/svg/avatars/007-boy-2.svg" class="h-75 align-self-end" alt="" />
																					</span>
																				</div>
																				<!--end::Symbol-->
																				<!--begin::Username-->
																				<a href="#" class="card-title font-weight-bolder text-dark-75 text-hover-primary font-size-h4 m-0 pt-7 pb-1">Nama :</a>
																				<!--end::Username-->
																				<!--begin::Info-->
																				<div class="font-weight-bold text-dark-50 font-size-sm pb-0">Status Karyawan : </div>
																				<div class="font-weight-bold text-dark-50 font-size-sm pb-0">NIP : </div>
																				<div class="font-weight-bold text-dark-50 font-size-sm pb-0">Jabatan : </div>
																				<div class="font-weight-bold text-dark-50 font-size-sm pb-0">Gaji : </div>
																				<!--end::Info-->
																			</div>
																			<!--end::Header-->
																			<!--begin::Body-->
																			<div class="pt-1">
																				<!--begin::Item-->
																				<div class="d-flex align-items-center pb-2">
																					<!--begin::Text-->
																					<div class="d-flex flex-column flex-grow-1">
																						<a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">ID Karyawan :</a>
																						<a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Pendidikan :</a>
																						<a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">NIK :</a>
																						<a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Email :</a>
																						<a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">No Hp :</a>
																					</div>
																					<!--end::Text-->
																				</div>
																				<!--end::Item-->
																			</div>
																			<!--end::Body-->
																		</div>
																		<!--eng::Container-->
																	</div>
																	<!--end::Wrapper-->
																</div>
																<!--end::Body-->
															</div>
															<!--end::Nav Panel Widget 2-->
															<!--begin::List Widget 17-->
															<div class="card card-custom gutter-b">
																<!--begin::Header-->
																<div class="card-header border-0 pt-5">
																	<h3 class="card-title align-items-start flex-column">
																		<span class="card-label font-weight-bolder text-dark">___Identitas Karyawan___</span>
																	</h3>
																</div>
																<!--end::Header-->
																<!--begin::Body-->
																<div class="card-body pt-1">
																	<!--begin::Container-->
																	<div>
																		<!--begin::Item-->
																		<div class="d-flex align-items-center mb-4">
																			<!--begin::Symbol-->
																			<div class="symbol mr-5 pt-1">
																				<div class="symbol-label min-w-65px min-h-100px" style="background-image: url('assets/media/books/12.png')"></div>
																			</div>
																			<!--end::Symbol-->
																			<!--begin::Info-->
																			<div class="d-flex flex-column">
																				<!--begin::Title-->
																				<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">Alamat : </a>
																				<!--end::Title-->
																				<!--begin::Text-->
																				<span class="text-muted font-weight-bold font-size-sm pb-0"> Provinsi : </span>
																				<span class="text-muted font-weight-bold font-size-sm pb-0"> Kabupaten : </span>
																				<span class="text-muted font-weight-bold font-size-sm pb-0"> Kecamatan : </span>
																				<span class="text-muted font-weight-bold font-size-sm pb-0"> Kelurahan : </span>
																				<span class="text-muted font-weight-bold font-size-sm pb-0"> RT/RW : </span>
																				<span class="text-muted font-weight-bold font-size-sm pb-0"> Kode Pos : </span>
																				<!--end::Text-->
																			</div>
																			<!--end::Info-->
																		</div>

																		<!--begin::Item-->
																		<div class="d-flex align-items-center mb-4">
																			<!--begin::Symbol-->
																			<div class="symbol mr-5 pt-1">
																				<div class="symbol-label min-w-65px min-h-100px" style="background-image: url('assets/media/books/12.png')"></div>
																			</div>
																			<!--end::Symbol-->
																			<!--begin::Info-->
																			<div class="d-flex flex-column">
																				<!--begin::Title-->
																				<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">Tempat Lahir : </a>
																				<!--end::Title-->
																				<!--begin::Text-->
																				<span class="text-muted font-weight-bold font-size-sm pb-0"> Tanggal Lahir : </span>
																				<span class="text-muted font-weight-bold font-size-sm pb-0"> Jenis Kelamin : </span>
																				<span class="text-muted font-weight-bold font-size-sm pb-0"> Agama : </span>
																				<span class="text-muted font-weight-bold font-size-sm pb-0"> Status Pernikahan : </span>
																				<span class="text-muted font-weight-bold font-size-sm pb-0"> Golongan Darah : </span>
																				<span class="text-muted font-weight-bold font-size-sm pb-0"> Suku Bangsa : </span>
																				<!--end::Text-->
																			</div>
																			<!--end::Info-->
																		</div>
																	</div>
																	<!--end::Container-->
																</div>
																<!--end::Body-->
															</div>
															<!--end::List Widget 17-->
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
																					<span class="nav-text font-weight-bold">Personal</span>
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
																					<span class="nav-text font-weight-bold">Account</span>
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
																					<span class="nav-text font-weight-bold">Settings</span>
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
																					<span class="nav-text font-weight-bold">Notes</span>
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
																						<h3 class="font-size-h6 mb-5">Student Info:</h3>
																					</div>
																				</div>
																				<!--end::Heading-->
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right col-form-label">Photo</label>
																					<div class="col-lg-9 col-xl-9">
																						<div class="image-input image-input-outline image-input-circle" id="kt_user_avatar" style="background-image: url(../../../../../theme/html/demo2/dist/assets/media/users/blank.png)">
																							<div class="image-input-wrapper" style="background-image: url(https://preview.keenthemes.com/metronic/theme/html/demo2/dist/assets/media/svg/avatars/007-boy-2.svg)"></div>
																							<label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
																								<i class="fa fa-pen icon-sm text-muted"></i>
																								<input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg" />
																								<input type="hidden" name="profile_avatar_remove" />
																							</label>
																							<span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
																								<i class="ki ki-bold-close icon-xs text-muted"></i>
																							</span>
																							<span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="Remove avatar">
																								<i class="ki ki-bold-close icon-xs text-muted"></i>
																							</span>
																						</div>
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right col-form-label">Name</label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid" type="text" value="Nick" />
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right col-form-label">Nickname</label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid" type="text" value="Bold" />
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right col-form-label">Organization</label>
																					<div class="col-lg-9 col-xl-6">
																						<input class="form-control form-control-lg form-control-solid" type="text" value="Loop Inc." />
																						<span class="form-text text-muted">If you want your invoices addressed to a company. Leave blank to use your full name.</span>
																					</div>
																				</div>
																				<div class="separator separator-dashed my-10"></div>
																				<!--begin::Heading-->
																				<div class="row">
																					<div class="col-lg-9 col-xl-6 offset-xl-3">
																						<h3 class="font-size-h6 mb-5">Contact Info:</h3>
																					</div>
																				</div>
																				<!--end::Heading-->
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right col-form-label">Phone</label>
																					<div class="col-lg-9 col-xl-6">
																						<div class="input-group input-group-lg input-group-solid">
																							<div class="input-group-prepend">
																								<span class="input-group-text">
																									<i class="la la-phone"></i>
																								</span>
																							</div>
																							<input type="text" class="form-control form-control-lg form-control-solid" value="+35278953712" placeholder="Phone" />
																						</div>
																						<span class="form-text text-muted">We'll never share your email with anyone else.</span>
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
																							<input type="text" class="form-control form-control-lg form-control-solid" value="nick.bold@loop.com" placeholder="Email" />
																						</div>
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right col-form-label">Site</label>
																					<div class="col-lg-9 col-xl-6">
																						<div class="input-group input-group-lg input-group-solid">
																							<input type="text" class="form-control form-control-lg form-control-solid" placeholder="Username" value="loop" />
																							<div class="input-group-append">
																								<span class="input-group-text">.com</span>
																							</div>
																						</div>
																					</div>
																				</div>
																				<div class="separator separator-dashed my-10"></div>
																				<!--begin::Heading-->
																				<div class="row">
																					<div class="col-lg-9 col-xl-6 offset-xl-3">
																						<h3 class="font-size-h6 mb-5">Contact Info:</h3>
																					</div>
																				</div>
																				<!--end::Heading-->
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right col-form-label">Email Notification</label>
																					<div class="col-lg-9 col-xl-6">
																						<span class="switch">
																							<label>
																								<input type="checkbox" checked="checked" name="email_notification_1" />
																								<span></span>
																							</label>
																						</span>
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right col-form-label">Send Copy</label>
																					<div class="col-lg-9 col-xl-6">
																						<span class="switch">
																							<label>
																								<input type="checkbox" name="email_notification_2" />
																								<span></span>
																							</label>
																						</span>
																					</div>
																				</div>
																			</form>
																		</div>
																		<!--end::Tab Content-->
																		<!--begin::Tab Content-->
																		<div class="tab-pane" id="kt_apps_contacts_view_tab_3" role="tabpanel">
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
																		<!--begin::Tab Content-->
																		<div class="tab-pane" id="kt_apps_contacts_view_tab_4" role="tabpanel">
																			<form class="form">
																				<div class="row">
																					<label class="col-xl-3"></label>
																					<div class="col-lg-9 col-xl-6">
																						<h3 class="font-size-h6 mb-5">Setup Email Notification:</h3>
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right col-form-label">Email Notification</label>
																					<div class="col-lg-9 col-xl-6">
																						<span class="switch">
																							<label>
																								<input type="checkbox" checked="checked" name="email_notification_1" />
																								<span></span>
																							</label>
																						</span>
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right col-form-label">Send Copy To Personal Email</label>
																					<div class="col-lg-9 col-xl-6">
																						<span class="switch">
																							<label>
																								<input type="checkbox" name="email_notification_2" />
																								<span></span>
																							</label>
																						</span>
																					</div>
																				</div>
																				<div class="separator separator-dashed my-10"></div>
																				<!--begin::Heading-->
																				<div class="row">
																					<div class="col-lg-9 col-xl-6 offset-xl-3">
																						<h3 class="font-size-h6 mb-5">Activity Related Emails:</h3>
																					</div>
																				</div>
																				<!--end::Heading-->
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right">When To Email</label>
																					<div class="col-lg-9 col-xl-6">
																						<div class="checkbox-list">
																							<label class="checkbox">
																							<input type="checkbox" />
																							<span></span>You have new notifications.</label>
																							<label class="checkbox">
																							<input type="checkbox" />
																							<span></span>You're sent a direct message</label>
																							<label class="checkbox">
																							<input type="checkbox" checked="checked" />
																							<span></span>Someone adds you as a connection</label>
																						</div>
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right">When To Escalate Emails</label>
																					<div class="col-lg-9 col-xl-6">
																						<div class="checkbox-list">
																							<label class="checkbox">
																							<input type="checkbox" />
																							<span></span>Upon new order.</label>
																							<label class="checkbox">
																							<input type="checkbox" />
																							<span></span>New membership approval</label>
																							<label class="checkbox">
																							<input type="checkbox" checked="checked" />
																							<span></span>Member registration</label>
																						</div>
																					</div>
																				</div>
																				<div class="separator separator-dashed my-10"></div>
																				<!--begin::Heading-->
																				<div class="row">
																					<div class="col-lg-9 col-xl-6 offset-xl-3">
																						<h3 class="font-size-h6 mb-5">Updates From Keenthemes:</h3>
																					</div>
																				</div>
																				<!--end::Heading-->
																				<div class="form-group row">
																					<label class="col-xl-3 col-lg-3 text-right">Email You With</label>
																					<div class="col-lg-9 col-xl-6">
																						<div class="checkbox-list">
																							<label class="checkbox">
																							<input type="checkbox" />
																							<span></span>News about Metronic product and feature updates</label>
																							<label class="checkbox">
																							<input type="checkbox" />
																							<span></span>Tips on getting more out of Keen</label>
																							<label class="checkbox">
																							<input type="checkbox" checked="checked" />
																							<span></span>Things you missed since you last logged into Keen</label>
																							<label class="checkbox">
																							<input type="checkbox" checked="checked" />
																							<span></span>News about Metronic on partner products and other services</label>
																							<label class="checkbox">
																							<input type="checkbox" checked="checked" />
																							<span></span>Tips on Metronic business products</label>
																						</div>
																					</div>
																				</div>
																			</form>
																		</div>
																		<!--end::Tab Content-->
																		<!--begin::Tab Content-->
																		<div class="tab-pane" id="kt_apps_contacts_view_tab_1" role="tabpanel">
																			<div class="container">
																				<form class="form">
																					<div class="form-group">
																						<textarea class="form-control form-control-lg form-control-solid" id="exampleTextarea" rows="3" placeholder="Type notes"></textarea>
																					</div>
																					<div class="row">
																						<div class="col">
																							<a href="#" class="btn btn-light-primary font-weight-bold">Add notes</a>
																							<a href="#" class="btn btn-clean font-weight-bold">Cancel</a>
																						</div>
																					</div>
																				</form>
																				<div class="separator separator-dashed my-10"></div>
																				<!--begin::Timeline-->
																				<div class="timeline timeline-3">
																					<div class="timeline-items">
																						<div class="timeline-item">
																							<div class="timeline-media">
																								<img alt="Pic" src="../../../../../theme/html/demo2/dist/assets/media/users/300_25.jpg" />
																							</div>
																							<div class="timeline-content">
																								<div class="d-flex align-items-center justify-content-between mb-3">
																									<div class="mr-2">
																										<a href="#" class="text-dark-75 text-hover-primary font-weight-bold">New order has been placed</a>
																										<span class="text-muted ml-2">Today</span>
																										<span class="label label-light-success font-weight-bolder label-inline ml-2">new</span>
																									</div>
																									<div class="dropdown ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
																										<a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																											<i class="ki ki-more-hor font-size-lg text-primary"></i>
																										</a>
																										<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
																											<!--begin::Navigation-->
																											<ul class="navi navi-hover">
																												<li class="navi-header font-weight-bold py-4">
																													<span class="font-size-lg">Choose Label:</span>
																													<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
																												</li>
																												<li class="navi-separator mb-3 opacity-70"></li>
																												<li class="navi-item">
																													<a href="#" class="navi-link">
																														<span class="navi-text">
																															<span class="label label-xl label-inline label-light-success">Customer</span>
																														</span>
																													</a>
																												</li>
																												<li class="navi-item">
																													<a href="#" class="navi-link">
																														<span class="navi-text">
																															<span class="label label-xl label-inline label-light-danger">Partner</span>
																														</span>
																													</a>
																												</li>
																												<li class="navi-item">
																													<a href="#" class="navi-link">
																														<span class="navi-text">
																															<span class="label label-xl label-inline label-light-warning">Suplier</span>
																														</span>
																													</a>
																												</li>
																												<li class="navi-item">
																													<a href="#" class="navi-link">
																														<span class="navi-text">
																															<span class="label label-xl label-inline label-light-primary">Member</span>
																														</span>
																													</a>
																												</li>
																												<li class="navi-item">
																													<a href="#" class="navi-link">
																														<span class="navi-text">
																															<span class="label label-xl label-inline label-light-dark">Staff</span>
																														</span>
																													</a>
																												</li>
																												<li class="navi-separator mt-3 opacity-70"></li>
																												<li class="navi-footer py-4">
																													<a class="btn btn-clean font-weight-bold btn-sm" href="#">
																													<i class="ki ki-plus icon-sm"></i>Add new</a>
																												</li>
																											</ul>
																											<!--end::Navigation-->
																										</div>
																									</div>
																								</div>
																								<p class="p-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
																							</div>
																						</div>
																						<div class="timeline-item">
																							<div class="timeline-media">
																								<i class="flaticon2-shield text-danger"></i>
																							</div>
																							<div class="timeline-content">
																								<div class="d-flex align-items-center justify-content-between mb-3">
																									<div class="mr-2">
																										<a href="#" class="text-dark-75 text-hover-primary font-weight-bold">Member has sent a request.</a>
																										<span class="text-muted ml-2">8:30PM 20 June</span>
																										<span class="label label-light-danger font-weight-bolder label-inline ml-2">pending</span>
																									</div>
																									<div class="dropdown ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
																										<a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																											<i class="ki ki-more-hor font-size-lg text-primary"></i>
																										</a>
																										<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
																											<!--begin::Navigation-->
																											<ul class="navi navi-hover">
																												<li class="navi-header font-weight-bold py-4">
																													<span class="font-size-lg">Choose Label:</span>
																													<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
																												</li>
																												<li class="navi-separator mb-3 opacity-70"></li>
																												<li class="navi-item">
																													<a href="#" class="navi-link">
																														<span class="navi-text">
																															<span class="label label-xl label-inline label-light-success">Customer</span>
																														</span>
																													</a>
																												</li>
																												<li class="navi-item">
																													<a href="#" class="navi-link">
																														<span class="navi-text">
																															<span class="label label-xl label-inline label-light-danger">Partner</span>
																														</span>
																													</a>
																												</li>
																												<li class="navi-item">
																													<a href="#" class="navi-link">
																														<span class="navi-text">
																															<span class="label label-xl label-inline label-light-warning">Suplier</span>
																														</span>
																													</a>
																												</li>
																												<li class="navi-item">
																													<a href="#" class="navi-link">
																														<span class="navi-text">
																															<span class="label label-xl label-inline label-light-primary">Member</span>
																														</span>
																													</a>
																												</li>
																												<li class="navi-item">
																													<a href="#" class="navi-link">
																														<span class="navi-text">
																															<span class="label label-xl label-inline label-light-dark">Staff</span>
																														</span>
																													</a>
																												</li>
																												<li class="navi-separator mt-3 opacity-70"></li>
																												<li class="navi-footer py-4">
																													<a class="btn btn-clean font-weight-bold btn-sm" href="#">
																													<i class="ki ki-plus icon-sm"></i>Add new</a>
																												</li>
																											</ul>
																											<!--end::Navigation-->
																										</div>
																									</div>
																								</div>
																								<p class="p-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
																							</div>
																						</div>
																						<div class="timeline-item">
																							<div class="timeline-media">
																								<i class="flaticon2-layers text-warning"></i>
																							</div>
																							<div class="timeline-content">
																								<div class="d-flex align-items-center justify-content-between mb-3">
																									<div class="mr-2">
																										<a href="#" class="text-dark-75 text-hover-primary font-weight-bold">System deployment has been completed.</a>
																										<span class="text-muted ml-2">11:00AM 30 June</span>
																										<span class="label label-light-warning font-weight-bolder label-inline ml-2">done</span>
																									</div>
																									<div class="dropdown ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
																										<a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																											<i class="ki ki-more-hor font-size-lg text-primary"></i>
																										</a>
																										<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
																											<!--begin::Navigation-->
																											<ul class="navi navi-hover">
																												<li class="navi-header font-weight-bold py-4">
																													<span class="font-size-lg">Choose Label:</span>
																													<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
																												</li>
																												<li class="navi-separator mb-3 opacity-70"></li>
																												<li class="navi-item">
																													<a href="#" class="navi-link">
																														<span class="navi-text">
																															<span class="label label-xl label-inline label-light-success">Customer</span>
																														</span>
																													</a>
																												</li>
																												<li class="navi-item">
																													<a href="#" class="navi-link">
																														<span class="navi-text">
																															<span class="label label-xl label-inline label-light-danger">Partner</span>
																														</span>
																													</a>
																												</li>
																												<li class="navi-item">
																													<a href="#" class="navi-link">
																														<span class="navi-text">
																															<span class="label label-xl label-inline label-light-warning">Suplier</span>
																														</span>
																													</a>
																												</li>
																												<li class="navi-item">
																													<a href="#" class="navi-link">
																														<span class="navi-text">
																															<span class="label label-xl label-inline label-light-primary">Member</span>
																														</span>
																													</a>
																												</li>
																												<li class="navi-item">
																													<a href="#" class="navi-link">
																														<span class="navi-text">
																															<span class="label label-xl label-inline label-light-dark">Staff</span>
																														</span>
																													</a>
																												</li>
																												<li class="navi-separator mt-3 opacity-70"></li>
																												<li class="navi-footer py-4">
																													<a class="btn btn-clean font-weight-bold btn-sm" href="#">
																													<i class="ki ki-plus icon-sm"></i>Add new</a>
																												</li>
																											</ul>
																											<!--end::Navigation-->
																										</div>
																									</div>
																								</div>
																								<p class="p-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
																							</div>
																						</div>
																						<div class="timeline-item">
																							<div class="timeline-media">
																								<i class="flaticon2-notification fl text-primary"></i>
																							</div>
																							<div class="timeline-content">
																								<div class="d-flex align-items-center justify-content-between mb-3">
																									<div class="mr-2">
																										<a href="#" class="text-dark-75 text-hover-primary font-weight-bold">Database backup has been completed.</a>
																										<span class="text-muted ml-2">2 months ago</span>
																										<span class="label label-light-primary font-weight-bolder label-inline ml-2">delivered</span>
																									</div>
																									<div class="dropdown ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
																										<a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																											<i class="ki ki-more-hor font-size-lg text-primary"></i>
																										</a>
																										<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
																											<!--begin::Navigation-->
																											<ul class="navi navi-hover">
																												<li class="navi-header font-weight-bold py-4">
																													<span class="font-size-lg">Choose Label:</span>
																													<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
																												</li>
																												<li class="navi-separator mb-3 opacity-70"></li>
																												<li class="navi-item">
																													<a href="#" class="navi-link">
																														<span class="navi-text">
																															<span class="label label-xl label-inline label-light-success">Customer</span>
																														</span>
																													</a>
																												</li>
																												<li class="navi-item">
																													<a href="#" class="navi-link">
																														<span class="navi-text">
																															<span class="label label-xl label-inline label-light-danger">Partner</span>
																														</span>
																													</a>
																												</li>
																												<li class="navi-item">
																													<a href="#" class="navi-link">
																														<span class="navi-text">
																															<span class="label label-xl label-inline label-light-warning">Suplier</span>
																														</span>
																													</a>
																												</li>
																												<li class="navi-item">
																													<a href="#" class="navi-link">
																														<span class="navi-text">
																															<span class="label label-xl label-inline label-light-primary">Member</span>
																														</span>
																													</a>
																												</li>
																												<li class="navi-item">
																													<a href="#" class="navi-link">
																														<span class="navi-text">
																															<span class="label label-xl label-inline label-light-dark">Staff</span>
																														</span>
																													</a>
																												</li>
																												<li class="navi-separator mt-3 opacity-70"></li>
																												<li class="navi-footer py-4">
																													<a class="btn btn-clean font-weight-bold btn-sm" href="#">
																													<i class="ki ki-plus icon-sm"></i>Add new</a>
																												</li>
																											</ul>
																											<!--end::Navigation-->
																										</div>
																									</div>
																								</div>
																								<p class="p-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
																							</div>
																						</div>
																					</div>
																				</div>
																				<!--end::Timeline-->
																			</div>
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
            // baris += ' <div style="cursor:pointer;" title="view?" id="cetak' + data[i].id + '" onClick="tryCetak(' + data[i].id+ ')"><i class="flaticon-eye text-primary"></i></div>'
            baris += ' <div style="cursor:pointer;" title="view?" id="view' + data[i].id + '" onClick="tryView(' + data[i].id+ ')"><i class="flaticon-eye text-primary"></i></div>'
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
  function tryCetak(id) {
    window.open(
       "<?= site_url(); ?>data_karyawan/dataById/" + id);
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
        $("#editnama").val(data.nama)
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
    var nama = $("#editnama").val()
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

  function tryView(id) {
    $("#tombolView" + id).html('<i class="fas fa-spinner fa-pulse"></i>')
    $("#idUser").val(id)
    $.ajax({
      url: '<?= base_url() ?>data_karyawan/edit_id',
      method: 'post',
      data: "target=hrd_user&id=" + id,
      dataType: 'json',
      success: function(data) {
        $("#modalView").modal('show')
		$("#foto").val(data.foto)
        $("#editnama").val(data.nama)
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
      url: '<?= base_url() ?>data_karyawan/edit',
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

</script>