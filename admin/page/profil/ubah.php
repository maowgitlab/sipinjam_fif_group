<?php 
  $id_pegawai = $_GET['id_pegawai'];
  $ambil  = $con->query("SELECT pegawai.*, jabatan.jabatan FROM pegawai JOIN jabatan ON pegawai.id_jabatan = jabatan.id_jabatan WHERE id_pegawai ='$id_pegawai'");
  $pecah  = $ambil->fetch_assoc();  
  $jk  = $pecah['jk']; 
?>

<div class="row">
    
    <div class="col-12">
        <div class="card border border-primary">
            <div class="card-body">
                <h4 class="card-title">Ubah Data</h4> <hr>

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
                        <div class="col-md-3">
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
                        <div class="col-md-12">
                            <div class="mb-2"> 
                                <button name="simpan" class="btn btn-info btn-sm waves-effect waves-light">Simpan</button> 
                            </div>
                        </div>           
                    </div>                
                </form>
                <?php 
                if (isset($_POST['simpan'])) 
                {
                    $nik = $_POST['nik']; 
                    $nama       = $_POST['nama']; 
                    $tmp       = $_POST['tmp']; 
                    $tgl      = $_POST['tgl'];   
                    $alamat = $_POST['alamat'];    
                    $id_agama = $_POST['id_agama'];  
                    $id_pernikahan      = $_POST['id_pernikahan'];   
                    $id_pekerjaan = $_POST['id_pekerjaan']; 
                    $id_pendidikan = $_POST['id_pendidikan'];   
                      
                    {
                        $con->query("UPDATE pegawai SET  nik='$nik',
                                                         nama='$nama',
                                                         tmp='$tmp',
                                                         tgl='$tgl',
                                                         alamat='$alamat',                                                  
                                                         id_agama='$id_agama', 
                                                         id_pernikahan='$id_pernikahan',
                                                         id_pekerjaan='$id_pekerjaan',
                                                         id_pendidikan='$id_pendidikan' WHERE id_pegawai='$id_pegawai'"); 
                    } 
                    echo "<script>alert('Data berhasil disimpan.');</script>";
                    echo "<script>location='?page=profil';</script>";
                }
                ?>  

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
                        
</div>