<div class="row">
    
    <div class="col-12">
        <div class="card border border-primary">
            <div class="card-body">
                <h4 class="card-title">Tambah Data Keterlambatan</h4> <hr>

                <form class="needs-validation" novalidate method="post" enctype="multipart/form-data">          
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-2">
                                <label class="form-label">No Permohonan</label>
                                <select class="form-control" name="no_permohonan" required>
                                    <option selected disabled></option>
                                    <?php
                                    $sql_kar=mysqli_query($con, "SELECT * FROM permohonan NATURAL JOIN konsumen ORDER BY no_permohonan ASC");
                                    while ($kar=mysqli_fetch_array($sql_kar))
                                    {
                                        echo "<option value='$kar[no_permohonan]'>$kar[no_permohonan] - $kar[nama_konsumen]</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div> 
                        <div class="col-md-6">
                            <div class="mb-2">
                                <label class="form-label">Tanggal</label>
                                <input type="date" class="form-control" name="tgl_terlambat" value="<?php echo date('Y-m-d') ?>" required> 
                            </div>
                        </div> 
                        <div class="col-md-6">
                            <div class="mb-2">
                                <label class="form-label">Selama</label>
                                <input type="number" class="form-control" name="selama" required> 
                            </div>
                        </div> 
                        <div class="col-md-12">
                            <div class="mb-2"> 
                                <button name="simpan" class="btn btn-info btn-sm waves-effect waves-light">Simpan</button>
                                <a href="?page=terlambat" class="btn btn-danger btn-sm waves-effect waves-light">Kembali</a> 
                            </div>
                        </div>           
                    </div>                
                </form>
                <?php 
                if (isset($_POST['simpan'])) 
                {
                    $no_permohonan = $_POST['no_permohonan'];  
                    $tgl_terlambat = $_POST['tgl_terlambat'];  
                    $selama = $_POST['selama'];  
                    {
                        $con->query("INSERT INTO terlambat (no_permohonan,tgl_terlambat,selama) VALUES ('$no_permohonan','$tgl_terlambat','$selama') ");

                        echo "<script>alert('Berhasil disimpan');</script>";
                        echo "<script>location='?page=terlambat';</script>";
                         
                    }
                }
                ?> 

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
                        
</div>