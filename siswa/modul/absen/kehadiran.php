
<div class="card">
	<div class="card-body">

		<h4 class="card-title">Kehadiran | <b style="text-transform: uppercase;"><code> <?=$data['nama_siswa'] ?> </code></b></h4>
		<hr>
		<div class="row">



			 	<div class="col-xl-12">
				<div class="card text-left">
					<div class="card-body">
						<!-- Senin, 10-01-2019 <b>Hadir</b> -->
						<b class="text-primary" style="text-transform: uppercase;">BULAN OKTOBER</b>
									<!-- <hr> -->
						<table cellpadding="5" width="100%">
							<tr>
								<td>Hadir</td>
								<td>:</td>
								<td>
									<?php 
								$hadir = mysqli_fetch_array(mysqli_query($con,"SELECT COUNT(ket) AS hadir FROM _logabsensi WHERE id_siswa='$data[id_siswa]' and ket='H' and MONTH(tgl_absen)='$bulan' "));
								echo $hadir['hadir'];
								?>
								</td>
							</tr>
							<tr>
								<td>Sakit</td>
								<td>:</td>
								<td>
								<?php 
								$sakit = mysqli_fetch_array(mysqli_query($con,"SELECT COUNT(ket) AS sakit FROM _logabsensi WHERE id_siswa='$data[id_siswa]' and ket='S' and MONTH(tgl_absen)='$bulan' "));
								echo $sakit['sakit'];
								?>
								</td>
							</tr>
							<tr>
								<td>Izin</td>
								<td>:</td>
								<td>
									<?php 
								$izin = mysqli_fetch_array(mysqli_query($con,"SELECT COUNT(ket) AS izin FROM _logabsensi WHERE id_siswa='$data[id_siswa]' and ket='I' and MONTH(tgl_absen)='$bulan' "));
								echo $izin['izin'];
								?>
								</td>
							</tr>
							<tr>
								<td>Absen</td>
								<td>:</td>
								<td>
5
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>



			








	

		</div>
	</div>
</div>

	<a href="javascript:history.back()" class="btn btn-default btn-block"><i class="fas fa-arrow-circle-left"></i> Kembali</a>