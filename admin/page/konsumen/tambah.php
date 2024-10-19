<div class="row">
    
    <div class="col-12">
        <div class="card border border-primary">
            <div class="card-body">
                <h4 class="card-title">Tambah Data Konsumen</h4> <hr>

                <form class="needs-validation" novalidate method="post" enctype="multipart/form-data">          
                    <div class="row">
                        <div class="col-md-3">
                            <div class="mb-2">
                                <label class="form-label">NIK</label>
                                <input type="text" class="form-control" name="nik_konsumen" required autofocus> 
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-2">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control" name="nama_konsumen" required> 
                            </div>
                        </div>   
                        <div class="col-md-3">
                            <div class="mb-2">
                                <label class="form-label">Tempat Lahir</label>
                                <input type="text" class="form-control" name="tmp_konsumen" required> 
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-2">
                                <label class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tgl_konsumen" required> 
                            </div>
                        </div> 
                        <div class="col-md-3">
                            <div class="mb-2">
                                <label class="form-label">Alamat</label>
                                <input type="text" class="form-control" name="alamat_konsumen" required> 
                            </div>
                        </div>       
                        <div class="col-md-3">
                            <div class="mb-2">
                                <label class="form-label">Telepon</label>
                                <input type="text" class="form-control" name="telp_konsumen" required> 
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-2">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control" name="email_konsumen" required> 
                            </div>
                        </div> 
                        <div class="col-md-3">
                            <div class="mb-2">
                                <label class="form-label">Agama</label>
                                <select class="form-control" name="id_agama" required>
                                    <option selected disabled></option>
                                    <?php
                                    $sql_kar=mysqli_query($con, "SELECT * FROM agama ORDER BY id_agama ASC");
                                    while ($kar=mysqli_fetch_array($sql_kar))
                                    {
                                        echo "<option value='$kar[id_agama]'>$kar[agama]</option>";
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
                                    $sql_kar=mysqli_query($con, "SELECT * FROM pernikahan ORDER BY id_pernikahan ASC");
                                    while ($kar=mysqli_fetch_array($sql_kar))
                                    {
                                        echo "<option value='$kar[id_pernikahan]'>$kar[pernikahan]</option>";
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
                                    $sql_kar=mysqli_query($con, "SELECT * FROM pekerjaan ORDER BY id_pekerjaan ASC");
                                    while ($kar=mysqli_fetch_array($sql_kar))
                                    {
                                        echo "<option value='$kar[id_pekerjaan]'>$kar[pekerjaan]</option>";
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
                                    $sql_kar=mysqli_query($con, "SELECT * FROM pendidikan ORDER BY id_pendidikan ASC");
                                    while ($kar=mysqli_fetch_array($sql_kar))
                                    {
                                        echo "<option value='$kar[id_pendidikan]'>$kar[pendidikan]</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>  
                        <div class="col-md-3">
                            <div class="mb-2">
                                <label class="form-label">Password</label>
                                <input type="text" class="form-control" name="password_konsumen" required> 
                            </div>
                        </div>       
                        <div class="col-md-12">
                            <div class="mb-2"> 
                                <button name="simpan" class="btn btn-info btn-sm waves-effect waves-light">Simpan</button>
                                <a href="?page=konsumen" class="btn btn-danger btn-sm waves-effect waves-light">Kembali</a> 
                            </div>
                        </div>           
                    </div>                
                </form>
                <?php 
                if (isset($_POST['simpan'])) 
                {
                    $nik_konsumen = $_POST['nik_konsumen']; 
                    $nama_konsumen       = $_POST['nama_konsumen']; 
                    $tmp_konsumen       = $_POST['tmp_konsumen']; 
                    $tgl_konsumen      = $_POST['tgl_konsumen'];   
                    $alamat_konsumen = $_POST['alamat_konsumen']; 
                    $telp_konsumen       = $_POST['telp_konsumen']; 
                    $email_konsumen = $_POST['email_konsumen'];    
                    $id_agama = $_POST['id_agama'];  
                    $id_pernikahan      = $_POST['id_pernikahan'];   
                    $id_pekerjaan = $_POST['id_pekerjaan']; 
                    $id_pendidikan = $_POST['id_pendidikan'];  
                    $password_konsumen       = $_POST['password_konsumen']; 

                    $ambil = $con->query("SELECT * FROM konsumen WHERE nik_konsumen='$nik_konsumen'");
                    $yangcocok = mysqli_num_rows($ambil);
                    if ($yangcocok==1) 
                    {
                        echo "<script>alert('Data sudah ada.');</script>";
                        echo "<script>location='?page=konsumen&aksi=tambah';</script>";
                    }
                    else
                    {
                        $con->query("INSERT INTO konsumen (nik_konsumen,nama_konsumen,tmp_konsumen,tgl_konsumen,alamat_konsumen,telp_konsumen,email_konsumen,id_agama,id_pernikahan,id_pekerjaan,id_pendidikan,password_konsumen) VALUES ('$nik_konsumen','$nama_konsumen','$tmp_konsumen','$tgl_konsumen','$alamat_konsumen','$telp_konsumen','$email_konsumen','$id_agama','$id_pernikahan','$id_pekerjaan','$id_pendidikan','$password_konsumen') ");

                        echo "<script>alert('Data berhasil disimpan.');</script>";
                        echo "<script>location='?page=konsumen';</script>";
                         
                    }
                }
                ?>

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
                        
</div>