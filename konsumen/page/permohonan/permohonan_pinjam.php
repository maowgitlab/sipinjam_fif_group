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
                                <label class="col-sm-4 col-form-label">Harga Pasar</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" name="harga_pasar" id="harga_pasar" onkeypress="return angka(event);" onkeyup="hitung();" required>
                                </div>
                            </div>  
                            <div class="row mb-2">
                                <label class="col-sm-4 col-form-label">Persen</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" name="persenan" id="persenan" onkeyup="hitung();" required>
                                </div>
                            </div> 
                            <div class="row mb-2">
                                <label class="col-sm-4 col-form-label">Harga Maksimal</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" name="harga_maksimal" id="harga_maksimal" onkeypress="return angka(event);" onkeyup="hitung();" required>
                                </div>
                            </div>  
                            <div class="row mb-2">
                                <label class="col-sm-4 col-form-label">Tenor Pinjaman</label>
                                <div class="col-sm-8">
                                    <select class="form-control" name="tenor_pinjaman" id="tenor_pinjaman" onkeyup="hitung();" required>
                                        <option selected disabled>Pilih</option>
                                        <option value="12">12 Bulan</option>
                                        <option value="24">24 Bulan</option>  
                                        <option value="36">36 Bulan</option>  
                                        <option value="48">48 Bulan</option>  
                                        <option value="60">60 Bulan</option>    
                                    </select>
                                </div>
                            </div> 
                            <div class="row mb-2">
                                <label class="col-sm-4 col-form-label">Bayar Bulanan</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" name="bayar_bulanan" id="bayar_bulanan" onkeypress="return angka(event);" onkeyup="hitung();" required>
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

                    $harga_pasar1        = $_POST['harga_pasar'];
                    $harga_pasar         = str_replace(".", "", $harga_pasar1);

                    $harga_maksimal1        = $_POST['harga_maksimal'];
                    $harga_maksimal         = str_replace(".", "", $harga_maksimal1);

                    $bayar_bulanan1        = $_POST['bayar_bulanan'];
                    $bayar_bulanan         = str_replace(".", "", $bayar_bulanan1);

                    $persenan       = $_POST['persenan']; 
                    $tenor_pinjaman       = $_POST['tenor_pinjaman'];     

                    {
                        $con->query("INSERT INTO permohonan_cair (no_permohonan,harga_pasar,persenan,harga_maksimal,tenor_pinjaman,bayar_bulanan) VALUES ('$no_permohonan','$harga_pasar','$persenan','$harga_maksimal','$tenor_pinjaman','$bayar_bulanan') ");

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

    var harga_pasar = document.getElementById('harga_pasar');
    harga_pasar.addEventListener('keyup', function(e)
    {
        harga_pasar.value = formatRupiah(this.value);
    });

    var harga_maksimal = document.getElementById('harga_maksimal');
    harga_maksimal.addEventListener('keyup', function(e)
    {
        harga_maksimal.value = formatRupiah(this.value);
    });

    var bayar_bulanan = document.getElementById('bayar_bulanan');
    bayar_bulanan.addEventListener('keyup', function(e)
    {
        bayar_bulanan.value = formatRupiah(this.value);
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

    function hitung()
    {
        //tunjangan
        var harga_pasar = document.getElementById('harga_pasar').value;
        var persenan = document.getElementById('persenan').value;  
        var harga_maksimal = document.getElementById('harga_maksimal').value;
        var tenor_pinjaman = document.getElementById('tenor_pinjaman').value;   
        var bayar_bulanan = document.getElementById('bayar_bulanan').value; 

        if(harga_pasar=="")
        {
            var harga_pasar = 0;
        }else{
            var harga_pasar = parseInt(harga_pasar.split(".").join(""));
        }

        if(persenan=="")
        {
            var persenan =0;
        }else{
            var persenan = parseInt(persenan.split(".").join(""));
        }

        if(harga_maksimal=="")
        {
            var harga_maksimal =0;
        }else{
            var harga_maksimal = parseInt(harga_maksimal.split(".").join(""));
        }

        if(tenor_pinjaman=="")
        {
            var tenor_pinjaman =0;
        }else{
            var tenor_pinjaman = parseInt(tenor_pinjaman.split(".").join(""));
        }

        if(bayar_bulanan=="")
        {
            var bayar_bulanan =0;
        }else{
            var bayar_bulanan = parseInt(bayar_bulanan.split(".").join(""));
        } 


        var harga_maksimal = harga_pasar*persenan/100;

        if(!isNaN(harga_maksimal))
        {
            document.getElementById('harga_maksimal').value = harga_maksimal.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.');
        } 

        var bayar_bulanan = harga_maksimal/tenor_pinjaman;
        if(!isNaN(bayar_bulanan))
        {
            document.getElementById('bayar_bulanan').value = bayar_bulanan.toFixed().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.');
        }  
    
    }

</script>  Math.round