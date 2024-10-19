<div class="row">
    <div class="col-12">
        <div class="card border border-primary">
            <div class="card-body">
                <h4 class="card-title">Tambah Data Peringatan</h4> <hr>

                <form class="needs-validation" novalidate method="post" enctype="multipart/form-data">          
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-2">
                                <label class="form-label">No Permohonan</label>
                                <select class="form-control" name="no_permohonan" required>
                                    <option selected disabled></option>
                                    <?php
                                    $sql_permohonan = mysqli_query($con, "SELECT no_permohonan, nama_konsumen FROM permohonan NATURAL JOIN permohonan_cair NATURAL JOIN konsumen WHERE status_pinjaman='Cicilan' ORDER BY no_permohonan ASC");
                                    while ($data = mysqli_fetch_array($sql_permohonan)) {
                                        echo "<option value='{$data['no_permohonan']}'>{$data['no_permohonan']} - {$data['nama_konsumen']}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div> 
                        <div class="col-md-6">
                            <div class="mb-2">
                                <label class="form-label">Tanggal Peringatan</label>
                                <input type="date" class="form-control" name="tgl_peringatan" value="<?php echo date('Y-m-d') ?>" required> 
                            </div>
                        </div> 
                        <div class="col-md-6">
                            <div class="mb-2">
                                <label class="form-label">Isi Peringatan</label>
                                <textarea class="form-control" name="isi" rows="3" required></textarea> 
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
                if (isset($_POST['simpan'])) {
                    $no_permohonan = $_POST['no_permohonan'];  
                    $tgl_peringatan = $_POST['tgl_peringatan'];  
                    $isi = $_POST['isi'];  

                    // Simpan data ke tabel peringatan
                    $query = "INSERT INTO peringatan (no_permohonan, tgl_peringatan, isi, status_bayar) VALUES ('$no_permohonan', '$tgl_peringatan', '$isi', 'Belum Dibayar')";
                    if ($con->query($query)) {
                        echo "<script>alert('Peringatan berhasil disimpan');</script>";
                        echo "<script>location='?page=terlambat';</script>";
                    } else {
                        echo "<script>alert('Terjadi kesalahan: " . $con->error . "');</script>";
                    }
                }
                ?> 

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
