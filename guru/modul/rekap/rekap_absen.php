<?php 
// tampilkan data mengajar
$kelasMengajar = mysqli_query($con,"SELECT * FROM tb_mengajar 

INNER JOIN tb_master_mapel ON tb_mengajar.id_mapel=tb_master_mapel.id_mapel
INNER JOIN tb_mkelas ON tb_mengajar.id_mkelas=tb_mkelas.id_mkelas

INNER JOIN tb_semester ON tb_mengajar.id_semester=tb_semester.id_semester
INNER JOIN tb_thajaran ON tb_mengajar.id_thajaran=tb_thajaran.id_thajaran
");

foreach ($kelasMengajar as $d) 

	?>

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
<a href="#">KELAS (<?=strtoupper($d['id_mkelas']) ?> )</a>
</li>
<li class="separator">
<i class="flaticon-right-arrow"></i>
</li>
<li class="nav-item">
<a href="#"><?=strtoupper($d['mapel']) ?></a>
</li>
</ul>
</div>
					<div class="row">
					<div class="col-md-12 mt-3">	
					<div class="alert alert-success alert-dismissible" role="alert">
				<strong>REKAP SEMESTER (1)</strong> 
				</div>
				
				</a>

				<div class="alert alert-primary alert-dismissible " role="alert" type="button" data-toggle="collapse" data-target="#collapseRekap">
					<strong>REKAP BULAN (Oktober) </strong> 
					<div class="collapse" id="collapseRekap">

							<div class="card">
								<div class="card-body">

									<table class="table table-head-bg-primary table-xs">
										<thead>
											<tr>
												<th scope="col">No.</th>
												<th scope="col">Hari</th>
												<th scope="col">Nama Siswa</th>	
												<th scope="col">Jam</th>
												<th scope="col">Status</th>
											</tr>
										</thead>
										<tbody>

										<?php 
                            $no=1;
                              $log = mysqli_query($con,"SELECT * FROM _logabsensi 
                            INNER JOIN tb_mengajar ON _logabsensi.id_mengajar=tb_mengajar.id_mengajar
                            INNER JOIN tb_master_mapel ON _logabsensi.id_siswa=tb_master_mapel.id_mapel
							INNER JOIN tb_siswa ON tb_mengajar.id_mkelas=tb_siswa.id_mkelas
							INNER JOIN tb_guru ON tb_mengajar.id_guru=tb_guru.id_guru
							
							WHERE _logabsensi.tgl_absen BETWEEN '2023-10-01' AND '2023-10-31';
                            "
													// -- $mapel = mysqli_query($con,"SELECT * FROM tb_mengajar 
													// INNER JOIN tb_guru ON tb_mengajar.id_guru=tb_guru.id_guru
													// INNER JOIN tb_master_mapel ON tb_mengajar.id_mapel=tb_master_mapel.id_mapel
													// INNER JOIN tb_mkelas ON tb_mengajar.id_mkelas=tb_mkelas.id_mkelas
						
													// INNER JOIN tb_semester ON tb_mengajar.id_semester=tb_semester.id_semester
													// INNER JOIN tb_thajaran ON tb_mengajar.id_thajaran=tb_thajaran.id_thajaran 
													
							
						
						);
                              foreach ($log as $d) {
                             ?>

											<tr>
											<th scope="row"><b><?=$no++; ?>.</b></th>
												<td>
												<b><?=$d['hari'] ?></b><br>
													<code><?=$d['tgl_absen'] ?></code>
												</td>
												<td><?=$d['nama_siswa'] ?></td>
												<td>
													<b><?=$d['jamke'] ?></b><br>
													<code><?=$d['nama_guru'] ?></code>
												</td>
												<td><?=$d['ket'] ?></td>
											</tr>
											<?php } ?>
											<!-- <tr>
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
											</tr> -->
										</tbody>
									</table>				
								</div>
							</div>
						</div>
					</div>
				</a>





								<!-- </div>
								
								 
							</div> -->
						</div>
						
					</div>
					<center>
					<a href="javascript:history.back()" class="btn btn-default"><i class="fas fa-arrow-circle-left"></i> Kembali</a>
				</center>
					
				</div>
				