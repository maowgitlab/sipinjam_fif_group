<div class="row">
    
    <div class="col-12">
        <div class="card border border-primary">
            <div class="card-body">
                <h4 class="card-title">Tambah Data Admin</h4> <hr>

                <form class="needs-validation" novalidate method="post" enctype="multipart/form-data">          
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-2">
                                <label class="form-label">Pegawai</label>
                                <select class="form-control" name="id_pegawai" required>
                                    <option selected disabled></option>
                                    <?php
                                    $sql_kar=mysqli_query($con, "SELECT * FROM pegawai NATURAL JOIN jabatan ORDER BY id_pegawai ASC");
                                    while ($kar=mysqli_fetch_array($sql_kar))
                                    {
                                        echo "<option value='$kar[id_pegawai]'>$kar[nama] - $kar[jabatan]</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div> 
                        <div class="col-md-12">
                            <div class="mb-2">
                                <label class="form-label">Level</label>
                                <select class="form-control" name="level" required>
                                    <option selected disabled></option>
                                    <option value="Admin">Admin</option>
                                    <option value="Pimpinan">Pimpinan</option> 
                                    <option value="Petugas">Petugas</option> 
                                </select>
                            </div>
                        </div> 
                        <div class="col-md-12">
                            <div class="mb-2">
                                <label class="form-label">Status</label>
                                <select class="form-control" name="status" required>
                                    <option selected disabled></option>
                                    <option value="Aktif">Aktif</option>
                                    <option value="Tidak Aktif">Tidak Aktif</option>  
                                </select>
                            </div>
                        </div>  
                        <div class="col-md-12">
                            <div class="mb-2"> 
                                <button name="simpan" class="btn btn-info btn-sm waves-effect waves-light">Simpan</button>
                                <a href="?page=admin" class="btn btn-danger btn-sm waves-effect waves-light">Kembali</a> 
                            </div>
                        </div>           
                    </div>                
                </form>
                <?php 
                if (isset($_POST['simpan'])) 
                {
                    $id_pegawai = $_POST['id_pegawai'];  
                    $level = $_POST['level'];  
                    $status = $_POST['status'];  

                    $ambil = $con->query("SELECT * FROM admin WHERE id_pegawai='$id_pegawai'");
                    $yangcocok = mysqli_num_rows($ambil);
                    if ($yangcocok==1) 
                    {
                        echo "<script>alert('Data sudah ada.');</script>";
                        echo "<script>location='?page=admin&aksi=tambah';</script>";
                    }
                    else
                    {
                        $con->query("INSERT INTO admin (id_pegawai,level,status) VALUES ('$id_pegawai','$level','$status') ");

                        echo "<script>alert('Berhasil disimpan');</script>";
                        echo "<script>location='?page=admin';</script>";
                         
                    }
                }
                ?> 

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
                        
</div>