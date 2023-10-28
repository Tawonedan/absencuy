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
						
						<div class="col-md-12 col-xs-12 mt-3">	

				<div class="alert alert-success alert-dismissible" role="alert">
				<strong>REKAP SEMESTER (1)</strong> 
				</div>
				</a>
							


									<div class="alert alert-primary alert-dismissible" role="alert">
									<strong>REKAP BULAN (Oktober) </strong> 
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
				