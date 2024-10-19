<?php 
$id_admin = $_GET['id_admin'];
$ambil  = $con->query("SELECT * FROM admin WHERE id_admin ='$_GET[id_admin]'");
$pecah  = $ambil->fetch_assoc();  
$level  = $pecah['level']; 
$status = $pecah['status']; 
?>

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
                                    $sql=mysqli_query($con, "SELECT * FROM pegawai NATURAL JOIN jabatan ORDER BY id_pegawai ASC");
                                    while ($kar=mysqli_fetch_array($sql))
                                    {
                                        $selected = ($kar['id_pegawai'] == $pecah['id_pegawai']) ?
                                        'selected="selected"'  : "";
                                        echo "<option value='$kar[id_pegawai]' $selected>$kar[nama] - $kar[jabatan]</option>";
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
                                    <option value="Admin" <?php if ($level=='Admin') { echo "selected"; } ?>>Admin</option>
                                    <option value="Pimpinan" <?php if ($level=='Pimpinan') { echo "selected"; } ?>>Pimpinan</option>
                                    <option value="Petugas" <?php if ($level=='Petugas') { echo "selected"; } ?>>Petugas</option>
                                </select>
                            </div>
                        </div> 
                        <div class="col-md-12">
                            <div class="mb-2">
                                <label class="form-label">Status</label>
                                <select class="form-control" name="status" required>
                                    <option selected disabled></option>
                                    <option value="Aktif" <?php if ($status=='Aktif') { echo "selected"; } ?>>Aktif</option>
                                    <option value="Tidak Aktif" <?php if ($status=='Tidak Aktif') { echo "selected"; } ?>>Tidak Aktif</option> 
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
                    $level       = $_POST['level']; 
                    $status      = $_POST['status'];   

                    {
                        $con->query("UPDATE admin SET id_pegawai='$id_pegawai', 
                                                      level='$level',
                                                      status='$status' WHERE id_admin='$_GET[id_admin]'"); 
                    } 
                    echo "<script>alert('Berhasil disimpan.');</script>";
                    echo "<script>location='?page=admin';</script>";
                }
                ?>  

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
                        
</div>