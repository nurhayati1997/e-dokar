
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Row-->
								<div class="row">
									<div class="col-xl-6">
										<!--begin::Mixed Widget 1-->
										<div class="card card-custom bg-gray-100 gutter-b card-stretch">
											<!--begin::Header-->
											<div class="card-header border-0 bg-danger py-5">
												<h3 class="card-title font-weight-bolder text-white">Jumlah Karyawan Berdasarkan Status PNS</h3>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body p-0 position-relative overflow-hidden">
												<!--begin::Chart-->
												<div class="card-rounded-bottom bg-danger" style="height: 100px"></div>
												<!--end::Chart-->
												<!--begin::Stats-->
												<div class="card-spacer mt-n25">
													<!--begin::Row-->
													<div class="row m-0">
														<div class="col bg-light-warning px-6 py-8 rounded-xl mr-7 mb-7">
															<span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
																<!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/Media/Equalizer.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5" />
																		<rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />
																		<rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />
																		<rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
																<a href="#" class="text-warning font-weight-bold font-size-h6">ASN : <?php echo $total_pns; ?></a>
															
															<div class="card-toolbar">
																<div class="dropdown dropdown-inline">
																	<?php if ($this->session->userdata("rule") == 1) { ?>	
																		<a href="dashboard/pns/" target="_blank" class="btn btn-white btn-sm font-weight-bolder px-5">Export</a>
																	<?php } ?>
																</div>
															</div>
														</div>
														<div class="col bg-light-primary px-6 py-8 rounded-xl mb-7">
															<span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
																<!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/Communication/Add-user.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<polygon points="0 0 24 0 24 24 0 24" />
																		<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																		<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
															<a href="#" class="text-primary font-weight-bold font-size-h6 mt-2">CPNS : <?php echo $total_cpns; ?></a>

															<div class="card-toolbar">
																<div class="dropdown dropdown-inline">
																	<?php if ($this->session->userdata("rule") == 1) { ?>	
																		<a href="dashboard/cpns/" target="_blank" class="btn btn-white btn-sm font-weight-bolder px-5">Export</a>
																	<?php } ?>
																</div>
															</div>
														</div>
													</div>
													<!--end::Row-->

													<!--begin::Row-->
													<div class="row m-0">
														<div class="col bg-light-danger px-6 py-8 rounded-xl mr-7">
															<span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
																<!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/Design/Layers.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<polygon points="0 0 24 0 24 24 0 24" />
																		<path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
																		<path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
															<a href="#" class="text-danger font-weight-bold font-size-h6 mt-2">PPPK : <?php echo $total_pppk; ?></a>
															
															<div class="card-toolbar">
																<div class="dropdown dropdown-inline">
																	<?php if ($this->session->userdata("rule") == 1) { ?>	
																		<a href="dashboard/pppk/" target="_blank" class="btn btn-white btn-sm font-weight-bolder px-5">Export</a>
																	<?php } ?>
																</div>
															</div>
														</div>
														
													</div>
													<!--end::Row-->

												</div>
												<!--end::Stats-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Mixed Widget 1-->
									</div>
									<div class="col-xl-6">
										<!--begin::Mixed Widget 1-->
										<div class="card card-custom bg-gray-100 gutter-b card-stretch">
											<!--begin::Header-->
											<div class="card-header border-0 bg-success py-5">
												<h3 class="card-title font-weight-bolder text-white">Jumlah Karyawan THL dan Kontrak</h3>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body p-0 position-relative overflow-hidden">
												<!--begin::Chart-->
												<div class="card-rounded-bottom bg-success" style="height: 100px"></div>
												<!--end::Chart-->
												<!--begin::Stats-->
												<div class="card-spacer mt-n25">
													<!--begin::Row-->
													<div class="row m-0">
														<div class="col bg-light-warning px-6 py-8 rounded-xl mr-7 mb-7">
															<span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
																<!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/Media/Equalizer.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5" />
																		<rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />
																		<rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />
																		<rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
																<a href="#" class="text-warning font-weight-bold font-size-h6">THL : <?php echo $total_thl; ?></a>
															
															<div class="card-toolbar">
																<div class="dropdown dropdown-inline">
																	<?php if ($this->session->userdata("rule") == 1) { ?>	
																		<a href="dashboard/thl/" target="_blank" class="btn btn-white btn-sm font-weight-bolder px-5">Export</a>
																	<?php } ?>
																</div>
															</div>
														</div>
														<div class="col bg-light-primary px-6 py-8 rounded-xl mb-7">
															<span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
																<!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/Communication/Add-user.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<polygon points="0 0 24 0 24 24 0 24" />
																		<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																		<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
															<a href="#" class="text-primary font-weight-bold font-size-h6 mt-2">Kontrak BLUD : <?php echo $total_kontrak; ?></a>

															<div class="card-toolbar">
																<div class="dropdown dropdown-inline">
																	<?php if ($this->session->userdata("rule") == 1) { ?>	
																		<a href="dashboard/kontrak/" target="_blank" class="btn btn-white btn-sm font-weight-bolder px-5">Export</a>
																	<?php } ?>
																</div>
															</div>
														</div>
													</div>
													<!--end::Row-->

												</div>
												<!--end::Stats-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Mixed Widget 1-->
									</div>
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<div class="row">
									<div class="col-xl-6">
										<!--begin::Engage Widget 1-->
										<div class="card card-custom card-stretch gutter-b">
											<div class="card-body d-flex p-0">
												<div class="flex-grow-1 p-8 card-rounded bgi-no-repeat d-flex align-items-center" style="background-color: #FFF4DE; background-position: left bottom; background-size: auto 100%; background-image: url(https://preview.keenthemes.com/metronic/theme/html/demo2/dist/assets/media/svg/humans/custom-2.svg)">
													<div class="row">
														<div class="col-12 col-xl-5"></div>
														<div class="col-12 col-xl-7">
															<h2 class="text-danger font-weight-bolder">Jumlah Karyawan Laki- Laki : <?php echo $total_laki; ?></h2>
															<a href="dashboard/laki/" target="_blank" class="btn btn-danger font-weight-bold py-2 px-6">Export</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!--end::Engage Widget 1-->
									</div>
									
									<div class="col-xl-6">
										<!--begin::Engage Widget 7-->
										<div class="card card-custom card-stretch gutter-b">
											<div class="card-body d-flex p-0">
												<div class="flex-grow-1 p-12 card-rounded bgi-no-repeat d-flex flex-column justify-content-center align-items-start" style="background-color: #FFF4DE; background-position: right bottom; background-size: auto 100%; background-image: url(https://preview.keenthemes.com/metronic/theme/html/demo2/dist/assets/media/svg/humans/custom-8.svg)">
													
													<h2 class="text-danger font-weight-bolder m-0">Jumlah Karyawan <br>Perempuan : <?php echo $total_perempuan; ?></h2>
													<a href="dashboard/perempuan/" target="_blank" class="btn btn-danger font-weight-bold py-2 px-6">Export</a> 
												</div>
											</div>
										</div>
										<!--end::Engage Widget 7-->
									</div>
								</div>
								<!--end::Row-->

								<!--begin::Row-->
								<div class="row">
									<div class="col-xl-4">
										<!--begin::Mixed Widget 2-->
										<div class="card card-custom bg-gray-100 gutter-b card-stretch">
											<!--begin::Header-->
											<div class="card-header border-0 bg-primary py-5">
												<h3 class="card-title font-weight-bolder text-white">Jumlah Karyawan <br> Tenaga Medis & Tenaga Keperawatan</h3>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body p-0 position-relative overflow-hidden">
												<!--begin::Chart-->
												<div class="card-rounded-bottom bg-primary" style="height: 100px"></div>
												<!--end::Chart-->
												<!--begin::Stats-->
												<div class="card-spacer mt-n25">
													<!--begin::Row-->
													<div class="row m-0">
														<div class="col bg-white px-6 py-8 rounded-xl mr-7">
															<span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
																<!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/Design/Layers.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<polygon points="0 0 24 0 24 24 0 24" />
																		<path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
																		<path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
															<a href="#" class="text-danger font-weight-bold font-size-h6 mt-2">Tenaga Medis : <?php echo $total_tenaga_medis; ?></a>
															<div class="card-toolbar">
																<div class="dropdown dropdown-inline">
																	<?php if ($this->session->userdata("rule") == 1) { ?>	
																		<a href="dashboard/tenaga_medis/" target="_blank" class="btn btn-white btn-sm font-weight-bolder px-5">Export</a>
																	<?php } ?>
																</div>
															</div>
														</div>
														<div class="col bg-white px-6 py-8 rounded-xl">
															<span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
																<!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/Communication/Urgent-mail.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z" fill="#000000" opacity="0.3" />
																		<path d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z" fill="#000000" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
															<a href="#" class="text-success font-weight-bold font-size-h6 mt-2">Tenaga Keperawatan :  <?php echo $total_tenaga_keperawatan; ?></a>
															
															<div class="card-toolbar">
																<div class="dropdown dropdown-inline">
																	<?php if ($this->session->userdata("rule") == 1) { ?>	
																		<a href="dashboard/tenaga_keperawatan/" target="_blank" class="btn btn-white btn-sm font-weight-bolder px-5">Export</a>
																	<?php } ?>
																</div>
															</div>
														</div>
													</div>
													<!--end::Row-->
												</div>
												<!--end::Stats-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Mixed Widget 2-->
									</div>
									<div class="col-xl-4">
										<!--begin::Mixed Widget 3-->
										<div class="card card-custom bg-gray-100 gutter-b card-stretch">
											<!--begin::Header-->
											<div class="card-header border-0 bg-dark py-5">
												<h3 class="card-title font-weight-bolder text-white">Jumlah Pejabat Struktural</h3>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body p-0 position-relative overflow-hidden">
												<!--begin::Chart-->
												<div class="card-rounded-bottom bg-dark" style="height: 132px"></div>
												<!--end::Chart-->
												<!--begin::Stats-->
												<div class="card-spacer mt-n25">
													<!--begin::Row-->
													<div class="row m-0">
														<div class="col bg-white px-6 py-8 rounded-xl mb-7">
															<span class="svg-icon svg-icon-3x svg-icon-gray-500 d-block my-2">
																<!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/Communication/Add-user.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<polygon points="0 0 24 0 24 24 0 24" />
																		<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																		<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
															<a href="#" class="text-dark font-weight-bold font-size-h6 mt-2">Pejabat Struktural : <?php echo $total_pejabat_struktural; ?></a>
																														
															<div class="card-toolbar">
																<div class="dropdown dropdown-inline">
																	<?php if ($this->session->userdata("rule") == 1) { ?>	
																		<a href="dashboard/pejabat_struktural/" target="_blank" class="btn btn-white btn-sm font-weight-bolder px-5">Export</a>
																	<?php } ?>
																</div>
															</div>
														</div>
													</div>
													<!--end::Row-->
												</div>
												<!--end::Stats-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Mixed Widget 3-->
									</div>
									<div class="col-xl-4">
										<!--begin::Mixed Widget 2-->
										<div class="card card-custom bg-gray-100 gutter-b card-stretch">
											<!--begin::Header-->
											<div class="card-header border-0 bg-primary py-5">
												<h3 class="card-title font-weight-bolder text-white">Jumlah Karyawan <br> Tenaga Kesehatan Lainnya & Tenaga Umum / Non Medis </h3>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body p-0 position-relative overflow-hidden">
												<!--begin::Chart-->
												<div id="kt_mixed_widget_2_chart" class="card-rounded-bottom bg-primary" style="height: 100px"></div>
												<!--end::Chart-->
												<!--begin::Stats-->
												<div class="card-spacer mt-n25">
													<!--begin::Row-->
													<div class="row m-0">
														<div class="col bg-white px-6 py-8 rounded-xl mr-7">
															<span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
																<!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/Design/Layers.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<polygon points="0 0 24 0 24 24 0 24" />
																		<path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
																		<path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
															<a href="#" class="text-danger font-weight-bold font-size-h6 mt-2">Tenaga Kesehatan Lainnya : <?php echo $total_tenaga_kesehatan_lainnya; ?></a>
															<div class="card-toolbar">
																<div class="dropdown dropdown-inline">
																	<?php if ($this->session->userdata("rule") == 1) { ?>	
																		<a href="dashboard/tenaga_kesehatan_lainnya/" target="_blank" class="btn btn-white btn-sm font-weight-bolder px-5">Export</a>
																	<?php } ?>
																</div>
															</div>
														</div>
														<div class="col bg-white px-6 py-8 rounded-xl">
															<span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
																<!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/Communication/Urgent-mail.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z" fill="#000000" opacity="0.3" />
																		<path d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z" fill="#000000" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
															<a href="#" class="text-success font-weight-bold font-size-h6 mt-2">Tenaga Umum / Non Medis :  <?php echo $total_tenaga_umum; ?></a>
															
															<div class="card-toolbar">
																<div class="dropdown dropdown-inline">
																	<?php if ($this->session->userdata("rule") == 1) { ?>	
																		<a href="dashboard/tenaga_umum/" target="_blank" class="btn btn-white btn-sm font-weight-bolder px-5">Export</a>
																	<?php } ?>
																</div>
															</div>
														</div>
													</div>
													<!--end::Row-->
												</div>
												<!--end::Stats-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Mixed Widget 2-->
									</div>
								</div>
								<!--end::Row-->

								
								<!--Begin::Row-->
								<div class="row">
									<div class="col-xl-3">
										<!--begin::Stats Widget 29-->
										<div class="card card-custom bgi-no-repeat card-stretch gutter-b" style="background-position: right top; background-size: 30% auto; background-image: url(https://preview.keenthemes.com/metronic/theme/html/demo2/dist/assets/media/svg/shapes/abstract-1.svg)">
											<!--begin::Body-->
											<div class="card-body">
												<span class="svg-icon svg-icon-2x svg-icon-info">
													<!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/Communication/Mail-opened.svg-->
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24" />
															<path d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M7.5,5 C7.22385763,5 7,5.22385763 7,5.5 C7,5.77614237 7.22385763,6 7.5,6 L13.5,6 C13.7761424,6 14,5.77614237 14,5.5 C14,5.22385763 13.7761424,5 13.5,5 L7.5,5 Z M7.5,7 C7.22385763,7 7,7.22385763 7,7.5 C7,7.77614237 7.22385763,8 7.5,8 L10.5,8 C10.7761424,8 11,7.77614237 11,7.5 C11,7.22385763 10.7761424,7 10.5,7 L7.5,7 Z" fill="#000000" opacity="0.3" />
															<path d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z" fill="#000000" />
														</g>
													</svg>
													<!--end::Svg Icon-->
												</span>
												<span class="card-title font-weight-bolder text-dark-75 font-size-h2 mb-0 mt-6 d-block"><?php echo $total_fungsional; ?></span>
												<span class="font-weight-bold text-muted font-size-sm">Jabatan Fungsional</span>
												<a href="dashboard/fungsional/" target="_blank" class="btn btn-danger font-weight-bold py-2 px-6">Export</a>
											</div>
											<!--end::Body-->
										</div>
										<!--end::Stats Widget 29-->
									</div>
									<div class="col-xl-3">
										<!--begin::Stats Widget 30-->
										<div class="card card-custom bg-info card-stretch gutter-b">
											<!--begin::Body-->
											<div class="card-body">
												<span class="svg-icon svg-icon-2x svg-icon-white">
													<!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/Communication/Group.svg-->
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<polygon points="0 0 24 0 24 24 0 24" />
															<path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
															<path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
														</g>
													</svg>
													<!--end::Svg Icon-->
												</span>
												<span class="card-title font-weight-bolder text-white font-size-h2 mb-0 mt-6 d-block"><?php echo $total_struktural; ?></span>
												<span class="font-weight-bold text-white font-size-sm">Jabatan Struktural</span>
												<a href="dashboard/struktural/" target="_blank" class="btn btn-danger font-weight-bold py-2 px-6">Export</a>
											</div>
											<!--end::Body-->
										</div>
										<!--end::Stats Widget 30-->
									</div>
									<div class="col-xl-3">
										<!--begin::Stats Widget 31-->
										<div class="card card-custom bg-danger card-stretch gutter-b">
											<!--begin::Body-->
											<div class="card-body">
												<span class="svg-icon svg-icon-2x svg-icon-white">
													<!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/Media/Equalizer.svg-->
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24" />
															<rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5" />
															<rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />
															<rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />
															<rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />
														</g>
													</svg>
													<!--end::Svg Icon-->
												</span>
												<span class="card-title font-weight-bolder text-white font-size-h2 mb-0 mt-6 d-block"><?php echo $total_profesi; ?></span>
												<span class="font-weight-bold text-white font-size-sm">Jabatan Profesi</span>
												<br> <a href="dashboard/profesi/" target="_blank" class="btn btn-dark font-weight-bold py-2 px-6">Export</a>
											</div>
											<!--end::Body-->
										</div>
										<!--end::Stats Widget 31-->
									</div>
									<div class="col-xl-3">
										<!--begin::Stats Widget 32-->
										<div class="card card-custom bg-dark card-stretch gutter-b">
											<!--begin::Body-->
											<div class="card-body">
												<span class="svg-icon svg-icon-2x svg-icon-white">
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
												<span class="card-title font-weight-bolder text-white font-size-h2 mb-0 mt-6 text-hover-primary d-block"><?php echo $total_bukan_pns; ?></span>
												<span class="font-weight-bold text-white font-size-sm">Bukan PNS</span>
												<br><a href="dashboard/bukan_pns/" target="_blank" class="btn btn-danger font-weight-bold py-2 px-6">Export</a>
											</div>
											<!--end::Body-->
										</div>
										<!--end::Stats Widget 32-->
									</div>
								</div>
								<!--End::Row-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->