			<div class="container-fluid">
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable</a></li>
					</ol>
                </div>
                <!-- row -->
				


                <div class="row">
					<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Profile Datatable</h4>
                            </div>
							
                            <div class="card-body">
								<div class="form-head d-flex mb-3 mb-md-4 align-items-start">
									<div class="bootstrap-modal">
										<button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target=".bd-example-modal-lg" onClick="tryTambah()"> + Tambah Data</button>
											<!-- modal Tambah -->
											<div class="modal fade bd-example-modal-lg" id="modalTambah" tabindex="-1" role="dialog" aria-hidden="true">
												<div class="modal-dialog modal-lg">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title">Data Pegawai</h5>
															<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<form class="form-validation" role="form">
																<div>
																		<h4>Identitas</h4>
																		<section>
																			<div class="row">
																				<div class="col-lg-5 mb-2">
																					<div class="form-group">
																						<label class="text-label">Nama</label>
																						<input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Lengkap (beserta gelar)" required>
																					</div>
																				</div>
																				<div class="col-lg-5 mb-2">
																					<div class="form-group">
																						<label class="text-label">Email</label>
																						<input type="email" class="form-control" id="email" aria-describedby="inputGroupPrepend2" placeholder="example@example.com" required>
																					</div>
																				</div>
																				<div class="col-lg-2 mb-2">
																					<div class="form-group">
																						<label class="text-label">Password</label>
																						<input type="password" id="password" name="pass" class="form-control" required>
																					</div>
																				</div>
																				<div class="col-lg-3 mb-2">
																					<div class="form-group">
																						<label>Rule</label>
																						<select id="rule" class="form-control">
																							<option selected>Pilih Akses</option>
																							<option value="1">UP</option>
																							<option value="2">DIKLAT</option>
																							<option value="3">KARYAWAN</option>
																						</select>
																					</div>
																				</div>
																				<div class="col-lg-3 mb-2">
																					<div class="form-group">
																						<label>Jabatan</label>
																						<select id="jabatan" class="form-control">
																							<option selected>Pilih Jabatan</option>
																							<option value="1">Direktur</option>
																							<option value="2">Wakil Direktur</option>
																							<option value="3">KA.BAG/BID</option>
																							<option value="4">KASU.BAG/BID</option>
																							<option value="5">KARU</option>
																							<option value="6">KASI</option>
																							<option value="7">KA.UNIT</option>
																							<option value="8">STAFF</option>
																						</select>
																					</div>
																				</div>
																				<!-- <div class="col-lg-3 mb-2">
																					<div class="form-group">
																						<label>Jenis Karyawan</label>
																						<select id="karyawan" class="form-control">
																							<option selected>Pilih Karyawan</option>
																							<option value="1">Dokter</option>
																							<option value="2">Keperawatan</option>
																							<option value="3">Nakes Lainnya</option>
																							<option value="4">Manajemen</option>
																						</select>
																					</div>
																				</div>
																				<div class="col-lg-3 mb-2">
																					<div class="form-group">
																						<label>Jenis Tenaga</label>
																						<select id="tenaga" class="form-control">
																							<option selected>Pilih Tenaga</option>
																							<option value="1">Dokter Umum</option>
																							<option value="2">Dokter Gigi</option>
																							<option value="3">Dokter Spesialis</option>
																							<option value="4">Dokter SubSpesialis</option>
																							<option value="5">Keperawatan</option>
																							<option value="6">Nakes Lainnya</option>
																							<option value="7">Manajemen</option>
																						</select>
																					</div>
																				</div>
																				<div class="col-lg-3 mb-2">
																					<div class="form-group">
																						<label class="text-label">Tempat Lahir</label>
																						<input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control" placeholder="ex.Bangkalan" required>
																					</div>
																				</div>
																				<div class="col-lg-3 mb-2">
																					<div class="form-group">
																						<label class="text-label">Tanggal Lahir</label>
																						<input type="date" id="tgl_lhr" name="tanggal_lahir" class="form-control" placeholder="mm/dd/yyyy" required>
																					</div>
																				</div>
																				<div class="col-lg-3 mb-2">
																					<div class="form-group">
																						<label>Jenis Kelamin</label>
																						<select id="jk" class="form-control">
																							<option selected>Jenis Kelamin</option>
																							<option value="1">Laki-Laki</option>
																							<option value="2">Perempuan</option>
																						</select>
																					</div>
																				</div>
																				<div class="col-lg-3 mb-2">
																					<div class="form-group">
																						<label>Status</label>
																						<select id="status_pernikahan" class="form-control">
																							<option selected>Pernikahan</option>
																							<option value="1">Sudah Menikah</option>
																							<option value="2">Belum Menikah</option>
																						</select>
																					</div>
																				</div>
																				<div class="col-lg-4 mb-2">
																					<div class="form-group">
																						<label class="text-label">Alamat Lengkap</label>
																						<input type="text" name="alamat" class="form-control" placeholder="Ds/Jl, RT/RW,Kec, Kab/Kota" required>
																					</div>
																				</div>
																				<div class="col-lg-3 mb-2">
																					<div class="form-group">
																						<label class="text-label">Provinsi</label>
																						<input type="text" id="provinsi" name="provisi" class="form-control" placeholder="ex.Jawa Timur" required>
																					</div>
																				</div>
																				<div class="col-lg-2 mb-2">
																					<div class="form-group">
																						<label class="text-label">Kode pos</label>
																						<input type="text" id="kode_pos" name="kodepos" class="form-control" placeholder="69XXX" required>
																					</div>
																				</div>
																				<div class="col-lg-3 mb-2">
																					<div class="form-group">
																						<label>Agama</label>
																						<select id="agama" class="form-control">
																							<option selected>Pilih Agama</option>
																							<option value="1">Islam</option>
																							<option value="2">Kristen</option>
																							<option value="3">Hindu</option>
																							<option value="4">Budha</option>
																						</select>
																					</div>
																				</div>
																				<div class="col-lg-4 mb-2">
																					<div class="form-group">
																						<label class="text-label">NIK</label>
																						<input type="text" id="nik" name="nik" class="form-control" placeholder="19970000---" required>
																					</div>
																				</div>
																				<div class="col-lg-4 mb-2">
																					<div class="form-group">
																						<label class="text-label">NIP</label>
																						<input type="text" id="nip" name="nip" class="form-control" placeholder="315000---" required>
																					</div>
																				</div>
																				<div class="col-lg-4 mb-2">
																					<div class="form-group">
																						<label class="text-label">No Hp</label>
																						<input type="text" id="hp" name="hp" class="form-control" placeholder="0810001110" required>
																					</div>
																				</div> -->
																			</div>
																		</section>
																		<h4>Pendidikan</h4>
																		<!-- <section>
																			<div class="row">
																				<div class="col-lg-7 mb-2">
																					<div class="form-group">
																						<label>Pendidikan</label>
																						<select id="inputState" class="form-control">
																							<option value="1">Dokter Umum</option>
																							<option value="2">Dokter Gigi</option>
																							<option value="3">Spesialis Anastesi</option>
																							<option value="4">Spesialis Bedah</option>
																							<option value="5">Spesialis Bedah Saraf</option>
																							<option value="6">Spesialis Orthopedi & Traumatologi</option>
																							<option value="7">Spesialis Forensik</option>
																							<option value="8">Spesialis Jantung & Pembuluh Darah</option>
																							<option value="9">Spesialis Kandungan</option>
																							<option value="10">Spesialis Kulit Kelamin</option>
																							<option value="11">Spesialis Anak</option>
																							<option value="12">Spesialis Mata</option>
																							<option value="13">Spesialis Penyakit Dalam</option>
																							<option value="14">Spesialis Paru</option>
																							<option value="15">Spesialis Radiologi</option>
																							<option value="16">Spesialis Syaraf</option>
																							<option value="17">Spesialis Urologi</option>
																							<option value="18">Spesialis THT</option>
																							<option value="19">Spesialis THT-KL</option>
																							<option value="20">Spesialis Patologi Klinik</option>
																							<option value="21">Spesialis Patologi Anatomi</option>
																							<option value="22">Spesialis Fisik & Rehabilitas</option>
																							<option value="23">Spesialis Kedokteran Jiwa</option>
																							<option value="24">Spesialis Emergency Medice</option>
																							<option value="25">Spesialis Orthopedi</option>
																							<option value="26">Spesialis Periodontis</option>
																							<option value="27">Spesialis Konservasi</option>
																							<option value="28">Spesialis Bedah Mulut</option>
																							<option value="29">Sub Spesialis Anak Konsultan</option>
																							<option value="30">Sub Spesialis Ginjal & Hipertensi</option>
																							<option value="31">Sub Spesialis Bedah Konsultan Bedah Anak</option>
																							<option value="32">Sub Spesialis Bedah Onkologi Konsultan</option>
																							<option value="33">Profesi Keperawatan</option>
																							<option value="34">Sarjana Keperawatan</option>
																							<option value="35">Akademi Keperawatan</option>
																							<option value="36">SPK</option>
																							<option value="37">Akper Anastesi</option>
																							<option value="38">D-4 Kebidanan (SST/S.Tr.Keb)</option>
																							<option value="39">Akademi Kebidanan</option>
																							<option value="40">Pasca Sarjana Psikologi</option>
																							<option value="41">Pasca Sarjana SKM</option>
																							<option value="42">Pasca Sarjana Farmasi</option>
																							<option value="43">Profesi Apoteker</option>
																							<option value="44">D-III Farmasi</option>
																							<option value="45">SMF</option>
																							<option value="46">D-III Perawat Gigi</option>
																							<option value="47">D-IV Teknik Elektromedik (ATEM)</option>
																							<option value="48">D-III Teknik Elektromedik (ATEM)</option>
																							<option value="49">Sarjana Science/ S.Si</option>
																							<option value="50">D-III Pranata Laboratorium Kes</option>
																							<option value="51">D-IV Pranata Laboratorium Kes</option>
																							<option value="52">D-IV Rekam Medik</option>
																							<option value="53">D-III Rekam Medik</option>
																							<option value="54">D-III AKL</option>
																							<option value="55">D-III Fisioterapi</option>
																							<option value="56">D-IV / S1 Fisioterapi</option>
																							<option value="57">S1 Gizi</option>
																							<option value="58">D-III gizi</option>
																							<option value="59">SPRG</option>
																							<option value="60">D-III Akupuntur</option>
																							<option value="61">D-III Radiologi</option>
																							<option value="62">D-III Refraksi Optisi</option>
																							<option value="63">Pasca Sarjana Manajemen</option>
																							<option value="64">Pasca Sarjana Manajemen Kes.</option>
																							<option value="65">S-2 Theologi "Departement Of Hadist and Science"</option>
																							<option value="66">Sarjana Psikologi</option>
																							<option value="67">Sarjana Sosial</option>
																							<option value="68">Sarjana Hukum</option>
																							<option value="69">Sarjana Ekonomi</option>
																							<option value="70">Sarjana Akutansi</option>
																							<option value="71">Sarjana Komputer</option>
																							<option value="72">Sarjana Informatika</option>
																							<option value="73">Sarjana Teknik Elektro</option>
																							<option value="74">Sarjana Teknik Lingkungan</option>
																							<option value="75">Sarjana Pendidikan</option>
																							<option value="76">Sarjana Ked.Gigi</option>
																							<option value="77">Sarjana Administrasi Bisnis</option>
																							<option value="78">D-III Manajemen Administrasi/BPA</option>
																							<option value="79">D-III Manajemen Informatika</option>
																							<option value="80">D-III Akuntansi</option>
																							<option value="81">D-III Multimedia & Jaringan</option>
																							<option value="82">D-III Tkg</option>
																							<option value="83">D-III Kelistrikan</option>
																							<option value="84">SMA/SMK</option>
																							<option value="85">SMP</option>
																							<option value="86">SD</option>
																						</select>
																					</div>
																				</div>
																				<div class="col-lg-5 mb-2">
																					<div class="form-group">
																						<label class="text-label">Foto</label>
																						<input type="file" id="foto" name="pass" class="form-control" required>
																					</div>
																				</div>

																				
																			</div>
																		</section> -->
																		<h4>Kepegawaian</h4>
																		<section>
																			<div class="row">
																				<div class="col-lg-3 mb-">
																					<div class="form-group">
																						<label class="text-label">Id Karyawan</label>
																						<input type="text" id="id_user" name="unit" class="form-control" placeholder="0000" required>
																					</div>
																				</div>
																				<!-- <div class="col-lg-5 mb-">
																					<div class="form-group">
																						<label class="text-label">Unit Kerja</label>
																						<input type="text" id="unit" name="unit" class="form-control" placeholder="0810001110" required>
																					</div>
																				</div> -->
																				<div class="col-lg-4 mb-2">
																					<div class="form-group">
																						<label>Status Karyawan</label>
																						<select id="status_karyawan" class="form-control">
																							<option selected>Pilih Status</option>
																							<option value="1">PNS</option>
																							<option value="2">P3K</option>
																							<option value="3">THL</option>
																							<option value="4">KONTRAK</option>
																						</select>
																					</div>
																				</div>
																				<!-- <div class="col-lg-6 mb-">
																					<div class="form-group">
																						<label class="text-label">Golongan</label>
																						<input type="text" id="gol" name="unit" class="form-control" placeholder="0810001110" required>
																					</div>
																				</div>
																				<div class="col-lg-6 mb-">
																					<div class="form-group">
																						<label class="text-label">Tahun Pensiun</label>
																						<input type="text" id="thn_pensiun" name="unit" class="form-control" placeholder="0810001110" required>
																					</div>
																				</div>
																				<div class="col-lg-6 mb-">
																					<div class="form-group">
																						<label class="text-label">Gaji</label>
																						<input type="text" id="gaji" name="unit" class="form-control" placeholder="0810001110" required>
																					</div>
																				</div> -->
																			</div>
																		</section>
																		<h4>STR/SIP</h4>
																		<!-- <section>
																			<div class="row emial-setup">
																				<div class="col-lg-6 mb-">
																					<div class="form-group">
																						<label class="text-label">No STR</label>
																						<input type="text" id="str" name="unit" class="form-control" placeholder="0810001110" required>
																					</div>
																				</div>
																				<div class="col-lg-6 mb-">
																					<div class="form-group">
																						<label class="text-label">NO SIP</label>
																						<input type="text" id="sip" name="unit" class="form-control" placeholder="0810001110" >
																					</div>
																				</div>
																			</div>
																		</section> -->
																</div>
															</form>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
															<button type="button" onClick="tambah_karyawan()" id="tombolTambah" class="btn btn-primary" data-dismiss="modal">Simpan</button>
														</div>
													</div>
												</div>
											</div>
											<!-- modal Edit -->
											<div class="modal fade bd-example-modal-lg" id="modalEdit" tabindex="-1" role="dialog" aria-hidden="true">
												<div class="modal-dialog modal-lg">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title">Edit Data Pegawai</h5>
															<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<form class="form-validation" role="form">
																<div>
																		<h4>Identitas</h4>
																		<section>
																			<div class="row">
																				<div class="col-lg-5 mb-2">
																					<div class="form-group">
																						<label class="text-label">Nama</label>
																						<input id="idUser" type="hidden">
																						<input type="text" name="nama" id="editnama" class="form-control" placeholder="Nama Lengkap (beserta gelar)" required>
																					</div>
																				</div>
																			</div>
																		</section>
																</div>
															</form>
														</div>
														<div class="badge badge-danger" id="pesanErrorEdit"></div>
														<div class="modal-footer">
															<button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
															<button type="button" onClick="edit()" id="tombolEdit" class="btn btn-primary" data-dismiss="modal">Edit</button>
														</div>
													</div>
												</div>
											</div>
									</div>
									<!-- <div class="mr-auto d-none d-lg-block">
										<a href="patient-details.html" class="btn btn-primary btn-rounded">+ Tambah PNS</a>
									</div> -->
									<div class="button-dropdown">
										<div class="btn-group mb-1">
											<button type="button" class="btn btn-warning">JABATAN</button>
											<button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
											</button>
											<div class="dropdown-menu">
												<a class="dropdown-item" href="#">Direktur</a>
												<a class="dropdown-item" href="#">Wakil Direktur</a>
												<a class="dropdown-item" href="#">KA.BAG/BID</a>
												<a class="dropdown-item" href="#">KASU.BAG/BID</a>
												<a class="dropdown-item" href="#">KARU</a>
												<a class="dropdown-item" href="#">KASI</a>
												<a class="dropdown-item" href="#">KA.UNIT</a>
												<a class="dropdown-item" href="#">STAFF</a>
												<!-- <div class="dropdown-divider"></div> -->
												<!-- <a class="dropdown-item" href="#">Separated link</a> -->
											</div>
										</div>

										<div class="btn-group mb-1">
											<button type="button" class="btn btn-info">Jenis Karyawan</button>
											<button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
											</button>
											<div class="dropdown-menu">
												<a class="dropdown-item" href="#">Dokter</a>
												<a class="dropdown-item" href="#">Keperawatan</a>
												<a class="dropdown-item" href="#">Nakes Lainnya</a>
												<a class="dropdown-item" href="#">Managemen</a>
											</div>
										</div>
										<div class="btn-group mb-1">
											<button type="button" class="btn btn-secondary">Jenis Tenaga</button>
											<button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
											</button>
											<div class="dropdown-menu">
												<a class="dropdown-item" href="#">Dokter Umum</a>
												<a class="dropdown-item" href="#">Dokter Gigi</a>
												<a class="dropdown-item" href="#">Dokter Spesialis</a>
												<a class="dropdown-item" href="#">Dokter Sub Spesialis</a>
												<a class="dropdown-item" href="#">Keperawatan</a>
												<a class="dropdown-item" href="#">Nakes Lainnya</a>
												<a class="dropdown-item" href="#">Manajemen</a>
											</div>
										</div>
									</div>
								</div>
								<div class="card-body ">
									<div class="table-responsive" id="tabel_user">
										<!-- <table id="example3" class="display min-w850">
											<thead>
												<tr>
													<th></th>
													<th>Id</th>
													<th>NIP</th>
													<th>NAMA</th>
													<th>JABATAN</th>
													<th>KARYAWAN</th>
													<th>TENAGA</th>
													<th>ACTION</th>
												</tr>
											</thead>
											<tbody>
												 <tr>
													<td><img class="rounded-circle" width="35" src="images/profile/small/pic1.jpg" alt=""></td>
													<td>Tiger Nixon</td>
													<td>Architect</td>
													<td>Male</td>
													<td>M.COM., P.H.D.</td>
													<td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
													<td>info</td>
													<td>
														<div class="d-flex">
															<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
															<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
														</div>												
													</td>												
												</tr>
											</tbody>
										</table> -->
									</div>
								</div>
                            </div>
                        </div>
                    </div>
				</div>
            </div>

			<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


			<script>
				tampilkan()

				function tampilkan() {
					$("#tabel_user").html('<i class="fas fa-spinner fa-pulse"></i> Memuat...')
					var baris = '<table id="example3" class="display min-w850" ><thead><tr><th>NO</th><th>id</th><th>Nama</th><th>Jabatan</th><th>Karyawan</th><th>Tenaga</th><th>Action</th></tr></thead><tbody>'
					$.ajax({
						url: '<?= base_url() ?>data_karyawan/tampil',
						method: 'post',
						data: "target=hrd_user",
						dataType: 'json',
						success: function(data) {
							for (let i = 0; i < data.length; i++) {
								baris += '<tr>'
								baris += '<td>' + (i + 1) + '</td>'
								baris += '<td>' + data[i].id_user + '</td>'
								baris += '<td>' + data[i].nama + '</td>'
								baris += '<td>' + data[i].jabatan + '</td>'
								baris += '<td>' + data[i].rule + '</td>'
								baris += '<td>' + data[i].status_karyawan + '</td>'
								baris += '<td><button type="button" title="view?" class="btn btn-info shadow btn-xs sharp" onClick="tryView(' + data[i].id_user + ')"><i class="fa fa-eye"></i></button>'
								baris += '<button type="button" title="edit" class="btn btn-primary shadow btn-xs sharp mr-1" onClick="tryEdit(' + data[i].id_user + ')"><i class="fa fa-edit"></i></button>'
								baris += '<button type="button" title="hapus?" class="btn btn-danger shadow btn-xs sharp" onClick="tryHapus(' + data[i].id_user + ')"><i class="fa fa-times"></i></button>'
								baris += '</td></tr>'
							}
							baris += '</tbody></table>'
							$("#tabel_user").html(baris)
							$('#example3').DataTable({
								"pageLength": 10,
							});
						}
					});
				}

				function tryTambah() {
					$("#id_user").val("")
					$("#nama").val("")
					$("#rule").val("")
					$("#email").val("")
					$("#password").val("")
					$("#status_karyawan").val("")
					$("#jabatan").val("")
					$("#modalTambah").modal('show')
					$('#pesan_error_tambah').html("")
				}

				function tambah_karyawan() {
					// $("#tombolTambah").html('<i class="fas fa-spinner fa-pulse"></i> Memproses..')
					$("#tombolTambah").html('<i class="fas fa-spinner fa-pulse"></i> Memproses..')
					var id_user = $("#id_user").val()
					var nama = $("#nama").val()
					var rule = $("#rule").val()
					var email = $("#email").val()
					var password = $("#password").val()
					var status_karyawan = $("#status_karyawan").val()
					var jabatan = $("#jabatan").val()
					if (rule == null) {
					rule = 0;
					}
					$.ajax({
					url: '<?= base_url() ?>data_karyawan/tambah_data',
					method: 'post',
					data: {
						id_user: id_user,
						nama: nama,
						rule: rule,
						email: email,
						password: password,
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
						$("#rule").val("")
						$("#email").val("")
						$("#password").val("")
						$("#status_karyawan").val("")
						$("#jabatan").val("")
						$('#pesanErroTambah').html("")
						} else {
						data = data.replace("<p>", "");
						data = data.replace("</p>", "");
						$('#pesanErrorTambah').html(data)
						}
						$("#tombolTambah").html('Tambah')
					}
					});
				}

				 function tryEdit(id) {
					$("#tombolEdit" + id).html('<i class="fas fa-spinner fa-pulse"></i>')
					$("#idUser").val(id)
					$.ajax({
					url: '<?= base_url() ?>data_karyawan/dataByid',
					method: 'post',
					data: "target=hrd_user&id=" + id,
					dataType: 'json',
					success: function(data) {
						$("#modalEdit").modal('show')
						$("#editnama").val(data.nama)
						console.log(data)
						$("#edit" + id).html('<i class="fa fa-edit"></i>')
					}
					});
				}

				function edit() {
					$("#tombolEdit").html('<i class="fas fa-spinner fa-pulse"></i> Memproses..')
					var nama = $("#editnama").val()
					var id = $("#idUser").val()
					$.ajax({
					url: '<?= base_url() ?>data_karyawan/edit',
					method: 'post',
					data: {
						id: id,
						nama: nama
					},
					dataType: 'json',
					success: function(data) {
						if (data == "") {
						$("#modalEdit").modal('hide')
						tampilkan()
						$("#idUser").val("")
						$("#nama").val("")
						$('#pesanErrorTambah').html("")
						} else {
						$('#pesanErrorEdit').html(data)
						}
						$("#tombolEdit").html('Edit')
					}
					});
				}

			</script>