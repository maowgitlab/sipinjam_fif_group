<div class="row">
    
    <div class="col-12">
        <div class="card border border-primary">
            <div class="card-body">
                <h4 class="card-title">Tambah Data Pinajaman</h4> <hr>

                <form class="needs-validation" novalidate method="post" enctype="multipart/form-data">          
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-2">
                                <label class="form-label">Nominal Pinjaman</label>
                                <input type="text" class="form-control" name="nominal" id="nominal" onkeypress="return angka(event);" required autofocus> 
                            </div>
                        </div>  
                        <div class="col-md-12">
                            <div class="mb-2">
                                <label class="form-label">Angsuran 6 Bulan</label>
                                <input type="text" class="form-control" name="enam" id="enam" onkeypress="return angka(event);" required autofocus> 
                            </div>
                        </div>  
                        <div class="col-md-12">
                            <div class="mb-2">
                                <label class="form-label">Angsuran 12 Bulan</label>
                                <input type="text" class="form-control" name="duabelas" id="duabelas" onkeypress="return angka(event);" required autofocus> 
                            </div>
                        </div>  
                        <div class="col-md-12">
                            <div class="mb-2">
                                <label class="form-label">Angsuran 18 Bulan</label>
                                <input type="text" class="form-control" name="delapanbelas" id="delapanbelas" onkeypress="return angka(event);" required autofocus> 
                            </div>
                        </div>  
                        <div class="col-md-12">
                            <div class="mb-2">
                                <label class="form-label">Angsuran 24 Bulan</label>
                                <input type="text" class="form-control" name="duaempat" id="duaempat" onkeypress="return angka(event);" required autofocus> 
                            </div>
                        </div>  
                        <div class="col-md-12">
                            <div class="mb-2"> 
                                <button name="simpan" class="btn btn-info btn-sm waves-effect waves-light">Simpan</button>
                                <a href="?page=pinjaman" class="btn btn-danger btn-sm waves-effect waves-light">Kembali</a> 
                            </div>
                        </div>           
                    </div>                
                </form>
                <?php 
                if (isset($_POST['simpan'])) 
                {
                    $nominal1     = $_POST['nominal'];
                    $nominal      = str_replace(".", "", $nominal1); 

                    $enam1     = $_POST['enam'];
                    $enam      = str_replace(".", "", $enam1); 

                    $duabelas1     = $_POST['duabelas'];
                    $duabelas      = str_replace(".", "", $duabelas1); 

                    $delapanbelas1     = $_POST['delapanbelas'];
                    $delapanbelas      = str_replace(".", "", $delapanbelas1); 

                    $duaempat1     = $_POST['duaempat'];
                    $duaempat      = str_replace(".", "", $duaempat1);  

                    {
                        $con->query("INSERT INTO pinjaman (nominal,enam,duabelas,delapanbelas,duaempat) VALUES ('$nominal','$enam','$duabelas','$delapanbelas','$duaempat') ");

                        echo "<script>alert('Berhasil disimpan');</script>";
                        echo "<script>location='?page=pinjaman';</script>";
                         
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