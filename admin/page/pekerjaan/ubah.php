<?php 
$id_pekerjaan = $_GET['id_pekerjaan'];
$ambil  = $con->query("SELECT * FROM pekerjaan WHERE id_pekerjaan ='$_GET[id_pekerjaan]'");
$pecah  = $ambil->fetch_assoc();  
?>

<div class="row">
    
    <div class="col-12">
        <div class="card border border-primary">
            <div class="card-body">
                <h4 class="card-title">Ubah Data Pekerjaan</h4> <hr>

                <form class="needs-validation" novalidate method="post" enctype="multipart/form-data">          
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-2">
                                <label class="form-label">Pekerjaan</label>
                                <input type="text" class="form-control" name="pekerjaan" value="<?php echo $pecah['pekerjaan'] ?>" required autofocus> 
                            </div>
                        </div>  
                        <div class="col-md-12">
                            <div class="mb-2"> 
                                <button name="simpan" class="btn btn-info btn-sm waves-effect waves-light">Simpan</button>
                                <a href="?page=pekerjaan" class="btn btn-danger btn-sm waves-effect waves-light">Kembali</a> 
                            </div>
                        </div>           
                    </div>                
                </form>
                <?php 
                if (isset($_POST['simpan'])) 
                {
                    $pekerjaan = $_POST['pekerjaan'];   

                    {
                        $con->query("UPDATE pekerjaan SET pekerjaan='$pekerjaan' WHERE id_pekerjaan='$_GET[id_pekerjaan]'"); 
                    } 
                    echo "<script>alert('Berhasil disimpan.');</script>";
                    echo "<script>location='?page=pekerjaan';</script>";
                }
                ?>  

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
                        
</div>