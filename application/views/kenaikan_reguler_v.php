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
											<h3 class="card-label">Data Kenaikan Pangkat Reguler Karyawan 
											<span class="d-block text-muted pt-2 font-size-sm">UOBK RSUD SYAMRABU BANGKALAN</span></h3>
										</div>
                    <div class="card-body px-lg-5 py-lg-5">
											<?php if ($this->session->userdata("rule") == 1) { ?>
												<button type="button" class="btn btn-secondary"><a href="kenaikan_reguler/exel/" target="_blank">Export Excel</a></button>
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
															<span class="text-white">Form Tambah Data Kenaikan Pangkat Reguler Karyawan </span>
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
																<span class="form-text text-muted">Masukkan Tanggal Kenaikan</span>
																<input type="date" class="form-control" id="tgl_kenaikan"/>
															</div>
                              <div class="form-group mb-3">
																		<span class="form-text text-muted">Jenis Kenikan Reguler</span>
																		<select class="form-control" id="jenis_kenaikan_reguler">
																			<option value="Struktural">Struktural</option>
																			<option value="Non Struktural">Non Struktural</option>
																		</select>
															</div>
														
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
						<!-- View-->
							<div class="modal fade" id="modalview" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">	
								<div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
									<div class="modal-content">
										<div class="modal-body p-0">
											<div class="card bg-secondary border-0 mb-0">
												<div class="card-header bg-success pb-1">
													<div class="text-muted text-center mt-2 mb-3">
														<span class="text-white">Data Kenaikan Reguler Karyawan </span>
													</div>
												</div>
												<div class="card-body px-lg-5 py-lg-5">
																				<form role="form">
																					<div class="form-group mb-1">
																						<span class="form-text text-muted">Jenis Kenaikan</span>
																		        <input id="idUser" type="hidden">
																						<input type="text" class="form-control" id="view_jenis_kenaikan_reguler" disabled/>
																					</div>
																					<div class="form-group mb-1">
																						<span class="form-text text-muted">Tanggal Kenaikan</span>
																						<input type="text" class="form-control" id="view_tgl_kenaikan" disabled/>
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
                                              <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1" id="view_file_fc_karpeg">KARPEG</a>
                                            </div>
                                          </div>
                                          
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
                                            <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1" id="view_file_fc_sk_pangkat_terakhir">SK PANGKAT TERAKHIR</a>
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
                                              <a href="#"  class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1" id="view_file_fc_stlud">STLUD</a>
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
                                              <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1" id="view_file_fc_ijazah_terakhir">FC IJAZAH TERAKHIR</a>
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
                                              <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1" id="view_file_fc_skp_2_tahun">FC SKP TERAKHIR</a>
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
                                              <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1" id="view_file_fc_cpns_pns">FC CPNS PNS</a>
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
                                              <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1" id="view_file_fc_sk_konversi_nip">SK KONVERSI NIP</a>
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
                                              <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1" id="view_file_asli_sk_terakhir">ASLI SK TERAKHIR</a>
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
                                              <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1" id="view_file_asli_skp_2_tahun">ASLI SKP 2 TAHUN TERAKHIR</a>
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
                                              <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1" id="view_file_asli_ijazah">Ijazah</a>
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
                                              <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1" id="view_file_asli_transkip">ASLI TRANSKIP</a>
                                            </div>
                                            <!--end::Title-->
                                            <!--begin::Lable-->
                                            <!-- <span class="font-weight-bolder text-success py-1 font-size-lg">+50%</span> -->
                                            <!--end::Lable-->
                                          </div>
                                          <!--end::Item-->

																				</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

              						
						<!-- Tambah karpeg-->
							<div class="modal fade" id="modalkarpeg" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">	
								<div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
									<div class="modal-content">
										<div class="modal-body p-0">
											<div class="card bg-secondary border-0 mb-0">
												<div class="card-header bg-success pb-1">
													<div class="text-muted text-center mt-2 mb-3">
														<span class="text-white">Form Tambah FC KARPEG </span>
													</div>
												</div>
												<div class="card-body px-lg-5 py-lg-5">
													<form role="form">
														<div class="form-group mb-3">
															<div class="custom-file">
																<input type="file" class="custom-file-input" id="berkas_karpeg" accept="application/pdf" />
																<label class="custom-file-label" for="berkas_karpeg">File Harus format PDF</label>
															</div>
														</div>

														
														<div id="div_upload_karpeg">
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
              						
						<!-- Tambah sk_pangkat_terakhir-->
							<div class="modal fade" id="modalsk_pangkat_terakhir" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">	
								<div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
									<div class="modal-content">
										<div class="modal-body p-0">
											<div class="card bg-secondary border-0 mb-0">
												<div class="card-header bg-success pb-1">
													<div class="text-muted text-center mt-2 mb-3">
														<span class="text-white">Form Tambah FC SK TERAKHIR </span>
													</div>
												</div>
												<div class="card-body px-lg-5 py-lg-5">
													<form role="form">
														<div class="form-group mb-3">
															<div class="custom-file">
																<input type="file" class="custom-file-input" id="berkas_sk_pangkat_terakhir" accept="application/pdf" />
																<label class="custom-file-label" for="berkas_sk_pangkat_terakhir">File Harus format PDF</label>
															</div>
														</div>

														
														<div id="div_upload_sk_pangkat_terakhir">
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
              						
						<!-- Tambah stlud-->
							<div class="modal fade" id="modalstlud" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">	
								<div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
									<div class="modal-content">
										<div class="modal-body p-0">
											<div class="card bg-secondary border-0 mb-0">
												<div class="card-header bg-success pb-1">
													<div class="text-muted text-center mt-2 mb-3">
														<span class="text-white">Form Tambah FC STLUD </span>
													</div>
												</div>
												<div class="card-body px-lg-5 py-lg-5">
													<form role="form">
														<div class="form-group mb-3">
															<div class="custom-file">
																<input type="file" class="custom-file-input" id="berkas_stlud" accept="application/pdf" />
																<label class="custom-file-label" for="berkas_stlud">File Harus format PDF</label>
															</div>
														</div>

														
														<div id="div_upload_stlud">
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
              						
						<!-- Tambah ijazah_terakhir-->
							<div class="modal fade" id="modalijazah_terakhir" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">	
								<div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
									<div class="modal-content">
										<div class="modal-body p-0">
											<div class="card bg-secondary border-0 mb-0">
												<div class="card-header bg-success pb-1">
													<div class="text-muted text-center mt-2 mb-3">
														<span class="text-white">Form Tambah FC Ijazah Terakhir </span>
													</div>
												</div>
												<div class="card-body px-lg-5 py-lg-5">
													<form role="form">
														<div class="form-group mb-3">
															<div class="custom-file">
																<input type="file" class="custom-file-input" id="berkas_ijazah_terakhir" accept="application/pdf" />
																<label class="custom-file-label" for="berkas_ijazah_terakhir">File Harus format PDF</label>
															</div>
														</div>

														
														<div id="div_upload_ijazah_terakhir">
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
              						
						<!-- Tambah skp_2_tahun-->
							<div class="modal fade" id="modalskp_2_tahun" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">	
								<div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
									<div class="modal-content">
										<div class="modal-body p-0">
											<div class="card bg-secondary border-0 mb-0">
												<div class="card-header bg-success pb-1">
													<div class="text-muted text-center mt-2 mb-3">
														<span class="text-white">Form Tambah FC SKP 2 TAHUN </span>
													</div>
												</div>
												<div class="card-body px-lg-5 py-lg-5">
													<form role="form">
														<div class="form-group mb-3">
															<div class="custom-file">
																<input type="file" class="custom-file-input" id="berkas_skp_2_tahun" accept="application/pdf" />
																<label class="custom-file-label" for="berkas_skp_2_tahun">File Harus format PDF</label>
															</div>
														</div>

														
														<div id="div_upload_skp_2_tahun">
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
              						
						<!-- Tambah cpns_pns-->
							<div class="modal fade" id="modalcpns_pns" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">	
								<div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
									<div class="modal-content">
										<div class="modal-body p-0">
											<div class="card bg-secondary border-0 mb-0">
												<div class="card-header bg-success pb-1">
													<div class="text-muted text-center mt-2 mb-3">
														<span class="text-white">Form Tambah FC SK CPNS / PNS Baru Naik Pangkat </span>
													</div>
												</div>
												<div class="card-body px-lg-5 py-lg-5">
													<form role="form">
														<div class="form-group mb-3">
															<div class="custom-file">
																<input type="file" class="custom-file-input" id="berkas_cpns_pns" accept="application/pdf" />
																<label class="custom-file-label" for="berkas_cpns_pns">File Harus format PDF</label>
															</div>
														</div>

														
														<div id="div_upload_cpns_pns">
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
              						
						<!-- Tambah sk_konversi_nip-->
							<div class="modal fade" id="modalsk_konversi_nip" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">	
								<div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
									<div class="modal-content">
										<div class="modal-body p-0">
											<div class="card bg-secondary border-0 mb-0">
												<div class="card-header bg-success pb-1">
													<div class="text-muted text-center mt-2 mb-3">
														<span class="text-white">Form Tambah FC SK Konversi NIP </span>
													</div>
												</div>
												<div class="card-body px-lg-5 py-lg-5">
													<form role="form">
														<div class="form-group mb-3">
															<div class="custom-file">
																<input type="file" class="custom-file-input" id="berkas_sk_konversi_nip" accept="application/pdf" />
																<label class="custom-file-label" for="berkas_sk_konversi_nip">File Harus format PDF</label>
															</div>
														</div>

														
														<div id="div_upload_sk_konversi_nip">
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
              						
						<!-- Tambah sk_terakhir-->
							<div class="modal fade" id="modalsk_terakhir" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">	
								<div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
									<div class="modal-content">
										<div class="modal-body p-0">
											<div class="card bg-secondary border-0 mb-0">
												<div class="card-header bg-success pb-1">
													<div class="text-muted text-center mt-2 mb-3">
														<span class="text-white">Form Tambah Asli SK Terakhir </span>
													</div>
												</div>
												<div class="card-body px-lg-5 py-lg-5">
													<form role="form">
														<div class="form-group mb-3">
															<div class="custom-file">
																<input type="file" class="custom-file-input" id="berkas_sk_terakhir" accept="application/pdf" />
																<label class="custom-file-label" for="berkas_sk_terakhir">File Harus format PDF</label>
															</div>
														</div>

														
														<div id="div_upload_sk_terakhir">
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
              						
						<!-- Tambah asli_skp_2_tahun-->
							<div class="modal fade" id="modalasli_skp_2_tahun" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">	
								<div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
									<div class="modal-content">
										<div class="modal-body p-0">
											<div class="card bg-secondary border-0 mb-0">
												<div class="card-header bg-success pb-1">
													<div class="text-muted text-center mt-2 mb-3">
														<span class="text-white">Form Tambah Asli SKP 2 Tahun Terakhir </span>
													</div>
												</div>
												<div class="card-body px-lg-5 py-lg-5">
													<form role="form">
														<div class="form-group mb-3">
															<div class="custom-file">
																<input type="file" class="custom-file-input" id="berkas_asli_skp_2_tahun" accept="application/pdf" />
																<label class="custom-file-label" for="berkas_asli_skp_2_tahun">File Harus format PDF</label>
															</div>
														</div>

														
														<div id="div_upload_asli_skp_2_tahun">
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
              						
						<!-- Tambah asli_ijazah-->
							<div class="modal fade" id="modalasli_ijazah" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">	
								<div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
									<div class="modal-content">
										<div class="modal-body p-0">
											<div class="card bg-secondary border-0 mb-0">
												<div class="card-header bg-success pb-1">
													<div class="text-muted text-center mt-2 mb-3">
														<span class="text-white">Form Tambah Asli Ijazah </span>
													</div>
												</div>
												<div class="card-body px-lg-5 py-lg-5">
													<form role="form">
														<div class="form-group mb-3">
															<div class="custom-file">
																<input type="file" class="custom-file-input" id="berkas_asli_ijazah" accept="application/pdf" />
																<label class="custom-file-label" for="berkas_asli_ijazah">File Harus format PDF</label>
															</div>
														</div>

														
														<div id="div_upload_asli_ijazah">
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
              						
						<!-- Tambah asli_transkip-->
							<div class="modal fade" id="modalasli_transkip" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">	
								<div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
									<div class="modal-content">
										<div class="modal-body p-0">
											<div class="card bg-secondary border-0 mb-0">
												<div class="card-header bg-success pb-1">
													<div class="text-muted text-center mt-2 mb-3">
														<span class="text-white">Form Tambah Asli Transkip </span>
													</div>
												</div>
												<div class="card-body px-lg-5 py-lg-5">
													<form role="form">
														<div class="form-group mb-3">
															<div class="custom-file">
																<input type="file" class="custom-file-input" id="berkas_asli_transkip" accept="application/pdf" />
																<label class="custom-file-label" for="berkas_asli_transkip">File Harus format PDF</label>
															</div>
														</div>

														
														<div id="div_upload_asli_transkip">
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
    var baris = '<table class="table table-separate table-head-custom table-checkable" id="tabelUser"><thead class="thead-light"><tr><th>Action</th><th>NO</th><th>Tanggal Update</th><th>Nama</th><th>Jenis Kenaikan Reguler</th><th>Tanggal Kenaikan</th><th>KARPEG</th><th>SK Pangkat Terakhir</th><th>STLUD</th><th>Fc Ijazah</th><th>FC SKP 2 Tahun Terakhir</th><th>SK CPNS/PNS</th><th>SK Konversi NIP</th><th>SK Terakhir</th><th>Asli SKP 2 tahun Terakhir</th><th>Asli Ijazah</th><th>Asli Transkip Nilai</th></tr></thead>'
      $.ajax({
        type:'POST',
        url: '<?= base_url() ?>kenaikan_reguler/tampil',
        dataType :'json',
        success: function(data){
         //console.log(data);
          for (let i = 0; i < data.length; i++) {
            baris += '<tr>'
            baris += '<td><div style="cursor:pointer;" title="hapus?" id="hapus' + data[i].id + '" onClick="tryHapus(' + data[i].id+ ')"><i class="flaticon-delete text-danger"></i></div>'
            baris += ' <div style="cursor:pointer;" title="view?" id="view' + data[i].id + '" onClick="tryView(' + data[i].id+ ')"><i class="flaticon-eye text-primary"></i></div>'
            baris += '<td>' + (i + 1) + '</td>'
            baris += '<td>' + data[i].tgl_input + '</td>'
            baris += '<td>' + data[i].nama + '</td>'
            baris += '<td>' + data[i].jenis_kenaikan_reguler + '</td>'
            baris += '<td>' + data[i].tgl_kenaikan + '</td>'
            baris += '<td><div style="cursor:pointer;" title="upload KARPEG?" id="karpeg' + data[i].id + '" onClick="tampil_modal_karpeg(' + data[i].id+ ')"><i class="btn btn-light btn-shadow font-weight-bold mr-2">Upload FC KARPEG</i></div></td>'
            baris += '<td><div style="cursor:pointer;" title="upload FC SK Terakhir?"  id="sk_pangkat_terakhir' + data[i].id + '" onClick="tampil_modal_sk_pangkat_terakhir(' + data[i].id+ ')"><i class="btn btn-success btn-shadow font-weight-bold mr-2">Upload FC SK Pangkat Terakhir</i></div></td>'
            baris += '<td><div style="cursor:pointer;" title="upload FC STLUD?"  id="stlud' + data[i].id + '" onClick="tampil_modal_stlud(' + data[i].id+ ')"><i class="btn btn-primary btn-shadow font-weight-bold mr-2">Upload FC STLUD</i></div></td>'
            baris += '<td><div style="cursor:pointer;" title="upload FC Ijazah Terakhir?"  id="ijazah_terakhir' + data[i].id + '" onClick="tampil_modal_ijazah_terakhir(' + data[i].id+ ')"><i class="btn btn-danger btn-shadow font-weight-bold mr-2">Upload FC ijazah Terakhir</i></div></td>'
            baris += '<td><div style="cursor:pointer;" title="upload FC SKP 2 Tahun Terakhir?"  id="skp_2_tahun' + data[i].id + '" onClick="tampil_modal_skp_2_tahun(' + data[i].id+ ')"><i class="btn btn-warning btn-shadow font-weight-bold mr-2">Upload FC SKP 2 Tahun Terakhir</i></div></td>'
            baris += '<td><div style="cursor:pointer;" title="upload FC SK CPNS/PNS Baru Naik Pangkat?"  id="cpns_pns' + data[i].id + '" onClick="tampil_modal_cpns_pns(' + data[i].id+ ')"><i class="btn btn-light btn-shadow font-weight-bold mr-2">Upload FC SK CPNS/PNS Baru Naik Pangkat</i></div></td>'
            baris += '<td><div style="cursor:pointer;" title="upload FC SK NIP Konversi?"  id="sk_konversi_nip' + data[i].id + '" onClick="tampil_modal_sk_konversi_nip(' + data[i].id+ ')"><i class="btn btn-success btn-shadow font-weight-bold mr-2">Upload FC SK Konversi NIP</i></div></td>'
            baris += '<td><div style="cursor:pointer;" title="upload Asli SK Terakhir?"  id="sk_terakhir' + data[i].id + '" onClick="tampil_modal_sk_terakhir(' + data[i].id+ ')"><i class="btn btn-primary btn-shadow font-weight-bold mr-2">Upload Asli SK Terakhir</i></div></td>'
            baris += '<td><div style="cursor:pointer;" title="upload Asli SKP 2 Tahun Terakhir?"  id="asli_skp_2_tahun' + data[i].id + '" onClick="tampil_modal_asli_skp_2_tahun(' + data[i].id+ ')"><i class="btn btn-danger btn-shadow font-weight-bold mr-2">Upload Asli SKP 2 Tahun Terakhir</i></div></td>'
            baris += '<td><div style="cursor:pointer;" title="upload Asli Ijazah?"  id="asli_ijazah' + data[i].id + '" onClick="tampil_modal_asli_ijazah(' + data[i].id+ ')"><i class="btn btn-warning btn-shadow font-weight-bold mr-2">Upload Asli Ijazah Terakhir</i></div></td>'
            baris += '<td><div style="cursor:pointer;" title="upload Asli Transkip?"  id="asli_transkip' + data[i].id + '" onClick="tampil_modal_asli_transkip(' + data[i].id+ ')"><i class="btn btn-light btn-shadow font-weight-bold mr-2">Upload Asli Transkip Nilai</i></div></td>'
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

  
  function tryView(id) {
      $("#tombolView" + id).html('<i class="fas fa-spinner fa-pulse"></i>')
      $("#idUser").val(id)
      $.ajax({
      url: '<?= base_url() ?>kenaikan_reguler/edit_id',
      method: 'post',
      data: "target=kenaikan_reguler_karyawan&id=" + id,
      dataType: 'json',
      success: function(data) {
        $("#view_file_fc_karpeg").html('');
        $("#view_file_fc_sk_pangkat_terakhir").html('');
        $("#view_file_fc_stlud").html('');
        $("#view_file_fc_ijazah_terakhir").html('');
        $("#view_file_fc_skp_2_tahun").html('');
        $("#view_file_fc_cpns_pns").html('');
        $("#view_file_fc_sk_konversi_nip").html('');
        $("#view_file_file_asli_sk_terakhir").html('');
        $("#view_file_file_asli_skp_2_tahun").html('');
        $("#view_file_asli_ijazah").html('');
        $("#view_file_asli_transkip").html('');

        // $("#view_foto").html('<img src="'+base_url+'assets/foto_karyawan/'+data.foto+'">');

        $("#modalview").modal('show')
        $("#view_jenis_kenaikan_reguler").val(data.jenis_kenaikan_reguler)
        $("#view_tgl_kenaikan").val(data.tgl_kenaikan)
        $("#view_file_fc_karpeg").val(data.file_fc_karpeg)
        $("#view_file_fc_sk_pangkat_terakhir").val(data.file_fc_sk_pangkat_terakhir)
        $("#view_file_fc_stlud").val(data.file_fc_stlud)
        $("#view_file_fc_ijazah_terakhir").val(data.file_fc_ijazah_terakhir)
        $("#view_file_fc_skp_2_tahun").val(data.file_fc_skp_2_tahun)
        $("#view_file_fc_cpns_pns").val(data.file_fc_cpns_pns)
        $("#view_file_fc_sk_konversi_nip").val(data.file_fc_sk_konversi_nip)
        $("#view_file_asli_sk_terakhir").val(data.file_asli_sk_terakhir)
        $("#view_file_asli_skp_2_tahun").val(data.file_asli_skp_2_tahun)
        $("#view_file_asli_ijazah").val(data.file_asli_ijazah)
        $("#view_file_asli_transkip").val(data.file_asli_transkip)


        if(data.file_fc_karpeg!=null){
          var link = ' <a href="<?= base_url() ?>assets/arsip_karyawan/'+data.file_fc_karpeg+'" target="_blank">FILE FC KARPEG</a>';
          $("#view_file_fc_karpeg").html(link);
        }

        if(data.file_fc_sk_pangkat_terakhir!=null){
          var link = ' <a href="<?= base_url() ?>assets/arsip_karyawan/'+data.file_fc_sk_pangkat_terakhir+'" target="_blank">FC SK PANGKAT TERAKHIR</a>';
          $("#view_file_fc_sk_pangkat_terakhir").html(link);
        }

        if(data.file_fc_stlud!=null){
          var link = ' <a href="<?= base_url() ?>assets/arsip_karyawan/'+data.file_fc_stlud+'" target="_blank">FILE FC STLUD</a>';
          $("#view_file_fc_stlud").html(link);
        }

        if(data.file_fc_ijazah_terakhir!=null){
          var link = ' <a href="<?= base_url() ?>assets/arsip_karyawan/'+data.file_fc_ijazah_terakhir+'" target="_blank">FILE FC IJAZAH TERAKHIR</a>';
          $("#view_file_fc_ijazah_terakhir").html(link);
        }

        if(data.file_fc_skp_2_tahun!=null){
          var link = ' <a href="<?= base_url() ?>assets/arsip_karyawan/'+data.file_fc_skp_2_tahun+'" target="_blank">FILE FC SKP 2 TAHUN TERAKHIR</a>';
          $("#view_file_fc_skp_2_tahun").html(link);
        }

        if(data.file_fc_cpns_pns!=null){
          var link = ' <a href="<?= base_url() ?>assets/arsip_karyawan/'+data.file_fc_cpns_pns+'" target="_blank">FILE FC SK CPNS/PNS BARU DIANGKAT</a>';
          $("#view_file_fc_cpns_pns").html(link);
        }

        if(data.file_fc_sk_konversi_nip!=null){
          var link = ' <a href="<?= base_url() ?>assets/arsip_karyawan/'+data.file_fc_sk_konversi_nip+'" target="_blank">FILE FC SK KONVERSI</a>';
          $("#view_file_fc_sk_konversi_nip").html(link);
        }

        if(data.file_asli_sk_terakhir!=null){
          var link = ' <a href="<?= base_url() ?>assets/arsip_karyawan/'+data.file_asli_sk_terakhir+'" target="_blank">FILE ASLI SK TERAKHIR</a>';
          $("#view_file_asli_sk_terakhir").html(link);
        }

        if(data.file_asli_skp_2_tahun!=null){
          var link = ' <a href="<?= base_url() ?>assets/arsip_karyawan/'+data.file_asli_skp_2_tahun+'" target="_blank">FILE ASLI SKP 2 TAHUN TERAKHIR</a>';
          $("#view_file_asli_skp_2_tahun").html(link);
        }

        if(data.file_asli_ijazah!=null){
          var link = ' <a href="<?= base_url() ?>assets/arsip_karyawan/'+data.file_asli_ijazah+'" target="_blank">FILE ASLI IJAZAH</a>';
          $("#view_file_asli_ijazah").html(link);
        }

        if(data.file_asli_transkip!=null){
          var link = ' <a href="<?= base_url() ?>assets/arsip_karyawan/'+data.file_asli_transkip+'" target="_blank">FILE ASLI TRANSKIP</a>';
          $("#view_file_asli_transkip").html(link);
        }


        console.log(data)
        $("#view" + id).html('<i class="fa fa-edit"></i>')
      }
      });
	  }


    function tampil_modal_karpeg(id){
      document.getElementById("berkas_karpeg").value = "";

      var tombol = '<button type="button" onclick="pernyataan_karpeg('+id+')" id="simpan_pernyataan_karpeg" class="btn btn-block btn-info"><div id="loader_upload_karpeg"> </div> Simpan</button>';
      $("#div_upload_karpeg").html(tombol);
      $('#modalkarpeg').modal('show');
    }

	  function pernyataan_karpeg(id) {
      // console.log(id);
      if(document.getElementById("berkas_karpeg").value == ""){
        document.getElementById("berkas_karpeg").focus();
      } else{
        var format = $('#berkas_karpeg').prop('files')[0].type;
        if (format.includes('pdf')) {
          var form_data = new FormData();
          form_data.append('id', id);
        //   form_data.append('jenis', document.getElementById("jenis_pernyataan").value);
          form_data.append('berkas_karpeg', $('#berkas_karpeg').prop('files')[0]);

          $.ajax({
            type: 'POST',
            data: form_data,
            url: '<?= base_url() ?>kenaikan_reguler/upload_pernyataan_karpeg',
            processData:false,
            contentType:false,
            cache:false,
            dataType: 'json',
            beforeSend: function () {
              $('#simpan_pernyataan_karpeg').attr('disabled', true);
              $('#loader_upload_karpeg').html('');
              addSpinner($('#loader_upload_karpeg'));
            },
            success: function(data) {
              // alert(data);
              // console.log(data);
              $('#simpan_pernyataan_karpeg').attr('disabled', false);
              removeSpinner($('#loader_upload_karpeg'), function () {
                $('#loader_upload_karpeg').html('');
              });
            //   ambil_data();
              $('#modalkarpeg').modal('hide');
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
              title: 'Type file harus PDF',
              showConfirmButton: false,
              timer: 2500
            });
        }
      }
  	}

    function tampil_modal_sk_pangkat_terakhir(id){
      document.getElementById("berkas_sk_pangkat_terakhir").value = "";

      var tombol = '<button type="button" onclick="pernyataan_sk_pangkat_terakhir('+id+')" id="simpan_pernyataan_sk_pangkat_terakhir" class="btn btn-block btn-info"><div id="loader_upload_sk_pangkat_terakhir"> </div> Simpan</button>';
      $("#div_upload_sk_pangkat_terakhir").html(tombol);
      $('#modalsk_pangkat_terakhir').modal('show');
    }

	  function pernyataan_sk_pangkat_terakhir(id) {
      // console.log(id);
      if(document.getElementById("berkas_sk_pangkat_terakhir").value == ""){
        document.getElementById("berkas_sk_pangkat_terakhir").focus();
      } else{
        var format = $('#berkas_sk_pangkat_terakhir').prop('files')[0].type;
        if (format.includes('pdf')) {
          var form_data = new FormData();
          form_data.append('id', id);
        //   form_data.append('jenis', document.getElementById("jenis_pernyataan").value);
          form_data.append('berkas_sk_pangkat_terakhir', $('#berkas_sk_pangkat_terakhir').prop('files')[0]);

          $.ajax({
            type: 'POST',
            data: form_data,
            url: '<?= base_url() ?>kenaikan_reguler/upload_pernyataan_sk_pangkat_terakhir',
            processData:false,
            contentType:false,
            cache:false,
            dataType: 'json',
            beforeSend: function () {
              $('#simpan_pernyataan_sk_pangkat_terakhir').attr('disabled', true);
              $('#loader_upload_sk_pangkat_terakhir').html('');
              addSpinner($('#loader_upload_sk_pangkat_terakhir'));
            },
            success: function(data) {
              // alert(data);
              // console.log(data);
              $('#simpan_pernyataan_sk_pangkat_terakhir').attr('disabled', false);
              removeSpinner($('#loader_upload_sk_pangkat_terakhir'), function () {
                $('#loader_upload_sk_pangkat_terakhir').html('');
              });
            //   ambil_data();
              $('#modalsk_pangkat_terakhir').modal('hide');
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
              title: 'Type file harus PDF ',
              showConfirmButton: false,
              timer: 2500
            });
        }
      }
  	}

    function tampil_modal_stlud(id){
      document.getElementById("berkas_stlud").value = "";

      var tombol = '<button type="button" onclick="pernyataan_stlud('+id+')" id="simpan_pernyataan_stlud" class="btn btn-block btn-info"><div id="loader_upload_stlud"> </div> Simpan</button>';
      $("#div_upload_stlud").html(tombol);
      $('#modalstlud').modal('show');
    }

	  function pernyataan_stlud(id) {
      // console.log(id);
      if(document.getElementById("berkas_stlud").value == ""){
        document.getElementById("berkas_stlud").focus();
      } else{
        var format = $('#berkas_stlud').prop('files')[0].type;
        if (format.includes('pdf')) {
          var form_data = new FormData();
          form_data.append('id', id);
        //   form_data.append('jenis', document.getElementById("jenis_pernyataan").value);
          form_data.append('berkas_stlud', $('#berkas_stlud').prop('files')[0]);

          $.ajax({
            type: 'POST',
            data: form_data,
            url: '<?= base_url() ?>kenaikan_reguler/upload_pernyataan_stlud',
            processData:false,
            contentType:false,
            cache:false,
            dataType: 'json',
            beforeSend: function () {
              $('#simpan_pernyataan_stlud').attr('disabled', true);
              $('#loader_upload_stlud').html('');
              addSpinner($('#loader_upload_stlud'));
            },
            success: function(data) {
              // alert(data);
              // console.log(data);
              $('#simpan_pernyataan_stlud').attr('disabled', false);
              removeSpinner($('#loader_upload_stlud'), function () {
                $('#loader_upload_stlud').html('');
              });
            //   ambil_data();
              $('#modalstlud').modal('hide');
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
              title: 'Type file harus PDF ',
              showConfirmButton: false,
              timer: 2500
            });
        }
      }
  	}

    function tampil_modal_ijazah_terakhir(id){
      document.getElementById("berkas_ijazah_terakhir").value = "";

      var tombol = '<button type="button" onclick="pernyataan_ijazah_terakhir('+id+')" id="simpan_pernyataan_ijazah_terakhir" class="btn btn-block btn-info"><div id="loader_upload_ijazah_terakhir"> </div> Simpan</button>';
      $("#div_upload_ijazah_terakhir").html(tombol);
      $('#modalijazah_terakhir').modal('show');
    }

	  function pernyataan_ijazah_terakhir(id) {
      // console.log(id);
      if(document.getElementById("berkas_ijazah_terakhir").value == ""){
        document.getElementById("berkas_ijazah_terakhir").focus();
      } else{
        var format = $('#berkas_ijazah_terakhir').prop('files')[0].type;
        if (format.includes('pdf')) {
          var form_data = new FormData();
          form_data.append('id', id);
        //   form_data.append('jenis', document.getElementById("jenis_pernyataan").value);
          form_data.append('berkas_ijazah_terakhir', $('#berkas_ijazah_terakhir').prop('files')[0]);

          $.ajax({
            type: 'POST',
            data: form_data,
            url: '<?= base_url() ?>kenaikan_reguler/upload_pernyataan_ijazah_terakhir',
            processData:false,
            contentType:false,
            cache:false,
            dataType: 'json',
            beforeSend: function () {
              $('#simpan_pernyataan_ijazah_terakhir').attr('disabled', true);
              $('#loader_upload_ijazah_terakhir').html('');
              addSpinner($('#loader_upload_ijazah_terakhir'));
            },
            success: function(data) {
              // alert(data);
              // console.log(data);
              $('#simpan_pernyataan_ijazah_terakhir').attr('disabled', false);
              removeSpinner($('#loader_upload_ijazah_terakhir'), function () {
                $('#loader_upload_ijazah_terakhir').html('');
              });
            //   ambil_data();
              $('#modalijazah_terakhir').modal('hide');
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
              title: 'Type file harus PDF ',
              showConfirmButton: false,
              timer: 2500
            });
        }
      }
  	}

    function tampil_modal_skp_2_tahun(id){
      document.getElementById("berkas_skp_2_tahun").value = "";

      var tombol = '<button type="button" onclick="pernyataan_skp_2_tahun('+id+')" id="simpan_pernyataan_skp_2_tahun" class="btn btn-block btn-info"><div id="loader_upload_ijazah_terakhir"> </div> Simpan</button>';
      $("#div_upload_skp_2_tahun").html(tombol);
      $('#modalskp_2_tahun').modal('show');
    }

	  function pernyataan_skp_2_tahun(id) {
      // console.log(id);
      if(document.getElementById("berkas_skp_2_tahun").value == ""){
        document.getElementById("berkas_skp_2_tahun").focus();
      } else{
        var format = $('#berkas_skp_2_tahun').prop('files')[0].type;
        if (format.includes('pdf')) {
          var form_data = new FormData();
          form_data.append('id', id);
        //   form_data.append('jenis', document.getElementById("jenis_pernyataan").value);
          form_data.append('berkas_skp_2_tahun', $('#berkas_skp_2_tahun').prop('files')[0]);

          $.ajax({
            type: 'POST',
            data: form_data,
            url: '<?= base_url() ?>kenaikan_reguler/upload_pernyataan_skp_2_tahun',
            processData:false,
            contentType:false,
            cache:false,
            dataType: 'json',
            beforeSend: function () {
              $('#simpan_pernyataan_skp_2_tahun').attr('disabled', true);
              $('#loader_upload_skp_2_tahun').html('');
              addSpinner($('#loader_upload_skp_2_tahun'));
            },
            success: function(data) {
              // alert(data);
              // console.log(data);
              $('#simpan_pernyataan_skp_2_tahun').attr('disabled', false);
              removeSpinner($('#loader_upload_skp_2_tahun'), function () {
                $('#loader_upload_skp_2_tahun').html('');
              });
            //   ambil_data();
              $('#modalskp_2_tahun').modal('hide');
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
              title: 'Type file harus PDF ',
              showConfirmButton: false,
              timer: 2500
            });
        }
      }
  	}

    function tampil_modal_cpns_pns(id){
      document.getElementById("berkas_cpns_pns").value = "";

      var tombol = '<button type="button" onclick="pernyataan_cpns_pns('+id+')" id="simpan_pernyataan_cpns_pns" class="btn btn-block btn-info"><div id="loader_upload_cpns_pns"> </div> Simpan</button>';
      $("#div_upload_cpns_pns").html(tombol);
      $('#modalcpns_pns').modal('show');
    }

	  function pernyataan_cpns_pns(id) {
      // console.log(id);
      if(document.getElementById("berkas_cpns_pns").value == ""){
        document.getElementById("berkas_cpns_pns").focus();
      } else{
        var format = $('#berkas_cpns_pns').prop('files')[0].type;
        if (format.includes('pdf')) {
          var form_data = new FormData();
          form_data.append('id', id);
        //   form_data.append('jenis', document.getElementById("jenis_pernyataan").value);
          form_data.append('berkas_cpns_pns', $('#berkas_cpns_pns').prop('files')[0]);

          $.ajax({
            type: 'POST',
            data: form_data,
            url: '<?= base_url() ?>kenaikan_reguler/upload_pernyataan_cpns_pns',
            processData:false,
            contentType:false,
            cache:false,
            dataType: 'json',
            beforeSend: function () {
              $('#simpan_pernyataan_cpns_pns').attr('disabled', true);
              $('#loader_upload_cpns_pns').html('');
              addSpinner($('#loader_upload_cpns_pns'));
            },
            success: function(data) {
              // alert(data);
              // console.log(data);
              $('#simpan_pernyataan_cpns_pns').attr('disabled', false);
              removeSpinner($('#loader_upload_cpns_pns'), function () {
                $('#loader_upload_cpns_pns').html('');
              });
            //   ambil_data();
              $('#modalcpns_pns').modal('hide');
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
              title: 'Type file harus PDF ',
              showConfirmButton: false,
              timer: 2500
            });
        }
      }
  	}

    function tampil_modal_sk_konversi_nip(id){
      document.getElementById("berkas_sk_konversi_nip").value = "";

      var tombol = '<button type="button" onclick="pernyataan_sk_konversi_nip('+id+')" id="simpan_pernyataan_sk_konversi_nip" class="btn btn-block btn-info"><div id="loader_upload_sk_konversi_nip"> </div> Simpan</button>';
      $("#div_upload_sk_konversi_nip").html(tombol);
      $('#modalsk_konversi_nip').modal('show');
    }

	  function pernyataan_sk_konversi_nip(id) {
      // console.log(id);
      if(document.getElementById("berkas_sk_konversi_nip").value == ""){
        document.getElementById("berkas_sk_konversi_nip").focus();
      } else{
        var format = $('#berkas_sk_konversi_nip').prop('files')[0].type;
        if (format.includes('pdf')) {
          var form_data = new FormData();
          form_data.append('id', id);
        //   form_data.append('jenis', document.getElementById("jenis_pernyataan").value);
          form_data.append('berkas_sk_konversi_nip', $('#berkas_sk_konversi_nip').prop('files')[0]);

          $.ajax({
            type: 'POST',
            data: form_data,
            url: '<?= base_url() ?>kenaikan_reguler/upload_pernyataan_sk_konversi_nip',
            processData:false,
            contentType:false,
            cache:false,
            dataType: 'json',
            beforeSend: function () {
              $('#simpan_pernyataan_sk_konversi_nip').attr('disabled', true);
              $('#loader_upload_sk_konversi_nip').html('');
              addSpinner($('#loader_upload_sk_konversi_nip'));
            },
            success: function(data) {
              // alert(data);
              // console.log(data);
              $('#simpan_pernyataan_sk_konversi_nip').attr('disabled', false);
              removeSpinner($('#loader_upload_sk_konversi_nip'), function () {
                $('#loader_upload_sk_konversi_nip').html('');
              });
            //   ambil_data();
              $('#modalsk_konversi_nip').modal('hide');
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
              title: 'Type file harus PDF ',
              showConfirmButton: false,
              timer: 2500
            });
        }
      }
  	}

    function tampil_modal_sk_terakhir(id){
      document.getElementById("berkas_sk_terakhir").value = "";

      var tombol = '<button type="button" onclick="pernyataan_sk_terakhir('+id+')" id="simpan_pernyataan_sk_terakhir" class="btn btn-block btn-info"><div id="loader_upload_sk_terakhir"> </div> Simpan</button>';
      $("#div_upload_sk_terakhir").html(tombol);
      $('#modalsk_terakhir').modal('show');
    }

	  function pernyataan_sk_terakhir(id) {
      // console.log(id);
      if(document.getElementById("berkas_sk_terakhir").value == ""){
        document.getElementById("berkas_sk_terakhir").focus();
      } else{
        var format = $('#berkas_sk_terakhir').prop('files')[0].type;
        if (format.includes('pdf')) {
          var form_data = new FormData();
          form_data.append('id', id);
        //   form_data.append('jenis', document.getElementById("jenis_pernyataan").value);
          form_data.append('berkas_sk_terakhir', $('#berkas_sk_terakhir').prop('files')[0]);

          $.ajax({
            type: 'POST',
            data: form_data,
            url: '<?= base_url() ?>kenaikan_reguler/upload_pernyataan_sk_terakhir',
            processData:false,
            contentType:false,
            cache:false,
            dataType: 'json',
            beforeSend: function () {
              $('#simpan_pernyataan_sk_terakhir').attr('disabled', true);
              $('#loader_upload_sk_terakhir').html('');
              addSpinner($('#loader_upload_sk_terakhir'));
            },
            success: function(data) {
              // alert(data);
              // console.log(data);
              $('#simpan_pernyataan_sk_terakhir').attr('disabled', false);
              removeSpinner($('#loader_upload_sk_terakhir'), function () {
                $('#loader_upload_sk_terakhir').html('');
              });
            //   ambil_data();
              $('#modalsk_terakhir').modal('hide');
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
              title: 'Type file harus PDF ',
              showConfirmButton: false,
              timer: 2500
            });
        }
      }
  	}

    function tampil_modal_asli_skp_2_tahun(id){
      document.getElementById("berkas_asli_skp_2_tahun").value = "";

      var tombol = '<button type="button" onclick="pernyataan_asli_skp_2_tahun('+id+')" id="simpan_pernyataan_asli_skp_2_tahun" class="btn btn-block btn-info"><div id="loader_upload_asli_skp_2_tahun"> </div> Simpan</button>';
      $("#div_upload_asli_skp_2_tahun").html(tombol);
      $('#modalasli_skp_2_tahun').modal('show');
    }

	  function pernyataan_asli_skp_2_tahun(id) {
      // console.log(id);
      if(document.getElementById("berkas_asli_skp_2_tahun").value == ""){
        document.getElementById("berkas_asli_skp_2_tahun").focus();
      } else{
        var format = $('#berkas_asli_skp_2_tahun').prop('files')[0].type;
        if (format.includes('pdf')) {
          var form_data = new FormData();
          form_data.append('id', id);
        //   form_data.append('jenis', document.getElementById("jenis_pernyataan").value);
          form_data.append('berkas_asli_skp_2_tahun', $('#berkas_asli_skp_2_tahun').prop('files')[0]);

          $.ajax({
            type: 'POST',
            data: form_data,
            url: '<?= base_url() ?>kenaikan_reguler/upload_pernyataan_asli_skp_2_tahun',
            processData:false,
            contentType:false,
            cache:false,
            dataType: 'json',
            beforeSend: function () {
              $('#simpan_pernyataan_asli_skp_2_tahun').attr('disabled', true);
              $('#loader_upload_asli_skp_2_tahun').html('');
              addSpinner($('#loader_upload_asli_skp_2_tahun'));
            },
            success: function(data) {
              // alert(data);
              // console.log(data);
              $('#simpan_pernyataan_asli_skp_2_tahun').attr('disabled', false);
              removeSpinner($('#loader_upload_asli_skp_2_tahun'), function () {
                $('#loader_upload_asli_skp_2_tahun').html('');
              });
            //   ambil_data();
              $('#modalasli_skp_2_tahun').modal('hide');
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
              title: 'Type file harus PDF ',
              showConfirmButton: false,
              timer: 2500
            });
        }
      }
  	}

    function tampil_modal_asli_ijazah(id){
      document.getElementById("berkas_asli_ijazah").value = "";

      var tombol = '<button type="button" onclick="pernyataan_asli_ijazah('+id+')" id="simpan_pernyataan_asli_ijazah" class="btn btn-block btn-info"><div id="loader_upload_asli_ijazah"> </div> Simpan</button>';
      $("#div_upload_asli_ijazah").html(tombol);
      $('#modalasli_ijazah').modal('show');
    }

	  function pernyataan_asli_ijazah(id) {
      // console.log(id);
      if(document.getElementById("berkas_asli_ijazah").value == ""){
        document.getElementById("berkas_asli_ijazah").focus();
      } else{
        var format = $('#berkas_asli_ijazah').prop('files')[0].type;
        if (format.includes('pdf')) {
          var form_data = new FormData();
          form_data.append('id', id);
        //   form_data.append('jenis', document.getElementById("jenis_pernyataan").value);
          form_data.append('berkas_asli_ijazah', $('#berkas_asli_ijazah').prop('files')[0]);

          $.ajax({
            type: 'POST',
            data: form_data,
            url: '<?= base_url() ?>kenaikan_reguler/upload_pernyataan_asli_ijazah',
            processData:false,
            contentType:false,
            cache:false,
            dataType: 'json',
            beforeSend: function () {
              $('#simpan_pernyataan_asli_ijazah').attr('disabled', true);
              $('#loader_upload_asli_ijazah').html('');
              addSpinner($('#loader_upload_asli_ijazah'));
            },
            success: function(data) {
              // alert(data);
              // console.log(data);
              $('#simpan_pernyataan_asli_ijazah').attr('disabled', false);
              removeSpinner($('#loader_upload_asli_ijazah'), function () {
                $('#loader_upload_asli_ijazah').html('');
              });
            //   ambil_data();
              $('#modalasli_ijazah').modal('hide');
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
              title: 'Type file harus PDF ',
              showConfirmButton: false,
              timer: 2500
            });
        }
      }
  	}

    function tampil_modal_asli_transkip(id){
      document.getElementById("berkas_asli_transkip").value = "";

      var tombol = '<button type="button" onclick="pernyataan_asli_transkip('+id+')" id="simpan_pernyataan_asli_transkip" class="btn btn-block btn-info"><div id="loader_upload_asli_transkip"> </div> Simpan</button>';
      $("#div_upload_asli_transkip").html(tombol);
      $('#modalasli_transkip').modal('show');
    }

	  function pernyataan_asli_transkip(id) {
      // console.log(id);
      if(document.getElementById("berkas_asli_transkip").value == ""){
        document.getElementById("berkas_asli_transkip").focus();
      } else{
        var format = $('#berkas_asli_transkip').prop('files')[0].type;
        if (format.includes('pdf')) {
          var form_data = new FormData();
          form_data.append('id', id);
        //   form_data.append('jenis', document.getElementById("jenis_pernyataan").value);
          form_data.append('berkas_asli_transkip', $('#berkas_asli_transkip').prop('files')[0]);

          $.ajax({
            type: 'POST',
            data: form_data,
            url: '<?= base_url() ?>kenaikan_reguler/upload_pernyataan_asli_transkip',
            processData:false,
            contentType:false,
            cache:false,
            dataType: 'json',
            beforeSend: function () {
              $('#simpan_pernyataan_asli_transkip').attr('disabled', true);
              $('#loader_upload_asli_transkip').html('');
              addSpinner($('#loader_upload_asli_transkip'));
            },
            success: function(data) {
              // alert(data);
              // console.log(data);
              $('#simpan_pernyataan_asli_transkip').attr('disabled', false);
              removeSpinner($('#loader_upload_asli_transkip'), function () {
                $('#loader_upload_asli_transkip').html('');
              });
            //   ambil_data();
              $('#modalasli_transkip').modal('hide');
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
              title: 'Type file harus PDF ',
              showConfirmButton: false,
              timer: 2500
            });
        }
      }
  	}

  
    function get_nama() {
      $.ajax({
          type: 'POST',
          url: '<?= base_url() ?>kenaikan_reguler/get_nama_karyawan',
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
    document.getElementById('jenis_kenaikan_reguler').value = "";
    document.getElementById('tgl_kenaikan').value = "";
  }

  function tampil_input_modal(){
    get_nama();
    reset_form();
    // get_random();
    // get_nrm();
    $('#modalTambah').modal('show');
  }


  function tambah_baru() {
      if (document.getElementById('tgl_kenaikan').value == "") {
          document.getElementById('tgl_kenaikan').focus();
      } else if(document.getElementById('nama_karyawan').value == "") {
          document.getElementById('nama_karyawan').focus();
      } else {
          $.ajax({
              type: 'POST',
              data: 'tgl_kenaikan=' + document.getElementById("tgl_kenaikan").value + '&nama_karyawan=' +  document.getElementById('nama_karyawan').value + '&jenis_kenaikan_reguler=' +  document.getElementById('jenis_kenaikan_reguler').value,
              url: '<?= base_url() ?>kenaikan_reguler/tambah_kenaikan_reguler',
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
      url: '<?= base_url() ?>kenaikan_reguler/edit_id',
      method: 'post',
      data: "target=kenaikan_reguler_karyawan&id=" + id,
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
      url: '<?= base_url() ?>kenaikan_reguler/hapus',
      method: 'post',
      data: "target=kenaikan_reguler_karyawan&id=" + id,
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