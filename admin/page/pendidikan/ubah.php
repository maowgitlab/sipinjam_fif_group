<?php 
$id_pendidikan = $_GET['id_pendidikan'];
$ambil  = $con->query("SELECT * FROM pendidikan WHERE id_pendidikan ='$_GET[id_pendidikan]'");
$pecah  = $ambil->fetch_assoc();  
?>

<div class="row">
    
    <div class="col-12">
        <div class="card border border-primary">
            <div class="card-body">
                <h4 class="card-title">Ubah Data Pendidikan</h4> <hr>

                <form class="needs-validation" novalidate method="post" enctype="multipart/form-data">          
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-2">
                                <label class="form-label">Pendidikan</label>
                                <input type="text" class="form-control" name="pendidikan" value="<?php echo $pecah['pendidikan'] ?>" required autofocus> 
                            </div>
                        </div>  
                        <div class="col-md-12">
                            <div class="mb-2"> 
                                <button name="simpan" class="btn btn-info btn-sm waves-effect waves-light">Simpan</button>
                                <a href="?page=pendidikan" class="btn btn-danger btn-sm waves-effect waves-light">Kembali</a> 
                            </div>
                        </div>           
                    </div>                
                </form>
                <?php 
                if (isset($_POST['simpan'])) 
                {
                    $pendidikan = $_POST['pendidikan'];   

                    {
                        $con->query("UPDATE pendidikan SET pendidikan='$pendidikan' WHERE id_pendidikan='$_GET[id_pendidikan]'"); 
                    } 
                    echo "<script>alert('Berhasil disimpan.');</script>";
                    echo "<script>location='?page=pendidikan';</script>";
                }
                ?>  

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
                        
</div>