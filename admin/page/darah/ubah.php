<?php 
$id_darah = $_GET['id_darah'];
$ambil  = $con->query("SELECT * FROM darah WHERE id_darah ='$_GET[id_darah]'");
$pecah  = $ambil->fetch_assoc();  
?>

<div class="row">
    
    <div class="col-12">
        <div class="card border border-primary">
            <div class="card-body">
                <h4 class="card-title">Ubah Data Golongan Darah</h4> <hr>

                <form class="needs-validation" novalidate method="post" enctype="multipart/form-data">          
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-2">
                                <label class="form-label">Golongan Darah</label>
                                <input type="text" class="form-control" name="darah" value="<?php echo $pecah['darah'] ?>" required autofocus> 
                            </div>
                        </div>  
                        <div class="col-md-12">
                            <div class="mb-2"> 
                                <button name="simpan" class="btn btn-info btn-sm waves-effect waves-light">Simpan</button>
                                <a href="?page=darah" class="btn btn-danger btn-sm waves-effect waves-light">Kembali</a> 
                            </div>
                        </div>           
                    </div>                
                </form>
                <?php 
                if (isset($_POST['simpan'])) 
                {
                    $darah = $_POST['darah'];   

                    {
                        $con->query("UPDATE darah SET darah='$darah' WHERE id_darah='$_GET[id_darah]'"); 
                    } 
                    echo "<script>alert('Berhasil disimpan.');</script>";
                    echo "<script>location='?page=darah';</script>";
                }
                ?>  

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
                        
</div>