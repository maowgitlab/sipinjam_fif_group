<?php 
$no_permohonan = $_GET['no_permohonan'];
$ambil  = $con->query("SELECT * FROM permohonan NATURAL JOIN konsumen NATURAL JOIN permohonan_cek WHERE no_permohonan ='$_GET[no_permohonan]'");
$pecah  = $ambil->fetch_assoc();   
?>

<div class="row">
    
    <div class="col-12">
        <div class="card border border-primary">
            <div class="card-body">
                <h4 class="card-title">Permohonan Pinjaman</h4> <hr>

                <form class="needs-validation" novalidate method="post" enctype="multipart/form-data">          
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="row mb-2">
                                <label class="col-sm-4 col-form-label">No Permohonan</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" name="no_permohonan" value="<?php echo $pecah['no_permohonan'] ?>" readonly required>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label class="col-sm-4 col-form-label">Konsumen</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" hidden name="id_konsumen" value="<?php echo $pecah['id_konsumen'] ?>" readonly required>
                                    <input class="form-control" type="text" name="nama_konsumen" value="<?php echo $pecah['nama_konsumen'] ?>" readonly required>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label class="col-sm-4 col-form-label">Tanggal Permohonan</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" name="tgl_permohonan" value="<?php echo $pecah['tgl_permohonan'] ?>" readonly required>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label class="col-sm-4 col-form-label">Waktu Permohonan</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" name="waktu_permohonan" value="<?php echo $pecah['waktu_permohonan'] ?>" readonly required>
                                </div>
                            </div> 
                            <div class="col-md-12">
                                <div class="mb-2">
                                    <label class="form-label">&nbsp;</label> 
                                </div>
                            </div> 
                            <div class="row mb-2">
                                <label class="col-sm-4 col-form-label">Dicek</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" name="dicek" value="<?php echo $pecah['dicek'] ?>" readonly required>
                                </div>
                            </div> 
                            <div class="row mb-2">
                                <label class="col-sm-4 col-form-label">Merk</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" name="merk" value="<?php echo $pecah['merk'] ?>" readonly required>
                                </div>
                            </div>  
                            <div class="row mb-2">
                                <label class="col-sm-4 col-form-label">Nomor Polis</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" name="no_polis" value="<?php echo $pecah['no_polis'] ?>" readonly required>
                                </div>
                            </div>  
                            <div class="row mb-2">
                                <label class="col-sm-4 col-form-label">Nomor Rangka</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" name="no_rangka" value="<?php echo $pecah['no_rangka'] ?>" readonly required>
                                </div>
                            </div>  
                            <div class="row mb-2">
                                <label class="col-sm-4 col-form-label">Nomor Mesin</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" name="no_mesin" value="<?php echo $pecah['no_mesin'] ?>" readonly required>
                                </div>
                            </div>  
                            <div class="row mb-2">
                                <label class="col-sm-4 col-form-label">Type</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" name="type" value="<?php echo $pecah['type'] ?>" readonly required>
                                </div>
                            </div>   
                            <div class="row mb-2">
                                <label class="col-sm-4 col-form-label">Warna</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" name="warna" value="<?php echo $pecah['warna'] ?>" readonly required>
                                </div>
                            </div>   
                            <div class="row mb-2">
                                <label class="col-sm-4 col-form-label">Tahun</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" name="tahun" value="<?php echo $pecah['tahun'] ?>" readonly required>
                                </div>
                            </div> 

                            <div class="row mb-2">
                                <label class="col-sm-4 col-form-label">&nbsp;</label>
                                <div class="col-sm-8"></div>
                            </div> 


                            <div class="row mb-2">
                                <label class="col-sm-4 col-form-label">Mesin</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" name="mesin_hidup" value="<?php echo $pecah['mesin_hidup'] ?>" readonly required>
                                </div>
                            </div> 
                            <div class="row mb-2">
                                <label class="col-sm-4 col-form-label">Suara Mesin</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" name="mesin_suara" value="<?php echo $pecah['mesin_suara'] ?>" readonly required>
                                </div>
                            </div> 
                            <div class="row mb-2">
                                <label class="col-sm-4 col-form-label">Oli Mesin</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" name="mesin_oli" value="<?php echo $pecah['mesin_oli'] ?>" readonly required>
                                </div>
                            </div> 
                            <div class="row mb-2">
                                <label class="col-sm-4 col-form-label">Body</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" name="body" value="<?php echo $pecah['body'] ?>" readonly required>
                                </div>
                            </div>  
                        </div>

                        <div class="col-sm-5">
                            <div class="row mb-2">
                                <label class="col-sm-4 col-form-label">Tanggal</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="date" name="tgl_pinjaman" id="tgl_pinjaman" value="<?php echo date('Y-m-d') ?>" required>
                                </div>
                            </div>  
                            <div class="row mb-2">
                                <label class="col-sm-4 col-form-label">Waktu</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="time" name="waktu_pinjaman" id="waktu_pinjaman" value="<?php echo date('H:i') ?>" required>
                                </div>
                            </div>   
                            <div class="row mb-2">
                                <label class="col-sm-4 col-form-label">Pinjaman</label>
                                <div class="col-sm-8">
                                    <select class="js-example-basic-single form-control" name="jum_pinjaman"  required onchange="pinjaman(this.value)">
                                        <option selected disabled>Pilih</option>
                                        <?php 
                                        $permohonan = mysqli_query($con, "SELECT * FROM pinjaman ORDER BY nominal ASC ");    
                                        $jspermohonan = "var dtp = new Array();\n";        
                                        while ($per = mysqli_fetch_array($permohonan))
                                            
                                        {  
                                            echo '<option value="'.$per['nominal'].'">'.$per['nominal'].'</option>';    
                                            $jspermohonan .= "dtp['".$per['nominal']."']=
                                            { 
                                                nominal   :'".addslashes($per['nominal'])."',
                                                enam   :'".addslashes($per['enam'])."',
                                                duabelas   :'".addslashes($per['duabelas'])."',
                                                delapanbelas   :'".addslashes($per['delapanbelas'])."',
                                                duaempat   :'".addslashes($per['duaempat'])."'
                                            };\n";    
                                        }
                                        ?> 
                                    </select> 
                                </div>
                            </div> 
                            <div class="row mb-2">
                                <label class="col-sm-4 col-form-label">Nominal</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" name="nominal" id="nominal" onkeypress="return angka(event);" required>
                                </div>
                            </div>  
                            <div class="row mb-2">
                                <label class="col-sm-4 col-form-label">6 Bulan</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" name="enam" id="enam" onkeypress="return angka(event);" required>
                                </div>
                            </div>  
                            <div class="row mb-2">
                                <label class="col-sm-4 col-form-label">12 Bulan</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" name="duabelas" id="duabelas" onkeypress="return angka(event);" required>
                                </div>
                            </div>  
                            <div class="row mb-2">
                                <label class="col-sm-4 col-form-label">18 Bulan</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" name="delapanbelas" id="delapanbelas" onkeypress="return angka(event);" required>
                                </div>
                            </div>  
                            <div class="row mb-2">
                                <label class="col-sm-4 col-form-label">24 Bulan</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" name="duaempat" id="duaempat" onkeypress="return angka(event);" required>
                                </div>
                            </div>  
                            <div class="row mb-2">
                                <label class="col-sm-4 col-form-label">Tenor Pinjaman</label>
                                <div class="col-sm-8">
                                    <select class="form-control" name="tenor_pinjaman" id="tenor_pinjaman" onkeyup="hitung();" required>
                                        <option selected disabled>Pilih</option>
                                        <option value="6">6 Bulan</option>
                                        <option value="12">12 Bulan</option>  
                                        <option value="18">18 Bulan</option>  
                                        <option value="24">24 Bulan</option>    
                                    </select>
                                </div>
                            </div> 
                            <div class="row mb-2">
                                <label class="col-sm-4 col-form-label">Angsuran</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" name="angsuran" id="angsuran" onkeypress="return angka(event);" onkeyup="hitung();" required>
                                </div>
                            </div>  
                            <div class="row mb-2">
                                <label class="col-sm-4 col-form-label">Bank</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" name="bank" value="<?php echo $pecah['bank'] ?>" required>
                                </div>
                            </div>  
                            <div class="row mb-2">
                                <label class="col-sm-4 col-form-label">Nomor Rekening</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" name="norek" value="<?php echo $pecah['norek'] ?>" required>
                                </div>
                            </div>  
                            <div class="row mb-2">
                                <label class="col-sm-4 col-form-label">Pemilik Rekening</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" name="atasnama" value="<?php echo $pecah['atasnama'] ?>" required>
                                </div>
                            </div>    
                            <div class="row mb-2">
                                <label class="col-sm-4 col-form-label">Tanggal Jatuh Tempo</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="date" name="jatuh_tempo" value="<?php echo date('Y-m-d') ?>" required>
                                </div>
                            </div> 
                            <div class="row mb-2">
                                <label class="col-sm-4 col-form-label">&nbsp;</label>
                                <div class="col-sm-8">
                                    <button name="simpan" class="btn btn-info btn-sm waves-effect waves-light">Simpan</button>
                                    <a href="?page=permohonan" class="btn btn-danger btn-sm waves-effect waves-light">Kembali</a>
                                </div>
                            </div> 

                        </div>
                                   
                    </div>                
                </form>
                <?php 
                if (isset($_POST['simpan'])) 
                {
                    $no_permohonan = $_POST['no_permohonan']; 
                    $tgl_pinjaman = $_POST['tgl_pinjaman']; 
                    $waktu_pinjaman = $_POST['waktu_pinjaman']; 
                    $tenor_pinjaman = $_POST['tenor_pinjaman']; 
                    $bank = $_POST['bank']; 
                    $norek = $_POST['norek']; 
                    $atasnama = $_POST['atasnama']; 
                    $jatuh_tempo = $_POST['jatuh_tempo']; 

                    $jum_pinjaman1        = $_POST['jum_pinjaman'];
                    $jum_pinjaman         = str_replace(".", "", $jum_pinjaman1);

                    $angsuran1        = $_POST['angsuran'];
                    $angsuran         = str_replace(".", "", $angsuran1);

                    $bayar_bulanan1        = $_POST['bayar_bulanan'];
                    $bayar_bulanan         = str_replace(".", "", $bayar_bulanan1);

                    $persenan       = $_POST['persenan']; 
                    $tenor_pinjaman       = $_POST['tenor_pinjaman'];     

                    {
                        $con->query("INSERT INTO permohonan_cair (no_permohonan,tgl_pinjaman,waktu_pinjaman,jum_pinjaman,tenor_pinjaman,angsuran,bank,norek,atasnama,jatuh_tempo,status_pinjaman) VALUES ('$no_permohonan','$tgl_pinjaman','$waktu_pinjaman','$jum_pinjaman','$tenor_pinjaman','$angsuran','$bank','$norek','$atasnama','$jatuh_tempo','Cicilan') ");

                        $con->query("UPDATE permohonan SET status_permohonan='ACC' WHERE no_permohonan='$_GET[no_permohonan]'"); 

                        echo "<script>alert('Data berhasil disimpan.');</script>";
                        echo "<script>location='?page=permohonan';</script>";
                         
                    }
                }
                ?>

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
                        
</div>


<script type="text/javascript">
    function angka(evt) 
    {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57)) 
        {
            return false;
        }
        return true;
    }
</script>


<script type="text/javascript">  

    var nominal = document.getElementById('nominal');
    nominal.addEventListener('keyup', function(e)
    {
        nominal.value = formatRupiah(this.value);
    }); 

    var enam = document.getElementById('enam');
    enam.addEventListener('keyup', function(e)
    {
        enam.value = formatRupiah(this.value);
    }); 

    var duabelas = document.getElementById('duabelas');
    duabelas.addEventListener('keyup', function(e)
    {
        duabelas.value = formatRupiah(this.value);
    }); 

    var delapanbelas = document.getElementById('delapanbelas');
    delapanbelas.addEventListener('keyup', function(e)
    {
        delapanbelas.value = formatRupiah(this.value);
    }); 

    var duaempat = document.getElementById('duaempat');
    duaempat.addEventListener('keyup', function(e)
    {
        duaempat.value = formatRupiah(this.value);
    }); 

    var angsuran = document.getElementById('angsuran');
    angsuran.addEventListener('keyup', function(e)
    {
        angsuran.value = formatRupiah(this.value);
    });
    
    /* Fungsi */
    function formatRupiah(angka, prefix)
    {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split    = number_string.split(','),
            sisa     = split[0].length % 3,
            rupiah     = split[0].substr(0, sisa),
            ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
            
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }
        
        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    } 

</script> 

<script type="text/javascript">    
    <?php echo $jspermohonan; ?>  
        function pinjaman(nominal){  
        document.getElementById('nominal').value = dtp[nominal].nominal;  
        document.getElementById('enam').value = dtp[nominal].enam;  
        document.getElementById('duabelas').value = dtp[nominal].duabelas;  
        document.getElementById('delapanbelas').value = dtp[nominal].delapanbelas;   
        document.getElementById('duaempat').value = dtp[nominal].duaempat;    
    };  
</script>