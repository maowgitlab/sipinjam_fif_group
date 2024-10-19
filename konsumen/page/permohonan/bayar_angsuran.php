<?php 
$no_permohonan = $_GET['no_permohonan'];

// Ambil data permohonan
$ambil  = $con->query("SELECT * FROM permohonan_cair NATURAL JOIN permohonan NATURAL JOIN konsumen WHERE no_permohonan ='$no_permohonan'");
$pecah  = $ambil->fetch_assoc();

// Hitung jumlah pembayaran yang telah dilakukan
$jumlah_pembayaran_query = $con->query("SELECT COUNT(*) AS jumlah FROM pembayaran WHERE no_permohonan = '$no_permohonan'");
$jumlah_pembayaran = $jumlah_pembayaran_query->fetch_assoc()['jumlah'];

// Set pembayaran ke berikutnya
$pembayaran_ke = $jumlah_pembayaran + 1;

// Hitung tanggal jatuh tempo baru
$tanggal_sekarang = $pecah['jatuh_tempo'];
$jumlah_hari_kedepan = 30; // Atau sesuai kebutuhan
$tanggal_berikutnya = date('Y-m-d', strtotime('+'.$jumlah_hari_kedepan .'days', strtotime($tanggal_sekarang)));
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
                            <label class="col-sm-2 col-form-label">Pinjaman</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="tgl_permohonan" value="<?php echo number_format($pecah['jum_pinjaman'], 0, ',','.') ?>" readonly required>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label class="col-sm-2 col-form-label">Tenor</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="waktu_permohonan" value="<?php echo $pecah['tenor_pinjaman'] ?> Bulan" readonly required>
                            </div>
                        </div> 
                        <div class="row mb-2">
                            <label class="col-sm-2 col-form-label">Angsuran</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="waktu_permohonan" value="<?php echo number_format($pecah['angsuran'], 0, ',','.') ?> /Bulan" readonly required>
                            </div>
                        </div> 
                        <div class="col-md-12">
                            <div class="mb-2">
                                <label class="form-label">&nbsp;</label> 
                            </div>
                        </div> 

                        <div class="row mb-2">
                            <label class="col-sm-2 col-form-label">Tanggal Pembayaran</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="date" name="tgl_pembayaran" value="<?php echo date('Y-m-d') ?>" required>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label class="col-sm-2 col-form-label">Bayar</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="nominal_bayar" value="<?php echo number_format($pecah['angsuran'], 0, ',','.') ?>" required>
                            </div>
                        </div>  
                        <div class="row mb-2">
                            <label class="col-sm-2 col-form-label">Pembayaran Ke</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="bayar_ke" value="<?php echo $pembayaran_ke; ?>" required>
                            </div>
                        </div> 
                        <div class="row mb-2" hidden>
                            <label class="col-sm-2 col-form-label">Tanggal Berikutnya</label>
                            <div class="col-sm-10">
                                <input class='form-control' type='text' readonly value='<?php echo $tanggal_berikutnya; ?>' name='jatuh_tempo' required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-2"> 
                                <button name="simpan" class="btn btn-info btn-sm waves-effect waves-light">Simpan</button>
                                <a href="?page=permohonan&aksi=pembayaran" class="btn btn-danger btn-sm waves-effect waves-light">Kembali</a> 
                            </div>
                        </div>           
                    </div>                
                </form>
                <?php 
                if (isset($_POST['simpan'])) 
                {
                    $no_permohonan = $_POST['no_permohonan']; 
                    $jatuh_tempo = $_POST['jatuh_tempo']; 
                    $tgl_pembayaran = $_POST['tgl_pembayaran']; 
                    $nominal_bayar1 = $_POST['nominal_bayar'];
                    $nominal_bayar = str_replace(".", "", $nominal_bayar1);
                    $bayar_ke = $_POST['bayar_ke'];       

                    $con->query("INSERT INTO pembayaran (no_permohonan, tgl_pembayaran, nominal_bayar, bayar_ke) VALUES ('$no_permohonan', '$tgl_pembayaran', '$nominal_bayar', '$bayar_ke')");
                    $con->query("UPDATE permohonan_cair SET jatuh_tempo='$jatuh_tempo' WHERE no_permohonan='$no_permohonan'"); 

                    echo "<script>alert('Data berhasil disimpan.');</script>";
                    echo "<script>location='?page=permohonan&aksi=pembayaran';</script>";
                }
                ?>

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
