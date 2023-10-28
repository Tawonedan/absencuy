<div class="panel-header bg-dark-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Administrator</h2>
								<h5 class="text-white op-7 mb-2">Selamat Datang, <b class="text-warning"><?=$data['nama_lengkap']; ?></b> | Aplikasi Absensi Siswa</h5>
							</div>
							<!-- <div class="ml-md-auto py-2 py-md-0">
								<a href="#" class="btn btn-white btn-border btn-round mr-2">Manage</a>
								<a href="#" class="btn btn-secondary btn-round">Add Customer</a>
							</div> -->
						</div>
					</div>
				</div>
<div class="page-inner mt--5">
					<div class="row mt--2">
						<div class="col-md-6">
							<div class="card full-height">
								<div class="card-body">
									<div class="card-title">
										<center>
											<img src="data:image/jpeg;base64,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" width="100">
											<br>
											<b>SMK 17 Agustus</b>
										</center>
									</div>
									<div class="card-category">
										<center>
										Jl. Nginden Semolo No.44, Nginden Jangkungan, Kec. Sukolilo, Surabaya, Jawa Timur 60118
										</center>
									</div>
								
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="card">
							<!-- 	<div class="card-header">
									<h4 class="card-title">Nav Pills With Icon (Horizontal Tabs)</h4>
								</div> -->
								<div class="card-body">

									<div class="row">

											<div class="col-sm-6 col-md-6">
												<div class="card card-stats card-secondary card-round">
													<div class="card-body">
														<div class="row">
															<div class="col-5">
																<div class="icon-big text-center">
																	<i class="flaticon-users"></i>
																</div>
															</div>
															<div class="col-7 col-stats">
																<div class="numbers">
																	<p class="card-category">Total Siswa</p>
																	<h4 class="card-title"><?php echo $jumlahSiswa; ?></h4>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="col-sm-6 col-md-6">
												<div class="card card-stats card-default card-round">
													<div class="card-body">
														<div class="row">
															<div class="col-5">
																<div class="icon-big text-center">
																	<i class="fas fa-user-tie"></i>
																</div>
															</div>
															<div class="col-7 col-stats">
																<div class="numbers">
																	<p class="card-category">Total Guru</p>
																	<h4 class="card-title"><?php echo $jumlahGuru; ?></h4>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>




									</div>
										



									
									
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">
						
						<!-- <div class="col-md-8">
							<div class="card">
								<div class="card-body">
									<div class="card-title fw-mediumbold">Suggested People</div>
									<div class="card-list">
										<div class="item-list">
											<div class="avatar">
												<img src="../assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle">
											</div>
											<div class="info-user ml-3">
												<div class="username">Jimmy Denis</div>
												<div class="status">Graphic Designer</div>
											</div>
											<button class="btn btn-icon btn-primary btn-round btn-xs">
												<i class="fa fa-plus"></i>
											</button>
											
										</div>
										<div class="item-list">
											<div class="avatar">
												<img src="../assets/img/chadengle.jpg" alt="..." class="avatar-img rounded-circle">
											</div>
											<div class="info-user ml-3">
												<div class="username">Chad</div>
												<div class="status">CEO Zeleaf</div>
											</div>
											<button class="btn btn-icon btn-primary btn-round btn-xs">
												<i class="fa fa-plus"></i>
											</button>
										</div>
										<div class="item-list">
											<div class="avatar">
												<img src="../assets/img/talha.jpg" alt="..." class="avatar-img rounded-circle">
											</div>
											<div class="info-user ml-3">
												<div class="username">Talha</div>
												<div class="status">Front End Designer</div>
											</div>
											<button class="btn btn-icon btn-primary btn-round btn-xs">
												<i class="fa fa-plus"></i>
											</button>
										</div>
										<div class="item-list">
											<div class="avatar">
												<img src="../assets/img/mlane.jpg" alt="..." class="avatar-img rounded-circle">
											</div>
											<div class="info-user ml-3">
												<div class="username">John Doe</div>
												<div class="status">Back End Developer</div>
											</div>
											<button class="btn btn-icon btn-primary btn-round btn-xs">
												<i class="fa fa-plus"></i>
											</button>
										</div>
										<div class="item-list">
											<div class="avatar">
												<img src="../assets/img/talha.jpg" alt="..." class="avatar-img rounded-circle">
											</div>
											<div class="info-user ml-3">
												<div class="username">Talha</div>
												<div class="status">Front End Designer</div>
											</div>
											<button class="btn btn-icon btn-primary btn-round btn-xs">
												<i class="fa fa-plus"></i>
											</button>
										</div>
										<div class="item-list">
											<div class="avatar">
												<img src="../assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle">
											</div>
											<div class="info-user ml-3">
												<div class="username">Jimmy Denis</div>
												<div class="status">Graphic Designer</div>
											</div>
											<button class="btn btn-icon btn-primary btn-round btn-xs">
												<i class="fa fa-plus"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div> -->
						
					</div>
					
				</div>