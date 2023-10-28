											<?php 
											$no=1;
											foreach ($kelasMengajar as $mp) {?>
											<tr>
												<td><?=$no++; ?>.</td>
												<td><?=$mp['kode_pelajaran']; ?></td>
												<td>
													<b><?=$mp['mapel']; ?></b><br>
													<code><?=$mp['nama_guru']; ?></code>
												</td>
												<td>
												<a href="?page=rekap&act=rekap-perbulan&pelajaran=<?=$mp[id_mengajar] ?>&kelas=<?=$_GET[kelas] ?>" class="btn btn-default">
												<span class="btn-label">
												<i class="fas fa-clipboard"></i>
												</span>
												Rekap Absen
												</a>
												</td>
											</tr>
										<?php } ?>


										<a href="?page=rekap&act=rekap-perbulan&pelajaran=<?=$mp[id_mengajar] ?>&kelas=<?=$_GET[kelas] ?>" class="btn btn-default">






										<?php 
									// tampilkan data absen setiap bulan, berdasarkan tahun ajaran yg aktif
									$qry = mysqli_query($con,"SELECT * FROM _logabsensi
									INNER JOIN tb_mengajar ON _logabsensi.id_mengajar=tb_mengajar.id_mengajar
									INNER JOIN tb_thajaran ON tb_mengajar.id_thajaran=tb_thajaran.id_thajaran
									INNER JOIN tb_semester ON tb_mengajar.id_semester=tb_semester.id_semester
									WHERE _logabsensi.id_mengajar='$_GET[pelajaran]' and tb_thajaran.status=1 and tb_semester.status=1
									GROUP BY MONTH(tgl_absen) ORDER BY MONTH(tgl_absen) DESC
									");

									foreach ($qry as $bulan) { ?>
									<?php 
									$bulan = date('m',strtotime($bulan['tgl_absen']));
									?>

									<a target="_blank" href="modul/rekap/rekap_bulan.php?pelajaran=<?=$_GET[pelajaran] ?>&bulan=<?=$bulan;?>&kelas=<?=$d['id_mkelas'] ?>" style="text-decoration: none;" class="text-primary">
									<div class="alert alert-primary alert-dismissible" role="alert">
									<strong>REKAP BULAN (<?= strtoupper(namaBulan($bulan)) ?> <?= strtoupper(date('Y')) ?>) </strong> 
									</div>
									</a>

								<?php } ?>








								<?php 
			// tampilkan data absen setiap bulan, berdasarkan tahun ajaran yg aktif
			$qry = mysqli_query($con,"SELECT * FROM _logabsensi
				INNER JOIN tb_mengajar ON _logabsensi.id_mengajar=tb_mengajar.id_mengajar
				INNER JOIN tb_thajaran ON tb_mengajar.id_thajaran=tb_thajaran.id_thajaran
				INNER JOIN tb_semester ON tb_mengajar.id_semester=tb_semester.id_semester
				WHERE _logabsensi.id_siswa='$data[id_siswa]' and tb_thajaran.status=1 and tb_semester.status=1
				GROUP BY MONTH(tgl_absen) ORDER BY MONTH(tgl_absen) DESC
			 ");


			 foreach ($qry as $bulan) { ?>
			 	<?php 
			 	$bulan = date('m',strtotime($bulan['tgl_absen']));


			 	 ?>

<?php 
								$alfa = mysqli_fetch_array(mysqli_query($con,"SELECT COUNT(ket) AS alfa FROM _logabsensi WHERE id_siswa='$data[id_siswa]' and ket='A' and MONTH(tgl_absen)='$bulan' "));
								echo $alfa['alfa'];
								?>

<?php 
								$izin = mysqli_fetch_array(mysqli_query($con,"SELECT COUNT(ket) AS izin FROM _logabsensi WHERE id_siswa='$data[id_siswa]' and ket='I' and MONTH(tgl_absen)='$bulan' "));
								echo $izin['izin'];
								?>

<?php 
								$sakit = mysqli_fetch_array(mysqli_query($con,"SELECT COUNT(ket) AS sakit FROM _logabsensi WHERE id_siswa='$data[id_siswa]' and ket='S' and MONTH(tgl_absen)='$bulan' "));
								echo $sakit['sakit'];
								?>

<?php 
								$hadir = mysqli_fetch_array(mysqli_query($con,"SELECT COUNT(ket) AS hadir FROM _logabsensi WHERE id_siswa='$data[id_siswa]' and ket='H' and MONTH(tgl_absen)='$bulan' "));
								echo $hadir['hadir'];
								?>


			 <?php } ?>

			 <?=namaBulan($bulan); ?> <?= date('Y') ?>
