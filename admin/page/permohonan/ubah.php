<?php 
$id_pegawai = $_GET['id_pegawai'];
$ambil  = $con->query("SELECT * FROM pegawai WHERE id_pegawai ='$_GET[id_pegawai]'");
$pecah  = $ambil->fetch_assoc();  
$jk  = $pecah['jk']; 
?>

<div class="row">
    
    <div class="col-12">
        <div class="card border border-primary">
            <div class="card-body">
                <h4 class="card-title">Ubah Data Pegawai</h4> <hr>

                <form class="needs-validation" novalidate method="post" enctype="multipart/form-data">          
                    <div class="row">
                        <div class="col-md-3">
                            <div class="mb-2">
                                <label class="form-label">NIK</label>
                                <input type="text" class="form-control" name="nik" value="<?php echo $pecah['nik'] ?>" required autofocus> 
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-2">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control" name="nama" value="<?php echo $pecah['nama'] ?>" required> 
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-2">
                                <label class="form-label">Jabatan</label>
                                <select class="form-control" name="id_jabatan" required>
                                    <option selected disabled></option>
                                    <?php
                                    $sql=mysqli_query($con, "SELECT * FROM jabatan ORDER BY id_jabatan ASC");
                                    while ($kar=mysqli_fetch_array($sql))
                                    {
                                        $selected = ($kar['id_jabatan'] == $pecah['id_jabatan']) ?
                                        'selected="selected"'  : "";
                                        echo "<option value='$kar[id_jabatan]' $selected>$kar[jabatan]</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-2">
                                <label class="form-label">Jenis Kelamin</label>
                                <select class="form-control" name="jk" required> 
                                    <option selected disabled></option>
                                    <option value="Laki-Laki" <?php if ($jk=='Laki-Laki') { echo "selected"; } ?>>Laki-Laki</option>
                                    <option value="Perempuan" <?php if ($jk=='Perempuan') { echo "selected"; } ?>>Perempuan</option>
                                </select>
                            </div>
                        </div>      
                        <div class="col-md-3">
                            <div class="mb-2">
                                <label class="form-label">Tempat Lahir</label>
                                <input type="text" class="form-control" name="tmp" value="<?php echo $pecah['tmp'] ?>" required> 
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-2">
                                <label class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tgl" value="<?php echo $pecah['tgl'] ?>" required> 
                            </div>
                        </div> 
                        <div class="col-md-6">
                            <div class="mb-2">
                                <label class="form-label">Alamat</label>
                                <input type="text" class="form-control" name="alamat" value="<?php echo $pecah['alamat'] ?>" required> 
                            </div>
                        </div>     
                        <div class="col-md-3">
                            <div class="mb-2">
                                <label class="form-label">Agama</label>
                                <select class="form-control" name="id_agama" required>
                                    <option selected disabled></option>
                                    <?php
                                    $sql=mysqli_query($con, "SELECT * FROM agama ORDER BY id_agama ASC");
                                    while ($kar=mysqli_fetch_array($sql))
                                    {
                                        $selected = ($kar['id_agama'] == $pecah['id_agama']) ?
                                        'selected="selected"'  : "";
                                        echo "<option value='$kar[id_agama]' $selected>$kar[agama]</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>    
                        <div class="col-md-3">
                            <div class="mb-2">
                                <label class="form-label">Golongan Darah</label>
                                <select class="form-control" name="id_darah" required>
                                    <option selected disabled></option>
                                    <?php
                                    $sql=mysqli_query($con, "SELECT * FROM darah ORDER BY id_darah ASC");
                                    while ($kar=mysqli_fetch_array($sql))
                                    {
                                        $selected = ($kar['id_darah'] == $pecah['id_darah']) ?
                                        'selected="selected"'  : "";
                                        echo "<option value='$kar[id_darah]' $selected>$kar[darah]</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>    
                        <div class="col-md-3">
                            <div class="mb-2">
                                <label class="form-label">Pernikahan</label>
                                <select class="form-control" name="id_pernikahan" required>
                                    <option selected disabled></option>
                                    <?php
                                    $sql=mysqli_query($con, "SELECT * FROM pernikahan ORDER BY id_pernikahan ASC");
                                    while ($kar=mysqli_fetch_array($sql))
                                    {
                                        $selected = ($kar['id_pernikahan'] == $pecah['id_pernikahan']) ?
                                        'selected="selected"'  : "";
                                        echo "<option value='$kar[id_pernikahan]' $selected>$kar[pernikahan]</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>              
                        <div class="col-md-3">
                            <div class="mb-2">
                                <label class="form-label">Pekerjaan</label>
                                <select class="form-control" name="id_pekerjaan" required>
                                    <option selected disabled></option>
                                    <?php
                                    $sql=mysqli_query($con, "SELECT * FROM pekerjaan ORDER BY id_pekerjaan ASC");
                                    while ($kar=mysqli_fetch_array($sql))
                                    {
                                        $selected = ($kar['id_pekerjaan'] == $pecah['id_pekerjaan']) ?
                                        'selected="selected"'  : "";
                                        echo "<option value='$kar[id_pekerjaan]' $selected>$kar[pekerjaan]</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>    
                        <div class="col-md-3">
                            <div class="mb-2">
                                <label class="form-label">Pendidikan</label>
                                <select class="form-control" name="id_pendidikan" required>
                                    <option selected disabled></option>
                                    <?php
                                    $sql=mysqli_query($con, "SELECT * FROM pendidikan ORDER BY id_pendidikan ASC");
                                    while ($kar=mysqli_fetch_array($sql))
                                    {
                                        $selected = ($kar['id_pendidikan'] == $pecah['id_pendidikan']) ?
                                        'selected="selected"'  : "";
                                        echo "<option value='$kar[id_pendidikan]' $selected>$kar[pendidikan]</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>    
                        <div class="col-md-3">
                            <div class="mb-2">
                                <label class="form-label">Username</label>
                                <input type="text" class="form-control" name="username" value="<?php echo $pecah['username'] ?>" required> 
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-2">
                                <label class="form-label">Password</label>
                                <input type="text" class="form-control" name="password" value="<?php echo $pecah['password'] ?>" required> 
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-2">
                                <label class="form-label">Foto</label> <br>
                                <img src="assets/gambar/pegawai/<?php echo $pecah['foto']; ?>" class="img-thumbnail" width="120"><br>
                                <input type="file" accept="image/*" name="foto" class="form-control">
                                <span class="text-danger">*) Kosongkan atau lewati apabila tidak diganti</span>   
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-2"> 
                                <button name="simpan" class="btn btn-info btn-sm waves-effect waves-light">Simpan</button>
                                <a href="?page=pegawai" class="btn btn-danger btn-sm waves-effect waves-light">Kembali</a> 
                            </div>
                        </div>           
                    </div>                
                </form>
                <?php 
                if (isset($_POST['simpan'])) 
                {
                    $nik = $_POST['nik']; 
                    $nama       = $_POST['nama']; 
                    $id_jabatan       = $_POST['id_jabatan']; 
                    $jk      = $_POST['jk'];   
                    $tmp = $_POST['tmp']; 
                    $tgl       = $_POST['tgl']; 
                    $alamat = $_POST['alamat'];   
                    $id_agama = $_POST['id_agama']; 
                    $id_darah       = $_POST['id_darah']; 
                    $id_pernikahan      = $_POST['id_pernikahan'];   
                    $id_pekerjaan = $_POST['id_pekerjaan']; 
                    $id_pendidikan = $_POST['id_pendidikan']; 
                    $username       = $_POST['username']; 
                    $password      = $_POST['password'];   
                    $foto       = $_FILES['foto']['name'];
                    $lokasi     = $_FILES['foto']['tmp_name'];
                    if (!empty($lokasi)) 
                    {
                        move_uploaded_file($lokasi, "assets/gambar/pegawai/".$foto);
                        $con->query("UPDATE pegawai SET  nik='$nik',
                                                         nama='$nama',
                                                         id_jabatan='$id_jabatan',
                                                         jk='$jk',
                                                         tmp='$tmp',
                                                         tgl='$tgl',
                                                         alamat='$alamat',                                                     
                                                         id_agama='$id_agama',
                                                         id_darah='$id_darah',
                                                         id_pernikahan='$id_pernikahan',
                                                         id_pekerjaan='$id_pekerjaan',
                                                         id_pendidikan='$id_pendidikan',
                                                         username='$username',
                                                         password='$password',
                                                         foto='$foto' WHERE id_pegawai='$_GET[id_pegawai]'"); 
                    }
                    else
                    {
                        $con->query("UPDATE pegawai SET  nik='$nik',
                                                         nama='$nama',
                                                         id_jabatan='$id_jabatan',
                                                         jk='$jk',
                                                         tmp='$tmp',
                                                         tgl='$tgl',
                                                         alamat='$alamat',                                                     
                                                         id_agama='$id_agama',
                                                         id_darah='$id_darah',
                                                         id_pernikahan='$id_pernikahan',
                                                         id_pekerjaan='$id_pekerjaan',
                                                         id_pendidikan='$id_pendidikan',
                                                         username='$username',
                                                         password='$password' WHERE id_pegawai='$_GET[id_pegawai]'"); 
                    } 
                    echo "<script>alert('Data berhasil disimpan.');</script>";
                    echo "<script>location='?page=pegawai';</script>";
                }
                ?>  

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
                        
</div>