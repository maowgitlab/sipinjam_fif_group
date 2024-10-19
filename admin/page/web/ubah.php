<?php 
$id_meta = $_GET['id_meta'];
$ambil  = $con->query("SELECT * FROM meta WHERE id_meta ='$_GET[id_meta]'");
$pecah  = $ambil->fetch_assoc();  
$jk  = $pecah['jk']; 
?>

<div class="row">
    
    <div class="col-12">
        <div class="card border border-primary">
            <div class="card-body">
                <h4 class="card-title">Ubah Website</h4> <hr>

                <form class="needs-validation" novalidate method="post" enctype="multipart/form-data">          
                    <div class="row">
                        <div class="col-md-3">
                            <div class="mb-2">
                                <label class="form-label">Instansi</label>
                                <input type="text" class="form-control" name="judul_meta" value="<?php echo $pecah['judul_meta'] ?>" required autofocus> 
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-2">
                                <label class="form-label">Telepon</label>
                                <input type="text" class="form-control" name="telp_meta" value="<?php echo $pecah['telp_meta'] ?>" required> 
                            </div>
                        </div>    
                        <div class="col-md-3">
                            <div class="mb-2">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control" name="email_meta" value="<?php echo $pecah['email_meta'] ?>" required> 
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-2">
                                <label class="form-label">Pimpinan</label>
                                <input type="text" class="form-control" name="pimpinan_meta" value="<?php echo $pecah['pimpinan_meta'] ?>" required> 
                            </div>
                        </div>     
                        <div class="col-md-3">
                            <div class="mb-2">
                                <label class="form-label">Singkat</label>
                                <input type="text" class="form-control" name="singkat_meta" value="<?php echo $pecah['singkat_meta'] ?>" required> 
                            </div>
                        </div>     
                        <div class="col-md-9">
                            <div class="mb-2">
                                <label class="form-label">Alamat</label>
                                <input type="text" class="form-control" name="alamat_meta" value="<?php echo $pecah['alamat_meta'] ?>" required> 
                            </div>
                        </div> 
                        <div class="col-md-3">
                            <div class="mb-2">
                                <label class="form-label">Logo</label> <br>
                                <img src="assets/gambar/<?php echo $pecah['logo_meta']; ?>" class="img-thumbnail" width="120"><br>
                                <input type="file" accept="image/*" name="logo_meta" class="form-control">
                                <span class="text-danger">*) Kosongkan atau lewati apabila tidak diganti</span>   
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-2"> 
                                <button name="simpan" class="btn btn-info btn-sm waves-effect waves-light">Simpan</button>
                                <a href="?page=web&id_meta=<?php echo $pecah['id_meta'] ?>" class="btn btn-danger btn-sm waves-effect waves-light">Kembali</a> 
                            </div>
                        </div>           
                    </div>                
                </form>
                <?php 
                if (isset($_POST['simpan'])) 
                {
                    $judul_meta        = $_POST['judul_meta'];
                    $telp_meta = $_POST['telp_meta'];
                    $email_meta = $_POST['email_meta'];
                    $alamat_meta = $_POST['alamat_meta'];
                    $pimpinan_meta = $_POST['pimpinan_meta'];
                    $singkat_meta = $_POST['singkat_meta']; 

                    $logo_meta        = $_FILES['logo_meta']['name'];
                    $lokasi      = $_FILES['logo_meta']['tmp_name'];
                    if (!empty($lokasi)) 
                    {
                        move_uploaded_file($lokasi, "assets/gambar/".$logo_meta);
                        $con->query("UPDATE meta SET judul_meta='$judul_meta',
                                                     telp_meta='$telp_meta',
                                                     email_meta='$email_meta',
                                                     alamat_meta='$alamat_meta',
                                                     pimpinan_meta='$pimpinan_meta',
                                                     singkat_meta='$singkat_meta',
                                                     logo_meta='$logo_meta' WHERE id_meta='$_GET[id_meta]'"); 
                    }
                    else
                    {
                        $con->query("UPDATE meta SET judul_meta='$judul_meta',
                                                     telp_meta='$telp_meta',
                                                     email_meta='$email_meta',
                                                     alamat_meta='$alamat_meta',
                                                     pimpinan_meta='$pimpinan_meta',
                                                     singkat_meta='$singkat_meta' WHERE id_meta='$_GET[id_meta]'"); 
                    } 
                    echo "<script>alert('Data berhasil diubah');</script>";
                    echo "<script>location='?page=web&id_meta=$pecah[id_meta];</script>";
                }
                ?> 

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
                        
</div>