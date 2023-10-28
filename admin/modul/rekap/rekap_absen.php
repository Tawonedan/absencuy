

<div class="page-inner">

	<div class="page-header">
<h4 class="page-title">Rekap Absen</h4> 
<ul class="breadcrumbs">
<li class="nav-home">
<a href="#">
<i class="flaticon-home"></i>
</a>
</li>
<li class="separator">
<i class="flaticon-right-arrow"></i>
</li>
<li class="nav-item">
<a href="#">KELAS (<?=strtoupper($d['nama_kelas']) ?> )</a>
</li>

</ul>
</div>

					
					<div class="row">
						
						<div class="col-md-12 col-xs-12">	
										

							<div class="card">
								<div class="card-body">

									<table class="table table-head-bg-danger table-xs">
										<thead>
											<tr>
												<th scope="col">No.</th>
												<th scope="col">Kode Pelajaran</th>
												<th scope="col">Mata Pelajaran</th>
												<th scope="col">Absensi</th>
											</tr>
										</thead>
										<tbody>

										<?php 
                            $no=1;
                              $mapel = mysqli_query($con,"SELECT * FROM tb_mengajar 
                            INNER JOIN tb_guru ON tb_mengajar.id_guru=tb_guru.id_guru
                            INNER JOIN tb_master_mapel ON tb_mengajar.id_mapel=tb_master_mapel.id_mapel
                            INNER JOIN tb_mkelas ON tb_mengajar.id_mkelas=tb_mkelas.id_mkelas

                            INNER JOIN tb_semester ON tb_mengajar.id_semester=tb_semester.id_semester
                            INNER JOIN tb_thajaran ON tb_mengajar.id_thajaran=tb_thajaran.id_thajaran 
                               ");
                              foreach ($mapel as $d) {
                             ?>

											<tr>
											<th scope="row"><b><?=$no++; ?>.</b></th>
												<td><?=$d['kode_pelajaran'] ?></td>
												<td>
													<b><?=$d['mapel'] ?></b><br>
													<code><?=$d['nama_guru'] ?></code>
												</td>
												<td>
												<span class="btn-label">
												<i class="fas fa-clipboard"></i>
												</span>
												Rekap Absen
												
												</td>
											</tr>
											<?php } ?>
											<tr>
												<td>1.</td>
												<td>MP-1698209010</td>
												<td>
													<b>Ilmu Penggenjotan Akane</b><br>
													<code>Dosen</code>
												</td>
												<td>
												<span class="btn-label">
												<i class="fas fa-clipboard"></i>
												</span>
												Rekap Absen
												
												</td>
											</tr>
										</tbody>
									</table>
								
								</div>
								 
							</div>
						</div>
						
					</div>
					
				</div>