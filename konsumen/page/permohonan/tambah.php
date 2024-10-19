<?php 
$today = date('y/');
$char = 'S.PR.' . $today;
$query = mysqli_query($con, "SELECT max(no_permohonan) as max_id FROM permohonan WHERE no_permohonan LIKE '{$char}%' ORDER BY no_permohonan DESC LIMIT 1");
$data = mysqli_fetch_assoc($query); 
$getId = $data['max_id']; 
$no = substr($getId, -4, 4); 
$no = (int) $no; 
$no += 1; 
$newId = $char . sprintf("%06s", $no); 
?>

<div class="row">
    
    <div class="col-12">
        <div class="card border border-primary">
            <div class="card-body">
                <h4 class="card-title">Tambah Data Permohonan</h4> <hr>

                <form class="needs-validation" novalidate method="post" enctype="multipart/form-data">          
                    <div class="row">
                        <div class="col-md-3">
                            <div class="mb-2">
                                <label class="form-label">No Permohonan</label>
                                <input type="text" class="form-control" readonly name="no_permohonan" value="<?php echo $newId ?>" required autofocus> 
                            </div>
                        </div> 
                        <div class="col-md-9">
                            <div class="mb-2">
                                <label class="form-label">Konsumen</label>
                                <input type="text" class="form-control" readonly name="id_konsumen" value="<?php echo $konsu['id_konsumen'] ?>" hidden required autofocus> 
                                <input type="text" class="form-control" readonly name="nama_konsumen" value="<?php echo $konsu['nama_konsumen'] ?>" readonly required autofocus> 
                            </div>
                        </div>        
                        <div class="col-md-3">
                            <div class="mb-2">
                                <label class="form-label">Tanggal Permohonan</label>
                                <input type="date" class="form-control" name="tgl_permohonan" value="<?php echo date('Y-m-d') ?>" required> 
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-4">
                                <label class="form-label">Waktu Permohonan</label>
                                <input type="time" class="form-control" name="waktu_permohonan" value="<?php echo date('H:i') ?>" required> 
                            </div>
                        </div>  
                        <div class="col-md-12">
                            <div class="mb-2">
                                <label class="form-label">Fotocopy KTP</label> <br>
                                <input type="file" accept="image/*"  name="ktp" required> 
                            </div>
                        </div>    
                        <div class="col-md-12">
                            <div class="mb-2">
                                <label class="form-label">Fotocopy Kartu Keluarga</label> <br>
                                <input type="file" accept="image/*"  name="kk" required> 
                            </div>
                        </div>    
                        <div class="col-md-12">
                            <div class="mb-2">
                                <label class="form-label">Fotocopy STNK</label> <br>
                                <input type="file" accept="image/*"  name="stnk" required> 
                            </div>
                        </div>    
                        <div class="col-md-12">
                            <div class="mb-2">
                                <label class="form-label">Fotocopy BPKB</label> <br>
                                <input type="file" accept="image/*"  name="bpkb" required> 
                            </div>
                        </div>    
                        <div class="col-md-12">
                            <div class="mb-4">
                                <label class="form-label">Fotocopy Rekening Listrik</label> <br>
                                <input type="file" accept="image/*"  name="listrik" required> 
                            </div>
                        </div>     
                        <div class="col-md-12">
                            <div class="mb-2"> 
                                <button name="simpan" class="btn btn-info btn-sm waves-effect waves-light">Simpan</button>
                                <a href="?page=permohonan" class="btn btn-danger btn-sm waves-effect waves-light">Kembali</a> 
                            </div>
                        </div>           
                    </div>                
                </form>
                <?php 
                if (isset($_POST['simpan'])) 
                {
                    $no_permohonan = $_POST['no_permohonan']; 
                    $id_konsumen       = $_POST['id_konsumen']; 
                    $tgl_permohonan       = $_POST['tgl_permohonan']; 
                    $waktu_permohonan      = $_POST['waktu_permohonan'];    


                    $ktp       = $_FILES['ktp']['name'];
                    $lokasi1     = $_FILES['ktp']['tmp_name'];
                    move_uploaded_file($lokasi1, "../admin/assets/gambar/syarat/".$ktp); 

                    $kk       = $_FILES['kk']['name'];
                    $lokasi2     = $_FILES['kk']['tmp_name'];
                    move_uploaded_file($lokasi2, "../admin/assets/gambar/syarat/".$kk); 

                    $stnk       = $_FILES['stnk']['name'];
                    $lokasi3     = $_FILES['stnk']['tmp_name'];
                    move_uploaded_file($lokasi3, "../admin/assets/gambar/syarat/".$stnk); 

                    $bpkb       = $_FILES['bpkb']['name'];
                    $lokasi4     = $_FILES['bpkb']['tmp_name'];
                    move_uploaded_file($lokasi4, "../admin/assets/gambar/syarat/".$bpkb); 

                    $listrik       = $_FILES['listrik']['name'];
                    $lokasi5     = $_FILES['listrik']['tmp_name'];
                    move_uploaded_file($lokasi5, "../admin/assets/gambar/syarat/".$listrik); 

                    {
                        $con->query("INSERT INTO permohonan (no_permohonan,id_konsumen,tgl_permohonan,waktu_permohonan,ktp,kk,stnk,bpkb,listrik,status_permohonan) VALUES ('$no_permohonan','$id_konsumen','$tgl_permohonan','$waktu_permohonan','$ktp','$kk','$stnk','$bpkb','$listrik','Pending') ");

                        echo "<script>alert('Data berhasil disimpan.');</script>";
                        echo "<script>location='?page=permohonan';</script>";
                         
                    }
                }
                ?>

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
                        
</div>