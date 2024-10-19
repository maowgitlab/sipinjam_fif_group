<div class="row">
    
    <div class="col-12">
        <div class="card border border-primary">
            <div class="card-body">
                <h4 class="card-title">Tambah Data Pernikahan</h4> <hr>

                <form class="needs-validation" novalidate method="post" enctype="multipart/form-data">          
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-2">
                                <label class="form-label">Pernikahan</label>
                                <input type="text" class="form-control" name="pernikahan" required autofocus> 
                            </div>
                        </div>  
                        <div class="col-md-12">
                            <div class="mb-2"> 
                                <button name="simpan" class="btn btn-info btn-sm waves-effect waves-light">Simpan</button>
                                <a href="?page=pernikahan" class="btn btn-danger btn-sm waves-effect waves-light">Kembali</a> 
                            </div>
                        </div>           
                    </div>                
                </form>
                <?php 
                if (isset($_POST['simpan'])) 
                {
                    $pernikahan = $_POST['pernikahan'];  

                    $ambil = $con->query("SELECT * FROM pernikahan WHERE pernikahan='$pernikahan'");
                    $yangcocok = mysqli_num_rows($ambil);
                    if ($yangcocok==1) 
                    {
                        echo "<script>alert('Data sudah ada.');</script>";
                        echo "<script>location='?page=pernikahan&aksi=tambah';</script>";
                    }
                    else
                    {
                        $con->query("INSERT INTO pernikahan (pernikahan) VALUES ('$pernikahan') ");

                        echo "<script>alert('Berhasil disimpan');</script>";
                        echo "<script>location='?page=pernikahan';</script>";
                         
                    }
                }
                ?> 

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
                        
</div>