<div class="row">
    
    <div class="col-12">
        <div class="card border border-primary">
            <div class="card-body">
                <h4 class="card-title">Tambah Data Jabatan</h4> <hr>

                <form class="needs-validation" novalidate method="post" enctype="multipart/form-data">          
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-2">
                                <label class="form-label">Jabatan</label>
                                <input type="text" class="form-control" name="jabatan" required autofocus> 
                            </div>
                        </div>  
                        <div class="col-md-12">
                            <div class="mb-2"> 
                                <button name="simpan" class="btn btn-info btn-sm waves-effect waves-light">Simpan</button>
                                <a href="?page=jabatan" class="btn btn-danger btn-sm waves-effect waves-light">Kembali</a> 
                            </div>
                        </div>           
                    </div>                
                </form>
                <?php 
                if (isset($_POST['simpan'])) 
                {
                    $jabatan = $_POST['jabatan'];  

                    $ambil = $con->query("SELECT * FROM jabatan WHERE jabatan='$jabatan'");
                    $yangcocok = mysqli_num_rows($ambil);
                    if ($yangcocok==1) 
                    {
                        echo "<script>alert('Data sudah ada.');</script>";
                        echo "<script>location='?page=jabatan&aksi=tambah';</script>";
                    }
                    else
                    {
                        $con->query("INSERT INTO jabatan (jabatan) VALUES ('$jabatan') ");

                        echo "<script>alert('Berhasil disimpan');</script>";
                        echo "<script>location='?page=jabatan';</script>";
                         
                    }
                }
                ?> 

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
                        
</div>