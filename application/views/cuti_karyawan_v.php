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
											<h3 class="card-label">Data Cuti Karyawan 
											<span class="d-block text-muted pt-2 font-size-sm">UOBK RSUD SYAMRABU BANGKALAN</span></h3>
										</div>
									<div class="card-body px-lg-5 py-lg-5">
										<?php if ($this->session->userdata("rule") == 1 or $this->session->userdata("rule") == 3) { ?>
											<button type="button" class="btn btn-secondary"><a href="assets/Blangko_Cuti.pdf" target="_blank">Cetak Form Cuti</a></button>
											<!-- <button type="button" class="btn btn-danger" onclick="tryCetak()">Cetak Form Cuti</button> -->
										<?php } ?>

										<?php if ($this->session->userdata("rule") == 1 or $this->session->userdata("rule") == 2) { ?>
											<button type="button" class="btn btn-success" onclick="tampil_input_modal()">Tambah Data</button>
										<?php } ?>

										<?php if ($this->session->userdata("rule") == 1) { ?>
											<button type="button" class="btn btn-secondary"><a href="cuti_karyawan/exel/" target="_blank">Export Excel</a></button>
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
															<span class="text-white">Form Tambah Data Cuti Karyawan </span>
														</div>
													</div>
													<div class="card-body px-lg-5 py-lg-5">
														<!--begin::Form-->
														<form class="form">
																<!-- identitas -->
																<div class="form-group row">
																	<div class="col-lg-4">
																		<label>I. DATA PEGAWAI:</label>
																		<span class="form-text text-muted">Pilih Nama</span>
																		<select class="form-control" id="nama_karyawan">
																		</select>
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">NIP</span>
																		<input type="text" class="form-control" id="nip" placeholder="Masukkan NIP sesuai KTP"/>
																	</div>
																	<div class="col-lg-4">
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
																		</select>
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">Masa Kerja</span>
																		<input type="text" class="form-control" id="masa_kerja" placeholder="Masukkan Alamat Sesuai KTP" />
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">Unit Kerja</span>
																		<select class="form-control" id="unit_kerja">
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
																</div>
																<div class="form-group row">
																	<div class="col-lg-12">
																		<label>II. JENIS CUTI YANG DIAMBIL:</label>
																		<span class="form-text text-muted">Pilih Jenis Cuti</span>
																		<select class="form-control" id="jenis_cuti">
																			<option value="Cuti Tahunan">Cuti Tahunan</option>
																			<option value="Cuti Besar">Cuti Besar</option>
																			<option value="Cuti Sakit">Cuti Sakit</option>
																			<option value="Cuti Melahirkan">Cuti Melahirkan</option>
																			<option value="Cuti Karena Alasan Penting">Cuti Karena Alasan Penting</option>
																			<option value="Cuti di Luar Tanggungan Negara">Cuti di Luar Tanggungan Negara</option>
																		</select>
																	</div>
																</div>
																<div class="form-group row">
																	<div class="col-lg-12">
																		<label>III. ALASAN CUTI:</label>
																		<span class="form-text text-muted">Alasan Mengambil Cuti</span>
																		<input type="text" class="form-control" id="alasan_cuti" placeholder="Jelaskan Dengan Rinci" />
																	</div>
																</div>
																<div class="form-group row">
																	<div class="col-lg-4">
																		<label>IV. LAMA CUTI:</label>
																		<span class="form-text text-muted">Selama : </span>
																		<input type="text" class="form-control" id="cuti_selama" placeholder="(hari/bulan/tahun)" />
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">Mulai Tanggal : </span>
																		<input type="date" class="form-control" id="mulai_tgl" />
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">Samapai Tanggal : </span>
																		<input type="date" class="form-control" id="sampai_tgl" />
																	</div>
																</div>
																<div class="form-group row">
																	<div class="col-lg-12">
																		<label>V. CATATAN CUTI: (isi sesuai jenis cuti yang dipilih)</label>
																		<span class="form-text text-muted">CUTI TAHUNAN : </span>
																		<!-- <input type="text" class="form-control" id="cuti_selama" placeholdr="(hari/bulan/tahun)" /> -->
																	</div>
																	<div class="col-lg-6">
																		<span class="form-text text-muted">Sisa N2 : </span>
																		<input type="text" class="form-control" id="tahunan_n2_sisa" placeholdr="Kosongi Jika Bukan Cuti Tahunan" />
																	</div>
																	<div class="col-lg-6">
																		<span class="form-text text-muted">Keterangan N2 : </span>
																		<input type="text" class="form-control" id="tahunan_n2_keterangan" placeholdr="Kosongi Jika Bukan Cuti Tahunan" />
																	</div>
																	<div class="col-lg-6">
																		<span class="form-text text-muted">Sisa N1 : </span>
																		<input type="text" class="form-control" id="tahunan_n1_sisa" placeholdr="Kosongi Jika Bukan Cuti Tahunan" />
																	</div>
																	<div class="col-lg-6">
																		<span class="form-text text-muted">Keterangan N1 : </span>
																		<input type="text" class="form-control" id="tahunan_n1_keterangan" placeholdr="Kosongi Jika Bukan Cuti Tahunan" />
																	</div>
																	<div class="col-lg-6">
																		<span class="form-text text-muted">Sisa N : </span>
																		<input type="text" class="form-control" id="tahunan_n_sisa" placeholdr="Kosongi Jika Bukan Cuti Tahunan" />
																	</div>
																	<div class="col-lg-6">
																		<span class="form-text text-muted">Keterangan N : </span>
																		<input type="text" class="form-control" id="tahunan_n_keterangan" placeholdr="Kosongi Jika Bukan Cuti Tahunan" />
																	</div>
																	<div class="col-lg-12">
																		<span class="form-text text-muted">CUTI BESAR : </span>
																		<input type="text" class="form-control" id="cuti_besar_ket" placeholdr="(hari/bulan/tahun)" />
																	</div>
																	<div class="col-lg-12">
																		<span class="form-text text-muted">CUTI SAKIT : </span>
																		<input type="text" class="form-control" id="cuti_sakit_ket" placeholdr="(hari/bulan/tahun)" />
																	</div>
																	<div class="col-lg-12">
																		<span class="form-text text-muted">CUTI MELAHIRKAN : </span>
																		<input type="text" class="form-control" id="cuti_melahirkan_ket" placeholdr="(hari/bulan/tahun)" />
																	</div>
																	<div class="col-lg-12">
																		<span class="form-text text-muted">CUTI KARENA ALASAN PENTING : </span>
																		<input type="text" class="form-control" id="cuti_penting_ket" placeholdr="(hari/bulan/tahun)" />
																	</div>
																	<div class="col-lg-12">
																		<span class="form-text text-muted">CUTI DILUAR TANGGUNGAN NEGARA : </span>
																		<input type="text" class="form-control" id="cuti_diluar_tanggungan_ket" placeholdr="(hari/bulan/tahun)" />
																	</div>
																</div>
																
																<div class="form-group row">
																	<div class="col-lg-12">
																		<label>VI. ALAMAT SELAMA MENJALAN CUTI:</label>
																		<span class="form-text text-muted">Isi Alamat Lengkap</span>
																		<input type="text" class="form-control" id="alamat_selama_cuti" placeholder="Jelaskan Dengan Rinci" />
																	</div>
																	<div class="col-lg-12">
																		<span class="form-text text-muted">Telp yang bisa dihubungi</span>
																		<input type="text" class="form-control" id="telp" placeholder="Jelaskan Dengan Rinci" />
																	</div>
																</div>

																<div class="form-group row">
																	<div class="col-lg-12">
																		<label>VII. PERTIMBANGAN ATASAN LANGSUNG:</label>
																		<span class="form-text text-muted">Pilih Persetujuan</span>
																		<select class="form-control" id="pertimbangan_atasan">
																			<option value="DISETUJUI">DISETUJUI</option>
																			<option value="PERUBAHAN">PERUBAHAN</option>
																			<option value="DITANGGUHKAN">DITANGGUHKAN</option>
																			<option value="TIDAK DISETUJUI">TIDAK DISETUJUI</option>
																		</select>
																	</div>
																</div>
																<div class="form-group row">
																	<div class="col-lg-12">
																		<label>VIII. KEPUTUSAN PEJABAT YANG BERWENANG MEMBERIKAN CUTI:</label>
																		<span class="form-text text-muted">Pilih Persetujuan</span>
																		<select class="form-control" id="keputusan_pejabat">
																			<option value="DISETUJUI">DISETUJUI</option>
																			<option value="PERUBAHAN">PERUBAHAN</option>
																			<option value="DITANGGUHKAN">DITANGGUHKAN</option>
																			<option value="TIDAK DISETUJUI">TIDAK DISETUJUI</option>
																		</select>
																	</div>
																</div>

																<div class="form-group row">
																	<div class="col-lg-12">
																		<!-- <label>VIII. KEPUTUSAN PEJABAT YANG BERWENANG MEMBERIKAN CUTI:</label> -->
																		<span class="form-text text-muted">Upload File Cuti</span>
																		<div class="custom-file">
																			<input type="file" class="custom-file-input" id="file_cuti" />
																			<label class="custom-file-label" for="customFile">File Cuti Harus format pdf</label>
																		</div>
																	</div>
																</div>


																<div class="badge badge-danger" id="pesanErrorTambah"></div>
																	<div class="text-center">
																	<button type="button" id="simpan_button" class="btn btn-success my-2" onclick="tambah_baru()"><div id="loader"> </div> Simpan</button>
																</div>
														</form>
														<!--end::Form-->
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
										Cuti Karyawan
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

							              
							<!-- Tambah cuti-->
							<div class="modal fade" id="modalcuti" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">	
								<div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
									<div class="modal-content">
										<div class="modal-body p-0">
											<div class="card bg-secondary border-0 mb-0">
												<div class="card-header bg-success pb-1">
													<div class="text-muted text-center mt-2 mb-3">
														<span class="text-white">Form Tambah Bukti Cuti Karyawan </span>
													</div>
												</div>
												<div class="card-body px-lg-5 py-lg-5">
													<form role="form">
														<div class="form-group mb-3">
															<div class="custom-file">
																<input type="file" class="custom-file-input" id="berkas_cuti" accept="application/pdf" />
																<label class="custom-file-label" for="berkas_cuti">File Harus format PDF</label>
															</div>
														</div>

														
														<div id="div_upload_cuti">
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- View Cuti-->
								<div class="modal fade" id="modalview" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
									<div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
										<div class="modal-content">
											<div class="modal-body p-0">
												<div class="card bg-secondary border-0 mb-0">
													<div class="card-header bg-success pb-1">
														<div class="text-muted text-center mt-2 mb-3">
															<span class="text-white">Data Cuti Karyawan </span>
														</div>
													</div>
													<div class="card-body px-lg-5 py-lg-5">
														<!--begin::Form-->
														<form class="form">
																<!-- identitas -->
																<div class="form-group row">
																	<div class="col-lg-4">
																		<label>I. DATA PEGAWAI:</label>
																		<span class="form-text text-muted">NIP</span>
																		<input type="text" class="form-control" id="view_nip" placeholder="Masukkan NIP sesuai KTP" disabled/>
																	</div>
																	<div class="col-lg-4">
																	<span class="form-text text-muted">Pilih Jabatan</span>
																		<select class="form-control" id="view_jabatan" disabled>
																			<option value="Direktur">Direktur</option>
																			<option value="Wadir">Wadir</option>
																			<option value="KA.BAG">KA.BAG</option>
																			<option value="KA.BID">KA.BID</option>
																			<option value="KA.Subag">KA.Subag</option>
																			<option value="KA.Instalasi">KA.Instalasi</option>
																			<option value="KA.Ruangan">KA.Ruangan</option>
																			<option value="KA.Unit">KA.Unit</option>
																			<option value="Staff">Staff</option>
																		</select>
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">Masa Kerja</span>
																		<input type="text" class="form-control" id="view_masa_kerja" placeholder="Masukkan Alamat Sesuai KTP" disabled/>
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">Unit Kerja</span>
																		<select class="form-control" id="view_unit_kerja" disabled>
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
																</div>
																<div class="form-group row">
																	<div class="col-lg-12">
																		<label>II. JENIS CUTI YANG DIAMBIL:</label>
																		<span class="form-text text-muted">Pilih Jenis Cuti</span>
																		<select class="form-control" id="view_jenis_cuti" disabled>
																			<option value="Cuti Tahunan">Cuti Tahunan</option>
																			<option value="Cuti Besar">Cuti Besar</option>
																			<option value="Cuti Sakit">Cuti Sakit</option>
																			<option value="Cuti Melahirkan">Cuti Melahirkan</option>
																			<option value="Cuti Karena Alasan Penting">Cuti Karena Alasan Penting</option>
																			<option value="Cuti di Luar Tanggungan Negara">Cuti di Luar Tanggungan Negara</option>
																		</select>
																	</div>
																</div>
																<div class="form-group row">
																	<div class="col-lg-12">
																		<label>III. ALASAN CUTI:</label>
																		<span class="form-text text-muted">Alasan Mengambil Cuti</span>
																		<input type="text" class="form-control" id="view_alasan_cuti" placeholder="Jelaskan Dengan Rinci" disabled/>
																	</div>
																</div>
																<div class="form-group row">
																	<div class="col-lg-4">
																		<label>IV. LAMA CUTI:</label>
																		<span class="form-text text-muted">Selama : </span>
																		<input type="text" class="form-control" id="view_cuti_selama" placeholder="(hari/bulan/tahun)" disabled />
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">Mulai Tanggal : </span>
																		<input type="date" class="form-control" id="view_mulai_tgl" disabled/>
																	</div>
																	<div class="col-lg-4">
																		<span class="form-text text-muted">Samapai Tanggal : </span>
																		<input type="date" class="form-control" id="view_sampai_tgl" disabled/>
																	</div>
																</div>
																<div class="form-group row">
																	<div class="col-lg-12">
																		<label>V. CATATAN CUTI: (isi sesuai jenis cuti yang dipilih)</label>
																		<span class="form-text text-muted">CUTI TAHUNAN : </span>
																		<!-- <input type="text" class="form-control" id="cuti_selama" placeholdr="(hari/bulan/tahun)" /> -->
																	</div>
																	<div class="col-lg-6">
																		<span class="form-text text-muted">Sisa N2 : </span>
																		<input type="text" class="form-control" id="view_tahunan_n2_sisa" placeholdr="Kosongi Jika Bukan Cuti Tahunan" disabled/>
																	</div>
																	<div class="col-lg-6">
																		<span class="form-text text-muted">Keterangan N2 : </span>
																		<input type="text" class="form-control" id="view_tahunan_n2_keterangan" placeholdr="Kosongi Jika Bukan Cuti Tahunan" disabled/>
																	</div>
																	<div class="col-lg-6">
																		<span class="form-text text-muted">Sisa N1 : </span>
																		<input type="text" class="form-control" id="view_tahunan_n1_sisa" placeholdr="Kosongi Jika Bukan Cuti Tahunan" disabled/>
																	</div>
																	<div class="col-lg-6">
																		<span class="form-text text-muted">Keterangan N1 : </span>
																		<input type="text" class="form-control" id="view_tahunan_n1_keterangan" placeholdr="Kosongi Jika Bukan Cuti Tahunan" disabled/>
																	</div>
																	<div class="col-lg-6">
																		<span class="form-text text-muted">Sisa N : </span>
																		<input type="text" class="form-control" id="view_tahunan_n_sisa" placeholdr="Kosongi Jika Bukan Cuti Tahunan" disabled/>
																	</div>
																	<div class="col-lg-6">
																		<span class="form-text text-muted">Keterangan N : </span>
																		<input type="text" class="form-control" id="view_tahunan_n_keterangan" placeholdr="Kosongi Jika Bukan Cuti Tahunan" disabled/>
																	</div>
																	<div class="col-lg-12">
																		<span class="form-text text-muted">CUTI BESAR : </span>
																		<input type="text" class="form-control" id="view_cuti_besar_ket" placeholdr="(hari/bulan/tahun)" disabled/>
																	</div>
																	<div class="col-lg-12">
																		<span class="form-text text-muted">CUTI SAKIT : </span>
																		<input type="text" class="form-control" id="view_cuti_sakit_ket" placeholdr="(hari/bulan/tahun)" disabled/>
																	</div>
																	<div class="col-lg-12">
																		<span class="form-text text-muted">CUTI MELAHIRKAN : </span>
																		<input type="text" class="form-control" id="view_cuti_melahirkan_ket" placeholdr="(hari/bulan/tahun)" disabled/>
																	</div>
																	<div class="col-lg-12">
																		<span class="form-text text-muted">CUTI KARENA ALASAN PENTING : </span>
																		<input type="text" class="form-control" id="view_cuti_penting_ket" placeholdr="(hari/bulan/tahun)" disabled/>
																	</div>
																	<div class="col-lg-12">
																		<span class="form-text text-muted">CUTI DILUAR TANGGUNGAN NEGARA : </span>
																		<input type="text" class="form-control" id="view_cuti_diluar_tanggungan_ket" placeholdr="(hari/bulan/tahun)" disabled/>
																	</div>
																</div>
																
																<div class="form-group row">
																	<div class="col-lg-12">
																		<label>VI. ALAMAT SELAMA MENJALAN CUTI:</label>
																		<span class="form-text text-muted">Isi Alamat Lengkap</span>
																		<input type="text" class="form-control" id="view_alamat_selama_cuti" placeholder="Jelaskan Dengan Rinci" disabled/>
																	</div>
																	<div class="col-lg-12">
																		<span class="form-text text-muted">Telp yang bisa dihubungi</span>
																		<input type="text" class="form-control" id="view_telp" placeholder="Jelaskan Dengan Rinci" disabled/>
																	</div>
																</div>

																<div class="form-group row">
																	<div class="col-lg-12">
																		<label>VII. PERTIMBANGAN ATASAN LANGSUNG:</label>
																		<span class="form-text text-muted">Pilih Persetujuan</span>
																		<select class="form-control" id="view_pertimbangan_atasan" disabled>
																			<option value="DISETUJUI">DISETUJUI</option>
																			<option value="PERUBAHAN">PERUBAHAN</option>
																			<option value="DITANGGUHKAN">DITANGGUHKAN</option>
																			<option value="TIDAK DISETUJUI">TIDAK DISETUJUI</option>
																		</select>
																	</div>
																</div>
																<div class="form-group row">
																	<div class="col-lg-12">
																		<label>VIII. KEPUTUSAN PEJABAT YANG BERWENANG MEMBERIKAN CUTI:</label>
																		<span class="form-text text-muted">Pilih Persetujuan</span>
																		<select class="form-control" id="view_keputusan_pejabat" disabled>
																			<option value="DISETUJUI">DISETUJUI</option>
																			<option value="PERUBAHAN">PERUBAHAN</option>
																			<option value="DITANGGUHKAN">DITANGGUHKAN</option>
																			<option value="TIDAK DISETUJUI">TIDAK DISETUJUI</option>
																		</select>
																	</div>
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
																						<a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1" id="view_file_cuti">File Cuti</a>
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
  var random_all = '';
  tampilkan();

  function tampilkan(){
    $("#tempatTabel").html('<i class="fas fa-spinner fa-pulse"></i> Memuat...')
    var baris = '<table class="table table-separate table-head-custom table-checkable" id="tabelUser"><thead class="thead-light"><tr><th>Action</th><th>NO</th><th>Tanggal Update</th><th>Nama</th><th>NIP</th><th>Jabatan</th><th>Masa Kerja</th><th>Unit Kerja</th><th>Jenis Cuti</th><th>Alasan Cuti</th><th>Lama Cuti</th><th>Pertimbangan Atasan</th><th>Keputusan Pejabat</th></tr></thead>'
      $.ajax({
        type:'POST',
        url: '<?= base_url() ?>cuti_karyawan/tampil',
        dataType :'json',
        success: function(data){
         //console.log(data);
          for (let i = 0; i < data.length; i++) {
            baris += '<tr>'
            baris += '<td><div style="cursor:pointer;" title="hapus?" id="hapus' + data[i].id + '" onClick="tryHapus(' + data[i].id+ ')"><i class="flaticon-delete text-danger"></i></div>'
            // baris += ' <div style="cursor:pointer;" title="edit?"  id="edit' + data[i].id + '" onClick="tryEdit(' + data[i].id+ ')"><i class="flaticon2-pen text-success"></i></div>'
			baris += ' <div style="cursor:pointer;" title="Upload Berkas Cuti?"  id="cuti' + data[i].id + '" onClick="tampil_modal_cuti(' + data[i].id+ ')"><i class="flaticon2-open-box text-warning"></i></div>'
            baris += ' <div style="cursor:pointer;" title="view?" id="view' + data[i].id + '" onClick="tryView(' + data[i].id+ ')"><i class="flaticon-eye text-primary"></i></div>'
            baris += '<td>' + (i + 1) + '</td>'
            baris += '<td>' + data[i].tgl_input + '</td>'
            baris += '<td>' + data[i].nama + '</td>'
            baris += '<td>' + data[i].nip + '</td>'
            baris += '<td>' + data[i].jabatan + '</td>'
            baris += '<td>' + data[i].masa_kerja + '</td>'
            baris += '<td>' + data[i].unit_kerja + '</td>'
            baris += '<td>' + data[i].jenis_cuti + '</td>'
            baris += '<td>' + data[i].alasan_cuti + '</td>'
            baris += '<td>' + data[i].cuti_selama + '</td>'
            baris += '<td>' + data[i].pertimbangan_atasan + '</td>'
            baris += '<td>' + data[i].keputusan_pejabat + '</td>'
            // baris += '<td>' + data[i].file_cuti + '</td>'
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

  function tryCetak(id) {
    window.open(
       "<?= site_url(); ?>cuti_karyawan/dataById/");
  }

  function get_nama() {
      $.ajax({
          type: 'POST',
          url: '<?= base_url() ?>cuti_karyawan/get_nama_karyawan',
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

  
  function tampil_modal_cuti(id){
      document.getElementById("berkas_cuti").value = "";

      var tombol = '<button type="button" onclick="pernyataan_cuti('+id+')" id="simpan_pernyataan_cuti" class="btn btn-block btn-info"><div id="loader_upload_cuti"> </div> Simpan</button>';
      $("#div_upload_cuti").html(tombol);
      $('#modalcuti').modal('show');
    }

	  function pernyataan_cuti(id) {
      // console.log(id);
      if(document.getElementById("berkas_cuti").value == ""){
        document.getElementById("berkas_cuti").focus();
      } else{
        var format = $('#berkas_cuti').prop('files')[0].type;
        if (format.includes('pdf')) {
          var form_data = new FormData();
          form_data.append('id', id);
        //   form_data.append('jenis', document.getElementById("jenis_pernyataan").value);
          form_data.append('berkas_cuti', $('#berkas_cuti').prop('files')[0]);

          $.ajax({
            type: 'POST',
            data: form_data,
            url: '<?= base_url() ?>cuti_karyawan/upload_pernyataan_cuti',
            processData:false,
            contentType:false,
            cache:false,
            dataType: 'json',
            beforeSend: function () {
              $('#simpan_pernyataan_cuti').attr('disabled', true);
              $('#loader_upload_cuti').html('');
              addSpinner($('#loader_upload_cuti'));
            },
            success: function(data) {
              // alert(data);
              // console.log(data);
              $('#simpan_pernyataan_cuti').attr('disabled', false);
              removeSpinner($('#loader_upload_cuti'), function () {
                $('#loader_upload_cuti').html('');
              });
            //   ambil_data();
              $('#modalcuti').modal('hide');
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
      url: '<?= base_url() ?>cuti_karyawan/edit_id',
      method: 'post',
      data: "target=cuti_karyawan&id=" + id,
      dataType: 'json',
      success: function(data) {
        $("#view_file_cuti").html('');

        // $("#view_foto").html('<img src="'+base_url+'assets/foto_karyawan/'+data.foto+'">');

        $("#modalview").modal('show')
        $("#view_nip").val(data.nip)
        $("#view_jabatan").val(data.jabatan)
        $("#view_masa_kerja").val(data.masa_kerja)
        $("#view_unit_kerja").val(data.unit_kerja)
        $("#view_jenis_cuti").val(data.jenis_cuti)
        $("#view_alasan_cuti").val(data.alasan_cuti)
        $("#view_cuti_selama").val(data.cuti_selama)
        $("#view_mulai_tgl").val(data.mulai_tgl)
        $("#view_sampai_tgl").val(data.sampai_tgl)
        $("#view_tahunan_n2_sisa").val(data.tahunan_n2_sisa)
        $("#view_tahunan_n2_keterangan").val(data.tahunan_n2_keterangan)
        $("#view_tahunan_n1_sisa").val(data.tahunan_n1_sisa)
        $("#view_tahunan_n1_keterangan").val(data.tahunan_n1_keterangan)
        $("#view_tahunan_n_sisa").val(data.tahunan_n_sisa)
        $("#view_tahunan_n_keterangan").val(data.tahunan_n_keterangan)
        $("#view_cuti_besar_ket").val(data.cuti_besar_ket)
        $("#view_cuti_sakit_ket").val(data.cuti_sakit_ket)
        $("#view_cuti_melahirkan_ket").val(data.cuti_melahirkan_ket)
        $("#view_cuti_penting_ket").val(data.cuti_penting_ket)
        $("#view_cuti_diluar_tanggungan_ket").val(data.cuti_diluar_tanggungan_ket)
        $("#view_alamat_selama_cuti").val(data.alamat_selama_cuti)
        $("#view_telp").val(data.telp)
        $("#view_pertimbangan_atasan").val(data.pertimbangan_atasan)
        $("#view_keputusan_pejabat").val(data.keputusan_pejabat)
        $("#view_file_cuti").val(data.file_sertifikat)


        if(data.file_cuti!=null){
          var link = ' <a href="<?= base_url() ?>assets/arsip_karyawan/'+data.file_cuti+'" target="_blank">Berkas Cuti</a>';
          $("#view_file_cuti").html(link);
        }
        console.log(data)
        $("#view" + id).html('<i class="fa fa-edit"></i>')
      }
      });
	  }



  function reset_form(){
    random_all = '';
    document.getElementById('nama_karyawan').value = "";
    document.getElementById('nip').value = "";
    document.getElementById('jabatan').value = "";
    document.getElementById('masa_kerja').value = "";
    document.getElementById('unit_kerja').value = "";
    document.getElementById('jenis_cuti').value = "";
    document.getElementById('alasan_cuti').value = "";
    document.getElementById('cuti_selama').value = "";
    document.getElementById('mulai_tgl').value = "";
    document.getElementById('sampai_tgl').value = "";
    document.getElementById('tahunan_n2_sisa').value = "";
    document.getElementById('tahunan_n2_keterangan').value = "";
    document.getElementById('tahunan_n1_sisa').value = "";
    document.getElementById('tahunan_n1_keterangan').value = "";
    document.getElementById('tahunan_n_sisa').value = "";
    document.getElementById('tahunan_n_keterangan').value = "";
    document.getElementById('cuti_besar_ket').value = "";
    document.getElementById('cuti_sakit_ket').value = "";
    document.getElementById('cuti_melahirkan_ket').value = "";
    document.getElementById('cuti_penting_ket').value = "";
    document.getElementById('cuti_diluar_tanggungan_ket').value = "";
    document.getElementById('alamat_selama_cuti').value = "";
    document.getElementById('telp').value = "";
    document.getElementById('pertimbangan_atasan').value = "";
    document.getElementById('keputusan_pejabat').value = "";
  }

  function tampil_input_modal(){
    get_nama();
    reset_form();
    // get_random();
    // get_nrm();
    $('#modalTambah').modal('show');
  }


  function tambah_baru() {
      if (document.getElementById('nip').value == "") {
          document.getElementById('nip').focus();
      } else if(document.getElementById('nama_karyawan').value == "") {
          document.getElementById('nama_karyawan').focus();
      } else {
          $.ajax({
              type: 'POST',
              data: 'nip=' + document.getElementById("nip").value + '&jabatan=' + document.getElementById('jabatan').value
              + '&nama_karyawan=' +  document.getElementById('nama_karyawan').value 
			  + '&masa_kerja=' +  document.getElementById('masa_kerja').value
              + '&unit_kerja=' +  document.getElementById('unit_kerja').value 
              + '&jenis_cuti=' +  document.getElementById('jenis_cuti').value 
              + '&alasan_cuti=' +  document.getElementById('alasan_cuti').value 
              + '&cuti_selama=' +  document.getElementById('cuti_selama').value 
              + '&mulai_tgl=' +  document.getElementById('mulai_tgl').value 
              + '&sampai_tgl=' +  document.getElementById('sampai_tgl').value 
              + '&tahunan_n2_sisa=' +  document.getElementById('tahunan_n2_sisa').value 
              + '&tahunan_n2_keterangan=' +  document.getElementById('tahunan_n2_keterangan').value 
              + '&tahunan_n1_sisa=' +  document.getElementById('tahunan_n1_sisa').value 
              + '&tahunan_n1_keterangan=' +  document.getElementById('tahunan_n1_keterangan').value 
              + '&tahunan_n_sisa=' +  document.getElementById('tahunan_n_sisa').value 
              + '&tahunan_n_keterangan=' +  document.getElementById('tahunan_n_keterangan').value 
              + '&cuti_besar_ket=' +  document.getElementById('cuti_besar_ket').value 
              + '&cuti_sakit_ket=' +  document.getElementById('cuti_sakit_ket').value 
              + '&cuti_melahirkan_ket=' +  document.getElementById('cuti_melahirkan_ket').value 
              + '&cuti_penting_ket=' +  document.getElementById('cuti_penting_ket').value 
              + '&cuti_diluar_tanggungan_ket=' +  document.getElementById('cuti_diluar_tanggungan_ket').value 
              + '&alamat_selama_cuti=' +  document.getElementById('alamat_selama_cuti').value 
              + '&telp=' +  document.getElementById('telp').value 
              + '&pertimbangan_atasan=' +  document.getElementById('pertimbangan_atasan').value 
			  + '&keputusan_pejabat=' +  document.getElementById('keputusan_pejabat').value,
              url: '<?= base_url() ?>cuti_karyawan/tambah_cuti',
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
      url: '<?= base_url() ?>cuti_karyawan/edit_id',
      method: 'post',
      data: "target=cuti_karyawan&id=" + id,
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
      url: '<?= base_url() ?>cuti_karyawan/hapus',
      method: 'post',
      data: "target=cuti_karyawan&id=" + id,
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