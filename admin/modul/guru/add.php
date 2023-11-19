<div class="page-inner">
          <div class="page-header">
            <h4 class="page-title">Guru</h4>
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
                <a href="#">Data Guru</a>
              </li>
              <li class="separator">
                <i class="flaticon-right-arrow"></i>
              </li>
              <li class="nav-item">
                <a href="#">Tambah Guru</a>
              </li>
            </ul>
          </div>
          <div class="row">

                <div class="col-lg-8">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Form Entry Guru</h3>
                    </div>
                    <div class="card-body">
						<!-- <form action="" method="post" >
							<div class="form-group">
								<label>NIP/NUPTK</label>
								<input name="nip" type="text" class="form-control" placeholder="NIP/NUPTK">								
							</div>

							<div class="form-group">
								<label>Nama Guru</label>
								<input name="nama" type="text" class="form-control" placeholder="Nama dan Gelar">								
							</div>

							<div class="form-group">
								<label>Email</label>
								<input name="email" type="text" class="form-control" placeholder="Email">
							</div>

							<div class="form-group">
								<label>Password</label>
								<input name="password" type="password" class="form-control" placeholder="password">
							</div>

              <div class="form-group">
								<label>Status</label>
								<input name="status" type="text" class="form-control" placeholder="status">
							</div>

							<div class="form-group">
								<p>
									<img src="../assets/img/user/<?=$data['foto']; ?>" class="img-fluid rounded-circle kotak" style="height: 65px; width: 65px;">
								</p>
								<label>Foto</label>
								<input type="file" name="foto">
							</div>

							<div class="form-group">
								<button name="save" type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
							</div>
						</form> -->

            <form action="" method="post" class="form-horizontal">
                     <div class="form-group">
                        <label>nip</label>
                        <input name="nip" type="text"  placeholder="nip" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>email</label>
                        <input name="email" type="text" placeholder="nama guru" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>nama guru</label>
                        <input name="nama" type="text" placeholder="nama guru" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>password</label>
                        <input name="password" type="password" placeholder="pass" class="form-control">
                    </div>
                    <div class="form-group">
								<p>
									<img src="../assets/img/user/<?=$data['foto']; ?>" class="img-fluid rounded-circle kotak" style="height: 65px; width: 65px;">
								</p>
								<label>Foto</label>
								<input type="file" name="foto">
							</div>
                   
                    <div class="form-group">                     
                            <button name="save" class="btn btn-primary" type="submit">Save</button>
                    </div>
                </form>


                    <!-- $save= mysqli_query($con,"INSERT INTO `tb_guru` (`id_guru`, `nip`, `nama_guru`, `email`, `password`, `foto`, `status`) VALUES (NULL, '$_POST[nip]','$_POST[nama]','$_POST[email]','$_POST[password]',NULL,'$_POST[status]') ");
</div> -->
</div>
</div>
</div>
</div>

            <?php 

if (isset($_POST['save'])) {

    $nip = $_POST['nip'];
    $nama_guru = $_POST['nama'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']);

    if (empty($foto)) {
        $foto = "default.jpg";
    }
    
      $save= mysqli_query($con,"INSERT INTO `tb_guru` (`id_guru`, `nip`, `nama_guru`, `email`, `password`, `foto`, `status`) VALUES (NULL, '$_POST[nip]', '$_POST[nama]', '$_POST[email]', '$password', '$_POST[foto]', 'Y');");
    

    // if ($insert) {
    //     // The query was successful.
    //     // Execute the following code.
    // } else {
    //     // The query failed.
    //     // Display an error message.
    // }
}

?>