<?php 
$no_permohonan = $_GET['no_permohonan'];
$ambil  = $con->query("SELECT * FROM permohonan NATURAL JOIN konsumen WHERE no_permohonan ='$_GET[no_permohonan]'");
$pecah  = $ambil->fetch_assoc();   
?>

<div class="row">
    
    <div class="col-12">
        <div class="card border border-primary">
            <div class="card-body">
                <h4 class="card-title">Permohonan Cek</h4> <hr>

                <form class="needs-validation" novalidate method="post" enctype="multipart/form-data">          
                    <div class="row">
                        <div class="row mb-2">
                            <label class="col-sm-2 col-form-label">No Permohonan</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="no_permohonan" value="<?php echo $pecah['no_permohonan'] ?>" readonly required>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label class="col-sm-2 col-form-label">Konsumen</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" hidden name="id_konsumen" value="<?php echo $pecah['id_konsumen'] ?>" readonly required>
                                <input class="form-control" type="text" name="nama_konsumen" value="<?php echo $pecah['nama_konsumen'] ?>" readonly required>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label class="col-sm-2 col-form-label">Tanggal Permohonan</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="tgl_permohonan" value="<?php echo $pecah['tgl_permohonan'] ?>" readonly required>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label class="col-sm-2 col-form-label">Waktu Permohonan</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="waktu_permohonan" value="<?php echo $pecah['waktu_permohonan'] ?>" readonly required>
                            </div>
                        </div> 
                        <div class="col-md-12">
                            <div class="mb-2">
                                <label class="form-label">&nbsp;</label> 
                            </div>
                        </div> 
                        <div class="row mb-2">
                            <label class="col-sm-2 col-form-label">Dicek</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="dicek" value="<?php echo $admin['nama'] ?>" readonly required>
                            </div>
                        </div> 
                        <div class="row mb-2">
                            <label class="col-sm-2 col-form-label">Merk</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="merk" required>
                            </div>
                        </div>  
                        <div class="row mb-2">
                            <label class="col-sm-2 col-form-label">Nomor Poli</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="no_polis" required>
                            </div>
                        </div>  
                        <div class="row mb-2">
                            <label class="col-sm-2 col-form-label">Nomor Rangka</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="no_rangka" required>
                            </div>
                        </div>  
                        <div class="row mb-2">
                            <label class="col-sm-2 col-form-label">Nomor Mesin</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="no_mesin" required>
                            </div>
                        </div>  
                        <div class="row mb-2">
                            <label class="col-sm-2 col-form-label">Type</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="type" required>
                            </div>
                        </div>   
                        <div class="row mb-2">
                            <label class="col-sm-2 col-form-label">Warna</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="warna" required>
                            </div>
                        </div>   
                        <div class="row mb-2">
                            <label class="col-sm-2 col-form-label">Tahun</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="tahun" required>
                            </div>
                        </div> 

                        <div class="row mb-2">
                            <label class="col-sm-2 col-form-label">Kondisi Mesin</label>
                            <div class="col-sm-10"></div>
                        </div> 


                        <div class="row mb-2">
                            <label class="col-sm-2 col-form-label">Hidup</label>
                            <div class="col-sm-10">
                                <input type="radio" name="mesin_hidup" value="Baik" /> Baik &nbsp;&nbsp;&nbsp;
                                <input type="radio" name="mesin_hidup" value="Mati" /> Mati
                            </div>
                        </div> 
                        <div class="row mb-2">
                            <label class="col-sm-2 col-form-label">Saura Mesin</label>
                            <div class="col-sm-10">
                                <input type="radio" name="mesin_suara" value="Langsam" /> Langsam &nbsp;&nbsp;&nbsp;
                                <input type="radio" name="mesin_suara" value="Tidak" /> Tidak
                            </div>
                        </div> 
                        <div class="row mb-2">
                            <label class="col-sm-2 col-form-label">Oli Mesin</label>
                            <div class="col-sm-10">
                                <input type="radio" name="mesin_oli" value="Baik" /> Baik &nbsp;&nbsp;&nbsp;
                                <input type="radio" name="mesin_oli" value="Rusak" /> Rusak
                            </div>
                        </div> 
                        <div class="row mb-2">
                            <label class="col-sm-2 col-form-label">Body</label>
                            <div class="col-sm-10">
                                <input type="radio" name="body" value="Baik" /> Baik &nbsp;&nbsp;&nbsp;
                                <input type="radio" name="body" value="Rusak" /> Rusak
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
                    $dicek       = $_POST['dicek']; 
                    $merk       = $_POST['merk']; 
                    $no_polis      = $_POST['no_polis'];    
                    $no_rangka      = $_POST['no_rangka'];    
                    $no_mesin      = $_POST['no_mesin'];    
                    $type      = $_POST['type'];    
                    $warna      = $_POST['warna'];    
                    $tahun      = $_POST['tahun'];    
                    $mesin_hidup      = $_POST['mesin_hidup'];    
                    $mesin_suara      = $_POST['mesin_suara'];    
                    $mesin_oli      = $_POST['mesin_oli'];    
                    $body      = $_POST['body'];     

                    {
                        $con->query("INSERT INTO permohonan_cek (no_permohonan,dicek,merk,no_polis,no_rangka,no_mesin,type,warna,tahun,mesin_hidup,mesin_suara,mesin_oli,body) VALUES ('$no_permohonan','$dicek','$merk','$no_polis','$no_rangka','$no_mesin','$type','$warna','$tahun','$mesin_hidup','$mesin_suara','$mesin_oli','$body') ");

                        $con->query("UPDATE permohonan SET status_permohonan='Cek, Selesai' WHERE no_permohonan='$_GET[no_permohonan]'"); 

                        echo "<script>alert('Data berhasil disimpan.');</script>";
                        echo "<script>location='?page=permohonan';</script>";
                         
                    }
                }
                ?>

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
                        
</div>