<?php 
$id_agama = $_GET['id_agama'];
$ambil  = $con->query("SELECT * FROM agama WHERE id_agama ='$_GET[id_agama]'");
$pecah  = $ambil->fetch_assoc();  
?>

<div class="row">
    
    <div class="col-12">
        <div class="card border border-primary">
            <div class="card-body">
                <h4 class="card-title">Ubah Data Agama</h4> <hr>

                <form class="needs-validation" novalidate method="post" enctype="multipart/form-data">          
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-2">
                                <label class="form-label">Agama</label>
                                <input type="text" class="form-control" name="agama" value="<?php echo $pecah['agama'] ?>" required autofocus> 
                            </div>
                        </div>  
                        <div class="col-md-12">
                            <div class="mb-2"> 
                                <button name="simpan" class="btn btn-info btn-sm waves-effect waves-light">Simpan</button>
                                <a href="?page=agama" class="btn btn-danger btn-sm waves-effect waves-light">Kembali</a> 
                            </div>
                        </div>           
                    </div>                
                </form>
                <?php 
                if (isset($_POST['simpan'])) 
                {
                    $agama = $_POST['agama'];   

                    {
                        $con->query("UPDATE agama SET agama='$agama' WHERE id_agama='$_GET[id_agama]'"); 
                    } 
                    echo "<script>alert('Berhasil disimpan.');</script>";
                    echo "<script>location='?page=agama';</script>";
                }
                ?>  

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
                        
</div>